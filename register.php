<?php

require 'koneksi.php';

session_start();

if (isset($_POST['nama']) && isset($_POST['password'])){
    $nama = htmlEntities($_POST['nama'],ENT_QUOTES);
    $email = htmlEntities($_POST['email'],ENT_QUOTES);
    $password = md5(htmlEntities($_POST['password'],ENT_QUOTES));

    $query = "INSERT INTO `user` (nama, email, password) VALUES ('$nama', '$email','$password')";
    $result = mysqli_query($koneksi, $query);
    if($result){
       header("Location:login.php");
    }
    else
    {
        echo "Maaf, Anda gagal melakukan registrasi!!!";
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form action="register.php" method="POST">
        <h1>FORM REGISTRASI</h1>
        <div>
            <label for="nama">Username :</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Register</button>
        <footer>Sudah punya akun? <a href="login.php">Login</a></footer>
    </form>
</main>
</body>
</html>