<?php
include("../res/x5engine.php");
$nameList = array("tsm","4n4","r58","y8k","hcs","enf","nxh","ypm","ykd","knl");
$charList = array("7","D","Y","G","Y","A","P","U","M","4");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
