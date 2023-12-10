<?php
include("../res/x5engine.php");
$nameList = array("dzp","dw7","xp2","cp8","mra","u58","74w","md5","3nk","elc");
$charList = array("D","5","8","J","5","2","Y","5","4","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
