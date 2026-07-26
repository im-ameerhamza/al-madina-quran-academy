
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <meta name="author" content="Al Madinah Quran Academy">

    <meta
        name="description"
        content="<?= htmlspecialchars($pageDescription) ?>"
    >

    <meta
        name="keywords"
        content="<?= htmlspecialchars($pageKeywords) ?>"
    >

   <meta name="robots" content="<?= $pageRobots ?? 'index, follow'; ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php if (($pageRobots ?? '') !== 'noindex, nofollow'): ?>
<link rel="canonical" href="https://almadinaquranacademy.org<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/hero/logo_1.webp" type="image/png" sizes="32x32">
    <link rel="icon" href="assets/img/hero/logo_1.webp" type="image/png" sizes="192x192">

    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet"
    >

    <!-- CSS -->
     <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
