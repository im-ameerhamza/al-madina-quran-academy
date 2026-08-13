<?php
$pageTitle = "Contact Us | Al Madinah Quran Academy";
$pageDescription = "Contact Al Madinah Quran Academy for admissions, free trial classes and any questions regarding our online Quran courses.";
$pageKeywords = "Contact Quran Academy, Free Trial Quran Class, Quran Admission";
$pagePreloadImage = "assets/img/bg/contact-us-banner.webp";
$pageImage = $pagePreloadImage;
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
      data-bg-src="assets/img/bg/contact-us-banner.webp"
      style="background-image: url('assets/img/bg/contact-us-banner.webp')"
    >
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Contact info</h1>
          <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
Contact Info Area  
==============================-->
    <div
      style="background-image: url(&quot;assets/img/bg/about-bg-1.webp&quot;)"
    >
      <div class="space">
        <div class="container">
          <div class="row gy-4">
            <div class="col-xl-4 col-lg-6">
              <div class="contact-media">
                <div class="icon-btn">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="media-body">
                  <h5 class="box-title">Address</h5>
                  <p class="box-text">
                    456 Oak Avenue, Vancouver, BC V5K 3N7 Canada
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="contact-media">
                <div class="icon-btn">
                  <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="media-body">
                  <h5 class="box-title">Phone Number</h5>
                  <p class="box-text">
                    <a href="tel:+923234874809">+92-323-4874-809</a>
                    <a href="tel:+923308177651">+92-330-8177- 651</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="contact-media">
                <div class="icon-btn">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="media-body">
                  <h5 class="box-title">Email Address</h5>
                  <p class="box-text">
                    <a href="mailto:info@almadinaquranacademy.org"
                      >info@almadinaquranacademy.org</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--==============================
Contact Area   
==============================-->
      <div class="space-bottom">
        <div class="container">
          <div class="row gx-0 gy-4">
            <div class="col-xl-6">
              <form
                action="mail.php"
                method="POST"
                class="contact-form2 input-smoke ajax-contact"
              >
                <h3 class="h2">How Can We Help You?</h3>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name" class="form-label fs-18">Name*</label>
                    <input
                      type="text"
                      class="form-control fs-18"
                      name="name"
                      id="name"
                      placeholder="Enter your full name"
                      required
                    />
                  </div>

                  <div class="form-group col-md-6 fs-18">
                    <label for="number" class="form-label fs-18">Phone*</label>
                    <input
                      type="tel"
                      class="form-control fs-18"
                      name="number"
                      id="number"
                      placeholder="Phone Number"
                      required
                    />
                  </div>

                  <div class="form-group col-12">
                    <label for="email" class="form-label fs-18">Email*</label>
                    <input
                      type="email"
                      class="form-control fs-18"
                      name="email"
                      id="email"
                      placeholder="example@email.com"
                      required
                    />
                  </div>

                  <div class="form-group col-12">
                    <label for="subject" class="form-label fs-18"
                      >Reason of Contact*</label
                    >
                    <select
                      name="subject"
                      id="subject"
                      class="form-select nice-select fs-18"
                      required
                    >
                      <option value="" disabled selected hidden>Select*</option>
                      <option value="Registration">Registration</option>
                      <option value="Free-Trial">Get Free Trial</option>
                      <option value="Query">Query</option>
                    </select>
                  </div>

                  <div class="form-group col-12">
                    <label for="message" class="form-label fs-18"
                      >Your Message*</label
                    >
                    <textarea
                      name="message"
                      id="message"
                      cols="30"
                      rows="3"
                      class="form-control fs-18"
                      placeholder="Write your message here..."
                      required
                    ></textarea>
                  </div>

                  <div class="form-btn col-12">
                    <button type="submit" class="th-btn fs-18">
                      <span
                        class="btn-text fs-18"
                        data-back="Submit Form"
                        data-front="Submit Form"
                      ></span>
                    </button>
                  </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
              </form>
            </div>
            <div class="col-xl-6">
              <div class="contact-image">
                <img
                  src="assets/img/bg/contact-us-side.webp"
                  alt="contact us img"
                 loading="lazy" decoding="async" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--==============================
Map Area  
==============================-->
      <div class="d-none d-lg-block">
        <div class="contact-map">
          <iframe
            src="https://www.google.com/maps?q=456+Oak+Avenue,+Vancouver,+BC+V5K+3N7,+Canada&output=embed"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
          <div class="contact-icon">
            <img src="assets/img/icon/location-dot.svg" alt="Location Icon"  loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
    </div>
    <!--==============================
	Footer Area
==============================-->
    <?php require_once 'includes/footer.php'; ?>

    <!--==============================
    All Js File
============================== -->
  <?php require_once 'includes/script.php'; ?>
    <!-- form-data -->
    <script src="assets/js/form-data.js"></script>

    <!-- Pre-fill contact form from Fee Structure "Select Plan" links -->
    <script>
      (() => {
        const planData = {
          "student-basic": { package: "Student", plan: "Basic", price: "$20/month" },
          "student-standard": { package: "Student", plan: "Standard", price: "$25/month" },
          "student-premium": { package: "Student", plan: "Premium", price: "$45/month" },
          "student-professional": { package: "Student", plan: "Professional", price: "$35/month" },
          "family-basic": { package: "Family", plan: "Basic", price: "$40/month" },
          "family-standard": { package: "Family", plan: "Standard", price: "$45/month" },
          "family-premium": { package: "Family", plan: "Premium", price: "$85/month" },
          "family-professional": { package: "Family", plan: "Professional", price: "$70/month" },
        };

        const slug = window.location.pathname.split("/").filter(Boolean).pop();
        const info = planData[slug];

        if (!info) return;

        const subjectEl = document.getElementById("subject");
        const messageEl = document.getElementById("message");

        if (subjectEl) subjectEl.value = "Registration";

        if (messageEl) {
          messageEl.value = `I'm interested in the ${info.package} Package - ${info.plan} Plan (${info.price}). Please share the next steps for enrollment.`;
        }
      })();
    </script>
  </body>
</html>
