<?php
include "koneksi.php";
include "session.php";
	$id=$_POST['id'];
if (isset($_POST['save'])) {
	$nama=$_POST['nama'];
	$kode=$_POST['kode'];
	$ket=$_POST['ket'];
	mysql_query("UPDATE ruang SET nama_ruang='$nama', kode_ruang='$kode', keterangan='$ket' WHERE id_ruang='$id'");
	echo"<script>
	window.alert('Data Berhasil DiUbah');
	window.location='ruang.php';
	</script>";
}else{
echo"<script>
	window.alert('Gagal');
	window.location='edit_ruang.php?id=".$id."';
	</script>";
}