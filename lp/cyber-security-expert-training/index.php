<?php include('include/comman_use.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Expert Training Program </title>
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" href="assets/img/favicon.ico">
    <!--css start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" defer>
    <link rel="stylesheet" href="https://www.infosectrain.com/pages/lp/cyber-security-expert-training/assets/css/style.min.css" media="all" defer>
    <!--css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" defer/>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .is-invalid {
            border: 1px solid red !important;
        }
        .name-valid,
        .email-valid,
        .model-name,
        .model-email {
            font-size: 12px;
            color: red;
        }
        .hide {
            display: none;
        }
        .alert-danger {
            font-size: 13px;
            margin-bottom: 8px;
        }
    </style>

    <!-- Google Tag Manager -->
    <script>

        (function(w, d, s, l, i) {

            w[l] = w[l] || [];

            w[l].push({

                'gtm.start': new Date().getTime(),

                event: 'gtm.js'

            });

            var f = d.getElementsByTagName(s)[0],



                j = d.createElement(s),

                dl = l != 'dataLayer' ? '&l=' + l : '';

            j.async = true;

            j.src =



                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;

            f.parentNode.insertBefore(j, f);



        })(window, document, 'script', 'dataLayer', 'GTM-5XZDRWG');

    </script>
    <!-- End Google Tag Manager -->
    <!--<![google analytis start]-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119312961-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119312961-1');
        </script>
    <!--<![google analytis end]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XZDRWG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php

    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')

        $pag_url = "https://";

    else

        $pag_url = "http://";

    // Append the host(domain name, ip) to the URL.

    $pag_url .= $_SERVER['HTTP_HOST'];



    // Append the requested resource location to the URL

    $pag_url .= $_SERVER['REQUEST_URI'];

    ?>

    <!--/ navbar start /-->

    <nav class="navbar navbar-expand-lg py-3">

        <div class="container">

            <a class="navbar-brand" href="https://www.infosectrain.com/">

                <img src="assets/img/logo.png" alt="">

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background: #010101;
    border: 1px solid #010101;">

                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />

                </svg>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="#">Home</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#course-overview">Course Overview</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#advisor">Advisor</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#course-benefits">Benefits</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#tools-sec">Tools</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#review">Review</a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!--/ navbar end /-->

    <!--/ main content start /-->

    <main>

        <!--/ banner sec start /-->

        <section class="banner-sec">

            <div class="container">

                <div class="row justify-content-between align-items-center justify-content-between">

                    <div class="col-lg-6 col-md-7">

                        <div class="item">

                            <!-- <span>60 Hours</span> -->

                            <h1>

                                Cybersecurity Expert Training Program 

                            </h1>

                            <p>

                                Looking for a practice-based Cybersecurity course<br>

                                that covers both Offensive and Defensive Security? <br>

                                <strong>You're at the right place.</strong>

                            </p>

                            <div class="d-flex">

                                <div class="training-calimg">

                                    <img src="assets/img/icon/schedule.svg" alt="">

                                </div>

                                <div class="training-time">

                                    <div class="ribban">

                                        Next Batch Begins

                                    </div>

                                    <div class="training-time-date">

                                        <span>

                                            Saturday, <br>

                                            14th October

                                        </span>

                                        2023, 7 PM IST

                                    </div>

                                </div>

                            </div>

                            <button class="linkBtn" data-title="Register for Free Demo" data-bs-toggle="modal" data-bs-target="#myModal">

                                Register for Free Demo

                            </button>

                        </div>

                    </div>

                    <div class="col-lg-5 col-md-5">

                        <div class="item">

                            <img src="assets/img/man.webp" alt="man" class="img-fluid" loading="lazy">

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--/ banner sec start /-->



        <!--/ review sec start /-->

        <section class="review-sec pb-md-5 p-0">

            <div class="container">

                <div class="row ratingrow">

                    <!-- <img src="assests/images/rating.jpg" alt="google rating" width="100%"> -->

                    <div class="col-md-4 col-6">

                        <div class="d-flex review-item">

                            <div class="flex-shrink-0" style="flex-shrink: 0 !important;">

                                <img src="assets/img/google-review.png" alt="google" loading="lazy">

                            </div>

                            <div class="flex-grow-1 ms-2" style="flex-grow: 1 !important;">

                                <h4>Google</h4>

                                <div class="star">

                                    <span class="fa-star">★</span>

                                    <span class="fa-star">★</span>

                                    <span class="fa-star">★</span>

                                    <span class="fa-star">★</span>

                                    <span class="fa-star">★</span>

                                </div>

                                <small>(4.9/5) reviews</small>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="d-flex review-item">

                            <div class="flex-shrink-0" style="flex-shrink: 0 !important;">

                                <img src="assets/img/trustpilot.png" alt="trustpoint" loading="lazy">

                            </div>

                            <div class="flex-grow-1 ms-2" style="flex-grow: 1 !important;">

                                <h4>Trustpilot</h4>

                                <div class="star">

                                    <span class="fa-star">★</span>

                                    <span class="fa-star">★</span>

                                    <span class="fa-star">★</span>

                                    <span class="fa-star">★</span>

                                    <span class="fa-star">☆</span>

                                </div>

                                <small>(4.9/5) reviews</small>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="d-flex review-item">

                            <div class="flex-shrink-0" style="flex-shrink: 0 !important;">

                                <img src="assets/img/glassdoor.svg" alt="glassdoor" loading="lazy">

                            </div>

                            <div class="flex-grow-1 ms-2" style="flex-grow: 1 !important;">

                                <h4>Glassdoor</h4>

                                <div class="star">

                                    <span class="fa fa-star">★</span>

                                    <span class="fa fa-star">★</span>

                                    <span class="fa fa-star">★</span>

                                    <span class="fa fa-star">★</span>

                                    <span class="fa fa-star">☆</span>

                                </div>

                                <small>(4.9/5) reviews</small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--/ review sec start /-->



        <!--/ course highlights sec start /-->

        <section class="highlights">

            <div class="container">

                <!--/ row start /-->

                <div class="row">

                    <div class="col-12">

                        <h2>Course Highlights</h2>

                    </div>

                </div>

                <!--/ row start /-->



                <!--/ row start /-->

                <div class="row">

                    <!--/ highlight item /-->

                    <div class="col-md-4 mt-4 mt-md-0">

                        <div class="card">

                            <div class="card-body d-flex align-items-center">

                                <img src="assets/img/video.svg" alt="SOC | Penetration Testing" loading="lazy">

                                <span>

                                    Hands-on SOC Expert + Hands-on Penetration Testing

                                </span>

                            </div>

                        </div>

                    </div>

                    <!--/ highlight item /-->

                    <div class="col-md-4 mt-4 mt-md-0">

                        <div class="card">

                            <div class="card-body d-flex align-items-center">

                                <img src="assets/img/working-time.svg" alt="Instructor" loading="lazy">

                                <span>

                                    60-Hour LIVE Instructor-led Training

                                </span>

                            </div>

                        </div>

                    </div>

                    <!--/ highlight item /-->

                    <div class="col-md-4 mt-4 mt-md-0">

                        <div class="card">

                            <div class="card-body d-flex align-items-center">

                                <img src="assets/img/training.svg" alt="Weekend Batch" loading="lazy">

                                <span>

                                    Weekend Batch

                                </span>

                            </div>

                        </div>

                    </div>

                    <!--/ highlight item /-->

                    <div class="col-md-4 mt-4">

                        <div class="card">

                            <div class="card-body d-flex align-items-center">

                                <img src="assets/img/certificate.svg" alt="Weekend Batch" loading="lazy">

                                <span>

                                    Certificate of Completion

                                </span>

                            </div>

                        </div>

                    </div>

                    <!--/ highlight item /-->

                    <div class="col-md-4 mt-4">

                        <div class="card">

                            <div class="card-body d-flex align-items-center">

                                <img src="assets/img/online-training.svg" alt="Weekend Batch" loading="lazy">

                                <span>

                                    Practical Scenario-based Learning

                                </span>

                            </div>

                        </div>

                    </div>

                    <!--/ highlight item /-->

                    <div class="col-md-4 mt-4">

                        <div class="card">

                            <div class="card-body d-flex align-items-center">

                                <img src="assets/img/batch-processing.png" alt="Weekend Batch" loading="lazy">

                                <span>

                                    Earn CPEs

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

                <!--/ row END /-->

            </div>

        </section>

        <!--/ course highlights sec end /-->



        <!--/ Course Benefits sec start /-->

        <section class="course-benifits" id="course-benefits">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <h2>Course Benefits</h2>

                    </div>

                </div>

                <div class="row">

                    <div class="col-12">

                        <picture>

                            <source media="(min-width:768px)" srcset="assets/img/info-[Recovered].webp" class="w-100" alt="cyber security benifits" loading="lazy">

                            <img src="assets/img/benifits-two.webp" class="w-100 d-block mx-auto" alt="cyber security benifits" loading="lazy">

                        </picture>

                    </div>

                </div>

            </div>

        </section>

        <!--/ Course Benefits sec end /-->



        <!--/ future sec start /-->

        <section class="cybersecurity-future">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <h2 class="text-white">High Demand of Cybersecurity Skills at Present & in Future </h2>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 px-lg-5 mt-4">

                        <div class="item">

                            <img src="assets/img/icon/security.svg" alt="security" loading="lazy">

                            <span>3.4 M</span>

                            <p>Shortage of cybersecurity professionals</p>

                        </div>

                    </div>

                    <div class="col-md-4 px-lg-5 mt-4">

                        <div class="item">

                            <img src="assets/img/icon/employment.svg" alt="employment" loading="lazy">

                            <span>31%</span>

                            <p>Employment in the cybersecurity field to grow by 2029</p>

                        </div>

                    </div>

                    <div class="col-md-4 px-lg-5 mt-4">

                        <div class="item">

                            <img src="assets/img/icon/package.svg" alt="package" loading="lazy">

                            <span>40%</span>

                            <p>Increase in salary packages in the last 2 years</p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--/ future sec end /-->



        <!--/ about sec start /-->

        <section class="about-sec py-md-2">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-xl-7 col-lg-6 col-md-6">

                        <div class="item">

                            <h2 class="mb-3">About Cybersecurity Expert Training</h2>

                            <p>

                                The <strong>Cyber Security Expert training course</strong> offered by InfosecTrain is a comprehensive program that integrates <strong>SOC and Penetration Testing</strong> domains. It provides a comprehensive introduction to the fundamentals of Ethical Hacking and Penetration Testing. Throughout the course, participants will gain theoretical knowledge and practical skills by engaging in hands-on activities and using various tools and techniques.

                            </p>

                            <button class="linkBtn" data-title="Get a Call Back" data-bs-toggle="modal" data-bs-target="#myModal">

                                Get a Call Back

                            </button>

                        </div>

                    </div>

                    <div class="col-xl-4 col-lg-5 col-md-6 mt-4 mt-md-0">

                        <div class="item">

                            <img src="assets/img/cyber-security.svg" alt="Cybersecurity" class="img-fluid" loading="lazy">

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--/ about sec end /-->



        <!--/ tools covered start-->

        <section class="tools-sec" id="tools-sec">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <h2>Tools Covered</h2>

                        <img src="assets/img/tool.webp" alt="Cybersecurity Tools" loading="lazy" class="img-fluid d-block mx-auto">

                    </div>

                </div>

            </div>

        </section>

        <!--/ tools covered start-->



        <!--/ course description start /-->

        <section class="course-description" id="course-overview">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <h2>Cybersecurity Course Description</h2>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-7 col-md-7 pe-lg-4 my-4 my-md-0">

                        <div class="faq-wrapper">

                            <div class="faq-item active open">

                                <h3 class="faq-title"><span class="title">Overview</span><span class="right-icon"></span></h3>

                                <div class="faq-content">

                                    <p>

                                        The Cyber Security Expert training course offered by InfosecTrain is a

                                        comprehensive program that integrates SOC and Penetration Testing domains. It

                                        provides a comprehensive introduction to the fundamentals of Ethical Hacking and

                                        Penetration Testing. Throughout the course, participants will gain theoretical

                                        knowledge and practical skills by engaging in hands-on activities and using

                                        various tools and techniques. They will learn about different types of hackers,

                                        the importance of security, and the CIA Triad. The course also focuses on

                                        understanding network protocols, OSI model, IP addressing, operating systems,

                                        information gathering, blue team operations, threat intelligence, incident

                                        response, and so much more.

                                    </p>

                                </div>

                            </div>

                            <div class="faq-item">

                                <h3 class="faq-title"><span class="title">Why Cyber Security Expert Training Course with

                                        InfosecTrain?</span><span class="right-icon"></span></h3>

                                <div class="faq-content">

                                    <p>InfosecTrain is a leading IT security training and consulting organization

                                        offering best-in-class yet cost-effective, customized training programs to

                                        enterprises and individuals across the globe. We offer role-specific

                                        certification training programs and prepare professionals for the future. Our

                                        <strong> Cyber Security Expert training </strong> course will equip you with a

                                        comprehensive overview of essential topics in the field of cyber security.

                                    </p>

                                    <ul>

                                        <li><strong>Flexible Schedule:</strong> Training sessions to match your schedule

                                            and accommodate your needs.</li>

                                        <li><strong>Post Training Support with No Expiry Date:</strong> Ongoing

                                            assistance and support until the learners achieve their certification goals.

                                        </li>

                                        <li><strong>Recorded Sessions:</strong> Access to LMS or recorded sessions for

                                            post-training reference.</li>

                                        <li><strong>Customized Training:</strong> A training program that caters to your

                                            specific learning needs.</li>

                                        <li><strong>Knowledge Sharing Community:</strong> Collaborative group

                                            discussions to facilitate knowledge sharing and learning.</li>

                                        <li><strong>Certificate:</strong> Each candidate receives a certificate of

                                            participation as a testament to their accomplishment.</li>

                                        <li><strong>Expert Career Guidance:</strong> Free Career Guidance and support

                                            from industry experts.</li>

                                    </ul>

                                </div>

                            </div>

                            <div class="faq-item ">

                                <h3 class="faq-title"><span class="title">Target Audience</span><span class="right-icon"></span></h3>

                                <div class="faq-content">

                                    <ul>

                                        <li>System Administrators</li>

                                        <li>Network Administrators</li>

                                        <li>Penetration Testers</li>

                                        <li>IT Security Professionals</li>

                                        <li>Security Consultants</li>

                                        <li>SOC Analysts (L1 &amp; L2)</li>

                                        <li>Cyber Security Analysts</li>

                                    </ul>



                                </div>

                            </div>

                            <div class="faq-item">

                                <h3 class="faq-title"><span class="title">Pre-Requisites</span><span class="right-icon"></span></h3>

                                <div class="faq-content">

                                    <ul>

                                        <li>Prior knowledge of networking fundamentals, OS basics, and troubleshooting

                                        </li>

                                        <li>A basic understanding of <strong> Penetration Testing </strong> and Security

                                            Assessments</li>

                                        <li>Understanding of different Operating Systems like Windows, Linux, etc.</li>

                                    </ul>

                                </div>

                            </div>

                            <div class="faq-item">

                                <h3 class="faq-title"><span class="title">Course Objectives</span><span class="right-icon"></span></h3>

                                <div class="faq-content">

                                    <p>You will be able to:</p>

                                    <ul>

                                        <li>Understand cybersecurity concepts and terminologies</li>

                                        <li>Gain knowledge of types of hackers, types of attacks, and ethical hacking

                                            phases</li>

                                        <li>Acquire an understanding of operating systems, network fundamentals, and

                                            protocols</li>

                                        <li>Understand the concept of penetration testing and the difference between

                                            ethical and malicious hacking</li>

                                        <li>Learn information-gathering, footprinting techniques, scanning concepts, and

                                            vulnerability assessment techniques</li>

                                        <li>Understand the functions and role of a <strong> Security Operations Center

                                                (SOC) </strong> and knowledge of SIEM systems, specifically Splunk</li>

                                        <li>Learn enumeration techniques for system vulnerability identification and

                                            understand vulnerability analysis and classification</li>

                                        <li>Explore system hacking techniques, privilege escalation, and threat

                                            intelligence and its collection and utilization</li>

                                        <li>Understand social engineering techniques with a focus on phishing attacks

                                            and basic knowledge of incident response and digital forensics</li>

                                        <li>Develop an understanding of web application threats, including OWASP Top 10

                                            vulnerabilities, and explore mobile platform security and vulnerabilities

                                        </li>

                                        <li>Understand cloud computing and set up an AWS environment for penetration

                                            testing</li>

                                        <li>Gain knowledge of cryptography and encryption algorithms</li>

                                    </ul>

                                </div>

                            </div>

                            <div class="faq-item">

                                <h3 class="faq-title"><span class="title">Course Content</span><span class="right-icon"></span></h3>

                                <div class="faq-content">

                                    <p><strong>Module 1: Security Terminologies, OS Basics, and Network Fundamentals

                                            <span style="color: #ff1046;"> (Theory) </span></strong></p>

                                    <ul>

                                        <li>Why do we need Security?</li>

                                        <li>Information Security vs. Cybersecurity</li>

                                        <li>CIA Triad</li>

                                        <li>Authentication, Authorization, and Accounting (AAA)</li>

                                        <li>Hacking Concepts</li>

                                        <li>Types of Hackers

                                            <ul>

                                                <li>Black Hat</li>

                                                <li>White Hat</li>

                                                <li>Gray Hat</li>

                                                <li>Suicide Hacker</li>

                                                <li>Script Kiddies</li>

                                                <li>Hacktivist</li>

                                            </ul>

                                        </li>

                                        <li>Domains of Cybersecurity

                                            <ul>

                                                <li>Offensive Security</li>

                                                <li>Defensive Security</li>

                                            </ul>

                                        </li>

                                        <li>Ethical Hacking Phases</li>

                                        <li>Types of Attacks

                                            <ul>

                                                <li>Phishing</li>

                                                <li>Vishing</li>

                                                <li>Smishing</li>

                                                <li>DoS</li>

                                                <li>Malware</li>

                                                <li>Man in the Middle Attack</li>

                                                <li>Insider Threat</li>

                                            </ul>

                                        </li>

                                        <li>Network Fundamentals

                                            <ul>

                                                <li>OSI Model</li>

                                                <li>TCP/IP</li>

                                                <li>Network Protocols</li>

                                                <li>IP Addressing</li>

                                            </ul>

                                        </li>

                                    </ul>

                                    <p><strong>Module 2: Introduction to Pen-Testing <span style="color: #ff1046;">

                                                (Theory) </span></strong></p>

                                    <ul>

                                        <li>What is Penetration Testing?</li>

                                        <li>Difference between Ethical Hacking and Malicious Activities

                                            <ul>

                                                <li>White-Hat Hacker vs. Black-Hat Hacker</li>

                                            </ul>

                                        </li>

                                        <li>Need for Penetration Testing</li>

                                        <li>Vulnerability Assessment vs. Penetration Testing</li>

                                        <li>Overview of Penetration Testing Process</li>

                                        <li>Types of Penetration Testing

                                            <ul>

                                                <li>Web Application Penetration Testing</li>

                                                <li>Mobile Application Penetration Testing</li>

                                                <li>Cloud Penetration Testing</li>

                                            </ul>

                                        </li>

                                        <li>Various Methodologies of Penetration Testing

                                            <ul>

                                                <li>Black box testing</li>

                                                <li>Gray box testing</li>

                                                <li>White box testing</li>

                                            </ul>

                                        </li>

                                        <li>Importance of Reporting in Penetration Testing Process</li>

                                    </ul>

                                    <p><strong>Module 3: Windows Operating System Fundamentals <span style="color: #ff1046;"> [Practical] </span> </strong></p>

                                    <ul>

                                        <li>Investigating Windows Operating System

                                            <ul>

                                                <li>Reliability Monitor</li>

                                                <li>Task manager cli view</li>

                                                <li>Temp and Prefetch</li>

                                            </ul>

                                        </li>

                                        <li>Understanding Windows Event Logs

                                            <ul>

                                                <li>Event Viewer</li>

                                            </ul>

                                        </li>

                                        <li>Understanding Windows Registry</li>

                                        <li>Scheduled Tasks</li>

                                        <li>File Analysis</li>

                                        <li>SysInternals Suite</li>

                                        <li>Command Prompt</li>

                                    </ul>

                                    <p><strong>Module 4: Linux Operating System Fundamentals <span style="color: #ff1046;"> [Practical] </span></strong></p>

                                    <ul>

                                        <li>Linux Directory Services</li>

                                        <li>The most useful Linux Commands in SOC</li>

                                        <li>Events Logs in Linux</li>

                                        <li>Linux System Services</li>

                                    </ul>

                                    <p><strong>Module 5: Information Gathering/Footprinting</strong></p>

                                    <ul>

                                        <li>Footprinting Concepts</li>

                                        <li>Footprinting through a Search Engine <span style="color: #ff1046;">

                                                [Practical] </span>

                                            <ul>

                                                <li>Using Google Dorks</li>

                                                <li>Understanding Title, Text, and URL in Dorks</li>

                                                <li>Shodan</li>

                                                <li>Censys</li>

                                            </ul>

                                        </li>

                                        <li>Footprinting Through Tools <span style="color: #ff1046;"> [Practical]

                                            </span>

                                            <ul>

                                                <li>Spiderfoot</li>

                                                <li>Netcraft</li>

                                                <li>Harvester</li>

                                                <li>MxToolbox</li>

                                                <li>Eagle OSINT</li>

                                            </ul>

                                        </li>

                                        <li>Different Techniques for Website Footprinting

                                            <ul>

                                                <li>Wappliyzer</li>

                                                <li>Whois</li>

                                                <li>Netcraft</li>

                                                <li>crt.sh</li>

                                                <li>DNS Dumpster</li>

                                            </ul>

                                        </li>

                                    </ul>

                                    <p><strong>Module 6: Scanning</strong></p>

                                    <ul>

                                        <li>Scanning Concepts

                                            <ul>

                                                <li>Steps of Scanning</li>

                                                <li>Installation of Nessus</li>

                                                <li>Working with Nessus</li>

                                                <li>Working of Nmap</li>

                                            </ul>

                                        </li>

                                        <li>Scanning Technique for Port and Service Discovery

                                            <ul>

                                                <li>Various Switches of Nmap</li>

                                            </ul>

                                        </li>

                                    </ul>

                                    <p><strong>Module 7: Blue Team Operations Architecture </strong></p>

                                    <ul>

                                        <li>What is SOC?</li>

                                        <li>Why do we need SOC?</li>

                                        <li>Functions of SOC</li>

                                        <li>Security Operation Center Models &amp; Types</li>

                                        <li>Security Operation Center SOC Teams &amp; Roles</li>

                                        <li>Incidents vs. Events</li>

                                        <li>True vs. False Incident Categories</li>

                                        <li>Concept of Logging</li>

                                        <li>Log Management &amp; Log Analysis</li>

                                    </ul>

                                    <p><strong>Module 8: SIEM – Nervous System of SOC</strong></p>

                                    <ul>

                                        <li>Why do we Need SIEM?</li>

                                        <li>What is SIEM?</li>

                                        <li>SIEM Guidelines and Architecture</li>

                                        <li>SIEM Capabilities: Aggregation, Correlation, Reporting, Storage, Alerts,

                                            etc.</li>

                                        <li>Using Splunk <span style="color: #ff1046;"> [Practical] </span>

                                            <ul>

                                                <li>Splunk setup</li>

                                                <li>Working on Splunk</li>

                                                <li>Adding Logs and Analyzing</li>

                                            </ul>

                                        </li>

                                    </ul>

                                    <p><strong>Module 9: Enumeration</strong></p>

                                    <ul>

                                        <li>Enumeration Concepts</li>

                                        <li>Different Techniques for Enumeration <span style="color: #ff1046;">

                                                [Practical] </span></li>

                                    </ul>

                                    <p><strong>Module 10: Vulnerability Analysis</strong></p>

                                    <ul>

                                        <li>Vulnerability Assessment Concepts</li>

                                        <li>Vulnerability Classification and Assessment Types</li>

                                    </ul>

                                    <p><strong>Module 11: System Hacking</strong></p>

                                    <ul>

                                        <li>Password Cracking and Gaining Access Techniques <span style="color: #ff1046;"> [Practical] </span></li>

                                        <li>Privilege Escalation Technique <span style="color: #ff1046;"> [Practical]

                                            </span></li>

                                    </ul>

                                    <p><strong>Module 12: Importance of Threat Intelligence</strong></p>

                                    <ul>

                                        <li>What is a Threat?</li>

                                        <li>Why do we need Intelligence?</li>

                                        <li>Introduction to Threat Intelligence</li>

                                        <li>Threats, Threat Actors, APTs &amp; Global Campaigns</li>

                                        <li>Indicator of Compromise vs. Indicator of Attack Precursors</li>

                                        <li>Collecting Threat Intelligence <span style="color: #ff1046;"> [Practical]

                                            </span></li>

                                        <li>Types of Threat Intelligence</li>

                                        <li>Enhanced Detection with Threat Intelligence</li>

                                    </ul>

                                    <p><strong>Module 13: Social Engineering</strong></p>

                                    <ul>

                                        <li>Social Engineering Concepts and Phases</li>

                                        <li>Social Engineering Techniques</li>

                                        <li>Phishing Email Attack <span style="color: #ff1046;"> [Practical] </span>

                                        </li>

                                    </ul>

                                    <p><strong>Module 14: Basics of Incident Response &amp; Forensics</strong></p>

                                    <ul>

                                        <li>Forensics Fundamentals</li>

                                        <li>Email Forensics</li>

                                        <li>Analyzing Phishing Emails <span style="color: #ff1046;"> [Practical] </span>

                                        </li>

                                        <li>Incident Response</li>

                                        <li>Lockheed Martin Cyber Kill Chain</li>

                                        <li>MITRE ATT&amp;CK Framework <span style="color: #ff1046;"> [Practical]

                                            </span></li>

                                    </ul>

                                    <p><strong>Module 15: Web Application Threats and Concepts</strong></p>

                                    <ul>

                                        <li>What is a Web Application?</li>

                                        <li>How Web Application Works</li>

                                        <li>Understanding HTTP Headers and Status Codes</li>

                                        <li>OWASP Top 10

                                            <ul>

                                                <li>Broken Access Control <span style="color: #ff1046;">[Practical]</span></li>

                                                <li>Cryptographic Failure</li>

                                                <li>Injection <span style="color: #ff1046;"> [Practical] </span></li>

                                                <li>Insecure Design</li>

                                                <li>Security Misconfiguration <span style="color: #ff1046;"> [Practical]

                                                    </span></li>

                                                <li>Vulnerable and Outdated Components</li>

                                                <li>Identification and Authentication Failures</li>

                                                <li>Software and Data Integrity Failures</li>

                                                <li>Security Logging and Monitoring Failures</li>

                                                <li>Server-Side Request Forgery <span style="color: #ff1046;">

                                                        [Practical] </span></li>

                                            </ul>

                                        </li>

                                    </ul>

                                    <p><strong>Module 16: Mobile Platform</strong></p>

                                    <ul>

                                        <li>Evolution of Mobile Applications</li>

                                        <li>Mobile Application Security</li>

                                        <li>OWASP Top 10 Mobile

                                            <ul>

                                                <li>M1: Improper Platform Usage</li>

                                                <li>M2: Insecure Data Storage</li>

                                                <li>M3: Insecure Communication</li>

                                                <li>M4: Insecure Authentication</li>

                                                <li>M5: Insufficient Cryptography</li>

                                                <li>M6: Insecure Authorization</li>

                                                <li>M7: Client Code Quality</li>

                                                <li>M8: Code Tampering</li>

                                                <li>M9: Reverse Engineering</li>

                                                <li>M10: Extraneous Functionality</li>

                                            </ul>

                                        </li>

                                        <li>History of Android and iOS</li>

                                        <li>Understanding Android and iOS Architecture</li>

                                        <li>Exploiting Android <span style="color: #ff1046;"> [Practical] </span></li>

                                    </ul>

                                    <p><strong>Module 17: Cloud Pentesting</strong></p>

                                    <ul>

                                        <li>What is a Cloud?</li>

                                        <li>Advantages and Disadvantages of Cloud</li>

                                        <li>Top Cloud Service Providers</li>

                                        <li>Cloud Service Models</li>

                                        <li>Cloud Deployment Models</li>

                                        <li>Understanding Virtualization and Hypervisor</li>

                                        <li>Building and Setting up an AWS Testing Environment <span style="color: #ff1046;"> [Practical] </span></li>

                                        <li>Testing IAM Privileges <span style="color: #ff1046;"> [Practical] </span>

                                        </li>

                                    </ul>

                                    <p><strong>Module 18: Cryptography </strong></p>

                                    <ul>

                                        <li>Introduction and History of Cryptography</li>

                                        <li>Different Encryption Algorithms

                                            <ul>

                                                <li>Symmetric Encryption</li>

                                                <li>Asymmetric Encryption</li>

                                            </ul>

                                        </li>

                                        <li>Application of cryptography

                                            <ul>

                                                <li>PKI (Public Key Infrastructure)</li>

                                                <li>Digital Certificate</li>

                                                <li>Digital Signature</li>

                                                <li>Steganography <span style="color: #ff1046;"> [Practical] </span>

                                                </li>

                                            </ul>

                                        </li>

                                        <li>Cryptanalysis <span style="color: #ff1046;"> [Practical] </span></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-5 ps-lg-4">

                        <div class="form-item card" id="free_demo">

                            <div class="card-header">

                            Wish to learn more? Register for the next free demo.

                            </div>

                            <div class="card-body">

                                <div class="hide rows  mt-2" id="demo_form_output"> </div>

                                <form class="enquiry_form" method="post" action="" onSubmit="return val_demo_request(this.form);" id="demo_me_phone_f">

                                    <div class="form-input">

                                        <input type="text" name="me_name" id="me_name" placeholder="Name">

                                        <span class="name-valid"></span>

                                    </div>

                                    <div class="form-input">

                                        <input type="email" name="me_email" id="me_email" placeholder="Email">

                                        <span class="email-valid"></span>

                                    </div>

                                    <div class="form-input">

                                        <input type="text" name="me_phone" id="me_phone" placeholder="Mobile">

                                    </div>

                                    <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.html" id="me_redirect">

                                    <input type="hidden" value="Cyber Security Expert Training" id="me_others" name="me_others">

                                    <input type="hidden" value="<?php echo $pag_url; ?>" id="me_pageurl" name="me_pageurl">



                                    <div class="form-input">

                                        <input type="submit" name="me_submited" id="me_submited" value="Request a Free Demo">

                                    </div>

                                    <div class="loading_w hide" id="loading_w"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif" /></div>

                                    <p id="#result"></p>

                                    <div class="text-center download-syllabus">

                                        <a href="Cyber-Security-Expert-Training.pdf" target="_blank">

                                            Download Syllabus

                                        </a>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--/ course description start /-->



        <!--/ training calendar sec start /-->

        <!-- <section class="training-calendor" id="course-calendar">

            <div class="container">

                <div class="row">

                    <div class="col-12 text-center">

                        <h2>Our Upcoming Batches</h2>

                    </div>

                </div>

                <div class="row mt-4 mt-lg-0">

                    <div class="col-12 px-0">

                        <?php

                        //                         $url = "https://www.infosectrain.com/api/41785/href_toscroll/free_demo";





                        //                         function gettraning_Cal($url)

                        //                         {

                        //                             $ch = curl_init();

                        //                             curl_setopt($ch, CURLOPT_HEADER, 0);

                        //                             curl_setopt($ch, CURLOPT_VERBOSE, 1);

                        //                             //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                        //                             curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

                        //                             curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

                        //                             curl_setopt($ch, CURLOPT_FAILONERROR, 0);

                        //                             // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

                        // //curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

                        //                             curl_setopt($ch, CURLOPT_URL, $url);



                        //                             $content = curl_exec($ch);



                        //                             curl_close($ch);

                        //                             return $content;

                        //                         }



                        //                         gettraning_Cal($url);



                        ?>

                    </div>

                </div>

            </div>

        </section> -->

        <!--/ why choose us /-->

        <section class="whychoose-sec">

            <div class="container">

                <div class="row">

                    <div class="col-12 text-start">

                        <h2>Why Infosec Train</h2>

                    </div>

                </div>

                <div class="row justify-content-lg-around">

                    <div class="col-lg-2 col-md-6 col-sm-6 mt-5 p-lg-0">

                        <div class="item">

                            <div class="img-item">

                                <img src="assets/img/icon/student.png" alt="student" class="img-fluid" loading="lazy">

                            </div>

                            <div class="highlight-cont">

                                Certified & Experienced Instructors

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 mt-5 p-lg-0">

                        <div class="item">

                            <div class="img-item">

                                <img src="assets/img/icon/24x71.png" alt="Training Support" class="img-fluid" loading="lazy">

                            </div>

                            <div class="highlight-cont">

                                Post Training Support

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 mt-5 p-lg-0">

                        <div class="item">

                            <div class="img-item">

                                <img src="assets/img/icon/tailor.png" alt="Customized Training" class="img-fluid" loading="lazy">

                            </div>

                            <div class="highlight-cont">

                                Customized Training

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 mt-5 p-lg-0">

                        <div class="item">

                            <div class="img-item">

                                <img src="assets/img/icon/flexible.png" alt="Flexible Schedule" class="img-fluid" loading="lazy">

                            </div>

                            <div class="highlight-cont">

                                Flexible Schedule

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 mt-5 p-lg-0">

                        <div class="item">

                            <div class="img-item">

                                <img src="assets/img/icon/video.png" alt="Recorded Sessions" class="img-fluid" loading="lazy">

                            </div>

                            <div class="highlight-cont">

                                Access to Recorded Sessions

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--/ why choose us /-->



        <!--/ who should attend start /-->

        <section class="attend-sec">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <h2>Who Should Attend Cybersecurity Expert Training?</h2>

                    </div>

                </div>

                <!--/ col start-->

                <div class="row">

                    <div class="col-lg-3 col-md-6 mt-5">

                        <div class="card">

                            <div class="card-body ps-md-4 ps-lg-5">

                                <img src="assets/img/cyber-enthusiasts.svg" alt="Cyber Enthusiasts" loading="lazy">

                                <p>Cybersecurity <br> Enthusiasts</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mt-5">

                        <div class="card">

                            <div class="card-body ps-md-4 ps-lg-5">

                                <img src="assets/img/systeam-administrator.svg" alt="Systeam Administrator" loading="lazy">

                                <p>System<br> Administrators</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mt-5">

                        <div class="card">

                            <div class="card-body ps-md-4 ps-lg-5">

                                <img src="assets/img/network-administrator.svg" alt="Network Administrator" loading="lazy">

                                <p>Network <br> Administrators</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mt-5">

                        <div class="card">

                            <div class="card-body ps-md-4 ps-lg-5">

                                <img src="assets/img/penetration-testers.svg" alt="Penetration Testers" loading="lazy">

                                <p>Penetration <br> Testers </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mt-5">

                        <div class="card">

                            <div class="card-body ps-md-4 ps-lg-5">

                                <img src="assets/img/it-security-professionals.svg" alt="IT Security Professionals " loading="lazy">

                                <p>IT Security <br> Professionals </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mt-5">

                        <div class="card">

                            <div class="card-body ps-md-4 ps-lg-5">

                                <img src="assets/img/security-consultants.svg" alt="Security Consultants" loading="lazy">

                                <p>Security <br> Consultants</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mt-5">

                        <div class="card">

                            <div class="card-body ps-md-4 ps-lg-5">

                                <img src="assets/img/soc-analysts.svg" alt="SOC Analysts (L1 & L2)" loading="lazy">

                                <p>SOC Analysts <br>(L1 & L2)</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 mt-5">

                        <div class="card">

                            <div class="card-body ps-md-4 ps-lg-5">

                                <img src="assets/img/cyber-security-analysts.svg" alt="Cyber Security Analysts" loading="lazy">

                                <p>Cyber Security <br> Analysts</p>

                            </div>

                        </div>

                    </div>

                </div>

                <!--/ button-->

                <div class="text-center mt-5">

                    <button class="linkBtn" data-title="Contact to Advisor" data-bs-toggle="modal" data-bs-target="#myModal">Contact to Advisor</button>

                </div>

            </div>

        </section>

        <!--/ who should attend end /-->



        <!--/ testimonial sec start /-->

        <section class="testimonial-sec" id="review">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-4 col-md-6 position-relative">

                        <i class="d-block mb-2">testimonial</i>

                        <h2>Our Client’s Feedback About Their Experience With Us</h2>

                        <button class="linkBtn" data-title="Book Your Trail Class" data-bs-toggle="modal" data-bs-target="#myModal">Book Your Trail Class</button>

                    </div>

                    <div class="col-lg-8 col-md-6 mt-4 mt-md-0">

                        <div class="swiper mySwiper">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide review-item">

                                    <div class="img-item">

                                        <img src="assets/img/Sourabh-Maha.jpg" alt="Sourabh Maha" loading="lazy">

                                        <p>Sourabh Maha</p>

                                    </div>

                                    <div class="review-content">

                                        <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/starnew.png" alt="star" loading="lazy">

                                        <p>

                                            The training was awesome. Helped me clear my concepts and also reduced my

                                            preparation time to 1/3rd. Thank you, trainer, for all your dedication to

                                            bring your gladiators to pace.

                                        </p>

                                    </div>

                                </div>

                                <div class="swiper-slide review-item">

                                    <div class="img-item">

                                        <img src="assets/img/Gourav.jpg" alt="Gaurav" loading="lazy">

                                        <p>

                                            Gourav chaturvedi

                                        </p>

                                    </div>

                                    <div class="review-content">

                                        <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/starnew.png" alt="star" loading="lazy">

                                        <p>

                                            I must say the admin team is excellent and punctual. The trainers are

                                            actually the nerve of the team and know how to engage with the students

                                            across all the topics.



                                        </p>

                                    </div>

                                </div>

                                <div class="swiper-slide review-item">

                                    <div class="img-item">

                                        <img src="assets/img/Jagandeep-Singh.jpeg" alt="Jagandeep Singh" loading="lazy">

                                        <p>

                                            Jagandeep Singh Suri

                                        </p>

                                    </div>

                                    <div class="review-content">

                                        <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/starnew.png" alt="star" loading="lazy">

                                        <p>

                                            Thoroughly enjoyed the course and the continuous support from the entire

                                            team.

                                        </p>

                                    </div>

                                </div>

                                <div class="swiper-slide review-item">

                                    <div class="img-item">

                                        <img src="assets/img/Syed-Mudassir-.jpg" alt="Syed Mudassir" loading="lazy">

                                        <p>

                                            Syed Mudassir

                                        </p>

                                    </div>

                                    <div class="review-content">

                                        <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/starnew.png" alt="star" loading="lazy">

                                        <p>

                                            It was a good experience. Looking forward to career growth with

                                            Infosectrain. Thank you



                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="swiper-button-next"></div>

                            <div class="swiper-button-prev"></div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--/ testimonial sec end /-->



        <!--/ advisor sec start /-->

        <section class="advisor" id="advisor">

            <div class="container">

                <div class="row">

                    <div class="col-12 d-lg-none text-start">

                        <h2>Course Advisor</h2>

                    </div>

                </div>

                <div class="row align-items-center">

                    <div class="col-lg-4 col-md-4 my-4 my-md-0">

                        <img class="img-fluid col-12 rounded instructor_component_image" src="assets/img/abhishek.webp" loading="lazy" alt="Abhishek Sharma|InfosecTrain" class="W-75">

                        <div class="row"></div>

                    </div>

                    <div class="col-lg-8 col-md-8 ps-lg-5 ps-md-3">

                        <div class="row my-auto pb-0 pt-0">

                            <h2 class="d-none d-lg-block">Course Advisor</h2>

                            <div class="advisor-name">

                                Abhishek Sharma

                            </div>

                        </div>

                        <div class="experience-adv">

                            7+ years of experience Information Security Corporate Trainer

                        </div>

                        <p class="mentor-description">

                            7+ years of experience as an Information Security Consultant and Trainer in delivering

                            training to government and non-government organizations around the globe on different

                            Information security verticals.

                            Abhishek has provided training and consulting to learners as well as organizations on

                            the latest Information Security technologies available on the market today. He’s had

                            exposure to managing Information Security for different sectors, including banking,

                            telecom, e-commerce, retail, healthcare and IT, among others.

                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!--/ advisor sec end /-->



        <!--/ Certificate sec start /-->

        <section class="certification">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-md-6 py-4 p-md-5">

                        <div class="item">

                            <h2>Get Ahead With InfosecTrains Master Certificate</h2>

                            <ul>

                                <li>

                                    <strong>Earn your Certificate</strong>

                                    Our course is exhaustive and this certificate is proof that you have taken a big

                                    leap in mastering the domain.

                                </li>

                                <li>

                                    <strong>Differentiate yourself with Masters Certificate</strong>

                                    The knowledge and course skills you've gained working on projects, simulations, case

                                    studies will set you ahead of the competition.

                                </li>

                                <li>

                                    <strong>Share your achievement</strong>

                                    Talk about your Certificate on LinkedIn, Twitter, Facebook, boost your resume, or

                                    frame it - tell your friends and colleagues about it.

                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-md-6 pb-4 px-md-5">

                        <div class="item">

                            <img src="assets/img/certificate.webp" loading="lazy" alt="cybe security certificate" class="img-fluid">

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--/ Certificate sec end /-->



        <!--/ footer contact /-->

        <section class="footer-contact">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6 px-0">

                        <div class="item">

                            <img src="assets/img/girls.webp" alt="cyber security" class="w-100" loading="lazy">



                        </div>

                    </div>

                    <div class="col-lg-6 py-4">

                        <div class="form-item" id="free_demo">

                            <h2 class="text-center">

                                Want more clarity? <br>Contact us now

                            </h2>

                            <div class="hide rows  mt-2" id="demo_form_output_footer"> </div>



                            <form class="enquiry_form_footer" method="post" action="" onSubmit="return val_demo_request_footer(this.form);" id="demo_me_phone_f_footer">

                                <input type="text" name="me_name" id="me_name_footer" placeholder="Name">

                                <input type="email" name="me_email" id="me_email_footer" placeholder="Email">

                                <input type="text" name="me_phone" id="me_phone_footer" placeholder="Mobile">



                                <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.html" id="me_redirect_footer">

                                <input type="hidden" value="Cyber Security Expert Training" id="me_others_footer" name="me_others">

                                <input type="hidden" value="<?php echo $pag_url; ?>" id="me_pageurl_footer" name="me_pageurl">

                                <input type="hidden" value="" id="me_message" name="me_message">

                                <input type="submit" name="me_submited" id="me_submited_footer" value="Submit">



                                <div class="loading_w hide" id="loading_w_footer"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif" /></div>

                                <p id="#result"></p>

                            </form>

                            <p>

                                Our learning advisors will get back to you in the shortest possible time.

                                Meanwhile, you can also write to us at <a href="mailto:sales@infosectrain.com">sales@infosectrain.com</a>.

                            </p>

                        </div>

                    </div>

                </div>

        </section>

        <!--/ footer contact end /-->

    </main>

    <!--/ main content end /-->



    <!--/ footer sec start /-->

    <footer>

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 social-list">

                    <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/infosectrain-logo.png" alt="">



                </div>

                <div class="col-md-6 social-list text-end">

                    <p>All rights reserved. © <?php echo date('Y'); ?>, Infosec Train</p>

                </div>

            </div>

        </div>

    </footer>

    <!--/ footer sec end /-->



    <!--/ fixed footer start /-->

    <section class="fixed-footer sticky-footer">

        <div class="container">

            <div class="row">

                <div class="col-12 text-center">

                    <ul class="d-none d-md-flex justify-content-center">



                        <li>

                            <a href="tel:1800-843-7890">

                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <style>

                                        svg {

                                            fill: #ffffff

                                        }

                                    </style>

                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />

                                </svg>

                                1800-843-7890 (IND)

                            </a>

                        </li>

                        <li>|</li>

                        <li>

                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal">

                                Enroll Now

                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <style>

                                        svg {

                                            fill: #ffffff

                                        }

                                    </style>

                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />

                                </svg>



                            </a>

                        </li>

                    </ul>



                    <ul class="d-flex d-md-none ps-0">

                        <li>

                            <a href="https://api.whatsapp.com/send?phone=918767256840&text=Hi" target="_blank">

                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <style>

                                        svg {

                                            fill: #09ff05

                                        }

                                    </style>

                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />

                                </svg>

                            </a>

                        </li>

                        <li>

                            <a href="tel:1800-843-7890" target="_blank">

                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <style>

                                        svg {

                                            fill: #ffffff

                                        }

                                    </style>

                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />

                                </svg>

                            </a>

                        </li>

                        <li>

                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal">

                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <style>

                                        svg {

                                            fill: #ffffff

                                        }

                                    </style>

                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />

                                </svg>

                            </a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>

    <!--/ fixed footer end /-->



    <!-- The Modal -->

    <div class="modal offer-modal" id="myModal">

        <div class="modal-dialog" style="border-radius: 10px;">

            <div class="modal-content border-0" style="border-radius: 10px;">

                <!-- Modal Header -->

                <!-- <div class="modal-header">

            <h4 class="modal-title">Modal Heading</h4>



            </div> -->

                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>

                <!-- Modal body -->

                <div class="modal-body">

                    <div class="form-item card rounded">

                        <div class="card-header text-start py-3">

                        Wish to learn more? <br> Register for the next free demo.

                        </div>

                        <div class="card-body">

                            <div class="hide rows  mt-2" id="demo_form_output_pop"> </div>

                            <?php /*?><form class="enquiry_form" method="post" action="" onSubmit="return val_demo_requestmodel(this.form);" id="demo_contact_f">

                                <div class="form-input">

                                    <input type="text" name="me_name" id="me_name" placeholder="Name">

                                    <span class="model-name"></span>

                                </div>

                                <div class="form-input">

                                    <input type="email" name="me_email" id="me_email" placeholder="Email">

                                    <span class="model-email"></span>

                                </div>

                                <div class="form-input">

                                    <input type="text" name="me_phone" id="me_phone" placeholder="Mobile">

                                </div>

                                <div class="form-input">

                                    <textarea cols="30" rows="3" name="me_message" id="me_message" placeholder="Comment/Training Required ">



                                    </textarea>

                                </div>

                                <!-- <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.html" id="model_redirect"> -->





                                <div class="form-input mb-0 mb-md-2">

                                    <input type="submit" name="me_submited" id="demo_submitted" value="Submit"

                                        style="background:var(--red)">

                                </div>

                                <div class="loading_w hide" id="loading_w"><img

                                        src="<?php echo BASE_URL; ?>assets/img/loader.gif" /></div>



                            </form><?php */ ?>

                            <form class="enquiry_form_pop" method="post" action="" onSubmit="return val_demo_request_pop(this.form);" id="demo_me_phone_f_pop">

                                <div class="form-input">

                                    <input type="text" name="me_name" id="me_name_pop" placeholder="Name">

                                    <!--<span class="name-valid"></span>-->

                                </div>

                                <div class="form-input">

                                    <input type="email" name="me_email" id="me_email_pop" placeholder="Email">

                                    <span class="email-valid"></span>

                                </div>

                                <div class="form-input">

                                    <input type="text" name="me_phone" id="me_phone_pop" placeholder="Mobile">

                                </div>

                                <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.html" id="me_redirect_pop">

                                <input type="hidden" value="Cyber Security Expert Training" id="me_others_pop" name="me_others">

                                <input type="hidden" value="" id="me_message" name="me_message">

                                <input type="hidden" value="<?php echo $pag_url; ?>" id="me_pageurl_pop" name="me_pageurl">



                                <div class="form-input">

                                    <input type="submit" name="me_submited" id="me_submited_pop" value="Request a Free Demo">

                                </div>



                                <div class="loading_w hide" id="loading_w_pop"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif" /></div>

                                <p id="#result"></p>

                                <!-- <div class="text-center download-syllabus">

                                        <a href="Cyber-Security-Expert-Training.pdf" target="_blank">

                                            Download Syllabus

                                        </a>

                                    </div>-->

                            </form>

                        </div>

                        <div class="card-footer">

                            <ul class="d-flex justify-content-center align-items-center my-1 my-sm-2">

                                <li class="connect_withus d-none d-sm-block">Connect with Us:</li>

                                <li>

                                    <a href="tel:1800-843-7890">

                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                            <style>

                                                svg {

                                                    fill: #ffffff

                                                }

                                            </style>

                                            <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">

                                            </path>

                                        </svg>

                                        1800-843-7890

                                    </a>

                                </li>

                                <li>

                                    <a href="https://api.whatsapp.com/send?phone=918767256840&amp;text=Hi" target="_blank">

                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48">

                                            <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">

                                            </path>

                                            <path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">

                                            </path>

                                            <path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">

                                            </path>

                                            <path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">

                                            </path>

                                            <path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>

                                        </svg>

                                        Whatsapp

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!--/ topup button /-->

    <img src="assets/img/arrow.png" alt="Top" onClick="topFunction()" class="topBtn">

    <!--/ whatsapp icon /-->

    <a class="whatsapp_button d-none d-md-flex" href="https://api.whatsapp.com/send?phone=918767256840&amp;text=Hi" target="_blank">

        <span></span>

    </a>

    <!--/ whatsapp icon end /-->

</body>

<!-- <script src="assets/js/common.min.js" defer></script> -->

<script src="assets/js/bootstrap.bundle.min.js" defer></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js" defer></script>

<script src="assets/js/common.min.js"></script>

<script src="assets/js/custom.js" defer></script>



<!--Start of Zendesk Chat Script-->

<script type="text/javascript">

    window.$zopim || (function(d, s) {

        var z = $zopim = function(c) {

                z._.push(c)

            },

            $ = z.s =



            d.createElement(s),

            e = d.getElementsByTagName(s)[0];

        z.set = function(o) {

            z.set.



            _.push(o)

        };

        z._ = [];

        z.set._ = [];

        $.async = !0;

        $.setAttribute("charset", "utf-8");



        $.src = "https://v2.zopim.com/?5Y1ZvMP3lrSPwhhyQjIGwo618dlqPLkD";

        z.t = +new Date;

        $.



        type = "text/javascript";

        e.parentNode.insertBefore($, e)

    })(document, "script");

</script>



<!--End of Zendesk Chat Script-->





</html>