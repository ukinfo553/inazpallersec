<?php include('include/comman_use.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="description" content="CISM Training and Certification course">
<meta name="author" content="Infosec Train">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
 <title>CISM Training and Certification course with new syllabus of 16th Edition </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow" /> 
<link rel="icon" href="assets/img/fav.ico">
<link href="assets/css/style.min.css" rel="stylesheet"> 
<!-- Google Tag Manager -->
               <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                  
                  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                  
                  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                  
                  })(window,document,'script','dataLayer','GTM-5XZDRWG');
               </script>
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
                                
                                <li class="nav-item active"><a class="nav-link href_toscroll" href="#coursecontent">Overview</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#coursess">COURSE CONTENT/EXAM</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#advisors2">Trainers</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#reviews">Reviews</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#whyinfosec_section">Why Infosectrain </a></li>       

                            </ul>
                        </div>
                    </nav>
        </div>
    
  </header>  
 
  
  <section id="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 col-xl-8">
        <div class="left_banner">
            <div class="b_test_box">
               
                <h1 class="e_hacker"><font class="topline">CISM Exam PREP </font> <br> Online Training & Certification</h1>
                <h2 class="e_council">Learn CISM with the new syllabus of 16th Edition <b>(June 2022)</b></h2>
				<h2 class="e_council">
				<ul>
		<li>32 hours of instructor-led training</li>
<li>ISACA Premium Training Partner</li>
<li>98% Passing Rate</li>
<li>4 hrs/day in Weekend/Weekday</li>
<li>Certified & Experienced Trainers</li>	</ul>
				</h2>
				<img src="assets/img_2/cism-accredited-training-provider.png" />
                
            </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 col-xl-4">
        <div class="form-container wow fadeInRight" id="free_demo">
          <div class="home-form" > 
            <h2 class="    form_head">Get A Free Demo Class!</h2>

            <div class="hide rows  mt-2" id="demo_form_output">  </div>
             <form class="rows  clearfix" method="post" action=""  onSubmit="return val_demo_request(this.form);"  id="demo_me_phone_f" >
                      <div class="form-group "> 
                        <input type="text" class="form-control"  id="me_name"  name="me_name"  value=""  placeholder="Your Name * " >
                        
                        <div class="form-control-feedback"> </div> 
                      </div>
                      
                      <div class="form-group"> 
                        <input type="email" class="form-control" name="me_email" id="me_email" value=""  placeholder="E-mail address*"> 
                        <div class="form-control-feedback"> </div> 
                      </div>
                      <div class="form-group"> 
                        <input type="text" class="form-control" name="me_phone" value="" id="me_phone"  placeholder="Phone Number"> 
                        <div class="form-control-feedback"> </div> 
                      </div>
                      <!-- <div class="form-group"> 
                    <select class="form-control " id="me_country" name="me_country" > 
  <option selected="selected" value=" ">Your Country</option>
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
          
                      <div class="row">
                       <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                        <textarea class="form-control" id="me_message" value=""  name="me_message" placeholder="Comment/Training " ></textarea> 
                        <div class="form-control-feedback"> </div> 
                      </div>
          
                      </div>
                            </div>
               
                <input type="hidden"   value="<?php echo BASE_URL;?>thank-you.html" id="me_redirect"  > 
                <input type="hidden"   value="CISM Training & Certification Course" id="me_others" name="me_others"  > 
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


<section id="coursecontent">
    <div class="container">
        <div class="row">
            <div class="col-12">               
               <h2 class="package-heading"> CISM Training Package include</h2>
            </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-6">
           
              <img src="assets/img_2/business-people.jpg" width="100%" alt="" class="">
           
          </div>
          <div class="col-12 col-lg-6 mt-lg-0 mt-4">
            
            <!---------------->
			<div class="row">
			<div class="col-lg-6 mt-lg-0 mt-4">
			<div class="certification_box">
                        <h4 class="adv-h">
						<!--<img src="assets/img_2/learn_From.svg">-->
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{opacity:0;}.b{fill:#3b3a39;}.b:hover{fill:#ff1046;}.c:hover{fill:#ff1046;}.c{fill:#3b3a39;}</style></defs><g transform="translate(-233 -4176)"><g class="a" transform="translate(233.033 4176)"><rect class="b" width="44" height="44" transform="translate(-0.033)"></rect></g><g transform="translate(132.748 4007.2)"><path class="b" d="M122.5,187a3,3,0,1,0,3,3A3,3,0,0,0,122.5,187Zm17.654,1.581c-2.8-2.759-9.647-8.581-17.654-8.581s-14.857,5.822-17.654,8.581a1.992,1.992,0,0,0,0,2.838c2.8,2.759,9.647,8.581,17.654,8.581s14.857-5.822,17.654-8.581A1.992,1.992,0,0,0,140.154,188.581ZM122.5,196a6,6,0,1,1,6-6A6,6,0,0,1,122.5,196Z"></path><path class="b" d="M113.065,173.8h-4.8a2.97,2.97,0,0,0-2.967,2.966v4.8a1.5,1.5,0,0,0,3,0l-.033-4.766h4.8a1.5,1.5,0,0,0,0-3Zm0,30.4-4.765.033v-4.8a1.5,1.5,0,0,0-3,0v4.8a2.97,2.97,0,0,0,2.967,2.967h4.8a1.5,1.5,0,0,0,0-3Zm22.668-30.4h-4.8a1.5,1.5,0,0,0,0,3l4.765-.034v4.8a1.5,1.5,0,0,0,3,0v-4.8A2.97,2.97,0,0,0,135.733,173.8Zm1.467,24.134a1.5,1.5,0,0,0-1.5,1.5l.033,4.766h-4.8a1.5,1.5,0,0,0,0,3h4.8a2.97,2.97,0,0,0,2.967-2.967v-4.8A1.5,1.5,0,0,0,137.2,197.934Z"></path></g></g></svg>
						
						</h4>
                        <p class="adv-p">Access to a recorded session of the current batch</p>
            </div>
			</div>
			
			<div class="col-lg-6 mt-lg-0 mt-4">
			<div class="certification_box">
                        <h4 class="adv-h">
						<!--<img src="assets/img_2/official_structured.svg">-->
						<svg xmlns="http://www.w3.org/2000/svg" class="icon flag-icon1" width="44" height="44" viewBox="0 0 44 44">
						<defs>
						<style>.a{fill:#ddd;opacity:0;}.b{fill:#3b3a39;}.b:hover{fill:#ff1046;}</style>
						</defs>
						<g transform="translate(-726 -997)">
						<g transform="translate(-241 -219)">
						<rect class="a" width="44" height="44" transform="translate(967 1216)"/></g>
						<g transform="translate(489.926 897.641)"><g transform="translate(240.952 103)">
						<circle class="b" cx="2.862" cy="2.862" r="2.862" transform="translate(13.936 15.739)"/><path class="b" d="M270.7,121.515c.324-.356.63-.714.916-1.069,2.574-3.206,3.325-6.124,2.118-8.215-.628-1.087-2.06-2.4-5.316-2.478a1.412,1.412,0,0,0-1.465,1.4,1.431,1.431,0,0,0,1.4,1.465c1.506.036,2.538.409,2.908,1.048.551.955-.166,2.867-1.872,4.993-.227.283-.475.568-.73.852a38.462,38.462,0,0,0-3.035-2.443c-.736-7.1-3.407-14.063-7.874-14.063-2.964,0-5.159,3.034-6.512,7.295q-.727-.159-1.424-.267c-4.061-.623-6.965.182-8.173,2.274-.66,1.144-1.073,3.146.706,6.186a1.431,1.431,0,1,0,2.47-1.446c-.834-1.425-1.088-2.632-.7-3.31.552-.954,2.568-1.29,5.26-.876.368.056.748.13,1.132.212a38.187,38.187,0,0,0-.61,3.814c-5.847,4.2-10.632,10.052-8.381,13.951,1,1.735,3.029,2.473,5.586,2.473a19.145,19.145,0,0,0,4.094-.52c1.35,4.324,3.558,7.418,6.55,7.418,1.362,0,3.36-.681,5.13-3.928a1.431,1.431,0,0,0-2.513-1.371c-.844,1.549-1.8,2.437-2.618,2.437-1.2,0-2.7-1.927-3.791-5.309a37.982,37.982,0,0,0,3.64-1.408,27.734,27.734,0,0,0,10.659,2.743c2.544,0,4.594-.722,5.6-2.465C275.354,128.31,273.777,124.848,270.7,121.515ZM244,129.4c-.841-1.457,1.12-5.012,5.654-8.731q-.01.466-.01.931a41.554,41.554,0,0,0,.846,8.43C247.015,130.778,244.6,130.44,244,129.4Zm13.751-23.539c1.667,0,3.739,3.414,4.707,9.1-.217-.131-.434-.259-.652-.385a41.421,41.421,0,0,0-7.8-3.528C255.087,107.747,256.565,105.862,257.749,105.862Zm-4.507,23.407a40.125,40.125,0,0,1,.023-15.45,38.765,38.765,0,0,1,7.108,3.239,38.052,38.052,0,0,1,6.258,4.463,38.642,38.642,0,0,1-6.378,4.554A38.023,38.023,0,0,1,253.242,129.269Zm18.139.2c-.841,1.459-4.905,1.537-10.4-.534.233-.13.471-.251.7-.383a41.4,41.4,0,0,0,6.989-5.025C271.061,126.166,271.98,128.432,271.381,129.471Z" transform="translate(-240.952 -103)"/></g></g></g></svg>
						</h4>
                        <p class="adv-p">Industry Case Study & Whitepapers with Information Security Management</p>
            </div>
			</div>
			
			<div class="col-lg-6 mt-lg-0 mt-4">
			<div class="certification_box">
                        <h4 class="adv-h">
						<!--<img src="assets/img_2/certification_exam.svg">-->
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3b3a39;}</style></defs><g transform="translate(-967 -997)"><g transform="translate(241)"><g transform="translate(-241 -219)"><rect class="a" width="44" height="44" transform="translate(967 1216)"/></g></g><g transform="translate(938 898.759)"><g transform="translate(32 106.241)"><path class="b" d="M69.543,128.357h.016l-1.888-.648v-6.4a3.733,3.733,0,0,1-.43.044H64.232v5.173H38.446V110.2H51.339v-2.164a3.825,3.825,0,0,1,.233-1.274H36.727a1.719,1.719,0,0,0-1.719,1.719v19.231l-1.891.648h.019A1.714,1.714,0,0,0,32,129.968v2.577a1.719,1.719,0,0,0,1.719,1.719H68.96a1.72,1.72,0,0,0,1.719-1.719v-2.577A1.714,1.714,0,0,0,69.543,128.357Zm-16.054,3.276h-4.3a1.289,1.289,0,1,1,0-2.579h4.3a1.289,1.289,0,1,1,0,2.579ZM44.73,118.767a2.495,2.495,0,1,0-1.088-1.088A2.206,2.206,0,0,0,44.73,118.767Zm-3.037,4.4v.585a.6.6,0,0,0,.572.616h7.213a.6.6,0,0,0,.572-.616v-.585a1.958,1.958,0,0,0-1.881-2.027h-4.6A1.958,1.958,0,0,0,41.693,123.162Z" transform="translate(-32 -106.314)"/><path class="b" d="M70.753,106.241H58.719A1.719,1.719,0,0,0,57,107.96v12.033a.861.861,0,0,0,.863.861.847.847,0,0,0,.512-.174l1.6-1.2a1.716,1.716,0,0,1,1.031-.344h9.741a1.719,1.719,0,0,0,1.719-1.719V107.96A1.719,1.719,0,0,0,70.753,106.241Zm-2.911,6.75-3.516,2.153a.859.859,0,0,1-1.308-.732V110.1a.86.86,0,0,1,1.308-.733l3.516,2.154A.86.86,0,0,1,67.841,112.991Z" transform="translate(-35.512 -106.241)"/></g></g></g></svg>
						
						</h4>
                        <p class="adv-p">Online Test simulation for self-assessment</p>
            </div>
			</div>
			
			<div class="col-lg-6 mt-lg-0 mt-4">
			<div class="certification_box">
                        <h4 class="adv-h">
						<!--<img src="assets/img_2/course_completion_certificate.svg">-->
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3b3a39;}</style></defs><g transform="translate(-726 -1200)"><g transform="translate(-241 -16)"><rect class="a" width="44" height="44" transform="translate(967 1216)"/></g><g transform="translate(627.128 1033.846)"><g transform="translate(106.872 169.154)"><path class="b" d="M119.162,203.582a.445.445,0,0,0-.63,0c-.292.29-.71.707-.909.907a.437.437,0,0,0-.125.277l-.223,2.9a.447.447,0,0,0,.5.479l2.783-.32a.447.447,0,0,0,.265-.128l.909-.909a.446.446,0,0,0,0-.633Zm12.011-6.876-2.566-2.567a.448.448,0,0,0-.633,0l-7.191,7.19a.449.449,0,0,0,0,.634l2.567,2.566a.448.448,0,0,0,.633,0l7.19-7.19A.446.446,0,0,0,131.173,196.706Zm-1.93-18.282a1.79,1.79,0,0,0-1.79-1.79h-.972a.448.448,0,0,0-.447.447v2.685a.447.447,0,0,1-.447.447H110.443a.447.447,0,0,1-.447-.447v-2.685a.448.448,0,0,0-.447-.447h-.887a1.79,1.79,0,0,0-1.79,1.79V201.69a1.789,1.789,0,0,0,1.79,1.79h6.956a2.651,2.651,0,0,1,.419-.57c.324-.326,1.229-1.226,1.229-1.226l11.978-11.978ZM118.952,191.29h-6.264a1.119,1.119,0,1,1,0-2.237h6.264a1.119,1.119,0,0,1,0,2.237Zm4.474-4.474H112.688a1.119,1.119,0,0,1,0-2.237h10.738a1.119,1.119,0,1,1,0,2.237Z" transform="translate(-106.872 -169.941)"/><path class="b" d="M122.061,172.918a1.638,1.638,0,0,1-1.136-1.541,2.191,2.191,0,0,0-2.191-2.223h-.093a2.14,2.14,0,0,0-2.191,2.126,1.661,1.661,0,0,1-1.13,1.636c-1.423.48-2.456.92-2.456,2.5v1.342a.448.448,0,0,0,.447.447h10.746a.448.448,0,0,0,.447-.447v-1.342C124.5,173.838,123.478,173.4,122.061,172.918Zm13.279,19.465-2.566-2.566a.448.448,0,0,0-.633,0l-1.349,1.349a.448.448,0,0,0,0,.633l2.566,2.567a.448.448,0,0,0,.633,0l1.349-1.349A.447.447,0,0,0,135.34,192.382Z" transform="translate(-107.502 -169.154)"/></g></g></g></svg>
						</h4>
                        <p class="adv-p">Practice Paper mapped with CISM Exam Prep</p>
            </div>
			</div>
			</div>
			<!---------------->
            
          </div>
        </div>
    </div>
</section>



<section id="coursess">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInLeft">
        <h2 class="package-heading">CISM Course Content / Exam(s)</h2>
      </div>
    </div>

    <div class="row">

      <div class="col-md-12">
      <!-- Tabs navs -->


    <section class="accordion-tabs js-tabs" data-tabs-allowed="true" data-breakpoint="640" data-start-collapsed="true">
      <ul role="tablist" class="tabs-tab-list">
          <li role="presentation"><a id="tab1" href="#section1" role="tab" aria-controls="section1" aria-selected="true" class="tabs-trigger js-tabs-trigger">  Why CISM?</a></li>
          <li role="presentation"><a id="tab3" href="#section3" role="tab" aria-controls="section3" class="tabs-trigger js-tabs-trigger">Course Objectives</a></li>
		  <li role="presentation"><a id="tab4" href="#section4" role="tab" aria-controls="section4" class="tabs-trigger js-tabs-trigger">Who Should Attend</a></li>
          <li role="presentation"><a id="tab5" href="#section5" role="tab" aria-controls="section5" class="tabs-trigger js-tabs-trigger"> Pre-Requisite</a></li>
		  <li role="presentation"><a id="tab6" href="#section6" role="tab" aria-controls="section6" class="tabs-trigger js-tabs-trigger">Exam Information</a></li>
      </ul>
      <section id="section1" role="tabpanel" aria-labelledby="tab1" class="tabs-panel js-tabs-panel" tabindex="0">
        <div class="accordion-trigger js-accordion-trigger" aria-controls="section1" aria-expanded="true" tabindex="0">  Why CISM?<div class="accordion-trigger-icon"><span class="label--open">Open</span><span class="label--close">Close</span>
          <svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect class="vert" height="18" width="2" fill="currentColor" y="1" x="9"></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg>
        </div></div>
        <div class="content" aria-hidden="false">
         <div  class="tab_content"> 
            <img src="assets/img_2/isaca.png" align="right" class="d-inline-block ml-3">
                      <p>
					  The uniquely management-focused CISM certification promotes international security practices and recognizes the individual who manages designs, and oversees and assesses an enterprise’s information security.The demand for skilled information security management professionals is on the rise, and the CISM certification is the globally accepted standard of achievement in this area.</p>
  <p>
CISMs understand the business. They know how to manage and adapt technology to their enterprise and industry.
					  </p>
					  </div>
        </div>
      </section>
      
      <section id="section3" role="tabpanel" aria-labelledby="tab3" class="tabs-panel js-tabs-panel">
        <div class="accordion-trigger js-accordion-trigger" aria-controls="section3" aria-expanded="false" tabindex="0">Course Objectives <div class="accordion-trigger-icon"><span class="label--open">Open</span><span class="label--close">Close</span><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect class="vert" height="18" width="2" fill="currentColor" y="1" x="9"></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg></div></div>
        <div class="content" aria-hidden="true">
          <div  class="tab_content"> 
<ul class="ulclass">

<li>Information Security Governance</li>
<li>Information Risk Management and Compliance</li>
<li>Information Security Program Development and Management</li>
<li>Information Security Incident Management</li>


</ul></div>
        </div>
      </section>
	  <section id="section4" role="tabpanel" aria-labelledby="tab4" class="tabs-panel js-tabs-panel">
        <div class="accordion-trigger js-accordion-trigger" aria-controls="section4" aria-expanded="false" tabindex="0">Who Should Attend <div class="accordion-trigger-icon"><span class="label--open">Open</span><span class="label--close">Close</span><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect class="vert" height="18" width="2" fill="currentColor" y="1" x="9"></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg></div></div>
        <div class="content" aria-hidden="true">
         <div class="tab_content">
<ul class="ulclass">

<li>Security consultants and managers</li>
<li>IT directors and managers</li>
<li>Security auditors and architects</li>
<li>Security systems engineers</li>
<li>Chief Information Security Officers (CISOs)</li>
<li>Information security managers</li>
<li>IS/IT consultants</li>
<li>Chief Compliance/Privacy/Risk Officers</li>

</ul></div>
        </div>
      </section>
	  <section id="section5" role="tabpanel" aria-labelledby="tab5" class="tabs-panel js-tabs-panel">
        <div class="accordion-trigger js-accordion-trigger" aria-controls="section5" aria-expanded="false" tabindex="0">Pre-Requisite <div class="accordion-trigger-icon"><span class="label--open">Open</span><span class="label--close">Close</span><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect class="vert" height="18" width="2" fill="currentColor" y="1" x="9"></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg></div></div>
        <div class="content" aria-hidden="true">
         <div class="tab_content">
		 <p>Submit verified evidence of a minimum of five years of information security work experience, with a minimum of three years of information security management work experience in three or more of the job practice analysis areas. The work experience must be gained within the 10-year period preceding the application date for certification or within 5 years from the date of originally passing the exam.</p>
<p>The following security-related certifications and information systems management experience can be used to satisfy the indicated amount of information security work experience.</p>  
	
	<p><strong>Two Years:</strong></p>
	
		 <ul class="ulclass">

<li>Certified Information Systems Auditor (CISA) in good standing</li>
<li>Certified Information Systems Security Professional (CISSP) in good standing</li>
<li>Post-graduate degree in information security or a related field (e.g., business administration, information systems, information assurance)</li>
</ul>

	<p><strong>One Year:</strong></p>
			 <ul class="ulclass">
<li>One full year of information systems management experience</li>
<li>One full year of general security management experience</li>
<li>Skill-based security certifications (e.g., SANS Global Information Assurance Certification (GIAC), Microsoft Certified Systems Engineer (MCSE), CompTIA Security +, Disaster Recovery Institute Certified Business</li>
<li>Continuity Professional (CBCP), ESL IT Security Manager)</li>
</ul>
<p>Completion of an information security management program at an institution aligned with the Model Curriculum</p>
		 
		 </div>
        </div>
      </section>
	  <section id="section6" role="tabpanel" aria-labelledby="tab6" class="tabs-panel js-tabs-panel">
        <div class="accordion-trigger js-accordion-trigger" aria-controls="section6" aria-expanded="false" tabindex="0">Exam Information <div class="accordion-trigger-icon"><span class="label--open">Open</span><span class="label--close">Close</span><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect class="vert" height="18" width="2" fill="currentColor" y="1" x="9"></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg></div></div>
        <div class="content" aria-hidden="true">
         <div class="tab_content"> 
			<ul class="ulclass"><li><strong>Duration</strong> : 4 Hours</li><li><strong>Number of questions</strong> : 150</li><li><strong>Question format</strong> : Multiple Choice</li><li><strong>Passing marks</strong> : 450 out of 800</li><li><strong>Exam language </strong>: English, Japanese, Korean, Spanish</li></ul></div>
        </div>
      </section>
    </section>



<!-- Tabs content -->
	  
	  

	  
      </div>
      <!-- /.col-md-8 -->
    </div>


     
  </div>
</section>

<section id="benefit">
  <div  class="container" id="benefits">
        <div class="row">
            <div class="col-12">
               <h2 class="package-heading">CISM Course Benefits</h2>
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
      <a class="nav-link active" id="Audit" data-toggle="tab" href="#audit" role="tab" aria-controls="audit" aria-selected="true">Systems Analyst </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="Cybersecurity" data-toggle="tab" href="#cybersecurity" role="tab" aria-controls="cybersecurity" aria-selected="false">Information security Manager</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="Internal" data-toggle="tab" href="#internal" role="tab" aria-controls="internal" aria-selected="false">Security Product Manager</a>
    </li>
  </ul>
      </div>
      <!-- /.col-md-4 --> 
          <div class="col-md-8">
        <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="audit" role="tabpanel" aria-labelledby="Audit">
  <div class="row text-center"> 
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img_2/cism-systems-analyst.png" alt="" class="img-fluid mb-3 anal"></div>
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img_2/cism-systems-analyst-c.png" alt="" class="anal img-fluid "></div>
   </div>
    </div>
    <div class="tab-pane fade" id="cybersecurity" role="tabpanel" aria-labelledby="Cybersecurity">
    <div class="row text-center"> 
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img_2/cism-security-manager.png" alt="" class="anal img-fluid mb-3"></div>
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0 "><img src="assets/img_2/cism-security-manager-c.png" alt="" class="anal img-fluid"></div>
   </div>
      
    </div>
    <div class="tab-pane fade" id="internal" role="tabpanel" aria-labelledby="Internal">
    <div class="row text-center"> 
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img_2/cism-product-manager.png" alt="" class="anal img-fluid mb-3"></div>
    <div class="col-md-6 mt-4 mt-md-0 pb-3 pb-md-0"><img src="assets/img_2/cism-product-manager-c.png" alt="" class="anal img-fluid"></div>
   </div>
       
    
  </div>
      </div>
      <!-- /.col-md-8 -->
    </div></div>
  
  

      </div>
    </div>
  </div>
  </div>
  
  
    
</section>




<section id="table_section">
 
    <div  class="container" id="benefits">
        <div class="row">
            <div class="col-12">
               <h2 class="package-heading">CISM TRAINING CALENDAR</h2>
            </div>
        </div>

    <div class="row">
      <div class="col-12">
               
<?php
$url = "https://www.infosectrain.com/api/30770/href_toscroll/free_demo";
 

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

<!-----------
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
	list-style-type: none; 
}
.course_benefits ul li:before {
    content: '';
    position: absolute;
    left: 13px;
    color: #ff1046;
    background: url(https://www.infosectrain.com/wp-content/themes/Divi/assets/images/right-icon2.png);
    width: 24px;
    height: 24px;
    display: inline-block;
    
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
.bg5{ background:#FFFFFF;}

 </style>
 
<section class="rows course_benefits bg5" id="view-offers">
<div class="container p50">
  <div class="row ">
      <div class="col-md-12" id="">
      <h2 class="package-heading">Diwali offer <font class="what_h_box">(Buy 1 Get 1 Free)</font> </h2>
        
      </div>
    </div>
    <div class="row customrow">
		<div class="col-md-12 zeropadding">
 		
		<div class="hvrbox-1 offerbox">
<div class="hvrbox-layer_top">
<div class="hvrbox-text">
<h4 class="font-24 font-color-white"><b>Diwali offer (Buy 1 Get 1  Free)</b></h4>
<p class="font-18 offer-para">Register for CISM Training and Get following SECURITY+ instructor-led training <strong>100% free</strong>. Don't miss this Diwali offer Enroll Now (*t&amp;c applied)
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
</section>

-------->

<section id="coursess">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInLeft">
        <h2 class="package-heading">Benefits of Being CISM-Certified</h2>
      </div>
    </div>

    <div class="row">
      
           <div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box2">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}</style></defs><g transform="translate(-471 -2881)"><rect class="a" width="43" height="43" transform="translate(471 2881)"/><g transform="translate(-134.893 2168.2)"><path class="b" d="M635.15,735.1c.113,0,.226-.027.341-.027a1.832,1.832,0,0,0,2.056-2.058,3.452,3.452,0,0,1,1.775-3.065,1.847,1.847,0,0,0,.751-2.814,3.442,3.442,0,0,1,0-3.534,1.85,1.85,0,0,0-.751-2.806,3.4,3.4,0,0,1-1.775-3.068,1.834,1.834,0,0,0-2.056-2.039,3.469,3.469,0,0,1-3.072-1.778,1.819,1.819,0,0,0-2.792-.747,3.49,3.49,0,0,1-3.556,0,1.832,1.832,0,0,0-2.8.747,3.42,3.42,0,0,1-3.053,1.778,1.844,1.844,0,0,0-2.059,2.039,3.408,3.408,0,0,1-1.779,3.068,1.835,1.835,0,0,0-.744,2.806,3.442,3.442,0,0,1,0,3.534,1.832,1.832,0,0,0,.744,2.814,3.46,3.46,0,0,1,1.779,3.065,1.861,1.861,0,0,0,1.012,1.875l-5.275,18.327,6.234-4.777,2.743,7.355,4.273-14.822,4.246,14.822,2.752-7.355,6.228,4.777Zm-7.3-14.562.953,3.348h3.142l-2.537,2.058.975,3.351-2.532-2.081-2.545,2.081.973-3.351-2.542-2.058h3.139Zm0,12.239a7.4,7.4,0,1,1,7.413-7.4,7.412,7.412,0,0,1-7.413,7.4Z" transform="translate(0 0)"/></g></g></svg>
							</h4>
							<p class="adv-p"><strong></strong></p>
							<p class="adv-p">Instantly authenticate your credentials</p>
				</div>
			</div>
			
			
			<div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box2">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3d3d3d;}</style></defs><g transform="translate(-717 -3329)"><g transform="translate(0 448)"><rect class="a" width="43" height="43" transform="translate(717 2881)"/></g><g transform="translate(346.194 3229.944)"><g transform="translate(371.806 107.056)"><path class="b" d="M412.291,115.118l-7.463-7.921a.446.446,0,0,0-.632-.019l-3.136,2.954a.446.446,0,0,0-.019.632l7.462,7.922a.448.448,0,0,0,.633.019l3.136-2.954A.447.447,0,0,0,412.291,115.118Zm-2.726.9a.975.975,0,1,1,.041-1.379A.975.975,0,0,1,409.565,116.018Zm-30.073-7.738a.447.447,0,0,0-.627.079l-6.965,8.964a.448.448,0,0,0,.079.628l3.416,2.654a.447.447,0,0,0,.628-.079l6.965-8.964a.448.448,0,0,0-.079-.628Zm-3.277,9.34a.979.979,0,1,1-.173-1.374A.978.978,0,0,1,376.215,117.62Z" transform="translate(-371.806 -107.056)"/><path class="b" d="M402.909,126.84l-7.654-5.975-1.4,1.277a7.6,7.6,0,0,1-5.087,2.246,5.574,5.574,0,0,1-.941-.08,5.242,5.242,0,0,1-3.654-2.51,2.632,2.632,0,0,1,.49-3.385l5.5-5a3.569,3.569,0,0,0-5,.648L379.794,121a2.683,2.683,0,0,0-.548,1.979l.346,2.816a2.681,2.681,0,0,0,1.011,1.788l9.409,7.335a1.446,1.446,0,0,0,1.953-.163l.423-.463a1.444,1.444,0,0,0-.137-2.082l1.579,1.324a1.444,1.444,0,0,0,1.93-.067l.487-.469a1.444,1.444,0,0,0-.078-2.149l1.168.973a1.442,1.442,0,0,0,1.935-.078l.429-.42a1.443,1.443,0,0,0-.064-2.121l.771.667a1.444,1.444,0,0,0,2.053-.167l.668-.8A1.443,1.443,0,0,0,402.909,126.84Zm3.741-7.154-6.463-6.593a1.8,1.8,0,0,0-1.045-.522l-3.308-.433a1.792,1.792,0,0,0-1.433.447l-.778.709-7.445,6.77a.416.416,0,0,0-.1.552l.047.077a2.991,2.991,0,0,0,2.09,1.41,5.1,5.1,0,0,0,4.145-1.619l2.783-2.547,8.758,6.838,2.729-2.56A1.79,1.79,0,0,0,406.65,119.687Z" transform="translate(-372.588 -107.59)"/></g></g></g></svg>
							</h4>
							<p class="adv-p"><strong></strong></p>
							<p class="adv-p">Instill confidence among employers, colleagues and clients</p>
				</div>
			</div>
			
		    
			<div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box2">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}</style></defs><g transform="translate(-471 -3198)"><rect class="a" width="43" height="43" transform="translate(471 3198)"/><g transform="translate(-133.375 2805.57)"><path class="b" d="M640.023,427.6a13.365,13.365,0,0,0-2.289-11.605c-2.4-3.34-2.76-1.14-6.948-9.087H621.7c-4.175,7.947-4.527,5.747-6.95,9.087A13.324,13.324,0,0,0,612.47,427.6a3.386,3.386,0,0,0-2.111,3.152,3.347,3.347,0,0,0,.212,1.118h31.359a3.343,3.343,0,0,0,.208-1.118,3.407,3.407,0,0,0-2.116-3.152Zm-2.186-.643-.564,1.966a19.328,19.328,0,0,0-4.078-10.6,15.991,15.991,0,0,1-3.771-9.155c2.281,4.141,3.453,5.3,4.832,6.425a7.776,7.776,0,0,1,1.638,1.718,11.014,11.014,0,0,1,1.944,9.646Zm-17.53-28a2.266,2.266,0,1,1,3.93-2.26l.049.064a2.2,2.2,0,0,1,3.928,0l.037-.064a2.268,2.268,0,1,1,3.932,2.26l-1.4,3.985H621.7Zm11.619,6.81a.574.574,0,0,1-.579.576h-10.21a.571.571,0,0,1,0-1.142h10.21a.571.571,0,0,1,.579.566Zm0-1.706a.573.573,0,0,1-.579.576h-10.21a.57.57,0,0,1,0-1.14h10.21a.57.57,0,0,1,.579.564Zm-6.724,19.3v-3.246a4.1,4.1,0,0,1-2.217-1.317,3.314,3.314,0,0,1-.708-2.132,3.023,3.023,0,0,1,.8-2.136,3.111,3.111,0,0,1,2.121-1v-.774h1.124v.774a3.269,3.269,0,0,1,1.971.852,3.2,3.2,0,0,1,.949,1.843l-1.975.256a1.6,1.6,0,0,0-.945-1.236v3.039a4.98,4.98,0,0,1,2.553,1.3,3.037,3.037,0,0,1,.689,2.058A3.381,3.381,0,0,1,628.7,424a3.774,3.774,0,0,1-2.372,1.205v1.448H625.2v-1.427a3.635,3.635,0,0,1-2.168-1,4.037,4.037,0,0,1-1.077-2.344l2.025-.24a2.543,2.543,0,0,0,.465,1.078,2.175,2.175,0,0,0,.755.639Zm0-8.145a1.514,1.514,0,0,0-.725.535,1.424,1.424,0,0,0-.259.831,1.323,1.323,0,0,0,.242.757,1.6,1.6,0,0,0,.742.56Zm1.124,8.273a1.682,1.682,0,0,0,.96-.565,1.477,1.477,0,0,0,.374-1.008,1.348,1.348,0,0,0-.321-.891,1.829,1.829,0,0,0-1.013-.575Z" transform="translate(0)"/></g></g></svg>
							</h4>
							<p class="adv-p"><strong></strong></p>
							<p class="adv-p">Increase your marketability and income potential</p>
				</div>
			</div>
			
			
			
			<div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box2">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}</style></defs><g transform="translate(-963 -2881)"><rect class="a" width="43" height="43" transform="translate(963 2881)"/><g transform="translate(676.72 2298.766)"><path class="b" d="M314.309,608.927v-4.506c0-10.012-4.242-16.067-6.009-18.16a1.018,1.018,0,0,0-.778-.358.967.967,0,0,0-.762.339c-1.81,2.1-6.126,8.151-6.126,18.178v4.506l-.84.549a5.8,5.8,0,0,0-2.556,4.817v5.367a.862.862,0,0,0,1.347.715l2.692-1.794a4.651,4.651,0,0,1,2.553-.775h.3v2.686a1.1,1.1,0,0,0,1.1,1.11h4.457a1.1,1.1,0,0,0,1.105-1.11v-2.686h.314a4.576,4.576,0,0,1,2.556.775l2.692,1.794a.844.844,0,0,0,.881.044.86.86,0,0,0,.466-.76v-5.367a5.852,5.852,0,0,0-2.572-4.817Zm-6.847-11a2.579,2.579,0,1,1-2.569,2.579,2.579,2.579,0,0,1,2.569-2.579Zm0-6.631a2.579,2.579,0,1,1-2.569,2.572,2.574,2.574,0,0,1,2.569-2.572Z" transform="translate(0 0)"/></g></g></svg>
							</h4>
							<p class="adv-p"><strong></strong></p>
							<p class="adv-p">Prove your abilityto stay ahead ofever-changing risks</p>
				</div>
			</div>
			
			<div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box2">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}</style></defs><g transform="translate(-717 -3198)"><rect class="a" width="43" height="43" transform="translate(717 3198)"/><g transform="translate(367.075 2931.345)"><path class="b" d="M381.024,284.718c0,.063-.016.108-.016.138a.2.2,0,0,0-.031.125v.125a7.723,7.723,0,0,1-.2,1.666,13.277,13.277,0,0,1-1.112,3.273c-.538,1.125-1.125,2.325-1.773,3.608a11.354,11.354,0,0,0-.882,2.287c-.172.679-.291,1.26-.386,1.77a9.525,9.525,0,0,1-.32,1.19.78.78,0,0,1-.622.524H367.75a.782.782,0,0,1-.629-.524,7.335,7.335,0,0,1-.314-1.19c-.091-.51-.232-1.091-.4-1.77a11.675,11.675,0,0,0-.879-2.287c-.632-1.283-1.22-2.483-1.776-3.608a12.536,12.536,0,0,1-1.1-3.273,5.126,5.126,0,0,1-.125-.832l-.091-.834v-.388a8.3,8.3,0,0,1,.692-3.5,7.322,7.322,0,0,1,1.916-2.544,8.119,8.119,0,0,1,2.93-1.56,12.2,12.2,0,0,1,3.689-.523h.074a12.268,12.268,0,0,1,3.706.523,8.036,8.036,0,0,1,2.915,1.56,7.591,7.591,0,0,1,1.95,2.544,8.112,8.112,0,0,1,.709,3.5Zm-5.213,20.09a.571.571,0,0,1,.428.189.582.582,0,0,1,.185.43v1.418a.64.64,0,0,1-.185.483.583.583,0,0,1-.428.18h-8.152a.585.585,0,0,1-.665-.663v-1.418a.587.587,0,0,1,.189-.43.641.641,0,0,1,.476-.189Zm0-4.057a.59.59,0,0,1,.428.182.669.669,0,0,1,.185.48v1.422a.609.609,0,0,1-.185.449.582.582,0,0,1-.428.185h-8.152a.655.655,0,0,1-.476-.185.613.613,0,0,1-.189-.449v-1.422a.588.588,0,0,1,.665-.662Zm2.591-26.174a1.279,1.279,0,0,0-.266.99,1.08,1.08,0,0,0,.51.771,1.017,1.017,0,0,0,.9.092,1.545,1.545,0,0,0,.818-.6l1.913-2.964a1.364,1.364,0,0,0,.233-.956,1.064,1.064,0,0,0-.482-.788,1.081,1.081,0,0,0-.893-.109,1.462,1.462,0,0,0-.817.605l-1.913,2.959Zm-13.369,0a1.279,1.279,0,0,1,.249.99,1.044,1.044,0,0,1-.493.771.974.974,0,0,1-.881.092,1.342,1.342,0,0,1-.8-.6l-1.912-2.964a1.231,1.231,0,0,1-.251-.956,1.088,1.088,0,0,1,.5-.788,1.032,1.032,0,0,1,.881-.109,1.279,1.279,0,0,1,.787.605l1.926,2.959Zm7.886-1.078a1.43,1.43,0,0,1-.318.959,1.119,1.119,0,0,1-.857.366,1.01,1.01,0,0,1-.78-.366,1.41,1.41,0,0,1-.342-.959V270a1.447,1.447,0,0,1,.342-.973,1.014,1.014,0,0,1,.78-.369,1.121,1.121,0,0,1,.857.369,1.469,1.469,0,0,1,.318.973v3.5Zm-1.2,10.957c.883,0,1.587,3.346,1.587,7.483s-.7,7.484-1.587,7.484-1.592-3.351-1.592-7.484.713-7.483,1.592-7.483Z"/></g></g></svg>
							</h4>
							<p class="adv-p"><strong></strong></p>
							<p class="adv-p">Be recognized globally as one of the best in your field</p>
				</div>
			</div>
			
			
			
			<div class="col-lg-4 mt-lg-0 mt-4">
				<div class="certification_box2">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}</style></defs><g transform="translate(-225 -2881)"><rect class="a" width="43" height="43" transform="translate(225 2881)"/><g transform="translate(228.65 2887.702)"><path class="b" d="M495.135,651.5h8.634a3.908,3.908,0,0,1,2.781,1.157,3.852,3.852,0,0,1,1.162,2.788v.2h4.7a4.7,4.7,0,0,1,4.694,4.7v16.28a4.692,4.692,0,0,1-4.694,4.675H486.44a4.7,4.7,0,0,1-4.69-4.675v-16.28a4.7,4.7,0,0,1,4.69-4.7h4.7V655.5a3.994,3.994,0,0,1,1.171-2.823h0a3.986,3.986,0,0,1,2.828-1.177Zm8.634,2.5h-8.634a1.463,1.463,0,0,0-1.052.451h0a1.459,1.459,0,0,0-.454,1.047v.146h11.588v-.2a1.449,1.449,0,0,0-.437-1.017,1.4,1.4,0,0,0-1.012-.425Z" transform="translate(-481.75 -651.502)"/></g></g></svg>
							</h4>
							<p class="adv-p"><strong></strong></p>
							<p class="adv-p">Be fully trusted for yourinformation security management expertise</p>
				</div>
			</div>
			
			
			
			
			
			
			
			
			
			
			
	  
      
      <!-- /.col-md-8 -->
    </div>


     
  </div>
</section>



<section id="fastfacts_section">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInLeft">
        <h2 class="package-heading">Old vs. New CISM Domains</h2>
      </div>
    </div>

    <div class="row">
	  <?php /*?><div class="col-md-6">
      
	 The job practice domains and task and knowledge statements are as follows:
     <ul class="ulclass">
<li>Information System Auditing Process  (21%)</li>
  <li>Governance and Management of IT (17%)</li>
  <li>Information Systems, Acquisition,  Development and Implementation (12%)</li>
  <li>Information Systems Operations and  Business Resilience (23%)</li>
  <li>Protection of Information Assets (27%)</li>
   </ul>
	  
	  
      </div>
	<div class="col-md-6">
      
	  <img src="assets/img_2/pie-chart.png" width="100%" align="middle" style="text-align:center;">

	  
	  
      </div><?php */?>
    <div class="col-md-12">
      <center>
	  <img src="https://www.infosectrain.com/wp-content/uploads/2022/04/CISM-scaled.jpg" width="100%" align="middle" class="content-desktop" style="text-align:center;">
	  
	  </center>
	  
      </div>
      <!-- /.col-md-8 -->
    </div>


     
  </div>
</section>


<section id="advisors2">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInLeft">
             <h2 class="package-heading">Our Course Advisors</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="advisor_box_con">
                    <div class="advisor_box">
					<!--<span class="box_coma">"</span>-->
					<div class="box_coma">"</div>
					<p class="course_h">
					 Certified security specialist having several years of experience in information security across all domains including application security, vulnerability assessment, ethical hacking, penetration testing, extensive security solutions, governance, risk & compliance and many more.
					</p>
                        <h4 class="adv-h">Prabh Nair</h4>
                        <p class="adv-p text-capitalize mb-1 font-weight-bold">17 + years of experience</p>
                        <p class="adv-p">CISSP | CCSP | CSSLP | CRISC | CISM | CISA | CGEIT CISSP | CCSP | CSSLP | CRISC | CISM |  CISA | CGEIT</p>
                    </div>
                    <div class="advisor_box">
					<div class="box_coma">"</div>
					<p class="course_h">
					An IT leader with almost 2 decades of experience in multiple industries, I have conducted over 500 training sessions to over 10000+ participants. Some of the courses that I have taught over the years: CISSP, CCSP, CISM, CISA, CGEIT, CCSK, CompTIA Security+, CySA+...</p>
                    <h4 class="adv-h" style="">S. Rai</h4>
                    <p class="adv-p text-capitalize mb-1 font-weight-bold">20 + years of experience</p>
                    <p class="adv-p">CISA | CISSP | CCSP | CASP | MCA | CGEIT | CISM | PMP</p>
                    </div>
                    <div class="advisor_box">
					<div class="box_coma">"</div>
					<p class="course_h">
					Santosh has Overall 14+ years of experience in Cyber Security Consulting. He has worked in 
the IT Industry with focus on Cyber Security, Information Security, Data Privacy, Auditing, and consulting. In the last 4 years, he has been actively involved in mentoring 
and training students for CISM and other ISACA courses. <br /></p>
                    <h4 class="adv-h" style="">Santosh</h4>
                    <p class="adv-p text-capitalize mb-1 font-weight-bold">14 + years of experience</p>
                    <p class="adv-p">CISM | CISA |  ISO | ITIL | Six Sigma</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








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
							<p class="adv-p"><strong>Learn from <br />Industry Experts</strong></p>
				</div>
			</div>
			
			
			<div class="col-lg-3 mt-lg-0 mt-4">
				<div class="certification_box3">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#fff;stroke:#707070;opacity:0;}.b{fill:#3d3d3d;}.c{stroke:none;}.d{fill:none;}</style></defs><g transform="translate(-538 -4826)"><g class="a" transform="translate(538 4826)"><rect class="c" width="44" height="44"/><rect class="d" x="0.5" y="0.5" width="43" height="43"/></g><g transform="translate(-128 -90)"><g transform="translate(670 4920)"><path class="b" d="M886.153,216.105a17.57,17.57,0,0,0-10.74-10.01,17.585,17.585,0,0,0-11.041,0,17.379,17.379,0,0,0-4.23,2.064,20.6,20.6,0,0,0-4.586,4.445,19.4,19.4,0,0,0-1.957,3.5,17.822,17.822,0,0,0,0,13.373,17.589,17.589,0,0,0,32.553,0,17.361,17.361,0,0,0,0-13.373Zm-15.5,1.692a.677.677,0,0,0-.692.677v4.979h-4.395a.684.684,0,1,0,0,1.367h5.087a.679.679,0,0,0,.677-.692v-5.654a.677.677,0,0,0-.677-.677Zm-.763-7.041a11.95,11.95,0,1,1-11.95,11.949,11.96,11.96,0,0,1,11.95-11.949Zm8.963,11.949a.718.718,0,0,1,.728-.727h1.312a10.856,10.856,0,0,0-1.1-4.13l-1.14.642a.719.719,0,0,1-.368.108.734.734,0,0,1-.643-.376.754.754,0,0,1,.268-1l1.151-.659a11.137,11.137,0,0,0-3.021-3.04l-.674,1.155a.716.716,0,0,1-.623.373.7.7,0,0,1-.37-.106.715.715,0,0,1-.269-.993l.661-1.14a11.175,11.175,0,0,0-4.127-1.121v1.315a.755.755,0,0,1-.747.749.732.732,0,0,1-.728-.749V211.7c-1.887.125-4.643.212-3.471,2.238a.756.756,0,0,1-.286,1.015.721.721,0,0,1-.992-.268l-.66-1.155a11,11,0,0,0-3.026,3.04l1.137.659a.714.714,0,0,1,.273,1,.7.7,0,0,1-.641.376.622.622,0,0,1-.355-.108L860,217.848a10.792,10.792,0,0,0-1.1,4.13h1.3a.728.728,0,1,1,0,1.455h-1.3a10.924,10.924,0,0,0,1.1,4.144l1.139-.655a.726.726,0,1,1,.723,1.259l-1.137.677c1.054,1.566,2.51,3.912,3.686,1.867a.724.724,0,0,1,.992-.266.756.756,0,0,1,.286,1.01l-.656,1.141a11.408,11.408,0,0,0,4.127,1.1V232.4a.731.731,0,0,1,.728-.746.754.754,0,0,1,.747.746v1.316a11.436,11.436,0,0,0,4.127-1.1l-.661-1.141a.73.73,0,0,1,.269-1.01.722.722,0,0,1,.993.266l.674,1.157a11.042,11.042,0,0,0,3.021-3.023l-1.151-.677a.75.75,0,0,1-.268-1,.729.729,0,0,1,1.011-.262l1.14.655a10.99,10.99,0,0,0,1.1-4.144h-1.312a.72.72,0,0,1-.728-.728Zm5.136,6.827h0a15.638,15.638,0,0,1-28.218,0,15.632,15.632,0,1,1,28.218-13.461,15.559,15.559,0,0,1,0,13.461Z" transform="translate(-852.298 -205.206)"/></g></g></g></svg>
							</h4>
							<p class="adv-p"><strong>24*7 <br />Support</strong></p>
				</div>
			</div>
			
			
			<div class="col-lg-3 mt-lg-0 mt-4">
				<div class="certification_box3">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#fff;stroke:#707070;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}.c{stroke:none;}.d{fill:none;}</style></defs><g transform="translate(-784 -4826)"><g class="a" transform="translate(784 4826)"><rect class="c" width="44" height="44"/><rect class="d" x="0.5" y="0.5" width="43" height="43"/></g><g transform="translate(179.346 4372.741)"><path class="b" d="M619.144,478.34v.582c2.268,1.316,3.427.66,3.427,3.61h-9.3c0-3.056,1.16-2.293,3.408-3.61v-.51a2.213,2.213,0,0,1-.62-1.328h0c-.054,0-.123-.1-.123-.2a.08.08,0,0,1,.018-.059,1.132,1.132,0,0,1-.105-.263c-.05-.159-.194-.5-.072-.637a.137.137,0,0,1,.2.015c-.161-.867-.394-2.006.817-2.34,0-.749,2.8-.41,3.16.763a4.941,4.941,0,0,1-.056,1.562.108.108,0,0,1,.158-.058c.14.114-.013.552-.071.695a.791.791,0,0,1-.109.286v.036c0,.1-.051.2-.1.2a2.062,2.062,0,0,1-.624,1.256Zm8.076-4.773h9.765a.394.394,0,0,1,.39.39v1.987a.4.4,0,0,1-.39.4H627.22a.4.4,0,0,1-.39-.4v-1.987a.394.394,0,0,1,.39-.39Zm0,4.191h9.765a.4.4,0,0,1,.39.388v2.008a.4.4,0,0,1-.39.388H627.22a.4.4,0,0,1-.39-.388v-2.008a.4.4,0,0,1,.39-.388Zm13.243-11.345h-7.9v-.069a2.07,2.07,0,0,0-2.083-2.082h-1.468a2.076,2.076,0,0,0-2.076-2h-1.454a2.087,2.087,0,0,0-2.078,2h-1.482a2.078,2.078,0,0,0-2.07,2.082v.069h-7.883a3.315,3.315,0,0,0-3.318,3.32v15.975a3.315,3.315,0,0,0,3.318,3.318h28.491a3.33,3.33,0,0,0,3.321-3.318V469.733a3.33,3.33,0,0,0-3.321-3.32Zm-12.975-.853Zm13.794,20.147a.837.837,0,0,1-.819.836H611.972a.84.84,0,0,1-.833-.836V469.733a.839.839,0,0,1,.833-.835h7.935a2.071,2.071,0,0,0,2.076,2.077h8.47a2.076,2.076,0,0,0,2.076-2.077h7.933a.836.836,0,0,1,.819.835v15.975Z" transform="translate(0)"/></g></g></svg>
							</h4>
							<p class="adv-p"><strong>Certification <br />Focused Programs</strong></p>
				</div>
			</div>
			
			
			<div class="col-lg-3 mt-lg-0 mt-4">
				<div class="certification_box3">
							<h4 class="adv-h">
							<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#fff;stroke:#707070;opacity:0;}.b{fill:#3d3d3d;fill-rule:evenodd;}.c{stroke:none;}.d{fill:none;}</style></defs><g transform="translate(-1030 -4826)"><g class="a" transform="translate(1030 4826)"><rect class="c" width="44" height="44"/><rect class="d" x="0.5" y="0.5" width="43" height="43"/></g><g transform="translate(426.841 4689.243)"><path class="b" d="M616.91,147.545h1.927a.959.959,0,0,0,.961-.953v-3.866a.972.972,0,0,0-.961-.969H616.91a.964.964,0,0,0-.967.969v3.866a.951.951,0,0,0,.967.953Zm8.056,17.116a.435.435,0,0,0-.441.17.488.488,0,0,0-.017.485l1.91,3.274,2.291-3.384Zm4.2.844h0l-2.3,3.4,8.009,5.433,2.307-3.388Zm9.31,6.318h0l-2.3,3.383-.922-.622,2.291-3.388Zm.535,4.242h0l1.309-1.917a.9.9,0,0,0-.24-1.235l-1.257-.857-2.306,3.385,1.256.859a.875.875,0,0,0,.679.14.888.888,0,0,0,.559-.374Zm-21.335-21.9a2.9,2.9,0,1,1-2.9,2.9,2.9,2.9,0,0,1,2.9-2.9Zm8.351,0a2.9,2.9,0,1,1-2.9,2.9,2.909,2.909,0,0,1,2.9-2.9Zm8.367,0a2.9,2.9,0,1,1-2.917,2.9,2.893,2.893,0,0,1,2.917-2.9Zm-16.718,7.5a2.9,2.9,0,1,1-2.9,2.9,2.9,2.9,0,0,1,2.9-2.9Zm8.351,0a2.912,2.912,0,0,1,2.873,2.42h0l-.079.09-3.7-.543a1.479,1.479,0,0,0-1.436.635,1.45,1.45,0,0,0-.056,1.53l.571,1.031a2.906,2.906,0,0,1,1.827-5.164Zm8.367,0a2.9,2.9,0,0,1,0,5.8,2.456,2.456,0,0,1-.6-.062l-1.843-1.246a2.9,2.9,0,0,1,2.439-4.494Zm6.644-12.187v19.3a3.838,3.838,0,0,1-1.157,2.76l-1.343-.907h0l-.218-.153-.108-.079a1.929,1.929,0,0,0,.893-1.621V153.348c0-3.713-21.708-1.932-25.094-1.932a1.935,1.935,0,0,0-1.935,1.932v15.433a1.947,1.947,0,0,0,1.935,1.934h13.7l2.841,1.932H614.009a3.85,3.85,0,0,1-3.85-3.866v-19.3a3.838,3.838,0,0,1,3.85-3.852h.968v.967a1.924,1.924,0,0,0,1.933,1.918h1.927a1.927,1.927,0,0,0,1.927-1.918v-.967h9.647v.967a1.926,1.926,0,0,0,1.933,1.918h1.932a1.927,1.927,0,0,0,1.938-1.918v-.967h.953a3.854,3.854,0,0,1,3.87,3.852Zm-8.693-1.933h1.932a.961.961,0,0,0,.973-.953v-3.866a.975.975,0,0,0-.973-.969h-1.932a.973.973,0,0,0-.967.969v3.866a.959.959,0,0,0,.967.953Z"/></g></g></svg>
							</h4>
							<p class="adv-p"><strong>Flexible <br />Schedule</strong></p>
				</div>
			</div>
			
			
			
      
      <!-- /.col-md-8 -->
    </div>


     
  </div>
</section>



<section id="schedule">
  <div class="container">
    <div class="row">
          <div class="col-12 col-lg-6 mt-lg-0 mt-4">
           
              <h2 class="sche-h">Looking For A Flexible, Customize, Cost-Effective Learning Solution? We Are Just A Click Away</h2>
       
        <a href="#free_demo" class="btn href_toscroll" data-target="#request_demo">Schedule a Demo  <img src="assets/img/arrow6.png" alt=""></a>
           
          </div>
          <div class="col-12 col-lg-6 mt-lg-0 mt-4">
        

      </div>
    </div>
  </div>
</section>





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
                            <img src="https://www.infosectrain.com/wp-content/uploads/2018/12/Abdul-Ghafar-Rasoli-150x150.jpg" alt=""  class="p_image">
                            
                    </div>
					<p style="">  
    InfosecTrain instructor is a top and well experienced cyber security instructor. I really appreciate his passion, efforts, skills and specifically teaching methods that motivates individuals to study further and enhance their skills.   </p>
                        <h4 class="adv-ho"> Abdul Ghafar Rasoli  </h4>
                        <p class="adv-p"></p>
                    </div>
                 
                    </div>
					
					
					
                    <div class="item card">
					<div class="advisor_box">
					<div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2018/12/m.alwafi-150x150.jpg" alt="" class="p_image">
                          </div>
					<p style="">
				 
    The course was informative for me and help me in my career  
					</p>
                        <h4 class="adv-ho">  Mohammed Mualla Alharbi  </h4>
                        <p class="adv-p"> </p>
                    </div>
                       
                    </div>
                    

                    
                     <div class="item card">
          <div class="advisor_box">
           <div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2018/12/rajshekhar.jpg" alt="" class="p_image">
                           
                          </div>
          <p style="">
       
    InfosecTrain instructor made this course very easy by walking us through the precise content. Gave us the right techniques to understand the question and eliminate the incorrect options.  
          </p>
                        <h4 class="adv-ho">  Rajshekhar Deshmukh   </h4>
                        <p class="adv-p"> </p>
                    </div>
                       
                    </div>
                </div>
            </div>
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
                    <a href="https://www.infosectrain.com/pages/lp/ceh-training/" class="link_box" target="_blank">
                        <img src="assets/img_2/ceh.jpg" />
						<span>CEH - Certified Ethical Hacker  </span>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-md-0 mt-4">
			<div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/cisa/" class="link_box" target="_blank">
                        <img src="assets/img_2/CISA.png">
						<span>CISA Certification Course </span>
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

<section id="courses" class="section py-5" style="background:#f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="wow fadeInDown">Related Courses</h1>
            </div>
        </div>
        <div class="row owl-carousel owl-theme successStory mx-auto mt-4">
          <div class="item" onclick="changeVideo('hV7faGNme6A')">
            <img src="https://www.infosectrain.com/wp-content/uploads/2022/08/Anand.jpg" alt="Success Stories|infosectrain" class="img-fluid rounded d-block mx-auto"/>
          </div>
          <div class="item"  onclick="changeVideo('xYIMihmx4vc')">
            <img src="https://www.infosectrain.com/wp-content/uploads/2022/08/Harshit-Mathur.jpg" alt="Success Stories|infosectrain" class="img-fluid rounded d-block mx-auto"/>
          </div>
          <div class="item"  onclick="changeVideo('sGJMbna-P8s')">
            <img src="https://www.infosectrain.com/wp-content/uploads/2022/08/JAIKISHAN-SAH.jpg" alt="Success Stories|infosectrain" class="img-fluid rounded d-block mx-auto"/>
          </div>
          <div class="item"  onclick="changeVideo('fJmLTdLg3E0')">
            <img src="https://www.infosectrain.com/wp-content/uploads/2022/08/Zeshan-Ahmad.jpg" alt="Success Stories|infosectrain" class="img-fluid rounded d-block mx-auto"/>
          </div>
          <div class="item"  onclick="changeVideo('Y7CURes_Xl0')">
            <img src="https://www.infosectrain.com/wp-content/uploads/2022/10/SANJAY.png" alt="Success Stories|infosectrain" class="img-fluid rounded d-block mx-auto"/>
          </div>
        </div>
    </div>
</section>

<!--stories model sec-->
<div class="modal" id="myStories">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <iframe id="iframeYoutube" width="100%" height="500"  src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe> 
      </div>
    </div>
  </div>
</div>
<!--/stories model sec end-->

<section id="footr_last" class="section bg-dark_b button_transparent py-2">
    <div class="container">
        <div class="row text-white justify-content-md-center align-items-center wow fadeInUp">
           <div class="col-3 col-lg-3 col-md-4">
            <a href="https://api.whatsapp.com/send?phone=918767256840" target="_blank">
              <img src="assets/img_2/whats2.png"><span>+91 87672-56840</span>
            </a>
          </div>
           <div class="col-6 col-lg-3 col-md-4"><a href="#free_demo" class="btn btn-danger href_toscroll">Enroll Now</a></div>
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
    //table display without data
    let tdata = document.querySelector('.row-hover .row-2');
    if(tdata == null){
        document.getElementById('table_section').style.display = "none";
        document.querySelector('.navbar-nav .nav-item:nth-child(3)').style.display = "none";
    }


    $('.successStory').owlCarousel({
    loop:true,
    autoplay:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
//================youtube video========//

$(document).ready(function(){
  $("#myStories").on("hidden.bs.modal",function(){
    $("#iframeYoutube").attr("src","#");
  })
})

function changeVideo(vId){
  var iframe=document.getElementById("iframeYoutube");
  iframe.src="https://www.youtube.com/embed/"+vId;

  $("#myStories").modal("show");
}
</script>

 <!----------------whatsapp------------>
<script> 
  //  $(function(){
  //      $('#filename').load("../whatap.html");
  //  });
    </script>
<!-- 
    <div id="filename"></div> -->
    <!----------------whatsapp----->
</body>
</html>
