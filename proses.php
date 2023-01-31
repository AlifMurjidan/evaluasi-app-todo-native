<?php

require 'koneksi.php';

if (isset($_POST['add'])){
    $Todo = $_POST['Todo'];
    
    echo "<script>console.log('$Todo');</script>";

    $tambah = mysqli_query($koneksi, "INSERT INTO todo VALUES ('$Todo')");
        if ($tambah){
            header("location:index.php?add=berhasil");
        }else{
            header("location:index.php?add=gagal");
        }
}

if (isset($_POST['hapus'])){
    $Id = $_POST['Id_todo'];
    $hapus = mysqli_query($koneksi, "DELETE from todo where Id_todo=$Id");
    if($hapus){
        header("location:index.php?hapus=berhasil");
        }else{  
            header("location:index.php?hapus=gagal");
    }
}

if (isset($_POST['edit'])){
    $id = $_POST['Id_todo'];
    $Status = $_POST['status'];
    $edit = mysqli_query($koneksi, "UPDATE todo SET Id_todo = '$Id', status = '$Status' WHERE todo.Id_todo=$Id");
    if($edit){
        header("location:index.php?update=berhasil");
        }else{
            header("location:index.php?update=gagal");
    }

}


?>