<?php 
require 'functions.php';
session_start();



if(isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

// ketika tombol login di klik.
if(isset($_POST["login"])) {
  $user = $_POST["username"];
  $pass = $_POST["password"];
  global $koneksi_ke_db;

  // cek ambil data di database yang usernamenya sama dengan yang di inputkan user.
  $result = mysqli_query($koneksi_ke_db, "SELECT * FROM users WHERE username = '$user'");
  if(strlen($user) < 1 || strlen($pass) < 1) {
    echo "
    <script>
    alert('username atau password tidak boleh kosong!')
    </script>
    ";
  }else {
      // cek apakah ada usrname yang sama di database dengan yang di tuliskan user?
      if(mysqli_num_rows($result) === 1) { 
        $rows = mysqli_fetch_assoc($result);
        // jika ada, cek password nya sama gak dengan yang di tulis user?
        if(password_verify($pass, $rows["password"])) {
          $_SESSION["login"] = true;

          header('Location: index.php');
          exit;
        }
      }
      $error = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    label {
      display: block;
    }
  </style>
  <title>halaman login</title>
</head>
<body>
  <center><h1>halaman login</h1></center>
  <?php if(isset($error)) { ?>
    <p style="color: red; font-style: italic;">username atau password salah!! <span>x</span></p>
  <?php } ?>
  <form action="" method="post">
    <ul>
      <li>
        <label>Username: 
          <input type="text" name="username">
        </label>
      </li>
      <li>
        <label>Password: 
          <input type="password" name="password">
        </label>
      </li>
      <li>
        <button type="submit" name="login">login</button>
      </li>
    </ul>


    <span>belum punya akun?, registrasi <a href="register.php">di sini</a></span>
  </form>


</body>
</html>