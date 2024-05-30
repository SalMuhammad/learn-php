<?php
// // array_push() - Menambahkan satu atau lebih elemen ke akhir array
// $array = array("apple", "banana");
// array_push($array, "orange");
// print_r($array);

// // array_pop() - Menghapus elemen terakhir dari array
// $array = array("apple", "banana");
// $buah = array_pop($array);
// echo "Buah yang dihapus: $buah\n";
// print_r($array);

// // array_shift() - Menghapus elemen pertama dari array dan mengembalikan nilai elemen tersebut
// $array = array("apple", "banana");
// $buahPertama = array_shift($array);
// echo "Buah pertama yang dihapus: $buahPertama\n";
// print_r($array);

// // array_unshift() - Menambahkan satu atau lebih elemen ke awal array
// $array = array("apple", "banana");
// array_unshift($array, "mango", "strawberry");
// print_r($array);

// // array_slice() - Mengambil sebagian elemen dari array
// $array = array("apple", "banana",'jambu', 'markisa', 'jawwa');
// $bagianArray = array_slice($array, 1, 2);
// print_r($array); // untuk larik asalnya tidak berubah tidak berubah
// print_r($bagianArray);  

// // array_splice() - Menghapus, mengganti, atau menambahkan elemen ke array
// $array = array("apple", "banana",'jambu', 'markisa', 'jawwa', 'manca');
// array_splice($array, 1, 3, ['oncom']);
// print_r($array);

// // array_merge() - Menggabungkan satu atau lebih array
// $array = array('markisa', 'jawwa', 'manca');
// $array2 = array("cherry", "blueberry");
// $gabunganArray = array_merge($array, $array2);
// print_r($gabunganArray);

// // array_search() - Mencari elemen dalam array dan mengembalikan kunci/index elemennya
// $key = array_search("kiwi", $array);
// echo "Kunci dari 'kiwi' dalam array adalah: $key\n";

// // array_key_exists() - Memeriksa apakah kunci atau index tertentu ada dalam array
// $array = [1];
// if (array_key_exists(2, $array)) {
//   echo "Elemen dengan kunci 2 ada dalam array\n";
// } else {echo 'tidak ada index 2 dalam array ini';} // ! peringatan ini tidak akan pernah tampil meskipun index yang di ceknya tidak ada

// // array_keys() - Mengembalikan semua kunci atau subset kunci dari array
// $array = array('markisa', 'jawwa', 'manca');
// $keys = array_keys($array);
// foreach ($array as $key) {
//   echo $key, ' ';
// }

// // array_values() - Mengembalikan semua nilai dari array
// $array = array('markisa', 'jawwa', 'manca');
// $values = array_values($array);
// foreach ($array as $key) {
//   echo $key, ' ';
// }



// ? baru sampai sini!!!
// // array_map() - Mengaplikasikan callback ke elemen-elemen array
// $panjangBuah = array_map('strlen', $gabunganArray);
// print_r($panjangBuah);

// // array_filter() - Memfilter elemen-elemen array menggunakan callback function
// $buahPanjang = array_filter($gabunganArray, function($item) {
//     return strlen($item) > 5;
// });
// print_r($buahPanjang);

// // array_reduce() - Mengurangi array menjadi satu nilai menggunakan callback function
// $totalPanjang = array_reduce($gabunganArray, function($carry, $item) {
//     return $carry + strlen($item);
// }, 0);
// echo "Total panjang semua buah: $totalPanjang\n";
