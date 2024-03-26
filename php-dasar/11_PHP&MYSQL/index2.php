<?php 
require 'functions.php';

// ambil data dari tabel dabases (buah_buahan)
$sintak_query = "SELECT * FROM buah_buahan";
$buah_buahan = query($sintak_query);

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
      border-left: 1px solid;
      text-transform: capitalize;
    }
    tr:last-child td {
      border-bottom: none;
    }
    tr td:first-child,
    tr th:first-child
     {
      border-left: none;
    }
  </style>
</head>
<body>
  <h1 style="text-transform: capitalize;">daftar buah-buahan </h1>
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
          <td><?= $buah["ditemukan"]; ?></td>
          <td><a href="">hapus</a> || <a href="">edit</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>