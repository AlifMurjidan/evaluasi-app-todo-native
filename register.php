<?php

require 'function.php';
if ( isset($_POST["register"]) ) {
    if ( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
              </script>";
    } else {
        echo mysqli_error($conn2);
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
    <form action="register.php" method="post">
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