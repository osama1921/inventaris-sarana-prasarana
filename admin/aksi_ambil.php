<?php
include "koneksi.php";
include "session.php";
$id=$_GET['id'];
date_default_timezone_set("asia/jakarta");
$tglharini=date("Y-m-d H-i-s");
mysql_query("UPDATE peminjaman SET status_peminjaman='Pinjam' WHERE id_peminjaman='$id'")or die(mysql_error());
echo"<script>
  window.alert('Inventaris Sudah Diterima Oleh Pegawai');
  window.location='kembali.php';
  </script>";
  ?>