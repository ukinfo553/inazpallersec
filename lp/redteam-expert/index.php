<?php include('include/comman_use.php'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="RedTeam Expert Training and Certification course">
<meta name="author" content="Infosec Train">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>RedTeam Expert Training course </title>
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
                <h1 class="e_hacker">RedTeam<br>Expert Training</h1>
                <h2 class="e_council">KEY FEATURES</h2>
                <ul class="list_trainer">
                    <li>60 hrs of instructor-led training</li>
                    <li>Customisable Training Sessions 4/8hrs/Day</li>
                    <li>Industry Experienced & Certified Instructors </li>
                    <li>Access to the recorded sessions</li>
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
                 <input type="hidden"   value="RedTeam EXPERT TRAINING" id="me_others" name="me_others"  > 
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
        <h2 class="package-heading">Everything about RedTeam</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 ">
      
   

 <ul class="nav nav-pills flex-column nav-pills3 mt-4" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="tab10" data-toggle="tab" href="#tab0" role="tab" aria-controls="tab0" aria-selected="true">About RedTeam </a>
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
           <p>Our <strong>Red Team Training course</strong> has numerous practical sessions designed to create an environment of learning and application to build a robust upskilling process with an effective learning methodology. The course is created, designed, and reviewed by certified cybersecurity experts and Red Team certified professionals for budding Red Teamers out there! Our course has all the material that you will need to start your training process to be a skilled Red Team cyber security expert. The courseware contains various strategies and techniques like:</p>
           <ul>
<li  >Abusing/ violating IT sensitive Infrastructure and security systems to detect loopholes</span></li>
<li  >Hunting/ Finding vulnerabilities in IT systems to counter possible future threats</span></li>
<li  >Learning to mimic the offensive hacker mindset and approach to IT abuse/ offense</span></li>
<li  >Creating dynamic attack environments to perfectly analyse and assess a possible attack</span></li>
<li  >Master the tools and techniques necessary to become a Red Team Hacking Expert!</span></li>
</ul>
        </div>
    </div>

    <div class="tab-pane fade    " id="tab1" role="tabpanel" aria-labelledby="tab11">
   <div class="course-right-box wow fadeInRight"> 
<ul>
<li>Red Teamers</li>
<li>Bug Bounty Hunters</li>
<li>Security Analysts</li>
<li>Vulnerability Managers</li>
<li>Penetration Testers</li>
<li>IT Security Professionals</li>
<li>Security Consultants</li>
<li>Anyone who wants to learn the Offensive side of Cyber Security</li>
</ul>

   </div>
    </div>
    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab21">
      <div class="course-right-box wow fadeInRight">
      <ul>
<li>A thorough understanding of Penetration Tests and Security Assessments</li>
<li>Prior knowledge on OWASP TOP 10</li>
<li>Understanding &amp; Navigating Different OSes like Windows, Linux</li>
<li>Knowledge of Active Directory</li>
<li>Networking Basics</li>
<li>Familiarity with PowerShell Scripts</li>
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
               <h2 class="package-heading">The Red Team Learning Path & Tools Covered:</h2>
            </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="soc_left_box">
              <ul class="soc_list">
        
            <li>Introduction to Pen-Testing</li>
            <li>Hands On with Linux</li>
            <li>Scripting Skills</li>
            <li>Introduction to Red Team’s Plan and Execution</li>
            <li>Information Gathering &amp; Enumeration</li>
			<li>Red Team Kill Chain</li>
			<li>Advanced Windows Exploitation</li>
			<li>Binary Analysis and Exploitation</li>
			<li>The Metasploit Framework</li>
			<li>Exploiting Overflows - Linux &amp; Windows</li>
			<li>Privilege Escalation</li>
			<li>Lateral Movement &amp; Pivoting Techniques</li>
			<li>Advanced Web Attacks</li>
			<li>Introduction to Wireless Security</li>
			<li>AWS Pen testing</li>
			<li>MITRE ATT&amp;CK Red Teaming</li>
			<li>Deliverables - Report Writing</li>
     
              </ul>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-lg-0 mt-4">
            <div class="soc_right_box">
            <img src="assets/img/red-team-tool-coverd2021.jpg" alt="" class="">
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
               <h2 class="package-heading text-center">REDTEAM Training Calendar</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive wow fadeInLeft table_training ">
                    
                      <?php
$url = "https://www.infosectrain.com/api/35609/training_cal_courses/free_demo";
 
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
            <div class="col-12">
               <p class="text-benefits mb-2 text-center">Our Experts</p>
               <h2 class="package-heading text-center">Our Course Advisors</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="advisor_box_con">
<!----                    
<div class="advisor_box">
                        <h4 class="adv-h">Bharat Mutha</h4>
                        <p class="adv-p">  CEH | ECIH | CHFI | ECSA | CTIA | CSCU | CySA+ | PenTest+ | Security+</p>
						 <p class="adv-p"> Bharat served as a corporate trainer & Consultant with nearly 8+ years of experience across the diverse industry. Good hands-on experience in vulnerability assessment, Penetration Testing </p>
                    </div>-->
                    <div class="advisor_box">
                    <h4 class="adv-h">Abhi</h4>
                    <p class="adv-p">CCSP I CISSP I CCSK I AWS security specialty I Azure security I OSWP I OSCP</p>
					 <p class="adv-p">As a Head of Security Testing, Abhy is an enthusiastic professional and an excellent trainer. He is unique with his skills of handling the security of the company's digital assets from unauthorised access.</p>
					 
					 
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
               <p class="text-benefits mb-2">Opportunities after Redteam Training</p>
               <h2 class="package-heading">Benefits</h2>
            </div>
        </div>

    <div class="row">
      <div class="col-12">
         
<img src="assets/img/Red-Team-Career-Opportunities.jpg" alt="" class="img-fluid mb-3s">
    
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
                            <img src="https://www.infosectrain.com/wp-content/uploads/2020/12/raman.s.g-150x150.jpg" alt="" class="p_image">
                          </div>
                            <h2 class="name"> Shiva Raman Garimela </h2>
                            
                            <p class="para-card">
                             
    I liked the in-depth knowledge about the subject of the trainer, good explanation, highlighting essential things! Instructor allowed plenty of time for discussion and allowing us to ask questions. It was well delivered.  
                            </p>
                        </div>
                    </div>
                    <div class="item card">
                        <div class="card-box">
                          <div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2020/12/kamalpasha-150x150.jpg" alt="" class="p_image">
                           
                          </div>
                            <h2 class="name">Kamal Pasha</h2>
                     
                            <p class="para-card">
                            
    Highly satisfied with the content as well as the knowledge shared during the course.  
                            </p>
                        </div>
                    </div>
                    

                    <div class="item card">
                         <div class="card-box">
                          <div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2020/12/ajithd272-150x150.jpg" alt=""  class="p_image">
                            
                          </div>
                            <h2 class="name">Ajith R Dsouza </h2>
                         
                            <p class="para-card">
                            
    I got the best trainer, who taught us everything about the subject as well as, gave more knowledge beside the subject.  
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

<?php /*?>
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
                    <a href="https://www.infosectrain.com/pages/lp/ceh-v11/" class="link_box">
                        <span>CEH (v11) - Certified Ethical Hacker </span>
                    </a>
                    <a href="#" class="h_btn_link" target="_blank"><span>Explore More</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-md-0 mt-4">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/cism/" class="link_box">
                        <span>CISM Certification Training </span>
                    </a>
                    <a href="#" class="h_btn_link" target="_blank"><span>Explore More</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/iso-27001/" class="link_box">
                        
                        <span>ISO 27001 Certification Training  </span>
                    </a>
                    <a href="#" class="h_btn_link" target="_blank"><span>Explore More</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/security/" class="link_box">
                       
                        <span>CompTIA Security+ SYO-601 Certification</span>
                    </a>
                    <a href="#" class="h_btn_link" target="_blank"><span>Explore More</span></a>
                </div>
            </div>
        </div>
    </div>
</section><?php */?>



<section id="footr_last" class="section bg-dark_b button_transparent active">
    <div class="container ">
        <div class="row text-white justify-content-center wow fadeInUp">
           <div class="col-3 col-lg-3 col-md-4"><a href="https://api.whatsapp.com/send?phone=918767256840" target="_blank"><img src="assets/img/whatsapp.png"><span>+91-87672-56840</span></a></div>
           <div class="col-3 col-lg-3 col-md-4"><a href="tel:+1800-843-7890"><img src="assets/img/phone.png"><span>+1800-843-7890</span></a></div>
           <div class="col-3 col-lg-3 col-md-4"><a href="mailto:sales@infosectrain.com"><img src="assets/img/email.png"><span> sales@infosectrain.com</span></a></div>
         </div>
    </div>
</section>




<section id="courses" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="wow fadeInDown">Related Courses</h1>
            </div>
        </div>
        <div class="row mt-4 wow fadeInUp">
            <div class="col-md-6 col-lg-3">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/iso-27001/" class="link_box">
                        <img src="assets/img_2/isologo.png">
						<span>ISO Lead Implementer</span>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-md-0 mt-4">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/ceh-v11/" class="link_box">
                        <img src="assets/img_2/ceh.jpg">
						<span>CEH (v11) - Certified Ethical Hacker  </span>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/cissp-new/" class="link_box" target="_blank">
                         <img src="assets/img_2/cissp.png">
                        <span>CISSP Certification Training  </span>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/security/" class="link_box">
                        <img src="assets/img_2/comtia.png">
                        <span>CompTIA Security+ SY0-601</span>
                    </a>
                   
                </div>
            </div>
        </div>
    </div>
</section>






<section id="footer_buttom">
    <div class="container">
        <div class="row">
        <div class="col-12 col-md-12 flogo">
      <img src="assets/img_2/footer_logo.svg" />
      </div>
            <div class="col-12 col-md-3">
                <div class="foot_con">
                    <h2 class="foot_h">About Infosec Train</h2>
                   <p class="foot_p"><ul class="f_list ">
      <li><a href="https://www.infosectrain.com/about-us/" class="text-white" target="_blank">About us</a></li>
<li><a href="https://www.infosectrain.com/leadership/" class="text-white" target="_blank">Our Team</a></li>
<li><a href="https://www.infosectrain.com/customers-review/" class="text-white" target="_blank">Testimonials</a></li>
<li><a href="https://www.infosectrain.com/privacy-policy/" class="text-white" target="_blank">Privacy Policy</a></li>
<li><a href="https://www.infosectrain.com/contact-us/" class="text-white" target="_blank">Contact us</a></li>

</ul></p>
                    <!--<p class="copy-r">All rights reserved. � 2021, Infosec Train</p>-->
                </div>
                <div class="buttom_links">
                   <!-- <a href="#"><img src="assets/img/cell.png" class="align-middle mr-2"> Toll Free - 1800-843-7890 (India)</a> -->
                   <!-- <a href="#"><img src="assets/img/email.png" class="align-middle mr-2"> sales@infosectrain.com</a> -->
                </div>
                
            </div>
            <div class="col-12 col-md-3">
                <div class="foot_con">
                    <h2 class="foot_h">Quick Contacts</h2>
                    <p class="foot_p"><a href="https://api.whatsapp.com/send?phone=918767256840" class="text-white" target="_blank"><img src="assets/img_2/whatsapp.svg" /> +91 8767256840</a></p>
                    <p class="foot_p"><a href="tel:1800-843-7890" class="text-white"><img src="assets/img_2/call.svg" /> +1800-843-7890 (IN)</a></p>
          <p class="foot_p"><a href="tel:+1657-221-1127" class="text-white"><img src="assets/img_2/call.svg" /> +1 657-221-1127 (USA)</a></p>
          <p class="foot_p"><a href="mailto:sales@infosectrain.com" class="text-white"><img src="assets/img_2/email.svg" /> sales@infosectrain.com</a></p>
                </div>
                
                
            </div>
      <div class="col-12 col-md-3">
                <div class="foot_con">
                    <h2 class="foot_h">Our Office</h2>
                    <p class="foot_p" style="color:#FF1046;">India</p>
           <p class="foot_p">Manyata Embassy Business Park, Ground Floor, E1 Block, Beech Building, Outer Ring Road, Bangalore- 560045</p>
                    <p class="foot_p"><a href="tel:1800-843-7890" class="text-white"><img src="assets/img_2/call.svg" /> 1800-843-7890 (IN)</a></p>
                </div>
                
                
            </div>
      <div class="col-12 col-md-3">
                <div class="foot_con">
                    <h2 class="foot_h" style="    padding: 12px;"></h2>
                    <p class="foot_p" style="color:#FF1046;">New York, United States</p>
           <p class="foot_p">99 Wall Street #599 New York, NY 10005, United States</p>
                    <p class="foot_p"><a href="tel:+1657-221-1127" class="text-white"><img src="assets/img_2/call.svg" /> +1 657-221-1127 (USA)</a></p>
                </div>
                
                
            </div>
      <div class="col-12 col-md-12 flogo">
      <p class="copy-r">All rights reserved. &copy; <?php echo date('Y')?>, Infosec Train</p>
      </div>
      
      
           
        </div>
    </div>
</section>
















<?php /*?><section id="footer_buttom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="foot_con">
                    <h2 class="foot_h">About Infosec Train</h2>
                    <p class="foot_p">Infosec Train is a Technology related organization focusing on a variety of IT Security Trainings and Information Security Services.</p>
                    <p class="copy-r">All rights reserved. © 2021, Infosec Train</p>
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
</section><?php */?>


 
<!-- <?php include('include/footer.php');?>   -->

<script>
      //table display without data
let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
        document.querySelector('.navbar-nav .nav-item:nth-child(3)').style.display = "none";
    }

</script>
 <!----------------whatsapp------------>
<script> 
   $(function(){
       $('#filename').load("../whatap.html");
   });
    </script>

    <div id="filename"></div>
    <!----------------whatsapp----->
</body>
</html>
