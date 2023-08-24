<?php
session_start();
$server = mysqli_connect("localhost", "root", "", "latihan_xpplg");

$sql = "SELECT * FROM final";
$query = mysqli_query($server, $sql);

if ($_SESSION['name'] == '') {
    echo "<script>window.location.href = 'login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- your meta tags and styles -->
</head>

<body>
    <center>
        <h1>Login berhasil</h1>
        <a class="btnn" href="tambah.php">Tambahkan data</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Rayon</th>
                <th>Sekolah</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["Nama"]; ?></td>
                    <td><?= $row["Nis"]; ?></td>
                    <td><?= $row["Rayon"]; ?></td>
                    <td><?= $row["Sekolah"]; ?></td>
                    <td>
                        <?= $row["Aksi"]; ?>
                        <a class="btnn" href="ubahdata.php?id=<?= $row["id"] ?>">Update</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>">Delete</a> |
                        <a href="view.php">View</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
    </center>
    <a class="btn" href="logout.php">Logout</a>
</body>

</html>
