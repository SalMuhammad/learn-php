<?php
  // ? biasanya class itu akan berguna ketika sudah di intansiasi atau di buat objek hasil class tersebut. namun dengan keyword static, kita tidak perpu menginstansiasi objek dari kelasnya. contoh:
  class IniClassBiasa {
    public $iniVariable;
    public function iniMethod() {
      return "sesuatu";
    }
  }
  $objekNya = new IniClassBiasa();
  // ?sekarang ada caraya untuk menjalankan class tanpa menginstansiasi objeknya. jadi kita tidak perlu lagi mendeklarasikan variable dengan keyword new di depannya seperti contoh di atas. yaitu dengan cara sebagai berikut:

  // class StaticClass {
  //   static public $variabel = 'ini variable / properti';
  //   static public $angka = 1;
  //   static public function halo() {
  //     return "hallo. " . self::$angka++ . " kali\n";
  //   }
  // }
  // // ?untuk memanggilnya atau menjalankannya kita hanya perlu langsung memanggil nama kelasnya. contoh:
  // echo StaticClass::$variabel; echo "\n";
  // echo StaticClass::halo();
  // echo StaticClass::halo();
  // echo StaticClass::halo();


  // ? class static nilainya tidak akan berubah meskipun di instasiasi (dibuatkan objeknya) beberapa kali. contoh:

  class Conto {
    // public $angka = 1; // hasilnya akan seperti dibawah
          // nilai 1  kali.
          // nilai 2  kali.
          // nilai 3  kali.
          
          // nilai 1  kali.
          // nilai 2  kali.
          // nilai 3  kali.
    static public $angka = 1; // jika menggunakan statatic hasilnya akan seperti di bawah:
          // nilai 1  kali.
          // nilai 2  kali.
          // nilai 3  kali.

          // nilai 4  kali.
          // nilai 5  kali.
          // nilai 6  kali.
    public function tampilkanAngka() {
      // return "nilai ". $this->angka++  . "  kali.\n"; // jika tanpa static gunakan $this
      return "nilai ". self::$angka++  . "  kali.\n";
    }
  }
  $obj = new Conto();
  echo $obj->tampilkanAngka();
  echo $obj->tampilkanAngka();
  echo $obj->tampilkanAngka()."\n";
  $obj2 = new Conto();
  echo $obj2->tampilkanAngka();
  echo $obj2->tampilkanAngka();
  echo $obj2->tampilkanAngka();
  
  
?>