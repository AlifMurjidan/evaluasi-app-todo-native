<?php

require 'koneksi.php';
include 'proses.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Todo</title>
</head>
<body>
<main>
<div class=".container-sm">
        <?php
        if (isset($_POST['add'])){
            if($_POST['add']=='berhasil'){
                echo "='alert alert-success'>Tambah Todo Berhasil";
            }elseif($_GET['add']=='gagal'){
                echo "='alert alert-danger'>Tambah Todo Gagal";
            }
            }
        ?>
        <h1>TAMBAH TODO</h1>
        <form method="post">
        <div>
            <label for="todo">Todo :</label>
            <input type="text" name="todo" id="todo">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="add">Tambah</button>
        </br>
    </form>
        </div>
</main>
</body>
</html>