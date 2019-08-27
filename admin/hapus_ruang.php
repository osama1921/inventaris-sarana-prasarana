<?php
include "koneksi.php";
include "session.php";
$id=$_GET['id'];
mysql_query("DELETE FROM ruang WHERE id_ruang='$id'");
	echo"<script>
	window.alert('Data Berhasil Di Hapus');
	window.location='ruang.php';
	</script>";
	?>