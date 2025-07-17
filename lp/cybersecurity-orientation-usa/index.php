<!DOCTYPE html>
<?php include('include/comman_use.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Orientation USA</title>
    <!--/cs link start-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--/css link end-->
    <style>
    .hide{display: none;}
    .loading_w {
        width: 100%;
        text-align: center;
        float: left;
    }
    .rows ul li{
  list-style: none;
  color: #ffffff;
    /* font-weight: 600; */
  text-transform: capitalize;
  letter-spacing: 1px;
}
.alert-danger{
  padding: 8px;
}
.alert-danger p{
  padding: 5px 0 5px 0;
  color: #1a1818;
  font-weight: 500;
}
#demo_form_output{
  width: 90%;
  margin: auto;
  display: block;
  background: #00000021;
  border-radius: 5px;
}
</style>
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
<main>
    <!--/ banner sec start -->
    <section class="banner">
        <div class="container">
            <div class="row rowlogo">
                <img src="assets/img/infosectrain-logo.png" alt="" class="logo">
                <div class="rowlogo-link">
                    <a href="tel:+16572211127"><span>+1 657-221-1127 (USA)</a>
                    <a href="assets/Cybersecurity Orientation Program.pdf" Download="Cybersecurity Orientation Program.pdf"> Download Syllabus </a>
                </div>
            </div>
            <div class="row">
                <div class="item">
                    <h1>Free Cyber security <span>Orientation Program For USA</span></h1>
                    <p>
                        Cybersecurity is a Necessity that the World is Accepting. <br>
                        Are you Adapting to this Worldwide Disruption?
                    </p>
                    <!-- <div class="countdown-offer">
                        <div class="timer">
                            <div class="time">
                                <span id="day">10</span>
                            </div>
                            <p>Days</p>
                        </div>
                        <div class="timer">
                            <div class="time">
                                <span id="hours">20</span>
                            </div>
                            <p>Hours</p>
                        </div>
                        <div class="timer">
                            <div class="time">
                                <span id="minutes">2</span>
                            </div>
                            <p>Hours / Day</p>
                        </div>
                    </div> -->
                    <div class="date">
                        <p>
                            10 Days | 2 Hours a Day 
                            <!-- <span style="display:block;font-size:18px;">Program Schedule</span> -->
                        </p>
                        <p>June 18th - 29th, 2023</p>
                        <p>9:30 to 11:30 PM EST</p>
                    </div>
                </div>
                <div class="item item-two">
                    <div class="form-header">
                        begin your cyber security career now
                    </div>
                    <div class="hide rows  mt-2" id="demo_form_output">  </div>
                    <form method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f">
                        <div class="floating-label-group">
                            <input type="text" id="me_name" name="me_name" placeholder="Name*"/>
                        </div>
                        <div class="floating-label-group">
                            <input type="email" id="me_email" name="me_email" placeholder="Email*"/>
                        </div>
                        <div class="floating-label-group">
                            <input type="tel" id="me_phone" name="me_phone" placeholder="Mobile Number"/>
                        </div>
                        <div class="floating-label-group">
                            <textarea id="me_message" value=""  name="me_message" placeholder="Send a Query" cols="30" rows="4"></textarea>
                                
                        </div>
                        <span style="background: #0a3161;color: #ffffff;padding: 5px;font-size: 14px;/* border-radius: 50px; */letter-spacing: 1px;position: absolute;bottom: -30px;right: 50%;transform: translateX(50%);">
                            *For US Residents Only
                        </span>
                        <!--/hideen input start-->
                        <input type="hidden" id="me_redirect"   value="<?php echo BASE_URL;?>thank-you.html"  > 
                		            <input type="hidden" id="me_others"  name="me_others"  value="soc-exam-certification"   > 
						            <input type="hidden" id="me_pageurl" name="me_pageurl" value="<?php echo $pag_url;?>"  > 
                                <!--/hideen input start-->
                        <input type="submit" value="Join the Revolution" name="me_submited" id="me_submited">
                    </form>
                    <div class="loading_w hide" id="loading_w">
                                <center>
                                    <img src="<?php echo BASE_URL; ?>assets/img/loader.gif"/>
                                </center>
                            </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ banner sec end -->
    <!--highlights sec start-->
    <section class="highlight-sec" style="background: #1a1818;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="item">
                    <div class="item-icon">
                        <img src="assets/img/icon/certificate.png" alt="">
                    </div>
                    <p>Learn from Certified Experts</p>
                </div>
                <div class="item" style="box-shadow: 0 2px 4px rgba(0,0,0,.12), inset 0 3px 0 #7ed321;">
                    <div class="item-icon">
                        <img src="assets/img/icon/recorded.png" alt="">
                    </div>
                    <p>Get Recorded Sessions</p>
                </div>
                <div class="item" style="box-shadow: 0 2px 4px rgba(0,0,0,.12), inset 0 3px 0 #f5c723;">
                    <div class="item-icon">
                        <img src="assets/img/icon/expert.png" alt="">
                    </div>
                    <p>Earn Certificate of Completion </p>
                </div>
                <div class="item" style="box-shadow: 0 2px 4px rgba(0,0,0,.12), inset 0 3px 0 #57a4ff;">
                    <div class="item-icon">
                        <img src="assets/img/icon/career.png" alt="">
                    </div>
                    <p>Get Career Guidance & Mentorship</p>
                </div>
            </div>
        </div>
    </section>
    <!--highlights sec start-->

    <!--/ course content sec -->
    <section class="faq-sec">
        <div class="container">
            <h2>Course Content</h2>
            <div class="row">
                
                <div class="accordion">
                    Security Foundations: "Securing Your World: A Guide to Information Security"
                </div>
                <div class="panel">
                    <ul>
                        <li>What is Information Security?</li>
                        <li>Principles of Information Security</li>
                        <li>Elements of Information Security - CIA Triad</li>
                        <li>Attacker Types</li>
                        <li>Attacking Methodology</li>
                        <li>Information Security Controls</li>
                    </ul>
                </div>

                <div class="accordion">Kali Linux Essentials: "Command-Line of Penetration Testing"</div>
                <div class="panel">
                    <ul>
                        <li>Introduction to Kali Linux </li>
                        <li>Basic Linux Commands</li>
                        <li>Manipulation of Texts</li>
                        <li>Finding Files</li>
                        <li>File Management Commands</li>
                        <li>Text Editors - Nano, Vim, Mousepad</li>
                        <li>Searching, Installing, and Removing Tools</li>
                        <li>Downloading Files</li>
                    </ul>
                </div>

                <div class="accordion">Ethical Hacking: "Unleashing Your Inner Hacker"</div>
                <div class="panel">
                    <ul>
                        <li>Ethical Hacking Concepts</li>
                        <li>Hacking Motives</li>
                        <li>Ethical Hacking Phases
                            <ol>
                                <li>Reconnaissance</li>
                                <li>Scanning</li>
                                <li>Enumeration</li>
                                <li>Hacking</li>
                            </ol>
                        </li>
                        <li>Password Cracking</li>
                        <li>Privilege Escalation</li>
                        <li>Vulnerability Assessment</li>
                    </ul>
                </div>

                <div class="accordion">Web Application Security: "Hacking the Web"</div>
                <div class="panel">
                    <ul>
                        <li>Introduction to web applications</li>
                        <li>Basics of HTTP</li>
                        <li>Status codes and Headers of HTTP</li>
                        <li>Setting up the Burpsuite</li>
                        <li>Exploiting Web Application - OWASP Top 10</li>
                    </ul>
                </div>

                <div class="accordion">Introduction to Threat Intelligence & Outsmarting the Enemy</div>
                <div class="panel">
                    <ul>
                        <li>Introduction to Threat Intelligence</li>
                        <li>Types of Threat Intelligence
                            <ol>
                                <li>Strategic</li>
                                <li>Tactical</li>
                                <li>Operational</li>
                                <li>Technical</li>
                            </ol>
                        </li>
                        <li>Enhanced Detection with Threat Intelligence</li>
                        <li>Lockheed Martin - Cyber Kill Chain</li>
                    </ul>
                </div>

                <div class="accordion">Incident Response: "Responding to Cybersecurity Threats"</div>
                <div class="panel">
                    <ul>
                        <li>What is Incident Response</li>
                        <li>Phases of Incident Response</li>
                        <li>Communication Plan</li>
                        <li>What is Playbook</li>
                        <li>Incident Response Exercises using Wireshark</li>
                    </ul>
                </div>

                <div class="accordion">Digital Forensics: "Uncovering the Truth"</div>
                <div class="panel">
                    <ul>
                        <li> Introduction to Digital Forensics</li>
                        <li>Types of Forensics Computer
                            <ol>
                                <li>Network</li>
                                <li>Memory</li>
                                <li>Mobile</li>
                            </ol>
                        </li>
                        <li> Why it is Useful?</li>
                        <li> Evidence and its Types</li>
                        <li> Chain of Custody</li>
                        <li> Order of Volatility</li>
                    </ul>
                </div>

                <div class="accordion">Cryptography: "Protecting Your Data"</div>
                <div class="panel">
                    <ul>
                        <li> Cryptography concepts</li>
                        <li> Encryption and its types</li>
                        <li> Hashing and its working</li>
                        <li> Digital Signatures</li>
                        <li> Digital Certificates</li>
                    </ul>
                </div>
            </div>
            <div class="row" style="text-align:center;z-index:1;display:block;">
                <a href="#">Enroll Now</a>
            </div>
        </div>
    </section>
    <!--/ course content end -->

    <!--/meet our instructor-->
    <section class="advisor">
        <div class="container">
            <div class="row">
                <div class="item">
                    <img src="assets/img/abhishek.jpg" alt="">
                </div>
                <div class="item">
                    <h2>Meet Our Expert</h2>
                    <h4>Abhishek Sharma</h4>
                    <!-- <span>5+ Years Of Experience</span> -->
                    <p>
                        An Information Security Consultant and Trainer, Abhishek is experienced in 
                        delivering training to government and non-government organizations around 
                        the globe on different Information Security verticals.
                    </p>
                    <p>
                        Abhishek has provided training and consultancy to learners as well as organizations on the latest Information Security technologies available in the market today. He’s got exposure in
                         managing Information Security for different sectors including banking, telecom, 
                         e-Commerce, retail, healthcare and IT among others.
                    </p>
                    <a href="#demo_me_phone_f">
                        Start Learning Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--/meet our instructor-->

    <!--who should take sec start-->
    <section class="who-should">
        <div class="container">
            <div class="row">
                <div class="item">
                    <h2>Who Should Take the Cybersecurity Orientation Program? </h2>
                    <p>
                        Beginners and professionals who wish to start a career 
                        in cybersecurity and learn about its key concepts, must attend this free cybersecurity online program. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--who should take sec start-->

    <!--/why choose sec-->
    <section class="why-choose">
        <div class="container">
            <div class="row">
                <div class="item">
                    <img src="assets/img/why-choose.jpg" alt="">
                </div>
                <div class="item-two">
                    <h2>Why Enroll for this Cybersecurity Course from Infosec Train?</h2>
                    <p>
                        We specialize in cybersecurity training and certification courses with authorizations from top cybersecurity vendors such as EC-Council, CompTIA, ISACA among others. 
                    </p>
                    <p>
                        We regularly offer free of cost awareness training and webinars on the latest cybersecurity topics in the industry.
                    </p>
                    <p>
                        We have a vast portfolio of professional cybersecurity courses that span across domains and verticals.
                    </p>
                    <p>
                        Our trainers are highly qualified and subject matter experts in their respective domains.
                    </p>
                    <p>
                        We are one of the leaders in the security training industry and cater to markets across the globe.
                    </p>
                    <a href="#demo_me_phone_f">Secure Your Place Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--/why choose end-->
</main>
<!-- <footer>
    <h2>
        Secure your seat for the <br>
        FREE Cyber Security Orientation Program
    </h2>
    <a href="#demo_me_phone_f" style="background: #ffffff;color: #070A52;">Enroll Now</a>
</footer> -->

<footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="footer_item">
                    <h4>About Infosec Train</h4>
                    <p>
                        Infosec Train offers complete training and consulting solutions to its customers globally. Whether the requirements are technical services, certification or custom training, Infosec Train has consistently delivered the highest quality and best success rates in the industry.
                    </p><br>
                    <p>© 2023 - Infosec Train. All Rights Reserved.</p>
                </div>
                <div class="footer_item">
                    <h4>Quick Contact</h4>
                    <a href="https://api.whatsapp.com/send?phone=918767256840" target="_blank">
                        <span><img src="assets/img/whtsapp.png" alt=""></span>+91 876-725-6840
                    </a>
                    <a href="tel:+16572211127">
                        <span><img src="assets/img/call.png" alt=""></span>+1 657-221-1127 (USA)
                    </a>
                    <a href="mailto:sales@infosectrain.com">
                        <span><img src="assets/img/gmail.png" alt=""></span>sales@infosectrain.com
                    </a>
                </div>
                <div class="footer_item">
                    <h4>Corporate Office</h4>
                    <p>New York</p>
                    <p>
                        99 Wall Street #599 New York, <br>
                        NY 10005, United States
                    </p>
                </div>
            </div>
        </div>
    </footer>

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

<script src="assets/js/common.min.js"></script>
<script>
    let accor = document.querySelectorAll('.accordion')

    for(let i of accor){
        i.addEventListener('click',function(){
            this.classList.toggle('active');
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                panel.style.padding ="0"
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                panel.style.padding ="10px"
            }
        })
    }
</script>
</html>