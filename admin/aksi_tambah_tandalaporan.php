<?php 
include "koneksi.php";
include "session.php";
if (isset($_POST['cari'])) {
	if ($_POST['wakasek']=="" OR $_POST['nipwaka']=="" OR $_POST['kepala']=="" OR $_POST['nipkepala']=="") {
	echo"<script>
	window.alert('Silahkan Isi Datanya Terlebih Dahulu');
	window.location='laporan.php';
	</script>";
	}else{
		$wakasek=$_POST['wakasek'];
		$nipwakasek=$_POST['nipwaka'];
		$kepala=$_POST['kepala'];
		$nipkepala=$_POST['nipkepala'];
		mysql_query("INSERT INTO laporan VALUES (null,'$wakasek','$nipwakasek','Wakasek Sarana Dan Prasarana')");
		mysql_query("INSERT INTO laporan VALUES (null,'$kepala','$nipkepala','Kepala Sekolah')");
		echo"<script>
	window.alert('Data Tanda Tangan Laporan Berhasil Di Masukan');
	window.location='laporan.php';
	</script>";
	}
}else{
	echo"<script>
	window.alert('Silahkan Isi Datanya Terlebih Dahulu');
	window.location='laporan.php';
	</script>";
}