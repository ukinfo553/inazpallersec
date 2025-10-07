<?php

// Function to validate against any email injection attempts

function IsInjected($str)

{

    $injections = array(
        '(\n+)',

        '(\r+)',

        '(\t+)',

        '(%0A+)',

        '(%0D+)',

        '(%08+)',

        '(%09+)'

    );

    $inject = join('|', $injections);

    $inject = "/$inject/i";

    if (preg_match($inject, $str)) {

        return true;
    } else {

        return false;
    }
}





use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require '../phpmailer68/src/Exception.php';

require '../phpmailer68/src/PHPMailer.php';

require '../../phpmailer68/src/SMTP.php';

//------------ Master File For Mailter Conf.
include('../master_function.php');



if (isset($_POST['me_submited'])) {

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

    if (empty($name) || empty($me_email)) {

        echo "Name and email are mandatory!";

        exit;
    }



    if (IsInjected($me_email)) {

        echo "Bad email value!";

        exit;
    }



    $email_subject = "New Enquiry from DPDPA Practical Implementation Masterclass Page";

    $user_subject = "Ready to attend the DPDPA Practical Implementation Masterclass  Stay Tuned!";



    $timezone = new DateTimeZone("Asia/Kolkata");

    $date = new DateTime();

    $date->setTimezone($timezone);

    $datetime = $date->format('H:i:s A  /  D, M jS, Y');

    $details    =   ip_details(getUserIpAddr());

    $me_country = $details->country;

    $ipUser = getUserIpAddr();



    function get_id()
    {

        $ip = getUserIpAddr();

        function url_get_contents($Url)
        {

            if (!function_exists('curl_init')) {

                die('CURL is not installed!');
            }

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $Url);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $output = curl_exec($ch);

            curl_close($ch);

            return $output;
        }

        $details = json_decode(url_get_contents("http://ipinfo.io/" . $ip . ""));



        return $details;

        //return $details = json_decode(file_get_contents("https://www.infosectrain.com/api/ip/".$ip.""));





    }



    $details = get_id();

    $ipadd = isset($details->ip) ? $details->ip : "";

    $city = isset($details->city) ? $details->city : "";

    $region = isset($details->region) ? $details->region : "";

    $country = isset($details->country) ? $details->country : "";



    $email_body = '<table cellspacing="0" cellpadding="0" border="0" width="600" style="font:normal 13px Arial, Helvetica, sans-serif; border:#CCC 1px solid; padding:10px; background-color:#FFF; line-height:24px;">

<tr width="470" style="text-indent:20px;" align="center" ><td ><b>Student Information </b></td></tr>

<tr  ><td ><b>You have received a new message from the user ' . $name . '</td></tr>

<tr  ><td ><b>Date And Time: </b>' . $datetime . '</td></tr>

<tr><td ><b>Name: </b>' . $me_name . '</td></tr>

<tr><td><b> Email :</b> ' . $me_email . '</td></tr>

<tr><td><b> Mobile :</b> ' . $me_phone . '</td></tr>

<tr><td><b> Page URL :</b> ' . $me_pageurl . '</td></tr>

<tr><td><b> Request For :</b> ' . $me_others . '</td></tr>

<tr><td><b> Country   :</b> ' . $me_country . '</td></tr>

<tr><td><b> Student IpAddress :</b> ' . $ipadd . '</td></tr>

<tr><td><b> City:</b> ' . $city . '</td></tr>

<tr><td><b> Region:</b> ' . $region . '</td></tr>

<tr><td><b> Country:</b> ' . $country . '</td></tr>

<tr><td><b> Mention your call time preference :</b> ' . $me_message . '</td></tr>

</table>';


    include("email-include.php");
    $user_body = '
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" align="center" style="margin:0; padding:0; background:#F3F5F7;">
  <tr>
    <td align="center" style="padding:28px 12px;">
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="700" style="width:700px; max-width:700px; background:#ffffff; border:1px solid #E6E8EB;">
        <tr>
          <td height="6" style="background:#FF1046; line-height:6px; font-size:0;">&nbsp;</td>
        </tr>

        <!-- Header -->
        <tr>
          <td style="padding:24px;">
            <table role="presentation" width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" style="vertical-align:middle;">
                  <img src="https://www.infosectrain.com/wp-content/uploads/mail_images/Intersection12x.png" alt="InfosecTrain" height="40" style="display:block; border:0; height:40px;">
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- Title + Meta -->
        <tr>
          <td style="padding:0 24px;">
            <table role="presentation" width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td style="padding:0 0 8px 0; font-family:Arial, Helvetica, sans-serif; font-weight:700; font-size:24px; line-height:1.3; color:#111827;">
                  DPDPA Practical Implementation Masterclass
                </td>
              </tr>
              <tr>
                <td style="padding:0 0 12px 0; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.6; color:#374151;">
                  <img src="https://www.infosectrain.com/wp-content/uploads/mail_images/eventmail_cal.png" alt="" style="vertical-align:middle; border:0;">&nbsp;25th - 26th October
                  &nbsp;&nbsp;
                  <img src="https://www.infosectrain.com/wp-content/uploads/mail_images/eventmail_clock.png" alt="" style="vertical-align:middle; border:0;">&nbsp;7:00 PM - 11:00 PM (IST)
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- Speakers (2 profiles) -->
        <tr>
          <td style="padding:0 24px 16px 24px;">
            <table role="presentation" width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <!-- Speaker 1 -->
                <td width="50%" valign="top" style="padding:12px; text-align:center;">
                  <img src="https://www.infosectrain.com/wp-content/uploads/2025/10/kartikeya.png" alt="Speaker 1" width="80" height="80" style="display:block; margin:0 auto; border-radius:50%; border:0; width:80px; height:80px;">
                  <div style="font-family:Arial, Helvetica, sans-serif; font-weight:700; font-size:13px; color:#FF1046; letter-spacing:.08em; text-transform:uppercase; padding-top:8px;">Speaker</div>
                  <div style="font-family:Arial, Helvetica, sans-serif; font-weight:700; font-size:16px; color:#111827; padding-top:6px;">Kartikeya Raman</div>
<div style="font-family:Arial, Helvetica, sans-serif; font-weight:700; font-size:10px; color:#FF1046; letter-spacing:.08em; text-transform:uppercase; padding-top:8px;">20+ Years of Experience</div>
                  <div style="font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height:1.6; color:#4B5563; padding-top:4px;">Cybersecurity, AI Governance & Data Protection Expert | AIGP | CIPM | FIP | CIPPE | CDPSE</div>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- CTA -->
        <tr>
          <td align="center" style="padding:0 24px 12px 24px;">
            <!--[if mso]>
            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" arcsize="8%" stroke="f" fillcolor="#FF1046" style="height:42px; v-text-anchor:middle; width:200px;">
              <w:anchorlock/>
              <center style="color:#FFFFFF; font-family:Arial, sans-serif; font-size:15px; font-weight:bold;">Join Webinar</center>
            </v:roundrect>
            <![endif]-->
            <!--[if !mso]><!-- -->
            <a href="https://zoom.us/j/94299103714?pwd=bKO3FS7wHHyLCtiDEqbAbq3KWIzrxE.1" target="_blank"
               style="display:inline-block; background:#FF1046; color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-weight:700; font-size:15px; padding:12px 20px; border-radius:6px;">
              Join Webinar
            </a>
            <!--<![endif]-->
          </td>
        </tr>

        <!-- Webinar Link + Password -->
        <tr>
          <td style="padding:0 24px 24px 24px;">
            <table role="presentation" width="100%" border="0" cellpadding="0" cellspacing="0" style="background:#F3F4F6; border-radius:6px;">
              <tr>
                <td style="padding:12px 14px; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:1.6; color:#111827;">
                  <strong>Link:</strong> <a href="https://zoom.us/j/94299103714?pwd=bKO3FS7wHHyLCtiDEqbAbq3KWIzrxE.1" target="_blank" style="color:#FF1046; text-decoration:underline;">https://zoom.us/j/94299103714?pwd=bKO3FS7wHHyLCtiDEqbAbq3KWIzrxE.1</a><br>
                  <strong>Password:</strong> 286071
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- Add to Calendar -->
        <tr>
  <td style="padding:12px 24px;">
    <div style="font-family:Arial, Helvetica, sans-serif; font-weight:700; font-size:13px; color:#6B7280; letter-spacing:.06em;">
      ADD THE EVENT TO YOUR CALENDAR
    </div>
  </td>
</tr>
<tr>
  <td style="padding:0 24px 8px 24px;">
    <!-- Buttons row -->
    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td style="padding:6px 8px 0 0;">
          <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=DPDPA%20Practical%20Implementation%20Masterclass&details=Webinar%20link%3A%20https%3A%2F%2Fzoom.us%2Fj%2F94299103714%3Fpwd%3DbKO3FS7wHHyLCtiDEqbAbq3KWIzrxE.1%0APasscode%3A%20286071%0AEvent%20page%3A%20https%3A%2F%2Fwww.infosectrain.com%2Fpages%2Flp%2Fdpdpa-masterclass%2F&location=Online&dates=20251025T133000Z%2F20251025T173000Z"
             target="_blank"
             style="display:inline-block; background:#EBEBEB; color:#232020; font-family:Arial, Helvetica, sans-serif; font-size:14px; padding:8px 16px; border-radius:6px;">
            Google
          </a>
        </td>
        <td style="padding:6px 8px 0 0;">
          <a href="https://outlook.live.com/calendar/0/deeplink/compose?rru=addevent&subject=DPDPA%20Practical%20Implementation%20Masterclass&body=Webinar%20link%3A%20https%3A%2F%2Fzoom.us%2Fj%2F94299103714%3Fpwd%3DbKO3FS7wHHyLCtiDEqbAbq3KWIzrxE.1%0APasscode%3A%20286071%0AEvent%20page%3A%20https%3A%2F%2Fwww.infosectrain.com%2Fpages%2Flp%2Fdpdpa-masterclass%2F&location=Online&startdt=2025-10-25T19%3A00%3A00&enddt=2025-10-25T23%3A00%3A00"
             target="_blank"
             style="display:inline-block; background:#EBEBEB; color:#232020; font-family:Arial, Helvetica, sans-serif; font-size:14px; padding:8px 16px; border-radius:6px;">
            Outlook.com
          </a>
        </td>
        <td style="padding:6px 8px 0 0;">
          <a href="https://outlook.office.com/calendar/0/deeplink/compose?rru=addevent&subject=DPDPA%20Practical%20Implementation%20Masterclass&body=Webinar%20link%3A%20https%3A%2F%2Fzoom.us%2Fj%2F94299103714%3Fpwd%3DbKO3FS7wHHyLCtiDEqbAbq3KWIzrxE.1%0APasscode%3A%20286071%0AEvent%20page%3A%20https%3A%2F%2Fwww.infosectrain.com%2Fpages%2Flp%2Fdpdpa-masterclass%2F&location=Online&startdt=2025-10-25T19%3A00%3A00&enddt=2025-10-25T23%3A00%3A00"
             target="_blank"
             style="display:inline-block; background:#EBEBEB; color:#232020; font-family:Arial, Helvetica, sans-serif; font-size:14px; padding:8px 16px; border-radius:6px;">
            Office 365
          </a>
        </td>
        <td style="padding:6px 0 0 0;">
          <a href="https://calendar.yahoo.com/?v=60&title=DPDPA%20Practical%20Implementation%20Masterclass&desc=Webinar%20link%3A%20https%3A%2F%2Fzoom.us%2Fj%2F94299103714%3Fpwd%3DbKO3FS7wHHyLCtiDEqbAbq3KWIzrxE.1%0APasscode%3A%20286071%0AEvent%20page%3A%20https%3A%2F%2Fwww.infosectrain.com%2Fpages%2Flp%2Fdpdpa-masterclass%2F&in_loc=Online&st=20251025T190000&et=20251025T230000"
             target="_blank"
             style="display:inline-block; background:#EBEBEB; color:#232020; font-family:Arial, Helvetica, sans-serif; font-size:14px; padding:8px 16px; border-radius:6px;">
            Yahoo
          </a>
        </td>
      </tr>
    </table>
  </td>
</tr>

        <!-- Footer -->
        <tr>
          <td style="padding:16px 24px; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:1.6; color:#111827;">
            Best Regards,<br>Team InfosecTrain<br><br>
            Email: saksham.kumar@infosectrain.com<br>
            Call: IND: +91-7995115380<br>
            Website: www.infosectrain.com
          </td>
        </tr>

      </table>
    </td>
  </tr>
</table>
    ';

    function curl_trip($url, $fields_string = "")
    {

        $ua = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);



        curl_setopt($ch, CURLOPT_HEADER, true);



        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_USERAGENT, $ua);

        curl_setopt($ch, CURLOPT_COOKIE, 'NID=67=pdjIQN5CUKVn0bRgAlqitBk7WHVivLsbLcr7QOWMn35Pq03N1WMy6kxYBPORtaQUPQrfMK4Yo0vVz8tH97ejX3q7P2lNuPjTOhwqaI2bXCgPGSDKkdFoiYIqXubR0cTJ48hIAaKQqiQi_lpoe6edhMglvOO9ynw; PREF=ID=52aa671013493765:U=0cfb5c96530d04e3:FF=0:LD=en:TM=1370266105:LM=1370341612:GM=1:S=Kcc6KUnZwWfy3cOl; OTZ=1800625_34_34__34_; S=talkgadget=38GaRzFbruDPtFjrghEtRw; SID=DQAAALoAAADHyIbtG3J_u2hwNi4N6UQWgXlwOAQL58VRB_0xQYbDiL2HA5zvefboor5YVmHc8Zt5lcA0LCd2Riv4WsW53ZbNCv8Qu_THhIvtRgdEZfgk26LrKmObye1wU62jESQoNdbapFAfEH_IGHSIA0ZKsZrHiWLGVpujKyUvHHGsZc_XZm4Z4tb2bbYWWYAv02mw2njnf4jiKP2QTxnlnKFK77UvWn4FFcahe-XTk8Jlqblu66AlkTGMZpU0BDlYMValdnU; HSID=A6VT_ZJ0ZSm8NTdFf; SSID=A9_PWUXbZLazoEskE; APISID=RSS_BK5QSEmzBxlS/ApSt2fMy1g36vrYvk; SAPISID=ZIMOP9lJ_E8SLdkL/A32W20hPpwgd5Kg1J');



        curl_setopt($ch, CURLOPT_AUTOREFERER, true);

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        curl_setopt($ch, CURLOPT_MAXREDIRS, 20);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);



        $result = curl_exec($ch);

        $last = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

        curl_close($ch);

        return array($result, $last);
    }





    $data = array(

        'site_name' => 'lp',

        'page_type' => 'DPDPA Practical Implementation Masterclass',

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

    $apiurl = 'https://www.infosectrain.com/my-admin/send_email.php';

    $first_data = curl_trip($apiurl, $payload);







    /*$mail = new PHPMailer(); // create a new object

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

$mail->AddReplyTo($me_email, ucwords($name));  */





    $mail = new PHPMailer(TRUE); // create a new object

    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPAuth = true; // authentication enabled

    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

    $mail->Host = "smtp.gmail.com";

    //$mail->Host = "smtp.gmail.com";

    //$mail->Port = 465; // or 587

    $mail->Port = 465; // or 587

    $mail->IsHTML(true);

    $mail->Username = $mail_username;

    $mail->Password = $mail_Password;

    $mail->SetFrom("sales@infosectrain.com", 'Infosec Train');

    $mail->Subject = $email_subject;

    $mail->Body = $email_body;

    $mail->AddAddress("sales@infosectrain.com");

    //$mail->AddCC("prabh@infosectrain.com");

    $mail->AddReplyTo($me_email, ucwords($name));







    if (!$mail->Send()) {



        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {





        /* $mail2 = new PHPMailer(); // create a new object

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

$mail2->AddReplyTo("sales@infosectrain.com", 'Infosec Train');*/







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

        $mail2->Username = $mail2_username;

        $mail2->Password = $mail2_password;

        $mail2->SetFrom("sales@infosectrain.com", 'Infosec Train');

        $mail2->Subject = $user_subject;

        $mail2->Body = $user_body;

        $mail2->AddAddress($me_email);

        $mail2->AddReplyTo("sales@infosectrain.com", 'Infosec Train');







        if (!$mail2->Send()) {



            echo "Mailer Error: " . $mail2->ErrorInfo;
        } else {



            echo 'Sucess';
        }
    }







    //done. redirect to thank-you page.









}
