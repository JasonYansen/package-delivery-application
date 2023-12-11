<?php
session_start();
include 'koneksi.php';

$error='';
if (isset($_POST['loginkurir'])){
if	(empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password Tidak Valid!";

}else{

$user = mysqli_real_escape_string($connect, $_POST['username']);
$pass = mysqli_real_escape_string($connect, $_POST['password']);

$query = "SELECT username,password FROM kurir WHERE username='$user' AND password=md5('$pass')";
$sql = mysqli_query($connect ,$query);
$rows = mysqli_fetch_array($sql);
	if ($rows) {
		$_SESSION['username']=$user;
		header("location:menukurir.php");
} else 
        header("location:index.php?pesan=gagal");	
	}
}

?>
