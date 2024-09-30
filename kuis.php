<?php 
    // if (isset($_POST["jawaban1"]) && isset($_POST["jawaban2"])) {
    //     $soal1 = $_POST["jawaban1"];
    //     $soal2 = $_POST["jawaban2"];

    //     if ( $soal1 == 4 && $soal2 == "hypertext markup language") {
    //         $benar = "jawban anda benar";
    //     }

    //     elseif ($soal2 == "hypertext markup language" ) {
    //         $jawaban = "reg"
    //     }
    // }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Uji Pengetahuan Anda</h2>
    <form action="jawaban_benar.php" method="POST">
        <p>Pertanyaan 1: Berapakah hasil dari 2 + 2?</p>
        <input type="text" name="jawaban1">
        <p>Pertanyaan 2: Apakah singkatan dari HTML?</p>
        <input type="text" name="jawaban2">
        <input type="submit" value="hitung">
    </form>
</body>
</html>