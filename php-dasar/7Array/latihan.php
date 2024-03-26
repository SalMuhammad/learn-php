<?php 
// // menambahkan elemen Array ke tengah
// $hari = explode(" ", "Senin Selasa Rabu");
// // $hari[1] = "kamis"; // dengan seperti ini akan menimpa elemen index ke 1. 
// $hari[10000] = "sabtu"; // dengan seperti ini akan menambahkan di akhir index. 
// $hari[] = "kamis"; // dengan seperti ini akan selalu menambahkan di akhir index. 

// foreach($hari as $h) {
//   echo $h, "<br>";
// }
// var_dump($hari)





$angka = [1,2,3,4,5];
?>
<style>
  .kotak:hover {
    transform: rotate(180deg);
  }
  .kotak {
    cursor: pointer;
    padding: 20px;
    font-size: 1.2em;
    display: inline-block;
    background-color: salmon;
    color: white;
    transition: 1s;
  }
</style>

<?php for ($i=0; $i < count($angka); $i++) { ?>
  <div class="kotak"><?= $angka[$i]; ?></div>
<?php } ?>




