<?php if (!empty($isMobileVisitor)): ?>
    <!-- Keep non-critical JavaScript out of the mobile LCP network path. -->
    <script>
      (() => {
        const loadScript = (src) => new Promise((resolve, reject) => {
          const script = document.createElement("script");
          script.src = src;
          script.async = true;
          script.onload = resolve;
          script.onerror = reject;
          document.body.appendChild(script);
        });

        const loadMobileScripts = () => {
          loadScript("assets/js/vendor/jquery-3.7.1.min.js")
            .then(() => Promise.all([
              loadScript("assets/js/swiper-bundle.min.js"),
              loadScript("assets/js/jquery.magnific-popup.min.js"),
              loadScript("assets/js/jquery.counterup.min.js"),
              loadScript("assets/js/wow.min.js"),
            ]))
            .then(() => loadScript("assets/js/main.js"))
            .catch((error) => console.error("Unable to load site scripts", error));
        };

        if (document.readyState === "complete") {
          loadMobileScripts();
        } else {
          window.addEventListener("load", loadMobileScripts, { once: true });
        }
      })();
    </script>
<?php else: ?>
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Slider -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>

    <?php if (!empty($enableAdvancedAnimations)): ?>
    <!-- Advanced animation and smooth-scroll scripts are desktop-only. -->
    <script>
      if (window.matchMedia("(min-width: 992px)").matches) {
        document.write('<script src="assets/js/gsap.min.js"><\/script>');
        document.write('<script src="assets/js/ScrollTrigger.min.js"><\/script>');
        document.write('<script src="assets/js/SplitText.js"><\/script>');
        document.write('<script src="assets/js/lenis.min.js"><\/script>');
      }
    </script>
    <?php endif; ?>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
<?php endif; ?>
