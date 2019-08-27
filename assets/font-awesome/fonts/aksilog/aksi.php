<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("sekolahku");
if (isset($_POST['login'])) {
$user=$_POST['username'];
$pass=$_POST['password'];
$user = strip_tags(mysql_real_escape_string(trim($user)));
$pass = strip_tags(mysql_real_escape_string(trim($pass)));

$query = "SELECT * FROM `login` WHERE username='$user'";
$tbl = mysql_query($query);
if(mysql_num_rows($tbl)>0)	{
	$row = mysql_fetch_array($tbl);
	$password_hash = $row['Password'];
	if(password_verify($pass,$password_hash)) {
		session_start();
		$_SESSION['username']=$_POST['username'];
		$_SESSION['msg']="Login Suceesfull";
		header("location:../../../../index.php");
	}else{
		$_SESSION['msg']="Login Gagal";
		header("location:../../../../login.php");
	}

	
}else{

	$_SESSION['msg']="Login gagal";
		header("location:../../../../login.php");
}
}

?>