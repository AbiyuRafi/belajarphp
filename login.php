<?php
session_start();
include 'tampil.php';
if (isset($_SESSION["name"])) {
    echo "<script>window.location.href = 'final.php'</script>";
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM baru WHERE name = '$name'AND password ='$pass' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['name'] = $name;
        echo "<script>window.location.href = 'final.php';</script>";
    } else {
        echo "<script> alert('Username atau Password salah')
         window.location.href = 'login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="stylerl.css">
</head>

<body>

    <div class="form-container">
        <form action="" method="post">
            <h3> Login</h3>
            <input type="text" name="name" required placeholder="Username">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit" value="Login Now" class="form-btn">
            <p> Don't have an account ? <a href="register.php"> Sign</a></p>
        </form>
    </div>

</body>

</html>