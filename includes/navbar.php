<!--==============================
Mobile Menu
==============================-->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">

        <button class="th-menu-toggle">
            <i class="fal fa-times"></i>
        </button>

        <div class="mobile-logo">
            <a href="/" class="logo">
                <img
                    src="assets/img/hero/Nav_logo.webp"
                    alt="Al Madinah Quran Academy"
                >
            </a>
        </div>

        <div class="th-mobile-menu">
            <?php require 'nav-links.php'; ?>
        </div>

    </div>
</div>

<!--==============================
Desktop Header
==============================-->
<header class="th-header header-layout5">

    <div class="sticky-wrapper">

        <div
            class="menu-area"
            data-bg-src="assets/img/bg/pattern_bg_2.png"
        >

            <div class="container">

                <div class="row align-items-center justify-content-between">

                    <div class="col-auto">

                        <div class="header-logo">

                            <a href="/">

                                <img
                                    src="assets/img/hero/Nav_logo.webp"
                                    alt="Al Madinah Quran Academy"
                                    style="height:110px"
                                >

                            </a>

                        </div>

                    </div>

                    <div class="col-auto">

                        <div class="row align-items-center">

                            <div class="col-auto">

                                <nav class="main-menu d-none d-lg-inline-block">

                                    <?php require 'nav-links.php'; ?>

                                </nav>

                                <button
                                    type="button"
                                    class="th-menu-toggle d-inline-block d-lg-none"
                                >
                                    <i class="far fa-bars"></i>
                                </button>

                            </div>

                            <div class="col-auto d-none d-xxl-block">

                                <div class="header-button">

                                    <a
                                        href="/contact"
                                        class="th-btn style1 th-icon"
                                     aria-label="Get Free Trial">

                                        <span
                                            class="btn-text"
                                            data-back="Get Free Trial"
                                            data-front="Get Free Trial"
                                        ></span>

                                    </a>

                                    <a
                                        href="#"
                                        class="icon-btn sideMenuToggler d-none d-lg-block"
                                    >

                                        <img
                                            src="assets/img/icon/grid.svg"
                                            alt=""
                                        >

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="logo-shape"></div>

        </div>

    </div>

</header>