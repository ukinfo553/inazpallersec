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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer68/src/Exception.php';
require '../phpmailer68/src/PHPMailer.php';
require '../phpmailer68/src/SMTP.php';

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
$me_email = trim($me_email);
$me_phone = trim($me_phone); 
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
 
$email_subject = "CYBERSECURITY ORIENTATION PROGRAM"; 
$user_subject = "Thank you for registering CYBERSECURITY ORIENTATION PROGRAM @ 18 June (Sun) 9:30 To 11:30 PM EST"; 
 
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
			<table align="left" border="0" cellpadding="0" cellspacing="0" width="700px" style=" background:#FFFFFF;">
	  
			<tr>
				<td colspan="2" >
				 <table align="left" border="0" cellpadding="0" cellspacing="0" width="700px" style=" border-bottom: 1px solid #cccccc;margin-bottom: 40px;">
				<tr>
				<td >
				<img src="https://www.infosectrain.com/wp-content/uploads/mail_images/Intersection12x.png" style="height: 41px;" />						 </td>
				 </tr>
				 </table>						</td>
			</tr>
			
			 <tr>
				<td colspan="2" style="color: #232020; padding-left:24px; font-family:Roboto;">
				
			<h2>"'.$post_title.'"</h2>						</td>
			</tr>
			
			 <tr>
				<td style=" font-size:17px;letter-spacing: 0.54px; color: #232020; padding-left:24px; width:50%; font-family:Roboto;">
				<img src="https://www.infosectrain.com/wp-content/uploads/mail_images/eventmail_cal.png" style="" />&nbsp;'.$datess.'</td>
				<td style=" font-size:17px;letter-spacing: 0.54px; color: #232020; padding-left:24px; width:50%; font-family:Roboto;">
				<img src="https://www.infosectrain.com/wp-content/uploads/mail_images/eventmail_clock.png" style="" /> &nbsp;'.$timing.'
				</td>
			 </tr>
			 <tr>
				<td colspan="2" style=" letter-spacing: 0.84px;color: #FF1046;text-transform: uppercase;padding-left:24px;">
				<br>
				</td>
			</tr>
			 <tr>
				<td colspan="2" style=" font-family:Roboto;font-size:12px; letter-spacing: 0.84px;color: #FF1046;text-transform: uppercase;padding-left:24px;font-weight: 600;">SPEAKER</td>
			</tr>
			 <tr>
				<td colspan="2" style=" font-family:Roboto;font-size:15px; letter-spacing: 0.75px; color: #232020;padding-left:24px; font-weight:bold;">'.$events_speaker.'</td>
			</tr>
			 <tr>
				<td colspan="2" style="font-family:Roboto;font-size:12px; letter-spacing: 0.6px;color: #616161;padding-left:24px;">'.$events_speaker_detail.'</td>
			</tr>
					<tr>
				<td colspan="2" style=" letter-spacing: 0.84px;color: #FF1046;text-transform: uppercase;padding-left:24px;">
				<br><br><br>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="font-family:Roboto; font-size:12px; letter-spacing: 0.6px;color: #616161;padding-left:24px;">
				<a href="'.$wlink.'" target="_blank" style="background: #FF1046;color: #FFFFFF;font-size: 15px;text-decoration: navajowhite;padding: 12px 20px;">Join Webinar</a>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="font-family:Roboto; font-size:12px; letter-spacing: 0.6px;color: #616161;padding-left:24px;">
				<br>
				'.$webinar_link.'
				</td>
			</tr>
			<tr>
				<td colspan="2" style="font-family:Roboto; font-size:12px; letter-spacing: 0.6px;color: #616161;padding-left:24px;">
				'.$agenda_password.' 
				</td>
			</tr>
			                   
			 <tr>
			   <td colspan="2" style="">
				<br></td>
			</tr>
			
			<tr>
			   <td colspan="2" style="color: #414547; padding-left:24px; font-size:12px; font-family:Roboto;">
				
				<p><strong>'.$agenda_head.':</strong>   </p>
				<div style="font-size:12px; font-family:Roboto;">'.$agenda.'</div>
				</td>
			</tr>
			
			<tr>
				<td colspan="2" style="padding-left:24px;">		<br />		  
				<font color="#989898"  style="font-size:12px; font-family:Roboto;">
				*Disclaimer:* We strongly recommend to use your Personal Laptop and Personal Email-ID to access any sessions.</font>  </td>
			</tr>
		   
		   
			<tr>
				<td colspan="2" style=" font-family:Roboto; font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px;">Best Regards</td>
			</tr>
			 <tr>
				<td colspan="2" style=" font-family:Roboto; font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px;">
				Team InfosecTrain</td>
			</tr>
			<tr>
				<td colspan="2" style=" font-family:Roboto; font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px;">
				Email: sales@infosectrain.com </td>
			</tr>
			<tr>
				<td colspan="2" style=" font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px; font-family:Roboto;">
				Call:  US: +1 657-221-1127  </td>
			</tr>
			<tr>
				<td colspan="2" style=" font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px; font-family:Poppins;">Website: www.infosectrain.com</td>
			</tr>
			
			
			
			<tr>
				<td colspan="2" style="color: #414547; text-align:center;padding:24px;">
				<table width="100%" border="0">
				  <tr>
					<td align="center">
					<a href="https://www.facebook.com/Infosectrain/" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/facebook.png"/></a>&nbsp;<a href="https://www.youtube.com/c/InfosecTrain" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/youtube.png"/></a>&nbsp;<a href="https://twitter.com/Infosec_Train" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/twitter.png"/></a>&nbsp;<a href="https://www.instagram.com/infosectrain/" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/instagram.png"/></a>&nbsp;<a href="https://www.linkedin.com/company/infosec-train/" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/linkdin.png"/></a>&nbsp;<a href="https://t.me/infosectrains" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/telegram.png"/></a>
					&nbsp;</td>
				  </tr>
				</table>						</td>
			</tr>
			</table>
		</td >
	  </tr >

	</table>

  </td >
</tr >
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
 
 
//  $data = array(
//     'site_name' => 'lp', 
//     'page_type' => 'CCSK', 
//     'name' => $me_name,
//     'email' => $me_email, 
//     'phone' => $me_phone, 
//     'subject' => $email_subject,
//     'message' => $email_body,
//     'ip' => $ipadd,
//     'city' => $city,
//     'region' => $region,
//     'country' => $country,
// 	'url' => $me_pageurl
// );

$data = array(
		
	'site_name' => 'infosectrain', 
	
	'page_type' => 'events', 
	
	'name' => $me_name,
	
	'email' => $me_email, 
	
	'phone' => $me_phone, 
	
	'subject' => $email_subject,
	
	'url' => $me_pageurl,
	'message' => $email_body,
	'ip' => $ipadd,
	'city' => $city,
	'region' => $region,
	'country' => $country
	
	);
	
	
	
	

$payload = json_encode(array("result_email" => $data)); 
$apiurl='https://www.infosectrain.com/my-admin/send_email_event.php';
$first_data=curl_trip($apiurl,$payload);

$post_title ="Free Cyber Security Orientation Program For USA";
$wlink = "https://meet.goto.com/588454845";
$webinar_link='';
$webinar_link_all='';

if($wlink!='')
{
$webinar_link='<strong>Webinar link : <a href="'.$wlink.'">'.$wlink.'</a> </strong> <br>';

$webinar_link_all='Webinar link : '.$wlink.'';
}



$events_markstartdate =  "2023-06-19";
$events_markenddate   = "2023-06-29";
$events_markstarttime = "21:30:00";
$events_markendtime   = "23:30:00";
$events_speaker       = "Abhishek";
$events_speaker_detail   = "Information Security Consultant and Trainer";

$gdate_start = date("Ymd", strtotime($events_markstartdate));
$gdate_end = date("Ymd", strtotime($events_markenddate));
$gdate_start_t = str_replace(':', '', $events_markstarttime);
$gdate_end_t = str_replace(':', '', $events_markendtime);



					$user_body =		'<table   class="" role="presentation"  border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr >
					  <td style="padding: 20px 0 30px 0; ">
					   
					   <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style=" background:#F8F8F8; padding:56px;">
						  
						 <tr >
							<td >
								<table align="left" border="0" cellpadding="0" cellspacing="0" width="700px" style=" background:#FFFFFF;">
						  
								<tr>
									<td colspan="2" >
									 <table align="left" border="0" cellpadding="0" cellspacing="0" width="700px" style=" border-bottom: 1px solid #cccccc;margin-bottom: 40px;">
									<tr>
									<td >
									<img src="https://www.infosectrain.com/wp-content/uploads/mail_images/Intersection12x.png" style="height: 41px;" />						 </td>
									 </tr>
									 </table>						</td>
								</tr>
								
								 <tr>
									<td colspan="2" style="color: #232020; padding-left:24px; font-family:Roboto;">
									
								<h2>"'.$post_title.'"</h2>						</td>
								</tr>
								
								 <tr>
									<td style=" font-size:17px;letter-spacing: 0.54px; color: #232020; padding-left:24px; width:50%; font-family:Roboto;">
									<img src="https://www.infosectrain.com/wp-content/uploads/mail_images/eventmail_cal.png" style="" />&nbsp; 18,19,20,21,22,23,26,27,28,29  June </td>
									<td style=" font-size:17px;letter-spacing: 0.54px; color: #232020; padding-left:24px; width:50%; font-family:Roboto;">
									<img src="https://www.infosectrain.com/wp-content/uploads/mail_images/eventmail_clock.png" style="" /> &nbsp; 9:30 To 11:30 PM EST
									</td>
								 </tr>
								 <tr>
									<td colspan="2" style=" letter-spacing: 0.84px;color: #FF1046;text-transform: uppercase;padding-left:24px;">
									<br>
									</td>
								</tr>
								 <tr>
									<td colspan="2" style=" font-family:Roboto;font-size:12px; letter-spacing: 0.84px;color: #FF1046;text-transform: uppercase;padding-left:24px;font-weight: 600;">SPEAKER</td>
								</tr>
								 <tr>
									<td colspan="2" style=" font-family:Roboto;font-size:15px; letter-spacing: 0.75px; color: #232020;padding-left:24px; font-weight:bold;">'.$events_speaker.'</td>
								</tr>
								 <tr>
									<td colspan="2" style="font-family:Roboto;font-size:12px; letter-spacing: 0.6px;color: #616161;padding-left:24px;">'.$events_speaker_detail.'</td>
								</tr>
										<tr>
									<td colspan="2" style=" letter-spacing: 0.84px;color: #FF1046;text-transform: uppercase;padding-left:24px;">
									<br><br><br>
									</td>
								</tr>
								<tr>
									<td colspan="2" style="font-family:Roboto; font-size:12px; letter-spacing: 0.6px;color: #616161;padding-left:24px;">
									<a href="'.$wlink.'" target="_blank" style="background: #FF1046;color: #FFFFFF;font-size: 15px;text-decoration: navajowhite;padding: 12px 20px;">Join Webinar</a>
									</td>
								</tr>
								<tr>
									<td colspan="2" style="font-family:Roboto; font-size:12px; letter-spacing: 0.6px;color: #616161;padding-left:24px;">
									<br>
									'.$webinar_link.'
									</td>
								</tr>
								
								                   
								 <tr>
								   <td colspan="2" style="">
									<br></td>
								</tr>
								
								<tr>
								   <td colspan="2" style="color: #414547; padding-left:24px; font-size:12px; font-family:Roboto;">
									
									<p><strong>Agenda for the Webinar:</strong>   </p>
									<div style="font-size:12px; font-family:Roboto;">
										<p>Security Foundations: "Securing Your World: A Guide to Information Security"</p>
										<p>Kali Linux Essentials: "Command-Line of Penetration Testing"</p>
										<p>Ethical Hacking: "Unleashing Your Inner Hacker"</p>
										<p>Introduction to Threat Intelligence: & Outsmarting the Enemy</p>
										<p>Incident Response: "Responding to Cybersecurity Threats"</p>
										<p>Digital Forensics:- "Uncovering the Truth"</p>
										<p>Cryptography: "Protecting Your Data"</p>
									</div>
									</td>

									<tr>
								   <td colspan="2" style="color: #414547; padding-left:24px; font-size:12px; font-family:Roboto;">
									
									<p><strong>Why Attend Infosec Train Event:</strong>   </p>
									<div style="font-size:12px; font-family:Roboto;">
										<p>Get CPE Certificate</p>
										<p>Access to recorded sessions</p>
										<p>Learn from Industry Experts</p>
										<p>Post Training Support</p>
									</div>
									</td>

								</tr>
								
								<tr>
									<td colspan="2" style="padding-left:24px;">		<br />		  
									<font color="#989898"  style="font-size:12px; font-family:Roboto;">
									*Disclaimer:* We strongly recommend to use your Personal Laptop and Personal Email-ID to access any sessions.</font>  </td>
								</tr>
							   
							   
								<tr>
									<td colspan="2" style=" font-family:Roboto; font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px;">Best Regards</td>
								</tr>
								 <tr>
									<td colspan="2" style=" font-family:Roboto; font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px;">
									Team InfosecTrain</td>
								</tr>
								<tr>
									<td colspan="2" style=" font-family:Roboto; font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px;">
									Email: sales@infosectrain.com </td>
								</tr>
								<tr>
									<td colspan="2" style=" font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px; font-family:Roboto;">
									Call: IND:   US: +1 657-221-1127  </td>
								</tr>
								<tr>
									<td colspan="2" style=" font-size:12px; letter-spacing: 0.45px;color: #232020;padding-left:24px; font-family:Poppins;">Website: www.infosectrain.com</td>
								</tr>
								
								
								
								<tr>
									<td colspan="2" style="color: #414547; text-align:center;padding:24px;">
									<table width="100%" border="0">
									  <tr>
										<td align="center">
										<a href="https://www.facebook.com/Infosectrain/" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/facebook.png"/></a>&nbsp;<a href="https://www.youtube.com/c/InfosecTrain" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/youtube.png"/></a>&nbsp;<a href="https://twitter.com/Infosec_Train" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/twitter.png"/></a>&nbsp;<a href="https://www.instagram.com/infosectrain/" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/instagram.png"/></a>&nbsp;<a href="https://www.linkedin.com/company/infosec-train/" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/linkdin.png"/></a>&nbsp;<a href="https://t.me/infosectrains" target="_blank"><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/telegram.png"/></a>
										&nbsp;</td>
									  </tr>
									</table>						</td>
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
$mail->AddAddress("sales@infosectrain.com");
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