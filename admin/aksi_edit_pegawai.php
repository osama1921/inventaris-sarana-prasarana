<?php
include "koneksi.php";
$id=$_POST['id'];
include "session.php";
if (isset($_POST['save'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$nama=$_POST['nama'];
	$nip=$_POST['nip'];
	$alt=$_POST['alt'];
	mysql_query("UPDATE pegawai SET nip='$nip', nama_pegawai='$nama', alamat='$alt', username='$user', password='$pass' WHERE id_pegawai='$id'");
	echo"<script>
	window.alert('Data Berhasil DiUbah');
	window.location='pegawai.php';
	</script>";
}else{
	echo"<script>
	window.alert('Gagal');
	window.location='edit_pegawai.php?id=".$id."';
	</script>";
}