<?php 
include('../assets/koneksi.php');
include "session.php";
$char="0123456789";
$ran=rand($char, 1);
$idd="PE-".$ran;
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>ADMINISTRATOR - Inventaris Sarana Dan Prasarana</title>
  <link rel="SHORTCUT ICON" href="../favicon.ico">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="../assets/css/bootstrap.css">
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
  <span class="w3-right" style="font-size: 19px">Inventaris</span>
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
    <h3><b> Form Tambah Data </b></h3>
  </header>


<div class="w3-container w3-padding">
<form action="aksi_tambah_pegawai.php" method="POST">
  <div class="form-group">
    <label >ID Pegawai</label>
    <input type="text" class="form-control" name="id" value="<?php echo $idd;?>" style="display: none;">
    <input type="text" class="form-control" name="id" value="<?php echo $idd;?>" disabled>
  </div>
    <div class="form-group">
    <label >NIP Pegawai</label>
    <input type="number" class="form-control" name="nip" placeholder="NIP Pegawai">
  </div>
  <div class="form-group">
    <label >Nama Pegawai</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama pegawai">
  </div>
   <div class="form-group">
    <label >Username Pegawai</label>
    <input type="text" class="form-control" name="user" placeholder="Username pegawai">
  </div>
   <div class="form-group">
    <label >Password Pegawai</label>
    <input type="text" class="form-control" name="pass" placeholder="Password Pegawai">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alt"></textarea>
  </div>
  <button type="submit" class="btn btn-default" name="save">Tambah</button>
</form>
</div>
</div>
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