<?php
include "koneksi.php";   //memasukan koneksi
include "prosesaes.php"; //memasukan file AES
$idkirim = $_GET['id'];

  if (isset($_POST['selesai'])) {
      $file_tmpname   = $_FILES['file']['tmp_name'];
      //untuk nama file url
      $file           = rand(1000,100000)."-".$_FILES['file']['name'];
      $new_file_name  = strtolower($file);
      $final_file     = str_replace(' ','-',$new_file_name);
      //untuk nama file
      $filename       = rand(1000,100000)."-".pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
      $new_filename  = strtolower($filename);
      $finalfile     = str_replace(' ','-',$new_filename);
      $size           = filesize($file_tmpname);
      $file_source		= fopen($file_tmpname, 'rb');


      $sql1   = "INSERT INTO bukti_kirim VALUES ('$idkirim', '', '$final_file')";
      $query1  = mysqli_query($connect,$sql1) or die(mysqli_error($connect));

      $sql2   = "select * from bukti_kirim where file_url =''";
      $query2  = mysqli_query($connect,$sql2) or die(mysqli_error($connect));

      $url   = $finalfile.".rda";
      $file_url = "file_enkrip/$url";

      $sql3   = "UPDATE bukti_kirim SET file_url ='$file_url' WHERE file_url=''";
      $query3  = mysqli_query($connect,$sql3) or die(mysqli_error($connect));

      $sql4 = "UPDATE pengiriman SET status_kirim ='selesai' WHERE id='$idkirim'";
      $query4  = mysqli_query($connect,$sql4) or die(mysqli_error($connect));

      $file_output		= fopen($file_url, 'wb');

      $mod    = $size%16;
      if($mod==0){
          $banyak = $size / 16;
      }else{
          $banyak = ($size - $mod) / 16;
          $banyak = $banyak+1;
      }

      $key = "abcdefghijuklmno0123456789012345";
      if(is_uploaded_file($file_tmpname)){
          ini_set('max_execution_time', -1);
          ini_set('memory_limit', -1);
          $aes = new AES($key);

         for($bawah=0;$bawah<$banyak;$bawah++){
             $data    = fread($file_source, 16);
             $cipher  = $aes->encrypt($data);
             fwrite($file_output, $cipher);
         }
         fclose($file_source);
         fclose($file_output);

         echo("<script language='javascript'>
          window.location.href='menukurir.php';
          window.alert('Enkripsi Berhasil..');
          </script>");
      }else{
         echo("<script language='javascript'>
          window.location.href='menukurir.php';
          window.alert('Encrypt file mengalami masalah..');
          </script>");
      }
  }
