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
    <h5 style="font-size: 18px;"><b><i class="fa fa-list"></i> Data Peminjaman</b></h5>
  </header>
  <div class="w3-container">
 </div>
  </div>

<div class="w3-container w3-padding w3-main" style="margin-left:300px;margin-top:43px;">
<div class="table-responsive">
<table class="table table-bordered" id="table_kembali">
  <thead>
    <th>No</th>
    <th>Nama</th>
    <th>Jumlah</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>Status</th>
    <th>Nama Pegawai</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    $no=1;
    $query=mysql_query("SELECT * FROM peminjaman ORDER BY tanggal_pinjam DESC");
    while ($data=mysql_fetch_array($query)) { ?>
      <tr>
        <td><?php echo $no++?></td>
        <td><?php 
        $id_peminjaman=$data['id_peminjaman'];
        $idpegawi=$data['id_pegawai'];
        $datapeminjam=mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE id_pegawai='$idpegawi'"));
        $datadetail=mysql_fetch_array(mysql_query("SELECT * FROM detail_pinjam WHERE id_peminjaman='$id_peminjaman'"));
        $id_inventaris=$datadetail['id_inventaris'];
        $datainven=mysql_fetch_array(mysql_query("SELECT * FROM inventaris WHERE id_inventaris='$id_inventaris'"));
        echo $datainven['nama'];
        ?></td>
        <td><?php echo $datadetail['jumlah'];?></td>
        <td><?php echo $data['tanggal_pinjam'];?></td>
        <td><?php echo $data['tanggal_kembali'];?></td>
        <td><?php echo $data['status_peminjaman'];?></td>
        <td><?php echo $datapeminjam['nama_pegawai'];?></td>
        <td>
        <?php if($data['status_peminjaman']=="Pinjam") { ?>
          <a href="aksi_kembali.php?id=<?php echo $data['id_peminjaman'];?>"><button class="btn btn-info"><i class=""></i> Kembalikan</button></a>

          <?php }elseif ($data['status_peminjaman']=="Belum Di Terima") { ?>
          <a href="aksi_ambil.php?id=<?php echo $data['id_peminjaman'];?>"><button class="btn btn-info"><i class=""></i> Di Terima</button></a>

          <?php }else{
            echo "<p class='alert alert-info'>Barang Sudah DI Kembalikan</p>";
            } ?></td>
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
    $('#table_kembali').DataTable();
  });
</script>
<!-- END JS -->

</body>
</html>
  
  




