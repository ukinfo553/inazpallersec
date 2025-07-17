<?php
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}?>
<?php
//$mail_username = "sales@infosectrain.com";
//$mail_Password = 'WbGm=2019##!';

//$mail2_username = "sales@infosectrain.com";
//$mail2_password = 'WbGm=2019##!';

$mail_username = "noreply@infosectrain.com";
$mail_Password = 'pwnv estq xjie xbhu';

$mail2_username = "noreply@infosectrain.com";
$mail2_password = 'pwnv estq xjie xbhu';

?>