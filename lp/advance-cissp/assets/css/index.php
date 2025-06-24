<?php include('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assests/images/favicon.ico">
    <title>CISSP Training and Certification course</title>
    <meta name="description" content="CISSP Training and Certification course">
    <!--css link start-->
        <link rel="stylesheet" href="assests/css/style.css?v=2.0">
        <link rel="stylesheet" href="assests/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/style.min.css?v=2.0">
    <!--css link end-->
    <!--google font-->
    <style> @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    </style>
    <!--google font end-->
</head>
<body>
<!--header start-->
    <header>
        <img src="assests/images/Frame.png" alt="" class="shapetop">
        <!--navbar start-->
        <div class="topNav">
            <nav>
                <div class="logo">
                    <a href="#">
                        <img src="assests/images/Infosetrain-logo.png" alt="Infosetrain">
                    </a>
                </div>
                <span class="bars" onClick="openNav()">&#9776;</span>
                <div class="menu">
                    <ul>
                        <li><a href="#overview">overview</a></li>
                        <li><a href="#coursecontent">course content/exam</a></li>
                        <li><a href="#calendar">Training Calendar</a></li>
                        <li><a href="#review">Review</a></li>
                        <li><a href="#choose">Why Infosectrain</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--navbar end-->
        <!--responsive navbar start-->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
            <a href="#overview">overview</a>
            <a href="#coursecontent">course content/exam</a>
            <a href="#calendar">Training Calendar</a>
            <a href="#review">Review</a>
            <a href="#choose">Why Infosectrain</a>
          </div>
        <!--responsive navbar end-->
        <!--banner start-->
        <div class="banner container">
            <div class="row align-items-center">
                <div class="bannerContent">
                    <p>Get The Most Flexible <br> And Comprehensive</p>
                    <h1> <span>CISSP</span> Certification Training <br> With <span>98%</span> Pass Rate</h1>
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
                    <h3>CISSP Training Package Includes</h3>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/recording.png" alt="Recorded Sessions">
                        <p>Access to Recorded Sessions</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/training.png" alt="training">
                        <p>1-on-1 Training Option</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/instructors.png" alt="Accredited Instructors">
                        <p>Accredited Instructors</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/online_training.png" alt="Online Training">
                        <p>48 hours of Instructor-led Online Training</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/certificate.png" alt="Course Certificate">
                        <p>Course Completion Certificate</p>
                    </div>
                    <div class="tainingItem-icon">
                        <img src="assests/images/icon/calendor.png" alt="calendor">
                        <p>Option of both Weekend and Weekday batches</p>
                    </div>
                </div>
                <div class="enquiryForm" id="free_demo">
                    <div class="e_offer">
                        <span>Early Bird Offer</span>
                        <del>USD 2499</del>
                        <span>USD 999</span>
                    </div>
                    <h3>talk to our experts</h3>
                    <div class="hide rows  mt-2" id="demo_form_output">  </div>
                    <form method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f" >
                        <input type="text"   id="me_name"    name="me_name"    placeholder="Your Name *"    >
                        <input type="email"  id="me_email"   name="me_email"   placeholder="Email-Address *"  >
                        <input type="tel"    id="me_phone"   name="me_phone"   placeholder="Phone Number"                     >
                        <input type="text"   id="me_message" name="me_message" placeholder="Mention Your Call Time Preference" >
                        <input type="hidden" id="me_redirect"   value="<?php echo BASE_URL;?>thank-you.html"  > 
                		<input type="hidden" id="me_others"  name="me_others"  value="CISSP Certification Training"   > 
						<input type="hidden" id="me_pageurl" name="me_pageurl" value="<?php echo $pag_url;?>"  > 
                        
                        <input type="submit" value="REQUEST A CALLBACK" name="me_submited" id="me_submited">
                    </form>
                    <div class="loading_w hide" id="loading_w"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif"/></div>
                </div>
            </div>
        </div>
    </section>
    <!--trainning package sec end-->

    <!--training calendor start-->
      <section id="table_section">
 
    <div  class="container" id="calendar">
        <div class="row">
            <div class="col-12">
               <h2 class="package-heading">CISSP Training Calendar</h2>
            </div>
        </div>

    <div class="row">
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
  </div>
</section>

    <!--training calendor end-->

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
    <section style="background: #F5F5F5;">
        <div class="container">
            <h3>Our Expert Course Advisors</h3>
            <div class="row justify-content-between">
                <div class="advisor-item">
                    <h4>Prabh Nair</h4>
                    <p>CISSP | CCSP | CISM | CISA <br> | CRISC</p>
                </div>
                <div class="advisor-item">
                    <h4>Prashant M</h4>
                    <p>CISSP | CCSP | CISA | CRISC</p>
                </div>
                <div class="advisor-item">
                    <h4>Ajit</h4>
                    <p>CISSP, CISA, CISM, CRISC, <br> CCSP,</p>
                </div>
                <div class="advisor-item">
                    <h4>MANIKANDAN N</h4>
                    <p>CISSP, AWS ARCHITECT, <br>CCSP, CEH</p>
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
                    <p>Learn from Industry Experts</p>
                </div>
                <div class="whyItem">
                    <img src="assests/images/icon/training_support.png" alt="Training Support">
                    <p>Assured Post Training Support</p>
                </div>
                <div class="whyItem">
                    <img src="assests/images/icon/programs.png" alt="Certification Programs">
                    <p>Certification Focused Programs</p>
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
                    <h3>About CISSP</h3>
                    <p>
                        Certified Information Systems Security Professional (CISSP) is an independent information security certification governed by the not-for-profit International Information Systems Security Certification Consortium, (ISC)2. The CISSP was the first credential in the field of information security, accredited by the ANSI (American National Standards Institute) to ISO (International Standards Organization) Standard 17024:2003.
                    </p>
                    <p>
                        It is approved by the U.S. Department of Defense (DoD) in both their Information Assurance Technical (IAT) and Managerial (IAM) categories.
                    </p>
                </div>
            </div>
            <div class="row justify-content-between">
                <!--about cart item start-->
                <div class="about-item">
                    <span>Who Should Attend</span>
                    <ul>
                        <li>Chief Information Security Officer</li>
                        <li>Chief Information Officer</li>
                        <li>Director of Security</li>
                        <li>IT Director/Manager</li>
                        <li>Security Systems Engineer</li>
                        <li>Security Analyst</li>
                        <li>Security Manager</li>
                        <li>Security Auditor</li>
                        <li>Security Architect</li>
                        <li>Security Consultant</li>
                        <li>Network Architect</li>
                    </ul>
                </div>
                <!--about cart item end-->
                <!--about cart item start-->
                <div class="about-item about-itemtwo">
                    <span>Pre-Requisites</span>
                    <p>To apply for the CISSP course certification, you need to:</p>
                    <p>
                        Have a minimum 5 years of cumulative paid full-time work experience in two or more of the 8 domains of the (ISC)² CISSP Common Body of Knowledge (CBK)
                    </p>
                    <p>
                        One-year experience waiver can be earned with a 4-year college degree, or regional equivalent or additional credential from the (ISC)² approved list
                    </p>
                </div>
                <!--about cart item end-->
                <!--about cart item start-->
                <div class="about-item about-itemthree">
                    <span>Exam Details</span>
                    <ul>
                        <li>Computer Adaptive Testing <strong>[CAT]</strong></li>
                        <li>Length of exam: <strong>4 Hours</strong></li>
                        <li>Number of questions: <strong>175</strong></li>
                        <li>Question format: Multiple choice and advanced innovative questions</li>
                        <li>Passing grade: <strong>700 out of 1000</strong> points</li>
                        <li>
                            Exam availability: English, French, German, Brazilian, Portuguese, Spanish, Japanese, Simplified Chinese, Korean, Visually Impaired
                        </li>
                    </ul>
                </div>
                <!--about cart item end-->
            </div>
        </div>
    </section>
    <!--about sec end-->

    <!--course content sec start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="course_content_heading">
                    <h3>CISSP CBK Domains / Course Content</h3>
                    <p>The CISSP Training consists of the following eight domains:</p>
                    <p>The weight given to each of the domains have changed. As per new version, they are represented as follows.</p>
                </div>
            </div>
            <div class="row">
                <!--course content table start-->
                    <div class="table-responsives">
                        <table width="100%" cellpadding="0" cellspacing="0" class="course_content_table">
                            <thead>
                                <tr>
                                    <th>DOMAIN</th>
                                    <th>% on 2015 CBK®</th>
                                    <th>% on April 2018 CBK®</th>
                                    <th>% on May 2021 CBK®</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Security and Risk Management</td>
                                    <td>16%</td>
                                    <td>15%</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Asset Security</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Security Architecture and Engineering</td>
                                    <td>12%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Communications and Network Security</td>
                                    <td>12%</td>
                                    <td>14%</td>
                                    <td><strong>13% (PERCENTAGE CHANGE -1%)</strong></td>
                                </tr>
                                <tr>
                                    <td>Identity and Access Management (IAM)</td>
                                    <td>13%</td>
                                    <td>14%</td>
                                    <td><strong>13% (PERCENTAGE CHANGE -1%)</strong></td>
                                </tr>
                                <tr>
                                    <td>Security Assessment and Testing</td>
                                    <td>11%</td>
                                    <td>12%</td>
                                    <td>12%</td>
                                </tr>
                                <tr>
                                    <td>Security Operations</td>
                                    <td>16%</td>
                                    <td>13%</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Software Development Security</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td><strong>11% (PERCENTAGE CHANGE +1%)</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <!--course content table end-->
            </div>
        </div>
    </section>
    <!--course content sec end-->

    <!--benifits sec start-->
    <section class="benifits_sec">
        <div class="container">
            <div class="row">
                <img src="assests/images/benifits.webp" alt="cissp course benifits">
            </div>
        </div>
    </section>
    <!--benifits sec end-->

    <!--avarage selary sec start-->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="salary_item">
                    <h3>average Salary CISSP Professionals</h3>
                    <p>CISSP certified professionals earn 25 Percent more pay than the non-certified counterparts.It has been ranked at number 4 out of top 15 highest paying jobs by tech republic survey.</p>
                </div>
                <div class="salary_item">
                    <img src="assests/images/cissp_salary.webp" alt="Average Salary CISSP Professionals">    
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
                        <img src="assests/images/Azizur.webp" alt="Md Azizur rahman">
                        <div>
                            <span>Md Azizur rahman</span>
                            <p>
                                It was such a privilege to participate in this program. Instructor promised us that if we face any trouble/challenge any topic after the session ended he will be happy to collaborate!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                        <img src="assests/images/maria.webp" alt="Dr Maria Setts">
                        <div>
                            <span>Dr Maria Setts</span>
                            <p>
                                I got training from an excellent instructor. He is very knowledgeable and shared many examples and concepts. This course has increased my knowledge in cybersecurity and is a requirement for my job.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise_item">
                        <img src="assests/images/Harita.webp" alt="Harita kute">
                        <div>
                            <span>Harita kute</span>
                            <p>
                                InfosecTrain offered me an excellent trainer. He not only cleared the doubts but has up-to-date knowledge over the subject.
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
                    <p>© <?php echo date("Y");?> - Infosec Train. All Rights Reserved.</p>
                </div>
                <div class="footer_item">
                    <h4>Quick Contact</h4>
                    <a href="https://api.whatsapp.com/send?phone=918767256840">
                        <span><img src="assests/images/whtsapp.png" alt=""></span>+91-87672-56840
                    </a>
                    <a href="tel:1800-843-7890">
                        <span><img src="assests/images/call.png" alt=""></span>1800-843-7890 (IN)
                    </a>
                    <a href="tel:+1 657-722-11127">
                        <span><img src="assests/images/call.png" alt=""></span>+1 657-722-11127 (USA)
                    </a>
                    <a href="tel:+44 7451 208413">
                        <span><img src="assests/images/call.png" alt=""></span>+44 7451 208413 (UK)
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
    <img src="assests/images/icon/arrow.png" alt="arrow" onClick="topFunction()" id="myBtn">
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


<script src="assests/js/common.min.js"></script>


<!--js link start-->
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
</script>
</html>