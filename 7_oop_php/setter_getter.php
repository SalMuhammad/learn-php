<?php
  class Produk {
    // untuk pengisian nilai propertinya, bisa di jadikan sebagai default seperti pada contoh berikut ini
    private $harga, $judul, $penulis, $penerbit, $diskon = 0 ;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 'harga') { // *variabel di parameter __construct berbeda dengan properti atau bariable di class ini.
      // *kode di blok sini akan selalu dijalankan setiap deklarasi objek di buat. 
      $this->judul =$judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga; 
    }
    public function getJudul() {
      return $this->judul;
    }
    public function setJudul($judul) {
      $this->judul = $judul;
    }
    public function getPenulis() {
      return $this->penulis;
    }
    public function setPenulis($penulis) {
      $this->penulis = $penulis;
    }
    public function getPenerbit() {
      return $this->penerbit;
    }
    public function setPenerbit($penerbit) {
      $this->penerbit = $penerbit;
    }
    public function setDiskon($diskon) {
      return $this->diskon = $diskon;
    }
    public function setHarga($harga) {
      $this->harga = $harga;
    }
    public function getHarga() {
      return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getLabel() {
      return " : $this->penulis, $this->penerbit";
    }  
    public function getInfoProduk() { //? di class child nya kita juga masih bisa memanggil metthod induk ini dengan nama yang sama dengan cara seperti dalam halaman ini.
      return "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})}";
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
    return "Komik: | " .parent::getInfoProduk() ." $this->jmlHalaman Halaman";
  }
}
class Game extends Produk{
  public $waktuMain;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 'harga', $waktuMain = "waktu main") {
    parent::__construct($judul, $penulis , $penerbit , $harga);
    $this->waktuMain = $waktuMain;
  }
  public function getInfoproduk() {
    return "Game: | " . parent::getInfoProduk() . " $this->waktuMain ~ Jam";
  }
}

  
  $produk1 = new Komik("Naruto", "Nasashi kishimoto", "Shanen Jump", 250000, 100);
  $produk2 = new Game("Unchurted", "Neil Druckmann", "Shoni Cim", 150000, 7);

  echo "\n";
  echo $produk2->getinfoProduk();
  $produk2->setDiskon(50);
  echo "\n";
  echo $produk2->getinfoProduk();
?>