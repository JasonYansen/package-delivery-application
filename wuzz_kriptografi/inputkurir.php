<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Input Bukti Pengiriman</title>
</head>
<body>
    <?php
    include "koneksi.php";
    $idkirim = $_GET['id'];
    ?>
<form action = "enkripimage.php?id=<?php echo $idkirim; ?>" method = "POST" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-2 control-label" for="inputFile">Upload Bukti Pengiriman</label>
        <div class="col-lg-4">
            <input class="form-control" id="inputFile" placeholder="Input File" type="file" name="file" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="selesai" >Selesaikan Pengiriman</button>
</form>
</body>
</html>