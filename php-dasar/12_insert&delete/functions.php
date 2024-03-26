<?php 

// konek ke data base;
$nama_host = "localhost";
$usernamame = "root";
$password = "";
$nama_database = "belajar_php_mysql";
$koneksi_ke_db = mysqli_connect($nama_host, $usernamame, $password, $nama_database);


function ambil_tabel($q) {
  global $koneksi_ke_db;
  // mengambil tabel buah-buahan dari database belajar_php_mysql
  $result = mysqli_query($koneksi_ke_db, $q);
  // var_dump($result);
  $rows = [];
  // simpan data buah dari table buah_buahan kedalam array $rows;
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows; // kembalikan array buah-ubahan yang baru
}

function tambah_data($var) {
  global $koneksi_ke_db;
  $nama = htmlspecialchars($var["nama"]);
  $gambar = htmlspecialchars($var["gambar"]);
  $rasa = htmlspecialchars($var["rasa"]);
  $asal_negara = htmlspecialchars($var["asal_negara"]);
  $tanda_matang = htmlspecialchars($var["tanda_matang"]);
  $kebebasan_makan = htmlspecialchars($var["kebebasan_makan"]);
  $di_temukan_pada = htmlspecialchars($var["di_temukan_pada"]);

  $que = "INSERT INTO buah_buahan
           VALUES 
            ('$nama', '', '$gambar', '$rasa', '$asal_negara', '$tanda_matang',
             '$kebebasan_makan', '$di_temukan_pada')
          ";
  // simpan data ke tabel 
  mysqli_query($koneksi_ke_db, $que);

  return mysqli_affected_rows($koneksi_ke_db);
}

function hapus($id) {
  global $koneksi_ke_db;
  mysqli_query($koneksi_ke_db, "DELETE FROM buah_buahan WHERE id = $id");

  return mysqli_affected_rows($koneksi_ke_db);
}

// ambil data buah-buan dari database (belajar_php_mysql)
// mysqli_fetch_row(); mengembalikan array numerik

// mysqli_fetch_assoc(); mengembalikan array asosiatif

// mysqli_fetch_array(); mengembalikan array numerik dan asosiatif

// // mysqli_fetch_object(); mengembalikann objek
// $buah = mysqli_fetch_object($result);
// var_dump($buah->tanda_matang);

?>