<?php 
session_start();   
$refferer=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";	
$requesturl=isset($_SERVER['REQUEST_URI'])?'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']:"";	
//define("BASE_URL", "https://localhost/infosectrain/lp/cciso-certification/");
define("BASE_URL", "https://www.infosectrain.com/pages/lp/cciso-certification/");

 function isMobile() {
 //mobi
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]); 
}

 
?>
