<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="head">
        <h1 class="sub-menu">List Pengiriman</h1><br>
        </div>
    <table class="table table-bordered" style="text-align: center;">
        <tr>
            <th>ID Pesanan</th>
            <th>Nama Pengirim</th>
            <th>Nama Penerima</th>
            <th>Alamat</th>
            <th>Status Pengiriman</th>
        </tr>
    <?php
    include "koneksi.php";
    $query = "SELECT * FROM pengiriman";
    $hasil_mysql = mysqli_query($connect, $query); 
    while($baris = mysqli_fetch_row($hasil_mysql)){
        $idpengiriman = $baris[0];
        $namapengirim = $baris[1];
        $namapenerima= $baris[2];
        $alamat = $baris[3];

        $cipher = "AES-256-CBC";
        $key = "abcdefghijuklmno0123456789012345";
        $options = 0;
        $process = str_repeat("0", openssl_cipher_iv_length($cipher));
        $dekpengirim = openssl_decrypt($namapengirim, $cipher, $key, $options, $process);
        $dekrippengirim = str_rot13($dekpengirim);

        $cipher = "AES-256-CBC";
        $key = "abcdefghijuklmno0123456789012345";
        $options = 0;
        $process = str_repeat("0", openssl_cipher_iv_length($cipher));
        $dekpenerima = openssl_decrypt($namapenerima, $cipher, $key, $options, $process);
        $dekrippenerima = str_rot13($dekpenerima);

        $cipher = "AES-256-CBC";
        $key = "abcdefghijuklmno0123456789012345";
        $options = 0;
        $process = str_repeat("0", openssl_cipher_iv_length($cipher));
        $dekalamat = openssl_decrypt($alamat, $cipher, $key, $options, $process);
        $dekripalamat = str_rot13($dekalamat);
    ?>
        <tr>
            <td><?php echo("$idpengiriman")?></td>
            <td><?php echo("$dekrippengirim")?></td>
            <td><?php echo("$dekrippenerima")?></td>
            <td><?php echo("$dekripalamat")?></td>
            <td><a href="inputkurir.php?id=<?php echo $idpengiriman; ?>">Update</a></td>
        </tr>
        <?php } ?>
    </table>
    <center><button class="btn btn-dark "><a href="menukurir.php">Kembali</a></button></center>
</body>
</html>