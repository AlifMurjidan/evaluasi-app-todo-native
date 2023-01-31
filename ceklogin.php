<?php 
 
include 'koneksi.php';
 
$username = $_POST['nama'];
$password = $_POST['password'];
 
$data = mysqli_query($koneksi,"SELECT * from user where nama='$nama' and password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>