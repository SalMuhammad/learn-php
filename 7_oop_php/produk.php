<?php
  
  // jualan produk
  // komik
  // game

  class Produk {
    // untuk pengisian nilai propertinya, bisa di jadikan sebagai default seperti pada contoh berikut ini
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    // public function sayHello($par) {
    //   return "hello $par";
    // }
    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }
  }
  // $produk1 = new Produk();
  // var_dump($produk1 );
  // var_dump($produk1 ->judul);

  // ?untuk mengisi nilai propertinya juga bisa menimpa objeknya langsung
  // $komik = new Produk();
  // $komik-> judul = "naruto";
  // var_dump($komik);
  // var_dump($komik -> judul);
  
  // ?bisa juga menambahkan properti baru yang belum ada di classnya untuk objek yang di tujunya
  // $novel = new Produk();
  // $novel->jmlHalaman = 14;
  // var_dump($komik);
  // var_dump($novel);

  $produk3 = new Produk();
  $produk3->judul = "Naruto";
  $produk3->penulis = "Masashi kishimoto";
  $produk3->penerbit = "Shonen Jump";
  $produk3->harga = 30000;
  
  $produk4 = new Produk();
  $produk4->judul = "Uncharted";
  $produk4->penulis = "Neil Druckmann";
  $produk4->penerbit = "Soni Cim";
  $produk4->harga = 30000;
  
  echo "Komik : " . $produk3->getLabel();
  echo "\n";
  echo "Game : " . $produk4->getLabel();
  
?>