<?php
// Array berisi quote
$data = [
    "Akan Ku Kerjakan Tapi Makan Gorengan Dulu",
    "Gak Tau Yang Penting Bisa Makan",
    "Mending Jadi Bapak-Bapak, Soalnya Berkelamin Pria",
    "Giliran Nge-angkat Ayang Kuat, Masa Nge-angkat Derajat Orang Tua Gak Kuat",
    "Untung Ente Mas-Mas. Karena Bukan Mba-Mba",
    "Di Suruh Mikir Malah Ngarang, Giliran Suruh Ngarang Malah Mikir MTK dan B.Indo Moment",
    "Katanya Mau Ngebanggain Orang Tua Tapi Kok Masih Aja Fokus Sama Pacarnya?",
    "Lebih Baik Nemenin Ibu ke Pasar Daripada Nemenin Kamu ke Mall",
    "Anda Lapar? Saya Juga Lapar",
    "Hari Ini Masak Apa Cheff?",
    "Hidup Emang Kadang-Kiding. Cicak-cicak di Dinding Tiba-tiba Sad Ending. Hahaha Kambing",
    "Setelah Isya Seorang Anak Bersyukur Dengan Nasi Kotak Hasil Maling Kotak Amal Di Masjid Megah Di Sebelah Gubuk Tuanya",
    "Manfaat, Kegunaan, Fungsi Pacaran?",
];

// Acak array menggunakan shuffle
shuffle($data);

// Ambil quote pertama setelah diacak
$quote = $data[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote with Falling Stars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
            overflow: hidden;
            font-family: Arial, sans-serif;
            color: white;
        }

        .quote-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: fadeInText 2s ease;
        }

        @keyframes fadeInText {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        h1 {
            font-size: 2rem;
            line-height: 1.5;
            margin: 0;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .star {
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 5px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 10px white;
            animation: fall linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translate3d(calc(100vw * var(--x)), calc(100vh * var(--y) - 100vh), 0);
                opacity: 1;
            }
            90% {
                opacity: 0.5;
            }
            100% {
                transform: translate3d(calc(100vw * var(--x)), 100vh, 0);
                opacity: 0;
            }
        }

        /* Create multiple stars dynamically */
        <?php for ($i = 0; $i < 50; $i++): ?>
        .star:nth-child(<?php echo $i + 1; ?>) {
            --x: <?php echo mt_rand(0, 100) / 100; ?>;
            --y: <?php echo mt_rand(0, 100) / 100; ?>;
            animation-duration: <?php echo mt_rand(5, 15); ?>s;
            animation-delay: -<?php echo mt_rand(0, 15); ?>s;
        }
        <?php endfor; ?>
    </style>
</head>
<body>
    <div class="stars">
        <?php for ($i = 0; $i < 50; $i++): ?>
            <div class="star"></div>
        <?php endfor; ?>
    </div>
    <div class="quote-box">
        <h1><?php echo $quote; ?></h1>
    </div>
</body>
</html>
