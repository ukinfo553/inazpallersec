<?php include('include/comman_use.php'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="SOC EXPERT Training and Certification course">
<meta name="author" content="Infosec Train">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>SOC EXPERT Training course </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('include/css.php');?> 
  <!-- Google Tag Manager -->
               <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                  
                  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                  
                  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                  
                  })(window,document,'script','dataLayer','GTM-5XZDRWG');
               </script>
               <!-- End Google Tag Manager -->
</head>
<body >
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
  <?php include('include/header.php');?> 
 
  
  <section id="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-7 col-xl-8">
        <div class="left_banner">
            <div class="b_test_box">
                <h1 class="b_com">Become a</h1>
                <h1 class="e_hacker">SOC <span class="e_council">(Security Operation Center)  </span><br>Expert Training</h1>
                <h2 class="e_council">KEY FEATURES</h2>
                <ul class="list_trainer">
                    <li>80 hrs of instructor-led training</li>
                    <li>Customisable Training Sessions 4/8hrs/Day</li>
                    <li>Industry Experienced & Certified Instructors </li>
                    <li>Access to the recorded sessions</li>
                    <li>Cloud Based Practice Lab Range</li>
                    <li>Extensive Hands on with SIEM solutions</li>
                    <li>Covering Skill Base for SOC L1,L2 & L3</li>
                </ul>
            </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-5 col-xl-4">
        <div class="form-container wow fadeInRight" id="free_demo">
          <div class="home-form" > 
            <h2 class="    form_head">Get A Free Demo Class!</h2>

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
                      <input type="text" class="form-control" name="me_phone" value="" id="me_phone" placeholder="Phone Number  "> 
                        <div class="form-control-feedback"> </div>
                      </div>
                      
          
                      <div class="row">
                       <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                        <textarea class="form-control form_textarea" id="me_message" value=""  name="me_message" placeholder="Comment/Training Required "></textarea> 
                        <div class="form-control-feedback"> </div> 
                      </div>
          
                      </div>
                            </div>
               
                <input type="hidden"   value="<?php echo BASE_URL;?>thank-you.html" id="me_redirect"  > 
                 <input type="hidden"   value="SOC EXPERT TRAINING" id="me_others" name="me_others"  > 
				 <input type="hidden"   value="<?php echo $pag_url;?>" id="me_pageurl"  >
                <button type="submit" name="me_submited" id="me_submited" value="submited" class="form-control btn btn-primary btn_submit  ">Submit <img src="assets/img/arrow_r.png"></button> 
                <div class="form-group form-check">
                  <label class="form-check-label" for="exampleCheck1">Your information and data is 100% secure and private</label>
                </div>

                  <div class="loading_w hide" id="loading_w"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif"/></div>
             </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="coursess">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInLeft">
        <p class="text-benefits mb-2">Yes, This is right course for you</p>
        <h2 class="package-heading">Everything about SOC Analyst</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 ">
      
   

 <ul class="nav nav-pills flex-column nav-pills3 mt-4" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="tab10" data-toggle="tab" href="#tab0" role="tab" aria-controls="tab0" aria-selected="true">About SOC</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="tab11" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"> Who should attend   </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="tab21" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">  Pre-requisite</a>
    </li>
    
    
  </ul>
      </div>
 
          <div class="col-md-8">
        <div class="tab-content mt-4 mt-md-0">
          <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="tab10">
   <div class="course-right-box wow fadeInRight">
           <p> Our SOC Analyst Training Program will help you to master over trending and in-demand technical skills to carry out various complex SOC operations. The program starts with intermediate-level cybersecurity concepts and then proceeds to Advanced Forensic, Threat Intelligence, Security Incident, and Event Management Solutions. Infosec Train’s SOC Training Course provides cybersecurity professionals with advanced security skills and certification. The training program will allow you to:</p>
           <ul>
<li>Perform technical strategies, tools, and techniques to secure data for your organization</li>
<li>Understanding the threats and providing countermeasures</li>
<li>Understand network forensics and incident response in depth</li>
<li>Cybersecurity industry knowledge</li>
<li>Analyze and Classify Malware</li>
</ul>
        </div>
    </div>

    <div class="tab-pane fade    " id="tab1" role="tabpanel" aria-labelledby="tab11">
   <div class="course-right-box wow fadeInRight"> 
   <ul>
<li>Technical Support Engineers</li>
<li>System Administrators</li>
<li>Security Consultants</li>
<li>Cyber Security Analysts</li>
<li>Security System Engineers</li>
<li>SOC Analysts (L1, L2, and L3 )</li>
</ul>

   </div>
    </div>
    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab21">
      <div class="course-right-box wow fadeInRight">
      <ul>
<li>Prior knowledge of Networking fundamentals, OS basics, Troubleshooting is recommended</li>
<li>Experience as an entry-level SOC Analyst, Cyber Security Analyst, Information Security role</li>
<li>Experience of two years in the Information Security domain</li>
</ul>

     
    </div></div>
 
  </div>
      </div>
      <!-- /.col-md-8 -->
    </div>


     
  </div>
</section>




<section id="soc_traning">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <p class="text-benefits mb-2">Learning path</p>
               <h2 class="package-heading">SOC Analyst Training</h2>
            </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="soc_left_box">
              <ul class="soc_list">
                  <li>You start here</li>
                  <li>SOC Analyst Tools</li>
                  <li>Domain 1: Security Operations Centre </li>
                  <li>Domain 2: Digital Forensics</li>
                  <li>Domain 3: Incident Response Domain</li>
                  <li>Domain 4: Threat Intelligence Domain</li>
                  <li>Certified SOC Analyst Expert</li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-lg-0 mt-4">
            <div class="soc_right_box">
            <img src="assets/img/keepnote.png" alt="" class="">
            <img src="assets/img/Group-8263.png" alt="" class="">
            <img src="assets/img/splunk.png" alt="" class="">
            <img src="assets/img/wireshark.png" alt="" class="">
            <img src="assets/img/h.png" alt="" class="">
            <img src="assets/img/sqlmap.png" alt="" class="">
            <img src="assets/img/maltego.png" alt="" class="">
            <img src="assets/img/hashcat.png" alt="" class="">
            <img src="assets/img/volatilty.png" alt="" class="">
            <img src="assets/img/burpsuite.png" alt="" class="">
            <img src="assets/img/Group-8268.png" alt="" class="">
            <img src="assets/img/ftk.png" alt="" class="">
            </div>
          </div>
        </div>
    </div>
</section>





<section id="table_section">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
               <p class="text-benefits mb-2 text-center">Our Course Advisors</p>
               <h2 class="package-heading text-center">SOC Training Calendar</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive wow fadeInLeft table_training ">
                    
                      <?php
$url = "https://www.infosectrain.com/api/34416/training_cal_courses/free_demo";
 
 //<table class="table table-dark table-bordered">
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
    </div>
</section>    



<section id="advisors">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
               <h2 class="package-heading text-center">Our Course Advisors</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="advisor_box_con">
<!-------------------
                    <div class="advisor_box">
                        <h4 class="adv-h">Bharat Mutha</h4>
                        <p class="adv-p">CEH I ECIH I CHFI I ECSA I CTIA I CSCU I CySA+ I PenTest+ I securitY+</p>
                    </div>
----------------->
                    <div class="advisor_box">
                    <h4 class="adv-h">Abhi</h4>
                    <p class="adv-p">CCSP I CISSP I CCSK I AWS security specialty I Azure security I OSWP I OSCP</p>
                    </div>
                    <div class="advisor_box">
                    <h4 class="adv-h">Karan S</h4>
                    <p class="adv-p">CEH(Master) I CHF-I I ECIH I CTIA I ECSA I CSA I OSWP I Network+ I CYSA+ I MITRE ATT&CK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="schedule">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInDown">
        <h2 class="sche-h">Looking For A Flexible, Customize, Cost-Effective Learning Solution?</h2>
        <p class="sche-p">We Are Just A Click Away</p>
        <a href="#free_demo" class="btn href_toscroll" data-target="#request_demo">Schedule a Demo  <img src="assets/img/arrow6.png" alt=""></a>

      </div>
    </div>
  </div>
</section>




<section id="benefit">
  <div class="container" id="benefits">
        <div class="row">
            <div class="col-12">
               <p class="text-benefits mb-2">Opportunities after SOC Training</p>
               <h2 class="package-heading">Benefits</h2>
            </div>
        </div>

    <div class="row">
      <div class="col-12">
         


   <div class="nav_wrap">
        <div class="nav_head d-none d-md-block">  <div class="row  ">      <div class="col">Designation</div>
                                       <div class="col text-center">Annual Salary</div>
                                       <div class="col text-center">Hiring Companies</div></div></div>
 



  
<div class="row">
      <div class="col-md-4 ">
          <ul class="nav nav-pills nav-pills2 flex-column" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="Audit" data-toggle="tab" href="#audit" role="tab" aria-controls="audit" aria-selected="true">SOC Analyst</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="Cybersecurity" data-toggle="tab" href="#cybersecurity" role="tab" aria-controls="cybersecurity" aria-selected="false">Security Administrator</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="Internal" data-toggle="tab" href="#internal" role="tab" aria-controls="internal" aria-selected="false">Security Systems Administrator</a>
    </li>
  </ul>
      </div>
      <!-- /.col-md-4 --> 
          <div class="col-md-8">
        <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="audit" role="tabpanel" aria-labelledby="Audit">
  <div class="row text-center"> 
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img/SOC-Analyst-a.png" alt="" class="img-fluid mb-3 anal"></div>
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img/SOC-Analyst-b.png" alt="" class="anal img-fluid "></div>
   </div>
    </div>
    <div class="tab-pane fade" id="cybersecurity" role="tabpanel" aria-labelledby="Cybersecurity">
    <div class="row text-center"> 
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img/SOC-Analyst-a.png" alt="" class="anal img-fluid mb-3"></div>
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0 "><img src="assets/img/SOC-Analyst-b.png" alt="" class="anal img-fluid"></div>
   </div>
      
    </div>
    <div class="tab-pane fade" id="internal" role="tabpanel" aria-labelledby="Internal">
    <div class="row text-center"> 
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img/SOC-Analyst-a.png" alt="" class="anal img-fluid mb-3"></div>
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img/SOC-Analyst-b.png" alt="" class="anal img-fluid"></div>
   </div>
       
    
  </div>
      </div>
      <!-- /.col-md-8 -->
    </div></div>
  
  

      </div>
    </div>
  </div>
</section>





<section id="profile_card">
    <div class="container" id="reviews">
        <div class="row">
            <div class="col-12">
               <p class="text-benefits mb-2 text-center">Our happy clients</p>
               <h2 class="package-heading text-center">Words of Praise</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="profile_card_carousel owl-carousel owl-theme wow fadeInUp">
                    <div class="item card">
                        <div class="card-box">
                          <div class="prof-img">
                            <img src="assets/img/madhu-h.png" alt="" class="p_image">
                          </div>
                            <h2 class="name">MADHU HB</h2>
                            <h3 class="cou_name">SOC Analyst Training | India</h3>
                            <p class="para-card">
                            I really appreciate the training, good control of training subject by the trainer and he provides excelllent references/advisor to dive deeper. This course will be helpful in my daily job as soc analyst.
                            </p>
                        </div>
                    </div>
                    <div class="item card">
                        <div class="card-box">
                          <div class="prof-img">
                            <img src="assets/img/kp.png" alt="" class="p_image">
                           
                          </div>
                            <h2 class="name">Kamal Pasha</h2>
                            <h3 class="cou_name">SOC Analyst Training | Kuwait</h3>
                            <p class="para-card">
                            Thank you for a wonderful training. Great presentation style. The trainer allowed us to ask lots of questions and talk about real time examples which all made me to enjoy the course. It's a very informative course too. Once again thank you.
                            </p>
                        </div>
                    </div>
                    

                    <div class="item card">
                         <div class="card-box">
                          <div class="prof-img">
                            <img src="assets/img/ss.png" alt=""  class="p_image">
                            
                          </div>
                            <h2 class="name">Shipra Singh</h2>
                            <h3 class="cou_name">SOC Analyst Training | India</h3>
                            <p class="para-card">
                            Training and trainer both are really good in terms of explaining concepts and sharing documents. Overall it's really knowledge gaining session for me and benefitted me about Knowing more tools and techniques in my area of work.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="lear-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <p class="text-benefits mb-2">Choose your preferred</p>
               <h2 class="package-heading">Learning Mode</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="learing-box">
                    <img src="assets/img/1-on.png" alt="" class="ler-img">
                    <h3 class="lea_name">1-ON-1 TRAINING</h3>
                    <p class="text-ler">Customized schedule<br> Learn at your dedicated hour<br> Instant clarification of doubt<br> Guaranteed to run</p>
                    <a href="#banner" class="btn ler-btn btn-center href_toscroll">GET STARTED</a>
                </div>
            </div>

            <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="learing-box">
                    <div class="pref">
                        <p class="mb-0">Preferred</p>
                    </div>
                    <img src="assets/img/Blended.png" alt="" class="ler-img">
                    <h3 class="lea_name">ONLINE TRAINING</h3>
                    <p class="text-ler">Flexibility, Convenience & Time Saving <br> More Effective <br> Learning Cost Savings</p>
                    <a href="#banner" class="btn ler-btn btn-center mt-4 href_toscroll">ENROLL NOW</a>
                </div>
            </div>

            <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="learing-box">
                    <div class="pref">
                        <p class="mb-0">For Business</p>
                    </div>
                    <img src="assets/img/offices.png" alt="" class="ler-img">
                    <h3 class="lea_name">CORPORATE TRAINING</h3>
                    <p class="text-ler">Anytime, Anywhere – Across The Globe<br> Hire A Trainer <br> At Your Own Pace<br> Customized Corporate Training</p>
                    <a href="#banner" class="btn ler-btn btn-center href_toscroll">CONTACT US</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="courses" class="section bg-dark_b">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white wow fadeInDown">Other Popular Courses</h1>
            </div>
        </div>
        <div class="row mt-4 wow fadeInUp">
            <div class="col-md-6 col-lg-3">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/ceh-training/" class="link_box" target="_blank">
                        <span>CEH - Certified Ethical Hacker </span>
                    </a>
                    <a href="#" class="h_btn_link" target="_blank"><span>Explore More</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-md-0 mt-4">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/cism/" class="link_box" target="_blank">
                        <span>CISM Certification Training </span>
                    </a>
                    <a href="#" class="h_btn_link" target="_blank"><span>Explore More</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/iso-27001/" class="link_box" target="_blank">
                        
                        <span>ISO 27001 Certification Training  </span>
                    </a>
                    <a href="#" class="h_btn_link" target="_blank"><span>Explore More</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/security/" class="link_box" target="_blank">
                       
                        <span>CompTIA Security+ SYO-601 Certification</span>
                    </a>
                    <a href="#" class="h_btn_link" target="_blank"><span>Explore More</span></a>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="footr_last" class="section bg-dark_b button_transparent active">
    <div class="container ">
        <div class="row text-white justify-content-center wow fadeInUp">
           <div class="col-3 col-lg-3 col-md-4"><a href="https://api.whatsapp.com/send?phone=918767256840" target="_blank"><img src="assets/img/whatsapp.png"><span>+91-87672-56840</span></a></div>
           <div class="col-3 col-lg-3 col-md-4"><a href="tel:+91-8767256840"><img src="assets/img/phone.png"><span>+91-87672-56840</span></a></div>
           <div class="col-3 col-lg-3 col-md-4"><a href="mailto:sales@infosectrain.com"><img src="assets/img/email.png"><span> sales@infosectrain.com</span></a></div>
         </div>
    </div>
</section>


<section id="footer_buttom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="foot_con">
                    <h2 class="foot_h">About Infosec Train</h2>
                    <p class="foot_p">Infosec Train is a Technology related organization focusing on a variety of IT Security Trainings and Information Security Services.</p>
                    <p class="copy-r">All rights reserved. © <?php echo date('Y');?>, Infosec Train</p>
                </div>
                <div class="buttom_links">
                   <!-- <a href="#"><img src="assets/img/cell.png" class="align-middle mr-2"> Toll Free - 1800-843-7890 (India)</a> -->
                   <!-- <a href="#"><img src="assets/img/email.png" class="align-middle mr-2"> sales@infosectrain.com</a> -->
                </div>
                <!-- <div class="copy_r">
                    <p class="copy_r_t">
                        All rights reserved. © 2021, Infosec Train
                    </p>
                </div> -->
            </div>

            <div class="col-12 col-md-6">
                <div class="footer_ri">
                    <p class="o-s-h mb-0">Our Social Handles</p>
                    <div class="f-social-i">
                        <a href="https://www.facebook.com/Infosectrain/" class="icon_fo"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/company/infosec-train/" class="icon_fo"><i class="fa fa-whatsapp"></i></a>
                        <a href="https://twitter.com/Infosec_Train" class="icon_fo"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="read_b">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 
<!-- <?php include('include/footer.php');?>   -->
 <!----------------whatsapp------------>
<script> 
   $(function(){
       $('#filename').load("../whatap.html");
   });

     //table display without data
let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
        document.querySelector('.navbar-nav .nav-item:nth-child(3)').style.display = "none";
    }

    </script>

    <div id="filename"></div>
    <!----------------whatsapp----->
</body>
</html>
