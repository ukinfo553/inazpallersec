<?php include('include/comman_use.php'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="CCISO Training and Certification course">
<meta name="author" content="Infosec Train">
 <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>CCISO Training and Certification course in USA and India - Infosectrain | InfoSecTrain</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="https://infosectrain.com/wp-content/uploads/2017/10/favicon.ico" /><link rel="icon" href="https://www.infosectrain.com/wp-content/uploads/2017/10/cropped-infosec-FAV-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://www.infosectrain.com/wp-content/uploads/2017/10/cropped-infosec-FAV-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.infosectrain.com/wp-content/uploads/2017/10/cropped-infosec-FAV-1-180x180.png" />
<?php include('include/css.php');?> 
<script>

setTimeout(function(){

(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5XZDRWG');

}, 4000);

</script>
<style>
    .column-0{
        width: 130px;
    }
    #table_section .table_training .t_text_h{
        border-bottom: 1px solid #ffffff;
    }
</style>
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
<section id="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-7 col-xl-8"><div class="left_banner">
            <img src="assets/img/EC-Council-Circle-of-Excell.png">
            <div class="b_test_box">
                <h2 class="b_com">EC-Council ATC Circle of Excellence Award</h2>
                <h1 class="e_hacker">2021</h1>
                <h2 class="e_council">Certified Chief Information Security Officer (CCISO)</h2>
                <h4 class="c_ethical">Training & Certification Courses</h4>

                <ul class="list_trainer">
                    <li>• 40 hrs of instructor-led training </li> 
				<li>• Includes exam and EC-Council E Kit </li> 
				<li>• Access to Pre-recorded Sessions </li> 
				<li>• Study Materials</li> 
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
                     
                        <input type="text" class="form-control" name="me_phone" value="" id="me_phone" placeholder="Phone Number"> 
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
                <input type="hidden"   value="Certified Chief Information Security Officer(CCISO)" id="me_others" name="me_others"  > 
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


<section id="certification">
  <div class="container bo-x-l" id="overview">
    <div class="row">
      <div class="col-12 wow fadeInLeft">
        <h2 class="package-heading">CCISO Training Includes</h2>
      </div>
    </div>
    <div class="row box wow fadeInUp">
      <div class="col-sm-6 col-lg-3">
          <div class="cert_box">
              <a href="#" class="box_link">
                  <img src="assets/img/web-browser.png">
                  <span>Official & Structured Courseware</span>
              </a>
          </div>
      </div>
      <div class="mt-4 mt-sm-0 col-sm-6 col-lg-3">
          <div class="cert_box">
              <a href="#" class="box_link">
                  <img src="assets/img/path834.png">
                  <span>Learn From The Experts</span>
              </a>
          </div>
      </div>
      <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
          <div class="cert_box">
              <a href="#" class="box_link">
                  <img src="assets/img/badge.png">
                  <span>Certification Exam</span>
              </a>
          </div>
      </div>
      <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
          <div class="cert_box">
              <a href="#" class="box_link">
                  <img src="assets/img/certificate.png">
                  <span>Course Completion Certificate</span>
              </a>
          </div>
      </div>
    </div>
  </div>
</section>


<section id="course">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInLeft">
        <h2 class="course-heading">CCISO Course Content / Exam(s)</h2>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
           <ul class="nav nav-tabs cor_t-b">
            <li class=" c_b"><a data-toggle="tab" href="#whe_ceh" class="active">Course Overview</a></li>
            <li class="c_b"><a data-toggle="tab" href="#course_objectives">Course Objectives</a></li>
            <li class="c_b"><a data-toggle="tab" href="#course_content">Course Content</a></li>
            <li class="c_b"><a data-toggle="tab" href="#who_should_attend">Who Should Attend</a></li>
            <li class="c_b"><a data-toggle="tab" href="#pre-requisite">Pre-Requisite</a></li>
            <li class="c_b"><a data-toggle="tab" href="#exam">Exam</a></li>
          </ul>

              <div class="tab-content">
                <div id="whe_ceh" class="tab-pane fade in active">
                     
                  <img src="assets/img_2/CCISO21.jpg" align="right" class="d-inline-block ml-3">
                        <p class="course_para">EC-Council’s CCISO Program has certified leading information security professionals around the world. A core group of high-level information security executives, the CCISO Advisory Board, contributed by forming the foundation of the program and outlining the content that would be covered by the exam, body of knowledge, and training. Some members of the Board contributed as authors, others as exam writers, others as quality assurance checks, and still others as trainers. Each segment of the program was developed with the aspiring CISO in mind and looks to transfer the knowledge of seasoned professionals to the next generation in the areas that are most critical in the development and maintenance of a successful information security program.</p>
					   <img src="assets/img_2/ec-council_accredited_trainin.png" align="right" class="d-inline-block ml-3">
					    <p class="course_para">The Certified CISO (CCISO) program is the first of its kind training and certification program aimed at producing top-level information security executives. The CCISO does not focus solely on technical knowledge but on the application of information security management principles from an executive management point of view. The program was developed by sitting CISOs for current and aspiring CISOs.</p>
					   <p class="course_para">
					   In order to sit for the CCISO exam and earn the certification, candidates must meet the basic CCISO requirements. Candidates who do not yet meet the CCISO requirements but are interested in information security management can pursue the EC-Council Information Security Management (EISM) certification.
					   </p>

                </div>
				
                <div id="course_objectives" class="tab-pane fade">
                  <p class="course_para"> <strong>Why should you consider the CCISO program?</strong></p>
          <p class="course_para">The CCISO Certification is an industry-leading program that recognizes the real-world experience necessary to succeed at the highest executive levels of information security.
</p>
 <p class="course_para">
Bringing together all the components required for a C-Level positions, the CCISO program combines audit management, governance, IS controls, human capital management, strategic program development, and the financial expertise vital to leading a highly successful IS program. Material in the CCISO Program assumes a high-level understanding of technical topics and doesn’t spend much time on strictly technical information, but rather on the application of technical knowledge to an information security executive’s day-to-day work. The CCISO aims to bridge the gap between the executive management knowledge that CISOs need and the technical knowledge that many aspiring CISOs have. This can be a crucial gap as a practitioner endeavors to move from mid-management to upper, executive management roles. Much of this is traditionally learned as on the job training, but the CCISO Training Program can be the key to a successful transition to the highest ranks of information security management.</p>

                </div>
				
                <div id="course_content" class="tab-pane fade">
				
				
					 <!---------------------------->
		 <p class="course_para"><strong>Domain 1: Governance (Policy, Legal, and Compliance)</strong></p>
 <ul class="course_list">
  <li><i class="fa fa-chevron-right"></i> Information Security Management Program</li>
  <li><i class="fa fa-chevron-right"></i> Defining an Information Security Governance Program</li>
  <li><i class="fa fa-chevron-right"></i> Regulatory and Legal Compliance</li>
  <li><i class="fa fa-chevron-right"></i> Risk Management</li>
</ul>
<p class="course_para"><strong>Domain 2: IS Management Controls and Auditing Management</strong></p>
 <ul class="course_list">
  <li><i class="fa fa-chevron-right"></i> Designing, deploying, and managing security controls</li>
  <li><i class="fa fa-chevron-right"></i> Understanding security controls types and objectives</li>
  <li><i class="fa fa-chevron-right"></i> Implementing control assurance frameworks</li>
  <li><i class="fa fa-chevron-right"></i> Understanding the audit management process</li>
</ul>
<p class="course_para"><strong>Domain 3: Security Program Management &amp; Operations</strong></p>
 <ul class="course_list">
  <li><i class="fa fa-chevron-right"></i> The role of the CISO</li>
  <li><i class="fa fa-chevron-right"></i> Information Security Projects</li>
  <li><i class="fa fa-chevron-right"></i> Integration of security requirements into other operational processes (change management, version control, disaster recovery, etc.)</li>
</ul>
<p class="course_para"><strong>Domain 4: Information Security Core Concepts</strong></p>
 <ul class="course_list">
  <li><i class="fa fa-chevron-right"></i> Access Controls</li>
  <li><i class="fa fa-chevron-right"></i> Physical Security</li>
  <li><i class="fa fa-chevron-right"></i> Disaster Recovery and Business Continuity Planning</li>
  <li><i class="fa fa-chevron-right"></i> Network Security</li>
  <li><i class="fa fa-chevron-right"></i> Threat and Vulnerability Management</li>
  <li><i class="fa fa-chevron-right"></i> Application Security</li>
  <li><i class="fa fa-chevron-right"></i> System Security</li>
  <li><i class="fa fa-chevron-right"></i> Encryption</li>
  <li><i class="fa fa-chevron-right"></i> Vulnerability Assessments and Penetration Testing</li>
  <li><i class="fa fa-chevron-right"></i> Computer Forensics and Incident Response</li>
</ul>
<p class="course_para"><strong>Domain 5: Strategic Planning, Finance, &amp; Vendor Management</strong></p>
 <ul class="course_list">
  <li><i class="fa fa-chevron-right"></i> Security Strategic Planning</li>
  <li><i class="fa fa-chevron-right"></i> Alignment with business goals and risk tolerance</li>
  <li><i class="fa fa-chevron-right"></i> Security emerging trends</li>
  <li><i class="fa fa-chevron-right"></i> Key Performance Indicators (KPI)</li>
  <li><i class="fa fa-chevron-right"></i> Financial Planning</li>
  <li><i class="fa fa-chevron-right"></i> Development of business cases for security</li>
  <li><i class="fa fa-chevron-right"></i> Analyzing, forecasting, and developing a capital expense budget</li>
  <li><i class="fa fa-chevron-right"></i> Analyzing, forecasting, and developing an operating expense budget</li>
  <li><i class="fa fa-chevron-right"></i> Return on Investment (ROI) and cost-benefit analysis</li>
  <li><i class="fa fa-chevron-right"></i> Vendor management</li>
  <li><i class="fa fa-chevron-right"></i> Integrating security requirements into the contractual agreement and procurement process</li>
</ul>


		 <!---------------------------->
                  
                </div>
                <div id="who_should_attend" class="tab-pane fade">
                
				  
				  <p class="course_para">Candidates who undergo the training programwould require five-year experience in any three domains of the CISO to undertake the exam. Candidates who don’t undergo the training but possess five years of experience in the five aforementioned CISO domains are also eligible to take up this examination.</p>
			
  <ul class="course_list">
<li><i class="fa fa-chevron-right"></i> Network Engineers with security specialization</li>
<li><i class="fa fa-chevron-right"></i> Experienced IT Professionals engaged in information security management</li>
<li><i class="fa fa-chevron-right"></i> Those who perform CISO functions, but don’t have an official title</li>
<li><i class="fa fa-chevron-right"></i> All the professionals who aspire to reach top-level position in information security profession</li>
</ul>

                </div>
                <div id="pre-requisite" class="tab-pane fade">
                  <p class="course_para">People who have certified experience and knowledge of the following Chief Information Security Officer domains should target this exam:</p>  
		 <ul class="course_list">
                  <li><i class="fa fa-chevron-right"></i> Strategic Planning &amp; Finance</li>
                  <li><i class="fa fa-chevron-right"></i> Governance- Policy, Legal &amp; Compliance</li>
                  <li><i class="fa fa-chevron-right"></i> Information Security Management Controls and Auditing Management (Projects, Technology &amp; Operations).</li>
                  <li><i class="fa fa-chevron-right"></i> Project and Operations Management </li>
                  <li><i class="fa fa-chevron-right"></i> IS Core Competencies</li>
                </ul>
                </div>
                <div id="exam" class="tab-pane fade">
                <ul class="course_list">
                  <li><i class="fa fa-chevron-right"></i><strong> Number of Questions-</strong> 150</li>
                  <li> <i class="fa fa-chevron-right"></i><strong> Type of Questions-</strong> Multiple Choice Questions</li>
                  <li> <i class="fa fa-chevron-right"></i><strong> Exam Duration-</strong> 2.5</li>
                  <li> <i class="fa fa-chevron-right"></i><strong> Cut Score-</strong> Anywhere between 60 to 80 per cent </li>
                </ul>
                </div>

              </div>
            </div>
        </div>
    </div>
  </div>
</section>



<section id="table_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive wow fadeInLeft table_training">
                    <h1 class="t_text_h wow fadeInDown">CCISO  Training Calendar</h1>
                      <?php
$url = "https://www.infosectrain.com/api/32382/training_cal_courses/free_demo";
 
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

<section id="what_new">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="new_text_h wow fadeInDown">Following Self-Paced course <span class="text-danger">ABSOLUTELY FREE</span></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="what_n_box">
                    <h2 class="what_h_box">Cyber Security Fundamentals Self-paced Learning  </h2>
                    <ul class="list_what-new">
                        <li>19hrs on-demand video </li>
                        <li>195 lectures</li>
                        
                    </ul>
                    <span class="text-white font-weight-bold"><del>USD 45</del> FREE </span>
                    
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mt-4 mt-sm-0">
                <div class="what_n_box">
                    <h2 class="what_h_box">Microsoft AZ-900 Self-paced Learning </h2>
                    <ul class="list_what-new">
                       <li>6hrs on-demand video </li>
                        <li>65 lectures</li>
                    </ul>
                    <span class="text-white font-weight-bold"><del>USD 20</del> FREE </span>
            
                </div>
            </div>
         
        </div>
    </div>
</section>


<section id="what_new">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="new_text_h wow fadeInDown">Domain Coverage Between Ceritifications</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <center>
	  <img src="assets/img_2/traning.jpg" width="100%" align="middle"  style="text-align:center;">
	 
	  </center>
            </div>
            
         
        </div>
       
    </div>
</section>

<section id="what_new">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="new_text_h wow fadeInDown">What’s New in CCISO</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="what_n_box">
                    <h2 class="what_h_box">Enumeration</h2>
                    <ul class="list_what-new">
                        <li>• NFS Enumeration </li>
                        <li>• NFS Enumeration Tools</li>
                        <li>• DNS Cache Snooping</li>
                        <li>• DNSSEC Zone Walking</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4 mt-sm-0">
                <div class="what_n_box">
                    <h2 class="what_h_box">Malware Threats</h2>
                    <ul class="list_what-new">
                        <li>• APT Concepts</li>
                        <li>• Fireless Malware Concepts</li>
                        <li>• Trojan Analysis: Emotet</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <div class="what_n_box">
                    <h2 class="what_h_box">Cloud Computing</h2>
                    <ul class="list_what-new">
                        <li>• Kubernetes Vulnerabilities & Solutions</li>
                        <li>• Serverless Application Security Solutions</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <div class="what_n_box">
                    <h2 class="what_h_box">IoT Hacking</h2>
                    <ul class="list_what-new">
                        <li>• IoT Device Management</li>
                        <li>• OT Concepts</li>
                        <li>• OT Attacks </li>
                        <li>• OT Hacking Methodology</li>
                        <li>• OT Countermeasures</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="highlight">
    <div class="container">
        <div class="row">
          <div class="col-12 wow fadeInLeft">
            <h2 class="highlight-heading">Highlights of some of what sets CCISO apart from the rest</h2>
          </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="h_b_cont">
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/lock.png" class="dhover">
                            <img src="assets/img/lock_h.png" class="hover">
                            Mapped to<br> NICE 2.0
                        </a>

                    </div>
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/laptop.png" class="dhover">
                            <img src="assets/img/laptop_h.png" class="hover">
                            Better <br>Interface
                        </a>
                    </div>
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/data_1.png" class="dhover">
                            <img src="assets/img/data_1_h.png" class="hover">
                            Emerging Attack<br> Vectors
                        </a>
                    </div>
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/data_h.png" class="dhover">
                             <img src="assets/img/data.png" class="hover">
                            Modern Exploit <br>Technologies
                        </a>
                    </div>
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/password.png" class="dhover">
                            <img src="assets/img/password_h.png" class="hover">
                            Hands-on Hacking <br>Chellengges
                        </a>
                    </div>
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/email_2.png" class="dhover">
                            <img src="assets/img/email_2_h.png" class="hover">
                            Enhanced Focus on <br>Malware Analysis
                        </a>
                    </div>
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/pc.png" class="dhover">
                            <img src="assets/img/pc_h.png" class="hover">
                            Live, Cyber Range <br>(no simulations)
                        </a>
                    </div>
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/secure.png" class="dhover">
                            <img src="assets/img/secure_h.png" class="hover">
                            Greater Focus<br> on Cloud and IoT
                        </a>
                    </div>
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/touch.png" class="dhover">
                            <img src="assets/img/touch_h.png" class="hover">
                            Thousands of Hacking <br>Techniques and Tools
                        </a>
                    </div>
                    <div class="box_sets hover-box">
                        <a href="#" class="set_link">
                            <img src="assets/img/lock.png" class="dhover">
                            <img src="assets/img/lock_h.png" class="hover">
                            Modern Case Studies <br>and Current Events
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="profile_card">
    <div class="container" id="reviews">
        <div class="row">
            <div class="col-12 wow fadeInDown">
                <h2 class="pro_crd_heading">Our Course Advisors</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="profile_card_carousel owl-carousel owl-theme wow fadeInUp">
                  <!----------------  
                  <div class="item card">
                        <div class="card-box">
                          <div class="prof-img">
                            <img src="assets/img/bharat.png" alt="" class="p_image">
                            <span class="icon_img">
                                <img src="assets/img/user.png" alt="bharat mutha">
                            </span>
                          </div>
                            <h2 class="name">BHARAT MUTHA</h2>
                            <h3 class="cou_name text-capitalize">10+ years of experience </h3>
                            <h3 class="cou_name">Senior Information Security Consultant & Trainer  </h3>
                            <p class="para-card">
                            Bharat has delivered & consulted a wide range of clientele on Cybersecurity verticals and Information Security. He has an excellent track record on the exam success rate of his students.
                            </p>
                        </div>
                    </div>------>
                    <div class="item card">
                        <div class="card-box">
                          <div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2020/12/Sanyam.png" alt="SANYAM NEGI"  class="p_image">
                           <!-- <center>
					<div class="box_latter">R</div></center> -->
                            <span class="icon_img">
                                <img src="assets/img/user.png" alt="bharat mutha">
                            </span>
                                <!-- <img src="assets/img/user.png"> -->
                          </div>
                            <h2 class="name">SANYAM NEGI</h2>
                            <h3 class="cou_name text-capitalize">14+ years of experience </h3>
                            <h3 class="cou_name">CCISO | CEH | CHFI | CTIA | CHFI | CND | CSA | Sec+ | Pentest+ | CySA+ | AWS Sec | AWS Architect</h3>
                            <p class="para-card">
                                Sanyam is an Information Security Consultant & Trainer with 9+ years of hands-on experience in Security Testing, Cloud Security and DevOps.
                            </p>
                        </div>
                    </div>
                    
                    

                  
                </div>
            </div>
        </div>
    </div>
</section>


<section id="infosec_train">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="info_tr_head">Why Infosec Train</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="info_left">
                   <div class="in_f_b hover-box">
                       <img src="assets/img/user_2.png" class="dhover">
                       <img src="assets/img/user_2_h.png" class="hover">
                       <p class="text_i_t">Certified & Experienced Instructors</p>
                   </div> 
                   <div class="in_f_b hover-box">
                       <img src="assets/img/cust.png" class="dhover">
                       <img src="assets/img/cust_h.png" class="hover">
                       <p class="text_i_t">Post Training <br>Support</p>
                   </div> 
                   <div class="in_f_b hover-box">
                       <img src="assets/img/star.png" class="dhover">
                       <img src="assets/img/star_h.png" class="hover">
                       <p class="text_i_t">Flexible Schedule</p>
                   </div> 
                   <div class="in_f_b hover-box">
                       <img src="assets/img/cal_h.png" class="dhover">
                       <img src="assets/img/cal.png" class="hover">
                       <p class="text_i_t">Tailor Made Training</p>
                   </div> 
                </div>
            </div>
            <div class="col-md-7 mt-4 mt-md-0">
                <div class="info_right">
                    <p class="text-r_info">Looking For A Flexible, Customize, Cost-Effective Learning Solution? We Are Just A Click Away</p>
                    <a href="#free_demo" class="btn-danger btn href_toscroll training_cal_courses  training_cal_courses">Schedule A Demo <img src="assets/img/r-a-2.png"></a>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="word_praise">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2 class="word_tr_head">Words of Praise</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="carousel-cont">
                        <div class="owl-slid-a owl-carousel owl-theme">
                            <div class="item card">
                                <div class="word_box">
                                    <div class="top_text_w">
                                        <p class="word_p_t">
                                            The instructor clearly presented the skills to be learned, he engaged the class in productive discussions, I enjoyed the course and learned a lot from it and he explained concepts clearly.
                                        </p>
                                    </div>
                                    <div class="w_p_image">
                                        <div class="pr_crd_img">
                                            <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/YUOSOF-150x150.jpg" alt="YUOSOF RADI">
                                        </div>
                                        <h3 class="card_p_name"> YUOSOF RADI </h3>
                                        <p class="card_p_addr"></p>
                                        <p class="card_rate">
                                            <img src="assets/img/rate.png">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item card">
                                <div class="word_box">
                                      <div class="top_text_w">
                                        <p class="word_p_t"> 
                                            It was a good session and gathered all relevant information with regards to the CCISO knowledge and skills  
                                        </p>
                                    </div>
                                    <div class="w_p_image">
                                        <div class="pr_crd_img">
                                            <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/Anbu_Selvan-150x150.jpg" alt="Anbu Selvan">
                                        </div>
                                        <h3 class="card_p_name"> Anbu Selvan Chellappa Nadar  </h3>
                                        <p class="card_p_addr"></p>
                                        <p class="card_rate">
                                            <img src="assets/img/rate.png">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="item card">
                                <div class="word_box">
                                      <div class="top_text_w">
                                        <p class="word_p_t">
                                              Cleared my concepts thoroughly, loved every bit of the training program. The Instructor was excellent and engaged us well. Highly recommended!  
                                        </p>
                                    </div>
                                    <div class="w_p_image">
                                        <div class="pr_crd_img">
                                            <img src="https://www.infosectrain.com/wp-content/uploads/2021/10/Siddesh-150x150.jpg">
                                        </div>
                                        <h3 class="card_p_name">Siddesh S Chavan </h3>
                                        <p class="card_p_addr"></p>
                                        <p class="card_rate">
                                            <img src="assets/img/rate.png">
                                        </p>
                                    </div>
                                </div>
                                </div> -->
                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="word_praise" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
			 <h2 class="word_tr_head">Related Courses</h2>
         
            </div>
        </div>
        <div class="row mt-4 wow fadeInUp">
            <div class="col-md-6 col-lg-3">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/cisa/" class="link_box" target="_blank">
                        <img src="assets/img_2/CISA.png" />
						<span>CISA Certification Course </span>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-md-0 mt-4">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/cism/" class="link_box" target="_blank">
					 <img src="assets/img_2/cism.png" />
                        <span>CISM Certification Course </span>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/cissp-new/" class="link_box" target="_blank">
                         <img src="assets/img_2/cissp.png" />
                        <span>CISSP Certification Training  </span>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/security/" class="link_box" target="_blank">
                        <img src="assets/img_2/comtia.png" />
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
                    <p class="foot_p"><a href="tel:1800-843-7890" class="text-white"><img src="assets/img_2/call.svg" /> 1800-843-7890 (IN)</a></p>
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
			<p class="copy-r">All rights reserved. &copy; <?php echo date('Y');?>, Infosec Train</p>
			</div>
			
			
            <!--<div class="col-12 col-md-3">
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
            </div>-->
        </div>
    </div>
</section>



<!--<section id="footer_buttom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="foot_con">
                    <h2 class="foot_h">About Infosec Train</h2>
                    <p class="foot_p">Infosec Train is a Technology related organization focusing on a variety of<br> IT Security Trainings and Information Security Services.</p>
                </div>
                <div class="buttom_links">
                   <a href="tel:1800-843-7890"><img src="assets/img/cell.png" class="align-middle mr-2"> 1800-843-7890 (India)</a>   <a href="tel: +1 657-221-1127"> US: +1 657-722-11127</a>   <a href="tel:+44 7451 208413">UK : +44 7451 208413</a>
                   <a href="mailto:sales@infosectrain.com"><img src="assets/img/email.png" class="align-middle mr-2"> sales@infosectrain.com</a>
                </div>
                <div class="copy_r">
                    <p class="copy_r_t">
                        All rights reserved. © 2021, Infosec Train
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>-->


 <?php include('include/footer.php');?>  
  <!----------------whatsapp------------>
<script> 
   $(function(){
       $('#filename').load("../whatap.html");
   });
    </script>

    <div id="filename"></div>
    <!----------------whatsapp------------>
    <script>
    //table display without data
let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
        document.querySelector('.navbar-nav .nav-item:nth-child(3)').style.display = "none";
    }
  </script>
</body>
</html>
