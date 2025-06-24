<?php include('include/comman_use.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOC EXAM CERTIFICATION|INFOSECTRAIN</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--style start-->
        <link rel="stylesheet" href="assests/css/bootstrap.min.css">
        <link rel="stylesheet" href="assests/css/style.css">
    <!--style end-->
    <style>
        .hide{display: none;}
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

    <nav class="navbar py-3">
        <div class="container text-center">
          <a class="navbar-brand" href="https://www.infosectrain.com/" target="_blank" alt="infosectrain">
            <img src="assests/images/logo.png" alt="Avatar Logo" class="img-fluid d-block mx-auto"> 
          </a>
        </div>
      </nav>
<main>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-md-start text-center">
                    <div class="title">
                        <span style ="color:#4F4F50;">test your </span>  <br/> blue teaming skills 
                    </div>
                    <div class="subtitle">
                       with the 1st ever <br/> one-of-its-kind <br/> <span>100% practical hands-on</span>
                    </div>
                    <h1>
                        SOC (Security Operations Center) <br/>certification exam
                    </h1>
                </div>
                <div class="col-lg-4">
                    <div class="form">
                        <div class="h4 text-uppercase fw-bold text-center mb-4">hurry up now!</div>
                        <div class="hide rows  mt-2" id="demo_form_output">  </div>
                        <form method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f">
                            <div class="mb-3">
                                <input type="text" id="me_name" name="me_name" placeholder="Your Name*">
                            </div>
                            <div class="mb-3">
                                <input type="tel" id="me_phone" name="me_phone" placeholder="Phone Number*" onkeyup='Validate(this.id,"integer");'>
                            </div>
                            <div class="mb-3">
                                <input type="email" id="me_email" name="me_email" placeholder="Email*">
                            </div>
                            <div class="mb-3">
                                <input type="url" id="me_linkedin" name="me_linkedin" placeholder="Your Linkedin Url*">
                            </div>
                            <div class="mb-3">
                                <textarea id="me_message" value=""  name="me_message" cols="30" rows="4" placeholder="Enter Your query/ requirrement*"></textarea>
                            </div>
                            <input type="hidden" id="me_redirect"   value="<?php echo BASE_URL;?>thank-you.html"  > 
                		    <input type="hidden" id="me_others"  name="me_others"  value="soc-exam-certification"   > 
						    <input type="hidden" id="me_pageurl" name="me_pageurl" value="<?php echo $pag_url;?>"  > 
                            <div class="d-grid">
                                <input type="submit" value="Register Now" name="me_submited" id="me_submited">
                            </div>
                        </form>
                        <div class="loading_w hide" id="loading_w">
                            <center>
                                <img src="<?php echo BASE_URL; ?>assests/images/loader.gif"/>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--/into sec start-->
    <section class="introsec">
        <div class="container mt-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2>introduction</h2>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-4">
                    <div class="intro-item">
                        <img src="assests/images/SKILLS.png" alt="test skills">
                        <p>
                            Have You Got The Skills to Detect And Prevent Security Threats and Incidents?
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro-item">
                        <img src="assests/images/BLUE-TEAMER.png" alt="blue teamer">
                        <p>
                            Can You Call Yourself a True Defender?
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="intro-item">
                        <img src="assests/images/EXAM-PRACTICE.png" alt="exam practice">
                        <p>Take this SOC Practice Exam to Assess the Defender in You</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro-item">
                        <img src="assests/images/PRACTICAL.png" alt="test practical">
                        <p>Try the 1st Ever Certificate of SOC and Establish Your Expertise as a SOC Expert</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/intro sec end-->
    <!--/into sec start-->
    <section class="getsec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-white">what you get</h2>
                </div>
            </div>
            <div class="row justify-content-center py-3">
                <div class="col-md-4">
                    <div class="get-item">
                        <img src="assests/images/mentorship.png" alt="mentorship">
                        <p>24 Hours of Full-fledged Practical Scenario-based Exam</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-item">
                        <img src="assests/images/review.png" alt="review">
                        <p>Detailed Assessment and <br/> Review</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-item">
                        <img src="assests/images/career.png" alt="career guidance">
                        <p>Career Guidance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/intro sec end-->
    <!--/into sec start-->
    <section class="stepsec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>STEPS tO REGISTER</h2>
                </div>
            </div>
            <div class="row mt-md-5 mt-3">
                <div class="col-md-4 col-sm-6 cmp-registerItem">
                    <div class="cmp-registerp cmp-registersp1 d-flex align-items-center">
                        <img src="assests/images/notebook.png" alt="notebook" class="ms-md-auto">
                    </div>
                    <p>
                       <strong>Interested?</strong> Register here to book your slot.
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 cmp-registerItem">
                    <div class="cmp-registerp cmp-registersp2 d-flex align-items-center">
                        <img src="assests/images/book.png" alt="book" class="mx-auto">
                    </div>
                    <p>
                        <strong>Choose the available slot:</strong> Our team will get back to you on your registered email with confirmation of your slot.
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 cmp-registerItem">
                    <div class="cmp-registerp cmp-registersp3 d-flex align-items-center">
                        <img src="assests/images/trainner.png" alt="exam trainner" class="mr-md-auto">
                    </div>
                    <p>
                         <strong>Assess your skills:</strong> Login on the given date and time and take the exam.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--/intro sec end-->
</main>
<footer class="py-5 text-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-12">
                <div class="footer-item">
                    <img src="assests/images/logo.png" alt="" class="mb-4">
                    <p>
                        Infosec Train Offers Complete Training And Consulting Solutions To Its Customers Globally. Whether The Requirements Are Technical Services, Certification Or Custom Training, Infosec Train Has Consistently Delivered The Highest Quality And Best Success Rates In The Industry.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-12 mt-3 m-lg-0">
                <div class="footer-item">
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
        <div class="row">
            <div class="col">
                © 2023 - Infosec Train. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<!--/js start-->
<script src="assests/js/common.min.js"></script>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">

 window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=

d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.

_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");

$.src="https://v2.zopim.com/?5Y1ZvMP3lrSPwhhyQjIGwo618dlqPLkD";z.t=+new Date;$.

type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script"); 

</script>

<!--End of Zendesk Chat Script-->

<script>
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.querySelector('nav').style.cssText = "position:fixed;top:0;right:0;left:0;z-index:1;transition:.5s;";
        } else {
           document.querySelector('nav').style.cssText = "position:static;";
        }
    }
    window.onscroll = function() {scrollFunction()};

    function Validate(id, numType){
    var thisId = document.getElementById(id);
    // console.log("inside validate "+thisId);
    if(numType == "integer"){
      // console.log("inside int: "+numType);
      var remChars =  thisId.value.replace(/[^0-9\.]/g,'');// this is to remove alphabates and special characters
      thisId.value =  remChars.replace(/\./g,'');// this is to remove "DOT"
    }
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
</body>
</html>