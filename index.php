<?php
$pageTitle = "Al Madinah Quran Academy | Online Quran Classes";
$pageDescription = "Join Al Madinah Quran Academy for online Quran classes with experienced male and female tutors. Learn Nazra, Tajweed, Hifz and Islamic studies from home.";
$pageKeywords = "Online Quran Classes, Quran Academy, Learn Quran Online, Tajweed Classes, Hifz Quran";
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
                style="max-height: 850px"
              ></div>
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-xl-6">
                    <div class="hero-style2">
                      <span
                        class="sub-title"
                        data-ani="slideindown"
                        data-ani-delay="0.2s"
                        ><img src="assets/img/theme-img/sub-title-2.svg" alt=""
                      /></span>
                      <h1
                        class="hero-title"
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
                        <a href="popular-courses.html" class="th-btn"
                          ><span
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
                        ><img src="assets/img/theme-img/sub-title-2.svg" alt=""
                      /></span>
                      <h1
                        class="hero-title"
                        data-ani="slideinup"
                        data-ani-delay="0.4s"
                      >
                        A Divine Call to Peace, Unity, Path
                      </h1>
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
                        <a href="popular-courses.html" class="th-btn"
                          ><span
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
                  <!-- <div class="col-xl-6">
                    <div class="hero-video">
                      <a
                        href="https://www.youtube.com/watch?v=eIrRj6vDddU"
                        class="play-btn popup-video"
                        ><i class="fa-sharp fa-solid fa-play"></i
                      ></a>
                    </div>
                  </div> -->
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
                        ><img src="assets/img/theme-img/sub-title-2.svg" alt=""
                      /></span>
                      <h1
                        class="hero-title"
                        data-ani="slideinup"
                        data-ani-delay="0.4s"
                      >
                        Awaken Your Heart with the Light of Quran
                      </h1>
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
                        <a href="popular-courses.html" class="th-btn"
                          ><span
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
                  <!-- <div class="col-xl-6">
                    <div class="hero-video">
                      <a
                        href="https://www.youtube.com/watch?v=eIrRj6vDddU"
                        class="play-btn popup-video"
                        ><i class="fa-sharp fa-solid fa-play"></i
                      ></a>
                    </div>
                  </div> -->
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
        <a href="#about-sec" class="hero-scroll-wrap"><span></span></a>
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
    <div
      class="overflow-hidden position-relative space"
      style="background-image: url(&quot;assets/img/bg/about-bg-1.webp&quot;)"
    >
      <div class="container">
        <div class="row gy-5">
          <div class="col-xxl-6 mb-30 mb-xl-0">
            <div class="title-area pe-xl-5 me-xl-5">
              <span class="sub-title text-anime-style-2">About us</span>
              <h2 class="sec-title text-anime-style-3">
                Discover the Divine Where Faith Meets Purpose
              </h2>
            </div>
            <div class="img-box2 pe-xl-5 me-xl-2">
              <div class="img1">
                <img
                  src="assets/img/bg/about-1.webp"
                  alt="About"
                  style="width: 524px; height: 540px"
                />
              </div>
              <div class="discount-wrapp">
                <div class="logo">
                  <img
                    src="assets/img/hero/logo_1.webp"
                    alt="Al-Madina Quran Academy Logo"
                  />
                </div>
                <div class="discount-tag">
                  <span class="discount-anime"
                    >learn quran everyday * quran learn *</span
                  >
                </div>
              </div>
              <div class="about-quran-area">
                <h2 class="box-title">Listen to quran audio</h2>
                <div class="about-quran">
                  <div class="quran-image">
                    <img
                      src="assets/img/quran-img.webp"
                      alt="Quran Image"
                      style="width: 444px; height: 250px"
                    />
                  </div>
                  <span class="text"
                    ><img src="assets/img/shape/starting.png" alt=""
                  /></span>
                  <audio controls="">
                    <source src="assets/img/audio.mp3" type="audio/mpeg" />
                  </audio>
                </div>
              </div>
              <div class="th-experience">
                <div class="th-experience_content">
                  <h2 class="experience-year">
                    <span class="counter-number">10</span>k+
                  </h2>
                  <p class="experience-text">Satisfied students worldwide.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-6 mb-30 mb-xl-0">
            <p
              class="mt-3 mb-15 fs-18 wow fadeInUp"
              data-wow-delay=".2s"
              style="text-align: justify"
            >
              The history of the Quran is a journey that spans over 1,400 years,
              beginning with its revelation to Prophet Muhammad (peace be upon
              him) in Mecca. This sacred book has guided generations, shaping
              spiritual, cultural, and social life across the world. From its
              careful preservation to the development of diverse recitation
              traditions, the Quran continues to inspire and connect hearts.
              Explore its timeless wisdom, listen to authentic recitations by
              renowned Qaris, and deepen your own understanding through guided
              lessons, all while experiencing the beauty and serenity of Allah’s
              words.
            </p>
            <p
              class="fs-18 wow fadeInUp"
              data-wow-delay=".3s"
              style="text-align: justify"
            >
              Over the centuries, the Quran has guided millions with its
              timeless wisdom and teachings. Its verses inspire compassion,
              patience, and gratitude, shaping hearts and minds. Listening to
              authentic recitations and studying its meanings brings peace and
              understanding. The Quran continues to illuminate lives, offering a
              path to faith, knowledge, and spiritual connection.
            </p>
            <div class="about-wrapper2 mt-40">
              <div>
                <div
                  class="about-feature style3 wow fadeInUp"
                  data-wow-delay=".4s"
                >
                  <div class="box-icon">
                    <img src="assets/img/icon/about_2_1.svg" alt="Icon" />
                  </div>
                  <div class="media-body">
                    <h3 class="box-title">
                      Finding Contentment in Allah’s Blessings
                    </h3>
                    <p class="box-text">
                      The Quran teaches us to appreciate Allah’s blessings,
                      guiding us to find peace and contentment in our daily
                      lives.
                    </p>
                  </div>
                </div>
                <div
                  class="about-feature style3 wow fadeInUp"
                  data-wow-delay=".5s"
                >
                  <div class="box-icon">
                    <img src="assets/img/icon/about_2_2.svg" alt="Icon" />
                  </div>
                  <div class="media-body">
                    <h3 class="box-title">
                      Connecting with Allah in Every Moment
                    </h3>
                    <p class="box-text">
                      The Quran helps us stay close to Allah and find peace in
                      every moment.
                    </p>
                  </div>
                </div>
                <div
                  class="about-feature style3 wow fadeInUp"
                  data-wow-delay=".6s"
                >
                  <div class="box-icon">
                    <img src="assets/img/icon/about_2_3.svg" alt="Icon" />
                  </div>
                  <div class="media-body">
                    <h3 class="box-title">The Spiritual Benefits of Ramadan</h3>
                    <p class="box-text">
                      The Quran guides us during Ramadan, deepening our faith,
                      patience, and connection with Allah.
                    </p>
                  </div>
                </div>
                <div
                  class="about-feature style3 wow fadeInUp"
                  data-wow-delay=".7s"
                >
                  <div class="box-icon">
                    <img src="assets/img/icon/about_2_2.svg" alt="Icon" />
                  </div>
                  <div class="media-body">
                    <h3 class="box-title">The Global Ummah and Its Strength</h3>
                    <p class="box-text">
                      The Quran unites Muslims around the world, inspiring
                      faith, solidarity, and shared purpose.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="btn-group mt-30 mb-xxl-0 mb-25 wow fadeInUp"
              data-wow-delay=".8s"
            >
              <a href="about.html" class="th-btn"
                ><span
                  class="btn-text"
                  data-back="Read More"
                  data-front="Read More"
                ></span>
              </a>
            </div>
            <div
              class="video-wrapp style2 wow fadeInRight"
              data-wow-delay=".9s"
              data-mask-src="assets/img/shape/about-shape2.png"
            >
              <div
                class="video-image style2"
                data-bg-src="assets/img/bg/video_bg_2.webp"
              >
                <a
                  href="https://www.youtube.com/watch?v=OejiVcPicog"
                  class="play-btn popup-video"
                >
                  <i class="fa-solid fa-play"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
          <span class="sub-title text-anime-style-2">POPULAR COURSES</span>
          <h2 class="sec-title text-anime-style-3">Online islamic courses</h2>
        </div>
        <div class="slider-area">
          <div
            class="swiper th-slider has-shadow"
            id="cousrseSlide"
            data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1300":{"slidesPerView":"3"}}}'
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
                    <a href="course-details.html?id=1">Madani Noorani Qaida</a>
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/hafiz-ameer-hamza.webp"
                          alt="Avater"
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
                      href="course-details.html?id=1"
                      >Learn More</a
                    >
                    <a href="contact.html" class="th-btn"
                      ><span
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
                    <a href="courses-details.html?id=2"
                      >Nazra Quran With Tajweed</a
                    >
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/rizwana-nazir.webp"
                          alt="Avater"
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
                      href="course-details.html?id=2"
                      >Learn More</a
                    >
                    <a href="contact.html" class="th-btn"
                      ><span
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
                    <a href="courses-details.html?id=3"
                      >Hifz-e-Quran with Tajweed</a
                    >
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/ahmad-raza.webp"
                          alt="Avater"
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
                      href="course-details.html?id=3"
                      >Learn More</a
                    >
                    <a href="contact.html" class="th-btn"
                      ><span
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
                    <a href="courses-details.html?id=4">Tarjmat ul Quran</a>
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/abdul-quddoos.webp"
                          alt="Avater"
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
                      href="course-details.html?id=4"
                      >Learn More</a
                    >
                    <a href="contact.html" class="th-btn"
                      ><span
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
                    <a href="courses-details.html?id=5">Tajweed Course</a>
                  </h3>
                  <div class="box-wrapp">
                    <div class="box-profile">
                      <div class="box-author">
                        <img
                          src="assets/img/team/amina-shehbaz.webp"
                          alt="Avater"
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
                      href="course-details.html?id=5"
                      >Learn More</a
                    >
                    <a href="contact.html" class="th-btn"
                      ><span
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
          <h3 class="box-title text-white text-anime-style-2">
            Monday To Sunday
          </h3>
          <p class="text text-white">7:00 AM to 10:00 PM</p>
        </div>
        <div class="button">
          <a class="cta-text" href="fee-structure.html"
            >We offer flexible learning: 1 day, 2 days, 3 days, or even 5 days
            every week. <br />
            Pick the plan that suits you best</a
          >
        </div>
        <div class="video-call">
          <a href="https://meet.google.com/landing?pli=1"
            ><img src="assets/img/shape/google-meet.png" alt="Google Meet Logo"
          /></a>
          <a href="https://www.zoom.com/"
            ><img src="assets/img/shape/zoom.png" alt="Zoom Logo"
          /></a>
          <a href="https://www.microsoft.com/en-us/"
            ><img src="assets/img/shape/microsoft.png" alt="Microsoft Logo"
          /></a>
        </div>

        <div class="cta-button justify-content-center mt-55">
          <a href="contact.html" class="th-btn style1"
            ><span
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
          <span class="sub-title text-anime-style-2">OUR SERVICES</span>
          <h2 class="sec-title text-anime-style-3">What We Do Offer</h2>
        </div>
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-md-6 col-xl-4">
            <div class="service-box2">
              <div class="box-img">
                <img
                  src="assets/img/cousrse/farz-uloom.webp"
                  alt="Quran Books"
                />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/about_2_1.svg" alt="Icon" />
                </div>
                <h3 class="box-title">
                  <a href="course-details.html?id=6">Farz-E-Uloom Course</a>
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/about_2_1.svg" alt="Icon" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.html?id=6">Farz-E-Uloom Course</a>
                  </h3>
                  <p class="box-text">
                    The Farz-E-Uloom course walks you through the heart of
                    Islam. You'll learn the key foundations of Islam, including
                    belief, prayer, and daily practices that shape a Muslim’s
                    life.
                  </p>
                </div>
                <div class="service-btn">
                  <a href="course-details.html?id=6" class="simple-btn"
                    >Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4">
            <div class="service-box2">
              <div class="box-img">
                <img src="assets/img/cousrse/hadith-course.webp" alt="Icon" />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/service_2_9.svg" alt="Icon" />
                </div>
                <h3 class="box-title">
                  <a href="course-details.html?id=7">The Hadith Course</a>
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_2_9.svg" alt="Icon" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.html?id=7">Hadith Course</a>
                  </h3>
                  <p class="box-text">
                    The Hadith Course offers insight into the sayings and
                    actions of Prophet Muhammad (PBUH), with practical guidance
                    for daily life.
                  </p>
                </div>
                <div class="service-btn">
                  <a href="course-details.html?id=7" class="simple-btn"
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
                />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/about_2_4.svg" alt="Icon" />
                </div>
                <h3 class="box-title">
                  <a href="course-details.html?id=8"
                    >Darse Nizami Short Course</a
                  >
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/about_2_4.svg" alt="Icon" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.html?id=8"
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
                  <a href="course-details.html?id=8" class="simple-btn"
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
                />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/service_2_4.svg" alt="Icon" />
                </div>
                <h3 class="box-title">
                  <a href="course-details.html?id=9"
                    >Tafseer Surah Noor, Nisa, Yusuf</a
                  >
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_2_4.svg" alt="Icon" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.html?id=9"
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
                  <a href="course-details.html?id=9" class="simple-btn"
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
                />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/service_2_5.svg" alt="Icon" />
                </div>
                <h3 class="box-title">
                  <a href="course-details.html?id=12">Namaz Course</a>
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_2_5.svg" alt="Icon" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.html?id=12">Namaz Course</a>
                  </h3>
                  <p class="box-text">
                    The Namaz Course provides complete guidance on Salah,
                    including Wudu, the rules of prayer, required recitations,
                    and the proper method of each posture.
                  </p>
                </div>
                <div class="service-btn">
                  <a href="course-details.html?id=12" class="simple-btn"
                    >Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4">
            <div class="service-box2">
              <div class="box-img">
                <img src="assets/img/cousrse/Sunnat-Nikah.webp" alt="Icon" />
              </div>
              <div class="box-info">
                <div class="box-icon">
                  <img src="assets/img/icon/service_2_7.svg" alt="Icon" />
                </div>
                <h3 class="box-title">
                  <a href="course-details.html?id=13">Sunnat e Nikah Course</a>
                </h3>
              </div>
              <div class="box-content">
                <div class="box-wrapp">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_2_7.svg" alt="Icon" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.html?id=13"
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
                  <a href="course-details.html?id=13" class="simple-btn"
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
    <section
      class="team-sec overflow-hidden space overflow-hidden"
      data-bg-src="assets/img/bg/about-bg.webp"
    >
      <div class="container z-index-common">
        <div class="title-area text-center">
          <span class="sub-title text-anime-style-2">OUR BEST SCHOLARS</span>
          <h2 class="sec-title text-anime-style-3">Meet Islamic Scholars</h2>
        </div>
        <div class="slider-area">
          <div
            class="swiper th-slider has-shadow"
            id="teamSlider2"
            data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'
          >
            <div class="swiper-wrapper">
              <!-- Single Item -->
              <div class="swiper-slide">
                <div class="th-team team-card">
                  <div class="box-img">
                    <div class="team-overlay"></div>
                    <img
                      src="assets/img/team/hafiz-ameer-hamza.webp"
                      alt="Islamic Scholar"
                    />
                  </div>
                  <div class="box-content">
                    <h3 class="box-title">Hafiz Ameer Hamza</h3>
                    <span class="team-desig">Islamic Scholar</span>
                  </div>
                </div>
              </div>

              <!-- Single Item -->
              <div class="swiper-slide">
                <div class="th-team team-card">
                  <div class="box-img">
                    <div class="team-overlay"></div>
                    <img
                      src="assets/img/team/kabir-rafiq.webp"
                      alt="Islamic Scholar"
                    />
                  </div>
                  <div class="box-content">
                    <h3 class="box-title">Kabir Rafiq</h3>
                    <span class="team-desig">Islamic Scholar</span>
                  </div>
                </div>
              </div>

              <!-- Single Item -->
              <div class="swiper-slide">
                <div class="th-team team-card">
                  <div class="box-img">
                    <div class="team-overlay"></div>
                    <img
                      src="assets/img/team/abdul-quddoos.webp"
                      alt="Islamic Scholar"
                    />
                  </div>
                  <div class="box-content">
                    <h3 class="box-title">Abdul Quddoos Madni</h3>
                    <span class="team-desig">Islamic Scholar</span>
                  </div>
                </div>
              </div>

              <!-- Single Item -->
              <div class="swiper-slide">
                <div class="th-team team-card">
                  <div class="box-img">
                    <div class="team-overlay"></div>
                    <img
                      src="assets/img/team/ahmad-raza.webp"
                      alt="Islamic Scholar"
                    />
                  </div>
                  <div class="box-content">
                    <h3 class="box-title">Ahmad Raza</h3>
                    <span class="team-desig">Islamic Scholar</span>
                  </div>
                </div>
              </div>

              <!-- Single Item -->
              <div class="swiper-slide">
                <div class="th-team team-card">
                  <div class="box-img">
                    <div class="team-overlay"></div>
                    <img
                      src="assets/img/team/maryam-zahid.Webp"
                      alt="Islamic Scholar"
                    />
                  </div>
                  <div class="box-content">
                    <h3 class="box-title">Maryam Zahid</h3>
                    <span class="team-desig">Islamic Scholar</span>
                  </div>
                </div>
              </div>

              <!-- Single Item -->
              <div class="swiper-slide">
                <div class="th-team team-card">
                  <div class="box-img">
                    <div class="team-overlay"></div>
                    <img
                      src="assets/img/team/sana-manzoor.Webp"
                      alt="Islamic Scholar"
                    />
                  </div>
                  <div class="box-content">
                    <h3 class="box-title">Sana Manzoor</h3>
                    <span class="team-desig">Islamic Scholar</span>
                  </div>
                </div>
              </div>

              <!-- Single Item -->
              <div class="swiper-slide">
                <div class="th-team team-card">
                  <div class="box-img">
                    <div class="team-overlay"></div>
                    <img
                      src="assets/img/team/amina-shehbaz.webp"
                      alt="Islamic Scholar"
                    />
                  </div>
                  <div class="box-content">
                    <h3 class="box-title">Amina Shehbaz</h3>
                    <span class="team-desig">Islamic Scholar</span>
                  </div>
                </div>
              </div>

              <!-- Single Item -->
              <div class="swiper-slide">
                <div class="th-team team-card">
                  <div class="box-img">
                    <div class="team-overlay"></div>
                    <img
                      src="assets/img/team/rizwana-nazir.webp"
                      alt="Islamic Scholar"
                    />
                  </div>
                  <div class="box-content">
                    <h3 class="box-title">Rizwana Nazir</h3>
                    <span class="team-desig">Islamic Scholar</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            data-slider-prev="#teamSlider2"
            class="slider-arrow slider-prev"
          >
            <i class="far fa-arrow-left"></i>
          </button>
          <button
            data-slider-next="#teamSlider2"
            class="slider-arrow slider-next"
          >
            <i class="far fa-arrow-right"></i>
          </button>
        </div>
      </div>
    </section>
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
                <span class="sub-title text-anime-style-2">LEARN QURAN</span>
                <h2 class="sec-title text-anime-style-3">Surah of Quran</h2>
              </div>
              <div
                class="btn-wrap justify-content-center justify-content-md-end wow fadeInUp"
                data-wow-delay=".3s"
              >
                <a
                  href="https://play.google.com/store/apps/details?id=com.quran.labs.androidquran&hl=en"
                  target="_blank"
                  class="th-btn style2"
                  ><span
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
                  <img src="assets/img/shape/arabic.png" alt="" />
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
                  <img src="assets/img/shape/arabic.png" alt="" />
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
                  <img src="assets/img/shape/arabic.png" alt="" />
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
                  <img src="assets/img/shape/arabic.png" alt="" />
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
                  <img src="assets/img/shape/arabic.png" alt="" />
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
                  <img src="assets/img/shape/arabic.png" alt="" />
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
                />
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
