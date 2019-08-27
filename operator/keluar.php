<?php 
include('../assets/koneksi.php');
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>OPERATOR - Inventaris Sarana Dan Prasarana</title>
  <script type="text/javascript" src="../assets/js/jquery-1.9.1.min.js"></script>
  <link rel="SHORTCUT ICON" href="../favicon.ico">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="../assets/css/bootstrap.css">
      <script type="text/javascript" src="../assets/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../assets/datatables/dataTables.bootstrap.min.js"></script><link rel="stylesheet" type="text/css" href="../assets/datatables/dataTables.bootstrap.css">
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
<nav class="w3-sidenav w3-collapse w3-col-nav w3-animate-left" style="z-index:3;width:300px;position: fixed;" id="mySidenav">
  <div class="w3-container">
  <a href="home.php"><h5>Dashboard</h5></a>
  </div>
  <a href="home.php" class="w3-padding"><i class="fa fa-dashboard fa-fw"></i>  Home</a>
  <a href="keluar.php" class="w3-padding"><i class="fa fa-arrow-left fa-fw"></i>  Inventaris Keluar</a>
  <a href="peminjaman.php" class="w3-padding"><i class="fa fa-unsorted fa-fw"></i>  Peminjaman</a>
  <a href="logut.php" class="w3-padding"><i class="fa fa-sign-out fa-fw"></i>  Log Out</a>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5 style="font-size: 18px;"><b><i class="fa fa-arrow-left"></i> Data Inventaris Keluar</b></h5>
  </header>
  <div class="w3-container">
<a href="tambah_keluar.php"><button class="btn btn-success fa fa-pencil"> Tambah Data Inventaris Keluar</button></a>
 </div>
  </div>

<div class="w3-container w3-padding w3-main" style="margin-left:300px;margin-top:43px;">
<div class="table-responsive">
<table class="table  ttable table-striped table-bordered table-hover" id="table_keluar">
  <thead>
    <th>No</th>
    <th>Nama</th>
    <th>Kondisi</th>
    <th>Tanggal Keluar</th>
    <th>Jumlah</th>
    <th>Jenis</th>
    <th>Ruang</th>
    <th>Pegawai</th>
    <th>Keterangan</th>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    $no=1;
    $query=mysql_query("SELECT * FROM inventaris_keluar ORDER BY tanggal_keluar DESC");
    while ($data=mysql_fetch_array($query)) { ?>
      <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $data['nama'];?></td>
        <td><?php echo $data['kondisi'];?></td>
        <td><?php echo $data['tanggal_keluar'];?></td>
        <td><?php echo $data['jumlah'];?></td>
        <td><?php $id_jenis=$data['id_jenis'];
        $djenis=mysql_fetch_array(mysql_query("SELECT * FROM jenis WHERE id_jenis='$id_jenis'"));
        echo $djenis['nama_jenis'];
        ?></td>
         <td><?php $id_ruang=$data['id_ruang'];
        $druang=mysql_fetch_array(mysql_query("SELECT * FROM ruang WHERE id_ruang='$id_ruang'"));
        echo $druang['nama_ruang'];
        ?></td>
        <td><?php $id_pegawai=$data['id_pegawai'];
        $dpegawai=mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'"));
        echo $dpegawai['nama_pegawai'];
        ?></td>
        <td><?php echo $data['keterangan'];?></td>
      </tr>
   <?php }
   ?>
  </tbody>
</table>
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
        <script type="text/javascript">
  $(document).ready(function(){
    $('#table_keluar').DataTable();
  });
</script>
<!-- END JS -->

</body>
</html>
  
  




