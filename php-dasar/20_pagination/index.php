<?php
require 'functions.php';

session_start();

if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}



// ambil data dari tabel dabases (buah_buahan)

// ketika tombol cari di klik
if (isset($_POST["cari"])) {
  $buah_buahan = cari($_POST["keyword"]);
}

$jmlDtPerhalaman = 3;
$jmlData = count(ambil_tabel("SELECT * FROM buah_buahan"));
$jmlHalaman = ceil($jmlData / $jmlDtPerhalaman);
$halamanAktiff = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jmlDtPerhalaman * $halamanAktiff) - $jmlDtPerhalaman;

$buah_buahan = ambil_tabel("SELECT * FROM buah_buahan LIMIT $awalData, $jmlDtPerhalaman");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>halaman index</title>
  <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
  <a href="logout.php">log out</a>
  <h1 style="text-transform: capitalize;">daftar buah-buahan </h1>
  <a href="tambah1.php">tambah data</a>
  <br><br>
  <form action="" method="post">
    <input style="align-items: center;" type="search" name="keyword" autofocus autocomplete="off" placeholder="masukan keyword pencarian..." size="40">
    <button type="submit" name="cari">Cari</button>
  </form>
  
  <!-- mempunculkan tombol halaman sebelumnya hanya jika halaman bukan halaman 1 -->
  <?php if($halamanAktiff > 1) :?>
    <a href="?halaman=<?= $halamanAktiff-1;?>">&laquo;</a>
  <?php endif; ?>

  <?php for ($i=1; $i <= $jmlHalaman; $i++) : ?>
    <?php if($i == $halamanAktiff) : ?>
      <a style="border: 1px solid; display:inline-block; padding: 2px 4px;" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
      <?php else: ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
      <?php endif ?>
    <?php endfor; ?>
  <?php if($halamanAktiff < $jmlHalaman) :?>
    <a href="?halaman=<?= $halamanAktiff+1;?>">&raquo;</a>
  <?php endif ?>
  <table cellspacing="0" cellpadding="2">
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
          <td><img src="<?= $buah["gambar"]; ?>" height="50px" alt="gambar buah"></td>
          <td><?= $buah["nama"]; ?></td>
          <td><?= $buah["rasa"]; ?></td>
          <td><?= $buah["asal_negara"]; ?></td>
          <td><?= $buah["tanda_matang"]; ?></td>
          <td><?= $buah["kebebasan_makan"]; ?></td>
          <td><?= $buah["ditemukan_pada"]; ?></td>
          <td><a href="hapus.php?id=<?= $buah["id"]; ?>&gambar=<?= $buah["gambar"];?>" onclick="return confirm('apakah yakin menghapus?')">hapus</a> || <a href="ubah.php?id=<?= $buah["id"] ?>">ubah</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>