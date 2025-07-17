<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("infile/matafile.php"); ?>
  <!-- link css, font, icon start -->
  <?php include("infile/comcss.php"); ?>
  <!-- link css, font, icon end -->
</head>

<body>
  <!--navbar start-->
  <header class="header-area">
    <!-- site-navbar start -->
    <?php include("infile/header.php"); ?>
    <!-- navbar-area end -->
  </header>
  <!--navbar end-->

  <!--service banner start-->
  <section class="bg-dark service-banner" style="background-image:url(assets/image/banner/Risk-Management.webp);">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Risk Management
          </h1>
          <div class="fs-18 text-white f-nunito my-3">
            Mitigating Uncertainty, Maximizing Security
          </div>
          <button type="button" class="button model-form" data-modal-header="Request a Call Back">Request a Call Back</button>
        </div>
      </div>
    </div>
  </section>
  <!--service banner end-->

  <!--service description start-->
  <section class="service-description">
    <div class="container">
      <div class="row">
        <!--col start-->
        <div class="col-12">
          <div class="item">
            <h2>Brief Overview</h2>
            <p class="mt-3">
              Risk Management is a systematic process used to identify, assess, and control potential threats to an
              organization's objectives. It involves identifying risks, evaluating their likelihood and impact,
              developing strategies to mitigate or avoid them, and monitoring the effectiveness of these strategies.
              Risk management helps organizations make informed decisions, improve efficiency, and protect their assets
              and reputation.
            </p>
          </div>
        </div>
        <!--col end-->

        <!--col start-->
        <?php include("infile/schedule_a_free_call.php"); ?>
        <!--col start-->
      </div>
    </div>
  </section>
  <!--service description end-->

  <section class="category-related-service-sec pt-0">
    <div class="container">
      <div class="row g-md-4 g-3 justify-content-center">
        <div class="col-12 mb-2 mb-md-0">
          <div class="fs-28 text-center text-red f-raleway fw-bold">Related Standards & Frameworks</h2>
          </div>
        </div>
        <!--col start -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="risk-management-iso-31000-consulting-services" class="h-100 border-grey border-radius-10 hover d-block">
            <img src="assets/image/banner/ISO-31000.webp" alt="ISO 31000 Risk Management Standard"
              width="1061" height="525" class="d-block bg-dark img-fluid w-100">
            <div class="p-3">
              <div class="fs-16 f-raleway fw-bold text-start">
              ISO 31000 Risk Management Standard
              </div>
            </div>
          </a>
        </div>
        <!--col end -->
        <!--col start -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="iso-27005-risk-assessment-standard-consulting-services" class="h-100 border-grey border-radius-10 hover d-block">
            <img src="assets/image/banner/ISO-27005.webp" alt="ISO 27005 Risk Management Standard"
              width="1061" height="525" class="d-block bg-dark img-fluid w-100">
            <div class="p-3">
              <div class="fs-16 f-raleway fw-bold text-start">
              ISO 27005 Risk Management Standard
              </div>
            </div>
          </a>
        </div>
        <!--col end -->
        <!--col start -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="internal-audit-services" class="h-100 border-grey border-radius-10 hover d-block">
            <img src="assets/image/banner/Internal-Audit-Services.webp" alt="Internal Audit Services"
              width="1061" height="525" class="d-block bg-dark img-fluid w-100">
            <div class="p-3">
              <div class="fs-16 f-raleway fw-bold text-start">
              Internal Audit Services
              </div>
            </div>
          </a>
        </div>
        <!--col end -->
      </div>
    </div>
  </section>

  <!-- footer sec start -->
  <?php include("infile/footer.php"); ?>
  <!-- footer sec end-->
<?php include("infile/model-form.php");?>
</body>
<!-- link js start -->
<script src="assets/js/swiper-bundle.min.js" defer></script>
<script src="assets/js/script.js" defer></script>
<!-- link js end -->

</html>