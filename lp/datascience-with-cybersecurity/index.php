<?php include('include/comman_use.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="description" content="Cybersecurity Data Science Certification course">
<meta name="author" content="Infosec Train">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>Cybersecurity Data Science Certification Course</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow" /> 
<link rel="icon" href="assets/img/fav.ico">
<link href="assets/css/style.min.css" rel="stylesheet"> 

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
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#coursess">Course content/Exam</a></li>
								<li class="nav-item"><a class="nav-link href_toscroll" href="#table_section">Training Calendar</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#schedule_newadv">Trainers</a></li>
                                <li class="nav-item"><a class="nav-link href_toscroll" href="#reviews">Reviews </a></li>       

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
                
                <h1 class="e_hacker">
				<a href="#" class="bannerf_a"></a></h1>
				<h1 class="e_hacker">
				<a href="#" class="bannerf_a">Cybersecurity  </a></h1>
				
                <h2 class="e_council">
				<a href="#" class="bannerf_a2">Data Science Training Course </a></h2>
				<h2 class="e_council">
				<ul>
				<li>24 hours of Instructor Led training</li> 
				<li>Certified & Experienced Trainers </li>                 
				<li>Access to Pre-recorded Sessions </li> 
				<li>Study Materials</li> 
				</ul>				
				</h2>
                
				<img src="assets/img_2/price-course.png"  width="100%"/>
            </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 col-xl-4">
	  
	
        <div class="form-container wow fadeInRight" id="free_demo">
          <div class="topright"><img src="assets/img_2/formarrrow.svg"  width="37"/></div>
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
                      <div class="form-group"> 
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
                      </div>
          
                      <!--<div class="row">
                       <div class="col-xs-12 col-md-12">-->
                        <div class="form-group">
                        <textarea class="form-control" id="me_message" value=""  name="me_message" placeholder="Comment/Training " ></textarea> 
                        <div class="form-control-feedback"> </div> 
                      <!--</div>
          
                      </div>-->
                            </div>
               
                <input type="hidden"   value="<?php echo BASE_URL;?>thank-you.html" id="me_redirect"  > 
                <input type="hidden"   value="Data Science with Python & R Certification course" id="me_others" name="me_others"  > 
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
               <h2 class="package-heading">Cybersecurity Data Science Training Includes</h2>
            </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-6">
           
              <img src="assets/img_2/two-young.png" width="100%" alt="" class="">
           
          </div>
          <div class="col-12 col-lg-6 mt-lg-0 mt-4">
           <!-------- <img src="assets/img_2/CompTIASecurityIncludes.png" width="100%" alt="" class="">-------->
            
			<div class="row cust_row">
			<div class="col-lg-6 mt-lg-0 mt-4">
			<div class="certification_box">
                        <h4 class="adv-h">
						
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3b3a39;}</style></defs>
  <g id="Group_8399" data-name="Group 8399" transform="translate(-726 -998)">
    <g id="Group_8318" data-name="Group 8318" transform="translate(0 1)">
      <g id="Group_7" data-name="Group 7" transform="translate(-241 -219)">
        <rect class="a" id="Rectangle_1141" data-name="Rectangle 1141" width="44" height="44" transform="translate(967 1216)" fill="#ddd" opacity="0"/>
      </g>
    </g>
    <g id="Group_8398" data-name="Group 8398" transform="translate(423 762.5)">
      <g id="Group_8397" data-name="Group 8397" transform="translate(307 241.5)">
        <path class="b" id="Path_23096" data-name="Path 23096" d="M317.926,262.68a6.162,6.162,0,1,0-6.161-6.161A6.162,6.162,0,0,0,317.926,262.68Zm6.068,2.486h-11.97A5.024,5.024,0,0,0,307,270.19v2.774a.459.459,0,0,0,.459.459h21.1a.459.459,0,0,0,.459-.459V270.19A5.024,5.024,0,0,0,323.994,265.166Z" transform="translate(-307 -242.232)" fill="#3b3a39"/>
        <path class="b" id="Path_23097" data-name="Path 23097" d="M342.6,241.5H330.669a1.834,1.834,0,0,0-1.835,1.835V257.4a1.832,1.832,0,0,1-.367,1.1l-1.284,1.713a.918.918,0,0,0,.734,1.468H342.6a1.834,1.834,0,0,0,1.835-1.835V243.335A1.834,1.834,0,0,0,342.6,241.5Zm-5.963,16.284h-3.211a1.147,1.147,0,0,1,0-2.293h3.211a1.147,1.147,0,0,1,0,2.293Zm3.211-4.587h-6.422a1.147,1.147,0,1,1,0-2.293h6.422a1.147,1.147,0,1,1,0,2.293Zm0-4.587h-6.422a1.147,1.147,0,1,1,0-2.293h6.422a1.147,1.147,0,1,1,0,2.293Z" transform="translate(-308.652 -241.5)" fill="#3b3a39"/>
      </g>
    </g>
  </g>
</svg>
						</h4>
                        <p class="adv-p">1:1 Mentor Support</p>
            </div>
			</div>
			
			<div class="col-lg-6 mt-lg-0 mt-4">
			<div class="certification_box">
                        <h4 class="adv-h">
						
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3b3a39;}</style></defs><g transform="translate(-967 -997)"><g transform="translate(241)"><g transform="translate(-241 -219)"><rect class="a" width="44" height="44" transform="translate(967 1216)"/></g></g><g transform="translate(938 898.759)"><g transform="translate(32 106.241)"><path class="b" d="M69.543,128.357h.016l-1.888-.648v-6.4a3.733,3.733,0,0,1-.43.044H64.232v5.173H38.446V110.2H51.339v-2.164a3.825,3.825,0,0,1,.233-1.274H36.727a1.719,1.719,0,0,0-1.719,1.719v19.231l-1.891.648h.019A1.714,1.714,0,0,0,32,129.968v2.577a1.719,1.719,0,0,0,1.719,1.719H68.96a1.72,1.72,0,0,0,1.719-1.719v-2.577A1.714,1.714,0,0,0,69.543,128.357Zm-16.054,3.276h-4.3a1.289,1.289,0,1,1,0-2.579h4.3a1.289,1.289,0,1,1,0,2.579ZM44.73,118.767a2.495,2.495,0,1,0-1.088-1.088A2.206,2.206,0,0,0,44.73,118.767Zm-3.037,4.4v.585a.6.6,0,0,0,.572.616h7.213a.6.6,0,0,0,.572-.616v-.585a1.958,1.958,0,0,0-1.881-2.027h-4.6A1.958,1.958,0,0,0,41.693,123.162Z" transform="translate(-32 -106.314)"/>
						<path class="b" d="M70.753,106.241H58.719A1.719,1.719,0,0,0,57,107.96v12.033a.861.861,0,0,0,.863.861.847.847,0,0,0,.512-.174l1.6-1.2a1.716,1.716,0,0,1,1.031-.344h9.741a1.719,1.719,0,0,0,1.719-1.719V107.96A1.719,1.719,0,0,0,70.753,106.241Zm-2.911,6.75-3.516,2.153a.859.859,0,0,1-1.308-.732V110.1a.86.86,0,0,1,1.308-.733l3.516,2.154A.86.86,0,0,1,67.841,112.991Z" transform="translate(-35.512 -106.241)"/></g></g></g></svg>
						</h4>
                        <p class="adv-p">Learn From <br />The Experts</p>
            </div>
			</div>
			
			<div class="col-lg-6 mt-lg-0 mt-4">
			<div class="certification_box">
                        <h4 class="adv-h">
					
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
						<defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3b3a39;}</style></defs>
  <g id="Group_8396" data-name="Group 8396" transform="translate(-726 -1201)">
    <g id="Group_8317" data-name="Group 8317" transform="translate(0 1)">
      <g id="Group_16" data-name="Group 16" transform="translate(-241 -16)">
        <rect  class="a"  id="Rectangle_1141" data-name="Rectangle 1141" width="44" height="44" transform="translate(967 1216)" fill="#ddd" opacity="0"/>
      </g>
    </g>
    <g id="Group_8395" data-name="Group 8395" transform="translate(492.809 899.674)">
      <g id="Group_8394" data-name="Group 8394" transform="translate(237.191 308.326)">
        <g id="Group_8393" data-name="Group 8393">
          <path class="b" id="Path_23094" data-name="Path 23094" d="M243.268,330.005a3.355,3.355,0,1,0-3.355-3.355A3.355,3.355,0,0,0,243.268,330.005Zm19.926-3.355a3.355,3.355,0,1,0,3.355-3.355A3.355,3.355,0,0,0,263.194,326.65Zm-1.529,1.134a4.929,4.929,0,0,1,.122-2.707,5.077,5.077,0,0,1,2.624-2.938,4.785,4.785,0,0,1,2.982-.432.406.406,0,0,0,.468-.408V309.987a1.661,1.661,0,0,0-1.663-1.661H243.749a1.663,1.663,0,0,0-1.663,1.663v11.288a.411.411,0,0,0,.468.41,4.824,4.824,0,0,1,3.515.856,4.9,4.9,0,0,1,2.084,5.24.409.409,0,0,0,.4.5h.968c.311,0,.467-.137.514-.326a5.012,5.012,0,0,1,9.74,0,.416.416,0,0,0,.4.326h1.081A.411.411,0,0,0,261.665,327.784Zm-7.172-8.026h-5.82a1.039,1.039,0,0,1,0-2.079h5.82a1.039,1.039,0,0,1,0,2.079Zm-5.82-4.157a1.039,1.039,0,0,1,0-2.079h13.3a1.039,1.039,0,0,1,0,2.079Zm-2.063,16.1h-6.683a2.735,2.735,0,0,0-2.735,2.735v.789a.831.831,0,0,0,.831.831h8.913a.418.418,0,0,0,.4-.314,4.393,4.393,0,0,1,1.473-2.219.429.429,0,0,0,.093-.571A2.726,2.726,0,0,0,246.61,331.7Zm23.281,0h-6.683a2.726,2.726,0,0,0-2.291,1.251.429.429,0,0,0,.093.571,4.393,4.393,0,0,1,1.473,2.219.418.418,0,0,0,.4.314h8.913a.831.831,0,0,0,.831-.831v-.789A2.735,2.735,0,0,0,269.89,331.7Z" transform="translate(-237.191 -308.326)" fill="#3b3a39"/>
          <path class="b" id="Path_23095" data-name="Path 23095" d="M257.268,336.04a3.355,3.355,0,1,0-3.355-3.355A3.355,3.355,0,0,0,257.268,336.04Zm3.342,1.692h-6.683a2.735,2.735,0,0,0-2.735,2.735v.789a.831.831,0,0,0,.831.831h10.491a.831.831,0,0,0,.831-.831v-.789A2.735,2.735,0,0,0,260.61,337.732Z" transform="translate(-239.551 -311.866)" fill="#3b3a39"/>
        </g>
      </g>
    </g>
  </g>
</svg>
						</h4>
                        <p class="adv-p">Small Size Batch</p>
            </div>
			</div>
			
			<div class="col-lg-6 mt-lg-0 mt-4">
			<div class="certification_box">
                        <h4 class="adv-h">
						
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"><defs><style>.a{fill:#ddd;opacity:0;}.b{fill:#3b3a39;}</style></defs><g transform="translate(-967 -1216)"><rect class="a" width="44" height="44" transform="translate(967 1216)"/><g transform="translate(662.5 979.403)"><path class="b" d="M339.25,256.9a1.25,1.25,0,0,0-1.25-1.25H317a1.25,1.25,0,0,0,0,2.5h21A1.25,1.25,0,0,0,339.25,256.9ZM317,260.653a1.25,1.25,0,0,0,0,2.5h8.7a1.25,1.25,0,0,0,0-2.5Zm14-7.5a1.25,1.25,0,0,0,0-2.5h-8a1.25,1.25,0,0,0,0,2.5ZM343.5,242.6h-34a2,2,0,0,0-2,2v25a2,2,0,0,0,2,2h19v-4h-14a3,3,0,0,0-3-3v-15a3,3,0,0,0,3-3h24a3,3,0,0,0,3,3v15a3,3,0,0,0-3,3h0v4h5a2,2,0,0,0,2-2v-25A2,2,0,0,0,343.5,242.6Z"/><path class="b" d="M331,269.738v4.218a.447.447,0,0,0,.448.447.441.441,0,0,0,.258-.084l1.535-1.1a.447.447,0,0,1,.519,0l1.535,1.1a.439.439,0,0,0,.258.084.446.446,0,0,0,.447-.447v-4.218a5.928,5.928,0,0,1-5,0Zm2.5-1.947a3.5,3.5,0,1,0-3.5-3.5A3.5,3.5,0,0,0,333.5,267.791Z"/></g></g></svg>
						</h4>
                        <p class="adv-p">Course Completion <br /> Certificate</p>
            </div>
			</div>
			</div>
			<!---------------->
            
          </div>
        </div>
    </div>
</section>

<!--<section id="fastfacts_section">
 
    <div  class="container" id="benefits">
        <div class="row">
            <div class="col-12">
               <h2 class="package-heading">Tools Covered</h2>
            </div>
        </div>

    <div class="row">
      <div class="col-12">
 <img src="assets/img_2/tools-01@2x.png" width="100%" alt="" class="">
 
            </div>
  </div>
  </div>
</section>-->

<section id="coursess">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInLeft">
        <h2 class="package-heading">Cybersecurity Data Science Course Content</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
      <!-- Tabs navs -->


<!-- Tabs content -->
	  
	  <div class="download_syllabus content-desktop" > 
	  <a href="https://www.infosectrain.com/wp-content/uploads/2022/06/cybersecurity-data-science-training_course_content.pdf" target="_blank"><img src="assets/img_2/Download_Syllabus.svg" width="100%" alt="" class=""></a></div>
<section class="accordion-tabs js-tabs" data-tabs-allowed="true" data-breakpoint="640" data-start-collapsed="true">
      <ul role="tablist" class="tabs-tab-list">
          <li role="presentation"><a id="tab1" href="#section1" role="tab" aria-controls="section1" aria-selected="true" class="tabs-trigger js-tabs-trigger">Overview</a></li>
          <li role="presentation"><a id="tab2" href="#section2" role="tab" aria-controls="section2" class="tabs-trigger js-tabs-trigger">Course Objectives</a></li>
          <li role="presentation"><a id="tab3" href="#section3" role="tab" aria-controls="section3" class="tabs-trigger js-tabs-trigger">Course Content</a></li>
		  <li role="presentation"><a id="tab4" href="#section4" role="tab" aria-controls="section4" class="tabs-trigger js-tabs-trigger">Who Should Attend</a></li>
          <li role="presentation"><a id="tab5" href="#section5" role="tab" aria-controls="section5" class="tabs-trigger js-tabs-trigger"> Pre-Requisite</a></li>
      </ul>
	 
      <section id="section1" role="tabpanel" aria-labelledby="tab1" class="tabs-panel js-tabs-panel" tabindex="0">
        <div class="accordion-trigger js-accordion-trigger" aria-controls="section1" aria-expanded="true" tabindex="0">Overview<div class="accordion-trigger-icon"><span class="label--open">Open</span><span class="label--close">Close</span>
          <svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect class="vert" height="18" width="2" fill="currentColor" y="1" x="9"></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg>
        </div></div>
        <div class="content" aria-hidden="false">
         <div  class="tab_content"> 
            <!--<img src="assets/img_2/camptia.png" align="right"  style="width:120px;" class="d-inline-block ml-3">-->
                       <p>


Data science is one of the most in-demand fields in the IT business. Cybersecurity has also undergone tremendous technological and operational changes in recent days. Infosectrain’s Data Science for Cyber Security course is designed to be an all-in-one resource that may help you advance your profession. Examine all of the fundamentals of Data Science for Cyber Security while also ensuring that you have sufficient exposure to more advanced topics.</p>
<p>
The key to making a security system automated and intelligent is to extract security incident patterns or insights from cybersecurity data and construct a data-driven model to go with it. Various scientific methodologies, machine learning techniques, procedures, and systems are employed in order to comprehend and analyse the actual phenomena with data. The information is acquired from reputable cybersecurity sources, and the analytics are used to supplement the most recent data-driven patterns in order to provide more effective security solutions.


</p>
                     </div>
        </div>
      </section>
      <section id="section2" role="tabpanel" aria-labelledby="tab2" class="tabs-panel js-tabs-panel">
        <div class="accordion-trigger js-accordion-trigger" aria-controls="section2" aria-expanded="false" tabindex="0">Course Objectives<div class="accordion-trigger-icon"><span class="label--open">Open</span><span class="label--close">Close</span><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect class="vert" height="18" width="2" fill="currentColor" y="1" x="9"></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg></div></div>
        <div class="content" aria-hidden="true">
          <div  class="tab_content">
		  
		 <p>InfosecTrain is a proficient technology and security training and consulting organization across the globe, specializing in various IT security courses and services. Our Data Science for Cyber Security training course aims to apply Data Science skills in Cyber Security to mitigate the security threats. You can leverage the following benefits with InfosecTrain:</p>

<ul class="ulclass">

    <li>We can help you present your qualifications and work experience for the designated profile.</li>
   <li> We provide a flexible training schedule.</li>
    <li>We provide recorded videos after the session to each participant.</li>
    <li>We provide post-training assistance.</li>
   <li> We also provide a certificate of participation to each candidate.</li>

</ul>

 
   </div>
        </div>
      </section>
      <section id="section3" role="tabpanel" aria-labelledby="tab3" class="tabs-panel js-tabs-panel">
        <div class="accordion-trigger js-accordion-trigger" aria-controls="section3" aria-expanded="false" tabindex="0">Course Content <div class="accordion-trigger-icon"><span class="label--open">Open</span><span class="label--close">Close</span><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect class="vert" height="18" width="2" fill="currentColor" y="1" x="9"></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg></div></div>
        <div class="content" aria-hidden="true">
          <div class="tab_content"><ul class="ulclass"><li>Introduction to Data Science</li>
  
<li>Introduction to Data Science</li>

<li>Introduction to Cyber Security</li>

<li>Python Basics</li>

<li>Exploratory Data Analysis</li>

<li>Machine Learning for Cyber Security</li>

<li>Email Cybersecurity Threats Detection</li>

<li>Malware Threat Detection</li>

<li>Advanced malware threat detection</li>

<li>Network Anomaly Detection</li>

<li>Securing Users Authentication</li>

<li>Automatic intrusion detection</li>

<li>Securing and Attacking Data with Machine Learning</li>

<li>Projects</li>

<li>Credit Card Fraud Detection</li>
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
         
     <li>Candidates who want to build their career in Cyber Security and Data Science</li>
     <li>Candidates willing to learn Data Science for Cyber Security from Scratch</li>
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
		 <ul class="ulclass">
         
    <li> Basic knowledge of programming languages</li>
    <li> Basic understanding of network essentials, core concepts including server and network components</li>
		 </ul>
		   </div>
        </div>
      </section>
	  
    </section>
	  
	   <div class="download_syllabusmob content-mobile" > 
	  <a href="https://www.infosectrain.com/wp-content/uploads/2022/06/cybersecurity-data-science-training_course_content.pdf" target="_blank"><img src="assets/img_2/Download_Syllabus.svg" alt="" class="" style="width:200px;"></a></div>
	  
      </div>
      <!-- /.col-md-8 -->
    </div>


     
  </div>
</section>






<section id="table_section">
 
    <div  class="container" id="benefits">
        <div class="row">
            <div class="col-12">
               <h2 class="package-heading">Cybersecurity Data Science Training Calendar</h2>
			  
            </div>
        </div>

    <div class="row">
      <div class="col-12">

<?php
$url = "https://www.infosectrain.com/api/39079/href_toscroll/free_demo";
 

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



<!----------------Done--------->
<section id="coursess22" style="background:#f2f2f2;">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInLeft">
        <h2 class="package-heading">Career Benefits</h2>
		  <img src="assets/img_2/Cybersecurity_Data_Science_career_benefits.jpg" width="100%" alt="" class="">
      </div>
    </div>

        
  </div>
</section>


<section id="schedule_newadv" class=" content-desktop">
  <div class="container">
     <h2 class="package-heading fixhed_adv">Our Course Advisor</h2>
    <div class="row">
         
          <div class="col-12 col-lg-2 mt-lg-0 mt-4">
            <img src="assets/img_2/Nawaj@2x.png" width="100%" alt="" class="fixhed_adv_img">
           </div> 
		   <div class="col-12 col-lg-10 mt-lg-0 mt-4">
           
              <h2 class="sche_adv">
			   Nawaj expert in Data Science, Artificial Intelligence, Machine Learning, Deep Learning, Natural Language Processing and Time Series Analysis (Forecasting).</h2>
       <h2 class="sche_adv_name">NAWAJ SHEIKH</h2>
	    <h2 class="sche_adv_cer">Data Science | Machine Learning | Deep Learning | ArtificiaI Intelligence | Statistics</h2>
           
          </div>
    </div>
	
	
	
  </div>
</section>

<section id="advisors2" class="content-mobile">
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
					 <img src="assets/img_2/Nawaj@2x.png"  style="width:150px;" alt="" class="fixhed_adv_img">
					<p class="course_h">
					  Nawaj expert in Data Science, Artificial Intelligence, Machine Learning, Deep Learning, Natural Language Processing and Time Series Analysis (Forecasting).
					</p>
                        <h4 class="adv-h"> NAWAJ SHEIKH</h4>
                        <p class="adv-p">Data Science | Machine Learning | Deep Learning | ArtificiaI Intelligence | Statistics</p>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>





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
                            <img src="https://www.infosectrain.com/wp-content/uploads/2021/10/raghavendra-150x150.jpg" alt=""  class="p_image">                    </div>
					<p class="wordof_p">
				 
    Excellent trainer and course materials! Very useful for future reference as well. I expect more amazing training programs and offers from InfoSecTrain that will uplift my career potential and help me towards opportunities that I have always dreamt of.  
					</p>
                        <h4 class="adv-ho"> Raghavendra Surya </h4>
                      
                    </div>
                 
                    </div>
                    <div class="item card">
					<div class="advisor_box">
					<div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2021/10/akhil-150x150.jpg" alt="" class="p_image">                          </div>
					<p class="wordof_p">
					 
    Superb session. One of the best instructors I have ever met. Very humble down to earth and very professional to handle query from the participants.  
					</p>
                        <h4 class="adv-ho">Akhil Verma </h4>
                     
                    </div>
                       
                    </div>
                    

                    <div class="item card">
					<div class="advisor_box">
					 <div class="prof-img">
                            <img src="https://www.infosectrain.com/wp-content/uploads/2021/10/sudhara-150x150.jpg" alt="" class="p_image">                          </div>
					<p class="wordof_p">
					 
    Course and training were excellent. The Training methodology incorporated by InfoSec Train helped me to understand the concepts effectively. Looking forward to experiencing more such learning experiences with this team!  
					</p>
                        <h4 class="adv-ho"> Sudhara Vipin </h4>
                       
                    </div>
                       
                    </div>
                       
                </div>
            </div>
        </div>
    </div>
</section>




<!----------------Done--------->










<!----------------Done--------->




<!----------------Done--------->
<section id="schedule">
  <div class="container">
    <div class="row">
          <div class="col-12 col-lg-12 mt-lg-0 mt-4">
           
              <h2 class="sche-h">Looking For A Flexible, Customize,  <br />Cost-EffectiveLearning Solution? <br /> We Are Just A Click Away</h2>
       
        <a href="#free_demo" class="btn href_toscroll" data-target="#request_demo">Schedule a Demo -> <img src="assets/img_2/arroew.png" width="100%" alt="" class="fixhed_adv_img"></a>
           
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




<!--<section id="courses" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="wow fadeInDown">Related Courses</h1>
            </div>
        </div>
        <div class="row mt-4 wow fadeInUp">
            <div class="col-md-6 col-lg-3">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/pages/lp/ceh-v11/" class="link_box" target="_blank">
                        <img src="assets/img_2/cieh.png" />
						<span>CEH Certification <br />Course </span>                    </a>
                               </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-md-0 mt-4">
                <div class="c_box">
                    <a href="https://www.infosectrain.com/courses/red-team-certification-online-training/" class="link_box" target="_blank">
					 <img src="assets/img_2/RedTeam.svg" />
                        <span>Red Team Online Training <br />Course </span>                    </a>
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
                    <p class="foot_p"><a href="tel:+44745120841" class="text-white"><img src="assets/img_2/call.svg" /> +44-7451-208413 (UK)</a></p>
          <p class="foot_p"><a href="tel:+1 657-722-11127" class="text-white"><img src="assets/img_2/call.svg" /> +1 657-722-11127 (USA)</a></p>
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
                    <p class="foot_p"><a href="tel:+1 657-722-11127" class="text-white"><img src="assets/img_2/call.svg" /> +1 657-722-11127 (USA)</a></p>
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




<script src="assets/js/common.js"></script>
<script src="assets/js/common.min.js"></script>
<script src="assets/js/main.js"></script>

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
