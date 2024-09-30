<?php

    //cek dulu apakah forms ada isisnya
    //kalau ada maka ambil isisan datanya
    if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["operator"])) {
        $numb1 = $_POST["number1"];
        $numb2 = $_POST["number2"];
        $operasi = $_POST["operator"];

        switch ($operasi) {
            case '+':
                $hasil = $numb1 + $numb2;
                break;
        }

        switch ($operasi) {
            case '-':
                $hasil = $numb1 - $numb2;
                break;
        }

        switch ($operasi) {
            case '*':
                $hasil = $numb1 * $numb2;
                break;
        }

        switch ($operasi) {
            case '/':
                $hasil = $numb1 / $numb2;
                break;
        }

        switch ($operasi) {
            case '%':
                $hasil = $numb1 % $numb2;
                break;
        }
    }




?>







<body>

<form action="" method="post">
    bilangan 1:
    <input type="number" name="number1"> <br><br>

    bilangan 2:
    <input type="number" name="number2"> <br><br>

    select operation : <br> <br>
    <input type="radio" name="operator" value="+"> tambah
    <br>
    <input type="radio" name="operator" value="-"> kurang
    <br>
    <input type="radio" name="operator" value="*"> kali
    <br>
    <input type="radio" name="operator" value="/"> bagi
    <br>
    <input type="radio" name="operator" value="%"> modulo
    <br> <br>
    <input type="submit" name="submit" value="hasil">
    <br><br>
    <h2 style="color:blue">Output : <?php echo $hasil ?></h2>
   
</form>

</body>