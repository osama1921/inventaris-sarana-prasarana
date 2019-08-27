<?php 
include('../assets/koneksi.php');
include "session.php";
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>ADMINISTRATOR - Inventaris Sarana Dan Prasarana</title>
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
    <h5 style="font-size: 18px"><b><i class="fa fa-list"></i> Data Jenis</b></h5>
  </header>
  <div class="w3-container">
<a href="tambah_jenis.php"><button class="btn btn-success fa fa-pencil"> Tambah Data Jenis</button></a>
 </div>
  </div>

<div class="w3-container w3-padding w3-main" style="margin-left:300px;margin-top:43px;">
<div class="table-responsive">
<table id="table_jenis" class="table table-bordered table-striped">
  <thead>
    <th>No</th>
    <th>Nama Jenis</th>
    <th>Kode Jenis</th>
    <th>Keterangan</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    $no=1;
    $query=mysql_query("SELECT * FROM jenis");
    while ($data=mysql_fetch_array($query)) { ?>
      <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $data['nama_jenis'];?></td>
        <td><?php echo $data['kode'];?></td>
        <td><?php echo $data['keterangan'];?></td>
        <td><a href="hapus_jenis.php?id=<?php echo $data['id_jenis'];?>"><button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini?');"><i class="fa fa-trash"></i></button></a></td>
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
    $('#table_jenis').DataTable();
  });
</script>
<!-- END JS -->

</body>
</html>
