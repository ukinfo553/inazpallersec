<?php 

require_once('../../assets/email/email_config.php');
if(isset($_POST['me_submited']))

{ 
extract($_POST);

$name = trim($me_name);
$me_email = trim($me_email);
$me_phone = trim($me_phone); 
$me_message = trim($me_message);  
  
$me_others  = trim($me_others); 

$me_pageurl = $me_pageurl; 

//Validate first
if(empty($name)||empty($me_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($me_email))
{
    echo "Bad email value!";
    exit;
}
 
$email_subject = "New Enquiry from SOC Expert Landing Page"; 
$user_subject = "Thank you for your enquiry! We'll be in touch soon."; 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' ); 

//-------tabir-

function get_id(){
$ip=$_SERVER['REMOTE_ADDR'];


function url_get_contents ($Url) {
    if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
$details = json_decode(url_get_contents("http://ipinfo.io/".$ip.""));

return $details;


} 
$details = get_id();
$ipadd=isset($details->ip)?$details->ip:"";
$city=isset($details->city)?$details->city:"";
$region=isset($details->region)?$details->region:"";
$country=isset($details->country)?$details->country:"";

//---------Tabir

//$details    =   ip_details($_SERVER["REMOTE_ADDR"]);
//$me_country=$details->country; 


 $email_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">
<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr>
<tr  ><td ><b>You have received a new message from the user '.$name.'</td></tr>
<tr  ><td ><b>Date And Time: </b>'.$datetime.'</td></tr>
<tr><td ><b>Name: </b>'.$me_name.'</td></tr>
<tr><td><b> Email :</b> '.$me_email.'</td></tr>
<tr><td><b> Mobile :</b> '.$me_phone.'</td></tr> 
<tr><td><b> Request For :</b> '.$me_others.'</td></tr>
<tr><td><b> Page URL :</b> '.$me_pageurl.'</td></tr>        
<tr><td><b> Country   :</b> '.$me_country.'</td></tr>  
<tr><td><b> Student IpAddress :</b> '.$ipadd.'</td></tr>  
<tr><td><b> City:</b> '.$city.'</td></tr> 
<tr><td><b> Region:</b> '.$region.'</td></tr> 
<tr><td><b> Country:</b> '.$country.'</td></tr>  
<tr><td><b> Mention your call time preference :</b> '.$me_message.'</td></tr>  
</table>';
 

$user_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif;   padding:0 10px; background-color:#FFF; line-height:24px;">  
<tr  ><td ><p style="font-size:12px;font-family:arial"><strong>Dear  '.ucwords($name).'</strong>,</p><p style="font-size:12px;font-family:arial">Thank you for contacting Infosec Train.</p> 
<p style="font-size:12px;font-family:arial">Our Training Advisor will get back to you in next two business days, for confirmation of your preferred training schedule. </p> <p style="font-size:12px;font-family:arial">Please add our email Id (sales@infosectrain.com) to your contacts. This will help us to reach you and avoid landing in the junk folder due to over cautious filters. </p>
      <p style="font-size:12px;font-family:arial"><strong>Best Regards</strong></p>
      <p style="font-size:12px;font-family:arial">Team Infosec Train<br>
      <strong>Email</strong>: sales@infosectrain.com<br>
      <strong>Phone</strong>: +91-97736-67874<br>
      <strong>Website</strong>: <a href="https://www.infosectrain.com/">www.infosectrain.com</a></p></td></tr> 
</table>';



 
 
 $data = array(
    'site_name' => 'lp', 
    'page_type' => 'SOC Expert', 
    'name' => $me_name,
    'email' => $me_email, 
    'phone' => $me_phone, 
    'subject' => $email_subject,
    'message' => $email_body,
	'ip' => $ipadd,
    'city' => $city,
    'region' => $region,
    'country' => $country,
	'url' => $me_pageurl
);
$payload = json_encode(array("result_email" => $data)); 
$apiurl='https://www.infosectrain.com/my-admin/send_email.php';
$first_data=curl_trip($apiurl,$payload);



$email=send_email($email_subject,$email_body,$me_name,$me_email); 
  
if($email=='Success') { 
echo send_email_user($user_subject,$user_body,$me_email);       
}else {
 echo $email;
 
   }  
//done. redirect to thank-you page.
 


 
} 
  
?>