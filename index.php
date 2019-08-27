<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/login.css">
 <link rel="SHORTCUT ICON" href="favicon.ico">
<title>Login || Peminjam</title>

<style>

</style>
</head>
<body>
<div class="login">
<img src="assets/img/logo.png">

  <form action="aksi.php" method="POST">
    <div class="row">
      <h2 style="text-align:center">Login Inventaris</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" name="login">
      </div>
      
    </div>
  </form>
</div>
<?php
error_reporting(0);
  session_start();
  if ($_SESSION['msg']=="") {
  	
  }else{
  echo "<p class='alert alert-danger' style='margin-top:-60px;'>".$_SESSION['msg']."</p>";
  	unset($_SESSION['msg']);
  } ?>
</body>
</html>
