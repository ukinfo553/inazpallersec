<?php
session_start();
$refferer=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";
$requesturl=isset($_SERVER['REQUEST_URI'])?'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']:"";
define("BASE_URL", "https://www.infosectrain.com/pages/lp/practical-devsecops-training/");
//define("BASE_URL", "http://localhost/infosectrain.com/pages/lp/cissp-training-dubai/");
define("MINFILE", ".min"); //.min

 function isMobile() {
 //mobi
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


?>
