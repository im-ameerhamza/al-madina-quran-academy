
<?php
    $siteUrl = 'https://almadinaquranacademy.org';
    $requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $canonicalUrl = $siteUrl . $requestPath;
    $pageImage = $pageImage ?? 'assets/img/hero/logo_1.webp';
    $pageImageUrl = preg_match('#^https?://#i', $pageImage)
        ? $pageImage
        : $siteUrl . '/' . ltrim($pageImage, '/');
?>
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

    <meta name="robots" content="<?= htmlspecialchars($pageRobots ?? 'index, follow', ENT_QUOTES, 'UTF-8'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php if (($pageRobots ?? '') !== 'noindex, nofollow'): ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:site_name" content="Al Madinah Quran Academy">
    <meta property="og:image" content="<?= htmlspecialchars($pageImageUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($pageImageUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "Al Madinah Quran Academy",
        "url": "https://almadinaquranacademy.org",
        "logo": "https://almadinaquranacademy.org/assets/img/hero/logo_1.webp",
        "description": "Online Quran classes with experienced tutors for students of all ages."
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/hero/logo_1.webp" type="image/webp" sizes="32x32">
    <link rel="icon" href="assets/img/hero/logo_1.webp" type="image/webp" sizes="192x192">

    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet"
    >

    <?php if (!empty($pagePreloadImage)): ?>
    <link rel="preload" as="image" href="<?= htmlspecialchars($pagePreloadImage, ENT_QUOTES, 'UTF-8'); ?>" fetchpriority="high">
    <?php endif; ?>

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
