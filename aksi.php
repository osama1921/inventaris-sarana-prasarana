<?php
include "assets/koneksi.php";
session_start();
if (isset($_POST['login'])) {
	if ($_POST['username']=="" OR $_POST['password']) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query=mysql_query("SELECT * FROM pegawai WHERE username='$username' AND password='$password'");
		$cek=mysql_num_rows($query);
		if ($cek>0) {
			$data=mysql_fetch_array($query);
			$_SESSION['idpeminjam']=$data['id_pegawai'];
			echo"<script>
  window.alert('Selamat Datang ".$data['nama_pegawai']."!!! Login Berhasil');
  window.location='peminjam/home.php';
  </script>";
		}else{
			$_SESSION['msg']="Login Gagal! Mungkin Username Atau Password Anda Salah.. Silahkan Coba Lagi";
			echo"<script>
  window.location='index.php';
  </script>";
		}
	}else{
		$_SESSION['msg']="Silahkan Isi Dulu Kolom Username Dan Password Yang Telah Disediakan";
			echo"<script>
  window.location='index.php';
  </script>";
	}
}else{
$_SESSION['msg']="Silahkan Login Dulu...";
			echo"<script>
  window.location='index.php';
  </script>";
}