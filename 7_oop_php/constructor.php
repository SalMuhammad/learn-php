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
      return "$this->judul : $this->penulis, $this->penerbit \n";
    }
  }// echo "Game : " . $produk4->getLabel();
  $produk1 = new Produk("Naruto", "Nasashi kishimoto", "Shanen Jump", 3000);
  $produk2 = new Produk("Unchurted", "Neil Druckmann", "Shoni Cim", 0);
  $produk3 = new Produk("Dragon Ball");
  $produk5 = new Produk("bidadari sang gus", "Nisa", "Novel Toon", 0);
  echo $produk1-> getLabel();
  echo $produk2-> getLabel();
  echo $produk3-> getLabel();
  var_dump($produk3)
?>