<?php
session_start();
if (!isset($_SESSION['idpeminjam'])) {
		echo"<script>
  window.alert('Anda Belum Login Silahkan Login Terlebih Dahulu...');
  window.location='../index.php';
  </script>";
}
?>