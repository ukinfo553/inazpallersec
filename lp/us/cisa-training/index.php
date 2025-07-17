<!--
<?php

include('include/comman_use.php');
include('../../lp-components/api_handler.php');

// Set the course ID dynamically
$api_id = 30771;  // Change this to the specific course ID for different pages

// Fetch the course data using the global API handler function
$course_data = get_brochure_data($api_id);

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
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CISA Certification Training Course | CISA Online Training</title>
    <meta name="description"
        content="Master CISA Now! Level up your skills with Practical CISA Training by InfosecTrain. Join the cybersecurity revolution!">
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" href="assets/images/favicon.ico">
    <!--/ style link start /-->
    <link href="assets/css/bootstrap-grid.css" rel="stylesheet" defer>
    <link rel="stylesheet" href="assets/css/custom.css" defer>
    <link rel="stylesheet" href="../../lp-components/css_handler.php" defer>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" defer />
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
                            <a href="#overview">Overview</a>
                        </li>
                        <li>
                            <a href="#training-calendar">Training Calendar</a>
                        </li>
                        <li>
                            <a href="#why-choose">Why InfosecTrain</a>
                        </li>
                        <li>
                            <a href="#benefits">Career Benefits</a>
                        </li>
                        <li>
                            <a href="#reviews">Testimonials</a>
                        </li>
                        <li>
                            <button class="button modal-btn button2" modal-title="Get Free Demo">
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
            <div class="container-fluid container-lg">
                <div class="row align-items-center flex-column-reverse flex-md-row">
                    <!--/ col start /-->
                    <div class="col-lg-7 col-md-7">
                        <div class="d-flex flex-column gap-3">
                            <div class="fs-28 f-roboto text-dark fw-bold">Become a Seasoned</div>
                            <h1>Certified Information Systems Auditor</h1>
                            <div class="fs-18 f-nunito text-dark fw-bold">
                                CISA Training Course 2024 Edition
                            </div>
                            <div class="d-md-none seats-left fs-16 fw-bold f-nunito"></div>
                            <div class="d-flex flex-row banner-highlights">
                                <div>
                                    <span>70% Increase</span>
                                    <p>in Information Security Jobs</p>
                                </div>
                                <div>
                                    <span>$139,198+</span>
                                    <p>Avg. Salary IT Audit Manager</p>
                                </div>
                            </div>
                            <div class="d-flex flex-md-row flex-column align-items-start gap-3">
                                <button class="button modal-btn" modal-title="Talk to Our Expert">Talk to Our
                                    Expert</button>
                                <?php
                                // Display the Brochure section if the data is available
                                if ($brochure !== null && !empty($brochure)) {
                                    echo '<a href="' . $brochure . '" target="_blank" class="button download-btn"
                                        style="background:var(--acent-red);border:1px solid var(--danger);color:var(--dark);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="12" height="12"
                                            viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_18618_896)">
                                                <path
                                                    d="M12.4444 16.5H3.55555C2.60588 16.5 1.71302 16.1302 1.04142 15.4586C0.369847 14.787 0 13.8941 0 12.9444V12.0555C0 11.5646 0.397948 11.1666 0.888894 11.1666C1.37984 11.1666 1.77779 11.5646 1.77779 12.0555V12.9444C1.77779 13.4193 1.96273 13.8657 2.29845 14.2015C2.63426 14.5372 3.08068 14.7222 3.55555 14.7222H12.4444C12.9193 14.7222 13.3657 14.5372 13.7015 14.2015C14.0372 13.8656 14.2222 13.4192 14.2222 12.9444V12.0555C14.2222 11.5646 14.6202 11.1666 15.1111 11.1666C15.602 11.1666 16 11.5646 16 12.0555V12.9444C16 13.8941 15.6302 14.7869 14.9586 15.4586C14.287 16.1302 13.3941 16.5 12.4444 16.5ZM7.99998 12.9444C7.87702 12.9444 7.75996 12.9194 7.65346 12.8743C7.55409 12.8323 7.46072 12.7713 7.37903 12.6916C7.37838 12.691 7.37779 12.6904 7.3772 12.6898C7.3762 12.6888 7.3753 12.6879 7.3744 12.687C7.37341 12.686 7.3721 12.6847 7.37148 12.6841L3.81591 9.12852C3.46879 8.7814 3.46879 8.21857 3.81591 7.87142C4.16302 7.5243 4.72588 7.52427 5.073 7.87142L7.11112 9.90954V1.38889C7.11109 0.897948 7.50904 0.5 7.99998 0.5C8.49093 0.5 8.88891 0.897948 8.88891 1.38889V9.90951L10.927 7.87142C11.2741 7.5243 11.837 7.5243 12.1841 7.87142C12.5312 8.21854 12.5312 8.7814 12.1841 9.12852L8.62852 12.6841C8.59119 12.7193 8.51676 12.7857 8.43386 12.8375C8.23842 12.9198 8.12211 12.9444 7.99998 12.9444Z"
                                                    fill="#E50914" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_18618_896">
                                                    <rect width="16" height="16" fill="white"
                                                        transform="translate(0 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Download Brochure
                                    </a>';
                                }
                                ?>
                            </div>
                            <!-- <div class="d-flex gap-3">
                                <img src="assets/images/100-satisfaction.webp" alt="Conditions Apply"
                                    class="conditions_apply" width="80" height="80" class="d-block">
                                <img src="assets/images/money-back.webp" alt="Conditions Apply" class="conditions_apply"
                                    width="80" height="80" class="d-block">
                            </div>
                            <p style="font-size: 10px;">
                                *Conditions Apply
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[banner sec end]>-->

        <!--new sec start-->
        <section id="overview" class="pb-0">
            <div class="container-fluid container-lg">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <!--highlights sec start-->
                        <div class="row g-4">
                            <div class="col-12">
                                <h2 class="text-center text-md-start">Training Course Highlights</h2>
                            </div>
                            <!--col start-->
                            <div class="col-lg-3 col-6">
                                <div class="h-100 d-flex flex-column gap-3 p-3 rounded-4"
                                    style="background: var(--acent-yellow);">
                                    <img src="assets/images/highlight-icon/time.svg" width="42" height="42" alt="">
                                    <p>40-Hour LIVE Instructor-led Training</p>
                                </div>
                            </div>
                            <!--col start-->
                            <div class="col-lg-3 col-6">
                                <div class="h-100 d-flex flex-column gap-3 p-3 rounded-4"
                                    style="background: var(--acent-orange);">
                                    <img src="assets/images/highlight-icon/practical-approch.svg" width="42" height="42"
                                        alt="">
                                    <p>Telegram Group for Exam Support</p>
                                </div>
                            </div>
                            <!--col start-->
                            <div class="col-lg-3 col-6">
                                <div class="h-100 d-flex flex-column gap-3 p-3 rounded-4"
                                    style="background: var(--acent-red);">
                                    <img src="assets/images/highlight-icon/isaca-premium.svg" width="42" height="42"
                                        alt="">
                                    <p>ISACA Premium Partner</p>
                                </div>
                            </div>
                            <!--col start-->
                            <div class="col-lg-3 col-6">
                                <div class="h-100 d-flex flex-column gap-3 p-3 rounded-4"
                                    style="background: var(--acent-green);">
                                    <img src="assets/images/highlight-icon/batch.svg" width="42" height="42" alt="">
                                    <p>CISA Online Test Engine</p>
                                </div>
                            </div>
                            <!--col start-->
                            <div class="col-lg-3 col-6">
                                <div class="h-100 d-flex flex-column gap-3 p-3 rounded-4"
                                    style="background: var(--acent-green);">
                                    <img src="assets/images/highlight-icon/passed-rate.svg" width="42" height="42"
                                        alt="">
                                    <p>98% Success Rate</p>
                                </div>
                            </div>
                            <!--col start-->
                            <div class="col-lg-3 col-6">
                                <div class="h-100 d-flex flex-column gap-3 p-3 rounded-4"
                                    style="background: var(--acent-red);">
                                    <img src="assets/images/highlight-icon/customer-service.svg" width="42" height="42"
                                        alt="">
                                    <p>Post Training Support Till Exam</p>
                                </div>
                            </div>
                            <!--col start-->
                            <div class="col-lg-3 col-6">
                                <div class="h-100 d-flex flex-column gap-3 p-3 rounded-4"
                                    style="background: var(--acent-orange);">
                                    <img src="assets/images/highlight-icon/certified-trainner.svg" width="42"
                                        height="42" alt="">
                                    <p>Certified Trainers</p>
                                </div>
                            </div>
                            <!--col start-->
                            <div class="col-lg-3 col-6">
                                <div class="h-100 d-flex flex-column gap-3 p-3 rounded-4"
                                    style="background: var(--acent-yellow);">
                                    <img src="assets/images/highlight-icon/learning.svg" width="42" height="42" alt="">
                                    <p>Scenario-based Learning</p>
                                </div>
                            </div>
                        </div>
                        <!--highlights sec end-->

                        <!--course content start-->
                        <div class="row mt-4">
                            <div class="col-12">
                                <h2 class="text-center text-md-start">CISA - An Overview</h2>
                                <p class="my-3">
                                    The Certified Information Systems Auditor is a world renowned industry standard for
                                    professionals who are auditing, monitoring, controlling, and assessing an
                                    organization’s IT systems. CISA certification is regarded as a credential that
                                    validates the expertise of audit professionals to apply a risk-based methodology
                                    while executing and reporting audit engagements.
                                </p>
                                <p>
                                    Our certification-focused CISA training course aligned with the latest update
                                    is designed to empower learners with all necessary knowledge and techniques to ace
                                    the CISA certification. The objective of this CISA certification training
                                    program is to prepare participants with the right mid-level skills required to
                                    audit, monitor, and manage an organization’s IT and business environment by
                                    employing globally recognised IT audit practices and standards.
                                </p>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="accordion d-flex flex-column gap-4 course-content-accordion">
                                    <!--accordion-item start-->
                                    <?php
                                    // Check that course_details exists and is a non-empty array
                                    if (!empty($course_details) && is_array($course_details)) {
                                        foreach ($course_details as $index => $detail) {
                                            // Make the first item active and open
                                            $activeClass = $index === 0 ? 'open' : '';
                                            ?>
                                            <div
                                                class="accordion-item border-grey w-100 rounded-4 overflow-hidden <?php echo $activeClass; ?>">
                                                <button
                                                    class="accordion-header f-nunito fs-18 fw-bold p-3 d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="assets/images/course-content/Course-Curriculum.svg" width="24"
                                                            height="24" alt="<?php echo htmlspecialchars($detail['title']); ?>">
                                                        <span><?php echo htmlspecialchars($detail['title']); ?></span>
                                                    </div>
                                                    <span class="arrow"></span>
                                                </button>
                                                <div class="accordion-body">
                                                    <?php echo $detail['ans']; ?>

                                                    <?php
                                                    // If this is the first item and $brochureLink is set, show brochure button
                                                    if ($index === 0 && !empty($brochure)) {
                                                        echo '<a href="' . htmlspecialchars($brochure) . '" target="_blank" class="button download-btn mt-3 d-inline-block"
                                        style="background:var(--acent-red);border:1px solid var(--danger);color:var(--dark);">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="12" height="12"
                                            viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_18618_896)">
                                                <path
                                                    d="M12.4444 16.5H3.55555C2.60588 16.5 1.71302 16.1302 1.04142 15.4586C0.369847 14.787 0 13.8941 0 12.9444V12.0555C0 11.5646 0.397948 11.1666 0.888894 11.1666C1.37984 11.1666 1.77779 11.5646 1.77779 12.0555V12.9444C1.77779 13.4193 1.96273 13.8657 2.29845 14.2015C2.63426 14.5372 3.08068 14.7222 3.55555 14.7222H12.4444C12.9193 14.7222 13.3657 14.5372 13.7015 14.2015C14.0372 13.8656 14.2222 13.4192 14.2222 12.9444V12.0555C14.2222 11.5646 14.6202 11.1666 15.1111 11.1666C15.602 11.1666 16 11.5646 16 12.0555V12.9444C16 13.8941 15.6302 14.7869 14.9586 15.4586C14.287 16.1302 13.3941 16.5 12.4444 16.5ZM7.99998 12.9444C7.87702 12.9444 7.75996 12.9194 7.65346 12.8743C7.55409 12.8323 7.46072 12.7713 7.37903 12.6916C7.37838 12.691 7.37779 12.6904 7.3772 12.6898C7.3762 12.6888 7.3753 12.6879 7.3744 12.687C7.37341 12.686 7.3721 12.6847 7.37148 12.6841L3.81591 9.12852C3.46879 8.7814 3.46879 8.21857 3.81591 7.87142C4.16302 7.5243 4.72588 7.52427 5.073 7.87142L7.11112 9.90954V1.38889C7.11109 0.897948 7.50904 0.5 7.99998 0.5C8.49093 0.5 8.88891 0.897948 8.88891 1.38889V9.90951L10.927 7.87142C11.2741 7.5243 11.837 7.5243 12.1841 7.87142C12.5312 8.21854 12.5312 8.7814 12.1841 9.12852L8.62852 12.6841C8.59119 12.7193 8.51676 12.7857 8.43386 12.8375C8.23842 12.9198 8.12211 12.9444 7.99998 12.9444Z"
                                                    fill="#E50914" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_18618_896">
                                                    <rect width="16" height="16" fill="white"
                                                        transform="translate(0 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Download Brochure
                                    </a>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <!--accordion-item end-->
                                </div>
                            </div>
                        </div>
                        <!--course content end-->

                        <!--course calendar start-->
                        <div class="row g-4 mt-4 calendar-upcoming-batches d-block" id="training-calendar">
                            <div class="col-12 available-batch">
                                <h2 class="text-center text-md-start">CISA Training Calendar</h2>
                                <div class="item mt-4">
                                    <div class="item-body">
                                        <table>
                                            <thead>
                                                <tr
                                                    class="d-none d-md-flex align-items-center flex-wrap flex-lg-nowrap">
                                                    <td>Batch Date</td>
                                                    <td>Batch Type</td>
                                                    <td>Training Mode</td>
                                                    <td>Batch Status</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- if bathc not available then show div -->
                            <div class="col-12 not-available-batch d-none">
                                <h2>Looking for a customized training?</h2>
                                <button class="button modal-btn mt-4" modal-title="REQUEST A BATCH">REQUEST A
                                    BATCH</button>
                            </div>
                            <!-- if batch avvaible then show div -->
                        </div>
                        <!--course calendar end-->

                        <!--form sec start-->
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="bg-dark rounded-4 p-3">
                                    <h3 class="f-nunito fs-18 text-white text-center mb-3 fw-bold">Can't Find a Suitable
                                        Schedule? We Can Help You Customize</h3>
                                    <form method="post" class="ajax-form">
                                        <div class="d-flex flex-column flex-lg-row align-items-center gap-3">
                                            <div class="w-100">
                                                <input type="text" name="me_name" class="me_name form-control"
                                                    placeholder="Full Name" />
                                                <div class="error-message name_error"></div>
                                            </div>
                                            <div class="w-100">
                                                <input type="text" name="me_email" class="me_email form-control"
                                                    placeholder="Email" />
                                                <div class="error-message email_error"></div>
                                            </div>
                                            <input type="hidden" id="me_others_calendar" name="me_others"
                                                value="Talk to Our Training Advisor">
                                            <input type="hidden" id="me_pageurl_calendar" name="me_pageurl"
                                                value="<?php echo $pag_url; ?>">
                                            <div class="w-100">
                                                <input type="hidden" name="me_submited" value="1">
                                                <button type="submit" class="form-control-btn">Request a
                                                    Callback</button>
                                            </div>
                                        </div>
                                        <div class="loader text-center" style="display:none;">
                                            <img src="assets/images/loader.gif" alt="Loading...">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--form sec end-->
                    </div>

                    <div class="col-lg-4 col-md-5 d-none d-md-block">
                        <div class="bg-white d-flex flex-column gap-3 rounded-4 border-red" style="overflow: hidden;position: sticky;
        top: 100px;margin-top: -30rem;box-shadow: var(--box-shadow);">
                            <div>
                                <img src="assets/images/form-banner.webp" width="357" height="204" alt="CISA Training"
                                    class="w-100 h-auto d-block">
                            </div>
                            <div class="d-flex flex-column gap-3 p-3">
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


                                    <input type="hidden" id="me_pageurl_calendar" name="me_pageurl"
                                        value="<?php echo $pag_url; ?>">
                                    <input type="hidden" id="me_others" name="me_others" value="">
                                    <input type="hidden" name="me_submited" value="1">
                                    <!-- Privacy Policy Checkbox -->
                                    <label class="f-nunito fs-14 fw-normal"
                                        style="color:var(--dark); font-size: 14px; margin-top: 16px;display: flex; align-items: start;gap: 8px;">
                                        <input type="checkbox" name="privacy_policy" checked required
                                            style="accent-color: var(--danger); border: 1px solid var(--danger); margin-top: 4px;">
                                        <span>
                                            By sharing your details, you agree to our Terms and <a
                                                href="https://www.infosectrain.com/privacy-policy/" target="_blank"
                                                style="color: var(--dark);font-size:14px;text-decoration: underline;">Privacy
                                                Policy</a>
                                        </span>
                                    </label>
                                    <!-- privacy Policy Checkbox end -->
                                    <button type="submit" class="form-control-btn">Submit</button>

                                    <div class="loader text-center" style="display:none;">
                                        <img src="assets/images/loader.gif" alt="Loading...">
                                    </div>
                                </form>
                                <p class="fw-bold">Save your seat before the batch fills out!</p>
                                <div class="seats-left fs-16 fw-bold f-nunito"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--new sec end-->

        <!--offer sec start -->
        <?php // Include the related_courses.php file
        include('../../lp-components/offer.php');
        ?>
        <!--offer sec end -->

        <!--<[Learning mode sec end]>-->
        <section class="learning-mode-sec">
            <div class="container-fluid container-lg">
                <div class="row g-4">
                    <div class="col-12">
                        <h2 class="text-center">Choose Your Preferred Learning Mode</h2>
                    </div>
                    <!--<[col start]>-->
                    <div class="col-lg-4 col-md-6">
                        <div class="h-100 d-flex flex-column align-items-center gap-3 border-grey rounded-4 p-4"
                            style="background: var(--acent-yellow);">
                            <img src="assets/images/one-on-one.png" width="70" height="70" alt="1-TO-1 Training"
                                class="d-block">
                            <div class="f-nunito fs-18 fw-bold text-dark">1-TO-1 TRAINING</div>
                            <ul class="d-flex flex-column align-items-center gap-1 text-center">
                                <li>Customized Schedule</li>
                                <li>Learn at Your Dedicated Hour</li>
                                <li>Instant Clarification of Doubts</li>
                                <li>Guaranteed to Run</li>
                            </ul>
                            <div class="item-footer">
                                <button class="button modal-btn" modal-title="1-TO-1 TRAINING"> GET STARTED</button>
                            </div>
                        </div>
                    </div>
                    <!--<[col start]>-->
                    <div class="col-lg-4 col-md-6">
                        <div class="h-100 d-flex flex-column align-items-center gap-3 border-grey rounded-4 p-4"
                            style="background: var(--acent-red);">
                            <img src="assets/images/online-training.png" width="70" height="70" alt="Online Training"
                                class="d-block">
                            <div class="f-nunito fs-18 fw-bold text-dark">ONLINE TRAINING</div>
                            <ul class="d-flex flex-column align-items-center gap-1 text-center">
                                <li>Flexible, Convenient & Time Saving</li>
                                <li>Highly Interactive</li>
                                <li>Affordable Yet Effective</li>
                                <li>Guaranteed to Run</li>
                            </ul>
                            <div class="item-footer">
                                <button class="button modal-btn" modal-title="ONLINE TRAINING">ENROLL NOW</button>
                            </div>
                        </div>
                    </div>
                    <!--<[col start]>-->
                    <div class="col-lg-4 col-md-6">
                        <div class="h-100 d-flex flex-column align-items-center gap-3 border-grey rounded-4 p-4"
                            style="background: var(--acent-green);">
                            <img src="assets/images/corporate-training.png" width="70" height="70"
                                alt="Corporate Training" class="d-block">
                            <div class="f-nunito fs-18 fw-bold text-dark">CORPORATE TRAINING</div>
                            <ul class="d-flex flex-column align-items-center gap-1 text-center">
                                <li>Anytime, Anywhere - Across The Globe</li>
                                <li>Hire a Trainer</li>
                                <li>Your Schedule, Your Pace</li>
                                <li>Customized for Your Team</li>
                            </ul>
                            <div class="item-footer">
                                <button class="button modal-btn" modal-title="CORPORATE TRAINING">CONTACT US</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[Learning mode sec end]>-->

        <!--<[corporate training sec start]>-->
        <section class="p-0">
            <div class="container-fluid container-lg">
                <div class="row g-4 align-items-center rounded-4 m-0" style="background: var(--acent-orange);">
                    <div class="col-lg-4 col-md-6 pt-4 pt-md-0 ps-md-4">
                        <div class="d-flex flex-column align-items-center align-items-md-start gap-3">
                            <h2>CISA Corporate Training</h2>
                            <p>Upskill Your Team on Information Security</p>
                            <button class="button modal-btn" modal-title="Talk to Advisor">Talk to Advisor</button>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <img src="assets/images/corporate-training.webp" width="556" height="258"
                            alt="CISA Corporate Training" class="d-block ms-auto img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--<[corporate training sec end]>-->

        <!--<[expert sec start]>-->
        <section class="expert-sec">
            <div class="container-fluid container-lg">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Our Expert Course Advisors</h2>
                    </div>
                </div>

                <div class="swiper myAdvisor">
                    <div class="swiper-wrapper">
                        <!--/ col start /-->
                        <div class="swiper-slide item">
                            <div class="profile-desc">
                                <div class="avtar-data">
                                    <div class="avtar-name">
                                        Prabh Nair
                                    </div>
                                    <div class="avtar-exp">
                                        18+ Years of Experience
                                    </div>
                                </div>
                            </div>
                            <div class="designation">
                                CISSP-ISSAP | CGRC | CCSP | CSSLP | CCISO | CISM | CISA | CRISC | CGEIT | CIPM | CIPPE |
                                CDPSE
                            </div>
                            <div class="summary">
                                18+ years of experience in Information Technology industry with specialization in
                                Information Security. A distinguished Information Security professional with
                                comprehensive knowledge across all domains of Information Security. Expertise ranges
                                from Vulnerability Assessment & Penetration Testing to Application Security, and
                                encompasses Security Solutions as well as IT Governance, Risk & Compliance.
                            </div>
                        </div>
                        <!--/ col end /-->

                        <!--/ col start /-->
                        <div class="swiper-slide item">
                            <div class="profile-desc">
                                <div class="avtar-data">
                                    <div class="avtar-name">
                                        Rajesh
                                    </div>
                                    <div class="avtar-exp">
                                        25+ Years of Experience
                                    </div>
                                </div>
                            </div>
                            <div class="designation">
                                CISA | ISO 27001 LA | GDPR CDPO | CDCS | CDCP
                            </div>
                            <div class="summary">
                                25+ years of experience as an IT Information Security Analyst with a rich and diverse
                                portfolio in fields like Facility Operations, Mission Critical Building Operations,
                                Safety, Security, Process Implementation, Information Security, Risk Management,
                                Operational Excellence, Auditing, Training & Mentoring.
                            </div>
                        </div>
                        <!--/ col end /-->

                        <!--/ col start /-->
                        <div class="swiper-slide item">
                            <div class="profile-desc">
                                <div class="avtar-data">
                                    <div class="avtar-name">
                                        Aswini
                                    </div>
                                    <div class="avtar-exp">
                                        10+ Years of Experience
                                    </div>
                                </div>
                            </div>
                            <div class="designation">
                                CISA | CRISC | CA | CS
                            </div>
                            <div class="summary">
                                Aswini is a finance professional turned information security and risk management expert
                                with over 10 years of experience. A Certified Information Systems Auditor (CISA) and
                                Certified in Risk and Information Systems Control (CRISC), she specializes in IT audits,
                                GRC assessments, and financial risk management. With a strong foundation in finance and
                                accounting, she brings a unique perspective to auditing and information security, making
                                complex CISA concepts easy to understand. Aswini has mentored numerous aspirants for the
                                CISA exam, leveraging her expertise to simplify intricate topics.
                            </div>
                        </div>
                        <!--/ col end /-->

                        <!--/ col start /-->
                        <div class="swiper-slide item">
                            <div class="profile-desc">
                                <div class="avtar-data">
                                    <div class="avtar-name">
                                        Sachin
                                    </div>
                                    <div class="avtar-exp">
                                        11+ Years of Experience
                                    </div>
                                </div>
                            </div>
                            <div class="designation">
                                CEH | CISA | DISA | COBIT-2019 | CC- (ISC2) | RPA | ISO 27001:2022 LA | Certified in
                                Cybersecurity | Chartered Accountant
                            </div>
                            <div class="summary">
                                A senior IT consultant involved in internal audit assignments, specializing in IT Audit
                                and cybersecurity. Sachin has over 11 years of experience in internal and external
                                audits for multiple industries with a focus on IT Audit, Information Security, SOX
                                compliance, IT Disaster Recovery, Business Continuity, and Project Management, as well
                                as automated control review.
                            </div>
                        </div>
                        <!--/ col end /-->
                    </div>
                    <div class="d-none d-md-flex justify-content-center align-items-center navigation">
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
        <section class="why-choose" id="why-choose" style="background-color:var(--acent-red);">
            <div class="container-fluid container-lg">
                <div class="row g-4">
                    <div class="col-12">
                        <h2 class="text-center">Why Choose InfosecTrain?</h2>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/certified-trainers.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Learn from <strong>certified trainers</strong> and industry experts</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/assessment-practice.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Practice with case studies, <strong>flash cards, mind maps & quizzes</strong></p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/cippe-domains.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Immerse in <strong>scenario-based learning</strong> across all CISA domains</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/price-list.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Best Quality Training with <strong>Best Price Guarantee</strong></p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/exam.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p><strong>Conquer the exam</strong> and achieve success with 98% Pass Rate</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/certificate.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Prepare to excel with mock tests, exam tips, and <strong>real-world examples</strong></p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/course-curriculum.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p><strong>Updated curriculum</strong> aligned with CISA 2024</p>
                        </div>
                    </div>
                    <!--/ col start /-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="item">
                            <img src="assets/images/why-choose/learning-schedule.png" width="45" height="45"
                                alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                            <p>Choose <strong>Flexible Learning</strong> options including weekend batches</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[why choose sec end]>-->

        <!--<[success story start]>-->
        <!-- <section class="success-story d-none">
            <div class="container-fluid container-lg">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center text-md-start">Real Stories, Real Success</h2>
                    </div>
                </div>

                <div class="row align-items-center row-two">
                    <div class="col-lg-6">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide modal-btn-video">
                                    <img src="assets/images/success-story/parag-kulkarni-story.png" width="896"
                                        height="462" alt="CIPPE Success Story" />
                                </div>
                                <div class="swiper-slide modal-btn-video">
                                    <img src="assets/images/success-story/ritajit-chatterjee-story.png" width="896"
                                        height="462" alt="CIPPE Success Story" />
                                </div>
                                <div class="swiper-slide modal-btn-video">
                                    <img src="assets/images/success-story/saivarun-dhandapani-story.png" width="896"
                                        height="462" alt="CIPPE Success Story" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div thumbsSlider="" class="swiper mySwiper3" style="width: 100%;">
                            <div class="swiper-wrapper justify-content-between">
                                <div class="swiper-slide swiper-slide-thumb">
                                    <img src="assets/images/success-story/parag-kulkarni.png" width="192" height="200"
                                        alt="CIPPE Success Story" />
                                </div>
                                <div class="swiper-slide swiper-slide-thumb">
                                    <img src="assets/images/success-story/ritajit-chatterjee.png" width="192"
                                        height="200" alt="CIPPE Success Story" />
                                </div>
                                <div class="swiper-slide swiper-slide-thumb">
                                    <img src="assets/images/success-story/saivarun-dhandapani.png" width="192"
                                        height="200" alt="CIPPE Success Story" />
                                </div>
                            </div>
                            <div class="d-none d-md-flex justify-content-center align-items-center navigation">
                                <div class="swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                        fill="none">
                                        <path
                                            d="M17 7C17.5523 7 18 7.44772 18 8C18 8.55228 17.5523 9 17 9V7ZM0.292892 8.70711C-0.0976315 8.31658 -0.0976315 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM17 9H1V7H17V9Z"
                                            fill="#EE224A" />
                                    </svg>
                                </div>
                                <div class="swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                        fill="none">
                                        <path
                                            d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM17.7071 8.70711C18.0976 8.31658 18.0976 7.68342 17.7071 7.29289L11.3431 0.928932C10.9526 0.538408 10.3195 0.538408 9.92893 0.928932C9.53841 1.31946 9.53841 1.95262 9.92893 2.34315L15.5858 8L9.92893 13.6569C9.53841 14.0474 9.53841 14.6805 9.92893 15.0711C10.3195 15.4616 10.9526 15.4616 11.3431 15.0711L17.7071 8.70711ZM1 9H17V7H1V9Z"
                                            fill="#EE224A" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="success-rate mt-4 mt-md-0">
                            <img src="assets/images/success-story/success-rate.webp"
                                alt="Training Certification Success Rate" width="1088" height="136">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="success-story-hm-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 success-story d-flex flex-column">
                        <h2>Success Speaks Volumes</h2>
                        <div class="success-item">
                            <div class="video-container" id="videoContainer">
                                <div class="overlay" id="overlay">
                                    <div class="play-button" id="playButton">
                                        <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/home/play-button.svg"
                                            alt="Success Story" loading="lazy">
                                    </div>
                                </div>
                                <iframe width="100%" height="315" src="" allowfullscreen="" id="youtubeVideo"
                                    title="InfosecTrain Success Story"></iframe>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 success-certificate d-flex align-items-center justify-content-center flex-column">
                        <h2>Get a Sample Certificate</h2>
                        <div class="success-item">
                            <img src="assets/images/success-story/certificate.webp" width="429" height="263"
                                alt="Advanced Penetration Testing ertificate" class="d-block m-auto img-fluid"
                                loading="lazy">
                        </div>
                        <button class="button modal-btn" modal-title="Success Story">get in
                            touch</button>
                    </div>
                </div>
            </div>
        </section>
        <!--<[success story start]>-->

        <!--benefits sec start-->
        <section class="benefits-sec" id="benefits">
            <div class="container-fluid container-lg">
                <div class="row g-4 justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center">Benefits of CISA Certification</h2>
                    </div>
                </div>
                <div class="d-flex flex-lg-nowrap flex-wrap justify-content-center gap-4 my-4">
                    <!--/ col start /-->
                    <div class="benefits-item text-center d-flex align-items-center flex-column gap-3 p-3 rounded-4">
                        <img src="assets/images/benifits/global-recognition.svg" width="24" height="24"
                            alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                        <p class="mb-0">Get global recognition</p>
                    </div>
                    <!--/ col start /-->
                    <div class="benefits-item text-center d-flex align-items-center flex-column gap-3 p-3 rounded-4">
                        <img src="assets/images/benifits/earning.svg" width="24" height="24"
                            alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                        <p class="mb-0">Maximize your earning potential</p>
                    </div>
                    <!--/ col start /-->
                    <div class="benefits-item text-center d-flex align-items-center flex-column gap-3 p-3 rounded-4">
                        <img src="assets/images/benifits/cybersecurity-expert.svg" width="24" height="24"
                            alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                        <p class="mb-0">Earn the status of CISA expert</p>
                    </div>
                    <!--/ col start /-->
                    <div class="benefits-item text-center d-flex align-items-center flex-column gap-3 p-3 rounded-4">
                        <img src="assets/images/benifits/career-growth.svg" width="24" height="24"
                            alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                        <p class="mb-0">Advanced career growth</p>
                    </div>
                    <!--/ col start /-->
                    <div class="benefits-item text-center d-flex align-items-center flex-column gap-3 p-3 rounded-4">
                        <img src="assets/images/benifits/community.svg" width="24" height="24"
                            alt="InfosecTrain - Your Trusted Cybersecurity Training Partner">
                        <p class="mb-0">Become a part of an esteemed community</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-12 f-nunito fs-18 fw-bold text-dark text-center">
                        Average salary range for different CISA profiles
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <img src="assets/images/benifits/benefits.webp" alt="Course Benefits" width="563" height="264"
                            class="d-block w-100 h-auto m-auto rounded-4">
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div>
                            <img src="assets/images/benifits/hiring-company.webp" alt="Hiring Company" width="533"
                                height="160" class="w-100 h-auto d-block m-auto rounded-4">
                        </div>
                        <div class="d-flex flex-column flex-lg-row align-items-center text-center gap-3 rounded-4 p-3 mt-4"
                            style="background: var(--acent-yellow);">
                            <div class="f-nunito text-dark fw-bold fs-18">
                                Confused about the right course for yourself?
                            </div>
                            <button class="button modal-btn" modal-title="Talk to our experts">Talk to our
                                experts</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--benefits sec end-->

        <!--<[Gladiators start]>-->
        <section class="gladiators" id="reviews">
            <div class="container-fluid container-lg">
                <div class="row g-4">
                    <div class="col-12">
                        <h2 class="text-center">Words Have Power</h2>
                    </div>

                    <div class="col-12">
                        <div class="swiper myGladiators">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide gladiators-item">
                                    <div class="profile">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/testimonial/Gilbert-W.-Tangwa.png"
                                                    alt="Gilbert W. Tangwa" width="250" height="250">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    Gilbert W. Tangwa
                                                </h3>
                                                <span>United States</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="desc">
                                        I enjoyed the class and learned a lot. The CISA course provided a strong
                                        foundation, and I'm eager to see how it aligns with the certification exam. The
                                        practical approach and real-world examples were extremely beneficial in
                                        understanding the core concepts.
                                    </p>
                                </div>

                                <div class="swiper-slide gladiators-item">
                                    <div class="profile">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/testimonial/Daniel-K.-Anele.png"
                                                    alt="Daniel K. Anele" width="250" height="250">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    Daniel K. Anele
                                                </h3>
                                                <span>United States</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="desc">
                                        I really enjoyed the CISA training. The instructor was knowledgeable and
                                        supportive, making even the toughest topics easy to understand. The course
                                        structure was well-balanced, ensuring a smooth and effective learning
                                        experience.
                                    </p>
                                </div>

                                <div class="swiper-slide gladiators-item">
                                    <div class="profile">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/testimonial/Nidhi-Singh.png" alt="Nidhi Singh"
                                                    width="250" height="250">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    Nidhi Singh
                                                </h3>
                                                <span>United Kingdom</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="desc">
                                        The CISA course was highly insightful! The expert trainer patiently addressed
                                        all our queries and provided excellent answering techniques, making complex
                                        concepts easier to grasp. The interactive approach and in-depth explanations
                                        enhanced the overall learning experience. I truly appreciate the effort and
                                        dedication.
                                    </p>
                                </div>

                            </div>

                            <div class="d-none d-md-flex justify-content-center align-items-center navigation">
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
                </div>
            </div>
        </section>
        <!--/ Gladiators end /-->

        <!--/ related courses /-->
        <?php // Include the related_courses.php file
        include('../../lp-components/related-courses.php');
        ?>
        <!--/ related courses /-->

        <!--<[faq start]>-->
        <?php if (!empty($faq)) { ?>
            <section class="faq-section pt-0">
                <div class="container-fluid container-lg">
                    <div class="row g-4">
                        <div class="col-12">
                            <h2 class="text-center">Frequently Asked Questions</h2>
                        </div>
                        <div class="col-12">
                            <div class="accordion d-flex flex-column gap-4 accordion-faq-section">
                                <?php foreach ($faq as $index => $question) {
                                    // Add "open" class and visible style for the first item
                                    $isOpen = $index === 0 ? 'open' : '';
                                    ?>
                                    <div
                                        class="accordion-item border-grey w-100 rounded-4 overflow-hidden <?php echo $isOpen; ?>">
                                        <button
                                            class="accordion-header f-nunito fs-18 fw-bold p-3 d-flex align-items-center gap-3">
                                            <span><?php echo htmlspecialchars($question['title']); ?></span>
                                            <span class="arrow"></span>
                                        </button>
                                        <div class="accordion-body">
                                            <?php echo $question['ans']; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <!--<[faq end]>-->

        <!--<[reach us sec start]>-->
        <section class="reach-us pb-lg-0" style="background: var(--acent-orange);">
            <div class="container-fluid container-lg">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column gap-4">
                            <h2 class="text-center text-md-start">Need Help? Reach Us.</h2>
                            <form method="post" class="ajax-form d-flex align-items-start flex-column gap-3">
                                <div class="w-100">
                                    <input type="text" name="me_name" class="me_name form-control"
                                        placeholder="Full Name">
                                    <div class="error-message name_error"></div>
                                </div>
                                <div class="w-100">
                                    <input type="email" name="me_email" class="me_email form-control"
                                        placeholder="Email">
                                    <div class="error-message email_error"></div>
                                </div>
                                <input type="number" name="me_phone" class="me_phone form-control" placeholder="Mobile">

                                <input type="hidden" id="me_others_calendar" name="me_others"
                                    value="Need Help Reach Us">
                                <input type="hidden" id="me_pageurl_calendar" name="me_pageurl"
                                    value="<?php echo $pag_url; ?>">

                                <input type="hidden" name="me_submited" value="1">

                                <!-- Privacy Policy Checkbox -->
                                <label class="f-nunito fs-14 fw-normal"
                                    style="color:var(--dark); font-size: 14px; margin-top: 16px;display: flex; align-items: start;gap: 8px;">
                                    <input type="checkbox" name="privacy_policy" checked required
                                        style="accent-color: var(--danger); border: 1px solid var(--danger); margin-top: 4px;">
                                    <span>
                                        By sharing your details, you agree to our Terms and <a
                                            href="https://www.infosectrain.com/privacy-policy/" target="_blank"
                                            style="color: var(--dark);font-size:14px;text-decoration: underline;">Privacy
                                            Policy</a>
                                    </span>
                                </label>
                                <!-- privacy Policy Checkbox end -->
                                <button type="submit" class="form-control-btn w-auto">Submit</button>

                                <div class="loader text-center" style="display:none;">
                                    <img src="assets/images/loader.gif" alt="Loading...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="item">
                            <img src="assets/images/reach-us.png" width="1094" height="757" alt="Reach Us"
                                class="img-fluid d-block">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<[reach us sec end]>-->
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
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#training-calendar">Training Calendar</a></li>
                            <li><a href="#why-choose">Why InfosecTrain</a></li>
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
                            All rights reserved. © <?php echo date('Y') ?>, InfosecTrain
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
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
        </ul>
    </section>
    <!--<[footer fixed end]>-->

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
                    <!-- Privacy Policy Checkbox -->
                    <label class="f-nunito fs-14 fw-normal"
                        style="color:var(--dark); font-size: 14px; margin-top: 16px;display: flex; align-items: start;gap: 8px;">
                        <input type="checkbox" name="privacy_policy" checked required
                            style="accent-color: var(--danger); border: 1px solid var(--danger); margin-top: 4px;">
                        <span>
                            By sharing your details, you agree to our Terms and <a
                                href="https://www.infosectrain.com/privacy-policy/" target="_blank"
                                style="color: var(--dark);font-size:14px;text-decoration: underline;">Privacy
                                Policy</a>
                        </span>
                    </label>
                    <!-- privacy Policy Checkbox end -->
                    <button type="submit" class="form-control-btn">Submit</button>

                    <div class="loader text-center" style="display:none;">
                        <img src="assets/images/loader.gif" alt="Loading...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--<[form model end]>-->

    <div id="myModalVideo" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close-video" style="margin-left:auto;">
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

    <!--RAMDAN offer sec start -->
    <?php // Include the related_courses.php file
    include('../../lp-components/ramdan-offer.php');
    ?>
    <!--RAMDAN offer sec end -->
    <!--/ js link start /-->
    <script type="text/javascript">
        // api code Pass the PHP variable to JavaScript
        var apiId = <?php echo $api_id; ?>;
    </script>
    <script src="assets/js/swiper-bundle.min.js" defer></script>
    <script src="assets/js/custom.js" defer></script>
    <!--/ js link start /-->
    <script>
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
</body>

</html>