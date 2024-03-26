<?php 

// konek ke data base;
$nama_host = "localhost";
$usernamame = "root";
$password = "";
$nama_database = "belajar_php_mysql";
$koneksi_ke_db = mysqli_connect($nama_host, $usernamame, $password, $nama_database);


function query($q) {
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




// ambil data buah-buan dari database (belajar_php_mysql)
// mysqli_fetch_row(); mengembalikan array numerik

// mysqli_fetch_assoc(); mengembalikan array asosiatif

// mysqli_fetch_array(); mengembalikan array numerik dan asosiatif

// // mysqli_fetch_object(); mengembalikann objek
// $buah = mysqli_fetch_object($result);
// var_dump($buah->tanda_matang);

?>