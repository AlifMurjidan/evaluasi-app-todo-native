<?php

require 'function.php';
require 'koneksi.php';

// if ( isset($_POST["login"])) {

// 	$username = $_POST["nama"];
// 	$password = $_POST["password"];

// 	$result = mysqli_query($koneksi, "SELECT * FROM user WHERE nama = '$nama'");

// 	// cek username
// 	if ( mysqli_num_rows($result) ===1 ) {

// 		// cek password
// 		$row = mysqli_fetch_assoc($result);
// 	if (password_verify($password, $row["password"]) ) {
// 		// set session
// 		$_SESSION["login"] = true;
// 			header("Location: index.php");
// 			exit;
// 		}
// 	}
// }
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
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! nama dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login ";
		}
	}
	?>
<form method="post" action="ceklogin.php">
        <h1>FORM LOGIN</h1>
        <div>
            <label for="nama">Username :</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </div>
        <section>
            <button type="submit">Login</button>
            <a href="register.php">Register</a>
        </section>
    </form>
</main>
</body>
</html>