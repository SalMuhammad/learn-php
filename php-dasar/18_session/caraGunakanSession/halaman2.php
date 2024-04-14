<?php 
session_start();

// sesion akan ada setelah user mengunjungi halaman1.php dan akan hilang setelah mengklose browsernya.
echo $_SESSION["nama"];


// jika ingin menghilangkan session sebelum mengklose browser, dengan menggunakan method session_destroy();

?>
<!-- session_destroy() akan di jalankan di halaman3.php -->
<p>kunjungi halaman <a href="halaman3.php">ini utnuk menghilangkan session</a></p>