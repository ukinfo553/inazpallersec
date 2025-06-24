<?php include('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assests/images/favicon.ico">
    <title>Network Security Online Training Course | InfosecTrain</title>
    <meta name="description" content="InfosecTrain Offers Network Security Online Training Course with Network Security Introduction Module,Understanding of Router, Firewalls, Network Attacks &amp; more" />
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
                    <h1> <span>Upskill</span> with the Most Flexible <br> and Comprehensive <br> Expert <span> Network Security Training</span> </h1>
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
                    <h3>Network Security Training Package Includes</h3>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/online_training.png" alt="Online Training">
                        <p>32 hrs of instructor-led training</p>
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
                        <del>₹ 19,999</del>
                        <span>₹ 8999</span>
                            <div class="or_">
                                or
                            </div>
                        <del>$399</del>
                        <span>$199</span>
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



 <section  id="table_section" style="background: #F0EAEA;padding:5rem 0;float:inherit;">
       <div class="container">
           <h3>Training Calendar</h3>
           <div class="row">
                <?php
$url = "https://www.infosectrain.com/api/37162/href_toscroll/free_demo";
 

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
            <div class="row justify-content-between">
                <div class="advisor-item">
                    <img src="https://www.infosectrain.com/wp-content/uploads/2020/12/Sanyam-150x150.png" alt="">
                    <h4>Sanyam Negi</h4>
                    <span> 9+ Years Experienced </span>
                    <p>  CEH | CHFI | CTIA | CSA | Sec+ | Pentest+ | AWS Sec | AWS Architect  | Sec+</p>
                </div>
<!------
                <div class="advisor-item">
                    <img src="https://www.infosectrain.com/wp-content/uploads/2020/07/Bharat-web-150x150.png" alt="">
                    <h4> Bharat Mutha</h4>
                    <span> 10+ Years Experienced </span>
                    <p>  CEH | ECIH | CHFI | ECSA | CTIA | CSCU | CySA+ | PenTest+ | Security+</p>
                </div>---->
                <div class="advisor-item">
                    <img src="https://www.infosectrain.com/wp-content/uploads/2020/12/rishabh-png-150x150.png" alt="">
                    <h4>Rishabh Kotiyal</h4>
                    <span> 10+ Years Experienced </span>
                    <p>MCT | AZ 104 | AZ 500 | AZ 303 | AZ 304 | SC 200 | CEH | ECIH |   CND | CEI | Security+ | CSA | CCSE</p>
                </div>
                <div class="advisor-item">
                    <img src="https://www.infosectrain.com/wp-content/uploads/2021/02/ashish-150x150.png" alt="">
                    <h4> Ashish Dhyani</h4>
                    <span> 7+ Years Experienced </span>
                    <p> CEH | CND |  CCNA | Network+ | Sec+ | Server+ | Linux+ | Pentest+ </p>
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
                    <h3>About Network Security</h3>
                    <p>
                    With rampant network breaches causing damage to organizations across the globe, leaders are in dire need of network security experts who can guard company assets. This Network Security Online Training Course caters to the most updated tools and techniques to helps learners master the concepts of Network Security. This Networking course covers everything about networks, their functional knowledge, and the key management and security strategies to help protect enterprise networks. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--about sec end-->
    <!--network tool sec start-->
    <section style="border-bottom:1px solid #dee2e6">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="salary_item">
                    <h3>Network Security Tools Covered</h3>
                    <img src="assests/images/Network-tool.jpg" alt="Network Security Tool">    
                </div>
            </div>
        </div>
    </section>
    <!--network tool sec end-->
    <!--course content sec start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="course_content_heading">
                    <h3>Network Security Course Details</h3>
                </div>
            </div>
            <div class="row">
                <button class="accordion">Course Overview</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <p>
                        In recent times, companies of all scales and sizes have started building strategies and mitigation processes to secure 
                        their networks. While no network is completely attack-proof from threats and vulnerabilities, an efficient and reliable 
                        network security system can ensure that basic security is maintained. The Network Security Training course from 
                        Infosectrain is designed to help you build a foundation of Network Security and its various components. 
                        The course extensively covers a wide range of concepts along with tools used to secure enterprise networks. 
                        This training program will help you identify and mitigate various types of Network Security threats and attacks with 
                        concepts such as Sniffing, DoS & DDoS attacks, Fraggle and Smurf attacks, DNS poisoning, etc.
                    </p>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Who Should Attend</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>Anyone who is interested to explore Network Security concepts in-depth and gain essential skills for their cybersecurity career.</li>
                        <li>IT security enthusiasts looking to build a career in the same.</li>
                        <li>Analysts and Jr. Engineers looking to build a career in cybersecurity.</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Pre-requisites</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>Basic knowledge of Network and Networking concepts like TCPs, DNS, IPs, Ports, etc.</li>
                        <li>Linux basics/fundamentals and scripting in Linux OS</li>
                        <li>Computing fundamentals and Internet working methodology</li>
                        <li>Computer Science background</li>
                    </ul>
                    <p>&nbsp</p>
                </div>

                <button class="accordion">Network Security Course Objectives</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <ul>
                        <li>Learn about fundamental concepts of Network Security and its various verticals</li>
                        <li>In depth exploration of Networking and Network Security concepts like routers, WiFi & WiFi security, wired networks management, Network monitoring, Firewalls, etc.</li>
                        <li>Hands-on practical demonstration and analysis of vulnerability scanning using scanners (OpenVAS, Nessus, Nmap), Network Discovery using hping3, arp-scan, Angry IP Scanner, network threats/attacks like Man in the middle, SSL Stripping, ARP & DNS Spoofing, etc</li>
                        <li>Exploring attacks that generally plague networks like Dos & DDoS attacks, Malware & Adware, Fraggle and Smurf attacks, DNS poisoning, Ping of Death Attack, Firewalking, etc.</li>
                        <li>Explore threat mitigation processes and concepts to effectively counter potential network security threats and identify vulnerabilities in the network</li>
                        <li>Introduction to browser security and its different components</li>
                        <li>Authentication and Cryptography concepts</li>
                    </ul>
                    <p>&nbsp</p>
                </div>
                <button class="accordion">Network Security Course Content</button>
                <div class="panel">
                    <p>&nbsp</p>
                    <p><strong>Network Fundamentals</strong></p>
                    <ul>
                        <li>Computer Network</li>
                        <li>Types of Networks</li>
                        <li>Major Network Topologies</li>
                        </ul>
                        <p><strong>Network Components</strong></p>
                        <ul>
                        <li>Network Interface Card (NIC)</li>
                        <li>Repeater</li>
                        <li>Hub</li>
                        <li>Switches</li>
                        <li>Router</li>
                        <li>Bridges</li>
                        <li>Gateways</li>
                        </ul>
                        <p><strong>TCP/IP Networking Basics</strong></p>
                        <ul>
                        <li>Standard Network Models: OSI Model</li>
                        <li>Standard Network Models: TCP/IP Model</li>
                        <li>Comparing OSI and TCP/IP</li>
                        </ul>
                        <p><strong>TCP/IP Protocol Stack</strong></p>
                        <ul>
                        <li>Domain Name System (DNS)</li>
                        <li>DNS Packet Format</li>
                        <li>Transmission Control Protocol (TCP)</li>
                        <li>TCP Header Format</li>
                        <li>TCP Services</li>
                        <li>TCP Operation</li>
                        <li>Three-way handshake</li>
                        <li>User Datagram Protocol (UDP)</li>
                        <li>UDP Operation</li>
                        <li>IP Header</li>
                        <li>IP Header: Protocol Field</li>
                        <li>What is Internet Protocol v6 (IPv6)?</li>
                        <li>IPv6 Header</li>
                        <li>Internet Control Message Protocol (ICMP)</li>
                        <li>Format of an ICMP Message</li>
                        <li>Address Resolution Protocol (ARP)</li>
                        <li>ARP Packet Format</li>
                        <li>Ethernet</li>
                        <li>Fiber Distributed Data Interface (FDDI)</li>
                        <li>Token Ring</li>
                        <li>IP Addressing</li>
                        <li>Classful IP Addressing</li>
                        <li>Address Classes</li>
                        <li>Reserved IP Address</li>
                        <li>Subnet Masking</li>
                        <li>Subnetting</li>
                        <li>Supernetting</li>
                        <li>IPv6 Addressing</li>
                        <li>Difference between IPv4 and IPv6</li>
                        <li>Configuring static and dynamic IP in windows and linux</li>
                        <li>IPv4 compatible IPv6 Address</li>
                        </ul>
                        <p><strong>Operating System basics</strong></p>
                        <ul>
                        <li>Understanding the basic of Windows</li>
                        <li>Installing windows in Vmware</li>
                        <li>Basic Windows Commands -&gt; assoc,chkntfs,call,break,color,endlocal,clip,icacls,label,ping,mkdir,verify,wmic,compact,chkdsk,cipher</li>
                        <li>Understanding the Architecture of Linux</li>
                        <li>Installing Linux in Vmware</li>
                        <li>Installing kali Linux in virtual Environment</li>
                        <li>Most useful and powerful commands of Linux -&gt; Shred , more , head,less,dig,ssh,ps ,fg ,grep,sed,awk,cut,gzip,chmod,rm , netstat,lsof.</li>
                        </ul>
                        <p><strong>Security Fundamentals</strong></p>
                        <ul>
                        <li>Cybersecurity vs Information security vs Privacy</li>
                        <li>Pillars of Security</li>
                        <li>Basic terminologies in security</li>
                        <li>Hackers and their types</li>
                        <li>Teams in Cybersecurity</li>
                        <li>Phases of hacking</li>
                        <li>Introduction to Cyber threat intelligence</li>
                        <li>Introduction to Threat Modelling</li>
                        </ul>
                        <p><strong>Introduction to Attacks</strong></p>
                        <p><strong>Reconnaissance Attacks</strong></p>
                        <ul>
                        <li>Reconnaissance Attacks: ICMP Scanning (Hands-On using nmap)</li>
                        <li>Reconnaissance Attacks: Ping Sweep (Hands-On using nmap)</li>
                        <li>Reconnaissance Attacks: DNS Footprinting (Hands-On using nmap)</li>
                        <li>Reconnaissance Attacks: Network Range Discovery (Hands-On arp-scan , nmap)</li>
                        <li>Reconnaissance Attacks: Network Topology Identification</li>
                        <li>Reconnaissance Attacks: Network Information Extraction using Nmap Scan (Hands-On)</li>
                        <li>Reconnaissance Attacks: Port Scanning (Hands-On using nmap)</li>
                        <li>Reconnaissance Attacks: Network Sniffing using wireshark and tcpdump(Hands-On)</li>
                        <li>How an Attacker Hacks the Network Using Sniffers</li>
                        <li>Reconnaissance Attacks: Social Engineering Attacks using SEtoolkit</li>
                        </ul>
                        <p><strong>Network Access Attacks</strong></p>
                        <ul>
                        <li>Password Attacks (Hands On using hydra , ncrack, medusa)</li>
                        <li>Password Attack Techniques</li>
                        <li>Dictionary Attack</li>
                        <li>Brute Forcing Attacks</li>
                        <li>Hybrid Attack</li>
                        <li>Birthday Attack</li>
                        <li>Rainbow Table Attack</li>
                        <li>Man-in-the-Middle Attack</li>
                        <li>Replay Attack</li>
                        <li>Smurf Attack</li>
                        <li>Spam and Spim</li>
                        <li>Xmas Attack</li>
                        <li>Pharming</li>
                        <li>Privilege Escalation (Hands On)</li>
                        <li>DNS Poisoning (hands on lab creation in linux)</li>
                        <li>DNS Cache Poisoning (Hands on in ubuntu)</li>
                        <li>ARP Poisoning</li>
                        <li>DHCP Starvation Attacks (Hands On using yersinia)</li>
                        <li>DHCP Spoofing Attack (Hands on using own dhcp server)</li>
                        <li>Switch Port Stealing</li>
                        <li>Spoofing Attacks</li>
                        <li>MAC Spoofing/Duplicating (Hands on using MAC changer)</li>
                        <li>Denial of Service (DoS) Attacks (Hands On using script)</li>
                        <li>Distributed Denial-of-Service Attack (DDoS) (Creating a C2)</li>
                        <li>Malware Attacks (Hands On)</li>
                        </ul>
                        <p><strong>Network Security Policy, Protocols and Controls</strong></p>
                        <ul>
                        <li>What is Security policy</li>
                        <li>Steps to create and Implement security policy</li>
                        <li>Various policies in Enterprise</li>
                        <li>Network security protocols</li>
                        <li>IPSec</li>
                        <li>SSL/TLS</li>
                        <li>Kerberos</li>
                        <li>SNMPv3</li>
                        <li>SSH</li>
                        <li>PPTP</li>
                        <li>L2TP</li>
                        <li>Network Security Controls</li>
                        <li>Access Control Principles</li>
                        <li>Access Control System: Administrative Access Control</li>
                        <li>Access Control System: Physical Access Controls</li>
                        <li>Access Control System: Technical Access Control</li>
                        <li>Discretionary Access Control</li>
                        <li>Mandatory Access Control</li>
                        <li>Role based access control</li>
                        </ul>
                        <p><strong>Network Security Appliances</strong></p>
                        <ul>
                        <li>Network Access Control</li>
                        <li>Configuring NAC Packet Fence (Hands-On)</li>
                        <li>Firewalls</li>
                        <li>DMZ</li>
                        <li>VPN</li>
                        <li>IDS</li>
                        <li>IPS</li>
                        </ul>
                        <p><strong>Network Protocol Analyzer</strong></p>
                        <ul>
                        <li>How it Works</li>
                        <li>Advantages of using Network Protocol Analyzer</li>
                        <li>Network Protocol Analyzer Tool like Wireshark and TCP Dump (Hands on)</li>
                        </ul>
                        <p><strong>Internet Content Filter</strong></p>
                        <ul>
                        <li>Advantages of using Internet Content Filters</li>
                        <li>Internet Content Filters</li>
                        <li>Integrated Network Security Hardware</li>
                        </ul>
                        <p><strong>Network Security Protocols</strong></p>
                        <ul>
                        <li>Transport Layer</li>
                        <li>Network Layer</li>
                        <li>Application Layer</li>
                        <li>Data Link Layer</li>
                        </ul>
                        <p><strong>Implementation of Network Security Devices in Virtual Lab</strong></p>
                        <ul>
                        <li>Firewall</li>
                        <li>What Firewall does</li>
                        <li>Types of Firewall</li>
                        <li>How Firewall Works</li>
                        <li>Firewall rules (Hands on)</li>
                        <li>Configuring pfsense firewall (Hands on)</li>
                        <li>Firewall Topologies</li>
                        <li>Anti-Evasion Techniques</li>
                        <li>Why are Firewalls bypassed</li>
                        <li>IDS/IPS</li>
                        <li>IDS Function in Network Defense</li>
                        <li>Working of IDS</li>
                        <li>Components of IDS</li>
                        <li>Types of alerts</li>
                        <li>Types of implementations</li>
                        <li>Configuring Snort (Hands-On)</li>
                        <li>IPS working</li>
                        <li>How it is Different from IDS</li>
                        <li>Types of IPS</li>
                        <li>Antivirus</li>
                        <li>Understanding the Working of Antivirus</li>
                        <li>Bypassing Antivirus techniques (Hands on)</li>
                        <li>Endpoint Detection and Response</li>
                        <li>What is EDR?</li>
                        <li>How EDR works</li>
                        <li>Configuring EDR velociraptor (Hands-On)</li>
                        <li>Introduction to XDR</li>
                        <li>VPN Configuration and Management</li>
                        <li>What is VPN?</li>
                        <li>Configuring VPN functionality of your router. (Hands On)</li>
                        <li>Working of VPN</li>
                        <li>Why to use VPN?</li>
                        <li>VPN Components</li>
                        <li>VPN Types</li>
                        <li>Common Flaws in VPN</li>
                        <li>VPN Security</li>
                        </ul>
                        <p><strong>Network Traffic Monitoring and Analysis</strong></p>
                        <ul>
                        <li>Monitoring and Analysis techniques</li>
                        <li>Network Traffic Signatures</li>
                        <li>Using Packet sniffer : Wireshark and tcpdump (hands on)</li>
                        <li>Detecting OS Fingerprinting Attempts</li>
                        <li>Detecting Passive OS Fingerprinting Attempts</li>
                        <li>Detecting Active OS Fingerprinting Attempts
                        <ul>
                        <li>Detecting ICMP Based OS Fingerprinting</li>
                        <li>Detecting TCP Based OS Fingerprinting</li>
                        </ul>
                        </li>
                        <li>Examine Nmap Process for OS Fingerprinting</li>
                        <li>Detecting PING Sweep Attempt</li>
                        <li>Detecting ARP Sweep/ ARP Scan Attempt</li>
                        <li>Detecting TCP Scan Attempt
                        <ul>
                        <li>TCP Half Open/ Stealth Scan Attempt</li>
                        <li>TCP Full Connect Scan</li>
                        <li>TCP Null Scan Attempt</li>
                        <li>TCP Xmas Scan Attempt</li>
                        </ul>
                        </li>
                        <li>Detecting SYN/FIN DDOS Attempt</li>
                        <li>Detecting UDP Scan Attempt</li>
                        <li>Detecting Password Cracking Attempts</li>
                        <li>Detecting FTP Password Cracking Attempts</li>
                        <li>Detecting Sniffing (MITM) Attempts</li>
                        <li>Detecting the Mac Flooding Attempt</li>
                        <li>Detecting the ARP Poisoning Attempt</li>
                        </ul>
                        <p><strong>Introduction to Zero Trust</strong></p>
                        <ul>
                        <li>What is Zero Trust Network</li>
                        <li>Pillars of Zero trust network</li>
                        <li>Architecture of zero trust network</li>
                        <li>Application Deployment</li>
                        </ul>
                        <p><strong>Securing the Wireless infrastructure</strong></p>
                        <ul>
                        <li>Wireless Terminologies</li>
                        <li>Wireless Networks
                        <ul>
                        <li>Advantages of Wireless Networks</li>
                        <li>Disadvantages of Wireless Networks</li>
                        </ul>
                        </li>
                        <li>Wireless Standard</li>
                        <li>Wireless Topologies</li>
                        <li>Components of Wireless Network
                        <ul>
                        <li>Access Point</li>
                        <li>Wireless Cards (NIC)</li>
                        <li>Wireless Modem</li>
                        <li>Wireless Bridge</li>
                        <li>Wireless Repeater</li>
                        <li>Wireless Router</li>
                        <li>Wireless Gateways</li>
                        <li>Wireless USB Adapter</li>
                        </ul>
                        </li>
                        <li>WEP (Wired Equivalent Privacy) Encryption</li>
                        <li>WPA (Wi-Fi Protected Access) Encryption</li>
                        <li>WPA2 Encryption</li>
                        <li>WEP vs. WPA vs. WPA2</li>
                        <li>Wi-Fi Authentication Method
                        <ul>
                        <li>Open System Authentication</li>
                        <li>Shared Key Authentication</li>
                        </ul>
                        </li>
                        <li>Wireless Attacks (Hands on using Wifi exploitation Framework)
                        <ul>
                        <li>War Driving</li>
                        <li>Client Mis-association</li>
                        <li>Unauthorized Association</li>
                        <li>HoneySpot Access Point (Evil Twin) Attack</li>
                        <li>Rogue Access Point Attack (hands on)</li>
                        <li>Misconfigured Access Point Attack</li>
                        <li>Ad Hoc Connection Attack</li>
                        <li>AP MAC Spoofing</li>
                        <li>Denial-of-Service Attack</li>
                        <li>WPA-PSK Cracking</li>
                        <li>RADIUS Replay</li>
                        <li>ARP Poisoning Attack</li>
                        <li>WEP Cracking (hands on)</li>
                        <li>Man-in-the-Middle Attack (Hands on)</li>
                        <li>Fragmentation Attack</li>
                        <li>Jamming Signal Attack</li>
                        </ul>
                        </li>
                        <li>Applying Mitigations of Network based attack to Virtual Lab (Hands on)</li>
                        <li>Pentesting the Lab (Hands On)</li>
                        <li>Conclusion</li>
                        </ul>
                        <p>&nbsp</p>
                </div>

                <a href="https://www.infosectrain.com/wp-content/uploads/2021/12/Network_Security_course_content_v2.pdf" class="downloadlink" target="_blank" class="accordion" style="text-decoration: none;">
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
                <img src="assests/images/benefits.jpg" alt="cissp course benifits">
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
                        <img src="assests/images/sudhara.jpg" alt="Sudhara Vipin">
                        <div>
                            <span> Sudhara Vipin </span>
                            <p>
                                 Course and training were excellent. The Training methodology incorporated by InfoSec Train 
                                 helped me to understand the concepts effectively. Looking forward to experiencing more such 
                                 learning experiences with this team!  
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                        <img src="assests/images/raghavendra.jpg" alt="Raghavendra Surya">
                        <div>
                            <span> Raghavendra Surya </span>
                            <p>
                                Excellent trainer and course materials! Very useful for future reference as well. I expect more amazing training programs 
                                and offers from InfoSecTrain that will uplift my 
                                career potential and help me towards opportunities that I have always dreamt of.  
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                        <img src="assests/images/akhil.jpg" alt="Akhil Verma">
                        <div>
                            <span>Akhil Verma</span>
                            <p>
                                Superb session. One of the best instructors I have ever met. Very humble down to earth and very professional to handle query from the participants.      
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