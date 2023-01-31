<?php

$conn2 = mysqli_connect("localhost","root","","evaluasi");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function register($data) {
    global $conn2;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn2,$data["password"]);
    $password2 = mysqli_real_escape_string($conn2,$data["password2"]);

    //Cek konfirmasi password
    if( $password !== $password2 ) {    
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }
    
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //cek username sudah ada tau belum
    $result = mysqli_query($conn2, "SELECT nama FROM user WHERE nama = '$nama'");

    if( mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!')
             </script>";
        return false;
    }
    //tambahkan user baru ke database
    mysqli_query($conn2,"INSERT INTO user VALUES('$nama','$email','$password')");
    return mysqli_affected_rows($conn2);
}
?>