<?php

$host = 'localhost';
$nama = 'root';
$pass = '';
$db = 'evaluasi';

$koneksi = mysqli_connect($host, $nama, $pass, $db);
if(!$koneksi){
    die("Koneksi gagal:".mysql_connect_error());
}
$database = mysqli_select_db($koneksi, 'evaluasi');
?>
