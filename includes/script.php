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
