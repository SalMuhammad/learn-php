<?php 
require 'functions.php';

if(isset($_POST["submit"])) {   
  if(tambah_data($_POST) > 0) {
    echo "data di simpan";?>
      <script>
        alert('data berhasil di tambahkan')
        document.location.href = 'index.php'
        console.log('jangan') 
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
      <li><label>gambar :<textarea placeholder="ling gambar" name="gambar" cols="50" rows="5" required></textarea></label></li>
      <li><label>nama buah :<input type="text" placeholder="nama buah" name="nama" required></label></li>
      <li><label>rasa :<input type="text" placeholder="rasa" name="rasa"></label></li>
      <li><label>asal negara<input type="text" placeholder="asal negara" name="asal_negara"></label></li>
      <li><label>tanda matang :<input type="text" placeholder="tanda matang" name="tanda_matang"></label></li>
      <li><label>kebebasan makan :<input type="text" placeholder="kebebasan makan" name="kebebasan_makan"></label></li>
      <li><label>di temukan pada<input type="text" placeholder="di temukan pada" name="ditemukan_pada"></label></li>
    </ul>

    <button type="submit" name="submit">simpan</button>
  </form>
</body>
</html>