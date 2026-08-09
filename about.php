<?php
$pageTitle = "About Us | Al Madinah Quran Academy";
$pageDescription = "Learn about Al Madinah Quran Academy, our mission, qualified teachers and commitment to providing quality online Quran education worldwide.";
$pageKeywords = "About Quran Academy, Online Quran Teachers, Islamic Education";
$pagePreloadImage = "assets/img/bg/about-us-header-bg.webp";
$pageImage = $pagePreloadImage;
$enableAdvancedAnimations = true;
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
   <?php require_once 'includes/head.php'; ?>
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
    Breadcumb
============================== -->
    <div
      class="breadcumb-wrapper"
      data-bg-src="assets/img/bg/about-us-header-bg.webp"
      style="background-image: url('assets/img/bg/about-us-header-bg.webp')"
    >
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">About Us</h1>
          <ul class="breadcumb-menu">
            <li><a href="home">Home</a></li>
            <li>About Us</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
pillar  Area  
==============================-->
    <div
      class="space-top overflow-hidden"
      style="background-image: url('assets/img/bg/about-bg-1.webp')"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="title-area text-center">
              <span class="sub-title text-anime-style-2">Pillars of Islam</span>
              <h2 class="sec-title text-anime-style-3">
                Finding Contentment in Allah's Blessings
              </h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="pillar-item-wrapp">
            <div class="pillar-item">
              <div class="box-icon">
                <img src="assets/img/icon/pillar_2_1.svg" alt=""  loading="lazy" decoding="async" />
              </div>
              <div class="box-img">
                <img
                  src="assets/img/gallery/Kalma.webp"
                  alt=""
                  style="width: 170px; height: 140px"
                 loading="lazy" decoding="async" />
              </div>
              <h3 class="box-title">
                Iman <img src="assets/img/icon/icon-1.svg" alt=""  loading="lazy" decoding="async" />
              </h3>
            </div>
            <div class="pillar-item">
              <div class="box-icon">
                <img src="assets/img/icon/pillar_2_2.svg" alt=""  loading="lazy" decoding="async" />
              </div>
              <div class="box-img">
                <img
                  src="assets/img/gallery/Namaz.webp"
                  alt=""
                  style="width: 170px; height: 140px"
                 loading="lazy" decoding="async" />
              </div>
              <h3 class="box-title">
                salah <img src="assets/img/icon/icon-2.svg" alt=""  loading="lazy" decoding="async" />
              </h3>
            </div>
            <div class="pillar-item">
              <div class="box-icon">
                <img src="assets/img/icon/pillar_2_3.svg" alt=""  loading="lazy" decoding="async" />
              </div>
              <div class="box-img">
                <img
                  src="assets/img/gallery/Ramadan.webp"
                  alt=""
                  style="width: 170px; height: 140px"
                 loading="lazy" decoding="async" />
              </div>
              <h3 class="box-title">
                sawam <img src="assets/img/icon/icon-3.svg" alt=""  loading="lazy" decoding="async" />
              </h3>
            </div>
            <div class="pillar-item">
              <div class="box-icon">
                <img src="assets/img/icon/pillar_2_4.svg" alt=""  loading="lazy" decoding="async" />
              </div>
              <div class="box-img">
                <img
                  src="assets/img/gallery/Zakat.webp"
                  alt=""
                  style="width: 170px; height: 140px"
                 loading="lazy" decoding="async" />
              </div>
              <h3 class="box-title">
                zakat <img src="assets/img/icon/icon-4.svg" alt=""  loading="lazy" decoding="async" />
              </h3>
            </div>
            <div class="pillar-item">
              <div class="box-icon">
                <img src="assets/img/icon/pillar_2_5.svg" alt=""  loading="lazy" decoding="async" />
              </div>
              <div class="box-img">
                <img
                  src="assets/img/gallery/Hajj.webp"
                  alt=""
                  style="width: 170px; height: 140px"
                 loading="lazy" decoding="async" />
              </div>
              <h3 class="box-title">
                hajj <img src="assets/img/icon/icon-5.svg" alt=""  loading="lazy" decoding="async" />
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
About Area  
==============================-->
<?php
$showReadMore = false;
require_once 'includes/about-us.php';
?>

    <!--==============================
Service Area  
==============================-->
    <section
      class="overflow-hidden space overflow-hidden"
      data-bg-src="assets/img/bg/bg-img-1.jpg"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-5">
            <div class="service-image wow fadeInLeft" data-wow-delay=".2s">
              <img
                src="assets/img/bg/frame.webp"
                alt=""
                style="width: 550px; height: 700px"
               loading="lazy" decoding="async" />
            </div>
          </div>
          <div class="col-xl-7">
            <div class="title-area text-center text-md-start">
              <span class="sub-title text-anime-style-2">WHAT WE DO</span>
              <h2 class="sec-title text-anime-style-3">services we offer</h2>
            </div>
            <div class="service-grid-wrapper">
              <div class="service-grid wow fadeInUp" data-wow-delay=".3s">
                <div class="box-content">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_3_1.svg" alt="Icon"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.php?id=2">Nazra Quran With Tajweed</a>
                  </h3>
                  <p class="box-text">
                    The story of Islam begins with the birth of Muhammad ibn
                    Abdullah in Mecca, a city in the Arabian Peninsula.
                  </p>
                </div>
              </div>

              <div class="service-grid wow fadeInUp" data-wow-delay=".4s">
                <div class="box-content">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_3_2.svg" alt="Icon"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.php?id=3">Hifz-e-Quran with Tajweed</a>
                  </h3>
                  <p class="box-text">
                    Salah involves specific movements and recitations at set
                    times of the day. You can learn through videos.
                  </p>
                </div>
              </div>

              <div class="service-grid wow fadeInUp" data-wow-delay=".5s">
                <div class="box-content">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_3_3.svg" alt="Icon"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.php?id=4">Tarjmat ul Quran</a>
                  </h3>
                  <p class="box-text">
                    Many mosques offer weekend schools, youth groups, and
                    recreational activities to nurture Islamic values in young
                    people.
                  </p>
                </div>
              </div>

              <div class="service-grid wow fadeInUp" data-wow-delay=".6s">
                <div class="box-content">
                  <div class="box-icon">
                    <img src="assets/img/icon/service_3_4.svg" alt="Icon"  loading="lazy" decoding="async" />
                  </div>
                  <h3 class="box-title">
                    <a href="course-details.php?id=5">Tajweed Course</a>
                  </h3>
                  <p class="box-text">
                    Muslims eat Halal (permissible) food and avoid Haram
                    (forbidden) items, such as pork and alcohol is bad for
                    health.
                  </p>
                </div>
              </div>
            </div>
            <div
              class="btn-group justify-content-center justify-content-md-start mt-50 wow fadeInUp"
              data-wow-delay=".7s"
            >
              <a href="popular-courses.php" class="th-btn style2 th-icon"
                ><span
                  class="btn-text"
                  data-back="Discover More"
                  data-front="Discover More"
                ></span>
              </a>
              <a href="contact.php" class="th-btn th-icon"
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
    </section>
    <!--==============================

   <!--==============================
Team Area  
==============================-->
   <?php require_once 'includes/islamic-scholars.php'; ?>
    <!--==============================
About Area  
==============================-->
    <div
      class="choose-area position-relative overflow-hidden space"
      data-bg-src="assets/img/bg/why-choose-us.webp"
    >
      <div class="container">
        <div class="row gy-5 justify-content-center">
          <div class="col-xxl-4 col-xl-5">
            <div class="title-area text-center">
              <span class="sub-title style2 text-anime-style-2"
                >Why Choose Us</span
              >
              <h2 class="sec-title text-white text-anime-style-3">
                Why choose our islamic center
              </h2>
            </div>
          </div>
        </div>
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-md-6 col-xl-3">
            <div class="choose-item">
              <div class="box-content">
                <div class="box-icon">
                  <img src="assets/img/icon/choose_1_1.svg" alt="Icon"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="educators.php">Expert Quran Tutor</a>
                </h3>
                <p class="box-text">
                  All the classes of online Quran teaching are conducted by well
                  qualified Islamic scholars
                </p>
              </div>
              <div class="choose-btn">
                <a href="educators.php" class="icon-btn">
                  <i class="fa-regular fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="choose-item">
              <div class="box-content">
                <div class="box-icon">
                  <img src="assets/img/icon/choose_1_2.svg" alt="Icon"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="educators.php">One-to-One Classes</a>
                </h3>
                <p class="box-text">
                  One-to-one classes that give you full attention, personalized
                  guidance, and faster learning.
                </p>
              </div>
              <div class="choose-btn">
                <a href="educators.php" class="icon-btn">
                  <i class="fa-regular fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="choose-item">
              <div class="box-content">
                <div class="box-icon">
                  <img src="assets/img/icon/choose_1_3.svg" alt="Icon"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="educators.php">Any course Flexible Timings</a>
                </h3>
                <p class="box-text">
                  Pick any course and study at the time that suits you best,
                  with complete flexibility.
                </p>
              </div>
              <div class="choose-btn">
                <a href="educators.php" class="icon-btn">
                  <i class="fa-regular fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="choose-item">
              <div class="box-content">
                <div class="box-icon">
                  <img src="assets/img/icon/choose_1_4.svg" alt="Icon"  loading="lazy" decoding="async" />
                </div>
                <h3 class="box-title">
                  <a href="educators.php">Male & female Teachers</a>
                </h3>
                <p class="box-text">
                  Our female teachers provides comfortable learning environment
                  for female students.
                </p>
              </div>
              <div class="choose-btn">
                <a href="educators.php" class="icon-btn">
                  <i class="fa-regular fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
Testimonial Area  
==============================-->
    <section
      class="testi-area2 overflow-hidden space"
      style="background-image: url('assets/img/bg/about-bg-1.webp')"
    >
      <div class="container">
        <div class="title-area text-center">
          <span class="sub-title text-anime-style-2">TESTIMONIALS</span>
          <h2 class="sec-title text-anime-style-3">
            Le'ts Hear from Our Valued Students
          </h2>
        </div>
        <div class="slider-wrap">
          <div
            class="swiper th-slider testiSlide2 has-shadow"
            id="testiSlide2"
            data-slider-options='{"paginationType":"fraction","loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"}}}'
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Dr. Muhammad Nawaz
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >China -
                        </span>
                        <img
                          src="assets/img/testimonial/china-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    Al Madina Quran Academy is doing an amazing job sharing the
                    light of the Quran around the world. The teachers are
                    dedicated, and the quality of their teaching is truly
                    inspiring. May Allah bless this academy with more growth and
                    success.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Mr. Talha
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >Spain -
                        </span>
                        <img
                          src="assets/img/testimonial/spain-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    Learning the Quran online used to feel challenging, but that
                    changed when I joined Al Madina Quran Academy. Their
                    personal attention and flexible class timings make it the
                    perfect choice for busy people in Europe like me.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Mr. Rafi Humaion
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >Dubai -
                        </span>
                        <img
                          src="assets/img/testimonial/dubai-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    Al Madina Quran Academy really makes the Quran come alive.
                    They combine modern tools with traditional values, creating
                    a learning experience that's both effective and deeply
                    moving.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Dr. Muhammad Kaleem
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >England -
                        </span>
                        <img
                          src="assets/img/testimonial/england-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    I'm truly impressed by the professionalism and sincerity
                    maintained by Al Madina Quran Academy. The curriculum is
                    well-structured, and the teachers are knowledgeable &
                    spiritually inspiring. Highly recommended for all age
                    groups.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Mr. Hajat Mehdi
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >Dubai -
                        </span>
                        <img
                          src="assets/img/testimonial/dubai-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    I've had a wonderful experience with Al Madina Quran
                    Academy. The sincerity and patience of their instructors are
                    unmatched. I highly recommend them to anyone seeking true
                    knowledge of Islam.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Mr. Sheikh Muhammad Imtiaz
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >India -
                        </span>
                        <img
                          src="assets/img/testimonial/india-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    My children - Arhan, Alina, Adil, and Hussain - are learning
                    the Quran with excellent tajweed and understanding. I
                    appreciate the teachers' efforts and dedication towards
                    young learners.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Mr. Ahmad
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >Saudi Arabia -
                        </span>
                        <img
                          src="assets/img/testimonial/saudi-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    My four daughters are enrolled with Al Madina Quran Academy
                    and have shown great progress. The female teachers are
                    polite, experienced, and consistent in their teaching.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Mr. Waleed
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >Canada -
                        </span>
                        <img
                          src="assets/img/testimonial/canada-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    Al Madina Quran Academy has made it easier for families like
                    ours in the West to provide authentic Quran education to our
                    children. The team is reliable and professional.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Mr. Hamza
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >USA -
                        </span>
                        <img
                          src="assets/img/testimonial/usa-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    Exceptional service with deep Islamic values. My family has
                    benefited greatly from the structured Quran lessons and
                    flexible timings.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testi-box">
                  <div class="box-wrapp">
                    <div>
                      <div class="box-info">
                        <h3 class="box-title" style="margin-bottom: 3px">
                          Home Tuition Parents
                        </h3>
                        <span
                          class="box-desig"
                          style="font-size: 20px; font-weight: 600"
                          >Pakistan -
                        </span>
                        <img
                          src="assets/img/testimonial/pakistan-flag.webp"
                          alt=""
                          style="width: 50px; height: 30px"
                         loading="lazy" decoding="async" />
                      </div>
                    </div>
                    <div class="testi-logo">
                      <img
                        src="assets/img/hero/Nav_logo.webp"
                        alt="Al Madina Quran Academy Logo"
                        style="height: 100px; width: auto"
                       loading="lazy" decoding="async" />
                    </div>
                  </div>
                  <p class="box-text">
                    Having home Quran tuition through Al Madina Quran Academy
                    has been a blessing. The teachers are punctual, respectful,
                    and committed to delivering quality Islamic education.
                  </p>
                  <div class="testi-quote">
                    <img src="assets/img/icon/quote2.svg" alt=""  loading="lazy" decoding="async" />
                  </div>
                </div>
              </div>
            </div>

            <div class="text-center">
              <div class="slider-controller">
                <button
                  data-slider-prev="#testiSlide1"
                  class="slider-arrow default slider-prev"
                >
                  <i class="fa-thin fa-arrow-left-long"></i>
                </button>
                <div
                  class="slider-pagination white-color"
                  data-slider-id="#testiSlide1"
                ></div>
                <button
                  data-slider-next="#testiSlide1"
                  class="slider-arrow default slider-next"
                >
                  <i class="fa-thin fa-arrow-right-long"></i>
                </button>
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
