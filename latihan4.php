<?php
// buat lah array asosiatif $data untuk menyimpan data 
// indonesia - jakarta 
// malaysia - kuala lumpur
// jepang - tokyo
// korea selatan - seoul
// peru - lima

// kemudian tampilkan data menggunakan foreach
// "negara X ibukotanya di Y"

$data = ["indonesai"=>"jakarta", "malaysia"=>"kuala lumpur", "jepang"=>"tokyo", "korea selatan"=>"seoul", "peru"=>"lima"];

foreach ($data as $negara => $ibukota ){
    echo "negara $negara ibukotanya di $ibukota <br>";
}



?>