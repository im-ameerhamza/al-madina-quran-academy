(function ($) {
  "use strict";

  /*---------- 01. On Load Function ----------*/
  $(window).on("load", function () {
    $(".preloader").fadeOut();
  });

  /*---------- 02. Preloader ----------*/
  if ($(".preloader").length > 0) {
    $(".preloaderCls").each(function () {
      $(this).on("click", function (e) {
        e.preventDefault();
        $(".preloader").css("display", "none");
      });
    });
  }

  /*---------- 03. Mobile Menu Active ----------*/
  $.fn.thmobilemenu = function (options) {
    var opt = $.extend(
      {
        menuToggleBtn: ".th-menu-toggle",
        bodyToggleClass: "th-body-visible",
        subMenuClass: "th-submenu",
        subMenuParent: "th-item-has-children",
        subMenuParentToggle: "th-active",
        meanExpandClass: "th-mean-expand",
        appendElement: '<span class="th-mean-expand"></span>',
        subMenuToggleClass: "th-open",
        toggleSpeed: 400,
      },
      options,
    );

    return this.each(function () {
      var menu = $(this); // Select menu

      // Menu Show & Hide
      function menuToggle() {
        menu.toggleClass(opt.bodyToggleClass);

        // collapse submenu on menu hide or show
        var subMenu = "." + opt.subMenuClass;
        $(subMenu).each(function () {
          if ($(this).hasClass(opt.subMenuToggleClass)) {
            $(this).removeClass(opt.subMenuToggleClass);
            $(this).css("display", "none");
            $(this).parent().removeClass(opt.subMenuParentToggle);
          }
        });
      }

      // Class Set Up for every submenu
      menu.find("li").each(function () {
        var submenu = $(this).find("ul");
        submenu.addClass(opt.subMenuClass);
        submenu.css("display", "none");
        submenu.parent().addClass(opt.subMenuParent);
        submenu.prev("a").append(opt.appendElement);
        submenu.next("a").append(opt.appendElement);
      });

      // Toggle Submenu
      function toggleDropDown($element) {
        if ($($element).next("ul").length > 0) {
          $($element).parent().toggleClass(opt.subMenuParentToggle);
          $($element).next("ul").slideToggle(opt.toggleSpeed);
          $($element).next("ul").toggleClass(opt.subMenuToggleClass);
        } else if ($($element).prev("ul").length > 0) {
          $($element).parent().toggleClass(opt.subMenuParentToggle);
          $($element).prev("ul").slideToggle(opt.toggleSpeed);
          $($element).prev("ul").toggleClass(opt.subMenuToggleClass);
        }
      }

      // Submenu toggle Button
      var expandToggler = "." + opt.meanExpandClass;
      $(expandToggler).each(function () {
        $(this).on("click", function (e) {
          e.preventDefault();
          toggleDropDown($(this).parent());
        });
      });

      // Menu Show & Hide On Toggle Btn click
      $(opt.menuToggleBtn).each(function () {
        $(this).on("click", function () {
          menuToggle();
        });
      });

      // Hide Menu On out side click
      menu.on("click", function (e) {
        e.stopPropagation();
        menuToggle();
      });

      // Stop Hide full menu on menu click
      menu.find("div").on("click", function (e) {
        e.stopPropagation();
      });
    });
  };

  $(".th-menu-wrapper").thmobilemenu();

  /*---------- 04. Sticky fix ----------*/
  $(window).scroll(function () {
    var topPos = $(this).scrollTop();
    if (topPos > 500) {
      $(".sticky-wrapper").addClass("sticky");
    } else {
      $(".sticky-wrapper").removeClass("sticky");
    }
  });

  /*----------- 04.1.  One Page Nav ----------*/
  function onePageNav(element) {
    if ($(element).length > 0) {
      $(element).each(function () {
        var link = $(this).find("a");
        $(this)
          .find(link)
          .each(function () {
            $(this).on("click", function () {
              var target = $(this.getAttribute("href"));
              if (target.length) {
                event.preventDefault();
                $("html, body")
                  .stop()
                  .animate(
                    {
                      scrollTop: target.offset().top - 10,
                    },
                    1000,
                  );
              }
            });
          });
      });
    }
  }
  onePageNav(".onepage-nav");
  onePageNav(".scroll-down");

  /*---------- 05. Scroll To Top ----------*/
  // progressAvtivation
  if ($(".scroll-top").length) {
    var scrollTopbtn = document.querySelector(".scroll-top");
    var progressPath = document.querySelector(".scroll-top path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    requestAnimationFrame(function () {
      progressPath.style.transition = progressPath.style.WebkitTransition =
        "stroke-dashoffset 10ms linear";
    });
    var progressTicking = false;
    var updateProgress = function () {
      var scroll = window.scrollY || document.documentElement.scrollTop;
      var height =
        document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var progress = height > 0
        ? pathLength - (scroll * pathLength) / height
        : pathLength;
      progressPath.style.strokeDashoffset = progress;
      scrollTopbtn.classList.toggle("show", scroll > 50);
      progressTicking = false;
    };
    updateProgress();
    window.addEventListener(
      "scroll",
      function () {
        if (!progressTicking) {
          progressTicking = true;
          requestAnimationFrame(updateProgress);
        }
      },
      { passive: true },
    );
    jQuery(scrollTopbtn).on("click", function (event) {
      event.preventDefault();

      jQuery("html, body").stop(true);

      if (typeof lenis !== "undefined" && lenis) {
        lenis.scrollTo(0, { lerp: 0.07 });
      } else {
        window.scrollTo({ top: 0, behavior: "smooth" });
      }

      return false;
    });
  }

  /*---------- 06. Set Background Image Color & Mask ----------*/
  if ($("[data-bg-src]").length > 0) {
    var loadBackground = function (element) {
      var $element = $(element);
      var src = $element.attr("data-bg-src");

      if (!src) return;

      $element
        .css("background-image", "url(" + src + ")")
        .removeAttr("data-bg-src")
        .addClass("background-image");
    };

    if ("IntersectionObserver" in window) {
      var backgroundObserver = new IntersectionObserver(
        function (entries, observer) {
          entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;

            loadBackground(entry.target);
            observer.unobserve(entry.target);
          });
        },
        { rootMargin: "300px 0px" },
      );

      $("[data-bg-src]").each(function () {
        backgroundObserver.observe(this);
      });
    } else {
      $("[data-bg-src]").each(function () {
        loadBackground(this);
      });
    }
  }

  if ($("[data-bg-color]").length > 0) {
    $("[data-bg-color]").each(function () {
      var color = $(this).attr("data-bg-color");
      $(this).css("background-color", color);
      $(this).removeAttr("data-bg-color");
    });
  }

  $("[data-border]").each(function () {
    var borderColor = $(this).data("border");
    $(this).css("--th-border-color", borderColor);
  });

  if ($("[data-mask-src]").length > 0) {
    $("[data-mask-src]").each(function () {
      var mask = $(this).attr("data-mask-src");
      $(this).css({
        "mask-image": "url(" + mask + ")",
        "-webkit-mask-image": "url(" + mask + ")",
      });
      $(this).addClass("bg-mask");
      $(this).removeAttr("data-mask-src");
    });
  }

  /*----------- 07. Global Slider ----------*/

  $(".th-slider").each(function () {
    var thSlider = $(this);
    var settings = $(this).data("slider-options");

    // Store references to the navigation Slider
    var prevArrow = thSlider.find(".slider-prev");
    var nextArrow = thSlider.find(".slider-next");
    var paginationElN = thSlider.find(".slider-pagination.pagi-number");
    var paginationExternel = thSlider
      .siblings(".slider-controller")
      .find(".slider-pagination");

    var paginationEl = paginationExternel.length
      ? paginationExternel.get(0)
      : thSlider.find(".slider-pagination").get(0);

    var paginationType = settings["paginationType"]
      ? settings["paginationType"]
      : "bullets";

    var autoplayconditon = settings["autoplay"];

    var sliderDefault = {
      slidesPerView: 1,
      spaceBetween: settings["spaceBetween"] ? settings["spaceBetween"] : 24,
      loop: settings["loop"] == false ? false : true,
      speed: settings["speed"] ? settings["speed"] : 1000,
      autoplay: autoplayconditon
        ? autoplayconditon
        : { delay: 6000, disableOnInteraction: false },
      navigation: {
        nextEl: nextArrow.get(0),
        prevEl: prevArrow.get(0),
      },
      pagination: {
        el: paginationEl,
        type: paginationType,
        clickable: true,
        renderBullet: function (index, className) {
          var number = index + 1;
          var formattedNumber = number < 10 ? "0" + number : number;
          if (paginationElN.length) {
            return (
              '<span class="' +
              className +
              ' number">' +
              formattedNumber +
              "</span>"
            );
          } else {
            return (
              '<span class="' +
              className +
              '" role="button" aria-label="Go to Slide ' +
              formattedNumber +
              '"></span>'
            );
          }
        },
        formatFractionCurrent: function (number) {
          if (number < 10) {
            return "0" + number;
          } else {
            return number;
          }
        },
        formatFractionTotal: function (number) {
          if (number < 10) {
            return "0" + number;
          } else {
            return number;
          }
        },
      },

      on: {
        slideChange: function () {
          setTimeout(function () {
            swiper.params.mousewheel.releaseOnEdges = false;
          }, 500);
        },
        reachEnd: function () {
          setTimeout(function () {
            swiper.params.mousewheel.releaseOnEdges = true;
          }, 750);
        },
      },
    };

    var options = JSON.parse(thSlider.attr("data-slider-options"));
    options = $.extend({}, sliderDefault, options);
    var swiper = new Swiper(thSlider.get(0), options); // Assign the swiper variable

    if ($(".slider-area").length > 0) {
      $(".slider-area").closest(".container").parent().addClass("arrow-wrap");
    }
  });

  function animationProperties() {
    $("[data-ani]").each(function () {
      var animationName = $(this).data("ani");
      $(this).addClass(animationName);
    });

    $("[data-ani-delay]").each(function () {
      var delayTime = $(this).data("ani-delay");
      $(this).css("animation-delay", delayTime);
    });
  }
  animationProperties();

  // Add click event handlers for external slider arrows based on data attributes
  $("[data-slider-prev], [data-slider-next]").on("click", function () {
    var sliderSelector =
      $(this).data("slider-prev") || $(this).data("slider-next");
    var targetSlider = $(sliderSelector);

    if (targetSlider.length) {
      var swiper = targetSlider[0].swiper;

      if (swiper) {
        if ($(this).data("slider-prev")) {
          swiper.slidePrev();
        } else {
          swiper.slideNext();
        }
      }
    }
  });
  /*-------------- 08. Slider Tab -------------*/
  $.fn.activateSliderThumbs = function (options) {
    var opt = $.extend(
      {
        sliderTab: false,
        tabButton: ".tab-btn",
      },
      options,
    );

    return this.each(function () {
      var $container = $(this);
      var $thumbs = $container.find(opt.tabButton);
      var $line = $('<span class="indicator"></span>').appendTo($container);

      var sliderSelector = $container.data("slider-tab");
      var $slider = $(sliderSelector);

      var swiper = $slider[0].swiper;

      $thumbs.on("click", function (e) {
        e.preventDefault();
        var clickedThumb = $(this);

        clickedThumb.addClass("active").siblings().removeClass("active");
        linePos(clickedThumb, $container);

        if (opt.sliderTab) {
          var slideIndex = clickedThumb.index();
          swiper.slideTo(slideIndex);
        }
      });

      if (opt.sliderTab) {
        swiper.on("slideChange", function () {
          var activeIndex = swiper.realIndex;
          var $activeThumb = $thumbs.eq(activeIndex);

          $activeThumb.addClass("active").siblings().removeClass("active");
          linePos($activeThumb, $container);
        });

        var initialSlideIndex = swiper.activeIndex;
        var $initialThumb = $thumbs.eq(initialSlideIndex);
        $initialThumb.addClass("active").siblings().removeClass("active");
        linePos($initialThumb, $container);
      }

      function linePos($activeThumb) {
        var thumbOffset = $activeThumb.position();

        var marginTop = parseInt($activeThumb.css("margin-top")) || 0;
        var marginLeft = parseInt($activeThumb.css("margin-left")) || 0;

        $line.css("--height-set", $activeThumb.outerHeight() + "px");
        $line.css("--width-set", $activeThumb.outerWidth() + "px");
        $line.css("--pos-y", thumbOffset.top + marginTop + "px");
        $line.css("--pos-x", thumbOffset.left + marginLeft + "px");
      }
    });
  };

  if ($(".hero-thumb").length) {
    $(".hero-thumb").activateSliderThumbs({
      sliderTab: true,
      tabButton: ".tab-btn",
    });
  }

  if ($(".testi-thumb").length) {
    $(".testi-thumb").activateSliderThumbs({
      sliderTab: true,
      tabButton: ".tab-btn",
    });
  }

  var swiper = new Swiper(".cubeSwiper", {
    effect: "cube",
    grabCursor: true,
    pauseOnMouseEnter: true,
    speed: 2000,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    cubeEffect: {
      shadow: false,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
  /*----------- 09. Ajax Contact Form ----------*/
  var form = ".ajax-contact";
  var invalidCls = "is-invalid";
  var $email = '[name="email"]';
  var $validation =
    '[name="name"],[name="email"],[name="subject"],[name="number"],[name="message"]'; // Must be use (,) without any space
  var formMessages = $(".form-messages");

  function sendContact() {
    var formData = $(form).serialize();
    var valid;
    valid = validateContact();
    if (valid) {
      jQuery
        .ajax({
          url: $(form).attr("action"),
          data: formData,
          type: "POST",
        })
        .done(function (response) {
          // Make sure that the formMessages div has the 'success' class.
          formMessages.removeClass("error");
          formMessages.addClass("success");
          // Set the message text.
          formMessages.text(response);
          // Clear the form.
          $(form + ' input:not([type="submit"]),' + form + " textarea").val("");
        })
        .fail(function (data) {
          // Make sure that the formMessages div has the 'error' class.
          formMessages.removeClass("success");
          formMessages.addClass("error");
          // Set the message text.
          if (data.responseText !== "") {
            formMessages.html(data.responseText);
          } else {
            formMessages.html(
              "Oops! An error occured and your message could not be sent.",
            );
          }
        });
    }
  }

  function validateContact() {
    var valid = true;
    var formInput;

    function unvalid($validation) {
      $validation = $validation.split(",");
      for (var i = 0; i < $validation.length; i++) {
        formInput = form + " " + $validation[i];
        if (!$(formInput).val()) {
          $(formInput).addClass(invalidCls);
          valid = false;
        } else {
          $(formInput).removeClass(invalidCls);
          valid = true;
        }
      }
    }
    unvalid($validation);

    if (
      !$($email).val() ||
      !$($email)
        .val()
        .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
    ) {
      $($email).addClass(invalidCls);
      valid = false;
    } else {
      $($email).removeClass(invalidCls);
      valid = true;
    }
    return valid;
  }

  $(form).on("submit", function (element) {
    element.preventDefault();
    sendContact();
  });

  /*---------- 10. Search Box Popup ----------*/
  function popupSarchBox($searchBox, $searchOpen, $searchCls, $toggleCls) {
    $($searchOpen).on("click", function (e) {
      e.preventDefault();
      $($searchBox).addClass($toggleCls);
    });
    $($searchBox).on("click", function (e) {
      e.stopPropagation();
      $($searchBox).removeClass($toggleCls);
    });
    $($searchBox)
      .find("form")
      .on("click", function (e) {
        e.stopPropagation();
        $($searchBox).addClass($toggleCls);
      });
    $($searchCls).on("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      $($searchBox).removeClass($toggleCls);
    });
  }
  popupSarchBox(
    ".popup-search-box",
    ".searchBoxToggler",
    ".searchClose",
    "show",
  );

  /*---------- 11. Popup Sidemenu ----------*/
  function popupSideMenu($sideMenu, $sideMunuOpen, $sideMenuCls, $toggleCls) {
    // Sidebar Popup
    $($sideMunuOpen).on("click", function (e) {
      e.preventDefault();
      $($sideMenu).addClass($toggleCls);
    });
    $($sideMenu).on("click", function (e) {
      e.stopPropagation();
      $($sideMenu).removeClass($toggleCls);
    });
    var sideMenuChild = $sideMenu + " > div";
    $(sideMenuChild).on("click", function (e) {
      e.stopPropagation();
      $($sideMenu).addClass($toggleCls);
    });
    $($sideMenuCls).on("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      $($sideMenu).removeClass($toggleCls);
    });
  }
  popupSideMenu(
    ".sidemenu-wrapper",
    ".sideMenuToggler",
    ".sideMenuCls",
    "show",
  );

  /*----------- 12. Magnific Popup ----------*/
  /* magnificPopup img view */
  $(".popup-image").magnificPopup({
    type: "image",
    mainClass: "mfp-zoom-in",
    removalDelay: 260,
    gallery: {
      enabled: true,
    },
  });

  /* magnificPopup video view */
  $(".popup-video").magnificPopup({
    type: "iframe",
    mainClass: "mfp-zoom-in",
    removalDelay: 260,
  });

  /* magnificPopup video view */
  $(".popup-content").magnificPopup({
    type: "inline",
    midClick: true,
  });

  if ($("[data-theme-color]").length > 0) {
    $("[data-theme-color]").each(function () {
      var $color = $(this).attr("data-theme-color");
      $(this).get(0).style.setProperty("--theme-color", $color);
      $(this).removeAttr("data-theme-color");
    });
  }

  $(document).on("mouseover", ".hover-item", function () {
    $(this).addClass("item-active");
    $(".hover-item").removeClass("item-active");
    $(this).addClass("item-active");
  });

  /*----------- 15. Counter Up ----------*/
  $(".counter-number").counterUp({
    delay: 10,
    time: 1000,
  });

  /*----------- 17. Shape Mockup ----------*/
  $.fn.shapeMockup = function () {
    var $shape = $(this);
    $shape.each(function () {
      var $currentShape = $(this),
        shapeTop = $currentShape.data("top"),
        shapeRight = $currentShape.data("right"),
        shapeBottom = $currentShape.data("bottom"),
        shapeLeft = $currentShape.data("left");
      $currentShape
        .css({
          top: shapeTop,
          right: shapeRight,
          bottom: shapeBottom,
          left: shapeLeft,
        })
        .removeAttr("data-top")
        .removeAttr("data-right")
        .removeAttr("data-bottom")
        .removeAttr("data-left")
        .parent()
        .addClass("shape-mockup-wrap");
    });
  };

  if ($(".shape-mockup")) {
    $(".shape-mockup").shapeMockup();
  }

  /*----------- 18. Progress Bar Animation ----------*/

  $(function () {
    $(".progress-bar").each(function () {
      $(this)
        .find(".progress-content")
        .animate(
          {
            width: $(this).attr("data-percentage"),
          },
          2000,
        );

      $(this)
        .find(".progress-number-mark")
        .animate(
          {
            left: $(this).attr("data-percentage"),
          },
          {
            duration: 2000,
            step: function (now, fx) {
              var data = Math.round(now);
              $(this)
                .find(".percent")
                .html(data + "%");
            },
          },
        );
    });
  });

  /* ==================================================
			# Wow Init
		 ===============================================*/
  var wow = new WOW({
    boxClass: "wow",
    animateClass: "animated",
    offset: 0,
    mobile: true,
    live: true,
  });
  new WOW().init();

  /* Image Reveal Animation */
  if (
    $(".reveal").length &&
    typeof gsap !== "undefined" &&
    typeof ScrollTrigger !== "undefined"
  ) {
    gsap.registerPlugin(ScrollTrigger);
    let revealContainers = document.querySelectorAll(".reveal");
    revealContainers.forEach((container) => {
      let image = container.querySelector("img");
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: container,
          toggleActions: "play none none none",
        },
      });
      tl.set(container, {
        autoAlpha: 1,
      });
      tl.from(container, 1, {
        xPercent: -100,
        ease: Power2.out,
      });
      tl.from(image, 1, {
        xPercent: 100,
        scale: 1,
        delay: -1,
        ease: Power2.out,
      });
    });
  }

  /* Text Effect Animation */
  if (
    $(".text-anime-style-1").length &&
    typeof gsap !== "undefined" &&
    typeof SplitText !== "undefined"
  ) {
    let staggerAmount = 0.05,
      delayValue = 0.5,
      animatedTextElements = document.querySelectorAll(".text-anime-style-1");

    animatedTextElements.forEach((element) => {
      let animationSplitText = new SplitText(element, { type: "chars, words" });
      gsap.from(animationSplitText.words, {
        duration: 1,
        delay: delayValue,
        x: 20,
        autoAlpha: 0,
        stagger: staggerAmount,
        scrollTrigger: { trigger: element, start: "top 85%" },
      });
    });
  }

  if (
    $(".text-anime-style-2").length &&
    typeof gsap !== "undefined" &&
    typeof SplitText !== "undefined"
  ) {
    let staggerAmount = 0.03,
      translateXValue = 20,
      delayValue = 0.1,
      easeType = "power2.out",
      animatedTextElements = document.querySelectorAll(".text-anime-style-2");

    animatedTextElements.forEach((element) => {
      let animationSplitText = new SplitText(element, { type: "chars, words" });
      gsap.from(animationSplitText.chars, {
        duration: 2,
        delay: delayValue,
        x: translateXValue,
        autoAlpha: 0,
        stagger: staggerAmount,
        ease: easeType,
        scrollTrigger: { trigger: element, start: "top 85%" },
      });
    });
  }

  if (
    $(".text-anime-style-3").length &&
    typeof gsap !== "undefined" &&
    typeof SplitText !== "undefined"
  ) {
    let animatedTextElements = document.querySelectorAll(".text-anime-style-3");

    animatedTextElements.forEach((element) => {
      //Reset if needed
      if (element.animation) {
        element.animation.progress(1).kill();
        element.split.revert();
      }

      element.split = new SplitText(element, {
        type: "lines,words,chars",
        linesClass: "split-line",
      });
      gsap.set(element, { perspective: 400 });

      gsap.set(element.split.chars, {
        opacity: 0,
        x: "50",
      });

      element.animation = gsap.to(element.split.chars, {
        scrollTrigger: { trigger: element, start: "top 90%" },
        x: "0",
        y: "0",
        rotateX: "0",
        opacity: 1,
        duration: 1,
        ease: Back.easeOut,
        stagger: 0.02,
      });
    });
  }

  // ---------- Smooth Scroll ----------
  let lenis;

  if (
    typeof gsap !== "undefined" &&
    typeof ScrollTrigger !== "undefined" &&
    typeof Lenis !== "undefined"
  ) {
    gsap.registerPlugin(ScrollTrigger);

    const prefersReducedMotion = window.matchMedia(
      "(prefers-reduced-motion: reduce)",
    ).matches;

    function initializeLenis() {
      lenis = new Lenis({
        lerp: 0.07, // Smoothing factor
      });

      lenis.on("scroll", ScrollTrigger.update);

      // Use GSAP's ticker to sync with animations
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });

      // Allow native scroll inside specified elements
      document.querySelectorAll(".mega-scroll").forEach((el) => {
        el.addEventListener("wheel", (e) => e.stopPropagation(), {
          passive: true,
        });
        el.addEventListener("touchmove", (e) => e.stopPropagation(), {
          passive: true,
        });
      });
    }

    function enableOrDisableLenis() {
      if (prefersReducedMotion) return;

      if (window.innerWidth > 991) {
        if (!lenis) initializeLenis();
        lenis.start();
      } else if (lenis) {
        lenis.stop();
        lenis = null;
      }
    }

    // Initial call
    enableOrDisableLenis();
    window.addEventListener("resize", enableOrDisableLenis);
  }

  /* Main js */
  /* -----------------*/

  // /*----------- 00. Right Click Disable ----------*/
  //   window.addEventListener('contextmenu', function (e) {
  //     // do something here...
  //     e.preventDefault();
  //   }, false);

  // /*----------- 00. Inspect Element Disable ----------*/
  //   document.onkeydown = function (e) {
  //     if (event.keyCode == 123) {
  //       return false;
  //     }
  //     if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
  //       return false;
  //     }
  //     if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
  //       return false;
  //     }
  //     if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
  //       return false;
  //     }
  //     if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
  //       return false;
  //     }
  //   }
})(jQuery);
