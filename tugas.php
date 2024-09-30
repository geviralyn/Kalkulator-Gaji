<?php


 if (isset($_POST["gaji"]) && isset($_POST["status"]) && isset($_POST["tanggungan"])) {
    $gaji = $_POST["gaji"];
    $status = $_POST["status"];
    $tg = $_POST["tanggungan"];
    $Gtahun = $gaji * 12;

 

    if ($status == "tidak" && $tg == "nol") {
        $ptkp = 54000000;}

        elseif ($status == "tidak" && $tg == "satu") {
            $ptkp = 58500000;}

        elseif ($status == "tidak" && $tg == "dua") {
            $ptkp = 63000000;}
    
        elseif ($status == "tidak" && $tg == "tiga") {
            $ptkp = 67500000;}


    if ($status == "kawin" && $tg == "nol") {
        $ptkp = 58500000;}
    
        elseif ($status == "kawin" && $tg == "satu") {
            $ptkp = 63000000;}
    
        elseif ($status == "kawin" && $tg == "dua") {
            $ptkp = 67500000;}
        
        elseif ($status == "kawin" && $tg == "tiga") {
            $ptkp = 72000000;}

    $pkp = $Gtahun - $ptkp;

    $ppth = (5/100) * $pkp;
   
    $ppb = $ppth / 12;

    $kesehatan = (1/100) * $gaji;

    $ketenaga = (2/100) * $gaji;

    $gajibersih = $gaji - ($ppb+$kesehatan+$ketenaga);

    $gajiRupiah      = "Rp" . number_format($gaji, 2);
    $GtahunRupiah    = "Rp" . number_format($Gtahun, 2);   
    $ptkpRupiah      = "Rp" . number_format($ptkp)  . ",- Per Tahun.";
    $pkpRupiah       = "Rp" . number_format($ppth, 2);
    $ppbRupiah       = "Rp" . number_format($ppb, 2);
    $kesehatanRupiah = "Rp" . number_format($kesehatan, 2);
    $tenagaRupiah    = "Rp" . number_format($ketenaga, 2);
    $bersihRupiah    = "Rp" . number_format($gajibersih, 2);
   
}



// if (isset($_POST["tahunan"])) {
//         $tahunan = $gaji * 12;
//     }
    
 

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<style>

</style>
<body>
    <div class="container-fluid mt-5">
        <div class="judul text-center">
                <h2 class="fw-bold" >KALAKULATOR GAJI</h2>
                <p class="fw-semibold"> kalakulator gaji membantu kamu menghitung gaji bersih bulanan dengan lebih mudah. </p>
        </div>       
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="exampleInputGaji" class="form-label">Gaji Kotor Bulanan</label>
                        <input type="text" class="form-control" id="gajiBulanan" name="gaji">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>

                   
                    <div class="mb-3" >
                        <div style="display: flex;">
                           <div class="">
                            <label for="exampleInputStatus" class="form-label">Status Perkawinan</label>
                            <select class="form-select" aria-label="Default select example" style="width: 250px" name="status">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="tidak">Tidak Kawin</option>
                                    <option value="kawin">Kawin</option>
                            </select>
                           </div>
                        
                           <div class="">
                            <label for="exampleInputJumlah" class="form-label ms-3">Jumlah Tanggungan</label>
                            <select class="form-select ms-3" aria-label="Default select example" style="width: 250px" name="tanggungan">
                                <!-- <option selected>Open this select menu</option> -->
                                <option value="nol">0</option>
                                <option value="satu">1</option>
                                <option value="dua">2</option>
                                <option value="tiga">3</option>
                            
                            </select>
                           </div>
                        </div>
                    </div>

                    <!-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->

                    <button type="submit" class="btn btn-primary" style="width: 130px">Hasil</button>
                </form>
                
            </div>

            <div class="col" method="POST">
                <div class="alert alert-warning alert-dismissible fade show" role="alert" type="number">
                    <p> Gaji Bulanan : <?php echo $gajiRupiah; ?> <br>
                        Gaji di Setahunkan :  <?php echo $GtahunRupiah; ?> <br>
                        Penghasilan Tidak Kena Pajak (PTKP) :  <?php echo $ptkpRupiah; ?>
                        Penghasilan Kena Pajak (PKP) :  <?php echo $pkpRupiah; ?>
                    </p>
                    <hr>
                    <p> Pajak Penghasilan Tahunan (PPh 21) : <?php echo $ppthRupiah; ?> <br>
                        Pajak Penghasilan Bulanan : <?php echo $ppbRupiah; ?> <br>
                        BPJS Kesehatan : <?php echo $kesehatanRupiah; ?> <br>
                        BPJS Ketenagakerjaan : <?php echo $tenagaRupiah; ?> <br>
                    </p>
                    <hr>
                    <p > Gaji Bersih Bulanan (Take Home Pay) <br>
                        <p  class="fs-3"><?php echo $bersihRupiah; ?></p>
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>           
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>