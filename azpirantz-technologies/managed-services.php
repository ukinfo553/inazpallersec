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
  <section class="bg-dark service-banner" style="background-image:url(assets/image/banner/Managed-Services.webp);">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Managed Services
          </h1>
          <div class="fs-18 text-white f-nunito my-3">
            Proactive Management, Peak Performance
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
              Managed services is a service delivery model in which an external service provider manages and delivers IT
              services to an organization. This includes managing infrastructure, applications, and other IT resources.
              By outsourcing IT functions to a managed service provider (MSP), organizations can reduce costs, improve
              efficiency, and focus on their core business activities. MSPs typically offer a range of services, such as
              network management, security, cloud services, and help desk support.
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
          <a href="virtual-ciso-advisory-services" class="h-100 border-grey border-radius-10 hover d-block">
            <img src="assets/image/banner/Virtual-Chief-Information-Security-Officer.webp" alt="Virtual Chief Information Security Officer"
              width="1061" height="525" class="d-block bg-dark img-fluid w-100">
            <div class="p-3">
              <div class="fs-16 f-raleway fw-bold text-start">
              Virtual Chief Information Security Officer (vCISO)
              </div>
            </div>
          </a>
        </div>
        <!--col end -->
        <!--col start -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="virtual-data-protection-officer-services" class="h-100 border-grey border-radius-10 hover d-block">
            <img src="assets/image/banner/Virtual-Data-Protection-Officer.webp" alt="Virtual Data Protection Officer"
              width="1061" height="525" class="d-block bg-dark img-fluid w-100">
            <div class="p-3">
              <div class="fs-16 f-raleway fw-bold text-start">
              Virtual Data Protection Officer (vDPO)
              </div>
            </div>
          </a>
        </div>
        <!--col end -->
        <!--col start -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="certification-management-services" class="h-100 border-grey border-radius-10 hover d-block">
            <img src="assets/image/banner/Certification-Management.webp" alt="Certification Management"
              width="1061" height="525" class="d-block bg-dark img-fluid w-100">
            <div class="p-3">
              <div class="fs-16 f-raleway fw-bold text-start">
              Certification Management
              </div>
            </div>
          </a>
        </div>
        <!--col end -->
      </div>
    </div>
  </section> <!-- Related sec end -->

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