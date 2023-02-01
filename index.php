<?php

require 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Todo</title>
</head>
<body>
<h1>TODO</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Todo</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM todo");
                $no = 1;
                $jumlah = mysqli_num_rows($query);
                while ($data = mysqli_fetch_assoc($query)){
                    $Id = $data['id_todo'];
                    $Todoo = $data['todoo'];
                    $Status = $data['status'];
                
                ?>
                <tr>
                    <td><?= $Id ?></td>
                    <td><?= $Todoo ?></td>
                    <td><?= $Status ?></td>
                    <td>
                    <form method="post">
                       <input type="hidden" name="Id_todo" value="<?= $Id ?>">
                         <button name="hapus" class="btn btn-danger">Delete</button>
                           <a href="update.php?Id_todo=<?= $Id ?>" button class="btn btn-primary">Edit</a></button>
                        </form>
                    </tr>
                    <?php }?>
            </tbody>
            </table>
            <br>
            <a href="tambah.php">
            <button class="btn btn-primary">Tambah Todo</button>
            </a>
            <a href="logout.php">Logout</a>

            <?php if (isset($_POST['hapus'])){
    $Id = $_POST['Id_todo'];
    $hapus = mysqli_query($koneksi, "DELETE from todo where Id_todo=$Id");
    if($hapus){
        header("location:index.php?hapus=berhasil");
        }else{  
            header("location:index.php?hapus=gagal");
    }
}
?>
</body>
</html>