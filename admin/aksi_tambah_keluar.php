<?php
include "koneksi.php";
include "session.php";
if (isset($_POST['save'])) {
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$ket=$_POST['ket'];
	$jml=$_POST['jml'];
	$tgl_keluar=$_POST['tgl'];
	$ruang=$_POST['ruang'];
	$pegawai=$_POST['pegawai'];
	$datainven=mysql_fetch_array(mysql_query("SELECT * FROM inventaris WHERE id_inventaris='$nama'"));
	$jml_lama=$datainven['jumlah'];
	$total=$jml_lama-$jml;
	$namainven=$datainven['nama'];
	$kondisi=$datainven['kondisi'];
	$jenis=$datainven['id_jenis'];
	if ($total>=0) {
		mysql_query("INSERT INTO `inventaris_keluar`(`id_keluar`, `nama`, `kondisi`, `keterangan`, `jumlah`, `id_jenis`, `tanggal_keluar`, `id_ruang`, `id_pegawai`, `id_inventaris`) VALUES ('$id','$namainven','$kondisi','$ket','$jml','$jenis','$tgl_keluar','$ruang','$pegawai','$nama')");
		mysql_query("UPDATE inventaris SET jumlah='$total' WHERE id_inventaris='$nama'");
			echo"<script>
	window.alert('Data Berhasil Ditambahkan');
	window.location='keluar.php';
	</script>";
	}else{
			echo"<script>
	window.alert('Data Tidak Berhasil Ditambahkan');
	window.location='keluar.php';
	</script>";
	}
}else{echo"<script>
	window.alert('Data Tidak Berhasil Ditambahkan');
	window.location='keluar.php';
	</script>";
}
?>