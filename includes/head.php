
<?php
    if (!function_exists('asset')) {
        // Append the file's modification time so long-cached assets refresh after a deploy.
        function asset($path)
        {
            $file = __DIR__ . '/../' . ltrim($path, '/');
            return is_file($file) ? $path . '?v=' . filemtime($file) : $path;
        }
    }

    $siteUrl = 'https://almadinaquranacademy.org';
    $requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $canonicalUrl = $siteUrl . $requestPath;
    $pageImage = $pageImage ?? 'assets/img/hero/logo_1.webp';
    $pageImageUrl = preg_match('#^https?://#i', $pageImage)
        ? $pageImage
        : $siteUrl . '/' . ltrim($pageImage, '/');
?>
    <meta charset="utf-8">
    <!-- Keep relative assets rooted at the site on multi-segment clean URLs. -->
    <base href="/">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <meta name="author" content="Al Madinah Quran Academy">

    <meta
        name="description"
        content="<?= htmlspecialchars($pageDescription) ?>"
    >

    <meta
        name="keywords"
        content="<?= htmlspecialchars($pageKeywords) ?>"
    >

    <meta name="robots" content="<?= htmlspecialchars($pageRobots ?? 'index, follow', ENT_QUOTES, 'UTF-8'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php if (($pageRobots ?? '') !== 'noindex, nofollow'): ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:site_name" content="Al Madinah Quran Academy">
    <meta property="og:image" content="<?= htmlspecialchars($pageImageUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($pageImageUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "Al Madinah Quran Academy",
        "url": "https://almadinaquranacademy.org",
        "logo": "https://almadinaquranacademy.org/assets/img/hero/logo_1.webp",
        "description": "Online Quran classes with experienced tutors for students of all ages."
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" href="<?= asset('assets/img/hero/logo_1-192.webp'); ?>" type="image/webp" sizes="192x192">

    <meta name="theme-color" content="#ffffff">

    <!-- Discover the page's LCP image before fonts and styles. Pages with a
         smaller mobile banner preload only the file that viewport will use. -->
    <?php if (!empty($pagePreloadImage)): ?>
    <?php if (!empty($pagePreloadImageMobile)): ?>
    <link rel="preload" as="image" type="image/webp" href="<?= htmlspecialchars($pagePreloadImageMobile, ENT_QUOTES, 'UTF-8'); ?>" media="(max-width: 767px)" fetchpriority="high">
    <link rel="preload" as="image" type="image/webp" href="<?= htmlspecialchars($pagePreloadImage, ENT_QUOTES, 'UTF-8'); ?>" media="(min-width: 768px)" fetchpriority="high">
    <?php else: ?>
    <link rel="preload" as="image" type="image/webp" href="<?= htmlspecialchars($pagePreloadImage, ENT_QUOTES, 'UTF-8'); ?>" fetchpriority="high">
    <?php endif; ?>
    <?php endif; ?>

    <!-- Self-hosted fonts: no extra connections to Google before text can render. -->
    <link rel="preload" as="font" type="font/woff2" href="assets/fonts/google/inter-latin.woff2" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="assets/fonts/google/playfair-display-latin.woff2" crossorigin>

    <!-- One render-blocking stylesheet, built by tools/build.mjs from
         bootstrap, style.css, Font Awesome, Swiper and fonts.css. -->
    <link rel="stylesheet" href="<?= asset('assets/css/app.min.css'); ?>">

    <!-- Mobile paints content immediately; only decorative entrance motion is skipped. -->
    <style>
      @media (max-width: 991px) {
        [data-ani], .wow {
          animation: none !important;
          transition-delay: 0s !important;
          opacity: 1 !important;
          visibility: visible !important;
          transform: none !important;
        }
      }
    </style>

    <?php if (!empty($pageBanner) && !empty($pagePreloadImage)): ?>
    <style>
      .breadcumb-wrapper {
        background-image: url("/<?= htmlspecialchars($pagePreloadImage, ENT_QUOTES, 'UTF-8'); ?>");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }
      <?php if (!empty($pagePreloadImageMobile)): ?>
      @media (max-width: 767px) {
        .breadcumb-wrapper {
          background-image: url("/<?= htmlspecialchars($pagePreloadImageMobile, ENT_QUOTES, 'UTF-8'); ?>");
        }
      }
      <?php endif; ?>
    </style>
    <?php endif; ?>
