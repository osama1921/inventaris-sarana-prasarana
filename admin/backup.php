<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include "koneksi.php";
date_default_timezone_set("asia/jakarta");
$tgl=date('Y-m-d');
exec("C:/xamppp/mysql/bin/mysqldump --host=localhost --user=root --pass= ukom > Backup-$tgl.sql");
header("location:Backup-$tgl.sql");
?>