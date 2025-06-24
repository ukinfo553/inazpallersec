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

//require_once('../phpmailer/class.phpmailer.php');
//-----New PHPMailer Open
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer68/src/Exception.php';
require '../phpmailer68/src/PHPMailer.php';
require '../phpmailer68/src/SMTP.php';
//-----New PHPMailer Close

//require_once('../../phpmailer/class.phpmailer.php');
if(isset($_POST['me_submited']))

{ 
extract($_POST);
  function ip_details($IPaddress) 
{
    $json       = file_get_contents("http://ipinfo.io/{$IPaddress}");
    $details    = json_decode($json);
    return $details;
}

$name = trim($me_name);
// $me_lname = trim($me_lname); 
$me_email = trim($me_email);
$me_phone = trim($me_phone);
$me_linkedin = trim($me_linkedin);
$me_message = trim($me_message);    
$me_others = $me_others;    
$me_pageurl = $me_pageurl; 


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
 
$email_subject = "SOC certification exam"; 
$user_subject = "Thank you for your enquiry! We'll be in touch soon."; 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
$datetime=$date->format( 'H:i:s A  /  D, M jS, Y' ); 
$details    =   ip_details($_SERVER["REMOTE_ADDR"]);
$me_country=$details->country; 
$ipUser=$_SERVER["REMOTE_ADDR"]; 
	
	function get_id(){
	$ip=$_SERVER['REMOTE_ADDR'];
		   		function url_get_contents ($Url) {
			if (!function_exists('curl_init')){ 
				die('CURL is not installed!');
			}
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $Url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$output = curl_exec($ch);
			curl_close($ch);
			return $output;
		    }
		$details = json_decode(url_get_contents("http://ipinfo.io/".$ip.""));
		
		return $details;
	//return $details = json_decode(file_get_contents("https://www.infosectrain.com/api/ip/".$ip.""));
	
	
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
<tr><td><b> Linkedin :</b> '.$me_linkedin.'</td></tr> 
<tr><td><b> Page URL :</b> '.$me_pageurl.'</td></tr>
<tr><td><b> Request For :</b> '.$me_others.'</td></tr> 
<tr><td><b> Country   :</b> '.$me_country.'</td></tr>  
<tr><td><b> Student IpAddress :</b> '.$ipadd.'</td></tr>  
<tr><td><b> City:</b> '.$city.'</td></tr> 
<tr><td><b> Region:</b> '.$region.'</td></tr> 
<tr><td><b> Country:</b> '.$country.'</td></tr>      
<tr><td><b> Mention your call time preference :</b> '.$me_message.'</td></tr>  
</table>';
 

$user_body = '<table   class="" role="presentation"  border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr >
      <td style="padding: 20px 0 30px 0; ">
       
	   <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style=" background:#F8F8F8; padding:56px;">
		  
	     <tr >
			<td >
			    <table align="left" border="0" cellpadding="0" cellspacing="0" width="593px" style=" background:#FFFFFF;">
		  
	            <tr>
			        <td >
					 <table align="left" border="0" cellpadding="0" cellspacing="0" width="593px" style=" border-bottom: 1px solid #cccccc;margin-bottom: 40px;">
					<tr>
			        <td >
					<img src="https://www.infosectrain.com/wp-content/uploads/mail_images/Intersection12x.png" style="height: 41px;" />
				     </td>
					 </tr>
					 </table>
				
				    </td>
				</tr>
				
				 <tr>
			        <td style="color: #414547; padding-left:24px;">
					
				<h1>Welcome to <br />the Infosec Train </h1>
				
				    </td>
				</tr>
				
				 <tr>
			        <td style="color: #414547; padding-left:24px; font-family:Arial, Helvetica, sans-serif; line-height: 1.5; font-size:16px;">
					<p><strong>Dear  '.ucwords($name).'</strong>,</p>,
					<p>Thank you for contacting Infosec Train.
					<br />We will get back to you soon</p>
				    				
				    </td>
				</tr>
				<tr>
			        <td style="color: #414547; text-align:center; border-bottom:#cccccc solid 1px;">
					<table width="100%" border="0" bordercolor="#CCCCCC" align="center">
						  <tr>
							<td>
							<br /><br />
							  
							   
							   IND: 1800-843-7890 (Toll Free)<br /> US: +1 657-722-11127  UK : +44 7451 208413  UAE: +971 564 23 6252
							   <br />
							   Email: sales@infosectrain.com | Website: www.infosectrain.com
							   <br>
							   <strong>Join us for our regular updates</strong>:<br>
		<a href="https://t.me/infosectrains" target="_blank">Telegram</a>  | <a href="https://www.youtube.com/c/InfosecTrain" target="_blank">Youtube</a> | <a href="https://www.linkedin.com/company/infosec-train/" target="_blank">linkedin</a>
							   </p>
							   	<br />
				           </td>
						  </tr>
						</table>
				    </td>
				</tr>
				
				<tr>
			        <td style="color: #414547; text-align:center;padding:24px;">
					<table width="100%" border="0">
					  <tr>
						<td align="center">
						<a href="https://www.facebook.com/Infosectrain/" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/facebook.png"/></a>&nbsp;<a href="https://www.youtube.com/c/InfosecTrain" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/youtube.png"/></a>&nbsp;<a href="https://twitter.com/Infosec_Train" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/twitter.png"/></a>&nbsp;<a href="https://www.instagram.com/infosectrain/" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/instagram.png"/></a>&nbsp;<a href="https://www.linkedin.com/company/infosec-train/" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/linkdin.png"/></a>&nbsp;<a href="https://t.me/infosectrains" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/telegram.png"/></a>
						&nbsp;</td>
						
					  </tr>
					</table>

					
					</td>
			    </tr>
				</table>
			</td >
		  </tr >
	
        </table>

      </td >
    </tr >
  </table>';


$mail = new PHPMailer(TRUE); // create a new object
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
$mail->AddAddress("saksham.kumar@infosectrain.com");

$mail->AddReplyTo($me_email, ucwords($name));  
if(!$mail->Send()) {

  echo "Mailer Error: " . $mail->ErrorInfo;

}else {
 

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