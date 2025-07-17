<?php 
 // Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

require_once('../phpmailer/class.phpmailer.php');
if(isset($_POST['me_submited']))

{ 
extract($_POST);
 
$name = trim($me_name);
$me_email = trim($me_email);
$me_phone = trim($me_phone);
$me_country = trim($me_country);
$me_message = trim($me_message);  
$me_others = trim($me_others);   


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
 
$email_subject = "New Enquiry from CCSP  Landing Page"; 
$user_subject = "Thank you for your enquiry! We'll be in touch soon."; 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' ); 
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
<tr><td><b> Request For :</b> '.$me_others.'</td></tr> 
<tr><td><b> Country   :</b> '.$me_country.'</td></tr>    
<tr><td><b> Here is the message:</b> '.$me_message.'</td></tr>  
</table>';
 

$user_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif;   padding:0 10px; background-color:#FFF; line-height:24px;">  
<tr  ><td ><p style="font-size:12px;font-family:arial"><strong>Dear  '.ucwords($name).'</strong>,</p><p style="font-size:12px;font-family:arial">Thank you for contacting Infosec Train.</p> 
<p style="font-size:12px;font-family:arial">Our Training Advisor will get back to you in next two business days, for confirmation of your preferred training schedule. </p> <p style="font-size:12px;font-family:arial">Please add our email Id (sales@infosectrain.com) to your contacts. This will help us to reach you and avoid landing in the junk folder due to over cautious filters. </p>
<h3>Our Recommended Blog:</h3>
<ul><li><a href="https://www.infosectrain.com/blog/how-to-prepare-for-ccsp-exam/">How to prepare for CCSP exam? </a> </li>
  <li><a href="https://www.infosectrain.com/blog/it-is-time-to-upgrade-your-cloud-security-skills-with-ccsp-certification/">It Is Time To Upgrade Your Cloud Security Skills With CCSP Certification</a> </li>
  <li><a href="https://www.infosectrain.com/blog/cissp-or-ccsp-which-is-better/">CISSP Or CCSP – Which is better?</a> </li>
  <li><a href="https://www.infosectrain.com/blog/ccsp-vs-ccsk-an-even-handed-comparison/">CCSP vs CCSK: An Even Handed Comparison</a> </li>
    <li><a href="https://www.infosectrain.com/blog/new-ccsp-vs-the-old-ccsp/">New CCSP vs the old CCSP</a> </li>
  <li><a style="color:#ff4444" href="https://www.infosectrain.com/blog/new-ccsp-vs-the-old-ccsp/" target="_blank">New CCSP vs the old CCSP</a></li>
  </ul>
<h3>Our Recommended Courses and Certification:</h3>
<ul><li><a href="https://www.infosectrain.com/courses/cissp-certification-training/">CISSP</a> </li>
  <li><a href="https://www.infosectrain.com/courses/ccsp-certification-training/">CCSP</a> </li>
  <li><a href="https://www.infosectrain.com/courses/sscp-certification-training/">SSCP</a> </li>
  <li><a href="https://www.infosectrain.com/courses/csslp-certification-training/">CSSLP</a> </li>
    <li><a href="https://www.infosectrain.com/courses/cap-certification-training/">CAP</a> </li>
  <li><a href="https://www.infosectrain.com/courses/cissp-issap-certification-training/">CISSP-ISSAP</a> </li>
  </ul>

      <p style="font-size:12px;font-family:arial"><strong>Best Regards</strong></p>
      <p style="font-size:12px;font-family:arial">Team Infosec Train<br>
      <strong>Email</strong>: sales@infosectrain.com<br>
      <strong>Phone</strong>: +91-97736-67874<br>
      <strong>Website</strong>: <a href="https://www.infosectrain.com/">www.infosectrain.com</a></p></td></tr> 
</table>';



function curl_trip($url, $fields_string="") {
$ua = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13';
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HEADER, true);

curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_COOKIE, 'NID=67=pdjIQN5CUKVn0bRgAlqitBk7WHVivLsbLcr7QOWMn35Pq03N1WMy6kxYBPORtaQUPQrfMK4Yo0vVz8tH97ejX3q7P2lNuPjTOhwqaI2bXCgPGSDKkdFoiYIqXubR0cTJ48hIAaKQqiQi_lpoe6edhMglvOO9ynw; PREF=ID=52aa671013493765:U=0cfb5c96530d04e3:FF=0:LD=en:TM=1370266105:LM=1370341612:GM=1:S=Kcc6KUnZwWfy3cOl; OTZ=1800625_34_34__34_; S=talkgadget=38GaRzFbruDPtFjrghEtRw; SID=DQAAALoAAADHyIbtG3J_u2hwNi4N6UQWgXlwOAQL58VRB_0xQYbDiL2HA5zvefboor5YVmHc8Zt5lcA0LCd2Riv4WsW53ZbNCv8Qu_THhIvtRgdEZfgk26LrKmObye1wU62jESQoNdbapFAfEH_IGHSIA0ZKsZrHiWLGVpujKyUvHHGsZc_XZm4Z4tb2bbYWWYAv02mw2njnf4jiKP2QTxnlnKFK77UvWn4FFcahe-XTk8Jlqblu66AlkTGMZpU0BDlYMValdnU; HSID=A6VT_ZJ0ZSm8NTdFf; SSID=A9_PWUXbZLazoEskE; APISID=RSS_BK5QSEmzBxlS/ApSt2fMy1g36vrYvk; SAPISID=ZIMOP9lJ_E8SLdkL/A32W20hPpwgd5Kg1J');

curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_MAXREDIRS, 20);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

$result = curl_exec($ch);
$last = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
curl_close($ch);
return array($result,$last);
}

  
 
 $data = array(
    'site_name' => 'landing-page', 
    'page_type' => 'ccsp-new', 
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
$first_data=curl_trip($apiurl,$payload);


 


$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
//$mail->Host = "smtp.gmail.com";
//$mail->Port = 465; // or 587 
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "sales@infosectrain.com";
$mail->Password = 'WbGm=2019##!';
$mail->SetFrom("sales@infosectrain.com", 'Infosec Train');
$mail->Subject = $email_subject;
$mail->Body = $email_body; 
$mail->AddAddress("sales@infosectrain.com");
//$mail->AddCC("prabh@infosectrain.com");
$mail->AddReplyTo($me_email, ucwords($name));
  
if(!$mail->Send()) {

  echo "Mailer Error: " . $mail->ErrorInfo;

}else {
 

 $mail2 = new PHPMailer(); // create a new object
$mail2->IsSMTP(); // enable SMTP
$mail2->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail2->SMTPAuth = true; // authentication enabled
$mail2->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail2->Host = "smtp.gmail.com";
//$mail2->Host = "smtp.gmail.com";
//$mail2->Port = 465; // or 587 
$mail2->Port = 465; // or 587
$mail2->IsHTML(true);
$mail2->Username = "sales@infosectrain.com";
$mail2->Password = 'WbGm=2019##!';
$mail2->SetFrom("sales@infosectrain.com", 'Infosec Train');

$mail2->Subject = $user_subject;
$mail2->Body = $user_body; 
$mail2->AddAddress($me_email); 
$mail2->AddReplyTo("sales@infosectrain.com", 'Infosec Train');

if(!$mail2->Send()) {

  echo "Mailer Error: " . $mail2->ErrorInfo;

}else {

 echo 'Sucess';
}


   } 



//done. redirect to thank-you page.
 


 
} 
  
?>