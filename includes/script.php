  <!-- Jquery -->
    <script defer src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <?php if (($enableSwiper ?? true) !== false): ?>
    <!-- Swiper Slider -->
    <script defer src="assets/js/swiper-bundle.min.js"></script>
    <?php endif; ?>
    <!-- Magnific Popup -->
    <script defer src="assets/js/jquery.magnific-popup.min.js"></script>
    <?php if (($enableCounter ?? true) !== false): ?>
    <!-- Counter Up -->
    <script defer src="assets/js/jquery.counterup.min.js"></script>
    <?php endif; ?>

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
    <script defer src="assets/js/wow.min.js"></script>

    <!-- Main Js File -->
    <script defer src="assets/js/main.js"></script>
