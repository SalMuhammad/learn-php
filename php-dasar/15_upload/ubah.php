<?php 
require 'functions.php';
// mengambil data dari URL
$id = $_GET["id"];

$buah_ = ambil_tabel("SELECT * FROM buah_buahan WHERE id = $id")[0];

if(isset($_POST["submit"])) {   
  if(ubah($_POST) > 0) {
    echo "data di simpan";?>
      <script>
        alert('data berhasil di diubah')
        document.location.href = 'index.php'
        console.log('jangan') 
      </script>
  <?php } else { ?>
      <script>
        alert('data gagal di diubah')
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
      <input type="hidden" name="id" value="<?= $id; ?>"> 
      <li><input type="text" placeholder="ling gambar" name="gambar" cols="50" rows="5" value="<?= $buah_['gambar'] ?>" /></li>
      <li><input type="text" placeholder="nama buah_" name="nama" value="<?= $buah_['nama'] ?>"></li>
      <li><input type="text" placeholder="rasa" name="rasa" value="<?= $buah_['rasa'] ?>"></li>
      <li><input type="text" placeholder="asal negara" name="asal_negara" value="<?= $buah_['asal_negara'] ?>"></li>
      <li><input type="text" placeholder="tanda matang" name="tanda_matang" value="<?= $buah_['tanda_matang'] ?>"></li>
      <li><input type="text" placeholder="kebebasan makan" name="kebebasan_makan" value="<?= $buah_['kebebasan_makan'] ?>"></li>
      <li><input type="text" placeholder="di temukan pada" name="ditemukan_pada" value="<?= $buah_['ditemukan_pada'] ?>"></li>
    </ul>

    <button type="submit" name="submit">simpan</button>
  </form>
</body>
</html>