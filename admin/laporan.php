<?php 
include('../assets/koneksi.php');
include "count.php";
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>ADMINISTRATOR - Inventaris Sarana Dan Prasarana</title>
  <link rel="SHORTCUT ICON" href="../favicon.ico">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>

<body>

  <html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="../assets/css/font-awesome.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-dark-drey">

<!-- Top container -->
<div class="w3-container w3-top w3-col-header w3-large w3-padding" style="z-index:4; color: white;">
  <button class="w3-btn  w3-hide-large w3-padding-0" style="background: #0eaf6c!important; color: white;" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-right">Inventaris</span>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-col-nav w3-animate-left" style="z-index:3;width:300px; font-size: 14px;" id="mySidenav">
  <div class="w3-container">
  <a href="home.php"><h5>Dashboard</h5></a>
  </div>
  <a href="home.php" class="w3-padding"><i class="fa fa-dashboard fa-fw"></i>  Home</a>
  <a href="jenis.php" class="w3-padding"><i class="fa fa-list fa-fw"></i>  Jenis</a>
  <a href="ruang.php" class="w3-padding"><i class="fa fa-building-o fa-fw"></i>  Ruang</a>
  <a href="petugas.php" class="w3-padding"><i class="fa fa-user fa-fw"></i>  Petugas</a>
  <a href="Inventaris.php" class="w3-padding"><i class="fa fa-arrow-right fa-fw"></i>  Inventaris</a>
  <a href="pegawai.php" class="w3-padding"><i class="fa fa-users fa-fw"></i>  Pegawai</a>
  <a href="keluar.php" class="w3-padding"><i class="fa fa-arrow-left fa-fw"></i>  Inventaris Keluar</a>
  <a href="peminjaman.php" class="w3-padding"><i class="fa fa-unsorted fa-fw"></i>  Peminjaman</a>
   <a href="laporan.php" class="w3-padding"><i class="fa fa-paperclip fa-fw"></i>  Rekap Data</a>
 <a href="backup.php" class="w3-padding"><i class="fa fa-database fa-fw"></i>  Backup</a>
  <a href="logut.php" class="w3-padding"><i class="fa fa-sign-out fa-fw"></i>  Log Out</a>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-paperclip"></i> Rekap Data</b></h5>
  </header>
  <div class="w3-container">
<div class="w3-container panel panel-default">
<?php
if ($laporan==2) { 
$kepala=mysql_fetch_array(mysql_query("SELECT * FROM laporan WHERE jabatan='Kepala Sekolah'"))or die(mysql_error());
$wakasek=mysql_fetch_array(mysql_query("SELECT * FROM laporan WHERE jabatan='Wakasek Sarana Dan Prasarana'"));
  ?>
  <form method="post" enctype="multipart/form-data" action="aksi_edit_tandalaporan.php" class="panel-body">
<div class="col-md-5">
 <p style="font-weight: bold;margin:0 auto;display: flex;">Wakasek Sarana Dan Prasarana</p><input type="text" name="wakasek" value="<?php echo $wakasek['nama'];?>" class="w3-input"><input type="text" name="idwakasek" value="<?php echo $wakasek['id'];?>" class="w3-input" style="display: none;"></div>

<div class="col-md-5">
 <p style="font-weight: bold;margin:0 auto;display: flex;">NIP </p><input type="number" name="nipwaka" value="<?php echo $wakasek['nip'];?>" class="w3-input"></div>
 <div class="col-md-5">
 <p style="font-weight: bold;margin:0 auto;display: flex;">Kepala Sekolah</p><input type="text" name="kepala" value="<?php echo $kepala['nama'];?>"  class="w3-input"><input type="text" name="idkepala" value="<?php echo $kepala['id'];?>"  class="w3-input" style="display: none;"></div>

<div class="col-md-5">
 <p style="font-weight: bold;margin:0 auto;display: flex;">NIP </p><input type="number" name="nipkepala" value="<?php echo $kepala['nip'];?>" class="w3-input"></div>

  <div style="clear: both;padding-top: 25px;">
  <input name="cari" type="submit" value="Ubah Data" class="btn btn-primary " style="margin-top: 8px;margin-left: 10px; width: 100px; float: right;">
  <div style="clear: both;">
  </div>
</form>
<?php }else{ ?>
<form method="post" enctype="multipart/form-data" action="aksi_tambah_tandalaporan.php" class="panel-body">
<div class="col-md-5">
 <p style="font-weight: bold;margin:0 auto;display: flex;">Wakasek Sarana Dan Prasarana</p><input type="text" name="wakasek" class="w3-input"></div>

<div class="col-md-5">
 <p style="font-weight: bold;margin:0 auto;display: flex;">NIP </p><input type="number" name="nipwaka" class="w3-input"></div>
 <div class="col-md-5">
 <p style="font-weight: bold;margin:0 auto;display: flex;">Kepala Sekolah</p><input type="text" name="kepala" class="w3-input"></div>

<div class="col-md-5">
 <p style="font-weight: bold;margin:0 auto;display: flex;">NIP </p><input type="number" name="nipkepala" class="w3-input"></div>

  <div style="clear: both;padding-top: 25px;">
  <input name="cari" type="submit" value="Tambahkan" class="btn btn-primary " style="margin-top: 8px;margin-left: 10px; width: 100px; float: right;">
  <div style="clear: both;">
  </div>
</form>
<?php } ?>
</div>
</div>

</div>
<?php 
if ($laporan==2) { ?>
<p style="">Cetak Laporan Rekap Data Inventaris, <a href="cetak_inventaris.php" target="_blank" style="color: blue">Klik Disini</a></p>
<p style="">Cetak Laporan Rekap Data Inventaris Keluar, <a href="cetak_keluar.php" target="_blank" style="color: blue">Klik Disini</a></p>
<p style="">Cetak Laporan Rekap Data Peminjaman Inventaris, <a href="cetak_peminjaman.php" target="_blank" style="color: blue">Klik Disini</a></p>
<?php } ?>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16">
    <h4></h4>
    <p><p>
  </footer>

  <!-- End page content -->
</div>

<!-- JS -->
    <script  src="../assets/js/index.js"></script>
<!-- END JS -->

</body>
</html>