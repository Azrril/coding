<?php
// function
// sekumpuilan kode untuk tugas tertentu, bisa digunakan berkali kali

// function ada 2 :
// 1. tidak mengembalikan nilai 
// 2. mengembalikan nilai

// ada function  bawaan dari PHP
// contoh : mysqli_connect(), mysqli_query()

// ada function buatan pengguna

function cetak(){
    echo "hello world <br>";
    echo "Selamat Datang <br>";
    echo "good bye <br>";
}

cetak();

// $a dan $b disebut "parameter"
function perkalian($a,$b){
    $hasil = $a * $b;
    echo "$hasil <br>";
}
// 4 dan 5 disebut "argument"
perkalian(4,5);
perkalian(100,500);

// ini contoh fuction yang mengembalikan nilai ada kata kunci "returt"
function hitung($angka1,$angka2) {
    $hasil1 = $angka1 * $angka2 - 10;
    return $hasil1;
}

echo hitung(20,10);

?>