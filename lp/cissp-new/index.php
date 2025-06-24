<?php include('include/comman_use.php'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="CISSP Training and Certification course ">

    <meta name="author" content="Infosec Train">

    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
 <title>CISSP Training and Certification course </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('include/css.php');?>
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
<body >
  
<?php include('include/header.php');?>

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
<section class="rows bg-fixed  banner home_search <?php
if(isMobile()){ 
}else{ 
 echo 'lazy';
}
?>" data-src="<?php echo BASE_URL; ?>assets/images/bg.jpg"  >
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-7"> 

        <h1 class="  heading1 mt-4  text-white  wow  fadeInLeft animated" data-wow-duration="1s" >CISSP Certification Training</strong></h1>

      
<ul class="list5">
<li>48 hrs of instructor-led Online training</li>
<li>4 hrs/day in Weekend/Weekday </li>
<li>98% Passing Rate</li>
<li>Access to the recorded sessions</li>
<li>Full 8 Domain Exam Practice </li>
<li>Online Test simulation  mapped with domains</li>
<li>1-on-1 Training option </li>
 </ul>
      </div>
     
      <div class="col-xs-12 col-md-6 col-lg-5 ">
        <div class="cir_head wow  fadeInRight animated" data-wow-duration="1s" id="free_demo">
          <div class="home_form"> <h2 class="  text-center form_head">Talk to our Experts</h2> 
          
<div class="hide rows  mt-2" id="demo_form_output">  </div>

    <form class="rows  clearfix" method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f" >
                      <div class="form-group "> 
                        <input type="text" class="form-control"  id="me_name"  name="me_name"  value="" placeholder="Your Name * " >
                        
                        <div class="form-control-feedback"> </div> 
                      </div>
                      
                      <div class="form-group"> 
                        <input type="text" class="form-control" name="me_email" id="me_email" value="" placeholder="E-mail address *"> 
                        <div class="form-control-feedback"> </div> 
                      </div>
                      <div class="form-group"> 
                        <input type="text" class="form-control" name="me_phone" value="" id="me_phone" placeholder="Phone Number"> 
                        <div class="form-control-feedback"> </div> 
                      </div>
                       
          <div class="form-group"> 
                        <input type="text" class="form-control" name="me_message" value="" id="me_message" placeholder="Mention your call time preference"> 
                        <div class="form-control-feedback"> </div> 
                      </div>
                       
               
                <input type="hidden"   value="<?php echo BASE_URL;?>thank-you.html" id="me_redirect"  > 
                <input type="hidden"   value="CISSP Certification Training" id="me_others" name="me_others"  > 
				<input type="hidden"   value="<?php echo $pag_url;?>" id="me_pageurl" name="me_pageurl"  >
                <button type="submit" name="me_submited" id="me_submited" value="submited" class="form-control btn btn-primary btn_submit  ">Request a Callback</button> <div class="loading_w hide" id="loading_w"><img src="<?php echo BASE_URL; ?>assets/images/loader.gif"/></div>
                
             </form></div>

       
      </div></div>
    </div>
  </div> 
</section>

 

<section class="container-fluid  section  bg2 ">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="head-home wow  fadeInDown animated  " id="overview"  data-wow-duration="1s"> CISSP TRAINING PACKAGE INCLUDES    </h2>
      </div>
    </div>
    <div class="row " >
      <div class="col-md"> <span class="learning_mode wow  fadeInUp animated "  data-wow-duration="1s"> <span><img src="<?php echo BASE_URL; ?>assets/images/presentation.png"  ></span> Accredited Instructors</span> </div>
      <div class="col-md"> <span class="learning_mode wow  fadeInUp animated"  data-wow-duration="2s"> <span><img src="<?php echo BASE_URL; ?>assets/images/document.png"  ></span>Reference Material</span> </div>
      <div class="col-md"> <span class="learning_mode wow  fadeInUp animated"  data-wow-duration="3s"> <span><img src="<?php echo BASE_URL; ?>assets/images/answer.png"  ></span>Web Based exam Simulator</span> </div>
      <div class="col-md"> <span class="learning_mode wow  fadeInUp animated"  data-wow-duration="4s"> <span><img src="<?php echo BASE_URL; ?>assets/images/diploma.png"  ></span>Course Completion 
Certificate</span> </div>
<div class="col-md"> <span class="learning_mode wow  fadeInUp animated"  data-wow-duration="4s"> <span><img src="<?php echo BASE_URL; ?>assets/images/mortarboard.png"  ></span>Desired Modes of Training</span> </div>



    </div>
  </div>
</section>
 
 
 
 
 
 <style>
 .offerbox {
    height: auto;
}
.offerbox {
    background: #2b2929;
    min-height: 280px;
}
.hvrbox-text {
    width: 100%;
    display: inline-block;
    color: #fff;
    top: 50%;
    left: 50%;
    padding: 42px;
}
.font-color-white {
    color: #fff;
}
.offer-para {
    font: normal normal normal 16px/28px Poppins;
    letter-spacing: .49px;
}
.hvrbox-text ul {
    display: block;
    flex-wrap: wrap;
}
.hvrbox-text ul li {
    line-height: 26px;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
    flex: 0 0 48%;
    max-width: 100%;
    margin-right: 2%;
}
.course_benefits ul li:before {
    content: '';
    position: absolute;
    left: -23px;
    color: #ff1046;
    background: url(https://www.infosectrain.com/wp-content/themes/Divi/assets/images/right-icon2.png);
    width: 24px;
    height: 24px;
    display: inline-block;
    top: 12px;
}
.hvrbox-text li strong {
    color: #f6ffa9;
    font-weight: 500;
}
.newbg {
    background-image: url(https://www.infosectrain.com/wp-content/themes/Divi/assets/images/offer-banneroct.png);
    background-position: right center;
    background-size: cover !important;
}
.zeropadding {
    padding-left: 0;
    padding-right: 0;
}
.p50{ padding-bottom:50px;}
 </style>
 
 




<section class="container-fluid section   bg5 " >
  <div class="container">
  

  
    <div class="row">
      <div class="col-md-12" id="training-calendar">
        <h2 class="head-home wow  fadeInDown animated  text-white" id="trainers"  data-wow-duration="1s">CISSP TRAINING CALENDAR </h2>
      </div>
    </div>
     
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
</section> 
	<!---------------
<section class="rows course_benefits bg5" id="view-offers">
<div class="container p50">
  <div class="row ">
      <div class="col-md-12" id="">
        <h2 class="head-home wow  fadeInDown animated  text-white" id="trainers"  data-wow-duration="1s">Diwali offer <font class="what_h_box">(Buy 1 Get 1 Free)</font> </h2>
      </div>
    </div>
    <div class="row customrow">
		<div class="col-md-12 zeropadding">
 		
		<div class="hvrbox-1 offerbox">
<div class="hvrbox-layer_top">
<div class="hvrbox-text">

<p class="font-18 offer-para">Register for CISSP Training and Get following CEH V12 instructor-led training <strong>100% free</strong>. Don't miss this Diwali offer Enroll Now (*t&amp;c applied)
</p><ul>
<li><strong>24hrs instructor-led Online training</strong></li>
<li><strong>Training Certificate</strong></li>

</ul>
<span class="text-white font-weight-bold"><del>USD 199</del> FREE </span>

</div>
</div>
</div>

		
	
		</div>
		
		
		
	</div>
</div>
</section>------------------------>

<section class="container-fluid section    " >
  <div class="container">
    <div class="row" id="infosectrain">
      <div class="col-md-12 mt-3">
        <h2 class="head-home"  >Our Expert Course Advisor  </h2>
      </div>
    </div>

         <div class="row home_testimonials2 justify-content-md-center">
      <div class="col-md-4">
        <div class="card2">
          <h3 class="head_name">Prabh Nair</h3>
          
          <span class="d-block text-center text-dark mb-2">18+ Years Of Experience </span>
          <span class="d-block text-center text-white">CISSP | CCSP | CISM |  CISA | CRISC </span>
        </div>
      </div>
       <div class="col-md-4">
        <div class="card2">
          <h3 class="head_name">K K Singh</h3>
          <span class="d-block text-center text-dark mb-2">18+ Years Of Experience </span>
          <span class="d-block text-center text-white">CISSP | CCSP | CISM | CCSK | CEH</span>
        </div>
      </div>

       <div class="col-md-4">
        <div class="card2">
          <h3 class="head_name">Mani</h3>
          <span class="d-block text-center text-dark mb-2">12+ Years Of Experience </span>
          <span class="d-block text-center text-white"> CISSP | CCSP | AWS Architect | CEH</span>
        </div>
      </div>
    
    </div>
     
  
  </div>


</section>

<section class="container-fluid section   bg4"  >
  <div class="container">
    <div class="row">
      <div class="col-md-12   " >
 
<h2 class="head-home wow  fadeInDown animated">CISSP CBK Domains / Course Content</h2>
<p class="text-center f18"><strong>The CISSP Training consists of the following eight domains:</strong><br>
The weight given to each of the domains have changed. As per new version, they are represented as follows.
</p>

<div class="table-responsive">
  <table class="table table_secondary table-type-2  table-striped  typography-last-elem wow  fadeInUp animated" data-wow-duration="1s"   >
<thead>  <tr >
    <th  >DOMAIN</th>
    <th >% on 2015 CBK&reg;</th>
    <th >% on April 2018 CBK&reg;</th>
    <th >% on May 2021 CBK&reg;</th>
  </tr></thead>
  <tbody><tr >
      <td>Security and Risk Management</td>
      <td >16%</td>
      <td >15%</td>
      <td >15%</td>
    </tr>
    <tr >
      <td>Asset Security</td>
      <td >10%</td>
      <td >10%</td>
      <td >10%</td>
    </tr>
    <tr >
      <td>Security Architecture and    Engineering</td>
      <td >12%</td>
      <td >13%</td>
      <td >13%</td>
    </tr>
    <tr >
      <td>Communications and Network Security</td>
      <td >12%</td>
      <td >14%</td>
       <td style="color:#f42b25">13% (PERCENTAGE CHANGE -1%)</td>
    </tr>
    <tr >
      <td>Identity and Access Management (IAM)</td>
      <td >13%</td>
      <td >14%</td>
      <td style="color:#f42b25">13% (PERCENTAGE CHANGE -1%)</td>
    </tr>
    <tr >
      <td>Security Assessment and Testing</td>
      <td >11%</td>
      <td >12%</td>
       <td >12%</td>
    </tr>
    <tr >
      <td>Security Operations</td>
      <td >16%</td>
      <td >13%</td>
       <td >13%</td>
    </tr>
    <tr >
      <td>Software Development Security</td>
      <td >10%</td>
      <td >10%</td>
            <td style="color:#f42b25">11% (PERCENTAGE CHANGE +1%)</td>
    </tr></tbody>
</table>
 </div>
 

</div></div></div></section>


<section class="container-fluid  section  bg5 ">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="head-home wow  fadeInDown animated  text-white"  data-wow-duration="1s"> Why CISSP Certification?  </h2>
      </div>
    </div>
    <div class="row " >
      <div class="col-md"> <span class="learning_mode wow  fadeInUp animated text-white "  data-wow-duration="1s"> <span><img src="<?php echo BASE_URL; ?>assets/images/global.png"  ></span>  Global Recognition 
Certification</span> </div>
      <div class="col-md"> <span class="learning_mode wow  fadeInUp animated text-white"   data-wow-duration="2s"> <span><img src="<?php echo BASE_URL; ?>assets/images/salary.png"  ></span> Salary Hike</span> </div>
      <div class="col-md"> <span class="learning_mode wow  fadeInUp animated text-white"  data-wow-duration="3s"> <span><img src="<?php echo BASE_URL; ?>assets/images/data-protection.png"  ></span>  Wide Scope In
Information Security
</span> </div>
      <div class="col-md"> <span class="learning_mode wow  fadeInUp animated text-white"  data-wow-duration="4s"> <span><img src="<?php echo BASE_URL; ?>assets/images/goal.png"  ></span>    
Career 
Advancement </span> </div>
<div class="col-md"> <span class="learning_mode wow  fadeInUp animated text-white"  data-wow-duration="4s"> <span><img src="<?php echo BASE_URL; ?>assets/images/infose-logo.png"  ></span>    
Respect</span> </div>



    </div>
  </div>
</section>
 


<section class="container-fluid section   bg4"  >
  <div class="container">
    <div class="row">
      <div class="col-md-12   ">
 
<h2 class="head-home wow  fadeInDown animated">Average SALARY CISSP PROFESSIONALS</h2>


<p class="text-center lead">CISSP certified professionals earn 25 Percent more pay than the non-certified counterparts. <br>
It has been ranked at number 4 out of top 15 highest paying jobs by tech republic survey.
<img src="<?php echo BASE_URL; ?>assets/images/salary.jpg" class="img-fluid mt-4"> </p>

</div></div></div></section>


<section class="container-fluid  section   bg5"  >
  <div class="container" id="course">
    <div class="row">
      <div class="col-md-12 course_details ">
    

          <h2 class="heads"> About CISSP</h2>

          <p> Certified Information Systems Security Professional (CISSP) is an independent information security certification governed by the not-for-profit International Information Systems Security Certification Consortium, (ISC)2. The CISSP was the first credential in the field of information security, accredited by the ANSI (American National Standards Institute) to ISO (International Standards Organization) Standard 17024:2003.</p>

<p>It is approved by the U.S. Department of Defense (DoD) in both their Information Assurance Technical (IAT) and Managerial (IAM) categories.</p>

<h2 class="heads">Who Should Attend </h2>

<ul class="row" ><li class="col-sm-6">Chief Information Security Officer</li>
<li class="col-sm-6">Chief Information Officer</li>
<li class="col-sm-6">Director of Security</li>
<li class="col-sm-6">IT Director/Manager</li>
<li class="col-sm-6">Security Systems Engineer</li>
<li class="col-sm-6">Security Analyst</li>
<li class="col-sm-6">Security Manager</li>
<li class="col-sm-6">Security Auditor</li>
<li class="col-sm-6">Security Architect</li>
<li class="col-sm-6">Security Consultant</li>
<li class="col-sm-6">Network Architect</li>
</ul>

<h2 class="heads">Pre-Requisite </h2>


<p>To apply for the CISSP course certification, you need to:</p>
<ul><li>
Have a minimum 5 years of cumulative paid full-time work experience in two or more of the 8 domains of the (ISC)² CISSP Common Body of Knowledge (CBK)</li>
<li>
One-year experience waiver can be earned with a 4-year college degree, or regional equivalent or additional credential from the (ISC)² approved list</li>
</ul>

<h2 class="heads">CISSP EXAM</h2>


<ul><li>Computer Adaptive Testing [CAT]</li>
<li>Length of exam:  <span class="span"> 4 Hours</span></li>
<li>Number of questions: <span class="span">175</span></li>
<li>Question format: <span class="span">Multiple choice and advanced innovative questions</span></li>
<li>Passing grade: <span class="span">700 out of 1000 points</span></li>
<li>Exam availability: <span class="span">English, French, German, Brazilian, Portuguese, Spanish, Japanese,  Simplified  Chinese, Korean, Visually Impaired </span></li>
</ul>




      </div>
    </div>
 


  </div>
</section>


<section class="container-fluid    home_flexible">
  <div class="container">
    <h3 class="wow  fadeInRight animated text-white f18 m-0 p-0"  >Looking For A Flexible, Customize, Cost-Effective Learning Solution? We Are Just A Click Away<span class="d-inline-block ml-4"><a href="#free_demo" class="btn-primary4 href_toscroll" data-target="#request_demo"> Request a Callback</a></span> </h3>
  </div>
</section>
<section class="container-fluid home_testimonials b3" id="reviews">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="head-home wow  fadeInDown animated"> Words of Praise </h2>
      </div>
    </div>
    <div id="home_testimonials" class="owl-carousel owl-theme owl-loaded owl-drag" >
    
    <div class="item wow  fadeInUp animated"  data-wow-duration="1s">
        <div class="card">
          <h3 class="head_name">Fahim Asey <span>Network & Information Security Analyst </span></h3>
          <div class="testie_head"> <img src="<?php echo BASE_URL; ?>assets/images/fahim-asey.jpg" class="d-inline img-v users" alt="waypoint"> <img src="<?php echo BASE_URL; ?>assets/images/star5.png" class="d-inline img-v  " alt="star5"></div>
          <p> <img src="<?php echo BASE_URL; ?>assets/images/cot.png" class="d-inline img-v  " alt="cot"> I had the opportunity to take up my journey of becoming CISSP with infosectrain, they provide well-known Cybersecurity instructor, and a multi-talent information security architect. With his help and dedications, today I was able to crack the world most difficult exam, and successfully passed the CISSP test. </p>
        </div>
      </div>
      
      <div class="item wow  fadeInUp animated"  data-wow-duration="3s">
        <div class="card">
          <h3 class="head_name">Doja Tayo
 <span> Cybersecurity Strategy, SunTrust </span></h3>
          <div class="testie_head"> <img src="<?php echo BASE_URL; ?>assets/images/doja-tayo.jpg" class="d-inline img-v users" alt="Doja Tayo">  <img src="<?php echo BASE_URL; ?>assets/images/star5.png" class="d-inline img-v  " alt="star5"></div>
          <p> <img src="<?php echo BASE_URL; ?>assets/images/cot.png" class="d-inline img-v  " alt="cot"> I would recommend infosectrain for both online and in-person training to anyone, it was absolutely phenomenal. I thought that the class appropriately covered everything, to the appropriate depth, et cetera, for the CISSP exam </p>
        </div>
      </div>
      <div class="item wow  fadeInUp animated"  data-wow-duration="1s">
        <div class="card">
          <h3 class="head_name">Sergey Lebed <span>Head of Information Security, Muscat </span></h3>
          <div class="testie_head"> <img src="<?php echo BASE_URL; ?>assets/images/sergey-lebed.jpg" class="d-inline img-v users" alt="Sergey Lebed">  <img src="<?php echo BASE_URL; ?>assets/images/star5.png" class="d-inline img-v  " alt="star5"></div>
          <p> <img src="<?php echo BASE_URL; ?>assets/images/cot.png" class="d-inline img-v" alt="cot">I’m so grateful that I’ve made my journey towards CISSP together with Infosectrain.I would definitely recommend him as a trainer and Infosec Train as your continuous professional education provider.</p>
        </div>
      </div>
     
      <div class="item wow  fadeInUp animated"  data-wow-duration="5s">
        <div class="card">
          <h3 class="head_name">Kareem Bennett<span>   
         IT Consultant, Trinidad</span></h3>
          <div class="testie_head"> <img src="<?php echo BASE_URL; ?>assets/images/bennettkareem.jpg" class="d-inline img-v users" alt="Kareem Bennett">  <img src="<?php echo BASE_URL; ?>assets/images/star5.png" class="d-inline img-v  " alt="star5"></div>
          <p> <img src="<?php echo BASE_URL; ?>assets/images/cot.png" class="d-inline img-v  " alt="cot"> Infosectrain's mentor is an outstanding InfoSec instructor, that is really upholding the (ISC)² code of ethics to "Advance and protect the profession". During my CISSP boot camp, it was evident that mentor is very knowledgeable and able to articulate difficult subject matters, in a real-world digestible form....<br><br>
</p>
        </div>
      </div>
      <div class="item wow  fadeInUp animated"  data-wow-duration="6s">
        <div class="card">
          <h3 class="head_name">Paul Ebenezer R Clement

 <span>Senior Consultant, United Kingdom</span></h3>
          <div class="testie_head"> <img src="<?php echo BASE_URL; ?>assets/images/paulebenezerr.jpg" class="d-inline img-v users" alt="Paul Ebenezer R Clement
"> <a  traget="_blank" href="https://www.linkedin.com/in/paulebenezerr/" ><i class="fa fa-linkedin"></i></a> <img src="<?php echo BASE_URL; ?>assets/images/star5.png" class="d-inline img-v  " alt="star5"></div>
          <p> <img src="<?php echo BASE_URL; ?>assets/images/cot.png" class="d-inline img-v  " alt="cot">Infosectrain have amazing coach, mentor and a great personality, one of the best IT Security and Technology trainers that currently exists. His dedication to teach and share knowledge, commitment with which training's are delivered are really commendable. ....</p>
        </div>
      </div>
      
    </div>
  </div>
</section>
<section class="container-fluid section    " >
  <div class="container">
    <div class="row" id="infosectrain">
      <div class="col-md-12 mt-3">
        <h2 class="head-home"  > Why Infosec Train  </h2>
      </div>
    </div>
    <div class="row mb-5" >
      <div class="col-md-3"> <span class="learning_mode4"  > <img src="https://www.infosectrain.com/pages/lp/cissp-new/assets/images/industry.png"  > Learn from Industry Experts</span> </div>
      <div class="col-md-3"> <span class="learning_mode4" > <img src="https://www.infosectrain.com/pages/lp/cissp-new/assets/images/support.png"  > Post Training Support</span> </div>
      <div class="col-md-3"> <span class="learning_mode4"  data-wow-duration="3s"> <img src="https://www.infosectrain.com/pages/lp/cissp-new/assets/images/programs.png"  > Certification Focused Programs</span> </div>
      <div class="col-md-3"> <span class="learning_mode4"  data-wow-duration="4s"> <img src="https://www.infosectrain.com/pages/lp/cissp-new/assets/images/flexible-schedule.png"  > Flexible Schedule</span> </div>
    </div>
  </div>


</section>


<section class="container-fluid   bg2 popular_course">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="head-home text-white">Other Popular Courses</h2>
      </div>
    </div>
    <div class="row mb-5 corporate_course" >
      <div class="col-md-3"> <div class="c_wrapper"><a href="#">
<img src="<?php echo BASE_URL; ?>assets/images/cisa.png">
<div class="c_name">CISA Certification Course </div>
</a><a href="https://www.infosectrain.com/pages/lp/cisa/" target="_blank" class="s_demo"><i>Explore More</i></a></div> </div>

<div class="col-md-3"> <div class="c_wrapper"><a href="#">
<img src="<?php echo BASE_URL; ?>assets/images/cism.png">
<div class="c_name">CISM Certification Training </div>
</a><a href="https://www.infosectrain.com/pages/lp/cism/" target="_blank" class="s_demo"><i>Explore More</i></a></div> </div>

<div class="col-md-3"> <div class="c_wrapper"><a href="#">
<img src="<?php echo BASE_URL; ?>assets/images/ceh.png">
<div class="c_name">CEH (v12) - Certified Ethical Hacker  </div>
</a><a href="https://www.infosectrain.com/pages/lp/ceh-training/" target="_blank" class="s_demo"><i>Explore More</i></a></div> </div>
<div class="col-md-3"> <div class="c_wrapper"><a href="#">
<img src="<?php echo BASE_URL; ?>assets/images/security.png">
<div class="c_name">CompTIA Security+ SY0-601 Certification </div>
</a><a href="https://www.infosectrain.com/pages/lp/security/" target="_blank" class="s_demo"><i>Explore More</i></a></div> </div>
    </div>

 
  </div>
</section>


<?php include('include/footer.php');?>
<script src="https://www.infosectrain.com/pages/assets/js/countdown.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
$(".training_cal_courses").click(function(){
    $("#me_others").val($(this).attr('data-text'));
  }); 

setTimeout( function() {
  //mahendra

$('body').addClass('offer_on');
/*var endDate = $('#countdown').attr('data-time');
$('#countdown').countdown({date: endDate}, function() {        
         $('body').removeClass('offer_on');
       $('.counter_wrap').hide();      
});  */
}, 4000 ); //4000  



$(".close_counter").click(function(){
$('body').removeClass('offer_on');

});

 $(".grab_now").click(function(){
//$('#popup_offer').addClass('active');
}); 

$(".lazy").lazyload();
 
$("#career_oppor").owlCarousel({
margin:0,
loop: true, 
//autoplay: 5000,  
autoplaySpeed : 1000, 
paginationSpeed : 400,
autoplayHoverPause : true, 
lazyLoad: true,
dots: false,
nav: true, 
items : 1
}); 
$("#home_testimonials").owlCarousel({
margin: 20,
loop: true, 
//autoplay: 3000,  
autoplaySpeed : 300, 
paginationSpeed : 400,
autoplayHoverPause : true, 
lazyLoad: true,
dots: false,
nav: true, 
items : 3,
responsive:{  
360:{items:1},
480:{items:1},
960:{items:3} }
}); 

 

});



//table display without data
let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
        document.querySelector('.navbar-nav .nav-item:nth-child(3)').style.display = "none";
    }
</script>
</body>
</html>
