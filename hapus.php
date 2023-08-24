<?php
$conn = mysqli_connect("localhost", "root", "", "latihan_xpplg");

$id = $_GET['id'];
$query = "DELETE FROM final WHERE id = '$id' ";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script> alert('Data berhasil dihapus')
    window.location.href = 'final.php';</script>";
} else {
    echo "<script> alert('Data gagal dihapus')
    window.location.href = 'final.php';</script>";
}
?>