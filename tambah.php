<?php

require 'koneksi.php';

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
        <h1>TAMBAH TODO</h1>
        <form method="post" action="tambah.php" name="insert">
        <div>
            <label for="todoo">Todo :</label>
            <input type="text" name="todoo" id="todoo">
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
        <br>
        <button type="submit" class="btn btn-primary" name="add">Tambah</button>
        </br>
        <?php 
        if(isset($_POST['add'])) {
        $todoo = $_POST['todoo'];
        $status = $_POST['status'];

        // memasukan data
        $result = mysqli_query($koneksi,"INSERT INTO todo(todoo,status)values('$todoo','$status')");
        echo 
            header("location:index.php?tambah=berhasil");
        }
        ?>
    </form>
    
</main>
</body>
</html>