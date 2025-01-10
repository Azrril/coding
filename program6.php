<?php
// perulangan foreac
// biasa digunakan pada array
// misal : menamoilkan data sebuah array

// array adalah = variabel yang bisa digunakan menyimpan sejenis

// di PHP ada 2 jenis array
// 1. array berindex
// 2. array asosiatif

// contoh array berindex
$angka = [7,3,4,5,6];
// index dimulai dari 0
// jadi untuk memanggil angka 7 :
// echo $angka[0];
// untuk memanggil angka 6 :
// echo $angka [4];
foreach($angka as $x){
    echo "$x ";
}
?>