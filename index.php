<?php
$pageTitle = "Al Madinah Quran Academy | Online Quran Classes";
$pageDescription = "Join Al Madinah Quran Academy for online Quran classes with experienced male and female tutors. Learn Nazra, Tajweed, Hifz and Islamic studies from home.";
$pageKeywords = "Online Quran Classes, Quran Academy, Learn Quran Online, Tajweed Classes, Hifz Quran";
$pagePreloadImage = "assets/img/hero/hero-bg-1.webp";
$pageImage = $pagePreloadImage;
$enableAdvancedAnimations = true;
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
<?php require_once 'includes/head.php'; ?>
    <!-- hero section -->
    <style>
      .hero-section {
        position: relative;
        width: 100%;
        height: 700px; /* or use height: 100vh; for full screen */
        overflow: hidden;
      }
      .hero-section {
        background-size: cover; /* image always covers parent */
        background-position: center; /* center the image */
      }
      .hero-section img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* keeps image aspect ratio while filling parent */
        position: absolute; /* if overlapping images for slider */
        top: 0;
        left: 0;
      }
      .hero-section img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      @media (max-width: 480px) {
        .hero-section {
          height: 650px; /* adjust height for smaller screens */
        }
      }
    </style>
  </head>

  <body class="body-pattern">
    <!--==============================
    Sidemenu
============================== -->
<?php require_once 'includes/sidemenu.php'; ?>
    <!--==============================
Header Area
==============================-->
    <!-- Navbar -->
<?php require_once 'includes/navbar.php'; ?>
    <!--==============================
Hero Area
==============================-->
    <div class="th-hero-wrapper hero-2 hero-section" id="hero">
      <div
        class="swiper th-slider hero-slider-2"
        id="hero-thumb"
        data-slider-options='{"effect":"fade"}'
      >
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="hero-inner">
              <div
                class="th-hero-bg"
                data-bg-src="assets/img/hero/hero-bg-1.webp"
                style="max-height: 850px; background-image: url('assets/img/hero/hero-bg-1.webp')"
              ></div>
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-xl-6">
                    <div class="hero-style2">
                      <span
                        class="sub-title"
                        data-ani="slideindown"
                        data-ani-delay="0.2s"
                        ><img src="assets/img/theme-img/sub-title-2.svg" alt="In the name of Allah" width="201" height="75" fetchpriority="high"
                      /></span>
                      <h1
                        class="hero-title"
                        style="font-size: clamp(40px, 4.3vw, 64px); line-height: 1.208"
                        data-ani="slideinup"
                        data-ani-delay="0.4s"
                      >
                        Experience the Beauty of Quran Reading
                      </h1>
                      <p
                        class="hero-text"
                        data-ani="slideinup"
                        data-ani-delay="0.6s"
                      >
                        Connect with the Quran like never before and feel its
                        timeless guidance. Learn to read its words with clarity,
                        reverence, and heart.
                      </p>
                      <div
                        class="btn-group justify-content-center justify-content-xl-start"
                        data-ani="slideinup"
                        data-ani-delay="0.8s"
                      >
                        <a href="/courses" class="th-btn"
                           aria-label="Find The Course"><span
                            class="btn-text"
                            data-back="Find The Course"
                            data-front="Find The Course"
                          ></span>
                        </a>
                        <a
                          href="https://www.youtube.com/watch?v=OejiVcPicog"
                          class="th-btn border-btn popup-video"
                        >
                          <i class="fas fa-play"></i>Listen Holy Quran</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="hero-inner">
              <div
                class="th-hero-bg"
                data-bg-src="assets/img/hero/hero-bg-2.webp"
              ></div>
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-xl-6">
                    <div class="hero-style2">
                      <span
                        class="sub-title"
                        data-ani="slideindown"
                        data-ani-delay="0.2s"
                        ><img src="assets/img/theme-img/sub-title-2.svg" alt="" width="201" height="75"
                       loading="lazy" decoding="async" /></span>
                      <h2
                        class="hero-title"
                        style="font-size: clamp(40px, 4.3vw, 64px); line-height: 1.208"
                        data-ani="slideinup"
                        data-ani-delay="0.4s"
                      >
                        A Divine Call to Peace, Unity, Path
                      </h2>
                      <p
                        class="hero-text"
                        data-ani="slideinup"
                        data-ani-delay="0.6s"
                      >
                        Islam invites humanity to a life of peace, unity, and
                        guidance, showing a clear path through faith and wisdom.
                      </p>
                      <div
                        class="btn-group justify-content-center justify-content-xl-start"
                        data-ani="slideinup"
                        data-ani-delay="0.8s"
                      >
                        <a href="/courses" class="th-btn"
                           aria-label="Find The Course"><span
                            class="btn-text"
                            data-back="Find The Course"
                            data-front="Find The Course"
                          ></span>
                        </a>
                        <a
                          href="https://www.youtube.com/watch?v=OejiVcPicog"
                          class="th-btn border-btn popup-video"
                        >
                          <i class="fas fa-play"></i>Listen Holy Quran</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="hero-inner">
              <div
                class="th-hero-bg"
                data-bg-src="assets/img/hero/hero-bg-3.webp"
                style="max-height: 830px"
              ></div>
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-xl-6">
                    <div class="hero-style2">
                      <span
                        class="sub-title"
                        data-ani="slideindown"
                        data-ani-delay="0.2s"
                        ><img src="assets/img/theme-img/sub-title-2.svg" alt="" width="201" height="75"
                       loading="lazy" decoding="async" /></span>
                      <h2
                        class="hero-title"
                        style="font-size: clamp(40px, 4.3vw, 64px); line-height: 1.208"
                        data-ani="slideinup"
                        data-ani-delay="0.4s"
                      >
                        Awaken Your Heart with the Light of Quran
                      </h2>
                      <p
                        class="hero-text"
                        data-ani="slideinup"
                        data-ani-delay="0.6s"
                      >
                        Experience the peace and wisdom of the Quran as it
                        touches your heart. Learn to read, understand, and
                        connect with its timeless guidance every day.
                      </p>
                      <div
                        class="btn-group justify-content-center justify-content-xl-start"
                        data-ani="slideinup"
                        data-ani-delay="0.8s"
                      >
                        <a href="/courses" class="th-btn"
                           aria-label="Find The Course"><span
                            class="btn-text"
                            data-back="Find The Course"
                            data-front="Find The Course"
                          ></span>
                        </a>
                        <a
                          href="https://www.youtube.com/watch?v=OejiVcPicog"
                          class="th-btn border-btn popup-video"
                        >
                          <i class="fas fa-play"></i>Listen Holy Quran</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-controller">
        <div class="slider-pagination"></div>
        <div class="hero-thumb" data-slider-tab="#hero-thumb">
          <div class="tab-btn active">01</div>
          <div class="tab-btn">02</div>
          <div class="tab-btn">03</div>
        </div>
      </div>
      <div class="scroll-down d-none d-md-block">
        <a href="#about-sec" class="hero-scroll-wrap" aria-label="Scroll down to About section"><span></span></a>
      </div>
      <div class="social-links">
        <a href="https://www.instagram.com/ameerhamzaattari88/"
          ><i class="fab fa-instagram"></i
        ></a>
        <a href="https://www.facebook.com/Almadinaquranacademy888/"
          ><i class="fab fa-facebook-f"></i
        ></a>
      </div>
    </div>
<!--======== / Hero Section ========-->
    
<!--==============================
About Area  
==============================-->
<?php
$showReadMore = true;
require_once 'includes/about-us.php';
?>
    <!--==============================
cousrse Area
==============================-->
    <div
      id="about-sec"
      class="space overflow-hidden positive-relative overflow-hidden"
      data-bg-src="assets/img/bg/bg-img-1.jpg"
    >
      <div class="container">
        <div class="title-area text-center">
          <span class="sub-title">POPULAR COURSES</span>
          <h2 class="sec-title">Online islamic courses</h2>
        </div>
        <div class="slider-area">
          <div
            class="swiper th-slider has-shadow"
            id="cousrseSlide"
            data-slider-options='{"loop":false,"rewind":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1300":{"slidesPerView":"3"}}}'
          >
            <div class="swiper-wrapper">
              <!--==============================
Career Area
==============================-->

              <div class="swiper-slide">
                <div class="cousrse-card">
                  <div class="box-img global-img">
                    <img
                      src="assets/img/cousrse/norani-qaida.webp"
                      alt="Norani Qaida"
                      loading="lazy"
                      decoding="async"
                      style="width: 476px; height: 260px"
                    />
                  </div>
                  <div class="meta">
                    <span class="icon"
                      ><i class="fa-solid fa-user-graduate"></i>500
                      Enrolled</span
                    >
                    <div class="icon">
                      <i class="fa-sharp fa-light fa-clock"></i>4 Months
                      Duration
                    </div>
                  </div>
                  <span class="tags">Noorani Qaida</span>
                  <h3 class="box-title">
                    <a href="/noorani-qaida">Madani Noorani Qaida</a>
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/hafiz-ameer-hamza-96.webp"
                          width="96"
                          height="84"
                          alt="Avater"
                          loading="lazy"
                          decoding="async"
                        />
                      </div>
                      <div class="box-info">
                        <h3 class="box-title">Hafiz Ameer Hamza</h3>
                        <span class="box-desig">Islamic Scholar</span>
                      </div>
                    </div>
                    <span class="rating"
                      ><i class="fa-solid fa-star"></i>4.8</span
                    >
                  </div>
                  <div class="btn-group justify-content-between">
                    <a
                      class="th-btn border-btn2"
                      href="/noorani-qaida"
                      >Learn More</a
                    >
                    <a href="/contact" class="th-btn"
                       aria-label="Enroll Now"><span
                        class="btn-text"
                        data-back="Enroll Now"
                        data-front="Enroll Now"
                      ></span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="cousrse-card">
                  <div class="box-img global-img">
                    <img
                      src="assets/img/cousrse/nazra-quran.webp"
                      alt="Quran Image"
                      loading="lazy"
                      decoding="async"
                      style="width: 476px; height: 260px"
                    />
                  </div>
                  <div class="meta">
                    <span class="icon"
                      ><i class="fa-solid fa-user-graduate"></i>500
                      Enrolled</span
                    >
                    <div class="icon">
                      <i class="fa-sharp fa-light fa-clock"></i>12 Months
                      Duration
                    </div>
                  </div>
                  <span class="tags">Nazra Quran</span>
                  <h3 class="box-title">
                    <a href="/nazra-quran-with-tajweed"
                      >Nazra Quran With Tajweed</a
                    >
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/rizwana-nazir-96.webp"
                          width="96"
                          height="96"
                          alt="Avater"
                          loading="lazy"
                          decoding="async"
                        />
                      </div>
                      <div class="box-info">
                        <h3 class="box-title">Rizwana Nazir</h3>
                        <span class="box-desig">Islamic Scholar</span>
                      </div>
                    </div>
                    <span class="rating"
                      ><i class="fa-solid fa-star"></i>4.8</span
                    >
                  </div>
                  <div class="btn-group justify-content-between">
                    <a
                      class="th-btn border-btn2"
                      href="/nazra-quran-with-tajweed"
                      >Learn More</a
                    >
                    <a href="/contact" class="th-btn"
                       aria-label="Enroll Now"><span
                        class="btn-text"
                        data-back="Enroll Now"
                        data-front="Enroll Now"
                      ></span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="cousrse-card">
                  <div class="box-img global-img">
                    <img
                      src="assets/img/cousrse/hafiz-quran.webp"
                      alt="Hafiz Quran"
                      loading="lazy"
                      decoding="async"
                      style="width: 476px; height: 260px"
                    />
                  </div>
                  <div class="meta">
                    <span class="icon"
                      ><i class="fa-solid fa-user-graduate"></i>100
                      Enrolled</span
                    >
                    <div class="icon">
                      <i class="fa-sharp fa-light fa-clock"></i>01 to 03 years
                      Duration
                    </div>
                  </div>
                  <span class="tags">Hifz-e-Quran</span>
                  <h3 class="box-title">
                    <a href="/hifz-e-quran-with-tajweed"
                      >Hifz-e-Quran with Tajweed</a
                    >
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/ahmad-raza-96.webp"
                          width="96"
                          height="72"
                          alt="Avater"
                          loading="lazy"
                          decoding="async"
                        />
                      </div>
                      <div class="box-info">
                        <h3 class="box-title">Ahmad Raza</h3>
                        <span class="box-desig">Islamic Scholar</span>
                      </div>
                    </div>
                    <span class="rating"
                      ><i class="fa-solid fa-star"></i>4.8</span
                    >
                  </div>
                  <div class="btn-group justify-content-between">
                    <a
                      class="th-btn border-btn2"
                      href="/hifz-e-quran-with-tajweed"
                      >Learn More</a
                    >
                    <a href="/contact" class="th-btn"
                       aria-label="Enroll Now"><span
                        class="btn-text"
                        data-back="Enroll Now"
                        data-front="Enroll Now"
                      ></span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="cousrse-card">
                  <div class="box-img global-img">
                    <img
                      src="assets/img/cousrse/tarjuma-quran.webp"
                      alt="Quran Picture"
                      loading="lazy"
                      decoding="async"
                      style="width: 476px; height: 260px"
                    />
                  </div>
                  <div class="meta">
                    <span class="icon"
                      ><i class="fa-solid fa-user-graduate"></i>150
                      Enrolled</span
                    >
                    <div class="icon">
                      <i class="fa-sharp fa-light fa-clock"></i>12 Months
                      Duration
                    </div>
                  </div>
                  <span class="tags">Tarjmat ul Quran</span>
                  <h3 class="box-title">
                    <a href="/tarjmat-ul-quran">Tarjmat ul Quran</a>
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/abdul-quddoos-96.webp"
                          width="96"
                          height="72"
                          alt="Avater"
                          loading="lazy"
                          decoding="async"
                        />
                      </div>
                      <div class="box-info">
                        <h3 class="box-title">Abdul Quddoos Madni</h3>
                        <span class="box-desig">Islamic Scholar</span>
                      </div>
                    </div>
                    <span class="rating"
                      ><i class="fa-solid fa-star"></i>4.8</span
                    >
                  </div>

                  <div class="btn-group justify-content-between">
                    <a
                      class="th-btn border-btn2"
                      href="/tarjmat-ul-quran"
                      >Learn More</a
                    >
                    <a href="/contact" class="th-btn"
                       aria-label="Enroll Now"><span
                        class="btn-text"
                        data-back="Enroll Now"
                        data-front="Enroll Now"
                      ></span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="cousrse-card">
                  <div class="box-img global-img">
                    <img
                      src="assets/img/cousrse/tajweed-quran.webp"
                      alt="A person reading Quran"
                      loading="lazy"
                      decoding="async"
                      style="width: 476px; height: 260px"
                    />
                  </div>
                  <div class="meta">
                    <span class="icon"
                      ><i class="fa-solid fa-user-graduate"></i>200
                      Enrolled</span
                    >
                    <div class="icon">
                      <i class="fa-sharp fa-light fa-clock"></i>12 Months
                      Duration
                    </div>
                  </div>
                  <span class="tags">Tajweed</span>
                  <h3 class="box-title">
                    <a href="/tajweed">Tajweed Course</a>
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/amina-shehbaz-96.webp"
                          width="96"
                          height="72"
                          alt="Avater"
                          loading="lazy"
                          decoding="async"
                        />
                      </div>
                      <div class="box-info">
                        <h3 class="box-title">Amina Shehbaz</h3>
                        <span class="box-desig">Islamic Tutor</span>
                      </div>
                    </div>
                    <span class="rating"
                      ><i class="fa-solid fa-star"></i>4.8</span
                    >
                  </div>

                  <div class="btn-group justify-content-between">
                    <a
                      class="th-btn border-btn2"
                      href="/tajweed"
                      >Learn More</a
                    >
                    <a href="/contact" class="th-btn"
                       aria-label="Enroll Now"><span
                        class="btn-text"
                        data-back="Enroll Now"
                        data-front="Enroll Now"
                      ></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            data-slider-prev="#cousrseSlide"
            class="slider-arrow style2 slider-prev"
          >
            <i class="fa-thin fa-arrow-left-long"></i>
          </button>
          <button
            data-slider-next="#cousrseSlide"
            class="slider-arrow style2 slider-next"
          >
            <i class="fa-thin fa-arrow-right-long"></i>
          </button>
        </div>
      </div>
    </div>
    <!--==============================
Cta Area  
==============================-->
    <section
      class="cta-area space overflow-hidden"
      data-bg-src="assets/img/bg/blue-bg.webp"
    >
      <div class="container">
        <div class="courses-content">
          <h3 class="box-title text-white">
            Monday To Sunday
          </h3>
          <p class="text text-white">7:00 AM to 10:00 PM</p>
        </div>
        <div class="button">
          <a class="cta-text" href="/fee-structure"
            >We offer flexible learning: 1 day, 2 days, 3 days, or even 5 days
            every week. <br />
            Pick the plan that suits you best</a
          >
        </div>
        <div class="video-call">
          <a href="https://meet.google.com/landing?pli=1"
            ><img src="assets/img/shape/google-meet.png" alt="Google Meet Logo"
           loading="lazy" decoding="async" /></a>
          <a href="https://www.zoom.com/"
            ><img src="assets/img/shape/zoom.png" alt="Zoom Logo"
           loading="lazy" decoding="async" /></a>
          <a href="https://www.microsoft.com/en-us/"
            ><img src="assets/img/shape/microsoft.png" alt="Microsoft Logo"
           loading="lazy" decoding="async" /></a>
        </div>

        <div class="cta-button justify-content-center mt-55">
          <a href="/contact" class="th-btn style1"
             aria-label="Get Started"><span
              class="btn-text"
              data-back="Get Started"
              data-front="Get Started"
            ></span>
          </a>
        </div>
      </div>
    </section>
    <!--==============================
Service Area  
==============================-->
    <section
      class="overflow-hidden space"
      style="
        background-image: url(&quot;assets/img/bg/bg-img-3.webp&quot;);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      "
    >
      <div class="container">
        <div class="title-area text-center">
          <span class="sub-title">OUR SERVICES</span>
          <h2 class="sec-title">What We Do Offer</h2>
        </div>
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-md-6 col-xl-4">
            <div class="service-box2">
              <div class="box-img">
                <img
                  src="assets/img/cousrse/farz-uloom.webp"
                  alt="Quran Books"
                 loading="lazy" decoding="async" />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/about_2_1.svg" alt="Icon" width="40" height="40"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="/farz-e-uloom">Farz-E-Uloom Course</a>
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/about_2_1.svg" alt="Icon" width="40" height="40"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="/farz-e-uloom">Farz-E-Uloom Course</a>
                  </h3>
                  <p class="box-text">
                    The Farz-E-Uloom course walks you through the heart of
                    Islam. You'll learn the key foundations of Islam, including
                    belief, prayer, and daily practices that shape a Muslim's
                    life.
                  </p>
                </div>
                <div class="service-btn">
                  <a href="/farz-e-uloom" class="simple-btn"
                    >Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4">
            <div class="service-box2">
              <div class="box-img">
                <img src="assets/img/cousrse/hadith-course.webp" alt="Icon"  loading="lazy" decoding="async" />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/service_2_9.svg" alt="Icon"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="/hadith">The Hadith Course</a>
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_2_9.svg" alt="Icon"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="/hadith">Hadith Course</a>
                  </h3>
                  <p class="box-text">
                    The Hadith Course offers insight into the sayings and
                    actions of Prophet Muhammad (PBUH), with practical guidance
                    for daily life.
                  </p>
                </div>
                <div class="service-btn">
                  <a href="/hadith" class="simple-btn"
                    >Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4">
            <div class="service-box2">
              <div class="box-img">
                <img
                  src="assets/img/cousrse/darse-nizami.webp"
                  alt="A group people reading quran"
                 loading="lazy" decoding="async" />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/about_2_4.svg" alt="Icon"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="/dars-e-nizami"
                    >Darse Nizami Short Course</a
                  >
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/about_2_4.svg" alt="Icon"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="/dars-e-nizami"
                      >Darse Nizami Short Course</a
                    >
                  </h3>
                  <p class="box-text">
                    The Darse Nizami Short Course offers a brief yet meaningful
                    introduction to the classical Islamic curriculum, focusing
                    on the most essential subjects.
                  </p>
                </div>
                <div class="service-btn">
                  <a href="/dars-e-nizami" class="simple-btn"
                    >Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4">
            <div class="service-box2">
              <div class="box-img">
                <img
                  src="assets/img/cousrse/surah-noor-nisa-yusuf.webp"
                  alt="Surah Noor, Nisa, Yusuf"
                 loading="lazy" decoding="async" />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/service_2_4.svg" alt="Icon"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="/tafseer-of-surah-noor-nisa-and-yusuf"
                    >Tafseer Surah Noor, Nisa, Yusuf</a
                  >
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_2_4.svg" alt="Icon"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="/tafseer-of-surah-noor-nisa-and-yusuf"
                      >Tafseer Surah Noor, Nisa, Yusuf</a
                    >
                  </h3>
                  <p class="box-text">
                    This course offers a detailed Tafseer (exegesis) of Surah
                    Noor, Surah Nisa, and Surah Yusuf, focusing on their themes,
                    context, and practical lessons.
                  </p>
                </div>
                <div class="service-btn">
                  <a href="/tafseer-of-surah-noor-nisa-and-yusuf" class="simple-btn"
                    >Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4">
            <div class="service-box2">
              <div class="box-img">
                <img
                  src="assets/img/cousrse/namaz.webp"
                  alt="A person is offering namaz"
                 loading="lazy" decoding="async" />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/service_2_5.svg" alt="Icon"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="/namaz">Namaz Course</a>
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_2_5.svg" alt="Icon"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="/namaz">Namaz Course</a>
                  </h3>
                  <p class="box-text">
                    The Namaz Course provides complete guidance on Salah,
                    including Wudu, the rules of prayer, required recitations,
                    and the proper method of each posture.
                  </p>
                </div>
                <div class="service-btn">
                  <a href="/namaz" class="simple-btn"
                    >Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4">
            <div class="service-box2">
              <div class="box-img">
                <img src="assets/img/cousrse/Sunnat-Nikah.webp" alt="Icon"  loading="lazy" decoding="async" />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/service_2_7.svg" alt="Icon"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="/sunnat-e-nikah">Sunnat e Nikah Course</a>
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_2_7.svg" alt="Icon"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="/sunnat-e-nikah"
                      >Sunnat e Nikah Course</a
                    >
                  </h3>
                  <p class="box-text">
                    In this Sunnat-e-Nikah Course, you will learn the Sunnah of
                    marriage, including its rights, responsibilities, and
                    etiquettes for a blessed union.
                  </p>
                </div>
                <div class="service-btn">
                  <a href="/sunnat-e-nikah" class="simple-btn"
                    >Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==============================
Team Area  
==============================-->
<?php require_once 'includes/islamic-scholars.php'; ?>
    <!--==============================
Download Area 1 
==============================-->
    <section
      class="space"
      style="
        background-image: url(&quot;assets/img/bg/bg-img-3.webp&quot;);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      "
    >
      <div class="container">
        <div class="row gy-4 flex-row-reverse align-items-center">
          <div class="col-xxl-6">
            <div class="download-wrapp mb-40">
              <div class="title-area mb-0 text-center text-md-start">
                <span class="sub-title">LEARN QURAN</span>
                <h2 class="sec-title">Surah of Quran</h2>
              </div>
              <div
                class="btn-wrap justify-content-center justify-content-md-end wow fadeInUp"
                data-wow-delay=".3s"
              >
                <a
                  href="https://play.google.com/store/apps/details?id=com.quran.labs.androidquran&hl=en"
                  target="_blank"
                  class="th-btn style2"
                   aria-label="Download App"><span
                    class="btn-text"
                    data-back="Download App"
                    data-front="Download App"
                  ></span>
                </a>
              </div>
            </div>
            <div class="surah-wrapp">
              <div class="surah-list">
                <div class="box-icon">
                  <img src="assets/img/shape/arabic.png" alt=""  loading="lazy" decoding="async" />
                </div>
                <div class="box-content">
                  <h3 class="box-title">Al-Fatihah</h3>
                  <span class="text">The opener</span>
                  <a
                    href="https://data2.dawateislami.net/Data/Quran/quran_koran_surah_aayah/pdf/1-surah-al-fatihah.pdf"
                    target="_blank"
                    class="action-btn"
                    ><i class="fa fa-download" aria-hidden="true"></i>Download
                    PDF</a
                  >
                </div>
              </div>
              <div class="surah-list">
                <div class="box-icon">
                  <img src="assets/img/shape/arabic.png" alt=""  loading="lazy" decoding="async" />
                </div>
                <div class="box-content">
                  <h3 class="box-title">Bakarah</h3>
                  <span class="text">The opener</span>
                  <a
                    href="https://data2.dawateislami.net/Data/Quran/quran_koran_surah_aayah/pdf/1-surah-al-fatihah.pdf"
                    target="_blank"
                    class="action-btn"
                    ><i class="fa fa-download" aria-hidden="true"></i>Download
                    PDF</a
                  >
                </div>
              </div>
              <div class="surah-list">
                <div class="box-icon">
                  <img src="assets/img/shape/arabic.png" alt=""  loading="lazy" decoding="async" />
                </div>
                <div class="box-content">
                  <h3 class="box-title">Al-imran</h3>
                  <span class="text">The opener</span>
                  <a
                    href="https://data2.dawateislami.net/Data/Quran/quran_koran_surah_aayah/pdf/1-surah-al-fatihah.pdf"
                    target="_blank"
                    class="action-btn"
                    ><i class="fa fa-download" aria-hidden="true"></i>Download
                    PDF</a
                  >
                </div>
              </div>
              <div class="surah-list">
                <div class="box-icon">
                  <img src="assets/img/shape/arabic.png" alt=""  loading="lazy" decoding="async" />
                </div>
                <div class="box-content">
                  <h3 class="box-title">Surah Nisa</h3>
                  <span class="text">The opener</span>
                  <a
                    href="https://data2.dawateislami.net/Data/Quran/quran_koran_surah_aayah/pdf/1-surah-al-fatihah.pdf"
                    target="_blank"
                    class="action-btn"
                    ><i class="fa fa-download" aria-hidden="true"></i>Download
                    PDF</a
                  >
                </div>
              </div>
              <div class="surah-list">
                <div class="box-icon">
                  <img src="assets/img/shape/arabic.png" alt=""  loading="lazy" decoding="async" />
                </div>
                <div class="box-content">
                  <h3 class="box-title">Maidah</h3>
                  <span class="text">The opener</span>
                  <a
                    href="https://data2.dawateislami.net/Data/Quran/quran_koran_surah_aayah/pdf/1-surah-al-fatihah.pdf"
                    target="_blank"
                    class="action-btn"
                    ><i class="fa fa-download" aria-hidden="true"></i>Download
                    PDF</a
                  >
                </div>
              </div>
              <div class="surah-list">
                <div class="box-icon">
                  <img src="assets/img/shape/arabic.png" alt=""  loading="lazy" decoding="async" />
                </div>
                <div class="box-content">
                  <h3 class="box-title">Surah Anam</h3>
                  <span class="text">The opener</span>
                  <a
                    href="https://data2.dawateislami.net/Data/Quran/quran_koran_surah_aayah/pdf/1-surah-al-fatihah.pdf"
                    target="_blank"
                    class="action-btn"
                    ><i class="fa fa-download" aria-hidden="true"></i>Download
                    PDF</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-6">
            <div class="img-box3">
              <div class="img1">
                <img
                  src="assets/img/Surah-Quran-img.webp"
                  alt="img"
                  style="width: 700px; height: 645px"
                 loading="lazy" decoding="async" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==============================
	Footer Area
==============================-->
    <?php require_once 'includes/footer.php'; ?>

    <!--==============================
    All Js File
============================== -->
  <?php require_once 'includes/script.php'; ?>

  </body>
</html>
