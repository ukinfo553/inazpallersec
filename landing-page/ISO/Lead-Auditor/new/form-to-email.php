<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$visitor_country = $_POST['country'];
$message = $_POST['message'];
$headers= "MIME-VERSION: 1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'info@infosectrain.com';//<== update the email address
$email_subject = "New Enquiry from Landing Page";
$email_body = "You have received a new message from the user $name.\n".
    "Email: $visitor_email \n".
	"Phone: $visitor_phone \n".
	"Country: $visitor_country \n".
	"Here is the message: $message \n".
	"Landing page: ISO Lead Auditor".

$to = "sales@infosectrain.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Cc: prabh@infosectrain.com \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


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
   
?> 