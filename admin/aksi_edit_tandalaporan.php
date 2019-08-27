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
		$idwakasek=$_POST['idwakasek'];
		$nipwakasek=$_POST['nipwaka'];
		$kepala=$_POST['kepala'];
		$idkepala=$_POST['idkepala'];
		$nipkepala=$_POST['nipkepala'];
		mysql_query("UPDATE laporan SET nama='$wakasek',nip='$nipwakasek' WHERE id='$idwakasek'");
		mysql_query("UPDATE laporan SET nama='$kepala',nip='$nipkepala' WHERE id='$idkepala'");
		echo"<script>
	window.alert('Data Tanda Tangan Laporan Berhasil Di Ubah');
	window.location='laporan.php';
	</script>";
	}
}else{
	echo"<script>
	window.alert('Silahkan Isi Datanya Terlebih Dahulu');
	window.location='laporan.php';
	</script>";
}