<?php include('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CISSP Training and Certification course</title>
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" href="assets/img/favicon.ico">
    <!--/ style link start /-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


               <!-- Google Tag Manager -->
<script>
setTimeout(function(){
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5XZDRWG');
}, 4000);
</script>
               <!-- End Google Tag Manager -->


    <style>
        /* Custom style */
        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e") !important;
            transform: scale(.7) !important;
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e") !important;
        }
        .hide {
            display: none;
        }
        .alert-danger {
            font-size: 13px;
            margin-bottom: 8px;
            background: linear-gradient(267deg, #EE224A -15.61%, #FF8A00 123.55%);
            color: #ffffff;
            font-size: 15px;
        }

		.rainbowText {
 /* font-family:arial black;
  font-size:70px;
  background-image:
    linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);
  -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; */
  animation: move 600s linear infinite;
}
@keyframes move {
    to {
        background-position: 4500vh;
    }
}


    </style>
</head>
<!--/ style link end /-->

<body>
<?php

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $pag_url = "https://";
} else {
    $pag_url = "http://";
}

// Append the host(domain name, ip) to the URL.

$pag_url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL

$pag_url .= $_SERVER['REQUEST_URI'];

?>

    <!--/ navbar start /-->
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            <div class="navbar-brand">
                <img src="assets/img/logo.png" alt="infosectrain" loading="lazy" />
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="22" viewBox="0 0 33 22" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.66667V0H33V3.66667H0ZM0 12.8333H33V9.16667H0V12.8333ZM0 22H33V18.3333H0V22Z" fill="#EE224A"/>
                </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#overview">Overview</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#course-details">Course Details</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#calendar">Training Calendar</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#advisor">Our Experts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#whychoose">Why Choose</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="d-none d-lg-block button2 zoom-in-out-box" data-bs-toggle="modal" data-bs-target="#myModal">Get Free Demo</button>
        </div>
    </nav>
    <!--/ navbar end /-->
    <main>
        <!--/ header start /-->
        <header>
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-8">
                        <div class="item">
                            <h1>CISSP - Certified Information Systems Security Professional</h1>
                            <p class="d-none d-md-block">Join the CISSP Certification Exam Preparation Training</p>
                            <p>Get on Top of the League <br class="d-md-none"> with CISSP Certification</p>
                            <div class="d-flex align-items-center mt-2 mt-md-4">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal">Get Free Demo</button>
                                <!--<img src="assets/img/review.webp" alt="infosectrain review" loading="lazy">-->
                                <img src="assets/img/g-review.png" alt="infosectrain review" loading="lazy">
                                <img src="assets/img/t-review.png" alt="infosectrain review" loading="lazy">
                                <img src="assets/img/gd-review.png" alt="infosectrain review" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ person img /-->
            <img src="assets/img/man-mobile.webp" alt="" loading="lazy" class="mobile-man d-md-none">
            <img src="assets/img/man-red.webp" alt="" loading="lazy" class="redline-img d-none d-lg-block">

        </header>
        <!--/ header end /-->
<!-------- Span For menu Only----->
<span id="overview"></span>
<!-------- Span For menu Only----->
        <!--/ highlights sec start /-->
        <section class="highlights pb-5">
            <div class="container">
                <div class="row">


<style>
.zoom-in-out-box {
  animation: zoom-in-zoom-out 2s ease infinite;
}

@keyframes zoom-in-zoom-out {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.1, 1.1);
  }
  100% {
    transform: scale(1, 1);
  }
}

</style>
                    <!--/ col start /-->
                    <div class="col-lg-2 col-md-4 col-6 my-3 m-lg-0 border-left-0">
                        <img src="assets/img/icons/Time-Limit.webp" alt="">
                        <div class="title">48-Hours</div>
                        <div class="sub-title">Course</div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-2 col-md-4 col-6 my-3 m-lg-0">
                        <img src="assets/img/icons/Training.webp" alt="">
                        <div class="title">Virtual</div>
                        <div class="sub-title">Instructor-Led</div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-2 col-md-4 col-6 my-3 m-lg-0">
                        <img src="assets/img/icons/Test-Passed.webp" alt="">
                        <div class="title">Full 8-Domain</div>
                        <div class="sub-title">Exam Practice</div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-2 col-md-4 col-6 my-3 m-lg-0">
                        <img src="assets/img/icons/Laptop.webp" alt="">
                        <div class="title">Online</div>
                        <div class="sub-title">Test Simulation</div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-2 col-md-4 col-6 my-3 m-lg-0">
                        <img src="assets/img/icons/Medal.webp" alt="">
                        <div class="title">98%</div>
                        <div class="sub-title">Pass Rate</div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-2 col-md-4 col-6 my-3 m-lg-0">
                        <img src="assets/img/icons/technical-support.webp" alt="">
                        <div class="title">Post</div>
                        <div class="sub-title">Training Support</div>

                    </div>
                </div>
            </div>

        </section>
        <!--/ highlights sec end /-->

        <!--/ overview sec start /-->
        <section class="overview-sec" id="overview0">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                        <div class="item">
                            <h2 class="text-center text-md-start">Overview CISSP</h2>
                            <p>
                                The Certified Information Systems Security Professional is an industry gold standard
                                when it comes to Information Security Certification. It is looked upon as an objective
                                measure of excellence and a highly reputed standard of achievement.
                            </p>
                            <p>
                                Our certification-focused CISSP course is designed to impart Full 8-Domain Exam
                                Practice.
                            </p>
                            <p>
                                The objective of this CISSP certification training program is to prepare participants
                                with the technical and managerial skills required to design, architect, and manage an
                                organization's security posture by using globally recognised information security
                                standards.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5" id="free_demo">
                        <div class="card item-two px-3">
                            <div class="card-header">
                                <span>Talk</span> To <br>
                                <span>Our Experts</span>
                            </div>
                            <div class="card-body pb-4">
                            <div class="hide rows  mt-2" id="demo_form_output"> </div>
                                <form method="post" action="" onSubmit="return val_demo_request(this.form);" id="demo_me_phone_f">
                                    <input type="text" name="me_name" id="me_name" placeholder="full name">
                                    <input type="email" name="me_email" id="me_email" placeholder="email">
                                    <input type="number" name="me_phone" id="me_phone" placeholder="mobile">
                                    <input type="text" name="me_message" id="me_message" placeholder="mention your call time preference">

                                    <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.html" id="me_redirect">
                                    <input type="hidden" value="CISSP Training" id="me_others" name="me_others">
                                    <input type="hidden" value="<?php echo $pag_url; ?>" id="me_pageurl" name="me_pageurl">

                                    <button type="submit" name="me_submited" id="me_submited">Request a Callback</button>
                                </form>
                                <div class="loading_w hide" id="loading_w"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif" /></div>
                                <p id="#result"></p>
                                <!-------- Span For menu Only----->
                <span id="course-details"></span>
                <!-------- Span For menu Only----->
                            </div>
                            <img src="assets/img/form-person.webp" alt="" loading="lazy" class="form-person">
                        </div>
    </div>

                </div>

            </div>

        </section>
        <!--/ overview sec end /-->

        <!--/ tab sec start /-->
        <section class="tab-section py-5 py-md-0 pb-md-5" id="course-details0">
            <div class="w-100 d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <ul class="nav nav-pills d-none d-md-flex" id="myTab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#domains-tab-pane">Domains</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#objectives-tab-pane">Objectives</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#exams-details-tab-pane">Exams Details</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#prerequisites-tab-pane">Prerequisites</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#target-audience-tab-pane">Target Audience</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container px-4">
                <div class="row">
                    <div class="tab-content accordion p-0" id="myTabContent">
                        <div class="tab-pane fade show active accordion-item" id="domains-tab-pane">
                            <h2 class="accordion-header d-md-none" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">Domains</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show d-md-block"
                                aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                <div class="accordion-body cdbody">
                                        <picture>
                                            <source media="(min-width:768px)" srcset="assets/img/domain.webp" alt="cissp domain" loading="lazy"
                                        class="img-fluid mx-auto d-block">
                                            <img src="assets/img/cissp-domain-mob.webp"  alt="cissp domain" loading="lazy" class="img-fluid mx-auto d-block">
                                        </picture>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade accordion-item" id="objectives-tab-pane">
                            <h2 class="accordion-header d-md-none" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Objectives
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse d-md-block"
                                aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                                <div class="accordion-body  cdbody">
                                    <ul>
                                        <li class="star">Master risk assessment, analysis, data classification, and security awareness concepts.</li>
                                        <li class="star">Implement risk management principles (avoidance, acceptance, mitigation, transference).</li>
                                        <li class="star">Align security practices with organizational goals and strategies, including assessing protection criteria and program effectiveness.</li>
                                        <li class="star">Apply mathematical algorithms for information integrity, confidentiality, and authenticity.</li>
                                        <li class="star">Comprehend network security measures, identify measurable risks, and support proactive security.</li>
                                        <li class="star">Enhance data integrity and trace actions to entities for improved security understanding.</li>
                                        <li class="star">Plan technology development with risk consideration and evaluate against mission requirements.</li>
                                        <li class="star">Safeguard and manage information processing assets in various environments.</li>
                                        <li class="star">Grasp the Software Development Life Cycle (SDLC) and apply suitable security controls.</li>
                                        <li class="star">Evaluate software security effectiveness in the development environment.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade accordion-item" id="exams-details-tab-pane">
                            <h2 class="accordion-header d-md-none" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Exams Details
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse d-md-block"
                                aria-labelledby="headingThree" data-bs-parent="#myTabContent">
                                <div class="accordion-body  cdbody">
                                    <ul>
                                        <li class="star"><strong>Duration</strong> : 4 Hours</li>
                                        <li class="star"><strong>Number of questions</strong> : 175</li>
                                        <li class="star"><strong>Question format</strong> : Multiple Choice</li>
                                        <li class="star"><strong>Passing marks</strong> : 700 out of 1000</li>
                                        <li class="star">
                                            <strong>Exam language</strong> : English, French, German, Brazilian, Portuguese, Spanish, Japanese, Simplified Chinese, Korean, Visually Impaired
                                        </li>
                                        <li class="star"><strong>Delivery Method</strong> : CAT</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade accordion-item" id="prerequisites-tab-pane">
                            <h2 class="accordion-header d-md-none" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Prerequisites
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse d-md-block"
                                aria-labelledby="headingFour" data-bs-parent="#myTabContent">
                                <div class="accordion-body  cdbody">
                                    <strong>To apply for the CISSP® course certification, you need to:</strong>
                                    <ul>
                                        <li class="star">Have a minimum 5 years of cumulative paid full-time work experience in two or more of the 8 domains of the (ISC)² CISSP® Common Body of Knowledge (CBK)</li>
                                        <li class="star">One-year experience waiver can be earned with a 4-year college degree, or regional equivalent or additional credential from the (ISC)² approved list</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade accordion-item" id="target-audience-tab-pane">
                            <h2 class="accordion-header d-md-none" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Target Audience
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse d-md-block"
                                aria-labelledby="headingFive" data-bs-parent="#myTabContent">
                                <div class="accordion-body  cdbody">
                                    <ul>
                                        <li class="star">Chief Information Security Officer</li>
                                        <li class="star">Chief Information Officer</li>
                                        <li class="star">Director of Security</li>
                                        <li class="star">IT Director/Manager</li>
                                        <li class="star">Security Systems Engineer</li>
                                        <li class="star">Security Analyst</li>
                                        <li class="star">Security Manager</li>
                                        <li class="star">Security Auditor</li>
                                        <li class="star">Security Architect</li>
                                        <li class="star">Security Consultant</li>
                                        <li class="star">Network Architect</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4 mt-md-5">
                <a href="https://www.infosectrain.com/wp-content/uploads/2018/12/cissp-course.pdf" target="_blank" download="cissp course content" class="brochureBtn">Download Course Brochure</a>
            </div>

                 <!-------- Span For menu Only----->
                <span id="calendar"></span>
                <!-------- Span For menu Only----->
        </section>
        <!--/ tab sec end /-->

        <!--/ training calendar start /-->
        <section class="training-calendar py-5" id="calendar0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">CISSP Training Calendar</h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <?php
                                $url = "https://www.infosectrain.com/api/30764/href_toscroll/free_demo";
                                function gettraning_Cal($url){
                                $ch = curl_init();
                                curl_setopt($ch, CURLOPT_HEADER, 0);
                                curl_setopt($ch, CURLOPT_VERBOSE, 1);
                                //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                                curl_setopt($ch, CURLOPT_FAILONERROR, 0);
                                // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
                                //curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
                                curl_setopt($ch, CURLOPT_URL, $url);

                                $content = curl_exec($ch);

                                curl_close ($ch);
                                return $content;
                                }

                                gettraning_Cal($url);

                        ?>
                    </div>
                </div>
                     <!-------- Span For menu Only----->
                <span id="advisor"></span>
                <!-------- Span For menu Only----->
            </div>
        </section>
        <!--/ training calendar end /-->

        <!--/ advisor sec start /-->
        <section class="advisor py-5" id="advisor0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Expert <br class="d-md-none"> Course Advisors</h2>
                    </div>
                </div>
                <div class="swiper mySwiper mt-4 pb-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide advisor-item">
                            <h4>Prabh Nair</h4>
                            <p>18+ Years of Experience</p>
                            <p>CISSP | CCSP | CISM | CISA | CRISC</p>
                        </div>
                        <div class="swiper-slide advisor-item">
                            <h4>AJIT</h4>
                            <p>15+ Years of Experience</p>
                            <p>CISSP | CISA | CISM | CRISC | CCSP | ITIL</p>
                        </div>
                        <div class="swiper-slide advisor-item">
                            <h4>MANI</h4>
                            <p>12+ Years of Experience</p>
                            <p>CISSP | CCSP | AWS Architect | CEH</p>
                        </div>
                        <div class="swiper-slide advisor-item">
                            <h4>JEEVAN</h4>
                            <p>8+ Years of Experience</p>
                            <p>CISA | CISM | CISSP | CRISC | ECSA | CGEIT | CEH</p>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                    <!-------- Span For menu Only----->
                <span id="whychoose"></span>
                <!-------- Span For menu Only----->
            </div>
        </section>
        <!--/ advisor sec end /-->

        <!--/ cissp exam process /-->
        <section class="process py-5" id="whychoose0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center text-white">How We Help You Ace CISSP Exam</h2>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-xl-between">
                    <!--/ col start /-->
                    <div class="col-xl-2 col-lg-4 col-md-6 mt-4">
                        <div class="item">
                            <img src="assets/img/icons/Study.webp" alt="study cissp" loading="lazy">
                            <h4>LEARN</h4>
                            <p>from Certified Trainers & Industry Experts</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-xl-2 col-lg-4 col-md-6 mt-4">
                        <div class="item">
                            <img src="assets/img/icons/Reading.webp" alt="study cissp" loading="lazy">
                            <h4>PRACTICE</h4>
                            <p>with labs, regular assessments, and case studies</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-xl-2 col-lg-4 col-md-6 mt-4">
                        <div class="item">
                            <img src="assets/img/icons/Learning.webp" alt="study cissp" loading="lazy">
                            <h4>IMMERSE</h4>
                            <p>with scenario-based learning across 8 CISSP domains</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-xl-2 col-lg-4 col-md-6 mt-4">
                        <div class="item">
                            <img src="assets/img/icons/Pass-Fail.webp" alt="study cissp" loading="lazy">
                            <h4>PREPARE</h4>
                            <p>for certification with mock tests, exam tips, and practical real-world examples </p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-xl-2 col-lg-4 col-md-6 mt-4">
                        <div class="item conquer mb-0">
                            <img src="assets/img/icons/Trophy.webp" alt="study cissp" loading="lazy">
                            <h4>CONQUER THE EXAM</h4>
                            <p>and achieve success in the very first attempt!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ cissp exam process end /-->

        <!--/ why choose sec start /-->
        <section class="why-choose py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Why Choose Infosec Train</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="50" viewBox="0 0 44 50" fill="none" class="hoverable">
                                <path d="M41.491 35.8817C42.2793 35.8747 42.9126 35.2299 42.9056 34.4416L42.6185 2.33494C42.6114 1.54664 41.9666 0.913271 41.1783 0.920321L7.54287 1.22112C3.38366 1.25831 0.0302606 4.67233 0.0674559 8.83154L0.354582 40.9382C0.391777 45.0974 3.80579 48.4509 7.965 48.4137L9.59498 48.3991L9.59588 48.5005C9.59999 48.9594 9.82442 49.3883 10.199 49.6531C10.5736 49.9181 11.0528 49.9868 11.4867 49.8378L15.6096 48.4225L19.7572 49.7639C20.1937 49.9052 20.6715 49.8278 21.0414 49.5562C21.4113 49.2846 21.6279 48.8517 21.6238 48.393L21.6229 48.2915L41.6002 48.1129C43.4915 48.0257 43.4658 45.3107 41.5747 45.2581L40.6708 45.2662C38.3542 42.7102 38.3165 38.4868 40.587 35.8899L41.491 35.8818L41.491 35.8817ZM18.7514 46.438L16.0354 45.5596C15.7415 45.4646 15.4247 45.4674 15.1326 45.5677L12.4328 46.4945L12.395 42.2578L18.7135 42.2013L18.7514 46.438ZM7.88468 39.4433C5.99346 39.5305 6.01916 42.2454 7.91021 42.2981L9.54019 42.2835L9.56935 45.5443L7.93937 45.5589C1.72471 45.378 1.64983 36.4723 7.85552 36.1826L37.1532 35.9206C36.6281 36.9392 36.2828 38.0424 36.1313 39.1908L7.88468 39.4434L7.88468 39.4433ZM21.5974 45.4367L21.5683 42.1758L36.1568 42.0454C36.3288 43.1908 36.6939 44.2877 37.2372 45.2968L21.5974 45.4367ZM40.038 33.0397L7.82857 33.3277C6.13188 33.3429 4.4711 33.9457 3.15651 35.0041L2.92222 8.80601C2.8991 6.22092 4.98331 4.099 7.5684 4.07589L39.7764 3.78785L40.038 33.0397Z" fill="#EE224A"/>
                                <path d="M22.2364 19.9993L25.2943 19.972C27.1855 19.8848 27.1598 17.1699 25.2687 17.1172L22.2109 17.1445C20.3197 17.2317 20.3454 19.9467 22.2364 19.9993Z" fill="#EE224A"/>
                                <path d="M29.0753 15.351L32.5238 15.3202L27.9498 22.3159C27.6618 22.7565 27.6396 23.3199 27.892 23.7818C28.1445 24.2436 28.6308 24.5291 29.1573 24.5244L35.2729 24.4697C37.1642 24.3825 37.1384 21.6676 35.2474 21.6149L31.7989 21.6457L36.3729 14.6501C36.661 14.2094 36.6831 13.646 36.4307 13.1842C36.1782 12.7223 35.6919 12.4369 35.1654 12.4416L29.0498 12.4963C27.1587 12.5834 27.1844 15.2985 29.0753 15.351Z" fill="#EE224A"/>
                                <path d="M10.2609 24.5837C10.9911 24.8803 11.8239 24.5288 12.1205 23.7984L12.3857 23.1455L16.8529 23.1055L17.1297 23.7536C17.4394 24.4786 18.2783 24.8151 19.0031 24.5055C19.7281 24.1957 20.0647 23.3571 19.755 22.6321L15.8507 13.493C15.3601 12.3334 13.6851 12.3488 13.2156 13.5165L9.47537 22.724C9.1789 23.4544 9.53046 24.287 10.2609 24.5837ZM14.5714 17.7649L15.6379 20.2614L13.5498 20.2801L14.5714 17.7649Z" fill="#EE224A"/>
                            </svg>
                            <p>Learn from <br> Industry Experts</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="49" viewBox="0 0 39 49" fill="none" class="hoverable">
                                <path d="M13.2789 17.3721H16.15V20.2434H13.2789V17.3721Z" fill="#EE224A"/>
                                <path d="M22.85 17.3721H25.7211V20.2434H22.85V17.3721Z" fill="#EE224A"/>
                                <path d="M28.8641 34.3756H25.1428V32.6657C26.7077 31.7687 28.0405 30.5108 29.0267 29.0061H36.1463V18.2867C36.1463 16.7084 35.1501 15.3584 33.7535 14.8323V10.0114C33.7535 4.49112 29.2624 0 23.7421 0H15.26C9.73972 0 5.24859 4.49112 5.24859 10.0114V14.8315C3.85083 15.357 2.85369 16.7076 2.85369 18.2867V20.5308C2.85369 22.5654 4.50889 24.2206 6.54347 24.2206H8.21017C8.66744 27.8352 10.8267 30.9267 13.8571 32.6645V34.3756H10.1358C4.60393 34.3756 0.103333 38.8761 0.103333 44.408V49H38.8966V44.408C38.8966 38.8761 34.3961 34.3756 28.8641 34.3756ZM30.3788 26.135C30.5694 25.5175 30.7087 24.8777 30.7919 24.2206H32.4565C32.7378 24.2206 33.0118 24.1889 33.2752 24.129V26.135H30.3788ZM32.4565 21.3495H30.8822V17.4681H32.4564C32.9078 17.4681 33.2751 17.8353 33.2751 18.2867V20.5308C33.2752 20.9822 32.9079 21.3495 32.4565 21.3495ZM5.72472 20.5308V18.2867C5.72472 17.8353 6.09194 17.4681 6.54338 17.4681H8.11982V21.3495H6.54338C6.09204 21.3495 5.72472 20.9822 5.72472 20.5308ZM8.67979 11.1966C8.32205 12.2925 8.13418 13.4358 8.12068 14.5969H8.11973V10.0114C8.11973 6.07417 11.3229 2.87113 15.26 2.87113H23.7421C27.6793 2.87113 30.8824 6.07426 30.8824 10.0114V14.5969H30.8815C30.868 13.4359 30.6801 12.2927 30.3224 11.1967C29.2543 7.72689 24.7821 6.35458 21.9366 8.62259C20.5498 9.71917 18.4524 9.71907 17.0656 8.62278C14.2195 6.3543 9.74795 7.72718 8.67979 11.1966ZM10.9911 22.7839V14.7309C10.9911 13.8268 11.1317 12.9374 11.4092 12.0875C12.0331 10.3247 14.0248 9.91594 15.317 10.9C17.7018 12.7852 21.3004 12.7852 23.6852 10.8999C24.9773 9.91613 26.9691 10.3246 27.5929 12.0876C27.8704 12.9376 28.0111 13.827 28.0111 14.7309L28.011 22.7839C28.011 23.9731 27.7658 25.106 27.3234 26.135H19.5V29.0061H25.3009C23.7799 30.4247 21.7402 31.2938 19.5012 31.2938C14.8086 31.2938 10.9911 27.4764 10.9911 22.7839ZM19.5011 34.165C20.4564 34.165 21.3846 34.0467 22.2717 33.824V36.0063C22.119 39.6844 16.8796 39.6814 16.7283 36.0063V33.8235C17.6161 34.0465 18.545 34.165 19.5011 34.165ZM36.0255 46.1289H2.97447V44.408C2.97447 40.4592 6.18697 37.2467 10.1358 37.2467H13.9945C15.3834 43.0812 23.6189 43.0772 25.0055 37.2467H28.8642C32.8131 37.2467 36.0256 40.4592 36.0256 44.408V46.1289H36.0255Z" fill="#EE224A"/>
                            </svg>
                            <p>Assured Post <br> Training Support</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="hoverable">
                                <path d="M18.0469 9.84375H11.4844C10.5783 9.84375 9.84375 10.5783 9.84375 11.4844C9.84375 12.3904 10.5783 13.125 11.4844 13.125H18.0469C18.9529 13.125 19.6875 12.3904 19.6875 11.4844C19.6875 10.5783 18.9529 9.84375 18.0469 9.84375Z" fill="#EE224A"/>
                                <path d="M18.0469 19.6875H11.4844C10.5783 19.6875 9.84375 20.4221 9.84375 21.3281C9.84375 22.2342 10.5783 22.9688 11.4844 22.9688H18.0469C18.9529 22.9688 19.6875 22.2342 19.6875 21.3281C19.6875 20.4221 18.9529 19.6875 18.0469 19.6875Z" fill="#EE224A"/>
                                <path d="M21.5469 29.75H11.4844C10.5783 29.75 9.84375 30.4846 9.84375 31.3906C9.84375 32.2967 10.5783 33.0312 11.4844 33.0312H21.5469C22.4529 33.0312 23.1875 32.2967 23.1875 31.3906C23.1875 30.4846 22.4529 29.75 21.5469 29.75Z" fill="#EE224A"/>
                                <path d="M41.2344 39.5938H11.4844C10.5783 39.5938 9.84375 40.3283 9.84375 41.2344C9.84375 42.1404 10.5783 42.875 11.4844 42.875H41.2344C42.1404 42.875 42.875 42.1404 42.875 41.2344C42.875 40.3283 42.1404 39.5938 41.2344 39.5938Z" fill="#EE224A"/>
                                <path d="M47.7969 0H8.20312C5.4892 0 3.28125 2.20795 3.28125 4.92188V46.1562H1.64062C0.734562 46.1562 0 46.8908 0 47.7969V49.4375C0 53.0561 2.94394 56 6.5625 56H42.875C46.4936 56 49.4375 53.0561 49.4375 49.4375V13.125H54.3594C55.2654 13.125 56 12.3904 56 11.4844V8.20312C56 3.67992 52.3201 0 47.7969 0ZM6.5625 52.7188C4.75322 52.7188 3.28125 51.2468 3.28125 49.4375H36.3125C36.3125 50.6319 36.6334 51.753 37.1932 52.7188H6.5625ZM46.1562 11.4844V49.4375C46.1562 51.2468 44.6843 52.7188 42.875 52.7188C41.0657 52.7188 39.5938 51.2468 39.5938 49.4375V47.7969C39.5938 46.8908 38.8592 46.1562 37.9531 46.1562H6.5625V4.92188C6.5625 4.01723 7.29848 3.28125 8.20312 3.28125H46.1562V11.4844ZM52.7188 9.84375H49.4375V3.56234C51.3473 4.23948 52.7188 6.06419 52.7188 8.20312V9.84375Z" fill="#EE224A"/>
                                <path d="M33.0312 6.5625C27.6034 6.5625 23.1875 10.9784 23.1875 16.4062C23.1875 19.3151 24.4561 21.9329 26.4688 23.7366V34.6719C26.4688 35.2769 26.8018 35.8329 27.3352 36.1184C27.8686 36.4038 28.516 36.3725 29.0194 36.037L33.0312 33.3624L37.0431 36.037C37.3177 36.22 37.635 36.3125 37.9532 36.3125C38.2187 36.3125 38.4847 36.2482 38.7273 36.1184C39.2607 35.8329 39.5938 35.2769 39.5938 34.6719V23.7366C41.6064 21.9329 42.875 19.3151 42.875 16.4062C42.875 10.9784 38.4591 6.5625 33.0312 6.5625ZM36.3125 31.6063L33.9413 30.0255C33.3901 29.6582 32.6723 29.6582 32.1211 30.0255L29.75 31.6063V25.6869C30.7768 26.051 31.8812 26.25 33.0312 26.25C34.1813 26.25 35.2857 26.051 36.3125 25.6869V31.6063ZM33.0312 22.9688C29.4127 22.9688 26.4688 20.0248 26.4688 16.4062C26.4688 12.7877 29.4127 9.84375 33.0312 9.84375C36.6498 9.84375 39.5938 12.7877 39.5938 16.4062C39.5938 20.0248 36.6498 22.9688 33.0312 22.9688Z" fill="#EE224A"/>
                            </svg>
                            <p>Certification <br> Focused Programs</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none" class="hoverable">
                                <path d="M36.1875 21.5625C37.223 21.5625 38.0625 20.723 38.0625 19.6875C38.0625 18.652 37.223 17.8125 36.1875 17.8125C35.152 17.8125 34.3125 18.652 34.3125 19.6875C34.3125 20.723 35.152 21.5625 36.1875 21.5625Z" fill="#EE224A"/>
                                <path d="M40.5 3.75H38.0625V1.875C38.0625 0.839438 37.2231 0 36.1875 0C35.1519 0 34.3125 0.839438 34.3125 1.875V3.75H25.7812V1.875C25.7812 0.839438 24.9418 0 23.9062 0C22.8707 0 22.0312 0.839438 22.0312 1.875V3.75H13.5938V1.875C13.5938 0.839438 12.7543 0 11.7188 0C10.6832 0 9.84375 0.839438 9.84375 1.875V3.75H7.5C3.3645 3.75 0 7.1145 0 11.25V40.5C0 44.6355 3.3645 48 7.5 48H21.8438C22.8793 48 23.7188 47.1606 23.7188 46.125C23.7188 45.0894 22.8793 44.25 21.8438 44.25H7.5C5.43225 44.25 3.75 42.5677 3.75 40.5V11.25C3.75 9.18225 5.43225 7.5 7.5 7.5H9.84375V9.375C9.84375 10.4106 10.6832 11.25 11.7188 11.25C12.7543 11.25 13.5938 10.4106 13.5938 9.375V7.5H22.0312V9.375C22.0312 10.4106 22.8707 11.25 23.9062 11.25C24.9418 11.25 25.7812 10.4106 25.7812 9.375V7.5H34.3125V9.375C34.3125 10.4106 35.1519 11.25 36.1875 11.25C37.2231 11.25 38.0625 10.4106 38.0625 9.375V7.5H40.5C42.5677 7.5 44.25 9.18225 44.25 11.25V21.9375C44.25 22.9731 45.0894 23.8125 46.125 23.8125C47.1606 23.8125 48 22.9731 48 21.9375V11.25C48 7.1145 44.6355 3.75 40.5 3.75Z" fill="#EE224A"/>
                                <path d="M36.6562 25.3125C30.4012 25.3125 25.3125 30.4012 25.3125 36.6562C25.3125 42.9113 30.4012 48 36.6562 48C42.9113 48 48 42.9113 48 36.6562C48 30.4012 42.9113 25.3125 36.6562 25.3125ZM36.6562 44.25C32.4691 44.25 29.0625 40.8435 29.0625 36.6562C29.0625 32.469 32.4691 29.0625 36.6562 29.0625C40.8434 29.0625 44.25 32.469 44.25 36.6562C44.25 40.8435 40.8434 44.25 36.6562 44.25Z" fill="#EE224A"/>
                                <path d="M39.375 34.7812H38.5312V32.8125C38.5312 31.7769 37.6918 30.9375 36.6562 30.9375C35.6207 30.9375 34.7812 31.7769 34.7812 32.8125V36.6562C34.7812 37.6918 35.6207 38.5312 36.6562 38.5312H39.375C40.4106 38.5312 41.25 37.6918 41.25 36.6562C41.25 35.6207 40.4106 34.7812 39.375 34.7812Z" fill="#EE224A"/>
                                <path d="M28.0312 21.5625C29.0668 21.5625 29.9062 20.723 29.9062 19.6875C29.9062 18.652 29.0668 17.8125 28.0312 17.8125C26.9957 17.8125 26.1562 18.652 26.1562 19.6875C26.1562 20.723 26.9957 21.5625 28.0312 21.5625Z" fill="#EE224A"/>
                                <path d="M19.875 29.7188C20.9105 29.7188 21.75 28.8793 21.75 27.8438C21.75 26.8082 20.9105 25.9688 19.875 25.9688C18.8395 25.9688 18 26.8082 18 27.8438C18 28.8793 18.8395 29.7188 19.875 29.7188Z" fill="#EE224A"/>
                                <path d="M11.7188 21.5625C12.7543 21.5625 13.5938 20.723 13.5938 19.6875C13.5938 18.652 12.7543 17.8125 11.7188 17.8125C10.6832 17.8125 9.84375 18.652 9.84375 19.6875C9.84375 20.723 10.6832 21.5625 11.7188 21.5625Z" fill="#EE224A"/>
                                <path d="M11.7188 29.7188C12.7543 29.7188 13.5938 28.8793 13.5938 27.8438C13.5938 26.8082 12.7543 25.9688 11.7188 25.9688C10.6832 25.9688 9.84375 26.8082 9.84375 27.8438C9.84375 28.8793 10.6832 29.7188 11.7188 29.7188Z" fill="#EE224A"/>
                                <path d="M11.7188 37.875C12.7543 37.875 13.5938 37.0355 13.5938 36C13.5938 34.9645 12.7543 34.125 11.7188 34.125C10.6832 34.125 9.84375 34.9645 9.84375 36C9.84375 37.0355 10.6832 37.875 11.7188 37.875Z" fill="#EE224A"/>
                                <path d="M19.875 37.875C20.9105 37.875 21.75 37.0355 21.75 36C21.75 34.9645 20.9105 34.125 19.875 34.125C18.8395 34.125 18 34.9645 18 36C18 37.0355 18.8395 37.875 19.875 37.875Z" fill="#EE224A"/>
                                <path d="M19.875 21.5625C20.9105 21.5625 21.75 20.723 21.75 19.6875C21.75 18.652 20.9105 17.8125 19.875 17.8125C18.8395 17.8125 18 18.652 18 19.6875C18 20.723 18.8395 21.5625 19.875 21.5625Z" fill="#EE224A"/>
                            </svg>
                            <p>Flexible <br> Schedule</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ why choose sec end /-->

        <!--/ benifits sec start /-->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Benefits of CISSP Certification</h2>
                    </div>
                    <div class="col-12 mt-4">
                            <picture>
                                <source media="(min-width:768px)" srcset="assets/img/benifits.webp" alt="cissp benifits" loading="lazy"
                            class="img-fluid m-auto d-block">
                                <img src="assets/img/benifits-mob.webp" alt="cissp benifits" loading="lazy"
                            class="img-fluid m-auto d-block">
                            </picture>
                    </div>
                </div>
            </div>
        </section>
        <!--/ benifits sec end /-->

        <!--/ Gladiators sec start /-->
        <section class="gladiators py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Our Happy Gladiators</h2>
                    </div>
                </div>
                <div class="swiper myGladiators mt-4 py-5">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#F0F0F0" />
                            </svg>

                            <img src="assets/img/SureshKumarC.webp" alt="" loading="lazy">
                            <h4>Suresh Kumar C</h4>
                            <span>United Arab Emirates</span>
                            <img src="assets/img/icons/review.webp" alt="" loading="lazy">
                            <p>
                                It was a great experience to get my training from InfosecTrain. The trainer was accommodating and warm throughout the training sessions and a well knowledgeable person. He explained the concepts in simple terms and delivered the course in easy and an understandable manner. Any day it will be a delight to attend trainings at Infosec Train.

                            </p>

                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgright">
                                <path
                                    d="M40.6915 37.9301C44.1975 37.8378 46.9885 37.2609 49.0644 36.1995C51.1403 35.1841 52.778 33.5689 53.9774 31.3537C49.1797 31.3537 45.2124 30.1768 42.0754 27.8232C38.8924 25.4695 37.3008 21.639 37.3008 16.3317C37.3008 14.3472 37.6468 12.4089 38.3388 10.5168C39.0307 8.62459 40.0918 6.9401 41.5219 5.46329C42.9519 4.03262 44.6819 2.83271 46.7117 1.86356C48.7415 0.940548 51.0711 0.479042 53.7006 0.479042C58.9135 0.479042 63.1115 2.16353 66.2946 5.53251C69.4315 8.94764 71 13.4935 71 19.17C71 22.3082 70.5617 25.4695 69.6852 28.6539C68.7626 31.8844 67.148 34.8611 64.8414 37.584C62.5348 40.353 59.4209 42.7759 55.4998 44.8527C51.5786 46.9294 46.6425 48.3832 40.6915 49.2139V37.9301ZM3.80921 37.9301C7.31522 37.8378 10.1062 37.2609 12.1821 36.1995C14.258 35.1841 15.9188 33.5689 17.1643 31.3537C12.3205 31.3537 8.33012 30.1768 5.19317 27.8232C2.01008 25.4695 0.418533 21.639 0.418533 16.3317C0.418533 14.3472 0.78759 12.4089 1.5257 10.5168C2.21767 8.62459 3.2787 6.9401 4.70879 5.46329C6.09274 4.03262 7.79961 2.83271 9.8294 1.86356C11.8592 0.940548 14.2119 0.479042 16.8875 0.479042C22.0543 0.479042 26.2292 2.16353 29.4123 5.53251C32.5954 8.94764 34.1869 13.4935 34.1869 19.17C34.1869 22.3082 33.7487 25.4695 32.8722 28.6539C31.9495 31.8844 30.3349 34.8611 28.0283 37.584C25.6756 40.353 22.5387 42.7759 18.6175 44.8527C14.6963 46.9294 9.7602 48.3832 3.80921 49.2139V37.9301Z"
                                    fill="#F0F0F0" />
                            </svg>
                        </div>

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#F0F0F0" />
                            </svg>

                            <img src="assets/img/Gokul-Govindan.webp" alt="" loading="lazy">
                            <h4>Gokul Govindan</h4>
                            <span>Qatar</span>
                            <img src="assets/img/icons/review.webp" alt="" loading="lazy">
                            <p>
                                The training session was up to the mark and focused towards exam point of view.
                                These were good informative sessions which helped enhance overall view towards IT
                                Information security domain.
                            </p>

                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgright">
                                <path
                                    d="M40.6915 37.9301C44.1975 37.8378 46.9885 37.2609 49.0644 36.1995C51.1403 35.1841 52.778 33.5689 53.9774 31.3537C49.1797 31.3537 45.2124 30.1768 42.0754 27.8232C38.8924 25.4695 37.3008 21.639 37.3008 16.3317C37.3008 14.3472 37.6468 12.4089 38.3388 10.5168C39.0307 8.62459 40.0918 6.9401 41.5219 5.46329C42.9519 4.03262 44.6819 2.83271 46.7117 1.86356C48.7415 0.940548 51.0711 0.479042 53.7006 0.479042C58.9135 0.479042 63.1115 2.16353 66.2946 5.53251C69.4315 8.94764 71 13.4935 71 19.17C71 22.3082 70.5617 25.4695 69.6852 28.6539C68.7626 31.8844 67.148 34.8611 64.8414 37.584C62.5348 40.353 59.4209 42.7759 55.4998 44.8527C51.5786 46.9294 46.6425 48.3832 40.6915 49.2139V37.9301ZM3.80921 37.9301C7.31522 37.8378 10.1062 37.2609 12.1821 36.1995C14.258 35.1841 15.9188 33.5689 17.1643 31.3537C12.3205 31.3537 8.33012 30.1768 5.19317 27.8232C2.01008 25.4695 0.418533 21.639 0.418533 16.3317C0.418533 14.3472 0.78759 12.4089 1.5257 10.5168C2.21767 8.62459 3.2787 6.9401 4.70879 5.46329C6.09274 4.03262 7.79961 2.83271 9.8294 1.86356C11.8592 0.940548 14.2119 0.479042 16.8875 0.479042C22.0543 0.479042 26.2292 2.16353 29.4123 5.53251C32.5954 8.94764 34.1869 13.4935 34.1869 19.17C34.1869 22.3082 33.7487 25.4695 32.8722 28.6539C31.9495 31.8844 30.3349 34.8611 28.0283 37.584C25.6756 40.353 22.5387 42.7759 18.6175 44.8527C14.6963 46.9294 9.7602 48.3832 3.80921 49.2139V37.9301Z"
                                    fill="#F0F0F0" />
                            </svg>
                        </div>

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#F0F0F0" />
                            </svg>

                            <img src="assets/img/zuber.webp" alt="" loading="lazy">
                            <h4>Sayed Zuber</h4>
                            <span>india</span>
                            <img src="assets/img/icons/review.webp" alt="" loading="lazy">
                            <p>
                                The trainers are amazing. Before joining the course, I had tried learning from videos online but did't understand 5% of CISSP Concept . After getting training from Infosec Train I learned and cleared almost every doubt reagrding CISSP .. Now I feel very confident to attempt CISSP after completing this training . I thank my trainer from the bottom of my heart for giving such wonderful training and clearing a lot of concepts.
                            </p>

                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgright">
                                <path
                                    d="M40.6915 37.9301C44.1975 37.8378 46.9885 37.2609 49.0644 36.1995C51.1403 35.1841 52.778 33.5689 53.9774 31.3537C49.1797 31.3537 45.2124 30.1768 42.0754 27.8232C38.8924 25.4695 37.3008 21.639 37.3008 16.3317C37.3008 14.3472 37.6468 12.4089 38.3388 10.5168C39.0307 8.62459 40.0918 6.9401 41.5219 5.46329C42.9519 4.03262 44.6819 2.83271 46.7117 1.86356C48.7415 0.940548 51.0711 0.479042 53.7006 0.479042C58.9135 0.479042 63.1115 2.16353 66.2946 5.53251C69.4315 8.94764 71 13.4935 71 19.17C71 22.3082 70.5617 25.4695 69.6852 28.6539C68.7626 31.8844 67.148 34.8611 64.8414 37.584C62.5348 40.353 59.4209 42.7759 55.4998 44.8527C51.5786 46.9294 46.6425 48.3832 40.6915 49.2139V37.9301ZM3.80921 37.9301C7.31522 37.8378 10.1062 37.2609 12.1821 36.1995C14.258 35.1841 15.9188 33.5689 17.1643 31.3537C12.3205 31.3537 8.33012 30.1768 5.19317 27.8232C2.01008 25.4695 0.418533 21.639 0.418533 16.3317C0.418533 14.3472 0.78759 12.4089 1.5257 10.5168C2.21767 8.62459 3.2787 6.9401 4.70879 5.46329C6.09274 4.03262 7.79961 2.83271 9.8294 1.86356C11.8592 0.940548 14.2119 0.479042 16.8875 0.479042C22.0543 0.479042 26.2292 2.16353 29.4123 5.53251C32.5954 8.94764 34.1869 13.4935 34.1869 19.17C34.1869 22.3082 33.7487 25.4695 32.8722 28.6539C31.9495 31.8844 30.3349 34.8611 28.0283 37.584C25.6756 40.353 22.5387 42.7759 18.6175 44.8527C14.6963 46.9294 9.7602 48.3832 3.80921 49.2139V37.9301Z"
                                    fill="#F0F0F0" />
                            </svg>
                        </div>

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#F0F0F0" />
                            </svg>

                            <img src="assets/img/Namith-Devraj.webp" alt="" loading="lazy">
                            <h4>Namith Devraj</h4>
                            <span>india</span>
                            <img src="assets/img/icons/review.webp" alt="" loading="lazy">
                            <p>
                                The CISSP training was very informative and i gained a lot of knowledge in each of the 8
                                domains in depth.
                                The trainer had answered all the queries during the session and his way of presentation
                                was very simple and easy to follow.
                                Overall I am happy with the entire training and wish to take the examination soon.
                            </p>

                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgright">
                                <path
                                    d="M40.6915 37.9301C44.1975 37.8378 46.9885 37.2609 49.0644 36.1995C51.1403 35.1841 52.778 33.5689 53.9774 31.3537C49.1797 31.3537 45.2124 30.1768 42.0754 27.8232C38.8924 25.4695 37.3008 21.639 37.3008 16.3317C37.3008 14.3472 37.6468 12.4089 38.3388 10.5168C39.0307 8.62459 40.0918 6.9401 41.5219 5.46329C42.9519 4.03262 44.6819 2.83271 46.7117 1.86356C48.7415 0.940548 51.0711 0.479042 53.7006 0.479042C58.9135 0.479042 63.1115 2.16353 66.2946 5.53251C69.4315 8.94764 71 13.4935 71 19.17C71 22.3082 70.5617 25.4695 69.6852 28.6539C68.7626 31.8844 67.148 34.8611 64.8414 37.584C62.5348 40.353 59.4209 42.7759 55.4998 44.8527C51.5786 46.9294 46.6425 48.3832 40.6915 49.2139V37.9301ZM3.80921 37.9301C7.31522 37.8378 10.1062 37.2609 12.1821 36.1995C14.258 35.1841 15.9188 33.5689 17.1643 31.3537C12.3205 31.3537 8.33012 30.1768 5.19317 27.8232C2.01008 25.4695 0.418533 21.639 0.418533 16.3317C0.418533 14.3472 0.78759 12.4089 1.5257 10.5168C2.21767 8.62459 3.2787 6.9401 4.70879 5.46329C6.09274 4.03262 7.79961 2.83271 9.8294 1.86356C11.8592 0.940548 14.2119 0.479042 16.8875 0.479042C22.0543 0.479042 26.2292 2.16353 29.4123 5.53251C32.5954 8.94764 34.1869 13.4935 34.1869 19.17C34.1869 22.3082 33.7487 25.4695 32.8722 28.6539C31.9495 31.8844 30.3349 34.8611 28.0283 37.584C25.6756 40.353 22.5387 42.7759 18.6175 44.8527C14.6963 46.9294 9.7602 48.3832 3.80921 49.2139V37.9301Z"
                                    fill="#F0F0F0" />
                            </svg>
                        </div>

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#F0F0F0" />
                            </svg>

                            <img src="assets/img/Rafi.webp" alt="" loading="lazy">
                            <h4>Mohamed Rafi</h4>
                            <span>Kuwait</span>
                            <img src="assets/img/icons/review.webp" alt="" loading="lazy">
                            <p>
                                The class was very detailed and organized. I thoroughly enjoyed and have gained much
                                knowledge.
                                I liked that the course notes and powerpoint slides are really useful since they make it
                                easier
                                to understand textbooks and include more information which the textbooks lack sometimes.
                                I liked the trainer's quick response. The course at Infosec Train has surpassed my
                                expectations.
                                Overall I found it effective and I enjoyed it.
                            </p>

                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgright">
                                <path
                                    d="M40.6915 37.9301C44.1975 37.8378 46.9885 37.2609 49.0644 36.1995C51.1403 35.1841 52.778 33.5689 53.9774 31.3537C49.1797 31.3537 45.2124 30.1768 42.0754 27.8232C38.8924 25.4695 37.3008 21.639 37.3008 16.3317C37.3008 14.3472 37.6468 12.4089 38.3388 10.5168C39.0307 8.62459 40.0918 6.9401 41.5219 5.46329C42.9519 4.03262 44.6819 2.83271 46.7117 1.86356C48.7415 0.940548 51.0711 0.479042 53.7006 0.479042C58.9135 0.479042 63.1115 2.16353 66.2946 5.53251C69.4315 8.94764 71 13.4935 71 19.17C71 22.3082 70.5617 25.4695 69.6852 28.6539C68.7626 31.8844 67.148 34.8611 64.8414 37.584C62.5348 40.353 59.4209 42.7759 55.4998 44.8527C51.5786 46.9294 46.6425 48.3832 40.6915 49.2139V37.9301ZM3.80921 37.9301C7.31522 37.8378 10.1062 37.2609 12.1821 36.1995C14.258 35.1841 15.9188 33.5689 17.1643 31.3537C12.3205 31.3537 8.33012 30.1768 5.19317 27.8232C2.01008 25.4695 0.418533 21.639 0.418533 16.3317C0.418533 14.3472 0.78759 12.4089 1.5257 10.5168C2.21767 8.62459 3.2787 6.9401 4.70879 5.46329C6.09274 4.03262 7.79961 2.83271 9.8294 1.86356C11.8592 0.940548 14.2119 0.479042 16.8875 0.479042C22.0543 0.479042 26.2292 2.16353 29.4123 5.53251C32.5954 8.94764 34.1869 13.4935 34.1869 19.17C34.1869 22.3082 33.7487 25.4695 32.8722 28.6539C31.9495 31.8844 30.3349 34.8611 28.0283 37.584C25.6756 40.353 22.5387 42.7759 18.6175 44.8527C14.6963 46.9294 9.7602 48.3832 3.80921 49.2139V37.9301Z"
                                    fill="#F0F0F0" />
                            </svg>
                        </div>

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#F0F0F0" />
                            </svg>

                            <img src="assets/img/Reema-Patil.webp" alt="" loading="lazy">
                            <h4>Reema Patil</h4>
                            <span>india</span>
                            <img src="assets/img/icons/review.webp" alt="" loading="lazy">
                            <p>
                                It was great experience. Most of concepts were cleared in the course. The trainers are
                                really good and engaging.
                            </p>

                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50"
                                fill="none" class="svgright">
                                <path
                                    d="M40.6915 37.9301C44.1975 37.8378 46.9885 37.2609 49.0644 36.1995C51.1403 35.1841 52.778 33.5689 53.9774 31.3537C49.1797 31.3537 45.2124 30.1768 42.0754 27.8232C38.8924 25.4695 37.3008 21.639 37.3008 16.3317C37.3008 14.3472 37.6468 12.4089 38.3388 10.5168C39.0307 8.62459 40.0918 6.9401 41.5219 5.46329C42.9519 4.03262 44.6819 2.83271 46.7117 1.86356C48.7415 0.940548 51.0711 0.479042 53.7006 0.479042C58.9135 0.479042 63.1115 2.16353 66.2946 5.53251C69.4315 8.94764 71 13.4935 71 19.17C71 22.3082 70.5617 25.4695 69.6852 28.6539C68.7626 31.8844 67.148 34.8611 64.8414 37.584C62.5348 40.353 59.4209 42.7759 55.4998 44.8527C51.5786 46.9294 46.6425 48.3832 40.6915 49.2139V37.9301ZM3.80921 37.9301C7.31522 37.8378 10.1062 37.2609 12.1821 36.1995C14.258 35.1841 15.9188 33.5689 17.1643 31.3537C12.3205 31.3537 8.33012 30.1768 5.19317 27.8232C2.01008 25.4695 0.418533 21.639 0.418533 16.3317C0.418533 14.3472 0.78759 12.4089 1.5257 10.5168C2.21767 8.62459 3.2787 6.9401 4.70879 5.46329C6.09274 4.03262 7.79961 2.83271 9.8294 1.86356C11.8592 0.940548 14.2119 0.479042 16.8875 0.479042C22.0543 0.479042 26.2292 2.16353 29.4123 5.53251C32.5954 8.94764 34.1869 13.4935 34.1869 19.17C34.1869 22.3082 33.7487 25.4695 32.8722 28.6539C31.9495 31.8844 30.3349 34.8611 28.0283 37.584C25.6756 40.353 22.5387 42.7759 18.6175 44.8527C14.6963 46.9294 9.7602 48.3832 3.80921 49.2139V37.9301Z"
                                    fill="#F0F0F0" />
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!--/ Gladiators sec end /-->

        <!--/ faq start /-->
        <section class="faqsec py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-12">
                        <div class="accordion" id="myAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">What is the CISSP® exam?</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                    <div class="accordion-body faqbody">
                                        <p>
                                            CISSP or the 'Certified Information Systems Security Professional' is considered to be the gold standard of all Information security certifications. The CISSP certification shows that “you have the knowledge and experience to design, develop and manage the overall security posture of an organization” (ISC)2 The exam tests you on eight domains which are 'Security and Risk Management', 'Asset Security', 'Security Architecture and Engineering', 'Communications and Network Security', 'Identity and Access Management', 'Security Assessment and Testing', 'Security Operations', 'Software Development Security'.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">Am I qualified to take the exam?</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    data-bs-parent="#myAccordion">
                                    <div class="accordion-body faqbody">
                                        <p>
                                            If you have 5 years of full-time security experience in two of the eight domains of the (ISC)2 CISSP® CBK(Common body of knowledge) you can definitely take the exam.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree"> I am a 'Security Analyst' - do I need the CISSP®?</button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#myAccordion">
                                    <div class="accordion-body faqbody">
                                        <p>
                                            Yes, if you are a 'Security Analyst' you will need the CISSP® credential to boost your career. Here are some other job titles that could benefit from having the CISSP:
                                        </p>
                                        <ul>
                                            <li>Chief Information Officer</li>
                                            <li>Chief Information Security Officer</li>
                                            <li>Director of Security</li>
                                            <li>IT Director/Manager</li>
                                            <li>Network Architect</li>
                                            <li>Security Analyst</li>
                                            <li>Security Architect</li>
                                            <li>Security Auditor</li>
                                            <li>Security Consultant</li>
                                            <li>Security Manager</li>
                                            <li>Security Systems Engineer</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">I only have 2 years of full time experience - what should I do then to take the exam?</button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#myAccordion">
                                    <div class="accordion-body faqbody">
                                        <p>
                                            All is not lost when you have only 2 years of full time experience.
                                            You can take the exam and become an associate of (ISC)2 and can then work towards getting the required amount of experience.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">Who conducts the CISSP® exam?</button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#myAccordion">
                                    <div class="accordion-body faqbody">
                                        <p>
                                            The CISSP exam is conducted by 'International Information Systems Security Certification Consortium' or (ISC)2
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">Can you give me some more details about the exam?</button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#myAccordion">
                                    <div class="accordion-body faqbody">
                                        <ul>
                                            <li>The exam has about 175 questions</li>
                                            <li>The candidate must score 700 out of a possible 1000 points to pass the exam</li>
                                            <li>The duration of the exam is about 4 hrs.</li>
                                            <li>All English versions of the CISSP® exam use CAT or 'Computerized adaptive testing'</li>
                                            <li>The candidate can check the pricing of the exam from <a href="https://www.isc2.org/Register-for-Exam/ISC2-Exam-Pricing" rel="nofollow">this</a> link</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven">What are CPEs?</button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    data-bs-parent="#myAccordion">
                                    <div class="accordion-body faqbody">
                                        <p>
                                            Once you are CISSP® certified, you become a member of (ISC)2. The candidate is then required to recertify once every three years to maintain the certification. Recertification is done by gaining CPEs and paying an AMF of 125$.
                                        </p>
                                        <p>
                                        CPEs are  ‘Continuing Professional Education’  and some of the ways in which they can be accrued are by joining webinars, authoring an Information security article that is published in a journal or magazine, reading a book relating to CISSP® and writing a review, attending (ISC)2  chapter meetings, volunteering and more.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight">How will the CISSP® credential help me in my career?</button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    data-bs-parent="#myAccordion">
                                    <div class="accordion-body faqbody">
                                        <p>The Infosec domain is growing by leaps and bounds every day.  The CISSP® credential will help you in the following ways:</p>
                                        <ul>
                                            <li>You will be respected more in the InfoSec community</li>
                                            <li>CISSP® certification will open the doors to new employment opportunities</li>
                                            <li>In spite of so many certifications being around, the CISSP certification is still “the” one certification that is demanded by most employers</li>
                                            <li>The CISSP® will also pave the way for higher salaries</li>
                                            <li>Since the CISSP® is a vendor neutral certification, you will be able to apply the skills to different technologies and methodologies.</li>
                                            <li>You will gain a deeper knowledge of the different domains in cyber security</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ faq end /-->

        <!--/ footer contact us-->
        <section class="py-5 footer-contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mt-4 mt-md-0 pb48">
                        <div class="item">
                            <img src="assets/img/cissp-gladiators.webp" alt="cissp-gladiators" loading="lazy"
                                class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <h2>
                                Want more clarity? <br>
                                Contact us now
                            </h2>
                            <div class="hide rows  mt-2" id="demo_form_output_footer"> </div>
                            <form method="post" action="" onSubmit="return val_demo_request_footer(this.form);" id="demo_me_phone_f_footer">
                                <input type="text" name="me_name" id="me_name_footer" placeholder="fill name">
                                <input type="email" name="me_email" id="me_email_footer" placeholder="email">
                                <input type="number" name="me_phone" id="me_phone_footer" placeholder="mobile">

                                <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.html" id="me_redirect_footer">
                                <input type="hidden" value="CISSP Training" id="me_others_footer" name="me_others">
                                <input type="hidden" value="<?php echo $pag_url; ?>" id="me_pageurl_footer" name="me_pageurl">

                                <button value="submit" name="me_submited" id="me_submited_footer">submit</button>

                                <div class="loading_w hide" id="loading_w_footer"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif" /></div>

                                <p id="#result"></p>
                            </form>
                            <p>
                                Our learning advisors will get back to you in the shortest possible time.
                                Meanwhile, you can also write to us at sales@infosectrain.com.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <a href="https://api.whatsapp.com/send?phone=918767256840&amp;text=Hi" target="_blank" class="item justify-content-lg-center">
                            <img src="assets/img/icons/WhatsApp.webp" alt="whatsapp" loading="lazy">
                            <span>+91-87672-56840</span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 my-4 my-md-0">
                        <div class="item justify-content-lg-center d-flex">
                            <img src="assets/img/icons/Phone.webp" alt="whatsapp" loading="lazy">
                            <div>
                                <span class="fw-bold"> <a href="tel:1800-843-7890" target="_blank" class="text-white text-decoration-none">1800-843-7890 (IN)</a></span>
                                <span class="fw-bold"> <a href="tel:+16572211127" target="_blank"  class="text-white text-decoration-none">+1 657-221-1127 (USA)</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="mailto:sales@infosectrain.com" target="_blank" class="item justify-content-lg-center">
                            <img src="assets/img/icons/Email.webp" alt="whatsapp" loading="lazy">
                            <span>sales@infosectrain.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ footer contact us end-->

    </main>

    <!--/ footer start /-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <h3>About InfosecTrain</h3>
                        <p>
                            Infosec Train offers complete training and consulting solutions to its customers globally.
                            Whether the requirements are technical services, certification or custom training, Infosec
                            Train has consistently delivered the highest quality and best success rates in the industry.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">An Overview</a></li>
                            <li><a href="#">Course Details</a></li>
                            <li><a href="#">Training Calendar</a></li>
                            <li><a href="#">Our Experts</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <h3>Corporate Office</h3>
                        <p>
                            1st Floor, Pine Valley Building, <br>
                            Embassy Golf Links, Off Intermediate Ring <br> Road,Bangalore, 560071, India
                        </p>
                        <div class="d-flex">
                            <a href="https://www.facebook.com/Infosectrain" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                    <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient><path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path><path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/infosectrain/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                    <radialGradient id="ICE1RaTzda0tEyvm8~Oxta_uNToIe0zQRBV_gr1" cx="11.013" cy="-129.653" r="44.899" gradientTransform="translate(0 174)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".039" stop-color="#ffcf49"></stop><stop offset=".113" stop-color="#ffa92b"></stop><stop offset=".165" stop-color="#ff8a12"></stop><stop offset=".226" stop-color="#ff7325"></stop><stop offset=".295" stop-color="#ff543f"></stop><stop offset=".423" stop-color="#fc5245"></stop><stop offset=".541" stop-color="#e64771"></stop><stop offset=".653" stop-color="#d53e91"></stop><stop offset=".756" stop-color="#cc39a4"></stop><stop offset=".837" stop-color="#c837ab"></stop></radialGradient><path fill="url(#ICE1RaTzda0tEyvm8~Oxta_uNToIe0zQRBV_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992L5.993,17L7,16l-1.01-1.983	c-0.004-4.125,3.157-7.55,7.177-7.966C13.435,6.024,15,7,15,7l1.7-0.994l9.52-0.009L28,7l1.7-1.006l4.282-0.004	c4.4-0.004,8.003,3.592,8.008,7.992L41,15l0.993,2l0.016,16.982C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M18,33.114v-9.228c0-1.539,1.666-2.502,2.999-1.732l7.998,4.614c1.334,0.77,1.334,2.695,0,3.465	l-7.998,4.614C19.666,35.616,18,34.653,18,33.114z"></path><path fill="#fff" d="M41.99,14v3h-36v-2.98c0-0.01,0-0.01,0-0.02h11.9l-4.65-7.96c0.24-0.02,0.49-0.03,0.74-0.03h2.72	L21.36,14h9.53l-4.67-8l3.48-0.01L34.36,14H41.99z"></path>
                                </svg>
                            </a>
                            <a href="https://twitter.com/Infosec_Train" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                    <path fill="#03A9F4" d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path>
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/c/InfosecTrain" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                    <path fill="#FF3D00" d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z"></path><path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/infosec-train/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                    <path fill="#0288D1" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path><path fill="#FFF" d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="py-2" style="background: #232323;">
        <p class="text-center mb-0 text-white">© 2023 - Infosec Train. All Rights Reserved.</p>
    </div>
    <!--/ footer end /-->

<!--/ model form start /-->
<!-- The Modal -->
<div class="modal justify-content-center align-items-center" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header border-0">
        <h4 class="modal-title">
            <strong>Talk</strong> <span style="font-weight:200">To</span> <strong style="color:#FFAF19;">Our Experts</strong>
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal">x</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body modelData">
        <div class="hide rows  mt-2" id="demo_form_output_pop"> </div>
        <form method="post" action="" onSubmit="return val_demo_request_pop(this.form);" id="demo_me_phone_f_pop">
            <input type="text" name="me_name" id="me_name_pop" placeholder="full name">
            <input type="email" name="me_email" id="me_email_pop" placeholder="email">
            <input type="number" name="me_phone" id="me_phone_pop" placeholder="mobile">

            <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.html" id="me_redirect_pop">
            <input type="hidden" value="CISSP Training" id="me_others_pop" name="me_others">
            <input type="hidden" value="" id="me_message" name="me_message">
            <input type="hidden" value="<?php echo $pag_url; ?>" id="me_pageurl_pop" name="me_pageurl">

            <button type="submit" name="me_submited" id="me_submited_pop">Request a Callback</button>

            <div class="loading_w hide" id="loading_w_pop"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif" /></div>
            <p id="#result"></p>
        </form>
        <img src="assets/img/form-person.webp" alt="" loading="lazy" class="model-person">
      </div>
      <div class="modal-footer justify-content-around border-0 pt-0">
        <div class="text-center w-100 fs-4 fw-bold text-white">
            Connect with Us
        </div>
        <a href="https://api.whatsapp.com/send?phone=918767256840&amp;text=Hi" target="_blank">
           <img src="assets/img/icons/WhatsApp.webp" alt="" width="25"> +91-87672-56840
        </a>
        <a href="tel:1800-843-7890">
          <img src="assets/img/icons/Phone.webp" alt="" width="25">  1800-843-7890 (IN)
        </a>
      </div>
    </div>
  </div>
</div>
<!--model form end /-->
<!--/ top up button start /-->
<img src="assets/img/topup.png" alt="Top" onClick="topFunction()" class="topBtn" style="right: 25px;">
<!--/ top up button end /-->
<!--/ fixed footer /-->
<section class="fixed-footer sticky-footer" style="bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <ul class="d-none d-md-flex justify-content-center mb-0 align-items-center">
                    <li>
                        <a href="tel:1800-843-7890">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                <style>
                                    svg {
                                        fill: #ffffff;
                                    }
                                </style>

                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"
                                ></path>
                            </svg>

                            1800-843-7890 (IN)
                        </a>
                    </li>

                    <li>
                        <button data-bs-toggle="modal" class="" data-bs-target="#myModal">
                            Enroll Now

                        </button>
                    </li>
                </ul>

                <ul class="d-flex d-md-none ps-0">
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=918767256840&amp;text=Hi" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                <style>
                                    svg {
                                        fill: #09ff05;
                                    }
                                </style>

                                <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
                                ></path>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="tel:1800-843-7890" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                <style>
                                    svg {
                                        fill: #ffffff;
                                    }
                                </style>

                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"
                                ></path>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                <style>
                                    svg {
                                        fill: #ffffff;
                                    }
                                </style>

                                <path
                                    d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"
                                ></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--/ fixed footer end /-->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js" defer></script>
<script src="assets/js/custom.js" defer></script>
<script src="assets/js/common.min.js" defer></script>
</html>