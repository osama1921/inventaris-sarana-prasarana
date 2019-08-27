<?php
include "koneksi.php";
include "session.php";
if (isset($_POST['save'])) {
	if ($_POST['petugas']=="" or $_POST['jenis']=="") {
		header("location:tambah_inventaris.php");
	}else{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$kondisi=$_POST['kon'];
	$keterangan=$_POST['ket'];
	$idjenis=$_POST['jenis'];
	$tgl=$_POST['tgl'];
	$kode=$_POST['kode'];
	$idruang=$_POST['ruang'];
	$jumlah=$_POST['jml'];
	$id_petugas=$_POST['petugas'];
	$dataruang=mysql_fetch_array(mysql_query("SELECT * FROM ruang WHERE id_ruang='$idruang'"));
	$status=$_POST['status'];
	$ruang=$dataruang['nama_ruang'];
	mysql_query("INSERT INTO `inventaris`(`id_inventaris`, `nama`, `kondisi`, `keterangan`, `jumlah`, `id_jenis`, `tanggal_register`, `id_ruang`, `kode_inventaris`, `id_petugas`,`status`) VALUES ('$id','$nama','$kondisi','$keterangan','$jumlah','$idjenis','$tgl','$idruang','$kode','$id_petugas','$status')") or die(mysql_error());
	// Yang Memakai Mysqli atau MYSQL
	
	echo"<script>
	window.alert('Data Berhasil DiTambahkan');
	window.location='inventaris.php';
	</script>";
}
}else{
	echo"<script>
	window.alert('Gagal');
	window.location='inventaris.php';
	</script>";
}