<?php 
require 'functions.php';

if(isset($_POST["submit"])) {   
  if(tambah2($_POST) > 0) {
    com_print_typeinfo($_POST);
    echo "data di simpan";?>
      <script>
        alert('data berhasil di tambahkan')
        document.location.href = 'index.php'
        // console.log('jangan') 
      </script>
  <?php } else { ?>
      <script>
        alert('data gagal di tambahkan')
        window.location.href = 'index.php'
      </script>
  <?php
  }    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah data</title>
</head>
<body>
  <a href="index.php"> kembali</a>
  <h1>form tambah data</h1>
  <form action="" method="post">
    <ul>
      <li><textarea placeholder="ling gambar" name="gambar" cols="50" rows="5" required></textarea></li>
      <li><input type="text" placeholder="nama buah" name="nama" required></li>
      <li><input type="text" placeholder="rasa" name="rasa"></li>
      <li><input type="text" placeholder="asal negara" name="asal_negara"></li>
      <li><input type="text" placeholder="tanda matang" name="tanda_matang"></li>
      <li><input type="text" placeholder="kebebasan makan" name="kebebasan_makan"></li>
      <li><input type="text" placeholder="di temukan pada" name="ditemukan_pada"></li>
    </ul>

    <button type="submit" name="submit">simpan</button>
  </form>
</body>
</html>