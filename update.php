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
        if(isset($_POST['edit'])){
            if($_POST['edit']=='berhasil'){
                echo "<div class='alert alert-success'>Ubah Todo Berhasil</div>";
            }else if($_GET['edit']=='gagal'){
                echo "<div class='alert alert-danger'>Ubah Todo Produk Gagal</div>";
            }
        }
        ?>
        <?php
        $Id = $_GET['Id_todo'];
        $query = mysqli_query($koneksi, "SELECT * FROM todo WHERE Id_todo=$Id");
        while($data = mysqli_fetch_array($query)){
            $Todo = $data['todo'];
            $Status = $data['status'];
        }
        ?>
        <h1>UPDATE TODO</h1>
        <form method="post">
        <div>
            <label for="todo">Todo :</label>
            <input type="text" value="<?= $Todo ?>" name="todo">
        </div>
        <div class="form-group">
                  <label for="">Status</label>
                  <select class="form-control" name="status">
                    <?php if ($konten['status'] == "Sedang dikerjakan") { ?>
                        <option value="Sedang dikerjakan">Sedang dikerjakan</option>
                        <option value="Selesai">Selesai</option>
                    <?php }else { ?>
                        <option value="Sedang dikerjakan">Sedang dikerjakan</option>
                        <option selected value="Selesai">Selesai</option>
                    <?php } ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" name="edit">Ubah Status</button>
    </form>
        </div>
</main>
</body>
</html>