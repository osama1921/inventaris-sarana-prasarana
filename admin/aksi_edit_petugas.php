<?php
include "koneksi.php";
include "session.php";
if (isset($_POST['save'])) {
	$id=$_POST['id'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$nama=$_POST['nama'];
	$level=$_POST['level'];
	mysql_query("UPDATE petugas SET username='$user', password='$pass', nama_petugas='$nama', level='$level' WHERE id_petugas='$id'");
	echo"<script>
	window.alert('Data Berhasil DiUbah');
	window.location='petugas.php';
	</script>";
}else{
	echo"<script>
	window.alert('Gagal');
	window.location='Petugas.php';
	</script>";
}