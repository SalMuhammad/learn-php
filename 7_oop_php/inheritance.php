<?php
  class Produk {
    // untuk pengisian nilai propertinya, bisa di jadikan sebagai default seperti pada contoh berikut ini
    public $judul, $penulis, $penerbit, $harga, $kategori, $jml;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 'harga', /*$ktgr,*/ $jml) { // *variabel di parameter __construct berbeda dengan properti atau bariable di class ini.
      // *kode di blok sini akan selalu dijalankan setiap deklarasi objek di buat.
      $this->judul =$judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      // $this->kategori = $ktgr;
      $this->jml = $jml;

    }
    public function getLabel() {
      return " : $this->penulis, $this->penerbit";
    }  
    public function getInfoProduk() {
      return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})}";
    }
  }
      
   //* Komik: Naruto | Masashi kishimoto | Shonen Jump | (Rp. 30000) 100 halaman.
   //* Game: Uncharted | Neil Druckmann, Sony Computer (Rp. 25000) - 50 jam
  class Komik extends Produk{
    public function getInfoKomik() {
      return "Komik: | {$this->getInfoProduk()} {$this->jml} - Halaman";
    }
  }
  class Game extends Produk{
    public function getInfoGame() {
      return "Game: | {$this->getInfoProduk()} {$this->jml} ~ Jam";
    }
  }
      
  
  $produk1 = new Komik("Naruto", "Nasashi kishimoto", "Shanen Jump", 3000, 100);
  $produk2 = new Game("Unchurted", "Neil Druckmann", "Shoni Cim", 0, 50);

  echo $produk1->getInfoKomik();
  echo "\n";
  echo $produk2->getInfoGame();

  // $infoProduk1 = new CetakInfoProduk();
  // echo "komik". $produk1->getLabel();
  // echo "\n";
  // echo "game". $produk2->getLabel();
  // echo $infoProduk1->cetak($produk1);




?>