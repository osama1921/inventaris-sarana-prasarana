<?php 
include "koneksi.php";
include 'session.php';
if (isset($_POST['save'])) {
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	date_default_timezone_set("asia/jakarta");
	$tgl=date("Y-m-d H-i-s");
$status="Belum Di Terima";
	$idinven=$_GET['idinven'];
	$pegawai=$_POST['pegawai'];
	$jml=$_POST['jml'];
	$datainven=mysql_fetch_array(mysql_query("SELECT * FROM inventaris WHERE id_inventaris='$idinven'"));
	$jmllama=$datainven['jumlah'];
	$total=$jmllama-$jml;
	if ($total>=0) {
		mysql_query("INSERT INTO `peminjaman`(`id_peminjaman`, `tanggal_pinjam`, `tanggal_kembali`, `status_peminjaman`, `id_pegawai`) VALUES ('$id','$tgl','','$status','$pegawai')");
		mysql_query("INSERT INTO detail_pinjam VALUES (null,'$idinven','$jml','$id')") or die(mysql_error());
		mysql_query("UPDATE inventaris SET jumlah='$total' WHERE id_inventaris='$idinven'");
		 echo"<script>
  window.alert('Data inventaris Berhasil DI Pinjam');
  window.location='peminjaman.php';
  </script>";
	}else{
		echo"<script>
  window.alert('Data inventaris Tidak Berhasil DI Pinjam');
  window.location='peminjaman.php';
  </script>";
	}
}else{
	echo"<script>
  window.alert('Data inventaris Tidak Berhasil DI Pinjam');
  window.location='peminjaman.php';
  </script>";
}
?>