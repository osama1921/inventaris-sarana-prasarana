<?php
include "koneksi.php";
include "session.php";
$id=$_GET['id'];
date_default_timezone_set("asia/jakarta");
$tglharini=date("Y-m-d H-i-s");
mysql_query("UPDATE peminjaman SET tanggal_kembali='$tglharini', status_peminjaman='Kembali' WHERE id_peminjaman='$id'")or die(mysql_error());
 $datadetail=mysql_fetch_array(mysql_query("SELECT * FROM detail_pinjam WHERE id_peminjaman='$id'"));
$id_inventaris=$datadetail['id_inventaris'];
$datainven=mysql_fetch_array(mysql_query("SELECT * FROM inventaris WHERE id_inventaris='$id_inventaris'"));
$jmllama=$datainven['jumlah'];
$jml=$datadetail['jumlah'];
$total=$jmllama+$jml;
mysql_query("UPDATE inventaris SET jumlah='$total' WHERE id_inventaris='$id_inventaris'")or die(mysql_error());
echo"<script>
  window.alert('Data Peminjaman Berhasil DI Kembalikan');
  window.location='kembali.php';
  </script>";
  ?>