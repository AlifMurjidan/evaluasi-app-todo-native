<?php
include 'koneksi.php';
$email=$_POST['email'];
$password=md5($_POST['password']);

$data=mysqli_query($koneksi,"SELECT *from user where email='$email' and password='$password'");

$cek=mysqli_num_rows($data);
if ($cek > 0) {
  $_SESSION['email'] = $email;
  $_SESSION['status'] = "login";
  
  header("location:index.php");
}else {
  echo "<script>alert('Username atau Password anda salah!')</script>";
	echo "<script>document.location='login.php'</script>";
}
 ?>