<?php include ('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assests/images/favicon.ico">
    <title>SOC Analyst Online Training Course | InfosecTrain</title>
    <meta name="description"
        content="InfosecTrain Offers SOC Analyst Online training course. Learn all About how to prevent, identify, assess, and respond to cybersecurity threats and incidents." />
    <!--css link start-->
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/swiper-bundle.min.css">
    <!--css link end-->
    <!--google font-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        .hide {
            display: none;
        }

        .alert-danger {
            color: #85151e;
            background-color: #ffd4d8;
            border-color: #ffc3c8;
            font-size: 15px;
            margin-bottom: 10px;
            padding: 10px;
            margin: 1rem 0 0 0;
        }

        .rows li {
            list-style: none;
        }

        .downloadlink {
            background-color: #fff;
            color: #DF0C0C;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 17px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: 0.4s;
            margin-top: 1rem;
            border-radius: 5px;
            box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
        }

        .advisor-item span {
            color: #d81414;
            font-size: 15px;
            display: block;
            letter-spacing: .5px;
            font-weight: 500;
            margin-bottom: 15px;
        }
    </style>

    <style>
        .alert-danger {
            color: #85151e;
            background-color: #ffd4d8;
            border-color: #ffc3c8;
        }

        .alert-danger {
            font-size: 13px;
            margin-bottom: 10px;
        }

        .rows {
            width: 100%;

        }

        .p-3 {
            padding: 1rem !important;
        }

        .alert-danger p {
            margin: 0;
            padding: 0;
        }

        .alert-danger ul {
            padding: 0;
            margin: 0;
        }

        .alert-danger ul li {
            display: block;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        #table_section .table {
            margin-bottom: 0;
        }

        #table_section .table_training {
            width: 100%;
            border-radius: 2px 2px 2px 2px;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        table {
            border-collapse: collapse;
        }

        #table_section .table thead {
            background: #e5e5e5;
        }

        #table_section .table tr:first-child {
            border-left: none;
        }

        #table_section .table-bordered td:first-child,
        #table_section .table-bordered th:first-child {
            border-left: none;
        }

        #table_section .table thead tr th {
            font-size: 14px;
            color: #ffffff;
            opacity: 1;
            font-weight: 500;
            background: #000000c2;
            letter-spacing: 1px;
        }

        .table-bordered thead td,
        .table-bordered thead th {
            border-bottom-width: 2px;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
            border-bottom: none;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .table td,
        .table th {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .column-0 {
            width: 150px;
        }

        th {
            text-align: inherit;
        }

        #table_section .table tr:first-child {
            border-left: none;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05);
        }

        .row-2 {
            border-bottom: 1px solid #e5e5e5;
        }

        .row-1 {
            background: #FFFFFF;
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }


        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }



        @media (max-width: 768px) {
            #table_section .table thead {
                display: none;
            }

            #table_section .table,
            #table_section .table tbody,
            #table_section .table tr,
            #table_section .table td {
                display: block;
                width: 100%;
            }

            #table_section .table tr {
                margin-bottom: 13px;
            }

            #table_section .table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            #table_section .table-responsive table td .t_btn {
                background-color: #ff8e20;
                width: 130px;
                color: #fff;
            }

            #table_section .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 14px;
                font-weight: 600;
                text-align: left;
            }

            #table_section h2.package-heading {
                font-size: 20px;
                margin: 20px 0;
            }
        }

        @media (max-width: 575.98px) {
            #table_section.table_training .t_text_h {
                font-size: 22px;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-xl>.table-bordered {
                border: 0;
            }
        }

        #benefit .table-responsive {
            border-radius: 20px;
            margin-top: 40px;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin-top: 1rem;
            box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
        }

        .table-responsive>.table-bordered {
            border: 0;
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-lg>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-md>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-sm>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-md>.table-bordered {
                border: 0;
            }
        }

        .hide {
            display: none !important;
        }

        .btn-danger {
            padding: 6px 10px;
            background: red;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
        }
    </style>
    <!--google font end-->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =

                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-5XZDRWG');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
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
    <!--header start-->
    <header>
        <img loading="lazy" src="assests/images/Frame.png" alt="" class="shapetop">
        <!--navbar start-->
        <div class="topNav">
            <nav>
                <div class="logo">
                    <a href="#">
                        <img loading="lazy" src="assests/images/Infosetrainlogo.png" alt="Infosetrain">
                    </a>
                </div>
                <span class="bars" onclick="openNav()">&#9776;</span>
                <div class="menu">
                    <ul>
                        <li><a href="#coursecontent">overview</a></li>
                        <li><a href="#table_section">Training Calendar</a></li>
                        <li><a href="#advisors">Course Advisors</a></li>
                        <li><a href="#review">Review</a></li>
                        <li><a href="#choose">Why Infosectrain</a></li>
                    </ul>
                </div>
                <div class="enroll">
                    <a href="#free_demo">Enroll Now</a>
                </div>
            </nav>
        </div>
        <!--navbar end-->
        <!--responsive navbar start-->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#coursecontent">overview</a>
            <a href="#table_section">Training Calendar</a>
            <a href="#advisors">Course Advisors</a>
            <a href="#review">Review</a>
            <a href="#choose">Why Infosectrain</a>
        </div>
        <!--responsive navbar end-->
        <!--banner start-->
        <div class="banner container">
            <div class="row align-items-center">
                <div class="bannerContent">
                    <p>Stay Ahead of the Game</p>
                    <h1> <span>Upskill</span> with the Most Flexible and Comprehensive <br> <span> Security Operations Center (SOC)
                           <br> Analyst Training</span> </h1>
                </div>
                <div class="bannerImg">
                    <img loading="lazy" src="assests/images/men-working.webp" alt="person" class="rimg">
                </div>
            </div>
        </div>
        <!--banner end-->
    </header>
    <!--header end-->

    <main>
        <!--trainning package sec start-->
        <section class="package_sec" id="overview">
            <div class="container" id="free_demo">
                <div class="row justify-content-between training_row">
                    <div class="tainingItem">
                        <h3>SOC Analyst Training Package Includes</h3>
                        <div class="tainingItem-icon">
                            <img loading="lazy" src="assests/images/icon/online_training.png" alt="Online Training">
                            <p>40 hrs of instructor-led training</p>
                        </div>
                        <div class="tainingItem-icon">
                            <img loading="lazy" src="assests/images/icon/recording.png" alt="Recorded Sessions">
                            <p>Access to Recorded Sessions</p>
                        </div>
                        <div class="tainingItem-icon">
                            <img loading="lazy" src="assests/images/icon/training.png" alt="training">
                            <p>Learn from Industry Expert</p>
                        </div>
                        <div class="tainingItem-icon">
                            <img loading="lazy" src="assests/images/icon/instructors.png" alt="Accredited Instructors">
                            <p>Accredited Instructors</p>
                        </div>
                        <div class="tainingItem-icon">
                            <img loading="lazy" src="assests/images/icon/certificate.png" alt="Course Certificate">
                            <p>Course Completion Certificate</p>
                        </div>
                        <div class="tainingItem-icon">
                            <img loading="lazy" src="assests/images/icon/calendor.png" alt="calendor">
                            <p>Post Training support</p>
                        </div>
                    </div>
                    <div class="enquiryForm">
                        <div class="e_offer">
                            <span>Price :- </span>
                            <del>₹29,999</del>
                            <span>₹17,999 </span>
                        </div>
                        <h3>talk to our experts</h3>
                        <div class="hide rows  mt-2" id="demo_form_output"> </div>
                        <form method="post" action="" onSubmit="return val_demo_request(this.form);"
                            id="demo_me_phone_f">
                            <input type="text" id="me_name" name="me_name" placeholder="Your Name *">
                            <input type="email" id="me_email" name="me_email" placeholder="Email-Address *">
                            <input type="tel" id="me_phone" name="me_phone" placeholder="Phone Number">
                            <input type="text" id="me_message" name="me_message"
                                placeholder="Mention Your Call Time Preference">

                            <input type="hidden" id="me_redirect" value="<?php echo BASE_URL; ?>thank-you.php">
                            <input type="hidden" id="me_others" name="me_others"
                                value="SOC Analyst Expert Training">
                            <input type="hidden" id="me_pageurl" name="me_pageurl" value="<?php echo $pag_url; ?>">

                            <input type="submit" value="REQUEST A CALLBACK" name="me_submited" id="me_submited">
                        </form>
                        <div class="loading_w hide" id="loading_w">
                            <center>
                                <img loading="lazy" src="<?php echo BASE_URL; ?>assests/images/loader.gif" />
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--trainning package sec end-->



        <section id="table_section" style="background: #F0EAEA;padding:5rem 0;float:inherit;">
            <div class="container">
                <h3>Training Calendar</h3>
                <div class="row">
                    <?php
                    $url = "https://www.infosectrain.com/api/37880/href_toscroll/free_demo";


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
        </section>



        <!--course advisor start-->
        <section style="background: #F5F5F5;" id="advisors">
            <div class="container">
                <h3>Our Expert Course Advisors</h3>
                <div class="row">
                    <div class="advisor-item">
                        <img loading="lazy" src="https://www.infosectrain.com/wp-content/uploads/2023/02/sanyam-negi.png" alt="Sanyam Negi | SOC Trainer">
                        <div>
                            <h4>Sanyam Negi</h4>
                            <span> 10+ Years Of Experience </span>
                            <p>
                                Information Security Consultant & Trainer
                            </p>
                            <p>
                                Sanyam is an Information Security Consultant & Trainer with 10+ years of hands-on
                                experience in Security Testing, Cloud Security and DevOps. He is adept at designing
                                tailored training programs and courseware on Security Solutions for various
                                organizations.
                            </p>
                        </div>
                    </div>
                    <div class="advisor-item">
                        <img loading="lazy" src="https://www.infosectrain.com/wp-content/uploads/2023/12/abhishek.png" alt="Abhishek Sharma | SOC Trainer">
                        <div>
                            <h4> Abhishek Sharma</h4>
                            <span> 10+ Years Of Experience </span>
                            <p>
                            Information Security Corporate Trainer
                            </p>
                            <p>
                            10+ years of experience as an Information Security Consultant and Trainer in delivering training to government and non-government organizations around the globe on different Information security verticals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--course advisor end-->

        <!--why choose sec start-->
        <section class="why_sec" id="choose">
            <div class="container">
                <h3>Why Choose InfosecTrain</h3>
                <div class="row justify-content-between">
                    <div class="whyItem">
                        <img loading="lazy" src="assests/images/icon/industry_experts.png" alt="Industry Experts">
                        <p>Certified & Experienced Instructors</p>
                    </div>
                    <div class="whyItem">
                        <img loading="lazy" src="assests/images/icon/training_support.png" alt="Training Support">
                        <p>Customized Training</p>
                    </div>
                    <div class="whyItem">
                        <img loading="lazy" src="assests/images/icon/programs.png" alt="Certification Programs">
                        <p>Access to Recorded Sessions</p>
                    </div>
                    <div class="whyItem">
                        <img loading="lazy" src="assests/images/icon/time.png" alt="Time Schedule">
                        <p>Flexible Schedule</p>
                    </div>
                </div>
            </div>
        </section>
        <!--why choose sec end-->

        <!--about sec start-->
        <section class="aboutsec" id="coursecontent">
            <div class="container">
                <div class="row">
                    <div class="about">
                        <h3>About SOC Analyst</h3>
                        <p>
                            The SOC Analyst training curriculum has been carefully crafted to provide aspiring and
                            present SOC Analysts with a thorough knowledge of SOC operations and processes. Learn to
                            recognize and respond to information security incidents, create and track security events
                            like alerts, and conduct security investigations. Learn tools like Splunk and Security
                            Onion.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--about sec end-->

        <!--course content sec start-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="course_content_heading">
                        <h3>SOC Analyst Course Details</h3>
                    </div>
                </div>
                <div class="row">
                    <button class="accordion">Course Overview</button>
                    <div class="panel">
                        <p>&nbsp</p>
                        <p>SOC Analysts play a crucial position in today’s security teams since they are on the front
                            lines of cyber defense, identifying and responding to cyber threats as they occur.</p>
                        <p>&nbsp</p>
                        <p>The InfosecTrain’s SOC Analyst training course is specifically created for aspiring and
                            current SOC Analysts who want to learn how to prevent, identify, assess, and respond to
                            cybersecurity threats and incidents. The course is the first level of a course series that
                            includes Level 1-SOC Analyst and Level 2-SOC Specialist, and is specifically designed to
                            assist you in mastering over trending and in-demand technical abilities to carry out
                            numerous sophisticated SOC activities.</p>
                        <p>&nbsp</p>
                        <p>The course begins with the fundamentals of SOC teams and Blue Team operation architecture
                            before moving on to more advanced topics such as digital forensics, incident response,
                            threat intelligence, and SIEM (Security Incident and Event Management) solutions.</p>
                        <p>&nbsp</p>
                        <p>This training course also helps participants plan their preparation for the SOC Analyst
                            certification examinations, which are required to obtain the most sought-after position in
                            the SOC team.</p>
                        <p>&nbsp</p>
                    </div>

                    <button class="accordion">Who Should Attend</button>
                    <div class="panel">
                        <p>&nbsp</p>
                        <ul>
                            <li>Technical Support Engineers</li>
                            <li>System Administrators</li>
                            <li>Security Consultants</li>
                            <li>Cyber Security Analysts</li>
                            <li>Network Engineers</li>
                            <li>Network Architects or Admin</li>
                            <li>Security System Engineers</li>
                            <li>SOC Analysts (L1 &amp; L2)</li>
                            <li>Information Security Researcher</li>
                            <li>Entry-level Information Security role</li>
                            <li>Anyone Who wants to become SOC Analyst</li>
                        </ul>
                        <p>&nbsp</p>
                    </div>

                    <button class="accordion">Pre-requisites</button>
                    <div class="panel">
                        <p>Basic Knowledge of:</p>
                        <ul>
                            <li>Networking fundamentals</li>
                            <li>OS basics &amp; Troubleshooting is recommended</li>
                            <li>Basics of Information Security</li>
                            <li>Basics of Cyber World &amp; Security</li>
                            <li>Beginner or Fresher for SOC Operations Centre</li>
                            <li>Working on Information Security Role</li>
                        </ul>
                        <p>&nbsp</p>
                    </div>

                    <button class="accordion">Exam Information</button>
                    <div class="panel">
                        <p>&nbsp</p>
                        <p>There is no particular exam for this course, and its curriculum is meant to help participants
                            pass a variety of exams to become SOC Analysts.</p>
                        <p>&nbsp</p>
                    </div>

                    <button class="accordion">SOC Analyst Course Objectives</button>
                    <div class="panel">
                        <p>&nbsp</p>
                        <p>This SOC Analyst training course allows you to:</p>
                        <p>&nbsp</p>
                        <ul>
                            <li>Understand the Security Operation Center (SOC) team operations</li>
                            <li>Understand Blue Team operations architecture</li>
                            <li>In-depth knowledge of digital forensics, threat intelligence, and incident response</li>
                            <li>Understand technical strategies, tools, and procedures to safeguard data for your
                                organization</li>
                            <li>Understand essential SOC tools like Splunk and Security Onion</li>
                            <li>Understand how to recognize threats and implement countermeasures</li>
                        </ul>
                        <p>&nbsp</p>
                    </div>
                    <button class="accordion">SOC Analyst Course Content</button>
                    <div class="panel">
                        <p>&nbsp</p>
                        <p><strong>Domain 1:</strong> <strong>Security Terminologies, OS Basics & Network
                                Fundamentals</strong></p>
                        <ul>
                            <li>Why do we need Security?</li>
                            <li>CIA Triad</li>
                            <li>Concept of AAA</li>
                            <li>Hacking Concepts</li>
                            <li>Types of Hackers</li>
                            <li>Domains of Security</li>
                            <li>Ethical Hacking Phases</li>
                            <li>Types of Attacks</li>
                            <li>Network Fundamentals
                                <ul>
                                    <li>NOC vs SOC</li>
                                    <li>The OSI Model</li>
                                    <li>Network Devices</li>
                                    <li>Network Tools – Firewall, IDS, IPS, VPN, Switches, Routers</li>
                                    <li>Ports and Services</li>
                                    <li>Conducting a Port Scan with Nmap <strong>[Practical]</strong></li>
                                </ul>
                            </li>
                            <li>Windows Operating System Fundamentals <strong>[Practical]</strong>
                                <ul>
                                    <li>Investigating Windows Operating System</li>
                                    <li>Windows Event Logs</li>
                                    <li>Windows Registry</li>
                                    <li>Scheduled Tasks</li>
                                    <li>File Analysis</li>
                                    <li>SysInternals Suite</li>
                                    <li>Command Prompt</li>
                                    <li>Sysmon (System Monitor)</li>
                                </ul>
                            </li>
                            <li>Linux Operating System Fundamentals<strong> [Practical]</strong>
                                <ul>
                                    <li>Linux Directory Services</li>
                                    <li>Most useful Linux Commands in SOC</li>
                                    <li>Events Logs in Linux</li>
                                    <li>Linux System Services</li>
                                </ul>
                            </li>
                        </ul>
                        <p><strong>Domain 2:</strong> <strong>Blue Team Operations Architecture</strong></p>
                        <ul>
                            <li>Why do we need SOC?</li>
                            <li>What is SOC?</li>
                            <li>Functions of SOC</li>
                            <li>SOC Models &amp; Types</li>
                            <li>SOC Teams &amp; Roles</li>
                            <li>Incidents vs Events</li>
                            <li>True vs False Incident Categories</li>
                            <li>Concept of Logging
                                <ul>
                                    <li>Local Logging vs Centralized Logging</li>
                                </ul>
                            </li>
                            <li>Log Management &amp; Log Analysis
                                <ul>
                                    <li>Log Management needs</li>
                                    <li>Concept of Log Analysis</li>
                                    <li>Web Server Logs</li>
                                    <li>Firewall Logs</li>
                                    <li>SSH Logs</li>
                                    <li>Windows Event Logs</li>
                                    <li>Using Regex for Log Analysis <strong>[Practical]</strong></li>
                                </ul>
                            </li>
                            <li>SOC Workflow: ITSM Workflow</li>
                            <li>ITSM Tools: Service Now, JIRA, BMC, Request Tracker, etc.</li>
                        </ul>
                        <p><strong>Domain 3:</strong> <strong>SIEM - Nervous System of SOC</strong></p>
                        <ul>
                            <li>Why do we need SIEM?</li>
                            <li>What is SIEM?
                                <ul>
                                    <li>Security Information Management (SIM)</li>
                                    <li>Security Event Management (SEM)</li>
                                </ul>
                            </li>
                            <li>SIEM guidelines and architecture</li>
                            <li>SIEM Capabilities: Aggregation, Correlation, Reporting, Storage, Alerts, etc.</li>
                            <li>Using Splunk <strong>[Practical]</strong>
                                <ul>
                                    <li>Section Introduction</li>
                                    <li>Installing Splunk</li>
                                    <li>UI Navigation</li>
                                    <li>Search Queries using SPL</li>
                                    <li>Creating Alerts &amp; Dashboard</li>
                                </ul>
                            </li>
                        </ul>
                        <p><strong>Domain 4:</strong> <strong>Importance of Threat Intelligence</strong></p>
                        <ul>
                            <li>What is Threat?</li>
                            <li>Why do we need Intelligence?</li>
                            <li>Introduction to Threat Intelligence</li>
                            <li>Threats, Threat Actors, APTs &amp; Global Campaigns
                                <ul>
                                    <li>Network Level Threats</li>
                                    <li>Web App Level Threats</li>
                                    <li>Host Level Threats</li>
                                </ul>
                            </li>
                            <li>IOCs vs IOA vs Precursors</li>
                            <li>Traffic Light Protocol (TLP)</li>
                            <li>Pyramid of Pain [Practical]</li>
                            <li>Collecting Threat Intelligence <strong>[Practical]</strong>
                                <ul>
                                    <li>Paid vs Open-Source Intelligence Gathering</li>
                                </ul>
                            </li>
                            <li>Types of Threat Intelligence
                                <ul>
                                    <li>Strategic Threat Intelligence</li>
                                    <li>Operational Threat Intelligence</li>
                                    <li>Tactical Threat Intelligence</li>
                                    <li>Technical Threat Intelligence</li>
                                </ul>
                            </li>
                            <li>Enhanced Detection with Threat Intelligence</li>
                            <li>Maltego, MISP, STIX, TAXII, etc. <strong>[Practical]</strong></li>
                        </ul>
                        <p><strong>Domain 5:</strong> <strong>Basics of Incident Response & Forensics</strong></p>
                        <ul>
                            <li>Forensics Fundamentals
                                <ul>
                                    <li>File Systems</li>
                                    <li>Hard Disk Drive Basics</li>
                                    <li>Forensics Process<strong> [Practical]</strong></li>
                                    <li>Digital Evidence and Handling</li>
                                    <li>Order of Volatility</li>
                                    <li>Chain of Custody</li>
                                    <li>Hashing &amp; Integrity</li>
                                </ul>
                            </li>
                            <li>Email Forensics
                                <ul>
                                    <li>How Electronic Mail Works</li>
                                    <li>Anatomy of an Email</li>
                                    <li>What is Phishing?</li>
                                    <li>Types of Phishing
                                        <ul>
                                            <li>Spear Phishing</li>
                                            <li>Whaling</li>
                                            <li>Impersonation</li>
                                            <li>Typosquatting and Homographs</li>
                                            <li>Sender Spoofing</li>
                                            <li>URL Shortening</li>
                                            <li>Business Email Compromise</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>Analysing Phishing Emails <strong>[Practical]</strong>
                                <ul>
                                    <li>Analysing Artifacts</li>
                                    <li>Red Flags of Phishing Emails</li>
                                    <li>URL Reputation</li>
                                    <li>File Reputation</li>
                                    <li>SPF</li>
                                    <li>DKIM</li>
                                    <li>DMARC</li>
                                    <li>Manual &amp; Automated Analysis</li>
                                </ul>
                            </li>
                            <li>Incident Response
                                <ul>
                                    <li>Introduction to Incident Response</li>
                                    <li>What is an Incident Response?</li>
                                    <li>Why is IR Needed?</li>
                                    <li>Incident Response Lifecycle - NIST SP 800 61r2</li>
                                    <li>Incident Response Plan: Preparation, Detection &amp; Analysis, Containment,
                                        Eradication, Recovery, Lessons Learned</li>
                                    <li>Incident Response and Security Operations Integration</li>
                                    <li>Case Study: Cyber Kill Chain in Incident Response</li>
                                    <li>Lockheed Martin Cyber Kill Chain
                                        <ul>
                                            <li>What is it, why is it used ?</li>
                                            <li>Case Study: Monero Crypto-Mining</li>
                                        </ul>
                                    </li>
                                    <li>MITRE ATT&amp;CK Framework <strong>[Practical]</strong>
                                        <ul>
                                            <li>What is it, why is it used ?</li>
                                            <li>Matrices in Mitre</li>
                                            <li>Mapping Data with Mitre</li>
                                            <li>Case Study 1: APT3</li>
                                            <li>Case Study 2: OilRig</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <a href="https://www.infosectrain.com/wp-content/uploads/2022/02/New_SOC_ANALYST_v2.pdf"
                        class="downloadlink" target="_blank" class="accordion" style="text-decoration: none;">
                        Download Syllabus
                        <img loading="lazy"
                            src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/download.png"
                            width="20" style="margin: 0 5px;" />
                    </a>
                </div>
            </div>
        </section>
        <!--course content sec end-->

        <!--benifits sec start-->
        <section class="benifits_sec">
            <div class="container">
                <div class="row">
                    <img loading="lazy" src="assests/images/benefits.jpg" alt="SOC Analyst course benifits">
                </div>
            </div>
        </section>
        <!--benifits sec end-->

        <!--avarage selary sec start-->
        <section>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="salary_item">
                        <h3>SOC Analyst Tools Covered</h3>
                        <img loading="lazy" src="assests/images/tool.jpg" alt="SOC Analyst Tool">
                    </div>
                </div>
            </div>
        </section>
        <!--avarage alary sec end-->

        <!--prise sec start-->
        <section class="prise_sec" id="review">
            <div class="container swiper testimonialSwiper">
                <h3>Words of Praise</h3>
                <div class="swiper-wrapper mt-5">
                    <div class="swiper-slide">
                        <div class="prise_item">
                            <img loading="lazy"
                                src="https://www.infosectrain.com/my-admin/uploads-feedback/IMG_20220707_165202.jpg"
                                alt="Mohammed iliyas">
                            <div>
                                <span> Mohammed iliyas </span>
                                <p>
                                    I would like say SOC Analyst Training is best for beginners who wants to start a
                                    career in cyber security. Thanks to Mentor and InfosecTrain for wonderfulling design
                                    this course.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="prise_item">
                            <img loading="lazy"
                                src="https://www.infosectrain.com/my-admin/uploads-feedback/Screenshot_20220517-071532_Gallery.jpg"
                                alt="Jude Adio">
                            <div>
                                <span>Jude Adio </span>
                                <p>
                                    I couldn't believe it would be an easy journey for a career change from nursing to
                                    certified SOC Analyst. I am proud to have completed this so easily with
                                    InfosecTrain. My trainer was patient, polite and ready to be pull back with any
                                    questions. Offered enough time for practical. It was a smooth and easy transition
                                    for me. Thank you Mentor!!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="prise_item">
                            <img loading="lazy"
                                src="https://www.infosectrain.com/my-admin/uploads-feedback/Photo-Abdul%20Latheef.jpg"
                                alt="Abdul Latheef">
                            <div>
                                <span>Abdul Latheef</span>
                                <p>
                                    I'm rrateful, to InfosecTrain team, and our trainer, for their guidance and support,
                                    well-structured live class session. Indeed grateful, for your support and sharing
                                    the knowledge.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="prise_item">
                            <img loading="lazy"
                                src="https://www.infosectrain.com/my-admin/uploads-feedback/Iyyappan.V.jpg"
                                alt="Iyyappan Vairavan">
                            <div>
                                <span>Iyyappan Vairavan</span>
                                <p>
                                    Trainer has extensive knowledge about the subject and has very good presentation
                                    skills. One of the good course to know more about the SOC. Really appreciate the
                                    trainer and the team.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!--prise sec end-->
        <!--popular course sec start-->
        <section class="p_coursesec">
            <div class="container">
                <h3>Other Popular Courses</h3>
                <div class="row justify-content-between">
                    <div class="popular_course">
                        <a href="https://www.infosectrain.com/courses/threat-hunting-training/" target="_blank">
                            <img loading="lazy" src="assests/images/threat-hunting.png" alt="Threat Hunting Professional">
                            <span>Threat Hunting Professional</span>
                        </a>
                    </div>
                    <div class="popular_course">
                        <a href="https://www.infosectrain.com/pages/lp/cism-advance/" target="_blank">
                            <img loading="lazy" src="assests/images/cism.webp" alt="CISM Certification Training">
                            <span>CISM Certification Training</span>
                        </a>
                    </div>
                    <div class="popular_course">
                        <a href="https://www.infosectrain.com/pages/lp/ceh-training/" target="_blank">
                            <img loading="lazy" src="assests/images/ceh.webp"
                                alt="CEH (v11) - Certified Ethical Hacker">
                            <span>CEH (v12) - Certified Ethical Hacker </span>
                        </a>
                    </div>
                    <div class="popular_course">
                        <a href="https://www.infosectrain.com/pages/lp/security-advance/" target="_blank">
                            <img loading="lazy" src="assests/images/security.webp" alt="CompTIA Security">
                            <span>CompTIA Security+ SY0-701 Certification </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--popular course sec end-->
        <!--foooter start-->
        <footer>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="footer_item">
                        <h4>About InfosecTrain</h4>
                        <p>
                            InfosecTrain offers complete training and consulting solutions to its customers globally.
                            Whether the requirements are technical services, certification or custom training, Infosec
                            Train has consistently delivered the highest quality and best success rates in the industry.
                        </p><br>
                        <p>©
                            <?php echo date('Y'); ?> - InfosecTrain. All Rights Reserved.
                        </p>
                    </div>
                    <div class="footer_item">
                        <h4>Quick Contact</h4>
                        <a href="https://api.whatsapp.com/send?phone=16572211127">
                            <span><img loading="lazy" src="assests/images/whtsapp.png" alt=""></span>+1 657-221-1127
                        </a>
                        <a href="tel:1800-843-7890">
                            <span><img loading="lazy" src="assests/images/call.png" alt=""></span>1800-843-7890 (IN)
                        </a>
                        <a href="mailto:sales@infosectrain.com">
                            <span><img loading="lazy" src="assests/images/gmail.png"
                                    alt=""></span>sales@infosectrain.com
                        </a>
                    </div>
                    <div class="footer_item">
                        <h4>Corporate Office</h4>
                        <P>Noida</P>
                        <P>
                            C19 (2nd floor), Block C, Sector 2, <br> Near Nirulas Hotel, Noida, Uttar Pradesh 201301
                        </P>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->
        <!--top up button start-->
        <img loading="lazy" src="assests/images/icon/arrow.png" alt="arrow" onclick="topFunction()" id="myBtn">
        <!--topup button end-->
    </main>
</body>

<!--Start of Zendesk Chat Script-->

<script type="text/javascript">

    window.$zopim || (function (d, s) {
        var z = $zopim = function (c) { z._.push(c) }, $ = z.s =

            d.createElement(s), e = d.getElementsByTagName(s)[0]; z.set = function (o) {
                z.set.

                _.push(o)
            }; z._ = []; z.set._ = []; $.async = !0; $.setAttribute("charset", "utf-8");

        $.src = "https://v2.zopim.com/?5Y1ZvMP3lrSPwhhyQjIGwo618dlqPLkD"; z.t = +new Date; $.

            type = "text/javascript"; e.parentNode.insertBefore($, e)
    })(document, "script");

</script>

<!--End of Zendesk Chat Script-->

<!--js link start-->
<script src="assests/js/common.min.js"></script>
<script src="assests/js/swiper-bundle.min.js"></script>
<script src="assests/js/custom.js"></script>
<script>
    //slider start
    var swiper = new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        loop: true,
        autoplay: false,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    //slider end

    //table display without data
    let tdata = document.querySelector('.row-hover .row-2');
    if (tdata == null) {
        document.getElementById('table_section').style.display = "none";
        document.querySelector('.menu ul li:nth-child(2)').style.display = "none";
        document.querySelector('.sidenav a:nth-child(3)').style.display = 'none';
    }
</script>

<!----------------whatsapp------------>
<div id="filename"></div>
<script>
    $(function () {
        $('#filename').load("whatap.html");
    });
</script>
<!----------------whatsapp----->

</html>