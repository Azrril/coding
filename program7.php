<?php
// array asosiatif
// tidak berindeks
// menggunakan pasangan "key" dan "value"

$data = ["ani"=>80,"budi"=>90,"charlie"=>100];
// ani,budi,charlie disebut key
// 80,90,100 disebut value
// jika ingin menampilkan value, yang dipanggil adalah key-nya
//  echo $data["ani"]; //hasilnya 80
//  echo $data["charlie"]; //hasilnya 100

foreach($data as $nama => $nilai){
    echo "$nama nilainya $nilai <br>";
}
?>


