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
    <form action = "rot13.php" method = "POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Pengirim</label>
        <input type="text" class="form-control" name="pengirim">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nama Penerima</label>
        <input type="text" class="form-control" name="penerima">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Alamat Penerima</label>
        <input type="text" class="form-control" name="alamat">
    </div>
    <button type="submit" class="btn btn-primary" name="konfirmasi" >Konfirmasi</button>
    </form>
    <button class="btn btn-dark "><a href="menuuser.php">kembali</a></button>
</body>
</html>