<?php
include "koneksi.php";
include "session.php";
$id=$_GET['id'];
mysql_query("DELETE FROM petugas WHERE id_petugas='$id'");
echo"<script>
	window.alert('Data Berhasil diHapus');
	window.location='petugas.php';
	</script>";
?>