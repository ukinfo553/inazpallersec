<?php 

require_once('../../assets/email/email_config.php');
if(isset($_POST['me_submited']))

{ 
extract($_POST);

$name = trim($me_name);
$me_email = trim($me_email);
$me_phone = trim($me_phone); 
$me_message = trim($me_message);    
$me_course = trim($me_course);    
$me_pageurl = trim($me_pageurl); 



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
 
$email_subject = "New Enquiry from Data Privacy Training Landing Page"; 
$user_subject = "Thank you for your enquiry! We'll be in touch soon."; 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' ); 

/* $details    =   ip_details($_SERVER["REMOTE_ADDR"]);
$me_country=$details->country; */

function get_id(){
$ip=$_SERVER['REMOTE_ADDR'];

return $details = json_decode(file_get_contents("https://www.infosectrain.com/api/ip/".$ip.""));


} 
$details = get_id();
$ipadd=isset($details->ip)?$details->ip:"";
$city=isset($details->city)?$details->city:"";
$region=isset($details->region)?$details->region:"";
$country=isset($details->country)?$details->country:""; 


 $email_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">
<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr>
<tr  ><td ><b>You have received a new message from the user '.$name.'</td></tr>
<tr  ><td ><b>Date And Time: </b>'.$datetime.'</td></tr>
<tr><td ><b>Name: </b>'.$me_name.'</td></tr>
<tr><td><b> Email :</b> '.$me_email.'</td></tr>
<tr><td><b> Mobile :</b> '.$me_phone.'</td></tr> 
<tr><td><b> Course Name :</b> '.$me_course.'</td></tr>      
<tr><td><b> Ip   :</b> '.$ipadd.'</td></tr>    
<tr><td><b> City   :</b> '.$city.'</td></tr>    
<tr><td><b> Region   :</b> '.$region.'</td></tr>    
<tr><td><b> Country   :</b> '.$country.'</td></tr>    
<tr><td><b> Mention your call time preference :</b> '.$me_message.'</td></tr>  
</table>';
 

$user_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif;   padding:0 10px; background-color:#FFF; line-height:24px;">  
				<tr>
				<td>
				<p style="font-size:12px;font-family:arial"><strong>Dear  '.ucwords($name).'</strong>,</p>
				<p style="font-size:12px;font-family:arial">Thank you for contacting Infosec Train.</p> 
				<p style="font-size:12px;font-family:arial">Our Training Advisor will get back to you in next two business days, for confirmation of your preferred training schedule. </p> 
				<p style="font-size:12px;font-family:arial">Please add our email Id (sales@infosectrain.com) to your contacts. 
				This will help us to reach you and avoid landing in the junk folder due to over cautious filters. </p>
				<h3>View our Blog:</h3>
				<ul>
				<li><a href="https://www.infosectrain.com/blog/data-privacy-how-aware-are-you/">Data Privacy: How aware are you?</a> </li>
				<li><a href="https://www.infosectrain.com/blog/how-to-become-a-data-protection-officer/">Become a Data Protection Officer? </a> </li>
				<li><a href="https://www.infosectrain.com/blog/an-overall-vision-of-general-data-protection-regulation-gdpr/">General Data Protection Regulation (GDPR) </a> </li>
				<li><a href="https://www.infosectrain.com/blog/it-is-time-to-upgrade-your-cloud-security-skills-with-ccsp-certification/">
				It Is Time To Upgrade Your Cloud Security Skills With CCSP Certification</a></li>
				</ul>
				<h3>Find us on Youtube :</h3>
				<ul>
				<li><a href="https://www.youtube.com/watch?v=ifuq-w93D38&feature=emb_title">What is Privacy ?</a> </li>
				<li><a href="https://www.youtube.com/watch?v=eaeBD8gEuqo&feature=emb_title">Introduction to GDPR</a> </li>
				<li><a href="https://www.youtube.com/watch?v=PUjyYsFwvvg">Microsoft Azure Fundamentals and Administration</a> </li>
				<li><a href="https://www.youtube.com/watch?v=d_-mYYXkb04&t">Introduction to Cloud Computing with AMAZON Web Services</a></li>
				</ul>

				<p style="text-align:left;font-size:12px;font-family:arial">What People Are Saying About InfosecTrain: 
				<a style="color:#ff4444" href="https://www.infosectrain.com/customers-review/" target="_blank">Click Here</a></p>
				<p style="text-align:left;font-size:12px;font-family:arial">Follow Us on Youtube: 
				<a style="color:#ff4444" href="https://www.youtube.com/watch?v=ITwLz9QrJUo&t=187s" target="_blank">Ethical Hacking - Cryptography</a> | 
				<a style="color:#ff4444" href="https://www.youtube.com/watch?v=jhyz50wn1B8&t=455s" target="_blank">Wireless Hacking Demo in Ethical Hacking</a></p>
					  <p style="font-size:12px;font-family:arial"><strong>Best Regards</strong></p>
					  <p style="font-size:12px;font-family:arial">Team Infosec Train<br>
					  <strong>Email</strong>: sales@infosectrain.com<br>
					  <strong>Phone</strong>: +91-97736-67874<br>
					  <strong>Website</strong>: <a href="https://www.infosectrain.com/">www.infosectrain.com</a>
					  </p></td></tr> 
                 </table>';
 
 $data = array(
    'site_name' => 'lp', 
    'page_type' => 'Data Privacy Training', 
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