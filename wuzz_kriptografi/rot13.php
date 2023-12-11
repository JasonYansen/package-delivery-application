<?php
    include "prosesaes.php";
    include "koneksi.php";

if (isset($_POST['konfirmasi'])){
    $penerima = $_POST['penerima'];
    $pengirim = $_POST['pengirim'];
    $alamat = $_POST['alamat'];

    $csrpengirim = str_rot13($pengirim);
    $cipher = "AES-256-CBC";
    $key = "abcdefghijuklmno0123456789012345";
    $options = 0;
    $process = str_repeat("0", openssl_cipher_iv_length($cipher));
    $enkpengirim = openssl_encrypt($csrpengirim, $cipher, $key, $options, $process);

    $csrpenerima = str_rot13($penerima);
    $cipher = "AES-256-CBC";
    $key = "abcdefghijuklmno0123456789012345";
    $options = 0;
    $process = str_repeat("0", openssl_cipher_iv_length($cipher));
    $enkpenerima = openssl_encrypt($csrpenerima, $cipher, $key, $options, $process);

    $csralamat = str_rot13($alamat);
    $cipher = "AES-256-CBC";
    $key = "abcdefghijuklmno0123456789012345";
    $options = 0;
    $process = str_repeat("0", openssl_cipher_iv_length($cipher));
    $enkalamat = openssl_encrypt($csralamat, $cipher, $key, $options, $process);

    $query = mysqli_query($connect, "INSERT INTO pengiriman VALUES ('', '$enkpengirim', '$enkpenerima', '$enkalamat', 'Dalam Perjalanan')") or die(mysqli_error($connection));

	if($query){
	    echo "Berhasil menambahakan akun baru";
	    header("location:menuuser.php");
		
    }
	else{
	    echo "INPUT GAGAL";
	}
}
?>