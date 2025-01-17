<?php
//  buatlah sebuah program percabangan if else
// dimana jika $angka isinya 80 tampil lulus
// jika angkanya lebih dari 80 tampil "cumlaude"
// dan jika angkanya kurang dari 80 tamoilkan tidak lulus

$angka = 80; // assignment operator

if ($angka == 80) {
    echo "lulus";
}elseif ($angka < 80) {
    echo "cumlaud";
}else {
    echo "tida lulus";
}
?>