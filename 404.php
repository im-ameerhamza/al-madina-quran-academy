<?php
$pageTitle = "404 - Page Not Found | Al Madinah Quran Academy";
$pageDescription = "The page you are looking for could not be found.";
$pageKeywords = "";
$pageRobots = "noindex, nofollow";
$pagePreloadImage = "assets/img/bg/breadcumb-bg.jpg";
?>

<!doctype html>
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
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg" style="background-image: url('assets/img/bg/breadcumb-bg.jpg')">
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Error page</h1>
          <ul class="breadcumb-menu">
            <li><a href="index.php">Home</a></li>
            <li>404 Page</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
Error Area 
==============================-->
    <section
      class="error-area"
      style="background-image: url(&quot;assets/img/bg/about-bg-1.webp&quot;)"
    >
      <div class="container">
        <div class="error-content">
          <h2 class="error-title">404 Page</h2>
          <h5 class="h2 mb-0">Page Not Found!!</h5>
          <p class="error-text text-title mb-40">
            Oops! The page you’re looking for doesn’t exist
          </p>
          <a href="index.php" class="th-btn th-black"
            ><i class="fal fa-home me-2"></i>Back To Home</a
          >
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
