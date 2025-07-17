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
 
$email_subject = "New Enquiry from CCSP Prabh Batch Landing Page"; 
$user_subject = "Thank you for your enquiry! We'll be in touch soon."; 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' ); 
 $email_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">
<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr>
<tr  ><td ><b>You have received a new message from the user '.$name.'</td></tr>
<tr  ><td ><b>Date And Time: </b>'.$datetime.'</td></tr>
<tr><td ><b>Name: </b>'.$me_name.'</td></tr>
<tr><td><b> Email :</b> '.$me_email.'</td></tr>
<tr><td><b> Mobile :</b> '.$me_phone.'</td></tr> 
<tr><td><b> Country   :</b> '.$me_country.'</td></tr>    
<tr><td><b> Here is the message:</b> '.$me_message.'</td></tr>  
</table>';
 

$user_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif;   padding:0 10px; background-color:#FFF; line-height:24px;">  
<tr  ><td ><p style="font-size:12px;font-family:arial"><strong>Dear  '.ucwords($name).'</strong>,</p><p style="font-size:12px;font-family:arial">Thank you for contacting Infosec Train.</p> 
<p style="font-size:12px;font-family:arial">Our Training Advisor will get back to you in next two business days, for confirmation of your preferred training schedule. </p> <p style="font-size:12px;font-family:arial">Please add our email Id (sales@infosectrain.com) to your contacts. This will help us to reach you and avoid landing in the junk folder due to over cautious filters. </p>

<p style="text-align:left;font-size:12px;font-family:arial">View our Blog: <a style="color:#ff4444" href="https://www.infosectrain.com/blog/new-ccsp-vs-the-old-ccsp/" target="_blank">New CCSP vs the old CCSP</a></p>
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



function curl_trip($url, $jdata="") {
    // Assigning cURL options to an array
    $options = Array(
      CURLOPT_RETURNTRANSFER => TRUE,  // Setting cURL's option to return the webpage data
      CURLOPT_FOLLOWLOCATION => TRUE,  // Setting cURL to follow 'location' HTTP headers
      CURLOPT_AUTOREFERER => TRUE, // Automatically set the referer where following 'location' HTTP headers
      CURLOPT_CONNECTTIMEOUT => 180,   // Setting the amount of time (in seconds) before the request times out
      CURLOPT_TIMEOUT => 180,  // Setting the maximum amount of time for cURL to execute queries
      CURLOPT_MAXREDIRS => 10, // Setting the maximum number of redirections to follow
      CURLOPT_USERAGENT => "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8",  // Setting the useragent
      CURLOPT_URL => $url, // Setting cURL's URL option with the $url variable passed into the function
    );
     
    $ch = curl_init();  // Initialising cURL
    curl_setopt_array($ch, $options);   // Setting cURL's options using the previously assigned array data in $options
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));   
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    
  $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable

  /*  if(curl_exec($ch) === false)
  {
    echo 'Curl error:--- ' . curl_error($ch);
    echo "<br><br>";
    //include("error_mail.php");
  }*/
    curl_close($ch);    // Closing cURL
    return $data;   // Returning the data from the function
    
  }

  
 
 $data = array(
    'site_name' => 'landing-page', 
    'page_type' => 'ccsp', 
    'name' => $me_name,
    'email' => $me_email, 
    'phone' => $me_phone, 
    'subject' => $email_subject,
    'message' => $email_body
);
$payload = json_encode(array("result_email" => $data)); 
$apiurl='https://www.infosectrain.com/my-admin/send_email.php';
$first_data=curl_trip($apiurl,$payload);



$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtpout.secureserver.net";
//$mail->Host = "smtp.gmail.com";
//$mail->Port = 465; // or 587 
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "info@infosectrain.com";
$mail->Password = 'Info$info#2018';
$mail->SetFrom("info@infosectrain.com", 'InfoSecTrain');
$mail->Subject = $email_subject;
$mail->Body = $email_body; 
$mail->AddAddress("sales@infosectrain.com");
$mail->AddCC("prabh@infosectrain.com");
$mail->AddReplyTo($me_email, ucwords($name));
  
if(!$mail->Send()) {

  echo "Mailer Error: " . $mail->ErrorInfo;

}else {
 

 $mail2 = new PHPMailer(); // create a new object
$mail2->IsSMTP(); // enable SMTP
$mail2->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail2->SMTPAuth = true; // authentication enabled
//$mail2->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail2->Host = "smtpout.secureserver.net";
//$mail2->Host = "smtp.gmail.com";
//$mail2->Port = 465; // or 587 
$mail2->Port = 587; // or 587
$mail2->IsHTML(true);
$mail2->Username = "info@infosectrain.com";
$mail2->Password = 'Info$info#2018';
$mail2->SetFrom("info@infosectrain.com", 'InfoSecTrain');
$mail2->Subject = $user_subject;
$mail2->Body = $user_body; 
$mail2->AddAddress($me_email); 
$mail2->AddReplyTo("sales@infosectrain.com", 'InfoSecTrain');

if(!$mail2->Send()) {

  echo "Mailer Error: " . $mail2->ErrorInfo;

}else {

 echo 'Sucess';
}


   } 



//done. redirect to thank-you page.
 


 
} 
  
?>