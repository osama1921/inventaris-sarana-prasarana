<?php 
include('../assets/koneksi.php');
include "session.php";
$char="0123456789";
$ran=rand($char, 1);
$idd="PI-".$ran;
$id=$_GET['id'];
$idpeminjam=$_GET['idpeminjam'];
$data=mysql_fetch_array(mysql_query("SELECT * FROM inventaris WHERE id_inventaris='$id'"));
$datapeminjam=mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE id_pegawai='$idpeminjam'"));
if ($data['status']=='Sekali Pakai') {
 echo"<script>
  window.alert('Barang inventaris Hanya Bisa DI Pinjam Oleh Barang Yang Tidak Sekali Pakai Saja.. ');
  window.location='peminjaman.php';
  </script>";
}
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
<nav class="w3-sidenav w3-collapse w3-col-nav w3-animate-left" style="z-index:3;width:300px;position: fixed;" id="mySidenav">
  <div class="w3-container">
  <a href="home.php"><h5>Dashboard</h5></a>
  </div>
  <a href="home.php" class="w3-padding"><i class="fa fa-dashboard fa-fw"></i>  Home</a>
  <a href="peminjaman.php" class="w3-padding"><i class="fa fa-unsorted fa-fw"></i>  Peminjaman</a>
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
<form action="aksi_tambah_pinjam.php?idinven=<?php echo $id;?>" method="POST">
  <div class="form-group">
    <label >ID Peminjaman</label>
    <input type="text" class="form-control" name="id" value="<?php echo $idd;?>" style="display: none;">
    <input type="text" class="form-control" name="id" value="<?php echo $idd;?>" disabled>
  </div>
  <div class="form-group">
    <label >Nama Barang</label>
    <input name="nama" type="text" class="form-control" value="<?php echo $data['nama'];?>" style="display: none;">
    <input name="nama" type="text" class="form-control" value="<?php echo $data['nama'];?>" disabled>
    </div>
   <div class="form-group">
    <label >Jumlah Peminjaman</label>
    <input type="number" class="form-control" name="jml" placeholder="Jumlah Barang Yang Akan Dipinjam" required>
  </div>
  <div class="form-group">
  <label>Nama Anda</label>
  <select name="pegawai" class="form-control" required>
    <option value="<?php echo $datapeminjam['id_pegawai'];?>"><?php echo $datapeminjam['nama_pegawai'];?></option>
 </select>
  </div>
  <button type="submit" class="btn btn-default" name="save">Pinjam</button>
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
  
  




