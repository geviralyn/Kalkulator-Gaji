<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

    <form action="" method="GET"> 
    <label> nama :</label> 
    <input type="text" name="hewan">

 
    <label> jumlah kaki :</label> 
    <input type="text" name="kaki">

    <input type="submit" value="kirim">
    </form>
</body>
<?php

echo "<br>";

    if (isset($_GET["hewan"]) && isset($_GET["kaki"])) {
        $hewan = $_GET["hewan"];
        $kaki = $_GET["kaki"];
        echo "nama hewan ".$hewan;
        echo "<br> memiliki kaki ".$kaki; 

echo "<br>";

        if ($kaki == 4){
            echo "jenis hewan : mamalia";
        } else {
            echo "bukan termasuk jenis hewan : mamalia";
        }

    }

   



?>


</html>