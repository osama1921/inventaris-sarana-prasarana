<?php
session_start();
session_destroy();
	echo"<script>
  window.alert('Anda Telah Berhasil Logout... Sampai Jumpa Lagi');
  window.location='../index.php';
  </script>";