<?php
// Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Get user's real IP
function getUserIpAddr()
{
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        return $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        return $forward;
    } else {
        return $remote;
    }
}

// Generic function to fetch data via cURL
function getdata($url, $args = false)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    if ($args) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

// Detect country based on IP
if (!isset($_SESSION['country']) || empty($_SESSION['country'])) {
    $ip = getUserIpAddr();
    $details = getdata("https://ipinfo.io/" . $ip . "/?token=116180fd94c9d5");
    $details = json_decode($details);
    $_SESSION['country'] = isset($details->country) ? $details->country : '';
}

$country = $_SESSION['country'];
?>

<!-- <?php include('include/comman_use.php'); ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands-On IT Audit Skills to Lead & Scale</title>
    <meta name="description" content="LLM Security & Red Teaming Masterclass">
    <meta name="robots" content="index, follow" />
    <link rel="icon" href="assets/images/favicon.ico">
    <!--/ style link start /-->
    <link href="assets/css/bootstrap-grid.css" rel="stylesheet" defer>
    <link rel="stylesheet" href="assets/css/custom.css" defer>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!--/ style link end /-->
    <!-- Google Tag Manager -->
    <script>
        setTimeout(function() {
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js"
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-5XZDRWG");
        }, 10000);
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- <?php
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
                $pag_url = "https://";
            } else {
                $pag_url = "http://";
            }
            // Append the host(domain name, ip) to the URL.
            $pag_url .= $_SERVER['HTTP_HOST'];
            // Append the requested resource location to the URL
            $pag_url .= $_SERVER['REQUEST_URI'];
            ?> -->

    <main>
        <!--banner sec start-->
        <style>
            .video-bg {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                object-fit: cover;
                z-index: -1;
            }

            .content {
                position: relative;
                z-index: 1;
                color: white;
                text-align: center;
                top: 40%;
                font-size: 2em;
                font-family: sans-serif;
            }

            .speakers {
                transition: box-shadow 0.3s ease;
                border-radius: 18px;
            }

            .speakers:hover {
                background: linear-gradient(180deg, rgba(10, 0, 23, 0.00) 46.43%, #0A0017 78.37%);
                /* box-shadow: 0px 0px 20px 0px #6C0AE2; */
                cursor: pointer;
            }


            .owl-carousel .owl-item img {
                height: 30px;
                /* your desired height */
                object-fit: contain;
                /* crops image to fit nicely */
                width: 100%;
                /* make sure it fills width */
            }
        </style>
        <!-- Background Video -->

        <section class="hero-section" style="background: #080808; background-image:url(assets/images/banner-bg.webp); background-repeat: no-repeat;
    background-position: right;">
            <!-- Background Video -->
            <!-- <video class="video-background" autoplay muted loop playsinline>
                    <source src="assets/videos/background.mp4" type="video/mp4">
                    Fallback for browsers that don't support video -
                    Your browser does not support the video tag.
                </video> -->

            <!-- <img class="video-background web-banner" src="assets/images/llm-red-bg.webp" alt="llm-red-bg">
                <img class="video-background mobile-banner" src="assets/images/mobile-banner.webp" alt="mobile-banner"> -->
            <!-- Logo Section -->

            <!-- Main Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-item d-flex flex-column gap-4 justify-content-center align-items-start">
                            <img src="assets/images/logo.png" alt="LLM Security & Red Teaming Masterclass"
                                class="img-fluid ">
                            <div>
                                <!-- <div class="fs-16 f-general-sans text-white mb-md-4"
                                        style="text-transform: uppercase;letter-spacing: 16px;font-weight: 200;">
                                        PRESENTS
                                    </div> -->
                                <h1 id="typing-one">Hands-On IT Audit<br> <span>Skills to Lead & Scale</span></h1>

                            </div>
                            <div class="live-badge align-items-center d-flex gap-md-4 gap-2">
                                <img src="assets/images/live.gif" width="77" height="24" alt="">
                                <div class="d-flex gap-3 flex-wrap">
                                    <div class="fs-18 f-general-sans text-white d-flex gap-3 align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                            viewBox="0 0 16 17" fill="none">
                                            <path
                                                d="M12.3333 1.83333H12V1.5C12 0.947333 11.552 0.5 11 0.5C10.448 0.5 10 0.947333 10 1.5V1.83333H6V1.5C6 0.947333 5.552 0.5 5 0.5C4.448 0.5 4 0.947333 4 1.5V1.83333H3.66667C1.64533 1.83333 0 3.478 0 5.5V12.8333C0 14.8553 1.64533 16.5 3.66667 16.5H12.3333C14.3547 16.5 16 14.8553 16 12.8333V5.5C16 3.478 14.3547 1.83333 12.3333 1.83333ZM12.3333 14.5H3.66667C2.74733 14.5 2 13.752 2 12.8333V6.5H14V12.8333C14 13.752 13.2527 14.5 12.3333 14.5ZM6.66667 8.83333V10.1667C6.66667 10.7187 6.21867 11.1667 5.66667 11.1667H4.33333C3.78133 11.1667 3.33333 10.7187 3.33333 10.1667V8.83333C3.33333 8.28133 3.78133 7.83333 4.33333 7.83333H5.66667C6.21867 7.83333 6.66667 8.28133 6.66667 8.83333Z"
                                                fill="#FFB956" />
                                        </svg>
                                        <span>29-30 November 2025</span>
                                    </div>
                                    <div class="fs-18 f-general-sans text-white d-flex gap-3 align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                            viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_27955_89061)">
                                                <path
                                                    d="M8.99761 1.91V1.5C8.99761 1.23478 8.89225 0.98043 8.70472 0.792893C8.51718 0.605357 8.26283 0.5 7.99761 0.5C7.73239 0.5 7.47804 0.605357 7.2905 0.792893C7.10297 0.98043 6.99761 1.23478 6.99761 1.5V1.91C5.72585 2.08173 4.52168 2.58513 3.50609 3.36964C2.49051 4.15415 1.69928 5.19213 1.2119 6.37928C0.724531 7.56644 0.55818 8.86095 0.729566 10.1328C0.900952 11.4046 1.40404 12.6089 2.18828 13.6247C1.91224 13.8515 1.69156 14.1384 1.54301 14.4633C1.39445 14.7883 1.32192 15.1428 1.33094 15.5C1.33094 15.7652 1.4363 16.0196 1.62384 16.2071C1.81137 16.3946 2.06573 16.5 2.33094 16.5C2.59616 16.5 2.85051 16.3946 3.03805 16.2071C3.22559 16.0196 3.33094 15.7652 3.33094 15.5C3.32076 15.4009 3.34549 15.3014 3.40087 15.2186C3.45626 15.1359 3.53881 15.075 3.63428 15.0467C4.89327 15.9894 6.42378 16.4989 7.99661 16.4989C9.56944 16.4989 11.1 15.9894 12.3589 15.0467C12.4548 15.0747 12.5378 15.1353 12.5936 15.2181C12.6493 15.3009 12.6744 15.4007 12.6643 15.5C12.6643 15.7652 12.7696 16.0196 12.9572 16.2071C13.1447 16.3946 13.3991 16.5 13.6643 16.5C13.9295 16.5 14.1838 16.3946 14.3714 16.2071C14.5589 16.0196 14.6643 15.7652 14.6643 15.5C14.6733 15.1428 14.6008 14.7883 14.4522 14.4633C14.3037 14.1384 14.083 13.8515 13.8069 13.6247C14.5912 12.6089 15.0943 11.4046 15.2657 10.1328C15.437 8.86095 15.2707 7.56644 14.7833 6.37928C14.2959 5.19213 13.5047 4.15415 12.4891 3.36964C11.4735 2.58513 10.2694 2.08173 8.99761 1.91ZM2.66428 9.16667C2.66428 8.11183 2.97707 7.08069 3.56311 6.20363C4.14914 5.32656 4.98209 4.64298 5.95663 4.23931C6.93117 3.83564 8.00353 3.73002 9.03809 3.93581C10.0727 4.1416 11.023 4.64955 11.7688 5.39543C12.5147 6.14131 13.0227 7.09162 13.2285 8.12619C13.4343 9.16075 13.3286 10.2331 12.925 11.2076C12.5213 12.1822 11.8377 13.0151 10.9607 13.6012C10.0836 14.1872 9.05244 14.5 7.99761 14.5C6.58361 14.4984 5.22798 13.936 4.22813 12.9361C3.22828 11.9363 2.66586 10.5807 2.66428 9.16667Z"
                                                    fill="#FFB956" />
                                                <path
                                                    d="M13 0.501286C12.7348 0.501286 12.4804 0.606643 12.2929 0.79418C12.1054 0.981716 12 1.23607 12 1.50129C12 1.7665 12.1054 2.02086 12.2929 2.20839C12.4804 2.39593 12.7348 2.50129 13 2.50129C13.1327 2.49096 13.2661 2.50997 13.3907 2.55698C13.5152 2.60398 13.6279 2.67782 13.7208 2.77326C13.8136 2.86869 13.8843 2.98339 13.9278 3.10921C13.9714 3.23503 13.9867 3.36889 13.9727 3.50129C13.9727 3.7665 14.078 4.02086 14.2656 4.20839C14.4531 4.39593 14.7074 4.50129 14.9727 4.50129C15.2379 4.50129 15.4922 4.39593 15.6798 4.20839C15.8673 4.02086 15.9727 3.7665 15.9727 3.50129C15.9881 3.1055 15.922 2.71077 15.7784 2.34162C15.6349 1.97247 15.4169 1.63679 15.1381 1.35544C14.8593 1.07409 14.5257 0.853074 14.1578 0.706134C13.79 0.559194 13.3959 0.489467 13 0.501286Z"
                                                    fill="#FFB956" />
                                                <path
                                                    d="M2.02563 3.50129C2.01164 3.36889 2.02695 3.23503 2.07048 3.10921C2.11401 2.98339 2.1847 2.86869 2.27753 2.77326C2.37036 2.67782 2.48305 2.60398 2.60762 2.55698C2.73218 2.50997 2.86556 2.49096 2.9983 2.50129C3.26352 2.50129 3.51787 2.39593 3.70541 2.20839C3.89294 2.02086 3.9983 1.7665 3.9983 1.50129C3.9983 1.23607 3.89294 0.981716 3.70541 0.79418C3.51787 0.606643 3.26352 0.501286 2.9983 0.501286C2.60239 0.489467 2.20828 0.559194 1.84046 0.706134C1.47264 0.853074 1.13897 1.07409 0.860182 1.35544C0.581393 1.63679 0.363443 1.97247 0.219876 2.34162C0.0763086 2.71077 0.0101918 3.1055 0.0256338 3.50129C0.0256338 3.7665 0.130991 4.02086 0.318527 4.20839C0.506063 4.39593 0.760417 4.50129 1.02563 4.50129C1.29085 4.50129 1.5452 4.39593 1.73274 4.20839C1.92028 4.02086 2.02563 3.7665 2.02563 3.50129Z"
                                                    fill="#FFB956" />
                                                <path
                                                    d="M9.02344 8.75397V6.16797C9.02344 5.90275 8.91808 5.6484 8.73054 5.46086C8.54301 5.27333 8.28865 5.16797 8.02344 5.16797C7.75822 5.16797 7.50387 5.27333 7.31633 5.46086C7.12879 5.6484 7.02344 5.90275 7.02344 6.16797V9.02997C7.02351 9.38356 7.16404 9.72265 7.4141 9.97264L8.60944 11.168C8.79804 11.3501 9.05064 11.4509 9.31284 11.4486C9.57504 11.4464 9.82585 11.3412 10.0113 11.1558C10.1967 10.9704 10.3018 10.7196 10.3041 10.4574C10.3064 10.1952 10.2056 9.94257 10.0234 9.75397L9.02344 8.75397Z"
                                                    fill="#FFB956" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_27955_89061">
                                                    <rect width="16" height="16" fill="white"
                                                        transform="translate(0 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>7:00 PM – 11:00 PM (IST)</span>
                                    </div>
                                </div>
                            </div>


                            <div
                                class="d-flex flex-wrap justify-content-md-start justify-content-center gap-3 feature-boxes">
                                <div class="feature-box d-flex align-items-center gap-2">

                                    <span>2 Days</span>
                                </div>

                                <div class="feature-box d-flex align-items-center gap-2">

                                    <span>Practical ITGC, IAM & TPRM Audits</span>
                                </div>

                                <div class="feature-box d-flex align-items-center gap-2">

                                    <span>Case Studies & Simulations</span>
                                </div>

                                <!-- <div class="feature-box d-flex align-items-center gap-2">

                                        <span>8 CPE Credits</span>
                                    </div> -->
                            </div>

                            <div class="d-flex gap-4 align-items-center mt-2">
                                <button class="button modal-btn" modal-title="Join Now">
                                    <span class="btn-text">Register Now!</span>
                                    <span class="price" style="display: flex; gap:16px; align-items: center;">
                                        <del class="old">₹3999/-</del>
                                        <span class="new">₹999/-</span>
                                    </span>
                                </button>
                            </div>

                            <!-- <div class="special-offer">
                                    <?php if ($country == 'IN') { ?>
                                    <img src="assets/images/prices/indian-price.png" alt="special-offer"
                                        style="width: 100%; margin:auto;">
                                    <?php } else { ?>
                                    <img src="assets/images/prices/usd-offer.png"
                                        alt="LLM Security & Red Teaming Masterclass" class="w-100 d-block">
                                    <?php } ?>
                                </div> -->

                            <!-- <div class="owl-carousel" style="border-radius: 8px;
background: rgba(8, 8, 8, 0.40); padding: 12px 16px;">
                                    <div><img src="assets/images/carousal-1.png" alt="Slide 1"></div>
                                    <div><img src="assets/images/carousal-2.png" alt="Slide 2"></div>
                                    <div><img src="assets/images/carousal-3.png" alt="Slide 3"></div>
                                    <div><img src="assets/images/carousal-4.png" alt="Slide 4"></div>
                                    <div><img src="assets/images/carousal-5.png" alt="Slide 5"></div>
                                    <div><img src="assets/images/carousal-6.png" alt="Slide 6"></div>
                                    <div><img src="assets/images/carousal-7.png" alt="Slide 7"></div>
                                    <div><img src="assets/images/carousal-8.png" alt="Slide 8"></div>
                                    <div><img src="assets/images/carousal-9.png" alt="Slide 9"></div>
                                    <div><img src="assets/images/carousal-10.png" alt="Slide 10"></div>
                                    <div><img src="assets/images/carousal-11.png" alt="Slide 11"></div>
                                </div> -->
                            <!-- <div class="d-flex flex-wrap justify-content-center gap-4 align-items-center mt-2">
                                    <?php if ($country == 'IN') { ?>
                                    <a href="https://pages.razorpay.com/infosectrain-llm-masterclass" class="button">Pay
                                        Now</a>

                                    <?php } else { ?>
                                    <a href="https://pages.razorpay.com/ist-llm-masterclass" class="button">Pay Now</a>
                                    <?php } ?>
                                    <a href="assets/LLM-Security-Red-Team-Masterclass.pdf"
                                        download="LLM Security Red Team Masterclass Brochure" class="button" style="    background: transparent;
    color: #FFB956;
    border: 1px solid #FFB956;">
                                        Download Agenda
                                    </a>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner sec end-->

        <!-- <section class="p-lg-0 pt-0" style="background: #0A0017;">
                <div class="container">
                    <div class="row g-4 flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-8"> -->
        <!-- <h2>
                                Master Tools, Build Trust <br> & Lead the <span id="typing-two" class="f-unicephalon"
                                    style="background: linear-gradient(89deg, #2738ED 0%, #6C0AE2 98.66%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text; /* For Firefox */
  color: transparent;">AI Revolution</span>
                            </h2> -->
        <!-- </div> -->

        <!-- <div class="col-md-4">
                            <?php if ($country == 'IN') { ?>
                            <img src="assets/images/prices/inr-offer.png" alt="LLM Security & Red Teaming Masterclass" class="w-100 d-block">
                            <?php } else { ?>
                            <img src="assets/images/prices/usd-offer.png" alt="LLM Security & Red Teaming Masterclass" class="w-100 d-block">
                            <?php } ?>
                        </div> -->
        <!-- </div>
                </div>
            </section> -->

        <section style="background: #080808; padding:0px;">
            <div class="container">
                <div class="row flex-column-reverse flex-lg-row">
                    <div class="col-12 mt-4 mt-lg-0">
                        <div class="item">
                            <div class="fs-28 text-white fw-700 f-Raleway" style="color: var(--Soft-Orange, #FFB956);
font-style: normal;
line-height: normal;font-family: 'Raleway'">
                                Why Attend?
                            </div>
                            <p class="mt-3 text-white f-Nunito Sans">
                                Organizations today seek IT auditors who can not only execute audits but also drive
                                scalable processes. This 2-day program blends foundational theory with hands-on
                                audit
                                practice to build skills that help you lead IT audits and align with business
                                growth.

                            </p>
                            <p class="text-white f-Nunito Sans f-18 fw-700" style="margin: 24px 0px;">What sets this
                                training
                                apart:</p>
                            <div class="row g-4">
                                <div class="col-lg-3 col-md-6">
                                    <div class="learning-card h-100">
                                        <h3>Hands-On Practice</h3>
                                        <p>Perform audits, gather evidence, and report findings.</p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="learning-card h-100">
                                        <h3>Scalable Audit Skills</h3>
                                        <p>Apply ITGC, IAM, TPRM frameworks to real cases.</p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="learning-card h-100">
                                        <h3>Leadership Edge</h3>
                                        <p>Communicate results, manage issues, ensure compliance.</p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="learning-card h-100">
                                        <h3>Career Advancement</h3>
                                        <p>Build experience, gain recognition, and earn CPEs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fs-28 text-white fw-700 f-Raleway mt-5 mb-4" style="color: var(--Soft-Orange, #FFB956);
font-style: normal;
line-height: normal; font-family: 'Raleway'" id="experts">
                            Expert Speaker
                        </div>

                        <div class="row gap-4">
                            <div class="d-flex flex-column flex-md-row gap-3">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/speakers/aarti.png" alt="Aarti"
                                        class="img-fluid d-block">
                                </div>
                                <div class="flex-grow-1 d-flex flex-column gap-2">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="text-white fs-24 f-general-sans">Aarti</div>
                                        <div class="exp fs-16 text-white f-general-sans" style="border-radius: 16px;
background: rgba(255, 185, 86, 0.50); padding:8px 16px;">
                                            17+ Years of Experience
                                        </div>
                                    </div>
                                    <div class="certifications fs-18 text-white f-general-sans">
                                        CISA | CSX | CISM | CIA (Part 1) | CCAK | Cloud Compliance | Risk & Audit
                                        Specialist
                                    </div>
                                    <p class="fs-16 f-general-sans text-white">
                                        Aarti is a battle-tested IT audit and risk management professional with deep
                                        expertise across Big 4 consulting, global financial institutions, and
                                        regulatory
                                        environments.
                                    </p>
                                </div>
                            </div>

                            <div class="p-4" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(72, 72, 72, 0.10);">
                                <div class="fs-18 f-general-sans text-white fw-bold">
                                    Her specializations include:
                                </div>
                                <ul>
                                    <li class="text-white fs-16 f-general-sans">ITGC audits and regulatory
                                        compliance
                                        (GDPR, UK SOX, FCA/PRA)</li>
                                    <li class="text-white fs-16 f-general-sans">Operational resilience and data
                                        governance</li>
                                    <li class="text-white fs-16 f-general-sans">ISO standards, NIST frameworks, and
                                        COBIT implementation</li>
                                    <li class="text-white fs-16 f-general-sans">Cybersecurity risk assessment and
                                        cloud
                                        compliance</li>
                                </ul>
                                <p class="text-white fs-16 f-general-sans my-3">
                                    With leadership roles at PwC, AXA XL, and JUST Group, Aarti has architected
                                    transformative governance programs that bridge technical risk with business
                                    strategy.
                                </p>
                                <p class="text-white fs-16 f-general-sans">
                                    She doesn't just teach frameworks—she shows you how to apply them under
                                    pressure, at
                                    scale, with real business impact.
                                </p>
                            </div>
                        </div>

                        <!--price tag start-->
                        <!-- <picture class="my-5 d-block">
                            <source media="(min-width:768px)" srcset="assets/images/prices/desk.png">
                            <img src="assets/images/prices/mob.png" alt="Flowers" class="w-100 d-block">
                        </picture> -->
                        <!--price tag end-->

                        <!--detaisl cta sec start -->
                        <div class="row details-cta-sec p-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="item item-one">
                                    <div class="fs-18" style="border-radius: 16px;
background: rgba(8, 8, 8, 0.50);display: flex;
padding: 16px;
flex-direction: column;">
                                        <p style="color: var(--WHITE, #FFF);
font-family:Nunito Sans;
                                            
                                            font-style: normal;
                                            text-align:center;
                                            font-weight: 400;
                                            line-height: normal;">Ready to Audit like a Pro?</p>
                                        <p style="color: var(--WHITE, #FFF);
text-align: center;
font-family: Raleway;
font-size: 24px;
font-style: normal;
font-weight: 700;
line-height: normal;">Join the training now!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="item item-two">
                                    <p style="color: var(--WHITE, #FFF);
text-align: center;
font-family:Nunito Sans;
                                        font-size: 18px;
                                        font-style: normal;
                                        font-weight: 400;
                                        line-height: normal;">Master IT Audit and Scale New Heights in Your Career.
                                        Register for the global training now
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="item item-three">
                                    <div class="d-flex flex-wrap align-items-center mt-2">
                                        <button class="button modal-btn modal-button" modal-title="Join Now">
                                            <span class="btn-text">Register Now!</span>
                                            <span class="price"
                                                style="display: flex; gap:16px; align-items: center;">
                                                <del class="old">₹3999/-</del>
                                                <span class="new">₹999/-</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--detaisl cta sec end -->




                        <div class="fs-28 text-white fw-700 f-Raleway mt-5 mb-4" style="color: var(--Soft-Orange, #FFB956);
font-style: normal;
line-height: normal;font-family: 'Raleway';
" id=" masterclass-agenda">
                            Masterclass Agenda
                        </div>
                        <p
                            style="color: var(--WHITE, #FFF);
font-family: Nunito Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal; margin:24px 0px;">
                        <p
                            style="color: var(--WHITE, #FFF);
font-family: Nunito Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal; margin:24px 0px;">
                            The
                            masterclass comprises two 4-hour sessions, running from <b>7 PM to 11 PM (IST)</b> on
                            both days.</p>
                        </p>
                        <div class="faq-wrapper">
                            <!--/ faq item /-->
                            <div class="d-flex gap-3 text-white align-items-center f-general-sans fs-16">

                                <span>Day 1 (4-Hour Session)</span>
                                <!-- <span>|</span>
                                <span>1 November</span> -->
                            </div>
                            <div class="faq-item active open">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <!-- <img src="assets/images/speakers/kiran1.png" alt=""> -->
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600"> Day 1: Laying the Foundation</strong>
                                        </div>
                                    </span>
                                    <span class="right-icon"></span>
                                </h3>
                                <div class="faq-content">

                                    <ul>
                                        <li>Welcome & Masterclass Objectives
                                        </li>
                                        <li>IT Audit Fundamentals - <b>Roles, Standards, Frameworks</b></li>
                                        <li>Risk Assessment Principles & Methodologies <b>(Case Study)</b></li>
                                        <li>ITGC Audit Planning - <b>Hands-On Scenario</b></li>
                                        <li>Identity Access Management: Control & Audit Testing <b>(Group
                                                Activity)</b></li>
                                        <li>Q&A, Recap & Close</li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ faq item /-->

                            <!--/ faq item /-->
                            <div class="d-flex gap-3 text-white align-items-center f-general-sans fs-16 mt-4">

                                <span>Day 2 (4-Hour Session)</span>

                            </div>
                            <!--/ faq item /-->
                            <div class="faq-item">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <!-- <img src="assets/images/speakers/shakti1.png" alt=""> -->
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600">Day 2: Scaling Audit Skill</strong>
                                        </div>
                                    </span>
                                    <span class="right-icon"></span>
                                </h3>
                                <div class="faq-content">

                                    <ul>
                                        <li>Recap & Day 2 Kickoff</li>
                                        <li>Audit Evidence & Documentation <b>(Group Exercise)</b></li>
                                        <li>Communicating Findings & Issue Management <b>(Simulation)</b></li>
                                        <li>TPRM Review & Practical Testing <b>(ISO 27001, NIST 2.0, FCA/PRA)</b>
                                        </li>
                                        <li>Knowledge Assessment & Interactive Survey</li>
                                        <li>Wrap-up: Reflection, Certificates, Next Steps</li>

                                    </ul>
                                </div>
                            </div>
                            <!--/ faq item /-->
                        </div>
                        <div class="my-4" id="key-takeaways">
                            <div class="fs-28 text-white fw-700 f-Raleway mt-5 mb-4" style="color: var(--Soft-Orange, #FFB956);
font-style: normal;
line-height: normal;font-family: 'Raleway'" ;>
                                Key Takeaways
                            </div>

                            <div class=" d-flex flex-md-row flex-column gap-4 mt-3">
                                <div class="takeaway-card align-items-center gap-3 w-100" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
padding: 24px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M24 7.49219V16.8462C24 18.1872 23.512 19.4792 22.625 20.4842C22.076 21.1062 21.13 21.1652 20.508 20.6172C19.887 20.0692 19.827 19.1212 20.375 18.5002C20.778 18.0432 21 17.4562 21 16.8472V7.49219C21 6.11419 19.879 4.99219 18.5 4.99219H5.5C4.121 4.99219 3 6.11419 3 7.49219V16.4922C3 17.8702 4.121 18.9922 5.5 18.9922H8.5C9.328 18.9922 10 19.6632 10 20.4922C10 21.3212 9.328 21.9922 8.5 21.9922H5.5C2.468 21.9922 0 19.5252 0 16.4922V7.49219C0 4.45919 2.468 1.99219 5.5 1.99219H18.5C21.532 1.99219 24 4.45919 24 7.49219ZM19 8.49219C19 7.66319 18.328 6.99219 17.5 6.99219H6.5C5.672 6.99219 5 7.66319 5 8.49219C5 9.32119 5.672 9.99219 6.5 9.99219H17.5C18.328 9.99219 19 9.32119 19 8.49219ZM19.5 16.4922C19.5 18.0492 18.705 19.4222 17.5 20.2302V23.3392C17.5 23.9622 16.709 24.2292 16.331 23.7342L15 21.9912L13.669 23.7342C13.291 24.2292 12.5 23.9622 12.5 23.3392V20.2302C11.295 19.4222 10.5 18.0482 10.5 16.4922C10.5 14.0112 12.519 11.9922 15 11.9922C17.481 11.9922 19.5 14.0112 19.5 16.4922ZM13.5 16.4922C13.5 17.3192 14.173 17.9922 15 17.9922C15.827 17.9922 16.5 17.3192 16.5 16.4922C16.5 15.6652 15.827 14.9922 15 14.9922C14.173 14.9922 13.5 15.6652 13.5 16.4922ZM6.5 11.9922C5.672 11.9922 5 12.6632 5 13.4922C5 14.3212 5.672 14.9922 6.5 14.9922H7.5C8.328 14.9922 9 14.3212 9 13.4922C9 12.6632 8.328 11.9922 7.5 11.9922H6.5Z"
                                            fill="#FBE9D6" />
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white mt-3">
                                        Earn 6 CPE Credits
                                    </div>
                                </div>

                                <div class="takeaway-card w-100" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
padding: 24px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_28669_424)">
                                            <path
                                                d="M1.50018 18C1.50018 16.895 2.39518 16 3.50018 16C4.60518 16 5.50018 16.895 5.50018 18C5.50018 19.105 4.60518 20 3.50018 20C2.39518 20 1.50018 19.105 1.50018 18ZM12.0002 16C10.8952 16 10.0002 16.895 10.0002 18C10.0002 19.105 10.8952 20 12.0002 20C13.1052 20 14.0002 19.105 14.0002 18C14.0002 16.895 13.1052 16 12.0002 16ZM12.0002 4C13.1052 4 14.0002 3.105 14.0002 2C14.0002 0.895 13.1052 0 12.0002 0C10.8952 0 10.0002 0.895 10.0002 2C10.0002 3.105 10.8952 4 12.0002 4ZM20.5002 16C19.3952 16 18.5002 16.895 18.5002 18C18.5002 19.105 19.3952 20 20.5002 20C21.6052 20 22.5002 19.105 22.5002 18C22.5002 16.895 21.6052 16 20.5002 16ZM3.50018 15C4.32918 15 5.00018 14.328 5.00018 13.5C5.00018 12.672 5.67318 12 6.50018 12H10.5002V13.5C10.5002 14.328 11.1712 15 12.0002 15C12.8292 15 13.5002 14.328 13.5002 13.5V12H17.5002C18.3272 12 19.0002 12.673 19.0002 13.5C19.0002 14.327 19.6712 15 20.5002 15C21.3292 15 22.0002 14.328 22.0002 13.5C22.0002 11.019 19.9812 9 17.5002 9H6.50018C4.01918 9 2.00018 11.019 2.00018 13.5C2.00018 14.328 2.67118 15 3.50018 15ZM23.9692 23.315C23.4572 21.967 22.1032 21 20.5002 21C18.8972 21 17.5432 21.966 17.0312 23.315C16.9042 23.648 17.1822 24 17.5562 24H23.4432C23.8182 24 24.0962 23.648 23.9692 23.315ZM3.50018 21C1.89718 21 0.543181 21.966 0.0311813 23.315C-0.0958187 23.648 0.182181 24 0.556181 24H6.44318C6.81818 24 7.09518 23.648 6.96818 23.315C6.45618 21.967 5.10318 21 3.50018 21ZM12.0002 21C10.3972 21 9.04318 21.966 8.53118 23.315C8.40418 23.648 8.68218 24 9.05618 24H14.9432C15.3182 24 15.5952 23.648 15.4682 23.315C14.9562 21.967 13.6022 21 11.9992 21H12.0002ZM9.05618 8H14.9432C15.3182 8 15.5952 7.648 15.4682 7.315C14.9562 5.967 13.6022 5 11.9992 5C10.3962 5 9.04218 5.966 8.53018 7.315C8.40318 7.648 8.68218 8 9.05618 8Z"
                                                fill="#FBE9D6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_28669_424">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white mt-3">
                                        Real-World Audit Practice
                                    </div>
                                </div>

                                <div class="takeaway-card w-100" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
padding: 24px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_28669_420)">
                                            <path
                                                d="M4.017 20.202C4.733 19.787 5.652 20.032 6.067 20.749C6.158 20.906 6.32 20.999 6.501 20.999H13.501C13.776 20.999 14.001 20.775 14.001 20.499V19.499C14.001 18.67 14.673 17.999 15.501 17.999H16.11C17.367 17.999 18.433 17.059 18.59 15.812L18.905 13.311C19 12.561 19.637 11.998 20.393 11.998H20.783C20.169 10.527 18.475 7.463 17.481 6.233C16.029 4.296 13.824 3.12 11.429 3.007C10.602 2.968 9.962 2.266 10.001 1.438C10.039 0.611 10.764 -0.038 11.569 0.01C14.861 0.165 17.89 1.777 19.846 4.39C20.864 5.647 23.998 10.881 23.998 12.543C23.998 13.689 23.199 14.906 21.715 14.993L21.565 16.186C21.256 18.638 19.348 20.551 16.972 20.929C16.758 22.656 15.283 23.997 13.498 23.997H6.498C5.252 23.997 4.091 23.327 3.467 22.248C3.053 21.531 3.298 20.613 4.015 20.199L4.017 20.202ZM8 2V6C8 7.105 7.105 8 6 8H2C0.895 8 0 7.105 0 6V2C0 0.895 0.895 0 2 0H6C7.105 0 8 0.895 8 2ZM6.715 2.11C6.321 1.707 5.673 1.709 5.282 2.114L3.454 4.006L2.677 3.185C2.285 2.771 1.627 2.768 1.232 3.179C0.862 3.563 0.86 4.171 1.226 4.558L1.995 5.371C2.782 6.203 4.104 6.21 4.9 5.386L6.72 3.503C7.096 3.114 7.094 2.496 6.716 2.109L6.715 2.11ZM0 12V16C0 17.105 0.895 18 2 18H6C7.105 18 8 17.105 8 16V12C8 10.895 7.105 10 6 10H2C0.895 10 0 10.895 0 12Z"
                                                fill="#FBE9D6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_28669_420">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white mt-3">
                                        Master ITGC, IAM, TPRM
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-md-row flex-column gap-4 mt-3">

                                <div class="takeaway-card w-100" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
padding: 24px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M20.1816 4.18062C18.841 4.03797 17.5216 3.73975 16.25 3.29198C15.0831 2.87968 13.9637 2.34341 12.9111 1.69237C12.6365 1.52566 12.3213 1.4375 12 1.4375C11.6787 1.4375 11.3635 1.52566 11.0889 1.69237L11.0879 1.69337C10.0355 2.34388 8.9165 2.87981 7.75 3.29198C6.47868 3.73966 5.15959 4.03789 3.81934 4.18065C3.38882 4.22474 2.98997 4.42703 2.70005 4.74834C2.41013 5.06964 2.24976 5.48711 2.25 5.91988V11.1152C2.2507 13.0321 2.76367 14.9139 3.73582 16.566C4.70796 18.218 6.10395 19.5803 7.7793 20.5117L11.1494 22.3847C11.409 22.5307 11.7017 22.6073 11.9995 22.6073C12.2973 22.6073 12.5901 22.5307 12.8496 22.3847L16.2207 20.5117C17.896 19.5803 19.292 18.218 20.2642 16.566C21.2363 14.9139 21.7493 13.0321 21.75 11.1152V5.91988C21.7503 5.48725 21.5901 5.0699 21.3003 4.7486C21.0106 4.42731 20.612 4.22493 20.1816 4.18062ZM15.9795 10.1826L12.2295 14.1826C12.0514 14.373 11.806 14.4861 11.5456 14.498C11.2853 14.5099 11.0306 14.4195 10.8359 14.2461L8.58594 12.2461C8.3878 12.07 8.26775 11.8224 8.25218 11.5577C8.23661 11.2931 8.32681 11.0331 8.50293 10.835C8.67905 10.6368 8.92666 10.5168 9.1913 10.5012C9.45594 10.4856 9.71592 10.5758 9.91406 10.752L11.4365 12.1045L14.5205 8.81544C14.6141 8.71574 14.7271 8.63624 14.8526 8.58182C14.978 8.5274 15.1133 8.49921 15.25 8.49898C15.4449 8.49908 15.6356 8.55616 15.7986 8.6632C15.9615 8.77024 16.0896 8.92256 16.1671 9.10144C16.2446 9.28032 16.2681 9.47796 16.2348 9.67004C16.2015 9.86212 16.1127 10.0403 15.9795 10.1826Z"
                                            fill="#FBE9D6" />
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white mt-3">
                                        Scale Audit Operations
                                    </div>
                                </div>

                                <div class="takeaway-card w-100" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
padding: 24px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M10.2284 8.75058C12.6615 10.0962 15.9067 8.18625 15.8445 5.34276C15.8431 4.32403 15.4378 3.34743 14.7174 2.62707C13.9971 1.90671 13.0205 1.5014 12.0017 1.5C7.96802 1.55091 6.71229 6.88636 10.2284 8.75058Z"
                                            fill="#FBE9D6" />
                                        <path
                                            d="M6.17594 15.5818H17.8279C18.1478 15.5807 18.4542 15.4532 18.6804 15.227C18.9065 15.0008 19.0341 14.6944 19.0351 14.3746V12.8675C19.0355 12.1771 18.8183 11.5042 18.4145 10.9443C18.0108 10.3844 17.4408 9.96589 16.7857 9.74825L14.6975 9.05469C13.9151 9.62479 12.9719 9.93195 12.0038 9.93195C11.0357 9.93195 10.0926 9.62479 9.31014 9.05469L7.21817 9.74825C6.56305 9.96589 5.99313 10.3844 5.58934 10.9443C5.18556 11.5042 4.96841 12.1771 4.96875 12.8675V14.3746C4.96982 14.6944 5.09736 15.0008 5.32352 15.227C5.54968 15.4532 5.85611 15.5807 6.17594 15.5818Z"
                                            fill="#FBE9D6" />
                                        <path
                                            d="M21.4189 18.1741H20.4179C20.3961 18.1743 20.3749 18.1674 20.3574 18.1546C20.3398 18.1418 20.3268 18.1236 20.3204 18.1029L20.0092 17.1506C19.9514 16.9813 19.842 16.8344 19.6965 16.7303C19.5509 16.6263 19.3765 16.5703 19.1976 16.5703C19.0187 16.5703 18.8442 16.6263 18.6987 16.7303C18.5531 16.8344 18.4438 16.9813 18.3859 17.1506L18.0785 18.1029C18.0711 18.123 18.0579 18.1406 18.0405 18.1533C18.0232 18.1659 18.0025 18.1732 17.981 18.1741H16.98C16.7998 18.1733 16.6239 18.2297 16.4778 18.3352C16.3316 18.4407 16.2228 18.5899 16.1669 18.7613C16.111 18.9327 16.111 19.1174 16.1669 19.2888C16.2227 19.4602 16.3315 19.6094 16.4777 19.715L17.2874 20.3036C17.3041 20.3174 17.3165 20.3356 17.3231 20.3562C17.3298 20.3768 17.3304 20.3988 17.3249 20.4198L17.0138 21.372C16.9587 21.5436 16.9593 21.7282 17.0154 21.8994C17.0716 22.0706 17.1804 22.2197 17.3264 22.3253C17.4724 22.431 17.648 22.4878 17.8282 22.4876C18.0084 22.4874 18.1839 22.4302 18.3297 22.3243L19.1357 21.7394C19.153 21.7249 19.1749 21.7169 19.1976 21.7169C19.2202 21.7169 19.2421 21.7249 19.2594 21.7394L20.0692 22.3242C20.2152 22.4274 20.3899 22.4822 20.5687 22.481C20.7475 22.4799 20.9214 22.4228 21.0661 22.3178C21.2108 22.2128 21.319 22.0651 21.3756 21.8955C21.4321 21.7259 21.4341 21.5429 21.3814 21.372L21.074 20.4198C21.067 20.3993 21.0664 20.3771 21.0725 20.3563C21.0785 20.3355 21.0908 20.3171 21.1077 20.3035L21.9175 19.715C22.0609 19.6083 22.1673 19.4594 22.2217 19.2891C22.2761 19.1188 22.2757 18.9358 22.2207 18.7657C22.1656 18.5957 22.0587 18.4472 21.9149 18.341C21.7711 18.2349 21.5976 18.1765 21.4189 18.1741Z"
                                            fill="#FBE9D6" />
                                        <path
                                            d="M7.0245 18.1741H6.02352C6.00205 18.1732 5.98133 18.1659 5.96398 18.1533C5.94663 18.1406 5.93343 18.123 5.92604 18.1029L5.61861 17.1506C5.56074 16.9813 5.45139 16.8344 5.30585 16.7303C5.16031 16.6263 4.98588 16.5703 4.80696 16.5703C4.62805 16.5703 4.45362 16.6263 4.30808 16.7303C4.16253 16.8344 4.05317 16.9813 3.9953 17.1506L3.68411 18.1029C3.67767 18.1236 3.66471 18.1418 3.64715 18.1546C3.6296 18.1675 3.60838 18.1743 3.58663 18.1741H2.58566C2.40572 18.1741 2.2304 18.2311 2.08487 18.3369C1.93935 18.4427 1.83111 18.5919 1.77571 18.7631C1.72032 18.9343 1.7206 19.1187 1.77654 19.2897C1.83247 19.4607 1.94117 19.6096 2.08703 19.715L2.89683 20.3036C2.91372 20.3171 2.92602 20.3355 2.93206 20.3563C2.93809 20.3771 2.93757 20.3993 2.93056 20.4198L2.62314 21.372C2.56794 21.5432 2.56828 21.7275 2.62409 21.8984C2.67991 22.0694 2.78835 22.2184 2.93391 22.324C3.07947 22.4296 3.2547 22.4865 3.43456 22.4866C3.61441 22.4867 3.78968 22.4298 3.9353 22.3243L4.74511 21.7394C4.76244 21.7249 4.78434 21.7169 4.80696 21.7169C4.82958 21.7169 4.85148 21.7249 4.86881 21.7394L5.67484 22.3242C5.82102 22.4278 5.99593 22.4829 6.17505 22.482C6.35416 22.4811 6.5285 22.4241 6.67362 22.3191C6.81873 22.2141 6.92734 22.0664 6.98422 21.8965C7.0411 21.7267 7.04339 21.5433 6.99078 21.372L6.67961 20.4198C6.67416 20.3988 6.6748 20.3768 6.68144 20.3562C6.68808 20.3356 6.70046 20.3174 6.71711 20.3035L7.52689 19.715C7.67301 19.6094 7.78183 19.4602 7.83768 19.2888C7.89352 19.1174 7.89351 18.9327 7.83763 18.7613C7.78175 18.5899 7.67291 18.4407 7.52677 18.3352C7.38064 18.2297 7.20476 18.1733 7.0245 18.1741Z"
                                            fill="#FBE9D6" />
                                        <path
                                            d="M14.2203 18.1741H13.2193C13.1977 18.1737 13.1767 18.1667 13.1593 18.1539C13.1418 18.1412 13.1287 18.1233 13.1218 18.1028L12.8106 17.1506C12.7532 16.9814 12.6442 16.8345 12.499 16.7304C12.3537 16.6263 12.1795 16.5703 12.0008 16.5703C11.8222 16.5703 11.648 16.6263 11.5027 16.7304C11.3575 16.8344 11.2485 16.9814 11.1911 17.1506L10.8799 18.1028C10.873 18.1233 10.8599 18.1411 10.8424 18.1539C10.825 18.1667 10.804 18.1737 10.7824 18.1741H9.78141C9.60166 18.1743 9.42656 18.2313 9.28114 18.3369C9.13571 18.4426 9.0274 18.5915 8.97168 18.7624C8.91596 18.9333 8.91568 19.1175 8.97088 19.2885C9.02608 19.4596 9.13393 19.6089 9.27903 19.715L10.0888 20.3035C10.1069 20.3162 10.1203 20.3344 10.127 20.3554C10.1338 20.3763 10.1335 20.3989 10.1263 20.4198L9.81889 21.372C9.76299 21.5433 9.76283 21.7279 9.81844 21.8993C9.87404 22.0706 9.98255 22.2199 10.1284 22.3258C10.2742 22.4316 10.4498 22.4884 10.63 22.4882C10.8101 22.4879 10.9856 22.4305 11.1311 22.3243L11.9409 21.7394C11.9575 21.7249 11.9788 21.7169 12.0008 21.7169C12.0229 21.7169 12.0442 21.7249 12.0608 21.7394L12.8706 22.3242C13.0165 22.4279 13.1913 22.4831 13.3703 22.4822C13.5494 22.4813 13.7236 22.4243 13.8685 22.3191C14.0134 22.214 14.1216 22.066 14.178 21.8961C14.2344 21.7262 14.2361 21.5429 14.1828 21.372L13.8754 20.4197C13.8681 20.3989 13.8679 20.3763 13.8746 20.3554C13.8814 20.3344 13.8948 20.3162 13.9129 20.3035L14.7227 19.715C14.8678 19.6088 14.9756 19.4596 15.0308 19.2885C15.086 19.1175 15.0857 18.9333 15.03 18.7624C14.9743 18.5915 14.866 18.4426 14.7205 18.3369C14.5751 18.2313 14.4 18.1743 14.2203 18.1741Z"
                                            fill="#FBE9D6" />
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white mt-3">
                                        Lead with Confidence
                                    </div>
                                </div>

                                <div class="takeaway-card w-100" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
padding: 24px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_28669_441)">
                                            <path
                                                d="M24 7.49219V16.8462C24 18.1872 23.512 19.4792 22.625 20.4842C22.076 21.1062 21.13 21.1652 20.508 20.6172C19.887 20.0692 19.827 19.1212 20.375 18.5002C20.778 18.0432 21 17.4562 21 16.8472V7.49219C21 6.11419 19.879 4.99219 18.5 4.99219H5.5C4.121 4.99219 3 6.11419 3 7.49219V16.4922C3 17.8702 4.121 18.9922 5.5 18.9922H8.5C9.328 18.9922 10 19.6632 10 20.4922C10 21.3212 9.328 21.9922 8.5 21.9922H5.5C2.468 21.9922 0 19.5252 0 16.4922V7.49219C0 4.45919 2.468 1.99219 5.5 1.99219H18.5C21.532 1.99219 24 4.45919 24 7.49219ZM19 8.49219C19 7.66319 18.328 6.99219 17.5 6.99219H6.5C5.672 6.99219 5 7.66319 5 8.49219C5 9.32119 5.672 9.99219 6.5 9.99219H17.5C18.328 9.99219 19 9.32119 19 8.49219ZM19.5 16.4922C19.5 18.0492 18.705 19.4222 17.5 20.2302V23.3392C17.5 23.9622 16.709 24.2292 16.331 23.7342L15 21.9912L13.669 23.7342C13.291 24.2292 12.5 23.9622 12.5 23.3392V20.2302C11.295 19.4222 10.5 18.0482 10.5 16.4922C10.5 14.0112 12.519 11.9922 15 11.9922C17.481 11.9922 19.5 14.0112 19.5 16.4922ZM13.5 16.4922C13.5 17.3192 14.173 17.9922 15 17.9922C15.827 17.9922 16.5 17.3192 16.5 16.4922C16.5 15.6652 15.827 14.9922 15 14.9922C14.173 14.9922 13.5 15.6652 13.5 16.4922ZM6.5 11.9922C5.672 11.9922 5 12.6632 5 13.4922C5 14.3212 5.672 14.9922 6.5 14.9922H7.5C8.328 14.9922 9 14.3212 9 13.4922C9 12.6632 8.328 11.9922 7.5 11.9922H6.5Z"
                                                fill="#FBE9D6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_28669_441">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white mt-3">
                                        Career Recognition Certificate
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- ========== footer-fixed =========== -->

                    <div class="col-lg-12">
                        <div class="footer-fix">
                            <div class="d-flex gap-4 masterclass-fixed"
                                style="overflow: hidden;background: var(--paid-events-Yellow-Purple, linear-gradient(89deg, #FFB956 0%, #5A09E5 98.66%)); padding:24px; justify-content:center; align-items:center;">

                                <div class="d-flex justify-content-center gap-3 px-3 timers" style="width: 29%;">
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-white"
                                        id="timer1" style="border-radius: 8px;
background: rgba(8, 8, 8, 0.30);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Days</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark"
                                        id="timer2" style="border-radius: 8px;
background: rgba(8, 8, 8, 0.30);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Hours</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark"
                                        id="timer3" style="border-radius: 8px;
background: rgba(8, 8, 8, 0.30);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Minutes</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark"
                                        id="timer4" style="border-radius: 8px;
background: rgba(8, 8, 8, 0.30);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Seconds</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="d-flex gap-4 text-align-center mb-2 justify-content-center">
                                        <h3 style="color: var(--WHITE, #FFF);
font-family:Nunito Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal;">Masterclass
                                        </h3>
                                        <img src="assets/images/live.gif" alt="live-gif" width="77" height="24">

                                    </div>
                                    <div class="d-flex gap-3 justify-content-center mt-1 masterclass-fixed">
                                        <div
                                            class="fs-18 f-general-sans text-white d-flex gap-2 align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                                viewBox="0 0 17 16" fill="none">
                                                <path
                                                    d="M12.8333 1.33333H12.5V1C12.5 0.447333 12.052 0 11.5 0C10.948 0 10.5 0.447333 10.5 1V1.33333H6.5V1C6.5 0.447333 6.052 0 5.5 0C4.948 0 4.5 0.447333 4.5 1V1.33333H4.16667C2.14533 1.33333 0.5 2.978 0.5 5V12.3333C0.5 14.3553 2.14533 16 4.16667 16H12.8333C14.8547 16 16.5 14.3553 16.5 12.3333V5C16.5 2.978 14.8547 1.33333 12.8333 1.33333ZM12.8333 14H4.16667C3.24733 14 2.5 13.252 2.5 12.3333V6H14.5V12.3333C14.5 13.252 13.7527 14 12.8333 14ZM7.16667 8.33333V9.66667C7.16667 10.2187 6.71867 10.6667 6.16667 10.6667H4.83333C4.28133 10.6667 3.83333 10.2187 3.83333 9.66667V8.33333C3.83333 7.78133 4.28133 7.33333 4.83333 7.33333H6.16667C6.71867 7.33333 7.16667 7.78133 7.16667 8.33333Z"
                                                    fill="white" />
                                            </svg>
                                            <span style="color: white;
font-family:Nunito Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal;">29-30 November
                                                2025</span>
                                        </div>
                                        <div
                                            class="fs-18 f-general-sans text-white d-flex gap-2 align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                                viewBox="0 0 17 16" fill="none">
                                                <g clip-path="url(#clip0_28669_486)">
                                                    <path
                                                        d="M9.49761 1.41V1C9.49761 0.734784 9.39225 0.48043 9.20472 0.292893C9.01718 0.105357 8.76283 0 8.49761 0C8.23239 0 7.97804 0.105357 7.7905 0.292893C7.60297 0.48043 7.49761 0.734784 7.49761 1V1.41C6.22585 1.58173 5.02168 2.08513 4.00609 2.86964C2.99051 3.65415 2.19928 4.69213 1.7119 5.87928C1.22453 7.06644 1.05818 8.36095 1.22957 9.63276C1.40095 10.9046 1.90404 12.1089 2.68828 13.1247C2.41224 13.3515 2.19156 13.6384 2.04301 13.9633C1.89445 14.2883 1.82192 14.6428 1.83094 15C1.83094 15.2652 1.9363 15.5196 2.12384 15.7071C2.31137 15.8946 2.56573 16 2.83094 16C3.09616 16 3.35051 15.8946 3.53805 15.7071C3.72559 15.5196 3.83094 15.2652 3.83094 15C3.82076 14.9009 3.84549 14.8014 3.90087 14.7186C3.95626 14.6359 4.03881 14.575 4.13428 14.5467C5.39327 15.4894 6.92378 15.9989 8.49661 15.9989C10.0694 15.9989 11.6 15.4894 12.8589 14.5467C12.9548 14.5747 13.0378 14.6353 13.0936 14.7181C13.1493 14.8009 13.1744 14.9007 13.1643 15C13.1643 15.2652 13.2696 15.5196 13.4572 15.7071C13.6447 15.8946 13.8991 16 14.1643 16C14.4295 16 14.6838 15.8946 14.8714 15.7071C15.0589 15.5196 15.1643 15.2652 15.1643 15C15.1733 14.6428 15.1008 14.2883 14.9522 13.9633C14.8037 13.6384 14.583 13.3515 14.3069 13.1247C15.0912 12.1089 15.5943 10.9046 15.7657 9.63276C15.937 8.36095 15.7707 7.06644 15.2833 5.87928C14.7959 4.69213 14.0047 3.65415 12.9891 2.86964C11.9735 2.08513 10.7694 1.58173 9.49761 1.41ZM3.16428 8.66667C3.16428 7.61183 3.47707 6.58069 4.06311 5.70363C4.64914 4.82656 5.48209 4.14298 6.45663 3.73931C7.43117 3.33564 8.50353 3.23002 9.53809 3.43581C10.5727 3.6416 11.523 4.14955 12.2688 4.89543C13.0147 5.64131 13.5227 6.59162 13.7285 7.62619C13.9343 8.66075 13.8286 9.73311 13.425 10.7076C13.0213 11.6822 12.3377 12.5151 11.4607 13.1012C10.5836 13.6872 9.55244 14 8.49761 14C7.08361 13.9984 5.72798 13.436 4.72813 12.4361C3.72828 11.4363 3.16586 10.0807 3.16428 8.66667Z"
                                                        fill="white" />
                                                    <path
                                                        d="M13.5 0.0012864C13.2348 0.0012864 12.9804 0.106643 12.7929 0.29418C12.6054 0.481716 12.5 0.73607 12.5 1.00129C12.5 1.2665 12.6054 1.52086 12.7929 1.70839C12.9804 1.89593 13.2348 2.00129 13.5 2.00129C13.6327 1.99096 13.7661 2.00997 13.8907 2.05698C14.0152 2.10398 14.1279 2.17782 14.2208 2.27326C14.3136 2.36869 14.3843 2.48339 14.4278 2.60921C14.4714 2.73503 14.4867 2.86889 14.4727 3.00129C14.4727 3.2665 14.578 3.52086 14.7656 3.70839C14.9531 3.89593 15.2074 4.00129 15.4727 4.00129C15.7379 4.00129 15.9922 3.89593 16.1798 3.70839C16.3673 3.52086 16.4727 3.2665 16.4727 3.00129C16.4881 2.6055 16.422 2.21077 16.2784 1.84162C16.1349 1.47247 15.9169 1.13679 15.6381 0.85544C15.3593 0.574087 15.0257 0.353074 14.6578 0.206134C14.29 0.0591943 13.8959 -0.0105325 13.5 0.0012864Z"
                                                        fill="white" />
                                                    <path
                                                        d="M2.52563 3.00129C2.51164 2.86889 2.52695 2.73503 2.57048 2.60921C2.61401 2.48339 2.6847 2.36869 2.77753 2.27326C2.87036 2.17782 2.98305 2.10398 3.10762 2.05698C3.23218 2.00997 3.36556 1.99096 3.4983 2.00129C3.76352 2.00129 4.01787 1.89593 4.20541 1.70839C4.39294 1.52086 4.4983 1.2665 4.4983 1.00129C4.4983 0.73607 4.39294 0.481716 4.20541 0.29418C4.01787 0.106643 3.76352 0.0012864 3.4983 0.0012864C3.10239 -0.0105325 2.70828 0.0591943 2.34046 0.206134C1.97264 0.353074 1.63897 0.574087 1.36018 0.85544C1.08139 1.13679 0.863443 1.47247 0.719876 1.84162C0.576309 2.21077 0.510192 2.6055 0.525634 3.00129C0.525634 3.2665 0.630991 3.52086 0.818527 3.70839C1.00606 3.89593 1.26042 4.00129 1.52563 4.00129C1.79085 4.00129 2.0452 3.89593 2.23274 3.70839C2.42028 3.52086 2.52563 3.2665 2.52563 3.00129Z"
                                                        fill="white" />
                                                    <path
                                                        d="M9.52344 8.25787V5.67188C9.52344 5.40666 9.41808 5.1523 9.23054 4.96477C9.04301 4.77723 8.78865 4.67188 8.52344 4.67188C8.25822 4.67188 8.00387 4.77723 7.81633 4.96477C7.62879 5.1523 7.52344 5.40666 7.52344 5.67188V8.53388C7.52351 8.88747 7.66404 9.22655 7.9141 9.47654L9.10944 10.6719C9.29804 10.854 9.55064 10.9548 9.81284 10.9525C10.075 10.9503 10.3258 10.8451 10.5113 10.6597C10.6967 10.4743 10.8018 10.2235 10.8041 9.96128C10.8064 9.69908 10.7056 9.44648 10.5234 9.25787L9.52344 8.25787Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_28669_486">
                                                        <rect width="16" height="16" fill="white"
                                                            transform="translate(0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span style="color: white;
font-family:Nunito Sans;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: normal;">7:00 PM - 11:00 PM (IST)</span>
                                        </div>
                                    </div>
                                    <p
                                        style="color: White;
font-family: Nunito Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal; text-align:center; margin-top:8px;">
                                        9 People have registered</p>
                                </div>
                                <div class="d-flex gap-4 align-items-center mt-2 cta-fix">
                                    <button class="button modal-btn button-fixA" modal-title="Join Now">
                                        <span class="btn-textA">Register Now!</span>
                                        <span class="price" style="display: flex; gap:16px; align-items: center;">
                                            <del class="old">₹3999/-</del>
                                            <span class="new">₹999/-</span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!--footer start-->
    <footer>
        <div class="container-fluid container-lg footer-sec">
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <h3>About InfosecTrain</h3>
                        <p>
                            InfosecTrain offers complete training and consulting solutions to its customers
                            globally.
                            Whether the requirements are technical services, certification or custom training,
                            Infosec
                            Train has consistently delivered the highest quality and best success rates in the
                            industry.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 quick-links">
                    <div class="item">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#masterclass-agenda">Masterclass Agenda</a></li>
                            <li><a href="#experts">Speaker Lineup</a></li>
                            <li><a href="#key-takeaways">Key Takeaways</a></li>
                            <li><a href="https://www.infosectrain.com/events/" target="_blank">Free Training</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <h3>Corporate Office</h3>
                        <p>
                            B7, Sector 1, Noida, Uttar Pradesh 201301<br> India
                        </p>
                        <p style="font-size: 12px;margin-top: 15px;">
                            All rights reserved. © 2025, InfosecTrain
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <section class="footer-fixed">
        <ul class="desktop-list">
            <!--/ li start /-->
            <li>
                <a href="https://api.whatsapp.com/send?phone=918767256840&amp;text=Hi" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_6136_92)">
                            <path
                                d="M0.913574 16L2.03857 11.8906C1.34482 10.6906 0.982324 9.325 0.982324 7.92812C0.982324 3.55625 4.5417 0 8.91357 0C11.0354 0 13.0261 0.828125 14.5229 2.325C16.0198 3.825 16.8448 5.81562 16.8448 7.93437C16.8417 12.3062 13.2854 15.8625 8.91357 15.8625H8.91045C7.58232 15.8625 6.2792 15.5281 5.11982 14.8969L0.913574 16ZM5.31357 13.4625L5.5542 13.6062C6.5667 14.2063 7.72607 14.525 8.91045 14.525H8.91357C12.5479 14.525 15.5042 11.5688 15.5042 7.93437C15.5042 6.175 14.8198 4.51875 13.5761 3.27187C12.3323 2.025 10.6761 1.34063 8.9167 1.34063C5.2792 1.34063 2.32295 4.29688 2.32295 7.93125C2.32295 9.175 2.66982 10.3875 3.3292 11.4375L3.48545 11.6875L2.81982 14.1187L5.31357 13.4625Z"
                                fill="white"></path>
                            <path
                                d="M1.19189 15.7211L2.27939 11.7555C1.60752 10.5961 1.25439 9.27734 1.25439 7.93047C1.25752 3.70859 4.69189 0.277344 8.91064 0.277344C10.9575 0.277344 12.8825 1.07422 14.3263 2.52109C15.7731 3.96797 16.57 5.88984 16.5669 7.93672C16.5638 12.1555 13.1294 15.5898 8.91064 15.5898H8.90752C7.62627 15.5898 6.36689 15.268 5.24814 14.6586L1.19189 15.7211Z"
                                fill="url(#paint0_linear_6136_92)"></path>
                            <path
                                d="M0.913574 16L2.03857 11.8906C1.34482 10.6906 0.982324 9.325 0.982324 7.92812C0.982324 3.55625 4.5417 0 8.91357 0C11.0354 0 13.0261 0.828125 14.5229 2.325C16.0198 3.825 16.8448 5.81562 16.8448 7.93437C16.8417 12.3062 13.2854 15.8625 8.91357 15.8625H8.91045C7.58232 15.8625 6.2792 15.5281 5.11982 14.8969L0.913574 16ZM5.31357 13.4625L5.5542 13.6062C6.5667 14.2063 7.72607 14.525 8.91045 14.525H8.91357C12.5479 14.525 15.5042 11.5688 15.5042 7.93437C15.5042 6.175 14.8198 4.51875 13.5761 3.27187C12.3323 2.025 10.6761 1.34063 8.9167 1.34063C5.2792 1.34063 2.32295 4.29688 2.32295 7.93125C2.32295 9.175 2.66982 10.3875 3.3292 11.4375L3.48545 11.6875L2.81982 14.1187L5.31357 13.4625Z"
                                fill="url(#paint1_linear_6136_92)"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.92939 4.61328C6.77939 4.28203 6.62314 4.27578 6.48252 4.26953C6.36689 4.26328 6.23564 4.26641 6.10127 4.26641C5.97002 4.26641 5.75439 4.31641 5.57314 4.51328C5.39189 4.71016 4.87939 5.19141 4.87939 6.16641C4.87939 7.14141 5.58877 8.08516 5.68877 8.21641C5.78877 8.34766 7.06064 10.4133 9.07314 11.207C10.7481 11.8664 11.0888 11.7352 11.4513 11.7039C11.8138 11.6727 12.6231 11.2258 12.7888 10.7633C12.9544 10.3008 12.9544 9.90391 12.9044 9.82266C12.8544 9.74141 12.7231 9.69141 12.5231 9.59141C12.3263 9.49141 11.3513 9.01328 11.17 8.94766C10.9888 8.88203 10.8575 8.84766 10.7231 9.04766C10.5919 9.24453 10.2106 9.69141 10.095 9.82266C9.97939 9.95391 9.86377 9.97266 9.66689 9.87266C9.47002 9.77266 8.82939 9.56328 8.07314 8.88828C7.48252 8.36328 7.08564 7.71328 6.97002 7.51641C6.85439 7.31953 6.95752 7.21016 7.05752 7.11328C7.14502 7.02578 7.25439 6.88203 7.35439 6.76641C7.45439 6.65078 7.48564 6.56953 7.55127 6.43516C7.61689 6.30391 7.58564 6.18828 7.53564 6.08828C7.49189 5.98516 7.10752 5.00703 6.92939 4.61328Z"
                                fill="white"></path>
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_6136_92" x1="8.87933" y1="15.7224" x2="8.87933"
                                y2="0.276281" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#20B038"></stop>
                                <stop offset="1" stop-color="#60D66A"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_6136_92" x1="8.8792" y1="16" x2="8.8792" y2="0"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F9F9F9"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                            <clipPath id="clip0_6136_92">
                                <rect width="16" height="16" fill="white" transform="translate(0.879395)"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span>+91-87672-56840</span>
                </a>
            </li>
            <li>
                <a href="mailto:sales@infosectrain.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_5863_217)">
                            <path
                                d="M13.5461 0.667969H4.21273C3.329 0.669027 2.48177 1.02056 1.85687 1.64545C1.23198 2.27034 0.880453 3.11757 0.879395 4.0013L0.879395 12.0013C0.880453 12.885 1.23198 13.7323 1.85687 14.3572C2.48177 14.982 3.329 15.3336 4.21273 15.3346H13.5461C14.4298 15.3336 15.277 14.982 15.9019 14.3572C16.5268 13.7323 16.8783 12.885 16.8794 12.0013V4.0013C16.8783 3.11757 16.5268 2.27034 15.9019 1.64545C15.277 1.02056 14.4298 0.669027 13.5461 0.667969ZM4.21273 2.0013H13.5461C13.9453 2.00209 14.3351 2.12231 14.6654 2.3465C14.9957 2.5707 15.2513 2.8886 15.3994 3.2593L10.2941 8.3653C9.91835 8.73951 9.40967 8.94961 8.87939 8.94961C8.34912 8.94961 7.84044 8.73951 7.46473 8.3653L2.35939 3.2593C2.50749 2.8886 2.76314 2.5707 3.09343 2.3465C3.42372 2.12231 3.81354 2.00209 4.21273 2.0013ZM13.5461 14.0013H4.21273C3.6823 14.0013 3.17359 13.7906 2.79851 13.4155C2.42344 13.0404 2.21273 12.5317 2.21273 12.0013V5.0013L6.52206 9.30797C7.14781 9.93214 7.99557 10.2827 8.87939 10.2827C9.76322 10.2827 10.611 9.93214 11.2367 9.30797L15.5461 5.0013V12.0013C15.5461 12.5317 15.3353 13.0404 14.9603 13.4155C14.5852 13.7906 14.0765 14.0013 13.5461 14.0013Z"
                                fill="white"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_5863_217">
                                <rect width="16" height="16" fill="white" transform="translate(0.879395)"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span>sales@infosectrain.com</span>
                </a>
            </li>
        </ul>

        <ul class="mobile-list">
            <!--/ li start /-->
            <li>
                <a href="https://api.whatsapp.com/send?phone=918767256840&amp;text=Hi" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_6136_92)">
                            <path
                                d="M0.913574 16L2.03857 11.8906C1.34482 10.6906 0.982324 9.325 0.982324 7.92812C0.982324 3.55625 4.5417 0 8.91357 0C11.0354 0 13.0261 0.828125 14.5229 2.325C16.0198 3.825 16.8448 5.81562 16.8448 7.93437C16.8417 12.3062 13.2854 15.8625 8.91357 15.8625H8.91045C7.58232 15.8625 6.2792 15.5281 5.11982 14.8969L0.913574 16ZM5.31357 13.4625L5.5542 13.6062C6.5667 14.2063 7.72607 14.525 8.91045 14.525H8.91357C12.5479 14.525 15.5042 11.5688 15.5042 7.93437C15.5042 6.175 14.8198 4.51875 13.5761 3.27187C12.3323 2.025 10.6761 1.34063 8.9167 1.34063C5.2792 1.34063 2.32295 4.29688 2.32295 7.93125C2.32295 9.175 2.66982 10.3875 3.3292 11.4375L3.48545 11.6875L2.81982 14.1187L5.31357 13.4625Z"
                                fill="white"></path>
                            <path
                                d="M1.19189 15.7211L2.27939 11.7555C1.60752 10.5961 1.25439 9.27734 1.25439 7.93047C1.25752 3.70859 4.69189 0.277344 8.91064 0.277344C10.9575 0.277344 12.8825 1.07422 14.3263 2.52109C15.7731 3.96797 16.57 5.88984 16.5669 7.93672C16.5638 12.1555 13.1294 15.5898 8.91064 15.5898H8.90752C7.62627 15.5898 6.36689 15.268 5.24814 14.6586L1.19189 15.7211Z"
                                fill="url(#paint0_linear_6136_92)"></path>
                            <path
                                d="M0.913574 16L2.03857 11.8906C1.34482 10.6906 0.982324 9.325 0.982324 7.92812C0.982324 3.55625 4.5417 0 8.91357 0C11.0354 0 13.0261 0.828125 14.5229 2.325C16.0198 3.825 16.8448 5.81562 16.8448 7.93437C16.8417 12.3062 13.2854 15.8625 8.91357 15.8625H8.91045C7.58232 15.8625 6.2792 15.5281 5.11982 14.8969L0.913574 16ZM5.31357 13.4625L5.5542 13.6062C6.5667 14.2063 7.72607 14.525 8.91045 14.525H8.91357C12.5479 14.525 15.5042 11.5688 15.5042 7.93437C15.5042 6.175 14.8198 4.51875 13.5761 3.27187C12.3323 2.025 10.6761 1.34063 8.9167 1.34063C5.2792 1.34063 2.32295 4.29688 2.32295 7.93125C2.32295 9.175 2.66982 10.3875 3.3292 11.4375L3.48545 11.6875L2.81982 14.1187L5.31357 13.4625Z"
                                fill="url(#paint1_linear_6136_92)"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.92939 4.61328C6.77939 4.28203 6.62314 4.27578 6.48252 4.26953C6.36689 4.26328 6.23564 4.26641 6.10127 4.26641C5.97002 4.26641 5.75439 4.31641 5.57314 4.51328C5.39189 4.71016 4.87939 5.19141 4.87939 6.16641C4.87939 7.14141 5.58877 8.08516 5.68877 8.21641C5.78877 8.34766 7.06064 10.4133 9.07314 11.207C10.7481 11.8664 11.0888 11.7352 11.4513 11.7039C11.8138 11.6727 12.6231 11.2258 12.7888 10.7633C12.9544 10.3008 12.9544 9.90391 12.9044 9.82266C12.8544 9.74141 12.7231 9.69141 12.5231 9.59141C12.3263 9.49141 11.3513 9.01328 11.17 8.94766C10.9888 8.88203 10.8575 8.84766 10.7231 9.04766C10.5919 9.24453 10.2106 9.69141 10.095 9.82266C9.97939 9.95391 9.86377 9.97266 9.66689 9.87266C9.47002 9.77266 8.82939 9.56328 8.07314 8.88828C7.48252 8.36328 7.08564 7.71328 6.97002 7.51641C6.85439 7.31953 6.95752 7.21016 7.05752 7.11328C7.14502 7.02578 7.25439 6.88203 7.35439 6.76641C7.45439 6.65078 7.48564 6.56953 7.55127 6.43516C7.61689 6.30391 7.58564 6.18828 7.53564 6.08828C7.49189 5.98516 7.10752 5.00703 6.92939 4.61328Z"
                                fill="white"></path>
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_6136_92" x1="8.87933" y1="15.7224" x2="8.87933"
                                y2="0.276281" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#20B038"></stop>
                                <stop offset="1" stop-color="#60D66A"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_6136_92" x1="8.8792" y1="16" x2="8.8792" y2="0"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F9F9F9"></stop>
                                <stop offset="1" stop-color="white"></stop>
                            </linearGradient>
                            <clipPath id="clip0_6136_92">
                                <rect width="16" height="16" fill="white" transform="translate(0.879395)"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span>+91-87672-56840</span>
                </a>
            </li>
        </ul>
    </section>

    <!--<[form model start]>-->
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modal-header">Get Free Demo</h3>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form method="post" class="ajax-form d-flex flex-column gap-3">
                    <div>
                        <input type="text" name="me_name" class="me_name form-control" placeholder="Full Name">
                        <div class="error-message name_error"></div>
                    </div>

                    <div>
                        <input type="email" name="me_email" class="me_email form-control" placeholder="Email">
                        <div class="error-message email_error"></div>
                    </div>

                    <div>
                        <input type="text" name="me_phone" class="me_phone form-control" placeholder="Mobile">
                        <div class="error-message mobile_error"></div>
                    </div>

                    <input type="text" name="me_message" class="me_message form-control"
                        placeholder="Mention your call time preference">

                    <input type="hidden" id="me_others_pop" name="me_others" value="T">
                    <input type="hidden" name="me_pageurl" value="<?php echo $pag_url; ?>">

                    <input type="hidden" name="me_submited" value="1">
                    <button type="submit" class="form-control-btn">Submit</button>

                    <div class="loader text-center" style="display:none;">
                        <img src="assets/images/loader.gif" alt="Loading...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--<[form model end]>-->

    <!--<[model sec start]>-->

    <!--/ js link start /-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <script src="assets/js/custom.js" defer></script>

    <!-- <script> 
        $(".owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000, // almost no delay
            smartSpeed: 2000, // long smooth animation
            slideTransition: 'linear',
            autoplayHoverPause: true,
            margin: 20,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 5
                },
                1000: {
                    items: 11
                }
            }
        });
        </script> -->
    <!--/ js link start /-->
    <script>
        $(document).ready(function() {
            // Your jQuery code here
            $('.faq-wrapper .faq-title').on('click', function(e) {
                var element = $(this).parent('.faq-item');
                if (element.hasClass('open')) {
                    element.removeClass('open');
                    element.find('.faq-content').removeClass('open');
                    element.find('.faq-content').slideUp(300, "swing");
                } else {
                    element.addClass('open');
                    element.children('.faq-content').slideDown(300, "swing");
                    element.siblings('.faq-item').children('.faq-content').slideUp(300, "swing");
                    element.siblings('.faq-item').removeClass('open');
                    element.siblings('.faq-item').find('.faq-title').removeClass('open');
                    element.siblings('.taq-item').find('.faq-content').slideUp(300, "swing");
                }
            });
        });

        /*-------- form validation and ajax script --------*/
        document.addEventListener("DOMContentLoaded", function() {

            // Function to load Zopim chat widget after a delay
            function loadZopim() {
                window.$zopim || (function(d, s) {
                    var z = $zopim = function(c) {
                            z._.push(c)
                        },
                        $ = z.s = d.createElement(s),
                        e = d.getElementsByTagName(s)[0];
                    z.set = function(o) {
                        z.set._.push(o)
                    };
                    z._ = [];
                    z.set._ = [];
                    $.async = !0;
                    $.setAttribute("charset", "utf-8");
                    $.src = "https://v2.zopim.com/?5Y1ZvMP3lrSPwhhyQjIGwo618dlqPLkD";
                    z.t = +new Date;
                    $.type = "text/javascript";
                    e.parentNode.insertBefore($, e)
                })(document, "script");
            }

            // Set a timeout to load Zopim after 10 seconds (10,000 milliseconds)
            setTimeout(loadZopim, 15000);

            // Select all forms with the class "ajax-form"
            const forms = document.querySelectorAll('.ajax-form');

            // Function to validate a single form
            function validateForm(form) {
                let isValid = true;
                let errorMessages = {};

                const name = form.querySelector('input[name="me_name"]');
                const email = form.querySelector('input[name="me_email"]');
                const mobile = form.querySelector('input[name="me_phone"]');

                // Validate Name field
                if (!name.value.trim()) {
                    isValid = false;
                    name.classList.add('error');
                    errorMessages.name = "Name is required.";
                } else {
                    name.classList.remove('error');
                }

                // Validate Email field
                if (!email.value.trim()) {
                    isValid = false;
                    email.classList.add('error');
                    errorMessages.email = "Email is required.";
                } else if (!/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9]{2,4}$/.test(email
                        .value)) {
                    isValid = false;
                    email.classList.add('error');
                    errorMessages.email = "Please enter a valid email.";
                } else {
                    email.classList.remove('error');
                }

                // Validate Mobile Number field
                if (!mobile.value.trim()) {
                    isValid = false;
                    mobile.classList.add('error');
                    errorMessages.mobile = "Mobile number is required.";
                } else if (!/^[6-9]\d{9}$/.test(mobile.value)) {
                    // For India: 10-digit numbers starting with 6,7,8,9
                    isValid = false;
                    mobile.classList.add('error');
                    errorMessages.mobile = "Please enter a valid 10-digit mobile number.";
                } else {
                    mobile.classList.remove('error');
                }

                // Display error messages
                form.querySelectorAll('.error-message').forEach((el) => {
                    el.textContent = ''; // Clear all previous error messages
                });

                for (const [key, msg] of Object.entries(errorMessages)) {
                    const errorMessageDiv = form.querySelector(`.${key}_error`);
                    errorMessageDiv.textContent = msg;
                }

                return isValid;
            }

            // Handle form submission
            function handleFormSubmit(event) {
                event.preventDefault(); // Prevent the default form submission

                const form = event.target;
                const loader = form.querySelector('.loader');
                const isValid = validateForm(form);

                if (!isValid) {
                    return; // Stop the submission if the form is invalid
                }

                // Show the loader while submitting
                loader.style.display = 'block';

                // Create a FormData object with the form data
                const formData = new FormData(form);

                // Make the AJAX request
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'send-ajax.php', true);

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // Redirect to the thank-you page or any other page
                        window.location.href = "thank-you.php";
                        loader.style.display = 'none'; // Hide the loader
                        form.reset(); // Reset the form fields after successful submission
                    } else {
                        loader.style.display = 'none'; // Hide the loader in case of failure
                        alert("An error occurred. Please try again.");
                    }
                };

                xhr.onerror = function() {
                    loader.style.display = 'none'; // Hide the loader in case of an error
                    alert("An error occurred. Please try again.");
                };

                // Send the form data to the server
                xhr.send(formData);
            }

            // Attach the submit event listener to each form
            forms.forEach(form => {
                form.addEventListener('submit', handleFormSubmit);
            });
        });
        /*-------- form valudation and ajax script end --------*/

        // ===== Helper: build a roller column with digits 0..9 =====
        function createRollerColumn() {
            const col = document.createElement('div');
            col.className = 'roller';
            const track = document.createElement('div');
            track.className = 'roller-track';
            for (let i = 0; i <= 9; i++) {
                const d = document.createElement('div');
                d.className = 'roller-digit';
                d.textContent = i;
                track.appendChild(d);
            }
            col.appendChild(track);
            return col;
        }

        // ===== Turn a .num container into N rolling digits =====
        function ensureDigits(container, count) {
            const want = count;
            const have = container.querySelectorAll('.roller').length;
            for (let i = have; i < want; i++) container.appendChild(createRollerColumn());
            // remove extra (unlikely)
            if (have > want) {
                [...container.querySelectorAll('.roller')].slice(want).forEach(n => n.remove());
            }
        }

        // ===== Scroll a digit column to a specific numeral (0-9) =====
        function scrollToDigit(roller, digit) {
            const track = roller.querySelector('.roller-track');
            const cellHeight = roller.clientHeight || 38; // fallback to CSS height
            const clamped = Math.max(0, Math.min(9, Number(digit)));
            track.style.transform = `translateY(${-clamped * cellHeight}px)`;
        }

        // ===== Set the entire number (multi-digit) into a .num as rolling digits =====
        function setRollingNumber(numEl, value, minLen = 2) {
            const str = String(value).padStart(minLen, '0');
            ensureDigits(numEl, str.length);
            const rollers = numEl.querySelectorAll('.roller');
            // If digits length changed, rebuild order (left->right)
            // update each column
            str.split('').forEach((ch, idx) => {
                scrollToDigit(rollers[idx], ch);
            });
        }

        // ===== Example countdown hook-up =====
        // target date/time (set yours)
        // const eventDate = new Date("2025-11-01T10:00:00"); // local TZ; change if needed

        // function tickCountdown() {
        //     const now = new Date();
        //     let diff = Math.max(0, eventDate - now);

        //     const d = Math.floor(diff / (1000 * 60 * 60 * 24));
        //     diff -= d * (1000 * 60 * 60 * 24);
        //     const h = Math.floor(diff / (1000 * 60 * 60));
        //     diff -= h * (1000 * 60 * 60);
        //     const m = Math.floor(diff / (1000 * 60));
        //     diff -= m * (1000 * 60);
        //     const s = Math.floor(diff / 1000);

        //     setRollingNumber(document.getElementById('d'), d, d > 99 ? 3 : 2); // auto 3 digits if needed
        //     setRollingNumber(document.getElementById('h'), h, 2);
        //     setRollingNumber(document.getElementById('m'), m, 2);
        //     setRollingNumber(document.getElementById('s'), s, 2);
        // }

        // // ===== Initialize rollers once (so they exist before first tick) =====
        // ['d', 'h', 'm', 's'].forEach(id => {
        //     const el = document.getElementById(id);
        //     // start with 2 digits, except days could be 3 later; we can start with 2
        //     ensureDigits(el, id === 'd' ? 2 : 2);
        //     // initialize to 00
        //     setRollingNumber(el, 0, 2);
        // });

        // // Start ticking
        // tickCountdown();
        // setInterval(tickCountdown, 1000);

        // Countdown function to show only specific time units in each div
        function startCountdown() {
            const targetDate = new Date("November 29, 2025 09:00:00").getTime(); // Target date

            // Update the countdown every second
            const interval = setInterval(function() {
                const currentDate = new Date().getTime(); // Current date and time
                const timeRemaining = targetDate - currentDate; // Time remaining in milliseconds

                // Calculate days, hours, minutes, and seconds
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 *
                    60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                // Update each timer separately
                document.getElementById("timer1").querySelector("strong").textContent = days;
                document.getElementById("timer2").querySelector("strong").textContent = hours;
                document.getElementById("timer3").querySelector("strong").textContent = minutes;
                document.getElementById("timer4").querySelector("strong").textContent = seconds;

                // If the countdown reaches zero, stop the timer and display "Time's up!"
                if (timeRemaining <= 0) {
                    clearInterval(interval);
                    document.getElementById("timer1").querySelector("strong").textContent = "0";
                    document.getElementById("timer2").querySelector("strong").textContent = "0";
                    document.getElementById("timer3").querySelector("strong").textContent = "0";
                    document.getElementById("timer4").querySelector("strong").textContent = "0";
                }
            }, 1000); // Update every second
        }

        // Call the function to start the countdown
        startCountdown();
    </script>
</body>

</html>