<!DOCTYPE html>
<html lang="en">
   <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <style type="text/css">
        * {
        margin: 0px;
        padding: 0px;
        }
        .login {
        background: url("asset/bgg.png");
        background-size: cover;
        height: 100vh;
        width: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        }
        .account-login {
        width: 500px;
        }
        .form-control:focus {
        box-shadow: none;
        }
        p a {
        padding-left: 2px;
        }
        .account-login h1 {
        font-size: 25px;
        text-align: left;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 5px;
        }
        .login-form input {
        width: 100%;
        position: relative;
        border-bottom: 1px solid #a39e9e;
        padding: 0;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        box-shadow: none;
        height: 63px;
        border-radius: 0px;
        }
        .login-form {
        background: #fff;
        float: left;
        width: 100%;
        padding: 15px;
        border-radius: 5px;
        }
        button.btn {
        width: 100%;
        background: #009cff;
        font-size: 20px;
        padding: 11px;
        color: #fff;
        border: 0px;
        margin: 10px 0px 20px;
        }
        .btn:hover{
            color: #fff;
            opacity: 0.8;
        }
        p {
        float: left;
        width: 100%;
        text-align: center;
        font-size: 14px;
        }
        .remember {
        float: left;
        width: 100%;
        margin: 10px 0 0;
        }
        /* Customize the label (the container) */
        .custom-checkbox {
        display: block;
        position: relative;
        padding-left: 27px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 13px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-weight: normal;
        padding-top: 2px;
        float: left;
        }
        /* Hide the browser's default checkbox */
        .custom-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        }
        /* Create a custom checkbox */
        .custom-checkbox .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #bfbcbc;
        }
        /* On mouse-over, add a grey background color */
        .custom-checkbox:hover input ~ .checkmark {
        background-color: #747474;
        }
        /* When the checkbox is checked, add a blue background */
        .custom-checkbox input:checked ~ .checkmark {
        background-color: #2196F3;
        }
        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }
        /* Show the checkmark when checked */
        .custom-checkbox input:checked ~ .checkmark:after {
        display: block;
        }
        /* Style the checkmark/indicator */
        .custom-checkbox .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        }
        @media (max-width: 767px){
        .account-login {
            width: 90%;
        }
        }
    </style>
<body>
    <?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan']== "gagal"){
				echo "Username atau password salah!";
			}
			else if($_GET['pesan']== "logout"){
				echo "Berhasil logout";
			}
			else if($_GET['pesan']== "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin";
			}
		}
	?>
	<br>
    <div class="login">
            <div class="account-login">
               <h1><center>Account Login</center></h1>
               <form action="cekloginuser.php" class="login-form" method="POST">
                  <div class="form-group">
                     <input type="text" name="username" placeholder="Username" class="form-control">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" placeholder="Password"  class="form-control">
                  </div>
                  <button class="btn" name="login">Login</button>
               </form>
               <form action="loginkurir.php" class="login-form" method="POST">
                <button class="btn">Login Kurir</button>
            </form> 
            </div>
        </div>
   </body>
</html>