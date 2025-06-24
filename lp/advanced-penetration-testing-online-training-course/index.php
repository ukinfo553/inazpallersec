<?php include('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assests/images/favicon.ico">
    <title>Advanced Penetration Testing | InfosecTrain</title>
    <meta name="description" content="InfosecTrain offers Advanced penetration testing Online training course provides you with skills that prepare you to work in one of the most in-demand career fields." />
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
nav .enroll a {
    padding: 8px 20px;
    background: #f30721;
    border-radius: 5px;
    text-decoration: none;
    color: #ffffff;
    font-size: 15px;
}
nav .enroll {
    display: none;
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
                    <h1> <span>Upskill</span> with the Most Flexible <br> and Comprehensive <br> Expert <span> Advanced Penetration Testing</span> </h1>
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
                    <h3>Advanced Penetration Testing Package Includes</h3>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/online_training.png" alt="Online Training">
                        <p>40 hrs of instructor-led training</p>
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
                        <del>$599</del>
                        <span>$249</span>
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
$url = "https://www.infosectrain.com/api/31064/href_toscroll/free_demo";
 

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
                        <img src="https://www.infosectrain.com/wp-content/uploads/2021/02/ashish-150x150.png" alt="Ashish Dhyani">
                        <div>
                            <h4>Ashish Dhyani</h4>
                            <span> 7+ Years Experienced </span>
                            <p>
                                CEH | CND |  CCNA | Network+ | Sec+ | Server+ | Linux+ | Pentest+   
                            </p>
                            <p> Ashish Delivered training to government and non-government organizations around the globe on different cyber security verticals and Network Security.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"> 
                    <div class="advisor-item">
                        <img src="assests/images/usera.webp" alt="Abhay">
                        <div>
                            <h4>ABHY</h4>
                            <span> 10+ Years Experienced </span>
                            <p>
                                CCSP | CISSP | CCSK | AWS Security Specialty | Azure Security | OSWP | OSCP   
                            </p>
                            <p> As a Head of Security Testing, Abhy is an enthusiastic professional and an excellent trainer. He is unique with his skills of handling the security of the company's digital assets from unauthorised access.</p>
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
                    <h3>About Advanced Penetration Testing</h3>
                    <p>
                        Advanced Penetration Testing training course by Infosectrain focuses on demonstrating advanced techniques to perform penetration testing. The APT online course will not only train you to perform professional security but will also teach about the next most important thing which is the findings and the report making. This training will help you to prepare for the OSCP, LPT Master Certification & many more.
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
                    <h3>APT With KALI Linux Course Details</h3>
                </div>
            </div>
            <div class="row">
                <button class="accordion">Course Overview</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <p>
                        The Advanced Penetration Testing with Kali Linux is an all-embracing course that expertly explains to optimize Kali Linux and its powerful tools for advanced wired and wireless networks. The course focuses to demonstrate advanced techniques to perform penetration testing. You learn to use Metasploit Framework and practices used in exploiting Windows and Unixplatforms. Vulnerability scanningforms an integral part of this comprehensive training and demonstrates how a system is targeted and exploited. The training also empowers you with detailed understanding of diverse post-exploitation techniques and modernistic techniques to evade antivirus while understanding the customization of attacks.
                    </p>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Who Should Attend</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>Middle-level and advanced-level penetration testers</li>
                        <li>Security enthusiasts</li>
                        <li>Aspiring penetration testers</li>
                        <li>Security professionals intending to upskill for compliance based penetration testing</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Pre-requisites</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>Basic understanding of networking and servers</li>
                        <li>Understanding of a programming language like Python recommended</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">APT With KALI Linux Course Objectives</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <p>This advanced pen-testing training include the understanding of:</p>
                    <ul>
                        <li>Kali Linux installation with lab setup</li>
                        <li>Reconnaissance types</li>
                        <li>Vulnerabilityanalysis, classification, and identification</li>
                        <li>Vulnerability scanning using OWASP ZAP, w3af, Wapiti, Vega scanner, Metasploit&#8217;s Wmap and using Lynis for hardening</li>
                        <li>SQLMap, Metasploit, Tomcat Manager and other tools to find exploitation and attacks</li>
                        <li>Advanced level exploitation</li>
                        <li>Exploiting vulnerable services in Windows and Unix</li>
                        <li>Spoofing, spinning and access maintenance</li>
                        <li>Social engineering and BeFF</li>
                        <li>Implementing network security</li>
                        <li>Security tools including Squid proxy, Port Sentry, Network Security Toolkit (NST), OSSEC, Tripwire and many more</li>
                        <li>Denial of Service (DoS) attacks and wireless network hacks</li>
                        <li>Mobile platform hacking</li>
                        <li>Top vulnerabilities of OWASP and mitigation</li>
                        <li>Report writing and pen testing process</li>
                    </ul>
                    <p>&nbsp</p>
                </div>
                <button class="accordion">APT With KALI Linux Course Content</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <p><strong>Network and System Security Testing</strong></p>
                    <ul class="tree">
                    <li style="list-style: none;"><span class="caret">Linux for Testing <u>read more</u></span>
                        <ul class="nested">
                            <li>The Linux Filesystem</li>
                            <li>Basic Linux Commands</li>
                            <li>Finding Files in Linux</li>
                            <li>Managing Linux Services</li>
                            <li>Searching, Installing, and Removing Tools</li>
                            <li>The Bash Environment</li>
                            <li>Piping and Redirection</li>
                            <li>Text Searching and Manipulation</li>
                            <li>Background Processes (bg)</li>
                            <li>Jobs Control</li>
                            <li>Process Control</li>
                            <li>File and Command Monitoring</li>
                            <li>Downloading Files</li>
                            <li>Persistent Bash Customization</li>
                        </ul>
                    </li>
                    </ul>
                    <ul class="tree">
                        <li><span class="caret">Scripting for Pen-Testers<u> read more</u></span>
                            <ul class="nested">
                                <li style="list-style: none!important;"><span class="caret">Introduction to Shell<u> read more</u></span>
                                    <ul class="nested">
                                        <li>Script Basics</li>
                                        <li>Global Declarations</li>
                                        <li>Variable basics</li>
                                        <li>Escape characters</li>
                                        <li>Basic redirection and pipe</li>
                                        <li>Understanding Conditions</li>
                                        <li>Understanding Loops</li>
                                        <li>Recursion and Nested Functions</li>
                                        <li>Function Attributes</li>
                                        <li>The Linux Execution Environment with Scripts</li>
                                        <li>Restricted Shells</li>
                                    </ul>
                                </li>
                                <li style="list-style: none!important;"><span class="caret">Introduction to Python<u>read more</u></span>
                                    <ul class="nested">
                                        <li>What is Python?</li>
                                        <li>Python: Favourite of Hackers</li>
                                        <li>Data Types and variables</li>
                                        <li>Control Flow and Data structure</li>
                                        <li>Functions, Functional Programming and File Handling</li>
                                        <li>Exception Handling</li>
                                        <li>Creating Managing File and Directory Access</li>
                                        <li>Raw Socket basics</li>
                                        <li>Socket Programming with Python</li>
                                        <li>Servers and Clients architecture</li>
                                        <li>Creating Sniffers (wired and wireless)</li>
                                        <li>Creating packet injector</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tree">
                        <li><span class="caret">Introduction to Pen-Testing<u>read more</u></span>
                            <ul class="nested">
                            <li>Penetration Testing Benefits</li>
                            <li>Types of Penetration Testing</li>
                            <li>Penetration Testing Methodologies</li>
                            <li>Law &amp; Compliance</li>
                            <li>Planning, Managing &amp; Reporting</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tree">
                        <li><span class="caret">OSINT &amp; Analysis<u>read more</u></span>
                            <ul class="nested">
                            <li>Foundation of OSINT</li>
                            <li>Goals of OSINT Collection</li>
                            <li>Core OSINT Skills</li>
                            <li>Leveraging Search Engines</li>
                            <li>File Metadata Analysis</li>
                            <li>Reverse Image Searching</li>
                            <li>People Investigations</li>
                            <li>SOCMINT</li>
                            <li>Finding Email Addresses</li>
                            <li>Domain &amp; IP Investigations</li>
                            <li>Dark Web OSINT</li>
                            <li>What is TOR?</li>
                            <li>OSINT for Business</li>
                            <li>Capture the Flag Exercises for OSINT</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tree">
                        <li><span class="caret">Reconnaissance &amp; Enumeration<u> read more</u></span>
                            <ul class="nested">
                                <li>Types of Information Gathering</li>
                                <li>Reconnaissance vs Enumeration</li>
                                <li>Google Search</li>
                                <li>Google Hacking</li>
                                <li>User Enumeration &amp; Phishing</li>
                                <li>Forward Lookup Brute Force</li>
                                <li>Reverse Lookup Brute Force</li>
                                <li>DNS Zone Transfers</li>
                                <li>Port Scanning</li>
                                <li>Null Sessions</li>
                                <li>Enum4Linux</li>
                                <li>VRFY Script</li>
                                <li>Python Port</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tree">
                        <li><span class="caret">The Exploit Framework<u> read more</u></span>
                            <ul class="nested">
                                <li>Exploring Metasploit Framework</li>
                                <li>Using Metasploit Auxiliary</li>
                                <li>Using Exploit Modules</li>
                                <li>Staged and Non-Staged Payloads</li>
                                <li>Working with Multi Handler</li>
                                <li>Working with Meterpreter Session</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tree">
                        <li><span class="caret">Bypassing Security<u> read more</u></span>
                            <ul class="nested">
                                <li>Antivirus Evasion using Encoder</li>
                                <li>Creating the shellcode with Msfvenom</li>
                                <li>Bypassing Network Filters</li>
                                <li>Understanding and bypassing pfsense firewall</li>
                                <li>Bypassing IDS and IPS demo on snort</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tree">
                        <li><span class="caret">Overflow to Attack<u> read more</u>
                            <ul class="nested">
                                <li>Stack Overflows Introduction</li>
                                <li>A Word About DEP, ASLR, and CFG</li>
                                <li>Replicating the Crash</li>
                                <li>Controlling EIP</li>
                                <li>Stack Overflows and ASLR Bypass</li>
                                <li>ASLR Introduction</li>
                                <li>ASLR Implementation</li>
                                <li>ASLR Bypass Theory</li>
                                <li>Windows Defender Exploit Guard and ASLR</li>
                                <li>Understanding SEH</li>
                                <li>Exploiting SEH Overflows</li>
                                <li>Understanding the low fragmentation heap</li>
                                <li>Heap Overrun/Overflow</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tree">
                        <li><span class="caret">Advanced Windows Exploitation<u> read more</u></span>
                            <ul class="nested">
                                <li>Operating System and Programming Theory</li>
                                <li>Win32 APIs</li>
                                <li>Windows Registry</li>
                                <li>What are Macros?</li>
                                <li>Creating Dangerous Macros using Empire</li>
                                <li>Microsoft Office Phishing using Macros</li>
                                <li>Executing Shellcode in Word Memory</li>
                                <li>PowerShell File Transfers</li>
                                <li>VBA Shellcode Runner</li>
                                <li>PowerShell Shellcode Runner</li>
                                <li>Reflection Shellcode Runner in PowerShell</li>
                                <li>Client-Side Code Execution with Windows Script Host</li>
                                <li>Credential Replay Attacks</li>
                                <li>Credential Discovery</li>
                                <li style="list-style: none!important;"><span class="caret">Hashing Concept <u> read more</u>
                                    <ul class="nested">
                                        <li>Pass the Hash (PTH)</li>
                                        <li>Kerberoasting and AS-REP Roasting</li>
                                        <li>Pass the Ticket (PTT)</li>
                                    </ul>
                                </li>
                                <li style="list-style: none!important;"><span class="caret">Exploiting Latest Vulnerabilities<u> read more</u>
                                    <ul class="nested">
                                        <li>FOLLINA</li>
                                        <li>Log4j</li>
                                        <li>Spring4Shell</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tree">
                        <li><span class="caret">Privilege Escalation &amp; Persistence<u> read more</u> </span>
                            <ul class="nested">
                                <li style="list-style: none!important;"><span class="caret">Windows Privilege Escalation<u>read more</u> </span>
                                    <ul class="nested">
                                        <li>Understanding Windows Privileges and Integrity Levels</li>
                                        <li>User Account Control (UAC) Bypass: fodhelper.exe Case Study</li>
                                        <li>Insecure File Permissions: Serviio Case Study</li>
                                        <li>Leveraging Unquoted Service Paths</li>
                                        <li>Kernel Vulnerabilities: USBPcap Case Study</li>
                                    </ul>
                                </li>
                                <li style="list-style: none!important;"><span class="caret">Linux Privilege Escalation<u> read more</u></span>
                                    <ul class="nested">
                                        <li>Understanding Linux Privileges</li>
                                        <li>Insecure File Permissions: Cron Case Study</li>
                                        <li>Insecure File Permissions: /etc/passwd Case Study</li>
                                        <li>Kernel Vulnerabilities: Case Study</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <p><strong>The Web Attacks</strong></p>
                    <ul>
                        <li>OWASP Standards</li>
                        <li>Broken Web Application</li>
                        <li>ATutor &amp; JuiceShop</li>
                        <li>Web Traffic Inspection using Burpsuite</li>
                        <li>Atmail Mail Server Appliance: from XSS to RCE</li>
                        <li>Session Hijacking</li>
                        <li>Session Riding</li>
                        <li>Authentication Bypass and RCE</li>
                        <li>Injection Attacks</li>
                        <li>ATutor LMS Type Juggling Vulnerability</li>
                        <li>Attacking the Loose Comparison</li>
                        <li>Magic Hashes</li>
                        <li>JavaScript Injection Remote Code Execution</li>
                        <li>Cookie Deserialization RCE</li>
                        <li>Server-Side Template Injection</li>
                        <li>XSS and OS Command Injection</li>
                        <li>Advanced XSS Exploitation</li>
                        <li>RCE Hunting</li>
                    </ul>
                    <p><strong>AWS Pen testing</strong></p>
                    <ul>
                        <li>Building and setup AWS pen testing Environment</li>
                        <li>Exploiting S3</li>
                        <li>Understanding and exploiting Lambda Services</li>
                        <li>Testing IAM privileges</li>
                        <li>Case study For Capital One Attack</li>
                    </ul>
                    <p><strong>Deliverables – Report Writing</strong></p>
                    <ul>
                        <li>Defining Methodology</li>
                        <li>Types of Reports</li>
                        <li>Executive Summary</li>
                        <li>Detailed Reports</li>
                        <li>Adding Proof of Concept</li>
                        <li>Creating Drafts</li>
                        <li>Risk Rating Factors</li>
                        <li>Automating Reports</li>
                        <li>Report Writing Tools</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <a href="https://www.infosectrain.com/wp-content/uploads/2018/12/Advanced_Penetration_Testing_Training_Course_Content.pdf" class="downloadlink" target="_blank" class="accordion" style="text-decoration: none;">
                    Download Syllabus
                    <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/download.png" width="20" style="margin: 0 5px;"/>
                </a>
            </div>
        </div>
    </section>
    <!--course content sec end-->

    <!--benifits sec start-->
    <section class="why_sec">
        <div class="container">
            <h3>APT With KALI Linux Course Benefits</h3>
            <div class="row">
                <div class="salarybnf">
                    <button class="tablinks" onclick="openTab(event, 'Security_Manager')" id="defaultOpen">Information Security Manager</button>
                    <button class="tablinks" onclick="openTab(event, 'Penetration')">Penetration Tester</button>
                    <button class="tablinks" onclick="openTab(event, 'Security')">Security Engineer</button>
                </div>
            </div>
            <div class="row">
                <div id="Security_Manager" class="tabcontent">
                    <div class="tabcontentdata">
                        <div>
                            <img src="assests/images/Information-Security-Manager.jpg" width="100%" alt="Information Security Manager Salary">
                            <p>Annual Salary<p>
                        </div>
                        <div>
                            <img src="assests/images/Information-Security-Manager.png" width="88%" alt="Information-Security-Manager">
                            <p>Hiring Companies<p>
                        </div>
                    </div>
                </div>

                <div id="Penetration" class="tabcontent">
                    <div class="tabcontentdata">
                        <div>
                            <img src="assests/images/penetration-tester.jpg" width="100%" alt="Penetration Tester Salary">
                            <p>Annual Salary<p>
                        </div>
                        <div>
                            <img src="assests/images/Penetration-Tester.png" width="88%" alt="Penetration Tester">
                            <p>Hiring Companies<p>
                        </div>
                    </div>
                </div>

                <div id="Security" class="tabcontent">
                    <div class="tabcontentdata">
                        <div>
                            <img src="assests/images/security-engineer.jpg" width="100%" alt="Security Engineer Salary">
                            <p>Annual Salary<p>
                        </div>
                        <div>
                            <img src="assests/images/Security-Engineer.png" width="88%" alt="Security Engineer">
                            <p>Hiring Companies<p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--benifits sec end-->

    <!--avarage selary sec start-->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="salary_item">
                    <h3>APT With KALI Linux Tools Covered</h3>
                    <img src="assests/images/tool.jpg" alt="KALI Linux Tool">    
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
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/Sood-150x150.jpg" alt=" Sandeep Sood ">
                        <div>
                            <span>  Sandeep Sood  </span>
                            <p>
                                This course was very informative and very helpful. The trainer was extremely helpful. I learned a lot and felt comfortable to ask any questions I had.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/Bidyut-150x150.jpg" alt=" Bidyut Kumar Patra ">
                        <div>
                            <span> Bidyut Kumar Patra  </span>
                            <p>
                                Granular details on various cyber-attack scenarios along with hands-on, exposure to various tools and enhancement of cloud security knowledge was imparted by the course mentor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/Bhanu-Prakash-150x150.jpg" alt="Bhanu Prakash MG ">
                        <div>
                            <span>Bhanu Prakash MG </span>
                            <p>
                                It was an wonderful experience with the trainer during the training session. I really learned lot from this course. Thanks to Infosec Train and Trainer.  
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
                    <a href="https://api.whatsapp.com/send?phone=16572211127">
                        <span><img src="assests/images/whtsapp.png" alt=""></span>+1 657-221-1127 (USA)
                    </a>
                    <a href="tel:+1657-221-1127">
                        <span><img src="assests/images/call.png" alt=""></span>&nbsp; +1 657-221-1127 (USA)
                    </a>
                    <a href="mailto:sales@infosectrain.com">
                        <span><img src="assests/images/gmail.png" alt=""></span>&nbsp; sales@infosectrain.com
                    </a>
                </div>
                <div class="footer_item">
                    <h4>Corporate Office</h4>
                    <P>New York</P>
                    <P>
                    99 Wall Street #599 New York, <br>
                    NY 10005, United States
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
</script>

 <!----------------whatsapp------------>
<div id="filename"></div>
<script> 
   $(function(){
       $('#filename').load("whatap.html");
   });

   //table display without data
   let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
        document.querySelector('.menu ul li:nth-child(2)').style.display = "none";
        document.querySelector('.sidenav a:nth-child(3)').style.display = 'none';
    }
    </script>
    <!----------------whatsapp----->
</html>