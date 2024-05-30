<?php
  class Produk {
    // untuk pengisian nilai propertinya, bisa di jadikan sebagai default seperti pada contoh berikut ini
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 'harga') { // *variabel di parameter __construct berbeda dengan properti atau bariable di class ini.
      // *kode di blok sini akan selalu dijalankan setiap deklarasi objek di buat.
      $this->judul =$judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    public function getLabel() {
      return "$this->judul : $this->penulis, $this->penerbit";
    }  

  }

  class CetakInfoProduk {
    public function cetak(Produk $produk) { //? agar hanya menerima objek produk maka tambahkan keywordn nama kelas nya
      // $str = "{judul | penulis | penerbit}";
      $str = "{$produk->judul} | {$produk->getLabel()} | Rp-{$produk->harga}";
      return $str;
    }
  }
  
  $produk1 = new Produk("Naruto", "Nasashi kishimoto", "Shanen Jump", 3000);
  $produk2 = new Produk("Unchurted", "Neil Druckmann", "Shoni Cim", 0);
 
  $infoProduk1 = new CetakInfoProduk();
  // echo $infoProduk1->cetak('kancir');
  echo $infoProduk1->cetak($produk2);
?>