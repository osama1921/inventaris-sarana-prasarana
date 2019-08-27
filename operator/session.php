<?php
session_start();
include "i.php";
$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
if($hostname=="osama-PC"&&$macp=="02-BB-AE-16-00-82"){

}else{
	header("location:000.html");

}if (!isset($_SESSION['idpetugas'])) {
		echo"<script>
  window.alert('Anda Belum Login Silahkan Login Terlebih Dahulu...');
  window.location='index.php';
  </script>";
  
}
?>