<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer68/src/Exception.php';
require '../phpmailer68/src/PHPMailer.php';
require '../phpmailer68/src/SMTP.php';
?>
<?php
$mail_username = "sales@infosectrain.com";
$mail_Password = 'WbGm=2019##!';

$mail2_username = "sales@infosectrain.com";
$mail2_password = 'WbGm=2019##!';

$name ="ssss";
$email_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">

<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr>

<tr  ><td ><b>You have received a new message from the user '.$name.'</td></tr>

<tr  ><td ><b>Date And Time: </b>'.$name.'</td></tr>

<tr><td ><b>Name: </b>'.$name.'</td></tr>

<tr><td><b> Email :</b> '.$name.'</td></tr>

<tr><td><b> Mobile :</b> '.$name.'</td></tr>

<tr><td><b> Page URL :</b> '.$name.'</td></tr>

<tr><td><b> Request For :</b> '.$name.'</td></tr>

<tr><td><b> Country   :</b> '.$name.'</td></tr>


</table>';

$email_userto = "tabir.a@infosectrain.com";
$mail2 = new PHPMailer(TRUE); // create a new object
$mail2->IsSMTP(); // enable SMTP
$mail2->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail2->SMTPAuth = true; // authentication enabled
$mail2->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail2->Host = "smtp.gmail.com";
//$mail2->Host = "smtp.gmail.com";
//$mail2->Port = 465; // or 587 
$mail2->Port = 465; // or 587
$mail2->IsHTML(true);
$mail2->Username = "noreply@infosectrain.com";
$mail2->Password = 'pwnv estq xjie xbhu';
$mail2->SetFrom("noreply@infosectrain.com", 'Azpirantz');

//$mail2->AddAttachment($email_userattach);
$mail2->Subject ="Schedule A Free Call" ;
$mail2->Body = $email_body; 
$mail2->AddAddress($email_userto); 

if($mail2->Send()){
        $status = 'ok';
    }else{
	    $mailinfo = "Mailer Error: " . $mail2->ErrorInfo;
        $status = 'err';
    }


?>
