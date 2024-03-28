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

function tambah1($var) {
  global $koneksi_ke_db;
  $nama = htmlspecialchars($var["nama"]);
  $rasa = htmlspecialchars($var["rasa"]);
  $asal_negara = htmlspecialchars($var["asal_negara"]);
  $tanda_matang = htmlspecialchars($var["tanda_matang"]);
  $kebebasan_makan = htmlspecialchars($var["kebebasan_makan"]);
  $ditemukan_pada = htmlspecialchars($var["ditemukan_pada"]);

  // $gambar = true;
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
  
  echo mysqli_query($koneksi_ke_db, $que);
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
  
  // jika tidak ada gambar yang di muat berarti:
  if($_FILES["gambar"]["error"] == 4) {
    // gambar masih menggunakan yang dulu
    $gambar = $v["gambar_lama"];
  // namun jika ada gambar yang di muat, maka:
  } else { 
    // hapu gambar lama
    unlink($v["gambar_lama"]);
    // unggah gambar baru
    $gambar = upload();
    }

  // simpan data baru ke ke database
  mysqli_query($koneksi_ke_db, "UPDATE buah_buahan SET 
                                  nama = '$nama',
                                  gambar = '$gambar',
                                  rasa = '$rasa',
                                  asal_negara = '$asal_negara',
                                  tanda_matang = '$tanda_matang',
                                  kebebasan_makan = '$kebebasan_makan',
                                  ditemukan_pada = '$ditemukan_pada'
                                  WHERE id = '$id' 
                                ");
  
 mysqli_affected_rows($koneksi_ke_db);
  return mysqli_affected_rows($koneksi_ke_db);
}

function hapus($id, $gambar) {
  global $koneksi_ke_db;
  // menghapus nama file di database
  mysqli_query($koneksi_ke_db, "DELETE FROM buah_buahan WHERE id = $id");
  // menghpus gambar di direktory
  unlink($gambar); 
  return mysqli_affected_rows($koneksi_ke_db);
}

function upload() {
  $namaFile = $_FILES["gambar"]["name"];
  $ukuranGambar = $_FILES["gambar"]["size"];
  $penyimpananSementara = $_FILES["gambar"]["tmp_name"];
  $error = $_FILES["gambar"]["error"];
  
  // cek apakah ada file yang akan di upload?
  if($error === 4) {
    echo "  
    <script>
      alert('gambar wajib di isi')
      document.location.href = 'hapus.php'
    </script>
    ";
    // alertt("gambar wajib di isi!", "tambah1.php");
    return false;
    die;
  }

  // cek apakah yang di upload adalah gambar?
  $ektensiGambarValid = ["jpg", "jpeg", "png"];
  $strEktensiGambar = explode(".", $namaFile);
  $ektensiGambar = strtolower(end($strEktensiGambar));
  if(!in_array($ektensiGambar, $ektensiGambarValid)) {
    echo "  
    <script>
      alert('yang anda upload bukan gambar')
      document.location.href = 'hapus.php'
    </script>
    ";
    // alertt("yang anda upload bukan gambar!!", "tambah1.php");
    return false;
  }
  
  // mengecek ukuran gambar
  if($ukuranGambar > 1000000) {
    echo "  
    <script>
      alert('ukuran gambar jangan lebih dari 1 mb')
      document.location.href = 'hapus.php'
    </script>
    ";
    // alertt("ukuran gambar jangan lebih dari 1 MB", "tambah1.php");
    return false;
  }
  
  // lolos pengecekan, upload file ke servenamaFiler
  // buat nama baru sebelum upload
  $namaFileBaru = uniqid();
  $namaFileUpload = '../../img/' . $namaFileBaru . '.'. $ektensiGambar;

  move_uploaded_file($penyimpananSementara, $namaFileUpload);
  return $namaFileUpload;
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

?>

<?php function alertt($pesan, $lokasi) { ?>
  <script>
    alert($pesan);
    document.location.href = $lokasi;
  </script>
<?php } ?>



