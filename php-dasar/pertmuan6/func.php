<?php 
// ------------------------ date(wajib ada parameter) -------------------------
// // ========================= daftar parameter ============================//
// ----------------------------------------------------------------------------
// D =  mengemballikan 3 digit nama hari pertama
// d =  mengemballikan tanggal 2 digit (01-31)
// j =  mengemballikan tanggal 1 atau 2 digit (1-31)
// l =  mengemballikan nama hari
// L =  mengembalikan nomor hari dari seminggu
// m =  mengemballikan nomor bulan
// M =  mengemballikan 3 digit nama bulan 
// F =  mengemballikan nama bulan penuh
// y =  mengemballikan 2 digit tahun terakhir
// Y =  mengemballikan tahun 
// z =  mengemballikan nomor hari dalam setahun di tambah 1









// time()
// echo time();// mengembalikan detik sejak 1 jan 1970
// echo date("l", time() + 12800); // mengembalikan nama hari lusa
// echo date("l", time() + 60*60*24*100); // mengembalikan nama hari 100 hari ke depan
// echo date("l", time() - 60*60*24*100); // mengembalikan nama hari 100 hari ke belakang
// echo date("d-F~Y", time() - 60*60*24*100); // mengembalikan nama hari 100 hari ke belakang

// membuat detik sendiri 
// mktime(0,0,0,0,0,0);
// mktime(jam, menit, detik, bulan, tanggal, tahun);

// $my_birtday = mktime(06,45,0,4,19,2001); // jumlah detik ulang tahun saya sejak 1 jan 1970

// print date("l", $my_birtday);



// program menghitung umur sese orang dengan menginputkan tanggal, bulan tahun lahirnya.
// function hitungUmur($tgl_lahir, $bln_lahir, $thn_lahir) {
//   $tgl_sekarang = date("j");
//   $bln_sekarang = date("m");
//   $thn_sekarang = date("Y");
//   $selisih = $thn_sekarang - $thn_lahir;
//   // apakah bulan sekarang lebih kecil dari bualn lahir ? jika ya, tahun sekarang kurangi 1
//   if($bln_sekarang < $bln_lahir) {
//     $selisih --;
//   } else if($bln_sekarang == $bln_lahir) {
//     if($tgl_sekarang < $tgl_lahir) {
//       $selisih --;
//     }
//   }
//   return $selisih;
// }
// echo hitungUmur(17, 04, 2001)


// // menghitung umur dengan kalkulasi detik
// function hitungUmurDalamDetik($tgl_lhr, $bln_lhr, $thn_lhr) {
//   $detik_sekarang = time();
//   $detik_lahir = mktime(0, 0, 0, $bln_lhr, $tgl_lhr, $thn_lhr);

//   return $detik_sekarang - $detik_lahir;  
// }

// $umurDalamDetik = hitungUmurDalamDetik(19, 04, 2001);
// $detikDalamSetahun = 360 * 24 * 60 * 60;
// $umur = round($umurDalamDetik / $detikDalamSetahun);

// echo "umur saya adalah $umur tahun"


// // ========================== strtotime() ===================================
// echo date("l", strtotime("17 aug 1945"));
// kegunaannya dengan mktime() namun dalam bentuk string



// =============================== string =======================================
// ------------------------------------------------------------------------------
// // 1. strlen() // menghitung jumlah karakter string.
// $str = 'jana';
// 1. strlen();
// echo strlen($str);
// 2. strcmp() // membandingkan 2 buah string.
//    - mengembalikan 0 jika kedua string sama persis
//    - mengembalikan -1 jika string pertama < string ke 2
//    - mengembalikan 1 jika string pertama > string ke 2
// echo strcmp("gggg", "jjjj");
// // contoh: 
      // function validasiPass($pass_tersimpan, $pass_user) {
      //   $kondisi_login = strcmp($pass_tersimpan, $pass_user);
      //   if($kondisi_login == 0) {
      //     echo "<span style=\"color: green;\">login berhasil!</span>";
      //   } else if($kondisi_login == -1) {
      //     echo "<span style=\"color: red;\">password lebih sedikit dari yang asli!</span>";
      //   } else if($kondisi_login == 1) {
      //     echo "<span style=\"color: red;\">password lebih banyak dari yang asli!</span>";
      //   }
      // }
      // validasiPass("j", "jan")
// 3. explode(delimeter | pembatas, string yang akan di konversi) // memecah string menjadi Array.
      // $str = "ini contoh string yang di robah menjadi Array";
      // $hasil =  explode(" ", $str);
      // var_dump($hasil);
      // print_r(explode(" ", "mencoba str"));

      // contah mengubah alamat seseorang menjadi tersimpan secara rapih.
      // $alamat_user = "Kp. Cigintung, Des. Leuwidulang, Kec. Sodonghilir, Kab. Tasikmalaya, Prov. Jawabarat";
      // $alamat_saya = explode(",", $alamat_user);
      // foreach($alamat_saya as $alamat) {
      //   echo $alamat, "<br>";
      // }
  
// 4. htmlspecialchars() fungsi scurity sederhana






// // =============================== Utiliy ====================================
// // -----------------------------------------------------------------------------
// 1. var_dump();
// 2. isset(); // mengecek apakah variable pernah di buat juga memiliki nilai.
      // - mengembaliikan Boolean 1 atau <kosong>
      // $jawe = "ewehan";
      // echo isset($jawe)
      // if(isset($jawe)) {
      //   echo "variable pernah di buat";
      // } else {
      //   echo "variable belum di buat";
      // }
// 3. empty(); // mengecek apakah variable yang pernah di buat itu kosong atau tidak.
      // mengembalikan boolean 1 atau kosong
      // - jika kosong akan mengembalikan 1 dan jika ada nilai akan mengembalikan <kosong>
      // $jaipong = "jai";
      // echo empty($jaipong);
      // $varibel_1 = ""; // mengembalikan 1
      // $varibel_2 = "ada isinya"; // mengembalikan <kosong>
      // $varibel_3; // mengembalikan <kosong>
      // if(empty($varibel_1)) {
      //   echo '$varibel_1 belum <br>';
      // } else {
      //   echo '$varibel_1 sudah terinisialisai<br>';
      // }
      
      // if(empty($varibel_2)) {
      //   echo '$varibel_2 belum <br>';
      // } else {
      //   echo '$varibel_2 sudah terinisialisai<br>';
      // }
      // if(empty($varibel_3)) {
      //   echo '$varibel_3 belum <br>';
      // } else {
      //   echo '$varibel_3 sudah terinisialisai<br>';
      // }
// 4. die(); // memberhentikan program di bawahnya.
      // echo 1, "<br>";
      // echo 1, "<br>";
      // die('program berhenti');
      // echo 1, "<br>";
      // echo 1, "<br>";

      
// 5. sleep(); // menghentikan program sementara.
        // echo 1, "<br>";
        // echo 1, "<br>";
        // sleep(5);
        // echo 1, "<br>";
// 6. file_exists("alamat file") // digunakan untuk mengecek apakah ada file tertentu
      // if(file_exists("../pertemuan4/latihan1.php")) {
      //   echo "file di temukan";
      // } else echo "file tida ada!";














?>
