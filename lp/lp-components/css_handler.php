<?php
// Send CSS header
header("Content-Type: text/css");


// Your CSS goes here (NO <style> tags)
?>
.faq-content ul li{
display: block;
margin: 0;
padding: 0 0 8px 28px;
position: relative;
}
.faq-content ul li::before{
content: url('https://www.infosectrain.com/wp-content/themes/Divi/assets/images/new-course/shield-check.svg');
position: absolute;
left: 0;
top: 2px;
width: 20px;
height: 20px;
}
.faq-content ul>li>ul {
    margin-left: 0;
}
.faq-content ul li ul li::before {
    content: url(https://www.infosectrain.com/wp-content/themes/Divi/assets/images/new-course/2-check.svg);
}
.faq-content table{
    border-spacing: 0;
}
.faq-content table tr td{
    padding: 8px 8px;
    border: 1px solid #d9d9d9;
    background: #ffffff;
}