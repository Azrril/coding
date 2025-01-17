<?php

//buatlah program dengan switch case jika $nama isinya "mario" tampilkan "game"
// jika isinya "marquez" tampilkan "pembalap"
// selain itu, tampilakan "karakter tidak dikenal"

$nama = "mario";

switch ($nama) {
    case "mario" :
        echo "game";
        break;
    case "marquez" :
        echo "pembalap";
        break;
    case "bearbie":
        echo "boneka";
        break;
    default:
        echo "karakter tidak dikenal";
        break;
    
    }


?>