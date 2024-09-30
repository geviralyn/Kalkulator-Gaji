<?php
//variable
$bilangan1 = 5;
$bilangan2 = 10;

$hasil = $bilangan1 + $bilangan2;

echo "hasil ".$hasil;

echo " <br> hasil dari ".$bilangan1." + ".$bilangan2." = ".$hasil;

//percabangan1
$username = "skies";
$password = 234;

echo "<br> <br>";

if ($username=="skies" && $password==234 ) {
    echo "login berhasil";
}else {
    echo "login gagal";
}

echo "<br> <br>";

$nilai = 70;

if ($nilai <=100) {
    echo " A";
} elseif ($nilai <=80) {
    echo " B";
} elseif ($nilai <=70) {
    echo " C";
} else {
    echo " anda tidak lulus";
}

echo "<br> <br>";
//switch case

$keterangan = "S";

switch ($keterangan) {
    case 'S':
        echo "Siswa Sakit";
        break;
    
    case 'A':
        echo "Siswa Alfa";
        break;
    
    case 'I':
        echo "Siswa Izin";
        break;

    default:
        echo "value tidak ditemukan";
        break;
}
?>