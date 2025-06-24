<?php include('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assests/images/favicon.ico">
    <title>CyberArk Training Program Course | InfosecTrain</title>
    <meta name="description" content="InfosecTrain Offers The CyberArk Online Training Program. Learn a variety of options to those who want recognition for their technical expertise. Enroll Now" />
    <!--css link start-->
        <link rel="stylesheet" href="assests/css/style.css">
        <link rel="stylesheet" href="assests/css/swiper-bundle.min.css">
    <!--css link end-->
    <!--google font-->
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        .hide{display: none;}
        .alert-danger {
            color: #85151e;
            background-color: #ffd4d8;
            border-color: #ffc3c8;
            font-size: 15px;
            margin-bottom: 10px;
            padding: 10px;
            margin: 1rem 0 0 0;
        }
        .rows li{
            list-style: none;
        }
        .downloadlink{
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
        .advisor-item span{
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
        padding: 1rem!important; 
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
    #table_section .table-bordered td:first-child, #table_section .table-bordered th:first-child { 
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
    .table-bordered thead td, .table-bordered thead th { 
        border-bottom-width: 2px; 
    } 
    .table thead th { 
        vertical-align: bottom; 
        border-bottom: 2px solid #dee2e6; 
    } 
    .table-bordered td, .table-bordered th { 
        border: 1px solid #dee2e6; 
        border-bottom: none; 
    } 
    .table-bordered td, .table-bordered th { 
        border: 1px solid #dee2e6; 
    } 
    .table td, .table th { 
        padding: 0.75rem; 
        vertical-align: top; 
        border-top: 1px solid #dee2e6; 
    } 
    .column-0 { 
        width: 150px; 
    } 
    th{ 
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
    background:#FFFFFF; 
    } 
    .col-12 { 
        flex: 0 0 100%; 
        max-width: 100%; 
    } 
    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto { 
        position: relative; 
        width: 100%; 
        padding-right: 15px; 
        padding-left: 15px; 
    } 
    .table-responsive{ 
        display: block; 
        width: 100%; 
        overflow-x: auto; 
        -webkit-overflow-scrolling: touch;
    } 
    .table-responsive > .table-bordered {border: 0; } 
  
 @media (max-width: 768px) { 
  #table_section .table thead {display: none; } 
  #table_section .table, #table_section .table tbody, #table_section .table tr, #table_section .table td{ 
        display: block; 
        width: 100%;
    } 
  #table_section .table tr{ 
        margin-bottom: 13px;
    } 
  #table_section .table td{ 
        text-align: right; 
        padding-left: 50%; 
        position: relative;
    } 
  #table_section .table-responsive table td .t_btn{ 
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
  #table_section h2.package-heading{font-size: 20px;margin: 20px 0; }
} 
 
@media (max-width: 575.98px) { 
  #table_section.table_training .t_text_h{ 
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
    .table-responsive-xl > .table-bordered{ 
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
  .table-responsive > .table-bordered{ 
    border: 0;
    } 
  
 @media (max-width: 991.98px) { 
  .table-responsive-lg{ 
    display: block; 
    width: 100%; 
    overflow-x: auto; 
    -webkit-overflow-scrolling: touch; 
    } 
    .table-responsive-lg > .table-bordered{ 
      border: 0;
    }
} 
    
@media (max-width: 767.98px){ 
  .table-responsive-md{ 
    display: block; 
    width: 100%; 
    overflow-x: auto; 
    -webkit-overflow-scrolling: touch;
    } 
    .table-responsive-md > .table-bordered{ 
      border: 0;
    }
} 
    
@media (max-width: 575.98px){ 
  .table-responsive-sm{ 
    display: block; 
    width: 100%; 
    overflow-x: auto; 
    -webkit-overflow-scrolling: touch;
} 
.table-responsive-sm > .table-bordered{ 
      border: 0;
    }
} 
 
@media (max-width: 767.98px){ 
  .table-responsive-md { 
    display: block; 
    width: 100%; 
    overflow-x: auto; 
    -webkit-overflow-scrolling: touch; 
    } 
    .table-responsive-md > .table-bordered{ 
      border: 0;}
}    
.hide { 
    display: none!important; 
}
.btn-danger{
    padding: 6px 10px;
    background: red;
    border-radius: 5px;
    text-decoration: none;
    color: #fff;
}
    </style>
    <!--google font end-->
    <!-- Google Tag Manager -->
              <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                  
                  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                  
                  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                  
                  })(window,document,'script','dataLayer','GTM-5XZDRWG');
               </script>
               <!-- End Google Tag Manager -->
</head>
<body>
<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $pag_url = "https://";   
    else  
         $pag_url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $pag_url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $pag_url.= $_SERVER['REQUEST_URI'];    
      
     
?> 
<!--header start-->
    <header>
        <img src="assests/images/Frame.png" alt="" class="shapetop">
        <!--navbar start-->
        <div class="topNav">
            <nav>
                <div class="logo">
                    <a href="#">
                        <img src="assests/images/Infosetrainlogo.png" alt="Infosetrain">
                    </a>
                </div>
                <span class="bars" onclick="openNav()">&#9776;</span>
                <div class="menu">
                    <ul>
                        <li><a href="#coursecontent">overview</a></li>
                        <li><a href="#table_section">course calendar</a></li>
                        <li><a href="#advisors">Course Advisors</a></li>
                        <li><a href="#review">Review</a></li>
                        <li><a href="#choose">Why Infosectrain</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--navbar end-->
        <!--responsive navbar start-->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#coursecontent">overview</a>
            <a href="#table_section">course calendar</a>
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
                    <h1> <span>Upskill</span> with the Most Flexible <br> and Comprehensive <br> Expert <span> CyberArk Training Program</span> </h1>
                </div>
                <div class="bannerImg">
                    <img src="assests/images/men-working.webp" alt="person" class="rimg">
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
                    <h3>CyberArk Training Program Package Includes</h3>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/online_training.png" alt="Online Training">
                        <p>24 hrs of instructor-led training</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/recording.png" alt="Recorded Sessions">
                        <p>Access to Recorded Sessions</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/training.png" alt="training">
                        <p>Learn from Industry Expert</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/instructors.png" alt="Accredited Instructors">
                        <p>Accredited Instructors</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/certificate.png" alt="Course Certificate">
                        <p>Course Completion Certificate</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/calendor.png" alt="calendor">
                        <p>Post Training support</p>
                    </div>
                </div>
                <div class="enquiryForm">
                    <div class="e_offer">
                        <span>Price :- </span> 
                        <del>₹23,999</del>
                        <span>₹11,999</span>
                    </div>
                    <h3>talk to our experts</h3>
                    <div class="hide rows  mt-2" id="demo_form_output">  </div>
                    <form method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f" >
                        <input type="text"  id="me_name"    name="me_name"    placeholder="Your Name *">
                        <input type="email" id="me_email"   name="me_email"   placeholder="Email-Address *">
                        <input type="tel"   id="me_phone"   name="me_phone"   placeholder="Phone Number">
                        <input type="text"  id="me_message" name="me_message" placeholder="Mention Your Call Time Preference">

                        <input type="hidden" id="me_redirect"   value="<?php echo BASE_URL;?>thank-you.html"  > 
                		<input type="hidden" id="me_others"  name="me_others"  value="advanced-penetration-testing-online-training-course"   > 
						<input type="hidden" id="me_pageurl" name="me_pageurl" value="<?php echo $pag_url;?>"  > 
                        
                        <input type="submit" value="REQUEST A CALLBACK" name="me_submited" id="me_submited">
                    </form>
                    <div class="loading_w hide" id="loading_w">
                        <center>
                            <img src="<?php echo BASE_URL; ?>assests/images/loader.gif"/>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--trainning package sec end-->



 <section  id="table_section" style="background: #F0EAEA;padding:5rem 0;float:inherit;">
       <div class="container">
           <h3>Training Calendar</h3>
           <div class="row">
                <?php
$url = "https://www.infosectrain.com/api/38454/href_toscroll/free_demo";
 

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
    </section>







    <!--rating sec start-->
    <section class="ratingsec">
        <div class="container" style="border-radius: 10px;box-shadow: 0 2px 5px #0003;background: white;padding:20px;">
            <div class="row ratingrow">
                <!-- <img src="assests/images/rating.jpg" alt="google rating" width="100%"> -->
                <div class="rating-item">
                    <div class="d-flex review-item">
                            <div class="flex-shrink-0" style="flex-shrink: 0 !important;">
                                <img src="assests/images/google-review.png" alt="google" width="50" height="50">
                            </div>
                            <div class="flex-grow-1" style="flex-grow: 1 !important; margin-left: 1rem;">
                                <h4>Google</h4>
                                <div class="star">
                                    <span class="fa-star">&#9733;</span>
                                    <span class="fa-star">&#9733;</span>
                                    <span class="fa-star">&#9733;</span>
                                    <span class="fa-star">&#9733;</span>
                                    <span class="fa-star">&#9733;</span>
                                </div>
                                <small>(5/5) reviews</small>
                            </div>
                        </div>
                </div>
                <div class="rating-item">
                    <div class="d-flex review-item">
                            <div class="flex-shrink-0" style="flex-shrink: 0 !important;">
                                <img src="assests/images/trustpilot-review.png" alt="trustpoint" width="50" height="50">
                            </div>
                            <div class="flex-grow-1" style="flex-grow: 1 !important; margin-left: 1rem;">
                                <h4>Trustpilot</h4>
                                <div class="star">
                                    <span class="fa-star">&#9733;</span>
                                    <span class="fa-star">&#9733;</span>
                                    <span class="fa-star">&#9733;</span>
                                    <span class="fa-star">&#9733;</span>
                                    <span class="fa-star">☆</span>
                                </div>
                                <small>(4.7/5) reviews</small>
                            </div>
                        </div>
                </div>
                <div class="rating-item">
                    <div class="d-flex review-item">
                            <div class="flex-shrink-0" style="flex-shrink: 0 !important;">
                                <img src="assests/images/glassdoor.svg" alt="glassdoor" width="50" height="50">
                            </div>
                            <div class="flex-grow-1" style="flex-grow: 1 !important; margin-left: 1rem;">
                                <h4>Glassdoor</h4>
                                <div class="star">
                                    <span class="fa fa-star">&#9733;</span>
                                    <span class="fa fa-star">&#9733;</span>
                                    <span class="fa fa-star">&#9733;</span>
                                    <span class="fa fa-star">&#9733;</span>
                                    <span class="fa fa-star">☆</span>
                                </div>
                                <small>(4.6/5) reviews</small>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--rating sec end-->

    <!--course advisor start-->
    <section style="background: #F5F5F5;" id="advisors">
        <div class="container swiper advisorSwiper">
            <h3>Our Expert Course Advisors</h3>
            <div class="swiper-wrapper mt-5">
                <div class="swiper-slide"> 
                    <div class="advisor-item">
                        <img src="assests/images/usera.webp" alt="Abhay">
                        <div>
                            <h4> Sanjiv</h4>
                            <span> 5+ Years Experienced </span>
                            <p>
                                CYBERARK TRAINER 
                            </p>
                            <p>
                            IAM and PAM trainer with 5+ years of working experience as a CyberArk SME. 3+ years of experience of working as a corporate trainer. He has delivered many public and corporate training programs for CyberArk. He has trained more than 100 students till date.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--course advisor end-->

    <!--why choose sec start-->
    <section class="why_sec" id="choose">
        <div class="container">
            <h3>Why Choose Infosec Train</h3>
            <div class="row justify-content-between">
                <div class="whyItem">
                    <img src="assests/images/icon/industry_experts.png" alt="Industry Experts">
                    <p>Certified & Experienced Instructors</p>
                </div>
                <div class="whyItem">
                    <img src="assests/images/icon/training_support.png" alt="Training Support">
                    <p>Customized Training</p>
                </div>
                <div class="whyItem">
                    <img src="assests/images/icon/programs.png" alt="Certification Programs">
                    <p>Access to Recorded Sessions</p>
                </div>
                <div class="whyItem">
                    <img src="assests/images/icon/time.png" alt="Time Schedule">
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
                    <h3>About CyberArk Training Program</h3>
                    <p>
                    CyberArk focuses on privileged access management and offers the most complete security solution for any identity, be it human or machine, across business apps, remote workforces, hybrid cloud workloads, and the DevOps lifecycle. The CyberArk Training course at Infosectrain is for experts who wish to be recognized for their technical knowledge of Identity and Access management in the industry.    
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
                    <h3>CyberArk Training Program Course Details</h3>
                </div>
            </div>
            <div class="row">
                <button class="accordion">Course Overview</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <p>
                    The CyberArk training develops your skills and provides the expertise needed to build, deploy, and configure the Privileged Account Security Solution. CyberArk course provides a variety of options to choose from. Through real-world scenarios, our participants will gain hands-on experience establishing CyberArk infrastructure, defining authentication types, and more. This course covers password management in-depth, as well as software aspects such as backup and troubleshooting. Each level displays knowledge of CyberArk Privileged Access Security Solution, which is both innovative and industry-leading. 
                    </p>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Who Should Attend</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>IT Security Professionals</li>
                        <li>Vault Administrators</li>
                        <li>Professionals interested in building their career in CyberArk programming</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Pre-requisites</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>It is recommended to have a basic knowledge of programming</li>
                        <li>Interest in enhancing career and critical skills in CyberArk</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">CyberArk Course Objectives</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>Gain the skills and expertise needed to build, deploy, and configure the CyberArk Privileged Account Security Solution</li>
                        <li>Learn to set up authentication methods</li>
                        <li>Grasp concepts such as architecture and procedures of CyberArk privileged account protection program</li>
                        <li>Gain knowledge of securing and deploying Central Policy Manager (CPM), Privileged Session Manager (PSM), and Password Vault Web Access Manager (PVWA) in a distributed or load-balanced architecture</li>
                        <li>Ability to backup CyberArk vault</li>
                    </ul>
                    <p>&nbsp</p>
                </div>
                <button class="accordion">CyberArk Course Content</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <p><strong>Module 1: Privileged Identity Management &#8211; Introduction</strong></p>
                    <ul>
                        <li>Enterprise pain areas</li>
                        <li>Associated risk</li>
                        <li>Expected Solution</li>
                    </ul>
                    <p><strong>Module 2: CyberArk Overview</strong></p>
                    <p><strong>Module 3: CyberArk Solution Components</strong></p>
                    <ul>
                        <li>CyberArk Vault</li>
                        <li>Password Vault Web Access Manager</li>
                        <li>Privileged Session Manager</li>
                        <li>Central Password Manager</li>
                        <li>CyberArk Vault Client.</li>
                    </ul>
                    <p><strong>Module 4: Overview of CyberArk functioning</strong></p>
                    <p><strong>Module 5: CyberArk Infrastructure Installation</strong></p>
                    <ul>
                        <li>Installation Pre-requisites (Network, Software OS/Hardware) </li>
                        <li>CyberArk Port awareness. </li>
                        <li>CyberArk Vault Installation. </li>
                        <li>CyberArk Active Directory Integration. </li>
                        <li>CyberArk Email Notification engine configure awareness. </li>
                        <li>Cyberark CPM Installation. </li>
                        <li>Cyberark PVWA Installation. </li>
                        <li>Cyberark PSM Installation. </li>
                        <li>Cyberark Vault Client Installation. </li>
                    </ul>
                    <p><strong>Module 6: CyberArk Policy Configuration Overview</strong></p>
                    <p><strong>Module 7: CyberArk Policy Creation</strong></p>
                    <ul>
                        <li> Master Policy </li>
                        <li> CPM Platform Policy </li>
                        <li> Scheduled Task </li>
                        <li> Services </li>
                    </ul>
                    <p><strong>Module 8: CyberArk Safe Management</strong></p>
                    <ul>
                        <li>Safe Creation</li>
                        <li>User addition (Ldap)</li>
                        <li>User Access Matrix</li>
                        <li>Dual Control</li>
                        <li>Object Level Access Control</li>
                    </ul>
                    <p><strong>Module 9: CyberArk Account Integration</strong></p>
                    <ul>
                        <li> Windows</li>
                        <li> Unix/Linux</li>
                        <li> Network Device Overview</li>
                        <li> Security Device Overview</li>
                    </ul>
                    <p><strong>Module 10: CyberArk Use Cases</strong></p>
                    <ul>
                        <li>User OnBoarding</li>
                        <li>Privileged Single-Sign-on</li>
                        <li>Password Reconciliation</li>
                        <li>Access privilege of User Accounts in PAM</li>
                        <li>Authentication (2-factor) Overview</li>
                        <li>Dual Access Control</li>
                        <li>Auditing/Reporting</li>
                        <li>Session Recording</li>
                        <li>Users OffBoarding</li>
                    </ul>
                    <p><strong>Module 11: CyberArk Vault Backup Activity</strong></p>
                    <p><strong>Module 12: CyberArk Trouble Shooting</strong></p>
                    <ul>
                        <li>Creating an encrypted credential password file for pvwaapp user</li>
                        <li>Creating an encrypted credential password file for gw user</li>
                        <li>Creating an encrypted credential password file for a password manager user </li>
                        <li>Creating an encrypted credential password file for psmapp user creating an encrypted credential password file for psmgw user</li>
                        <li>Unlocking and password resetting of all above-mentioned system users</li>
                    </ul>
                    <p><strong>Module 13: CyberArk DR Overview</strong></p>
                    <ul>
                        <li>DR Vault</li>
                        <li>DR CPM</li>
                        <li>DR PVWA</li>
                        <li>DR PSM</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <a href="https://www.infosectrain.com/wp-content/uploads/2022/04/CyberArk_Training_Course_Content_v1.pdf" class="downloadlink" target="_blank" class="accordion" style="text-decoration: none;">
                    Download Syllabus
                    <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/download.png" width="20" style="margin: 0 5px;"/>
                </a>
            </div>
        </div>
    </section>
    <!--course content sec end-->
<hr/>
    <!--avarage selary sec start-->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="salary_item">
                    <img src="assests/images/benefits.jpg" alt="CyberArk Training Benifits|infosectrain" width="100%"/>    
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
                        <img src="https://www.infosectrain.com/wp-content/uploads/2021/10/Geethanjali-150x150.jpg" alt=" Geethanjali Asokan ">
                        <div>
                            <span>  Geethanjali Asokan  </span>
                            <p>
                                Thank you Sir for the wonderful session. I have learnt many things about Course. It is very useful now to implement the same in future projects.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2019/09/Cmaxey93-150x150.jpg" alt=" Colby Maxey ">
                        <div>
                            <span> Colby Maxey  </span>
                            <p>
                                Instructor was an excellent, polite, and helpful instructor. The course offered way more software and guide documents than I expected.  
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2021/10/VikramJeet-150x150.jpg" alt="VikramJeet Singh ">
                        <div>
                            <span>VikramJeet Singh </span>
                            <p>
                                Like always, InfoSec Training services are worth all the money spent! The instructor allocated to this course possesses very good knowledge . After attending this course, we are able to gain deep insight into the functional and implementation aspects of Tool. All credit goes to our  instructor and InfoSecTrain. Thanks!  
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
                    <a href="https://www.infosectrain.com/pages/lp/cisa-advance/" target="_blank">
                        <img src="assests/images/cisa.webp" alt="CISA Certification Course">
                        <span>CISA Certification Course</span>
                    </a>
                </div>
                <div class="popular_course">
                    <a href="https://www.infosectrain.com/pages/lp/cism-advance/" target="_blank">
                        <img src="assests/images/cism.webp" alt="CISM Certification Training">
                        <span>CISM Certification Training</span>
                    </a>
                </div>
                <div class="popular_course">
                    <a href="https://www.infosectrain.com/pages/lp/ceh-training/" target="_blank">
                        <img src="assests/images/ceh.webp" alt="CEH (v12) - Certified Ethical Hacker">
                        <span>CEH (v12) - Certified Ethical Hacker </span>
                    </a>
                </div>
                <div class="popular_course">
                    <a href="https://www.infosectrain.com/pages/lp/security-advance/" target="_blank">
                        <img src="assests/images/security.webp" alt="CompTIA Security">
                        <span>CompTIA Security+ SY0-601 Certification </span>
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
                    <h4>About Infosec Train</h4>
                    <p>
                        Infosec Train offers complete training and consulting solutions to its customers globally. Whether the requirements are technical services, certification or custom training, Infosec Train has consistently delivered the highest quality and best success rates in the industry.
                    </p><br>
                    <p>© <?php echo date('Y'); ?> - Infosec Train. All Rights Reserved.</p>
                </div>
                <div class="footer_item">
                    <h4>Quick Contact</h4>
                    <a href="https://api.whatsapp.com/send?phone=918767256840">
                        <span><img src="assests/images/whtsapp.png" alt=""></span>+91-87672-56840
                    </a>
                    <a href="tel:1800-843-7890">
                        <span><img src="assests/images/call.png" alt=""></span>1800-843-7890 (IN)
                    </a>
                    <a href="tel:+1657-221-1127">
                        <span><img src="assests/images/call.png" alt=""></span>+1 657-221-1127 (USA)
                    </a>
                    <a href="mailto:sales@infosectrain.com">
                        <span><img src="assests/images/gmail.png" alt=""></span>sales@infosectrain.com
                    </a>
                </div>
                <div class="footer_item">
                    <h4>Corporate Office</h4>
                    <P>Bangalore</P>
                    <P>
                        1st Floor, Pine Valley Building, <br>
                        Embassy Golf Links,<br>
                        Off Intermediate Ring Road,<br>
                        Bangalore, 560071, India
                    </P>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
    <!--top up button start-->
    <img src="assests/images/icon/arrow.png" alt="arrow" onclick="topFunction()" id="myBtn">
    <!--topup button end-->
</main>
</body>

<!--Start of Zendesk Chat Script-->

<script type="text/javascript">

 window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=

d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.

_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");

$.src="https://v2.zopim.com/?5Y1ZvMP3lrSPwhhyQjIGwo618dlqPLkD";z.t=+new Date;$.

type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script"); 

</script>

<!--End of Zendesk Chat Script-->

<!--js link start-->
<script src="assests/js/common.min.js"></script>
<script src="assests/js/swiper-bundle.min.js"></script>
<script src="assests/js/custom.js"></script>
<script>
    //slider start
    var swiper = new Swiper(".testimonialSwiper",{
    slidesPerView:1,
    loop:true,
    autoplay:false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView:1,
        spaceBetween: 30,
      },
      768: {
        slidesPerView:2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween:30,
      },
    },
  });

  var swiper = new Swiper(".advisorSwiper",{
    slidesPerView:1,
    loop:true,
    autoplay:false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  //slider end

  //table display without data
  let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
        document.querySelector('.menu ul li:nth-child(2)').style.display = "none";
        document.querySelector('.sidenav a:nth-child(3)').style.display = 'none';
    }
</script>

 <!----------------whatsapp------------>
<div id="filename"></div>
<script> 
   $(function(){
       $('#filename').load("../whatap.html");
   });
    </script>
    <!----------------whatsapp----->
</html>