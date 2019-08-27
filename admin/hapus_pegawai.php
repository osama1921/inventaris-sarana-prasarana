<?php 
include "koneksi.php";
include "session.php";
$id=$_GET['id'];
mysql_query("DELETE FROM pegawai WHERE id_pegawai='$id'");
echo"<script>
window.alert('Data Berhasil Di Hapus');
window.location='pegawai.php';
</script>";
?>