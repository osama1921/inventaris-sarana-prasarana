<?php
include "koneksi.php";
include "session.php";
if (isset($_POST['save'])) {
	$nama=$_POST['nama'];
	$kode=$_POST['kode'];
	$ket=$_POST['ket'];
	mysql_query("INSERT INTO jenis VALUES (null,'$nama','$kode','$ket')");
	echo"<script>
	window.alert('Data Berhasil Ditambahkan');
	window.location='jenis.php';
	</script>";
}else{
	header("location:tambah_jenis.php");
}