<?php 
 // Function to validate against any email injection attempts
 
require_once('phpmailer/class.phpmailer.php');
if(isset($_POST['me_email']))

{ 
extract($_POST);
 
$name = trim($me_name);
$me_email = trim($me_email);
$me_phone = trim($me_phone);
$me_company = trim($me_company);
$me_message = trim($me_message);
 

//Validate first
if(empty($name)||empty($me_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}
 
$email_subject = "New Enquiry from website"; 
 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' ); 
 
  
   $email_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">
<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr> 
<tr  ><td ><b>Date And Time: </b>'.$datetime.'</td></tr>
<tr><td ><b>Name: </b>'.$me_name.'</td></tr>
<tr><td><b> Email :</b> '.$me_email.'</td></tr>    
<tr><td><b> Company :</b> '.$me_company.'</td></tr>   
<tr><td><b> Here is the message:</b> '.$me_message.'</td></tr>  
</table>';
  
   

$mail = new PHPMailer();  
 
$mail->SetFrom("sales@intalio.com", 'Intalio');
$mail->Subject = $email_subject; 
 $mail->MsgHTML($email_body);  
$mail->AddAddress("rdsinghrana@gmail.com"); 
$mail->AddReplyTo($me_email, ucwords($name));
  
  

if(!$mail->Send()) {

  echo "Mailer Error: " . $mail->ErrorInfo;

}else {
 
 echo "<div class='alert-success p-2 rows'>Your Message have been successfully submitted.</div>";

   } 
 

//done. redirect to thank-you page.
 


 
} 
  
?>