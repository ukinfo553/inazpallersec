<?php include('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISO Lead Auditor Training and Certification course</title>
    <meta name="robots" content="noindex, nofollow" />
    <!---style link start-->
        <link rel="stylesheet" href="assests/css/bootstrap.min.css">
        <link rel="stylesheet" href="assests/css/style.css?v=1.1">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="assests/css/swiper-bundle.min.css">
        <link href="assets/css/style.min.css?v=1.1" rel="stylesheet">
    <!---style link end-->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    .joinchat__button{display: none!important;}
    </style>

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
<!---scrollnavbar start---->
<nav class="bg-white navbar navbar-expand-lg px-sm-4 px-2 d-none scrollNav">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/Infosectrain-logo.png" alt="Infosectrain" class="img-fluid">
          </a>
          <a href="#" class="d-lg-none ms-auto">
            <img src="img/whatsapp.png" alt="" class="img-fluid whatsappCall">
          </a>
          <img src="img/icon/menu.svg" alt="" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#overview">overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#course">course content</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#training-calendar">Training Calendar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#trainer">trainers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#reviews">reviews</a>
              </li>
            </ul>
          </div>
          <a href="https://api.whatsapp.com/send?phone=918767256840&amp;text=" class="d-none d-lg-block" target="_blank">
            <img src="img/whatsapp.png" alt="" class="img-fluid ms-4 whatsappCall">
          </a>
    </div>
</nav>
<!--scrollnavbar end-->

<!--header start-->
<header>
    <!---navbar start---->
        <nav class="container bg-white navbar navbar-expand-lg px-sm-4 px-4 mobileNav">
          <a class="navbar-brand" href="#">
            <img src="img/Infosectrain-logo.png" alt="" class="img-fluid">
          </a>
          <a href="#" class="d-lg-none ms-auto">
            <img src="img/whatsapp.png" alt="" class="img-fluid whatsappCall">
          </a>
          <img src="img/icon/menu.svg" alt="" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#overview">overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#course">course content</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#training-calendar">Training Calendar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#trainer">trainers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#reviews">reviews</a>
              </li>
            </ul>
          </div>
          <a href="https://api.whatsapp.com/send?phone=918767256840&amp;text=" class="d-none d-lg-block" target="_blank">
            <img src="img/whatsapp.png" alt="" class="img-fluid ms-4 whatsappCall">
          </a>
        </nav>
    <!--navbar end-->
    <!--banner sec start-->
    <div class="container py-5" id="free_demo">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-6" data-aos="fade-up">
                <div class="banner-item">
                    <p>Become an expert in</p>
                    <h1 class="py-3">ISO 27001 Lead Auditor <br> Training & Certification </h1>
                    <p>
                        Any management system’s success depends on effective auditing. As a result, it encompasses a great deal of responsibility,
                        difficulty, and complexity. The participants in this five-day intensive course are prepared for the ISO 27001
                        qualification process.
                    </p>
                    <img src="img/iso-accreditation.png" alt="iso-accreditation" style="width:320px;" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-md-5 mt-4 m-md-0" data-aos="fade-up">
                <div class="card py-3 px-lg-4 formCard">
                    <div class="card-body">
                        <div class="text-center mb-4 h4 text-white">
                            Get a Free Demo Class
                        </div>
                        <div class="hide rows  mt-2" id="demo_form_output">  </div>
                        <form class="rows  clearfix" method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f" >
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Enter Name" id="me_name"  name="me_name">
                                <div class="form-control-feedback"> </div>
                            </div>
                            <div class="mb-3">
                                    <input type="email" class="form-control" name="me_email" id="me_email"  placeholder="Email">
                                    <div class="form-control-feedback"> </div>
                            </div>
                            <div class="mb-3">
                                    <input type="tel" class="form-control" placeholder="Phone" name="me_phone" value="" id="me_phone">
                                    <div class="form-control-feedback"> </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" id="me_message" name="me_message"   placeholder="Comment"></textarea>
                                <div class="form-control-feedback"> </div>
                            </div>
                            <div class="mb-3">
                                <input type="hidden"   value="<?php echo BASE_URL;?>thank-you.php" id="me_redirect"  >
                                <input type="hidden"   value="ISO 27001 Lead Auditor Training & Certification" id="me_others" name="me_others"  >
                                <input type="hidden"   value="<?php echo $pag_url;?>" id="me_pageurl"  >
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="lndBtn" name="me_submited" id="me_submited" value="submited">Reserve Your Seat Now</button>
                                <div class="loading_w hide" id="loading_w"><img src="<?php echo BASE_URL; ?>img/loader.gif"/></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---banner sec end---->
</header>
<!--header end--->

<!--content body start-->
<main>

    <section>
        <div class="container">
            <h3 class="text-center">Package inclusive of:</h3>
            <div class="row">
                <div class="col-lg-4 col-sm-6 px-md-3 mt-md-5 mt-3" data-aos="fade-up">
                    <div class="d-flex packageItem">
                        <div class="flex-shrink-0">
                            <img src="img/icon/training.png" alt="training" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-sm-5 ms-2">
                            <h6>40 hrs of instructor-led training</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 px-md-3 mt-md-5 mt-3" data-aos="fade-up">
                    <div class="d-flex packageItem">
                        <div class="flex-shrink-0">
                             <img src="img/icon/mock_test.png" alt="mock test" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-sm-5 ms-2">
                            <h6>Mock Test and exam guidance session</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 px-md-3 mt-md-5 mt-3" data-aos="fade-up">
                    <div class="d-flex packageItem">
                        <div class="flex-shrink-0">
                            <img src="img/icon/partner.png" alt="partner" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-sm-5 ms-2">
                            <h6>Official Curriculum</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 px-md-3 mt-md-5 mt-3" data-aos="fade-up">
                    <div class="d-flex packageItem">
                        <div class="flex-shrink-0">
                            <img src="img/icon/ISO_27001.png" alt="ISO 27001" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-sm-5 ms-2">
                            <h6>Practical approach for ISO 27001 Audit</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 px-md-3 mt-md-5 mt-3" data-aos="fade-up">
                    <div class="d-flex packageItem">
                        <div class="flex-shrink-0">
                            <img src="img/icon/certified_trainers.png" alt="certified_trainers" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-sm-5 ms-2">
                            <h6>Certified & Experienced Trainers</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 px-md-3 mt-md-5 mt-3" data-aos="fade-up">
                    <div class="d-flex packageItem">
                        <div class="flex-shrink-0">
                            <img src="img/icon/pecb.png" alt="pecb" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-sm-5 ms-2">
                            <h6>PECB offer free retake for exams</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--why iso sec start-->
    <section style="background: #ffffff;">
        <div class="container">
            <h3 class="text-center">Why ISO 27001 LA with InfosecTrain?</h3>
            <div class="row align-items-center justify-content-around">
                <div class="col-lg-3 col-md-4" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-12 col-6 mt-md-5 mt-3">
                            <div class="why-item">
                            Authorized Training Partner
                            </div>
                        </div>
                        <div class="col-md-12 col-6 mt-md-5 mt-3">
                            <div class="why-item">
                               Post Training Support
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mt-5" data-aos="zoom-in">
                    <img src="img/ISO_27001.png" alt="ISO 27001" class="img-fluid d-block m-auto">
                </div>
                <div class="col-lg-3 col-md-4 mt-4" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-12 col-6 mt-md-5 mt-3">
                            <div class="why-item">
                                Tailor Made Training
                            </div>
                        </div>
                        <div class="col-md-12 col-6 mt-md-5 mt-3">
                            <div class="why-item">
                                Flexible Schedule
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--why iso sec end--->

    <!--about sec start-->
    <section class="position-relative"  style="background: #ffffff;" id="overview">
        <!-- style="background: linear-gradient(5.25deg, #A0A0A0 -17.32%, #F8BDBD -7.86%, #FFCECE -0.36%, #EFEFEF 65.97%, #FBFBFB 79.86%, #FBFBFB 79.87%, #FFF4F4 79.88%);" -->
        <!-- <img src="img/Vector.png" alt="" class="aboutbg"> -->
        <div class="container" style="z-index: 1;">
            <div class="row">
                <div class="col-lg-6 about-item" data-aos="fade-up">
                    <h2>ABOUT ISO 27001 LA</h2>
                    <p>
                        Any management system’s success depends on effective auditing. As a result, it involves a great deal of responsibility and challenges. InfosecTrain’s ISO 27001:2022 Lead Auditor training and certification course is a five-day intensive course to inculcate in participants the knowledge to perform an Information Security Management System (ISMS) audit by employing recommended audit fundamentals, principals, procedures, and methodologies.
                    </p>
                    <p class="mb-5">
                        Our course curriculum is aligned with the latest changes in ISO 27001 (from ISO 27001:2013 to ISO 27001:2022) that will teach participants all they need to know about audit principles, preparation, and initiation. During this training, participants will acquire the skills necessary to manage an internal audit program effectively, document audit findings, close the audit, evaluate action plans, and understand the impact of trends and technology in auditing, risk-based auditing, evidence-based auditing, and the beginning of the audit process. The participants will acquire the expertise needed to conduct an audit successfully based on practical exercises.
                    </p>
                    <a href="#free_demo" class="lndBtn">need more information</a>
                </div>
                <div class="col-lg-6 mt-5 m-lg-0 about-item" data-aos="fade-up">
                    <!-- <h3 class="text-center">ISO 27001 History</h3> -->
                     <img src="img/ISO_27001_history.png" alt="ISO 27001 history" class="img-fluid d-block m-auto">
                </div>
            </div>
        </div>

        <img src="img/Vector.png" alt="Vector" style="position: absolute;bottom:0;width:100%;">
    </section>
    <!--about sec end-->

    <!--ISO/IEC 27001 LA TRAINING CALENDAR-->
    <?php /*?><section id="table_section">

    <div  class="container" id="benefits">
            <h3 class="text-center">ISO/IEC 27001 LA TRAINING CALENDAR</h3>
            <div class="row mt-5">
            <div class="col-12 d-none d-lg-block">



            <?php
$url = "https://www.infosectrain.com/api/30781/href_toscroll/free_demo";


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
    </section><?php */?>
    <!--ISO/IEC 27001 LA TRAINING CALENDAR end-->

    <section id="table_section">

    <div  class="container" id="training-calendar">
        <div class="row">
            <div class="col-12">
               <h2 class="package-heading">TRAINING CALENDAR</h2>
            </div>
        </div>

    <div class="row">
      <div class="col-12">

<?php
$url = "https://www.infosectrain.com/api/30781/href_toscroll/free_demo";


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


    <!--benifits sec start-->
    <section class="bnfsec">
        <div class="container">
            <h3 class="text-center">ISO/IEC 27001 Course Benefits</h3>
            <div class="row">
                <div class="col-md-6 mt-md-5 mt-1" data-aos="fade-up">
                    <div class="d-flex align-items-center benifits-item">
                        <div class="flex-shrink-0">
                            <img src="img/benifits/Course_Benefits_one.png" alt="Course Benefits" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-lg-5 ms-md-3 ms-1">
                            <h6>52%</h6>
                            <p>
                                Characterize certifying to
                                ISO/IEC 27001 as an <br> investment
                                that is fully justified by <br> the benefits.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-5 mt-1" data-aos="fade-up">
                    <div class="d-flex align-items-center benifits-item">
                        <div class="flex-shrink-0">
                            <img src="img/benifits/Course_Benefits_two.png" alt="Course Benefits" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-lg-5 ms-md-3 ms-1">
                            <h6>56%</h6>
                            <p>
                                To get a competitive <br> advantage
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ps-md-5">
                <div class="col-md-6 mt-1" data-aos="fade-up">
                    <div class="d-flex align-items-center benifits-item">
                        <div class="flex-shrink-0">
                            <img src="img/benifits/Course_Benefits_four.png" alt="Course Benefits" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-lg-5 ms-md-3 ms-1">
                            <h6>69%</h6>
                            <p>
                                To inhance the information <br> security posture
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-1" data-aos="fade-up">
                    <div class="d-flex align-items-center benifits-item">
                        <div class="flex-shrink-0">
                             <img src="img/benifits/Course_Benefits_five.png" alt="Course Benefits" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-lg-5 ms-md-3 ms-1">
                            <h6>55%</h6>
                            <p>
                                To assure legal and <br> regulatory compliances
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--benifits sec end-->

    <!--lead auditor sec start-->
    <section>
        <div class="container d-none d-lg-block" id="course">
            <div class="row">
                <div class="col text-center">
                    <h3>ISO/IEC 27001 Lead Auditor</h3>
                    <span class="h4 fw-bold">Course Content / Exam(s)</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-around">
                    <button class="auditorbtn tablinks" onClick="openTab(event, 'auditor2')" id="defaultOpen">Course Objectives</button>
                    <button class="auditorbtn tablinks" onClick="openTab(event, 'auditor3')">Target Audience</button>
                    <button class="auditorbtn tablinks" onClick="openTab(event, 'auditor4')">Pre-requisites</button>
                    <button class="auditorbtn tablinks" onClick="openTab(event, 'auditor5')">Exam Information</button>
                    <button class="auditorbtn tablinks" onClick="openTab(event, 'auditor6')">Course Content</button>
                    <a href="https://www.infosectrain.com/wp-content/uploads/2018/12/ISO_27001_2022_Lead_Auditor_course_content_v1.pdf" download class="auditorbtn" target="_blank">Download Syllabus</a>
                </div>

                <div class="col-12 auditorItem" id="auditor2">
                    <ul>
                        <li>Fundamental concepts and principles of information security</li>
                        <li>ISO/IEC 27001 certification process</li>
                        <li>Information Security Management System (ISMS)</li>
                        <li>The ISO/IEC 27000 family of standards</li>
                        <li>Advantages of ISO/IEC 27001</li>
                        <li>Fundamental of information and assets</li>
                        <li>Fundamental principles of information security confidentiality, integrity, and availability</li>
                        <li>Preparation of an ISO/IEC 27001 certification audit</li>
                        <li>ISMS documentation audit</li>
                        <li>Big data, artificial intelligence, machine learning, and cloud computing</li>
                        <li>Auditing outsourced operations</li>

                        <li>Communication during the audit</li>
                        <li>Audit procedures: observation, document review, interview, sampling techniques, technical verification, corroboration, and evaluation</li>
                        <li>Audit test plans</li>
                        <li>Formulation of audit findings</li>
                        <li>Audit approach based on risk</li>
                        <li>Drafting a nonconformity report</li>
                        <li>Audit documentation</li>
                        <li>Quality review</li>
                        <li>Conducting a closing meeting and conclusion of an ISO/IEC 27001 audit</li>
                        <li>Evaluation of corrective action plans</li>
                        <li>Establishing contact with the auditee</li>
                        <li>Internal audit management program</li>
                    </ul>
                </div>
                <div class="col-12 auditorItem" id="auditor3">
                    <ul>
                        <li>Internal Auditors</li>
                        <li>Auditors wanting to perform and lead ISMS certification audits</li>
                        <li>Project Managers or Consultants wanting to master the ISMS audit process</li>
                        <li>CxO and Senior Managers responsible for the IT governance of an enterprise and the management of its risks</li>
                        <li>Members of an information security team</li>
                        <li>Expert advisors in information technology</li>
                        <li>Expert advisors in information security</li>
                        <li>Technical experts wanting to prepare for an information security audit function</li>
                    </ul>
                </div>
                <div class="col-12 auditorItem" id="auditor4">
                    <p>We provide Exam with PECB for more detail connect with our expert</p>
                </div>
                <div class="col-12 auditorItem" id="auditor5">
                    <p>We provide Exam with PECB for more detail connect with our expert</p>
                </div>
                <div class="col-12 auditorItem" id="auditor6" style="height: 50vh;overflow-y:scroll;">
                    <p><strong> </strong><strong>Section 1: Training course objectives and structure </strong></p>
                    <ul>
                        <li>General information</li>
                        <li>Learning objectives</li>
                        <li>Educational approach</li>
                        <li>Examination and certification<strong> </strong></li>
                    </ul>
                    <p><strong>Section 2: Standards and regulatory frameworks </strong></p>
                    <ul>
                        <li>What is ISO?</li>
                        <li>The ISO/IEC 27000 family of standards</li>
                        <li>Advantages of ISO/IEC 27001</li>
                    </ul>
                    <p><strong>Section 3: Certification process </strong></p>
                    <ul>
                        <li>Certification process</li>
                        <li>Certification scheme</li>
                        <li>Accreditation bodies</li>
                        <li>Certification bodies</li>
                    </ul>
                    <p><strong>Section 4: Fundamental concepts and principles of information security </strong></p>
                    <ul>
                        <li>Information and asset</li>
                        <li>Information security</li>
                        <li>Confidentiality, integrity, and availability</li>
                        <li>Vulnerability, threat, and impact</li>
                        <li>Information security risk</li>
                        <li>Security controls and control objectives</li>
                        <li>Classification of security controls</li>
                    </ul>
                    <p><strong>Section 5: Information security management system (ISMS) </strong></p>
                    <ul>
                        <li>Definition of a management system</li>
                        <li>Definition of ISMS</li>
                        <li>Process approach</li>
                        <li>ISMS implementation</li>
                        <li>Overview &#8211; Clauses 4 to 10</li>
                        <li>Overview &#8211; Annex A</li>
                        <li>Statement of Applicability<strong> </strong></li>
                    </ul>
                    <p><strong>Audit principles, preparation, and initiation of an audit</strong><strong> </strong></p>
                    <p><strong>Section 6: Fundamental audit concepts and principles </strong></p>
                    <ul>
                        <li>Audit standards</li>
                        <li>What is an audit?</li>
                        <li>Types of audits</li>
                        <li>Involved parties</li>
                        <li>Audit objectives and criteria</li>
                        <li>Combined audit</li>
                        <li>Principles of auditing</li>
                        <li>Competence and evaluation of auditors<strong> </strong></li>
                    </ul>
                    <p><strong>Section 7: The impact of trends and technology in auditing </strong></p>
                    <ul>
                        <li>Big data</li>
                        <li>The three V’s of big data</li>
                        <li>The use of big data in audits</li>
                        <li>Artificial intelligence</li>
                        <li>Machine learning</li>
                        <li>Cloud computing</li>
                        <li>Auditing outsourced operations<strong> </strong></li>
                    </ul>
                    <p><strong>Section 8: Evidence-based auditing </strong></p>
                    <ul>
                        <li>Audit evidence</li>
                        <li>Types of audit evidence</li>
                        <li>Quality and reliability of audit evidence</li>
                    </ul>
                    <p><strong>Section 9: Risk-based auditing </strong></p>
                    <ul>
                        <li>Audit approach based on risk</li>
                        <li>Materiality and audit planning</li>
                        <li>Reasonable assurance</li>
                    </ul>
                    <p><strong>Section 10: Initiation of the audit process </strong></p>
                    <ul>
                        <li>The audit offer</li>
                        <li>The audit team leader</li>
                        <li>The audit team</li>
                        <li>Audit feasibility</li>
                        <li>Audit acceptance</li>
                        <li>Establishing contact with the auditee</li>
                        <li>The audit schedule</li>
                    </ul>
                    <p><strong>Section 11: Stage 1 audit </strong></p>
                    <ul>
                        <li>Objectives of the stage 1 audit</li>
                        <li>Pre on-site activities</li>
                        <li>Preparing for on-site activities</li>
                        <li>Conducting on-site activities</li>
                        <li>Documenting the outputs of stage 1 audit<strong> </strong></li>
                    </ul>
                    <p><strong>On-site audit activities</strong><strong> </strong></p>
                    <p><strong>Section 12: Preparing for stage 2 audit </strong></p>
                    <ul>
                        <li>Setting the audit objectives</li>
                        <li>Planning the audit</li>
                        <li>Assigning work to the audit team</li>
                        <li>Preparing audit test plans</li>
                        <li>Preparing documented information for the audit</li>
                    </ul>
                    <p><strong>Section 13: Stage 2 audit </strong></p>
                    <ul>
                        <li>Conducting the opening meeting</li>
                        <li>Collecting information</li>
                        <li>Conducting audit tests</li>
                        <li>Determining audit findings and nonconformity reports</li>
                        <li>Performing a quality review</li>
                    </ul>
                    <p><strong>Section 14: Communication during the audit </strong></p>
                    <ul>
                        <li>Behavior during on-site visits</li>
                        <li>Communication during the audit</li>
                        <li>Audit team meetings</li>
                        <li>Guides and observers</li>
                        <li>Conflict management</li>
                        <li>Cultural aspects</li>
                        <li>Communication with the top management</li>
                    </ul>
                    <p><strong>Section 15: Audit procedures </strong></p>
                    <ul>
                        <li>Overview of the audit process</li>
                        <li>Evidence collection and analysis procedures</li>
                        <li>Interview</li>
                        <li>Documented information review</li>
                        <li>Observation</li>
                        <li>Analysis</li>
                        <li>Sampling</li>
                        <li>Technical verification</li>
                    </ul>
                    <p><strong>Section 16: Creating audit test plans </strong></p>
                    <ul>
                        <li>Audit test plans</li>
                        <li>Examples of audit test plans</li>
                        <li>Guidance for auditing an ISMS</li>
                        <li>Corroboration</li>
                        <li>Evaluation</li>
                        <li>Auditing virtual activities and locations<strong> </strong></li>
                    </ul>
                    <p><strong>Closing of the audit</strong><strong> </strong></p>
                    <p><strong>Section 17: Drafting audit findings and nonconformity reports </strong></p>
                    <ul>
                        <li>Audit findings</li>
                        <li>Types of possible audit findings</li>
                        <li>Documenting the audit findings</li>
                        <li>Drafting a nonconformity report</li>
                        <li>The principle of the benefit of the doubt</li>
                    </ul>
                    <p><strong>Section 18: Audit documentation and quality review</strong></p>
                    <ul>
                        <li>Work documents</li>
                        <li>Quality review</li>
                    </ul>
                    <p><strong>Section 19: Closing of the audit </strong></p>
                    <ul>
                        <li>Determining audit conclusions</li>
                        <li>Discussing audit conclusions</li>
                        <li>Closing meeting</li>
                        <li>Preparing audit report</li>
                        <li>Distributing the audit report</li>
                        <li>Making the certification decision</li>
                        <li>Closing the audit</li>
                    </ul>
                    <p><strong>Section 20: Evaluation of action plans by the auditor </strong></p>
                    <ul>
                        <li>Submission of action plans by the auditee</li>
                        <li>Content of action plans</li>
                        <li>Evaluation of action plans</li>
                    </ul>
                    <p><strong>Section 21: Beyond the initial audit </strong></p>
                    <ul>
                        <li>Audit follow-up activities</li>
                        <li>Surveillance activities</li>
                        <li>Recertification audit</li>
                        <li>Use of trademarks</li>
                    </ul>
                    <p><strong>Section 22: Managing an internal audit program </strong></p>
                    <ul>
                        <li>Managing an audit program</li>
                        <li>Role of the internal audit function</li>
                        <li>Main internal audit services and activities</li>
                        <li>Audit program resources</li>
                        <li>Audit program records</li>
                        <li>Follow up on nonconformities</li>
                        <li>Monitoring, evaluating, reviewing, and improving an audit program</li>

                    </ul>
                    <p><strong>The above-mentioned content is delivered in 32 hours. In addition to this, we have added 8 hours
                            session.</strong></p>
                    <p><strong>8hrs dedicated session</strong></p>
                    <p><strong>ISO 27001 Practical Approach</strong></p>
                    <ul>
                        <li>ISO 27001 (new 93 controls) Controls to Evidence Mapping</li>
                        <li>Practical approach on how to collect evidence while auditing with three scenarios/ case studies paragraphs</li>
                    </ul>
                    <p><strong> </strong><strong>ISO 27001 Exam Prep</strong></p>
                    <ul>
                        <li>Revision of course and open mic session for doubts</li>
                        <li>Exam Prep – mock exam</li>
                        <li>Discussion on exam questions and answers</li>
                        <li>Discussion on different exams (TUV/IGC/PECB)</li>
                    </ul>
                </div>
            </div>
        </div>

           <!--LEAD AUDITOR MOBLE SEC START-->
           <div class="container d-lg-none" id="course">

            <!--accordion item start-->
            <div class="accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                        Course Objectives
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <ul>
                            <li>Fundamental concepts and principles of information security</li>
                            <li>ISO/IEC 27001 certification process</li>
                            <li>Information Security Management System (ISMS)</li>
                            <li>The ISO/IEC 27000 family of standards</li>
                            <li>Advantages of ISO/IEC 27001</li>
                            <li>Fundamental of information and assets</li>
                            <li>Fundamental principles of information security confidentiality, integrity, and availability</li>
                            <li>Preparation of an ISO/IEC 27001 certification audit</li>
                            <li>ISMS documentation audit</li>
                            <li>Big data, artificial intelligence, machine learning, and cloud computing</li>
                            <li>Auditing outsourced operations</li>

                            <li>Communication during the audit</li>
                            <li>Audit procedures: observation, document review, interview, sampling techniques, technical verification, corroboration, and evaluation</li>
                            <li>Audit test plans</li>
                            <li>Formulation of audit findings</li>
                            <li>Audit approach based on risk</li>
                            <li>Drafting a nonconformity report</li>
                            <li>Audit documentation</li>
                            <li>Quality review</li>
                            <li>Conducting a closing meeting and conclusion of an ISO/IEC 27001 audit</li>
                            <li>Evaluation of corrective action plans</li>
                            <li>Establishing contact with the auditee</li>
                            <li>Internal audit management program</li>
                        </ul>
                    </div>
                  </div>
                </div>
            </div>
            <!--accordion item end-->
            <!--accordion item start-->
            <div class="accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true">
                        Target Audience
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <ul>
                            <li>Internal Auditors</li>
                            <li>Auditors wanting to perform and lead ISMS certification audits</li>
                            <li>Project Managers or Consultants wanting to master the ISMS audit process</li>
                            <li>CxO and Senior Managers responsible for the IT governance of an enterprise and the management of its risks</li>
                            <li>Members of an information security team</li>
                            <li>Expert advisors in information technology</li>
                            <li>Expert advisors in information security</li>
                            <li>Technical experts wanting to prepare for an information security audit function</li>
                        </ul>
                    </div>
                  </div>
                </div>
            </div>
            <!--accordion item end-->
            <!--accordion item start-->
            <div class="accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true">
                        Pre-requisites
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p>We provide Exam with PECB for more detail connect with our expert</p>
                    </div>
                  </div>
                </div>
            </div>
            <!--accordion item end-->
            <!--accordion item start-->
            <div class="accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true">
                        Exam Information
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p>We provide Exam with PECB for more detail connect with our expert</p>
                    </div>
                  </div>
                </div>
            </div>
            <!--accordion item end-->
            <!--accordion item start-->
            <div class="accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true">
                        Course Content
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" style="height: 40vh;overflow-y: scroll;">
                    <div class="accordion-body">
                        <p><strong> </strong><strong>Section 1: Training course objectives and structure </strong></p>
                        <ul>
                            <li>General information</li>
                            <li>Learning objectives</li>
                            <li>Educational approach</li>
                            <li>Examination and certification<strong> </strong></li>
                        </ul>
                        <p><strong>Section 2: Standards and regulatory frameworks </strong></p>
                        <ul>
                            <li>What is ISO?</li>
                            <li>The ISO/IEC 27000 family of standards</li>
                            <li>Advantages of ISO/IEC 27001</li>
                        </ul>
                        <p><strong>Section 3: Certification process </strong></p>
                        <ul>
                            <li>Certification process</li>
                            <li>Certification scheme</li>
                            <li>Accreditation bodies</li>
                            <li>Certification bodies</li>
                        </ul>
                        <p><strong>Section 4: Fundamental concepts and principles of information security </strong></p>
                        <ul>
                            <li>Information and asset</li>
                            <li>Information security</li>
                            <li>Confidentiality, integrity, and availability</li>
                            <li>Vulnerability, threat, and impact</li>
                            <li>Information security risk</li>
                            <li>Security controls and control objectives</li>
                            <li>Classification of security controls</li>
                        </ul>
                        <p><strong>Section 5: Information security management system (ISMS) </strong></p>
                        <ul>
                            <li>Definition of a management system</li>
                            <li>Definition of ISMS</li>
                            <li>Process approach</li>
                            <li>ISMS implementation</li>
                            <li>Overview &#8211; Clauses 4 to 10</li>
                            <li>Overview &#8211; Annex A</li>
                            <li>Statement of Applicability<strong> </strong></li>
                        </ul>
                        <p><strong>Audit principles, preparation, and initiation of an audit</strong><strong> </strong></p>
                        <p><strong>Section 6: Fundamental audit concepts and principles </strong></p>
                        <ul>
                            <li>Audit standards</li>
                            <li>What is an audit?</li>
                            <li>Types of audits</li>
                            <li>Involved parties</li>
                            <li>Audit objectives and criteria</li>
                            <li>Combined audit</li>
                            <li>Principles of auditing</li>
                            <li>Competence and evaluation of auditors<strong> </strong></li>
                        </ul>
                        <p><strong>Section 7: The impact of trends and technology in auditing </strong></p>
                        <ul>
                            <li>Big data</li>
                            <li>The three V’s of big data</li>
                            <li>The use of big data in audits</li>
                            <li>Artificial intelligence</li>
                            <li>Machine learning</li>
                            <li>Cloud computing</li>
                            <li>Auditing outsourced operations<strong> </strong></li>
                        </ul>
                        <p><strong>Section 8: Evidence-based auditing </strong></p>
                        <ul>
                            <li>Audit evidence</li>
                            <li>Types of audit evidence</li>
                            <li>Quality and reliability of audit evidence</li>
                        </ul>
                        <p><strong>Section 9: Risk-based auditing </strong></p>
                        <ul>
                            <li>Audit approach based on risk</li>
                            <li>Materiality and audit planning</li>
                            <li>Reasonable assurance</li>
                        </ul>
                        <p><strong>Section 10: Initiation of the audit process </strong></p>
                        <ul>
                            <li>The audit offer</li>
                            <li>The audit team leader</li>
                            <li>The audit team</li>
                            <li>Audit feasibility</li>
                            <li>Audit acceptance</li>
                            <li>Establishing contact with the auditee</li>
                            <li>The audit schedule</li>
                        </ul>
                        <p><strong>Section 11: Stage 1 audit </strong></p>
                        <ul>
                            <li>Objectives of the stage 1 audit</li>
                            <li>Pre on-site activities</li>
                            <li>Preparing for on-site activities</li>
                            <li>Conducting on-site activities</li>
                            <li>Documenting the outputs of stage 1 audit<strong> </strong></li>
                        </ul>
                        <p><strong>On-site audit activities</strong><strong> </strong></p>
                        <p><strong>Section 12: Preparing for stage 2 audit </strong></p>
                        <ul>
                            <li>Setting the audit objectives</li>
                            <li>Planning the audit</li>
                            <li>Assigning work to the audit team</li>
                            <li>Preparing audit test plans</li>
                            <li>Preparing documented information for the audit</li>
                        </ul>
                        <p><strong>Section 13: Stage 2 audit </strong></p>
                        <ul>
                            <li>Conducting the opening meeting</li>
                            <li>Collecting information</li>
                            <li>Conducting audit tests</li>
                            <li>Determining audit findings and nonconformity reports</li>
                            <li>Performing a quality review</li>
                        </ul>
                        <p><strong>Section 14: Communication during the audit </strong></p>
                        <ul>
                            <li>Behavior during on-site visits</li>
                            <li>Communication during the audit</li>
                            <li>Audit team meetings</li>
                            <li>Guides and observers</li>
                            <li>Conflict management</li>
                            <li>Cultural aspects</li>
                            <li>Communication with the top management</li>
                        </ul>
                        <p><strong>Section 15: Audit procedures </strong></p>
                        <ul>
                            <li>Overview of the audit process</li>
                            <li>Evidence collection and analysis procedures</li>
                            <li>Interview</li>
                            <li>Documented information review</li>
                            <li>Observation</li>
                            <li>Analysis</li>
                            <li>Sampling</li>
                            <li>Technical verification</li>
                        </ul>
                        <p><strong>Section 16: Creating audit test plans </strong></p>
                        <ul>
                            <li>Audit test plans</li>
                            <li>Examples of audit test plans</li>
                            <li>Guidance for auditing an ISMS</li>
                            <li>Corroboration</li>
                            <li>Evaluation</li>
                            <li>Auditing virtual activities and locations<strong> </strong></li>
                        </ul>
                        <p><strong>Closing of the audit</strong><strong> </strong></p>
                        <p><strong>Section 17: Drafting audit findings and nonconformity reports </strong></p>
                        <ul>
                            <li>Audit findings</li>
                            <li>Types of possible audit findings</li>
                            <li>Documenting the audit findings</li>
                            <li>Drafting a nonconformity report</li>
                            <li>The principle of the benefit of the doubt</li>
                        </ul>
                        <p><strong>Section 18: Audit documentation and quality review</strong></p>
                        <ul>
                            <li>Work documents</li>
                            <li>Quality review</li>
                        </ul>
                        <p><strong>Section 19: Closing of the audit </strong></p>
                        <ul>
                            <li>Determining audit conclusions</li>
                            <li>Discussing audit conclusions</li>
                            <li>Closing meeting</li>
                            <li>Preparing audit report</li>
                            <li>Distributing the audit report</li>
                            <li>Making the certification decision</li>
                            <li>Closing the audit</li>
                        </ul>
                        <p><strong>Section 20: Evaluation of action plans by the auditor </strong></p>
                        <ul>
                            <li>Submission of action plans by the auditee</li>
                            <li>Content of action plans</li>
                            <li>Evaluation of action plans</li>
                        </ul>
                        <p><strong>Section 21: Beyond the initial audit </strong></p>
                        <ul>
                            <li>Audit follow-up activities</li>
                            <li>Surveillance activities</li>
                            <li>Recertification audit</li>
                            <li>Use of trademarks</li>
                        </ul>
                        <p><strong>Section 22: Managing an internal audit program </strong></p>
                        <ul>
                            <li>Managing an audit program</li>
                            <li>Role of the internal audit function</li>
                            <li>Main internal audit services and activities</li>
                            <li>Audit program resources</li>
                            <li>Audit program records</li>
                            <li>Follow up on nonconformities</li>
                            <li>Monitoring, evaluating, reviewing, and improving an audit program</li>
                            <li></li>
                        </ul>
                        <p><strong>The above-mentioned content is delivered in 32 hours. In addition to this, we have added 8 hours
                                session.</strong></p>
                        <p><strong>8hrs dedicated session</strong></p>
                        <p><strong>ISO 27001 Practical Approach</strong></p>
                        <ul>
                            <li>ISO 27001 (new 93 controls) Controls to Evidence Mapping</li>
                            <li>Practical approach on how to collect evidence while auditing with three scenarios/ case studies paragraphs</li>
                        </ul>
                        <p><strong> </strong><strong>ISO 27001 Exam Prep</strong></p>
                        <ul>
                            <li>Revision of course and open mic session for doubts</li>
                            <li>Exam Prep – mock exam</li>
                            <li>Discussion on exam questions and answers</li>
                            <li>Discussion on different exams (TUV/IGC/PECB)</li>
                        </ul>
                    </div>
                  </div>
                </div>
            </div>
            <!--accordion item end-->
            <!--accordion item start-->
            <div class="accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <a href="https://www.infosectrain.com/wp-content/uploads/2018/12/ISO_27001_2022_Lead_Auditor_course_content_v1.pdf" download target="_blank" class="accordion-button fw-normal" type="button">
                        Download Syllabus
                    </a>
                  </h2>
                </div>
            </div>
            <!--accordion item end-->

        </div>
    <!--LEAD AUDITOR MOBLE SEC END-->
    </section>
    <!--lead auditor sec end-->

    <!--looking for sec start-->
    <section style="background: #FE5C5C;" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 lookingsec">
                    <h3>Didn't Find What You're Looking for?</h3>
                    <p>
                        If you didn't find your ideal course or facing any difficulty to choose <br>
                        which course suits you best, we are here to help you.
                    </p>
                    <a href="#free_demo" style="background: #ffff;color: #DF0C0C;" class="lndBtn">contact us</a>
                </div>
            </div>
        </div>
    </section>
    <!--looking for sec end-->

    <!--our advisor sec start-->
    <section id="trainer" class="pb-0">
        <div class="container">
            <h3 class="text-center">Our Course Advisor</h3>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-6">
                    <div class="card py-3 advisor-card h-100">
                        <img src="img/rajesh.png" class="img-fluid m-auto d-block" width="150" height="150" alt="RAJESH SANDHEER">
                        <div class="card-body text-center">
                            <p class="h4 pt-2"> RAJESH SANDHEER</p>
                            <p class="text-muted h6 py-2" style="color:#DF0C0C!important;"> 30+ Years Of Experience</p>
                            <p class="text-muted h6 py-2">  CISA | ISO 27001 LA | GDPR CDPO | CDCS | CDCP</p>
                            <p>
                                Trainer & Process Auditor with more than 30 years of total experience in Security Strategic Operations, Facilities & Critical
                                Infra Management, Project Management, ISO Information Security & Business Continuity Management Systems:
                                Implementation, Auditing & Training; Training & Mentoring – Behavioral & Analytical Skills
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="card py-3 advisor-card h-100">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/12/abhishek.png" width="150" height="150" class="img-fluid m-auto d-block" alt="ABHISHEK SHARMA">
                        <div class="card-body text-center">
                            <p class="h4 pt-2"> ABHISHEK SHARMA</p>
                            <p class="text-muted h6 py-2" style="color:#DF0C0C!important;"> 10+ Years Of Experience</p>
                            <p class="text-muted h6 py-2">  Information Security Corporate Trainer</p>
                            <p>
                            10+ years of experience as an Information Security Consultant and Trainer in delivering training to government and non-government organizations around the globe on different Information security verticals.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our advisor sec end-->

    <!--testimonial sec-->
    <section id="reviews" style="background-image: url('/img/background\ 1.png');background-size: cover;background-position: center center;background-repeat: no-repeat;">
        <div class="container swiper testimonialSwiper">
            <h3 class="text-center">Words of Praise</h3>
            <div class="swiper-wrapper mt-5">
                <div class="swiper-slide">
                    <div class="prise-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/08/abhay-singh-150x150.jpg" alt="Abhay Singh">
                        <h4> Abhay Singh </h4>
                        <div class="country">Kuwait</div>
                        <p>
                        I liked the course. The instructor was able to explain topics clearly and answered questions appropriately. He is also good with time management.
                            <!-- <span data-bs-toggle="collapse" data-bs-target="#priseText">View More</span>
                            <div id="priseText" class="collapse">
                                It was very interactive session with team and lot of group activities.
                            </div> -->
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/07/santosh-kumar-150x150.jpg" alt="Chowduvada Leela Santosh Kumar">
                        <h4>Chowduvada Leela Santosh Kumar</h4>
                        <div class="country">India</div>
                        <p>
                        The sessions helped me a lot to get a complete understanding of the Framework. Even though I have some experience in implementing ISO  there were a lot of unknowns to me and the sessions helped to cover those.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/07/pranav-150x150.jpg" alt="Pranav Prasad">
                        <h4> Pranav Prasad </h4>
                        <div class="country">India</div>
                        <p>
                            The trainer has taken every effort in conveying all knowledge related to ISO 27001. I have been able to understand concepts based on his teaching methods. The classes were interactive and any queries raised were duly answered with explanations. Overall,

                            <div id="priseText3" class="collapse">
                                <p class="p-0 m-0">I enjoyed the past few weeks if the course. Thanks to the Infosec team</p>
                            </div>
                            <span data-bs-toggle="collapse" data-bs-target="#priseText3">View More</span>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/07/subham-dash-150x150.jpg" alt="Subham Dash">
                        <h4> Subham Dash </h4>
                        <div class="country">India</div>
                        <p>
                            I would like to thank InfosecTrain for their assistance. Further, Iwould like to express my gratitude towards the trainer for being so great. His vast experience in the field of audit and knowledge on ISO standards helped me get a firm understanding of ISO
                            <div id="priseText4" class="collapse">
                                <p>
                                    27001 standard. He encouraged all the participants to engage in discussions through which we were able to discuss a concept through multiple lenses. Throughout the sessions he was really patient with all our queries and clarified our doubts by explaining the concepts with very good examples. I would definitely recommend the training session through InfosecTrain if anyone is planning to go for LA/LI certification. Thank you.
                                </p>
                            </div>
                            <span data-bs-toggle="collapse" data-bs-target="#priseText4">View More</span>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="prise-item">
                        <img src="https://www.infosectrain.com/wp-content/uploads/2023/07/anish-islam-150x150.jpg" alt="Anish Ul Islam ">
                        <h4> Anish Ul Islam  </h4>
                        <div class="country">India</div>
                        <p>
                            The entire course was designed precisely and was taught in a professional manner.
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--testimonial end-->

    <!--call us sec start-->
    <section class="bg-white"  data-aos="zoom-in">
        <div class="container p-5" style="background-image:url(img/bann.png);background-size: cover;background-repeat: no-repeat;">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5 d-md-block d-none">
                    <img src="img/man.png" alt="man" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="d-flex align-items-center callus">
                        <div class="flex-shrink-0">
                            <a href="tel:1800-843-7890">
                                <img src="img/icon/mobile_call.png" alt="call" class="img-fluid">
                            </a>
                        </div>
                        <div class="flex-grow-1 ms-lg-5 ms-sm-3 ms-2">
                            <p>CALL US</p>
                            <a href="tel:1800-843-7890">1800-843-7890 (IN)</a>
                            <a href="https://api.whatsapp.com/send?phone=918767256840" class="d-block pt-2">+91 8767256840</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-center py-5 callus">
                        <div class="flex-shrink-0">
                            <a href="mailto:sales@infosectrain.com">
                                <img src="img/icon/email.png" alt="email" class="img-fluid">
                            </a>
                        </div>
                        <div class="flex-grow-1 ms-lg-5 ms-sm-3 ms-2">
                            <p>Email</p>
                            <a href="mailto:sales@infosectrain.com">sales@infosectrain.com</a>
                        </div>
                    </div>

                    <a href="#free_demo" class="enquieyBtn"><img src="img/icon/call.png" alt="call" class="me-4"> Enquire for More Information</a>
                </div>
            </div>
        </div>
    </section>
    <!--call us sec end-->

    <!--related cousre sec start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Related Courses</h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="c_box">
                        <a href="https://www.infosectrain.com/pages/lp/ceh-training/" class="link_box" target="_blank">
                            <img src="img/ceh.jpg" alt="ceh"/>
                            <span>CEH (v12) - Certified Ethical Hacker  </span>
                        </a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-md-0 mt-4"  data-aos="fade-up">
                <div class="c_box">
                        <a href="https://www.infosectrain.com/pages/lp/cisa/" class="link_box" target="_blank">
                            <img src="img/CISA.png" alt="cisa"/>
                            <span>CISA Certification Course </span>
                        </a>

                    </div>

                </div>
                <div class="col-md-6 col-lg-3 mt-4 mt-lg-0" data-aos="fade-up">
                    <div class="c_box">
                        <a href="https://www.infosectrain.com/pages/lp/cissp-new/" class="link_box" target="_blank">
                             <img src="img/cissp.png" alt="cissp"/>
                            <span>CISSP Certification Training  </span>
                        </a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 mt-lg-0"  data-aos="fade-up">
                    <div class="c_box">
                        <a href="https://www.infosectrain.com/pages/lp/security/" class="link_box" target="_blank">
                            <img src="img/comtia.png" alt="comtia"/>
                            <span>CompTIA Security+ SY0-601</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--related course sec end-->

    <!--/ footer contact us-->
    <section class="py-5 footer-contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="item">
                            <img src="img/iso-gladiators.webp" alt="iso-gladiators" loading="lazy"
                                class="w-100 mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <h2 Class="text-center mb-4">
                                Want more clarity? <br>
                                Contact us now
                            </h2>
                            <div class="hide rows  mt-2" id="demo_form_output_footer"> </div>
                            <form method="post" action="" onSubmit="return val_demo_request_footer(this.form);" id="demo_me_phone_f_footer">
                                <input type="text" name="me_name" id="me_name_footer" placeholder="fill name">
                                <input type="email" name="me_email" id="me_email_footer" placeholder="email">
                                <input type="number" name="me_phone" id="me_phone_footer" placeholder="mobile">

                                <input type="hidden" value="<?php echo BASE_URL; ?>thank-you.php" id="me_redirect_footer">
                                <input type="hidden" value="ISO 27001" id="me_others_footer" name="me_others">
                                <input type="hidden" value="<?php echo $pag_url; ?>" id="me_pageurl_footer" name="me_pageurl">

                                <button value="submit" name="me_submited" id="me_submited_footer">Reserve Your Seat Now</button>

                                <div class="loading_w hide" id="loading_w_footer">
                                    <img src="<?php echo BASE_URL; ?>img/loader.gif"/>
                                </div>

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
    </section>
    <!--/ footer contact us end-->

    <!--footer sec start-->
    <footer>
        <div class="container">
            <a href="#">
                <img src="img/flogo.png" alt="" class="img-fluid mb-3">
            </a>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-sm-4 mt-2">
                    <div class="footer-item">
                        <h5>About Infosec Train</h5>
                        <ul>
                            <li><a href="https://www.infosectrain.com/about-us/">about</a></li>
                            <li><a href="https://www.infosectrain.com/leadership/">our team</a></li>
                            <li><a href="https://www.infosectrain.com/customers-review/">Testimonials</a></li>
                            <li><a href="https://www.infosectrain.com/privacy-policy/">Privacy Policy</a></li>
                            <li><a href="https://www.infosectrain.com/contact-us/">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 col-6 mt-sm-4 mt-2">
                    <div class="footer-item">
                        <h5>Quick Contacts</h5>
                        <a href="https://api.whatsapp.com/send?phone=918767256840">+91 8767256840</a>
                        <a href="tel:+1657-221-1127">+1 657-221-1127(USA)</a>
                        <a href="mailto:sales@infosectrain.com">sales@infosectrain.com</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 mt-sm-4 mt-2">
                    <div class="footer-item">
                        <h5>Our Office</h5>
                        <p>INDIA</p>
                        <p>
                            Manyata Embassy Business Park, Ground Floor, E1 Block, <br>
                            Beech Building, Outer Ring Road, Bangalore- 560045 <br>
                            <a href="tel:1800-843-7890">1800-843-7890 (IN)</a>
                        </p>
                        <h5>New York, United States</h5>
                        <p>
                            99 Wall Street #599 New York, NY 10005, United States <br>

                           <a href="tel:+1657-221-1127">+1 657-221-1127(USA)</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer sec end-->

    <div class="cright mb-5">
        All rights reserved. © <?php echo date('Y');?>, Infosec Train
    </div>
    <!--top up button start-->
        <img src="img/icon/arrow.png" alt="" onClick="topFunction()" id="myBtn">
    <!--topup button end-->
</main>
<!--content body end-->

</body>
<!---js start-->
    <script src="assests/js/bootstrap.min.js"></script>
  <!--  <script src="assests/js/custom.js"></script>-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="assests/js/custom-swipper.js"></script>
<!--js end-->


<!--Start of Zendesk Chat Script-->

<script type="text/javascript">

 window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=

d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.

_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");

$.src="https://v2.zopim.com/?5Y1ZvMP3lrSPwhhyQjIGwo618dlqPLkD";z.t=+new Date;$.

type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

</script>

<!--End of Zendesk Chat Script-->


<script src="assests/js/common.js"></script>
<!--<script src="assets/js/common.min.js"></script>-->


<script>
    AOS.init();

	var links = document.querySelectorAll("a");

    links.forEach(elem =>{
        let elemAttr = elem.getAttribute('href');
        if(elemAttr && elemAttr.includes("#")){
            elem.addEventListener("click", function(e){
                e.preventDefault();
                document.getElementById(elemAttr.replace(/#/g, "")).scrollIntoView({
                behavior: "smooth",
                block: "start",
                inline: "nearest"
                });
                })
        }
    })


	//-----------------

	function openTab(evt, cityName) {
    var i, auditorItem, tablinks;
    auditorItem = document.getElementsByClassName("auditorItem");
    for (i = 0; i < auditorItem.length; i++) {
      auditorItem[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" activeActive", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " activeActive";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  //sticky header
function sticky(){
  let a = document.querySelector('.scrollNav');
  if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
      a.classList.remove('d-none')
  }
  else{
    a.classList.add('d-none')
  }
}
window.addEventListener('scroll', sticky);

//table data get start
let tranbtn = document.querySelectorAll('.training_cal_courses');

tranbtn.forEach(element => {
  element.addEventListener("click", function(){
    let a = element.getAttribute('data-text');
    let b = document.querySelector('.hidden').value = a;
  })
});
//table data get end

//scroll btn
let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
	//-----------------

    //table display without data
let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
    }
</script>


<!----------------whatsapp------------>
<script>
   $(function(){
       $('#filename').load("whatap.html");
   });
</script>

<div id="filename"></div>
<!----------------whatsapp----->
</html>