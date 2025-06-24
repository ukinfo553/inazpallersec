<?php 

require_once('../../assets/email/email_config.php');
if(isset($_POST['me_submited']))

{ 
extract($_POST);

$name = trim($me_name);
$me_email = trim($me_email);
$me_phone = trim($me_phone); 
$me_message = trim($me_message);  
  
$me_others  = trim($me_others); 

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
 
$email_subject = "New Enquiry from RedTeam Expert Landing Page"; 
$user_subject = "Thank you for your enquiry! We'll be in touch soon."; 
 
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
 $datetime=$date->format( 'H:i:s A  /  D, M jS, Y' ); 

//-------tabir-

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


} 
$details = get_id();
$ipadd=isset($details->ip)?$details->ip:"";
$city=isset($details->city)?$details->city:"";
$region=isset($details->region)?$details->region:"";
$country=isset($details->country)?$details->country:"";

//---------Tabir

//$details    =   ip_details($_SERVER["REMOTE_ADDR"]);
//$me_country=$details->country; 


 $email_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">
<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr>
<tr  ><td ><b>You have received a new message from the user '.$name.'</td></tr>
<tr  ><td ><b>Date And Time: </b>'.$datetime.'</td></tr>
<tr><td ><b>Name: </b>'.$me_name.'</td></tr>
<tr><td><b> Email :</b> '.$me_email.'</td></tr>
<tr><td><b> Mobile :</b> '.$me_phone.'</td></tr> 
<tr><td><b> Request For :</b> '.$me_others.'</td></tr>
<tr><td><b> Page URL :</b> '.$me_pageurl.'</td></tr>        
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
					<br />Our Training Advisor will get back to you in shortly, for confirmation of your preferred training schedule.<br />
				     Please add our email Id (sales@infosectrain.com) to your contacts. This will help us to reach you and avoid landing in the junk folder due to over cautious filters. </p>
				
				    </td>
				</tr>				
				
				<tr>
			        <td style="padding-left:24px;">		<br />		    </td>
				</tr>
				
				<tr>
			        <td style="padding-left:24px;">
					
				<a href="https://www.infosectrain.com/courses/" target="_blank" style=" background:#FF1046; padding:10px 20px; color:#FFFFFF; text-decoration:none;"><strong>Browse courses</strong></a>
				
				    </td>
				</tr>
				
				
				<tr>
			        <td style="color: #414547; padding-left:24px;">
					<br />	<br />	
				
				
				    </td>
				</tr>
				
				
				<tr>
			        <td style="color: #414547; padding-left:24px;">
					
				  <h2>Benefits with us</h2>
				
				    </td>
				</tr>
				
				<tr>
			        <td style="color: #414547; padding-left:24px; padding-right:24px;text-align:center; font-size:15px;">
						<table width="100%" border="0" align="center">
						  <tr>
							<td>
							<img src="https://www.infosectrain.com/wp-content/uploads/mail_images/mail_group80.jpg" style=" width:40px;" />
							<p>Certified <br />& Experienced Instructors</p>
							</td>
							<td><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/mail_group81.jpg" style=" width:40px;" />
							<p>Post Training<br /> Completion</p>
							</td>
							<td><img src="https://www.infosectrain.com/wp-content/uploads/mail_images/mail_group83.jpg" style=" width:40px;" />
							<p>Access to <br />the Recorded Sessions</p>
							</td>
						  </tr>
						</table>
					</td>
				</tr>
				
				
				<tr>
			        <td style="color: #414547; padding-left:24px;">
					
				 <br />	<br />	
				
				    </td>
				</tr>
				
				
				<tr>
			        <td style="color: #414547; padding-left:24px;">
					<br>

				<h2>View our Blog:</h2>
				
				    </td>
				</tr>
				
				<tr>
			        <td style="color: #414547; padding-left:24px;padding-right:24px;text-align:left; font-size:14px;">
					
						<table width="100%" border="0" bordercolor="#CCCCCC" align="left">
						  <tr style="padding-top:20px;">
							<td>
							<ul><li><a href="https://www.infosectrain.com/blog/top-red-team-expert-interview-questions-and-answer/" target="_blank">Top Red Team Expert Interview Questions and Answer</a></li>
<li><a  href="https://www.infosectrain.com/blog/top-10-tools-that-you-need-as-a-red-team-ethical-hacker//" target="_blank">Top 10 Tools That You Need as a Red Team Expert</a></li>
<li><a  href="https://www.infosectrain.com/blog/how-does-an-sql-injection-attack-work-in-depth-analysis-scenario-mitigation-process/" target="_blank">How Does an SQL Injection Attack Work?</a></li>
<li><a href="https://www.infosectrain.com/blog/infosectrain-soc-analyst-expert-training/">Infosec Train’s SOC Analyst Training Program </a> </li>
</ul>

							</td>
						  </tr>					  
                      </table>
				</td>
				</tr>
				
				<tr>
			        <td style="color: #414547; padding-left:24px;">
					<br>
				<h2>Get in Touch on Youtube:</h2>
				
				    </td>
				</tr>
				
				<tr>
			        <td style="color: #414547; padding-left:24px;padding-right:24px;text-align:left; font-size:14px;">
					
						<table width="100%" border="0" bordercolor="#CCCCCC" align="left">
						  <tr style="padding-top:20px;">
							<td>
							<ul>
							  <li><a href="https://www.youtube.com/watch?v=2d4KCAPyDAs">Red Team Expert Online Training Course </a> </li>
  <li><a href="https://www.youtube.com/watch?v=xQC0M6jqtxI">What is Red Teaming?</a> </li>
  <li><a href="https://www.youtube.com/watch?v=GzqpoarzQiA">Incident Response in SOC</a> </li>
  <li><a href="https://www.youtube.com/watch?v=0iIum-jB2VM">SIEM and SOC Careers</a> </li>
</ul>
							</td>
						  </tr>					  
                      </table>
				</td>
				</tr>
				
				<tr>
			        <td style="color: #414547; padding-left:24px;padding-right:24px;text-align:left; font-size:14px;"><br>

				<p style="text-align:left;font-size:12px;font-family:arial">What People Are Saying About InfosecTrain: <a style="color:#ff4444" href="https://www.infosectrain.com/customers-review/" target="_blank">Click Here</a></p>
				</td>
				</tr>
				<tr>
			        <td style="color: #414547; padding-left:24px;padding-right:24px;text-align:left; font-size:14px;">
					
						<table width="100%" border="0" bordercolor="#CCCCCC" align="left">
						  
						  
					
				<tr>
			        <td style="color: #414547; padding-left:24px;">
					
				<br />
				
				    </td>
				</tr>
				<tr>
			        <td style="">
				<a href="https://www.infosectrain.com/events/" target="_blank">	
				<img src="https://www.infosectrain.com/wp-content/uploads/mail_images/nowupcoming.jpg" style=" width:100%;" />
				</a>
				    </td>
				</tr>
				<tr>
			        <td style="color: #414547; text-align:center; border-bottom:#cccccc solid 1px;">
					<table width="100%" border="0" bordercolor="#CCCCCC" align="center">
						  <tr>
							<td>
				               <p><a href="https://www.infosectrain.com/instructors/" target="_blank">Become an instructor</a> | <a href="https://www.infosectrain.com/courses/" target="_blank">	All courses</a> | <a href="https://www.infosectrain.com/blog/" target="_blank">	Latest articles</a></p>
							   <br /><br /><br />
							  
							   	<p style="font-size:12px;font-family:arial; text-align:left;"><strong>Best Regards</strong></p>
      							<p style="font-size:12px;font-family:arial; text-align:left;">Team Infosec Train</p>
							    <p>
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



 
 
 $data = array(
    'site_name' => 'lp', 
    'page_type' => 'RED TEAM', 
    'name' => $me_name,
    'email' => $me_email, 
    'phone' => $me_phone, 
    'subject' => $email_subject,
    'message' => $email_body,
	'ip' => $ipadd,
    'city' => $city,
    'region' => $region,
    'country' => $country,
	'url' => $me_pageurl
);
$payload = json_encode(array("result_email" => $data)); 
$apiurl='https://www.infosectrain.com/my-admin/send_email.php';
$first_data=curl_trip($apiurl,$payload);



$email=send_email($email_subject,$email_body,$me_name,$me_email); 
  
if($email=='Success') { 
echo send_email_user($user_subject,$user_body,$me_email);       
}else {
 echo $email;
 
   }  
//done. redirect to thank-you page.
 


 
} 
  
?>