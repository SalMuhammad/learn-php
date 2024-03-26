<?php 
// saat tombol sabmit di tekan
if(!isset($_POST["submit"])) {
  // cek apakah $_POST tidak kosong?
  if(!empty($_POST["username"]) && !empty($_POST["password"])) {
    // cek apakah usrname atau password benar?
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
      // jika benar arahkan user ke halaman admin.php
      header("Location: admin.php");
      exit;
    }else {
      // jika salah kasih tau user kalau mereka salah menulis username atau password
      $er = true;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>

  <?php 
    if(isset($er)) { ?>
      <p style="color: red; font-style: italic;">username atau password</p>"
    <?php }?>
  <form action="admin.php" method="post">
    <label>
      Username: 
      <input type="username" name="username">
    </label> <br>
    <label>
      password: 
      <input type="password" name="username">
    </label> <br>

    <button type="submit" name="submit">login</button>
  </form>

</body>
</html>