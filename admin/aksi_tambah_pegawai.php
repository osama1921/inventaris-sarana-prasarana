<?php
include "koneksi.php";
include "session.php";
if (isset($_POST['save'])) {
	$id=$_POST['id'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$nama=$_POST['nama'];
	$nip=$_POST['nip'];
	$alt=$_POST['alt'];
	mysql_query("INSERT INTO pegawai VALUES ('$id','$nama','$nip','$alt','$user','$pass')");
	echo"<script>
	window.alert('Data Berhasil DiTambahkan');
	window.location='pegawai.php';
	</script>";
}else{
	echo"<script>
	window.alert('Gagal');
	window.location='pegawai.php';
	</script>";
}