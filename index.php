<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Data alamat</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Data Alamat</h1>
            <div class="right_area">
            <img src="unpam.png" width="50px" height="50px">
        </div>
            <div>
                <a href="dashboard.html" class="btn btn-primary">Kembali</a>
            </div>
        </header>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Penghapusan</th>

            </tr>
        </thead>
        <tbody>
        
        <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM tbl_input";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['no']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $data['no']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            
            <?php
        }
        ?>
        </tbody>
        </table>
        <td>
                    <a href="view.php" target="_blank" class="btn btn-info">cetak</a>
                </td>
    </div>
</body>
</html>