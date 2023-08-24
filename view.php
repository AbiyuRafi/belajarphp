<?php
$conn =mysqli_connect("localhost","root", "","latihan_xpplg");

$sql = "SELECT * FROM final";

$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0){

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php while ($row = mysqli_fetch_assoc($query)) : ?>

 <center><td><img src="gambar/<?= $row["Gambar"]?>" class="card-image-top" width="50px"></td></center>
 
<center>
<div class="card-body">
    <td>Nama</td>
    <td> : </td>
    <td><?= $row["Nama"]; ?></td>
<br>
    <td>Nis</td>
    <td> : </td>
    <td><?= $row["Nis"];?> </td>
<br>
    <td>Rayon</td>
    <td> : </td>
    <td><?= $row["Rayon"];?> </td>
<br>
    <td>Sekolah</td>
    <td> : </td>
    <td><?= $row["Sekolah"];?> </td>
<br>
    <td>Hobi</td>
    <td> : </td>
    <td><?= $row["Hobi"];?> </td>
<br>
    <td>Cita - Cita</td>
    <td> : </td>
    <td><?= $row["Cita"];?> </td>
<br>
</div>
<a href="final.php">Back</a>
</center>
<?php endwhile?>
</body>
</html>

