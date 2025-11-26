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
        <title>Cybersecurity Awareness Program</title>
        <meta name="description" content="Cybersecurity Awareness Program">
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

            <section class="hero-section"
                style="background-image: url(assets/images/DIDAC-Banner.png); background-repeat: no-repeat; background-size: cover; ">
                <!-- Logo Section -->

                <!-- Main Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-item d-flex flex-column gap-4 justify-content-center align-items-center">
                                <img src="assets/images/logo.png" alt="Cybersecurity Awareness Program"
                                    class="img-fluid mb-md-4">
                                <div class="top-subheading">
                                    <!-- <div class="fs-16 f-general-sans text-white mb-md-4"
                                        style="text-transform: uppercase;letter-spacing: 16px;font-weight: 200;">
                                        PRESENTS
                                    </div> -->
                                    <h1 id="typing-one">Cybersecurity Awareness Program</h1>
                                    <h2>How to Stay Safe Online</h2>
                                    <p sty>Complimentary Training for the Cyber Warriors of DIDAC India 2025</p>

                                </div>
                                <div class="live-badge align-items-center d-flex gap-md-4 gap-2 p-3">
                                    <img src="assets/images/live.gif" width="77" height="24" alt="">
                                    <div class="d-flex gap-3 flex-wrap">
                                        <div class="fs-24 f-general-sans text-white d-flex gap-3 align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_30753_155)">
                                                    <path
                                                        d="M18.5 2H18V1.5C18 0.671 17.328 0 16.5 0C15.672 0 15 0.671 15 1.5V2H9V1.5C9 0.671 8.328 0 7.5 0C6.672 0 6 0.671 6 1.5V2H5.5C2.468 2 0 4.467 0 7.5V18.5C0 21.533 2.468 24 5.5 24H18.5C21.532 24 24 21.533 24 18.5V7.5C24 4.467 21.532 2 18.5 2ZM18.5 21H5.5C4.121 21 3 19.878 3 18.5V9H21V18.5C21 19.878 19.879 21 18.5 21ZM10 12.5V14.5C10 15.328 9.328 16 8.5 16H6.5C5.672 16 5 15.328 5 14.5V12.5C5 11.672 5.672 11 6.5 11H8.5C9.328 11 10 11.672 10 12.5Z"
                                                        fill="#FFB956" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_30753_155">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>14th December 2025</span>
                                        </div>
                                        <div class="fs-24 f-general-sans text-white d-flex gap-3 align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_30753_159)">
                                                    <path
                                                        d="M13.4964 2.115V1.5C13.4964 1.10218 13.3384 0.720644 13.0571 0.43934C12.7758 0.158035 12.3942 0 11.9964 0C11.5986 0 11.2171 0.158035 10.9358 0.43934C10.6544 0.720644 10.4964 1.10218 10.4964 1.5V2.115C8.58877 2.37259 6.78252 3.1277 5.25914 4.30446C3.73576 5.48123 2.54892 7.03819 1.81786 8.81892C1.0868 10.5997 0.83727 12.5414 1.09435 14.4491C1.35143 16.3569 2.10606 18.1633 3.28242 19.687C2.86837 20.0273 2.53735 20.4575 2.31451 20.945C2.09167 21.4324 1.98289 21.9642 1.99642 22.5C1.99642 22.8978 2.15445 23.2794 2.43576 23.5607C2.71706 23.842 3.09859 24 3.49642 24C3.89424 24 4.27577 23.842 4.55708 23.5607C4.83838 23.2794 4.99641 22.8978 4.99641 22.5C4.98113 22.3514 5.01824 22.2021 5.10131 22.078C5.18439 21.9538 5.30822 21.8626 5.45141 21.82C7.3399 23.2341 9.63566 23.9984 11.9949 23.9984C14.3542 23.9984 16.6499 23.2341 18.5384 21.82C18.6822 21.862 18.8067 21.953 18.8903 22.0772C18.974 22.2014 19.0115 22.351 18.9964 22.5C18.9964 22.8978 19.1545 23.2794 19.4358 23.5607C19.7171 23.842 20.0986 24 20.4964 24C20.8942 24 21.2758 23.842 21.5571 23.5607C21.8384 23.2794 21.9964 22.8978 21.9964 22.5C22.0099 21.9642 21.9012 21.4324 21.6783 20.945C21.4555 20.4575 21.1245 20.0273 20.7104 19.687C21.8868 18.1633 22.6414 16.3569 22.8985 14.4491C23.1556 12.5414 22.906 10.5997 22.175 8.81892C21.4439 7.03819 20.2571 5.48123 18.7337 4.30446C17.2103 3.1277 15.4041 2.37259 13.4964 2.115ZM3.99642 13C3.99642 11.4177 4.46561 9.87103 5.34466 8.55544C6.22371 7.23984 7.47314 6.21447 8.93495 5.60896C10.3968 5.00346 12.0053 4.84504 13.5571 5.15372C15.109 5.4624 16.5344 6.22433 17.6533 7.34315C18.7721 8.46197 19.534 9.88743 19.8427 11.4393C20.1514 12.9911 19.993 14.5997 19.3875 16.0615C18.782 17.5233 17.7566 18.7727 16.441 19.6518C15.1254 20.5308 13.5787 21 11.9964 21C9.87541 20.9976 7.84197 20.154 6.34219 18.6542C4.84242 17.1544 3.9988 15.121 3.99642 13Z"
                                                        fill="#FFB956" />
                                                    <path
                                                        d="M19.5 0.0019296C19.1022 0.0019296 18.7206 0.159965 18.4393 0.441269C18.158 0.722574 18 1.1041 18 1.50193C18 1.89975 18.158 2.28129 18.4393 2.56259C18.7206 2.84389 19.1022 3.00193 19.5 3.00193C19.6991 2.98644 19.8992 3.01496 20.086 3.08547C20.2729 3.15597 20.4419 3.26673 20.5812 3.40988C20.7204 3.55304 20.8264 3.72509 20.8917 3.91382C20.957 4.10254 20.98 4.30333 20.959 4.50193C20.959 4.89975 21.117 5.28129 21.3983 5.56259C21.6796 5.84389 22.0612 6.00193 22.459 6.00193C22.8568 6.00193 23.2384 5.84389 23.5197 5.56259C23.801 5.28129 23.959 4.89975 23.959 4.50193C23.9822 3.90825 23.883 3.31616 23.6676 2.76243C23.4523 2.20871 23.1254 1.70519 22.7072 1.28316C22.289 0.861131 21.7885 0.529611 21.2368 0.309201C20.685 0.0887915 20.0939 -0.0157988 19.5 0.0019296Z"
                                                        fill="#FFB956" />
                                                    <path
                                                        d="M3.03845 4.50193C3.01745 4.30333 3.04042 4.10254 3.10572 3.91382C3.17102 3.72509 3.27705 3.55304 3.41629 3.40988C3.55554 3.26673 3.72458 3.15597 3.91143 3.08547C4.09827 3.01496 4.29835 2.98644 4.49745 3.00193C4.89528 3.00193 5.27681 2.84389 5.55811 2.56259C5.83942 2.28129 5.99745 1.89975 5.99745 1.50193C5.99745 1.1041 5.83942 0.722574 5.55811 0.441269C5.27681 0.159965 4.89528 0.0019296 4.49745 0.0019296C3.90359 -0.0157988 3.31243 0.0887915 2.76069 0.309201C2.20896 0.529611 1.70846 0.861131 1.29027 1.28316C0.872089 1.70519 0.545164 2.20871 0.329814 2.76243C0.114463 3.31616 0.0152876 3.90825 0.0384507 4.50193C0.0384507 4.89975 0.196486 5.28129 0.477791 5.56259C0.759095 5.84389 1.14063 6.00193 1.53845 6.00193C1.93628 6.00193 2.31781 5.84389 2.59911 5.56259C2.88042 5.28129 3.03845 4.89975 3.03845 4.50193Z"
                                                        fill="#FFB956" />
                                                    <path
                                                        d="M13.5352 12.379V8.5C13.5352 8.10218 13.3771 7.72064 13.0958 7.43934C12.8145 7.15804 12.433 7 12.0352 7C11.6373 7 11.2558 7.15804 10.9745 7.43934C10.6932 7.72064 10.5352 8.10218 10.5352 8.5V12.793C10.5353 13.3234 10.7461 13.832 11.1212 14.207L12.9142 16C13.1971 16.2732 13.576 16.4244 13.9693 16.421C14.3626 16.4176 14.7388 16.2598 15.0169 15.9817C15.295 15.7036 15.4527 15.3274 15.4562 14.9341C15.4596 14.5408 15.3084 14.1619 15.0352 13.879L13.5352 12.379Z"
                                                        fill="#FFB956" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_30753_159">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>9:00 AM - 1:00 PM (IST)</span>
                                        </div>
                                    </div>
                                </div>


                                <div
                                    class="d-flex flex-wrap justify-content-md-start justify-content-center gap-3 feature-boxes">
                                    <div class="feature-box d-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M18.081 2.14021L11.816 0.05124C11.6109 -0.01708 11.3891 -0.01708 11.184 0.05124L4.919 2.14021C3.92291 2.47108 3.05642 3.10745 2.44265 3.95889C1.82887 4.81033 1.49904 5.83354 1.5 6.88314V12.0001C1.5 19.5629 10.7 23.7399 11.094 23.9139C11.2218 23.9707 11.3601 24 11.5 24C11.6399 24 11.7782 23.9707 11.906 23.9139C12.3 23.7399 21.5 19.5629 21.5 12.0001V6.88314C21.501 5.83354 21.1711 4.81033 20.5574 3.95889C19.9436 3.10745 19.0771 2.47108 18.081 2.14021ZM16.218 9.71709L11.946 13.989C11.7712 14.165 11.5631 14.3045 11.334 14.3994C11.1048 14.4944 10.8591 14.5428 10.611 14.542H10.578C10.3249 14.5381 10.0752 14.483 9.84402 14.3798C9.61284 14.2767 9.40498 14.1278 9.233 13.942L6.927 11.5421C6.82713 11.4494 6.74725 11.3373 6.69225 11.2127C6.63726 11.0881 6.60831 10.9535 6.60718 10.8173C6.60606 10.681 6.63278 10.546 6.6857 10.4205C6.73863 10.295 6.81665 10.1816 6.91497 10.0873C7.01329 9.99299 7.12985 9.91978 7.25748 9.87214C7.38511 9.82451 7.52113 9.80345 7.65719 9.81027C7.79325 9.81709 7.92648 9.85163 8.04871 9.91179C8.17095 9.97194 8.2796 10.0564 8.368 10.1601L10.612 12.5L14.8 8.30011C14.9886 8.11796 15.2412 8.01717 15.5034 8.01944C15.7656 8.02172 16.0164 8.12689 16.2018 8.31229C16.3872 8.4977 16.4924 8.74851 16.4947 9.0107C16.497 9.27289 16.3962 9.52549 16.214 9.71409L16.218 9.71709Z"
                                                fill="#FFB956" />
                                        </svg>
                                        <span>4 Hours</span>
                                    </div>

                                    <div class="feature-box d-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M18.081 2.14021L11.816 0.05124C11.6109 -0.01708 11.3891 -0.01708 11.184 0.05124L4.919 2.14021C3.92291 2.47108 3.05642 3.10745 2.44265 3.95889C1.82887 4.81033 1.49904 5.83354 1.5 6.88314V12.0001C1.5 19.5629 10.7 23.7399 11.094 23.9139C11.2218 23.9707 11.3601 24 11.5 24C11.6399 24 11.7782 23.9707 11.906 23.9139C12.3 23.7399 21.5 19.5629 21.5 12.0001V6.88314C21.501 5.83354 21.1711 4.81033 20.5574 3.95889C19.9436 3.10745 19.0771 2.47108 18.081 2.14021ZM16.218 9.71709L11.946 13.989C11.7712 14.165 11.5631 14.3045 11.334 14.3994C11.1048 14.4944 10.8591 14.5428 10.611 14.542H10.578C10.3249 14.5381 10.0752 14.483 9.84402 14.3798C9.61284 14.2767 9.40498 14.1278 9.233 13.942L6.927 11.5421C6.82713 11.4494 6.74725 11.3373 6.69225 11.2127C6.63726 11.0881 6.60831 10.9535 6.60718 10.8173C6.60606 10.681 6.63278 10.546 6.6857 10.4205C6.73863 10.295 6.81665 10.1816 6.91497 10.0873C7.01329 9.99299 7.12985 9.91978 7.25748 9.87214C7.38511 9.82451 7.52113 9.80345 7.65719 9.81027C7.79325 9.81709 7.92648 9.85163 8.04871 9.91179C8.17095 9.97194 8.2796 10.0564 8.368 10.1601L10.612 12.5L14.8 8.30011C14.9886 8.11796 15.2412 8.01717 15.5034 8.01944C15.7656 8.02172 16.0164 8.12689 16.2018 8.31229C16.3872 8.4977 16.4924 8.74851 16.4947 9.0107C16.497 9.27289 16.3962 9.52549 16.214 9.71409L16.218 9.71709Z"
                                                fill="#FFB956" />
                                        </svg>
                                        <span>4 CPEs</span>
                                    </div>

                                    <div class="feature-box d-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M18.081 2.14021L11.816 0.05124C11.6109 -0.01708 11.3891 -0.01708 11.184 0.05124L4.919 2.14021C3.92291 2.47108 3.05642 3.10745 2.44265 3.95889C1.82887 4.81033 1.49904 5.83354 1.5 6.88314V12.0001C1.5 19.5629 10.7 23.7399 11.094 23.9139C11.2218 23.9707 11.3601 24 11.5 24C11.6399 24 11.7782 23.9707 11.906 23.9139C12.3 23.7399 21.5 19.5629 21.5 12.0001V6.88314C21.501 5.83354 21.1711 4.81033 20.5574 3.95889C19.9436 3.10745 19.0771 2.47108 18.081 2.14021ZM16.218 9.71709L11.946 13.989C11.7712 14.165 11.5631 14.3045 11.334 14.3994C11.1048 14.4944 10.8591 14.5428 10.611 14.542H10.578C10.3249 14.5381 10.0752 14.483 9.84402 14.3798C9.61284 14.2767 9.40498 14.1278 9.233 13.942L6.927 11.5421C6.82713 11.4494 6.74725 11.3373 6.69225 11.2127C6.63726 11.0881 6.60831 10.9535 6.60718 10.8173C6.60606 10.681 6.63278 10.546 6.6857 10.4205C6.73863 10.295 6.81665 10.1816 6.91497 10.0873C7.01329 9.99299 7.12985 9.91978 7.25748 9.87214C7.38511 9.82451 7.52113 9.80345 7.65719 9.81027C7.79325 9.81709 7.92648 9.85163 8.04871 9.91179C8.17095 9.97194 8.2796 10.0564 8.368 10.1601L10.612 12.5L14.8 8.30011C14.9886 8.11796 15.2412 8.01717 15.5034 8.01944C15.7656 8.02172 16.0164 8.12689 16.2018 8.31229C16.3872 8.4977 16.4924 8.74851 16.4947 9.0107C16.497 9.27289 16.3962 9.52549 16.214 9.71409L16.218 9.71709Z"
                                                fill="#FFB956" />
                                        </svg>
                                        <span>Hands-on Sessions</span>
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



            <section id="why-attend"
                style="background: #0A0017;background-image: url('assets/images/gradient-background.png');background-size: cover;background-position: center;background-size:contain;">
                <div class="container">
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-lg-8 mt-4 mt-lg-0">
                            <div class="item">
                                <div class="fs-24 text-white fw-600 f-general-sans" style="color:#FFB956;">
                                    Why Attend?
                                </div>
                                <p class="mt-3 text-white f-general-sans">
                                    Cyber threats are evolving rapidly. From UPI scams to deepfake frauds, criminals are
                                    targeting Indians with alarming precision. This FREE 4-hour intensive training is
                                    your shield against these threats.
                                </p>
                                <div class="learning-cards mt-4 d-flex flex-wrap gap-4">
                                    <div class="learning-card">
                                        <div>
                                            <h3 class="mt-0">What sets this training apart:</h3>
                                            <ul>
                                                <li><b>Hands-On Learning</b> - Identify, exploit, and fix coding flaws
                                                    across real-world use cases.</li>
                                                <li><b>OWASP Mastery</b> - Deep dive into the Top 10 vulnerabilities
                                                    that threaten modern applications.</li>
                                                <li><b>Secure Design Skills</b> - Learn to integrate security by design
                                                    principles into every stage of development.</li>
                                                <li><b>Compliance Awareness</b> - Understand GDPR and privacy-by-design
                                                    principles for secure data handling.</li>
                                                <li><b>Career Growth</b> - Gain hands-on experience, earn 8 CPEs, and
                                                    strengthen your application security profile.</li>
                                            </ul>
                                        </div>
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
                                    style="display: flex; gap:24px; align-items:start; flex-wrap: wrap;">
                                    <img src="assets/images/speakers/Sanyam.png" alt="Sanyam">
                                    <div class="trainer-profile col-md-9">
                                        <div class="trainer-title">
                                            <h3>Ashish Dhyani</h3>
                                            <p>10+ Years of Experience</p>
                                        </div>
                                        <div class="certificates">
                                            <p>Network+ | Security+ | Pentest+ | CEH | CND | ECSA | CCNA | ECDE |
                                                CPENT | LPT | OSCP</p>
                                            <p>Ashish Dhyani is an accomplished cybersecurity and network security
                                                professional, known for blending technical precision with practical
                                                application. He has delivered 30+ training programs annually,
                                                mentoring over 250 professionals worldwide in practical network
                                                defense, penetration testing, and exploit development. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="learning-card mt-4">
                                    <div>
                                        <h3>His specializations include:</h3>
                                        <ul>
                                            <li>Internal & external vulnerability assessment and penetration testing
                                                (manual + tools).</li>
                                            <li>Cyber Threat Intelligence and Digital Forensics operations.</li>
                                            <li>Secure application and infrastructure design aligned with global
                                                standards.</li>
                                            <li>OSINT-based threat analysis and mitigation.</li>
                                            <li>Advanced red teaming, exploit development, and VAPT reporting.</li>
                                        </ul>

                                        <p class="mt-2">Ashish's teaching style focuses on real-world threats,
                                            enabling participants to code, test, and defend with confidence.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <!-- <div class="my-4" id="key-takeaways">
                                <div class="fs-24 text-white fw-600 f-general-sans mt-5 mb-4" style="color:#21D6FF;">
                                    Key Takeaways
                                </div>

                                <div class="d-flex flex-wrap flex-md-nowrap gap-4 mt-3">
                                    <div class="rounded-4 w-100 p-3 d-flex flex-md-column align-items-center gap-3 rounded"
                                        style="background: linear-gradient(90deg, rgba(10, 0, 23, 0.15) 0.24%, rgba(108, 10, 226, 0.15) 71.84%, rgba(39, 56, 237, 0.15) 119.53%);border: 1px solid #2738ED;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M20.1072 16.8693H20.6812V7.90907C20.6812 7.45724 20.315 7.09103 19.8632 7.09103C18.5762 7.09103 16.9994 7.09103 16.9994 7.09103C16.548 7.09103 16.1814 6.72442 16.1814 6.27278C16.1814 5.82115 16.548 5.45454 16.9994 5.45454H19.8632C21.2187 5.45454 22.3177 6.55358 22.3177 7.90907V16.8693H23.1358C23.5878 16.8693 23.954 17.2355 23.954 17.6874V18.5455C23.954 19.1964 23.6954 19.8208 23.2351 20.2811C22.7748 20.7414 22.1504 21 21.4995 21H3.49946C2.84852 21 2.22428 20.7414 1.76381 20.2811C1.30353 19.8208 1.04492 19.1964 1.04492 18.5455V17.6874C1.04492 17.2355 1.41134 16.8693 1.86317 16.8693H2.68141V7.90907C2.68141 6.55358 3.78026 5.45454 5.13595 5.45454H7.99951C8.45114 5.45454 8.81775 5.82115 8.81775 6.27278C8.81775 6.72442 8.45114 7.09103 7.99951 7.09103C7.99951 7.09103 6.42271 7.09103 5.13595 7.09103C4.68392 7.09103 4.3177 7.45724 4.3177 7.90907V16.8693H4.89167L5.50334 14.1758C6.08438 11.6174 8.35846 9.80182 10.9819 9.80182H11.938C11.9484 9.80162 11.959 9.80162 11.9694 9.80182H13.0295C13.0401 9.80162 13.0506 9.80162 13.061 9.80182H14.017C16.6405 9.80182 18.9147 11.6174 19.4956 14.1758L20.1072 16.8693ZM13.3176 18.5056V19.3637H21.4995C21.7164 19.3637 21.9246 19.2775 22.0779 19.1239C22.2315 18.9706 22.3177 18.7624 22.3177 18.5455V18.5056H13.3176ZM11.6813 18.5056H2.68141V18.5455C2.68141 18.7624 2.76761 18.9706 2.92097 19.1239C3.07433 19.2775 3.28248 19.3637 3.49946 19.3637H11.6813V18.5056ZM10.9051 11.4389C9.07833 11.4738 7.50526 12.75 7.09918 14.5381L6.56979 16.8693H12.4055C12.2798 16.8548 12.1565 16.811 12.0467 16.7379L10.4103 15.6507C10.1218 15.4588 9.98533 15.1062 10.0696 14.7702L10.9051 11.4389ZM14.0938 11.4389L14.9294 14.7702C15.0138 15.1062 14.8773 15.4588 14.5887 15.6507L12.9524 16.7379C12.8424 16.811 12.7193 16.8548 12.5934 16.8693H18.4291L17.8999 14.5381C17.4939 12.75 15.9206 11.4738 14.0938 11.4389ZM11.7974 14.6076L12.4996 15.0742L13.2016 14.6076L12.4996 11.8084L11.7974 14.6076ZM12.4996 3C10.7185 3 9.26605 4.4629 9.26605 6.27278C9.26605 8.08266 10.7185 9.54556 12.4996 9.54556C14.2804 9.54556 15.7331 8.08266 15.7331 6.27278C15.7331 4.4629 14.2804 3 12.4996 3ZM12.4996 4.63649C13.3846 4.63649 14.0966 5.37324 14.0966 6.27278C14.0966 7.17232 13.3846 7.90907 12.4996 7.90907C11.6144 7.90907 10.9023 7.17232 10.9023 6.27278C10.9023 5.37324 11.6144 4.63649 12.4996 4.63649Z"
                                                fill="#21D6FF" />
                                        </svg>

                                        <div class="text-center fw-400 fs-14 f-general-sans text-white">
                                            Get Expert Career Guidance for the AI Era
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                            <div class="fs-24 text-white fw-600 f-general-sans my-4" style="color:#FFB956;"
                                id="masterclass-agenda">
                                Agenda
                            </div>

                            <div class="faq-wrapper">

                                <div class="faq-item active open">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600"> Module 1: India's Top Scams & Red Flags</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <ul>
                                            <li><b>Learning Outcomes:</b>
                                                <ul>
                                                    <li>Identify 5 major scams in India (UPI, QR, KYC, FASTag, parcel,
                                                        fake support).</li>
                                                    <li>Recognize at least 3 red flags that indicate a scam.</li>
                                                    <li>Apply quick phone hygiene measures to reduce risk.</li>
                                                </ul>
                                            </li>

                                            <li><b>Topics:</b>
                                                <ul>
                                                    <li>UPI & QR scams - collect requests, fake “receive money” QR.</li>
                                                    <li>KYC/FASTag fraud - fake SMS links for recharge/update.</li>
                                                    <li>Parcel/customs duty frauds - IVR calls demanding payment.</li>
                                                    <li>Fake support scams - remote access apps like AnyDesk.</li>
                                                    <li>Common red flags - urgency, shortened links, new channels.</li>
                                                    <li>Phone Hygiene quick wins:
                                                        <ul>
                                                            <li>Never install screen-share apps for bank help.</li>
                                                            <li>SIM in your own name, PIN the SIM.</li>
                                                            <li>Recognize SIM-swap signs (sudden “No Service”)</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><b>Activities:</b>
                                                <ul>
                                                    <li>“Spot the Fake” exercise with WhatsApp/FASTag screenshots.</li>
                                                    <li>Quick wins: SIM PIN setup demo, identifying SIM-swap signals.
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><b>Checklist Card:</b> Decline → Block → Screenshot → Report (Chakshu) →
                                                Inform family.</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ faq item /-->
                                <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">Module 2: Responding to Financial Fraud in
                                                    Minutes</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <ul>
                                            <li><b>Learning Outcomes:</b>
                                                <ul>
                                                    <li>Execute the correct freeze path within 15 minutes.</li>
                                                    <li>File a cyber complaint with the right details.</li>
                                                    <li>Escalate unresolved UPI disputes as per NPCI process.</li>
                                                </ul>
                                            </li>

                                            <li><b>Topics:</b>
                                                <ul>
                                                    <li>Emergency helplines: 1930 cyber helpline, cybercrime.gov.in
                                                        portal.</li>
                                                    <li>Integration with 112 (state-wise).</li>
                                                    <li>UPI dispute escalation: in-app → PSP bank → own bank → NPCI.
                                                    </li>
                                                    <li>Handling device/SIM risks: CEIR IMEI block via Sanchar Saathi.
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><b>Activities:</b>
                                                <ul>
                                                    <li>Role-play: Victim pays UPI collect request → group dials 1930,
                                                        files portal case, documents ref. numbers.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--/ faq item /-->
                                <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">Module 3: Securing Your Digital Accounts (Gmail &
                                                    Facebook)</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <ul>
                                            <li><b>Learning Outcomes:</b>
                                                <ul>
                                                    <li>Audit and secure Gmail account settings.</li>
                                                    <li>Apply phishing-resistant login to Gmail.</li>
                                                    <li>Enable Facebook protections to prevent hijack.</li>
                                                </ul>
                                            </li>

                                            <li><b>Topics:</b>
                                                <ul>
                                                    <li>Gmail: kill auto-forward/filters/delegates, disable POP/IMAP,
                                                        Enhanced Safe Browsing.</li>
                                                    <li>Facebook: Security Checkup, 2FA, login alerts, lock profile,
                                                        remove old connected apps.</li>
                                                    <li>Tracking Google Data</li>
                                                </ul>
                                            </li>

                                            <li><b>Activities:</b>
                                                <ul>
                                                    <li>Live audit of Gmail and Facebook accounts using a 6-step
                                                        checklist card.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--/ faq item /-->
                                <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">Module 4: Spotting Fakes (Emails, Domains,
                                                    Deepfakes)</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <ul>
                                            <li><b>Learning Outcomes:</b>
                                                <ul>
                                                    <li>Verify authenticity of suspicious emails.</li>
                                                    <li>Detect fake/malicious domains.</li>
                                                    <li>Recognize deepfake/morphed media.</li>
                                                    <li>Use Aadhaar safely with VID and biometrics lock.</li>
                                                </ul>
                                            </li>

                                            <li><b>Topics:</b>
                                                <ul>
                                                    <li>Email checks: headers (SPF/DKIM/DMARC), link hover, macro
                                                        alerts.</li>
                                                    <li>Domain tricks: hyphens, lookalikes, rn vs m, 0 vs O.</li>
                                                    <li>Deepfakes: lip sync errors, lighting mismatch, reverse image
                                                        tools.</li>
                                                    <li>Aadhaar safety: Virtual ID, biometric lock/unlock,
                                                        authentication history.</li>
                                                    <li>AI Tools Safety</li>
                                                </ul>
                                            </li>

                                            <li><b>Activities:</b>
                                                <ul>
                                                    <li>Drill: 10 email/domain comparisons (real vs fake).</li>
                                                    <li>Deepfake Challenge: teams vote real/fake, list red flags, pick
                                                        reporting route.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ faq item /-->
                                <!--/ faq item /-->
                                <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">Module 5: Drill Hour — Simulations & Role
                                                    Plays</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <ul>
                                            <li><b>Learning Outcomes:</b>
                                                <ul>
                                                    <li>Apply course knowledge in simulated scam scenarios.</li>
                                                    <li>Choose the correct reporting path under pressure.</li>
                                                    <li>Work as a team to spot and fix account compromise.</li>
                                                </ul>
                                            </li>

                                            <li><b>Activities:</b>
                                                <ul>
                                                    <li>WhatsApp Scam Deck: UPI, FASTag, parcel, job fraud scenarios.
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--/ faq item /-->
                                <div class="faq-item">
                                    <h3 class="faq-title">
                                        <span class="title d-flex align-items-center gap-3">
                                            <div
                                                class="d-flex flex-column flex-md-row gap-1 gap-md-3 fs-18 f-general-sans text-white">
                                                <strong class="fw-600">Module 6: Wrap-Up & Action Plan</strong>
                                            </div>
                                        </span>
                                        <span class="right-icon"></span>
                                    </h3>
                                    <div class="faq-content">
                                        <ul>
                                            <li><b>Learning Outcomes:</b>
                                                <ul>
                                                    <li>Commit to personal security changes.</li>
                                                    <li>Spread awareness within family and friends.</li>
                                                </ul>
                                            </li>

                                            <li><b>Activities:</b>
                                                <ul>
                                                    <li>Write a Personal Action Plan: 3 changes today + 2 family members
                                                        to brief tonight.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="fs-28 text-white fw-700 mt-5 mb-4 lineup-heading" style="color: var(--Soft-Orange, #FFB956);
font-family: Raleway;
font-style: normal;
line-height: normal;" id="experts">
                                Don't Be the Next Victim
                            </div>

                            <div class="g-3 mb-3">

                                <div class="col instructor-profile" style="display: flex; gap:24px; align-items:start;">
                                    <!-- <img src="assets/images/speakers/Ashish-Dhyani.png" alt="Ashish"> -->
                                    <div class="trainer-profile">
                                        <div class="certificates">

                                            <p>Thousands of Indians lose money to cyber frauds daily. This exclusive
                                                training is our gift to the cyber warriors we met at DIDAC India 2025.
                                                Transform from a potential victim into a cyber-aware defender.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="p-3 mt-5 text-md-start text-center rounded-4 d-flex align-items-center justify-content-between flex-column flex-md-row gap-3"
                                style="border-radius: 16px;
background: linear-gradient(90deg, rgba(255, 204, 0, 0.20) 0%, rgba(255, 138, 0, 0.20) 100%);">
                                <div>
                                    <div class="secure-spot"
                                        style="display:flex; flex-direction:column; gap:8px; color:#FFF;">
                                        <p>🔒 Limited Seats Available!</p>
                                        <h3 style="color: #FFF;">Secure Your Spot
                                            Now!</h3>
                                        <p>Claim the early-bird offer before it expires!</p>
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
                                <div class="d-flex flex-column gap-3 rounded-4" style="border-radius: 0 0 16px 16px;border: 1px solid rgba(255, 185, 86, 0.20);
background: linear-gradient(90deg, rgba(255, 204, 0, 0.10) 0%, rgba(255, 138, 0, 0.10) 100%);">
                                    <div class="fs-28 text-center f-general-sans p-3">
                                        <span class="fs-16 text-white">Interested in Joining this</span>
                                        <div class="fs-28 f-general-sans" style="color:#FFB956;font-weight: 600;">
                                            Awareness Program?
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
                                            Our Advisor will Contact You with Event Details, Payment Options, and
                                            Exclusive
                                            Offers!
                                        </div>
                                        <div class="d-flex gap-3 align-items-center pb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_30784_92)">
                                                    <path
                                                        d="M10.692 12.0676C11.9187 12.7289 12.882 13.8209 13.3007 15.1689C13.3317 15.2687 13.3388 15.3744 13.3215 15.4775C13.3042 15.5805 13.2629 15.6781 13.2009 15.7622C13.1389 15.8464 13.0581 15.9148 12.9648 15.9619C12.8715 16.0091 12.7685 16.0336 12.664 16.0336H3.33132C3.22672 16.0339 3.12352 16.0095 3.0301 15.9625C2.93668 15.9154 2.85568 15.847 2.79366 15.7628C2.73164 15.6785 2.69035 15.5809 2.67315 15.4777C2.65594 15.3745 2.66331 15.2687 2.69465 15.1689C3.11465 13.8183 4.08065 12.7249 5.31065 12.0636C5.46321 11.9806 5.63978 11.9528 5.81048 11.985C5.98117 12.0172 6.13549 12.1074 6.24732 12.2403L7.54665 13.7989C7.60233 13.8658 7.67205 13.9196 7.75085 13.9566C7.82966 13.9935 7.91562 14.0127 8.00265 14.0127C8.08968 14.0127 8.17565 13.9935 8.25445 13.9566C8.33325 13.9196 8.40297 13.8658 8.45865 13.7989L9.75465 12.2436C9.8666 12.1106 10.0211 12.0205 10.1919 11.9884C10.3628 11.9563 10.5394 11.9843 10.692 12.0676ZM13.7733 1.76694L9.46398 0.246271C8.53595 -0.0807128 7.52426 -0.0821235 6.59532 0.242271L2.23332 1.76894C1.96984 1.85851 1.7413 2.02888 1.5802 2.2558C1.41911 2.48272 1.33365 2.75466 1.33598 3.03294C1.33598 3.61094 1.68865 4.10694 2.23398 4.29694L6.57198 5.81027C7.49488 6.13119 8.49909 6.13119 9.42198 5.81027L13.3313 4.44694V7.36627C13.3313 7.54308 13.4016 7.71265 13.5266 7.83768C13.6516 7.9627 13.8212 8.03294 13.998 8.03294C14.1748 8.03294 14.3444 7.9627 14.4694 7.83768C14.5944 7.71265 14.6647 7.54308 14.6647 7.36627L14.6673 3.0316C14.6699 2.75366 14.585 2.48193 14.4247 2.25485C14.2644 2.02778 14.0368 1.85686 13.774 1.76627L13.7733 1.76694ZM11.9973 6.32427L9.86065 7.06961C8.65314 7.48762 7.34016 7.48762 6.13265 7.06961L3.99732 6.32427V6.69961C3.99732 8.90561 5.79132 10.6996 7.99732 10.6996C10.2033 10.6996 11.9973 8.90561 11.9973 6.69961V6.32361V6.32427Z"
                                                        fill="#FFB956" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_30784_92">
                                                        <rect width="16" height="16" fill="white" />
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
                                <li><a href="#why-attend">Why Attend</a></li>
                                <li><a href="#masterclass-agenda">Agenda</a></li>
                                <li><a href="#experts">Speaker</a></li>

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