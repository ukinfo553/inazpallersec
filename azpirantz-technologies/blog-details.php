<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("infile/matafile.php"); ?>
  <!-- link css, font, icon start -->
  <?php include("infile/comcss.php"); ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .social-share a {
      width: 40px;
      height: 40px;
      display: flex;
      border-bottom: 1px solid var(--white);
      border-radius: 50px;
      justify-content: center;
      align-items: center;
      background: var(--white);
      font-size: 14px;
      font-weight: bold;
    }

    /* The modal background */
    /* The modal background */
    .copyUrlModal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    /* Modal content */
    .copyUrlModal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 300px;
      text-align: center;
    }

    /* Close button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <!--navbar start-->
  <header class="header-area">
    <!-- site-navbar start -->
    <?php include("infile/header.php"); ?>
    <!-- navbar-area end -->
  </header>

  <!--navbar end-->

  <!--banner sec start-->
  <section class="pt-3" style="background-image:var(--gradient-primary);">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <!-- breadcrumb start -->
          <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
          <!-- breadcrumb end -->
          <h1 class="text-white">
            What is a Blog and Why Blogs are Important
          </h1>
          <!-- Share Section Heading -->
          <h3 class="text-white mt-4">Share This Article</h3>
          <!-- Social Share Buttons -->
          <div class="social-share mt-4 d-flex justify-content-center gap-2">
            <!-- Facebook Share -->
            <a href="https://www.facebook.com/sharer/sharer.php?u=#&quote=Check%20out%20this%20blog%20about%20the%20importance%20of%20blogs!"
              target="_blank" style="color:#1877f2;">
              <i class="fab fa-facebook-f"></i>
            </a>
            <!-- Twitter Share -->
            <a href="https://twitter.com/intent/tweet?url=#&text=Check%20out%20this%20blog%20about%20the%20importance%20of%20blogs!"
              target="_blank" style="color:#1da1f2;">
              <i class="fab fa-twitter"></i>
            </a>
            <!-- LinkedIn Share -->
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=#&title=What%20is%20a%20Blog%20and%20Why%20Blogs%20are%20Important&summary=Check%20out%20this%20blog%20about%20the%20importance%20of%20blogs!"
              target="_blank" style="color:#0a66c2;">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <!-- WhatsApp Share -->
            <a href="https://api.whatsapp.com/send?text=Check%20out%20this%20blog%20about%20the%20importance%20of%20blogs!%20#&url="
              target="_blank" style="color:#25d366;">
              <i class="fab fa-whatsapp"></i>
            </a>
            <!-- Copy URL Button -->
            <a href="javascript:void(0)" onclick="copyURL()" style="color:#f26b21;">
              <i class="fas fa-link"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal for copy confirmation -->
  <div id="copyUrlModal" class="copyUrlModal">
    <div class="copyUrlModal-content">
      <span class="close">&times;</span>
      <p>Article copied!</p>
    </div>
  </div>

  <!-- Add JavaScript for Copy URL functionality -->
  <script>
    // Get the modal by its new ID
    var modal = document.getElementById("copyUrlModal");

    // Get the <span> element to close the modal
    var span = document.getElementsByClassName("close")[0];

    // Function to copy the current page URL and show modal
    function copyURL() {
      const url = window.location.href; // Get the current page URL
      navigator.clipboard.writeText(url).then(function () {
        // Show the modal if the URL is copied successfully
        modal.style.display = "block";
      }, function (err) {
        alert('Error copying URL: ' + err);
      });
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <!--banner sec end-->

  <!-- blog sec start -->
  <section class="blog-sec">
    <div class="container">
      <div class="row g-4">
        <div class="col-12">

        </div>
      </div>
    </div>
  </section>
  <!-- blog sec end -->

  <!-- footer sec start -->
  <?php include("infile/footer.php"); ?>
  <!-- footer sec end-->
  <?php include("infile/model-form.php"); ?>
</body>
<!-- link js start -->
<script src="assets/js/swiper-bundle.min.js" defer></script>
<script src="assets/js/script.js" defer></script>
<!-- link js end -->

</html>