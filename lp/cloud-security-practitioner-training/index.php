<?php include('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assests/images/favicon.ico">
    <title>Cloud Security Practitioner Training Program | InfosecTrain</title>
    <meta name="description" content="InfosecTrain Offers Cloud Security Practitioner Training. We focus on cloud computing and governance, risk, compliance, business continuity planning &amp; many more." />
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
        .prise_img{
            width: 110px;
            height: 110px;
            border-radius: 110px;
            display: flex;
            margin: auto;
            border: 6px solid #fff;
            object-fit: cover;
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
    <!--calendor -->

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
    /* border-left: none;  */
} 
#table_section .table thead tr th { 
    font-size: 14px; 
    font-weight: medium; 
    letter-spacing: .35px; 
    color: #232323; 
    opacity: 1; 
    font-weight: 600; 
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
    border: 1px solid #c6c6c6; 
} 
.table td, .table th { 
    padding: 0.75rem; 
    vertical-align: middle; 
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
 
 
.table-responsive { 
  display: block; 
  width: 100%; 
  overflow-x: auto; 
  -webkit-overflow-scrolling: touch; } 
  .table-responsive > .table-bordered { 
    border: 0; } 
  
  
  
 @media (max-width: 768px) { 
  #table_section .table thead { 
    display: none; } 
  #table_section .table, #table_section .table tbody, #table_section .table tr, #table_section .table td { 
    display: block; 
    width: 100%; } 
  #table_section .table tr { 
    margin-bottom: 13px; } 
  #table_section .table td { 
    text-align: right; 
    padding-left: 50%; 
    position: relative; } 
  #table_section .table-responsive table td .t_btn { 
    background-color: #ff8e20; 
    width: 130px; 
    color: #fff; } 
  #table_section .table td::before { 
    content: attr(data-label); 
    position: absolute; 
    left: 0; 
    width: 50%; 
    padding-left: 15px; 
    font-size: 14px; 
    font-weight: 600; 
    text-align: left; } 
  #table_section h2.package-heading { 
    font-size: 20px;margin: 20px 0; } } 
 
@media (max-width: 575.98px) { 
  #table_section.table_training .t_text_h { 
    font-size: 22px; } } 
  
 @media (max-width: 1199.98px) { 
  .table-responsive-xl { 
    display: block; 
    width: 100%; 
    overflow-x: auto; 
    -webkit-overflow-scrolling: touch; } 
    .table-responsive-xl > .table-bordered { 
      border: 0; } } 
 #benefit .table-responsive { 
  border-radius: 20px; 
  margin-top: 40px; } 
  .table-responsive { 
  display: block; 
  width: 100%; 
  overflow-x: auto; 
  -webkit-overflow-scrolling: touch; 
    margin-top: 1rem;
} 
  .table-responsive > .table-bordered { 
    border: 0; } 
  
 @media (max-width: 991.98px) { 
  .table-responsive-lg { 
    display: block; 
    width: 100%; 
    overflow-x: auto; 
    -webkit-overflow-scrolling: touch; } 
    .table-responsive-lg > .table-bordered { 
      border: 0; } } 
    
   @media (max-width: 767.98px) { 
  .table-responsive-md { 
    display: block; 
    width: 100%; 
    overflow-x: auto; 
    -webkit-overflow-scrolling: touch; } 
    .table-responsive-md > .table-bordered { 
      border: 0; } } 
    
   @media (max-width: 575.98px) { 
  .table-responsive-sm { 
    display: block; 
    width: 100%; 
    overflow-x: auto; 
    -webkit-overflow-scrolling: touch; } 
    .table-responsive-sm > .table-bordered { 
      border: 0; } } 
 
@media (max-width: 767.98px) { 
  .table-responsive-md { 
    display: block; 
    width: 100%; 
    overflow-x: auto; 
    -webkit-overflow-scrolling: touch; } 
    .table-responsive-md > .table-bordered { 
      border: 0; } } 
    
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

    <!--calendor--->
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
                        <li><a href="#coursecontent">course content/exam</a></li>
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
            <a href="#coursecontent">course content/exam</a>
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
                    <h1> <span>Upskill</span> with the Most Flexible <br> and Comprehensive <br> <span>Cloud Security Practitioner Training <span></h1>
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
        <div class="container">
            <div class="row justify-content-between training_row">
                <div class="tainingItem">
                    <h3>Cloud Security Training Package Includes</h3>
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
                <div class="enquiryForm" id="free_demo">
                    <div class="e_offer">
                        <del>₹ 19,999</del>
                        <span>₹ 5999</span>
                            <div class="or_">
                                or
                            </div>
                        <del>$299</del>
                        <span>$99</span>
                    </div>
                    <h3>talk to our experts</h3>
                    <div class="hide rows  mt-2" id="demo_form_output">  </div>
                    <form method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f" >
                        <input type="text"  id="me_name"    name="me_name"    placeholder="Your Name *">
                        <input type="email" id="me_email"   name="me_email"   placeholder="Email-Address *">
                        <input type="tel"   id="me_phone"   name="me_phone"   placeholder="Phone Number">
                        <input type="text"  id="me_message" name="me_message" placeholder="Mention Your Call Time Preference">
                        
                        <input type="hidden" id="me_redirect"   value="<?php echo BASE_URL;?>thank-you.html"  > 
                		<input type="hidden" id="me_others"  name="me_others"  value="CISSP Certification Training"   > 
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

    <!--training calendor start-->
    <section style="background: #F0EAEA;padding-top:1rem;">
    </section>
    <!--training calendor end-->
    <!--calendor sec-->
    <section id="table_section" style="background:#F0EAEA;">
    <div  class="container" id="benefits">
        <div class="row">
            <div class="col-12">
               <h3>Training Calendar </h3>
            </div>
        </div>

    <div class="row">
      <div class="col-12">
               
<?php
$url = "https://www.infosectrain.com/api/38903/href_toscroll/free_demo";


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
  </div>
</section>
    <!--calendor sec end-->
    <!--rating sec start-->
    <section>
        <div class="container">
            <div class="row">
                <img src="assests/images/rating.jpg" alt="google rating" width="100%">
            </div>
        </div>
    </section>
    <!--rating sec end-->

    <!--course advisor start-->
    <section style="background: #F5F5F5;" id="advisors">
        <div class="container">
            <h3>Our Expert Course Advisors</h3>
            <div class="row justify-content-center">
                <div class="advisor-item">
                    <img src="https://www.infosectrain.com/wp-content/uploads/2020/12/rishabh-png-150x150.png" alt="">
                    <h4>Rishabh Kotiyal</h4>
                    <span>10+ Years Experienced</span>
                    <p>MCT | AZ 104 | AZ 500 | AZ 303 | AZ 304 | SC 200 | CEH | ECIH |   CND | CEI | Security+ | CSA | CCSE</p>
                    <p>
                        Rishabh served as a corporate trainer &amp; Consultant with nearly 8+ years of experience across the diverse industry. Good hands-on experience in Cloud Computing, vulnerability assessment, Penetration Testing
                    </p>
                </div>
            </div>
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
                    <h3>About Cloud Security Practitioner</h3>
                    <p>
                        Cloud computing has entirely revolutionized the way organizations operate as more and more businesses are turning to 
                        the cloud these days. Despite the numerous benefits of cloud computing, there are a number of security concerns and 
                        issues. The Cloud Security Practitioner Training course provides an in-depth knowledge of cloud security while 
                        gaining a broad awareness of how to manage various cloud security challenges.    
                    </p>
                    <!-- <p>
                        It is approved by the U.S. Department of Defense (DoD) in both their Information Assurance Technical (IAT) and Managerial (IAM) categories.
                    </p> -->
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
                    <h3>Cloud Security Practitioner Details</h3>
                </div>
            </div>
            <div class="row">
                <button class="accordion">Course Overview</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <p>
                        The growing popularity of the Cloud has made its security a matter of concern. The Cloud Security Practitioner Training course from Infosec Train is tailored to cloud security experts’ real-world employment duties and functions, making it excellent for beginners and experts. This course will assist you in getting started with cloud computing and making decisions like which CSP (Cloud Service Provider) is best for you in terms of GRC (Governance, Risk and Compliance). It will also help you understand what cloud security services and solutions should be available and how to apply them. This course will cover the fundamentals of cloud computing and governance, risk, compliance, business continuity planning, and disaster recovery.    
                    </p>
                    <br>
                    <p>
                    We have equipped this course with practical hands-on lab sessions to help you understand the cloud better. This course helps security professionals gain deep insights into cloud security, the challenges faced and how to address various cloud security concerns. It is an all-embracing training covering core essentials of cloud computing architectural framework, governance, and operations in the cloud, such as legal issues, information and data security management, and data center operations.    
                    </p>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Who Should Attend</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>Any IT professional who wants to start exploring the cloud framework and learn how to securely configure it?</li>
                        <li>Security professionals wanting to explore the security features of cloud</li>
                        <li>IT professionals intending to excel in their career with cloud security skills.</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Pre-requisites</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>Knowledge of IT infrastructure (Network, Endpoint, Appliances, etc.)</li>
                        <li>Understanding of Basic Security</li>
                        <li>Basic knowledge of why Risk, Compliance, and Governance are needed</li>
                        <li>Basic Understanding BCP/DR</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Cloud Security Practitioner Course Objectives</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>Evaluating cloud storage methods</li>
                        <li>Developing and implementing a GRC framework</li>
                        <li>Implementing and maintaining cloud security on different cloud platforms</li>
                        <li>Exploring various cloud security concepts and components in-depth</li>
                        <li>Understanding cloud security threats, Incident Response, risk management in the cloud, application security and secure deployment</li>
                        <li>Learning cloud security audit management and its various components</li>
                        <li>Comprehending cloud computing architectural framework</li>
                        <li>Apprehending information management and data security</li>
                        <li>Understanding governance and enterprise risk management</li>
                    </ul>
                    <p>&nbsp</p>
                </div>
                <button class="accordion">Cloud Security Practitioner Course Content </button>
                <div class="panel">
                    <p>&nbsp</p>
                    <p>
                        <strong><u>Module1: Cloud Basics and Models</u></strong>
                    </p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Evolution of infrastructure technology</li>
                        <li>Virtualization and Hypervisor.</li>
                        <li>Introduction and Benefit of the cloud</li>
                        <li>Shared model of cloud</li>
                        <li>Service provided by cloud</li>
                        <li>Challenges in cloud</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Create Azure Free Account</li>
                        <li>Create AWS Account</li>
                        </ul>
                        <p><strong><u>Module2: Deploy and Understand Compute and Configuration</u></strong></p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Secure Instance / Virtual Machine Deployment</li>
                        <li>Host Configuration Management</li>
                        <li>Manage Host Configuration</li>
                        <li>Type of Cloud Storage: Disk for Compute</li>
                        <li>Application Security</li>
                        <li>Threat Modelling overview</li>
                        <li>Platform as a Service (PaaS)</li>
                        <li>Container and Kubernetes</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Deploy a Virtual Machine.</li>
                        <li>Discuss disk option, image option.</li>
                        <li>Snapshot of Disk</li>
                        <li>Deploy Web App.</li>
                        <li>Deploy the Container.</li>
                        </ul>
                        <p><strong><u>Module3: Control Your Identity and Access Management</u></strong></p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Lifecycle for Identity and Access Management</li>
                        <li>Concept of Cloud Account and Least privileges: Policies and Permissions, Groups and Roles, Temporary Credentials</li>
                        <li>Secrets Management</li>
                        <li>Customer Account Management and External Access</li>
                        <li>Security Loopholes in Cloud IAM Services</li>
                        <li>More IAM Best Practices</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Create a cloud-based identity</li>
                        <li>Apply roles to the account</li>
                        <li>Create group</li>
                        <li>Assign role</li>
                        <li>Enable MFA</li>
                        <li>Different Security option and Service</li>
                        <li>Identity Audit with Identity governance feature in Azure</li>
                        </ul>
                        <p><strong><u>Module4: Deploy and Monitor Network Resources</u></strong></p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Cloud Virtual Networking</li>
                        <li>Network Segmentation</li>
                        <li>Log Collection and Analysis</li>
                        <li>Traffic Analysis of Cloud network</li>
                        <li>Network Protection Services: Service Endpoints and Private Endpoints</li>
                        <li>Restricting Access to Network via JIT</li>
                        <li>Cloud Logging Services</li>
                        <li>Infrastructure as Code</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Deploy Virtual Network</li>
                        <li>Allow Administrative Access</li>
                        <li>Jump Server and Bastion Host</li>
                        <li>VPN</li>
                        <li>Troubleshoot the virtual Network.</li>
                        <li>Enable logging option</li>
                        <li>Deploy Network and VM using json.</li>
                        </ul>
                        <p><strong><u>Module5: Encrypt and Protect Data</u></strong></p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Lifecycle Management</li>
                        <li>Storage Account</li>
                        <li>Data Identification and Classification</li>
                        <li>Cloud Service Encryption: Data at Rest Encryption, Data in Transit Encryption, Disk Level Encryption</li>
                        <li>Data Asset Management</li>
                        <li>Cloud Access Security Brokers (CASB)</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Deploy storage account with availability option</li>
                        <li>Encryption option</li>
                        <li>Encryption option for disk storage</li>
                        <li>Deploy SQL Server</li>
                        <li>Data classification and Identification</li>
                        <li>Data Masking</li>
                        <li>Data Encryption option</li>
                        </ul>
                        <p><strong><u>Module6: Detecting and Handling Cloud Incidents with Security Operation</u></strong></p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Understand Cloud Incident Response Lifecycle: Discuss Each Phase</li>
                        <li>Understand How SOAR Accelerates Incident Response</li>
                        <li>Security As a Service</li>
                        <li>Cloud Based SIEM Models</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Creating alert using azure monitor service.</li>
                        <li>Microsoft Defender for Cloud</li>
                        <li>AWS Cloud Trail</li>
                        <li>AWS Cloud Watch and SNS</li>
                        <li>Microsoft Sentinel</li>
                        </ul>
                        <p><strong><u>Module7: Basics of Penetration Testing and Forensic in Cloud</u></strong></p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Pen Testing in Cloud</li>
                        <li>Scope of Cloud Pen Test</li>
                        <li>Common Steps of Pen Testing</li>
                        <li>Cloud Forensics</li>
                        <li>Cloud Forensics Challenges</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Examine Logs on Cloud</li>
                        <li>Identify Misconfigured S3 Bucket and Publicly accessible data</li>
                        </ul>
                        <p><strong><u>Module8: Manage Business Continuity and Disaster Recovery</u></strong></p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Discuss Cloud Disaster Recovery and Business Continuity</li>
                        <li>Main Element of BC/DR in cloud</li>
                        <li>Learn to Design Disaster Recovery and Business Continuity in Cloud</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Implementing Backup for VM</li>
                        <li>Implementing DR for storage account</li>
                        </ul>
                        <p><strong><u> </u></strong><strong><u>Module9: Handling Legal Issue and Policy in Cloud </u></strong></p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Understand the laws impacting cloud computing</li>
                        <li>Learn the cloud computing standards</li>
                        <li>Describe the legal frameworks for data protection and privacy</li>
                        <li>Learn audit planning and reporting in the cloud</li>
                        <li>Describe outsourcing and vendor management</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Auditing Compliance of Azure Resources by creating Policy Assignments with Azure Policy</li>
                        <li>Conducting Security Audit in AWS with AWS Trusted Advisor</li>
                        </ul>
                        <p><strong><u>Module10: Manage GRC for the cloud </u></strong></p>
                        <p><strong>Topics:</strong></p>
                        <ul>
                        <li>Understand GRC in the cloud</li>
                        <li>Discuss cloud governance</li>
                        <li>Learn to implement and maintain governance for cloud computing</li>
                        <li>Discuss risk management in the cloud</li>
                        <li>Understand risk management framework and process in the cloud</li>
                        <li>Understand cloud compliance</li>
                        <li>Learn to implement GRC in the cloud</li>
                        </ul>
                        <p><strong>Exercise:</strong></p>
                        <ul>
                        <li>Deploying Policy for the restriction of deployment</li>
                        <li>Enforce Compliance by Assigning In-built Policy and Creating Custom Policy in Azure</li>
                        </ul>
                    <p>&nbsp</p>
                </div>

                <a href="https://www.infosectrain.com/wp-content/uploads/2022/05/Cloud_Security_Practitioner_Training_Course_Content_v2.pdf" target="_blank" class="downloadlink" style="text-decoration: none;">
                    Download Syllabus
                    <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/download.png" width="20" style="margin: 0 5px;"/>
                </a>
            </div>
        </div>
    </section>
    <!--course content sec end-->

    <!--benifits sec start-->
    <section class="benifits_sec">
        <div class="container">
            <div class="row">
                <img src="assests/images/benifits.jpg" alt="Cloud Security Practitioner course benifits">
            </div>
        </div>
    </section>
    <!--benifits sec end-->

    <!--prise sec start-->
    <section class="prise_sec" id="review">
        <div class="container swiper testimonialSwiper">
            <h3>Words of Praise</h3>
            <div class="swiper-wrapper mt-5">
                <div class="swiper-slide">
                    <div class="prise_item">
                            <img src="https://www.infosectrain.com/my-admin/uploads-feedback/DSC_0171.JPG" alt="Jagannath Sarraju" width="100%" class="prise_img">
                        
                        <div class="contentdiv">
                            <span>Jagannath Sarraju</span>
                            <p>
                                Even though Cloud Security is a hot topic at present, many don't understand the gravitas of having a big picture and working knowledge of every component of cloud computing and hosting. This course provided us that vision and helps guide towards the Cloud Security and open doors to new technologies and big players like MS Azure or AWS.  
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                            <img src="https://www.infosectrain.com/my-admin/uploads-feedback/Yogesh%20Profile%20PIc.jpg" alt="Yogesh Kumar" width="100%" class="prise_img">
                        
                        <div class="contentdiv">
                            <span>Yogesh Kumar </span>
                            <p>
                            Instructor has explained the session very well. It was completely mixed of theory and practical so that everyone will be able to understand the concept what is explained. Also, he never hesitated to explain the same things multiple times whenever asked. He has provided good support throughout the training. Thanks for all the training and sessions, expecting continuous support for future cloud security career.    
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                        <div class="namelogo">A</div>
                        <div class="contentdiv">
                            <span>Arvind Kumar </span>
                            <p>
                            Excellent training session given by Trainer. He has good knowledge on all the topic and related the things with ongoing or real time environment. Having good hands on knowledge on MS Azure tool, provide all the documents and lab materials. Thanks Infosectrain's Instructor. We will look forward for more training from Team Infosec.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"> 
                    <div class="prise_item">
                        <img src="https://www.infosectrain.com/my-admin/uploads-feedback/Radhakrishnan_ppt_photo.jpg" alt="Radhakrishnan Balakrishnama" width="100%" class="prise_img">
                        <div class="contentdiv">
                            <span> Radhakrishnan Balakrishnama </span>
                            <p> 
                            Instructor  has very good knowledge of cloud security and I have gained alot in the training. Training was good and should cover more with real time issues and solution. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                            <img src="https://www.infosectrain.com/my-admin/uploads-feedback/Photo%20for%20ID_Surjit%20Singh.jpg" alt="" width="100%" class="prise_img">
                        
                        <div class="contentdiv">
                            <span>Surjit Singh </span>
                            <p>
                                Instructor has very good knowledge about cloud security. I really enjoyed the sessions. I would be thankful if you please share recorded sessions for the same.
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
                    <a href="https://www.infosectrain.com/pages/lp/cisa/" target="_blank">
                        <img src="assests/images/cisa.webp" alt="CISA Certification Course">
                        <span>CISA Certification Course</span>
                    </a>
                </div>
                <div class="popular_course">
                    <a href="https://www.infosectrain.com/pages/lp/cism/" target="_blank">
                        <img src="assests/images/cism.webp" alt="CISM Certification Training">
                        <span>CISM Certification Training</span>
                    </a>
                </div>
                <div class="popular_course">
                    <a href="https://www.infosectrain.com/pages/lp/ceh-training/" target="_blank">
                        <img src="assests/images/ceh.webp" alt="CEH (v11) - Certified Ethical Hacker">
                        <span>CEH (v12) - Certified Ethical Hacker </span>
                    </a>
                </div>
                <div class="popular_course">
                    <a href="https://www.infosectrain.com/pages/lp/security/" target="_blank">
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
                        <span><img src="assests/images/call.png" alt=""></span>+1 657-221-1127 (US)
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
       $('#filename').load("whatap.html");
   });
    </script>
    <!----------------whatsapp----->
</html>