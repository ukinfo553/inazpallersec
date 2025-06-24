<?php 
 
if(isset($_POST['me_submited']))

{

extract($_POST);
 
$me_name = trim($me_name);
$me_email = trim($me_email);
$me_phone = trim($me_phone);
$me_country = trim($me_country);
$me_message = trim($me_message);
 
 
if($me_email){ 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();

$date->setTimezone($timezone );

 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' );
  
     require_once('include/class.phpmailer.php');

 $body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">
<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr>
<tr  ><td ><b>Date And Time: </b>'.$datetime.'</td></tr>
<tr><td ><b>Name: </b>'.$me_name.'</td></tr>
<tr><td><b> Email :</b> '.$me_email.'</td></tr>
<tr><td><b> Mobile :</b> '.$me_phone.'</td></tr> 
<tr><td><b> Country   :</b> '.$me_country.'</td></tr>    
<tr><td><b> Message   :</b> '.$me_message.'</td></tr>  
</table>';
 
                
                    $mail = new PHPMailer();
                    $mail->AddReplyTo($me_email,$me_name);           
 
                    $mail->AddAddress("infomahendra2009@gmail.com", $me_name);
                    $mail->AddAddress("sales@infosectrain.com", $me_name);
                    $mail->SetFrom($me_email,$me_name);
                    $mail->Subject= "Enquiry From EC-COUNCIL CEH V10". $me_name;
                    $mail->MsgHTML($body);  
if(!$mail->Send()) {

  echo "Mailer Error: " . $mail->ErrorInfo;

}else {
 
 echo 'Sucess';
   } 
   
 
   

} 

  } 
  
?>