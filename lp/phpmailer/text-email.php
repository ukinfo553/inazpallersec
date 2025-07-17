<?php 
 
include('class.phpmailer.php');
 
 
 
$name ='Test Name';
$me_email ='test@gmail.com';
$me_phone ='888888888';
$me_country ='india';
$me_message ='Oh! Got it this is smtp email';

 
$email_subject = "New Enquiry from CEH Landing Page"; 
$user_subject = "Thank you for your enquiry! We'll be in touch soon."; 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' ); 
 $email_body = 'asdfsdf';
 
 

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587 465
$mail->IsHTML(true);
$mail->Username = "sales@infosectrain.com";
$mail->Password = "WbGm=2019##!";
$mail->SetFrom("sales@infosectrain.com","Infosec Train");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("infomahendra2009@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 
 


 


?>