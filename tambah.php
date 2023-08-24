<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "latihan_xpplg");

if (isset($_POST["Tambah"])) {
    
    $nama = $_POST['Nama'];
    $nis = $_POST['Nis'];
    $rayon = $_POST['Rayon'];
    $sekolah = $_POST['Sekolah'];
    $gambar = $_POST['Gambar'];

    $gambarLama = $_POST["GambarLama"];
    $gambar = $_FILES["Gambar"]["name"];
    $gambar_tmp = $_FILES["Gambar"]["tmp_name"];
    $gambar_error = $_FILES["Gambar"]["error"];

    move_uploaded_file($gambar_tmp, 'gambar/' . $gambar);

    $sql = "INSERT INTO final (id, gambar, nama, nis, rayon, sekolah) 
           VALUES ('','$gambar','$nama','$nis','$rayon','$sekolah')";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert ('data berhasil di tambah')
            window.location.href = 'final.php';</script>
            ";
    } else {
        echo "<script> alert('Data gagal di tambah')
            window.location.href = 'tambah.php';</script>
            ";
    }
    $_SESSION['Nama'] = $nama;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="stylet.css">
</head>

<body>

    <center>
        <h1>Masukan Data</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            
            <input type="text" name="Nama" required placeholder="Nama"><br>
            <input type="text" name="Nis" required placeholder="Nis"><br>
            <input type="text" name="Rayon" required placeholder="Rayon"><br>
            <input type="text" name="Sekolah" required placeholder="Sekolah"><br>
            <input type="text" name="Hobi" required placeholder="Hobi"><br>
            <input type="text" name="Cita - Cita" required placeholder="Cita - cita"><br>
            <input type="submit" name="Tambah" value="Tambah" class="form-btn"><br>
            <input type="file" name="Gambar" required placeholder="Gambar"><br>
        </form>
    </center>
    <a href="final.php">Back</a>
</body>

</html>