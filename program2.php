<?php
// swicth case
// hanya akan mengecek yang nilainya persis sama 
// break digunakan untuk menghentikan program
// default digunakan menjalankan selain case

$nilai = 80;

switch($nilai) {
    case 80:
        echo "lulus";
        break;
    case 90:
        echo "cumlaud";
        break;
    default:
        echo "tidak lulus";
        break;    
}

?>