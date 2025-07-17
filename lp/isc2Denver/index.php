<?php include('include/comman_use.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="description" content="isc2Denver">
<meta name="author" content="Infosec Train">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>isc2Denver</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow" />
<link rel="icon" href="assets/img/fav.ico">
<link href="assets/css/style.min.css?v=1.1" rel="stylesheet">
<!-- Google Tag Manager -->
  <!--             <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

                  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

                  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

                  })(window,document,'script','dataLayer','GTM-5XZDRWG');
               </script>-->
               <!-- End Google Tag Manager -->
			   <script src="assets/js/main.js"></script>

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

	$ec = "";
    if(isset($_GET['ec']))
	  {
	  $ec = $_GET['ec'];
	  }
?>
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
<div class="height" style=" display:none; visibility:hidden;">
    <h3 class="text-center scroll" >Scroll down </h3>
</div>


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<header id="header" class="nav-transparent">
  <div class="container py-2">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <a class="navbar-brand" href="https://www.infosectrain.com/pages/lp/isc2Denver/?ec"><img src="assets/img/logo_1.png"></a>

                       <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_btn" aria-controls="nav_btn" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="nav_btn">
                            <ul class="navbar-nav ml-auto text-uppercase">

                                <li class="nav-item active"><a class="nav-link href_toscroll" href="#coursess">Course Content</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#table_section">Training Calendar </a></li>
								<li class="nav-item"><a class="nav-link href_toscroll" href="#fastfacts_section">Career Benefits</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#advisors2">Trainers</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#reviews">Reviews </a></li>

                            </ul>
                        </div>-->
                    </nav>
        </div>

  </header>


  <section id="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 col-xl-8">
        <div class="left_banner">
            <div class="b_test_box">

                <h2 class="e_council_top">Exclusive Training Offer on </h2>
                <h1 class="e_hacker">
                <font class="topline">ISC2 Denver Chapter</font><br /> </h1>
				<h1 class="e_hacker_box">
				Now in Denver
                </h1>




                <h2 class="e_council" style="background:#FFFFFF;">
				<ul>
                <li>Customized training for ISC2 Denver Chapter staff</li>
				<li>Comprehensive curriculum covering the latest trends</li>
				<li>Flexible scheduling to accommodate your needs</li>
				<li>Significantly discounted rates</li>
				</ul>

				</h2>
                <div class="e_hacker_boxfooter">
			 Get a chance to complete your certification ISC2
                </div>

            </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 col-xl-4">
        <div class="form-container wow fadeInRight" id="free_demo">
          <div class="home-form" >
            <h2 class="form_head">Talk to our Experts</h2>

            <div class="hide rows  mt-2" id="demo_form_output">  </div>
             <form class="rows  clearfix" method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f" >
					  <div class="row">
					  <div class="col-xs-12 col-md-12 formlabel">Your Name *</div>
                       <div class="col-xs-12 col-md-12">
                      <div class="form-group ">
					     <input type="text" class="form-control"  id="me_name"  name="me_name"  value="" placeholder=" " >
                         <div class="form-control-feedback"> </div>
                      </div>
					    </div>
                      </div>

                      <div class="row">
					  <div class="col-xs-12 col-md-12 formlabel">E-mail address *</div>
                       <div class="col-xs-12 col-md-12">
                      <div class="form-group">
                      <input type="text" class="form-control" name="me_email" id="me_email" value="" placeholder="">
                        <div class="form-control-feedback"> </div>
                      </div>
					    </div>
                      </div>

					  <div class="row">
					  <div class="col-xs-12 col-md-12 formlabel">Phone Number</div>
                       <div class="col-xs-12 col-md-12">
                      <div class="form-group">

                      <input type="text" class="form-control" name="me_phone" value="" id="me_phone" placeholder="">
                        <div class="form-control-feedback"> </div>
                      </div>
					    </div>
                      </div>

                      <div class="row">
					  <div class="col-xs-12 col-md-12 formlabel">Mention your call time preference</div>
                       <div class="col-xs-12 col-md-12">
                        <div class="form-group">

                         <input type="text" class="form-control" name="me_message" value="" id="me_message" placeholder="">
                        <div class="form-control-feedback"> </div>
                      </div>

                        </div>
                      </div>

                      <div class="row">
					  <div class="col-xs-12 col-md-12 formlabel">Course</div>
                       <div class="col-xs-12 col-md-12">
                      <div class="form-group">
                      <?php
                      $op1  = "Certified Information Systems Security Professional (CISSP)";                               //30764
					  $op2  = "Certified Cloud Security Professional (CCSP)";                                              //30768
					  $op3  = "Certified Information Systems Auditor (CISA)";                                              //30771
					  $op4  = "Certified Information Security Manager (CISM)";                                             //30770
					  $op5  = "Security+";                                                                                 //30838
					  $op6  = "Certified Ethical Hacker (CEH)";                                                            //39746
					 // $op7  = "ISO/IEC 27001:2022 Lead Implementer Training & Certification (TUV)";                        //30782
					  //$op8  = "ISO/IEC 27001:2022 Lead Auditor Training & Certification (TUV)";                            //30781
					  $op9  = "AWS Combo (Architect Associate + Security Speciality) Training Course";                     //33810
					 $op10 = "Azure Administrator & Security Online Training Course | (AZ-104 + AZ-500) Combo Training";  //33813
					  $op11 = "SOC Analyst";                                                                               //37880
					  $op12 = "Advanced Penetration Testing Training Course";                                              //31064
					$op13 = "Certified Information Privacy Manager (CIPM)";                                              //39518
					  $op14 = "CIPP/E European Privacy Online Training (Training + Certification)";		                   //33497
                      $op15 = "Certified in Cybersecurity (CC)";
                    $op16 = "Information Systems Auditor";
					  ?>
<select id="me_others" name="me_others" class="form-control" >
    <option value="">Select</option>
    <option value="<?php echo $op1;?>"  <?php if($ec == "30764"){echo "selected";}?> ><?php echo $op1;?></option>
    <option value="<?php echo $op2;?>"  <?php if($ec == "30768"){echo "selected";}?> ><?php echo $op2;?></option>
    <option value="<?php echo $op3;?>"  <?php if($ec == "30771"){echo "selected";}?> ><?php echo $op3;?></option>
    <option value="<?php echo $op4;?>"  <?php if($ec == "30770"){echo "selected";}?> ><?php echo $op4;?></option>
    <option value="<?php echo $op5;?>"  <?php if($ec == "30838"){echo "selected";}?> ><?php echo $op5;?></option>
    <option value="<?php echo $op6;?>"  <?php if($ec == "39746"){echo "selected";}?> ><?php echo $op6;?></option>
    <option value="<?php echo $op8;?>"  <?php if($ec == "30781"){echo "selected";}?> ><?php echo $op8;?></option>
    <option value="<?php echo $op8;?>"  <?php if($ec == "33810"){echo "selected";}?> ><?php echo $op9;?></option>
    <option value="<?php echo $op8;?>"  <?php if($ec == "33813"){echo "selected";}?> ><?php echo $op10;?></option>
    <option value="<?php echo $op11;?>" <?php if($ec == "37880"){echo "selected";}?> ><?php echo $op11;?></option>
    <option value="<?php echo $op12;?>" <?php if($ec == "31064"){echo "selected";}?> ><?php echo $op12;?></option>
    <option value="<?php echo $op12;?>" <?php if($ec == "39518"){echo "selected";}?> ><?php echo $op13;?></option>
    <option value="<?php echo $op14;?>" <?php if($ec == "33497"){echo "selected";}?> ><?php echo $op14;?></option>
    <option value="<?php echo $op14;?>" <?php if($ec == "43677"){echo "selected";}?> ><?php echo $op15;?></option>
    <option value="<?php echo $op14;?>" <?php if($ec == "40571"){echo "selected";}?> ><?php echo $op16;?></option>
</select>

                        <div class="form-control-feedback"> </div>
                      </div>
					    </div>
                      </div>

                      <div class="row">
					  <div class="col-xs-12 col-md-12 formlabel">Coupon Code</div>
                       <div class="col-xs-12 col-md-12">
                      <div class="form-group">
                      <input type="text" class="form-control" name="me_code" value="ISC2Denver" id="me_code" readonly="readonly">
                      </div>
					    </div>
                      </div>

               <input type="hidden"   value="<?php echo BASE_URL;?>thank-you.php" id="me_redirect"  >
               <!-- <input type="hidden"   value="CCSP Certification Training" id="me_others" name="me_others"  > -->
				<input type="hidden"   value="<?php echo $pag_url;?>" id="me_pageurl" name="me_pageurl"  >
                <button type="submit" name="me_submited" id="me_submited" value="submited" class="form-control btn btn-primary btn_submit  ">Request a Callback</button>
                <div class="loading_w hide" id="loading_w"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif"/></div>
             </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section id="footer_buttom">
    <div class="container">
        <div class="row">
		    <div class="col-12 col-md-12 flogo">
			<img src="assets/img_2/infosectrain_logo.svg" />
			</div>
            <div class="col-12 col-md-3">
                <div class="foot_con">
                    <h2 class="foot_h">About Infosec Train</h2>
                   <ul class="f_list ">
      <li><a href="https://www.infosectrain.com/about-us/" class="text-white" target="_blank">About us</a></li>
<li><a href="https://www.infosectrain.com/leadership/" class="text-white" target="_blank">Our Team</a></li>
<li><a href="https://www.infosectrain.com/customers-review/" class="text-white" target="_blank">Testimonials</a></li>
<li><a href="https://www.infosectrain.com/privacy-policy/" class="text-white" target="_blank">Privacy Policy</a></li>
<li><a href="https://www.infosectrain.com/contact-us/" class="text-white" target="_blank">Contact us</a></li>

</ul>
                </div>

            </div>
            <div class="col-12 col-md-3">
                <div class="foot_con">
                    <h2 class="foot_h">Quick Contacts</h2>
                    <ul class="f_list ">
      				<li><a href="https://api.whatsapp.com/send?phone=918767256840" class="text-white" target="_blank"><img src="assets/img_2/whatsapp.svg" /> +91 8767256840</a></li>
					<li><a href="tel:1800-843-7890" class="text-white"><img src="assets/img_2/call.svg" /> 1800-843-7890 (IN)</a></li>
					<li><a href="tel:+44745120841" class="text-white"><img src="assets/img_2/call.svg" /> +44-7451-208413 (UK)</a></li>
					<li><a href="tel:+1 657-722-11127" class="text-white"><img src="assets/img_2/call.svg" /> +1 657-722-11127 (USA)</a></li>
					<li><a href="mailto:sales@infosectrain.com" class="text-white"><img src="assets/img_2/email.svg" /> sales@infosectrain.com</a></li>
					</ul>
                </div>


            </div>
			<div class="col-12 col-md-3">
                <div class="foot_con">
                    <h2 class="foot_h">Our Office</h2>
                    <p class="foot_h_2">India</p>
					 <p class="foot_p">Manyata Embassy Business Park, Ground Floor, E1 Block, Beech Building, Outer Ring Road, Bangalore- 560045</p>
                    <p class="foot_p_2"><a href="tel:1800-843-7890" class="text-white"  style="color:#FFFFFF;"><img src="assets/img_2/call.svg" /> 1800-843-7890 (IN)</a></p>
                </div>


            </div>
			<div class="col-12 col-md-3">
                <div class="foot_con">
                    <h2 class="foot_h" style="    padding: 12px;"></h2>
                    <p class="foot_h_3">UAE</p>
					 <p class="foot_p">TAHA Business Center, RNA Resource Building, Al Quoz 3, Dubai, United Arab Emirates</p>
                    <p class="foot_p_2"><a href="tel:+971 564 23 6252" class="text-white" style="color:#FFFFFF;"><img src="assets/img_2/call.svg" /> +971 564 23 6252</a></p>
                </div>


            </div>
			<div class="col-12 col-md-12 flogo_copy">
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





<script src="assets/js/common.min.js"></script>
<script type="text/javascript">
 /*-------------- Scrool To Top----------*/
$(document).ready(function() {
$(window).scroll(function() {
if ($(this).scrollTop() > 20) {
$('#toTopBtn').fadeIn();
} else {
$('#toTopBtn').fadeOut();
}
});

$('#toTopBtn').click(function() {
$("html, body").animate({
scrollTop: 0
}, 1000);
return false;
});
});
/*-------------- Scrool To Top----------*/
</script>

<?php //include("../whatap.php");?>
</body>
</html>
