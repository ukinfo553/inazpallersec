<?php

include('include/comman_use.php');
include('../lp-components/api_handler.php');

// Set the course ID dynamically
$courseID = 48201;  // Change this to the specific course ID for different pages

// Fetch the course data using the global API handler function
$course_data = get_brochure_data($courseID);

// Check if the data is successfully fetched
if ($course_data !== null) {
    // Extract data (assuming the response is in the expected structure)
    $brochure = isset($course_data[0]['brochure']) ? $course_data[0]['brochure'] : null;  // Access brochure link
    $course_details = isset($course_data[0]['course_details']) ? $course_data[0]['course_details'] : null;  // Access course details
    $faq = isset($course_data[0]['faq']) ? $course_data[0]['faq'] : null;  // Access FAQ data
} else {
    // Handle the case where no data was fetched
    echo "Failed to fetch course data.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CISO Foundation: A Hands-On Training to Building Enterprise Security Program</title>
    <meta name="description"
        content="Enroll in the Enterprise Information Security Hands-on Training Program by InfosecTrain. Master enterprise cybersecurity, risk management, and compliance skills">
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" href="assets/images/favicon.ico">
    <!--/ style link start /-->
    <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet" defer>
    <link rel="stylesheet" href="assets/css/style.css" defer>
    <link rel="stylesheet" href="../lp-components/css_handler.php" defer>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" defer />
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

    <!--/ navbar start /-->
    <nav class="navbar navbar-expand-lg py-3 d-flex">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-6 col-lg-2 cl-xl-3">
                    <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/logo.svg"
                        class="navbar-brand" alt="infosectrain" loading="lazy" width="306" height="31" />
                </div>
                <div class="col-6 col-lg-10 col-xl-9 d-flex justify-content-end">
                    <input id="toggle" type="checkbox" />
                    <label for="toggle" class="hamburger">
                        <div class="top-bun"></div>
                        <div class="meat"></div>
                        <div class="bottom-bun"></div>
                    </label>
                    <ul class="sidenav">
                        <li>
                            <a href="#overview" onClick="hideSidebar()">Overview</a>
                        </li>
                        <li>
                            <a href="#training-calendar">Training Calendar</a>
                        </li>
                        <li>
                            <a href="#instructor">Meet Our Instructor</a>
                        </li>
                        <li>
                            <a href="#benefits">Career Benefits</a>
                        </li>
                        <li>
                            <a href="#reviews">Testimonials</a>
                        </li>
                        <li>
                            <button class="cta-button modal-btn button2" title="Get Free Demo">
                                Get Free Demo
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--/ navbar end /-->

    <main>
        <!--<[banner sec start]>-->
        <section class="banner-sec">
            <div class="container">
                <div class="row align-items-center flex-column-reverse flex-md-row">
                    <!--/ col start /-->
                    <div class="col-lg-7 col-md-6">
                        <div class="item">
                            <h3 class="d-none d-lg-block">Craft a Resilient Enterprise Where Security Meets Strategy</h3>
                            <h1>CISO Foundation: A Hands-On Training to Building Enterprise Security Program</h1>
                            <!-- <h3>Prepare For CISSP Exam</h3> -->
                            <div class="d-flex flex-row banner-highlights">
                                <div>
                                    <span> 93% Increase in CISO </span>
                                    <p>Related Jobs</p>
                                </div>
                                <div>
                                    <span>$161,250</span>
                                    <p>Median Salary of a Chief Information Security Officer</p>
                                </div>
                            </div>
                            <div class="button-sec">
                                <button class="cta-button modal-btn" title="Talk to Our Expert"
                                    modal-title="TALK TO OUR EXPERT">Talk to Our Expert</button>

                                <?php
                                // Display the Brochure section if the data is available
                                if ($brochure !== null && !empty($brochure)) {
                                    echo '<a href="' . $brochure . '" target="_blank" class="cta-button"
                                    title="Download Brochure">Download Brochure</a>';
                                }
                                ?>
                            </div>
                            <img src="assets/images/review-mob-img.png" alt="Agentic AI Training for Non-Tech"
                                width="636" height="34" fetchPriority="high" class="review-img">
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-5 col-md-6 d-none d-md-block">
                        <div class="item">
                            <img src="assets/images/Advanced-AI-Audit-Certification-Training-BANNER.webp"
                                fetchPriority="high" alt="Agentic AI Training for Non-Tech" width="400"
                                height="400">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[banner sec end]>-->

        <section id="overview">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <!--<[ highlights-sec start ]>-->
                        <div class="highlights-sec">
                            <h2>Training Course Highlights</h2>
                            <div class="highlights-body">
                                <!--<[ highlights item start ]>-->
                                <div class="col-highlights">
                                    <img src="assets/images/highlight-icon/time.svg"
                                        alt="Agentic AI Training for Non-Tech Course Highlights" width="45"
                                        height="45">
                                    <p>32-Hour Live Instructor-Led Training (Workshop)</p>
                                </div>
                                <!--<[ highlights item start ]>-->
                                <div class="col-highlights">
                                    <img src="assets/images/highlight-icon/video-recording.svg"
                                        alt="Agentic AI Training for Non-Tech Course Highlights" width="45"
                                        height="45">
                                    <p>Hands-On Learning</p>
                                </div>
                                <!--<[ highlights item start ]>-->
                                <div class="col-highlights">
                                    <img src="assets/images/highlight-icon/isaca-premium.svg"
                                        alt="Agentic AI Training for Non-Tech Course Highlights" width="45"
                                        height="45">
                                    <p>Practical Implementation</p>
                                </div>
                                <!--<[ highlights item start ]>-->
                                <div class="col-highlights">
                                    <img src="assets/images/highlight-icon/batch.svg"
                                        alt="Agentic AI Training for Non-Tech Course Highlights" width="45"
                                        height="45">
                                    <p>Policy Development</p>
                                </div>
                                <!--<[ highlights item start ]>-->
                                <div class="col-highlights">
                                    <img src="assets/images/highlight-icon/passed-rate.svg"
                                        alt="Agentic AI Training for Non-Tech Course Highlights" width="45"
                                        height="45">
                                    <p>Highly Interactive & Dynamic Sessions</p>
                                </div>
                                <!--<[ highlights item start ]>-->
                                <div class="col-highlights">
                                    <img src="assets/images/highlight-icon/customer-service.svg"
                                        alt="Agentic AI Training for Non-Tech Course Highlights" width="45"
                                        height="45">
                                    <p>Certified Expert with 24+ Years of Experience</p>
                                </div>
                                <!--<[ highlights item start ]>-->
                                <div class="col-highlights">
                                    <img src="assets/images/highlight-icon/certified-trainner.svg"
                                        alt="Agentic AI Training for Non-Tech Course Highlights" width="45"
                                        height="45">
                                    <p>Career Guidance & Mentorship</p>
                                </div>
                                <!--<[ highlights item start ]>-->
                                <div class="col-highlights">
                                    <img src="assets/images/highlight-icon/learning.svg"
                                        alt="Agentic AI Training for Non-Tech Course Highlights" width="45"
                                        height="45">
                                    <p>Access to Recorded Sessions</p>
                                </div>
                            </div>
                            <div class="item-footer d-flex">
                                <img src="assets/images/highlight-icon/100-satisfaction.webp"
                                    alt="Agentic AI Training for Non-Tech Course Highlights" width="100"
                                    height="100" loading="lazy">
                                <img src="assets/images/highlight-icon/money-back.webp"
                                    alt="Agentic AI Training for Non-Tech Course Highlights" width="100"
                                    height="100" loading="lazy">
                            </div>
                            <!-- <p style="margin-top: 24px;opacity: .8;">* Conditions Apply</p><br> -->
                        </div>
                        <!--<[ highlights-sec end ]>-->

                        <!--<[ course details sec start ]>-->
                        <div class="course-details">
                            <div class="course-overview">
                                <h2>CISO Foundation Hands-On Training- An Overview</h2>
                                <p>The Enterprise Information Security Program takes participants through the full lifecycle of building and sustaining an enterprise information security program, from business alignment and risk assessment to governance, audit, and continuous improvement. Through real-world examples and case-driven exercises, participants learn how to assess current security posture, identify compliance gaps, and design scalable policies that align with global standards such as ISO/IEC 27001:2022 and NIST CSF 2.0. Whether you’re developing a new security roadmap or refining an existing one, this program provides the tools, methodologies, and leadership mindset to build resilient, compliant, and adaptive enterprise security frameworks.</p>
                            </div>
                            <div class="faq-wrapper">
                                <!--/ faq item /-->
                                <?php
                                // Check that course_details exists and is a non-empty array
                                if (!empty($course_details) && is_array($course_details)) {
                                    foreach ($course_details as $index => $detail) {
                                        // Make the first item active and open
                                        $activeClass = $index === 0 ? 'active open' : '';
                                ?>
                                        <div class="faq-item <?php echo $activeClass; ?>">
                                            <h3 class="faq-title">
                                                <span class="title"><?php echo htmlspecialchars($detail['title']); ?></span>
                                                <span class="right-icon"></span>
                                            </h3>
                                            <div class="faq-content">
                                                <?php echo $detail['ans']; ?>

                                                <?php
                                                // If this is the first item and $brochureLink is set, show brochure button
                                                if ($index === 0 && !empty($brochure)) {
                                                    echo '<a href="' . htmlspecialchars($brochure) . '" target="_blank" class="cta-button" title="Download Brochure">Download Brochure</a>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <!--<[ course details sec end ]>-->
                    </div>
                    <!--<[ form sec start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="form-item sticky-section" id="free_demo">
                            <div class="hide rows  mt-2" id="demo_form_output"> </div>

                            <form method="post" action="" onSubmit="return val_demo_request(this.form);"
                                id="demo_me_phone_f">
                                <h3 class="form-heading">Talk To Our Experts</h3>
                                <input type="text" class="form-control" id="me_name" name="me_name"
                                    placeholder="Full Name">
                                <input type="email" class="form-control" id="me_email" name="me_email"
                                    placeholder="Email">
                                <input type="number" class="form-control" id="me_phone" name="me_phone"
                                    placeholder="Mobile">
                                <input type="text" class="form-control" id="me_message" name="me_message"
                                    placeholder="Mention your call time preference">

                                <input type="hidden" id="me_redirect" value="<?php echo BASE_URL; ?>thank-you.php">
                                <input type="hidden" id="me_others" name="me_others" value="Talk To Our Experts">
                                <input type="hidden" id="me_pageurl" name="me_pageurl"
                                    value="<?php echo $pag_url; ?>">

                                <!-- Privacy Policy Checkbox -->
                                <label
                                    style="color:var(--white); font-size: 14px; margin-top: 16px;display: flex; align-items: start;gap: 8px;">
                                    <input type="checkbox" name="privacy_policy" checked required
                                        style="accent-color: var(--red); border: 1px solid var(--red); margin-top: 4px;">
                                    <span>
                                        By submitting your contact details, you agree to our <a
                                            href="https://www.infosectrain.com/privacy-policy/" target="_blank"
                                            style="color: var(--white);font-size:14px;">Privacy Policy</a>
                                    </span>
                                </label>
                                <!-- privacy Policy Checkbox end -->

                                <button class="cta-button form-button" type="submit" name="me_submited"
                                    id="me_submited">Request a Callback</button>

                                <div class="loading_w hide" id="loading_w">
                                    <img src="<?php echo BASE_URL; ?>assets/images/loader.gif" loading="lazy"
                                        class="d-block mx-auto mt-2">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--<[ form sec end ]>-->
                </div>
            </div>
        </section>

        <!--/ training calendar sec start /-->
        <?php if (!empty($courseID)): ?>
            <section class="training-calendar" id="training-calendar">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>CISO Foundation Hands-On Training Calendar</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php
                            $url = "https://www.infosectrain.com/api/$courseID/href_toscroll/free_demo";
                            function gettraning_Cal($url)
                            {
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

                                curl_close($ch);
                                return $content;
                            }

                            gettraning_Cal($url);

                            ?>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-2 d-none d-lg-block">
                            <img src="assets/images/training-calendar.webp" width="132" height="128"
                                alt="Agentic AI Training for Non-Tech" class="img-fluid">
                        </div>

                        <div class="col-lg-10 col-md-12">
                            <h3>Can't Find a Suitable Schedule? Talk to Our Training Advisor!</h3>
                            <div class="hide rows mt-2" id="demo_form_output_calendar"></div>
                            <form method="post" action="" onSubmit="return val_demo_request_calendar(this.form);"
                                id="demo_contact_f_calendar">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <input type="text" id="me_name_calendar" name="me_name" class="form-control"
                                            placeholder="Full Name" />
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="me_email_calendar" name="me_email" class="form-control"
                                            placeholder="Email" />
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="me_phone_calendar" name="me_phone" class="form-control"
                                            placeholder="Mobile" />
                                    </div>
                                    <input type="hidden" id="me_redirect_calendar"
                                        value="<?php echo BASE_URL; ?>thank-you.php" />
                                    <input type="hidden" id="me_others_calendar" name="me_others"
                                        value="Talk to Our Training Advisor" />
                                    <input type="hidden" id="me_pageurl_calendar" name="me_pageurl"
                                        value="<?php echo $pag_url; ?>" />

                                    <div class="col-md-3">
                                        <button class="cta-button form-button" type="submit" name="me_submited"
                                            id="me_submited_calendar">Request a Callback</button>
                                    </div>
                                </div>
                                <div class="loading_w hide" id="loading_w_calendar">
                                    <center>
                                        <img src="<?php echo BASE_URL; ?>assets/images/loader.gif" />
                                    </center>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!--/ training calendar sec end /-->

        <!--offer sec start -->
        <!--/ related courses /-->
        <?php // Include the related_courses.php file
        include('../lp-components/offer.php');
        ?>
        <!--/ related courses /-->
        <!--offer sec end -->

        <!--<[Learning mode sec end]>-->
        <section class="learning-mode-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Choose Your Preferred Learning Mode</h2>
                    </div>
                </div>
                <div class="row">
                    <!--<[col start]>-->
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <img src="assets/images/one-on-one.png" width="91" height="90" alt="1-TO-1 Training">
                            <span>1-TO-1 TRAINING</span>
                            <ul>
                                <li>Customized Schedule</li>
                                <li>Learn at Your Dedicated Hour</li>
                                <li>Instant Clarification of Doubts</li>
                                <li>Guaranteed to Run</li>
                            </ul>
                            <div class="item-footer">
                                <button class="cta-button modal-btn" title="1-TO-1 TRAINING"> GET STARTED</button>
                            </div>
                        </div>
                    </div>
                    <!--<[col start]>-->
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <img src="assets/images/online-training.png" width="91" height="90"
                                alt="Online Training">
                            <span>ONLINE TRAINING</span>
                            <ul>
                                <li>Flexible, Convenient & Time Saving</li>
                                <li>Highly Interactive</li>
                                <li>Affordable Yet Effective</li>
                                <li>Guaranteed to Run</li>
                            </ul>
                            <div class="item-footer">
                                <button class="cta-button modal-btn" title="ONLINE TRAINING">ENROLL NOW</button>
                            </div>
                        </div>
                    </div>
                    <!--<[col start]>-->
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <img src="assets/images/corporate-training.png" width="91" height="90"
                                alt="Corporate Training">
                            <span>CORPORATE TRAINING</span>
                            <ul>
                                <li>Anytime, Anywhere - Across The Globe</li>
                                <li>Hire a Trainer</li>
                                <li>Your Schedule, Your Pace</li>
                                <li>Customized for Your Team</li>
                            </ul>
                            <div class="item-footer">
                                <button class="cta-button modal-btn" title="CORPORATE TRAINING">CONTACT US</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[Learning mode sec end]>-->

        <!--<[corparate training start]>-->
        <section class="corparate-training" style="padding: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="modal-btn" title="Corparate Training">
                            <picture>
                                <source media="(min-width:768px)" width="1400" height="420"
                                    srcset="assets/images/Advanced-AI-Audit-Certification-Training-corporate-training-web.webp">
                                <img src="assets/images/Advanced-AI-Audit-Certification-Training-corporate-training-mob.webp"
                                    width="364" height="301" alt="Agentic AI Training for Non-Tech"
                                    style="width: 100%;height: auto;display: block;">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--<[corparate training end]>-->

        <!--<[expert sec start]>-->
        <section class="expert-sec" id="instructor">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Expert Course Advisors</h2>
                    </div>
                </div>

                <div class="swiper myAdvisor">
                    <div class="swiper-wrapper justify-content-md-center">
                        <!--/ col start /-->
                        <div class="swiper-slide item">
                            <div class="profile-desc">
                                <div class="avtar-data">
                                    <div class="avtar-name">
                                        RAHUL
                                    </div>
                                    <div class="avtar-exp">
                                        24+ Years of Experience
                                    </div>
                                </div>
                            </div>
                            <div class="designation">
                                Principal Consultant - GRC | CMGR | MCMI | MIET | MBCS | CITP | CISSP | CIPM | CISM
                            </div>
                            <div class="summary">
                                Rahul is a seasoned GRC and cybersecurity consultant with over 24 years of experience in information security, data privacy, and business continuity. He holds prestigious designations as a Chartered Manager (CMI, UK) and Chartered IT Professional (BCS, UK). Rahul has successfully implemented, operated, and audited global governance frameworks and ISO standards across complex hybrid organizations. With experience as a vCISO, vDPO, and global head of information security, he specializes in aligning process and technology controls with business goals, driving compliance, and managing secure enterprise transformations.
                            </div>
                        </div>
                        <!--/ col end /-->
                    </div>
                    <div class="d-flex justify-content-center align-items-center navigation">
                        <div class="swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 16"
                                fill="none">
                                <path
                                    d="M17 7C17.5523 7 18 7.44772 18 8C18 8.55228 17.5523 9 17 9V7ZM0.292892 8.70711C-0.0976315 8.31658 -0.0976315 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM17 9H1V7H17V9Z"
                                    fill="#e50914" />
                            </svg>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 16"
                                fill="none">
                                <path
                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM17.7071 8.70711C18.0976 8.31658 18.0976 7.68342 17.7071 7.29289L11.3431 0.928932C10.9526 0.538408 10.3195 0.538408 9.92893 0.928932C9.53841 1.31946 9.53841 1.95262 9.92893 2.34315L15.5858 8L9.92893 13.6569C9.53841 14.0474 9.53841 14.6805 9.92893 15.0711C10.3195 15.4616 10.9526 15.4616 11.3431 15.0711L17.7071 8.70711ZM1 9H17V7H1V9Z"
                                    fill="#e50914" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[expert sec end]>-->

        <!--<[why choose sec start]>-->
        <section class="why-choose" id="why-choose" style="background-color:#F0F0F0;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Why Choose InfosecTrain?</h2>
                    </div>
                </div>
                <div class="row">
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/certified-trainers.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Learn from certified trainers with <strong>industry experience</strong></p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/assessment-practice.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Immerse in <b>scenario-based learning</b></p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/cippe-domains.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Best Quality Training with <strong>Best Price Guarantee</strong></p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/price-list.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p><strong>Updated curriculum</strong> aligned with the latest industry standards</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/exam.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p><strong>Hands-on, scenario-based </strong>enterprise security program training</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/certificate.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Mentorship from a <strong>CISO with 24+ years experience</strong></p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/course-curriculum.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Build practical, measurable <strong>security policies</strong> and frameworks</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/learning-schedule.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Choose <strong> Flexible Learning</strong> options, including weekend batches</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[why choose sec end]>-->

        <!--<[Benefits sec start]>-->
        <section class="benefits-sec" id="benefits">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Benefits of CISO Foundation Hands-On Training</h2>
                    </div>
                </div>

                <div class="row align-items-center benefits-row-two">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center benifits-item">
                            <div class="flex-shrink-0">
                                <img src="assets/images/benifits/global-recognition.svg" width="22" height="22"
                                    alt="Benefits of Agentic AI Training for Non-Tech">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p>Get global recognition</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center benifits-item">
                            <div class="flex-shrink-0">
                                <img src="assets/images/benifits/earning.svg" width="22" height="22"
                                    alt="Benefits of Agentic AI Training for Non-Tech">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p>Maximize your earning potential</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center benifits-item">
                            <div class="flex-shrink-0">
                                <img src="assets/images/benifits/cybersecurity-expert.svg" width="22" height="22"
                                    alt="Benefits of Agentic AI Training for Non-Tech">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p>Earn the status of a Chief Information Security Officer</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center benifits-item">
                            <div class="flex-shrink-0">
                                <img src="assets/images/benifits/career-growth.svg" width="22" height="22"
                                    alt="Benefits of Agentic AI Training for Non-Tech">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p>Advanced career growth</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center benifits-item">
                            <div class="flex-shrink-0">
                                <img src="assets/images/benifits/community.svg" width="22" height="22"
                                    alt="Benefits of Agentic AI Training for Non-Tech">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p>Become a part of an esteemed community</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="benifits-item-two">
                            <h3>Average Salary Range for CISO-Related Roles</h3>
                            <picture>
                                <source media="(min-width:768px)" width="1472" height="486"
                                    srcset="assets/images/benifits/Advanced-AI-Audit-Certification-Training-benefits-desktop.webp">
                                <img src="assets/images/benifits/Advanced-AI-Audit-Certification-Training-benefits--mobile.webp"
                                    width="640" height="473" alt="Benefits of Agentic AI Training for Non-Tech">
                            </picture>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center benefits-row-three">
                    <div class="col-lg-6">
                        <div class="item">
                            <h3>Confused if this is the right course for you?</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <button class="cta-button modal-btn" title="Talk to Our Expert">Talk to Our
                                Experts</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[Benefits sec start]>-->

        <!--<[Gladiators start]>-->
        <section class="gladiators" id="reviews">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Words Have Power</h2>
                    </div>
                </div>
                <div class="swiper myGladiators">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#EE224A" />
                            </svg>
                            <p class="desc">
                                It was a very good experience with the team. The class was clear and understandable,
                                and it benefited me in learning all the concepts and gaining valuable knowledge.
                            </p>
                            <div class="profile">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="https://www.infosectrain.com/wp-content/uploads/2025/05/Renita-John-Pekkattil.png"
                                            alt="Renita John Pekkattil" width="250" height="250">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h3>Renita John Pekkattil</h3>
                                        <span>India</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#EE224A" />
                            </svg>
                            <p class="desc">
                                I loved the overall training! Trainer is very knowledgeable, had clear understanding
                                of all the topics covered. Loved the way he pays attention to details.

                            </p>
                            <div class="profile">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="https://www.infosectrain.com/wp-content/uploads/2025/05/Yogendra-Lanje.png"
                                            alt="Yogendra Lanje" width="250" height="250">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h3>Yogendra Lanje</h3>
                                        <span>India</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#EE224A" />
                            </svg>
                            <p class="desc">
                                I had a great experience with the team. The training advisor was very supportive,
                                and the trainer explained the concepts clearly and effectively. The program was
                                well-structured and has definitely enhanced my skills in AI. Thank you for a
                                wonderful learning experience.
                            </p>
                            <div class="profile">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="https://www.infosectrain.com/wp-content/uploads/2025/05/Saif-Ali.png"
                                            alt="Saif Ali" width="250" height="250">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h3>Saif Ali</h3>
                                        <span>UAE</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#EE224A" />
                            </svg>
                            <p class="desc">
                                The class was really good. The instructor gave us confidence and delivered the
                                content in an impactful and easy-to-understand manner.

                            </p>
                            <div class="profile">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="https://www.infosectrain.com/wp-content/uploads/2025/05/Akmal.m.png"
                                            alt="Akmal.m" width="250" height="250">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h3>Akmal.m</h3>
                                        <span>UAE</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide gladiators-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 71 50"
                                fill="none" class="svgleft">
                                <path
                                    d="M30.3085 11.6578C26.8025 11.7501 24.0115 12.327 21.9356 13.3884C19.8597 14.4037 18.222 16.019 17.0226 18.2342C21.8203 18.2342 25.7876 19.4111 28.9246 21.7647C32.1076 24.1184 33.6992 27.9489 33.6992 33.2562C33.6992 35.2407 33.3532 37.179 32.6612 39.0711C31.9693 40.9633 30.9082 42.6478 29.4781 44.1246C28.0481 45.5553 26.3181 46.7552 24.2883 47.7243C22.2585 48.6473 19.9289 49.1088 17.2994 49.1088C12.0865 49.1088 7.88852 47.4244 4.70543 44.0554C1.56848 40.6402 0 36.0944 0 30.4179C0 27.2797 0.438251 24.1184 1.31475 20.934C2.23739 17.7035 3.85199 14.7268 6.15858 12.0039C8.46516 9.2349 11.5791 6.812 15.5002 4.73524C19.4214 2.65847 24.3575 1.20473 30.3085 0.374023V11.6578ZM67.1908 11.6578C63.6848 11.7501 60.8938 12.327 58.8179 13.3884C56.742 14.4037 55.0812 16.019 53.8357 18.2342C58.6795 18.2342 62.6699 19.4111 65.8068 21.7647C68.9899 24.1184 70.5815 27.9489 70.5815 33.2562C70.5815 35.2407 70.2124 37.179 69.4743 39.0711C68.7823 40.9633 67.7213 42.6478 66.2912 44.1246C64.9073 45.5553 63.2004 46.7552 61.1706 47.7243C59.1408 48.6473 56.7881 49.1088 54.1125 49.1088C48.9457 49.1088 44.7708 47.4244 41.5877 44.0554C38.4046 40.6402 36.8131 36.0944 36.8131 30.4179C36.8131 27.2797 37.2513 24.1184 38.1278 20.934C39.0505 17.7035 40.6651 14.7268 42.9717 12.0039C45.3244 9.2349 48.4613 6.812 52.3825 4.73524C56.3037 2.65847 61.2398 1.20473 67.1908 0.374023V11.6578Z"
                                    fill="#EE224A" />
                            </svg>
                            <p class="desc">
                                The program helped me understand several areas I was unfamiliar with. The instructor
                                was exceptionally skilled and confident in delivering content.
                            </p>
                            <div class="profile">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="https://www.infosectrain.com/wp-content/uploads/2024/07/male-avatar-150x150.png"
                                            alt="Prasanna Kalluri" width="250" height="250">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h3>Prasanna Kalluri</h3>
                                        <span>United States</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-center navigation">
                        <div class="swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 16"
                                fill="none">
                                <path
                                    d="M17 7C17.5523 7 18 7.44772 18 8C18 8.55228 17.5523 9 17 9V7ZM0.292892 8.70711C-0.0976315 8.31658 -0.0976315 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM17 9H1V7H17V9Z"
                                    fill="#EE224A" />
                            </svg>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 16"
                                fill="none">
                                <path
                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM17.7071 8.70711C18.0976 8.31658 18.0976 7.68342 17.7071 7.29289L11.3431 0.928932C10.9526 0.538408 10.3195 0.538408 9.92893 0.928932C9.53841 1.31946 9.53841 1.95262 9.92893 2.34315L15.5858 8L9.92893 13.6569C9.53841 14.0474 9.53841 14.6805 9.92893 15.0711C10.3195 15.4616 10.9526 15.4616 11.3431 15.0711L17.7071 8.70711ZM1 9H17V7H1V9Z"
                                    fill="#EE224A" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Gladiators end /-->

        <!--/ related courses /-->
        <?php // Include the related_courses.php file
        include('../lp-components/related-courses.php');
        ?>
        <!--/ related courses /-->

        <!--<[success story start]>-->
        <section class="success-story-hm-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 success-story d-flex flex-column">
                        <h2>Success Speaks Volumes</h2>
                        <div class="success-item">
                            <div class="video-container" id="videoContainer">
                                <div class="overlay" id="overlay">
                                    <div class="play-button" onClick="playVideo()" id="playButton">
                                        <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/home/play-button.svg"
                                            alt="Agentic AI Training for Non-Tech Success Story" width="150"
                                            height="150">
                                    </div>
                                </div>
                                <iframe width="100%" height="315" src="" allowfullscreen id="youtubeVideo"
                                    title="InfosecTrain Success Story"></iframe>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 success-certificate d-flex align-items-center justify-content-center flex-column">
                        <h2>Get a Sample Certificate</h2>
                        <div class="success-item">
                            <img src="assets/images/certificate.webp" alt="AI-Powered Cybersecurity Success Story"
                                class="d-block m-auto img-fluid" width="429" height="263">
                        </div>
                        <button class="success-certificate-btn cta-button modal-btn button2"
                            title="Get in touch">get in
                            touch</button>
                    </div>
                </div>
            </div>
        </section>
        <!--<[success story start]>-->

        <!--<[FAQ SEC start]>-->
        <?php if ($faq !== null && !empty($faq)) { ?>
            <section class="faq-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="faq-wrapper">
                                <!--/ faq item start /-->
                                <?php
                                // Display the FAQs section if the data is available

                                foreach ($faq as $index => $question) {
                                    // Determine if the first item should be open
                                    $isOpen = $index === 0 ? 'open active' : '';
                                    $displayStyle = $index === 0 ? 'style="display: block;"' : '';

                                    echo '<div class="faq-item ' . $isOpen . '">';
                                    echo '    <h3 class="faq-title"><span class="title">' . $question['title'] . '</span><span class="right-icon"></span></h3>';
                                    echo '    <div class="faq-content" ' . $displayStyle . '>';
                                    echo $question['ans'];
                                    echo '    </div>';
                                    echo '</div>';
                                }
                                ?>
                                <!--/ faq item end /-->
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <!--<[FAQ SEC start]>-->

        <!--<[reach us sec start]>-->
        <section class="reach-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="item">
                            <img src="assets/images/reach-us.webp" width="1090" height="576" alt="Reach Us"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-two">
                            <h2>Need Help? Reach Us.</h2>
                            <div class="hide rows  mt-2" id="demo_form_output_footer"> </div>
                            <form method="post" action="" onSubmit="return val_demo_request_footer(this.form);"
                                id="demo_me_phone_f_footer">
                                <input type="text" class="form-control" name="me_name" id="me_name_footer"
                                    placeholder="Full Name">
                                <input type="email" class="form-control" name="me_email" id="me_email_footer"
                                    placeholder="Email">

                                <!-- <div class="d-flex">
                                        <select class="course-form-control form-control" id="contry_phone7"
                                            name="contry_phone7" onchange="phone_contryside()"
                                            style="width:40%;border-radius: 5px 0 0 5px;border-right:none;">
                                            <option value="+91">IN [+91]</option>
                                            <option value="+93">
                                                AF [+93]
                                            </option>
                                            <option value="+358">
                                                AX [+358]
                                            </option>
                                            <option value="+355">
                                                AL [+355]
                                            </option>
                                            <option value="+213">
                                                DZ [+213]
                                            </option>
                                            <option value="+1+684">
                                                AS [+1+684]
                                            </option>
                                            <option value="+376">
                                                AD [+376]
                                            </option>
                                            <option value="+244">
                                                AO [+244]
                                            </option>
                                            <option value="+1+264">
                                                AI [+1+264]
                                            </option>
                                            <option value="+672">
                                                AQ [+672]
                                            </option>
                                            <option value="+1+268">
                                                AG [+1+268]
                                            </option>
                                            <option value="+54">
                                                AR [+54]
                                            </option>
                                            <option value="+374">
                                                AM [+374]
                                            </option>
                                            <option value="+297">
                                                AW [+297]
                                            </option>
                                            <option value="+61">
                                                AU [+61]
                                            </option>
                                            <option value="+43">
                                                AT [+43]
                                            </option>
                                            <option value="+994">
                                                AZ [+994]
                                            </option>
                                            <option value="+1+242">
                                                BS [+1+242]
                                            </option>
                                            <option value="+973">
                                                BH [+973]
                                            </option>
                                            <option value="+880">
                                                BD [+880]
                                            </option>
                                            <option value="+1+246">
                                                BB [+1+246]
                                            </option>
                                            <option value="+375">
                                                BY [+375]
                                            </option>
                                            <option value="+32">
                                                BE [+32]
                                            </option>
                                            <option value="+501">
                                                BZ [+501]
                                            </option>
                                            <option value="+229">
                                                BJ [+229]
                                            </option>
                                            <option value="+1+441">
                                                BM [+1+441]
                                            </option>
                                            <option value="+975">
                                                BT [+975]
                                            </option>
                                            <option value="+591">
                                                BO [+591]
                                            </option>
                                            <option value="+599">
                                                BQ [+599]
                                            </option>
                                            <option value="+387">
                                                BA [+387]
                                            </option>
                                            <option value="+267">
                                                BW [+267]
                                            </option>
                                            <option value="+NONE">
                                                BV [+NONE]
                                            </option>
                                            <option value="+55">
                                                BR [+55]
                                            </option>
                                            <option value="+246">
                                                IO [+246]
                                            </option>
                                            <option value="+673">
                                                BN [+673]
                                            </option>
                                            <option value="+359">
                                                BG [+359]
                                            </option>
                                            <option value="+226">
                                                BF [+226]
                                            </option>
                                            <option value="+257">
                                                BI [+257]
                                            </option>
                                            <option value="+855">
                                                KH [+855]
                                            </option>
                                            <option value="+237">
                                                CM [+237]
                                            </option>
                                            <option value="+1">
                                                CA [+1]
                                            </option>
                                            <option value="+238">
                                                CV [+238]
                                            </option>
                                            <option value="+1+345">
                                                KY [+1+345]
                                            </option>
                                            <option value="+236">
                                                CF [+236]
                                            </option>
                                            <option value="+235">
                                                TD [+235]
                                            </option>
                                            <option value="+56">
                                                CL [+56]
                                            </option>
                                            <option value="+86">
                                                CN [+86]
                                            </option>
                                            <option value="+61">
                                                CX [+61]
                                            </option>
                                            <option value="+61">
                                                CC [+61]
                                            </option>
                                            <option value="+57">
                                                CO [+57]
                                            </option>
                                            <option value="+269">
                                                KM [+269]
                                            </option>
                                            <option value="+242">
                                                CG [+242]
                                            </option>
                                            <option value="+682">
                                                CK [+682]
                                            </option>
                                            <option value="+506">
                                                CR [+506]
                                            </option>
                                            <option value="+225">
                                                CI [+225]
                                            </option>
                                            <option value="+385">
                                                HR [+385]
                                            </option>
                                            <option value="+53">
                                                CU [+53]
                                            </option>
                                            <option value="+599">
                                                CW [+599]
                                            </option>
                                            <option value="+357">
                                                CY [+357]
                                            </option>
                                            <option value="+420">
                                                CZ [+420]
                                            </option>
                                            <option value="+243">
                                                CD [+243]
                                            </option>
                                            <option value="+45">
                                                DK [+45]
                                            </option>
                                            <option value="+253">
                                                DJ [+253]
                                            </option>
                                            <option value="+1+767">
                                                DM [+1+767]
                                            </option>
                                            <option value="+1+809, 8">
                                                DO [+1+809, 8]
                                            </option>
                                            <option value="+593">
                                                EC [+593]
                                            </option>
                                            <option value="+20">
                                                EG [+20]
                                            </option>
                                            <option value="+503">
                                                SV [+503]
                                            </option>
                                            <option value="+240">
                                                GQ [+240]
                                            </option>
                                            <option value="+291">
                                                ER [+291]
                                            </option>
                                            <option value="+372">
                                                EE [+372]
                                            </option>
                                            <option value="+251">
                                                ET [+251]
                                            </option>
                                            <option value="+500">
                                                FK [+500]
                                            </option>
                                            <option value="+298">
                                                FO [+298]
                                            </option>
                                            <option value="+679">
                                                FJ [+679]
                                            </option>
                                            <option value="+358">
                                                FI [+358]
                                            </option>
                                            <option value="+33">
                                                FR [+33]
                                            </option>
                                            <option value="+594">
                                                GF [+594]
                                            </option>
                                            <option value="+689">
                                                PF [+689]
                                            </option>
                                            <option value="+">
                                                TF [+]
                                            </option>
                                            <option value="+241">
                                                GA [+241]
                                            </option>
                                            <option value="+220">
                                                GM [+220]
                                            </option>
                                            <option value="+995">
                                                GE [+995]
                                            </option>
                                            <option value="+49">
                                                DE [+49]
                                            </option>
                                            <option value="+233">
                                                GH [+233]
                                            </option>
                                            <option value="+350">
                                                GI [+350]
                                            </option>
                                            <option value="+30">
                                                GR [+30]
                                            </option>
                                            <option value="+299">
                                                GL [+299]
                                            </option>
                                            <option value="+1+473">
                                                GD [+1+473]
                                            </option>
                                            <option value="+590">
                                                GP [+590]
                                            </option>
                                            <option value="+1+671">
                                                GU [+1+671]
                                            </option>
                                            <option value="+502">
                                                GT [+502]
                                            </option>
                                            <option value="+44">
                                                GG [+44]
                                            </option>
                                            <option value="+224">
                                                GN [+224]
                                            </option>
                                            <option value="+245">
                                                GW [+245]
                                            </option>
                                            <option value="+592">
                                                GY [+592]
                                            </option>
                                            <option value="+509">
                                                HT [+509]
                                            </option>
                                            <option value="+NONE">
                                                HM [+NONE]
                                            </option>
                                            <option value="+504">
                                                HN [+504]
                                            </option>
                                            <option value="+852">
                                                HK [+852]
                                            </option>
                                            <option value="+36">
                                                HU [+36]
                                            </option>
                                            <option value="+354">
                                                IS [+354]
                                            </option>
                                            <option value="+91" selected="">
                                                IN [+91]
                                            </option>
                                            <option value="+62">
                                                ID [+62]
                                            </option>
                                            <option value="+98">
                                                IR [+98]
                                            </option>
                                            <option value="+964">
                                                IQ [+964]
                                            </option>
                                            <option value="+353">
                                                IE [+353]
                                            </option>
                                            <option value="+44">
                                                IM [+44]
                                            </option>
                                            <option value="+972">
                                                IL [+972]
                                            </option>
                                            <option value="+39">
                                                IT [+39]
                                            </option>
                                            <option value="+1+876">
                                                JM [+1+876]
                                            </option>
                                            <option value="+81">
                                                JP [+81]
                                            </option>
                                            <option value="+44">
                                                JE [+44]
                                            </option>
                                            <option value="+962">
                                                JO [+962]
                                            </option>
                                            <option value="+7">
                                                KZ [+7]
                                            </option>
                                            <option value="+254">
                                                KE [+254]
                                            </option>
                                            <option value="+686">
                                                KI [+686]
                                            </option>
                                            <option value="+381">
                                                XK [+381]
                                            </option>
                                            <option value="+965">
                                                KW [+965]
                                            </option>
                                            <option value="+996">
                                                KG [+996]
                                            </option>
                                            <option value="+856">
                                                LA [+856]
                                            </option>
                                            <option value="+371">
                                                LV [+371]
                                            </option>
                                            <option value="+961">
                                                LB [+961]
                                            </option>
                                            <option value="+266">
                                                LS [+266]
                                            </option>
                                            <option value="+231">
                                                LR [+231]
                                            </option>
                                            <option value="+218">
                                                LY [+218]
                                            </option>
                                            <option value="+423">
                                                LI [+423]
                                            </option>
                                            <option value="+370">
                                                LT [+370]
                                            </option>
                                            <option value="+352">
                                                LU [+352]
                                            </option>
                                            <option value="+853">
                                                MO [+853]
                                            </option>
                                            <option value="+389">
                                                MK [+389]
                                            </option>
                                            <option value="+261">
                                                MG [+261]
                                            </option>
                                            <option value="+265">
                                                MW [+265]
                                            </option>
                                            <option value="+60">
                                                MY [+60]
                                            </option>
                                            <option value="+960">
                                                MV [+960]
                                            </option>
                                            <option value="+223">
                                                ML [+223]
                                            </option>
                                            <option value="+356">
                                                MT [+356]
                                            </option>
                                            <option value="+692">
                                                MH [+692]
                                            </option>
                                            <option value="+596">
                                                MQ [+596]
                                            </option>
                                            <option value="+222">
                                                MR [+222]
                                            </option>
                                            <option value="+230">
                                                MU [+230]
                                            </option>
                                            <option value="+262">
                                                YT [+262]
                                            </option>
                                            <option value="+52">
                                                MX [+52]
                                            </option>
                                            <option value="+691">
                                                FM [+691]
                                            </option>
                                            <option value="+373">
                                                MD [+373]
                                            </option>
                                            <option value="+377">
                                                MC [+377]
                                            </option>
                                            <option value="+976">
                                                MN [+976]
                                            </option>
                                            <option value="+382">
                                                ME [+382]
                                            </option>
                                            <option value="+1+664">
                                                MS [+1+664]
                                            </option>
                                            <option value="+212">
                                                MA [+212]
                                            </option>
                                            <option value="+258">
                                                MZ [+258]
                                            </option>
                                            <option value="+95">
                                                MM [+95]
                                            </option>
                                            <option value="+264">
                                                NA [+264]
                                            </option>
                                            <option value="+674">
                                                NR [+674]
                                            </option>
                                            <option value="+977">
                                                NP [+977]
                                            </option>
                                            <option value="+31">
                                                NL [+31]
                                            </option>
                                            <option value="+687">
                                                NC [+687]
                                            </option>
                                            <option value="+64">
                                                NZ [+64]
                                            </option>
                                            <option value="+505">
                                                NI [+505]
                                            </option>
                                            <option value="+227">
                                                NE [+227]
                                            </option>
                                            <option value="+234">
                                                NG [+234]
                                            </option>
                                            <option value="+683">
                                                NU [+683]
                                            </option>
                                            <option value="+672">
                                                NF [+672]
                                            </option>
                                            <option value="+850">
                                                KP [+850]
                                            </option>
                                            <option value="+1+670">
                                                MP [+1+670]
                                            </option>
                                            <option value="+47">
                                                NO [+47]
                                            </option>
                                            <option value="+968">
                                                OM [+968]
                                            </option>
                                            <option value="+92">
                                                PK [+92]
                                            </option>
                                            <option value="+680">
                                                PW [+680]
                                            </option>
                                            <option value="+970">
                                                PS [+970]
                                            </option>
                                            <option value="+507">
                                                PA [+507]
                                            </option>
                                            <option value="+675">
                                                PG [+675]
                                            </option>
                                            <option value="+595">
                                                PY [+595]
                                            </option>
                                            <option value="+51">
                                                PE [+51]
                                            </option>
                                            <option value="+63">
                                                PH [+63]
                                            </option>
                                            <option value="+NONE">
                                                PN [+NONE]
                                            </option>
                                            <option value="+48">
                                                PL [+48]
                                            </option>
                                            <option value="+351">
                                                PT [+351]
                                            </option>
                                            <option value="+1+939">
                                                PR [+1+939]
                                            </option>
                                            <option value="+974">
                                                QA [+974]
                                            </option>
                                            <option value="+262">
                                                RE [+262]
                                            </option>
                                            <option value="+40">
                                                RO [+40]
                                            </option>
                                            <option value="+7">
                                                RU [+7]
                                            </option>
                                            <option value="+250">
                                                RW [+250]
                                            </option>
                                            <option value="+590">
                                                BL [+590]
                                            </option>
                                            <option value="+290">
                                                SH [+290]
                                            </option>
                                            <option value="+1+869">
                                                KN [+1+869]
                                            </option>
                                            <option value="+1+758">
                                                LC [+1+758]
                                            </option>
                                            <option value="+590">
                                                MF [+590]
                                            </option>
                                            <option value="+508">
                                                PM [+508]
                                            </option>
                                            <option value="+1+784">
                                                VC [+1+784]
                                            </option>
                                            <option value="+685">
                                                WS [+685]
                                            </option>
                                            <option value="+378">
                                                SM [+378]
                                            </option>
                                            <option value="+239">
                                                ST [+239]
                                            </option>
                                            <option value="+966">
                                                SA [+966]
                                            </option>
                                            <option value="+221">
                                                SN [+221]
                                            </option>
                                            <option value="+381">
                                                RS [+381]
                                            </option>
                                            <option value="+248">
                                                SC [+248]
                                            </option>
                                            <option value="+232">
                                                SL [+232]
                                            </option>
                                            <option value="+65">
                                                SG [+65]
                                            </option>
                                            <option value="+1+721">
                                                SX [+1+721]
                                            </option>
                                            <option value="+421">
                                                SK [+421]
                                            </option>
                                            <option value="+386">
                                                SI [+386]
                                            </option>
                                            <option value="+677">
                                                SB [+677]
                                            </option>
                                            <option value="+252">
                                                SO [+252]
                                            </option>
                                            <option value="+27">
                                                ZA [+27]
                                            </option>
                                            <option value="+500">
                                                GS [+500]
                                            </option>
                                            <option value="+82">
                                                KR [+82]
                                            </option>
                                            <option value="+211">
                                                SS [+211]
                                            </option>
                                            <option value="+34">
                                                ES [+34]
                                            </option>
                                            <option value="+94">
                                                LK [+94]
                                            </option>
                                            <option value="+249">
                                                SD [+249]
                                            </option>
                                            <option value="+597">
                                                SR [+597]
                                            </option>
                                            <option value="+47">
                                                SJ [+47]
                                            </option>
                                            <option value="+268">
                                                SZ [+268]
                                            </option>
                                            <option value="+46">
                                                SE [+46]
                                            </option>
                                            <option value="+41">
                                                CH [+41]
                                            </option>
                                            <option value="+963">
                                                SY [+963]
                                            </option>
                                            <option value="+886">
                                                TW [+886]
                                            </option>
                                            <option value="+992">
                                                TJ [+992]
                                            </option>
                                            <option value="+255">
                                                TZ [+255]
                                            </option>
                                            <option value="+66">
                                                TH [+66]
                                            </option>
                                            <option value="+670">
                                                TL [+670]
                                            </option>
                                            <option value="+228">
                                                TG [+228]
                                            </option>
                                            <option value="+690">
                                                TK [+690]
                                            </option>
                                            <option value="+676">
                                                TO [+676]
                                            </option>
                                            <option value="+1+868">
                                                TT [+1+868]
                                            </option>
                                            <option value="+216">
                                                TN [+216]
                                            </option>
                                            <option value="+90">
                                                TR [+90]
                                            </option>
                                            <option value="+993">
                                                TM [+993]
                                            </option>
                                            <option value="+1+649">
                                                TC [+1+649]
                                            </option>
                                            <option value="+688">
                                                TV [+688]
                                            </option>
                                            <option value="+256">
                                                UG [+256]
                                            </option>
                                            <option value="+380">
                                                UA [+380]
                                            </option>
                                            <option value="+971">
                                                AE [+971]
                                            </option>
                                            <option value="+44">
                                                GB [+44]
                                            </option>
                                            <option value="+1">
                                                US [+1]
                                            </option>
                                            <option value="+NONE">
                                                UM [+NONE]
                                            </option>
                                            <option value="+598">
                                                UY [+598]
                                            </option>
                                            <option value="+998">
                                                UZ [+998]
                                            </option>
                                            <option value="+678">
                                                VU [+678]
                                            </option>
                                            <option value="+39">
                                                VA [+39]
                                            </option>
                                            <option value="+58">
                                                VE [+58]
                                            </option>
                                            <option value="+84">
                                                VN [+84]
                                            </option>
                                            <option value="+1+284">
                                                VG [+1+284]
                                            </option>
                                            <option value="+1+340">
                                                VI [+1+340]
                                            </option>
                                            <option value="+681">
                                                WF [+681]
                                            </option>
                                            <option value="+212">
                                                EH [+212]
                                            </option>
                                            <option value="+967">
                                                YE [+967]
                                            </option>
                                            <option value="+260">
                                                ZM [+260]
                                            </option>
                                            <option value="+263">
                                                ZW [+263]
                                            </option>
                                        </select>
                                        <input type="tel" class="course-form-control form-control" id="contry_phone72"
                                            name="contry_phone72" placeholder="Enter Your Phone No."
                                            onkeyup="phone_contryside()" style="width:100%;border-radius: 0 5px 5px 0;">

                                        <input type="hidden" class="course-form-control" id="me_phone" name="me_phone"
                                            placeholder="Enter your phone no." value="">
                                    </div> -->
                                <input type="number" class="form-control" name="me_phone" id="me_phone_footer"
                                    placeholder="Mobile">

                                <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.php"
                                    id="me_redirect_footer">
                                <input type="hidden" value="CISSP Training" id="me_others_footer" name="me_others">
                                <input type="hidden" value="<?php echo $pag_url; ?>" id="me_pageurl_footer"
                                    name="me_pageurl">

                                <!-- Privacy Policy Checkbox -->
                                <label
                                    style="color:var(--bg-dark); font-size: 14px; margin-top: 16px;display: flex; align-items: start;gap: 8px;">
                                    <input type="checkbox" name="privacy_policy" checked required
                                        style="accent-color: var(--red); border: 1px solid var(--red); margin-top: 4px;">
                                    <span>
                                        By submitting your contact details, you agree to our <a
                                            href="https://www.infosectrain.com/privacy-policy/" target="_blank"
                                            style="color: var(--bg-dark);font-size:14px;">Privacy Policy</a>
                                    </span>
                                </label>
                                <!-- privacy Policy Checkbox end -->

                                <button class="cta-button form-button" type="submit" name="me_submited"
                                    id="me_submited_footer">Request a Callback</button>
                            </form>
                            <div class="loading_w hide" id="loading_w_footer"><img
                                    src="<?php echo BASE_URL; ?>assets/images/loader.gif" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[reach us sec end]>-->
    </main>

    <!--/ footer sec start /-->
    <footer>
        <div class="container">
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
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#training-calendar">Training Calendar</a></li>
                            <li><a href="#instructor">Meet Our Instructor</a></li>
                            <li><a href="#benefits">Career Benefits</a></li>
                            <li><a href="#reviews">Testimonials</a></li>
                            <li><a href="https://www.infosectrain.com/privacy-policy/">Privacy Policy</a></li>
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
                            All rights reserved. , InfosecTrain
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer sec end /-->

    <!--<[footer fixed start]>-->
    <section class="footer-fixed">
        <ul class="desktop-list">
            <!--/ li start /-->
            <li>
                <a href="https://api.whatsapp.com/send?phone=918767256840&amp;text=Hi" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_6136_92)">
                            <path
                                d="M0.913574 16L2.03857 11.8906C1.34482 10.6906 0.982324 9.325 0.982324 7.92812C0.982324 3.55625 4.5417 0 8.91357 0C11.0354 0 13.0261 0.828125 14.5229 2.325C16.0198 3.825 16.8448 5.81562 16.8448 7.93437C16.8417 12.3062 13.2854 15.8625 8.91357 15.8625H8.91045C7.58232 15.8625 6.2792 15.5281 5.11982 14.8969L0.913574 16ZM5.31357 13.4625L5.5542 13.6062C6.5667 14.2063 7.72607 14.525 8.91045 14.525H8.91357C12.5479 14.525 15.5042 11.5688 15.5042 7.93437C15.5042 6.175 14.8198 4.51875 13.5761 3.27187C12.3323 2.025 10.6761 1.34063 8.9167 1.34063C5.2792 1.34063 2.32295 4.29688 2.32295 7.93125C2.32295 9.175 2.66982 10.3875 3.3292 11.4375L3.48545 11.6875L2.81982 14.1187L5.31357 13.4625Z"
                                fill="white" />
                            <path
                                d="M1.19189 15.7211L2.27939 11.7555C1.60752 10.5961 1.25439 9.27734 1.25439 7.93047C1.25752 3.70859 4.69189 0.277344 8.91064 0.277344C10.9575 0.277344 12.8825 1.07422 14.3263 2.52109C15.7731 3.96797 16.57 5.88984 16.5669 7.93672C16.5638 12.1555 13.1294 15.5898 8.91064 15.5898H8.90752C7.62627 15.5898 6.36689 15.268 5.24814 14.6586L1.19189 15.7211Z"
                                fill="url(#paint0_linear_6136_92)" />
                            <path
                                d="M0.913574 16L2.03857 11.8906C1.34482 10.6906 0.982324 9.325 0.982324 7.92812C0.982324 3.55625 4.5417 0 8.91357 0C11.0354 0 13.0261 0.828125 14.5229 2.325C16.0198 3.825 16.8448 5.81562 16.8448 7.93437C16.8417 12.3062 13.2854 15.8625 8.91357 15.8625H8.91045C7.58232 15.8625 6.2792 15.5281 5.11982 14.8969L0.913574 16ZM5.31357 13.4625L5.5542 13.6062C6.5667 14.2063 7.72607 14.525 8.91045 14.525H8.91357C12.5479 14.525 15.5042 11.5688 15.5042 7.93437C15.5042 6.175 14.8198 4.51875 13.5761 3.27187C12.3323 2.025 10.6761 1.34063 8.9167 1.34063C5.2792 1.34063 2.32295 4.29688 2.32295 7.93125C2.32295 9.175 2.66982 10.3875 3.3292 11.4375L3.48545 11.6875L2.81982 14.1187L5.31357 13.4625Z"
                                fill="url(#paint1_linear_6136_92)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.92939 4.61328C6.77939 4.28203 6.62314 4.27578 6.48252 4.26953C6.36689 4.26328 6.23564 4.26641 6.10127 4.26641C5.97002 4.26641 5.75439 4.31641 5.57314 4.51328C5.39189 4.71016 4.87939 5.19141 4.87939 6.16641C4.87939 7.14141 5.58877 8.08516 5.68877 8.21641C5.78877 8.34766 7.06064 10.4133 9.07314 11.207C10.7481 11.8664 11.0888 11.7352 11.4513 11.7039C11.8138 11.6727 12.6231 11.2258 12.7888 10.7633C12.9544 10.3008 12.9544 9.90391 12.9044 9.82266C12.8544 9.74141 12.7231 9.69141 12.5231 9.59141C12.3263 9.49141 11.3513 9.01328 11.17 8.94766C10.9888 8.88203 10.8575 8.84766 10.7231 9.04766C10.5919 9.24453 10.2106 9.69141 10.095 9.82266C9.97939 9.95391 9.86377 9.97266 9.66689 9.87266C9.47002 9.77266 8.82939 9.56328 8.07314 8.88828C7.48252 8.36328 7.08564 7.71328 6.97002 7.51641C6.85439 7.31953 6.95752 7.21016 7.05752 7.11328C7.14502 7.02578 7.25439 6.88203 7.35439 6.76641C7.45439 6.65078 7.48564 6.56953 7.55127 6.43516C7.61689 6.30391 7.58564 6.18828 7.53564 6.08828C7.49189 5.98516 7.10752 5.00703 6.92939 4.61328Z"
                                fill="white" />
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_6136_92" x1="8.87933" y1="15.7224" x2="8.87933"
                                y2="0.276281" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#20B038" />
                                <stop offset="1" stop-color="#60D66A" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_6136_92" x1="8.8792" y1="16" x2="8.8792" y2="0"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F9F9F9" />
                                <stop offset="1" stop-color="white" />
                            </linearGradient>
                            <clipPath id="clip0_6136_92">
                                <rect width="16" height="16" fill="white" transform="translate(0.879395)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>+91-87672-56840</span>
                </a>
            </li>
            <!--/ li start /-->
            <li>
                <a href="tel:1800-843-7890" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_5863_213)">
                            <path
                                d="M9.54735 0.667731C9.54735 0.49092 9.61759 0.321351 9.74262 0.196327C9.86764 0.0713025 10.0372 0.00106465 10.214 0.00106465C11.9815 0.00300571 13.6761 0.706008 14.9259 1.95583C16.1757 3.20565 16.8787 4.90022 16.8807 6.66773C16.8807 6.84454 16.8104 7.01411 16.6854 7.13914C16.5604 7.26416 16.3908 7.3344 16.214 7.3344C16.0372 7.3344 15.8676 7.26416 15.7426 7.13914C15.6176 7.01411 15.5474 6.84454 15.5474 6.66773C15.5458 5.25373 14.9834 3.8981 13.9835 2.89825C12.9837 1.8984 11.628 1.33599 10.214 1.3344C10.0372 1.3344 9.86764 1.26416 9.74262 1.13914C9.61759 1.01411 9.54735 0.844542 9.54735 0.667731ZM10.214 4.00106C10.9213 4.00106 11.5995 4.28202 12.0996 4.78211C12.5997 5.28221 12.8807 5.96049 12.8807 6.66773C12.8807 6.84454 12.9509 7.01411 13.0759 7.13914C13.201 7.26416 13.3705 7.3344 13.5474 7.3344C13.7242 7.3344 13.8937 7.26416 14.0188 7.13914C14.1438 7.01411 14.214 6.84454 14.214 6.66773C14.213 5.60719 13.7912 4.59039 13.0413 3.84047C12.2914 3.09056 11.2746 2.66879 10.214 2.66773C10.0372 2.66773 9.86764 2.73797 9.74262 2.86299C9.61759 2.98802 9.54735 3.15759 9.54735 3.3344C9.54735 3.51121 9.61759 3.68078 9.74262 3.8058C9.86764 3.93083 10.0372 4.00106 10.214 4.00106ZM16.276 11.1604C16.6624 11.5478 16.8793 12.0726 16.8793 12.6197C16.8793 13.1669 16.6624 13.6917 16.276 14.0791L15.6694 14.7784C10.2094 20.0057 -3.07731 6.7224 2.06935 1.24506L2.83602 0.578398C3.22387 0.202849 3.74397 -0.00490264 4.28382 8.7873e-05C4.82367 0.00507838 5.33985 0.22241 5.72069 0.605065C5.74135 0.625731 6.97669 2.2304 6.97669 2.2304C7.34324 2.61548 7.54729 3.12702 7.54642 3.65867C7.54555 4.19032 7.33983 4.70118 6.97202 5.08506L6.20002 6.05573C6.62725 7.09381 7.2554 8.03723 8.04836 8.83179C8.84132 9.62636 9.78348 10.2564 10.8207 10.6857L11.7974 9.90907C12.1813 9.54154 12.6921 9.33606 13.2236 9.33532C13.755 9.33457 14.2664 9.53862 14.6514 9.90507C14.6514 9.90507 16.2554 11.1397 16.276 11.1604ZM15.3587 12.1297C15.3587 12.1297 13.7634 10.9024 13.7427 10.8817C13.6053 10.7456 13.4198 10.6691 13.2264 10.6691C13.0329 10.6691 12.8474 10.7456 12.71 10.8817C12.692 10.9004 11.3474 11.9717 11.3474 11.9717C11.2567 12.0439 11.1489 12.0911 11.0345 12.1089C10.92 12.1267 10.8029 12.1143 10.6947 12.0731C9.35099 11.5728 8.13051 10.7896 7.11591 9.77645C6.10131 8.76334 5.31629 7.54402 4.81402 6.20107C4.76949 6.09137 4.75497 5.97179 4.77196 5.85462C4.78895 5.73746 4.83683 5.62693 4.91069 5.5344C4.91069 5.5344 5.98202 4.18906 6.00002 4.17173C6.1362 4.03439 6.21261 3.84881 6.21261 3.6554C6.21261 3.46199 6.1362 3.27641 6.00002 3.13906C5.97935 3.11906 4.75202 1.5224 4.75202 1.5224C4.61262 1.3974 4.43069 1.33046 4.24352 1.3353C4.05635 1.34013 3.87812 1.41637 3.74535 1.5484L2.97869 2.21506C-0.782646 6.73773 10.7314 17.6131 14.6947 13.8677L15.302 13.1677C15.4443 13.0359 15.5298 12.8539 15.5404 12.6602C15.551 12.4665 15.4858 12.2763 15.3587 12.1297Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_5863_213">
                                <rect width="16" height="16" fill="white" transform="translate(0.879395)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>1800-843-7890 (IN)</span>
                </a>
            </li>
            <!--/ li start /-->
            <li>
                <a href="tel:+16572211127" target="_blank">
                    <span>+1-657-221-1127 (USA)</span>
                </a>
            </li>
            <!--/ li start /-->
            <li>
                <a href="mailto:sales@infosectrain.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_5863_217)">
                            <path
                                d="M13.5461 0.667969H4.21273C3.329 0.669027 2.48177 1.02056 1.85687 1.64545C1.23198 2.27034 0.880453 3.11757 0.879395 4.0013L0.879395 12.0013C0.880453 12.885 1.23198 13.7323 1.85687 14.3572C2.48177 14.982 3.329 15.3336 4.21273 15.3346H13.5461C14.4298 15.3336 15.277 14.982 15.9019 14.3572C16.5268 13.7323 16.8783 12.885 16.8794 12.0013V4.0013C16.8783 3.11757 16.5268 2.27034 15.9019 1.64545C15.277 1.02056 14.4298 0.669027 13.5461 0.667969ZM4.21273 2.0013H13.5461C13.9453 2.00209 14.3351 2.12231 14.6654 2.3465C14.9957 2.5707 15.2513 2.8886 15.3994 3.2593L10.2941 8.3653C9.91835 8.73951 9.40967 8.94961 8.87939 8.94961C8.34912 8.94961 7.84044 8.73951 7.46473 8.3653L2.35939 3.2593C2.50749 2.8886 2.76314 2.5707 3.09343 2.3465C3.42372 2.12231 3.81354 2.00209 4.21273 2.0013ZM13.5461 14.0013H4.21273C3.6823 14.0013 3.17359 13.7906 2.79851 13.4155C2.42344 13.0404 2.21273 12.5317 2.21273 12.0013V5.0013L6.52206 9.30797C7.14781 9.93214 7.99557 10.2827 8.87939 10.2827C9.76322 10.2827 10.611 9.93214 11.2367 9.30797L15.5461 5.0013V12.0013C15.5461 12.5317 15.3353 13.0404 14.9603 13.4155C14.5852 13.7906 14.0765 14.0013 13.5461 14.0013Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_5863_217">
                                <rect width="16" height="16" fill="white" transform="translate(0.879395)" />
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
                <a href="javascript:void(0)" rel="nofollow" class="modal-btn" title="Enquire Now">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 16" fill="none">
                        <g clip-path="url(#clip0_5863_213)">
                            <path
                                d="M9.42626 0.667731C9.42626 0.49092 9.4965 0.321351 9.62152 0.196327C9.74655 0.0713025 9.91612 0.00106465 10.0929 0.00106465C11.8604 0.00300571 13.555 0.706008 14.8048 1.95583C16.0546 3.20565 16.7577 4.90022 16.7596 6.66773C16.7596 6.84454 16.6894 7.01411 16.5643 7.13914C16.4393 7.26416 16.2697 7.3344 16.0929 7.3344C15.9161 7.3344 15.7465 7.26416 15.6215 7.13914C15.4965 7.01411 15.4263 6.84454 15.4263 6.66773C15.4247 5.25373 14.8623 3.8981 13.8624 2.89825C12.8626 1.8984 11.5069 1.33599 10.0929 1.3344C9.91612 1.3344 9.74655 1.26416 9.62152 1.13914C9.4965 1.01411 9.42626 0.844542 9.42626 0.667731ZM10.0929 4.00106C10.8002 4.00106 11.4784 4.28202 11.9785 4.78211C12.4786 5.28221 12.7596 5.96049 12.7596 6.66773C12.7596 6.84454 12.8298 7.01411 12.9549 7.13914C13.0799 7.26416 13.2494 7.3344 13.4263 7.3344C13.6031 7.3344 13.7726 7.26416 13.8977 7.13914C14.0227 7.01411 14.0929 6.84454 14.0929 6.66773C14.0919 5.60719 13.6701 4.59039 12.9202 3.84047C12.1703 3.09056 11.1535 2.66879 10.0929 2.66773C9.91612 2.66773 9.74655 2.73797 9.62152 2.86299C9.4965 2.98802 9.42626 3.15759 9.42626 3.3344C9.42626 3.51121 9.4965 3.68078 9.62152 3.8058C9.74655 3.93083 9.91612 4.00106 10.0929 4.00106ZM16.1549 11.1604C16.5413 11.5478 16.7582 12.0726 16.7582 12.6197C16.7582 13.1669 16.5413 13.6917 16.1549 14.0791L15.5483 14.7784C10.0883 20.0057 -3.19841 6.7224 1.94826 1.24506L2.71493 0.578398C3.10277 0.202849 3.62288 -0.00490264 4.16273 8.7873e-05C4.70258 0.00507838 5.21876 0.22241 5.59959 0.605065C5.62026 0.625731 6.85559 2.2304 6.85559 2.2304C7.22215 2.61548 7.4262 3.12702 7.42533 3.65867C7.42446 4.19032 7.21874 4.70118 6.85093 5.08506L6.07893 6.05573C6.50616 7.09381 7.1343 8.03723 7.92727 8.83179C8.72023 9.62636 9.66238 10.2564 10.6996 10.6857L11.6763 9.90907C12.0602 9.54154 12.571 9.33606 13.1025 9.33532C13.6339 9.33457 14.1453 9.53862 14.5303 9.90507C14.5303 9.90507 16.1343 11.1397 16.1549 11.1604ZM15.2376 12.1297C15.2376 12.1297 13.6423 10.9024 13.6216 10.8817C13.4843 10.7456 13.2987 10.6691 13.1053 10.6691C12.9118 10.6691 12.7263 10.7456 12.5889 10.8817C12.5709 10.9004 11.2263 11.9717 11.2263 11.9717C11.1356 12.0439 11.0278 12.0911 10.9134 12.1089C10.7989 12.1267 10.6818 12.1143 10.5736 12.0731C9.2299 11.5728 8.00942 10.7896 6.99482 9.77645C5.98022 8.76334 5.19519 7.54402 4.69293 6.20107C4.64839 6.09137 4.63387 5.97179 4.65086 5.85462C4.66785 5.73746 4.71574 5.62693 4.78959 5.5344C4.78959 5.5344 5.86093 4.18906 5.87893 4.17173C6.01511 4.03439 6.09151 3.84881 6.09151 3.6554C6.09151 3.46199 6.01511 3.27641 5.87893 3.13906C5.85826 3.11906 4.63093 1.5224 4.63093 1.5224C4.49153 1.3974 4.3096 1.33046 4.12243 1.3353C3.93525 1.34013 3.75702 1.41637 3.62426 1.5484L2.85759 2.21506C-0.90374 6.73773 10.6103 17.6131 14.5736 13.8677L15.1809 13.1677C15.3232 13.0359 15.4087 12.8539 15.4193 12.6602C15.4299 12.4665 15.3647 12.2763 15.2376 12.1297Z"
                                fill="#ffffff" />
                        </g>
                        <defs>
                            <clipPath id="clip0_5863_213">
                                <rect width="16" height="16" fill="white" transform="translate(0.758301)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Enquire Now</span>
                </a>
            </li>
        </ul>
    </section>
    <!--<[footer fixed end]>-->

    <!--/ top up button start /-->
    <img src="assets/images/topup.svg" width="36" height="36" alt="Top" onClick="topFunction()" class="topBtn">
    <!--/ top up button end /-->

    <!--<[model sec start]>-->

    <!------------------------<[form model start]>--------------------------->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modal-header">Talk To Our Experts</h3>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <div class="hide rows  mt-2" id="demo_form_output_pop"> </div>
                <form method="post" action="" onSubmit="return val_demo_request_pop(this.form);"
                    id="demo_me_phone_f_pop">
                    <input type="text" class="form-control" name="me_name" id="me_name_pop"
                        placeholder="Full Name" />
                    <input type="email" class="form-control" name="me_email" id="me_email_pop"
                        placeholder="Email" />
                    <!-- <div class="d-flex">
                            <select class="course-form-control form-control" id="contry_phone7" name="contry_phone7"
                                onchange="phone_contryside()"
                                style="width:40%;border-radius: 5px 0 0 5px;border-right:none;">
                                <option value="+91">IN [+91]</option>
                                <option value="+93">
                                    AF [+93]
                                </option>
                                <option value="+358">
                                    AX [+358]
                                </option>
                                <option value="+355">
                                    AL [+355]
                                </option>
                                <option value="+213">
                                    DZ [+213]
                                </option>
                                <option value="+1+684">
                                    AS [+1+684]
                                </option>
                                <option value="+376">
                                    AD [+376]
                                </option>
                                <option value="+244">
                                    AO [+244]
                                </option>
                                <option value="+1+264">
                                    AI [+1+264]
                                </option>
                                <option value="+672">
                                    AQ [+672]
                                </option>
                                <option value="+1+268">
                                    AG [+1+268]
                                </option>
                                <option value="+54">
                                    AR [+54]
                                </option>
                                <option value="+374">
                                    AM [+374]
                                </option>
                                <option value="+297">
                                    AW [+297]
                                </option>
                                <option value="+61">
                                    AU [+61]
                                </option>
                                <option value="+43">
                                    AT [+43]
                                </option>
                                <option value="+994">
                                    AZ [+994]
                                </option>
                                <option value="+1+242">
                                    BS [+1+242]
                                </option>
                                <option value="+973">
                                    BH [+973]
                                </option>
                                <option value="+880">
                                    BD [+880]
                                </option>
                                <option value="+1+246">
                                    BB [+1+246]
                                </option>
                                <option value="+375">
                                    BY [+375]
                                </option>
                                <option value="+32">
                                    BE [+32]
                                </option>
                                <option value="+501">
                                    BZ [+501]
                                </option>
                                <option value="+229">
                                    BJ [+229]
                                </option>
                                <option value="+1+441">
                                    BM [+1+441]
                                </option>
                                <option value="+975">
                                    BT [+975]
                                </option>
                                <option value="+591">
                                    BO [+591]
                                </option>
                                <option value="+599">
                                    BQ [+599]
                                </option>
                                <option value="+387">
                                    BA [+387]
                                </option>
                                <option value="+267">
                                    BW [+267]
                                </option>
                                <option value="+NONE">
                                    BV [+NONE]
                                </option>
                                <option value="+55">
                                    BR [+55]
                                </option>
                                <option value="+246">
                                    IO [+246]
                                </option>
                                <option value="+673">
                                    BN [+673]
                                </option>
                                <option value="+359">
                                    BG [+359]
                                </option>
                                <option value="+226">
                                    BF [+226]
                                </option>
                                <option value="+257">
                                    BI [+257]
                                </option>
                                <option value="+855">
                                    KH [+855]
                                </option>
                                <option value="+237">
                                    CM [+237]
                                </option>
                                <option value="+1">
                                    CA [+1]
                                </option>
                                <option value="+238">
                                    CV [+238]
                                </option>
                                <option value="+1+345">
                                    KY [+1+345]
                                </option>
                                <option value="+236">
                                    CF [+236]
                                </option>
                                <option value="+235">
                                    TD [+235]
                                </option>
                                <option value="+56">
                                    CL [+56]
                                </option>
                                <option value="+86">
                                    CN [+86]
                                </option>
                                <option value="+61">
                                    CX [+61]
                                </option>
                                <option value="+61">
                                    CC [+61]
                                </option>
                                <option value="+57">
                                    CO [+57]
                                </option>
                                <option value="+269">
                                    KM [+269]
                                </option>
                                <option value="+242">
                                    CG [+242]
                                </option>
                                <option value="+682">
                                    CK [+682]
                                </option>
                                <option value="+506">
                                    CR [+506]
                                </option>
                                <option value="+225">
                                    CI [+225]
                                </option>
                                <option value="+385">
                                    HR [+385]
                                </option>
                                <option value="+53">
                                    CU [+53]
                                </option>
                                <option value="+599">
                                    CW [+599]
                                </option>
                                <option value="+357">
                                    CY [+357]
                                </option>
                                <option value="+420">
                                    CZ [+420]
                                </option>
                                <option value="+243">
                                    CD [+243]
                                </option>
                                <option value="+45">
                                    DK [+45]
                                </option>
                                <option value="+253">
                                    DJ [+253]
                                </option>
                                <option value="+1+767">
                                    DM [+1+767]
                                </option>
                                <option value="+1+809, 8">
                                    DO [+1+809, 8]
                                </option>
                                <option value="+593">
                                    EC [+593]
                                </option>
                                <option value="+20">
                                    EG [+20]
                                </option>
                                <option value="+503">
                                    SV [+503]
                                </option>
                                <option value="+240">
                                    GQ [+240]
                                </option>
                                <option value="+291">
                                    ER [+291]
                                </option>
                                <option value="+372">
                                    EE [+372]
                                </option>
                                <option value="+251">
                                    ET [+251]
                                </option>
                                <option value="+500">
                                    FK [+500]
                                </option>
                                <option value="+298">
                                    FO [+298]
                                </option>
                                <option value="+679">
                                    FJ [+679]
                                </option>
                                <option value="+358">
                                    FI [+358]
                                </option>
                                <option value="+33">
                                    FR [+33]
                                </option>
                                <option value="+594">
                                    GF [+594]
                                </option>
                                <option value="+689">
                                    PF [+689]
                                </option>
                                <option value="+">
                                    TF [+]
                                </option>
                                <option value="+241">
                                    GA [+241]
                                </option>
                                <option value="+220">
                                    GM [+220]
                                </option>
                                <option value="+995">
                                    GE [+995]
                                </option>
                                <option value="+49">
                                    DE [+49]
                                </option>
                                <option value="+233">
                                    GH [+233]
                                </option>
                                <option value="+350">
                                    GI [+350]
                                </option>
                                <option value="+30">
                                    GR [+30]
                                </option>
                                <option value="+299">
                                    GL [+299]
                                </option>
                                <option value="+1+473">
                                    GD [+1+473]
                                </option>
                                <option value="+590">
                                    GP [+590]
                                </option>
                                <option value="+1+671">
                                    GU [+1+671]
                                </option>
                                <option value="+502">
                                    GT [+502]
                                </option>
                                <option value="+44">
                                    GG [+44]
                                </option>
                                <option value="+224">
                                    GN [+224]
                                </option>
                                <option value="+245">
                                    GW [+245]
                                </option>
                                <option value="+592">
                                    GY [+592]
                                </option>
                                <option value="+509">
                                    HT [+509]
                                </option>
                                <option value="+NONE">
                                    HM [+NONE]
                                </option>
                                <option value="+504">
                                    HN [+504]
                                </option>
                                <option value="+852">
                                    HK [+852]
                                </option>
                                <option value="+36">
                                    HU [+36]
                                </option>
                                <option value="+354">
                                    IS [+354]
                                </option>
                                <option value="+91" selected="">
                                    IN [+91]
                                </option>
                                <option value="+62">
                                    ID [+62]
                                </option>
                                <option value="+98">
                                    IR [+98]
                                </option>
                                <option value="+964">
                                    IQ [+964]
                                </option>
                                <option value="+353">
                                    IE [+353]
                                </option>
                                <option value="+44">
                                    IM [+44]
                                </option>
                                <option value="+972">
                                    IL [+972]
                                </option>
                                <option value="+39">
                                    IT [+39]
                                </option>
                                <option value="+1+876">
                                    JM [+1+876]
                                </option>
                                <option value="+81">
                                    JP [+81]
                                </option>
                                <option value="+44">
                                    JE [+44]
                                </option>
                                <option value="+962">
                                    JO [+962]
                                </option>
                                <option value="+7">
                                    KZ [+7]
                                </option>
                                <option value="+254">
                                    KE [+254]
                                </option>
                                <option value="+686">
                                    KI [+686]
                                </option>
                                <option value="+381">
                                    XK [+381]
                                </option>
                                <option value="+965">
                                    KW [+965]
                                </option>
                                <option value="+996">
                                    KG [+996]
                                </option>
                                <option value="+856">
                                    LA [+856]
                                </option>
                                <option value="+371">
                                    LV [+371]
                                </option>
                                <option value="+961">
                                    LB [+961]
                                </option>
                                <option value="+266">
                                    LS [+266]
                                </option>
                                <option value="+231">
                                    LR [+231]
                                </option>
                                <option value="+218">
                                    LY [+218]
                                </option>
                                <option value="+423">
                                    LI [+423]
                                </option>
                                <option value="+370">
                                    LT [+370]
                                </option>
                                <option value="+352">
                                    LU [+352]
                                </option>
                                <option value="+853">
                                    MO [+853]
                                </option>
                                <option value="+389">
                                    MK [+389]
                                </option>
                                <option value="+261">
                                    MG [+261]
                                </option>
                                <option value="+265">
                                    MW [+265]
                                </option>
                                <option value="+60">
                                    MY [+60]
                                </option>
                                <option value="+960">
                                    MV [+960]
                                </option>
                                <option value="+223">
                                    ML [+223]
                                </option>
                                <option value="+356">
                                    MT [+356]
                                </option>
                                <option value="+692">
                                    MH [+692]
                                </option>
                                <option value="+596">
                                    MQ [+596]
                                </option>
                                <option value="+222">
                                    MR [+222]
                                </option>
                                <option value="+230">
                                    MU [+230]
                                </option>
                                <option value="+262">
                                    YT [+262]
                                </option>
                                <option value="+52">
                                    MX [+52]
                                </option>
                                <option value="+691">
                                    FM [+691]
                                </option>
                                <option value="+373">
                                    MD [+373]
                                </option>
                                <option value="+377">
                                    MC [+377]
                                </option>
                                <option value="+976">
                                    MN [+976]
                                </option>
                                <option value="+382">
                                    ME [+382]
                                </option>
                                <option value="+1+664">
                                    MS [+1+664]
                                </option>
                                <option value="+212">
                                    MA [+212]
                                </option>
                                <option value="+258">
                                    MZ [+258]
                                </option>
                                <option value="+95">
                                    MM [+95]
                                </option>
                                <option value="+264">
                                    NA [+264]
                                </option>
                                <option value="+674">
                                    NR [+674]
                                </option>
                                <option value="+977">
                                    NP [+977]
                                </option>
                                <option value="+31">
                                    NL [+31]
                                </option>
                                <option value="+687">
                                    NC [+687]
                                </option>
                                <option value="+64">
                                    NZ [+64]
                                </option>
                                <option value="+505">
                                    NI [+505]
                                </option>
                                <option value="+227">
                                    NE [+227]
                                </option>
                                <option value="+234">
                                    NG [+234]
                                </option>
                                <option value="+683">
                                    NU [+683]
                                </option>
                                <option value="+672">
                                    NF [+672]
                                </option>
                                <option value="+850">
                                    KP [+850]
                                </option>
                                <option value="+1+670">
                                    MP [+1+670]
                                </option>
                                <option value="+47">
                                    NO [+47]
                                </option>
                                <option value="+968">
                                    OM [+968]
                                </option>
                                <option value="+92">
                                    PK [+92]
                                </option>
                                <option value="+680">
                                    PW [+680]
                                </option>
                                <option value="+970">
                                    PS [+970]
                                </option>
                                <option value="+507">
                                    PA [+507]
                                </option>
                                <option value="+675">
                                    PG [+675]
                                </option>
                                <option value="+595">
                                    PY [+595]
                                </option>
                                <option value="+51">
                                    PE [+51]
                                </option>
                                <option value="+63">
                                    PH [+63]
                                </option>
                                <option value="+NONE">
                                    PN [+NONE]
                                </option>
                                <option value="+48">
                                    PL [+48]
                                </option>
                                <option value="+351">
                                    PT [+351]
                                </option>
                                <option value="+1+939">
                                    PR [+1+939]
                                </option>
                                <option value="+974">
                                    QA [+974]
                                </option>
                                <option value="+262">
                                    RE [+262]
                                </option>
                                <option value="+40">
                                    RO [+40]
                                </option>
                                <option value="+7">
                                    RU [+7]
                                </option>
                                <option value="+250">
                                    RW [+250]
                                </option>
                                <option value="+590">
                                    BL [+590]
                                </option>
                                <option value="+290">
                                    SH [+290]
                                </option>
                                <option value="+1+869">
                                    KN [+1+869]
                                </option>
                                <option value="+1+758">
                                    LC [+1+758]
                                </option>
                                <option value="+590">
                                    MF [+590]
                                </option>
                                <option value="+508">
                                    PM [+508]
                                </option>
                                <option value="+1+784">
                                    VC [+1+784]
                                </option>
                                <option value="+685">
                                    WS [+685]
                                </option>
                                <option value="+378">
                                    SM [+378]
                                </option>
                                <option value="+239">
                                    ST [+239]
                                </option>
                                <option value="+966">
                                    SA [+966]
                                </option>
                                <option value="+221">
                                    SN [+221]
                                </option>
                                <option value="+381">
                                    RS [+381]
                                </option>
                                <option value="+248">
                                    SC [+248]
                                </option>
                                <option value="+232">
                                    SL [+232]
                                </option>
                                <option value="+65">
                                    SG [+65]
                                </option>
                                <option value="+1+721">
                                    SX [+1+721]
                                </option>
                                <option value="+421">
                                    SK [+421]
                                </option>
                                <option value="+386">
                                    SI [+386]
                                </option>
                                <option value="+677">
                                    SB [+677]
                                </option>
                                <option value="+252">
                                    SO [+252]
                                </option>
                                <option value="+27">
                                    ZA [+27]
                                </option>
                                <option value="+500">
                                    GS [+500]
                                </option>
                                <option value="+82">
                                    KR [+82]
                                </option>
                                <option value="+211">
                                    SS [+211]
                                </option>
                                <option value="+34">
                                    ES [+34]
                                </option>
                                <option value="+94">
                                    LK [+94]
                                </option>
                                <option value="+249">
                                    SD [+249]
                                </option>
                                <option value="+597">
                                    SR [+597]
                                </option>
                                <option value="+47">
                                    SJ [+47]
                                </option>
                                <option value="+268">
                                    SZ [+268]
                                </option>
                                <option value="+46">
                                    SE [+46]
                                </option>
                                <option value="+41">
                                    CH [+41]
                                </option>
                                <option value="+963">
                                    SY [+963]
                                </option>
                                <option value="+886">
                                    TW [+886]
                                </option>
                                <option value="+992">
                                    TJ [+992]
                                </option>
                                <option value="+255">
                                    TZ [+255]
                                </option>
                                <option value="+66">
                                    TH [+66]
                                </option>
                                <option value="+670">
                                    TL [+670]
                                </option>
                                <option value="+228">
                                    TG [+228]
                                </option>
                                <option value="+690">
                                    TK [+690]
                                </option>
                                <option value="+676">
                                    TO [+676]
                                </option>
                                <option value="+1+868">
                                    TT [+1+868]
                                </option>
                                <option value="+216">
                                    TN [+216]
                                </option>
                                <option value="+90">
                                    TR [+90]
                                </option>
                                <option value="+993">
                                    TM [+993]
                                </option>
                                <option value="+1+649">
                                    TC [+1+649]
                                </option>
                                <option value="+688">
                                    TV [+688]
                                </option>
                                <option value="+256">
                                    UG [+256]
                                </option>
                                <option value="+380">
                                    UA [+380]
                                </option>
                                <option value="+971">
                                    AE [+971]
                                </option>
                                <option value="+44">
                                    GB [+44]
                                </option>
                                <option value="+1">
                                    US [+1]
                                </option>
                                <option value="+NONE">
                                    UM [+NONE]
                                </option>
                                <option value="+598">
                                    UY [+598]
                                </option>
                                <option value="+998">
                                    UZ [+998]
                                </option>
                                <option value="+678">
                                    VU [+678]
                                </option>
                                <option value="+39">
                                    VA [+39]
                                </option>
                                <option value="+58">
                                    VE [+58]
                                </option>
                                <option value="+84">
                                    VN [+84]
                                </option>
                                <option value="+1+284">
                                    VG [+1+284]
                                </option>
                                <option value="+1+340">
                                    VI [+1+340]
                                </option>
                                <option value="+681">
                                    WF [+681]
                                </option>
                                <option value="+212">
                                    EH [+212]
                                </option>
                                <option value="+967">
                                    YE [+967]
                                </option>
                                <option value="+260">
                                    ZM [+260]
                                </option>
                                <option value="+263">
                                    ZW [+263]
                                </option>
                            </select>
                            <input type="tel" class="course-form-control form-control" id="contry_phone72"
                                name="contry_phone72" placeholder="Enter Your Phone No." onkeyup="phone_contryside()"
                                style="width:100%;border-radius: 0 5px 5px 0;">

                            <input type="hidden" class="course-form-control" id="me_phone" name="me_phone"
                                placeholder="Enter your phone no." value="">
                        </div> -->
                    <input type="number" class="form-control" name="me_phone" id="me_phone_pop"
                        placeholder="Mobile" />
                    <input type="text" class="form-control" name="me_call" id="me_call_pop"
                        placeholder="Mention your call time preference" />

                    <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.php" id="me_redirect_pop" />
                    <input type="hidden" value="" id="me_others_pop" name="me_others" />
                    <!-- <input type="hidden" value="" id="me_message" name="me_message" /> -->
                    <input type="hidden" value="<?php echo $pag_url; ?>" id="me_pageurl_pop" name="me_pageurl" />

                    <!-- Privacy Policy Checkbox -->
                    <label
                        style="color:var(--bg-dark); font-size: 14px; margin-top: 16px;display: flex; align-items: start;gap: 8px;">
                        <input type="checkbox" name="privacy_policy" checked required
                            style="accent-color: var(--red); border: 1px solid var(--red); margin-top: 4px;">
                        <span>
                            By submitting your contact details, you agree to our <a
                                href="https://www.infosectrain.com/privacy-policy/" target="_blank"
                                style="color: var(--bg-dark);font-size:14px;">Privacy Policy</a>
                        </span>
                    </label>
                    <!-- privacy Policy Checkbox end -->

                    <button class="cta-button form-button" type="submit" name="me_submited"
                        id="me_submited_pop">Request
                        a Callback</button>

                    <div class="loading_w hide" id="loading_w_pop">
                        <img src="<?php echo BASE_URL; ?>assets/images/loader.gif" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!------------------------<[form model end]>--------------------------->

    <div id="myModalVideo" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onClick="closeModal('myModalVideo')" style="margin-left:auto;">
                    &times;
                </span>
            </div>
            <div class="modal-body">
                <!-- Add your video embed code or source here -->
                <iframe width="100%" id="video-iframe" frameborder="0" allowfullscreen
                    style="width:100%;aspect-ratio: 1;"></iframe>
            </div>
        </div>
    </div>

    <!--<[model sec start]>-->
</body>

<!--/ js link start /-->
<script src="assets/js/common.min.js"></script>
<script src="assets/js/swiper-bundle.min.js" defer></script>
<script src="assets/js/custom.js" defer></script>

<!--/ js link start /-->

<!--/ zendesk chat box /-->
<script>
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
    setTimeout(loadZopim, 10000);
</script>
<!--/ zendesk chat box end /-->

<!--<[new script start]>-->
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

    document.addEventListener("DOMContentLoaded", function() {
        /*===== add lozyloading attribute */
        const img = document.querySelectorAll('img');
        img.forEach(images => {
            images.setAttribute('loading', 'lazy');
        })
        /*===== add lozyloading attribute */

        const courseCard_button = document.querySelectorAll('.modal-btn');
        const inputElement = document.getElementById('me_others_pop');
        // console.log(inputElement)
        // Attach a click event listener to each button
        courseCard_button.forEach(button => {
            button.addEventListener('click', function() {
                const modalTitle = this.getAttribute('title');
                inputElement.value = modalTitle;
            });
        });
    });

    function playVideo() {
        var videoContainer = document.getElementById('videoContainer');
        var overlay = document.getElementById('overlay');
        var playButton = document.getElementById('playButton');
        var youtubeVideo = document.getElementById('youtubeVideo');

        // Hide overlay and play button
        overlay.style.display = 'none';
        playButton.style.display = 'none';

        // Set the new YouTube video link
        var newVideoLink = 'https://www.youtube.com/embed/sLrcxlBQrXE?si?rel=0';

        // Update the src attribute of the YouTube video iframe
        youtubeVideo.src = newVideoLink;

        // Show YouTube video
        youtubeVideo.style.display = 'block';

        // Set autoplay and muted attributes to start playing the video
        youtubeVideo.setAttribute('autoplay', '1');
        youtubeVideo.setAttribute('muted', '1');
    }
</script>

</html>