<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "koneksi.php";
    include "prosesaes.php";
    $idkirim = $_GET['id'];
    $query = "SELECT * FROM pengiriman WHERE id = '$idkirim'";
    $hasil_mysql = mysqli_query($connect, $query);
    $baris = mysqli_fetch_row($hasil_mysql);
    $status = $baris[4];
    if($status = "selesai"){
        $query2 = "SELECT * FROM bukti_kirim WHERE id = '$idkirim'";
        $hasil_mysql = mysqli_query($connect, $query2);
        $data = mysqli_fetch_row($hasil_mysql);
        $file_path  = $data['1'];
        $file_name  = $data['2'];
        $key = "abcdefghijuklmno0123456789012345";
        $file_size  = filesize($file_path);


            $mod        = $file_size%16;

            $aes        = new AES($key);
            $fopen1     = fopen($file_path, "rb");
            $plain      = "";
            $cache      = "file_dekrip/$file_name";
            $fopen2     = fopen($cache, "wb");

            if($mod==0){
            $banyak = $file_size / 16;
            }else{
            $banyak = ($file_size - $mod) / 16;
            $banyak = $banyak+1;
            }

            ini_set('max_execution_time', -1);
            ini_set('memory_limit', -1);
            for($bawah=0;$bawah<$banyak;$bawah++){

            $filedata    = fread($fopen1, 16);
            $plain       = $aes->decrypt($filedata);
            fwrite($fopen2, $plain);
        }
        $_SESSION["download"] = $cache;
    }
    ?>

    <img src="file_dekrip/<?$file_name?>">
</body>
</html>