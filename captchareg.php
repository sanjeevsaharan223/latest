<?php
session_start();
$random_alpha = md5(rand());
$captcha_registercode = substr($random_alpha, 0, 6);
$_SESSION["captcha_registercode"] = $captcha_registercode;
$target_layer = imagecreatetruecolor(70,30);
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119);
imagefill($target_layer,0,0,$captcha_background);
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
imagestring($target_layer, 5, 5, 5, $captcha_registercode, $captcha_text_color);
header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>