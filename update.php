<?php

include_once 'koneksi.php';
if (isset($_POST['update'])) {
    $Id = $_POST['Id_todo'];
    $Todoo = $_POST['todoo'];
    $Status = $_POST['status'];
    $result = mysqli_query($koneksi, "UPDATE todo SET todoo='$Todoo', status='$Status' WHERE Id_todo=$Id");
    header("location:index.php");
}

?>

<?php
        $Id = $_GET['Id_todo'];
        $query = mysqli_query($koneksi, "SELECT * FROM todo WHERE Id_todo=$Id");
        while($data = mysqli_fetch_assoc($query)){
           $Id =  $data['id_todo'];
            $Todoo = $data['todoo'];
            $Status = $data['status'];
        }
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
        <h1>UPDATE TODO</h1>
        <form method="post" action="update.php" name="update">
        <div>
            <label for="todoo">Todo :</label>
            <input type="text" value="<?= $Todoo ?>" name="todoo">
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
                <tr>
                <input type="hidden" name="Id_todo" value=<?php echo $_GET['Id_todo'];?>>
                <input type="submit" name="update" value="UPDATE">
            </tr>
    </form>
        </div>
</main>
</body>
</html>