<?php 

// konek ke data base;
$nama_host = "localhost";
$usernamame = "root";
$password = "";
$nama_database = "belajar_php_mysql";
$koneksi_ke_db = mysqli_connect($nama_host, $usernamame, $password, $nama_database);


// ambil data buah-buan dari database (belajar_php_mysql)
// mysqli_fetch_row(); mengembalikan array numerik

// mysqli_fetch_assoc(); mengembalikan array asosiatif

// mysqli_fetch_array(); mengembalikan array numerik dan asosiatif

// // mysqli_fetch_object(); mengembalikann objek
// $buah = mysqli_fetch_object($result);
// var_dump($buah->tanda_matang);





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

function tambah($var) {
  global $koneksi_ke_db;
  $nama = htmlspecialchars($var["nama"]);
  $rasa = htmlspecialchars($var["rasa"]);
  $asal_negara = htmlspecialchars($var["asal_negara"]);
  $tanda_matang = htmlspecialchars($var["tanda_matang"]);
  $kebebasan_makan = htmlspecialchars($var["kebebasan_makan"]);
  $ditemukan_pada = htmlspecialchars($var["ditemukan_pada"]);


  $gambar = upload();
  if(!$gambar) {
    return false;
  }


  $que = "INSERT INTO buah_buahan
           VALUES 
            ('$nama', '', '$gambar', '$rasa', '$asal_negara', '$tanda_matang',
             '$kebebasan_makan', '$ditemukan_pada')
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

function ubah($v) {
  global $koneksi_ke_db;
  $id = $v["id"];

  $nama = htmlspecialchars($v["nama"]);
  $rasa = htmlspecialchars($v["rasa"]);
  $asal_negara = htmlspecialchars($v["asal_negara"]);
  $tanda_matang = htmlspecialchars($v["tanda_matang"]);
  $kebebasan_makan = htmlspecialchars($v["kebebasan_makan"]);
  $ditemukan_pada = htmlspecialchars($v["ditemukan_pada"]);
  
  if($_FILES["gambar"]["error"] === 4) {
    $gambar = $v["gambar_lama"];
  } else {
    $gambar = upload();
  }


 

  $que = "UPDATE buah_buahan SET 
            nama = '$nama',
            gambar = '$gambar',
            rasa = '$rasa',
            asal_negara = '$asal_negara',
            tanda_matang = '$tanda_matang',
            kebebasan_makan = '$kebebasan_makan',
            ditemukan_pada = '$ditemukan_pada'
            WHERE id = '$id' 
          ";
  // simpan data ke tabel 
  mysqli_query($koneksi_ke_db, $que);

  echo mysqli_affected_rows($koneksi_ke_db);
  return mysqli_affected_rows($koneksi_ke_db);
}

function cari($keyword) {
  return ambil_tabel("SELECT * FROM buah_buahan 
                      WHERE
                       nama LIKE '%$keyword%' or 
                       rasa LIKE '%$keyword%' or 
                       asal_negara LIKE '%$keyword%' or 
                       tanda_matang LIKE '%$keyword%' or 
                       kebebasan_makan LIKE '%$keyword%' or 
                       ditemukan_pada LIKE '%$keyword%'
                    ");
}


function upload() {
  $namaFile = $_FILES["gambar"]["name"];
  $ukuranGambar = $_FILES["gambar"]["size"];
  $penyimpananSementara = $_FILES["gambar"]["tmp_name"];
  $error = $_FILES["gambar"]["error"];
  
  // cek apakah ada file yang akan di upload?
  if($error === 4) {
    alertt("gambar wajib di isi!", 'tambah1.php');
  }

  // cek apakah yang di upload adalah gambar?
  $ektensiGambarValid = ["jpg", "jpeg", "png"];
  $strEktensiGambar = explode(".", $namaFile);
  $ektensiGambar = strtolower(end($strEktensiGambar));
  if(!in_array($ektensiGambar, $ektensiGambarValid)) {
    alertt("yang anda upload bukan gambar!!", 'tambah1.php');
    return false;
  }
  
  // mengecek ukuran gambar
  if($ukuranGambar > 1000000) {
    alertt("ukuran gambar jangan lebih dari 1 MB", 'tambah1.php');
    return false;
  }
  
  // lolos pengecekan, upload file ke servenamaFiler
  // buat nama baru sebelum upload
  $namaFileBaru = uniqid();
  $namaFileUpload = '../img/' . $namaFileBaru . '.'. $ektensiGambar;

  move_uploaded_file($penyimpananSementara, $namaFileUpload);
  return $namaFileUpload;
}

?>

<?php function alertt($pesan, $lokasi) { ?>
      <script>
        alert('data berhasil di diubah')
        document.location.href = 'index.php'
      </script>
<?php } ?>