<?php
// OPP : memandang segala sesuatu sebagai objek 
//  dalam konsep PBO ada "attribute" dan "behavior"

// contoh class
class Hewan {
    // attribute
    public $warna = "merah";

    // behavior
    function get_warna() {
        return $this->warna;
    }

    // behavior
    function cetak() {
        echo "hello world";
    }
}

// $ayam dan $kambing adalah contoh objek
$ayam = new Hewan();
echo $ayam->get_warna();
$ayam->cetak();

$kambing = new Hewan();
echo $kambing->get_warna();
$kambing->cetak();
?>