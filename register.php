<?php
include 'tampil.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $sql = "SELECT * FROM baru WHERE email = '$email'AND password ='$pass' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script> alert('Pengguna sudah ada');
            window.location.href = 'register.php'</script>";
        die;
    } else {
        if ($pass != $cpass) {
            $error[] = 'Password tidak sama!';
        } else {
            $insert = "INSERT INTO baru( name,email,password) VALUES ('$name','$email','$pass')";
            mysqli_query($conn, $insert);
            echo "<script> alert ('Registrasi Berhasil!')
            window.location.href = 'login.php';</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="stylerl.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3> Sign-Up</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class ="error-msg">' . $error . '</span>';
                }
            }
            ?>
            <input type="text" name="name" required placeholder="Username">
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <input type="password" name="cpassword" required placeholder="Confirm Password">
            <input type="submit" name="submit" value="SignUp Now" class="form-btn">
            <p>Already have an account ?<a href="login.php"> Login</a></p>
        </form>
    </div>
</body>

</html>