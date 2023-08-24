<!-- php -->
<!-- require 'function.php';

$id = $_GET["id"];
$display = select("SELECT * FROM final WHERE No = $id")[0];

if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        header("location: final.php");
    }$error = true;
}


<!DOCTYPE html>
<html lag="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input{
            display:block;
        }
    </style>
    <title>Ubah Data</title>
</head>
<body>
    <center>
        <br><br>
        <h2>Ubah Data</h2>
        php  if(isset($error)): ?>
            <p>Gagal Mengubah Data</p>
        php endif; ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="No" value="= $display["No"]?>">
            <input type="hidden" name="Gambar" value="= $display["Gambar"]?>">
            <input type="text" name="Nama" placeholder="Nama" value="= $display["Nama"]?>" required>
            <input type="text" name="Nis" placeholder="Nis" value="= $display["Nis"]?>">
            <input type="text" name="Rayon" placeholder="Rayon" value="= $display["Rayon"]?>"><br>
            <input type="text" name="Sekolah" placeholder="Sekolah" value="= $display["Sekolah"]?>"><br>
            <img src="img/<= $display["Gambar"]?>" width="200">
            <input type="file" name="gambar"><br>
            <button type="submit" name="submit">Ubah</button>
        </form>
    </center>
</body> -->
