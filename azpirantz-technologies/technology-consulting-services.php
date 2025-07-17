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
  <section class="bg-dark service-banner" style="background-image:url(assets/image/banner/Technical-Services.webp);">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Technical Services
          </h1>
          <div class="fs-18 text-white f-nunito my-3">
            Driving Efficiency Through Expert Technical Care
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
              Technical services encompass a wide range of specialized activities that require technical expertise.
              These services often involve the application of scientific, engineering, or technological knowledge to
              solve complex problems or provide specific solutions. Common technical services include IT support,
              software development, engineering consulting, technical writing, and maintenance and repair services. By
              outsourcing technical services, organizations can focus on their core competencies, reduce costs, and
              access specialized expertise.
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
          <a href="web-application-penetration-testing-service" class="h-100 border-grey border-radius-10 hover d-block">
            <img src="assets/image/banner/Web-Application-Penetration-Testing.webp"
              alt="Web Application Penetration Testing" width="1061" height="525"
              class="d-block bg-dark img-fluid w-100">
            <div class="p-3">
              <div class="fs-16 f-raleway fw-bold text-start">
              Web Application Penetration Testing
              </div>
            </div>
          </a>
        </div>
        <!--col end -->
        <!--col start -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="mobile-application-penetration-testing" class="h-100 border-grey border-radius-10 hover d-block">
            <img src="assets/image/banner/Mobile-Application-Penetration-Testing.webp" alt="Mobile Application Penetration Testing"
              width="1061" height="525" class="d-block bg-dark img-fluid w-100">
            <div class="p-3">
              <div class="fs-16 f-raleway fw-bold text-start">
              Mobile Application Penetration Testing
              </div>
            </div>
          </a>
        </div>
        <!--col end -->
        <!--col start -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="network-penetration-testing-services" class="h-100 border-grey border-radius-10 hover d-block">
            <img src="assets/image/banner/Network-Penetration-Testing.webp" alt="Network Penetration Testing" width="1061"
              height="525" class="d-block bg-dark img-fluid w-100">
            <div class="p-3">
              <div class="fs-16 f-raleway fw-bold text-start">
                Network Penetration Testing
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