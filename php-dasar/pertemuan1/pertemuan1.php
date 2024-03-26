<?php 
// standar output
// echo, print // untuk menampilkan ke layar
// print_r() // untuk mencetak Array
// var_dump() // untuk debuging


// penulisan php dan html
// 1. php di dalam html
// $nama = 'faisal'
// 2. html di dalam php

// operator concatenation | operator penggabung string
// menggunakan titik .
// $_depan = "mohamad";
// $_belakang = "faisal";
// $nama_lengkap = $_depan.' '.$_belakang;
// print $nama_lengkap;

// $name = "Alfia";
// $name .= " ";
// $name .= "Damayanti";
// echo $name;


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 

function coba($meong) {
  return 'x '.$meong;
}
?>

<?php var_dump(coba([1,3])); ?>


  <!-- <h1><?= "Hy selamat malam  $nama"; ?></h1> -->

</body>
</html>