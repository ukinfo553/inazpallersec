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
    <title>Secure Intelligence Summit 2026</title>
    <meta name="description" content="Secure Intelligence Summit 2026">
    <meta name="robots" content="index, follow" />
    <link rel="icon" href="assets/images/favicon.ico">
    <!--/ style link start /-->
    <link href="assets/css/bootstrap-grid.css" rel="stylesheet" defer>
    <link rel="stylesheet" href="assets/css/custom.css" defer>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
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
                box-shadow: 0px 0px 20px 0px #6C0AE2;
                cursor: pointer;
            }

            .owl-carousel .owl-item img {
                width: 70%;
                margin: auto;
            }
        </style>
        <!-- Background Video -->
        <div class="top-strip">
            <span>Use Coupon Code <strong>“DEL10”</strong> to avail 10% Early Bird Discount</span>
            <div class="countdown d-flex gap-2">
                <p id="days"></p>
                <p id="hours"></p>
                <p id="minutes"></p>
                <p id="seconds"></p>
            </div>
            <div class="coupon-code" id="couponBox">
                <p> COPY COUPON CODE <strong id="couponText">“DEL10”</strong></p>
            </div>
        </div>
        <section class="hero-section">
            <!-- Background Video -->
            <video class="video-background" autoplay muted loop playsinline>
                <source src="assets/videos/background.mp4" type="video/mp4">
                <!-- Fallback for browsers that don't support video -->
                Your browser does not support the video tag.
            </video>
            <!-- Logo Section -->

            <!-- Main Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-item d-flex flex-column gap-4 justify-content-center align-items-center">
                            <img src="assets/images/ist-ai-logo.png" alt="Secure Intelligence Summit 2026" class="img-fluid">
                            <div class="heading-c d-flex flex-column gap-3 justify-content-center align-items-center">
                                <!-- <div class="fs-16 f-general-sans text-white mb-md-4"
                                    style="text-transform: uppercase;letter-spacing: 16px;font-weight: 200;">
                                    PRESENTS
                                </div> -->
                                <h1 id="typing-one"></h1>
                                <h3 data-text="Delhi Conclave 2026">Delhi Conclave 2026</h3>
                                <h2>Securing AI, Data & Decisions in the Enterprise</h2>

                            </div>
                            <div
                                class="d-flex flex-wrap justify-content-md-start justify-content-center gap-4 feature-boxes">
                                <div class="feature-box d-flex align-items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_34218_4965)">
                                            <path d="M12.3333 1.33333H12V1C12 0.447333 11.552 0 11 0C10.448 0 10 0.447333 10 1V1.33333H6V1C6 0.447333 5.552 0 5 0C4.448 0 4 0.447333 4 1V1.33333H3.66667C1.64533 1.33333 0 2.978 0 5V12.3333C0 14.3553 1.64533 16 3.66667 16H12.3333C14.3547 16 16 14.3553 16 12.3333V5C16 2.978 14.3547 1.33333 12.3333 1.33333ZM12.3333 14H3.66667C2.74733 14 2 13.252 2 12.3333V6H14V12.3333C14 13.252 13.2527 14 12.3333 14ZM6.66667 8.33333V9.66667C6.66667 10.2187 6.21867 10.6667 5.66667 10.6667H4.33333C3.78133 10.6667 3.33333 10.2187 3.33333 9.66667V8.33333C3.33333 7.78133 3.78133 7.33333 4.33333 7.33333H5.66667C6.21867 7.33333 6.66667 7.78133 6.66667 8.33333Z" fill="#FFB956" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_34218_4965">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>11 April 2026</span>
                                </div>
                                <div class="feature-box d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_34218_4969)">
                                            <path d="M8.99761 1.41V1C8.99761 0.734784 8.89225 0.48043 8.70472 0.292893C8.51718 0.105357 8.26283 0 7.99761 0C7.73239 0 7.47804 0.105357 7.2905 0.292893C7.10297 0.48043 6.99761 0.734784 6.99761 1V1.41C5.72585 1.58173 4.52168 2.08513 3.50609 2.86964C2.49051 3.65415 1.69928 4.69213 1.2119 5.87928C0.724531 7.06644 0.55818 8.36095 0.729566 9.63276C0.900952 10.9046 1.40404 12.1089 2.18828 13.1247C1.91224 13.3515 1.69156 13.6384 1.54301 13.9633C1.39445 14.2883 1.32192 14.6428 1.33094 15C1.33094 15.2652 1.4363 15.5196 1.62384 15.7071C1.81137 15.8946 2.06573 16 2.33094 16C2.59616 16 2.85051 15.8946 3.03805 15.7071C3.22559 15.5196 3.33094 15.2652 3.33094 15C3.32076 14.9009 3.34549 14.8014 3.40087 14.7186C3.45626 14.6359 3.53881 14.575 3.63428 14.5467C4.89327 15.4894 6.42378 15.9989 7.99661 15.9989C9.56944 15.9989 11.1 15.4894 12.3589 14.5467C12.4548 14.5747 12.5378 14.6353 12.5936 14.7181C12.6493 14.8009 12.6744 14.9007 12.6643 15C12.6643 15.2652 12.7696 15.5196 12.9572 15.7071C13.1447 15.8946 13.3991 16 13.6643 16C13.9295 16 14.1838 15.8946 14.3714 15.7071C14.5589 15.5196 14.6643 15.2652 14.6643 15C14.6733 14.6428 14.6008 14.2883 14.4522 13.9633C14.3037 13.6384 14.083 13.3515 13.8069 13.1247C14.5912 12.1089 15.0943 10.9046 15.2657 9.63276C15.437 8.36095 15.2707 7.06644 14.7833 5.87928C14.2959 4.69213 13.5047 3.65415 12.4891 2.86964C11.4735 2.08513 10.2694 1.58173 8.99761 1.41ZM2.66428 8.66667C2.66428 7.61183 2.97707 6.58069 3.56311 5.70363C4.14914 4.82656 4.98209 4.14298 5.95663 3.73931C6.93117 3.33564 8.00353 3.23002 9.03809 3.43581C10.0727 3.6416 11.023 4.14955 11.7688 4.89543C12.5147 5.64131 13.0227 6.59162 13.2285 7.62619C13.4343 8.66075 13.3286 9.73311 12.925 10.7076C12.5213 11.6822 11.8377 12.5151 10.9607 13.1012C10.0836 13.6872 9.05244 14 7.99761 14C6.58361 13.9984 5.22798 13.436 4.22813 12.4361C3.22828 11.4363 2.66586 10.0807 2.66428 8.66667Z" fill="#FFB956" />
                                            <path d="M13 0.0012864C12.7348 0.0012864 12.4804 0.106643 12.2929 0.29418C12.1054 0.481716 12 0.73607 12 1.00129C12 1.2665 12.1054 1.52086 12.2929 1.70839C12.4804 1.89593 12.7348 2.00129 13 2.00129C13.1327 1.99096 13.2661 2.00997 13.3907 2.05698C13.5152 2.10398 13.6279 2.17782 13.7208 2.27326C13.8136 2.36869 13.8843 2.48339 13.9278 2.60921C13.9714 2.73503 13.9867 2.86889 13.9727 3.00129C13.9727 3.2665 14.078 3.52086 14.2656 3.70839C14.4531 3.89593 14.7074 4.00129 14.9727 4.00129C15.2379 4.00129 15.4922 3.89593 15.6798 3.70839C15.8673 3.52086 15.9727 3.2665 15.9727 3.00129C15.9881 2.6055 15.922 2.21077 15.7784 1.84162C15.6349 1.47247 15.4169 1.13679 15.1381 0.85544C14.8593 0.574087 14.5257 0.353074 14.1578 0.206134C13.79 0.0591943 13.3959 -0.0105325 13 0.0012864Z" fill="#FFB956" />
                                            <path d="M2.02563 3.00129C2.01164 2.86889 2.02695 2.73503 2.07048 2.60921C2.11401 2.48339 2.1847 2.36869 2.27753 2.27326C2.37036 2.17782 2.48305 2.10398 2.60762 2.05698C2.73218 2.00997 2.86556 1.99096 2.9983 2.00129C3.26352 2.00129 3.51787 1.89593 3.70541 1.70839C3.89294 1.52086 3.9983 1.2665 3.9983 1.00129C3.9983 0.73607 3.89294 0.481716 3.70541 0.29418C3.51787 0.106643 3.26352 0.0012864 2.9983 0.0012864C2.60239 -0.0105325 2.20828 0.0591943 1.84046 0.206134C1.47264 0.353074 1.13897 0.574087 0.860182 0.85544C0.581393 1.13679 0.363443 1.47247 0.219876 1.84162C0.0763086 2.21077 0.0101918 2.6055 0.0256338 3.00129C0.0256338 3.2665 0.130991 3.52086 0.318527 3.70839C0.506063 3.89593 0.760417 4.00129 1.02563 4.00129C1.29085 4.00129 1.5452 3.89593 1.73274 3.70839C1.92028 3.52086 2.02563 3.2665 2.02563 3.00129Z" fill="#FFB956" />
                                            <path d="M9.02344 8.25202V5.66602C9.02344 5.4008 8.91808 5.14645 8.73054 4.95891C8.54301 4.77137 8.28865 4.66602 8.02344 4.66602C7.75822 4.66602 7.50387 4.77137 7.31633 4.95891C7.12879 5.14645 7.02344 5.4008 7.02344 5.66602V8.52802C7.02351 8.88161 7.16404 9.22069 7.4141 9.47068L8.60944 10.666C8.79804 10.8482 9.05064 10.949 9.31284 10.9467C9.57504 10.9444 9.82585 10.8392 10.0113 10.6538C10.1967 10.4684 10.3018 10.2176 10.3041 9.95542C10.3064 9.69322 10.2056 9.44062 10.0234 9.25202L9.02344 8.25202Z" fill="#FFB956" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_34218_4969">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>9 AM - 6 PM (IST)</span>
                                </div>
                                <div class="feature-box d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_34218_4976)">
                                            <path d="M8 0C6.14419 0.00229341 4.36504 0.740528 3.05279 2.05279C1.74053 3.36504 1.00229 5.14419 1 7C1 8.884 2.46667 11.5107 5.36067 14.806C5.6907 15.181 6.09684 15.4814 6.55205 15.6872C7.00727 15.893 7.5011 15.9994 8.00067 15.9994C8.50023 15.9994 8.99407 15.893 9.44928 15.6872C9.90449 15.4814 10.3106 15.181 10.6407 14.806C13.5333 11.5113 15 8.88467 15 7C14.9977 5.14419 14.2595 3.36504 12.9472 2.05279C11.635 0.740528 9.85581 0.00229341 8 0ZM9.13733 13.4873C8.99196 13.6436 8.81594 13.7682 8.62026 13.8535C8.42458 13.9387 8.21344 13.9827 8 13.9827C7.78656 13.9827 7.57542 13.9387 7.37974 13.8535C7.18406 13.7682 7.00804 13.6436 6.86267 13.4873C4.40733 10.6907 2.996 8.326 2.996 7.00067C2.996 5.67458 3.52278 4.40281 4.46047 3.46513C5.39815 2.52745 6.66992 2.00067 7.996 2.00067C9.32208 2.00067 10.5939 2.52745 11.5315 3.46513C12.4692 4.40281 12.996 5.67458 12.996 7.00067C13 8.326 11.5927 10.6907 9.13733 13.4873Z" fill="#FFB956" />
                                            <path d="M8.00046 4.03711C7.42518 4.03711 6.86282 4.2077 6.3845 4.52731C5.90617 4.84692 5.53336 5.30119 5.31321 5.83268C5.09306 6.36417 5.03546 6.949 5.14769 7.51323C5.25992 8.07746 5.53694 8.59573 5.94373 9.00251C6.35051 9.4093 6.86879 9.68632 7.43301 9.79855C7.99724 9.91079 8.58207 9.85318 9.11356 9.63303C9.64505 9.41288 10.0993 9.04007 10.4189 8.56175C10.7385 8.08342 10.9091 7.52106 10.9091 6.94578C10.9082 6.17462 10.6015 5.4353 10.0562 4.89001C9.51094 4.34472 8.77162 4.03799 8.00046 4.03711ZM8.00046 7.85444C7.82075 7.85444 7.64507 7.80115 7.49564 7.70131C7.34621 7.60146 7.22974 7.45954 7.16097 7.29351C7.09219 7.12747 7.0742 6.94477 7.10926 6.7685C7.14432 6.59224 7.23086 6.43033 7.35794 6.30325C7.48502 6.17617 7.64693 6.08963 7.82319 6.05457C7.99946 6.01951 8.18216 6.0375 8.3482 6.10628C8.51423 6.17505 8.65615 6.29152 8.75599 6.44095C8.85584 6.59038 8.90913 6.76606 8.90913 6.94578C8.90895 7.18672 8.81316 7.41774 8.64279 7.58811C8.47242 7.75848 8.2414 7.85427 8.00046 7.85444Z" fill="#FFB956" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_34218_4976">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>Delhi-NCR</span>
                                </div>
                            </div>

                            <div class="d-flex gap-4 align-items-center mt-2">
                                <a href="#form-pay" class="shimmer-button button">REGISTER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel owl-instructor d-flex" id="experts">
                <!--/col start /-->
                <div class="item">
                    <img src="assets/images/speakers/prabh.png" alt="prabh-nair">
                    <div class="profile-desc">
                        <div class="avtar-name">
                            Prabh Nair
                        </div>
                        <div class="avtar-exp">
                            18+ Years Of Experience
                        </div>
                        <div class="designation">
                            Program Director
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/images/speakers/rahul.png" alt="Rahul Kokcha">
                    <div class="profile-desc">
                        <div class="avtar-name">
                            Rahul Kokcha
                        </div>
                        <div class="avtar-exp">
                            24+ Years Of Experience
                        </div>
                        <div class="designation">
                            Principal Consultant Data Privacy & GRC
                        </div>
                    </div>

                </div>

                <div class="item">
                    <img src="assets/images/speakers/abhisar.png" alt="Abhishar">
                    <div class="profile-desc">

                        <div class="avtar-name">
                            Abhishar
                        </div>
                        <div class="avtar-exp">
                            14+ Years Of Experience
                        </div>
                        <div class="designation">
                            AI Security Researcher Manager Offensive Security
                        </div>
                    </div>

                </div>
                <div class="item">
                    <img src="assets/images/speakers/prashant.png" alt="Prashant">
                    <div class="profile-desc">

                        <div class="avtar-name">
                            Prashant
                        </div>
                        <div class="avtar-exp">
                            15+ Years Of Experience
                        </div>
                        <div class="designation">
                            Sr. Security Architect
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--banner sec end-->



        <section class="content-sec"
            style="background: #0A0017;position:relative; z-index: 99;">

            <div class="fixed-blur-background" id="blur-bg"></div>

            <div class="container">
                <div class="row flex-column-reverse flex-lg-row">
                    <div class="col-lg-8 mt-4 mt-lg-0">
                        <div class="item">
                            <div class="fs-18 text-white fw-700 mt-5 mb-4" style="color:#FFB956; font-family: Sora;">
                                Why Secure Intelligence Matters
                            </div>
                            <p class="mt-3 text-white" style="font-family: Lato; font-size: 16px;">
                                AI is no longer experimental. It is embedded in core business decisions. <br>
                                The Secure Intelligence Summit brings together leaders, architects, and practitioners to explore how enterprises can govern, secure, and trust AI systems at scale.
                            </p>
                            <p class="mt-4 text-white" style="color: #FFF;font-family: Sora;font-size: 28px;font-style: normal;font-weight: 300;line-height: normal;">
                                This is not just an <span class="fw-600">AI event.</span> <br>
                                It's a <span class="fw-600">learning-first,</span> practitioner-led <span class="fw-600">forum.</span>
                            </p>
                        </div>



                        <div class="my-4" id="key-takeaways">
                            <div class="fs-18 text-white fw-700 mt-5 mb-4" style="color:#FFB956; font-family: Sora;">
                                Key Takeaways
                            </div>

                            <div class="d-flex flex-column gap-3 mt-3 takeaways">
                                <div class="rounded-4 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 16px;
border: 1px solid rgba(255, 255, 255, 0.20);
background: rgba(13, 18, 176, 0.30);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_34092_3309)">
                                            <path d="M19.9 3.08949C19.7771 2.56114 19.5479 2.06333 19.2265 1.62631C18.9052 1.1893 18.4982 0.822219 18.0305 0.5474C17.5629 0.272581 17.0441 0.0957641 16.506 0.0277028C15.9678 -0.0403585 15.4214 0.00175796 14.9 0.151491L13.176 0.644491C12.7393 0.770011 12.337 0.99371 12 1.29849C11.663 0.99371 11.2607 0.770011 10.824 0.644491L9.1 0.151491C8.57894 0.00253837 8.03304 -0.0389777 7.49544 0.0294627C6.95784 0.0979031 6.43976 0.274872 5.97263 0.549629C5.50551 0.824386 5.09909 1.1912 4.77804 1.6278C4.45699 2.06441 4.22801 2.5617 4.105 3.08949C2.9548 3.29875 1.91429 3.90445 1.16433 4.80129C0.414377 5.69813 0.00239598 6.82941 0 7.99849L0 14.9985C0.00158786 16.3241 0.528882 17.5949 1.46622 18.5323C2.40356 19.4696 3.67441 19.9969 5 19.9985H11V21.9985H8C7.73478 21.9985 7.48043 22.1038 7.29289 22.2914C7.10536 22.4789 7 22.7333 7 22.9985C7 23.2637 7.10536 23.5181 7.29289 23.7056C7.48043 23.8931 7.73478 23.9985 8 23.9985H16C16.2652 23.9985 16.5196 23.8931 16.7071 23.7056C16.8946 23.5181 17 23.2637 17 22.9985C17 22.7333 16.8946 22.4789 16.7071 22.2914C16.5196 22.1038 16.2652 21.9985 16 21.9985H13V19.9985H19C20.3256 19.9969 21.5964 19.4696 22.5338 18.5323C23.4711 17.5949 23.9984 16.3241 24 14.9985V7.99849C23.9978 6.83013 23.5865 5.69942 22.8376 4.80268C22.0886 3.90594 21.0493 3.2998 19.9 3.08949ZM13 3.52949C13.0001 3.31231 13.0709 3.10106 13.2017 2.92768C13.3325 2.7543 13.5162 2.62822 13.725 2.56849L15.45 2.07549C15.7477 1.99035 16.0611 1.97548 16.3655 2.03206C16.6699 2.08864 16.957 2.21512 17.2042 2.40154C17.4514 2.58796 17.652 2.82924 17.7901 3.10636C17.9281 3.38347 18 3.68887 18 3.99849V7.93649C17.9986 8.37045 17.8565 8.79225 17.5951 9.13861C17.3337 9.48497 16.967 9.73722 16.55 9.85749L13 10.8715V3.52949ZM6.8 2.39849C7.04673 2.21275 7.33325 2.08688 7.63695 2.03082C7.94065 1.97477 8.25322 1.99006 8.55 2.07549L10.275 2.56849C10.4838 2.62822 10.6675 2.7543 10.7983 2.92768C10.9291 3.10106 10.9999 3.31231 11 3.52949V10.8715L7.45 9.85749C7.03305 9.73722 6.66634 9.48497 6.4049 9.13861C6.14346 8.79225 6.00139 8.37045 6 7.93649V3.99849C5.99898 3.68782 6.07083 3.38124 6.20976 3.10337C6.3487 2.8255 6.55086 2.58408 6.8 2.39849ZM22 14.9985C22 15.7941 21.6839 16.5572 21.1213 17.1198C20.5587 17.6824 19.7956 17.9985 19 17.9985H5C4.20435 17.9985 3.44129 17.6824 2.87868 17.1198C2.31607 16.5572 2 15.7941 2 14.9985V7.99849C2.00256 7.38023 2.19608 6.77786 2.55409 6.27379C2.91209 5.76972 3.41709 5.38857 4 5.18249V7.93649C4.00245 8.80483 4.28642 9.64896 4.8093 10.3422C5.33218 11.0355 6.06577 11.5405 6.9 11.7815L10.351 12.7685C11.4295 13.0759 12.5725 13.0759 13.651 12.7685L17.102 11.7815C17.9359 11.5401 18.669 11.035 19.1915 10.3417C19.714 9.64851 19.9977 8.80457 20 7.93649V5.18249C20.5829 5.38857 21.0879 5.76972 21.4459 6.27379C21.8039 6.77786 21.9974 7.38023 22 7.99849V14.9985Z" fill="#FFB956" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_34092_3309">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-16 text-white" style="font-family: Lato;">
                                        Highly applicable knowledge through case studies and real world scenarios
                                    </div>
                                </div>

                                <div class="rounded-4 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 16px;
border: 1px solid rgba(255, 255, 255, 0.20);
background: rgba(13, 18, 176, 0.30);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_34092_3313)">
                                            <path d="M9.63776 4.76276L11.25 3.1507V5.67189C11.25 6.06025 11.5648 6.37501 11.9531 6.37501C12.3415 6.37501 12.6563 6.06025 12.6563 5.67189V3.1507L14.2685 4.76276C14.543 5.03742 14.9883 5.03742 15.2628 4.76276C15.5374 4.48811 15.5374 4.04298 15.2628 3.7685L12.4503 0.955994C12.1758 0.681335 11.7305 0.681335 11.456 0.955994L8.64349 3.7685C8.36884 4.04298 8.36884 4.48811 8.64349 4.76276C8.91797 5.03742 9.36328 5.03742 9.63776 4.76276Z" fill="#FFB956" />
                                            <path d="M2.97162 16.0128C3.2461 16.2874 3.69141 16.2874 3.96589 16.0128C4.24055 15.7383 4.24055 15.2932 3.96589 15.0185L2.35364 13.4063H4.92188C5.31025 13.4063 5.62501 13.0915 5.62501 12.7031C5.62501 12.3148 5.31025 12 4.92188 12H2.35364L3.96589 10.3878C4.24055 10.1133 4.24055 9.66815 3.96589 9.39349C3.69141 9.11884 3.2461 9.11884 2.97162 9.39349L0.159119 12.206C-0.11554 12.4807 -0.11554 12.9258 0.159119 13.2003L2.97162 16.0128Z" fill="#FFB956" />
                                            <path d="M20.9346 9.39349C20.6602 9.11884 20.2148 9.11884 19.9404 9.39349C19.6657 9.66815 19.6657 10.1133 19.9404 10.3878L21.5524 12H18.9844C18.596 12 18.2812 12.3148 18.2812 12.7031C18.2812 13.0915 18.596 13.4063 18.9844 13.4063H21.5524L19.9402 15.0185C19.6657 15.293 19.6657 15.7381 19.9402 16.0128C20.2148 16.2874 20.66 16.2874 20.9346 16.0128L23.7471 13.2003C24.0218 12.9256 24.0218 12.4805 23.7471 12.206L20.9346 9.39349Z" fill="#FFB956" />
                                            <path d="M6.37509 23.25H17.5379C17.7397 23.25 17.9316 23.1634 18.0651 23.0123C18.1986 22.8611 18.2607 22.66 18.2358 22.4599C17.8421 19.3026 15.1426 16.9219 11.9565 16.9219C8.77048 16.9219 6.07095 19.3026 5.67727 22.4599C5.65237 22.66 5.71444 22.8611 5.84792 23.0123C5.98141 23.1634 6.1733 23.25 6.37509 23.25ZM11.9565 18.3281C14.1607 18.3281 16.0654 19.7926 16.675 21.8438H7.23806C7.84762 19.7926 9.75229 18.3281 11.9565 18.3281Z" fill="#FFB956" />
                                            <path d="M16.1719 12.7031C16.1719 10.377 14.2793 8.48438 11.9531 8.48438C9.62696 8.48438 7.73438 10.377 7.73438 12.7031C7.73438 15.0293 9.62696 16.9219 11.9531 16.9219C14.2793 16.9219 16.1719 15.0293 16.1719 12.7031ZM11.9531 15.5156C10.4022 15.5156 9.14063 14.254 9.14063 12.7031C9.14063 11.1522 10.4022 9.89063 11.9531 9.89063C13.5039 9.89063 14.7656 11.1522 14.7656 12.7031C14.7656 14.254 13.5039 15.5156 11.9531 15.5156Z" fill="#FFB956" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_34092_3313">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-16 text-white" style="font-family: Lato;">
                                        Learn and Network with senior cybersecurity leaders & AI experts
                                    </div>
                                </div>

                                <div class="rounded-4 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 16px;
border: 1px solid rgba(255, 255, 255, 0.20);
background: rgba(13, 18, 176, 0.30);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_34092_3305)">
                                            <path d="M19.0264 12V18C19.0264 18.552 18.5784 19 18.0264 19C17.4744 19 17.0264 18.552 17.0264 18V12C17.0264 11.448 17.4744 11 18.0264 11C18.5784 11 19.0264 11.448 19.0264 12ZM11.6064 6.717L14.6774 17.746C14.8524 18.376 14.3794 19 13.7244 19C13.2814 19 12.8934 18.706 12.7724 18.28L12.1294 16H6.92337L6.28037 18.28C6.16037 18.706 5.77137 19 5.32837 19C4.67437 19 4.20037 18.376 4.37537 17.746L7.46637 6.638C7.60737 6.03 8.00737 5.518 8.56437 5.233C9.13237 4.941 9.78437 4.923 10.4034 5.183C10.9904 5.429 11.4404 6 11.6074 6.718L11.6064 6.717ZM11.5654 14L9.63637 7.165C9.60737 7.051 9.44537 7.051 9.41737 7.165L7.48837 14H11.5654ZM23.0274 10C22.4754 10 22.0274 10.448 22.0274 11V19C22.0274 20.654 20.6814 22 19.0274 22H5.02637C3.37237 22 2.02637 20.654 2.02637 19V5C2.02637 3.346 3.37237 2 5.02637 2H13.0264C13.5784 2 14.0264 1.552 14.0264 1C14.0264 0.448 13.5784 0 13.0264 0H5.02637C2.26937 0 0.0263672 2.243 0.0263672 5V19C0.0263672 21.757 2.26937 24 5.02637 24H19.0264C21.7834 24 24.0264 21.757 24.0264 19V11C24.0264 10.448 23.5784 10 23.0264 10H23.0274ZM16.1774 5.18L18.0454 5.967L18.7904 7.832C18.9514 8.236 19.3424 8.5 19.7774 8.5C20.2124 8.5 20.6024 8.235 20.7644 7.832L21.5054 5.978L23.3594 5.237C23.7634 5.076 24.0274 4.685 24.0274 4.25C24.0274 3.815 23.7624 3.425 23.3594 3.263L21.5054 2.522L20.7644 0.668C20.6014 0.265 20.2104 0 19.7764 0C19.3424 0 18.9514 0.265 18.7894 0.668L18.0524 2.511L16.2124 3.208C15.8064 3.362 15.5344 3.748 15.5264 4.182C15.5184 4.617 15.7764 5.012 16.1764 5.181L16.1774 5.18Z" fill="#FFB956" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_34092_3305">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-16 text-white" style="font-family: Lato;">
                                        Drive real business growth with AI
                                    </div>
                                </div>

                                <div class="rounded-4 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 16px;
border: 1px solid rgba(255, 255, 255, 0.20);
background: rgba(13, 18, 176, 0.30);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_34092_3325)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8307 0C8.56666 0 5.91602 2.65064 5.91602 5.91473C5.91602 9.17882 8.56666 11.8295 11.8307 11.8295C15.0957 11.8295 17.7455 9.17882 17.7455 5.91473C17.7455 2.65064 15.0957 0 11.8307 0ZM11.8307 1.68992C14.1628 1.68992 16.0556 3.58264 16.0556 5.91473C16.0556 8.24683 14.1628 10.1395 11.8307 10.1395C9.4995 10.1395 7.60594 8.24683 7.60594 5.91473C7.60594 3.58264 9.4995 1.68992 11.8307 1.68992Z" fill="#FFB956" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.68992 21.9691H11.1383C11.6047 21.9691 11.9832 22.3477 11.9832 22.8141C11.9832 23.2805 11.6047 23.6591 11.1383 23.6591H0.844962C0.378543 23.6591 0 23.2805 0 22.8141C0 22.8141 0 22.117 0 21.1242C0 16.9239 3.4052 13.5195 7.60466 13.5195H11.1383C11.6047 13.5195 11.9832 13.8981 11.9832 14.3645C11.9832 14.8309 11.6047 15.2095 11.1383 15.2095H7.60466C4.33803 15.2095 1.68992 17.8576 1.68992 21.1242V21.9691Z" fill="#FFB956" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7814 22.4869L16.7594 23.8566C16.5 24.0315 16.1654 24.0501 15.89 23.903C15.6136 23.7569 15.4404 23.4696 15.4404 23.1569V17.4661C15.4404 17.1155 15.6576 16.8003 15.9854 16.6761C16.3141 16.5519 16.6851 16.6423 16.9174 16.9051C17.3745 17.4196 18.0412 17.745 18.7823 17.745C19.5241 17.745 20.1908 17.4196 20.6471 16.9051C20.8803 16.6423 21.2512 16.5519 21.5791 16.6761C21.9078 16.8003 22.1241 17.1155 22.1241 17.4661V23.1569C22.1241 23.4696 21.9517 23.7569 21.6754 23.903C21.3991 24.0501 21.0645 24.0315 20.8059 23.8566L18.7814 22.4869ZM17.1304 19.0952V21.5642L18.3082 20.7674C18.5938 20.5739 18.969 20.573 19.2554 20.7665L20.4342 21.565V19.0952C19.928 19.314 19.3687 19.4349 18.7823 19.4349C18.1958 19.4349 17.6373 19.314 17.1304 19.0952Z" fill="#FFB956" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7784 11.0723C16.4708 11.0723 14.5967 12.9464 14.5967 15.254C14.5967 17.5624 16.4708 19.4365 18.7784 19.4365C21.0868 19.4365 22.961 17.5624 22.961 15.254C22.961 12.9464 21.0868 11.0723 18.7784 11.0723ZM18.7784 12.7622C20.154 12.7622 21.271 13.8784 21.271 15.254C21.271 16.6296 20.154 17.7466 18.7784 17.7466C17.4028 17.7466 16.2866 16.6296 16.2866 15.254C16.2866 13.8784 17.4028 12.7622 18.7784 12.7622Z" fill="#FFB956" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_34092_3325">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-16 text-white" style="font-family: Lato;">
                                        Get expert guidance for the AI era
                                    </div>
                                </div>

                                <div class="rounded-4 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 16px;
border: 1px solid rgba(255, 255, 255, 0.20);
background: rgba(13, 18, 176, 0.30);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_34092_3321)">
                                            <path d="M15 10C12.2425 10 10 12.2425 10 15C10 17.7575 12.2425 20 15 20C17.7575 20 20 17.7575 20 15C20 12.2425 17.7575 10 15 10ZM15 18.3333C13.1617 18.3333 11.6667 16.8383 11.6667 15C11.6667 13.1617 13.1617 11.6667 15 11.6667C16.8383 11.6667 18.3333 13.1617 18.3333 15C18.3333 16.8383 16.8383 18.3333 15 18.3333ZM16.4225 15.2442C16.7483 15.57 16.7483 16.0967 16.4225 16.4225C16.26 16.585 16.0467 16.6667 15.8333 16.6667C15.62 16.6667 15.4067 16.585 15.2442 16.4225L14.4108 15.5892C14.2542 15.4325 14.1667 15.2208 14.1667 15V13.3333C14.1667 12.8733 14.5392 12.5 15 12.5C15.4608 12.5 15.8333 12.8733 15.8333 13.3333V14.655L16.4225 15.2442ZM20 4.16667V8.33333C20 8.79333 19.6275 9.16667 19.1667 9.16667C18.7058 9.16667 18.3333 8.79333 18.3333 8.33333V4.16667C18.3333 2.78833 17.2117 1.66667 15.8333 1.66667H4.16667C2.78833 1.66667 1.66667 2.78833 1.66667 4.16667V12.5C1.66667 13.8783 2.78833 15 4.16667 15H7.5C7.96083 15 8.33333 15.3733 8.33333 15.8333C8.33333 16.2933 7.96083 16.6667 7.5 16.6667H4.16667C1.86917 16.6667 0 14.7975 0 12.5V4.16667C0 1.86917 1.86917 0 4.16667 0H15.8333C18.1308 0 20 1.86917 20 4.16667ZM12.41 9.28667L8.9625 11.2017C8.30667 11.5658 7.5 11.0917 7.5 10.3408V6.51C7.5 5.75917 8.30667 5.285 8.9625 5.64917L12.41 7.565C13.085 7.94 13.085 8.91083 12.41 9.28583V9.28667Z" fill="#FFB956" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_34092_3321">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-16 text-white" style="font-family: Lato;">
                                        Post-event learning resources
                                    </div>
                                </div>

                                <div class="rounded-4 p-3 d-flex align-items-center gap-3 rounded"
                                    style="border-radius: 16px;
border: 1px solid rgba(255, 255, 255, 0.20);
background: rgba(13, 18, 176, 0.30);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_34092_3332)">
                                            <path d="M12 24C10.374 24 8.84 23.286 7.792 22.041C6.252 22.218 4.665 21.635 3.515 20.486C2.366 19.336 1.786 17.746 1.925 16.124C0.714 15.16 0 13.626 0 12C0 10.374 0.714 8.84 1.96 7.792C1.785 6.255 2.365 4.665 3.515 3.515C4.665 2.364 6.252 1.785 7.876 1.925C8.84 0.715 10.374 0 12 0C13.626 0 15.16 0.714 16.208 1.959C17.75 1.783 19.335 2.365 20.485 3.514C21.634 4.664 22.214 6.254 22.075 7.876C23.286 8.84 24 10.374 24 12C24 13.626 23.286 15.16 22.04 16.208C22.215 17.745 21.635 19.335 20.485 20.485C19.334 21.635 17.744 22.214 16.124 22.075C15.16 23.285 13.626 24 12 24ZM7.873 20.076C8.434 20.076 8.954 20.317 9.321 20.752C9.989 21.545 10.965 22 12 22C13.035 22 14.011 21.545 14.679 20.752C15.082 20.273 15.669 20.031 16.295 20.082C17.329 20.169 18.339 19.802 19.071 19.07C19.802 18.339 20.171 17.327 20.083 16.294C20.029 15.67 20.273 15.081 20.753 14.677C21.545 14.01 22 13.033 22 11.999C22 10.965 21.545 9.988 20.753 9.321C20.274 8.918 20.029 8.328 20.083 7.704C20.171 6.671 19.803 5.659 19.071 4.928C18.339 4.197 17.323 3.832 16.296 3.916C15.67 3.973 15.082 3.725 14.679 3.247C14.011 2.454 13.035 1.999 12 1.999C10.965 1.999 9.989 2.454 9.321 3.247C8.917 3.726 8.328 3.966 7.705 3.917C6.666 3.827 5.661 4.197 4.929 4.929C4.198 5.66 3.829 6.672 3.917 7.705C3.971 8.329 3.727 8.918 3.247 9.322C2.455 9.989 2 10.966 2 12C2 13.034 2.455 14.011 3.247 14.678C3.726 15.081 3.971 15.671 3.917 16.295C3.829 17.328 4.197 18.34 4.929 19.071C5.661 19.803 6.682 20.169 7.704 20.083C7.761 20.078 7.817 20.076 7.873 20.076ZM9 8C8.448 8 8 8.448 8 9C8 9.552 8.448 10 9 10C9.552 10 10 9.552 10 9C10 8.448 9.552 8 9 8ZM15 14C14.448 14 14 14.448 14 15C14 15.552 14.448 16 15 16C15.552 16 16 15.552 16 15C16 14.448 15.552 14 15 14ZM10.832 15.555L14.832 9.555C15.139 9.096 15.015 8.474 14.555 8.168C14.094 7.86 13.474 7.986 13.168 8.445L9.168 14.445C8.861 14.904 8.985 15.526 9.445 15.832C9.616 15.946 9.808 16 9.999 16C10.322 16 10.64 15.844 10.832 15.555Z" fill="#FFB956" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_34092_3332">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="fw-400 fs-16 text-white" style="font-family: Lato;">
                                        Earn 8 CPEs
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="agenda" id="masterclass-agenda">
                            <h3>AGENDA SNAPSHOT</h3>
                            <div class="snapshot d-flex flex-column gap-4">
                                <div class="curriculum">
                                    <div class="d-flex justify-content-between curriculum-top">
                                        <div class="agenda-heading">
                                            Registration
                                        </div>
                                        <div class="d-flex gap-3" style="border-radius: 8px;background: rgba(39, 56, 237, 0.60); padding:8px 16px; height: fit-content; width:fit-content;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_34659_153)">
                                                    <path d="M11.7129 7.14681H8.85689V4.29075C8.85689 3.81738 8.47311 3.43359 7.99973 3.43359C7.52636 3.43359 7.14258 3.81738 7.14258 4.29075V8.00394C7.14258 8.47731 7.52636 8.86109 7.99973 8.86109H11.7129C12.1863 8.86109 12.57 8.47731 12.57 8.00394C12.57 7.53056 12.1863 7.14681 11.7129 7.14681Z" fill="#FFB956" />
                                                    <path d="M8 0C3.58881 0 0 3.58881 0 8.00006C0 12.4113 3.58881 16 8 16C12.4112 16 16 12.4113 16 8.00006C16 3.58881 12.4112 0 8 0ZM8 14.2857C4.53406 14.2857 1.71428 11.466 1.71428 8.00006C1.71428 4.53406 4.53406 1.71428 8 1.71428C11.4659 1.71428 14.2857 4.53406 14.2857 8.00006C14.2857 11.466 11.4659 14.2857 8 14.2857Z" fill="#FFB956" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_34659_153">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <p>09:00 - 09:30 IST</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="curriculum" style="border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.20); background: rgba(13, 18, 176, 0.20);">
                                    <div class="agenda-heading">
                                        <div class="d-flex justify-content-between curriculum-top">
                                            <div class="d-flex gap-3 align-items-center">
                                                <img src="assets/images/speakers/deepti.png" alt="deepti">
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="trainer-name">Deepti Kalra</div>
                                                    <div class="title">The AI Imperative</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-3" style="border-radius: 8px;background: rgba(39, 56, 237, 0.60); padding:8px 16px; height: fit-content; width:fit-content;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_34659_153)">
                                                        <path d="M11.7129 7.14681H8.85689V4.29075C8.85689 3.81738 8.47311 3.43359 7.99973 3.43359C7.52636 3.43359 7.14258 3.81738 7.14258 4.29075V8.00394C7.14258 8.47731 7.52636 8.86109 7.99973 8.86109H11.7129C12.1863 8.86109 12.57 8.47731 12.57 8.00394C12.57 7.53056 12.1863 7.14681 11.7129 7.14681Z" fill="#FFB956" />
                                                        <path d="M8 0C3.58881 0 0 3.58881 0 8.00006C0 12.4113 3.58881 16 8 16C12.4112 16 16 12.4113 16 8.00006C16 3.58881 12.4112 0 8 0ZM8 14.2857C4.53406 14.2857 1.71428 11.466 1.71428 8.00006C1.71428 4.53406 4.53406 1.71428 8 1.71428C11.4659 1.71428 14.2857 4.53406 14.2857 8.00006C14.2857 11.466 11.4659 14.2857 8 14.2857Z" fill="#FFB956" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_34659_153">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <p>09:30 - 10:00 IST</p>
                                            </div>
                                        </div>
                                        Opening Note by the CEO
                                        <div>
                                            <strong>Focus:</strong>
                                            <ul>
                                                <li>Why AI is now a board-level security concern</li>
                                                <li>From traditional cybersecurity to secure intelligence</li>
                                                <li>What leaders must rethink in 2026</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="curriculum" style="border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.20); background: rgba(13, 18, 176, 0.20);">

                                    <div class="agenda-heading">
                                        <div class="d-flex justify-content-between curriculum-top">
                                            <div class="d-flex gap-3 align-items-center">
                                                <img src="assets/images/speakers/rahul1.png" alt="deepti">
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="trainer-name">Rahul Kokcha</div>
                                                    <div class="title">Privacy by Design in the Age of AI</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-3" style="border-radius: 8px;background: rgba(39, 56, 237, 0.60); padding:8px 16px; height: fit-content; width:fit-content;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_34659_153)">
                                                        <path d="M11.7129 7.14681H8.85689V4.29075C8.85689 3.81738 8.47311 3.43359 7.99973 3.43359C7.52636 3.43359 7.14258 3.81738 7.14258 4.29075V8.00394C7.14258 8.47731 7.52636 8.86109 7.99973 8.86109H11.7129C12.1863 8.86109 12.57 8.47731 12.57 8.00394C12.57 7.53056 12.1863 7.14681 11.7129 7.14681Z" fill="#FFB956" />
                                                        <path d="M8 0C3.58881 0 0 3.58881 0 8.00006C0 12.4113 3.58881 16 8 16C12.4112 16 16 12.4113 16 8.00006C16 3.58881 12.4112 0 8 0ZM8 14.2857C4.53406 14.2857 1.71428 11.466 1.71428 8.00006C1.71428 4.53406 4.53406 1.71428 8 1.71428C11.4659 1.71428 14.2857 4.53406 14.2857 8.00006C14.2857 11.466 11.4659 14.2857 8 14.2857Z" fill="#FFB956" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_34659_153">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <p>10:00 - 11:30 IST</p>
                                            </div>
                                        </div>
                                        Session 1 - Enterprise Data Privacy

                                        <div>
                                            <strong>Key Takeaways</strong>
                                            <ul>
                                                <li>Building enterprise-grade data privacy framework</li>
                                                <li>Managing AI data risks under DPDP, GDPR & global laws</li>
                                                <li>Operationalizing privacy across AI use cases</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="curriculum" style="border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.20); background: rgba(13, 18, 176, 0.20);">
                                    <div class="agenda-heading">
                                        <div class="d-flex justify-content-between curriculum-top">
                                            <div class="d-flex gap-3 align-items-center">
                                                <img src="assets/images/speakers/prabh-nair.png" alt="deepti">
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="trainer-name">Prabh Nair</div>
                                                    <div class="title">Governing Intelligence: Implementing an AI Governance Framework</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-3" style="border-radius: 8px;background: rgba(39, 56, 237, 0.60); padding:8px 16px; height: fit-content; width:fit-content;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_34659_153)">
                                                        <path d="M11.7129 7.14681H8.85689V4.29075C8.85689 3.81738 8.47311 3.43359 7.99973 3.43359C7.52636 3.43359 7.14258 3.81738 7.14258 4.29075V8.00394C7.14258 8.47731 7.52636 8.86109 7.99973 8.86109H11.7129C12.1863 8.86109 12.57 8.47731 12.57 8.00394C12.57 7.53056 12.1863 7.14681 11.7129 7.14681Z" fill="#FFB956" />
                                                        <path d="M8 0C3.58881 0 0 3.58881 0 8.00006C0 12.4113 3.58881 16 8 16C12.4112 16 16 12.4113 16 8.00006C16 3.58881 12.4112 0 8 0ZM8 14.2857C4.53406 14.2857 1.71428 11.466 1.71428 8.00006C1.71428 4.53406 4.53406 1.71428 8 1.71428C11.4659 1.71428 14.2857 4.53406 14.2857 8.00006C14.2857 11.466 11.4659 14.2857 8 14.2857Z" fill="#FFB956" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_34659_153">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <p>11:30 - 13:00 IST</p>
                                            </div>
                                        </div>
                                        Session 2 - AI Governance

                                        <div>
                                            <strong>Key Takeaways</strong>
                                            <ul>
                                                <li>AI governance frameworks for enterprises</li>
                                                <li>Risk ownership across business, IT, and security</li>
                                                <li>End-to-end implementation of AI Governance Framework</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="curriculum">
                                    <div class="d-flex justify-content-between curriculum-top">
                                        <div class="agenda-heading">
                                            Lunch & Networking
                                        </div>
                                        <div class="d-flex gap-3" style="border-radius: 8px;background: rgba(39, 56, 237, 0.60); padding:8px 16px; height: fit-content; width:fit-content;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M9.00343 1.41V1C9.00343 0.447333 8.55456 0 8 0C7.44544 0 6.99657 0.447333 6.99657 1V1.41C3.41299 1.9 0.641525 4.96333 0.641525 8.66667C0.641525 10.3447 1.21616 11.888 2.17075 13.1247C1.68643 13.5267 1.31048 14.1347 1.31048 15C1.31048 15.5527 1.75934 16 2.31391 16C2.86847 16 3.31733 15.5527 3.31733 15C3.31733 14.8993 3.318 14.6513 3.62171 14.5467C4.84723 15.4553 6.35906 16 8 16C9.64094 16 11.1514 15.456 12.3763 14.5487C12.6827 14.6567 12.6827 14.9007 12.6827 15C12.6827 15.5527 13.1315 16 13.6861 16C14.2407 16 14.6895 15.5527 14.6895 15C14.6895 14.1353 14.3136 13.5267 13.8293 13.1247C14.7838 11.8873 15.3585 10.3447 15.3585 8.66667C15.3585 4.96333 12.587 1.9 9.00343 1.41ZM2.64838 8.66667C2.64838 5.726 5.04925 3.33333 8 3.33333C10.9507 3.33333 13.3516 5.726 13.3516 8.66667C13.3516 11.6073 10.9507 14 8 14C5.04925 14 2.64838 11.6073 2.64838 8.66667ZM16 3C16 3.55267 15.5511 4 14.9966 4C14.442 4 13.9931 3.55267 13.9931 3C13.9931 2.69933 13.8982 2 13.0171 2C12.4626 2 12.0137 1.55267 12.0137 1C12.0137 0.447333 12.4626 0 13.0171 0C14.745 0 16 1.262 16 3ZM1.00343 4C0.448867 4 0 3.55267 0 3C0 1.262 1.25495 0 2.98286 0C3.53742 0 3.98629 0.447333 3.98629 1C3.98629 1.55267 3.53742 2 2.98286 2C2.10185 2 2.00686 2.69933 2.00686 3C2.00686 3.55267 1.55799 4 1.00343 4ZM11.0103 8C11.0304 8.69467 10.7206 9.464 10.0069 10.2287V11.3333C10.0069 11.7013 9.70717 12 9.3379 12C8.96864 12 8.66895 11.7013 8.66895 11.3333V6C8.66895 5.33333 9.17067 5.20933 9.48374 5.43933C10.0296 5.82933 10.9407 6.57533 11.0103 8ZM8 8C8 8.82 7.58659 9.33933 6.99657 9.55333V11.3333C6.99657 11.7013 6.69688 12 6.32762 12C5.95836 12 5.65867 11.7013 5.65867 11.3333V9.55333C5.06865 9.33933 4.65524 8.82 4.65524 8C4.65524 6.89533 5.4038 5.33333 6.32762 5.33333C7.25144 5.33333 8 6.89533 8 8Z" fill="#FFB956" />
                                            </svg>
                                            <p>13:00 - 14:00 IST</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="curriculum" style="border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.20); background: rgba(13, 18, 176, 0.20);">

                                    <div class="agenda-heading">
                                        <div class="d-flex justify-content-between curriculum-top">
                                            <div class="d-flex gap-3 align-items-center">
                                                <img src="assets/images/speakers/prashant1.png" alt="prashant">
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="trainer-name">Prashant</div>
                                                    <div class="title">Designing Security Architectures for AI-Driven Enterprises</div>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_34659_153)">
                                                    <path d="M11.7129 7.14681H8.85689V4.29075C8.85689 3.81738 8.47311 3.43359 7.99973 3.43359C7.52636 3.43359 7.14258 3.81738 7.14258 4.29075V8.00394C7.14258 8.47731 7.52636 8.86109 7.99973 8.86109H11.7129C12.1863 8.86109 12.57 8.47731 12.57 8.00394C12.57 7.53056 12.1863 7.14681 11.7129 7.14681Z" fill="#FFB956" />
                                                    <path d="M8 0C3.58881 0 0 3.58881 0 8.00006C0 12.4113 3.58881 16 8 16C12.4112 16 16 12.4113 16 8.00006C16 3.58881 12.4112 0 8 0ZM8 14.2857C4.53406 14.2857 1.71428 11.466 1.71428 8.00006C1.71428 4.53406 4.53406 1.71428 8 1.71428C11.4659 1.71428 14.2857 4.53406 14.2857 8.00006C14.2857 11.466 11.4659 14.2857 8 14.2857Z" fill="#FFB956" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_34659_153">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <p>14:00 - 15:30 IST</p>
                                        </div>
                                    </div>
                                    Session 3 - Security Architecture

                                    <div>
                                        <strong>Key Takeaways</strong>
                                        <ul>
                                            <li>How AI changes traditional security architecture</li>
                                            <li>Securing models, pipelines, APIs, and data flows</li>
                                            <li>Developing AI pattern from security architecture perspective</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="curriculum">
                                    <div class="d-flex justify-content-between curriculum-top">
                                        <div class="agenda-heading">
                                            Hi-Tea
                                        </div>
                                        <div class="d-flex gap-3" style="border-radius: 8px;background: rgba(39, 56, 237, 0.60); padding:8px 16px; height: fit-content;width:fit-content;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M9.00343 1.41V1C9.00343 0.447333 8.55456 0 8 0C7.44544 0 6.99657 0.447333 6.99657 1V1.41C3.41299 1.9 0.641525 4.96333 0.641525 8.66667C0.641525 10.3447 1.21616 11.888 2.17075 13.1247C1.68643 13.5267 1.31048 14.1347 1.31048 15C1.31048 15.5527 1.75934 16 2.31391 16C2.86847 16 3.31733 15.5527 3.31733 15C3.31733 14.8993 3.318 14.6513 3.62171 14.5467C4.84723 15.4553 6.35906 16 8 16C9.64094 16 11.1514 15.456 12.3763 14.5487C12.6827 14.6567 12.6827 14.9007 12.6827 15C12.6827 15.5527 13.1315 16 13.6861 16C14.2407 16 14.6895 15.5527 14.6895 15C14.6895 14.1353 14.3136 13.5267 13.8293 13.1247C14.7838 11.8873 15.3585 10.3447 15.3585 8.66667C15.3585 4.96333 12.587 1.9 9.00343 1.41ZM2.64838 8.66667C2.64838 5.726 5.04925 3.33333 8 3.33333C10.9507 3.33333 13.3516 5.726 13.3516 8.66667C13.3516 11.6073 10.9507 14 8 14C5.04925 14 2.64838 11.6073 2.64838 8.66667ZM16 3C16 3.55267 15.5511 4 14.9966 4C14.442 4 13.9931 3.55267 13.9931 3C13.9931 2.69933 13.8982 2 13.0171 2C12.4626 2 12.0137 1.55267 12.0137 1C12.0137 0.447333 12.4626 0 13.0171 0C14.745 0 16 1.262 16 3ZM1.00343 4C0.448867 4 0 3.55267 0 3C0 1.262 1.25495 0 2.98286 0C3.53742 0 3.98629 0.447333 3.98629 1C3.98629 1.55267 3.53742 2 2.98286 2C2.10185 2 2.00686 2.69933 2.00686 3C2.00686 3.55267 1.55799 4 1.00343 4ZM11.0103 8C11.0304 8.69467 10.7206 9.464 10.0069 10.2287V11.3333C10.0069 11.7013 9.70717 12 9.3379 12C8.96864 12 8.66895 11.7013 8.66895 11.3333V6C8.66895 5.33333 9.17067 5.20933 9.48374 5.43933C10.0296 5.82933 10.9407 6.57533 11.0103 8ZM8 8C8 8.82 7.58659 9.33933 6.99657 9.55333V11.3333C6.99657 11.7013 6.69688 12 6.32762 12C5.95836 12 5.65867 11.7013 5.65867 11.3333V9.55333C5.06865 9.33933 4.65524 8.82 4.65524 8C4.65524 6.89533 5.4038 5.33333 6.32762 5.33333C7.25144 5.33333 8 6.89533 8 8Z" fill="#FFB956" />
                                            </svg>
                                            <p>15:30 - 16:00 IST</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="curriculum" style="border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.20); background: rgba(13, 18, 176, 0.20);">
                                    <div class="agenda-heading">
                                        <div class="d-flex justify-content-between curriculum-top">
                                            <div class="d-flex gap-3 align-items-center">
                                                <img src="assets/images/speakers/abhisar1.png" alt="abhisar">
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="trainer-name">Abhishar</div>
                                                    <div class="title">AI Hacking: Practical LLM Pentesting & AI Attack Scenarios</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-3" style="border-radius: 8px;background: rgba(39, 56, 237, 0.60); padding:8px 16px; height: fit-content;width:fit-content;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_34659_153)">
                                                        <path d="M11.7129 7.14681H8.85689V4.29075C8.85689 3.81738 8.47311 3.43359 7.99973 3.43359C7.52636 3.43359 7.14258 3.81738 7.14258 4.29075V8.00394C7.14258 8.47731 7.52636 8.86109 7.99973 8.86109H11.7129C12.1863 8.86109 12.57 8.47731 12.57 8.00394C12.57 7.53056 12.1863 7.14681 11.7129 7.14681Z" fill="#FFB956" />
                                                        <path d="M8 0C3.58881 0 0 3.58881 0 8.00006C0 12.4113 3.58881 16 8 16C12.4112 16 16 12.4113 16 8.00006C16 3.58881 12.4112 0 8 0ZM8 14.2857C4.53406 14.2857 1.71428 11.466 1.71428 8.00006C1.71428 4.53406 4.53406 1.71428 8 1.71428C11.4659 1.71428 14.2857 4.53406 14.2857 8.00006C14.2857 11.466 11.4659 14.2857 8 14.2857Z" fill="#FFB956" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_34659_153">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <p>16:00 - 17:30 IST</p>
                                            </div>
                                        </div>
                                        Session 4 - Attacking LLMs

                                        <div>
                                            <strong>Key Takeaways</strong>
                                            <ul>
                                                <li>Common LLM vulnerabilities & attack vectors</li>
                                                <li>Prompt injection, data leakage & model abuse</li>
                                                <li>How enterprises should test and defend AI systems</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="curriculum">
                                    <div class="d-flex justify-content-between curriculum-top">
                                        <div class="agenda-heading">
                                            Peer Networking
                                        </div>
                                        <div class="d-flex gap-3" style="border-radius: 8px;background: rgba(39, 56, 237, 0.60); padding:8px 16px; height: fit-content; width:fit-content;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M9.00343 1.41V1C9.00343 0.447333 8.55456 0 8 0C7.44544 0 6.99657 0.447333 6.99657 1V1.41C3.41299 1.9 0.641525 4.96333 0.641525 8.66667C0.641525 10.3447 1.21616 11.888 2.17075 13.1247C1.68643 13.5267 1.31048 14.1347 1.31048 15C1.31048 15.5527 1.75934 16 2.31391 16C2.86847 16 3.31733 15.5527 3.31733 15C3.31733 14.8993 3.318 14.6513 3.62171 14.5467C4.84723 15.4553 6.35906 16 8 16C9.64094 16 11.1514 15.456 12.3763 14.5487C12.6827 14.6567 12.6827 14.9007 12.6827 15C12.6827 15.5527 13.1315 16 13.6861 16C14.2407 16 14.6895 15.5527 14.6895 15C14.6895 14.1353 14.3136 13.5267 13.8293 13.1247C14.7838 11.8873 15.3585 10.3447 15.3585 8.66667C15.3585 4.96333 12.587 1.9 9.00343 1.41ZM2.64838 8.66667C2.64838 5.726 5.04925 3.33333 8 3.33333C10.9507 3.33333 13.3516 5.726 13.3516 8.66667C13.3516 11.6073 10.9507 14 8 14C5.04925 14 2.64838 11.6073 2.64838 8.66667ZM16 3C16 3.55267 15.5511 4 14.9966 4C14.442 4 13.9931 3.55267 13.9931 3C13.9931 2.69933 13.8982 2 13.0171 2C12.4626 2 12.0137 1.55267 12.0137 1C12.0137 0.447333 12.4626 0 13.0171 0C14.745 0 16 1.262 16 3ZM1.00343 4C0.448867 4 0 3.55267 0 3C0 1.262 1.25495 0 2.98286 0C3.53742 0 3.98629 0.447333 3.98629 1C3.98629 1.55267 3.53742 2 2.98286 2C2.10185 2 2.00686 2.69933 2.00686 3C2.00686 3.55267 1.55799 4 1.00343 4ZM11.0103 8C11.0304 8.69467 10.7206 9.464 10.0069 10.2287V11.3333C10.0069 11.7013 9.70717 12 9.3379 12C8.96864 12 8.66895 11.7013 8.66895 11.3333V6C8.66895 5.33333 9.17067 5.20933 9.48374 5.43933C10.0296 5.82933 10.9407 6.57533 11.0103 8ZM8 8C8 8.82 7.58659 9.33933 6.99657 9.55333V11.3333C6.99657 11.7013 6.69688 12 6.32762 12C5.95836 12 5.65867 11.7013 5.65867 11.3333V9.55333C5.06865 9.33933 4.65524 8.82 4.65524 8C4.65524 6.89533 5.4038 5.33333 6.32762 5.33333C7.25144 5.33333 8 6.89533 8 8Z" fill="#FFB956" />
                                            </svg>
                                            <p>17:30 - 18:00 IST</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="agenda">
                            <h3>EVENT INCLUSIONS</h3>
                            <div class="row gap-3">
                                <div class="col-md-3 col-sm-12">
                                    <div style="border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.20); background: rgba(255, 204, 0, 0.15);color: var(--infosectrain-WHITE, #FFF);
text-align: center;
font-family: Lato;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: normal;
padding:12px 16px;">Curated Lunch Buffet</div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div style="border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.20); background: rgba(255, 204, 0, 0.15);color: var(--infosectrain-WHITE, #FFF);
text-align: center;
font-family: Lato;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: normal;
padding:12px 16px;">Morning & Evening Hi-Tea</div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div style="border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.20); background: rgba(255, 204, 0, 0.15);color: var(--infosectrain-WHITE, #FFF);
text-align: center;
font-family: Lato;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: normal;
padding:12px 16px;">Event Goodie Kit</div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 mt-5 text-md-start text-center rounded-4 d-flex align-items-center justify-content-between flex-column flex-md-row gap-3"
                            style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.15);
background: linear-gradient(271deg, rgba(13, 18, 176, 0.60) 0%, rgba(229, 9, 20, 0.60) 50%, rgba(13, 18, 176, 0.60) 100%);">
                            <div>
                                <div class="text-white d-flex gap-2 enquiry align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                                        <g clip-path="url(#clip0_34092_3581)">
                                            <path d="M38.668 17.398C35.6687 14.1354 33.08 11.2145 33.08 6.80195C33.08 4.29213 33.5799 1.85819 33.5844 1.83442C33.6781 1.38511 33.5651 0.918023 33.2749 0.562453C32.9864 0.206781 32.552 0 32.0938 0C29.5155 0 22.1557 1.90877 22.1557 10.3888C22.1557 15.8086 21.0577 17.5795 20.5846 18.0465C20.3183 18.3113 19.9627 18.4601 19.6741 18.4169C18.2712 18.4006 18.0063 16.3921 17.9974 16.3162C17.9408 15.7985 17.6225 15.3448 17.1538 15.1156C16.6852 14.8836 16.1361 14.9089 15.6884 15.1826C9.74502 18.8143 6.19531 25.1356 6.19531 32.0938C6.19531 43.0137 15.08 52 26 52C36.92 52 45.8047 43.0137 45.8047 32.0938C45.8047 25.1684 42.0124 21.0399 38.668 17.398Z" fill="#FFB956" />
                                            <path d="M24.4766 29.0469C24.4766 26.5267 22.4264 24.4766 19.9062 24.4766C17.3861 24.4766 15.3359 26.5267 15.3359 29.0469C15.3359 31.567 17.3861 33.6172 19.9062 33.6172C22.4264 33.6172 24.4766 31.567 24.4766 29.0469ZM18.3828 29.0469C18.3828 28.2063 19.0657 27.5234 19.9062 27.5234C20.7468 27.5234 21.4297 28.2063 21.4297 29.0469C21.4297 29.8874 20.7468 30.5703 19.9062 30.5703C19.0657 30.5703 18.3828 29.8874 18.3828 29.0469ZM32.0938 33.6172C29.5736 33.6172 27.5234 35.6673 27.5234 38.1875C27.5234 40.7077 29.5736 42.7578 32.0938 42.7578C34.6139 42.7578 36.6641 40.7077 36.6641 38.1875C36.6641 35.6673 34.614 33.6172 32.0938 33.6172ZM32.0938 39.7109C31.2532 39.7109 30.5703 39.028 30.5703 38.1875C30.5703 37.347 31.2532 36.6641 32.0938 36.6641C32.9343 36.6641 33.6172 37.347 33.6172 38.1875C33.6172 39.028 32.9343 39.7109 32.0938 39.7109ZM33.0459 24.8098C32.3883 24.2861 31.4317 24.3962 30.9035 25.0479L18.716 40.2822C18.1909 40.9398 18.298 41.8979 18.9541 42.4246C19.609 42.9477 20.5661 42.8449 21.0965 42.1865L33.284 26.9521C33.8091 26.2945 33.702 25.3365 33.0459 24.8098Z" fill="url(#paint0_linear_34092_3581)" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_34092_3581" x1="15.3359" y1="42.7578" x2="36.6641" y2="42.7578" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FF8A00" />
                                                <stop offset="1" stop-color="#E50914" />
                                            </linearGradient>
                                            <clipPath id="clip0_34092_3581">
                                                <rect width="52" height="52" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p>Bring your team along <br>
                                        <span>Avail exclusive discounts on group registrations (3+).</span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="fs-16 button modal-btn" modal-title="Enquire Now">Enquire Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" id="form-pay">
                        <div class="mb-4">
                            <img class="w-100" src="assets/images/inr-offer.png" alt="">
                        </div>
                        <div style="position: sticky;
        top: 10px;">
                            <div class="d-flex flex-column gap-3 rounded-4"
                                style="overflow: hidden;box-shadow: var(--box-shadow);border-radius: 16px;
border: 1px solid rgba(13, 18, 176, 0.70);
background: rgba(13, 18, 176, 0.60);">
                                <div class="fs-28 text-center f-general-sans p-3">
                                    <span style="color: var(--infosectrain-WHITE, #FFF); text-align: center; font-family: Lato; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal;">Wish to join the</span>
                                    <div style="color: #FFF; text-align: center; font-family: Sora; font-size: 18px; font-style: normal; font-weight: 600; line-height: normal;">Secure Intelligence Summit in Delhi?
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-3 px-3 timers">
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-white rounded"
                                        id="timer1"
                                        style="border-radius: 8px; background: rgba(255, 255, 255, 0.15);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Days</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark rounded"
                                        id="timer2" style="border-radius: 8px; background: rgba(255, 255, 255, 0.15);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Hours</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark rounded"
                                        id="timer3" style="border-radius: 8px; background: rgba(255, 255, 255, 0.15);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Minutes</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark rounded"
                                        id="timer4" style="border-radius: 8px;background: rgba(255, 255, 255, 0.15);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Seconds</span>
                                    </div>
                                </div>
                                <div class="px-3" style="color: var(--infosectrain-WHITE, #FFF); font-family: Lato; font-size: 16px; font-style: normal; font-weight: 600; line-height: normal;">Complete the Form</div>
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

                                        <div style="border: 1px solid white;border-radius: 8px;background-color: white;">
                                            <select class="me_phone form-control" name="me_phone_code" id="me_phone_code"
                                                style=" width:23%; padding:9px;border: none; border-radius: 0px;outline: none;" fdprocessedid="f45io8">
                                                <option selected="selected" value="">Country Code
                                                </option>
                                                <option value="93">AF [+93]</option>
                                                <option value="358">AX [+358]</option>
                                                <option value="355">AL [+355]</option>
                                                <option value="213">DZ [+213]</option>
                                                <option value="1+684">AS [+1+684]</option>
                                                <option value="376">AD [+376]</option>
                                                <option value="244">AO [+244]</option>
                                                <option value="1+264">AI [+1+264]</option>
                                                <option value="672">AQ [+672]</option>
                                                <option value="1+268">AG [+1+268]</option>
                                                <option value="54">AR [+54]</option>
                                                <option value="374">AM [+374]</option>
                                                <option value="297">AW [+297]</option>
                                                <option value="61">AU [+61]</option>
                                                <option value="43">AT [+43]</option>
                                                <option value="994">AZ [+994]</option>
                                                <option value="1+242">BS [+1+242]</option>
                                                <option value="973">BH [+973]</option>
                                                <option value="880">BD [+880]</option>
                                                <option value="1+246">BB [+1+246]</option>
                                                <option value="375">BY [+375]</option>
                                                <option value="32">BE [+32]</option>
                                                <option value="501">BZ [+501]</option>
                                                <option value="229">BJ [+229]</option>
                                                <option value="1+441">BM [+1+441]</option>
                                                <option value="975">BT [+975]</option>
                                                <option value="591">BO [+591]</option>
                                                <option value="599">BQ [+599]</option>
                                                <option value="387">BA [+387]</option>
                                                <option value="267">BW [+267]</option>
                                                <option value="55">BR [+55]</option>
                                                <option value="246">IO [+246]</option>
                                                <option value="673">BN [+673]</option>
                                                <option value="359">BG [+359]</option>
                                                <option value="226">BF [+226]</option>
                                                <option value="257">BI [+257]</option>
                                                <option value="855">KH [+855]</option>
                                                <option value="237">CM [+237]</option>
                                                <option value="1">CA [+1]</option>
                                                <option value="238">CV [+238]</option>
                                                <option value="236">CF [+236]</option>
                                                <option value="235">TD [+235]</option>
                                                <option value="56">CL [+56]</option>
                                                <option value="86">CN [+86]</option>
                                                <option value="61">CX [+61]</option>
                                                <option value="61">CC [+61]</option>
                                                <option value="57">CO [+57]</option>
                                                <option value="269">KM [+269]</option>
                                                <option value="242">CG [+242]</option>
                                                <option value="682">CK [+682]</option>
                                                <option value="506">CR [+506]</option>
                                                <option value="225">CI [+225]</option>
                                                <option value="385">HR [+385]</option>
                                                <option value="53">CU [+53]</option>
                                                <option value="599">CW [+599]</option>
                                                <option value="357">CY [+357]</option>
                                                <option value="420">CZ [+420]</option>
                                                <option value="243">CD [+243]</option>
                                                <option value="45">DK [+45]</option>
                                                <option value="253">DJ [+253]</option>
                                                <option value="593">EC [+593]</option>
                                                <option value="20">EG [+20]</option>
                                                <option value="503">SV [+503]</option>
                                                <option value="240">GQ [+240]</option>
                                                <option value="291">ER [+291]</option>
                                                <option value="372">EE [+372]</option>
                                                <option value="251">ET [+251]</option>
                                                <option value="500">FK [+500]</option>
                                                <option value="298">FO [+298]</option>
                                                <option value="679">FJ [+679]</option>
                                                <option value="358">FI [+358]</option>
                                                <option value="33">FR [+33]</option>
                                                <option value="594">GF [+594]</option>
                                                <option value="689">PF [+689]</option>
                                                <option value="">TF [+]</option>
                                                <option value="241">GA [+241]</option>
                                                <option value="220">GM [+220]</option>
                                                <option value="995">GE [+995]</option>
                                                <option value="49">DE [+49]</option>
                                                <option value="233">GH [+233]</option>
                                                <option value="350">GI [+350]</option>
                                                <option value="30">GR [+30]</option>
                                                <option value="299">GL [+299]</option>
                                                <option value="1+473">GD [+1+473]</option>
                                                <option value="590">GP [+590]</option>
                                                <option value="1+671">GU [+1+671]</option>
                                                <option value="502">GT [+502]</option>
                                                <option value="44">GG [+44]</option>
                                                <option value="224">GN [+224]</option>
                                                <option value="245">GW [+245]</option>
                                                <option value="592">GY [+592]</option>
                                                <option value="509">HT [+509]</option>
                                                <option value="504">HN [+504]</option>
                                                <option value="852">HK [+852]</option>
                                                <option value="36">HU [+36]</option>
                                                <option value="354">IS [+354]</option>
                                                <option value="91" selected="">IN [+91]</option>
                                                <option value="62">ID [+62]</option>
                                                <option value="98">IR [+98]</option>
                                                <option value="964">IQ [+964]</option>
                                                <option value="353">IE [+353]</option>
                                                <option value="44">IM [+44]</option>
                                                <option value="972">IL [+972]</option>
                                                <option value="39">IT [+39]</option>
                                                <option value="1+876">JM [+1+876]</option>
                                                <option value="81">JP [+81]</option>
                                                <option value="44">JE [+44]</option>
                                                <option value="962">JO [+962]</option>
                                                <option value="7">KZ [+7]</option>
                                                <option value="254">KE [+254]</option>
                                                <option value="686">KI [+686]</option>
                                                <option value="381">XK [+381]</option>
                                                <option value="965">KW [+965]</option>
                                                <option value="996">KG [+996]</option>
                                                <option value="856">LA [+856]</option>
                                                <option value="371">LV [+371]</option>
                                                <option value="961">LB [+961]</option>
                                                <option value="266">LS [+266]</option>
                                                <option value="231">LR [+231]</option>
                                                <option value="218">LY [+218]</option>
                                                <option value="423">LI [+423]</option>
                                                <option value="370">LT [+370]</option>
                                                <option value="352">LU [+352]</option>
                                                <option value="853">MO [+853]</option>
                                                <option value="389">MK [+389]</option>
                                                <option value="261">MG [+261]</option>
                                                <option value="265">MW [+265]</option>
                                                <option value="60">MY [+60]</option>
                                                <option value="960">MV [+960]</option>
                                                <option value="223">ML [+223]</option>
                                                <option value="356">MT [+356]</option>
                                                <option value="692">MH [+692]</option>
                                                <option value="596">MQ [+596]</option>
                                                <option value="222">MR [+222]</option>
                                                <option value="230">MU [+230]</option>
                                                <option value="262">YT [+262]</option>
                                                <option value="52">MX [+52]</option>
                                                <option value="691">FM [+691]</option>
                                                <option value="373">MD [+373]</option>
                                                <option value="377">MC [+377]</option>
                                                <option value="976">MN [+976]</option>
                                                <option value="382">ME [+382]</option>
                                                <option value="1+664">MS [+1+664]</option>
                                                <option value="212">MA [+212]</option>
                                                <option value="258">MZ [+258]</option>
                                                <option value="95">MM [+95]</option>
                                                <option value="264">NA [+264]</option>
                                                <option value="674">NR [+674]</option>
                                                <option value="977">NP [+977]</option>
                                                <option value="31">NL [+31]</option>
                                                <option value="687">NC [+687]</option>
                                                <option value="64">NZ [+64]</option>
                                                <option value="505">NI [+505]</option>
                                                <option value="227">NE [+227]</option>
                                                <option value="234">NG [+234]</option>
                                                <option value="683">NU [+683]</option>
                                                <option value="672">NF [+672]</option>
                                                <option value="850">KP [+850]</option>
                                                <option value="1+670">MP [+1+670]</option>
                                                <option value="47">NO [+47]</option>
                                                <option value="968">OM [+968]</option>
                                                <option value="92">PK [+92]</option>
                                                <option value="680">PW [+680]</option>
                                                <option value="970">PS [+970]</option>
                                                <option value="507">PA [+507]</option>
                                                <option value="675">PG [+675]</option>
                                                <option value="595">PY [+595]</option>
                                                <option value="51">PE [+51]</option>
                                                <option value="63">PH [+63]</option>
                                                <option value="48">PL [+48]</option>
                                                <option value="351">PT [+351]</option>
                                                <option value="1+939">PR [+1+939]</option>
                                                <option value="974">QA [+974]</option>
                                                <option value="262">RE [+262]</option>
                                                <option value="40">RO [+40]</option>
                                                <option value="7">RU [+7]</option>
                                                <option value="250">RW [+250]</option>
                                                <option value="590">BL [+590]</option>
                                                <option value="290">SH [+290]</option>
                                                <option value="1+869">KN [+1+869]</option>
                                                <option value="1+758">LC [+1+758]</option>
                                                <option value="590">MF [+590]</option>
                                                <option value="508">PM [+508]</option>
                                                <option value="1+784">VC [+1+784]</option>
                                                <option value="685">WS [+685]</option>
                                                <option value="378">SM [+378]</option>
                                                <option value="239">ST [+239]</option>
                                                <option value="966">SA [+966]</option>
                                                <option value="221">SN [+221]</option>
                                                <option value="381">RS [+381]</option>
                                                <option value="248">SC [+248]</option>
                                                <option value="232">SL [+232]</option>
                                                <option value="65">SG [+65]</option>
                                                <option value="1+721">SX [+1+721]</option>
                                                <option value="421">SK [+421]</option>
                                                <option value="386">SI [+386]</option>
                                                <option value="677">SB [+677]</option>
                                                <option value="252">SO [+252]</option>
                                                <option value="27">ZA [+27]</option>
                                                <option value="500">GS [+500]</option>
                                                <option value="82">KR [+82]</option>
                                                <option value="211">SS [+211]</option>
                                                <option value="34">ES [+34]</option>
                                                <option value="94">LK [+94]</option>
                                                <option value="249">SD [+249]</option>
                                                <option value="597">SR [+597]</option>
                                                <option value="47">SJ [+47]</option>
                                                <option value="268">SZ [+268]</option>
                                                <option value="46">SE [+46]</option>
                                                <option value="41">CH [+41]</option>
                                                <option value="963">SY [+963]</option>
                                                <option value="886">TW [+886]</option>
                                                <option value="992">TJ [+992]</option>
                                                <option value="255">TZ [+255]</option>
                                                <option value="66">TH [+66]</option>
                                                <option value="670">TL [+670]</option>
                                                <option value="228">TG [+228]</option>
                                                <option value="690">TK [+690]</option>
                                                <option value="676">TO [+676]</option>
                                                <option value="1+868">TT [+1+868]</option>
                                                <option value="216">TN [+216]</option>
                                                <option value="90">TR [+90]</option>
                                                <option value="993">TM [+993]</option>
                                                <option value="1+649">TC [+1+649]</option>
                                                <option value="688">TV [+688]</option>
                                                <option value="256">UG [+256]</option>
                                                <option value="380">UA [+380]</option>
                                                <option value="971">AE [+971]</option>
                                                <option value="44">GB [+44]</option>
                                                <option value="1">US [+1]</option>
                                                <option value="598">UY [+598]</option>
                                                <option value="998">UZ [+998]</option>
                                                <option value="678">VU [+678]</option>
                                                <option value="39">VA [+39]</option>
                                                <option value="58">VE [+58]</option>
                                                <option value="84">VN [+84]</option>
                                                <option value="1+284">VG [+1+284]</option>
                                                <option value="1+340">VI [+1+340]</option>
                                                <option value="681">WF [+681]</option>
                                                <option value="212">EH [+212]</option>
                                                <option value="967">YE [+967]</option>
                                                <option value="260">ZM [+260]</option>
                                                <option value="263">ZW [+263]</option>
                                            </select>
                                            <input type="tel" name="me_phone" class="me_phone form-control"
                                                placeholder="Enter Mobile Number" id="me_phone" required style="width:68%;border-radius: 0px;border: none;outline: none;">
                                            <div class="error-message mobile_error"></div>
                                        </div>

                                        <div class="coupon-wrapper">
                                            <div class="coupon-left">
                                                <span class="coupon-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M14.8156 16.8734C15.204 16.8734 15.5189 16.5585 15.5189 16.1701C15.5189 15.7817 15.204 15.4668 14.8156 15.4668C14.4272 15.4668 14.1123 15.7817 14.1123 16.1701C14.1123 16.5585 14.4272 16.8734 14.8156 16.8734Z" fill="url(#paint0_linear_34648_1247)" />
                                                        <path d="M9.18961 8.4339C9.57802 8.4339 9.89288 8.11903 9.89288 7.73062C9.89288 7.34221 9.57802 7.02734 9.18961 7.02734C8.8012 7.02734 8.48633 7.34221 8.48633 7.73062C8.48633 8.11903 8.8012 8.4339 9.18961 8.4339Z" fill="url(#paint1_linear_34648_1247)" />
                                                        <path d="M22.9075 10.3641C22.1095 9.84209 21.81 8.72331 22.2393 7.87099C22.615 7.1272 22.6548 6.48848 22.3567 5.9727C22.0587 5.45692 21.4859 5.1719 20.6535 5.1245C19.7009 5.07091 18.8822 4.25225 18.8287 3.29898C18.7813 2.46728 18.4962 1.89449 17.9805 1.59644C17.4647 1.30045 16.826 1.3389 16.0822 1.71389C15.2298 2.1397 14.1104 1.84371 13.5884 1.04563C12.675 -0.348544 11.3303 -0.348544 10.4169 1.04563C9.89422 1.84301 8.77611 2.14176 7.92312 1.71389C7.17863 1.3389 6.53992 1.30045 6.02484 1.59644C5.50905 1.89449 5.22404 2.46728 5.17664 3.29968C5.12305 4.25225 4.30439 5.07091 3.35112 5.1245C2.51942 5.1719 1.94662 5.45692 1.64858 5.9727C1.35053 6.48848 1.39033 7.1272 1.76602 7.87099C2.19526 8.72331 1.89585 9.84209 1.09707 10.3647C0.400587 10.8222 0 11.3551 0 11.9506C0 12.546 0.400587 13.0796 1.09768 13.5364C1.89571 14.059 2.19516 15.1778 1.76593 16.0301C1.39024 16.7739 1.35043 17.4126 1.64848 17.9284C1.94653 18.4442 2.51933 18.7292 3.35173 18.7766C4.30429 18.8302 5.12295 19.6488 5.17654 20.6021C5.22394 21.4338 5.50896 22.0066 6.02474 22.3046C6.54123 22.602 7.17854 22.5622 7.92303 22.1872C8.77536 21.7586 9.89343 22.0567 10.4168 22.8561C10.8742 23.5526 11.4071 24 12.0026 24C12.598 24 13.1309 23.5525 13.5891 22.8554C14.1103 22.056 15.2271 21.7552 16.0821 22.1872C16.8259 22.5622 17.4667 22.602 17.9804 22.3046C18.4962 22.0066 18.7812 21.4338 18.8286 20.6014C18.8822 19.6488 19.7009 18.8302 20.6541 18.7766C21.4858 18.7292 22.0586 18.4442 22.3567 17.9284C22.6547 17.4126 22.6149 16.7739 22.2392 16.0301C21.81 15.1778 22.1094 14.059 22.9075 13.5364C23.6046 13.0796 24.0052 12.546 24.0052 11.9506C24.0052 11.3551 23.6046 10.8222 22.9075 10.3641ZM9.18949 5.62106C10.3529 5.62106 11.2993 6.56749 11.2993 7.7309C11.2993 8.8943 10.3529 9.84073 9.18949 9.84073C8.02608 9.84073 7.07966 8.8943 7.07966 7.7309C7.07966 6.56749 8.02608 5.62106 9.18949 5.62106ZM8.34542 17.9985L7.22046 17.1551L15.6598 5.90265L16.7847 6.74603L8.34542 17.9985ZM14.8157 18.2801C13.6523 18.2801 12.7059 17.3336 12.7059 16.1702C12.7059 15.0068 13.6523 14.0604 14.8157 14.0604C15.9791 14.0604 16.9255 15.0068 16.9255 16.1702C16.9255 17.3336 15.9791 18.2801 14.8157 18.2801Z" fill="url(#paint2_linear_34648_1247)" />
                                                        <defs>
                                                            <linearGradient id="paint0_linear_34648_1247" x1="14.1123" y1="16.8734" x2="15.5189" y2="16.8734" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#FFCC00" />
                                                                <stop offset="1" stop-color="#FF8A00" />
                                                            </linearGradient>
                                                            <linearGradient id="paint1_linear_34648_1247" x1="8.48633" y1="8.4339" x2="9.89288" y2="8.4339" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#FFCC00" />
                                                                <stop offset="1" stop-color="#FF8A00" />
                                                            </linearGradient>
                                                            <linearGradient id="paint2_linear_34648_1247" x1="0" y1="24" x2="24.0052" y2="24" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#FFCC00" />
                                                                <stop offset="1" stop-color="#FF8A00" />
                                                            </linearGradient>
                                                        </defs>
                                                    </svg></span>

                                            </div>
                                            <input type="text" name="" id="" class="coupon-text" placeholder="Enter Coupon Code" maxlength="5">

                                            <button type="button" class="coupon-btn">APPLY NOW</button>
                                        </div>
                                        <p class="coupon-message"></p>

                                        <input type="hidden" name="me_pageurl" value="<?php echo $pag_url; ?>">
                                        <input type="hidden" id="me_others" name="me_others" value="">
                                        <input type="hidden" name="me_submited" value="1">
                                        <button type="submit" class="form-control-btn pay-btn">Pay Now /<span> ₹4999</span></button>

                                        <div class="loader text-center" style="display:none;">
                                            <img src="assets/images/loader.gif" alt="Loading..." loading="lazy">
                                        </div>
                                    </form>
                                    <div class="fs-12 f-general-sans text-white">
                                        Our Advisor will Contact You with Event Details, Payment Options, and
                                        Exclusive Offers!
                                    </div>
                                    <div class="d-flex gap-3 align-items-center pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_34092_3741)">
                                                <path d="M10.692 12.0676C11.9187 12.7289 12.882 13.8209 13.3007 15.1689C13.3317 15.2687 13.3388 15.3744 13.3215 15.4775C13.3042 15.5805 13.2629 15.6781 13.2009 15.7622C13.1389 15.8464 13.0581 15.9148 12.9648 15.9619C12.8715 16.0091 12.7685 16.0336 12.664 16.0336H3.33132C3.22672 16.0339 3.12352 16.0095 3.0301 15.9625C2.93668 15.9154 2.85568 15.847 2.79366 15.7628C2.73164 15.6785 2.69035 15.5809 2.67315 15.4777C2.65594 15.3745 2.66331 15.2687 2.69465 15.1689C3.11465 13.8183 4.08065 12.7249 5.31065 12.0636C5.46321 11.9806 5.63978 11.9528 5.81048 11.985C5.98117 12.0172 6.13549 12.1074 6.24732 12.2403L7.54665 13.7989C7.60233 13.8658 7.67205 13.9196 7.75085 13.9566C7.82966 13.9935 7.91562 14.0127 8.00265 14.0127C8.08968 14.0127 8.17565 13.9935 8.25445 13.9566C8.33325 13.9196 8.40297 13.8658 8.45865 13.7989L9.75465 12.2436C9.8666 12.1106 10.0211 12.0205 10.1919 11.9884C10.3628 11.9563 10.5394 11.9843 10.692 12.0676ZM13.7733 1.76694L9.46398 0.246271C8.53595 -0.0807128 7.52426 -0.0821235 6.59532 0.242271L2.23332 1.76894C1.96984 1.85851 1.7413 2.02888 1.5802 2.2558C1.41911 2.48272 1.33365 2.75466 1.33598 3.03294C1.33598 3.61094 1.68865 4.10694 2.23398 4.29694L6.57198 5.81027C7.49488 6.13119 8.49909 6.13119 9.42198 5.81027L13.3313 4.44694V7.36627C13.3313 7.54308 13.4016 7.71265 13.5266 7.83768C13.6516 7.9627 13.8212 8.03294 13.998 8.03294C14.1748 8.03294 14.3444 7.9627 14.4694 7.83768C14.5944 7.71265 14.6647 7.54308 14.6647 7.36627L14.6673 3.0316C14.6699 2.75366 14.585 2.48193 14.4247 2.25485C14.2644 2.02778 14.0368 1.85686 13.774 1.76627L13.7733 1.76694ZM11.9973 6.32427L9.86065 7.06961C8.65314 7.48762 7.34016 7.48762 6.13265 7.06961L3.99732 6.32427V6.69961C3.99732 8.90561 5.79132 10.6996 7.99732 10.6996C10.2033 10.6996 11.9973 8.90561 11.9973 6.69961V6.32361V6.32427Z" fill="#FFB956" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_34092_3741">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="text-white fs-14 f-general-sans fw-400">
                                            <strong>09</strong> People have registered
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="position: absolute;
    bottom: -7%;
    left: -50%;
    z-index: 0;" class="ellipse-img">
                <img src="assets/images/Ellipse.webp" alt="">
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
                            <li><a href="#masterclass-agenda">Secure Intelligence Summit 2026 Agenda</a></li>
                            <li><a href="#experts">Speaker</a></li>
                            <li><a href="#key-takeaways">Key Takeaways</a></li>
                            <li><a href="https://www.infosectrain.com/fastrack-bootcamp" target="_blank">Fastrack Bootcamp</a>
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
                            All rights reserved. © 2026, InfosecTrain
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
            <p style="color: white;margin-bottom: 16px;padding-left: 17px;">Avail exclusive discounts on group registrations (3+).</p>
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
                    <div style="border: 1px solid white;border-radius: 8px;background-color: white;">
                        <select class="me_phone form-control" name="me_phone_code" id="me_phone_code"
                            style=" width:23%; padding:9px;border: none; border-radius: 0px;outline: none;" fdprocessedid="f45io8">
                            <option selected="selected" value="">Country Code
                            </option>
                            <option value="93">AF [+93]</option>
                            <option value="358">AX [+358]</option>
                            <option value="355">AL [+355]</option>
                            <option value="213">DZ [+213]</option>
                            <option value="1+684">AS [+1+684]</option>
                            <option value="376">AD [+376]</option>
                            <option value="244">AO [+244]</option>
                            <option value="1+264">AI [+1+264]</option>
                            <option value="672">AQ [+672]</option>
                            <option value="1+268">AG [+1+268]</option>
                            <option value="54">AR [+54]</option>
                            <option value="374">AM [+374]</option>
                            <option value="297">AW [+297]</option>
                            <option value="61">AU [+61]</option>
                            <option value="43">AT [+43]</option>
                            <option value="994">AZ [+994]</option>
                            <option value="1+242">BS [+1+242]</option>
                            <option value="973">BH [+973]</option>
                            <option value="880">BD [+880]</option>
                            <option value="1+246">BB [+1+246]</option>
                            <option value="375">BY [+375]</option>
                            <option value="32">BE [+32]</option>
                            <option value="501">BZ [+501]</option>
                            <option value="229">BJ [+229]</option>
                            <option value="1+441">BM [+1+441]</option>
                            <option value="975">BT [+975]</option>
                            <option value="591">BO [+591]</option>
                            <option value="599">BQ [+599]</option>
                            <option value="387">BA [+387]</option>
                            <option value="267">BW [+267]</option>
                            <option value="55">BR [+55]</option>
                            <option value="246">IO [+246]</option>
                            <option value="673">BN [+673]</option>
                            <option value="359">BG [+359]</option>
                            <option value="226">BF [+226]</option>
                            <option value="257">BI [+257]</option>
                            <option value="855">KH [+855]</option>
                            <option value="237">CM [+237]</option>
                            <option value="1">CA [+1]</option>
                            <option value="238">CV [+238]</option>
                            <option value="236">CF [+236]</option>
                            <option value="235">TD [+235]</option>
                            <option value="56">CL [+56]</option>
                            <option value="86">CN [+86]</option>
                            <option value="61">CX [+61]</option>
                            <option value="61">CC [+61]</option>
                            <option value="57">CO [+57]</option>
                            <option value="269">KM [+269]</option>
                            <option value="242">CG [+242]</option>
                            <option value="682">CK [+682]</option>
                            <option value="506">CR [+506]</option>
                            <option value="225">CI [+225]</option>
                            <option value="385">HR [+385]</option>
                            <option value="53">CU [+53]</option>
                            <option value="599">CW [+599]</option>
                            <option value="357">CY [+357]</option>
                            <option value="420">CZ [+420]</option>
                            <option value="243">CD [+243]</option>
                            <option value="45">DK [+45]</option>
                            <option value="253">DJ [+253]</option>
                            <option value="593">EC [+593]</option>
                            <option value="20">EG [+20]</option>
                            <option value="503">SV [+503]</option>
                            <option value="240">GQ [+240]</option>
                            <option value="291">ER [+291]</option>
                            <option value="372">EE [+372]</option>
                            <option value="251">ET [+251]</option>
                            <option value="500">FK [+500]</option>
                            <option value="298">FO [+298]</option>
                            <option value="679">FJ [+679]</option>
                            <option value="358">FI [+358]</option>
                            <option value="33">FR [+33]</option>
                            <option value="594">GF [+594]</option>
                            <option value="689">PF [+689]</option>
                            <option value="">TF [+]</option>
                            <option value="241">GA [+241]</option>
                            <option value="220">GM [+220]</option>
                            <option value="995">GE [+995]</option>
                            <option value="49">DE [+49]</option>
                            <option value="233">GH [+233]</option>
                            <option value="350">GI [+350]</option>
                            <option value="30">GR [+30]</option>
                            <option value="299">GL [+299]</option>
                            <option value="1+473">GD [+1+473]</option>
                            <option value="590">GP [+590]</option>
                            <option value="1+671">GU [+1+671]</option>
                            <option value="502">GT [+502]</option>
                            <option value="44">GG [+44]</option>
                            <option value="224">GN [+224]</option>
                            <option value="245">GW [+245]</option>
                            <option value="592">GY [+592]</option>
                            <option value="509">HT [+509]</option>
                            <option value="504">HN [+504]</option>
                            <option value="852">HK [+852]</option>
                            <option value="36">HU [+36]</option>
                            <option value="354">IS [+354]</option>
                            <option value="91" selected="">IN [+91]</option>
                            <option value="62">ID [+62]</option>
                            <option value="98">IR [+98]</option>
                            <option value="964">IQ [+964]</option>
                            <option value="353">IE [+353]</option>
                            <option value="44">IM [+44]</option>
                            <option value="972">IL [+972]</option>
                            <option value="39">IT [+39]</option>
                            <option value="1+876">JM [+1+876]</option>
                            <option value="81">JP [+81]</option>
                            <option value="44">JE [+44]</option>
                            <option value="962">JO [+962]</option>
                            <option value="7">KZ [+7]</option>
                            <option value="254">KE [+254]</option>
                            <option value="686">KI [+686]</option>
                            <option value="381">XK [+381]</option>
                            <option value="965">KW [+965]</option>
                            <option value="996">KG [+996]</option>
                            <option value="856">LA [+856]</option>
                            <option value="371">LV [+371]</option>
                            <option value="961">LB [+961]</option>
                            <option value="266">LS [+266]</option>
                            <option value="231">LR [+231]</option>
                            <option value="218">LY [+218]</option>
                            <option value="423">LI [+423]</option>
                            <option value="370">LT [+370]</option>
                            <option value="352">LU [+352]</option>
                            <option value="853">MO [+853]</option>
                            <option value="389">MK [+389]</option>
                            <option value="261">MG [+261]</option>
                            <option value="265">MW [+265]</option>
                            <option value="60">MY [+60]</option>
                            <option value="960">MV [+960]</option>
                            <option value="223">ML [+223]</option>
                            <option value="356">MT [+356]</option>
                            <option value="692">MH [+692]</option>
                            <option value="596">MQ [+596]</option>
                            <option value="222">MR [+222]</option>
                            <option value="230">MU [+230]</option>
                            <option value="262">YT [+262]</option>
                            <option value="52">MX [+52]</option>
                            <option value="691">FM [+691]</option>
                            <option value="373">MD [+373]</option>
                            <option value="377">MC [+377]</option>
                            <option value="976">MN [+976]</option>
                            <option value="382">ME [+382]</option>
                            <option value="1+664">MS [+1+664]</option>
                            <option value="212">MA [+212]</option>
                            <option value="258">MZ [+258]</option>
                            <option value="95">MM [+95]</option>
                            <option value="264">NA [+264]</option>
                            <option value="674">NR [+674]</option>
                            <option value="977">NP [+977]</option>
                            <option value="31">NL [+31]</option>
                            <option value="687">NC [+687]</option>
                            <option value="64">NZ [+64]</option>
                            <option value="505">NI [+505]</option>
                            <option value="227">NE [+227]</option>
                            <option value="234">NG [+234]</option>
                            <option value="683">NU [+683]</option>
                            <option value="672">NF [+672]</option>
                            <option value="850">KP [+850]</option>
                            <option value="1+670">MP [+1+670]</option>
                            <option value="47">NO [+47]</option>
                            <option value="968">OM [+968]</option>
                            <option value="92">PK [+92]</option>
                            <option value="680">PW [+680]</option>
                            <option value="970">PS [+970]</option>
                            <option value="507">PA [+507]</option>
                            <option value="675">PG [+675]</option>
                            <option value="595">PY [+595]</option>
                            <option value="51">PE [+51]</option>
                            <option value="63">PH [+63]</option>
                            <option value="48">PL [+48]</option>
                            <option value="351">PT [+351]</option>
                            <option value="1+939">PR [+1+939]</option>
                            <option value="974">QA [+974]</option>
                            <option value="262">RE [+262]</option>
                            <option value="40">RO [+40]</option>
                            <option value="7">RU [+7]</option>
                            <option value="250">RW [+250]</option>
                            <option value="590">BL [+590]</option>
                            <option value="290">SH [+290]</option>
                            <option value="1+869">KN [+1+869]</option>
                            <option value="1+758">LC [+1+758]</option>
                            <option value="590">MF [+590]</option>
                            <option value="508">PM [+508]</option>
                            <option value="1+784">VC [+1+784]</option>
                            <option value="685">WS [+685]</option>
                            <option value="378">SM [+378]</option>
                            <option value="239">ST [+239]</option>
                            <option value="966">SA [+966]</option>
                            <option value="221">SN [+221]</option>
                            <option value="381">RS [+381]</option>
                            <option value="248">SC [+248]</option>
                            <option value="232">SL [+232]</option>
                            <option value="65">SG [+65]</option>
                            <option value="1+721">SX [+1+721]</option>
                            <option value="421">SK [+421]</option>
                            <option value="386">SI [+386]</option>
                            <option value="677">SB [+677]</option>
                            <option value="252">SO [+252]</option>
                            <option value="27">ZA [+27]</option>
                            <option value="500">GS [+500]</option>
                            <option value="82">KR [+82]</option>
                            <option value="211">SS [+211]</option>
                            <option value="34">ES [+34]</option>
                            <option value="94">LK [+94]</option>
                            <option value="249">SD [+249]</option>
                            <option value="597">SR [+597]</option>
                            <option value="47">SJ [+47]</option>
                            <option value="268">SZ [+268]</option>
                            <option value="46">SE [+46]</option>
                            <option value="41">CH [+41]</option>
                            <option value="963">SY [+963]</option>
                            <option value="886">TW [+886]</option>
                            <option value="992">TJ [+992]</option>
                            <option value="255">TZ [+255]</option>
                            <option value="66">TH [+66]</option>
                            <option value="670">TL [+670]</option>
                            <option value="228">TG [+228]</option>
                            <option value="690">TK [+690]</option>
                            <option value="676">TO [+676]</option>
                            <option value="1+868">TT [+1+868]</option>
                            <option value="216">TN [+216]</option>
                            <option value="90">TR [+90]</option>
                            <option value="993">TM [+993]</option>
                            <option value="1+649">TC [+1+649]</option>
                            <option value="688">TV [+688]</option>
                            <option value="256">UG [+256]</option>
                            <option value="380">UA [+380]</option>
                            <option value="971">AE [+971]</option>
                            <option value="44">GB [+44]</option>
                            <option value="1">US [+1]</option>
                            <option value="598">UY [+598]</option>
                            <option value="998">UZ [+998]</option>
                            <option value="678">VU [+678]</option>
                            <option value="39">VA [+39]</option>
                            <option value="58">VE [+58]</option>
                            <option value="84">VN [+84]</option>
                            <option value="1+284">VG [+1+284]</option>
                            <option value="1+340">VI [+1+340]</option>
                            <option value="681">WF [+681]</option>
                            <option value="212">EH [+212]</option>
                            <option value="967">YE [+967]</option>
                            <option value="260">ZM [+260]</option>
                            <option value="263">ZW [+263]</option>
                        </select>
                        <input type="tel" name="me_phone" class="me_phone form-control"
                            placeholder="Enter Mobile Number" id="me_phone" required style="width:68%;border-radius: 0px;border: none;outline: none;">
                        <div class="error-message mobile_error"></div>
                    </div>
                    <!-- <input type="text" name="me_phone" class="me_phone form-control" placeholder="Mobile" required> -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 24, // Call a function to dynamically determine margin
                dots: false,
                stagePadding: 24,
                lazyLoad: true,
                nav: false,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1,
                        margin: 16 // Adjust margin for mobile view
                    },
                    768: {
                        items: 1.2,
                        margin: 24 // Adjust margin for tablet view
                    },
                    992: {
                        items: 3,
                        margin: 24 // Adjust margin for desktop view
                    },
                    1400: {
                        items: 3.7,
                        margin: 24 // Adjust margin for desktop view
                    }
                }
            });
        });
    </script>
    <!--/ js link start /-->
    <script src="assets/js/custom.js" defer></script>
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
            let fullText1 = "Secure Intelligence Summit 2026";
            let fixedChar1 = fullText1.charAt(0); // "A"
            let rest1 = fullText1.substring(1);
            let i1 = 0;
            let isDeleting1 = false;

            function typeOne() {
                let display = fixedChar1 + rest1.substring(0, i1);
                $('#typing-one').text(display);

                if (!isDeleting1) {
                    i1++;
                    if (i1 > rest1.length) {
                        isDeleting1 = true;
                        setTimeout(typeOne, 1500); // Pause at full text
                        return;
                    }
                } else {
                    i1--;
                    if (i1 < 0) {
                        isDeleting1 = false;
                        i1 = 0;
                        setTimeout(typeOne, 500); // Pause before restart
                        return;
                    }
                }

                setTimeout(typeOne, 100); // Typing/deleting speed
            }

            typeOne();


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
            const targetDate = new Date("April 11, 2026 09:00:00").getTime(); // Target date

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

    <script>
        const FINAL_DATE = new Date("April 11, 2026 19:00:00").getTime();
        const SIX_HOURS = 6 * 60 * 60 * 1000;

        function getCycleEnd() {
            const now = Date.now();
            const savedEnd = localStorage.getItem("sixHourEnd");

            // If cycle exists and not expired → use it
            if (savedEnd && now < savedEnd) {
                return parseInt(savedEnd);
            }

            // Otherwise start new 6 hour cycle
            const newEnd = now + SIX_HOURS;
            localStorage.setItem("sixHourEnd", newEnd);
            return newEnd;
        }

        let cycleEnd = getCycleEnd();

        function startCountdown() {
            const now = Date.now();

            // STOP when final date reached
            if (now >= FINAL_DATE) {
                document.querySelector(".countdown").innerHTML = "Expired";
                localStorage.removeItem("sixHourEnd");
                return;
            }

            let remaining = cycleEnd - now;

            // restart 6-hour cycle
            if (remaining <= 0) {
                cycleEnd = now + SIX_HOURS;
                localStorage.setItem("sixHourEnd", cycleEnd);
                remaining = SIX_HOURS;
            }

            const hours = Math.floor(remaining / (1000 * 60 * 60));
            const minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((remaining % (1000 * 60)) / 1000);

            document.getElementById("days").innerHTML = "0<span> D</span>";
            document.getElementById("hours").innerHTML = hours + "<span> H</span>";
            document.getElementById("minutes").innerHTML = minutes + "<span> M</span>";
            document.getElementById("seconds").innerHTML = seconds + "<span> S</span>";
        }

        startCountdown();
        setInterval(startCountdown, 1000);
    </script>

    <script>
        const couponBox = document.getElementById("couponBox");
        const couponText = document.getElementById("couponText");

        let copied = false;

        couponText.addEventListener("click", function(e) {
            e.stopPropagation(); // prevent parent click

            if (copied) return;

            navigator.clipboard.writeText(couponText.innerText.replace(/“|”/g, "")).then(() => {
                copied = true;

                couponBox.classList.add("disabled");
                couponBox.innerHTML = "<p>COUPON COPIED</p>";
            });
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const couponInput = document.querySelector(".coupon-text");
            const applyBtn = document.querySelector(".coupon-btn");
            const messageBox = document.querySelector(".coupon-message");

            const payBtn = document.querySelector(".pay-btn");
            const payBtnSpan = document.querySelector(".pay-btn span");

            const originalPrice = 4999;
            const discountPercent = 10;
            const validCoupon = "DEL10";

            let finalPrice = originalPrice;
            let couponApplied = false;

            // ==========================
            // ONLY ALLOW EXACT FORMAT
            // ==========================
            couponInput.addEventListener("input", function() {

                // allow only letters & digits
                this.value = this.value
                    .replace(/[^a-zA-Z0-9]/g, "")
                    .toUpperCase();

                // restrict length to 5
                if (this.value.length > 5) {
                    this.value = this.value.slice(0, 5);
                }
            });

            // ====================
            // APPLY COUPON
            // ====================
            applyBtn.addEventListener("click", function() {

                const enteredCode = couponInput.value;

                if (enteredCode !== validCoupon) {
                    messageBox.textContent = "Invalid coupon code";
                    messageBox.style.color = "#ff3d3d";
                    couponApplied = false;
                    payBtnSpan.textContent = ` ₹${originalPrice}`;
                    return;
                }

                finalPrice =
                    originalPrice - (originalPrice * discountPercent / 100);

                payBtnSpan.textContent = ` ₹${finalPrice}`;

                messageBox.textContent = "Coupon applied successfully!";
                messageBox.style.color = "#00c853";

                couponApplied = true;
            });

            // ====================
            // PAY NOW
            // ====================
            payBtn.addEventListener("click", function() {

                if (!couponApplied) {
                    alert("Please apply valid coupon code DEL10");
                    return;
                }

                window.location.href = "thank-you.php?amount=" + finalPrice;
            });

        });
    </script>

</body>

</html>