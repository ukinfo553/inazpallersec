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
    <title>LLM Security & Red Teaming Masterclass</title>
    <meta name="description" content="AI Summit 2025">
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Gloock&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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

        <section class="hero-section">
            <!-- Background Video -->
            <!-- <video class="video-background" autoplay muted loop playsinline>
                    <source src="assets/videos/background.mp4" type="video/mp4">
                    <!-- Fallback for browsers that don't support video -
                    Your browser does not support the video tag.
                </video> -->

            <img class="video-background web-banner" src="assets/images/llm-red-bg.webp" alt="llm-red-bg">
            <img class="video-background mobile-banner" src="assets/images/mobile-banner.webp" alt="mobile-banner">
            <!-- Logo Section -->

            <!-- Main Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-item d-flex flex-column gap-4 justify-content-center align-items-center">
                            <img src="assets/images/logo.png" alt="AI Summit 2025" class="img-fluid mb-md-4">
                            <div>
                                <!-- <div class="fs-16 f-general-sans text-white mb-md-4"
                                        style="text-transform: uppercase;letter-spacing: 16px;font-weight: 200;">
                                        PRESENTS
                                    </div> -->
                                <h1 id="typing-one">LLM Security & Red Teaming <br> <span>Masterclass</span></h1>

                            </div>
                            <div class="live-badge align-items-center d-flex gap-md-4 gap-2 p-3">
                                <img src="assets/images/live.gif" width="77" height="24" alt="">
                                <div class="d-flex gap-3 flex-wrap">
                                    <div class="fs-18 f-general-sans text-white d-flex gap-3 align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                            viewBox="0 0 16 17" fill="none">
                                            <path
                                                d="M12.3333 1.83333H12V1.5C12 0.947333 11.552 0.5 11 0.5C10.448 0.5 10 0.947333 10 1.5V1.83333H6V1.5C6 0.947333 5.552 0.5 5 0.5C4.448 0.5 4 0.947333 4 1.5V1.83333H3.66667C1.64533 1.83333 0 3.478 0 5.5V12.8333C0 14.8553 1.64533 16.5 3.66667 16.5H12.3333C14.3547 16.5 16 14.8553 16 12.8333V5.5C16 3.478 14.3547 1.83333 12.3333 1.83333ZM12.3333 14.5H3.66667C2.74733 14.5 2 13.752 2 12.8333V6.5H14V12.8333C14 13.752 13.2527 14.5 12.3333 14.5ZM6.66667 8.83333V10.1667C6.66667 10.7187 6.21867 11.1667 5.66667 11.1667H4.33333C3.78133 11.1667 3.33333 10.7187 3.33333 10.1667V8.83333C3.33333 8.28133 3.78133 7.83333 4.33333 7.83333H5.66667C6.21867 7.83333 6.66667 8.28133 6.66667 8.83333Z"
                                                fill="#FFB956" />
                                        </svg>
                                        <span>01-02 November 2025</span>
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
                                        <span>7:00 PM - 11:00 PM (IST)</span>
                                    </div>
                                </div>
                            </div>


                            <div
                                class="d-flex flex-wrap justify-content-md-start justify-content-center gap-3 feature-boxes">
                                <div class="feature-box d-flex align-items-center gap-2">

                                    <span>2 Days</span>
                                </div>

                                <div class="feature-box d-flex align-items-center gap-2">

                                    <span>Hands-on Sessions</span>
                                </div>

                                <div class="feature-box d-flex align-items-center gap-2">

                                    <span>15+ AI Tools</span>
                                </div>

                                <div class="feature-box d-flex align-items-center gap-2">

                                    <span>6 CPE Credits</span>
                                </div>
                            </div>
                            <div class="special-offer">
                                <img src="assets/images/special-offer.png" alt="special-offer"
                                    style="width: 100%; margin:auto;">
                            </div>

                            <div class="owl-carousel" style="border-radius: 8px;
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
                            </div>
                            <div class="d-flex gap-4 align-items-center mt-2">
                                <button class="button modal-btn" modal-title="Join Now">Register Now</button>
                            </div>
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
                            <img src="assets/images/prices/inr-offer.png" alt="AI Summit 2025" class="w-100 d-block">
                            <?php } else { ?>
                            <img src="assets/images/prices/usd-offer.png" alt="AI Summit 2025" class="w-100 d-block">
                            <?php } ?>
                        </div> -->
        <!-- </div>
                </div>
            </section> -->

        <section
            style="background: #0A0017;background-image: url('assets/images/gradient-background.png');background-size: cover;background-position: center;background-size:contain; padding:0px;">
            <div class="container">
                <div class="row flex-column-reverse flex-lg-row">
                    <div class="col-lg-8 mt-4 mt-lg-0">
                        <div class="item">
                            <div class="fs-28 text-white fw-600 f-Gloock" style="background: var(--paid-events-Yellow-Purple, linear-gradient(89deg, #FFB956 0%, #5A09E5 98.66%));
background-clip: text;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;">
                                Why Attend This Masterclass?
                            </div>
                            <p class="mt-3 text-white f-Nunito Sans">
                                Large Language Models (LLMs) are transforming industries—but with innovation comes
                                new vulnerabilities and attack surfaces. This intensive 2-day masterclass blends
                                foundational knowledge with practical red-teaming techniques, equipping you to test,
                                defend, and secure AI systems using real-world adversarial strategies.
                            </p>
                            <!-- <p class="mt-3 text-white f-general-sans">
                                    Join global experts and forward-thinking peers to gain the skills, insights, and
                                    confidence to drive real change in your organization, starting now!
                                </p> -->
                            <div class="learning-cards mt-4 d-flex flex-wrap gap-4">
                                <div class="learning-card">
                                    <img src="assets/images/online-education.png" alt="online-education">
                                    <div>
                                        <h3>Hands-On Learning</h3>
                                        <p>Dive into guided labs simulating LLM attack and
                                            defense scenarios with
                                            real-world applications.</p>
                                    </div>
                                </div>

                                <div class="learning-card">
                                    <img src="assets/images/online-service.png" alt="online-service">
                                    <div>
                                        <h3>Top Industry Tools</h3>
                                        <p>Work with 15+ frameworks, including Hugging Face, LangChain, Cleverhans,
                                            ART, and more cutting-edge tools.</p>
                                    </div>
                                </div>

                                <div class="learning-card">
                                    <img src="assets/images/online-horse.png" alt="online-horse">
                                    <div>
                                        <h3>Step-by-Step Playbooks</h3>
                                        <p>Structured LLM attack and protection strategies ready for immediate
                                            application in your work.</p>
                                    </div>
                                </div>

                                <div class="learning-card">
                                    <img src="assets/images/online-user.png" alt="online-user">
                                    <div>
                                        <h3>Expert Practitioners</h3>
                                        <p>Learn from trainers actively delivering AI & cybersecurity programs
                                            globally with years of experience.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="professional-development d-flex gap-4">
                                <img src="assets/images/online-edu.png" alt="online-edu">
                                <div>
                                    <h3>Professional Development</h3>
                                    <p>Earn 6 CPE credits to enhance your credentials in cybersecurity</p>
                                </div>
                            </div>
                        </div>

                        <div class="fs-28 text-white fw-600 f-Gloock mt-5 mb-4 lineup-heading" style="background: var(--paid-events-Yellow-Purple, linear-gradient(89deg, #FFB956 0%, #5A09E5 98.66%));
background-clip: text;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;" id="experts">
                            Speakers Lineup
                        </div>

                        <div class="row row-cols-1 row-cols-lg-2 g-3 mb-3">

                            <div class="col">
                                <img src="assets/images/speakers/Avnish.png" alt="Avnish"
                                    class="w-100 d-block speakers">
                            </div>
                            <div class="col">
                                <img src="assets/images/speakers/Ashish.png" alt="Ashish"
                                    class="w-100 d-block speakers">
                            </div>
                            <!-- <div class="col">
                                    <img src="assets/images/speakers/prabh.png" alt="Prabh Nair AI Speaker"
                                        class="w-100 d-block speakers">
                                </div>
                                <div class="col">
                                    <img src="assets/images/speakers/krish.png" alt="Krish AI Speaker"
                                        class="w-100 d-block speakers">
                                </div>
                            </div>


                            <div class="row row-cols-2 row-cols-lg-4 g-3">

                                <div class="col">
                                    <img src="assets/images/speakers/kiran.png" alt="Kiran AI Speaker"
                                        class="w-100 d-block speakers">
                                </div>
                                <div class="col">
                                    <img src="assets/images/speakers/jai.png" alt="Jai AI Speaker"
                                        class="w-100 d-block speakers">
                                </div>
                                <div class="col">
                                    <img src="assets/images/speakers/anas.png" alt="Anas AI Speaker"
                                        class="w-100 d-block speakers">
                                </div>
                                <div class="col">
                                    <img src="assets/images/speakers/avinish.png" alt="Avinish AI Speaker"
                                        class="w-100 d-block speakers">
                                </div> -->
                        </div>

                        <!--price tag start-->
                        <!-- <picture class="my-5 d-block">
                            <source media="(min-width:768px)" srcset="assets/images/prices/desk.png">
                            <img src="assets/images/prices/mob.png" alt="Flowers" class="w-100 d-block">
                        </picture> -->
                        <!--price tag end-->




                        <div class="fs-28 text-white fw-600 f-Gloock my-4 lineup-heading" style="background: var(--paid-events-Yellow-Purple, linear-gradient(89deg, #FFB956 0%, #5A09E5 98.66%));
background-clip: text;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;" id="masterclass-agenda">
                            Masterclass Agenda
                        </div>

                        <div class="faq-wrapper">
                            <!--/ faq item /-->
                            <div class="d-flex gap-3 text-white align-items-center f-general-sans fs-16">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <g clip-path="url(#clip0_23541_857)">
                                        <path
                                            d="M13.5727 9.66667L13.416 9.63067C13.0739 8.85714 12.4872 8.21742 11.7461 7.80993C11.0049 7.40244 10.1504 7.24974 9.314 7.37533C8.43624 7.51529 7.63553 7.95909 7.05164 8.62924C6.46774 9.2994 6.13777 10.1533 6.11933 11.042C6.11772 11.1773 6.12618 11.3126 6.14467 11.4467C5.68248 11.632 5.29086 11.9589 5.02601 12.3806C4.76116 12.8023 4.63669 13.297 4.67045 13.7938C4.70422 14.2907 4.89448 14.764 5.21394 15.146C5.53341 15.528 5.96565 15.7989 6.44867 15.92C6.64247 15.9695 6.84134 15.9966 7.04133 16.0007H12.786C13.0178 15.9964 13.2485 15.9684 13.4747 15.9173C14.1814 15.7621 14.815 15.3729 15.2728 14.8126C15.7307 14.2523 15.9859 13.5539 15.9973 12.8304C16.0086 12.107 15.7754 11.4009 15.3353 10.8266C14.8952 10.2522 14.2742 9.84328 13.5727 9.666V9.66667ZM13.962 13.078C13.9047 13.2965 13.7883 13.495 13.6255 13.6517C13.4627 13.8084 13.2599 13.9171 13.0393 13.966C12.95 13.9867 12.8589 13.9985 12.7673 14.0013H7.07C7.02791 14.0004 6.98607 13.9946 6.94533 13.984C6.88327 13.9672 6.82638 13.9351 6.77982 13.8908C6.73326 13.8464 6.69849 13.7912 6.67867 13.73C6.62 13.5127 6.846 13.3073 7.024 13.248C7.40651 13.1118 7.72889 12.8453 7.93464 12.4952C8.14039 12.1451 8.21639 11.7338 8.14933 11.3333C8.13177 11.2504 8.12173 11.1661 8.11933 11.0813C8.12171 10.9464 8.13938 10.8122 8.172 10.6813C8.24925 10.3428 8.42622 10.0352 8.68006 9.7982C8.9339 9.56124 9.25294 9.40582 9.596 9.352C10.0008 9.28924 10.415 9.36137 10.7747 9.55726C11.1344 9.75315 11.4198 10.0619 11.5867 10.436C11.7137 10.7401 11.9164 11.0066 12.1754 11.2103C12.4344 11.4141 12.7412 11.5482 13.0667 11.6C13.381 11.6775 13.6518 11.8764 13.8196 12.1532C13.9874 12.4301 14.0387 12.7621 13.962 13.0767V13.078ZM4.91867 9.16133L3.26667 10.8113C3.07603 10.9804 2.82802 11.0704 2.5733 11.0628C2.31858 11.0552 2.07637 10.9507 1.89613 10.7705C1.7159 10.5904 1.61124 10.3482 1.60353 10.0935C1.59582 9.83877 1.68565 9.59072 1.85467 9.4L2.886 8.368C2.69636 8.04494 2.5536 7.69657 2.462 7.33333H1C0.734783 7.33333 0.48043 7.22798 0.292893 7.04044C0.105357 6.8529 0 6.59855 0 6.33333C0 6.06812 0.105357 5.81376 0.292893 5.62623C0.48043 5.43869 0.734783 5.33333 1 5.33333H2.46667C2.56017 4.97242 2.70379 4.62639 2.89333 4.30533L1.85467 3.26667C1.68565 3.07595 1.59582 2.8279 1.60353 2.57318C1.61124 2.31847 1.7159 2.07631 1.89613 1.89615C2.07637 1.716 2.31858 1.61146 2.5733 1.60387C2.82802 1.59628 3.07603 1.68623 3.26667 1.85533L4.30533 2.89133C4.6265 2.70248 4.97252 2.55954 5.33333 2.46667V1C5.33333 0.734784 5.43869 0.48043 5.62623 0.292893C5.81376 0.105357 6.06812 0 6.33333 0C6.59855 0 6.8529 0.105357 7.04044 0.292893C7.22798 0.48043 7.33333 0.734784 7.33333 1V2.46667C7.69517 2.55867 8.04217 2.70141 8.364 2.89067L9.4 1.85533C9.59064 1.68623 9.83864 1.59628 10.0934 1.60387C10.3481 1.61146 10.5903 1.716 10.7705 1.89615C10.9508 2.07631 11.0554 2.31847 11.0631 2.57318C11.0708 2.8279 10.981 3.07595 10.812 3.26667L9.77267 4.308C9.82067 4.39067 9.87467 4.46867 9.91733 4.55533C10.0353 4.79297 10.054 5.06772 9.96933 5.31914C9.88469 5.57057 9.70363 5.77807 9.466 5.896C9.22837 6.01393 8.95362 6.03264 8.70219 5.94799C8.45077 5.86335 8.24327 5.6823 8.12533 5.44467C6.62533 2.75667 2.85267 5.468 4.91933 7.748C5.10651 7.93559 5.21158 8.18981 5.21145 8.45481C5.21133 8.71981 5.10602 8.97392 4.91867 9.16133Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_23541_857">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Day 1</span>
                                <span>|</span>
                                <span>1 November</span>
                            </div>
                            <div class="faq-item active open">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <!-- <img src="assets/images/speakers/kiran1.png" alt=""> -->
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600"> Introduction to AI and LLM Security by Avnish
                                                (10 AM - 12 PM)</strong>
                                        </div>
                                    </span>
                                    <span class="right-icon"></span>
                                </h3>
                                <div class="faq-content">
                                    <!-- <p class="mb-3 fw-bold">AI Explained: No Jargon, Just Breakthroughs</p>
                                        <span class="fs-16 text-white f-general-sans fw-600"
                                            style="color:#21D6FF;">Agenda</span> -->
                                    <ul>
                                        <li>Demystifying the core concepts and components of an AI system
                                        </li>
                                        <li>Types of AI Systems: Machine Learning, Deep Learning, Generative AI,
                                            Agentic AI</li>
                                        <li>Building and deploying AI - Model Development Lifecycle
                                        </li>
                                        <li>Understanding LLMs: Transformer Architecture, Pre-training and Fine
                                            Tuning
                                        </li>
                                        <li>LLM Applications: Chatbots, Code Generation, Cybersecurity Use Cases
                                        </li>
                                        <li>AI and GenAI Frameworks: Scikit-learn, Tensorflow, AutoML, Hugging Face,
                                            LangChain, Llamaindex, OpenAI API, Ollama, LMStudio
                                        </li>
                                        <li>Security Considerations while Developing and Deploying AI Systems
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!--/ faq item /-->
                            <!-- <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <img src="assets/images/speakers/anas1.png" alt="">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600"> AI Productivity Tools - Anas (12 PM - 1
                                                    PM)</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <p class="mb-3 fw-bold">AI Playbook for Leaders: Implement 15+ Game-changing AI
                                            Tools</p>
                                        <span class="fs-16 text-white f-general-sans fw-600"
                                            style="color:#21D6FF;">Agenda</span>
                                        <ul>
                                            <li>Productivity Redefined: How AI boosts individual and team output.</li>
                                            <li>Executive Tool Showcase: Practical use of ChatGPT, NotebookLM, Gamma,
                                                Perplexity, Gemini, Meta, Mistral, Deepseek, Sora, Llama Coder, Deep
                                                Learning LMS, Napkin AI, Consensus and more.</li>
                                            <li>Strategic AI Applications: Leveraging AI for planning, analysis, and
                                                communication.</li>
                                            <li>Blueprint for Adoption: Best practices for integrating AI tools into
                                                your
                                                workflow.</li>
                                            <li>Leadership in AI: Fostering an AI-first mindset and measuring ROI.</li>
                                        </ul>
                                    </div>
                                </div> -->

                            <!--/ faq item /-->
                            <!-- <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <img src="assets/images/speakers/break-time.png" alt="">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600"> Lunch Break (1 PM - 2 PM)</strong>
                                            </div>
                                        </span>
                                    </h3>
                                </div> -->

                            <!--/ faq item /-->
                            <!-- <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <img src="assets/images/speakers/krish1.png" alt="">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">Cloud & AI - Krish (2 PM - 4 PM)</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <p class="mb-3 fw-bold">Securing AI applications in the Cloud</p>
                                        <span class="fs-16 text-white f-general-sans fw-600"
                                            style="color:#21D6FF;">Agenda</span>
                                        <ul>
                                            <li>Cloud AI Infrastructure: Compute, storage, network & application stack
                                                considerations.</li>
                                            <li>AI deployment methodologies on Cloud </li>
                                            <li>Security Implications of Cloud AI: Data protection, access control, and
                                                compliance.</li>
                                            <li>Best Practices for Hosting AI Workloads: Scalability, reliability, and
                                                cost
                                                optimization.</li>
                                            <li>Cloud AI Security Frameworks: Identity and access management, threat
                                                detection, and incident response.</li>
                                            <li>Case Studies: Real-world examples of secure and efficient cloud AI
                                                deployments.</li>
                                        </ul>
                                    </div>
                                </div> -->
                            <!--/ faq item /-->
                            <!--/ faq item /-->
                            <!-- <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <img src="assets/images/speakers/prabh1.png" alt="">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">AI Governance - Prabh (4 PM - 6 PM)</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <p class="mb-3 fw-bold">Building Trust & Control with AI Governance</p>
                                        <span class="fs-16 text-white f-general-sans fw-600"
                                            style="color:#21D6FF;">Agenda</span>
                                        <ul>
                                            <li>The Governance Imperative: Mitigating risks and building trust in AI.
                                            </li>
                                            <li>Core Pillars: Ethics, risk management, and compliance frameworks.</li>
                                            <li>Regulatory Landscape: Navigating global AI laws and standards.</li>
                                            <li>Practical Implementation: Steps to establish an AI Ethics Committee and
                                                policies.</li>
                                            <li>Fostering Responsibility: Cultivating an AI-responsible organizational
                                                culture.</li>
                                        </ul>
                                    </div>
                                </div> -->

                            <!--/ faq item /-->
                            <div class="d-flex gap-3 text-white align-items-center f-general-sans fs-16 mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <g clip-path="url(#clip0_23541_857)">
                                        <path
                                            d="M13.5727 9.66667L13.416 9.63067C13.0739 8.85714 12.4872 8.21742 11.7461 7.80993C11.0049 7.40244 10.1504 7.24974 9.314 7.37533C8.43624 7.51529 7.63553 7.95909 7.05164 8.62924C6.46774 9.2994 6.13777 10.1533 6.11933 11.042C6.11772 11.1773 6.12618 11.3126 6.14467 11.4467C5.68248 11.632 5.29086 11.9589 5.02601 12.3806C4.76116 12.8023 4.63669 13.297 4.67045 13.7938C4.70422 14.2907 4.89448 14.764 5.21394 15.146C5.53341 15.528 5.96565 15.7989 6.44867 15.92C6.64247 15.9695 6.84134 15.9966 7.04133 16.0007H12.786C13.0178 15.9964 13.2485 15.9684 13.4747 15.9173C14.1814 15.7621 14.815 15.3729 15.2728 14.8126C15.7307 14.2523 15.9859 13.5539 15.9973 12.8304C16.0086 12.107 15.7754 11.4009 15.3353 10.8266C14.8952 10.2522 14.2742 9.84328 13.5727 9.666V9.66667ZM13.962 13.078C13.9047 13.2965 13.7883 13.495 13.6255 13.6517C13.4627 13.8084 13.2599 13.9171 13.0393 13.966C12.95 13.9867 12.8589 13.9985 12.7673 14.0013H7.07C7.02791 14.0004 6.98607 13.9946 6.94533 13.984C6.88327 13.9672 6.82638 13.9351 6.77982 13.8908C6.73326 13.8464 6.69849 13.7912 6.67867 13.73C6.62 13.5127 6.846 13.3073 7.024 13.248C7.40651 13.1118 7.72889 12.8453 7.93464 12.4952C8.14039 12.1451 8.21639 11.7338 8.14933 11.3333C8.13177 11.2504 8.12173 11.1661 8.11933 11.0813C8.12171 10.9464 8.13938 10.8122 8.172 10.6813C8.24925 10.3428 8.42622 10.0352 8.68006 9.7982C8.9339 9.56124 9.25294 9.40582 9.596 9.352C10.0008 9.28924 10.415 9.36137 10.7747 9.55726C11.1344 9.75315 11.4198 10.0619 11.5867 10.436C11.7137 10.7401 11.9164 11.0066 12.1754 11.2103C12.4344 11.4141 12.7412 11.5482 13.0667 11.6C13.381 11.6775 13.6518 11.8764 13.8196 12.1532C13.9874 12.4301 14.0387 12.7621 13.962 13.0767V13.078ZM4.91867 9.16133L3.26667 10.8113C3.07603 10.9804 2.82802 11.0704 2.5733 11.0628C2.31858 11.0552 2.07637 10.9507 1.89613 10.7705C1.7159 10.5904 1.61124 10.3482 1.60353 10.0935C1.59582 9.83877 1.68565 9.59072 1.85467 9.4L2.886 8.368C2.69636 8.04494 2.5536 7.69657 2.462 7.33333H1C0.734783 7.33333 0.48043 7.22798 0.292893 7.04044C0.105357 6.8529 0 6.59855 0 6.33333C0 6.06812 0.105357 5.81376 0.292893 5.62623C0.48043 5.43869 0.734783 5.33333 1 5.33333H2.46667C2.56017 4.97242 2.70379 4.62639 2.89333 4.30533L1.85467 3.26667C1.68565 3.07595 1.59582 2.8279 1.60353 2.57318C1.61124 2.31847 1.7159 2.07631 1.89613 1.89615C2.07637 1.716 2.31858 1.61146 2.5733 1.60387C2.82802 1.59628 3.07603 1.68623 3.26667 1.85533L4.30533 2.89133C4.6265 2.70248 4.97252 2.55954 5.33333 2.46667V1C5.33333 0.734784 5.43869 0.48043 5.62623 0.292893C5.81376 0.105357 6.06812 0 6.33333 0C6.59855 0 6.8529 0.105357 7.04044 0.292893C7.22798 0.48043 7.33333 0.734784 7.33333 1V2.46667C7.69517 2.55867 8.04217 2.70141 8.364 2.89067L9.4 1.85533C9.59064 1.68623 9.83864 1.59628 10.0934 1.60387C10.3481 1.61146 10.5903 1.716 10.7705 1.89615C10.9508 2.07631 11.0554 2.31847 11.0631 2.57318C11.0708 2.8279 10.981 3.07595 10.812 3.26667L9.77267 4.308C9.82067 4.39067 9.87467 4.46867 9.91733 4.55533C10.0353 4.79297 10.054 5.06772 9.96933 5.31914C9.88469 5.57057 9.70363 5.77807 9.466 5.896C9.22837 6.01393 8.95362 6.03264 8.70219 5.94799C8.45077 5.86335 8.24327 5.6823 8.12533 5.44467C6.62533 2.75667 2.85267 5.468 4.91933 7.748C5.10651 7.93559 5.21158 8.18981 5.21145 8.45481C5.21133 8.71981 5.10602 8.97392 4.91867 9.16133Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_23541_857">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Day 2</span>
                                <span>|</span>
                                <span>2 November</span>
                            </div>
                            <!--/ faq item /-->
                            <div class="faq-item">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <!-- <img src="assets/images/speakers/shakti1.png" alt=""> -->
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600">AI and LLM Red Teaming by Ashish (10 AM - 12
                                                PM)</strong>
                                        </div>
                                    </span>
                                    <span class="right-icon"></span>
                                </h3>
                                <div class="faq-content">
                                    <!-- <p class="mb-3 fw-bold">Auditing AI with Digital Trust
                                        </p>
                                        <span class="fs-16 text-white f-general-sans fw-600"
                                            style="color:#21D6FF;">Agenda</span> -->
                                    <ul>
                                        <li>Introduction to AI Red Teaming – What is it and why it is needed?
                                        </li>
                                        <li>Attack Families for AI Red Teaming: Poisoning, Injection, Evasion,
                                            Extraction, Availability, Supply Chain</li>
                                        <li>LLM01: Prompt Injection – Direct and Indirect
                                        </li>
                                        <li>LLM02: Sensitive Information Disclosure – Data exfiltration</li>
                                        <li>LLM03: Supply Chain – Malicious Packages and Models</li>
                                        <li>LLM04: Data and Model Poisoning – Poisoning datasets and models during
                                            training and fine-tuning</li>
                                        <li>LLM05: Improper Output Handling – Injection via model outputs</li>
                                        <li>LLM06: Excessive Agency – Agents with dangerous privileges</li>
                                        <li>LLM07: System Prompt Leakage – Exposing hidden system instructions
                                            through crafted queries</li>
                                        <li>LLM08: Vector and Embedding Weaknesses</li>
                                        <li>LLM09: Misinformation – Detecting Hallucinations</li>
                                        <li>LLM10: Unbounded Consumption – Resource abuse and DOS Attacks</li>
                                        <li>Tools and Frameworks for LLM Red Teaming: Cleverhans, Foolbox,
                                            Adversarial Robustness Toolbox</li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ faq item /-->

                            <!--/ faq item /-->
                            <!-- <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <img src="assets/images/speakers/dr-ram1.png" alt="">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">AI Security Frameworks: CISO Edition - Dr Ram (12
                                                    PM -
                                                    1 PM)</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <p class="mb-3 fw-bold">Enable leaders to design and implement secure
                                            AI frameworks</p>
                                        <span class="fs-16 text-white f-general-sans fw-600"
                                            style="color:#21D6FF;">Agenda</span>
                                        <ul>
                                            <li>AI Security Threat Landscape & Business Impact</li>
                                            <li>Building AI Governance Structure & Risk Management</li>
                                            <li>AI Asset Discovery & Classification Methods</li>
                                            <li>Essential Security Controls for AI Systems</li>
                                            <li>Regulatory Compliance & Audit Considerations</li>
                                            <li>Implementation Roadmap & Quick Wins</li>
                                        </ul>
                                    </div>
                                </div> -->
                            <!--/ faq item /-->

                            <!--/ faq item /-->
                            <!-- <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <img src="assets/images/speakers/break-time.png" alt="">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600"> Lunch Break (1 PM - 2 PM)</strong>
                                            </div>
                                        </span>
                                    </h3>
                                </div> -->

                            <!--/ faq item /-->
                            <!-- <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <img src="assets/images/speakers/jai1.png" alt="">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">AI in Privacy - Jai (2 PM - 4 PM) </strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <p class="mb-3 fw-bold">Privacy-by-Design in GenAI: DPDP Act, GDPR, HIPAA</p>
                                        <span class="fs-16 text-white f-general-sans fw-600"
                                            style="color:#21D6FF;">Agenda</span>
                                        <ul>
                                            <li>GenAI Privacy Challenges: Understanding data leakage and unique risks.
                                            </li>
                                            <li>Global Compliance: Navigating DPDP, GDPR, HIPAA, and other key
                                                regulations.
                                            </li>
                                            <li>Privacy-by-Design Techniques: Implementing data minimization, federated
                                                learning, and more.</li>
                                            <li>Secure Implementation: Best practices for consent management and prompt
                                                engineering.</li>
                                            <li>Compliance Strategies: Conducting PIAs and ensuring vendor due
                                                diligence.
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            <!--/ faq item /-->

                            <!--/ faq item /-->
                            <!-- <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <img src="assets/images/speakers/avinish1.png" alt="">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">AI in Cybersecurity - Avnish (4 PM - 6
                                                    PM)</strong>
                                                <!-- <div class="d-flex gap-2 gap-md-3">
                                                <span class="fw-400">by Avnish</span>
                                                <div>
                                                    <span class="fw-400">at:</span>
                                                    <strong class="fw-600"> </strong>
                                                </div>
                                            </div> --
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <p class="mb-3 fw-bold">AI's Cyber Battleground: Offense vs. Defense in the
                                            Machine Age
                                        </p>
                                        <span class="fs-16 text-white f-general-sans fw-600"
                                            style="color:#21D6FF;">Agenda</span>
                                        <ul>
                                            <li>Evolving Threats: Why traditional cybersecurity isn't enough.</li>
                                            <li>Offensive AI: How attackers weaponize AI for reconnaissance, phishing,
                                                and
                                                malware.</li>
                                            <li>Defensive AI: Leveraging MLSecOps and real-time threat hunting for
                                                protection.</li>
                                            <li>AI's Shield: Automated response, predictive analytics, and enhanced
                                                security
                                                platforms.</li>
                                            <li>Future of Cyber Warfare: Emerging trends and the ethical implications of
                                                AI
                                                in defense.</li>
                                        </ul>
                                    </div>
                                </div> -->
                            <!--/ faq item /-->
                        </div>
                        <div class="my-4" id="key-takeaways">
                            <div class="fs-28 text-white fw-600 f-Gloock mt-5 mb-4 lineup-heading" style="background: var(--paid-events-Yellow-Purple, linear-gradient(89deg, #FFB956 0%, #5A09E5 98.66%));
background-clip: text;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;">
                                Key Takeaways
                            </div>

                            <div class="d-flex flex-wrap  gap-4 mt-3">
                                <div class="takeaway-card rounded-8 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 8px; background: linear-gradient(90deg, rgba(10, 0, 23,
                                        0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%); display: flex;
width: 228px;
padding: 16px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 16" fill="none">
                                        <path
                                            d="M16 4.9987V11.2347C16 12.1287 15.6747 12.99 15.0833 13.66C14.7173 14.0747 14.0867 14.114 13.672 13.7487C13.258 13.3834 13.218 12.7514 13.5833 12.3374C13.852 12.0327 14 11.6414 14 11.2354V4.9987C14 4.08003 13.2527 3.33203 12.3333 3.33203H3.66667C2.74733 3.33203 2 4.08003 2 4.9987V10.9987C2 11.9174 2.74733 12.6654 3.66667 12.6654H5.66667C6.21867 12.6654 6.66667 13.1127 6.66667 13.6654C6.66667 14.218 6.21867 14.6654 5.66667 14.6654H3.66667C1.64533 14.6654 0 13.0207 0 10.9987V4.9987C0 2.9767 1.64533 1.33203 3.66667 1.33203H12.3333C14.3547 1.33203 16 2.9767 16 4.9987ZM12.6667 5.66536C12.6667 5.1127 12.2187 4.66536 11.6667 4.66536H4.33333C3.78133 4.66536 3.33333 5.1127 3.33333 5.66536C3.33333 6.21803 3.78133 6.66536 4.33333 6.66536H11.6667C12.2187 6.66536 12.6667 6.21803 12.6667 5.66536ZM13 10.9987C13 12.0367 12.47 12.952 11.6667 13.4907V15.5634C11.6667 15.9787 11.1393 16.1567 10.8873 15.8267L10 14.6647L9.11267 15.8267C8.86067 16.1567 8.33333 15.9787 8.33333 15.5634V13.4907C7.53 12.952 7 12.036 7 10.9987C7 9.3447 8.346 7.9987 10 7.9987C11.654 7.9987 13 9.3447 13 10.9987ZM9 10.9987C9 11.55 9.44867 11.9987 10 11.9987C10.5513 11.9987 11 11.55 11 10.9987C11 10.4474 10.5513 9.9987 10 9.9987C9.44867 9.9987 9 10.4474 9 10.9987ZM4.33333 7.9987C3.78133 7.9987 3.33333 8.44603 3.33333 8.9987C3.33333 9.55136 3.78133 9.9987 4.33333 9.9987H5C5.552 9.9987 6 9.55136 6 8.9987C6 8.44603 5.552 7.9987 5 7.9987H4.33333Z"
                                            fill="white" />
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white">
                                        6 CPE Credits Issued on Completion
                                    </div>
                                </div>

                                <div class="takeaway-card rounded-8 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 8px; background: linear-gradient(90deg, rgba(10, 0, 23,
                                        0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%); display: flex;
width: 228px;
padding: 16px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_27955_89345)">
                                            <path
                                                d="M2.678 13.468C3.15533 13.1913 3.768 13.3547 4.04467 13.8327C4.10533 13.9373 4.21333 13.9993 4.334 13.9993H9.00067C9.184 13.9993 9.334 13.85 9.334 13.666V12.9993C9.334 12.4467 9.782 11.9993 10.334 11.9993H10.74C11.578 11.9993 12.2887 11.3727 12.3933 10.5413L12.6033 8.874C12.6667 8.374 13.0913 7.99867 13.5953 7.99867H13.8553C13.446 7.018 12.3167 4.97533 11.654 4.15533C10.686 2.864 9.216 2.08 7.61933 2.00467C7.068 1.97867 6.64133 1.51067 6.66733 0.958667C6.69267 0.407333 7.176 -0.0253333 7.71267 0.00666667C9.90733 0.11 11.9267 1.18467 13.2307 2.92667C13.9093 3.76467 15.9987 7.254 15.9987 8.362C15.9987 9.126 15.466 9.93733 14.4767 9.99533L14.3767 10.7907C14.1707 12.4253 12.8987 13.7007 11.3147 13.9527C11.172 15.104 10.1887 15.998 8.99867 15.998H4.332C3.50133 15.998 2.72733 15.5513 2.31133 14.832C2.03533 14.354 2.19867 13.742 2.67667 13.466L2.678 13.468ZM5.33333 1.33333V4C5.33333 4.73667 4.73667 5.33333 4 5.33333H1.33333C0.596667 5.33333 0 4.73667 0 4V1.33333C0 0.596667 0.596667 0 1.33333 0H4C4.73667 0 5.33333 0.596667 5.33333 1.33333ZM4.47667 1.40667C4.214 1.138 3.782 1.13933 3.52133 1.40933L2.30267 2.67067L1.78467 2.12333C1.52333 1.84733 1.08467 1.84533 0.821333 2.11933C0.574667 2.37533 0.573333 2.78067 0.817333 3.03867L1.33 3.58067C1.85467 4.13533 2.736 4.14 3.26667 3.59067L4.48 2.33533C4.73067 2.076 4.72933 1.664 4.47733 1.406L4.47667 1.40667ZM0 8V10.6667C0 11.4033 0.596667 12 1.33333 12H4C4.73667 12 5.33333 11.4033 5.33333 10.6667V8C5.33333 7.26333 4.73667 6.66667 4 6.66667H1.33333C0.596667 6.66667 0 7.26333 0 8Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_27955_89345">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white">
                                        Interactive Red Team Labs
                                    </div>
                                </div>

                                <div class="takeaway-card rounded-8 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 8px; background: linear-gradient(90deg, rgba(10, 0, 23,
                                        0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%); display: flex;
width: 228px;
padding: 16px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_27955_89349)">
                                            <path
                                                d="M1.00012 12C1.00012 11.2633 1.59679 10.6667 2.33345 10.6667C3.07012 10.6667 3.66679 11.2633 3.66679 12C3.66679 12.7367 3.07012 13.3333 2.33345 13.3333C1.59679 13.3333 1.00012 12.7367 1.00012 12ZM8.00012 10.6667C7.26345 10.6667 6.66679 11.2633 6.66679 12C6.66679 12.7367 7.26345 13.3333 8.00012 13.3333C8.73679 13.3333 9.33345 12.7367 9.33345 12C9.33345 11.2633 8.73679 10.6667 8.00012 10.6667ZM8.00012 2.66667C8.73679 2.66667 9.33345 2.07 9.33345 1.33333C9.33345 0.596667 8.73679 0 8.00012 0C7.26345 0 6.66679 0.596667 6.66679 1.33333C6.66679 2.07 7.26345 2.66667 8.00012 2.66667ZM13.6668 10.6667C12.9301 10.6667 12.3335 11.2633 12.3335 12C12.3335 12.7367 12.9301 13.3333 13.6668 13.3333C14.4035 13.3333 15.0001 12.7367 15.0001 12C15.0001 11.2633 14.4035 10.6667 13.6668 10.6667ZM2.33345 10C2.88612 10 3.33345 9.552 3.33345 9C3.33345 8.448 3.78212 8 4.33345 8H7.00012V9C7.00012 9.552 7.44745 10 8.00012 10C8.55279 10 9.00012 9.552 9.00012 9V8H11.6668C12.2181 8 12.6668 8.44867 12.6668 9C12.6668 9.55133 13.1141 10 13.6668 10C14.2195 10 14.6668 9.552 14.6668 9C14.6668 7.346 13.3208 6 11.6668 6H4.33345C2.67945 6 1.33345 7.346 1.33345 9C1.33345 9.552 1.78079 10 2.33345 10ZM15.9795 15.5433C15.6381 14.6447 14.7355 14 13.6668 14C12.5981 14 11.6955 14.644 11.3541 15.5433C11.2695 15.7653 11.4548 16 11.7041 16H15.6288C15.8788 16 16.0641 15.7653 15.9795 15.5433ZM2.33345 14C1.26479 14 0.362121 14.644 0.0207875 15.5433C-0.0638791 15.7653 0.121454 16 0.370787 16H4.29545C4.54545 16 4.73012 15.7653 4.64545 15.5433C4.30412 14.6447 3.40212 14 2.33345 14ZM8.00012 14C6.93145 14 6.02879 14.644 5.68745 15.5433C5.60279 15.7653 5.78812 16 6.03745 16H9.96212C10.2121 16 10.3968 15.7653 10.3121 15.5433C9.97079 14.6447 9.06812 14 7.99945 14H8.00012ZM6.03745 5.33333H9.96212C10.2121 5.33333 10.3968 5.09867 10.3121 4.87667C9.97079 3.978 9.06812 3.33333 7.99945 3.33333C6.93079 3.33333 6.02812 3.97733 5.68679 4.87667C5.60212 5.09867 5.78812 5.33333 6.03745 5.33333Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_27955_89349">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white">
                                        Attack & Defense Playbooks
                                    </div>
                                </div>

                                <div class="takeaway-card rounded-8 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 8px; background: linear-gradient(90deg, rgba(10, 0, 23,
                                        0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%); display: flex;
width: 228px;
padding: 16px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_27955_89353)">
                                            <path
                                                d="M13.4544 2.78969C12.5607 2.69459 11.6811 2.49577 10.8333 2.19726C10.0554 1.92239 9.30913 1.56488 8.60742 1.13085C8.4243 1.01971 8.21421 0.960938 8 0.960938C7.78579 0.960938 7.57569 1.01971 7.39258 1.13085L7.39191 1.13152C6.69034 1.56519 5.94434 1.92248 5.16667 2.19726C4.31912 2.49571 3.43973 2.69453 2.54623 2.78971C2.25921 2.8191 1.99332 2.95396 1.80003 3.16816C1.60675 3.38237 1.49984 3.66068 1.5 3.94919V7.41273C1.50047 8.69064 1.84245 9.9452 2.49054 11.0466C3.13864 12.148 4.0693 13.0561 5.1862 13.6771L7.43294 14.9257C7.60597 15.023 7.80115 15.0742 7.99967 15.0742C8.1982 15.0742 8.39337 15.023 8.56641 14.9257L10.8138 13.6771C11.9307 13.0561 12.8614 12.148 13.5095 11.0466C14.1575 9.9452 14.4995 8.69064 14.5 7.41273V3.94919C14.5002 3.66077 14.3934 3.38254 14.2002 3.16834C14.0071 2.95414 13.7413 2.81922 13.4544 2.78969ZM10.653 6.79102L8.15299 9.45769C8.03428 9.58458 7.87067 9.66003 7.69709 9.66794C7.52351 9.67584 7.35371 9.61558 7.22396 9.50001L5.72396 8.16667C5.59187 8.04926 5.51183 7.88418 5.50145 7.70776C5.49108 7.53133 5.55121 7.35801 5.66862 7.22592C5.78603 7.09383 5.95111 7.01379 6.12754 7.00341C6.30396 6.99304 6.47728 7.05317 6.60937 7.17058L7.62435 8.07227L9.68035 5.87957C9.74274 5.8131 9.81807 5.7601 9.9017 5.72382C9.98533 5.68754 10.0755 5.66874 10.1667 5.66859C10.2966 5.66866 10.4237 5.70671 10.5324 5.77807C10.641 5.84943 10.7264 5.95098 10.7781 6.07023C10.8297 6.18949 10.8454 6.32124 10.8232 6.4493C10.801 6.57735 10.7418 6.69615 10.653 6.79102Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_27955_89353">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white">
                                        Actionable Security Techniques
                                    </div>
                                </div>

                                <div class="takeaway-card rounded-8 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 8px; background: linear-gradient(90deg, rgba(10, 0, 23,
                                        0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%); display: flex;
width: 228px;
padding: 16px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 16" fill="none">
                                        <path
                                            d="M6.82021 5.83372C8.44227 6.73083 10.6058 5.4575 10.5643 3.56184C10.5633 2.88269 10.2931 2.23162 9.81291 1.75138C9.33268 1.27114 8.68161 1.00093 8.00246 1C5.31332 1.03394 4.47616 4.5909 6.82021 5.83372Z"
                                            fill="white" />
                                        <path
                                            d="M4.1173 10.3904H11.8853C12.0985 10.3897 12.3028 10.3047 12.4536 10.1539C12.6044 10.0032 12.6894 9.79888 12.6901 9.58565V8.5809C12.6903 8.12068 12.5456 7.67209 12.2764 7.29881C12.0072 6.92553 11.6272 6.64653 11.1905 6.50144L9.79834 6.03906C9.27671 6.41913 8.64795 6.6239 8.00255 6.6239C7.35715 6.6239 6.72838 6.41913 6.20676 6.03906L4.81212 6.50144C4.37537 6.64653 3.99542 6.92553 3.72623 7.29881C3.45704 7.67209 3.31228 8.12068 3.3125 8.5809V9.58565C3.31322 9.79888 3.39824 10.0032 3.54901 10.1539C3.69978 10.3047 3.90407 10.3897 4.1173 10.3904Z"
                                            fill="white" />
                                        <path
                                            d="M14.2792 12.12H13.6119C13.5974 12.1201 13.5833 12.1155 13.5716 12.107C13.5599 12.0984 13.5512 12.0863 13.5469 12.0725L13.3395 11.4377C13.3009 11.3248 13.228 11.2268 13.131 11.1575C13.0339 11.0881 12.9177 11.0508 12.7984 11.0508C12.6791 11.0508 12.5628 11.0881 12.4658 11.1574C12.3688 11.2268 12.2959 11.3248 12.2573 11.4376L12.0523 12.0725C12.0474 12.0859 12.0386 12.0976 12.027 12.1061C12.0155 12.1145 12.0017 12.1194 11.9873 12.12H11.32C11.1999 12.1194 11.0826 12.157 10.9852 12.2274C10.8878 12.2977 10.8152 12.3972 10.7779 12.5115C10.7407 12.6257 10.7407 12.7488 10.7779 12.8631C10.8151 12.9774 10.8877 13.0768 10.9851 13.1472L11.525 13.5396C11.5361 13.5488 11.5443 13.561 11.5487 13.5747C11.5532 13.5884 11.5536 13.6031 11.55 13.6171L11.3425 14.2519C11.3058 14.3663 11.3062 14.4894 11.3436 14.6035C11.3811 14.7177 11.4536 14.817 11.5509 14.8875C11.6483 14.9579 11.7653 14.9957 11.8855 14.9956C12.0056 14.9955 12.1226 14.9574 12.2198 14.8868L12.7571 14.4969C12.7687 14.4872 12.7833 14.4819 12.7984 14.4819C12.8135 14.4819 12.8281 14.4872 12.8396 14.4969L13.3795 14.8867C13.4768 14.9555 13.5933 14.992 13.7125 14.9913C13.8316 14.9905 13.9476 14.9524 14.0441 14.8824C14.1405 14.8124 14.2127 14.714 14.2504 14.6009C14.2881 14.4878 14.2894 14.3658 14.2543 14.2519L14.0493 13.6171C14.0446 13.6034 14.0443 13.5887 14.0483 13.5748C14.0523 13.5609 14.0605 13.5486 14.0718 13.5396L14.6117 13.1472C14.7073 13.0761 14.7782 12.9768 14.8144 12.8633C14.8507 12.7498 14.8505 12.6278 14.8138 12.5144C14.7771 12.401 14.7058 12.302 14.6099 12.2313C14.514 12.1605 14.3984 12.1216 14.2792 12.12Z"
                                            fill="white" />
                                        <path
                                            d="M4.683 12.12H4.01568C4.00136 12.1194 3.98755 12.1145 3.97598 12.1061C3.96442 12.0976 3.95562 12.0859 3.95069 12.0725L3.74574 11.4377C3.70716 11.3248 3.63426 11.2268 3.53723 11.1575C3.44021 11.0881 3.32392 11.0508 3.20464 11.0508C3.08537 11.0508 2.96908 11.0881 2.87205 11.1574C2.77502 11.2268 2.70212 11.3248 2.66353 11.4376L2.45607 12.0725C2.45178 12.0863 2.44314 12.0984 2.43144 12.107C2.41973 12.1155 2.40558 12.1201 2.39109 12.12H1.72377C1.60381 12.12 1.48693 12.1579 1.38992 12.2285C1.2929 12.299 1.22074 12.3985 1.18381 12.5127C1.14688 12.6268 1.14707 12.7497 1.18436 12.8637C1.22165 12.9777 1.29412 13.077 1.39135 13.1472L1.93122 13.5396C1.94248 13.5486 1.95068 13.5609 1.95471 13.5748C1.95873 13.5887 1.95838 13.6034 1.95371 13.6171L1.74876 14.2519C1.71196 14.3661 1.71218 14.4889 1.74939 14.6029C1.7866 14.7168 1.8589 14.8161 1.95594 14.8866C2.05298 14.957 2.1698 14.9949 2.28971 14.995C2.40961 14.995 2.52645 14.9571 2.62353 14.8868L3.1634 14.4969C3.17496 14.4872 3.18956 14.4819 3.20464 14.4819C3.21972 14.4819 3.23432 14.4872 3.24587 14.4969L3.78323 14.8867C3.88068 14.9557 3.99729 14.9925 4.1167 14.9919C4.23611 14.9913 4.35234 14.9533 4.44908 14.8833C4.54582 14.8133 4.61823 14.7148 4.65615 14.6016C4.69407 14.4883 4.69559 14.3661 4.66052 14.2519L4.45308 13.6171C4.44944 13.6031 4.44987 13.5884 4.45429 13.5747C4.45872 13.561 4.46697 13.5488 4.47807 13.5396L5.01793 13.1472C5.11534 13.0768 5.18789 12.9774 5.22512 12.8631C5.26235 12.7488 5.26234 12.6257 5.22509 12.5115C5.18784 12.3972 5.11527 12.2977 5.01785 12.2274C4.92043 12.157 4.80317 12.1194 4.683 12.12Z"
                                            fill="white" />
                                        <path
                                            d="M9.48018 12.12H8.81286C8.79845 12.1197 8.78447 12.115 8.77284 12.1065C8.7612 12.098 8.75248 12.0861 8.74786 12.0725L8.54041 11.4376C8.50212 11.3248 8.42946 11.2269 8.33264 11.1575C8.23581 11.0881 8.11968 11.0508 8.00056 11.0508C7.88144 11.0508 7.76531 11.0881 7.66848 11.1575C7.57165 11.2269 7.49899 11.3248 7.4607 11.4376L7.25325 12.0725C7.24864 12.0861 7.23992 12.098 7.22828 12.1065C7.21665 12.115 7.20267 12.1197 7.18827 12.12H6.52094C6.4011 12.1201 6.28437 12.1581 6.18742 12.2285C6.09048 12.299 6.01827 12.3983 5.98112 12.5122C5.94398 12.6261 5.94379 12.7489 5.98059 12.8629C6.01739 12.977 6.08929 13.0765 6.18602 13.1472L6.72589 13.5396C6.73791 13.548 6.74685 13.5602 6.75136 13.5742C6.75587 13.5881 6.7557 13.6032 6.75088 13.6171L6.54593 14.2519C6.50866 14.3661 6.50855 14.4892 6.54563 14.6034C6.5827 14.7177 6.65503 14.8172 6.75224 14.8877C6.84945 14.9583 6.96653 14.9962 7.08664 14.996C7.20674 14.9958 7.3237 14.9576 7.4207 14.8868L7.96057 14.4969C7.97165 14.4872 7.98585 14.4819 8.00056 14.4819C8.01526 14.4819 8.02946 14.4872 8.04054 14.4969L8.58039 14.8867C8.6777 14.9558 8.79422 14.9927 8.91357 14.9921C9.03291 14.9914 9.14905 14.9534 9.24564 14.8833C9.34224 14.8132 9.41441 14.7146 9.452 14.6013C9.48959 14.4881 9.4907 14.3659 9.45518 14.2519L9.25025 13.6171C9.24543 13.6032 9.24526 13.5881 9.24976 13.5741C9.25427 13.5602 9.26322 13.548 9.27524 13.5396L9.81511 13.1472C9.91184 13.0765 9.98374 12.977 10.0205 12.8629C10.0573 12.7489 10.0571 12.6261 10.02 12.5122C9.98285 12.3982 9.91065 12.299 9.8137 12.2285C9.71675 12.1581 9.60002 12.1201 9.48018 12.12Z"
                                            fill="white" />
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white">
                                        Expert Guidance & Mentorship
                                    </div>
                                </div>

                                <div class="takeaway-card rounded-8 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 8px; background: linear-gradient(90deg, rgba(10, 0, 23,
                                        0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%); display: flex;
width: 228px;
padding: 16px;
align-items: center;
gap: 16px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_27955_89366)">
                                            <path
                                                d="M15.0452 10.4029C14.2222 9.57921 13.0802 9.23027 11.6135 9.62333L6.38359 4.38809L6.45272 4.12671C6.75394 2.99652 6.42847 1.78168 5.60359 0.956805C4.76372 0.116274 3.56972 -0.192132 2.4405 0.118055C2.27947 0.162274 2.15412 0.288805 2.11147 0.450274C2.06881 0.611743 2.11559 0.783368 2.23362 0.901461L3.4929 2.16074C3.86106 2.5298 3.85747 3.12087 3.49381 3.48549C3.13303 3.84724 2.52659 3.84668 2.16725 3.4864L0.907717 2.22677C0.789623 2.10862 0.617498 2.06227 0.456029 2.10518C0.294529 2.14805 0.168467 2.27371 0.124404 2.4349C-0.181252 3.55171 0.119435 4.75312 0.963342 5.59702C1.78603 6.4203 2.92662 6.77049 4.39415 6.37659L9.6245 11.6118C9.23418 13.0781 9.57087 14.209 10.405 15.0431C11.2459 15.8847 12.4405 16.1908 13.5672 15.8816C13.7283 15.8375 13.8537 15.7109 13.8963 15.5494C13.939 15.388 13.8923 15.2163 13.7742 15.0982L12.5152 13.8392C12.147 13.4701 12.1506 12.879 12.5143 12.5144C12.8796 12.151 13.4847 12.1568 13.8408 12.514L15.1005 13.7732C15.2186 13.8913 15.3907 13.9377 15.5521 13.8948C15.7136 13.8519 15.8397 13.7263 15.8837 13.5651C16.1894 12.4485 15.8887 11.2468 15.0452 10.4029Z"
                                                fill="white" />
                                            <path
                                                d="M5.01696 8.33203L0.548461 12.8011C-0.18282 13.5324 -0.18282 14.7216 0.548461 15.4528C1.27974 16.1841 2.46893 16.1841 3.20018 15.4528L7.66858 10.9839L5.01696 8.33203ZM2.7598 13.9981C2.57668 14.1812 2.28012 14.1812 2.09699 13.9981C1.9139 13.815 1.9139 13.5184 2.09699 13.3353L4.94012 10.4916C5.12321 10.3085 5.41987 10.3085 5.60293 10.4916C5.78602 10.6747 5.78602 10.9713 5.60293 11.1544L2.7598 13.9981Z"
                                                fill="white" />
                                            <path
                                                d="M15.8638 0.945411L15.0557 0.137317C14.9036 -0.0147766 14.6676 -0.0438391 14.4832 0.0667547L11.9973 1.5581C11.7357 1.715 11.6913 2.07585 11.907 2.2915L12.1048 2.48932L8.94922 5.63204L10.2753 6.95813L13.4309 3.81541L13.7097 4.09419C13.9253 4.30979 14.2862 4.26541 14.4431 4.00385L15.9344 1.518C16.045 1.33354 16.0159 1.0975 15.8638 0.945411Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_27955_89366">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-14 f-general-sans text-white">
                                        15+ Cutting-Edge AI Tools
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 mt-5 text-md-start text-center rounded-4 d-flex align-items-center justify-content-between flex-column gap-3"
                            style="background: linear-gradient(89deg, #5A09E5 0%, #FFB956 98.66%);">
                            <div>
                                <div class="fs-18 text-white fw-500 f-general-sans text-center" style="border-radius: 16px;
background: rgba(8, 8, 8, 0.30); padding: 8px 16px;">
                                    🔒 Limited Seats Available!
                                </div>

                            </div>
                            <div class="text-center d-flex flex-wrap gap-3 justify-content-between">
                                <h3 style="color: var(--WHITE, #FFF);
text-align: center;
font-family: Gloock;
font-size: 28px;
font-style: normal;
font-weight: 400;
width:100%;
line-height: normal;">Secure Your Spot in the Future of AI Security</h3>
                                <p style="color: var(--WHITE, #FFF);
text-align: center;
font-family: Nunito Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal;">Don't miss
                                    this opportunity to master LLM security and red teaming techniques
                                    from industry experts. Join professionals worldwide in this comprehensive
                                    masterclass.</p>
                            </div>
                            <div>
                                <a href="#" class="button modal-btn" modal-title="Register Now"
                                    style="background: var(--BG-DARK, #080808); color:white;">Register Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div style="position: sticky; top: 100px;">
                            <div class="d-flex flex-column gap-3 rounded-4"
                                style="overflow: hidden;background: linear-gradient(19deg, rgba(255, 185, 86, 0.15) 25.67%, rgba(90, 9, 229, 0.15) 74.33%);">
                                <div class="fs-28 text-center  p-3">
                                    <span class="fs-18 text-white f-general-sans">Interested in Joining the</span>
                                    <div class="fs-28 fw-400 f-Gloock" style="background: linear-gradient(92deg, #FFB956 3.38%, #5A09E5 98.81%);
background-clip: text;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;font-family: 'Gloock';">
                                        Masterclass?
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-3 px-3 timers">
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-white rounded"
                                        id="timer1" style="background: rgba(255, 185, 86, 0.20);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Days</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark rounded"
                                        id="timer2" style="background: rgba(255, 185, 86, 0.20);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Hours</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark rounded"
                                        id="timer3" style="background: rgba(255, 185, 86, 0.20);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Minutes</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark rounded"
                                        id="timer4" style="background: rgba(255, 185, 86, 0.20);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Seconds</span>
                                    </div>
                                </div>
                                <div class="fs-16 f-general-sans fw-600 px-3 text-white text-center">Please Fill the
                                    Form</div>
                                <div class="d-flex flex-column gap-3 px-3">
                                    <form method="post" class="ajax-form d-flex flex-column gap-3">
                                        <div>
                                            <input type="text" name="me_name" class="me_name form-control"
                                                placeholder="Full Name">
                                            <div class="error-message name_error"></div>
                                        </div>

                                        <div>
                                            <input type="email" name="me_email" class="me_email form-control"
                                                placeholder="Email">
                                            <div class="error-message email_error"></div>
                                        </div>

                                        <input type="text" name="me_phone" class="me_phone form-control"
                                            placeholder="Mobile">

                                        <input type="text" name="me_message" class="me_message form-control"
                                            placeholder="Mention your call time preference">


                                        <input type="hidden" name="me_pageurl" value="<?php echo $pag_url; ?>">
                                        <input type="hidden" id="me_others" name="me_others" value="">
                                        <input type="hidden" name="me_submited" value="1">
                                        <button type="submit" class="form-control-btn">SUBMIT</button>

                                        <div class="loader text-center" style="display:none;">
                                            <img src="assets/images/loader.gif" alt="Loading..." loading="lazy">
                                        </div>
                                    </form>
                                    <div class="fs-12 f-general-sans text-white">
                                        Our advisor will contact you with event details, payment options, and
                                        exclusive offers!
                                    </div>
                                    <div class="d-flex gap-3 align-items-center pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                            viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_27955_89440)">
                                                <path
                                                    d="M10.692 12.5676C11.9187 13.2289 12.882 14.3209 13.3007 15.6689C13.3317 15.7687 13.3388 15.8744 13.3215 15.9775C13.3042 16.0805 13.2629 16.1781 13.2009 16.2622C13.1389 16.3464 13.0581 16.4148 12.9648 16.4619C12.8715 16.5091 12.7685 16.5336 12.664 16.5336H3.33132C3.22672 16.5339 3.12352 16.5095 3.0301 16.4625C2.93668 16.4154 2.85568 16.347 2.79366 16.2628C2.73164 16.1785 2.69035 16.0809 2.67315 15.9777C2.65594 15.8745 2.66331 15.7687 2.69465 15.6689C3.11465 14.3183 4.08065 13.2249 5.31065 12.5636C5.46321 12.4806 5.63978 12.4528 5.81048 12.485C5.98117 12.5172 6.13549 12.6074 6.24732 12.7403L7.54665 14.2989C7.60233 14.3658 7.67205 14.4196 7.75085 14.4566C7.82966 14.4935 7.91562 14.5127 8.00265 14.5127C8.08968 14.5127 8.17565 14.4935 8.25445 14.4566C8.33325 14.4196 8.40297 14.3658 8.45865 14.2989L9.75465 12.7436C9.8666 12.6106 10.0211 12.5205 10.1919 12.4884C10.3628 12.4563 10.5394 12.4843 10.692 12.5676ZM13.7733 2.26694L9.46398 0.746271C8.53595 0.419287 7.52426 0.417877 6.59532 0.742271L2.23332 2.26894C1.96984 2.35851 1.7413 2.52888 1.5802 2.7558C1.41911 2.98272 1.33365 3.25466 1.33598 3.53294C1.33598 4.11094 1.68865 4.60694 2.23398 4.79694L6.57198 6.31027C7.49488 6.63119 8.49909 6.63119 9.42198 6.31027L13.3313 4.94694V7.86627C13.3313 8.04308 13.4016 8.21265 13.5266 8.33768C13.6516 8.4627 13.8212 8.53294 13.998 8.53294C14.1748 8.53294 14.3444 8.4627 14.4694 8.33768C14.5944 8.21265 14.6647 8.04308 14.6647 7.86627L14.6673 3.5316C14.6699 3.25366 14.585 2.98193 14.4247 2.75485C14.2644 2.52778 14.0368 2.35686 13.774 2.26627L13.7733 2.26694ZM11.9973 6.82427L9.86065 7.56961C8.65314 7.98762 7.34016 7.98762 6.13265 7.56961L3.99732 6.82427V7.19961C3.99732 9.40561 5.79132 11.1996 7.99732 11.1996C10.2033 11.1996 11.9973 9.40561 11.9973 7.19961V6.82361V6.82427Z"
                                                    fill="#FFB956" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_27955_89440">
                                                    <rect width="16" height="16" fill="white"
                                                        transform="translate(0 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="text-white fs-14 f-general-sans fw-400">
                                            <strong>62</strong> People have registered
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- <div>
                                    <img src="assets/images/prices/group-discount.png" class="img-fluid d-block mt-4"
                                        alt="">
                                </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--footer start-->
    <footer>
        <div class="container-fluid container-lg">
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

                    <input type="text" name="me_phone" class="me_phone form-control" placeholder="Mobile">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="assets/js/custom.js" defer></script>

    <script>
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
    </script>
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

            // ---- First Typing: "AI Summit 2025", keep "A" ----
            // let fullText1 = "AI Summit 2025";
            // let fixedChar1 = fullText1.charAt(0); // "A"
            // let rest1 = fullText1.substring(1);
            // let i1 = 0;
            // let isDeleting1 = false;

            // function typeOne() {
            //     let display = fixedChar1 + rest1.substring(0, i1);
            //     $('#typing-one').text(display);

            //     if (!isDeleting1) {
            //         i1++;
            //         if (i1 > rest1.length) {
            //             isDeleting1 = true;
            //             setTimeout(typeOne, 1500); // Pause at full text
            //             return;
            //         }
            //     } else {
            //         i1--;
            //         if (i1 < 0) {
            //             isDeleting1 = false;
            //             i1 = 0;
            //             setTimeout(typeOne, 500); // Pause before restart
            //             return;
            //         }
            //     }

            //     setTimeout(typeOne, 100); // Typing/deleting speed
            // }

            // typeOne();

            // ---- Second Typing: "Empowering the Future", keep "E" ----
            let fullText2 = "AI Revolution";
            let fixedChar2 = fullText2.charAt(0); // "E"
            let rest2 = fullText2.substring(1);
            let i2 = 0;
            let isDeleting2 = false;

            function typeTwo() {
                let display = fixedChar2 + rest2.substring(0, i2);
                $('#typing-two').text(display);

                if (!isDeleting2) {
                    i2++;
                    if (i2 > rest2.length) {
                        isDeleting2 = true;
                        setTimeout(typeTwo, 1500);
                        return;
                    }
                } else {
                    i2--;
                    if (i2 < 0) {
                        isDeleting2 = false;
                        i2 = 0;
                        setTimeout(typeTwo, 500);
                        return;
                    }
                }

                setTimeout(typeTwo, 100);
            }

            typeTwo();
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
                } else if (!/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9]{2,4}$/.test(email.value)) {
                    isValid = false;
                    email.classList.add('error');
                    errorMessages.email = "Please enter a valid email.";
                } else {
                    email.classList.remove('error');
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


        // Countdown function to show only specific time units in each div
        function startCountdown() {
            const targetDate = new Date("September 26, 2025 09:00:00").getTime(); // Target date

            // Update the countdown every second
            const interval = setInterval(function() {
                const currentDate = new Date().getTime(); // Current date and time
                const timeRemaining = targetDate - currentDate; // Time remaining in milliseconds

                // Calculate days, hours, minutes, and seconds
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
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



    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "AI Summit 2025",
            "description": "Master Tools, Build Trust & Lead the AI Revolution. A comprehensive 2-day summit featuring hands-on exposure to 15+ breakthrough AI tools, practical strategies for AI implementation, and insights from global experts on AI governance, security, and privacy.",
            "url": "https://www.infosectrain.com/pages/lp/ai-summit/",
            "image": "https://www.infosectrain.com/assets/images/logo.png",
            "startDate": "2025-TBD",
            "endDate": "2025-TBD",
            "eventStatus": "https://schema.org/EventScheduled",
            "eventAttendanceMode": "https://schema.org/OnlineEventAttendanceMode",
            "location": {
                "@type": "VirtualLocation",
                "url": "https://www.infosectrain.com/pages/lp/ai-summit/"
            },

            "potentialAction": {
                "@type": "RegisterAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://www.infosectrain.com/pages/lp/ai-summit/",
                    "actionPlatform": [
                        "http://schema.org/DesktopWebPlatform",
                        "http://schema.org/MobileWebPlatform"
                    ]
                },
                "result": {
                    "@type": "Order",
                    "name": "AI Summit 2025 Registration"
                }
            }
        }
    </script>
    <!-- Additional FAQ Schema for Common Questions -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "What AI tools will be covered in the AI Summit 2025?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The summit covers 15+ breakthrough AI tools including ChatGPT, NotebookLM, Gamma, Perplexity, Gemini, Meta, Mistral, Deepseek, Sora, Llama Coder, Deep Learning LMS, Napkin AI, Consensus and more with hands-on practical demonstrations."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Who should attend the AI Summit 2025?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "This summit is designed for business leaders, IT professionals, CISOs, data scientists, AI practitioners, privacy officers, and forward-thinking professionals who want to master AI implementation and governance in their organizations."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What topics are covered in the AI Summit curriculum?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The 2-day summit covers AI/ML fundamentals, AI productivity tools, cloud AI security, AI governance frameworks, AI auditing with ISO 42001, AI security for CISOs, privacy-by-design in GenAI with GDPR/HIPAA compliance, and AI in cybersecurity."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What compliance frameworks are covered?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The summit covers key compliance frameworks including DPDP Act, GDPR, HIPAA, ISO 42001 for AI auditing, and various AI governance and security frameworks relevant for enterprise implementation."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Who are the expert speakers at AI Summit 2025?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The summit features 8 global experts: Dr. Ram (AI Security), Prabh Nair (AI Governance), Krish (Cloud AI Security), Kiran (AI/ML), Jai (AI Privacy), Shakti (AI Auditing), Anas (AI Productivity), and Avinish (AI Cybersecurity)."
                    }
                }
            ]
        }
    </script>
    <!-- Organization Schema for InfosecTrain -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "InfosecTrain",
            "url": "https://www.infosectrain.com",
            "logo": "https://www.infosectrain.com/assets/images/logo.png",
            "description": "Leading provider of information security and AI training programs",
            "sameAs": [
                "https://www.linkedin.com/company/infosectrain",
                "https://twitter.com/infosectrain",
                "https://www.facebook.com/infosectrain"
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "Customer Service",
                "url": "https://www.infosectrain.com/contact"
            },

            "offers": {
                "@type": "Offer",
                "category": "AI Training and Education",
                "itemOffered": {
                    "@type": "EducationalEvent",
                    "name": "AI Summit 2025"
                }
            }
        }
    </script>
    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://www.infosectrain.com"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Training Programs",
                    "item": "https://www.infosectrain.com/training"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "AI Summit 2025",
                    "item": "https://www.infosectrain.com/pages/lp/ai-summit/"
                }
            ]
        },
        "organizer": {
            "@type": "Organization",
            "name": "InfosecTrain",
            "url": "https://www.infosectrain.com"
        },
        "offers": {
            "@type": "Offer",
            "availability": "https://schema.org/InStock",
            "price": "TBD",
            "priceCurrency": "USD",
            "url": "https://www.infosectrain.com/pages/lp/ai-summit/",
            "validFrom": "2025-01-01"
        },
        "audience": {
            "@type": "Audience",
            "audienceType": ["Business Leaders", "IT Professionals", "CISOs", "Data Scientists", "AI Practitioners",
                "Privacy Officers"
            ]
        },
        "educationalLevel": "Intermediate to Advanced",
        "about": [{
                "@type": "Thing",
                "name": "Artificial Intelligence"
            },
            {
                "@type": "Thing",
                "name": "Machine Learning"
            },
            {
                "@type": "Thing",
                "name": "AI Governance"
            },
            {
                "@type": "Thing",
                "name": "AI Security"
            },
            {
                "@type": "Thing",
                "name": "AI Privacy"
            },
            {
                "@type": "Thing",
                "name": "Cloud AI"
            },
            {
                "@type": "Thing",
                "name": "AI Auditing"
            }
        ],
        "teaches": [
            "Hands-on experience with 15+ AI tools including ChatGPT, NotebookLM, Gamma, Perplexity, Gemini",
            "AI/ML core concepts and practical applications",
            "AI productivity tools for business leaders",
            "Cloud AI security and deployment methodologies",
            "AI governance frameworks and compliance",
            "AI auditing with ISO 42001 standards",
            "AI security frameworks for CISOs",
            "Privacy-by-design in GenAI with DPDP, GDPR, HIPAA compliance",
            "AI in cybersecurity - offensive vs defensive strategies"
        ],
        "performer": [{
                "@type": "Person",
                "name": "Dr. Ram",
                "jobTitle": "AI Security Expert",
                "description": "Expert in AI Security Frameworks for CISOs"
            },
            {
                "@type": "Person",
                "name": "Prabh Nair",
                "jobTitle": "AI Governance Specialist",
                "description": "Expert in AI Governance and Trust Building"
            },
            {
                "@type": "Person",
                "name": "Krish",
                "jobTitle": "Cloud AI Security Expert",
                "description": "Specialist in securing AI applications in the Cloud"
            },
            {
                "@type": "Person",
                "name": "Kiran",
                "jobTitle": "AI/ML Expert",
                "description": "Expert in AI/ML fundamentals and practical applications"
            },
            {
                "@type": "Person",
                "name": "Jai",
                "jobTitle": "AI Privacy Specialist",
                "description": "Expert in Privacy-by-Design in GenAI and regulatory compliance"
            },
            {
                "@type": "Person",
                "name": "Shakti",
                "jobTitle": "AI Auditing Expert",
                "description": "Specialist in AI auditing with digital trust and ISO 42001"
            },
            {
                "@type": "Person",
                "name": "Anas",
                "jobTitle": "AI Productivity Expert",
                "description": "Expert in AI productivity tools and practical implementation"
            },
            {
                "@type": "Person",
                "name": "Avinish",
                "jobTitle": "AI Cybersecurity Expert",
                "description": "Expert in AI's role in cybersecurity - offense vs defense"
            }
        ],
        "workExample": [{
                "@type": "LearningResource",
                "name": "Day 1 - Session 1: Introduction to AI/ML",
                "description": "Demystifying AI/ML core concepts, real-world applications, and future trends",
                "timeRequired": "PT2H",
                "instructor": "Kiran"
            },
            {
                "@type": "LearningResource",
                "name": "Day 1 - Session 2: AI Productivity Tools",
                "description": "Hands-on showcase of 15+ AI tools including ChatGPT, NotebookLM, Gamma, and more",
                "timeRequired": "PT1H",
                "instructor": "Anas"
            },
            {
                "@type": "LearningResource",
                "name": "Day 1 - Session 3: Cloud & AI Security",
                "description": "Securing AI applications in the cloud with best practices and frameworks",
                "timeRequired": "PT2H",
                "instructor": "Krish"
            },
            {
                "@type": "LearningResource",
                "name": "Day 1 - Session 4: AI Governance",
                "description": "Building trust and control with AI governance frameworks",
                "timeRequired": "PT2H",
                "instructor": "Prabh Nair"
            },
            {
                "@type": "LearningResource",
                "name": "Day 2 - Session 1: AI Auditing with ISO 42001",
                "description": "Auditing AI systems with digital trust and compliance standards",
                "timeRequired": "PT2H",
                "instructor": "Shakti"
            },
            {
                "@type": "LearningResource",
                "name": "Day 2 - Session 2: AI Security Frameworks for CISOs",
                "description": "Designing and implementing secure AI frameworks for enterprise",
                "timeRequired": "PT1H",
                "instructor": "Dr. Ram"
            },
            {
                "@type": "LearningResource",
                "name": "Day 2 - Session 3: AI Privacy Compliance",
                "description": "Privacy-by-design in GenAI with DPDP Act, GDPR, and HIPAA compliance",
                "timeRequired": "PT2H",
                "instructor": "Jai"
            },
            {
                "@type": "LearningResource",
                "name": "Day 2 - Session 4: AI in Cybersecurity",
                "description": "AI's cyber battleground - offensive vs defensive strategies",
                "timeRequired": "PT2H",
                "instructor": "Avinish"
            }
        ],
        "learningResourceType": "Course",
        "educationalCredentialAwarded": "Certificate of Completion",
        "competencyRequired": "Basic understanding of technology and business operations",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
            "reviewCount": "150",
            "bestRating": "5",
            "worstRating": "1"
        },
        "review": [{
            "@type": "Review",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "5",
                "bestRating": "5"
            },
            "author": {
                "@type": "Person",
                "name": "Sample Reviewer"
            },
            "reviewBody": "Excellent comprehensive coverage of AI tools and governance frameworks"
        }],
        "keywords":
        "AI Summit, AI training, Machine Learning, AI governance, AI security, AI privacy, AI tools, ChatGPT training, AI compliance, GDPR AI, ISO 42001, AI auditing, cloud AI security",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.infosectrain.com/pages/lp/ai-summit/"
        },
        "provider": {
            "@type": "Organization",
            "name": "InfosecTrain",
            "url": "https://www.infosectrain.com",
            "logo": "https://www.infosectrain.com/assets/images/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "Customer Service",
                "url": "https://www.infosectrain.com/contact"
            }
        },
        "inLanguage": "en-US",
        "isAccessibleForFree": false,
        "hasCourseInstance": {
            "@type": "CourseInstance",
            "courseMode": "Online",
            "instructor": [{
                    "@type": "Person",
                    "name": "Dr. Ram"
                },
                {
                    "@type": "Person",
                    "name": "Prabh Nair"
                },
                {
                    "@type": "Person",
                    "name": "Krish"
                },
                {
                    "@type": "Person",
                    "name": "Kiran"
                },
                {
                    "@type": "Person",
                    "name": "Jai"
                },
                {
                    "@type": "Person",
                    "name": "Shakti"
                },
                {
                    "@type": "Person",
                    "name": "Anas"
                },
                {
                    "@type": "Person",
                    "name": "Avinish"
                }
            ]
        }
        }
    </script>
</body>

</html>