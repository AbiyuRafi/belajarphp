<?php

session_start();
if (!isset($_SESSION["name"])) {
  header("Location: login.php");
  exit;
}
$kon = mysqli_connect("localhost", "root", "", "latihan_xpplg");

// ambil data dari url
$id = $_GET["id"];
$assoc = mysqli_query($kon, "SELECT * FROM final WHERE id = $id");
$mhs = mysqli_fetch_assoc($assoc);

if (isset($_POST["ganti"])) {

  global $kon;
  $gambarLama = $_POST["GambarLama"];
  $gambar = $_FILES["Gambar"]["name"];
  $gambar_tmp = $_FILES["Gambar"]["tmp_name"];
  $gambar_error = $_FILES["Gambar"]["error"];

  move_uploaded_file($gambar_tmp, 'gambar/' . $gambar);

  global $id;
  //$gambar = $_POST["Gambar"];
  $nama = $_POST["Nama"];
  $nis = $_POST["Nis"];
  $rayon = $_POST["Rayon"];
  $sekolah = $_POST["Sekolah"];
  $hobi = $_POST["Hobi"];
  $cita = $_POST["Cita"];

  if ($gambar_error === 4) {
    $gambar = $gambarLama;
  }

  $query = "UPDATE final SET 

Nama='$nama',
Gambar ='$gambar',
Nis='$nis',
Rayon='$rayon',
Sekolah='$sekolah',
Hobi='$hobi',
Cita='$cita'   

WHERE id ='$id'";

  mysqli_query($kon, $query) or die(mysqli_error($kon));

  if (mysqli_affected_rows($kon) == 1) {
    echo "<script>alert('Data berhasil diubah')
  document.location.href='final.php'</script>";
  } else {
    echo "<script>alert('Anda tidak mengubah apapun')
  </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="ubah.css">
</head>

<body>

  <center>
    <h1>Update data</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="GambarLama" value="<?= $mhs["Gambar"]; ?>">
      <ul>

        <input type="text" class="form-control" name="Nama" id="Nama" value="<?= $mhs["Nama"] ?>" required></br>
        <input type="text" class="form-control" name="Nis" id="Nis" value="<?= $mhs["Nis"] ?>" required></br>
        <input type="text" class="form-control" name="Rayon" id="Rayon" value="<?= $mhs["Rayon"] ?>" required></br>
        <input type="text" class="form-control" name="Sekolah" id="Sekolah" value="<?= $mhs["Sekolah"] ?>" required></br>
        <input type="text" class="form-control" name="Hobi" id="Hobi" value="<?= $mhs["Hobi"] ?>" required></br>
        <input type="text" class="form-control" name="Cita" id="Cita" value="<?= $mhs["Cita"] ?>" required></br>
        <img src="gambar/<?= $mhs["Gambar"]; ?>" class="poto" alt="" width="150px" height="150px" style="margin-left:   250px;"></br>
        <input type="file" name="Gambar" class="form-control"></br>
        <button type="submit" name="ganti" class="btn btn-danger">Submit</button>

      </ul>
  </center>
  <a href="final.php">Back</a>

  </form>
</body>

</html>