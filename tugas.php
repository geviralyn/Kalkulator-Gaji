<?php


 if (isset($_POST["gaji"])) {
    $gaji = $_POST["gaji"];
    
 }

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
                            <select class="form-select" aria-label="Default select example" style="width: 250px">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="1">Tidak Kawin</option>
                                    <option value="2">Kawin</option>
                            </select>
                           </div>
                        
                           <div class="">
                            <label for="exampleInputJumlah" class="form-label ms-3">Jumlah Tanggungan</label>
                            <select class="form-select ms-3" aria-label="Default select example" style="width: 250px">
                                <!-- <option selected>Open this select menu</option> -->
                                <option value="1">0</option>
                            
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
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p> Gaji Bulanan : <?php echo $gaji; ?> <br>
                        Gaji di Setahunkan :  <?php echo $tahunan; ?> <br>
                        
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>