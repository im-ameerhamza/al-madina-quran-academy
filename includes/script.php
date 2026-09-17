    <!-- Scripts are inserted in order with async=false: they download in
         parallel, run in sequence, and never block HTML parsing. Desktop-only
         plugins (counter, WOW, GSAP, Lenis) are never requested on mobile. -->
    <script>
      (function () {
        var desktop = window.matchMedia("(min-width: 992px)").matches;
        var scripts = [<?= json_encode(asset('assets/js/vendor/jquery-3.7.1.min.js')); ?>];

        <?php if (($enableSwiper ?? true) !== false): ?>
        scripts.push(<?= json_encode(asset('assets/js/swiper.min.js')); ?>);
        <?php endif; ?>

        if (desktop) {
          <?php if (($enableCounter ?? true) !== false): ?>
          scripts.push(<?= json_encode(asset('assets/js/jquery.counterup.min.js')); ?>);
          <?php endif; ?>
          <?php if (!empty($enableAdvancedAnimations)): ?>
          scripts.push(
            <?= json_encode(asset('assets/js/gsap.min.js')); ?>,
            <?= json_encode(asset('assets/js/ScrollTrigger.min.js')); ?>,
            <?= json_encode(asset('assets/js/SplitText.js')); ?>,
            <?= json_encode(asset('assets/js/lenis.min.js')); ?>
          );
          <?php endif; ?>
          scripts.push(<?= json_encode(asset('assets/js/wow.min.js')); ?>);
        }

        scripts.push(<?= json_encode(asset('assets/js/main.min.js')); ?>);

        scripts.forEach(function (src) {
          var script = document.createElement("script");
          script.src = src;
          script.async = false;
          document.body.appendChild(script);
        });
      })();
    </script>
