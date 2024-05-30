<?php
  // ?ada dua cara membuat constanta yaitu menggunakan method define(key,value) dan menggunakan keyword const.
  // *biasakan untuk key atau nama constanta menggunakan kapital

  // konstanta menggunakan define()
  define('NAMA', 'Mohamad Faisal');
  // konstanta menggunakan const
  const UMUR = 23;
  // echo NAMA . "\n";
  // echo UMUR;

  // ?bedanya kalau define() tidak bisa digunakan di dalam konsep objek oriented sedangkan const bisa. contoh:
  class Coba {
    // define('KUNCI', 'Value'); // akan menghasilkan error
    const KUNCI = "value";
  }
  //? cara mengakses konstanta di dalam class adalah sama seperti mengakses class static yaitu di panggil nama class nya kemudian titik 2 nama konstantanya.
  echo Coba::KUNCI; 

  //? di PHP sudah terdapat beberapa konstanta bawaan di antaranya:
  // __LINE__  //* mengembalikan barisnya
  // __FILE__  //* mengemballikan tempat file nya
  // __DIR__   //* mengembalikan direktori
  // __CLASS__
  // __TRAIT__
  // __METHOD__
  // __FUNCTION__
  // __NAMESPACE__
  // __PHP_Incomplete_Class
  // __TRAIT__






?>