<?php
include "session.php";
include "koneksi.php";
$id=$_GET['id'];
mysql_query("DELETE FROM inventaris WHERE id_inventaris='$id'")or die(mysql_error());
echo"<script>
window.alert('Data Berhasil DiHapus');
window.location='inventaris.php';
</script>";
?>