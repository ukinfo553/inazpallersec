<?php include('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCSK PLUS</title>
    <!--/style link start-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--/style link end-->

    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                  
                  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                  
                  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                  
                  })(window,document,'script','dataLayer','GTM-5XZDRWG');
        </script>
    <!-- End Google Tag Manager -->
<style>
    .hide{display: none;}
    .loading_w {
    width: 100%;
    text-align: center;
    float: left;
}
</style>
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

<!--/ navabar start-->
<nav class="navbar navbar-expand-lg py-md-3" style="background: #1e1d1d;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/infosectrain-logo.png" alt="" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <img src="assets/img/icon/menu.png" alt="" width="50">
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#overview">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#benefits">Benefits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Our Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonial">Testimonial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">Faq</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--/ navbar end-->
<main>
    <!--/banner start-->
        <header class="banner">
            <div class="container">
                <div class="row justify-content-between align-items-center position-relative">
                    <div class="col-xl-8 col-md-6 col-lg-7">
                        <div class="item">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2018/12/csa-partner.jpg" alt="">
                            <span>Get Set for the</span>
                            <h1>Cloud Security Revolution with</h1>
                            <span>CCSK Certificate of</span>
                            <h1>Cloud Security Knowledge</h1>
                            <p>
                                Demand for cloud security skills is set <br/> to jump by <strong style="color:#5E75C7;"> 115% </strong> between <strong style="color:#5E75C7;"> 2020-2025.</strong> <br/> Are you ready?
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-5 mt-4 mt-md-0" style="z-index:1;">
                        <div class="item-two">
                            <span>Get A Free Demo Class!</span>
                            <div class="hide rows  mt-2" id="demo_form_output">  </div>
                            <form method="post" class="p-2" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f">
                                <div class="mt-lg-4 mt-3">
                                    <!-- <label for="name">Name</label> -->
                                    <input type="text" id="me_name" name="me_name" placeholder="Name">
                                </div>
                                <div class="mt-lg-4 mt-3">
                                    <!-- <label for="email">Email</label> -->
                                    <input type="email" id="me_email" name="me_email" placeholder="Email">
                                </div>
                                <div class="mt-lg-4 mt-3">
                                    <!-- <label for="phone">Phone</label> -->
                                    <input type="text" id="me_phone" name="me_phone" placeholder="Phone" onkeyup='Validate(this.id,"integer");'>
                                </div>
                                <div class="mt-lg-4 mt-3">
                                    <!-- <label for="send a query">Send a Query</label> -->
                                    <textarea id="me_message" value=""  name="me_message" placeholder="Send a Query" cols="30" rows="4"></textarea>
                                </div>
                                <!--/hideen input start-->
                                    <input type="hidden" id="me_redirect"   value="<?php echo BASE_URL;?>thank-you.html"  > 
                		            <input type="hidden" id="me_others"  name="me_others"  value="soc-exam-certification"   > 
						            <input type="hidden" id="me_pageurl" name="me_pageurl" value="<?php echo $pag_url;?>"  > 
                                <!--/hideen input start-->
                                <input type="submit" value="Submit" name="me_submited" id="me_submited" class="mt-lg-4 mt-3">
                            </form>
                            <div class="loading_w hide" id="loading_w">
                                <center>
                                    <img src="<?php echo BASE_URL; ?>assets/img/loader.gif"/>
                                </center>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/cloud.png" alt="" class="fixedImg d-none d-xl-block">
                </div>
            </div>
        </header>
    <!--/banner start-->

    <!--/section start-->
        <section class="section-one" id="overview">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 col-md-8">
                        <div class="item">
                            <h2>What is CCSK?</h2>
                            <p class="my-4">
                                Certificate of Cloud Security Knowledge, widely known as CCSK training course is an end to end knowledge-focused training and certification program that helps security professionals gain deep insights of the cloud security and related aspects while delivering far reaching understanding of how to address various cloud security concerns.The CCSK is an all-embracing training covering core essentials of cloud computing architectural framework, governance and operations in the cloud such as legal issues, information and data security management, and data centers operations among others. This highly valued cloud security program allows security practitioners to advance their career with extensive knowledge of the aforementioned cloud security areas.
                            </p>
                            <a href="#" class="ccskBtn">Get a FREE DEMO</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                        <div class="item">
                            <img src="assets/img/ccsk.png" alt="ccsk certificate|infosectrain" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--/section end-->

    <!--/course calendor-->
    <section id="table_section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Training Calendar</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <?php
                            $url = "https://www.infosectrain.com/api/30853/href_toscroll/free_demo";
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
    <!--/course calendar end-->

    <!--/section start-->
    <section class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="item">
                        <img src="assets/img/icon/training.png" alt="">
                        <p>24-Hours of instructor-led training</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="item">
                        <img src="assets/img/icon/laerning.png" alt="">
                        <p>Learn from certified experts</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="item">
                        <img src="assets/img/icon/recorded.png" alt="">
                        <p>Access to recorded sessions</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="item">
                        <img src="assets/img/icon/laerning.png" alt="">
                        <p>Skills-based customized training</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/section end-->

    <!--/Why CCSK Training sec start-->
    <section class="section-four">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Why CCSK Training at Infosec Train?</h2>
                </div>
            </div>

            <div class="swiper w-100 benifitSwiper pb-lg-3 mt-lg-5 mt-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="assets/img/icon/security.png" alt="cloud security">
                            <p>
                                Infosec Train is an authorized training partner of CSA (Cloud Security Alliance).
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="assets/img/icon/certification.png" alt="cloud certification">
                            <p>
                                CCSK Plus Training at Infosec Train thoroughly prepares you for the CCSK certification exam with a pass rate of 97%.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="assets/img/icon/support.png" alt="trainner support">
                            <p>
                                We offer post training support with no expiry date, which means our learning guides will be there to assist you until you pass your CCSK certification.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="assets/img/icon/virtual-instructor.png" alt="virtual instructor">
                            <p>
                                Learners can choose from different delivery methods as per their preference - Virtual Instructor-Led Training, 1-on-1 Training, and Classroom training among others.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="assets/img/icon/weekend-batch.png" alt="weekend batch">
                            <p>
                                Our flexible schedules allow our learners to upskill without missing work - they can opt for weekend batches or after-work hours on weekdays.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="assets/img/icon/practical.png" alt="practical learning approach">
                            <p>
                                Our certification-focused programs emphasize on a scenario-based and practical learning approach.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="assets/img/icon/record-class.png" alt="recorded class">
                            <p>
                                Get access to recorded sessions of your class for post-training reference.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
                            
            <div class="mt-4 text-center">
                <a href="#demo_me_phone_f" class="ccskBtn">
                    Get Customized CCSK Training Plan 
                </a>
            </div>
        </div>
    </section>
    <!--/Why CCSK Training sec end-->

    <!--/Why CCSK Training sec start-->
    <section class="why-certification">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Why CCSK Certification Training?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="item">
                        <img src="assets/img/icon/cloud.png" alt="cloud security">
                        <p>Become an asset to your organization with the knowledge of cloud security.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="item item-two">
                        <img src="assets/img/icon/security.png" alt="CCSK Certification">
                        <p>Employers look for CCSK certified personnel when hiring for a cloud security role. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="item">
                        <img src="assets/img/icon/trainner.png" alt="cloud trainer">
                        <p>The CCSK certificate is vendor-neutral - which means you can opt for a cloud security career path through any cloud vendor - AWS, Azure, GCP etc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="item item-two">
                        <img src="assets/img/icon/certification.png" alt="cloud certification">
                        <p>By gaining CCSK training and certificate, you will meet the prerequisites required for other advanced Cloud Security certification exams.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--/Why CCSK Training sec end-->

    <!--course benifits sec start-->
    <section id="benefits">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>CCSK Course Benefits</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <img src="assets/img/benifit.png" alt="ccsk benifits" class="img-fluid">
                </div>
            </div>
            <div class="mt-4 text-center">
                <a href="#demo_me_phone_f" class="ccskBtn">
                    Get Certified Now
                </a>
            </div>
        </div>
    </section>
    <!--/course benifits sec end-->

    <!--/advisor sec start-->
    <section class="advisor-sec" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Our Course Advisor</h2>
                </div>
            </div>

            <div class="pb-3 w-100 swiper advisorSwiper">
                <div class="swiper-wrapper mt-4 mt-lg-5">
                    <div class="swiper-slide"> 
                        <div class="item">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2020/12/rishabh-png.png" alt="Rishabh Kotiyal|infosectrain">
                            <div>
                                <h4> Rishabh Kotiyal </h4>
                                <span>10+ Years Of Experience</span>
                                <span>Cloud Security Consultant & Trainer</span>
                                <p>
                                     Course and training were excellent. The Training methodology incorporated by InfoSec Train 
                                     helped me to understand the concepts effectively. Looking forward to experiencing more such 
                                     learning experiences with this team!  
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide"> 
                        <div class="item">
                            <img src="assets/img/rajev.png" alt=" Rajeev|infosectrain">
                            <div>
                                <h4> Rajeev </h4>
                                <span>14+ Years Of Experience</span>
                                <span>  CISSP | CCSP | C-CISO | CCIE (R & S) | CCSK | CEH | ECSA | AWS</span>
                                <p>
                                    14+ years of experience as an Information Security Analyst with a demonstrated history of working 
                                    in Security World for Various Organization in Security Testing & Management. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!--/advisor ec end-->

    <!--/testimonial sec start-->
    <section class="testimonial-sec" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>words of price</h2>
                </div>
            </div>
            
            <div class="pb-4 w-100 swiper testimonial">
                <div class="swiper-wrapper mt-4 mb-4 mb-lg-0 mt-lg-5">
                    <div class="swiper-slide"> 
                        <div class="item">
                            <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/red-star5.png" alt="ccsk review|infosectrain">
                            <p>
                                It was well planned sessions. The course materials and the hands-on experience add value to the certification choosen  
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/Garima-150x150.jpg" alt="Garima Sharma">
                                <h4> Garima Sharma </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide"> 
                        <div class="item">
                            <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/red-star5.png" alt="ccsk review|infosectrain">
                            <p>
                                I really enjoyed this class and the format it was presented in. I would strongly recommend my colleagues to go through the CCSK training from infosectrain.  
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/sukanya-150x150.jpg" alt="Sukanya Acharya">
                                <h4>Sukanya Acharya</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide"> 
                        <div class="item">
                            <img src="https://www.infosectrain.com/wp-content/themes/Divi/assets/images/red-star5.png" alt="ccsk review|infosectrain">
                            <p>
                                Experience was very good and helpful for my professional career. Thanks to the trainer who made it more interesting.  
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/Ashwini-150x150.jpg" alt="Ashwini A ">
                                <h4> Ashwini A  </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!--/testimonial sec end-->

    <!--/faq sec start-->
    <section class="faq-sec" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="item">
                        <img src="assets/img/faq.png" alt="ccsk faq" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="item">
                        <button class="accordion">What is Cloud Security?</button>
                        <div class="panel">
                            <p>
                            Cloud Security entails the security measures and actions taken to protect cloud infrastructures, applications and data from unauthorized access or use, malware, hackers and cyber-attacks. 
                            </p>
                        </div>

                        <button class="accordion">What is CCSK?</button>
                        <div class="panel">
                            <p>
                                Certificate of Cloud Security Knowledge or CCSK is a certification exam offered by Cloud Security Alliance (CSA). It validates the foundational knowledge of cloud and cloud security and is a great starting point for those looking to begin their careers in cloud or security.
                            </p>
                        </div>

                        <button class="accordion">Why go for CCSK Training?</button>
                        <div class="panel">
                            <p>The CCSK training and certification helps gain expertise in:</p>
                            <ul>
                                <li>Validating skills acquired through experience in the cloud security</li>
                                <li>
                                Authenticating h tf,bz,zfmgnmgnnmbm,mtechnical understanding, competency, and proficiency in effectively developing holistic cloud security programs adhering to globally accepted standards
                                </li>
                                <li>
                                Gaining a competitive edge over uncertified candidates for promising and rapidly growing cloud security domain
                                </li>
                                <li>
                                Accessing valuable career enhancement resources including exchange of ideas, tools, and networking with peers
                                </li>
                            </ul>
                        </div>

                        <button class="accordion">Who is the target audience for CCSK?</button>
                        <div class="panel">
                            <p>The Certificate of Cloud Security Knowledge training course is highly recommended for:</p>
                            <ul>
                                <li>IT auditors</li>
                                <li>IT professionals intending to excel their career opportunities with cloud security skills</li>
                            </ul>
                        </div>

                        <button class="accordion">What are the prerequisites needed to go for CCSK certification?</button>
                        <div class="panel">
                            <p>
                            CCSK has no experience requirements. However, basic understanding of various security fundamentals including firewalls, encryption, identity management and secure development is recommended.
                            </p>
                        </div>

                        <button class="accordion">What is the difference between CCSK and CCSP?</button>
                        <div class="panel">
                            <p>
                            CCSK Plus is a great beginner-level certification for those looking to enter the world of cloud security. Whereas, CCSP is an intermediate to advanced level certification for cloud security experienced personnel.
                            </p>
                            <p>
                            CCSK is conducted by Cloud Security Alliance (CSA) whereas CCSP is a certification by ISC2 organized in collaboration with CSA.
                            </p>
                        </div>

                        <button class="accordion">What is the exam pattern of CCSK?</button>
                        <div class="panel">
                            <p>
                                CCSK certification is an online exam with 60 multiple choice questions to be completed in 90 minutes. 
                            </p>
                        </div>

                        <button class="accordion">What are the job roles associated with CCSK?</button>
                        <div class="panel">
                            <p>
                            Cloud security engineer, Cloud engineer, Cloud architect, Cybersecurity Manager, Cloud Security Manager.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
            <a href="#demo_me_phone_f" class="ccskBtn">
                Request More Information
            </a>
            </div>
        </div>
    </section>
    <!--/faq sec end-->

    <!--/ free demo sec-->
    <section class="free-demo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="item">
                        <img src="assets/img/person.png" alt="ccsk person" class="img-fluid d-block m-auto rounded">
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0 text-center text-md-start">
                    <div class="item">                     
                        <h2>Still confused?</h2> 
                        <p>Get in touch with our Course Advisors for a</p>
                        <a href="#demo_me_phone_f" class="ccskBtn">FREE DEMO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ free demo sec-->
</main>
<!--/footer sec start-->
    <footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="item">
                        <h4>About Infosec Train</h4>
                        <p>
                            Infosec Train Offers Complete Training And Consulting Solutions To Its Customers Globally. 
                            Whether The Requirements Are Technical Services, Certification Or Custom Training, Infosec 
                            Train Has Consistently Delivered The Highest Quality And Best Success Rates In The Industry.
                        </p>
                        <br>
                        <p>All rights reserved. © 2023, Infosec Train</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="item">
                        <h4>Quick Contact</h4>
                        <ul>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=918767256840&text=" target="_blank"><img src="assets/img/icon/whtsapp.png" alt=""> 87672-56840</a>
                            </li>
                            <li>
                                <a href="tel:18008437890"><img src="assets/img/icon/call.png" alt="">  1800-843-7890 (IND)</a>
                            </li>
                            <li>
                                <a href="tel:+16572211127"><img src="assets/img/icon/call.png" alt=""> +1 657-221-1127 (USA)</a>
                            </li>
                            <li>
                                <a href="+971564236252"><img src="assets/img/icon/call.png" alt=""> +971 564 23 6252 (UAE)</a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/icon/gmail.png" alt=""> sales@infosectrain.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="item">
                        <h4>Corporate Office</h4>
                        <p>Bangalore</p>
                        <p>
                            1st Floor, Pine Valley Building, <br>
                            Embassy Golf Links,<br>
                            Off Intermediate Ring Road,<br>
                            Bangalore, 560071, India
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!--/footer sec start-->

<!--/footer fixed-->
<div class="footer-fixed">
    <div class="container">
        <div class="row">
            <div class="col-12 d-md-block d-none">
                <div class="d-flex align-items-center justify-content-md-center">
                    <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=918767256840&text=" target="_blank"> <img src="assets/img/icon/whtsapp.png" alt=""> whatsapp</a></li>
                        <li><a href="#demo_me_phone_f"> <img src="assets/img/icon/call.png" alt=""> For Career Assistance</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 d-md-block d-md-none">
                <div class="d-flex align-items-center justify-content-md-center">
                    <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=918767256840&text="> <img src="assets/img/icon/whtsapp.png" alt=""> </a></li>
                        <li><a href="#demo_me_phone_f"> <img src="assets/img/icon/call.png" alt=""> For Career Assistance</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/footer fixed end-->
<!--/topup button-->
<img src="assets/img/icon/arrow.png" alt="" class="topupBtn" onclick="topFunction()">
<!--/topup button end-->
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

<!--/js start-->
<script src="assets/js//bootstrap.bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/common.min.js"></script>
<!--/js end-->
<script>

     //slider start
    var swiper = new Swiper(".advisorSwiper",{
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
        spaceBetween: 30,
      },
    },
  });

  var swiper = new Swiper(".benifitSwiper",{
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
        spaceBetween: 30,
      },
      992: {
        slidesPerView:4,
        spaceBetween: 30,
      },
    },
  });


  var swiper = new Swiper(".testimonial", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
      640: {
        slidesPerView:1,
        spaceBetween: 30,
      },
      768: {
        slidesPerView:2,
        spaceBetween: 30,
      },
      992: {
        slidesPerView:3,
        spaceBetween: 30,
      },
    },
    });

    //table display without data
   let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
    }
    </script>
</script>
</html>