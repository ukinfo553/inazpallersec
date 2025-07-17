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
    <title>AI Summit 2025</title>
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
    <!--/ style link end /-->
    <!-- Google Tag Manager -->
    <script>
        setTimeout(function () {
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
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
        </style>
        <!-- Background Video -->

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
                            <img src="assets/images/logo.png" alt="AI Summit 2025" class="img-fluid mb-md-4">
                            <div>
                                <div class="fs-16 f-general-sans text-white mb-md-4"
                                    style="text-transform: uppercase;letter-spacing: 16px;font-weight: 200;">
                                    PRESENTS
                                </div>
                                <h1 id="typing-one"></h1>

                            </div>
                            <div class="live-badge align-items-center d-flex gap-md-4 gap-2 p-3">
                                <img src="assets/images/live.gif" width="77" height="24" alt="">
                                <div class="d-flex gap-3 flex-wrap">
                                    <div class="fs-24 f-general-sans text-white d-flex gap-3 align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_23541_758)">
                                                <path
                                                    d="M18.5 2H18V1.5C18 0.671 17.328 0 16.5 0C15.672 0 15 0.671 15 1.5V2H9V1.5C9 0.671 8.328 0 7.5 0C6.672 0 6 0.671 6 1.5V2H5.5C2.468 2 0 4.467 0 7.5V18.5C0 21.533 2.468 24 5.5 24H18.5C21.532 24 24 21.533 24 18.5V7.5C24 4.467 21.532 2 18.5 2ZM18.5 21H5.5C4.121 21 3 19.878 3 18.5V9H21V18.5C21 19.878 19.879 21 18.5 21ZM10 12.5V14.5C10 15.328 9.328 16 8.5 16H6.5C5.672 16 5 15.328 5 14.5V12.5C5 11.672 5.672 11 6.5 11H8.5C9.328 11 10 11.672 10 12.5Z"
                                                    fill="#21D6FF" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_23541_758">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>26 & 27 July, 2025</span>
                                    </div>
                                    <div class="fs-24 f-general-sans text-white d-flex gap-3 align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_23541_762)">
                                                <path
                                                    d="M13.4964 2.115V1.5C13.4964 1.10218 13.3384 0.720644 13.0571 0.43934C12.7758 0.158035 12.3942 0 11.9964 0C11.5986 0 11.2171 0.158035 10.9358 0.43934C10.6544 0.720644 10.4964 1.10218 10.4964 1.5V2.115C8.58877 2.37259 6.78252 3.1277 5.25914 4.30446C3.73576 5.48123 2.54892 7.03819 1.81786 8.81892C1.0868 10.5997 0.83727 12.5414 1.09435 14.4491C1.35143 16.3569 2.10606 18.1633 3.28242 19.687C2.86837 20.0273 2.53735 20.4575 2.31451 20.945C2.09167 21.4324 1.98289 21.9642 1.99642 22.5C1.99642 22.8978 2.15445 23.2794 2.43576 23.5607C2.71706 23.842 3.09859 24 3.49642 24C3.89424 24 4.27577 23.842 4.55708 23.5607C4.83838 23.2794 4.99641 22.8978 4.99641 22.5C4.98113 22.3514 5.01824 22.2021 5.10131 22.078C5.18439 21.9538 5.30822 21.8626 5.45141 21.82C7.3399 23.2341 9.63566 23.9984 11.9949 23.9984C14.3542 23.9984 16.6499 23.2341 18.5384 21.82C18.6822 21.862 18.8067 21.953 18.8903 22.0772C18.974 22.2014 19.0115 22.351 18.9964 22.5C18.9964 22.8978 19.1545 23.2794 19.4358 23.5607C19.7171 23.842 20.0986 24 20.4964 24C20.8942 24 21.2758 23.842 21.5571 23.5607C21.8384 23.2794 21.9964 22.8978 21.9964 22.5C22.0099 21.9642 21.9012 21.4324 21.6783 20.945C21.4555 20.4575 21.1245 20.0273 20.7104 19.687C21.8868 18.1633 22.6414 16.3569 22.8985 14.4491C23.1556 12.5414 22.906 10.5997 22.175 8.81892C21.4439 7.03819 20.2571 5.48123 18.7337 4.30446C17.2103 3.1277 15.4041 2.37259 13.4964 2.115ZM3.99642 13C3.99642 11.4177 4.46561 9.87103 5.34466 8.55544C6.22371 7.23984 7.47314 6.21447 8.93495 5.60896C10.3968 5.00346 12.0053 4.84504 13.5571 5.15372C15.109 5.4624 16.5344 6.22433 17.6533 7.34315C18.7721 8.46197 19.534 9.88743 19.8427 11.4393C20.1514 12.9911 19.993 14.5997 19.3875 16.0615C18.782 17.5233 17.7566 18.7727 16.441 19.6518C15.1254 20.5308 13.5787 21 11.9964 21C9.87541 20.9976 7.84197 20.154 6.34219 18.6542C4.84242 17.1544 3.9988 15.121 3.99642 13Z"
                                                    fill="#21D6FF" />
                                                <path
                                                    d="M19.5 0.0019296C19.1022 0.0019296 18.7206 0.159965 18.4393 0.441269C18.158 0.722574 18 1.1041 18 1.50193C18 1.89975 18.158 2.28129 18.4393 2.56259C18.7206 2.84389 19.1022 3.00193 19.5 3.00193C19.6991 2.98644 19.8992 3.01496 20.086 3.08547C20.2729 3.15597 20.4419 3.26673 20.5812 3.40988C20.7204 3.55304 20.8264 3.72509 20.8917 3.91382C20.957 4.10254 20.98 4.30333 20.959 4.50193C20.959 4.89975 21.117 5.28129 21.3983 5.56259C21.6796 5.84389 22.0612 6.00193 22.459 6.00193C22.8568 6.00193 23.2384 5.84389 23.5197 5.56259C23.801 5.28129 23.959 4.89975 23.959 4.50193C23.9822 3.90825 23.883 3.31616 23.6676 2.76243C23.4523 2.20871 23.1254 1.70519 22.7072 1.28316C22.289 0.861131 21.7885 0.529611 21.2368 0.309201C20.685 0.0887915 20.0939 -0.0157988 19.5 0.0019296Z"
                                                    fill="#21D6FF" />
                                                <path
                                                    d="M3.03845 4.50193C3.01745 4.30333 3.04042 4.10254 3.10572 3.91382C3.17102 3.72509 3.27705 3.55304 3.41629 3.40988C3.55554 3.26673 3.72458 3.15597 3.91143 3.08547C4.09827 3.01496 4.29835 2.98644 4.49745 3.00193C4.89528 3.00193 5.27681 2.84389 5.55811 2.56259C5.83942 2.28129 5.99745 1.89975 5.99745 1.50193C5.99745 1.1041 5.83942 0.722574 5.55811 0.441269C5.27681 0.159965 4.89528 0.0019296 4.49745 0.0019296C3.90359 -0.0157988 3.31243 0.0887915 2.76069 0.309201C2.20896 0.529611 1.70846 0.861131 1.29027 1.28316C0.872089 1.70519 0.545164 2.20871 0.329814 2.76243C0.114463 3.31616 0.0152876 3.90825 0.0384507 4.50193C0.0384507 4.89975 0.196486 5.28129 0.477791 5.56259C0.759095 5.84389 1.14063 6.00193 1.53845 6.00193C1.93628 6.00193 2.31781 5.84389 2.59911 5.56259C2.88042 5.28129 3.03845 4.89975 3.03845 4.50193Z"
                                                    fill="#21D6FF" />
                                                <path
                                                    d="M13.5352 12.379V8.5C13.5352 8.10218 13.3771 7.72064 13.0958 7.43934C12.8145 7.15804 12.433 7 12.0352 7C11.6373 7 11.2558 7.15804 10.9745 7.43934C10.6932 7.72064 10.5352 8.10218 10.5352 8.5V12.793C10.5353 13.3234 10.7461 13.832 11.1212 14.207L12.9142 16C13.1971 16.2732 13.576 16.4244 13.9693 16.421C14.3626 16.4176 14.7388 16.2598 15.0169 15.9817C15.295 15.7036 15.4527 15.3274 15.4562 14.9341C15.4596 14.5408 15.3084 14.1619 15.0352 13.879L13.5352 12.379Z"
                                                    fill="#21D6FF" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_23541_762">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>10 AM - 6 PM (IST)</span>
                                    </div>
                                </div>
                            </div>


                            <div
                                class="d-flex flex-wrap justify-content-md-start justify-content-center gap-3 feature-boxes">
                                <div class="feature-box d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M11.8878 1.42681L7.71121 0.03416C7.57446 -0.0113867 7.42664 -0.0113867 7.28989 0.03416L3.11328 1.42681C2.44923 1.64739 1.87158 2.07163 1.46241 2.63926C1.05323 3.20689 0.833343 3.88903 0.833986 4.58876V8.00004C0.833986 13.042 6.96722 15.8266 7.22989 15.9426C7.3151 15.9804 7.40731 16 7.50055 16C7.59379 16 7.686 15.9804 7.77121 15.9426C8.03387 15.8266 14.1671 13.042 14.1671 8.00004V4.58876C14.1678 3.88903 13.9479 3.20689 13.5387 2.63926C13.1295 2.07163 12.5519 1.64739 11.8878 1.42681ZM10.6458 6.47806L7.79788 9.32602C7.68134 9.44334 7.54265 9.53634 7.38987 9.59963C7.23709 9.66292 7.07326 9.69522 6.90789 9.69468H6.88589C6.71716 9.69209 6.5507 9.65531 6.39658 9.58656C6.24246 9.51781 6.10389 9.41852 5.98924 9.29469L4.45193 7.69471C4.38535 7.63294 4.3321 7.55822 4.29543 7.47513C4.25877 7.39204 4.23947 7.30233 4.23872 7.21151C4.23797 7.1207 4.25578 7.03068 4.29107 6.947C4.32635 6.86331 4.37836 6.78772 4.44391 6.72486C4.50946 6.66199 4.58716 6.61318 4.67224 6.58143C4.75733 6.54967 4.84801 6.53563 4.93871 6.54018C5.02942 6.54472 5.11824 6.56775 5.19973 6.60786C5.28121 6.64796 5.35365 6.70429 5.41258 6.77339L6.90856 8.33337L9.70052 5.53341C9.82625 5.41197 9.99465 5.34478 10.1694 5.3463C10.3442 5.34782 10.5114 5.41793 10.635 5.54153C10.7587 5.66513 10.8288 5.83234 10.8303 6.00713C10.8318 6.18193 10.7646 6.35033 10.6432 6.47606L10.6458 6.47806Z"
                                            fill="#00FFFF"></path>
                                    </svg>
                                    <span>15+ AI Tools</span>
                                </div>

                                <div class="feature-box d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M11.8878 1.42681L7.71121 0.03416C7.57446 -0.0113867 7.42664 -0.0113867 7.28989 0.03416L3.11328 1.42681C2.44923 1.64739 1.87158 2.07163 1.46241 2.63926C1.05323 3.20689 0.833343 3.88903 0.833986 4.58876V8.00004C0.833986 13.042 6.96722 15.8266 7.22989 15.9426C7.3151 15.9804 7.40731 16 7.50055 16C7.59379 16 7.686 15.9804 7.77121 15.9426C8.03387 15.8266 14.1671 13.042 14.1671 8.00004V4.58876C14.1678 3.88903 13.9479 3.20689 13.5387 2.63926C13.1295 2.07163 12.5519 1.64739 11.8878 1.42681ZM10.6458 6.47806L7.79788 9.32602C7.68134 9.44334 7.54265 9.53634 7.38987 9.59963C7.23709 9.66292 7.07326 9.69522 6.90789 9.69468H6.88589C6.71716 9.69209 6.5507 9.65531 6.39658 9.58656C6.24246 9.51781 6.10389 9.41852 5.98924 9.29469L4.45193 7.69471C4.38535 7.63294 4.3321 7.55822 4.29543 7.47513C4.25877 7.39204 4.23947 7.30233 4.23872 7.21151C4.23797 7.1207 4.25578 7.03068 4.29107 6.947C4.32635 6.86331 4.37836 6.78772 4.44391 6.72486C4.50946 6.66199 4.58716 6.61318 4.67224 6.58143C4.75733 6.54967 4.84801 6.53563 4.93871 6.54018C5.02942 6.54472 5.11824 6.56775 5.19973 6.60786C5.28121 6.64796 5.35365 6.70429 5.41258 6.77339L6.90856 8.33337L9.70052 5.53341C9.82625 5.41197 9.99465 5.34478 10.1694 5.3463C10.3442 5.34782 10.5114 5.41793 10.635 5.54153C10.7587 5.66513 10.8288 5.83234 10.8303 6.00713C10.8318 6.18193 10.7646 6.35033 10.6432 6.47606L10.6458 6.47806Z"
                                            fill="#00FFFF"></path>
                                    </svg>
                                    <span>Real-world Use Cases</span>
                                </div>

                                <div class="feature-box d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M11.8878 1.42681L7.71121 0.03416C7.57446 -0.0113867 7.42664 -0.0113867 7.28989 0.03416L3.11328 1.42681C2.44923 1.64739 1.87158 2.07163 1.46241 2.63926C1.05323 3.20689 0.833343 3.88903 0.833986 4.58876V8.00004C0.833986 13.042 6.96722 15.8266 7.22989 15.9426C7.3151 15.9804 7.40731 16 7.50055 16C7.59379 16 7.686 15.9804 7.77121 15.9426C8.03387 15.8266 14.1671 13.042 14.1671 8.00004V4.58876C14.1678 3.88903 13.9479 3.20689 13.5387 2.63926C13.1295 2.07163 12.5519 1.64739 11.8878 1.42681ZM10.6458 6.47806L7.79788 9.32602C7.68134 9.44334 7.54265 9.53634 7.38987 9.59963C7.23709 9.66292 7.07326 9.69522 6.90789 9.69468H6.88589C6.71716 9.69209 6.5507 9.65531 6.39658 9.58656C6.24246 9.51781 6.10389 9.41852 5.98924 9.29469L4.45193 7.69471C4.38535 7.63294 4.3321 7.55822 4.29543 7.47513C4.25877 7.39204 4.23947 7.30233 4.23872 7.21151C4.23797 7.1207 4.25578 7.03068 4.29107 6.947C4.32635 6.86331 4.37836 6.78772 4.44391 6.72486C4.50946 6.66199 4.58716 6.61318 4.67224 6.58143C4.75733 6.54967 4.84801 6.53563 4.93871 6.54018C5.02942 6.54472 5.11824 6.56775 5.19973 6.60786C5.28121 6.64796 5.35365 6.70429 5.41258 6.77339L6.90856 8.33337L9.70052 5.53341C9.82625 5.41197 9.99465 5.34478 10.1694 5.3463C10.3442 5.34782 10.5114 5.41793 10.635 5.54153C10.7587 5.66513 10.8288 5.83234 10.8303 6.00713C10.8318 6.18193 10.7646 6.35033 10.6432 6.47606L10.6458 6.47806Z"
                                            fill="#00FFFF"></path>
                                    </svg>
                                    <span>C-Suite Ready Insights</span>
                                </div>
                            </div>

                            <div class="d-flex gap-4 align-items-center mt-2">
                                <button class="button modal-btn" modal-title="Join Now">JOIN NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner sec end-->

        <section class="p-lg-0 pt-0" style="background: #0A0017;">
            <div class="container">
                <div class="row g-4 flex-column-reverse flex-md-row align-items-center">
                    <div class="col-md-8">
                        <h2>
                            Master Tools, Build Trust <br> & Lead the <span id="typing-two" class="f-unicephalon" style="background: linear-gradient(89deg, #2738ED 0%, #6C0AE2 98.66%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text; /* For Firefox */
  color: transparent;">AI Revolution</span>
                        </h2>
                    </div>

                    <div class="col-md-4">
                        <?php if ($country == 'IN') { ?>
                            <img src="assets/images/prices/inr-offer.png" alt="AI Summit 2025" class="w-100 d-block">
                        <?php } else { ?>
                            <img src="assets/images/prices/usd-offer.png" alt="AI Summit 2025" class="w-100 d-block">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <section
            style="background: #0A0017;background-image: url('assets/images/gradient-background.png');background-size: cover;background-position: center;background-size:contain;">
            <div class="container">
                <div class="row flex-column-reverse flex-lg-row">
                    <div class="col-lg-8 mt-4 mt-lg-0">
                        <div class="item">
                            <div class="fs-24 text-white fw-600 f-general-sans" style="color:#21D6FF;">
                                Why Attend?
                            </div>
                            <p class="mt-3 text-white f-general-sans">
                                AI Summit 2025 isn’t just about learning AI - it's about mastering how to use it. Across
                                two high-impact days, you'll gain hands-on exposure to 15+ breakthrough tools, see
                                exactly how leading organizations are applying AI to drive growth, and walk away with
                                strategies you can implement immediately. From productivity to privacy, from governance
                                to growth, this is where future-ready leaders come to sharpen their edge and shape the
                                AI revolution.
                            </p>
                            <p class="mt-3 text-white f-general-sans">
                                Join global experts and forward-thinking peers to gain the skills, insights, and
                                confidence to drive real change in your organization, starting now!
                            </p>
                        </div>

                        <div class="fs-24 text-white fw-600 f-general-sans mt-5 mb-4" style="color:#21D6FF;"
                            id="experts">
                            Speaker Lineup
                        </div>

                        <div class="row row-cols-2 row-cols-lg-4 g-3 mb-3">

                            <div class="col">
                                <img src="assets/images/speakers/shakti-v2.png" alt="Shakti AI Speaker"
                                    class="w-100 d-block speakers">
                            </div>
                            <div class="col">
                                <img src="assets/images/speakers/dr-ram.png" alt="Dr. Ram AI Speaker"
                                    class="w-100 d-block speakers">
                            </div>
                            <div class="col">
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
                            </div>
                        </div>

                        <!--price tag start-->
                        <!-- <picture class="my-5 d-block">
                            <source media="(min-width:768px)" srcset="assets/images/prices/desk.png">
                            <img src="assets/images/prices/mob.png" alt="Flowers" class="w-100 d-block">
                        </picture> -->
                        <!--price tag end-->

                        <div class="my-4" id="key-takeaways">
                            <div class="fs-24 text-white fw-600 f-general-sans mt-5 mb-4" style="color:#21D6FF;">
                                Key Takeaways
                            </div>

                            <div class="d-flex flex-wrap flex-md-nowrap gap-4 mt-3">
                                <div class="rounded-4 w-100 p-3 d-flex flex-md-column align-items-center gap-3 rounded"
                                    style="background: linear-gradient(90deg, rgba(10, 0, 23, 0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%);border: 1px solid #2738ED;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <g clip-path="url(#clip0_23541_1011)">
                                            <path
                                                d="M24.375 7.5V16.854C24.375 18.195 23.887 19.487 23 20.492C22.451 21.114 21.505 21.173 20.883 20.625C20.262 20.077 20.202 19.129 20.75 18.508C21.153 18.051 21.375 17.464 21.375 16.855V7.5C21.375 6.122 20.254 5 18.875 5H5.875C4.496 5 3.375 6.122 3.375 7.5V16.5C3.375 17.878 4.496 19 5.875 19H8.875C9.703 19 10.375 19.671 10.375 20.5C10.375 21.329 9.703 22 8.875 22H5.875C2.843 22 0.375 19.533 0.375 16.5V7.5C0.375 4.467 2.843 2 5.875 2H18.875C21.907 2 24.375 4.467 24.375 7.5ZM19.375 8.5C19.375 7.671 18.703 7 17.875 7H6.875C6.047 7 5.375 7.671 5.375 8.5C5.375 9.329 6.047 10 6.875 10H17.875C18.703 10 19.375 9.329 19.375 8.5ZM19.875 16.5C19.875 18.057 19.08 19.43 17.875 20.238V23.347C17.875 23.97 17.084 24.237 16.706 23.742L15.375 21.999L14.044 23.742C13.666 24.237 12.875 23.97 12.875 23.347V20.238C11.67 19.43 10.875 18.056 10.875 16.5C10.875 14.019 12.894 12 15.375 12C17.856 12 19.875 14.019 19.875 16.5ZM13.875 16.5C13.875 17.327 14.548 18 15.375 18C16.202 18 16.875 17.327 16.875 16.5C16.875 15.673 16.202 15 15.375 15C14.548 15 13.875 15.673 13.875 16.5ZM6.875 12C6.047 12 5.375 12.671 5.375 13.5C5.375 14.329 6.047 15 6.875 15H7.875C8.703 15 9.375 14.329 9.375 13.5C9.375 12.671 8.703 12 7.875 12H6.875Z"
                                                fill="#21D6FF" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_23541_1011">
                                                <rect width="24" height="24" fill="white"
                                                    transform="translate(0.375)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="text-center fw-400 fs-14 f-general-sans text-white">
                                        Earn 16 CPE Credits
                                    </div>
                                </div>

                                <div class="rounded-4 w-100 p-3 d-flex flex-md-column align-items-center gap-3 rounded"
                                    style="background: linear-gradient(90deg, rgba(10, 0, 23, 0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%);border: 1px solid #2738ED;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <g clip-path="url(#clip0_23541_1015)">
                                            <path
                                                d="M4.142 20.202C4.858 19.787 5.777 20.032 6.192 20.749C6.283 20.906 6.445 20.999 6.626 20.999H13.626C13.901 20.999 14.126 20.775 14.126 20.499V19.499C14.126 18.67 14.798 17.999 15.626 17.999H16.235C17.492 17.999 18.558 17.059 18.715 15.812L19.03 13.311C19.125 12.561 19.762 11.998 20.518 11.998H20.908C20.294 10.527 18.6 7.463 17.606 6.233C16.154 4.296 13.949 3.12 11.554 3.007C10.727 2.968 10.087 2.266 10.126 1.438C10.164 0.611 10.889 -0.038 11.694 0.01C14.986 0.165 18.015 1.777 19.971 4.39C20.989 5.647 24.123 10.881 24.123 12.543C24.123 13.689 23.324 14.906 21.84 14.993L21.69 16.186C21.381 18.638 19.473 20.551 17.097 20.929C16.883 22.656 15.408 23.997 13.623 23.997H6.623C5.377 23.997 4.216 23.327 3.592 22.248C3.178 21.531 3.423 20.613 4.14 20.199L4.142 20.202ZM8.125 2V6C8.125 7.105 7.23 8 6.125 8H2.125C1.02 8 0.125 7.105 0.125 6V2C0.125 0.895 1.02 0 2.125 0H6.125C7.23 0 8.125 0.895 8.125 2ZM6.84 2.11C6.446 1.707 5.798 1.709 5.407 2.114L3.579 4.006L2.802 3.185C2.41 2.771 1.752 2.768 1.357 3.179C0.987 3.563 0.985 4.171 1.351 4.558L2.12 5.371C2.907 6.203 4.229 6.21 5.025 5.386L6.845 3.503C7.221 3.114 7.219 2.496 6.841 2.109L6.84 2.11ZM0.125 12V16C0.125 17.105 1.02 18 2.125 18H6.125C7.23 18 8.125 17.105 8.125 16V12C8.125 10.895 7.23 10 6.125 10H2.125C1.02 10 0.125 10.895 0.125 12Z"
                                                fill="#21D6FF" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_23541_1015">
                                                <rect width="24" height="24" fill="white"
                                                    transform="translate(0.125)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="text-center fw-400 fs-14 f-general-sans text-white">
                                        Learn Directly from Leading AI Experts
                                    </div>
                                </div>

                                <div class="rounded-4 w-100 p-3 d-flex flex-md-column align-items-center gap-3 rounded"
                                    style="background: linear-gradient(90deg, rgba(10, 0, 23, 0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%);border: 1px solid #2738ED;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <g clip-path="url(#clip0_23541_1019)">
                                            <path
                                                d="M2.37518 18C2.37518 16.895 3.27018 16 4.37518 16C5.48018 16 6.37518 16.895 6.37518 18C6.37518 19.105 5.48018 20 4.37518 20C3.27018 20 2.37518 19.105 2.37518 18ZM12.8752 16C11.7702 16 10.8752 16.895 10.8752 18C10.8752 19.105 11.7702 20 12.8752 20C13.9802 20 14.8752 19.105 14.8752 18C14.8752 16.895 13.9802 16 12.8752 16ZM12.8752 4C13.9802 4 14.8752 3.105 14.8752 2C14.8752 0.895 13.9802 0 12.8752 0C11.7702 0 10.8752 0.895 10.8752 2C10.8752 3.105 11.7702 4 12.8752 4ZM21.3752 16C20.2702 16 19.3752 16.895 19.3752 18C19.3752 19.105 20.2702 20 21.3752 20C22.4802 20 23.3752 19.105 23.3752 18C23.3752 16.895 22.4802 16 21.3752 16ZM4.37518 15C5.20418 15 5.87518 14.328 5.87518 13.5C5.87518 12.672 6.54818 12 7.37518 12H11.3752V13.5C11.3752 14.328 12.0462 15 12.8752 15C13.7042 15 14.3752 14.328 14.3752 13.5V12H18.3752C19.2022 12 19.8752 12.673 19.8752 13.5C19.8752 14.327 20.5462 15 21.3752 15C22.2042 15 22.8752 14.328 22.8752 13.5C22.8752 11.019 20.8562 9 18.3752 9H7.37518C4.89418 9 2.87518 11.019 2.87518 13.5C2.87518 14.328 3.54618 15 4.37518 15ZM24.8442 23.315C24.3322 21.967 22.9782 21 21.3752 21C19.7722 21 18.4182 21.966 17.9062 23.315C17.7792 23.648 18.0572 24 18.4312 24H24.3182C24.6932 24 24.9712 23.648 24.8442 23.315ZM4.37518 21C2.77218 21 1.41818 21.966 0.906181 23.315C0.779181 23.648 1.05718 24 1.43118 24H7.31818C7.69318 24 7.97018 23.648 7.84318 23.315C7.33118 21.967 5.97818 21 4.37518 21ZM12.8752 21C11.2722 21 9.91818 21.966 9.40618 23.315C9.27918 23.648 9.55718 24 9.93118 24H15.8182C16.1932 24 16.4702 23.648 16.3432 23.315C15.8312 21.967 14.4772 21 12.8742 21H12.8752ZM9.93118 8H15.8182C16.1932 8 16.4702 7.648 16.3432 7.315C15.8312 5.967 14.4772 5 12.8742 5C11.2712 5 9.91718 5.966 9.40518 7.315C9.27818 7.648 9.55718 8 9.93118 8Z"
                                                fill="#21D6FF" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_23541_1019">
                                                <rect width="24" height="24" fill="white"
                                                    transform="translate(0.875)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="text-center fw-400 fs-14 f-general-sans text-white">
                                        Drive Real Business Growth with AI
                                    </div>
                                </div>

                                <div class="rounded-4 w-100 p-3 d-flex flex-md-column align-items-center gap-3 rounded"
                                    style="background: linear-gradient(90deg, rgba(10, 0, 23, 0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%);border: 1px solid #2738ED;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.1072 16.8693H20.6812V7.90907C20.6812 7.45724 20.315 7.09103 19.8632 7.09103C18.5762 7.09103 16.9994 7.09103 16.9994 7.09103C16.548 7.09103 16.1814 6.72442 16.1814 6.27278C16.1814 5.82115 16.548 5.45454 16.9994 5.45454H19.8632C21.2187 5.45454 22.3177 6.55358 22.3177 7.90907V16.8693H23.1358C23.5878 16.8693 23.954 17.2355 23.954 17.6874V18.5455C23.954 19.1964 23.6954 19.8208 23.2351 20.2811C22.7748 20.7414 22.1504 21 21.4995 21H3.49946C2.84852 21 2.22428 20.7414 1.76381 20.2811C1.30353 19.8208 1.04492 19.1964 1.04492 18.5455V17.6874C1.04492 17.2355 1.41134 16.8693 1.86317 16.8693H2.68141V7.90907C2.68141 6.55358 3.78026 5.45454 5.13595 5.45454H7.99951C8.45114 5.45454 8.81775 5.82115 8.81775 6.27278C8.81775 6.72442 8.45114 7.09103 7.99951 7.09103C7.99951 7.09103 6.42271 7.09103 5.13595 7.09103C4.68392 7.09103 4.3177 7.45724 4.3177 7.90907V16.8693H4.89167L5.50334 14.1758C6.08438 11.6174 8.35846 9.80182 10.9819 9.80182H11.938C11.9484 9.80162 11.959 9.80162 11.9694 9.80182H13.0295C13.0401 9.80162 13.0506 9.80162 13.061 9.80182H14.017C16.6405 9.80182 18.9147 11.6174 19.4956 14.1758L20.1072 16.8693ZM13.3176 18.5056V19.3637H21.4995C21.7164 19.3637 21.9246 19.2775 22.0779 19.1239C22.2315 18.9706 22.3177 18.7624 22.3177 18.5455V18.5056H13.3176ZM11.6813 18.5056H2.68141V18.5455C2.68141 18.7624 2.76761 18.9706 2.92097 19.1239C3.07433 19.2775 3.28248 19.3637 3.49946 19.3637H11.6813V18.5056ZM10.9051 11.4389C9.07833 11.4738 7.50526 12.75 7.09918 14.5381L6.56979 16.8693H12.4055C12.2798 16.8548 12.1565 16.811 12.0467 16.7379L10.4103 15.6507C10.1218 15.4588 9.98533 15.1062 10.0696 14.7702L10.9051 11.4389ZM14.0938 11.4389L14.9294 14.7702C15.0138 15.1062 14.8773 15.4588 14.5887 15.6507L12.9524 16.7379C12.8424 16.811 12.7193 16.8548 12.5934 16.8693H18.4291L17.8999 14.5381C17.4939 12.75 15.9206 11.4738 14.0938 11.4389ZM11.7974 14.6076L12.4996 15.0742L13.2016 14.6076L12.4996 11.8084L11.7974 14.6076ZM12.4996 3C10.7185 3 9.26605 4.4629 9.26605 6.27278C9.26605 8.08266 10.7185 9.54556 12.4996 9.54556C14.2804 9.54556 15.7331 8.08266 15.7331 6.27278C15.7331 4.4629 14.2804 3 12.4996 3ZM12.4996 4.63649C13.3846 4.63649 14.0966 5.37324 14.0966 6.27278C14.0966 7.17232 13.3846 7.90907 12.4996 7.90907C11.6144 7.90907 10.9023 7.17232 10.9023 6.27278C10.9023 5.37324 11.6144 4.63649 12.4996 4.63649Z"
                                            fill="#21D6FF" />
                                    </svg>

                                    <div class="text-center fw-400 fs-14 f-general-sans text-white">
                                        Get Expert Career Guidance for the AI Era
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="fs-24 text-white fw-600 f-general-sans my-4" style="color:#21D6FF;"
                            id="masterclass-agenda">
                            AI Summit Agenda
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
                                <span>26 July</span>
                            </div>
                            <div class="faq-item active open">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <img src="assets/images/speakers/kiran1.png" alt="">
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600"> Introduction to AI/ML - Kiran (10 AM - 12
                                                PM)</strong>
                                        </div>
                                    </span>
                                    <span class="right-icon"></span>
                                </h3>
                                <div class="faq-content">
                                    <p class="mb-3 fw-bold">AI Explained: No Jargon, Just Breakthroughs</p>
                                    <span class="fs-16 text-white f-general-sans fw-600"
                                        style="color:#21D6FF;">Agenda</span>
                                    <ul>
                                        <li>Demystifying AI/ML: Core concepts simplified for practical understanding.
                                        </li>
                                        <li>AI in Action: Real-world applications across diverse industries.</li>
                                        <li>Key Techniques: Understanding neural networks, NLP, and computer vision.
                                        </li>
                                        <li>Global Impact: How AI is transforming healthcare, finance, retail, and more.
                                        </li>
                                        <li>Future Trends: Debunking myths and exploring what's next in AI.</li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ faq item /-->
                            <div class="faq-item">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <img src="assets/images/speakers/anas1.png" alt="">
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600"> AI Productivity Tools - Anas (12 PM - 1 PM)</strong>
                                        </div>
                                    </span>
                                    <span class="right-icon"></span>
                                </h3>
                                <div class="faq-content">
                                    <p class="mb-3 fw-bold">AI Playbook for Leaders: Implement 15+ Game-changing AI Tools</p>
                                    <span class="fs-16 text-white f-general-sans fw-600"
                                        style="color:#21D6FF;">Agenda</span>
                                    <ul>
                                        <li>Productivity Redefined: How AI boosts individual and team output.</li>
                                        <li>Executive Tool Showcase: Practical use of ChatGPT, NotebookLM, Gamma, Perplexity, Gemini, Meta, Mistral, Deepseek, Sora, Llama Coder, Deep Learning LMS, Napkin AI, Consensus and more.</li>
                                        <li>Strategic AI Applications: Leveraging AI for planning, analysis, and
                                            communication.</li>
                                        <li>Blueprint for Adoption: Best practices for integrating AI tools into your
                                            workflow.</li>
                                        <li>Leadership in AI: Fostering an AI-first mindset and measuring ROI.</li>
                                    </ul>
                                </div>
                            </div>

                            <!--/ faq item /-->
                            <div class="faq-item">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <img src="assets/images/speakers/break-time.png" alt="">
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600"> Lunch Break (1 PM - 2 PM)</strong>
                                        </div>
                                    </span>
                                </h3>
                            </div>

                            <!--/ faq item /-->
                            <div class="faq-item">
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
                                        <li>Best Practices for Hosting AI Workloads: Scalability, reliability, and cost
                                            optimization.</li>
                                        <li>Cloud AI Security Frameworks: Identity and access management, threat
                                            detection, and incident response.</li>
                                        <li>Case Studies: Real-world examples of secure and efficient cloud AI
                                            deployments.</li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ faq item /-->
                            <!--/ faq item /-->
                            <div class="faq-item">
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
                                        <li>The Governance Imperative: Mitigating risks and building trust in AI.</li>
                                        <li>Core Pillars: Ethics, risk management, and compliance frameworks.</li>
                                        <li>Regulatory Landscape: Navigating global AI laws and standards.</li>
                                        <li>Practical Implementation: Steps to establish an AI Ethics Committee and
                                            policies.</li>
                                        <li>Fostering Responsibility: Cultivating an AI-responsible organizational
                                            culture.</li>
                                    </ul>
                                </div>
                            </div>

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
                                <span>27 July</span>
                            </div>
                            <!--/ faq item /-->
                            <div class="faq-item">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <img src="assets/images/speakers/shakti1.png" alt="">
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600">Auditing 42001 - Shakti (10 AM - 12 PM)</strong>
                                        </div>
                                    </span>
                                    <span class="right-icon"></span>
                                </h3>
                                <div class="faq-content">
                                    <p class="mb-3 fw-bold">Auditing AI with Digital Trust
                                    </p>
                                    <span class="fs-16 text-white f-general-sans fw-600"
                                        style="color:#21D6FF;">Agenda</span>
                                    <ul>
                                        <li>The Need for Audits: Ensuring trustworthiness and compliance in AI systems.
                                        </li>
                                        <li>Audit Dimensions: Assessing fairness, explainability, robustness, and data
                                            quality.</li>
                                        <li>Bias Detection: Techniques for identifying and mitigating algorithmic bias.
                                        </li>
                                        <li>Practical Methodologies: Developing audit plans and utilizing automated
                                            tools.</li>
                                        <li>Building Trust: Fostering collaboration for continuous monitoring and
                                            auditable AI.</li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ faq item /-->

                            <!--/ faq item /-->
                            <div class="faq-item">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <img src="assets/images/speakers/dr-ram1.png" alt="">
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600">AI Security Frameworks: CISO Edition - Dr Ram (12 PM -
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
                            </div>
                            <!--/ faq item /-->

                            <!--/ faq item /-->
                            <div class="faq-item">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <img src="assets/images/speakers/break-time.png" alt="">
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600"> Lunch Break (1 PM - 2 PM)</strong>
                                        </div>
                                    </span>
                                </h3>
                            </div>

                            <!--/ faq item /-->
                            <div class="faq-item">
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
                                        <li>GenAI Privacy Challenges: Understanding data leakage and unique risks.</li>
                                        <li>Global Compliance: Navigating DPDP, GDPR, HIPAA, and other key regulations.
                                        </li>
                                        <li>Privacy-by-Design Techniques: Implementing data minimization, federated
                                            learning, and more.</li>
                                        <li>Secure Implementation: Best practices for consent management and prompt
                                            engineering.</li>
                                        <li>Compliance Strategies: Conducting PIAs and ensuring vendor due diligence.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ faq item /-->

                            <!--/ faq item /-->
                            <div class="faq-item">
                                <h3 class="faq-title">
                                    <span class="title d-flex align-items-center gap-3">
                                        <img src="assets/images/speakers/avinish1.png" alt="">
                                        <div
                                            class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                            <strong class="fw-600">AI in Cybersecurity - Avnish (4 PM - 6 PM)</strong>
                                            <!-- <div class="d-flex gap-2 gap-md-3">
                                                <span class="fw-400">by Avnish</span>
                                                <div>
                                                    <span class="fw-400">at:</span>
                                                    <strong class="fw-600"> </strong>
                                                </div>
                                            </div> -->
                                        </div>
                                    </span>
                                    <span class="right-icon"></span>
                                </h3>
                                <div class="faq-content">
                                    <p class="mb-3 fw-bold">AI's Cyber Battleground: Offense vs. Defense in the Machine Age
                                    </p>
                                    <span class="fs-16 text-white f-general-sans fw-600"
                                        style="color:#21D6FF;">Agenda</span>
                                    <ul>
                                        <li>Evolving Threats: Why traditional cybersecurity isn't enough.</li>
                                        <li>Offensive AI: How attackers weaponize AI for reconnaissance, phishing, and
                                            malware.</li>
                                        <li>Defensive AI: Leveraging MLSecOps and real-time threat hunting for
                                            protection.</li>
                                        <li>AI's Shield: Automated response, predictive analytics, and enhanced security
                                            platforms.</li>
                                        <li>Future of Cyber Warfare: Emerging trends and the ethical implications of AI
                                            in defense.</li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ faq item /-->
                        </div>

                        <div class="p-3 mt-5 text-md-start text-center rounded-4 d-flex align-items-center justify-content-between flex-column flex-md-row gap-3"
                            style="background: linear-gradient(89deg, #2738ED 0%, #6C0AE2 98.66%);">
                            <div>
                                <div class="fs-18 text-white fw-500 f-general-sans">
                                    Ready to Be an AI Innovator? Secure Your Spot Now!
                                </div>
                            </div>
                            <div>
                                <a href="#" class="button modal-btn" modal-title="Register Now">Register Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div style="position: sticky;
        top: 100px;">
                            <div class="d-flex flex-column gap-3 rounded-4"
                                style="overflow: hidden;box-shadow: var(--box-shadow);border-radius: 0px 0px 16px 16px;background: rgba(108, 10, 226, 0.15);border:1px solid #2738ED;">
                                <div class="fs-28 text-center f-general-sans p-3">
                                    <span class="fs-16 text-white">The Biggest AI Knowledge Drop of the Year</span>
                                    <div class="fs-28 f-general-sans" style="color:#21D6FF;font-weight: 600;">Are You
                                        Ready?
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-3 px-3 timers">
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-white rounded"
                                        id="timer1"
                                        style="background: linear-gradient(89deg, #2738ED 0%, #6C0AE2 98.66%);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Days</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark rounded"
                                        id="timer2" style="background: rgba(39, 56, 237, 0.40);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Hours</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark rounded"
                                        id="timer3" style="background: rgba(39, 56, 237, 0.40);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Minutes</span>
                                    </div>
                                    <div class="d-flex flex-column gap-2 align-items-center timers-item p-2 text-dark rounded"
                                        id="timer4" style="background: rgba(39, 56, 237, 0.40);">
                                        <strong style="color: var(--white);"></strong>
                                        <span style="color: var(--white);">Seconds</span>
                                    </div>
                                </div>
                                <div class="fs-16 f-general-sans fw-600 px-3 text-white">Please Fill the Form</div>
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
                                        Our Advisor will Contact You with Event Details, Payment Options, and Exclusive
                                        Offers!
                                    </div>
                                    <div class="d-flex gap-3 align-items-center pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                            viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_23541_1086)">
                                                <path
                                                    d="M10.692 12.5676C11.9187 13.2289 12.882 14.3209 13.3007 15.6689C13.3317 15.7687 13.3388 15.8744 13.3215 15.9775C13.3042 16.0805 13.2629 16.1781 13.2009 16.2622C13.1389 16.3464 13.0581 16.4148 12.9648 16.4619C12.8715 16.5091 12.7685 16.5336 12.664 16.5336H3.33132C3.22672 16.5339 3.12352 16.5095 3.0301 16.4625C2.93668 16.4154 2.85568 16.347 2.79366 16.2628C2.73164 16.1785 2.69035 16.0809 2.67315 15.9777C2.65594 15.8745 2.66331 15.7687 2.69465 15.6689C3.11465 14.3183 4.08065 13.2249 5.31065 12.5636C5.46321 12.4806 5.63978 12.4528 5.81048 12.485C5.98117 12.5172 6.13549 12.6074 6.24732 12.7403L7.54665 14.2989C7.60233 14.3658 7.67205 14.4196 7.75085 14.4566C7.82966 14.4935 7.91562 14.5127 8.00265 14.5127C8.08968 14.5127 8.17565 14.4935 8.25445 14.4566C8.33325 14.4196 8.40297 14.3658 8.45865 14.2989L9.75465 12.7436C9.8666 12.6106 10.0211 12.5205 10.1919 12.4884C10.3628 12.4563 10.5394 12.4843 10.692 12.5676ZM13.7733 2.26694L9.46398 0.746271C8.53595 0.419287 7.52426 0.417877 6.59532 0.742271L2.23332 2.26894C1.96984 2.35851 1.7413 2.52888 1.5802 2.7558C1.41911 2.98272 1.33365 3.25466 1.33598 3.53294C1.33598 4.11094 1.68865 4.60694 2.23398 4.79694L6.57198 6.31027C7.49488 6.63119 8.49909 6.63119 9.42198 6.31027L13.3313 4.94694V7.86627C13.3313 8.04308 13.4016 8.21265 13.5266 8.33768C13.6516 8.4627 13.8212 8.53294 13.998 8.53294C14.1748 8.53294 14.3444 8.4627 14.4694 8.33768C14.5944 8.21265 14.6647 8.04308 14.6647 7.86627L14.6673 3.5316C14.6699 3.25366 14.585 2.98193 14.4247 2.75485C14.2644 2.52778 14.0368 2.35686 13.774 2.26627L13.7733 2.26694ZM11.9973 6.82427L9.86065 7.56961C8.65314 7.98762 7.34016 7.98762 6.13265 7.56961L3.99732 6.82427V7.19961C3.99732 9.40561 5.79132 11.1996 7.99732 11.1996C10.2033 11.1996 11.9973 9.40561 11.9973 7.19961V6.82361V6.82427Z"
                                                    fill="#2738ED" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_23541_1086">
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


                                <div>
                                    <img src="assets/images/prices/group-discount.png" class="img-fluid d-block mt-4" alt="">
                                </div>
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
                            InfosecTrain offers complete training and consulting solutions to its customers globally.
                            Whether the requirements are technical services, certification or custom training, Infosec
                            Train has consistently delivered the highest quality and best success rates in the industry.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 quick-links">
                    <div class="item">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#masterclass-agenda">AI Summit Agenda</a></li>
                            <li><a href="#experts">Speaker Lineup</a></li>
                            <li><a href="#key-takeaways">Key Takeaways</a></li>
                            <li><a href="https://www.infosectrain.com/events/" target="_blank">Free Training</a></li>
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
    <script src="assets/js/custom.js" defer></script>
    <!--/ js link start /-->
    <script>
        $(document).ready(function () {
            // Your jQuery code here
            $('.faq-wrapper .faq-title').on('click', function (e) {
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
            let fullText1 = "AI Summit 2025";
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
        document.addEventListener("DOMContentLoaded", function () {

            // Function to load Zopim chat widget after a delay
            function loadZopim() {
                window.$zopim || (function (d, s) {
                    var z = $zopim = function (c) { z._.push(c) }, $ = z.s = d.createElement(s),
                        e = d.getElementsByTagName(s)[0]; z.set = function (o) { z.set._.push(o) };
                    z._ = []; z.set._ = []; $.async = !0; $.setAttribute("charset", "utf-8");
                    $.src = "https://v2.zopim.com/?5Y1ZvMP3lrSPwhhyQjIGwo618dlqPLkD";
                    z.t = +new Date; $.type = "text/javascript";
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
                event.preventDefault();  // Prevent the default form submission

                const form = event.target;
                const loader = form.querySelector('.loader');
                const isValid = validateForm(form);

                if (!isValid) {
                    return;  // Stop the submission if the form is invalid
                }

                // Show the loader while submitting
                loader.style.display = 'block';

                // Create a FormData object with the form data
                const formData = new FormData(form);

                // Make the AJAX request
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'send-ajax.php', true);

                xhr.onload = function () {
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

                xhr.onerror = function () {
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
            const targetDate = new Date("July 26, 2025 09:00:00").getTime(); // Target date

            // Update the countdown every second
            const interval = setInterval(function () {
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
  "mainEntity": [
    {
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
  "itemListElement": [
    {
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
    "audienceType": ["Business Leaders", "IT Professionals", "CISOs", "Data Scientists", "AI Practitioners", "Privacy Officers"]
  },
  "educationalLevel": "Intermediate to Advanced",
  "about": [
    {
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
  "performer": [
    {
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
  "workExample": [
    {
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
  "review": [
    {
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
    }
  ],
  "keywords": "AI Summit, AI training, Machine Learning, AI governance, AI security, AI privacy, AI tools, ChatGPT training, AI compliance, GDPR AI, ISO 42001, AI auditing, cloud AI security",
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
    "instructor": [
      {
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