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
      return " : $this->penulis, $this->penerbit";
    }  
    public function getInfoProduk() { //? di class child nya kita juga masih bisa memanggil metthod induk ini dengan nama yang sama dengan cara seperti dalam halaman ini.
      return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})}";
    }
  }
      
  //* Komik: Naruto | Masashi kishimoto | Shonen Jump | (Rp. 30000) 100 halaman.
  //* Game: Uncharted | Neil Druckmann, Sony Computer (Rp. 25000) - 50 jam
class Komik extends Produk{
  public $jmlHalaman;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 'harga', $jmlHalaman) {
    parent::__construct($judul, $penulis , $penerbit , $harga);
    $this->jmlHalaman = $jmlHalaman;
  }
  public function getinfoProduk() {
    return "Komik: | " .parent::getInfoProduk() ." - {$this->jml} $this->jmlHalaman Halaman";
  }
}
  class Game extends Produk{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 'harga', $waktuMain = "waktu main") {
      parent::__construct($judul, $penulis , $penerbit , $harga);
      $this->waktuMain = $waktuMain;
    }
    public function getInfoproduk() {
      return "Game: | " . parent::getInfoProduk() . "{$this->jml} $this->waktuMain ~ Jam";
    }
  }
  
  class Cerita extends Produk {
    public $episode;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 'harga', $episode = "episode"){
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->episode = $episode;
    }
    public function getInfoProduk() {
      return "Cerita | " . parent::getInfoProduk() . "{$this->jml} $this->episode - Episode";
    }
  }

  // $produk1 = new Komik("Naruto", "Nasashi kishimoto", "Shanen Jump", 3000, 100);
  // $produk2 = new Game("Unchurted", "Neil Druckmann", "Shoni Cim", 0, 50);
  // $novel1 = new Cerita("bidadari sang gus", "nisa", "Novel Toon", "gratis", 89);
  // echo $novel1->getInfoProduk();
  // echo $produk1->getinfoProduk();
  // echo "\n";
  // echo $produk2->getInfoProduk();

  // $infoProduk1 = new CetakInfoProduk();
  // echo "komik". $produk1->getLabel();
  // echo "\n";
  // echo "game". $produk2->getLabel();
  // echo $infoProduk1->cetak($produk1);




?>