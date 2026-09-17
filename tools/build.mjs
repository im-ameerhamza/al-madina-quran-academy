// Builds the production assets referenced by includes/head.php and includes/script.php.
//
//   cd tools && npm install && npm run build
//
// Re-run after editing any .php page, assets/css/style.css, assets/css/fonts.css or
// assets/js/main.js, then commit the generated files:
//   assets/css/app.min.css, assets/js/main.min.js, assets/js/swiper.min.js,
//   assets/fonts/fontawesome/*-subset.woff2
import fs from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";
import { PurgeCSS } from "purgecss";
import { minify as minifyCss } from "csso";
import { minify as minifyJs } from "terser";
import { build as esbuild } from "esbuild";
import subsetFont from "subset-font";

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), "..");
const r = (...p) => path.join(root, ...p);
const read = (p) => fs.readFileSync(r(p), "utf8");
const kb = (n) => `${(n / 1024).toFixed(1)} KB`;
const report = (label, before, after) =>
  console.log(`${label.padEnd(40)} ${kb(before).padStart(9)} -> ${kb(after).padStart(9)}`);

// ---------------------------------------------------------------- Swiper
const swiperOut = r("assets/js/swiper.min.js");
await esbuild({
  entryPoints: [r("tools/swiper-entry.js")],
  bundle: true,
  minify: true,
  format: "iife",
  target: "es2018",
  outfile: swiperOut,
  legalComments: "none",
  logLevel: "warning",
});
report("assets/js/swiper.min.js", 0, fs.statSync(swiperOut).size);

// ---------------------------------------------------------------- main.js
const mainSrc = read("assets/js/main.js");
const mainMin = await minifyJs(mainSrc, { compress: true, mangle: true, ecma: 2018 });
fs.writeFileSync(r("assets/js/main.min.js"), mainMin.code);
report("assets/js/main.min.js", mainSrc.length, mainMin.code.length);

// ---------------------------------------------------------------- CSS
// Order matches the old cascade: bootstrap, style.css, then the plugin styles
// that used to load after them.
const swiperCss = ["swiper.css", "modules/a11y.css", "modules/navigation.css", "modules/pagination.css", "modules/effect-fade.css"]
  .map((f) => fs.readFileSync(r("tools/node_modules/swiper", f), "utf8"))
  .join("\n");
const cssSources = [
  read("tools/src/css/bootstrap.min.css"),
  read("assets/css/style.css").replace(/^﻿/, "").replace(/@charset "UTF-8";/i, ""),
  read("tools/src/css/fontawesome.min.css"),
  swiperCss,
  read("assets/css/fonts.css"),
];
const rawCss = '@charset "UTF-8";\n' + cssSources.join("\n");

const [purged] = await new PurgeCSS().purge({
  content: [
    r("*.php"),
    r("includes/*.php"),
    r("assets/js/main.js"),
    r("assets/js/blog/*.js"),
    r("assets/js/wow.min.js"),
    r("assets/js/jquery.counterup.min.js"),
    r("assets/js/jquery.magnific-popup.min.js"),
    r("assets/js/SplitText.js"),
    r("assets/js/lenis.min.js"),
    swiperOut,
  ].map((p) => p.replace(/\\/g, "/")),
  css: [{ raw: rawCss }],
  // Classes that scripts build from string fragments at runtime.
  safelist: {
    standard: ["sticky", "show", "active", "background-image", "bg-mask", "animated", "is-invalid", "success", "error"],
    greedy: [/swiper/, /^mfp-/, /^lenis/, /^split-/, /^th-(body-visible|submenu|item-has-children|active|mean-expand|open)$/],
  },
  fontFace: false,
  // Keep every @keyframes: the entrance animations pick their animation-name
  // through a CSS variable (--animation-name), which PurgeCSS cannot follow, and
  // dropping those keyframes leaves the animated text stuck at opacity 0.
  keyframes: false,
  variables: false,
});
const appCss = minifyCss(purged.css, { restructure: false, comments: false }).css;

// ---------------------------------------------------------------- Font Awesome subset
// Keep only the glyphs referenced by the bundled CSS (icon classes and ::before rules).
// csso writes the glyphs as literal private-use characters, the sources use escapes.
const codepoints = new Set();
for (const [, value] of appCss.matchAll(/content:\s*["']([^"']{1,8})["']/gi)) {
  const text = value.replace(/\\([0-9a-f]{4,5})\s?/gi, (_, hex) => String.fromCodePoint(parseInt(hex, 16)));
  for (const ch of text) {
    const cp = ch.codePointAt(0);
    if (cp >= 0xe000 && cp <= 0xf8ff) codepoints.add(cp);
  }
}
const glyphs = String.fromCodePoint(...codepoints);
const fontDir = r("assets/fonts/fontawesome");
fs.mkdirSync(fontDir, { recursive: true });
let finalCss = appCss;
for (const [source, target] of [
  ["fa-solid-900.woff2", "fa-solid-subset.woff2"],
  ["fa-brands-400.woff2", "fa-brands-subset.woff2"],
]) {
  const full = fs.readFileSync(r("tools/src/fonts", source));
  const subset = await subsetFont(full, glyphs, { targetFormat: "woff2" });
  fs.writeFileSync(path.join(fontDir, target), subset);
  report(`assets/fonts/fontawesome/${target}`, full.length, subset.length);
  finalCss = finalCss.split(`fontawesome/${source}`).join(`fontawesome/${target}`);
}

fs.writeFileSync(r("assets/css/app.min.css"), finalCss);
report("assets/css/app.min.css", rawCss.length, finalCss.length);
console.log(`Font Awesome glyphs kept: ${codepoints.size}`);
