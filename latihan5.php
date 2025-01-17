<?php
// buatlah function dengan nama "hitung_reamur"
// punya parameter dengan nama $suhu
// isinya rumus $hasil = 0.8 * $suhu
// tampilkan hasilnya menggunakan echo

//panggil function tersebut dengan format 
//hitung_reamur(90)

function hitung_reamur($suhu) /*parameter*/ {
    $hasil = 0.8 * $suhu;
    echo $hasil;
}

hitung_reamur(90); //argumen


// buatlah fanction dengan nama hitung_luas, punya 2 parameter : $panjang dan $lebar 
// rumusnya : luas = $panjang * $lebar
// kembalikan nilai $luas 

// panggil function hitung_luas(100,50)

function hitung_luas($panjang, $lebar) {
    $luas = $panjang * $lebar; // Rumus luas
    return $luas; // Mengembalikan nilai luas
}

// Memanggil function dengan nilai panjang dan lebar
echo hitung_luas(100, 50);

?>