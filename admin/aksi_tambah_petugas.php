<?php
include "koneksi.php";
include "session.php";
if (isset($_POST['save'])) {
	$id=$_POST['id'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$nama=$_POST['nama'];
	$level=$_POST['level'];
	mysql_query("INSERT INTO petugas VALUES ('$id','$user','$pass','$nama','$level')");
	echo"<script>
	window.alert('Data Berhasil DITambahkan');
	window.location='petugas.php';
	</script>";
}else{
	echo"<script>
	window.alert('Gagal');
	window.location='Petugas.php';
	</script>";
}