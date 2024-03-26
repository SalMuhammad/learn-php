<?php 
require 'functions.php';

// ambil data dari tabel dabases (buah_buahan)
$sintak_query = "SELECT * FROM buah_buahan";
$buah_buahan = ambil_tabel($sintak_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>halaman index</title>
  <style>
    body {
      font-family: sans-serif;
    }
    th, td {
      border-bottom: 1px solid;
      /* border-left: 1px solid; */
      text-transform: capitalize;
    }
    tr:last-child td {
      border-bottom: none;
    }

  </style>
</head>
<body>
  <h1 style="text-transform: capitalize;">daftar buah-buahan </h1>
  <br>
  <a href="tambah_data.php">tambah data</a>
  <table cellspacing="0" cellpadding="5">
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
      foreach ($buah_buahan as $buah) : 
      ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="<?= $buah["gambar"]; ?>" width="50px" alt="gambar buah"></td>
          <td><?= $buah["nama"]; ?></td>
          <td><?= $buah["rasa"]; ?></td>
          <td><?= $buah["asal_negara"]; ?></td>
          <td><?= $buah["tanda_matang"]; ?></td>
          <td><?= $buah["kebebasan_makan"]; ?></td>
          <td><?= $buah["ditemukan_pada"]; ?></td>
          
          <td><a href="hapus.php?id=<?= $buah["id"]; ?>" onclick="return confirm('apakah yakin menghapus?')">hapus</a> || <a href="ubah.php?id=<?= $buah["id"] ?>">ubah</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>