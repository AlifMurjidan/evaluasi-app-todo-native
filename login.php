<?php

include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Login</title>
</head>
<body>
<main>
<form action="proses-login.php" method="post">
        <h1>FORM LOGIN</h1>
        <div>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" placeholder="Silahkan Masukkan Email Anda">
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" placeholder="Silahkan Masukkan Password Anda">
        </div>
        <section>
            <button type="submit">Login</button>
            <a href="register.php">Register</a>
        </section>
    </form>
</main>
</body>
</html>