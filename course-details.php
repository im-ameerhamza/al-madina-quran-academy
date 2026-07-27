<?php
$pageTitle = "Course Details | Al Madinah Quran Academy";
$pageDescription = "Explore our online Quran courses including Noorani Qaida, Nazra Quran, Tajweed, Hifz, Tarjmat-ul-Quran, Hadith and Islamic studies with experienced teachers.";
$pageKeywords = "Online Quran Courses, Noorani Qaida, Nazra Quran, Hifz Quran, Tajweed Course, Islamic Studies";
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
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/courses-bg.webp">
      <div class="container">
        <div class="breadcumb-content">
          <h1 id="course-title" class="breadcumb-title">Course Details</h1>
          <ul class="breadcumb-menu">
            <li><a href="popular-courses.php">Popular Courses</a></li>
            <li>Popular courses</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
    event Area
==============================-->
    <section
      class="space-top space-extra-bottom overflow-hidden"
      style="background-image: url('assets/img/bg/about-bg-1.webp')"
    >
      <div class="container">
        <div class="row gx-60">
         <div id="course-details" class="col-xxl-9 col-lg-8">
  <div class="course-loader">
    <div class="loader-spinner"></div>
    <p>Loading Course</p>
  </div>
</div>

          <div class="col-xxl-3 col-lg-4">
            <aside class="sidebar-area">
              <div class="widget widget_categories">
                <h3 class="widget_title">Popular Courses</h3>
                <ul>
                  <li>
                    <a href="course-details.php?id=1">Madani Noorani Qaida</a>
                  </li>
                  <li>
                    <a href="course-details.php?id=2"
                      >Nazra Quran With Tajweed</a
                    >
                  </li>
                  <li>
                    <a href="course-details.php?id=3"
                      >Hifz-e-Quran with Tajweed</a
                    >
                  </li>
                  <li>
                    <a href="course-details.php?id=4">Tarjmat ul Quran</a>
                  </li>
                  <li>
                    <a href="course-details.php?id=5">Tajweed Course</a>
                  </li>

                  <li>
                    <a href="course-details.php?id=6">Farz-E-Uloom Course</a>
                  </li>
                  <li>
                    <a href="course-details.php?id=7">The Hadith Course</a>
                  </li>
                  <li>
                    <a href="course-details.php?id=8"
                      >Darse Nizami Short Course</a
                    >
                  </li>
                  <li>
                    <a href="course-details.php?id=12">Namaz Course</a>
                  </li>
                  <li>
                    <a href="course-details.php?id=11">Aqaid-o-Fiqh Course</a>
                  </li>
                </ul>
              </div>
            </aside>
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
  <script src="assets/js/blog/blogs.js"></script>
<script src="assets/js/blog/render.js"></script>

  </body>
</html>
