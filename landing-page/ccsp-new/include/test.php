<?php 
  
$me_name ="mahendra";
$me_email ="mahendra@gmail.com";
$me_phone ="3434";
$me_country ="India";
$me_message ="asdfsd";
 
  
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();

$date->setTimezone($timezone );

 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' );
  
 

 $body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">
<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr>
<tr  ><td ><b>Date And Time: </b>'.$datetime.'</td></tr>
<tr><td ><b>Name: </b>'.$me_name.'</td></tr>
<tr><td><b> Email :</b> '.$me_email.'</td></tr>
<tr><td><b> Mobile :</b> '.$me_phone.'</td></tr> 
<tr><td><b> Country   :</b> '.$me_country.'</td></tr>    
<tr><td><b> Message   :</b> '.$me_message.'</td></tr>  
</table>';
 
                  require_once(dirname(__FILE__).'/include/class.phpmailer.php');


$mail = new PHPMailer(); // create a new object
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  //$mail->Host = "mail.infosectrain.com";
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587

  $mail->Port = 587; // or 587
  $mail->IsHTML(true);
  $mail->Username = "infomahendra2009@gmail.com";
  $mail->Password = "Ranjumahendra";
  $mail->SetFrom("info@infosectrain.com");
  $mail->Subject = "Enquiry From EC-COUNCIL CEH V10". $me_name;
  $mail->Body = $body; 
  $mail->AddAddress("infomahendra2009@gmail.com");
  
 /* mail.infosectrain.com
$mail->Username = 'info@infosectrain.com';
$mail->Password = 'Pa$$w0rd';      sales@infosectrain.com       
*/


  
if(!$mail->Send()) {

  echo "Mailer Error: " . $mail->ErrorInfo;

}else {
 
 echo 'Sucess';
   } 
   
 
   


  
?>