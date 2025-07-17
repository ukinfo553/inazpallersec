<?php
const SUCCESS_CODE = 200;
const SUCCESS_MESSAGE = 'Thank you! We have received your form successfully.';
const ERROR_CODE = 400;
$ERROR_MESSAGE = 'There are some missing values, please review your form.';


$host = isset($_SERVER['HTTP_X_FORWARDED_HOST'])
  ? $_SERVER['HTTP_X_FORWARDED_HOST']
  : $_SERVER['HTTP_HOST'];
header('Content-Type: application/json');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
header('Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin');
header('AMP-Access-Control-Allow-Source-Origin: https://' . $host);


if(!empty($_POST)){


  require_once('amp_email_config.php');
extract($_POST);
 

$me_name = trim($me_name);
$me_email = trim($me_email);
$me_phone = trim($me_phone); 
$me_message = trim($me_message);    
$post_title = trim($post_title);    
$post_link = trim($post_link);    
  $me_captcha = trim($me_captcha);    
 $me_captcha_value = trim($me_captcha_value);    

 

//Validate first
if(empty($me_name)||empty($me_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(empty($me_captcha)) 
{
     getError('Enter Captcha.');
     die;
}

 

 
if($me_captcha!=$me_captcha_value) 
{
     getError('Captcha not match.');
     die;
}



if(IsInjected($me_email))
{
    echo "Bad email value!";
    exit;
}
 
$email_subject = "New Enquiry from ".$post_title." AMP Page"; 
$user_subject = "Thank you for your enquiry! We'll be in touch soon."; 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' ); 
$me_country='';
 
 
$details = ip_details_amp($_SERVER['REMOTE_ADDR']);
$ipadd=isset($details->ip)?$details->ip:"";
$city=isset($details->city)?$details->city:"";
$region=isset($details->region)?$details->region:"";
$country=isset($details->country)?$details->country:""; 



   $email_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">
<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr>
<tr  ><td ><b>You have received a new message from the user '.$me_name.'</td></tr>
<tr  ><td ><b>Date And Time: </b>'.$datetime.'</td></tr>
<tr><td ><b>Name: </b>'.$me_name.'</td></tr>
<tr><td><b> Email :</b> '.$me_email.'</td></tr>
<tr><td><b> Mobile :</b> '.$me_phone.'</td></tr> 
<tr><td><b> Mention your call time preference :</b> '.$me_message.'</td></tr>  
<tr><td ><b>Page Title: </b>'.$post_title.'</td></tr>
<tr><td ><b>Page Link: </b>'.$post_link.'</td></tr>  
<tr><td><b> IP Address :</b> '.$ipadd.'</td></tr>
<tr><td><b> IP City :</b> '.$city.'</td></tr>
<tr><td><b> IP Country  :</b> '.$country.'</td></tr>
</table>';
 

$user_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif;   padding:0 10px; background-color:#FFF; line-height:24px;">  
<tr  ><td ><p style="font-size:12px;font-family:arial"><strong>Dear  '.ucwords($me_name).'</strong>,</p><p style="font-size:12px;font-family:arial">Thank you for contacting Infosec Train.</p> 
<p style="font-size:12px;font-family:arial">Our Training Advisor will get back to you in next two business days, for confirmation of your preferred training schedule. </p> <p style="font-size:12px;font-family:arial">Please add our email Id (sales@infosectrain.com) to your contacts. This will help us to reach you and avoid landing in the junk folder due to over cautious filters. </p>
<p style="text-align:left;font-size:12px;font-family:arial">What People Are Saying About InfosecTrain: <a style="color:#ff4444" href="https://www.infosectrain.com/customers-review/" target="_blank">Click Here</a></p>
      <p style="font-size:12px;font-family:arial"><strong>Best Regards</strong></p>
      <p style="font-size:12px;font-family:arial">Team Infosec Train<br>
      <strong>Email</strong>: sales@infosectrain.com<br>
      <strong>Phone</strong>: +91-97736-67874<br>
      <strong>Website</strong>: <a href="https://www.infosectrain.com/">www.infosectrain.com</a></p></td></tr> 
</table>';



 $data = array(
    'site_name' => 'AMP', 
    'page_type' => $post_title, 
    'name' => $me_name,
    'email' => $me_email, 
    'phone' => $me_phone, 
    'subject' => $email_subject,
    'message' => $email_body,
    'ip' => $ipadd,
    'city' => $city,
    'region' => $region,
    'country' => $country
);
$payload = json_encode(array("result_email" => $data)); 
$apiurl='https://www.infosectrain.com/my-admin/send_email.php';
$first_data=curl_trip_amp($apiurl,$payload);

 

$email=send_email($email_subject,$email_body,$me_name,$me_email); 

$domain_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        header("Content-type: application/json");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Origin: ". str_replace('.', '-','https://infosectrain.com') .".cdn.ampproject.org");
        header("AMP-Access-Control-Allow-Source-Origin: " . $domain_url);
        header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
        header("AMP-Redirect-To: https://infosectrain.com/thankyou/");
        header("Access-Control-Expose-Headers: AMP-Redirect-To, AMP-Access-Control-Allow-Source-Origin"); 
        

if($email=='Success') { 
  send_email_user($user_subject,$user_body,$me_email);       
 $message=' Success! Thanks '.$me_name.'. Our design specialists will contact you shortly.';


$success = [    'message' => $message];

$json = json_encode($success);
http_response_code(SUCCESS_CODE);
die($json);



}else {
 //echo json_encode(array('message' => 'Error!    '.$me_name.'for trying the.'));
        //exit; 
       

 getError($ERROR_MESSAGE);

 
   }  
 
       
}

 function getError($value='')
{
      $error = ['message' => $value  ];

  $json = json_encode($error);
  http_response_code(ERROR_CODE);
  die($json);

}
?>