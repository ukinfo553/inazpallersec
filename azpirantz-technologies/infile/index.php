<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("infile/matafile.php");?>
  <!-- link css, font, icon start -->
  <?php include("infile/comcss.php");?>

</head>

<body>
  <!--navbar start-->
  <header class="header-area">
    <!-- site-navbar start -->
  <?php include("infile/header.php");?>
    <!-- navbar-area end -->
  </header>
  <!--navbar end-->

  <!--banner sec start-->
  <section class="banner p-md-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="item">
            <h1>Preserve, Protect, Prevail
              Comprehensive Consulting Services</h1>
            <h3 class="my-md-4 my-3">
              Information Security | Data Privacy | Penetration Testing | Business Continuity
            </h3>
            <button class="button">know more</button>
          </div>
        </div>
        <!-- <div class="col-lg-6">
          <div class="item">

          </div>
        </div> -->
      </div>
    </div>

    <video autoplay muted loop class="d-none d-lg-block">
      <source src="assets/image/home/video-kb.mp4" type="video/mp4">
    </video>
  </section>
  <!--banner sec end-->

  <!--highlights sec start-->
  <section class="py-4 py-lg-5 bg-grey highlights-sec">
    <div class="container">
      <div class="row row-cols-md-4 row-cols-2 gy-md-0 gy-2 gx-md-3 gx-lg-4">
        <!--col start-->
        <div class="col">
          <div class="item d-flex flex-md-row flex-column align-items-md-center gap-md-3 gap-2">
            <!--icon start-->
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35" fill="none">
              <g clip-path="url(#clip0_19448_1766)">
                <path
                  d="M17.9965 15.9462C22.2937 15.9462 25.7743 12.4656 25.7743 8.1684C25.7743 3.87118 22.2937 0.390625 17.9965 0.390625C13.6993 0.390625 10.2188 3.87118 10.2188 8.1684C10.2188 12.4656 13.6993 15.9365 17.9965 15.9462ZM17.9965 3.50174C20.5729 3.50174 22.6632 5.59201 22.6632 8.1684C22.6632 10.7448 20.5729 12.8351 17.9965 12.8351C15.4201 12.8351 13.3299 10.7448 13.3299 8.1684C13.3299 5.59201 15.4201 3.50174 17.9965 3.50174Z"
                  fill="#E50914" />
                <path
                  d="M21.112 17.5H14.8898C8.01615 17.5 2.45503 23.0708 2.44531 29.9444V33.0556C2.44531 33.9111 3.14531 34.6111 4.00087 34.6111H32.0009C32.8564 34.6111 33.5564 33.9111 33.5564 33.0556V29.9444C33.5564 23.0708 27.9856 17.5097 21.112 17.5ZM18.4384 20.6111L20.8884 27.9708L18.0009 30.8583L15.1134 27.9708L17.5634 20.6111H18.4286H18.4384ZM5.55642 29.9444C5.55642 25.0347 9.37726 20.9708 14.2773 20.6403L11.8564 27.8931C11.6717 28.4569 11.8175 29.0694 12.2356 29.4875L14.2481 31.5H5.55642V29.9444ZM30.4453 31.5H21.7536L23.7661 29.4875C24.1842 29.0694 24.33 28.4569 24.1453 27.8931L21.7245 20.6403C26.6245 20.9611 30.4356 25.0347 30.4453 29.9444V31.5Z"
                  fill="#E50914" />
              </g>
              <defs>
                <clipPath id="clip0_19448_1766">
                  <rect width="35" height="35" fill="white" transform="translate(0.5)" />
                </clipPath>
              </defs>
            </svg>
            <!--icon end-->
            <div class="content">
              <div class="fs-28 fw-bold f-raleway">250+</div>
              <p>Global Clients</p>
            </div>
          </div>
        </div>
        <!--col end-->
        <!--col start-->
        <div class="col">
          <div class="item d-flex flex-md-row flex-column align-items-md-center gap-md-3 gap-2">
            <!--icon start-->
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35" fill="none">
              <g clip-path="url(#clip0_19448_1773)">
                <path
                  d="M18 0C14.5388 0 11.1554 1.02636 8.27753 2.94928C5.39967 4.87221 3.15665 7.60533 1.83212 10.803C0.507583 14.0007 0.161024 17.5194 0.836265 20.9141C1.51151 24.3087 3.17822 27.427 5.62564 29.8744C8.07306 32.3218 11.1913 33.9885 14.5859 34.6637C17.9806 35.339 21.4993 34.9924 24.697 33.6679C27.8947 32.3434 30.6278 30.1003 32.5507 27.2225C34.4736 24.3446 35.5 20.9612 35.5 17.5C35.495 12.8603 33.6496 8.41197 30.3688 5.13117C27.088 1.85037 22.6398 0.00501824 18 0ZM32.5833 17.5C32.5851 20.3579 31.7418 23.1525 30.1596 25.5325L28.4213 23.7927C28.2849 23.6561 28.2084 23.4709 28.2083 23.2779V21.875C28.2083 20.7147 27.7474 19.6019 26.9269 18.7814C26.1065 17.9609 24.9937 17.5 23.8333 17.5H19.4583C19.0716 17.5 18.7006 17.3464 18.4271 17.0729C18.1537 16.7994 18 16.4284 18 16.0417V15.3125C18 15.1191 18.0768 14.9336 18.2136 14.7969C18.3503 14.6602 18.5358 14.5833 18.7292 14.5833C19.6961 14.5833 20.6234 14.1992 21.3072 13.5155C21.9909 12.8318 22.375 11.9044 22.375 10.9375V9.47917C22.375 9.28578 22.4518 9.10031 22.5886 8.96357C22.7253 8.82682 22.9108 8.75 23.1042 8.75H25.1152C26.0812 8.74725 27.0071 8.36367 27.6921 7.6825L28.2419 7.13271C29.6174 8.48615 30.7096 10.0999 31.455 11.8798C32.2004 13.6598 32.584 15.5703 32.5833 17.5ZM3.48813 18.9044L8.09355 23.5098C8.49882 23.9177 8.98106 24.241 9.51228 24.4611C10.0435 24.6811 10.6131 24.7935 11.1881 24.7917H15.0833C15.4701 24.7917 15.841 24.9453 16.1145 25.2188C16.388 25.4923 16.5417 25.8632 16.5417 26.25V32.009C13.1878 31.6666 10.0556 30.1746 7.67636 27.7861C5.29714 25.3976 3.8174 22.2596 3.48813 18.9044ZM19.4583 32.009V26.25C19.4583 25.0897 18.9974 23.9769 18.1769 23.1564C17.3565 22.3359 16.2437 21.875 15.0833 21.875H11.1881C10.9964 21.8752 10.8065 21.8375 10.6293 21.7642C10.4522 21.6908 10.2912 21.5833 10.1556 21.4477L3.65438 14.9465C4.07172 12.574 5.0715 10.3423 6.56401 8.4516C8.05653 6.56085 9.99508 5.0702 12.2057 4.1134C14.4164 3.15659 16.83 2.76356 19.2301 2.96958C21.6301 3.17559 23.9414 3.9742 25.9567 5.29375L25.63 5.62042C25.4927 5.75579 25.308 5.83219 25.1152 5.83333H23.1042C22.1372 5.83333 21.2099 6.21745 20.5262 6.90117C19.8425 7.5849 19.4583 8.51223 19.4583 9.47917V10.9375C19.4583 11.1309 19.3815 11.3164 19.2448 11.4531C19.108 11.5898 18.9226 11.6667 18.7292 11.6667C17.7622 11.6667 16.8349 12.0508 16.1512 12.7345C15.4675 13.4182 15.0833 14.3456 15.0833 15.3125V16.0417C15.0833 17.202 15.5443 18.3148 16.3647 19.1353C17.1852 19.9557 18.298 20.4167 19.4583 20.4167H23.8333C24.2201 20.4167 24.591 20.5703 24.8645 20.8438C25.138 21.1173 25.2917 21.4882 25.2917 21.875V23.2779C25.2944 24.2439 25.678 25.1698 26.3592 25.8548L28.309 27.8046C25.934 30.1878 22.8061 31.6736 19.4583 32.009Z"
                  fill="#E50914" />
              </g>
              <defs>
                <clipPath id="clip0_19448_1773">
                  <rect width="35" height="35" fill="white" transform="translate(0.5)" />
                </clipPath>
              </defs>
            </svg>
            <!--icon end-->
            <div class="content">
              <div class="fs-28 fw-bold f-raleway">24+</div>
              <p>Countries Covered</p>
            </div>
          </div>
        </div>
        <!--col end-->
        <!--col start-->
        <div class="col">
          <div class="item d-flex flex-md-row flex-column align-items-md-center gap-md-3 gap-2">
            <!--icon start-->
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35" fill="none">
              <mask id="mask0_19448_1778" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="36"
                height="35">
                <path d="M0.5 0H35.5V35H0.5V0Z" fill="white" />
              </mask>
              <g mask="url(#mask0_19448_1778)">
                <path
                  d="M28.3371 20.3751L29.7908 23.3206L33.0414 23.793L30.6893 26.0857L31.2446 29.3232L28.3371 27.7947L25.4297 29.3232L25.985 26.0857L23.6328 23.793L26.8834 23.3206L28.3371 20.3751Z"
                  stroke="#E50914" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M7.41525 20.3751L5.96155 23.3206L2.71094 23.793L5.06309 26.0857L4.5078 29.3232L7.41525 27.7947L10.3227 29.3232L9.7674 26.0857L12.1196 23.793L8.86894 23.3206L7.41525 20.3751Z"
                  stroke="#E50914" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M13.9453 6.94637C13.9453 9.19804 15.7706 11.0234 18.0224 11.0234C20.2741 11.0234 22.0995 9.19804 22.0995 6.94637C22.0995 4.6947 20.2741 2.8693 18.0224 2.8693C15.7706 2.8693 13.9453 4.6947 13.9453 6.94637Z"
                  stroke="#E50914" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M11.5469 19.1006H24.0929V17.2187C24.0929 13.7542 21.2844 10.9457 17.8199 10.9457C14.3554 10.9457 11.5469 13.7542 11.5469 17.2187V19.1006Z"
                  stroke="#E50914" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M17.9543 24.1524L19.408 27.098L22.6586 27.5703L20.3065 29.8631L20.8618 33.1006L17.9543 31.5721L15.0469 33.1006L15.6022 29.8631L13.25 27.5703L16.5006 27.098L17.9543 24.1524Z"
                  stroke="#E50914" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                  stroke-linejoin="round" />
              </g>
            </svg>
            <!--icon end-->
            <div class="content">
              <div class="fs-28 fw-bold f-raleway">4.4/5</div>
              <p>Industry Rating</p>
            </div>
          </div>
        </div>
        <!--col end-->
        <!--col start-->
        <div class="col">
          <div class="item d-flex flex-md-row flex-column align-items-md-center gap-md-3 gap-2">
            <!--icon start-->
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35" fill="none">
              <g clip-path="url(#clip0_19448_1795)">
                <path
                  d="M22.5077 23.329C32.0904 23.2808 35.5 18.2058 35.5 13.8542C35.5 11.4085 33.769 9.3625 31.4692 8.86812C31.6675 8.30375 31.8396 7.78604 31.9563 7.39375C32.471 5.65396 32.1371 3.815 31.0419 2.34938C29.9248 0.8575 28.2171 0 26.3548 0H9.64521C7.78292 0 6.07375 0.8575 4.95667 2.35083C3.86146 3.81646 3.52896 5.65542 4.04375 7.39375C4.16042 7.78604 4.33104 8.30375 4.53083 8.86812C2.23104 9.3625 0.5 11.4085 0.5 13.8542C0.5 18.2058 3.91104 23.2808 13.4923 23.329C13.574 23.7694 13.625 24.2185 13.625 24.675V29.1667C13.625 31.8296 11.385 32.0717 10.7083 32.0833H9.25C8.44354 32.0833 7.79167 32.7352 7.79167 33.5417C7.79167 34.3481 8.44354 35 9.25 35H26.75C27.5565 35 28.2083 34.3481 28.2083 33.5417C28.2083 32.7352 27.5565 32.0833 26.75 32.0833H25.3033C24.615 32.0717 22.375 31.8296 22.375 29.1667V24.675C22.375 24.2185 22.426 23.7694 22.5077 23.329ZM30.3958 11.6667C31.6019 11.6667 32.5833 12.6481 32.5833 13.8542C32.5833 16.8204 30.2369 19.9748 23.7808 20.3729C24.1031 19.9369 24.4721 19.5329 24.8921 19.1756C27.4281 17.0202 29.1694 14.14 30.3273 11.6521C30.3521 11.6521 30.371 11.6667 30.3958 11.6667ZM3.41667 13.8542C3.41667 12.6481 4.39813 11.6667 5.60417 11.6667C5.62896 11.6667 5.64937 11.6535 5.67271 11.6521C6.83063 14.14 8.57042 17.0188 11.1079 19.1756C11.5279 19.5329 11.8969 19.9354 12.2192 20.3729C5.76313 19.9748 3.41667 16.8204 3.41667 13.8542ZM15.8315 32.0833C16.2617 31.2944 16.5417 30.3421 16.5417 29.1667V24.675C16.5417 21.684 15.2496 18.8708 12.9965 16.9546C10.4167 14.7613 8.11542 10.8777 6.84083 6.56833C6.59 5.71813 6.75333 4.81833 7.29437 4.09792C7.85437 3.34687 8.71187 2.91667 9.64521 2.91667H26.3533C27.2867 2.91667 28.1442 3.34688 28.7042 4.09646C29.2423 4.81833 29.4071 5.71812 29.1577 6.56687C27.8817 10.8792 25.5804 14.7613 23.0021 16.9546C20.749 18.8694 19.4569 21.684 19.4569 24.675V29.1667C19.4569 30.3421 19.7354 31.2944 20.1671 32.0833H15.8315ZM14.7785 14.2377C14.3935 13.9723 14.2317 13.4823 14.3848 13.039L15.1417 10.6969L13.1496 9.23854C12.6727 8.88854 12.5692 8.21917 12.9192 7.74229C13.1204 7.46813 13.4413 7.30479 13.781 7.30479H16.2325L16.9777 4.98167C17.1658 4.41729 17.7754 4.11396 18.3398 4.30208C18.6606 4.40854 18.9129 4.66083 19.0194 4.98167L19.7631 7.30479H22.2146C22.8052 7.30479 23.285 7.78313 23.285 8.37521C23.285 8.71792 23.1217 9.03875 22.846 9.24L20.854 10.6983L21.6108 13.0404C21.7917 13.6033 21.4825 14.2071 20.9181 14.3894C20.5915 14.4944 20.2342 14.436 19.9571 14.2333L17.9985 12.7925L16.0385 14.2319C15.6652 14.5104 15.1548 14.5119 14.7785 14.2377Z"
                  fill="#E50914" />
              </g>
              <defs>
                <clipPath id="clip0_19448_1795">
                  <rect width="35" height="35" fill="white" transform="translate(0.5)" />
                </clipPath>
              </defs>
            </svg>
            <!--icon end-->
            <div class="content">
              <div class="fs-28 fw-bold f-raleway">Recognized</div>
              <p>by Cybersecurity Authorities</p>
            </div>
          </div>
        </div>
        <!--col end-->
      </div>
    </div>
  </section>
  <!--highlights sec end-->

  <!--service sec start-->
  <section class="service-sec">
    <div class="container">
      <!-- row satrt -->
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">Our Services</h2>
        </div>
      </div>
      <!-- row end -->

      <!--row start-->
      <div class="row tab-item gx-4 mt-4">
        <!--col start-->
        <div class="col-lg-4 col-md-4 d-none vertical-tabs d-md-flex gap-3 flex-column">
          <button type="button" class="tab vertical-tab-button d-flex align-items-center active" data-tab="tab-1">
            <img src="assets/image/service/Information-Security.svg" alt="Information and Cybersecurity" width="36"
              height="36">
            Information and Cybersecurity
          </button>
          <button type="button" class="tab vertical-tab-button d-flex align-items-center" data-tab="tab-2">
            <img src="assets/image/service/Data-Privacy.svg" alt="Data Privacy" width="36" height="36">
            Data Privacy
          </button>
          <button type="button" class="tab vertical-tab-button d-flex align-items-center" data-tab="tab-3">
            <img src="assets/image/service/Pen-Testing.svg" alt="Technical Services" width="36" height="36">
            Technical Services
          </button>
          <button type="button" class="tab vertical-tab-button d-flex align-items-center" data-tab="tab-4">
            <img src="assets/image/service/Business-Continuity.svg" alt="Business Continuity" width="36" height="36">
            Business Continuity
          </button>
          <button type="button" class="tab vertical-tab-button d-flex align-items-center" data-tab="tab-5">
            <img src="assets/image/service/Managed-Services.svg" alt="Managed Services" width="36" height="36">
            Managed Services
          </button>
        </div>
        <!--col end-->

        <!--col start-->
        <div class="col-lg-8 col-md-8 d-flex flex-column gap-3 gap-md-0">
          <!--tab item start-->
          <div class="tab-item">
            <!--tab content start-->

            <!--mobile tab button-->
            <button type="button" class="tab vertical-tab-button d-flex d-md-none align-items-center w-100 active"
              data-tab="tab-1">
              <img src="assets/image/service/Information-Security.svg" alt="Information and Cybersecurity" width="36"
                height="36">
              Information and Cybersecurity
            </button>

            <div class="vertical-content p-2 p-md-0 vertical-tab-content gap-3 align-items-start flex-column active"
              data-tab="tab-1">
              <!-- col start -->
              <div>
                <p class="fw-bold">
                  We offer robust Cybersecurity solutions that protect your organization from sophisticated threats,
                  ensuring the confidentiality, integrity, and availability of your critical data assets.
                </p>
              </div>
              <!-- col end --->
              <!-- col start -->
              <div class="d-flex justify-content-between align-items-center w-100">
                <!-- col start -->
                <div class="d-flex flex-column align-items-start gap-3">
                  <ul class="d-flex gap-2 flex-column">
                    <li>vCISO</li>
                    <li>ISO 27001 Standard</li>
                    <li>PCI-DSS</li>
                    <li>HIPAA Compliance</li>
                    <li>ISO 27017 Standard</li>
                    <li>ISO 27018 Standard</li>
                  </ul>
                  <a href="#" class="bg-white text-red border-red button">
                    explore more
                  </a>
                </div>
                <!-- col end --->
                <!-- col start -->
                <div class="d-none d-lg-block">
                  <img src="assets/image/home/Information-Cybersecurity.webp" alt="Information and Cybersecurity"
                    width="273" height="250" class="d-block ms-auto img-fluid">
                </div>
                <!-- col end --->
              </div>
              <!-- col end --->
            </div>
            <!--tab content start-->
          </div>

          <!--tab item start-->
          <div class="tab-item">
            <!--tab content start-->

            <!--mobile tab button-->
            <button type="button" class="tab vertical-tab-button d-flex d-md-none align-items-center w-100"
              data-tab="tab-2">
              <img src="assets/image/service/Data-Privacy.svg" alt="Data Privacy" width="36" height="36">
              Data Privacy
            </button>

            <div class="vertical-content p-2 p-md-0 vertical-tab-content gap-3 align-items-start flex-column"
              data-tab="tab-2">
              <!-- col start -->
              <div>
                <p class="fw-bold">
                  Our expertise in Data Privacy enables organizations to navigate complex regulations, safeguard
                  sensitive information, and build trust with clients through effective privacy practices.
                </p>
              </div>
              <!-- col end --->
              <!-- col start -->
              <div class="d-flex justify-content-between align-items-center w-100">
                <!-- col start -->
                <div class="d-flex flex-column align-items-start gap-3">
                  <ul class="d-flex gap-2 flex-column">
                    <li>vDPO</li>
                    <li>ISO 27701 Standard</li>
                    <li>Europe General Data Protection Regulation (GDPR) Compliance</li>
                    <li>Qatar Personal Data Privacy Protection Law (PDPPL) Compliance</li>
                    <li>India Digital Personal Data Protection Act (DPDPA) Compliance</li>
                    <li>UAE Personal Data Protection Law (PDPL) Compliance</li>
                  </ul>
                  <a href="#" class="bg-white text-red border-red button">
                    explore more
                  </a>
                </div>
                <!-- col end --->
                <!-- col start -->
                <div class="d-none d-lg-block">
                  <img src="assets/image/home/Data-Privacy.webp" alt="Data Privacy" width="273" height="250" class="d-block ms-auto img-fluid">
                </div>
                <!-- col end --->
              </div>
              <!-- col end --->
            </div>
            <!--tab content start-->
          </div>

          <!--tab item start-->
          <div class="tab-item">
            <!--tab content start-->

            <!--mobile tab button-->
            <button type="button" class="tab vertical-tab-button d-flex d-md-none align-items-center w-100"
              data-tab="tab-3">
              <img src="assets/image/service/Information-Security.svg" alt="Technical Services" width="36" height="36">
              Technical Services
            </button>

            <div class="vertical-content p-2 p-md-0 vertical-tab-content gap-3 align-items-start flex-column"
              data-tab="tab-3">
              <!-- col start -->
              <div>
                <p class="fw-bold">
                  We provide specialized Technical Services, including Vulnerability Assessments and Pen-testing, to
                  enhance your organization’s security posture and resilience against cyber threats.
                </p>
              </div>
              <!-- col end --->
              <!-- col start -->
              <div class="d-flex justify-content-between align-items-center w-100">
                <!-- col start -->
                <div class="d-flex flex-column align-items-start gap-3">
                  <ul class="d-flex gap-2 flex-column">
                    <li>Web Application Penetration Testing</li>
                    <li>Mobile Application Penetration Testing</li>
                    <li>Network Penetration Testing</li>
                  </ul>
                  <a href="#" class="bg-white text-red border-red button">
                    explore more
                  </a>
                </div>
                <!-- col end --->
                <!-- col start -->
                <div class="d-none d-lg-block">
                  <img src="assets/image/service/Information-Security.png" alt="Technical Services" width="273" height="250" class="d-block ms-auto img-fluid">
                </div>
                <!-- col end --->
              </div>
              <!-- col end --->
            </div>
            <!--tab content start-->
          </div>

          <!--tab item start-->
          <div class="tab-item">
            <!--tab content start-->

            <!--mobile tab button-->
            <button type="button" class="tab vertical-tab-button d-flex d-md-none align-items-center w-100"
              data-tab="tab-4">
              <img src="assets/image/service/Data-Privacy.svg" alt="Business Continuity" width="36" height="36">
              Business Continuity
            </button>

            <div class="vertical-content p-2 p-md-0 vertical-tab-content gap-3 align-items-start flex-column"
              data-tab="tab-4">
              <!-- col start -->
              <div>
                <p class="fw-bold">
                  We develop strategic Business Continuity plans that empower organizations to quickly recover from
                  disruptions, maintaining essential operations and protecting critical assets.
                </p>
              </div>
              <!-- col end --->
              <!-- col start -->
              <div class="d-flex justify-content-between align-items-center w-100">
                <!-- col start -->
                <div class="d-flex flex-column align-items-start gap-3">
                  <ul class="d-flex gap-2 flex-column">
                    <li>Business Continuity Planning</li>
                    <li>Business Impact Analysis</li>
                    <li>Disaster Recovery Planning</li>
                    <li>Crisis Management Planning</li>
                    <li>ISO 22301 Standard</li>
                  </ul>
                  <a href="#" class="bg-white text-red border-red button">
                    explore more
                  </a>
                </div>
                <!-- col end --->
                <!-- col start -->
                <div class="d-none d-lg-block">
                  <img src="assets/image/home/Business-Continuity.webp" alt="Business Continuity" width="273" height="250" class="d-block ms-auto img-fluid">
                </div>
                <!-- col end --->
              </div>
              <!-- col end --->
            </div>
            <!--tab content start-->
          </div>

          <!--tab item start-->
          <div class="tab-item">
            <!--tab content start-->

            <!--mobile tab button-->
            <button type="button" class="tab vertical-tab-button d-flex d-md-none align-items-center w-100"
              data-tab="tab-5">
              <img src="assets/image/service/Managed-Services.svg" alt="Managed Services" width="36" height="36">
              Managed Services
            </button>

            <div class="vertical-content p-2 p-md-0 vertical-tab-content gap-3 align-items-start flex-column"
              data-tab="tab-5">
              <!-- col start -->
              <div class="d-flex align-items-start flex-column">
                <p class="fw-bold">
                  Our comprehensive Managed Services provides tailored solutions to streamline your IT operations,
                  freeing you to focus on your core business.
                </p>
              </div>
              <!-- col end --->
              <!-- col start -->
              <div class="d-flex justify-content-between align-items-end w-100">
                <!-- col start -->
                <div class="d-flex flex-column align-items-start gap-3">
                  <ul class="d-flex gap-2 flex-column">
                    <li>Virtual Chief Information Security Officer (vCISO)</li>
                    <li>Virtual Data Protection Officer (vDPO)</li>
                    <li>Performance Management</li>
                    <li>Audit Management</li>
                    <li>Certification Management</li>
                  </ul>
                  <a href="#" class="bg-white text-red border-red button">
                    explore more
                  </a>
                </div>
                <!-- col end --->
                <!-- col start -->
                <div class="d-none d-lg-block">
                  <img src="assets/image/home/Managed-Services.webp" alt="Managed Services" width="273" height="250" class="d-block ms-auto img-fluid">
                </div>
                <!-- col end --->
              </div>
              <!-- col end --->
            </div>
            <!--tab content start-->
          </div>

        </div>
        <!--col end-->
      </div>
      <!--row end-->
    </div>
  </section>
  <!--service sec end-->

  <!--trusted cleint start-->
  <section class="p-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">Trusted by Enterprises Across the Globe</h2>
        </div>

        <div class="col-12 mt-md-4 mt-3">
          <div class="swiper clients">
            <div class="swiper-wrapper d-flex">
              <div class="swiper-slide">
                <img src="assets/image/clientS/Airtel.png" alt="Airtel" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/Accenture.png" alt="Accenture" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/American-Express.png" alt="American-Express" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/AstraZeneca.png" alt="AstraZeneca" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/BHEL.png" alt="BHEL" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/BOA.png" alt="BOA" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/BPCL.png" alt="BPCL" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clientS/Dell.png" alt="Dell" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/Fidelity.png" alt="Fidelity" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/HCL.png" alt="HCL" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/HDFC.png" alt="HDFC" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/ICICI-Prudential.png" alt="ICICI-Prudential" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/Invesco.png" alt="Invesco" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/KPMG.png" alt="KPMG" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/Medline.png" alt="Medline" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/PWC.png" alt="PWC" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/SONY.png" alt="SONY" width="116" height="58" class="d-block img-fluid">
              </div>
              <div class="swiper-slide">
                <img src="assets/image/clients/Unilever.png" alt="Unilever" width="116" height="58" class="d-block img-fluid">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--trusted client end-->

  <!--Industry Expertise sec start-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="fs-28 text-red fw-bold f-raleway text-center">
            Industry Expertise
          </div>
          <p class="mt-4 text-center">
            With deep expertise in cybersecurity, we partner with clients across diverse industries to implement
            advanced security frameworks tailored to their unique needs. We’re committed to delivering comprehensive
            solutions that enhance resilience and protect against evolving threats.
          </p>
        </div>
        <!--col start-->
      </div>

      <div class="row g-3 g-md-4 mt-0">
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="item p-md-3 p-2 bg-grey border-grey border-radius-10 h-100 d-flex flex-column justify-content-between">
            <h3 class="text-red fw-bold mb-md-3 mb-2">Banking</h3>
            <p>
              The banking sector, due to the value of its stored data, is highly vulnerable to cyber threats.
              Digitalization has intensified these risks, necessitating robust cybersecurity systems in financial
              institutions to protect sensitive information effectively.
            </p>
            <img src="assets/image/industries/government.svg" alt="Banking" width="45" height="45" class="d-block img-fluid ms-auto mt-md-3 mt-2">
          </div>
        </div>
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="item p-md-3 p-2 bg-grey border-grey border-radius-10 h-100 d-flex flex-column justify-content-between">
            <h3 class="text-red fw-bold mb-md-3 mb-2">Manufacturing</h3>
            <p>
              The manufacturing industry faces threats like internal breaches, equipment sabotage, and supply chain
              attacks. Among them, operational threats are most common. Cybersecurity safeguards this sector by
              enforcing two-factor authentication and raising employee awareness of potential risks.
            </p>
            <img src="assets/image/home/industry-expertise/manufacturing.svg" alt="Manufacturing" width="45" height="45" class="d-block img-fluid ms-auto mt-md-3 mt-2">
          </div>
        </div>
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="item p-md-3 p-2 bg-grey border-grey border-radius-10 h-100 d-flex flex-column justify-content-between">
            <h3 class="text-red fw-bold mb-md-3 mb-2">Oil and Gas</h3>
            <p>
              Cyber attacks on the oil and gas industry target Operational Technology, IoT, and IT systems. These
              threats can disrupt operations and lead to data breaches. Implementing stringent physical and network
              security measures is crucial to protecting this sector.
            </p>
            <img src="assets/image/home/industry-expertise/Oil-Gas.svg" alt="Oil and Gas" width="45" height="45" class="d-block img-fluid ms-auto mt-md-3 mt-2">
          </div>
        </div>
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="item p-md-3 p-2 bg-grey border-grey border-radius-10 h-100 d-flex flex-column justify-content-between">
            <h3 class="text-red fw-bold mb-md-3 mb-2">Insurance</h3>
            <p>
              In the digitized insurance sector, web-based applications increase exposure to cyber risks. To mitigate
              these threats, companies need advanced cybersecurity systems that protect sensitive data and strengthen
              their defenses against potential cyber attacks.
            </p>
            <img src="assets/image/home/industry-expertise/Insurance.svg" alt="Insurance" width="45" height="45" class="d-block img-fluid ms-auto mt-md-3 mt-2">
          </div>
        </div>
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="item p-md-3 p-2 bg-grey border-grey border-radius-10 h-100 d-flex flex-column justify-content-between">
            <h3 class="text-red fw-bold mb-md-3 mb-2">Public Services</h3>
            <p>
              Public services often face ransomware attacks due to outdated technology. Advanced Threat Protection (ATP)
              is essential to counter such risks, ensuring secure, uninterrupted service delivery and safeguarding
              sensitive public data.
            </p>
            <img src="assets/image/home/industry-expertise/Public-Services.svg" alt="Public Services" width="45" height="45" class="d-block img-fluid ms-auto mt-md-3 mt-2">
          </div>
        </div>
        <!--col start-->
        <div class="col-lg-4 col-md-6">
          <div class="item p-md-3 p-2 bg-grey border-grey border-radius-10 h-100 d-flex flex-column justify-content-between">
            <h3 class="text-red fw-bold mb-md-3 mb-2">Healthcare</h3>
            <p>
              Cybersecurity in healthcare addresses threats like botnets, phishing, and cloud misconfigurations.
              Protecting medical devices and patient data is paramount, and implementing HIPAA-compliant security
              measures is crucial for this highly regulated industry.
            </p>
            <img src="assets/image/home/industry-expertise/Healthcare.svg" alt="Healthcare" width="45" height="45" class="d-block img-fluid ms-auto mt-md-3 mt-2">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Industry Expertise sec end-->

  <!-- why infosectrain sec start-->
  <?php include("infile/why_azpirantz.php");?>
  <!-- why infosectrain sec end-->

  <!-- cta sec start-->
  <?php include("infile/book_a_free_call.php");?>
  <!--cta sec end-->

  <!-- testimonial sec start -->
   <?php include("infile/testimonial.php");?>
  <!-- testimonial sec end -->

  <!-- footer sec start -->
  <?php include("infile/footer.php");?>
  <!-- footer sec end-->
<?php include("infile/model-form.php");?>
</body>
<!-- link js start -->
<script src="assets/js/swiper-bundle.min.js" defer></script>
<script src="assets/js/script.js" defer></script>
<!-- link js end -->

</html>