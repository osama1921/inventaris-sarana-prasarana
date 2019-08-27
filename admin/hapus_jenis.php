<?php
include "koneksi.php";
include "session.php";
$id=$_GET['id'];
mysql_query("DELETE FROM jenis WHERE id_jenis='$id'");
	echo"<script>
	window.alert('Data Berhasil Di Hapus');
	window.location='jenis.php';
	</script>";
	?>