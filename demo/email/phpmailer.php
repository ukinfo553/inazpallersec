<?php
 
include('phpmailer/class.phpmailer.php');
$name = 'mahendra';
$visitor_email = 'infomahendra2009@gmail.com';
 
 
$email_subject = "New Enquiry from  ";
 

 $email_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">
<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Enquiry  Information </b></td></tr>
<tr  ><td ><b>You have received a new message from the user '.$name.'</td></tr>
  
</table>';
 
 
  
    /* $mail = new PHPMailer();

              $mail->AddReplyTo($visitor_email, ucwords($name));            

                  $mail->AddAddress("infomahendra2009@gmail.com", $name); 

        $mail->SetFrom("sales@infosectrain.com", 'Infosec Train');

                  $mail->Subject= "  Enquiry ID ";

                  $mail->MsgHTML($email_body); 
*/


  $mail = new PHPMailer();
 $mail->AddReplyTo($visitor_email, ucwords($name));            
 $mail->AddAddress("infomahendra2009@gmail.com", $name); 
 $mail->SetFrom("sales@infosectrain.com", 'Infosec Train');
 $mail->Subject= $email_subject;
 $mail->MsgHTML($email_body); 

 

//$mail->AddAddress("sales@infosectrain.com");
 
 


 


 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else { echo 'sssssssssssssss';}
 

 
?> 