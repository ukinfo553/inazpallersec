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

require '../phpmailer68/src/SMTP.php';

//------------ Master File For Mailter Conf.
include('../master_function.php');



if (isset($_POST['me_submited'])) {

    extract($_POST);

    function ip_details($IPaddress)
    {

        $json = file_get_contents("http://ipinfo.io/{$IPaddress}");

        $details = json_decode($json);

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



    $email_subject = "New Enquiry from AI-Powered Cybersecurity Landing Page";

    $user_subject = "Thank you for your enquiry! We'll be in touch soon.";



    $timezone = new DateTimeZone("Asia/Kolkata");

    $date = new DateTime();

    $date->setTimezone($timezone);

    $datetime = $date->format('H:i:s A  /  D, M jS, Y');

    $details = ip_details(getUserIpAddr());

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


    include("../email_include/email-include.php");
    $user_body = '
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
        <tr>
            <td style="padding: 20px 0 30px 0;" align="center">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="700px" style="background: #f8f8f8;">

                    ' . $email_header . '

                    <tr>
                        <td style="color: #414547; padding-left: 24px;padding-top:30px;font-family: Arial, Helvetica, sans-serif;font-size: 18px;">
                            <strong>Check Latest Blogs</strong>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-left: 24px; padding-right: 24px; text-align: left;font-family: Arial, Helvetica, sans-serif;">
                            <ul>                                <li><a style="font-size: 12px;text-decoration: none;color: #414547;" href="https://www.infosectrain.com/blog/iso-27001-lead-auditor-interview-questions/" target="_blank">ISO 27001 Lead Auditor Interview Questions for 2024</a></li>
                                <li><a style="font-size: 12px;text-decoration: none;color: #414547;" href="https://www.infosectrain.com/blog/benefits-of-iso-iec-27001-compliance-for-organizations/" target="_blank">Benefits of ISO/IEC 27001 Compliance for Organizations</a></li>
                                <li><a style="font-size: 12px;text-decoration: none;color: #414547;" href="https://www.infosectrain.com/blog/iso-27001-best-practices-to-secure-business-information/" target="_blank">ISO 27001: Best Practices to Secure Business Information</a></li>
                                <li><a style="font-size: 12px;text-decoration: none;color: #414547;" href="https://www.infosectrain.com/blog/audit-techniques-and-tools-for-iso-27001-lead-auditors/" target="_blank">Audit Techniques and Tools for ISO 27001 Lead Auditors</a></li>                          </ul>
                        </td>                    </tr>
                    <tr>                        <td style="color: #414547; padding-left: 24px;padding-top:10px;font-family: Arial, Helvetica, sans-serif;font-size: 18px;">
                            <strong>Our Recommended Courses and Certification</strong>                        </td>
                    </tr>                    <tr>
                        <td style="padding-left: 24px; padding-right: 24px; text-align: left;font-family: Arial, Helvetica, sans-serif;">                        <ul>
                            <li><a style="font-size: 12px;text-decoration: none;color: #414547;" https://www.infosectrain.com/courses/iso-iec-42001-lead-implementer-training/"  target="_blank"> ISO/IEC 42001 Lead Implementer Training and Certification</a> </li>                            <li><a style="font-size: 12px;text-decoration: none;color: #414547;" https://www.infosectrain.com/courses/aigp-training/"  target="_blank"> IAPP AIGP Certification Training</a> </li>
                            <li><a style="font-size: 12px;text-decoration: none;color: #414547;" https://www.infosectrain.com/courses/iso27001la/"  target="_blank"> ISO/IEC 27001:2022 Lead Auditor Online Training & Certification</a> </li>                            <li><a style="font-size: 12px;text-decoration: none;color: #414547;" https://www.infosectrain.com/courses/artificial-intelligence-ai-for-cyber-security-professionals-training/"  target="_blank"> AI-Powered Cybersecurity Training</a> </li>
                        </ul>                        </td>
                    </tr>
                    ' . $email_footer . '
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

        'page_type' => 'AI-Powered Cybersecurity',

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



?>