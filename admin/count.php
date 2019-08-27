<?php 
include "koneksi.php";
$datapetugas=mysql_num_rows(mysql_query("SELECT * FROM petugas"));
$datainventaris=mysql_num_rows(mysql_query("SELECT * FROM inventaris"));
$datapeminjaman=mysql_num_rows(mysql_query("SELECT * FROM peminjaman"));
$datapegawai=mysql_num_rows(mysql_query("SELECT * FROM pegawai"));
$datakeluar=mysql_num_rows(mysql_query("SELECT * FROM inventaris_keluar"));
$laporan=mysql_num_rows(mysql_query("SELECT * FROM laporan"));
?>