<?php 
// konek ke data base;
$nama_host = "localhost";
$usernamame = "root";
$password = "";
$nama_database = "belajar_php_mysql";
$koneksi_ke_db = mysqli_connect($nama_host, $usernamame, $password, $nama_database);

// ambil data dari tabel dabases (buah_buahan)
$sintak_query = "SELECT * FROM buah_buahan";
$result = mysqli_query($koneksi_ke_db, $sintak_query);

// ambil data buah-buan dari database (belajar_php_mysql)
// mysqli_fetch_row(); mengembalikan array numerik

// mysqli_fetch_assoc(); mengembalikan array asosiatif

// mysqli_fetch_array(); mengembalikan array numerik dan asosiatif

// // mysqli_fetch_object(); mengembalikann objek
// $buah = mysqli_fetch_object($result);
// var_dump($buah->tanda_matang);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>halaman index</title>
</head>
<body>
  <h2>daftar buah-buahan </h2>
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>no</th>
      <th>gambar</th>
      <th>nama</th>
      <th>rasa</th>
      <th>asal negara</th>
      <th>tanda matang</th>
      <th>kebebasan makan</th>
      <th>di temukan</th>
      <th rowspan="2">aksi</th>
    </tr>
    <tbody>
      <?php 
      $i = 1;  
      while($buah = mysqli_fetch_object($result)) : 
      ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="<?= $buah->gambar; ?>" width="50px" alt="gambar buah"></td>
          <td><?= $buah->nama; ?></td>
          <td><?= $buah->rasa; ?></td>
          <td><?= $buah->asal_negara; ?></td>
          <td><?= $buah->tanda_matang; ?></td>
          <td><?= $buah->kebebasan_makan; ?></td>
          <td><?= $buah->ditemukan; ?></td>
          <td><a href="">hapus</a> || <a href="">edit</a></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>