<?php
include "koneksi.php";
include "session.php";
if (isset($_POST['save'])) {
	$nama=$_POST['nama'];
	$kode=$_POST['kode'];
	$ket=$_POST['ket'];
	mysql_query("INSERT INTO ruang VALUES (null,'$nama','$kode','$ket')");
	echo"<script>
	window.alert('Data Berhasil DiTambahkan');
	window.location='ruang.php';
	</script>";
}else{
echo"<script>
	window.alert('Gagal');
	window.location='tambah_ruang.php';
	</script>";
}