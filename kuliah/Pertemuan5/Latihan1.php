<?php 
// ARRAY
//Membuat Array
$hari = array('Senin','Selasa','Rabu');
$bulan = ['Januari','Februari','Maret'];
$myArray = ['Fadhil',19, false];
$binatang = ['🐈‍⬛','🐁','🐒','🐨','🐮'];

// menampilkan isi array
// mencetak satu elemen pada array menggunakan index

echo $hari[1];
echo "<hr>";

// mencetak seluruh array
// var_dump, print_r

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
print_r($binatang);
echo "<hr>";
//
$hari[3] = 'kamis';
print_r($hari);
echo "<br>";
//
$hari[] = "Jum'at";
$hari[] = "Sabtu";
print_r($hari);
echo "<br>";
//
array_push($bulan, 'april','mei');
print_r($bulan);
echo "<hr>";
//
array_pop($hari);
array_pop($hari);
print_r($hari);
?>