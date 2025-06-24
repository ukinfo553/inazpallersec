<?php include('include/comman_use.php'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="CISSP Training and Certification course">
<meta name="author" content="Infosec Train">
 <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>CEH v11 Certification Training Courses in USA and India - Infosectrain | InfoSecTrain</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="https://infosectrain.com/wp-content/uploads/2017/10/favicon.ico" /><link rel="icon" href="https://www.infosectrain.com/wp-content/uploads/2017/10/cropped-infosec-FAV-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://www.infosectrain.com/wp-content/uploads/2017/10/cropped-infosec-FAV-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.infosectrain.com/wp-content/uploads/2017/10/cropped-infosec-FAV-1-180x180.png" />
<style type="text/css">
  .awesome {
  font-weight: 600;
  -webkit-animation: colorchange 10s infinite alternate;}
@-webkit-keyframes colorchange {
      0% {
        
        color: #ffffff;
      }
      
      10% {
        
        color: #ff1046;
      }
      
      20% {
        
        color: #ffffff;
      }
      
      30% {
        
        color: #ff1046;
      }
      
      40% {
        
        color: #fffff;
      }
      
      50% {
        
        color: #ff1046;
      }
      
      60% {
        
        color: #ffffff;
      }
      
      70% {
        
        color: #ff1046;
      }
      80% {
     
        color: #ffffff;
      }
      
      90% {
     
        color:#ff1046;
      }
      
      100% {
        
        color: #ffffff;
      }
    }

</style>

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
                <h2 class="e_council">EC-Council CEH v11</h2>
                <h4 class="c_ethical">Certified Ethical Hacking Program</h4>

                <ul class="list_trainer">
                    <li>• 40 hours of Instructor-Led Training</li>
                    <li>• EC-Council Authorized Training Partner</li>
                    <li>• EC-Council Official Courseware </li>
                    <li>• CEI  Certified Trainers</li>
                    
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
                <input type="hidden"   value="EC-Council CEH v11" id="me_others" name="me_others"  > 
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
        <h2 class="package-heading">Ceh Certification V11 Includes</h2>
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
        <h2 class="course-heading">CEH Course Content / Exam(s)</h2>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
           <ul class="nav nav-tabs cor_t-b">
            <li class=" c_b"><a data-toggle="tab" href="#whe_ceh" class="active">Why CEH v11?</a></li>
            <li class="c_b"><a data-toggle="tab" href="#course_objectives">Course Objectives</a></li>
            <li class="c_b"><a data-toggle="tab" href="#course_content">Course Content</a></li>
            <li class="c_b"><a data-toggle="tab" href="#who_should_attend">Who Should Attend</a></li>
            <li class="c_b"><a data-toggle="tab" href="#pre-requisite">Pre-Requisite</a></li>
            <li class="c_b"><a data-toggle="tab" href="#exam">Exam</a></li>
          </ul>

              <div class="tab-content">
                <div id="whe_ceh" class="tab-pane fade in active">
                     <p class="course_para">With drastic increase in devices connected to exchange the information and businesses shifting to the digitation at never-before fast pace, the devices, systems and networks’ security remains at stake and highly prone to information and data threats and hacking incidents. Companies strive to hire security professionals having utmost understanding of building and maintaining hack-proof organizational infrastructures, thereby creating skyrocketing demand of certified Ethical Hackers.<br><br>
                     EC-council’s CEH V11 certification training focuses to train aspiring security professionals to gain essential ethical hacking skills with practical implementation of scanning, testing, hacking and securing the systems. The CEH V11 training and certification from InfoSec Train features:</p>

                     <ul class="course_list">
                          <li>• Inducing “think like hacker” approach in the participants</li>
                          <li>• Explains the functioning of the perimeter defenses, scan and hacking networks without affecting the real networks to identify vulnerabilities </li>
                          <li>• Demonstrates the exploitation of privileges by intruders and fool-proof security measures to protect the security architecture of the organization</li>
                          <li>• Real-like test environments to help participants explore their acquired skills</li>
                          <li>• Interactive theory and lab sessions delivered by the industry experts having several years of experience</li>
                      </ul>

                </div>
                <div id="course_objectives" class="tab-pane fade">
                  <p class="course_para"> Successful completion the CEH V11 certification training empowers you with across the board understanding of:</p>
     <ul class="course_list">
<li><i class="fa fa-chevron-right"></i> Ethical hacking concepts, cyber kill chain concepts, an overview of information security, security controls, and various laws and regulations related to information security.</li>
<li><i class="fa fa-chevron-right"></i> Footprinting concepts and methodologies and utilizing footprinting tools along with the countermeasures</li>
<li><i class="fa fa-chevron-right"></i> Performing network scans, host and port discovery by utilizing different scanning tools</li>
<li><i class="fa fa-chevron-right"></i> Enumeration techniques that now includes NFS enumeration and related tools, DNS cache snooping, and DNSSEC Zone walking along with the countermeasures</li>
<li><i class="fa fa-chevron-right"></i> Concepts of vulnerability assessment, its types, and solutions along with a hands-on experience of industrial tools used</li>
<li><i class="fa fa-chevron-right"></i> Phases of system hacking, attacking techniques to obtain, escalate, and maintain access on victim along with covering tracks.</li>
<li><i class="fa fa-chevron-right"></i> Malware threats, analysis of various viruses, worms and trojans like Emotet and battling them to prevent data. APT and Fileless Malware concepts have been introduced to this domain.</li>
<li><i class="fa fa-chevron-right"></i> Packet sniffing concepts, techniques, and protection against the same.</li>
<li><i class="fa fa-chevron-right"></i>Social engineering concepts and related terminologies like identity theft, impersonation, insider threats, social engineering techniques, and countermeasures</li>
<li><i class="fa fa-chevron-right"></i> Denial of Service (DoS) and Distributed Denial of Service (DDoS) attacks, use cases, and attack and defence tools</li>
<li><i class="fa fa-chevron-right"></i> Security solutions like firewall, IPS, honeypots, their evasion, and protection</li>
<li><i class="fa fa-chevron-right"></i> Web server and web application-based attacks, methodologies</li>
<li><i class="fa fa-chevron-right"></i> SQL injection, hijacking, and evasion techniques</li>
<li><i class="fa fa-chevron-right"></i> Wireless encryption, wireless hacking, and Bluetooth hacking-related concepts</li>
<li><i class="fa fa-chevron-right"></i> Mobile device management, mobile platform attack vectors, and vulnerabilities related to Android and iOS systems</li>
<li><i class="fa fa-chevron-right"></i> Operational Technology (OT) essentials, threats, attack methodologies and attack prevention. The concept of OT is a new addition.</li>
<li><i class="fa fa-chevron-right"></i> Recognizing the vulnerabilities in IoT and ensuring the safety of IoT devices</li>
<li><i class="fa fa-chevron-right"></i> Encryption algorithms, Public Key Infrastructure (PKI), cryptographic attacks, and cryptanalysis</li>
<li><i class="fa fa-chevron-right"></i> Cloud computing, threats and security, essentials of container technology and serverless computing</li>
</ul>

                </div>
                <div id="course_content" class="tab-pane fade">
                  <ul class="course_list">
  <li><i class="fa fa-chevron-right"></i> <strong>Module 01 :</strong> Introduction to Ethical  Hacking - This module introduces you to the basic concepts of hacking, what is hacking, who are hackers, their intent, and other related terminologies.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 02 :</strong> Footprinting and  Reconnaissance - Gathering information from various sources using footprinting tools and how to defend against the same</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 03 :</strong> Scanning Networks - Different techniques to identify and scan the network, host, and port discovery by utilizing various scanning tools.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 04 :</strong>  Enumeration- Finding detailed information about the hosts and ports discovered during scanning. This module now includes sub-domains like NFS enumeration and related tools, DNS cache snooping, and DNSSEC Zone walking, along with the countermeasures.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 05 :</strong> Vulnerability Analysis - It introduces the concepts of vulnerability assessment, its types, along with a hands-on experience of tools that are currently used in the industry.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 06 :</strong> System Hacking - It focuses on the "how" part. How to gain access of the system, how to escalate privileges, how to maintain access, and how to clear your tracks.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 07 :</strong> Malware Threats - Malware threat terminologies, viruses, worms, trojans, their analysis, and countermeasures to prevent data loss. The introduction and analysis of malware like, Emotet and fileless that are gaining popularity have been updated under this section. APT concepts have also been added.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 08 :</strong> Sniffing - Packet sniffing techniques, associated tools, and related defensive techniques</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 09 :</strong> Social Engineering - Since humans are the most significant vulnerability for any organization, it becomes essential to understand how attackers use them for their purpose for carrying out attacks like identity theft, impersonation, insider threat, and how to defend against such social engineering attacks.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 10 :</strong> Denial-of-Service - As DoS and DDoS are some of the most common purposes of attackers, this module talks about these attacks, use cases, and the related attack and defense tools. </li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 11 :</strong> Session Hijacking - To provide a deeper understanding of the technique, its purpose, tools used along with the countermeasures.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 12 :</strong> Evading IDS, Firewalls, and  Honeypots - Understand the terminologies and working of these inline defenses and techniques to learn how to evade these while performing an attack.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 13 :</strong> Hacking Web Servers - Web servers based attacks, methodologies, tools used, and defense</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 14 :</strong> Hacking Web Applications - Web application-based attacks, techniques, and mitigation.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 15:</strong> SQL Injection - An in-depth understanding of the top OWASP top 10 web app vulnerability, it's working and the mitigation.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 16 :</strong> Hacking Wireless Networks - Wireless encryption, wireless hacking, and Bluetooth hacking-related concepts</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 17 :</strong> Hacking Mobile Platforms - Management of mobile devices, mobile platform attack vectors, and vulnerabilities related to Android and iOS systems</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 18 :</strong> IoT and OT Hacking - Recognizing the vulnerabilities in IoT and ensuring the safety of IoT devices. Operational Technology (OT) essentials, introduction to ICS, SCADA, and PLC, threats, attack methodologies, and attack prevention. The concept of OT is a new addition.</li>
  <li><i class="fa fa-chevron-right"></i> <strong>Module 19 :</strong> Cloud Computing - Cloud computing, threats, and security. Additionally, the essentials of container technology and serverless computing have been added.</li>
  <li><i class="fa fa-chevron-right"></i><strong>Module 20 :</strong> Cryptography - Encryption algorithms, Public Key Infrastructure (PKI), cryptographic attacks, and cryptanalysis.</li>
</ul>
                </div>
                <div id="who_should_attend" class="tab-pane fade">
                  <ul class="course_list">
  <li><i class="fa fa-chevron-right"></i> Information Security Analyst / Administrator</li>
  <li><i class="fa fa-chevron-right"></i> Information Assurance (IA) Security Officer</li>
  <li><i class="fa fa-chevron-right"></i> Information Security Manager / Specialist</li>
  <li><i class="fa fa-chevron-right"></i> Information Systems Security Engineer / Manager</li>
  <li><i class="fa fa-chevron-right"></i> Information Security Professionals / Officers</li>
  <li><i class="fa fa-chevron-right"></i> Information Security / IT Auditors</li>
  <li><i class="fa fa-chevron-right"></i> Risk / Threat / Vulnerability Analyst</li>
  <li><i class="fa fa-chevron-right"></i> System Administrators</li>
  <li><i class="fa fa-chevron-right"></i> Network Administrators and Engineers</li>
</ul>
                </div>
                <div id="pre-requisite" class="tab-pane fade">
                  <p class="course_para">Basic understanding of network essentials, core concepts including server and network components</p>
                </div>
                <div id="exam" class="tab-pane fade">
                <ul class="course_list">
        <li>
          <i class="fa fa-chevron-right"></i>Certification Name: 312-50 (ECC EXAM), 312-50 (VUE)     
        </li>
        <li>
          <i class="fa fa-chevron-right"></i>Test Format: Multiple Choice     
        </li>
        <li>
          <i class="fa fa-chevron-right"></i>Number of Questions: 125     
        </li>
        <li>
          <i class="fa fa-chevron-right"></i>Test Duration: 4 Hours     
        </li>
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
                    <h1 class="t_text_h wow fadeInDown">CEH v11 Training Calendar</h1>
                      <?php
$url = "https://www.infosectrain.com/api/39746/training_cal_courses/free_demo";
 
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
                <h1 class="new_text_h wow fadeInDown">What’s New in CEH v11</h1>
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
            <h2 class="highlight-heading">Highlights of some of what sets CEH v11 apart from the rest</h2>
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
                 <!--------------   
                 <div class="item card">
                        <div class="card-box">
                          <div class="prof-img">
                            <img src="assets/img/bharat.png" alt="" class="p_image">
                            <span class="icon_img">
                                <img src="assets/img/user.png">
                            </span>
                          </div>
                            <h2 class="name">Bharat</h2>
                            <h3 class="cou_name">(CEH, ECIH, CHFI, ECSA, CTIA, CSCU, CySA+, PenTest+, Security+ ) </h3>
                            <p class="para-card">
                                 Bharat served as a corporate trainer & Consultant with nearly 8+ years of experience across the diverse industry. Good hands-on experience in vulnerability assessment, Penetration Testing 
                            </p>
                        </div>
                    </div>------>
                    <div class="item card">
                        <div class="card-box">
                          <div class="prof-img">
                            <img src="assets/img/ashish.png" alt="" class="p_image">
                            <span class="icon_img">
                                <img src="assets/img/user.png">
                            </span>
                          </div>
                            <h2 class="name">Ashish Dhyani</h2>
                            <h3 class="cou_name">CEH | CND | CCNA | Network+ | Sec+ | Server+ | Linux+ | Pentest+</h3>
                            <p class="para-card">
                               
          Ashish Delivered training to government and non-government organizations around the globe with nearly 4+ years of experience on different cyber security verticals and Network Security.
                            </p>
                        </div>
                    </div>
                    <div class="item card">
                       <div class="card-box">
                          <div class="prof-img">
                            <img src="assets/img/sanyam.png" alt=""  class="p_image">
                            <span class="icon_img">
                                <img src="assets/img/user.png">
                            </span>
                          </div>
                            <h2 class="name">Sanyam</h2>
                            <h3 class="cou_name">CEH(Master), Cyber Security Analyst </h3>
                            <p class="para-card">
                               Delivering more than 30+ training programs yearly, with 250+ professionals overall, With a fair share of industry experience of around 5+ years delivering training’s and consultation around the globe, as a Developer, Cloud Architect and Security Operations. 
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
                                            I took class with InfosecTrain. He is a very good Security expert and has lots of industry & training experience. He is very punctual about the class timing and explained everything and put extra time if some for slow students.
                                        </p>
                                    </div>
                                    <div class="w_p_image">
                                        <div class="pr_crd_img">
                                            <img src="assets/img/dasun.png">
                                        </div>
                                        <h3 class="card_p_name">Dasun Herath</h3>
                                        <p class="card_p_addr">Security Analyst at Securmatic </p>
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
                                            The class was very interactive and full of learning trainer helped in every way possible and cleared all doubt. He just not covered all the topic but gave the practical so that we can have a clear understanding of each topic.
                                        </p>
                                    </div>
                                    <div class="w_p_image">
                                        <div class="pr_crd_img">
                                            <img src="assets/img/shahnawaz-khan.png">
                                        </div>
                                        <h3 class="card_p_name">Shahnawaz Khan</h3>
                                        <p class="card_p_addr">Security Engineer at IBM, USA</p>
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
                                            You will not only let you explore the surface of CEH but shows you how to dive deep into Ethical Hacking. I am glad to a apart of his splendid triaining session through InfosecTrain. I strongly recommend InfosecTrain for CEH and other ethical hacking programs.
                                        </p>
                                    </div>
                                    <div class="w_p_image">
                                        <div class="pr_crd_img">
                                            <img src="assets/img/mohit-ranjan.png">
                                        </div>
                                        <h3 class="card_p_name">Mohit Ranjan</h3>
                                        <p class="card_p_addr">Security Engineer at IBM, USA</p>
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
                                                
    I had the opportunity to take  CEH Training in Infosectrain. His trainer has sound & in-depth knowledge of each module of CEH. Trainer always provides real world example from our daily life which helped me in understanding the concepts. Demonstration of the labs on his lab env
                                            </p>
                                        </div>
                                        <div class="w_p_image">
                                            <div class="pr_crd_img">
                                                <img src="assets/img/rajiv.png">
                                            </div>
                                            <h3 class="card_p_name">RAJIV DEWAN</h3>
                                            <p class="card_p_addr">Sr Technical Product Manager, USA</p>
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
                                                I took class with InfosecTrain. He is a very good Security expert and has lots of industry & training experience. He is very punctual about the class timing and explained everything and put extra time if some for slow students.
                                            </p>
                                        </div>
                                        <div class="w_p_image">
                                            <div class="pr_crd_img">
                                                <img src="assets/img/mohammed.png">
                                            </div>
                                            <h3 class="card_p_name">Mohammed</h3>
                                            <p class="card_p_addr">Security Engineer at IBM, USA</p>
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
                                              Expert has highly knowledgeable, hands-on and adept at using various tools and scripting. He gave us a deep insight into the subject. He is very passionate about teaching and teaches beyond the syllabus with great emphasis on practical learning. 
                                            </p>
                                        </div>
                                        <div class="w_p_image">
                                            <div class="pr_crd_img">
                                                <img src="assets/img/Ganesh.png">
                                            </div>
                                            <h3 class="card_p_name">Ganesh</h3>
                                            <p class="card_p_addr">Cognizant </p>
                                            <p class="card_rate">
                                                <img src="assets/img/rate.png">
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                


                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>



<section id="footer_buttom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="foot_con">
                    <h2 class="foot_h">About Infosec Train</h2>
                    <p class="foot_p">Infosec Train is a Technology related organization focusing on a variety of<br> IT Security Trainings and Information Security Services.</p>
                </div>
                <div class="buttom_links">
                   <a href="tel:1800-843-7890"><img src="assets/img/cell.png" class="align-middle mr-2"> 1800-843-7890 (IND)</a>
                   <a href="tel: +1657-221-1127"> US: +1 657-221-1127</a>
                   <a href="mailto:sales@infosectrain.com"><img src="assets/img/email.png" class="align-middle mr-2"> sales@infosectrain.com</a>
                </div>
                <div class="copy_r">
                    <p class="copy_r_t">
                        All rights reserved. © <?php echo date('Y');?>, Infosec Train
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

 
 <?php include('include/footer.php');?>
 
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
