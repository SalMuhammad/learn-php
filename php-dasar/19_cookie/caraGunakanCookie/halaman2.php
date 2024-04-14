<?php 
if(isset($_POST["setCookie"])) {
  setcookie('nama', 'sal', time() + 60);
} else if(isset($_POST["hapusCookie"])) {
  return true;
  exit;
}

echo $_COOKIE['nama'];
?>


<form action="" method="post">
  <button name="setCookie" type="submit">buat cookie</button>
  <button name="hapusCookie" type="submit" class="hapus_cookie">hapus cookie</button>
</form>