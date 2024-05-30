<?php
  class Produk {
    // untuk pengisian nilai propertinya, bisa di jadikan sebagai default seperti pada contoh berikut ini
    public $judul, $penulis, $penerbit, $harga, $kategori, $jml;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 'harga', $ktgr, $jml) { // *variabel di parameter __construct berbeda dengan properti atau bariable di class ini.
      // *kode di blok sini akan selalu dijalankan setiap deklarasi objek di buat.
      $this->judul =$judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->kategori = $ktgr;
      $this->jml = $jml;

    }
    public function getLabel() {
      return " : $this->penulis, $this->penerbit";
    }  
    public function detileLabel() {
    // public function detileLabel($kategori, $jumlah) {
      //* Komik: Naruto | Masashi kishimoto | Shonen Jump | (Rp. 30000) 100 halaman.
      //* Game: Uncharted | Neil Druckmann, Sony Computer (Rp. 25000) - 50 jam

      $str = "$this->kategori: {$this->getLabel()} | (Rp. $this->harga) ";
      if($this->kategori === "Komik") {
        $str .= "$this->jml - Halaman";
      } else if($this->kategori === "Game") {
        $str .= "$this->jml ~ Jam";
      }
      return $str;
      // $kategoriBaru;
      // ($kategori === "komik" || $kategori === "Komik") ? $kategoriBaru = "halaman" : $kategoriBaru = "jam";
      // return "$kategori: $this->judul | $this->penulis | $this->penerbit |(Rp. $this->harga) $jumlah $kategoriBaru\n";
    }
  }

  class CetakInfoProduk {
    public function cetak(Produk $produk) { //? agar hanya menerima objek produk maka tambahkan keywordn nama kelas nya
      // $str = "{judul | penulis | penerbit}";
      $str = "{$produk->judul} | {$produk->getLabel()} | Rp-{$produk->harga}";
      return "\n" .$str."\n";
    }
  }
  
  $produk1 = new Produk("Naruto", "Nasashi kishimoto", "Shanen Jump", 3000, "Komik", 100);
  $produk2 = new Produk("Unchurted", "Neil Druckmann", "Shoni Cim", 0, "Game", 50);

  echo $produk1-> detileLabel();
  echo "\n";
  echo $produk2-> detileLabel();

  // $infoProduk1 = new CetakInfoProduk();
  // echo "komik". $produk1->getLabel();
  // echo "\n";
  // echo "game". $produk2->getLabel();
  // echo $infoProduk1->cetak($produk1);




?>