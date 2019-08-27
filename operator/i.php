<?php


ob_start();

system('ipconfig /all'); 

$mycom=ob_get_contents(); // Capture the output into a variable

ob_clean(); 

$findme = "Physical";

$pos = strpos($mycom, $findme);

$macp=substr($mycom,($pos+36),17);

// date_default_timezone_set('Asia/Jakarta');
// $jam=date('H:i');
// echo $jam;
?>