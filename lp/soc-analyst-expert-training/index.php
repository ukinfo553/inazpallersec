<?php include('include/comman_use.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="description" content="CompTIA Security+ Training and Certification course">
<meta name="author" content="Infosec Train">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>SOC Analyst Online Training Course</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow" />
<link rel="icon" href="assets/img/fav.ico">
<link href="assets/css/style.min.css?v=1" rel="stylesheet">

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

<style>
.cp_banner_bg {
    background-image: url(assets/img_2/soc-banner.jpg);
    min-height: 580px;
    background-repeat: no-repeat;
    background-position: inherit;
    background-size: cover !important;
    -webkit-background-size: cover !important;
    -moz-background-size: cover !important;
    -o-background-size: cover !important;
}
.box_dd{margin-top: 2px;
    margin-bottom: 15px;}
</style>
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
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
<div class="height" style=" display:none; visibility:hidden;">
    <h3 class="text-center scroll" >Scroll down </h3>
</div>


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<header id="header" class="nav-transparent">

  <div class="container py-2">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <a class="navbar-brand" href="https://www.infosectrain.com"><img src="assets/img/logo_1.png"></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_btn" aria-controls="nav_btn" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="nav_btn">
                            <ul class="navbar-nav ml-auto text-uppercase">

                                <li class="nav-item active"><a class="nav-link href_toscroll" href="#learpath">Course Content</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#table_section">Training Calendar </a></li>
								<!--<li class="nav-item"><a class="nav-link href_toscroll" href="#fastfacts_section">Career</a></li>-->
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#ourexpert">Trainers</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#reviews">Reviews </a></li>

                            </ul>
                        </div>
                    </nav>
        </div>

  </header>

      <style>
      .outer-div {
        width: 100%;
        text-align: center;
        background-color:;
		padding-top: 94px;
      }
      .inner-div {
        display: inline-block;
        margin: 0 auto;
        padding: 3px;
        background-color:;
      }

	  .cp_soc_hl_bg {
    background-image: url(assets/img_2/soc_cp_hight_light.png);
    min-height: 470px;
    background-repeat: no-repeat;
    background-position: inherit;
    background-size: contain !important;
    -webkit-background-size: contain !important;
    -moz-background-size: contain !important;
    -o-background-size: contain !important;
}

.package-heading strong{color:#E50039;}

#coursehighlight {
  width: 100%;
  float: left;
  padding-top: 100px;
  padding-bottom: 0px;
  background: #FFFFFF;
}
.highlight .c_box {
  width: 100%;
  position: relative;
  left: 0;
  border: 1px solid #DEDEDE;
}

.highlight .c_box .link_box {
  display: inline-block;
  width: 100%;
  background-color: #ffffff;
  color: #1E1D1B;
  opacity: .9;
  font-size: 15px;
  text-decoration: none;
  padding: 10px 10px;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
  border-radius: 1px;
}


.highlight .c_box .link_box span {
  display: inline-block;
  width: calc(100% - 60px);
  vertical-align: middle;
  border-left: 0px solid #ff1046;
  padding: 10px 0 0 10px;
  font-size: 14px;
}

.highlight .media {
    display: flex;
    align-items: flex-start;
	margin-left: -22px;
	margin-top: 35px;
}
.highlight{ height-min:100px;}
.hicon{ background:#1A1A1A;height: 100px;width: 100px;text-align: center;border-radius: 100px;}
.hl-1{color:#FFFFFF;font: normal normal normal 38px/50px Poppins; font-weight:bold;}
.hl-2{color:#FFFFFF;font: normal normal normal 22px/9px Poppins; font-weight:600;}
.hl-3{color:#FFFFFF;font: normal normal normal 22px Poppins;}
.hl-img1{ height: 55px;position:relative;top: calc(32% - 10px);}
.hl-img2{ height: 55px;position:relative;top: calc(32% - 10px);}
.hl-img3{ height: 55px;position:relative;top: calc(32% - 10px);}
#tool_section {width: 100%;padding: 100px 0;float: left;background:#F4F3F3;}
#tool_section h2.package-heading {font-size: 28px;color: ##1E1D1B;text-align: center;margin-bottom: 50px;letter-spacing: .08px;}
.subtitle {
    color:#989696;
    font: normal normal 24px/27px Poppins;
    letter-spacing: .1px;
    opacity: 1;
}
.fancy {
    line-height: 0.5;
    text-align: center;
}
.fancy span {
    display: inline-block;
    position: relative;
}
.fancy span:before {
    right: 100%;
    margin-right: 15px;
}
.fancy span:before, .fancy span:after {
    content: "";
    position: absolute;
    height: 5px;
    border-top: 1px solid #E50039;
    top: 16px;
    width: 100px;
}
.fancy span:after {
    left: 100%;
    margin-left: 15px;
}

.cp_heading_h1 {
    color: #4E4E4E;
    font: normal normal 67px/58px Poppins;
    letter-spacing: 1.1px;
    opacity: 1;
    text-align: center;
    font-weight: bolder;
}
#socanalyst {
    background-image: url(assets/img_2/soc_analyst_bg.jpg);
	background-repeat: no-repeat;
	background-position: bottom;
	background-size: contain;
	background-color:#FFFFFF;
}

#socanalyst .hl-1{ color:#E50039;font: normal normal normal 60px/87px Poppins; font-weight: normal;font-weight: bold;}
#socanalyst .hl-2{ color:#ffffff;font: normal normal normal 24px/18px Poppins;font-weight: 600;}
#socanalyst .hl-3{ color:#ffffff;font: normal normal normal 15px Poppins;}

#socanalyst_sec {background-color:#000000;padding-top: 50px;padding-bottom: 50px;}
#socanalyst_sec .certification_box3{border-radius: 20px;margin: 0px 10px;}
#socanalyst_sec  hr.new_soc {border-top: 1px solid #707070;width: 100px;border-bottom: 0px;margin-left: 100px;}
#socanalyst_sec .adv-h svg{ width:100px;height: 120px;}
.so{fill:#4e4e4e;}
.so2{fill:#4e4e4e;}
#socanalyst_sec .certification_box3:hover .so{fill:#ff1046;}

#socanalyst_sec .certification_box3 .adv-p { text-align: center;  font: normal normal 18px/24px Poppins;  letter-spacing: 1.08px;  color: #989696;}
#socanalyst_sec .certification_box3 .adv-p1 { text-align: center;  font: normal normal 800 37px/24px Poppins;  letter-spacing: 1.08px;  color: #4E4E4E;}
#socanalyst_sec .certification_box3 .arrow { border: solid #4E4E4E;border-width: 0 3px 3px 0; display: inline-block; padding: 3px;}
#socanalyst_sec .certification_box3 .down { transform: rotate(45deg); -webkit-transform: rotate(45deg);}

#socanalyst_sec .certification_box3:hover .adv-p1{color:#ff1046;}


#learmode {

    width: 100%;
    padding:10px 0 1px;
    float: left;
    background: #ffffff;

}
#learmode .certification_box3 { cursor: default;}
#learmode .adv-h svg{ width:90px;}
#learmode .packagesub{font: normal normal 18px/30px Poppins; color:#989696;}
#learmode .package-heading{ color:#4E4E4E;font: normal normal 800 60px/39px Poppins;padding-bottom: 35px;}
#learmode .certification_box3 .adv-p { text-align: center; font: normal normal 600 21px/24px Poppins; color: #4E4E4E;}
#learmode .certification_box3 .adv-p1 { text-align: center; font:normal normal 16px Poppins; color: #989696;min-height: 110px;}
#learmode .certification_box3 .arrow { border: solid #4E4E4E;border-width: 0 3px 3px 0; display: inline-block; padding: 3px;}
#learmode  hr.new_soc {border-top: 1px solid #707070 ;width: 100px;border-bottom: 0px;margin-left: 70px;}
#learmode a { background: #4E4E4E;padding: 10px 20px;color: #FFFFFF;border-radius: 24px;font-size: 14px;}
#learmode .certification_box3 {background-color: #F4F3F3;box-shadow: 0px 9px 16px #0000001A;border-radius: 24px; padding: 40px;border: 2px solid #DEDEDE;transition: all .3s; margin-bottom: 35px;text-align: center;margin-left: 20px;margin-right: 20px;min-height: 410px;}
#learmode .certification_box3:hover .so2{fill:#ff1046;}
#learmode .certification_box3:hover .adv-p {color: #ff1046;}
#learmode .certification_box3:hover a {background: #ff1046;}

.soc_trainer_bg {
    background-image: url(assets/img_2/soc-tainer-bg.png);
    background-repeat: no-repeat;
    background-position: left;
    background-size: contain;
}

.soc_trainerdetail {
    padding-left: 50px;
    padding-top: 40px;
    padding-right: 50px;
}

.card4soc .soc_trainerdetail .c_name2 {
    text-align: left;
    font: 32px/36px Poppins !important;
    letter-spacing: 0.6px;
    color: #E50039;
    height: 60px;
}
.card4soc ul {
    margin-left: 40px;
    list-style: none;
    text-align: left;
}
.card4soc li {
    padding: 0 0 0.1em 3px;
    list-style-image: url(assets/img_2/hbullet.png);
}

 #learpath {

    width: 100%;
    padding: 100px 0px 10px;
    float: left;
    background: #ffffff;

}
#learpath .packagesub{font: normal normal 18px/30px Poppins; color:#989696;}
#learpath .package-heading{ color:#4E4E4E;font: normal normal 800 60px/39px Poppins;}
#learpath .sub-heading{font: normal normal 28px/40px Poppins; color:#4E4E4E;}

#learpath .learpath_bg {
    background-image: url(assets/img_2/learpath_bg.png);
    min-height: 580px;
    background-repeat: no-repeat;
    background-position: inherit;
    background-size: contain !important;
    -webkit-background-size: contain !important;
    -moz-background-size: contain !important;
    -o-background-size: contain !important;
}
#learpath .lear_bg {
width: 356px;
position: absolute;
bottom: 0px;
left: 170px;
}

#learpath .prof-img {
    width: 89px;
    height: 89px;
    border-radius: 50%;
    border: 0 solid #ffff;
    position: absolute;
}

#learpath .prof-img .p_image{
    width:100%;
}

#learpath .prof-text{
    width:100%;
	font: normal normal 28px/40px Poppins;
	height: 95px;
padding-left: 110px;
padding-top: 9px;
}

#ourexpert {

    width: 100%;
    padding: 100px 0;
    float: left;
    background: #ffffff;

}
#ourexpert .packagesub {font: normal normal 18px/30px Poppins;color: #989696;}
#ourexpert .package-heading {color: #4E4E4E;font: normal normal 800 60px/39px Poppins; padding-bottom:60px;}





.list{
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.star{
  background: url('assets/img_2/path-step1.png') no-repeat left top;
  height: 34px;
  padding-top: 7px;
  padding-left: 44px;
}
.star1{
  background: url('assets/img_2/path-step2.png') no-repeat left top;
  height: 34px;
  padding-top: 7px;
  padding-left: 44px;
}
.star2{
  background: url('assets/img_2/path-step3.png') no-repeat left top;
  height: 34px;
  padding-top: 7px;
  padding-left: 44px;
}


.a1{animation: blinking 3s infinite;font-size: 42px;padding-left: 38px;}
@keyframes blinking {0%{  color: #513AD4; }47%{  color: #1927bf; }62%{  color: #4450cf; }97%{  color:#84c9d0; }100%{ color: #3FC1CE;  }}

.a2{animation: blinking2 3s infinite;font-size: 42px;padding-left: 38px;}
@keyframes blinking2 {0%{  color: #3FC1CE; }47%{  color: #84c9d0; }62%{  color: #a6dadf; }97%{  color:#6ed04a; }100%{ color: #34B903;  }}

.a3{animation: blinking3 3s infinite;font-size: 42px;padding-left: 38px;}
@keyframes blinking3 {0%{  color: #34B903; }47%{  color: #6ed04a; }62%{  color: #ebceaa; }97%{  color:#eda44a; }100%{ color: #F38703;  }}


.a4{animation: blinking4 3s infinite;font-size: 42px;padding-left: 38px;}
@keyframes blinking4 {0%{  color: #F38703; }47%{  color: #fabc02; }62%{  color: #F38703; }97%{  color:#fabc02; }100%{ color: #fabc02;  }}

.alerts-border {
border: 3px solid #F38703;
animation: blink 3s infinite;

margin-left: 42px;
margin-top: 5px;
}

@keyframes blink { 50% { border-color: #fabc02; }  }

  @media (max-width: 575.98px){
  #profile_card .owl-carousel .owl-nav button{ visibility:hidden !important;}
  #ourexpert .package-heading {
    color: #4E4E4E;
    font: normal normal 800 48px/44px Poppins;
    padding-bottom: 18px;
}
#banner {
  background-image:;
  background:#000000;
  padding: 1px 0 1px;
}
.cp_banner_bg {
  min-height: 277px;
}
.outer-div {
  padding-bottom: 47px;
}

.cp_soc_hl_bg {
  min-height: 480px;
  background-size: cover !important;
}

.highlight .media {
  margin-left: 40px;
  margin-top: 35px;
}
.left_banner {
  padding-top: 70px;
}
#banner .left_banner .b_test_box .b_com {
  font-size: 32px;
}
#banner .left_banner .b_test_box .e_hacker {
  font: normal normal bold 77px/121px Poppins;
  margin-bottom: 14px;
}
#banner .left_banner .b_test_box .e_council {
  font-size: 30px;
  margin-bottom: 25px;
}
hr.new_soc {
  border-top: 7px solid #E50039;
  width: 100%;
  border-bottom: 0px solid #E50039;
}
#banner .left_banner .b_test_box .e_council {
  color: #ffffff;
}
.cp_heading_h1 {
  font: normal normal 45px/58px Poppins;
}
#socanalyst .hl-1 {
  font: normal normal normal 45px/6px Poppins;
  padding-top: 13px;

}
#socanalyst .hl-3 {
  color: #000;
  font: normal normal normal 15px Poppins;
}
#socanalyst .hl-2 {
  color: #000000;
  font: normal normal normal 24px/18px Poppins;
    font-weight: normal;
  font-weight: 600;
}
#learmode .package-heading {
  color: #4E4E4E;
  font: normal normal 800 45px/39px Poppins;
}

#learpath .package-heading {
  font: normal normal 800 45px/39px Poppins;
}
#learpath .prof-text {
  font: normal normal 22px/30px Poppins;
}
#learpath .learpath_bg {
   min-height: 450px;
   visibility: hidden;
   display: none;
  }
  #learpath .lear_bg {
  left: 23px;
}
}

#socanalyst_sec  .content {
  margin-top: 10px;
  padding: 20px;
  border-radius: 20px;
  margin: 0px 10px;
  box-shadow: 0px 10px 16px #0000001F;
  background-color: #fff;
  padding: 20px;
  border: 2px solid #DEDEDE;
  transition: all .3s;
  text-align:left;
}

#socanalyst_sec  .content .ulclass {
  margin-left: 30px;
}

#socanalyst_sec  .content .tab_content li {
  list-style-type: circle;
}


    </style>
  <section id="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 col-xl-7 cp_banner_bg">
        <div class="left_banner">
            <div class="b_test_box">
                <h1 class="b_com">HANDS-ON</h1>
                <h1 class="e_hacker">SOC</h1>
                <h2 class="e_council">ANALYST</h2>
				<hr class="new_soc">
                <h2 class="cp_banner_socp4">ONLINE TRAINING</h2>


            </div>
        </div>




      </div>
      <div class="col-12 col-md-6 col-lg-6 col-xl-5 outer-div">


        <div class="form-container wow fadeInRight inner-div" id="free_demo">
          <div class="topright"><img src="assets/img_2/offercp.png"  width="100%"/></div>
		  <div class="home-form" >

            <h2 class="form_head">Get A Free Demo Class!</h2>
            <div class="hide rows  mt-2" id="demo_form_output">  </div>
             <form class="rows  clearfix" method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f" >
                      <div class="form-group ">

                        <input type="text" class="form-control"  id="me_name"  name="me_name"  value="" placeholder="Your Name * " requierd >

                        <div class="form-control-feedback"> </div>
                      </div>

                      <div class="form-group">

                        <input type="email" class="form-control" name="me_email" id="me_email" value="" placeholder="E-mail address *" requierd>
                        <div class="form-control-feedback"> </div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" maxlength="10" name="me_phone" value="" id="me_phone" placeholder="Phone Number" >
                        <div class="form-control-feedback"> </div>
                      </div>
                      <!-- <div class="form-group">
                    <select class="form-control " id="me_country" name="me_country" requierd >
  <option selected="selected" value="">Your Country</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo">Congo, the Democratic Republic of the</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
    <option value="Croatia">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="France Metropolitan">France, Metropolitan</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
    <option value="Holy See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
    <option value="Korea">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia, Federated States of</option>
    <option value="Moldova">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option value="Saint LUCIA">Saint LUCIA</option>
    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia (Slovak Republic)</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
    <option value="Span">Spain</option>
    <option value="SriLanka">Sri Lanka</option>
    <option value="St. Helena">St. Helena</option>
    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States">United States</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Viet Nam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Yugoslavia">Yugoslavia</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
    <option value="Other">Other</option>



</select>

                        <div class="form-control-feedback"> </div>
                      </div> -->

                      <!--<div class="row">
                       <div class="col-xs-12 col-md-12">-->
                        <div class="form-group">
                        <textarea class="form-control" id="me_message" value=""  name="me_message" placeholder="Comment/Training " ></textarea>
                        <div class="form-control-feedback"> </div>
                      <!--</div>

                      </div>-->
                            </div>

                <input type="hidden"   value="<?php echo BASE_URL;?>thank-you.php" id="me_redirect"  >
                <input type="hidden"   value="CompTIA Security+" id="me_others" name="me_others"  >
				<input type="hidden"   value="<?php echo $pag_url;?>" id="me_pageurl"  >
                <button type="submit" name="me_submited" id="me_submited" value="submited" class="form-control btn btn-primary btn_submit  ">Reserve your seat Now</button>
                <div class="loading_w hide" id="loading_w"><img src="<?php echo BASE_URL; ?>assets/img/loader.gif"/></div>
             </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="coursehighlight">
<div class="container">
<div class="row pd-b-50">
<div class="col-md-12">
<h2 class="package-heading">COURSE  <strong>HIGHLIGHTS</strong></h2>
<div class="row cp_soc_hl_bg">
    <div class="col-md-12 col-lg-12 highlight">
      <div class="media">
        <div class="hicon mr-3">
   		<img src="assets/img_2/highlight_1.png" class="hl-img1">
        </div>
  		<div class="media-body">
		<h4 class="mt-0 hl-1">40 HOURS</h4>
        <h4 class="mt-0  hl-2">INSTRUCTOR-LED </h4>
        <h4 class="mt-0  hl-3">TRAINING</h4>
  		</div>
      </div><div class="media">
        <div class="hicon mr-3">
   		<img src="assets/img_2/highlight_2.png" class="hl-img2">
        </div>
  		<div class="media-body">
		<h4 class="mt-0 hl-1">CPE</h4>
        <h4 class="mt-0  hl-2">CERTIFICATE</h4>

  		</div>
      </div><div class="media">
        <div class="hicon mr-3">
   		<img src="assets/img_2/highlight_3.png" class="hl-img3">
        </div>
  		<div class="media-body">
		<h4 class="mt-0 hl-1">CERTIFIED</h4>
        <h4 class="mt-0  hl-2">& EXPERIENCED </h4>
        <h4 class="mt-0  hl-3">TRAINING</h4>
  		</div>
      </div>
    </div>
<!--    <div class="col-md-12 col-lg-12 highlight">


    </div>
    <div class="col-md-12 col-lg-12 highlight">


    </div>-->
</div>

</div>

</div>

</div>
</section>



<section id="learpath">
    <div class="container ">
        <div class="row">

        <div class="col-lg-5">
        <div class="col-12">
               <h2 class="packagesub">Learning path</h2>
               <h2 class="package-heading">SOC ANALYST</h2>
               <h2 class="sub-heading">TRAINING</h2>
        </div>

        <div class="row">
            <div class="col-12">
             <div class="prof-img"><img src="assets/img_2/path-step1.png" alt="" class="p_image"></div>
             <div class="prof-text">
             	<p class="tool_p">BLUE TEAM OPERATIONS<br />ARCHITECTURE</p>
             </div>
            </div>
            <div class="col-12">
            <span class="a1">|</span>
            </div>
            <div class="col-12">
             <div class="prof-img"><img src="assets/img_2/path-step2.png" alt="" class="p_image"></div>
             <div class="prof-text">
             	<p class="tool_p">SOC<br />TOOLS</p>
             </div>
            </div>
             <div class="col-12">
            <span class="a2">|</span>
            </div>
            <div class="col-12">
             <div class="prof-img"><img src="assets/img_2/path-step3.png" alt="" class="p_image"></div>
             <div class="prof-text">
             	<p class="tool_p">BDIGITAL FORENSICS &<br /> INCIDENT RESPONSE</p>
             </div>
            </div>
             <div class="col-12">
            <span class="a3">|</span>
            </div>
            <div class="col-12">
             <div class="prof-img"><img src="assets/img_2/path-step4.png" alt="" class="p_image"></div>
             <div class="prof-text">
             	<p class="tool_p">THREAT<br /> INTELLIGENCE</p>
             </div>
            </div>
            <div class="col-12">
            <span class="a4">|</span>
            <div class="alerts-border"></div>
            </div>

        </div>
        </div>

         <div class="col-lg-7 learpath_bg">
          <img src="assets/img_2/learnstep.png" class="lear_bg" />

         </div>
        </div>
    </div>

</section>

<section id="table_section">
    <div  class="container" id="benefits">
        <div class="row">
            <div class="col-12">
               <h2 class="package-heading">SOC Analyst Training Calendar</h2>
            </div>
        </div>

    <div class="row">
      <div class="col-12">

<?php
$url = "https://www.infosectrain.com/api/37880/href_toscroll/free_demo";


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

<section id="tool_section">

    <div class="container" id="benefits">
        <div class="row">
            <div class="col-12">
               <h2 class="cp_heading_h1">SOC ANALYST</h2>
               <p class="subtitle fancy"><span class="subtitle">Tools Covered</span></p>
            </div>

            <div class="col-12">
                <img src="https://www.infosectrain.com/wp-content/uploads/2023/05/SOC-ANALYST_new_v1.jpg" class="img-fluid"/>
            </div>

             <!-- <div class="col-2 content-desktop box_dd"><img src="assets/img_2/tool1.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd"><img src="assets/img_2/tool2.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd"><img src="assets/img_2/tool3.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd"><img src="assets/img_2/tool4.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd"><img src="assets/img_2/tool5.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd"><img src="assets/img_2/tool6.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd"><img src="assets/img_2/tool7.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd"><img src="assets/img_2/tool8.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd" ><img src="assets/img_2/tool21.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd" ><img src="assets/img_2/tool22.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd" ><img src="assets/img_2/tool23.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd" ><img src="assets/img_2/tool24.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd  offset-2" ><img src="assets/img_2/tool25.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd" ><img src="assets/img_2/tool26.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd" ><img src="assets/img_2/tool27.png" style="width:100%;"></div>
             <div class="col-2 content-desktop box_dd" ><img src="assets/img_2/tool28.png" style="width:100%;"></div> -->


             <!-- <div class="col-xs-6 content-mobile" ><img src="assets/img_2/tool1.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool2.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool3.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool4.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool5.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool6.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool7.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool8.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool21.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool22.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool23.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool24.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool25.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool26.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool27.png" style="width:100%;"></div>
             <div class="col-xs-6  content-mobile"><img src="assets/img_2/tool28.png" style="width:100%;"></div> -->
        </div>

    <div class="row">
      <div class="col-12">












             </div>
  </div>
  </div>
</section>




<section id="socanalyst">
  <div class="container">


    <div class="row">
      <div class="col-md-5" style="display: flex;
  justify-content: flex-end;
  align-items: flex-end;">
  <div class="col">
      <h4 class="hl-3">Yes, This is right course for you</h4>
      <h4 class="hl-2">EVERYTHING ABOUT</h4>
	  <h4 class="hl-1">SOC ANALYST</h4>
     </div>
      </div>
       <div class="col-md-7" style="padding-top:80px;">
      <img src="assets/img_2/soc_analyst_book.png" width="100%" alt="" class="">
      </div>
      <!-- /.col-md-8 -->
    </div>



  </div>
</section>



<script>
function toggle_soc(){
  var x = document.getElementById("soc_id");
  var y = document.getElementById("attend_id");
  var z = document.getElementById("requisites_id");
  if (x.style.display === "none") {
    x.style.display = "block";
	y.style.display = "none";
	z.style.display = "none";
  } else {
    x.style.display = "none";
	y.style.display = "none";
	z.style.display = "none";
  }
}

function toggle_attend(){
  var x = document.getElementById("soc_id");
  var y = document.getElementById("attend_id");
  var z = document.getElementById("requisites_id");
  if (y.style.display === "none") {
    y.style.display = "block";
	x.style.display = "none";
	z.style.display = "none";
  } else {
    x.style.display = "none";
	y.style.display = "none";
	z.style.display = "none";
  }
}

function toggle_requisites(){
  var x = document.getElementById("soc_id");
  var y = document.getElementById("attend_id");
  var z = document.getElementById("requisites_id");
  if (z.style.display === "none") {
    z.style.display = "block";
	x.style.display = "none";
	y.style.display = "none";
  } else {
    x.style.display = "none";
	y.style.display = "none";
	z.style.display = "none";
  }
}
</script>

<script>
function toggle_soc_mob(){
  var x = document.getElementById("soc_id_mob");
  var y = document.getElementById("attend_id_mob");
  var z = document.getElementById("requisites_id_mob");
  if (x.style.display === "none") {
    x.style.display = "block";
	y.style.display = "none";
	z.style.display = "none";
  } else {
    x.style.display = "none";
	y.style.display = "none";
	z.style.display = "none";
  }
}

function toggle_attend_mob(){
  var x = document.getElementById("soc_id_mob");
  var y = document.getElementById("attend_id_mob");
  var z = document.getElementById("requisites_id_mob");
  if (y.style.display === "none") {
    y.style.display = "block";
	x.style.display = "none";
	z.style.display = "none";
  } else {
    x.style.display = "none";
	y.style.display = "none";
	z.style.display = "none";
  }
}

function toggle_requisites_mob(){
  var x = document.getElementById("soc_id_mob");
  var y = document.getElementById("attend_id_mob");
  var z = document.getElementById("requisites_id_mob");
  if (z.style.display === "none") {
    z.style.display = "block";
	x.style.display = "none";
	y.style.display = "none";
  } else {
    x.style.display = "none";
	y.style.display = "none";
	z.style.display = "none";
  }
}
</script>
<section id="socanalyst_sec">
  <div class="container content-desktop">
    <div class="row ">

		    <div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box3" onclick="toggle_soc()">
							<h4 class="adv-h">
                            <svg id="Group_11928" data-name="Group 11928" xmlns="http://www.w3.org/2000/svg" width="124.581" height="124.544" viewBox="0 0 124.581 124.544">
  <path id="Path_25990" data-name="Path 25990" d="M-329.616,42.411q25.468,0,50.935,0c3.142,0,3.862.706,3.862,3.814q0,42.938-.024,85.876a9.523,9.523,0,0,1-.595,3.156c-2.221,6.139-3.709,12.381-2.977,18.977a17.643,17.643,0,0,0,2.752,7.986,3.066,3.066,0,0,1,.5,3.328c-.645,1.235-1.8,1.395-3.052,1.394q-50.625-.014-101.25-.038c-8.017-.017-14.255-3.457-18.151-10.654a16.359,16.359,0,0,1-1.775-7.944q0-43.636.017-87.273c.015-10.614,8.588-18.593,19.91-18.615Q-354.54,42.371-329.616,42.411Zm49.429,5.281h-2.029q-48.208,0-96.415.005a28.983,28.983,0,0,0-2.945.128c-5.876.6-12.583,5.256-12.557,13.371.079,24.479.027,48.958.033,73.437,0,.468.07.936.133,1.721,5.108-4.736,10.966-5.739,17.348-5.716,31.465.112,62.931.051,94.4.051h2.035Zm-1.17,88.358c-.606-.036-.962-.077-1.317-.077q-48.37,0-96.74.056a17.306,17.306,0,0,0-6.607,1.351c-4.877,2.094-7.976,5.8-8.018,11.321-.042,5.589,3.085,9.235,7.938,11.574a17.717,17.717,0,0,0,7.871,1.42q47.205,0,94.411,0c.547,0,1.093-.049,1.824-.084C-285.215,152.965-283.926,144.574-281.358,136.05Z" transform="translate(399.397 -42.403)" class="so" />
  <path id="Path_25991" data-name="Path 25991" d="M-298.407,116.773q0-12.263-.009-24.526c0-1.308.164-2.507,1.421-3.21,1.209-.676,2.267-.18,3.332.471q20.107,12.3,40.226,24.583c2.66,1.626,2.659,3.727-.007,5.358q-20.173,12.344-40.353,24.675a2.947,2.947,0,0,1-3.2.379,3.063,3.063,0,0,1-1.42-3.048Q-298.392,129.114-298.407,116.773Zm39.233,0L-293.017,96.1v41.35Z" transform="translate(340.24 -69.533)"  class="so"/>
  <path id="Path_25992" data-name="Path 25992" d="M-307.8,300.876h-39.907a14.279,14.279,0,0,1-1.706-.036,2.475,2.475,0,0,1-2.335-2.3,2.525,2.525,0,0,1,1.927-2.8,6.882,6.882,0,0,1,1.691-.134q40.294-.009,80.589,0a6.117,6.117,0,0,1,1.831.205,2.383,2.383,0,0,1,1.759,2.614,2.466,2.466,0,0,1-2.239,2.4,11.3,11.3,0,0,1-1.705.048Q-287.848,300.877-307.8,300.876Z" transform="translate(371.498 -190.728)"  class="so"/>
</svg>
<hr class="new_soc">
</h4>
							<p class="adv-p">EVERYTHING ABOUT</p>
                            <p class="adv-p1">SOC</p>
                            <i class="arrow down" onclick="toggle_soc()"></i>
				</div>
			</div>

			<div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box3" onclick="toggle_attend()">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="173.87" height="132.639" viewBox="0 0 173.87 132.639">
  <g id="Group_11931" data-name="Group 11931" transform="translate(467.152 17.094)">
    <path id="Path_25993" data-name="Path 25993" d="M-337.893,160.165c0,1.937.022,3.672-.005,5.405-.038,2.426-1.143,3.571-3.563,3.6q-5.528.06-11.057,0c-2.179-.027-3.458-1.273-3.394-3.142.061-1.784,1.3-2.835,3.447-2.852,2.744-.023,5.488-.005,8.513-.005,0-1.441.065-2.785-.016-4.121-.1-1.729-.468-3.452-.475-5.178-.044-11.494.08-22.99-.082-34.483a52.469,52.469,0,0,0-1.333-11.092c-.675-2.9-2.914-5.051-5.357-6.786a24.772,24.772,0,0,0-14.416-4.551c-9.557-.089-19.116-.067-28.673-.008a25.48,25.48,0,0,0-13.338,3.8c-5.648,3.452-8.077,8.8-8.17,15.11-.194,13.241-.089,26.486-.106,39.73,0,2.423,0,4.846,0,7.581h2.113q17.617,0,35.233,0a16,16,0,0,1,1.872.036,2.757,2.757,0,0,1,2.63,2.7,2.7,2.7,0,0,1-1.989,3.022,7.452,7.452,0,0,1-2.211.248q-19.772.021-39.544.008c-3.4,0-4.346-.948-4.353-4.333,0-1.486,0-2.972,0-4.68h-2.348q-19.022,0-38.044,0c-3.747,0-4.59-.859-4.59-4.666q0-13.868,0-27.737a22.716,22.716,0,0,1,2.037-10.194c4.02-8.183,11.107-11.314,19.724-11.506,8.055-.18,16.116-.008,24.174-.065a2.5,2.5,0,0,0,1.9-.917c4.728-8.922,12.57-13.127,22.186-13.774,8.584-.578,17.231-.2,25.849-.286,5.57-.053,11.1.009,16.439,1.993a24.7,24.7,0,0,1,13.9,11.866,1.929,1.929,0,0,0,2,1.237c7.933-.06,15.867-.045,23.8-.044a23.1,23.1,0,0,1,13.127,3.752c5.745,3.839,8.471,9.479,8.608,16.212.208,10.241.1,20.489.068,30.734-.007,2.364-1.287,3.391-3.959,3.392q-19.022.012-38.044,0Zm-123.14-6.133h39.018V112.066c-1.689,0-3.431-.012-5.174,0-6.681.051-13.376-.142-20.039.235-7.174.406-12.136,4.494-13.414,10.47a24.829,24.829,0,0,0-.463,5.023c-.046,8.12-.023,16.241-.018,24.361C-461.122,152.765-461.066,153.374-461.034,154.032Zm123.064-41.966v41.875h38.586c0-9.534.209-18.9-.069-28.245-.205-6.884-3.532-10.858-9.9-12.694a23.462,23.462,0,0,0-6.068-.895c-6.925-.107-13.852-.041-20.779-.041Z" transform="translate(0 -54.055)"   class="so"/>
    <path id="Path_25994" data-name="Path 25994" d="M-292.811,7A24.252,24.252,0,0,1-316.9,31.114,24.233,24.233,0,0,1-341,7.026a24.317,24.317,0,0,1,24.1-24.12A24.244,24.244,0,0,1-292.811,7Zm-6.019.027a18.138,18.138,0,0,0-18.128-18.1,18.158,18.158,0,0,0-18,18.047,18.1,18.1,0,0,0,17.935,18.1A18.146,18.146,0,0,0-298.83,7.032Z" transform="translate(-63.1 0)"   class="so"/>
    <path id="Path_25995" data-name="Path 25995" d="M-401.216,55.17a18.092,18.092,0,0,1-18,18,18.145,18.145,0,0,1-18.05-18.156,18.125,18.125,0,0,1,18.02-17.986A18.076,18.076,0,0,1-401.216,55.17Zm-6.012-.118A11.964,11.964,0,0,0-419.257,43.04a12.016,12.016,0,0,0-12,12.063A12.037,12.037,0,0,0-419.2,67.124,11.982,11.982,0,0,0-407.228,55.051Z" transform="translate(-14.949 -27.069)"   class="so"/>
    <path id="Path_25996" data-name="Path 25996" d="M-221.365,55.044A18.078,18.078,0,0,1-203.4,37.024a18.117,18.117,0,0,1,18.085,18.108A18.151,18.151,0,0,1-203.3,73.165,18.11,18.11,0,0,1-221.365,55.044Zm6.014-.02a11.989,11.989,0,0,0,11.949,12.1,12.036,12.036,0,0,0,12.08-12A12.013,12.013,0,0,0-203.3,43.04,11.961,11.961,0,0,0-215.351,55.024Z" transform="translate(-122.94 -27.069)"   class="so"/>
    <path id="Path_25997" data-name="Path 25997" d="M-317.3,167.845l17.895-20.5c.328-.376.642-.77,1-1.114a3.084,3.084,0,0,1,4.081-.276,2.982,2.982,0,0,1,.4,4.194c-.551.753-1.2,1.438-1.813,2.144q-8.376,9.593-16.75,19.189a28.326,28.326,0,0,0-1.817,2.365c-1.348,1.925-3.462,2.189-5.1.538q-7.2-7.234-14.349-14.516c-1.474-1.5-1.569-3.211-.341-4.484,1.288-1.334,3.041-1.257,4.617.3C-325.443,159.684-321.44,163.709-317.3,167.845Z" transform="translate(-66.129 -81.233)"   class="so"/>
    <path id="Path_25998" data-name="Path 25998" d="M-262.8,239.333a2.992,2.992,0,0,1-2.95,2.965,2.938,2.938,0,0,1-2.989-3.083,2.984,2.984,0,0,1,3.014-2.9A3.047,3.047,0,0,1-262.8,239.333Z" transform="translate(-99.244 -126.753)"   class="so"/>
  </g>
</svg>
<hr class="new_soc">
							</h4>
							<p class="adv-p">WHO SHOULD</p>
                            <p class="adv-p1">ATTEND</p>
                            <i class="arrow down"></i>
				</div>
			</div>

			<div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box3"  onclick="toggle_requisites()">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="122.674" height="137.265" viewBox="0 0 122.674 137.265">
  <g id="Group_11932" data-name="Group 11932" transform="translate(416.119 57.003)">
    <path id="Path_25999" data-name="Path 25999" d="M-403.833,80.262c-2.038-.842-4.269-1.391-6.075-2.584-4.258-2.813-6.192-7.019-6.2-12.1q-.023-12.264,0-24.527,0-41.549,0-83.1c0-6.835,3.6-12.125,9.749-14.176a14.442,14.442,0,0,1,4.456-.747q30.558-.073,61.117-.031a9.6,9.6,0,0,1,7.019,2.828q11.914,11.873,23.786,23.788a9.65,9.65,0,0,1,2.807,7.031q.034,8.309,0,16.619c-.005,1.572-.8,2.492-2.029,2.481-1.21-.011-1.972-.942-1.977-2.517-.015-5.227,0-10.454-.012-15.681,0-.744-.084-1.487-.135-2.333h-1.6q-8.644,0-17.289,0c-5.664-.01-9.212-3.541-9.224-9.184-.012-5.763,0-11.527,0-17.29v-1.61c-.567-.039-1.04-.1-1.512-.1q-30.424-.012-60.848,0a10.163,10.163,0,0,0-10.277,9.9c-.017.312-.015.625-.015.938q0,53.745,0,107.49c0,4.973,2.514,8.789,6.86,10.269a11.2,11.2,0,0,0,3.541.584q40.074.048,80.148.016a10.007,10.007,0,0,0,10.279-9.7c.182-3.252.07-6.52.073-9.781q.01-10.655,0-21.31a9.684,9.684,0,0,1,.066-1.47,1.819,1.819,0,0,1,1.823-1.65,1.83,1.83,0,0,1,2.027,1.564,6.965,6.965,0,0,1,.1,1.465q.007,14.877,0,29.754c-.009,8.04-4.274,13.3-12.127,14.99a1.646,1.646,0,0,0-.357.175ZM-335.418-49.8c0,5.335-.008,10.6,0,15.856.006,3.368,1.763,5.133,5.113,5.14q7.37.014,14.741,0c.379,0,.757-.039,1.082-.058Z" transform="translate(0)"   class="so"/>
    <path id="Path_26000" data-name="Path 26000" d="M-282.5,144.079h-10.708c-3.4,0-6.79.019-10.185-.011a2.09,2.09,0,0,1-2.335-2.046c.011-1.2.9-1.958,2.375-1.959,8-.009,15.992-.02,23.988.015a2.816,2.816,0,0,0,2.219-.919c3.382-3.441,6.809-6.836,10.218-10.25.308-.308.6-.633,1.149-1.217h-1.8q-17.488,0-34.977-.008c-.619,0-1.4.1-1.816-.224a3.356,3.356,0,0,1-1.285-1.937,1.658,1.658,0,0,1,1.607-1.806,10.784,10.784,0,0,1,1.471-.045q19.767,0,39.533.019a2.913,2.913,0,0,0,2.339-.968c1.1-1.157,2.32-2.2,3.489-3.294l-.2-.4h-1.548q-21.71,0-43.42,0a10.509,10.509,0,0,1-1.735-.086,1.8,1.8,0,0,1-1.584-1.876,1.8,1.8,0,0,1,1.5-1.944,8.355,8.355,0,0,1,1.731-.108q23.988-.008,47.976.018a3.278,3.278,0,0,0,2.565-1.08c4.613-4.673,9.213-9.362,13.935-13.923a9.094,9.094,0,0,1,15.115,4.13,8.853,8.853,0,0,1-1.679,8.2,17.561,17.561,0,0,1-1.459,1.568q-12.457,12.465-24.927,24.918a11.426,11.426,0,0,1-1.256.944,12.824,12.824,0,0,1,1.083.814,1.962,1.962,0,0,1-.665,3.285,1.967,1.967,0,0,1-1.039.179c-3.922-.859-5.418,2.355-7.956,4.61,2.91,0,5.437.012,7.962-.005a2,2,0,0,1,2.236,1.5c.38,1.412-.6,2.509-2.279,2.52-3.573.022-7.148-.039-10.72.047a3.342,3.342,0,0,0-2.059.866c-3.682,3.582-7.306,7.224-10.919,10.875a17.973,17.973,0,0,1-6.45,4.211q-4.936,1.884-9.862,3.795c-1.473.575-2.886.7-4.108-.5-1.264-1.236-1.17-2.656-.553-4.2,1.308-3.271,2.475-6.6,3.831-9.848.732-1.755,1.734-3.4,2.652-5.167-.221-.017-.587-.069-.953-.069-3.708-.006-7.415,0-11.123-.006-1.659,0-2.618-.766-2.607-2.033s.956-1.983,2.641-1.984c5.047,0,10.095-.026,15.142.021a2.752,2.752,0,0,0,2.209-.935c1.1-1.152,2.3-2.21,3.461-3.307Zm2.746,17.427,39.331-39.327-6.794-6.812L-286.574,154.7Zm41.59-55.731,7.376,7.32c.934-.974,1.983-2,2.948-3.093a5.082,5.082,0,0,0-.222-7.022,5.094,5.094,0,0,0-7.026-.2C-236.191,103.757-237.2,104.829-238.17,105.775Zm-45.063,58.646-6.269-6.256-3.937,10.22Zm39.1-52.425,6.957,6.968,3.066-2.818-7.128-7.128Z" transform="translate(-70.925 -99.239)"   class="so"/>
    <path id="Path_26001" data-name="Path 26001" d="M-325.576-5.251h-46.675V1.816c1.718,0,3.437-.01,5.155.006a7.694,7.694,0,0,1,1.858.137,1.8,1.8,0,0,1,1.422,2.121,1.734,1.734,0,0,1-1.739,1.714c-2.455.057-4.918.109-7.367-.029a3.817,3.817,0,0,1-3.41-3.865c-.081-2.41-.086-4.826,0-7.235a3.967,3.967,0,0,1,4.3-3.994c4.2-.036,8.4-.011,12.6-.011q16.484,0,32.968,0c3.523,0,4.984,1.452,4.987,4.933,0,2.01.023,4.021-.007,6.031a4.012,4.012,0,0,1-4.347,4.208q-15.009.02-30.019,0c-1.592,0-2.492-.732-2.5-1.971-.01-1.263.954-2.041,2.606-2.043q14.273-.011,28.545,0h1.635Z" transform="translate(-25.524 -30.62)"   class="so"/>
    <path id="Path_26002" data-name="Path 26002" d="M-278.041,80.578q-12.265,0-24.529,0a10.121,10.121,0,0,1-1.339-.029,1.868,1.868,0,0,1-1.759-1.875,1.9,1.9,0,0,1,1.57-2.047,4.121,4.121,0,0,1,1.065-.067q24.932,0,49.864,0a4.323,4.323,0,0,1,1.319.135,1.835,1.835,0,0,1,1.36,2.05,1.848,1.848,0,0,1-1.684,1.793,8.128,8.128,0,0,1-1.338.036Q-265.776,80.58-278.041,80.578Z" transform="translate(-70.967 -85.818)"   class="so"/>
    <path id="Path_26003" data-name="Path 26003" d="M-278.095,104.71q-12.2,0-24.393,0a12.237,12.237,0,0,1-1.472-.044,1.819,1.819,0,0,1-1.7-1.776,1.808,1.808,0,0,1,1.369-2.038,5.129,5.129,0,0,1,1.452-.155q24.794-.011,49.589,0a4.78,4.78,0,0,1,1.45.169,1.8,1.8,0,0,1,1.3,2.075,1.784,1.784,0,0,1-1.6,1.712,9.2,9.2,0,0,1-1.471.056Q-265.832,104.712-278.095,104.71Z" transform="translate(-70.968 -101.324)"   class="so"/>
    <path id="Path_26004" data-name="Path 26004" d="M-367.613,210.039c1.517,0,3.034-.025,4.551.006a3.76,3.76,0,0,1,4.015,3.907q.081,4.75,0,9.5a3.659,3.659,0,0,1-3.769,3.864q-4.882.134-9.77,0a3.61,3.61,0,0,1-3.736-3.749q-.129-4.882,0-9.77a3.691,3.691,0,0,1,3.888-3.75C-370.827,210.005-369.219,210.04-367.613,210.039Zm-4.6,4.06v9.143h9.058V214.1Z" transform="translate(-25.529 -171.578)"   class="so"/>
    <path id="Path_26005" data-name="Path 26005" d="M-367.662,87.337c-1.606,0-3.213.03-4.819-.008a3.6,3.6,0,0,1-3.8-3.532c-.123-3.385-.117-6.781-.008-10.168a3.5,3.5,0,0,1,3.64-3.538q4.947-.143,9.9,0a3.638,3.638,0,0,1,3.713,3.9q.068,4.684,0,9.369a3.77,3.77,0,0,1-4.079,3.971C-364.628,87.354-366.145,87.338-367.662,87.337Zm-4.584-4.109h9.137V74.162h-9.137Z" transform="translate(-25.54 -81.617)"   class="so"/>
    <path id="Path_26006" data-name="Path 26006" d="M-367.659,140.152c1.606,0,3.213-.031,4.818.008a3.6,3.6,0,0,1,3.767,3.557c.1,3.343.095,6.692.007,10.035a3.613,3.613,0,0,1-3.838,3.622q-4.751.054-9.5,0a3.613,3.613,0,0,1-3.909-3.689q-.144-4.947.008-9.9a3.624,3.624,0,0,1,3.832-3.637c.089,0,.179,0,.268,0h4.55Zm-4.593,13.091h9.1v-9.009h-9.1Z" transform="translate(-25.529 -126.673)"   class="so"/>
  </g>
</svg>
<hr class="new_soc">
							</h4>
							<p class="adv-p">PRE</p>
                            <p class="adv-p1">REQUISITES</p>
                            <i class="arrow down"></i>
				</div>
			</div>

            <div class="col-lg-12" id="soc_id" style="display:none;">
            <div class="content is-open">
         <div class="tab_content">
            <!--<img src="assets/img_2/ccsp.jpg" class="d-inline-block ml-3" align="right">-->
            <p>SOC Analysts play a crucial position in today’s security teams since they are on the front lines of cyber defense, identifying and responding to cyber threats as they occur.</p>
			<p>The InfosecTrain’s SOC Analyst training course is specifically created for aspiring and current SOC Analysts who want to learn how to prevent, identify, assess, and respond to cybersecurity threats and incidents. The course is the first level of a course series that includes Level 1-SOC Analyst and Level 2-SOC Specialist, and is specifically designed to assist you in mastering over trending and in-demand technical abilities to carry out numerous sophisticated SOC activities.</p>
			<p>The course begins with the fundamentals of SOC teams and Blue Team operation architecture before moving on to more advanced topics such as digital forensics, incident response, threat intelligence, and SIEM (Security Incident and Event Management) solutions.</p>
			<p>This training course also helps participants plan their preparation for the SOC Analyst certification examinations, which are required to obtain the most sought-after position in the SOC team.
</p>

                       <!--<h4 class="mb-4">Upon course completion, you will accomplish:</h4>
                       <ul class="ulclass"><li>Instant Credibility and Differentiation</li><li>Unique recognition</li><li>Fill the unknown gap in your knowledge and helps you stay ahead</li><li>Career Advancement</li><li>Ensures you’re better equipped to protect sensitive data in a global environment.</li></ul>--></div>
        </div>
            </div>

            <div class="col-lg-12" id="attend_id" style="display:none;">
             <div class="content is-open">
         		<div class="tab_content">
                <p>The SOC Analyst training course is exclusively designed for:</p>
                <ul class="ulclass">
                  <li>Technical Support Engineers</li>
                  <li>System Administrators</li>
                  <li>Security Consultants</li>
                  <li>Cyber Security Analysts</li>
                  <li>Network Engineers</li>
                  <li>Network Architects or Admin</li>
                  <li>Security System Engineers</li>
                  <li>SOC Analysts (L1 &amp; L2)</li>
                  <li>Information Security Researcher</li>
                  <li>Entry-level Information Security role</li>
                  <li>Anyone Who wants to become SOC Analyst</li>
                </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12" id="requisites_id" style="display:none;">
             <div class="content is-open">
         		<div class="tab_content">
             <p>Basic Knowledge of:</p>
              <ul class="ulclass">
                <li>Networking fundamentals</li>
                <li>OS basics &amp; Troubleshooting is recommended</li>
                <li>Basics of Information Security</li>
                <li>Basics of Cyber World &amp; Security</li>
                <li>Beginner or Fresher for SOC Operations Centre</li>
                <li>Working on Information Security Role</li>
              </ul>
                    </div>
                </div>
            </div>
      <!-- /.col-md-8 -->
    </div>


  </div>


    <div class="container content-mobile">


    <div class="row ">

		    <div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box3" onclick="toggle_soc_mob()">
							<h4 class="adv-h">
                            <svg id="Group_11928" data-name="Group 11928" xmlns="http://www.w3.org/2000/svg" width="124.581" height="124.544" viewBox="0 0 124.581 124.544">
  <path id="Path_25990" data-name="Path 25990" d="M-329.616,42.411q25.468,0,50.935,0c3.142,0,3.862.706,3.862,3.814q0,42.938-.024,85.876a9.523,9.523,0,0,1-.595,3.156c-2.221,6.139-3.709,12.381-2.977,18.977a17.643,17.643,0,0,0,2.752,7.986,3.066,3.066,0,0,1,.5,3.328c-.645,1.235-1.8,1.395-3.052,1.394q-50.625-.014-101.25-.038c-8.017-.017-14.255-3.457-18.151-10.654a16.359,16.359,0,0,1-1.775-7.944q0-43.636.017-87.273c.015-10.614,8.588-18.593,19.91-18.615Q-354.54,42.371-329.616,42.411Zm49.429,5.281h-2.029q-48.208,0-96.415.005a28.983,28.983,0,0,0-2.945.128c-5.876.6-12.583,5.256-12.557,13.371.079,24.479.027,48.958.033,73.437,0,.468.07.936.133,1.721,5.108-4.736,10.966-5.739,17.348-5.716,31.465.112,62.931.051,94.4.051h2.035Zm-1.17,88.358c-.606-.036-.962-.077-1.317-.077q-48.37,0-96.74.056a17.306,17.306,0,0,0-6.607,1.351c-4.877,2.094-7.976,5.8-8.018,11.321-.042,5.589,3.085,9.235,7.938,11.574a17.717,17.717,0,0,0,7.871,1.42q47.205,0,94.411,0c.547,0,1.093-.049,1.824-.084C-285.215,152.965-283.926,144.574-281.358,136.05Z" transform="translate(399.397 -42.403)" class="so" />
  <path id="Path_25991" data-name="Path 25991" d="M-298.407,116.773q0-12.263-.009-24.526c0-1.308.164-2.507,1.421-3.21,1.209-.676,2.267-.18,3.332.471q20.107,12.3,40.226,24.583c2.66,1.626,2.659,3.727-.007,5.358q-20.173,12.344-40.353,24.675a2.947,2.947,0,0,1-3.2.379,3.063,3.063,0,0,1-1.42-3.048Q-298.392,129.114-298.407,116.773Zm39.233,0L-293.017,96.1v41.35Z" transform="translate(340.24 -69.533)"  class="so"/>
  <path id="Path_25992" data-name="Path 25992" d="M-307.8,300.876h-39.907a14.279,14.279,0,0,1-1.706-.036,2.475,2.475,0,0,1-2.335-2.3,2.525,2.525,0,0,1,1.927-2.8,6.882,6.882,0,0,1,1.691-.134q40.294-.009,80.589,0a6.117,6.117,0,0,1,1.831.205,2.383,2.383,0,0,1,1.759,2.614,2.466,2.466,0,0,1-2.239,2.4,11.3,11.3,0,0,1-1.705.048Q-287.848,300.877-307.8,300.876Z" transform="translate(371.498 -190.728)"  class="so"/>
</svg>
<hr class="new_soc">
</h4>
							<p class="adv-p">EVERYTHING ABOUT</p>
                            <p class="adv-p1">SOC</p>
                            <i class="arrow down" onclick="toggle_soc_mob()"></i>
				</div>
			</div>
			<div class="col-lg-12" id="soc_id_mob" style="display:none;">
            <div class="content is-open">
         <div class="tab_content">
            <!--<img src="assets/img_2/ccsp.jpg" class="d-inline-block ml-3" align="right">-->
            <p>SOC Analysts play a crucial position in today’s security teams since they are on the front lines of cyber defense, identifying and responding to cyber threats as they occur.</p>
			<p>The InfosecTrain’s SOC Analyst training course is specifically created for aspiring and current SOC Analysts who want to learn how to prevent, identify, assess, and respond to cybersecurity threats and incidents. The course is the first level of a course series that includes Level 1-SOC Analyst and Level 2-SOC Specialist, and is specifically designed to assist you in mastering over trending and in-demand technical abilities to carry out numerous sophisticated SOC activities.</p>
			<p>The course begins with the fundamentals of SOC teams and Blue Team operation architecture before moving on to more advanced topics such as digital forensics, incident response, threat intelligence, and SIEM (Security Incident and Event Management) solutions.</p>
			<p>This training course also helps participants plan their preparation for the SOC Analyst certification examinations, which are required to obtain the most sought-after position in the SOC team.
</p>

                       <!--<h4 class="mb-4">Upon course completion, you will accomplish:</h4>
                       <ul class="ulclass"><li>Instant Credibility and Differentiation</li><li>Unique recognition</li><li>Fill the unknown gap in your knowledge and helps you stay ahead</li><li>Career Advancement</li><li>Ensures you’re better equipped to protect sensitive data in a global environment.</li></ul>--></div>
        </div>
            </div>

            <!------------------>





			<div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box3" onclick="toggle_attend_mob()">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="173.87" height="132.639" viewBox="0 0 173.87 132.639">
  <g id="Group_11931" data-name="Group 11931" transform="translate(467.152 17.094)">
    <path id="Path_25993" data-name="Path 25993" d="M-337.893,160.165c0,1.937.022,3.672-.005,5.405-.038,2.426-1.143,3.571-3.563,3.6q-5.528.06-11.057,0c-2.179-.027-3.458-1.273-3.394-3.142.061-1.784,1.3-2.835,3.447-2.852,2.744-.023,5.488-.005,8.513-.005,0-1.441.065-2.785-.016-4.121-.1-1.729-.468-3.452-.475-5.178-.044-11.494.08-22.99-.082-34.483a52.469,52.469,0,0,0-1.333-11.092c-.675-2.9-2.914-5.051-5.357-6.786a24.772,24.772,0,0,0-14.416-4.551c-9.557-.089-19.116-.067-28.673-.008a25.48,25.48,0,0,0-13.338,3.8c-5.648,3.452-8.077,8.8-8.17,15.11-.194,13.241-.089,26.486-.106,39.73,0,2.423,0,4.846,0,7.581h2.113q17.617,0,35.233,0a16,16,0,0,1,1.872.036,2.757,2.757,0,0,1,2.63,2.7,2.7,2.7,0,0,1-1.989,3.022,7.452,7.452,0,0,1-2.211.248q-19.772.021-39.544.008c-3.4,0-4.346-.948-4.353-4.333,0-1.486,0-2.972,0-4.68h-2.348q-19.022,0-38.044,0c-3.747,0-4.59-.859-4.59-4.666q0-13.868,0-27.737a22.716,22.716,0,0,1,2.037-10.194c4.02-8.183,11.107-11.314,19.724-11.506,8.055-.18,16.116-.008,24.174-.065a2.5,2.5,0,0,0,1.9-.917c4.728-8.922,12.57-13.127,22.186-13.774,8.584-.578,17.231-.2,25.849-.286,5.57-.053,11.1.009,16.439,1.993a24.7,24.7,0,0,1,13.9,11.866,1.929,1.929,0,0,0,2,1.237c7.933-.06,15.867-.045,23.8-.044a23.1,23.1,0,0,1,13.127,3.752c5.745,3.839,8.471,9.479,8.608,16.212.208,10.241.1,20.489.068,30.734-.007,2.364-1.287,3.391-3.959,3.392q-19.022.012-38.044,0Zm-123.14-6.133h39.018V112.066c-1.689,0-3.431-.012-5.174,0-6.681.051-13.376-.142-20.039.235-7.174.406-12.136,4.494-13.414,10.47a24.829,24.829,0,0,0-.463,5.023c-.046,8.12-.023,16.241-.018,24.361C-461.122,152.765-461.066,153.374-461.034,154.032Zm123.064-41.966v41.875h38.586c0-9.534.209-18.9-.069-28.245-.205-6.884-3.532-10.858-9.9-12.694a23.462,23.462,0,0,0-6.068-.895c-6.925-.107-13.852-.041-20.779-.041Z" transform="translate(0 -54.055)"   class="so"/>
    <path id="Path_25994" data-name="Path 25994" d="M-292.811,7A24.252,24.252,0,0,1-316.9,31.114,24.233,24.233,0,0,1-341,7.026a24.317,24.317,0,0,1,24.1-24.12A24.244,24.244,0,0,1-292.811,7Zm-6.019.027a18.138,18.138,0,0,0-18.128-18.1,18.158,18.158,0,0,0-18,18.047,18.1,18.1,0,0,0,17.935,18.1A18.146,18.146,0,0,0-298.83,7.032Z" transform="translate(-63.1 0)"   class="so"/>
    <path id="Path_25995" data-name="Path 25995" d="M-401.216,55.17a18.092,18.092,0,0,1-18,18,18.145,18.145,0,0,1-18.05-18.156,18.125,18.125,0,0,1,18.02-17.986A18.076,18.076,0,0,1-401.216,55.17Zm-6.012-.118A11.964,11.964,0,0,0-419.257,43.04a12.016,12.016,0,0,0-12,12.063A12.037,12.037,0,0,0-419.2,67.124,11.982,11.982,0,0,0-407.228,55.051Z" transform="translate(-14.949 -27.069)"   class="so"/>
    <path id="Path_25996" data-name="Path 25996" d="M-221.365,55.044A18.078,18.078,0,0,1-203.4,37.024a18.117,18.117,0,0,1,18.085,18.108A18.151,18.151,0,0,1-203.3,73.165,18.11,18.11,0,0,1-221.365,55.044Zm6.014-.02a11.989,11.989,0,0,0,11.949,12.1,12.036,12.036,0,0,0,12.08-12A12.013,12.013,0,0,0-203.3,43.04,11.961,11.961,0,0,0-215.351,55.024Z" transform="translate(-122.94 -27.069)"   class="so"/>
    <path id="Path_25997" data-name="Path 25997" d="M-317.3,167.845l17.895-20.5c.328-.376.642-.77,1-1.114a3.084,3.084,0,0,1,4.081-.276,2.982,2.982,0,0,1,.4,4.194c-.551.753-1.2,1.438-1.813,2.144q-8.376,9.593-16.75,19.189a28.326,28.326,0,0,0-1.817,2.365c-1.348,1.925-3.462,2.189-5.1.538q-7.2-7.234-14.349-14.516c-1.474-1.5-1.569-3.211-.341-4.484,1.288-1.334,3.041-1.257,4.617.3C-325.443,159.684-321.44,163.709-317.3,167.845Z" transform="translate(-66.129 -81.233)"   class="so"/>
    <path id="Path_25998" data-name="Path 25998" d="M-262.8,239.333a2.992,2.992,0,0,1-2.95,2.965,2.938,2.938,0,0,1-2.989-3.083,2.984,2.984,0,0,1,3.014-2.9A3.047,3.047,0,0,1-262.8,239.333Z" transform="translate(-99.244 -126.753)"   class="so"/>
  </g>
</svg>
<hr class="new_soc">
							</h4>
							<p class="adv-p">WHO SHOULD</p>
                            <p class="adv-p1">ATTEND</p>
                            <i class="arrow down"></i>
				</div>
			</div>
			<div class="col-lg-12" id="attend_id_mob" style="display:none;">
             <div class="content is-open">
         		<div class="tab_content">
                <p>The SOC Analyst training course is exclusively designed for:</p>
<ul class="ulclass">
    <li>Technical Support Engineers</li>
    <li>System Administrators</li>
    <li>Security Consultants</li>
    <li>Cyber Security Analysts</li>
    <li>Security System Engineers</li>
    <li>SOC Analysts (L1 & L2)</li>
    <li>Information Security Researcher</li>
</ul>
                    </div>
                </div>
            </div>







			<div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box3"  onclick="toggle_requisites_mob()">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="122.674" height="137.265" viewBox="0 0 122.674 137.265">
  <g id="Group_11932" data-name="Group 11932" transform="translate(416.119 57.003)">
    <path id="Path_25999" data-name="Path 25999" d="M-403.833,80.262c-2.038-.842-4.269-1.391-6.075-2.584-4.258-2.813-6.192-7.019-6.2-12.1q-.023-12.264,0-24.527,0-41.549,0-83.1c0-6.835,3.6-12.125,9.749-14.176a14.442,14.442,0,0,1,4.456-.747q30.558-.073,61.117-.031a9.6,9.6,0,0,1,7.019,2.828q11.914,11.873,23.786,23.788a9.65,9.65,0,0,1,2.807,7.031q.034,8.309,0,16.619c-.005,1.572-.8,2.492-2.029,2.481-1.21-.011-1.972-.942-1.977-2.517-.015-5.227,0-10.454-.012-15.681,0-.744-.084-1.487-.135-2.333h-1.6q-8.644,0-17.289,0c-5.664-.01-9.212-3.541-9.224-9.184-.012-5.763,0-11.527,0-17.29v-1.61c-.567-.039-1.04-.1-1.512-.1q-30.424-.012-60.848,0a10.163,10.163,0,0,0-10.277,9.9c-.017.312-.015.625-.015.938q0,53.745,0,107.49c0,4.973,2.514,8.789,6.86,10.269a11.2,11.2,0,0,0,3.541.584q40.074.048,80.148.016a10.007,10.007,0,0,0,10.279-9.7c.182-3.252.07-6.52.073-9.781q.01-10.655,0-21.31a9.684,9.684,0,0,1,.066-1.47,1.819,1.819,0,0,1,1.823-1.65,1.83,1.83,0,0,1,2.027,1.564,6.965,6.965,0,0,1,.1,1.465q.007,14.877,0,29.754c-.009,8.04-4.274,13.3-12.127,14.99a1.646,1.646,0,0,0-.357.175ZM-335.418-49.8c0,5.335-.008,10.6,0,15.856.006,3.368,1.763,5.133,5.113,5.14q7.37.014,14.741,0c.379,0,.757-.039,1.082-.058Z" transform="translate(0)"   class="so"/>
    <path id="Path_26000" data-name="Path 26000" d="M-282.5,144.079h-10.708c-3.4,0-6.79.019-10.185-.011a2.09,2.09,0,0,1-2.335-2.046c.011-1.2.9-1.958,2.375-1.959,8-.009,15.992-.02,23.988.015a2.816,2.816,0,0,0,2.219-.919c3.382-3.441,6.809-6.836,10.218-10.25.308-.308.6-.633,1.149-1.217h-1.8q-17.488,0-34.977-.008c-.619,0-1.4.1-1.816-.224a3.356,3.356,0,0,1-1.285-1.937,1.658,1.658,0,0,1,1.607-1.806,10.784,10.784,0,0,1,1.471-.045q19.767,0,39.533.019a2.913,2.913,0,0,0,2.339-.968c1.1-1.157,2.32-2.2,3.489-3.294l-.2-.4h-1.548q-21.71,0-43.42,0a10.509,10.509,0,0,1-1.735-.086,1.8,1.8,0,0,1-1.584-1.876,1.8,1.8,0,0,1,1.5-1.944,8.355,8.355,0,0,1,1.731-.108q23.988-.008,47.976.018a3.278,3.278,0,0,0,2.565-1.08c4.613-4.673,9.213-9.362,13.935-13.923a9.094,9.094,0,0,1,15.115,4.13,8.853,8.853,0,0,1-1.679,8.2,17.561,17.561,0,0,1-1.459,1.568q-12.457,12.465-24.927,24.918a11.426,11.426,0,0,1-1.256.944,12.824,12.824,0,0,1,1.083.814,1.962,1.962,0,0,1-.665,3.285,1.967,1.967,0,0,1-1.039.179c-3.922-.859-5.418,2.355-7.956,4.61,2.91,0,5.437.012,7.962-.005a2,2,0,0,1,2.236,1.5c.38,1.412-.6,2.509-2.279,2.52-3.573.022-7.148-.039-10.72.047a3.342,3.342,0,0,0-2.059.866c-3.682,3.582-7.306,7.224-10.919,10.875a17.973,17.973,0,0,1-6.45,4.211q-4.936,1.884-9.862,3.795c-1.473.575-2.886.7-4.108-.5-1.264-1.236-1.17-2.656-.553-4.2,1.308-3.271,2.475-6.6,3.831-9.848.732-1.755,1.734-3.4,2.652-5.167-.221-.017-.587-.069-.953-.069-3.708-.006-7.415,0-11.123-.006-1.659,0-2.618-.766-2.607-2.033s.956-1.983,2.641-1.984c5.047,0,10.095-.026,15.142.021a2.752,2.752,0,0,0,2.209-.935c1.1-1.152,2.3-2.21,3.461-3.307Zm2.746,17.427,39.331-39.327-6.794-6.812L-286.574,154.7Zm41.59-55.731,7.376,7.32c.934-.974,1.983-2,2.948-3.093a5.082,5.082,0,0,0-.222-7.022,5.094,5.094,0,0,0-7.026-.2C-236.191,103.757-237.2,104.829-238.17,105.775Zm-45.063,58.646-6.269-6.256-3.937,10.22Zm39.1-52.425,6.957,6.968,3.066-2.818-7.128-7.128Z" transform="translate(-70.925 -99.239)"   class="so"/>
    <path id="Path_26001" data-name="Path 26001" d="M-325.576-5.251h-46.675V1.816c1.718,0,3.437-.01,5.155.006a7.694,7.694,0,0,1,1.858.137,1.8,1.8,0,0,1,1.422,2.121,1.734,1.734,0,0,1-1.739,1.714c-2.455.057-4.918.109-7.367-.029a3.817,3.817,0,0,1-3.41-3.865c-.081-2.41-.086-4.826,0-7.235a3.967,3.967,0,0,1,4.3-3.994c4.2-.036,8.4-.011,12.6-.011q16.484,0,32.968,0c3.523,0,4.984,1.452,4.987,4.933,0,2.01.023,4.021-.007,6.031a4.012,4.012,0,0,1-4.347,4.208q-15.009.02-30.019,0c-1.592,0-2.492-.732-2.5-1.971-.01-1.263.954-2.041,2.606-2.043q14.273-.011,28.545,0h1.635Z" transform="translate(-25.524 -30.62)"   class="so"/>
    <path id="Path_26002" data-name="Path 26002" d="M-278.041,80.578q-12.265,0-24.529,0a10.121,10.121,0,0,1-1.339-.029,1.868,1.868,0,0,1-1.759-1.875,1.9,1.9,0,0,1,1.57-2.047,4.121,4.121,0,0,1,1.065-.067q24.932,0,49.864,0a4.323,4.323,0,0,1,1.319.135,1.835,1.835,0,0,1,1.36,2.05,1.848,1.848,0,0,1-1.684,1.793,8.128,8.128,0,0,1-1.338.036Q-265.776,80.58-278.041,80.578Z" transform="translate(-70.967 -85.818)"   class="so"/>
    <path id="Path_26003" data-name="Path 26003" d="M-278.095,104.71q-12.2,0-24.393,0a12.237,12.237,0,0,1-1.472-.044,1.819,1.819,0,0,1-1.7-1.776,1.808,1.808,0,0,1,1.369-2.038,5.129,5.129,0,0,1,1.452-.155q24.794-.011,49.589,0a4.78,4.78,0,0,1,1.45.169,1.8,1.8,0,0,1,1.3,2.075,1.784,1.784,0,0,1-1.6,1.712,9.2,9.2,0,0,1-1.471.056Q-265.832,104.712-278.095,104.71Z" transform="translate(-70.968 -101.324)"   class="so"/>
    <path id="Path_26004" data-name="Path 26004" d="M-367.613,210.039c1.517,0,3.034-.025,4.551.006a3.76,3.76,0,0,1,4.015,3.907q.081,4.75,0,9.5a3.659,3.659,0,0,1-3.769,3.864q-4.882.134-9.77,0a3.61,3.61,0,0,1-3.736-3.749q-.129-4.882,0-9.77a3.691,3.691,0,0,1,3.888-3.75C-370.827,210.005-369.219,210.04-367.613,210.039Zm-4.6,4.06v9.143h9.058V214.1Z" transform="translate(-25.529 -171.578)"   class="so"/>
    <path id="Path_26005" data-name="Path 26005" d="M-367.662,87.337c-1.606,0-3.213.03-4.819-.008a3.6,3.6,0,0,1-3.8-3.532c-.123-3.385-.117-6.781-.008-10.168a3.5,3.5,0,0,1,3.64-3.538q4.947-.143,9.9,0a3.638,3.638,0,0,1,3.713,3.9q.068,4.684,0,9.369a3.77,3.77,0,0,1-4.079,3.971C-364.628,87.354-366.145,87.338-367.662,87.337Zm-4.584-4.109h9.137V74.162h-9.137Z" transform="translate(-25.54 -81.617)"   class="so"/>
    <path id="Path_26006" data-name="Path 26006" d="M-367.659,140.152c1.606,0,3.213-.031,4.818.008a3.6,3.6,0,0,1,3.767,3.557c.1,3.343.095,6.692.007,10.035a3.613,3.613,0,0,1-3.838,3.622q-4.751.054-9.5,0a3.613,3.613,0,0,1-3.909-3.689q-.144-4.947.008-9.9a3.624,3.624,0,0,1,3.832-3.637c.089,0,.179,0,.268,0h4.55Zm-4.593,13.091h9.1v-9.009h-9.1Z" transform="translate(-25.529 -126.673)"   class="so"/>
  </g>
</svg>
<hr class="new_soc">
							</h4>
							<p class="adv-p">PRE</p>
                            <p class="adv-p1">REQUISITES</p>
                            <i class="arrow down"></i>
				</div>
			</div>





            <div class="col-lg-12" id="requisites_id_mob" style="display:none;">
             <div class="content is-open">
         		<div class="tab_content">
<ul class="ulclass">
    <li>Prior knowledge of networking fundamentals, OS basics, troubleshooting is recommended</li>
    <li>Experience as an entry-level SOC Analyst, Cyber Security Analyst, Information Security role</li>
    <li>Experience of two years in the Information Security domain</li>
    <li>Security+ or CEH Certification Experience Equivalent</li>
</ul>
                    </div>
                </div>
            </div>
      <!-- /.col-md-8 -->
    </div>
  </div>
</section>









<!-----------------------

<section id="ourexpert">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h2 class="packagesub">OUR EXPERTS</h2>
               <h2 class="package-heading">COURSE ADVISORS</h2>
            </div>
        </div>

        <div class="row ">
     <div class="col-md-10 offset-md-1">
           		<div class="card4soc" style="background:#0000001A;">
                	<div class="row">
  						<div class="col-md-7 soc_trainer_bg">
                           <div class="soc_trainerdetail">
                            	<div class="c_name2"><strong>BHARAT MUTHA</strong></div>
                                <p><strong>10+ Years Of Experience</strong></p>
                                <p>Senior Information Security Consultant & Trainer</p>
                                <p>
                                10+ years of experience with all round knowledge of all information security domains ranging from Vulnerability Assessment, Penetration Testing to Application Security, Threat Analysis, and from Security Solutions, Identity &amp; Access Management to Governance, Risk &amp; Compliance.
                                </p>
                           </div>
  						</div>

            		<div class="col-md-5">
                    	<div class="card4soc" style=" background:#E50039;border-radius: 50% 0% 0% 50%;padding: 25px 10px 20px 40px;">
                            <img src="assets/img_2/soc-trainer.png" class="" style="width:310px;">

                         </div>
                    </div>
                    </div>
                </div>
     </div>
</div>
    </div>
</section>
------------>


<!----------------Done--------->




<!----------------Done--------->
<section id="schedule">
  <div class="container">
    <div class="row">
          <div class="col-12 col-lg-12 mt-lg-0 mt-4">

              <h2 class="sche-h">Looking For A Flexible, Customize, Cost-Effective <br />Learning Solution? We Are Just A Click Away</h2>

        <a href="#free_demo" class="btn href_toscroll" data-target="#request_demo">Schedule a Demo</a>

          </div>

    </div>
  </div>
</section>


<!----------------Done--------->
<section id="whyinfosec_section">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInLeft">
        <h2 class="package-heading">Why Infosec Train</h2>
      </div>
    </div>

    <div class="row">


		    <div class="col-lg-3 mt-lg-0 mt-4">
				<div class="certification_box3">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#fff;stroke:#707070;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}.c{stroke:none;}.d{fill:none;}</style></defs><g transform="translate(-292 -4826)"><g class="a" transform="translate(292 4826)"><rect class="c" width="44" height="44"/><rect class="d" x="0.5" y="0.5" width="43" height="43"/></g><g transform="translate(-58.202 4244.097)"><path class="b" d="M380.157,585.9l6.84,7.311c.212.216.521.351.521.658.015,1.151.029,2.161.029,2.7a30.966,30.966,0,0,1-4.536,16.381,25.041,25.041,0,0,1-10.338,9.532.828.828,0,0,1-.305.059.9.9,0,0,1-.307-.059,25.085,25.085,0,0,1-10.794-10.341,31.152,31.152,0,0,1-4.065-15.572c0-.525,0-1.52.032-2.7l.506-.658c.814-.891,6.273-7.311,6.853-7.311Zm-8.893,15.727h0l-1.688-1.565a1,1,0,0,0-.7-.273,1.038,1.038,0,0,0-.721.273l-.524.479a.919.919,0,0,0,0,1.333l2.943,2.71a1.079,1.079,0,0,0,.725.3.973.973,0,0,0,.719-.307l5.106-5.033a.86.86,0,0,0-.046-1.3l-.534-.478a1.182,1.182,0,0,0-.723-.259,1.047,1.047,0,0,0-.693.308Zm1.1-7.941a7.506,7.506,0,1,1-7.5,7.495,7.5,7.5,0,0,1,7.5-7.495Z" transform="translate(0)"/></g></g></svg>
							</h4>
							<p class="adv-p">Learn from <br />Industry Experts</p>
				</div>
			</div>


			<div class="col-lg-3 mt-lg-0 mt-4">
				<div class="certification_box3">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#fff;stroke:#707070;opacity:0;}.b{fill:#3d3d3d;}.c{stroke:none;}.d{fill:none;}</style></defs><g transform="translate(-538 -4826)"><g class="a" transform="translate(538 4826)"><rect class="c" width="44" height="44"/><rect class="d" x="0.5" y="0.5" width="43" height="43"/></g><g transform="translate(-128 -90)"><g transform="translate(670 4920)"><path class="b" d="M886.153,216.105a17.57,17.57,0,0,0-10.74-10.01,17.585,17.585,0,0,0-11.041,0,17.379,17.379,0,0,0-4.23,2.064,20.6,20.6,0,0,0-4.586,4.445,19.4,19.4,0,0,0-1.957,3.5,17.822,17.822,0,0,0,0,13.373,17.589,17.589,0,0,0,32.553,0,17.361,17.361,0,0,0,0-13.373Zm-15.5,1.692a.677.677,0,0,0-.692.677v4.979h-4.395a.684.684,0,1,0,0,1.367h5.087a.679.679,0,0,0,.677-.692v-5.654a.677.677,0,0,0-.677-.677Zm-.763-7.041a11.95,11.95,0,1,1-11.95,11.949,11.96,11.96,0,0,1,11.95-11.949Zm8.963,11.949a.718.718,0,0,1,.728-.727h1.312a10.856,10.856,0,0,0-1.1-4.13l-1.14.642a.719.719,0,0,1-.368.108.734.734,0,0,1-.643-.376.754.754,0,0,1,.268-1l1.151-.659a11.137,11.137,0,0,0-3.021-3.04l-.674,1.155a.716.716,0,0,1-.623.373.7.7,0,0,1-.37-.106.715.715,0,0,1-.269-.993l.661-1.14a11.175,11.175,0,0,0-4.127-1.121v1.315a.755.755,0,0,1-.747.749.732.732,0,0,1-.728-.749V211.7c-1.887.125-4.643.212-3.471,2.238a.756.756,0,0,1-.286,1.015.721.721,0,0,1-.992-.268l-.66-1.155a11,11,0,0,0-3.026,3.04l1.137.659a.714.714,0,0,1,.273,1,.7.7,0,0,1-.641.376.622.622,0,0,1-.355-.108L860,217.848a10.792,10.792,0,0,0-1.1,4.13h1.3a.728.728,0,1,1,0,1.455h-1.3a10.924,10.924,0,0,0,1.1,4.144l1.139-.655a.726.726,0,1,1,.723,1.259l-1.137.677c1.054,1.566,2.51,3.912,3.686,1.867a.724.724,0,0,1,.992-.266.756.756,0,0,1,.286,1.01l-.656,1.141a11.408,11.408,0,0,0,4.127,1.1V232.4a.731.731,0,0,1,.728-.746.754.754,0,0,1,.747.746v1.316a11.436,11.436,0,0,0,4.127-1.1l-.661-1.141a.73.73,0,0,1,.269-1.01.722.722,0,0,1,.993.266l.674,1.157a11.042,11.042,0,0,0,3.021-3.023l-1.151-.677a.75.75,0,0,1-.268-1,.729.729,0,0,1,1.011-.262l1.14.655a10.99,10.99,0,0,0,1.1-4.144h-1.312a.72.72,0,0,1-.728-.728Zm5.136,6.827h0a15.638,15.638,0,0,1-28.218,0,15.632,15.632,0,1,1,28.218-13.461,15.559,15.559,0,0,1,0,13.461Z" transform="translate(-852.298 -205.206)"/></g></g></g></svg>
							</h4>
							<p class="adv-p">24*7 <br />Support</p>
				</div>
			</div>


			<div class="col-lg-3 mt-lg-0 mt-4">
				<div class="certification_box3">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#fff;stroke:#707070;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}.c{stroke:none;}.d{fill:none;}</style></defs><g transform="translate(-784 -4826)"><g class="a" transform="translate(784 4826)"><rect class="c" width="44" height="44"/><rect class="d" x="0.5" y="0.5" width="43" height="43"/></g><g transform="translate(179.346 4372.741)"><path class="b" d="M619.144,478.34v.582c2.268,1.316,3.427.66,3.427,3.61h-9.3c0-3.056,1.16-2.293,3.408-3.61v-.51a2.213,2.213,0,0,1-.62-1.328h0c-.054,0-.123-.1-.123-.2a.08.08,0,0,1,.018-.059,1.132,1.132,0,0,1-.105-.263c-.05-.159-.194-.5-.072-.637a.137.137,0,0,1,.2.015c-.161-.867-.394-2.006.817-2.34,0-.749,2.8-.41,3.16.763a4.941,4.941,0,0,1-.056,1.562.108.108,0,0,1,.158-.058c.14.114-.013.552-.071.695a.791.791,0,0,1-.109.286v.036c0,.1-.051.2-.1.2a2.062,2.062,0,0,1-.624,1.256Zm8.076-4.773h9.765a.394.394,0,0,1,.39.39v1.987a.4.4,0,0,1-.39.4H627.22a.4.4,0,0,1-.39-.4v-1.987a.394.394,0,0,1,.39-.39Zm0,4.191h9.765a.4.4,0,0,1,.39.388v2.008a.4.4,0,0,1-.39.388H627.22a.4.4,0,0,1-.39-.388v-2.008a.4.4,0,0,1,.39-.388Zm13.243-11.345h-7.9v-.069a2.07,2.07,0,0,0-2.083-2.082h-1.468a2.076,2.076,0,0,0-2.076-2h-1.454a2.087,2.087,0,0,0-2.078,2h-1.482a2.078,2.078,0,0,0-2.07,2.082v.069h-7.883a3.315,3.315,0,0,0-3.318,3.32v15.975a3.315,3.315,0,0,0,3.318,3.318h28.491a3.33,3.33,0,0,0,3.321-3.318V469.733a3.33,3.33,0,0,0-3.321-3.32Zm-12.975-.853Zm13.794,20.147a.837.837,0,0,1-.819.836H611.972a.84.84,0,0,1-.833-.836V469.733a.839.839,0,0,1,.833-.835h7.935a2.071,2.071,0,0,0,2.076,2.077h8.47a2.076,2.076,0,0,0,2.076-2.077h7.933a.836.836,0,0,1,.819.835v15.975Z" transform="translate(0)"/></g></g></svg>
							</h4>
							<p class="adv-p">Certification <br />Focused Programs</p>
				</div>
			</div>


			<div class="col-lg-3 mt-lg-0 mt-4">
				<div class="certification_box3">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#fff;stroke:#707070;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}.c{stroke:none;}.d{fill:none;}</style></defs><g transform="translate(-1030 -4826)"><g class="a" transform="translate(1030 4826)"><rect class="c" width="44" height="44"/><rect class="d" x="0.5" y="0.5" width="43" height="43"/></g><g transform="translate(426.841 4689.243)"><path class="b" d="M616.91,147.545h1.927a.959.959,0,0,0,.961-.953v-3.866a.972.972,0,0,0-.961-.969H616.91a.964.964,0,0,0-.967.969v3.866a.951.951,0,0,0,.967.953Zm8.056,17.116a.435.435,0,0,0-.441.17.488.488,0,0,0-.017.485l1.91,3.274,2.291-3.384Zm4.2.844h0l-2.3,3.4,8.009,5.433,2.307-3.388Zm9.31,6.318h0l-2.3,3.383-.922-.622,2.291-3.388Zm.535,4.242h0l1.309-1.917a.9.9,0,0,0-.24-1.235l-1.257-.857-2.306,3.385,1.256.859a.875.875,0,0,0,.679.14.888.888,0,0,0,.559-.374Zm-21.335-21.9a2.9,2.9,0,1,1-2.9,2.9,2.9,2.9,0,0,1,2.9-2.9Zm8.351,0a2.9,2.9,0,1,1-2.9,2.9,2.909,2.909,0,0,1,2.9-2.9Zm8.367,0a2.9,2.9,0,1,1-2.917,2.9,2.893,2.893,0,0,1,2.917-2.9Zm-16.718,7.5a2.9,2.9,0,1,1-2.9,2.9,2.9,2.9,0,0,1,2.9-2.9Zm8.351,0a2.912,2.912,0,0,1,2.873,2.42h0l-.079.09-3.7-.543a1.479,1.479,0,0,0-1.436.635,1.45,1.45,0,0,0-.056,1.53l.571,1.031a2.906,2.906,0,0,1,1.827-5.164Zm8.367,0a2.9,2.9,0,0,1,0,5.8,2.456,2.456,0,0,1-.6-.062l-1.843-1.246a2.9,2.9,0,0,1,2.439-4.494Zm6.644-12.187v19.3a3.838,3.838,0,0,1-1.157,2.76l-1.343-.907h0l-.218-.153-.108-.079a1.929,1.929,0,0,0,.893-1.621V153.348c0-3.713-21.708-1.932-25.094-1.932a1.935,1.935,0,0,0-1.935,1.932v15.433a1.947,1.947,0,0,0,1.935,1.934h13.7l2.841,1.932H614.009a3.85,3.85,0,0,1-3.85-3.866v-19.3a3.838,3.838,0,0,1,3.85-3.852h.968v.967a1.924,1.924,0,0,0,1.933,1.918h1.927a1.927,1.927,0,0,0,1.927-1.918v-.967h9.647v.967a1.926,1.926,0,0,0,1.933,1.918h1.932a1.927,1.927,0,0,0,1.938-1.918v-.967h.953a3.854,3.854,0,0,1,3.87,3.852Zm-8.693-1.933h1.932a.961.961,0,0,0,.973-.953v-3.866a.975.975,0,0,0-.973-.969h-1.932a.973.973,0,0,0-.967.969v3.866a.959.959,0,0,0,.967.953Z"/></g></g></svg>
							</h4>
							<p class="adv-p">Flexible <br />Schedule</p>
				</div>
			</div>




      <!-- /.col-md-8 -->
    </div>



  </div>
</section>


<!----------------Done--------->





<!----------------Done--------->
<section id="profile_card">
    <div class="container" id="reviews">
        <div class="row">
		<div class="col-12 wow fadeInLeft">
        <h2 class="package-heading">Words of Praise</h2>
        </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="profile_card_carousel owl-carousel owl-theme wow fadeInUp">
                    <div class="item card">
					<div class="advisor_box">
					<div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/Mohammed-iliyas-150x150.jpg" alt=" Mohammed iliyas "  class="p_image">                    </div>
					<p class="wordof_p">
          I would like say SOC Analyst Training is best for beginners who wants to start a career in cyber security. Thanks to Mentor and InfosecTrain for wonderfulling design this course.
          </p>
                        <h4 class="adv-ho">  Mohammed iliyas </h4>
                      <!--  <p class="adv-p">CompTIA Security+ | India</p>-->
                    </div>

                    </div>
                    <div class="item card">
					<div class="advisor_box">
					<div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/Jude_Adio-150x150.jpg" alt="Jude Adio" class="p_image">                          </div>
					<p class="wordof_p">
          I couldn't believe it would be an easy journey for a career change from nursing to certified SOC Analyst. I am proud to have completed this so easily with InfosecTrain. My trainer was patient, polite and ready to be pull back with any questions. Offered enough time for practical.
					</p>
                        <h4 class="adv-ho">  Jude Adio </h4>

                    </div>

                    </div>


                    <div class="item card">
					<div class="advisor_box">
					 <div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2023/01/Abdul-Latheef-150x150.jpg" alt="Abdul Latheef " class="p_image">                          </div>
					<p class="wordof_p">

    I'm rrateful, to InfosecTrain team, and our trainer, for their guidance and support, well-structured live class session. Indeed grateful, for your support and sharing the knowledge.
					</p>
                        <h4 class="adv-ho">Abdul Latheef </h4>

                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




<!----------------Done--------->

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
                    <a href="https://www.infosectrain.com/courses/certified-ethical-hacker-ceh-training/" class="link_box" target="_blank">
                        <img src="assets/img_2/cieh.png" />
						<span>CEH Certification <br />Course </span>                    </a>
                               </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-md-0 mt-4">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/network-security-training/" class="link_box rounded" target="_blank">
					 <img src="assets/img_2/NTS.svg" />
                        <span>Network Security Training <br />Course </span>                    </a>
                                 </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/cissp-new/" class="link_box" target="_blank">
                         <img src="assets/img_2/cissp.png" />
                        <span>CISSP Certification <br />Training  </span>                    </a>
                                  </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4 mt-lg-0">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/soc-expert/" class="link_box" target="_blank">
                        <img src="assets/img_2/Group 8346.svg" />
                        <span>SOC Analyst Online <br />Training</span>                    </a>
                                    </div>
            </div>
        </div>
    </div>
</section>

<section id="learmode">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h2 class="packagesub">Choose your preferred</h2>
               <h2 class="package-heading">LEARNING MODE</h2>
            </div>
        </div>

        <div class="row">
         <div class="col-lg-4 mt-lg-0 mt-4">
          <div class="certification_box3">
							<h4 class="adv-h">
                            <svg xmlns="http://www.w3.org/2000/svg" width="125.733" height="122.021" viewBox="0 0 125.733 122.021">
  <g id="Group_11940" data-name="Group 11940" transform="translate(468 44.25)">
    <path id="Path_26012" data-name="Path 26012" d="M-342.267-38.111V43.173a1.579,1.579,0,0,0-.162.329c-.981,4.292-3.19,6.055-7.6,6.055h-32.99V61.622c.577,0,1.061,0,1.546,0a7.67,7.67,0,0,1,7.878,6.5,26.918,26.918,0,0,1,.159,4.894,4.492,4.492,0,0,1-4.8,4.747q-25.963.014-51.925,0a4.768,4.768,0,0,1-4.928-4.856c-.028-1.227-.029-2.456.007-3.682a7.946,7.946,0,0,1,7.28-7.745c.762-.069,1.536-.01,2.357-.01V49.476h-1.546q-16.7,0-33.39,0c-4.923,0-7.62-2.683-7.62-7.562q0-39.343,0-78.686a10.276,10.276,0,0,1,.1-1.833,6.8,6.8,0,0,1,7.112-5.642q55.669-.005,111.339,0c.286,0,.573,0,.859.015a6.62,6.62,0,0,1,6.05,5.077C-342.451-38.807-342.356-38.46-342.267-38.111Zm-4.011,63.763V24.331q0-30.445,0-60.889c0-2.837-.923-3.762-3.734-3.762H-460.375c-2.647,0-3.7,1.057-3.7,3.724q0,30.445,0,60.889v1.359Zm-117.793,4.1c0,4.265-.006,8.4,0,12.525,0,2.317,1.047,3.351,3.387,3.351q55.548,0,111.1,0c2.321,0,3.378-1.048,3.385-3.365.012-3.846,0-7.693,0-11.539,0-.312-.052-.625-.083-.972Zm59.923,44.283h9.326c5.358,0,10.717-.023,16.075.019,1.071.009,1.486-.335,1.408-1.412-.071-.977,0-1.963-.022-2.944a3.933,3.933,0,0,0-4.269-4.145q-11.657,0-23.315,0-10.921,0-21.843,0a3.972,3.972,0,0,0-4.268,3.945c-.066.854-.026,1.717-.026,2.576,0,1.894.064,1.957,1.9,1.957Zm17.045-24.41h-34.242v11.9H-387.1Z" transform="translate(0 0)" class="so2"/>
    <path id="Path_26013" data-name="Path 26013" d="M-429.13,67.119c1.311.426,2.453.721,3.53,1.171.938.392,1.8.962,2.7,1.446a5.907,5.907,0,0,0,6.182,0c.739-.436,1.5-.83,2.256-1.24,5.282-2.868,10.523-.875,12.314,4.865.946,3.034,1.5,6.191,2.224,9.293.224.955.407,1.921.673,2.863a1.891,1.891,0,0,0,3.028,1.252q4.587-2.725,9.13-5.522a4.281,4.281,0,0,0,1.111-1.11c2.123-2.856,4.222-5.731,6.333-8.6a5.572,5.572,0,0,1,.7-.849,1.78,1.78,0,0,1,2.457-.146,1.707,1.707,0,0,1,.559,2.481c-2.569,3.593-5.2,7.14-7.841,10.681a3.681,3.681,0,0,1-1.093.776c-3.01,1.817-6.1,3.517-9.022,5.461a5.915,5.915,0,0,1-9.337-4.043c-.5-3.507-1.507-6.944-2.345-10.4a9.479,9.479,0,0,0-.979-2.493,3.812,3.812,0,0,0-5.284-1.568c-1.1.539-2.154,1.172-3.238,1.745a9.811,9.811,0,0,1-9.522.036c-.911-.462-1.792-.983-2.695-1.462-1.782-.947-3.187-.8-4.532.7a8.653,8.653,0,0,0-1.612,2.7c-1.243,3.329-2.446,6.677-3.5,10.067a8,8,0,0,0-.182,3.453c.339,2.259.922,4.481,1.372,6.724a1.907,1.907,0,0,1-1.319,2.5,2.038,2.038,0,0,1-2.449-1.666c-.625-2.749-1.314-5.494-1.71-8.279a8.75,8.75,0,0,1,.512-3.83c1.226-3.68,2.578-7.32,3.946-10.951a8.528,8.528,0,0,1,3.836-4.637A27.046,27.046,0,0,1-429.13,67.119Z" transform="translate(-17.974 -74.904)" class="so2"/>
    <path id="Path_26014" data-name="Path 26014" d="M-409.493,3.178A11.524,11.524,0,0,1-397.96-8.239,11.536,11.536,0,0,1-386.508,3.267,11.554,11.554,0,0,1-398,14.747,11.481,11.481,0,0,1-409.493,3.178Zm11.5,7.731a7.532,7.532,0,0,0,7.552-7.571,7.608,7.608,0,0,0-7.593-7.559,7.534,7.534,0,0,0-7.533,7.59A7.526,7.526,0,0,0-397.988,10.909Z" transform="translate(-39.35 -24.22)" class="so2"/>
    <path id="Path_26015" data-name="Path 26015" d="M-251.126,11.892q10,0,20,0a8.529,8.529,0,0,1,1.225.032,1.8,1.8,0,0,1,1.652,1.7,1.753,1.753,0,0,1-1.253,2,5.113,5.113,0,0,1-1.566.179q-20.124.014-40.247.006a7.135,7.135,0,0,1-1.1-.037,1.97,1.97,0,0,1-1.742-2.038,1.9,1.9,0,0,1,1.928-1.835c1.717-.044,3.435-.018,5.153-.019Z" transform="translate(-130.37 -37.755)" class="so2"/>
    <path id="Path_26016" data-name="Path 26016" d="M-259.3,54.5c4.208,0,8.416,0,12.624-.006a2.072,2.072,0,0,1,2.191,1.22,1.878,1.878,0,0,1-1.3,2.585,6,6,0,0,1-1.457.122q-12.011.01-24.023,0c-.286,0-.573.012-.858-.013a2,2,0,0,1-2.044-2.006,1.937,1.937,0,0,1,2.123-1.9C-267.8,54.482-263.553,54.5-259.3,54.5Z" transform="translate(-130.362 -66.41)" class="so2"/>
    <path id="Path_26017" data-name="Path 26017" d="M-398.574,118.313c.129,2.107-.47,3.007-1.693,3.092-1.275.089-2.058-.756-2.219-2.359-.306-3.042-.627-6.083-.939-9.125a7.125,7.125,0,0,1-.055-.854,1.925,1.925,0,0,1,1.844-2.036,1.916,1.916,0,0,1,2.071,1.809C-399.2,112.163-398.868,115.49-398.574,118.313Z" transform="translate(-43.393 -101.746)" class="so2"/>
    <path id="Path_26018" data-name="Path 26018" d="M-356.371,114.792c-.105,1.671-.192,3.344-.32,5.014a2,2,0,0,1-2.083,2.08,2.026,2.026,0,0,1-1.829-2.323c.171-3.181.325-6.365.605-9.537a2.975,2.975,0,0,1,1-1.933,1.986,1.986,0,0,1,1.888,0,2.84,2.84,0,0,1,.965,1.936C-356.08,111.607-356.277,113.2-356.371,114.792Z" transform="translate(-72.23 -102.299)" class="so2"/>
    <path id="Path_26019" data-name="Path 26019" d="M-282.419,202.568a3.305,3.305,0,0,1-3.186-3.122,3.426,3.426,0,0,1,3.366-3.382,3.221,3.221,0,0,1,3.152,3.258A3.329,3.329,0,0,1-282.419,202.568Z" transform="translate(-122.673 -161.628)" class="so2"/>
  </g>
</svg>
							<hr class="new_soc">
</h4>
							<p class="adv-p">1-TO-1 TRAINING</p>
                            <p class="adv-p1">Customized schedule Learn at your dedicated hour Instant clarification of doubt Guaranteed to run</p>

				</div>
         </div>

         <div class="col-lg-4 mt-lg-0 mt-4">
          <div class="certification_box3">
							<h4 class="adv-h">
                            <svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" viewBox="0 0 126 126">
  <g id="Group_11939" data-name="Group 11939" transform="translate(482.25 74.25)">
    <path id="Path_26008" data-name="Path 26008" d="M-400.3,51.75a2.773,2.773,0,0,1-1.233-2.851,3.553,3.553,0,0,0,0-.491c-.017-2.663.471-5.46-.193-7.95s-2.472-4.673-3.793-6.983c-4.4-7.691-3.86-5.952-3.889-14.568,0-.813,0-1.627,0-2.594h-1.509c-21.315,0-42.63-.044-63.945.043-3.65.015-6.161-1.209-7.39-4.718V-69.574a7.047,7.047,0,0,1,4.676-4.676h116.648a7.034,7.034,0,0,1,4.676,4.676V28.863c-.587,2.283-.991,4.632-1.8,6.834A31.47,31.47,0,0,0-360.175,48.9a2.922,2.922,0,0,1-1.243,2.846h-1.477c-.407-.622-1.138-1.23-1.167-1.87-.187-4.142-.164-8.283,1.254-12.272a32.128,32.128,0,0,0,1.373-4.2,46.182,46.182,0,0,0,1.192-7.6c.182-5.242.052-10.5.058-15.744,0-.781-.027-1.463-1.044-1.633-3.525-.59-4.862-2.187-4.866-5.731,0-2.108-.03-2.135-2.132-2.137-.205,0-.41,0-.615,0a4.87,4.87,0,0,1-5.1-4.615c-.108-1.021-.6-1.31-1.527-1.3-2.5.028-5,.006-7.5.014a6.524,6.524,0,0,0-.84.113c0,.976,0,1.877,0,2.777,0,2.3.024,4.593-.015,6.889a1.943,1.943,0,0,1-1.9,2.018,1.98,1.98,0,0,1-2.018-2.026c-.02-.327-.006-.656-.006-.984q0-10.333,0-20.667c0-3.855.01-7.709-.005-11.564a3.971,3.971,0,0,0-2.525-3.857c-2.712-1.04-5.339.933-5.341,4.042q-.012,18.945,0,37.89c0,.369.018.74-.009,1.107a1.971,1.971,0,0,1-1.956,1.966,1.935,1.935,0,0,1-1.956-1.957c-.05-1.187-.015-2.378-.016-3.567,0-.869,0-1.738,0-2.79-1.009.6-1.772,1.069-2.551,1.512a6.271,6.271,0,0,0-3.369,5.972c.052,3.936-.082,7.876.064,11.808a10.089,10.089,0,0,0,1.1,4.184c1.922,3.661,4.083,7.2,6.082,10.817a5.24,5.24,0,0,1,.613,2.312c.073,2.745-.022,5.5.051,8.241a3.042,3.042,0,0,1-1.253,2.854Zm40.113-47.281V3.141q0-35.311,0-70.623c0-2.26-.571-2.831-2.83-2.831H-475.473c-2.27,0-2.839.565-2.84,2.819q0,38.51,0,77.021c0,2.273.567,2.847,2.814,2.847h66.092c0-.484,0-.807,0-1.129A9.857,9.857,0,0,1-404.314,2.3,19.854,19.854,0,0,1-401.565.681a2.94,2.94,0,0,0,1.978-3.735,1.206,1.206,0,0,0-.11-.239,1.451,1.451,0,0,0-.328-.074q-17.287-.008-34.573.022a1.521,1.521,0,0,0-1.062.7A5.807,5.807,0,0,1-440.846.542a5.834,5.834,0,0,1-5.314-3.182,1.653,1.653,0,0,0-1.181-.7c-2.91-.06-5.823-.028-8.735-.034-1.638,0-2.563-.741-2.539-2,.023-1.223.915-1.926,2.486-1.93,2.871-.008,5.742-.032,8.612.018a1.445,1.445,0,0,0,1.494-.9,5.8,5.8,0,0,1,10.171-.09,1.652,1.652,0,0,0,1.692.983q16.671-.035,33.342-.018c.394,0,.789-.035,1.255-.058V-8.81c0-6.562-.016-13.124.018-19.686a10.087,10.087,0,0,1,.4-2.9,7.82,7.82,0,0,1,8.509-5.384,7.829,7.829,0,0,1,6.8,7.691c.049,6.152.016,12.3.017,18.455v1.256a3.133,3.133,0,0,0,.415.085q3.937.008,7.874.012c3.242.006,5.057,1.558,5.475,4.743a1.142,1.142,0,0,0,1.275,1.166,15.5,15.5,0,0,1,2.576.091c2.7.483,4.027,2.491,4.041,5.985C-362.149,4.367-361.992,4.517-360.187,4.469Zm-78.76-9.784a1.982,1.982,0,0,0-1.9-1.988,1.975,1.975,0,0,0-2.018,1.992,1.979,1.979,0,0,0,1.963,1.928A1.978,1.978,0,0,0-438.947-5.315Z" class="so2"/>
    <path id="Path_26009" data-name="Path 26009" d="M-430.252-46.223V20.625h47.275c.328,0,.656-.006.984,0,1.409.033,2.322.842,2.286,2.018a2.049,2.049,0,0,1-2.268,1.916c-.205.006-.41,0-.615,0q-23.5,0-47,0c-3.168,0-4.657-1.494-4.657-4.669q0-32.73,0-65.46c0-3.208,1.46-4.683,4.636-4.683h93.145c3.085,0,4.592,1.512,4.593,4.609q0,25.9,0,51.8a6.1,6.1,0,0,1-.031,1.105,1.873,1.873,0,0,1-1.944,1.7,1.865,1.865,0,0,1-1.932-1.713,7.324,7.324,0,0,1-.029-1.228q0-25.347,0-50.694v-1.555Z" transform="translate(-32.25 -16.125)" class="so2"/>
    <path id="Path_26010" data-name="Path 26010" d="M-325.159-16.01c-1.747.408-3.371.839-5.017,1.148-.7.132-.829.452-.824,1.075.024,2.829.014,5.66.009,8.489,0,1.61-.367,2.117-1.875,2.593A59.044,59.044,0,0,1-360.34-.936c-2.742-.439-5.442-1.157-8.148-1.8-1.46-.349-1.868-.938-1.873-2.443-.01-2.83-.026-5.66.012-8.49.01-.737-.17-1.071-.954-1.231-2.366-.484-4.707-1.087-7.064-1.616-1.087-.244-1.816-.822-1.82-1.981s.714-1.742,1.8-1.992c8.34-1.919,16.656-3.947,25.028-5.709a15.437,15.437,0,0,1,6.208.16c7.888,1.679,15.731,3.569,23.588,5.388,2.059.477,2.411.936,2.414,3.024,0,.41.034.824-.006,1.23a10,10,0,0,0,1.413,6.2c1.247,2.145.366,3.49-2.087,3.5-1.066,0-2.134.038-3.2-.013a1.934,1.934,0,0,1-1.8-2.839,9.871,9.871,0,0,1,.874-1.757A6.629,6.629,0,0,0-325.159-16.01Zm-41.23,9.815a61.443,61.443,0,0,0,31.414.035v-7.574c-2.576.592-5.1,1.107-7.581,1.755-4.517,1.179-9.014,2.039-13.659.6-1.911-.592-3.9-.944-5.852-1.392-1.416-.325-2.837-.628-4.321-.955Zm-2.376-12.468.011.322c5.14,1.183,10.261,2.457,15.43,3.5a14.285,14.285,0,0,0,5.217.015c3.541-.634,7.028-1.565,10.538-2.375q2.522-.581,5.043-1.165a.8.8,0,0,0-.552-.4c-4.145-.968-8.317-1.833-12.427-2.929a18.923,18.923,0,0,0-10.4.045c-1.333.388-2.707.639-4.062.954Z" transform="translate(-68.574 -32.117)" class="so2"/>
    <path id="Path_26011" data-name="Path 26011" d="M-308.3,67.422c0-2.419-.079-4.841.046-7.253A3.542,3.542,0,0,1-307.245,58c.7-.676,1.6-.263,2.365.245,3.678,2.458,7.369,4.9,11.039,7.365,1.735,1.167,1.751,2.647.033,3.8-3.7,2.5-7.4,4.994-11.168,7.391a2.633,2.633,0,0,1-2.23.227,2.692,2.692,0,0,1-1.046-1.987C-308.374,72.508-308.3,69.963-308.3,67.422Zm4.025-4.035v8.273l6.207-4.14Z" transform="translate(-116.857 -88.616)" class="so2"/>
  </g>
</svg>
							<hr class="new_soc">
</h4>
							<p class="adv-p">ONLINE TRAINING</p>
                            <p class="adv-p1">Flexibility, Convenience & Time-Saving More Effective Learning Cost Savings</p>

				</div>
         </div>

         <div class="col-lg-4 mt-lg-0 mt-4">
          <div class="certification_box3">
							<h4 class="adv-h">
                            <svg xmlns="http://www.w3.org/2000/svg" width="141.233" height="127.988" viewBox="0 0 141.233 127.988">
  <g id="Group_11943" data-name="Group 11943" transform="translate(510 77.226)">
    <path id="Path_26020" data-name="Path 26020" d="M-368.767,2.485a3.741,3.741,0,0,1-3.879,2.222c-6.527-.063-13.056-.025-19.584-.025h-1.423c-2.632,9.04-5.189,17.986-7.847,26.9-1.975,6.626-9.122,8.537-14.181,3.863q-3.8-3.51-7.6-7.017c-.326-.3-.676-.573-1.306-1.1,0,2.07.006,3.829,0,5.589a21.656,21.656,0,0,1-.069,2.615,1.867,1.867,0,0,1-2.067,1.786,1.81,1.81,0,0,1-1.954-1.891c-.044-4.366-.069-8.735.04-13.1a2.275,2.275,0,0,1,1.3-1.679,2.738,2.738,0,0,1,2.212.516c2.707,2.349,5.3,4.825,7.937,7.259,1.452,1.341,2.89,2.7,4.353,4.026,2.829,2.569,6.308,1.6,7.393-2.081,1.647-5.584,3.265-11.177,4.943-16.93l-5.626-1.652c-1.268,4.344-2.5,8.566-3.734,12.787-.154.528-.287,1.066-.488,1.576a1.956,1.956,0,0,1-2.4,1.349,1.865,1.865,0,0,1-1.491-2.4c.515-1.449-.175-2.145-1.117-2.995-3.718-3.358-7.345-6.818-11.088-10.149A6.583,6.583,0,0,0-429,10.94a5.678,5.678,0,0,0-1.51-.024c-4.222,0-4.24-.018-7.091,2.916a1.918,1.918,0,0,0-.287,1.466q1.331,7.457,2.768,14.9a3.673,3.673,0,0,1-1.037,3.521c-1.445,1.48-2.859,2.991-4.318,4.458-1.687,1.7-3.512,1.717-5.188.043-1.528-1.527-3.012-3.1-4.505-4.66a3.38,3.38,0,0,1-.926-3.159c.947-4.96,1.844-9.931,2.8-14.89a1.773,1.773,0,0,0-.735-2.116c-.815-.562-1.433-1.4-2.2-2.042a2.052,2.052,0,0,0-1.2-.413c-3.126-.032-6.253-.051-9.378-.007-3.6.051-5.731,2.213-5.736,5.8q-.018,14.343,0,28.686c0,.356.032.712.053,1.135h5.8c.024-.511.067-1,.068-1.483q.007-8.9.008-17.791a6.779,6.779,0,0,1,.107-1.506,1.87,1.87,0,0,1,2.112-1.566,1.843,1.843,0,0,1,1.857,1.7,9.365,9.365,0,0,1,.055,1.376q0,8.827,0,17.653v1.589H-428.8c.037-.573.056-1.158.116-1.739a1.866,1.866,0,0,1,1.874-1.845,1.819,1.819,0,0,1,2.128,1.7,13.685,13.685,0,0,1-.108,3.558,3.292,3.292,0,0,1-3.07,2.543c-.456.04-.919.019-1.379.019h-76.4c-3.311,0-4.353-1.047-4.353-4.372q0-24.066,0-48.132c0-3.2,1.1-4.294,4.3-4.3q2.62,0,5.24-.023a2.286,2.286,0,0,0,.436-.14c0-2.172,0-4.406,0-6.641,0-.782-.023-1.564.007-2.344a3.626,3.626,0,0,1,3.848-3.793c2.205-.049,4.412-.035,6.617-.052.039,0,.078-.039.328-.169,0-1.563,0-3.243,0-4.923a15.44,15.44,0,0,1,.038-1.79,2.017,2.017,0,0,1,2.106-1.936,1.974,1.974,0,0,1,1.965,2.058c.056,1.929.021,3.861.03,5.792,0,.269.031.538.061,1.012,2.049,0,4.051,0,6.052,0,3.508,0,4.7,1.2,4.706,4.733,0,2.664,0,5.328,0,8.207,1.3,0,2.519.047,3.737-.008,5.71-.256,6.488.845,6.289,6.36-.078,2.15-.013,4.3-.013,6.463h12.433c0-2.056.016-3.974-.019-5.891a1.088,1.088,0,0,0-.419-.775c-4.708-3.05-7.048-7.462-7.528-12.961,0-.04-.049-.076-.2-.308-.681,0-1.5.036-2.31-.006a7.7,7.7,0,0,1-7.065-5.241c-.931-3.016.14-5.925,2.974-8.079.143-.109.277-.232.484-.407-1.427-2.8-1.445-5.825-1.425-8.867q.055-8,0-16c-.016-1.953.53-3.548,2.343-4.475,1.873-.958,3.55-.463,5.1.811.744.611,1.531,1.169,2.417,1.841.162-.3.293-.558.434-.809a4.219,4.219,0,0,1,6.361-1.464c2.09,1.5,4.127,3.076,6.138,4.681a5.507,5.507,0,0,0,3.693,1.229c2.9-.04,5.792-.016,8.688.006a12.321,12.321,0,0,1,7.676,2.648,4.346,4.346,0,0,0,3.142.981c1.088-.061,2.181-.013,3.028-.013a65.47,65.47,0,0,1-2.34-8,19.1,19.1,0,0,1,4.438-15.673c1.064-1.3,2.326-1.537,3.313-.676.955.833.918,2.006-.1,3.3-4.442,5.611-5.012,12.684-1.493,18.522a15.989,15.989,0,0,0,18.63,7.025,16.087,16.087,0,0,0,11.081-16.564,15.814,15.814,0,0,0-13.533-14.406A26.661,26.661,0,0,0-405-72.5c-1.644.2-2.643-.089-3-1.337-.375-1.3.306-2.3,2.007-2.7,8.343-1.963,15.5.193,20.868,6.856,5.415,6.717,5.918,14.2,2.192,21.972-.192.4-.423.782-.739,1.362,3.815,0,7.429.059,11.039-.025a3.678,3.678,0,0,1,3.868,2.231ZM-373,.543V-42.2c-4.37,0-8.64-.038-12.909.036a3.866,3.866,0,0,0-2.2.788,20.11,20.11,0,0,1-25.339-.072c-.348-.284-.747-.69-1.136-.706-1.8-.075-3.6-.033-5.424-.033,1.7,5.111,1.321,10.131.829,15.166a2.016,2.016,0,0,0,.5,1.385c2.047,2.224,2.807,4.739,1.692,7.609a7.306,7.306,0,0,1-6.489,4.814,23.032,23.032,0,0,1-2.621.015c-.615,2.241-.885,4.353-1.767,6.168-1.221,2.512-.509,5-.75,7.577,7.181,0,14.162.012,21.143-.031A2.031,2.031,0,0,0-406.273-.2a7.1,7.1,0,0,1,10.72.045,1.972,1.972,0,0,0,1.219.666C-387.26.555-380.186.543-373,.543ZM-468.395-1.8h-37.387V46.5h34.09V44.731c0-9.286.025-18.572-.015-27.858a9.988,9.988,0,0,1,2.762-7.265,1.626,1.626,0,0,0,.526-.908C-468.381,5.219-468.395,1.737-468.395-1.8Zm12.927-32.327a4.9,4.9,0,0,0-.115.675c0,6.8-.045,13.607.029,20.41a11.182,11.182,0,0,0,3.572,8.108c2.849,2.769,6.343,3.46,10.165,3.285,5.492-.251,10.48-4.347,10.938-9.824a129.458,129.458,0,0,0,.16-16.109,6.837,6.837,0,0,0-6.852-6.5C-443.493-34.242-449.422-34.129-455.468-34.129Zm-7.6-18.52a7.889,7.889,0,0,0-.11.8c0,6.293-.03,12.586.036,18.878a16.07,16.07,0,0,0,.642,3.5c.331,1.379,1.169,1.989,2.768,1.418,0-2.223-.029-4.508.008-6.791.036-2.221,1.215-3.426,3.426-3.437,6.109-.028,12.219-.071,18.327.011a11.454,11.454,0,0,1,11.159,8.759c.131.524.233,1.056.352,1.6h3.228a13.948,13.948,0,0,0,.2-1.635c.016-2.479.1-4.965-.031-7.437a9.069,9.069,0,0,0-7.311-8.548,33.2,33.2,0,0,0-6.3-.3c-8.474-.019-7.149.374-13.767-4.688-.886-.678-1.783-1.344-2.962-2.232,0,.881-.018,1.368,0,1.853.053,1.2-.081,2.31-1.323,2.926s-2.193.045-3.141-.7C-459.519-49.959-461.2-51.222-463.065-52.65Zm28.7,59.428c1.96,0,3.787.036,5.613-.01a6.69,6.69,0,0,1,4.981,1.937c3.31,3.12,6.673,6.184,10.02,9.266.346.319.725.6,1.217,1.008l4.151-14.3h-1.44q-9.72,0-19.439,0c-2.346,0-3.472-1.133-3.5-3.45-.006-.563,0-1.127,0-1.69l-.372-.142c-.411.483-1.138.943-1.176,1.455C-434.453,2.759-434.368,4.683-434.368,6.778ZM-478.5-14.773h-17.276v8.623H-478.5Zm35.507,49.46c.881-.868,1.815-1.878,2.846-2.776a2.133,2.133,0,0,0,.734-2.3c-.427-2.017-.765-4.053-1.15-6.079-.424-2.235-.859-4.468-1.282-6.668h-2.525c-.834,4.5-1.668,8.962-2.466,13.425a1.278,1.278,0,0,0,.255.986C-445.415,32.443-444.2,33.551-442.989,34.687Zm4.478-32.373h-9.163c0,2.069-.014,4.261.018,6.451a1.187,1.187,0,0,0,.405.8c1.353,1.083,2.74,2.125,4.168,3.222,1.4-1.08,2.758-2.09,4.062-3.163a1.538,1.538,0,0,0,.487-1.034C-438.489,6.487-438.512,4.384-438.512,2.314Zm33.537,5.493,5.595,1.617c.153-.471.273-.811.375-1.156.311-1.054.668-2.1.909-3.17a2.891,2.891,0,0,0-2.022-3.438,2.852,2.852,0,0,0-3.556,1.806C-404.164,4.836-404.516,6.256-404.975,7.807Zm-21.413-25.146c2.081.1,4.054.3,5.3-1.673a2.67,2.67,0,0,0-.142-3.211c-1.325-1.782-3.217-1.57-5.156-1.439ZM-459.8-23.692c-2.151-.092-4.175-.279-5.37,1.822a2.675,2.675,0,0,0,.312,3.2c1.348,1.656,3.174,1.46,5.058,1.293Z" class="so2"/>
    <path id="Path_26021" data-name="Path 26021" d="M-232.628-39.8c0-2.2-.024-4.406.006-6.609.04-2.974,2.593-4.386,5.162-2.835q5.3,3.2,10.546,6.485c2.579,1.616,2.571,4.326-.014,5.944q-5.247,3.284-10.545,6.484c-2.576,1.551-5.108.13-5.148-2.86C-232.651-35.394-232.628-37.6-232.628-39.8Zm4.239-5.177V-34.6l8.4-5.2Z" transform="translate(-175.351 -17.288)" class="so2"/>
    <path id="Path_26022" data-name="Path 26022" d="M-218.706,41.759c-.224.284-.558,1.073-1.148,1.4q-9.091,5-18.261,9.854a2.042,2.042,0,0,1-2.949-.821,2.018,2.018,0,0,1,1-2.785q9.117-4.953,18.272-9.838C-220.308,38.779-218.756,39.714-218.706,41.759Z" transform="translate(-169.878 -73.661)" class="so2"/>
    <path id="Path_26023" data-name="Path 26023" d="M-186.993,74.823c0,2.066.015,4.132,0,6.2-.014,1.52-.787,2.427-2.02,2.442a2.14,2.14,0,0,1-2.1-2.4q-.04-6.2,0-12.395a2.126,2.126,0,0,1,2.124-2.369c1.234.029,1.982.928,2,2.461C-186.979,70.783-186.993,72.8-186.993,74.823Z" transform="translate(-201.586 -90.739)" class="so2"/>
    <path id="Path_26024" data-name="Path 26024" d="M-216.114,86.2c0-1.283-.031-2.567.011-3.849a2.015,2.015,0,0,1,1.918-2.1,2,2,0,0,1,2.169,2.007q.106,3.984,0,7.972a2.044,2.044,0,0,1-2.147,2.044,2.047,2.047,0,0,1-1.946-2.224C-216.141,88.771-216.116,87.487-216.114,86.2Z" transform="translate(-185.79 -99.558)" class="so2"/>
    <path id="Path_26025" data-name="Path 26025" d="M-237.244,97.035c0,.549.035,1.1-.007,1.646a1.893,1.893,0,0,1-1.954,1.9,1.825,1.825,0,0,1-2.047-1.636,16.774,16.774,0,0,1-.015-3.825,1.841,1.841,0,0,1,2.131-1.691,1.886,1.886,0,0,1,1.892,1.959c.032.547.006,1.1.006,1.646Z" transform="translate(-169.83 -107.886)" class="so2"/>
    <path id="Path_26026" data-name="Path 26026" d="M-464.907,153.325c-2.43,0-4.86.011-7.29,0-1.707-.011-2.636-.795-2.6-2.144.031-1.288.921-1.985,2.585-1.986q7.359-.009,14.718,0c1.608,0,2.555.772,2.558,2.035s-.955,2.08-2.54,2.093C-459.954,153.34-462.431,153.325-464.907,153.325Z" transform="translate(-22.253 -143.139)" class="so2"/>
    <path id="Path_26027" data-name="Path 26027" d="M-464.925,230.762c-2.476,0-4.951.012-7.427,0-1.562-.01-2.415-.721-2.447-1.982-.034-1.309.864-2.134,2.465-2.141q7.427-.032,14.854,0c1.591.006,2.544.83,2.54,2.093s-.948,2.025-2.559,2.033C-459.974,230.772-462.449,230.762-464.925,230.762Z" transform="translate(-22.254 -192.092)" class="so2"/>
    <path id="Path_26028" data-name="Path 26028" d="M-464.678,192.05c-2.574,0-5.149.01-7.723,0-1.015-.005-1.939-.435-2.06-1.454a3.573,3.573,0,0,1,.7-2.185c.232-.343.987-.458,1.507-.462q7.585-.049,15.17-.008a2.1,2.1,0,0,1,2.354,1.984,2.112,2.112,0,0,1-2.359,2.124c-2.528.036-5.057.01-7.585.01Z" transform="translate(-22.461 -167.625)" class="so2"/>
    <path id="Path_26029" data-name="Path 26029" d="M-338.641,105.237a6.656,6.656,0,0,1-4.105-1.795,2.058,2.058,0,0,1-.388-2.935,2.051,2.051,0,0,1,2.942-.3c1.848,1.228,2.756,1.225,4.632-.014a2.057,2.057,0,0,1,2.942.324,2.116,2.116,0,0,1-.419,2.943C-334.229,104.582-335.96,105.221-338.641,105.237Z" transform="translate(-105.208 -111.873)" class="so2"/>
  </g>
</svg>
							<hr class="new_soc">
</h4>
							<p class="adv-p">CORPORATE TRAINING</p>
                            <p class="adv-p1">Anytime, Anywhere Across The Globe Hire A Trainer At Your Own Pace Customized Corporate Training</p>
				</div>
         </div>

        </div>
    </div>
</section>

<!--<section id="footr_last" class="section bg-dark_b button_transparent active">
    <div class="container ">
        <div class="row text-white justify-content-center wow fadeInUp">
           <div class="col-3 col-lg-3 col-md-4"><a href="https://api.whatsapp.com/send?phone=918767256840" target="_blank"><img src="assets/img/whatsapp.png"><span>+91-87672-56840</span></a></div>
           <div class="col-3 col-lg-3 col-md-4"><a href="tel:+91-8767256840"><img src="assets/img/phone.png"><span>+91-87672-56840</span></a></div>
           <div class="col-3 col-lg-3 col-md-4"><a href="mailto:sales@infosectrain.com"><img src="assets/img/email.png"><span> sales@infosectrain.com</span></a></div>
         </div>
    </div>
</section>-->


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
          <p class="foot_p"><a href="tel:+16572211127" class="text-white"><img src="assets/img_2/call.svg" /> +1 657-221-1127 (US)</a></p>
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
                    <p class="foot_p"><a href="tel:+16572211127" class="text-white"><img src="assets/img_2/call.svg" /> +1 657-221-1127 (US)</a></p>
                </div>


            </div>
      <div class="col-12 col-md-12 flogo mb-5">
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

<section class="rows  footer-fixed py-2" id="footr_last">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-6 pl-2 p-l-md-0 text-md-center">
        <a href="https://api.whatsapp.com/send?phone=918767256840" target="_blank">
          <img src="<?php echo BASE_URL; ?>assets/img_2/whats2.png"  class="d-inline img-v " > <span>+91 87672-56840</span></a>
        <a href="#free_demo" class="btn btn-danger href_toscroll ml-2">Enroll Now</a>
      </div>
    </div>
  </div>
</section>


<script src="assets/js/common.js"></script>
<script src="assets/js/common.min.js"></script>
<script src="assets/js/main.js"></script>

<!--Start of Zendesk Chat Script-->

<script type="text/javascript">

 window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=

d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.

_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");

$.src="https://v2.zopim.com/?5Y1ZvMP3lrSPwhhyQjIGwo618dlqPLkD";z.t=+new Date;$.

type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

</script>

<!--End of Zendesk Chat Script-->

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
$('#popup_offer').addClass('active');
 });

  $(".pop_close").click(function(){
$('#popup_offer').removeClass('active');
 });


 new WOW().init();
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
  //table display without data
  let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
        document.querySelector('.navbar-nav .nav-item:nth-child(3)').style.display = "none";
    }

</script>

</body>
</html>
