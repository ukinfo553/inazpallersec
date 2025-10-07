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
    <title>Decoding India's Privacy Law DPDPA Masterclass</title>
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
                border-radius: 18px;
                cursor: pointer;
            }
        </style>
        <!-- Background Video -->

        <section class="hero-section p-0" style="background-color: #011432; background-image: url(assets/images/dpdpa-banner.webp); background-repeat: no-repeat;
    background-position: right; background-position-y: top;">
            <div class="container">
                <div class="row hero">
                    <div class="col-md-7" style="padding: 72px 0px;">
                        <div class="hero-item d-flex flex-column gap-4 justify-content-left align-items-start">
                            <img src="assets/images/infosec-logo.png" alt="DPDPA 2025" class="img-fluid mb-md-4">
                            <div>
                                <h2 id="typing-one">Decoding India's Privacy Law 2025</h2>
                                <h1 class="typing-three">DPDPA Practical
                                    Implementation Masterclass
                                </h1>

                            </div>
                            <div class="live-badge align-items-center d-flex gap-md-4 gap-2 ">
                                <img src="assets/images/live.gif" width="77" height="24" alt="">
                                <div class="d-flex gap-3 flex-wrap live-date">
                                    <div class="fs-18 f-general-sans text-white d-flex gap-3 align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                            viewBox="0 0 16 17" fill="none">
                                            <path
                                                d="M12.3333 1.83333H12V1.5C12 0.947333 11.552 0.5 11 0.5C10.448 0.5 10 0.947333 10 1.5V1.83333H6V1.5C6 0.947333 5.552 0.5 5 0.5C4.448 0.5 4 0.947333 4 1.5V1.83333H3.66667C1.64533 1.83333 0 3.478 0 5.5V12.8333C0 14.8553 1.64533 16.5 3.66667 16.5H12.3333C14.3547 16.5 16 14.8553 16 12.8333V5.5C16 3.478 14.3547 1.83333 12.3333 1.83333ZM12.3333 14.5H3.66667C2.74733 14.5 2 13.752 2 12.8333V6.5H14V12.8333C14 13.752 13.2527 14.5 12.3333 14.5ZM6.66667 8.83333V10.1667C6.66667 10.7187 6.21867 11.1667 5.66667 11.1667H4.33333C3.78133 11.1667 3.33333 10.7187 3.33333 10.1667V8.83333C3.33333 8.28133 3.78133 7.83333 4.33333 7.83333H5.66667C6.21867 7.83333 6.66667 8.28133 6.66667 8.83333Z"
                                                fill="#FFB956" />
                                        </svg>
                                        <span>25th & 26th October</span>
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

                                    <span>8 Hours</span>
                                </div>

                                <div class="feature-box d-flex align-items-center gap-2">

                                    <span>Hands-on Sessions</span>
                                </div>

                                <div class="feature-box d-flex align-items-center gap-2">

                                    <span>Practical Implementation Focus</span>
                                </div>
                            </div>

                            <div class="d-flex gap-4 align-items-center mt-2">
                                <button class="button modal-btn" modal-title="Join Now">
                                    <span class="btn-text">Register Now!</span>
                                    <span class="price" style="display: flex; gap:16px; align-items: center;">
                                        <span class="old">₹3999/-</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="hero-section p-0">
            <div class="container">
                <div class="row g-4 flex-column-reverse flex-md-row">
                    <div class="col-md-8">
                        <img src="assets/images/infosec-logo.png" alt="logo">
                    </div>
                </div>
            </div>
        </section> -->
        <!--banner sec end-->

        <!-- <section class="p-lg-0 pt-0" style="background: #0A0017;   ">
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

        <section style="background: #011432;padding:0px;">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="item">
                            <div class="fs-28 text-white fw-700" style="color: var(--Soft-Orange, #FFB956);
font-family: Raleway;
font-style: normal;
line-height: normal;">
                                Why Attend?
                            </div>
                            <p class="mt-4 text-white f-Nunito Sans">
                                The <b>Digital Personal Data Protection Act (DPDPA), 2023,</b> and the <b>New
                                    Rules 2025</b> are fundamentally reshaping the data landscape in India.
                                Compliance is not optional—it's
                                mandatory. This intensive <b>2-day professional training program</b> will provide
                                you with
                                a comprehensive understanding of the new framework, ensuring you can practically
                                implement the required changes in your organization. The agenda is designed for
                                maximum participant engagement through a balanced mix of foundational knowledge,
                                hands-on exercises, and interactive segments.
                            </p>

                            <div class="learning-cards mt-4 d-flex flex-wrap gap-4">
                                <div class="learning-card">

                                    <div>
                                        <h3 class="mt-0">Practical Implementation</h3>
                                        <p>The content is broken into foundational theory, hands-on activities, and
                                            topical discussions to support both learning and <b>practical
                                                application.</b>
                                        </p>
                                    </div>

                                    <div>
                                        <h3>Active Learning</h3>
                                        <p>Active segments like case studies, group exercises, role-play, and
                                            simulations ensure participants apply knowledge, not just listen
                                            passively.
                                        </p>
                                    </div>

                                    <div>
                                        <h3>Comprehensive Coverage</h3>
                                        <p>Cover both the <b>DPDPA 2023</b> fundamentals and the anticipated
                                            <b>Draft Rules 2025.</b>
                                        </p>
                                    </div>

                                    <div>
                                        <h3>Expert Practitioners</h3>
                                        <p>Learn from a professional training program designed to simplify complex
                                            legal and technical requirements.
                                        </p>
                                    </div>

                                    <div>
                                        <h3>Professional Development</h3>
                                        <p>Earn <b>8 CPE credits</b> for legal professionals or 8 CPD hours for
                                            privacy professionals, along with a <b>Certificate of Completion.</b>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="fs-28 text-white fw-700 mt-5 mb-4 lineup-heading" style="color: var(--Soft-Orange, #FFB956);
font-family: Raleway;
font-style: normal;
line-height: normal;" id="experts">
                                Expert Speaker
                            </div>

                            <div class="g-3 mb-3">

                                <div class="col instructor-profile"
                                    style="display: flex; gap:24px; align-items:start;">
                                    <img src="assets/images/speakers/kartikeya.png" alt="kartikeya">
                                    <div class="trainer-profile col-md-5">
                                        <div class="trainer-title">
                                            <h3>Kartikeya Raman</h3>
                                            <p>20+ Years of Experience</p>
                                        </div>
                                        <div class="certificates">
                                            <p>Cybersecurity, AI Governance & Data Protection Expert | AIGP | CIPM |
                                                FIP | CIPPE | CDPSE</p>
                                            <p>Kartikeya is a cybersecurity, AI governance, and data protection
                                                leader with 20+ years of global experience. He specializes in GDPR,
                                                ISO frameworks, and AI/ML assurance, driving risk, compliance, and
                                                GRC transformations across industries.</p>
                                        </div>
                                    </div>

                                    <div class="trainer-register col-md-5">
                                        <div class="d-flex gap-4 text-align-center justify-content-center">
                                            <h3>Masterclass</h3>
                                            <img src="assets/images/live.gif" alt="live-gif" width="77" height="24">

                                        </div>
                                        <div class="d-flex gap-3 justify-content-center mt-1 masterclass-dpdpa">
                                            <div
                                                class="fs-18 f-general-sans text-white d-flex gap-2 align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                    viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_28632_71)">
                                                        <path
                                                            d="M12.8333 1.83333H12.5V1.5C12.5 0.947333 12.052 0.5 11.5 0.5C10.948 0.5 10.5 0.947333 10.5 1.5V1.83333H6.5V1.5C6.5 0.947333 6.052 0.5 5.5 0.5C4.948 0.5 4.5 0.947333 4.5 1.5V1.83333H4.16667C2.14533 1.83333 0.5 3.478 0.5 5.5V12.8333C0.5 14.8553 2.14533 16.5 4.16667 16.5H12.8333C14.8547 16.5 16.5 14.8553 16.5 12.8333V5.5C16.5 3.478 14.8547 1.83333 12.8333 1.83333ZM12.8333 14.5H4.16667C3.24733 14.5 2.5 13.752 2.5 12.8333V6.5H14.5V12.8333C14.5 13.752 13.7527 14.5 12.8333 14.5ZM7.16667 8.83333V10.1667C7.16667 10.7187 6.71867 11.1667 6.16667 11.1667H4.83333C4.28133 11.1667 3.83333 10.7187 3.83333 10.1667V8.83333C3.83333 8.28133 4.28133 7.83333 4.83333 7.83333H6.16667C6.71867 7.83333 7.16667 8.28133 7.16667 8.83333Z"
                                                            fill="#080808" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_28632_71">
                                                            <rect width="16" height="16" fill="white"
                                                                transform="translate(0.5 0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <span style="color: var(--BG-DARK, #080808);
font-family:Nunito Sans; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;">25th & 26th
                                                    October</span>
                                            </div>
                                            <div
                                                class="fs-18 f-general-sans text-white d-flex gap-2 align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                    viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_28632_75)">
                                                        <path
                                                            d="M9.49761 1.91V1.5C9.49761 1.23478 9.39225 0.98043 9.20472 0.792893C9.01718 0.605357 8.76283 0.5 8.49761 0.5C8.23239 0.5 7.97804 0.605357 7.7905 0.792893C7.60297 0.98043 7.49761 1.23478 7.49761 1.5V1.91C6.22585 2.08173 5.02168 2.58513 4.00609 3.36964C2.99051 4.15415 2.19928 5.19213 1.7119 6.37928C1.22453 7.56644 1.05818 8.86095 1.22957 10.1328C1.40095 11.4046 1.90404 12.6089 2.68828 13.6247C2.41224 13.8515 2.19156 14.1384 2.04301 14.4633C1.89445 14.7883 1.82192 15.1428 1.83094 15.5C1.83094 15.7652 1.9363 16.0196 2.12384 16.2071C2.31137 16.3946 2.56573 16.5 2.83094 16.5C3.09616 16.5 3.35051 16.3946 3.53805 16.2071C3.72559 16.0196 3.83094 15.7652 3.83094 15.5C3.82076 15.4009 3.84549 15.3014 3.90087 15.2186C3.95626 15.1359 4.03881 15.075 4.13428 15.0467C5.39327 15.9894 6.92378 16.4989 8.49661 16.4989C10.0694 16.4989 11.6 15.9894 12.8589 15.0467C12.9548 15.0747 13.0378 15.1353 13.0936 15.2181C13.1493 15.3009 13.1744 15.4007 13.1643 15.5C13.1643 15.7652 13.2696 16.0196 13.4572 16.2071C13.6447 16.3946 13.8991 16.5 14.1643 16.5C14.4295 16.5 14.6838 16.3946 14.8714 16.2071C15.0589 16.0196 15.1643 15.7652 15.1643 15.5C15.1733 15.1428 15.1008 14.7883 14.9522 14.4633C14.8037 14.1384 14.583 13.8515 14.3069 13.6247C15.0912 12.6089 15.5943 11.4046 15.7657 10.1328C15.937 8.86095 15.7707 7.56644 15.2833 6.37928C14.7959 5.19213 14.0047 4.15415 12.9891 3.36964C11.9735 2.58513 10.7694 2.08173 9.49761 1.91ZM3.16428 9.16667C3.16428 8.11183 3.47707 7.08069 4.06311 6.20363C4.64914 5.32656 5.48209 4.64298 6.45663 4.23931C7.43117 3.83564 8.50353 3.73002 9.53809 3.93581C10.5727 4.1416 11.523 4.64955 12.2688 5.39543C13.0147 6.14131 13.5227 7.09162 13.7285 8.12619C13.9343 9.16075 13.8286 10.2331 13.425 11.2076C13.0213 12.1822 12.3377 13.0151 11.4607 13.6012C10.5836 14.1872 9.55244 14.5 8.49761 14.5C7.08361 14.4984 5.72798 13.936 4.72813 12.9361C3.72828 11.9363 3.16586 10.5807 3.16428 9.16667Z"
                                                            fill="#080808" />
                                                        <path
                                                            d="M13.5 0.501286C13.2348 0.501286 12.9804 0.606643 12.7929 0.79418C12.6054 0.981716 12.5 1.23607 12.5 1.50129C12.5 1.7665 12.6054 2.02086 12.7929 2.20839C12.9804 2.39593 13.2348 2.50129 13.5 2.50129C13.6327 2.49096 13.7661 2.50997 13.8907 2.55698C14.0152 2.60398 14.1279 2.67782 14.2208 2.77326C14.3136 2.86869 14.3843 2.98339 14.4278 3.10921C14.4714 3.23503 14.4867 3.36889 14.4727 3.50129C14.4727 3.7665 14.578 4.02086 14.7656 4.20839C14.9531 4.39593 15.2074 4.50129 15.4727 4.50129C15.7379 4.50129 15.9922 4.39593 16.1798 4.20839C16.3673 4.02086 16.4727 3.7665 16.4727 3.50129C16.4881 3.1055 16.422 2.71077 16.2784 2.34162C16.1349 1.97247 15.9169 1.63679 15.6381 1.35544C15.3593 1.07409 15.0257 0.853074 14.6578 0.706134C14.29 0.559194 13.8959 0.489467 13.5 0.501286Z"
                                                            fill="#080808" />
                                                        <path
                                                            d="M2.52563 3.50129C2.51164 3.36889 2.52695 3.23503 2.57048 3.10921C2.61401 2.98339 2.6847 2.86869 2.77753 2.77326C2.87036 2.67782 2.98305 2.60398 3.10762 2.55698C3.23218 2.50997 3.36556 2.49096 3.4983 2.50129C3.76352 2.50129 4.01787 2.39593 4.20541 2.20839C4.39294 2.02086 4.4983 1.7665 4.4983 1.50129C4.4983 1.23607 4.39294 0.981716 4.20541 0.79418C4.01787 0.606643 3.76352 0.501286 3.4983 0.501286C3.10239 0.489467 2.70828 0.559194 2.34046 0.706134C1.97264 0.853074 1.63897 1.07409 1.36018 1.35544C1.08139 1.63679 0.863443 1.97247 0.719876 2.34162C0.576309 2.71077 0.510192 3.1055 0.525634 3.50129C0.525634 3.7665 0.630991 4.02086 0.818527 4.20839C1.00606 4.39593 1.26042 4.50129 1.52563 4.50129C1.79085 4.50129 2.0452 4.39593 2.23274 4.20839C2.42028 4.02086 2.52563 3.7665 2.52563 3.50129Z"
                                                            fill="#080808" />
                                                        <path
                                                            d="M9.52344 8.75787V6.17188C9.52344 5.90666 9.41808 5.6523 9.23054 5.46477C9.04301 5.27723 8.78865 5.17188 8.52344 5.17188C8.25822 5.17188 8.00387 5.27723 7.81633 5.46477C7.62879 5.6523 7.52344 5.90666 7.52344 6.17188V9.03388C7.52351 9.38747 7.66404 9.72655 7.9141 9.97654L9.10944 11.1719C9.29804 11.354 9.55064 11.4548 9.81284 11.4525C10.075 11.4503 10.3258 11.3451 10.5113 11.1597C10.6967 10.9743 10.8018 10.7235 10.8041 10.4613C10.8064 10.1991 10.7056 9.94648 10.5234 9.75787L9.52344 8.75787Z"
                                                            fill="#080808" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_28632_75">
                                                            <rect width="16" height="16" fill="white"
                                                                transform="translate(0.5 0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <span style="color: var(--BG-DARK, #080808);
font-family:Nunito Sans;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: normal;">7:00 PM - 11:00 PM (IST)</span>
                                            </div>
                                        </div>

                                        <div class="d-flex gap-4 align-items-center mt-4 justify-content-center">
                                            <button class="button modal-btn w-100" modal-title="Join Now">
                                                <span class="btn-text">Register Now!</span>
                                                <span class="price"
                                                    style="display: flex; gap:16px; align-items: center;">
                                                    <span class="old">₹3999/-</span>
                                                    <span class="new">₹999/-</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>






                            <div class="fs-28 text-white fw-700 my-4 lineup-heading" style="color: var(--Soft-Orange, #FFB956);
font-family: Raleway;
font-style: normal;
line-height: normal;" id="masterclass-agenda">
                                Masterclass Agenda
                            </div>
                            <p
                                style="color: var(--WHITE, #FFF);
font-family: Nunito Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal; margin:24px 0px;">
                                The
                                masterclass comprises two 4-hour sessions, running from 7 PM to 11 PM (IST) on
                                both days.</p>
                            <div class="faq-wrapper">
                                <!--/ faq item /-->
                                <div class="d-flex gap-3 text-white align-items-center f-general-sans fs-16">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
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
                                    <span>Day 1 (4-Hour Session)</span>

                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Topic & Activity</th>
                                            <th>Format</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Welcome,
                                                Introductions, Masterclass Objectives</td>
                                            <td>Presentation/Discussion</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">DPDPA 2023
                                                Fundamentals – Overview, Key Provisions, Applicability
                                            </td>
                                            <td>Lecture/Interactive - High-level concepts to gauge the level of the
                                                audience</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Data
                                                Principal Rights and Data Fiduciary Obligations</td>
                                            <td>Workshop/Case Study</td>
                                        </tr>
                                        <tr class="">
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Break</td>
                                            <td>Hydration Break</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Consent
                                                Management & Notice Requirements under DPDPA</td>
                                            <td>Hands-On/Scenario-Based</td>
                                        </tr>
                                        <tr class="">
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Children’s
                                                Data Protection and Verifiable Consent</td>
                                            <td>Group Activity</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Q&amp;A,
                                                Recap & Close</td>
                                            <td>Discussion/Q&amp;A</td>
                                        </tr>
                                    </tbody>
                                </table>


                                <!--/ faq item /-->
                                <div class="d-flex gap-3 text-white align-items-center f-general-sans fs-16 mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
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
                                    <span>Day 2 (4-Hour Session)</span>

                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Topic & Activity</th>
                                            <th>Format</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Recap Day
                                                1, Introduction to Day 2 - Draft Rules 2025 Overview</td>
                                            <td>Discussion</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Group
                                                Exercise: Data Breach Management & Notification Requirements
                                            </td>
                                            <td>Group Activity</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">
                                                Significant Data Fiduciaries (SDFs) - Additional Obligations & DPIA
                                                Requirements</td>
                                            <td>Simulations/Exercises</td>
                                        </tr>
                                        <tr class="">
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Break</td>
                                            <td>Hydration Break</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">
                                                Cross-Border Data Transfer & Data Retention under Draft Rules 2025
                                            </td>
                                            <td>Group Activity</td>
                                        </tr>
                                        <tr class="">
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Knowledge
                                                Assessment & Interactive Survey</td>
                                            <td>Quiz/Survey</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid rgba(255, 185, 86, 0.17);">Wrap-up:
                                                Compliance Roadmap, Implementation Strategy, Certificates, Next
                                                Steps</td>
                                            <td>Group Reflection</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="seats" style="border-radius: 16px;
background: var(--Soft-Orange, #FFB956); margin:36px 0px; padding:24px; display:flex; gap:24px; align-items:center;">
                                <img src="assets/images/trust.png" alt="trust">
                                <p style="color: var(--BG-DARK, #080808);
text-align: center;
font-family: Nunito Sans; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;width:44%;">Master
                                    <b>India's Privacy Law (DPDPA)</b> with industry experts. Join the global
                                    masterclass today!
                                </p>
                                <div class="d-flex gap-4 align-items-center mt-4 justify-content-center">
                                    <button class="button modal-btn w-100 flex-wrap gap-0" modal-title="Join Now">
                                        <span class="btn-text">Register Now!</span>
                                        <span class="price" style="display: flex; gap:16px; align-items: center;">
                                            <span class="old">₹3999/-</span>
                                            <span class="new">₹999/-</span>
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <div class="learning-outcome">
                                <div class="fs-28 text-white fw-700" style="color: var(--Soft-Orange, #FFB956);
font-family: Raleway;
font-style: normal;
line-height: normal;">
                                    Learning Outcome
                                    <p style="color: var(--WHITE, #FFF);
font-family: Nunito Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: 30px; margin:24px 0px;">
                                        By
                                        the end of this masterclass, participants will be able to:</p>

                                    <div class="learning-cards mt-4 d-flex flex-wrap gap-4">
                                        <div class="learning-card">
                                            <ul>
                                                <li>Understand the comprehensive framework of DPDPA 2023 and Draft
                                                    Rules 2025.</li>
                                                <li>Implement consent management and notice mechanisms.</li>
                                                <li>Establish data principal rights fulfillment processes.</li>
                                                <li>Develop breach management and notification procedures.</li>
                                                <li>Assess organizational requirements for SDF obligations.</li>
                                                <li>Create compliant data retention and cross-border transfer
                                                    policies.</li>
                                                <li>Design an implementation roadmap with technology and governance
                                                    components.</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="learning-outcome">
                                <div class="fs-28 text-white fw-700" style="color: var(--Soft-Orange, #FFB956);
font-family: Raleway;
font-style: normal;
line-height: normal; margin-top:36px;">
                                    Materials Provided
                                    <div class="learning-cards mt-4 d-flex flex-wrap gap-4">

                                        <ul>
                                            <li>Comprehensive training manual with DPDPA text and Rules</li>
                                            <li>Template library: Privacy notices, consent forms, DPIA templates,
                                                breach notification templates </li>
                                            <li>Compliance checklist and gap assessment tools </li>
                                            <li>Implementation timeline template</li>
                                        </ul>


                                    </div>
                                </div>
                            </div>

                            <div class="my-4" id="key-takeaways">
                                <div class="fs-28 text-white fw-700" style="color: var(--Soft-Orange, #FFB956);
font-family: Raleway;
font-style: normal;
line-height: normal; margin-top:36px;">
                                    Key Takeaways
                                </div>

                                <div class="d-flex flex-wrap  gap-4 mt-4">
                                    <div class="takeaway-card" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10); 
width: 262px;
padding: 24px;
gap: 16px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M24 7.49219V16.8462C24 18.1872 23.512 19.4792 22.625 20.4842C22.076 21.1062 21.13 21.1652 20.508 20.6172C19.887 20.0692 19.827 19.1212 20.375 18.5002C20.778 18.0432 21 17.4562 21 16.8472V7.49219C21 6.11419 19.879 4.99219 18.5 4.99219H5.5C4.121 4.99219 3 6.11419 3 7.49219V16.4922C3 17.8702 4.121 18.9922 5.5 18.9922H8.5C9.328 18.9922 10 19.6632 10 20.4922C10 21.3212 9.328 21.9922 8.5 21.9922H5.5C2.468 21.9922 0 19.5252 0 16.4922V7.49219C0 4.45919 2.468 1.99219 5.5 1.99219H18.5C21.532 1.99219 24 4.45919 24 7.49219ZM19 8.49219C19 7.66319 18.328 6.99219 17.5 6.99219H6.5C5.672 6.99219 5 7.66319 5 8.49219C5 9.32119 5.672 9.99219 6.5 9.99219H17.5C18.328 9.99219 19 9.32119 19 8.49219ZM19.5 16.4922C19.5 18.0492 18.705 19.4222 17.5 20.2302V23.3392C17.5 23.9622 16.709 24.2292 16.331 23.7342L15 21.9912L13.669 23.7342C13.291 24.2292 12.5 23.9622 12.5 23.3392V20.2302C11.295 19.4222 10.5 18.0482 10.5 16.4922C10.5 14.0112 12.519 11.9922 15 11.9922C17.481 11.9922 19.5 14.0112 19.5 16.4922ZM13.5 16.4922C13.5 17.3192 14.173 17.9922 15 17.9922C15.827 17.9922 16.5 17.3192 16.5 16.4922C16.5 15.6652 15.827 14.9922 15 14.9922C14.173 14.9922 13.5 15.6652 13.5 16.4922ZM6.5 11.9922C5.672 11.9922 5 12.6632 5 13.4922C5 14.3212 5.672 14.9922 6.5 14.9922H7.5C8.328 14.9922 9 14.3212 9 13.4922C9 12.6632 8.328 11.9922 7.5 11.9922H6.5Z"
                                                fill="#FBE9D6" />
                                        </svg>

                                        <div class="fw-400 fs-14 f-general-sans text-white">
                                            Get 8 CPE Credits / 8 CPD Hours
                                        </div>
                                    </div>

                                    <div class="takeaway-card" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10); 
width: 262px;
padding: 24px;
gap: 16px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_28560_799)">
                                                <path
                                                    d="M4.017 20.202C4.733 19.787 5.652 20.032 6.067 20.749C6.158 20.906 6.32 20.999 6.501 20.999H13.501C13.776 20.999 14.001 20.775 14.001 20.499V19.499C14.001 18.67 14.673 17.999 15.501 17.999H16.11C17.367 17.999 18.433 17.059 18.59 15.812L18.905 13.311C19 12.561 19.637 11.998 20.393 11.998H20.783C20.169 10.527 18.475 7.463 17.481 6.233C16.029 4.296 13.824 3.12 11.429 3.007C10.602 2.968 9.962 2.266 10.001 1.438C10.039 0.611 10.764 -0.038 11.569 0.01C14.861 0.165 17.89 1.777 19.846 4.39C20.864 5.647 23.998 10.881 23.998 12.543C23.998 13.689 23.199 14.906 21.715 14.993L21.565 16.186C21.256 18.638 19.348 20.551 16.972 20.929C16.758 22.656 15.283 23.997 13.498 23.997H6.498C5.252 23.997 4.091 23.327 3.467 22.248C3.053 21.531 3.298 20.613 4.015 20.199L4.017 20.202ZM8 2V6C8 7.105 7.105 8 6 8H2C0.895 8 0 7.105 0 6V2C0 0.895 0.895 0 2 0H6C7.105 0 8 0.895 8 2ZM6.715 2.11C6.321 1.707 5.673 1.709 5.282 2.114L3.454 4.006L2.677 3.185C2.285 2.771 1.627 2.768 1.232 3.179C0.862 3.563 0.86 4.171 1.226 4.558L1.995 5.371C2.782 6.203 4.104 6.21 4.9 5.386L6.72 3.503C7.096 3.114 7.094 2.496 6.716 2.109L6.715 2.11ZM0 12V16C0 17.105 0.895 18 2 18H6C7.105 18 8 17.105 8 16V12C8 10.895 7.105 10 6 10H2C0.895 10 0 10.895 0 12Z"
                                                    fill="#FBE9D6" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_28560_799">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <div class="fw-400 fs-14 f-general-sans text-white">
                                            DPDPA Guide, Templates, Checklists
                                        </div>
                                    </div>

                                    <div class="takeaway-card" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10); 
width: 262px;
padding: 24px;
gap: 16px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_28560_803)">
                                                <path
                                                    d="M1.50018 18C1.50018 16.895 2.39518 16 3.50018 16C4.60518 16 5.50018 16.895 5.50018 18C5.50018 19.105 4.60518 20 3.50018 20C2.39518 20 1.50018 19.105 1.50018 18ZM12.0002 16C10.8952 16 10.0002 16.895 10.0002 18C10.0002 19.105 10.8952 20 12.0002 20C13.1052 20 14.0002 19.105 14.0002 18C14.0002 16.895 13.1052 16 12.0002 16ZM12.0002 4C13.1052 4 14.0002 3.105 14.0002 2C14.0002 0.895 13.1052 0 12.0002 0C10.8952 0 10.0002 0.895 10.0002 2C10.0002 3.105 10.8952 4 12.0002 4ZM20.5002 16C19.3952 16 18.5002 16.895 18.5002 18C18.5002 19.105 19.3952 20 20.5002 20C21.6052 20 22.5002 19.105 22.5002 18C22.5002 16.895 21.6052 16 20.5002 16ZM3.50018 15C4.32918 15 5.00018 14.328 5.00018 13.5C5.00018 12.672 5.67318 12 6.50018 12H10.5002V13.5C10.5002 14.328 11.1712 15 12.0002 15C12.8292 15 13.5002 14.328 13.5002 13.5V12H17.5002C18.3272 12 19.0002 12.673 19.0002 13.5C19.0002 14.327 19.6712 15 20.5002 15C21.3292 15 22.0002 14.328 22.0002 13.5C22.0002 11.019 19.9812 9 17.5002 9H6.50018C4.01918 9 2.00018 11.019 2.00018 13.5C2.00018 14.328 2.67118 15 3.50018 15ZM23.9692 23.315C23.4572 21.967 22.1032 21 20.5002 21C18.8972 21 17.5432 21.966 17.0312 23.315C16.9042 23.648 17.1822 24 17.5562 24H23.4432C23.8182 24 24.0962 23.648 23.9692 23.315ZM3.50018 21C1.89718 21 0.543181 21.966 0.0311813 23.315C-0.0958187 23.648 0.182181 24 0.556181 24H6.44318C6.81818 24 7.09518 23.648 6.96818 23.315C6.45618 21.967 5.10318 21 3.50018 21ZM12.0002 21C10.3972 21 9.04318 21.966 8.53118 23.315C8.40418 23.648 8.68218 24 9.05618 24H14.9432C15.3182 24 15.5952 23.648 15.4682 23.315C14.9562 21.967 13.6022 21 11.9992 21H12.0002ZM9.05618 8H14.9432C15.3182 8 15.5952 7.648 15.4682 7.315C14.9562 5.967 13.6022 5 11.9992 5C10.3962 5 9.04218 5.966 8.53018 7.315C8.40318 7.648 8.68218 8 9.05618 8Z"
                                                    fill="#FBE9D6" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_28560_803">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <div class="fw-400 fs-14 f-general-sans text-white">
                                            Interactive Real-World Case Studies
                                        </div>
                                    </div>

                                    <div class="takeaway-card" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10); 
width: 262px;
padding: 24px;
gap: 16px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M20.1816 4.18062C18.841 4.03797 17.5216 3.73975 16.25 3.29198C15.0831 2.87968 13.9637 2.34341 12.9111 1.69237C12.6365 1.52566 12.3213 1.4375 12 1.4375C11.6787 1.4375 11.3635 1.52566 11.0889 1.69237L11.0879 1.69337C10.0355 2.34388 8.9165 2.87981 7.75 3.29198C6.47868 3.73966 5.15959 4.03789 3.81934 4.18065C3.38882 4.22474 2.98997 4.42703 2.70005 4.74834C2.41013 5.06964 2.24976 5.48711 2.25 5.91988V11.1152C2.2507 13.0321 2.76367 14.9139 3.73582 16.566C4.70796 18.218 6.10395 19.5803 7.7793 20.5117L11.1494 22.3847C11.409 22.5307 11.7017 22.6073 11.9995 22.6073C12.2973 22.6073 12.5901 22.5307 12.8496 22.3847L16.2207 20.5117C17.896 19.5803 19.292 18.218 20.2642 16.566C21.2363 14.9139 21.7493 13.0321 21.75 11.1152V5.91988C21.7503 5.48725 21.5901 5.0699 21.3003 4.7486C21.0106 4.42731 20.612 4.22493 20.1816 4.18062ZM15.9795 10.1826L12.2295 14.1826C12.0514 14.373 11.806 14.4861 11.5456 14.498C11.2853 14.5099 11.0306 14.4195 10.8359 14.2461L8.58594 12.2461C8.3878 12.07 8.26775 11.8224 8.25218 11.5577C8.23661 11.2931 8.32681 11.0331 8.50293 10.835C8.67905 10.6368 8.92666 10.5168 9.1913 10.5012C9.45594 10.4856 9.71592 10.5758 9.91406 10.752L11.4365 12.1045L14.5205 8.81544C14.6141 8.71574 14.7271 8.63624 14.8526 8.58182C14.978 8.5274 15.1133 8.49921 15.25 8.49898C15.4449 8.49908 15.6356 8.55616 15.7986 8.6632C15.9615 8.77024 16.0896 8.92256 16.1671 9.10144C16.2446 9.28032 16.2681 9.47796 16.2348 9.67004C16.2015 9.86212 16.1127 10.0403 15.9795 10.1826Z"
                                                fill="#FBE9D6" />
                                        </svg>

                                        <div class="fw-400 fs-14 f-general-sans text-white">
                                            Simulation-Based Practice Exercises
                                        </div>
                                    </div>

                                    <div class="takeaway-card" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
width: 262px;
padding: 24px;
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

                                        <div class="fw-400 fs-14 f-general-sans text-white">
                                            Learn from Seasoned Industry Expert
                                        </div>
                                    </div>

                                    <div class="takeaway-card" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
width: 262px;
padding: 24px;
gap: 16px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_28603_2334)">
                                                <path
                                                    d="M24 7.49219V16.8462C24 18.1872 23.512 19.4792 22.625 20.4842C22.076 21.1062 21.13 21.1652 20.508 20.6172C19.887 20.0692 19.827 19.1212 20.375 18.5002C20.778 18.0432 21 17.4562 21 16.8472V7.49219C21 6.11419 19.879 4.99219 18.5 4.99219H5.5C4.121 4.99219 3 6.11419 3 7.49219V16.4922C3 17.8702 4.121 18.9922 5.5 18.9922H8.5C9.328 18.9922 10 19.6632 10 20.4922C10 21.3212 9.328 21.9922 8.5 21.9922H5.5C2.468 21.9922 0 19.5252 0 16.4922V7.49219C0 4.45919 2.468 1.99219 5.5 1.99219H18.5C21.532 1.99219 24 4.45919 24 7.49219ZM19 8.49219C19 7.66319 18.328 6.99219 17.5 6.99219H6.5C5.672 6.99219 5 7.66319 5 8.49219C5 9.32119 5.672 9.99219 6.5 9.99219H17.5C18.328 9.99219 19 9.32119 19 8.49219ZM19.5 16.4922C19.5 18.0492 18.705 19.4222 17.5 20.2302V23.3392C17.5 23.9622 16.709 24.2292 16.331 23.7342L15 21.9912L13.669 23.7342C13.291 24.2292 12.5 23.9622 12.5 23.3392V20.2302C11.295 19.4222 10.5 18.0482 10.5 16.4922C10.5 14.0112 12.519 11.9922 15 11.9922C17.481 11.9922 19.5 14.0112 19.5 16.4922ZM13.5 16.4922C13.5 17.3192 14.173 17.9922 15 17.9922C15.827 17.9922 16.5 17.3192 16.5 16.4922C16.5 15.6652 15.827 14.9922 15 14.9922C14.173 14.9922 13.5 15.6652 13.5 16.4922ZM6.5 11.9922C5.672 11.9922 5 12.6632 5 13.4922C5 14.3212 5.672 14.9922 6.5 14.9922H7.5C8.328 14.9922 9 14.3212 9 13.4922C9 12.6632 8.328 11.9922 7.5 11.9922H6.5Z"
                                                    fill="#FBE9D6" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_28603_2334">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <div class="fw-400 fs-14 f-general-sans text-white">
                                            Get a Certificate of Completion
                                        </div>
                                    </div>

                                    <div class="takeaway-card" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
width: 262px;
padding: 24px;
gap: 16px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_28603_2323)">
                                                <path
                                                    d="M22.5679 15.6043C21.3333 14.3688 19.6203 13.8454 17.4203 14.435L9.57539 6.58213L9.67907 6.19007C10.1309 4.49479 9.6427 2.67252 8.40539 1.43521C7.14558 0.174411 5.35457 -0.288198 3.66075 0.177083C3.4192 0.243411 3.23118 0.433208 3.1672 0.675411C3.10321 0.917614 3.17339 1.17505 3.35043 1.35219L5.23936 3.24111C5.79159 3.79471 5.7862 4.6813 5.24072 5.22824C4.69954 5.77086 3.78989 5.77002 3.25087 5.2296L1.36157 3.34016C1.18443 3.16293 0.926247 3.09341 0.684044 3.15777C0.441794 3.22208 0.2527 3.41057 0.186606 3.65235C-0.271878 5.32757 0.179153 7.12968 1.44501 8.39554C2.67904 9.63046 4.38993 10.1557 6.59123 9.56488L14.4367 17.4178C13.8513 19.6171 14.3563 21.3135 15.6074 22.5647C16.8689 23.827 18.6607 24.2862 20.3508 23.8225C20.5924 23.7562 20.7805 23.5663 20.8445 23.3241C20.9085 23.0819 20.8384 22.8245 20.6613 22.6473L18.7728 20.7588C18.2205 20.2052 18.2259 19.3185 18.7714 18.7716C19.3193 18.2265 20.227 18.2352 20.7613 18.7709L22.6507 20.6599C22.8278 20.837 23.086 20.9065 23.3282 20.8422C23.5704 20.7778 23.7595 20.5894 23.8256 20.3477C24.2841 18.6727 23.8331 16.8702 22.5679 15.6043Z"
                                                    fill="#FBE9D6" />
                                                <path
                                                    d="M7.52544 12.4922L0.822691 19.1958C-0.27423 20.2927 -0.27423 22.0765 0.822691 23.1734C1.91961 24.2703 3.70339 24.2703 4.80027 23.1734L11.5029 16.47L7.52544 12.4922ZM4.13971 20.9913C3.86502 21.266 3.42018 21.266 3.14549 20.9913C2.87085 20.7166 2.87085 20.2717 3.14549 19.9971L7.41017 15.7316C7.68481 15.4569 8.1298 15.4569 8.40439 15.7316C8.67903 16.0062 8.67903 16.4512 8.40439 16.7258L4.13971 20.9913Z"
                                                    fill="#FBE9D6" />
                                                <path
                                                    d="M23.7938 1.41812L22.5816 0.205976C22.3535 -0.0221649 21.9994 -0.0657586 21.7228 0.100132L17.994 2.33715C17.6017 2.57251 17.5351 3.11377 17.8585 3.43726L18.1553 3.73398L13.4219 8.44805L15.411 10.4372L20.1445 5.72312L20.5625 6.14129C20.886 6.46468 21.4273 6.39812 21.6626 6.00577L23.8997 2.27701C24.0655 2.0003 24.0219 1.64626 23.7938 1.41812Z"
                                                    fill="#FBE9D6" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_28603_2323">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <div class="fw-400 fs-14 f-general-sans text-white">
                                            Alumni Network for Continued Support
                                        </div>
                                    </div>

                                    <div class="takeaway-card" style="border-radius: 16px;
border: 1px solid rgba(255, 185, 86, 0.20);
background: rgba(255, 185, 86, 0.10);
width: 262px;
padding: 24px;
gap: 16px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_28684_584)">
                                                <path
                                                    d="M10.5 10.5H9.72701C10.051 7.903 11.136 5.645 12.001 4.182C12.569 5.141 13.229 6.436 13.708 7.952C13.956 8.748 14.822 9.18 15.591 8.93C16.381 8.68 16.819 7.838 16.57 7.048C16.148 5.713 15.614 4.534 15.093 3.553C16.993 4.244 18.627 5.557 19.715 7.363C20.145 8.073 21.066 8.301 21.775 7.874C22.484 7.447 22.713 6.525 22.286 5.815C20.148 2.266 16.266 0.055 12.132 0.008C12.126 0.008 12.121 0.008 12.115 0.007C12.079 0.007 12.044 0 12.008 0C12.001 0 11.998 0 11.993 0C5.37901 0.003 6.81749e-06 5.385 6.81749e-06 12C-0.00599318 17.621 3.94901 22.647 9.50001 23.701C10.301 23.718 11.017 23.007 11 22.201V18.214C11 18.011 10.959 17.81 10.879 17.624C10.279 16.221 9.90001 14.841 9.73301 13.501H10.5C11.328 13.501 12 12.83 12 12.001C12 11.172 11.328 10.501 10.5 10.501V10.5ZM8.90001 3.55C7.96001 5.318 6.98901 7.742 6.71401 10.5H3.12801C3.66901 7.289 5.91401 4.649 8.90101 3.55H8.90001ZM8.00001 18.515V20.069C5.42401 18.798 3.61501 16.356 3.13701 13.5H6.71301C6.87801 15.144 7.30501 16.823 8.00001 18.515ZM23 15.778V14.499C23 12.018 20.981 9.999 18.5 9.999C16.019 9.999 14 12.018 14 14.499V15.778C13.39 16.327 13 17.114 13 17.999V20.999C13 22.656 14.343 23.999 16 23.999H21C22.657 23.999 24 22.656 24 20.999V17.999C24 17.114 23.61 16.327 23 15.778ZM18.5 12.999C19.327 12.999 20 13.672 20 14.499V14.999H17V14.499C17 13.672 17.673 12.999 18.5 12.999ZM18.5 20.999C17.672 20.999 17 20.327 17 19.499C17 18.671 17.672 17.999 18.5 17.999C19.328 17.999 20 18.671 20 19.499C20 20.327 19.328 20.999 18.5 20.999Z"
                                                    fill="#FBE9D6" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_28684_584">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <div class="fw-400 fs-14 f-general-sans text-white">
                                            Exclusive Insights on Global Privacy Trends
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="learning-outcome">
                                <div class="fs-28 text-white fw-700" style="color: var(--Soft-Orange, #FFB956);
font-family: Raleway;
font-style: normal;
line-height: normal;">
                                    Target Audience
                                    <p style="color: var(--WHITE, #FFF);
font-family: Nunito Sans; font-size: 16px; font-style: normal; font-weight: 400; line-height: 30px; margin:24px 0px;">
                                        This masterclass is essential for professionals at all experience levels who
                                        are involved in organizational data processing and compliance.</p>

                                    <div class="learning-cards mt-4 d-flex flex-wrap gap-4">
                                        <div class="learning-card">
                                            <ul>
                                                <li>Legal and Compliance professionals </li>
                                                <li>Data Protection Officers and Privacy professionals</li>
                                                <li>IT and Cybersecurity teams</li>
                                                <li>HR and Business leaders handling personal data</li>
                                                <li>Consultants advising on DPDPA compliance</li>
                                                <li>Senior management responsible for data governance</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="learning-outcome">
                                <div class="fs-28 text-white fw-700" style="color: var(--Soft-Orange, #FFB956);
font-family: Raleway;
font-style: normal;
line-height: normal; margin-top:36px;">
                                    Prerequisites
                                    <div class="learning-cards mt-4 d-flex flex-wrap gap-4 pb-4">

                                        <ul>
                                            <li>Basic understanding of data handling in organizational context.</li>
                                            <li>Familiarity with privacy concepts (helpful but not mandatory).</li>
                                            <li>Active involvement in organizational data processing activities.
                                            </li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="footer-fix">
                                <div class="d-flex gap-4 masterclass-fixed"
                                    style="overflow: hidden;background: var(--Soft-Orange, #FFB956); padding:24px; justify-content:center; align-items:center;">
                                    <div>
                                        <div class="d-flex gap-4 text-align-center mb-2 justify-content-center">
                                            <h3>Masterclass</h3>
                                            <img src="assets/images/live.gif" alt="live-gif" width="77" height="24">

                                        </div>
                                        <div class="d-flex gap-3 justify-content-center mt-1 masterclass-fixedA">
                                            <div
                                                class="fs-18 f-general-sans text-white d-flex gap-2 align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                    viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_28632_71)">
                                                        <path
                                                            d="M12.8333 1.83333H12.5V1.5C12.5 0.947333 12.052 0.5 11.5 0.5C10.948 0.5 10.5 0.947333 10.5 1.5V1.83333H6.5V1.5C6.5 0.947333 6.052 0.5 5.5 0.5C4.948 0.5 4.5 0.947333 4.5 1.5V1.83333H4.16667C2.14533 1.83333 0.5 3.478 0.5 5.5V12.8333C0.5 14.8553 2.14533 16.5 4.16667 16.5H12.8333C14.8547 16.5 16.5 14.8553 16.5 12.8333V5.5C16.5 3.478 14.8547 1.83333 12.8333 1.83333ZM12.8333 14.5H4.16667C3.24733 14.5 2.5 13.752 2.5 12.8333V6.5H14.5V12.8333C14.5 13.752 13.7527 14.5 12.8333 14.5ZM7.16667 8.83333V10.1667C7.16667 10.7187 6.71867 11.1667 6.16667 11.1667H4.83333C4.28133 11.1667 3.83333 10.7187 3.83333 10.1667V8.83333C3.83333 8.28133 4.28133 7.83333 4.83333 7.83333H6.16667C6.71867 7.83333 7.16667 8.28133 7.16667 8.83333Z"
                                                            fill="#080808" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_28632_71">
                                                            <rect width="16" height="16" fill="white"
                                                                transform="translate(0.5 0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <span style="color: var(--BG-DARK, #080808);
font-family:Nunito Sans; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;">25th & 26th
                                                    October</span>
                                            </div>
                                            <div
                                                class="fs-18 f-general-sans text-white d-flex gap-2 align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                    viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_28632_75)">
                                                        <path
                                                            d="M9.49761 1.91V1.5C9.49761 1.23478 9.39225 0.98043 9.20472 0.792893C9.01718 0.605357 8.76283 0.5 8.49761 0.5C8.23239 0.5 7.97804 0.605357 7.7905 0.792893C7.60297 0.98043 7.49761 1.23478 7.49761 1.5V1.91C6.22585 2.08173 5.02168 2.58513 4.00609 3.36964C2.99051 4.15415 2.19928 5.19213 1.7119 6.37928C1.22453 7.56644 1.05818 8.86095 1.22957 10.1328C1.40095 11.4046 1.90404 12.6089 2.68828 13.6247C2.41224 13.8515 2.19156 14.1384 2.04301 14.4633C1.89445 14.7883 1.82192 15.1428 1.83094 15.5C1.83094 15.7652 1.9363 16.0196 2.12384 16.2071C2.31137 16.3946 2.56573 16.5 2.83094 16.5C3.09616 16.5 3.35051 16.3946 3.53805 16.2071C3.72559 16.0196 3.83094 15.7652 3.83094 15.5C3.82076 15.4009 3.84549 15.3014 3.90087 15.2186C3.95626 15.1359 4.03881 15.075 4.13428 15.0467C5.39327 15.9894 6.92378 16.4989 8.49661 16.4989C10.0694 16.4989 11.6 15.9894 12.8589 15.0467C12.9548 15.0747 13.0378 15.1353 13.0936 15.2181C13.1493 15.3009 13.1744 15.4007 13.1643 15.5C13.1643 15.7652 13.2696 16.0196 13.4572 16.2071C13.6447 16.3946 13.8991 16.5 14.1643 16.5C14.4295 16.5 14.6838 16.3946 14.8714 16.2071C15.0589 16.0196 15.1643 15.7652 15.1643 15.5C15.1733 15.1428 15.1008 14.7883 14.9522 14.4633C14.8037 14.1384 14.583 13.8515 14.3069 13.6247C15.0912 12.6089 15.5943 11.4046 15.7657 10.1328C15.937 8.86095 15.7707 7.56644 15.2833 6.37928C14.7959 5.19213 14.0047 4.15415 12.9891 3.36964C11.9735 2.58513 10.7694 2.08173 9.49761 1.91ZM3.16428 9.16667C3.16428 8.11183 3.47707 7.08069 4.06311 6.20363C4.64914 5.32656 5.48209 4.64298 6.45663 4.23931C7.43117 3.83564 8.50353 3.73002 9.53809 3.93581C10.5727 4.1416 11.523 4.64955 12.2688 5.39543C13.0147 6.14131 13.5227 7.09162 13.7285 8.12619C13.9343 9.16075 13.8286 10.2331 13.425 11.2076C13.0213 12.1822 12.3377 13.0151 11.4607 13.6012C10.5836 14.1872 9.55244 14.5 8.49761 14.5C7.08361 14.4984 5.72798 13.936 4.72813 12.9361C3.72828 11.9363 3.16586 10.5807 3.16428 9.16667Z"
                                                            fill="#080808" />
                                                        <path
                                                            d="M13.5 0.501286C13.2348 0.501286 12.9804 0.606643 12.7929 0.79418C12.6054 0.981716 12.5 1.23607 12.5 1.50129C12.5 1.7665 12.6054 2.02086 12.7929 2.20839C12.9804 2.39593 13.2348 2.50129 13.5 2.50129C13.6327 2.49096 13.7661 2.50997 13.8907 2.55698C14.0152 2.60398 14.1279 2.67782 14.2208 2.77326C14.3136 2.86869 14.3843 2.98339 14.4278 3.10921C14.4714 3.23503 14.4867 3.36889 14.4727 3.50129C14.4727 3.7665 14.578 4.02086 14.7656 4.20839C14.9531 4.39593 15.2074 4.50129 15.4727 4.50129C15.7379 4.50129 15.9922 4.39593 16.1798 4.20839C16.3673 4.02086 16.4727 3.7665 16.4727 3.50129C16.4881 3.1055 16.422 2.71077 16.2784 2.34162C16.1349 1.97247 15.9169 1.63679 15.6381 1.35544C15.3593 1.07409 15.0257 0.853074 14.6578 0.706134C14.29 0.559194 13.8959 0.489467 13.5 0.501286Z"
                                                            fill="#080808" />
                                                        <path
                                                            d="M2.52563 3.50129C2.51164 3.36889 2.52695 3.23503 2.57048 3.10921C2.61401 2.98339 2.6847 2.86869 2.77753 2.77326C2.87036 2.67782 2.98305 2.60398 3.10762 2.55698C3.23218 2.50997 3.36556 2.49096 3.4983 2.50129C3.76352 2.50129 4.01787 2.39593 4.20541 2.20839C4.39294 2.02086 4.4983 1.7665 4.4983 1.50129C4.4983 1.23607 4.39294 0.981716 4.20541 0.79418C4.01787 0.606643 3.76352 0.501286 3.4983 0.501286C3.10239 0.489467 2.70828 0.559194 2.34046 0.706134C1.97264 0.853074 1.63897 1.07409 1.36018 1.35544C1.08139 1.63679 0.863443 1.97247 0.719876 2.34162C0.576309 2.71077 0.510192 3.1055 0.525634 3.50129C0.525634 3.7665 0.630991 4.02086 0.818527 4.20839C1.00606 4.39593 1.26042 4.50129 1.52563 4.50129C1.79085 4.50129 2.0452 4.39593 2.23274 4.20839C2.42028 4.02086 2.52563 3.7665 2.52563 3.50129Z"
                                                            fill="#080808" />
                                                        <path
                                                            d="M9.52344 8.75787V6.17188C9.52344 5.90666 9.41808 5.6523 9.23054 5.46477C9.04301 5.27723 8.78865 5.17188 8.52344 5.17188C8.25822 5.17188 8.00387 5.27723 7.81633 5.46477C7.62879 5.6523 7.52344 5.90666 7.52344 6.17188V9.03388C7.52351 9.38747 7.66404 9.72655 7.9141 9.97654L9.10944 11.1719C9.29804 11.354 9.55064 11.4548 9.81284 11.4525C10.075 11.4503 10.3258 11.3451 10.5113 11.1597C10.6967 10.9743 10.8018 10.7235 10.8041 10.4613C10.8064 10.1991 10.7056 9.94648 10.5234 9.75787L9.52344 8.75787Z"
                                                            fill="#080808" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_28632_75">
                                                            <rect width="16" height="16" fill="white"
                                                                transform="translate(0.5 0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <span style="color: var(--BG-DARK, #080808);
font-family:Nunito Sans;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: normal;">7:00 PM - 11:00 PM (IST)</span>
                                            </div>
                                        </div>
                                        <p
                                            style="color: black;
font-family: Nunito Sans; font-size: 16px; font-style: normal; font-weight: 700; line-height: normal; text-align:center; margin-top:8px;">
                                            9 People have registered</p>
                                    </div>
                                    <div class="d-flex justify-content-center gap-3 px-3 timers">
                                        <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-white rounded"
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
                                    <div class=" gap-4 align-items-center mt-2">
                                        <button class="button modal-btn cta-fix button-fixA" modal-title="Join Now">
                                            <span class="btn-textA">Register Now!</span>
                                            <span class="price"
                                                style="display: flex; gap:16px; align-items: center;">
                                                <span class="old">₹3999/-</span>
                                                <span class="new">₹999/-</span>
                                            </span>
                                        </button>


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
                } else if (!/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9]{2,4}$/.test(email.value)) {
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


        // Countdown function to show only specific time units in each div
        function startCountdown() {
            const targetDate = new Date("October 26, 2025 09:00:00").getTime(); // Target date

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