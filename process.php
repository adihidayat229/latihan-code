<?php
include('koneksi.php');
if (isset($_POST["create"])) {
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);
    $alamat = mysqli_real_escape_string($conn, $_POST["alamat"]);
    $sqlInsert = "INSERT INTO tbl_input (nama , alamat ) VALUES ('$nama','$alamat')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Book Added Successfully!";
        header("Location:dashboard.html");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);
    $alamat = mysqli_real_escape_string($conn, $_POST["alamat"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE tbl_input SET nama = '$nama', type = '$type', author = '$author', description = '$description' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "input data berhasil !";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>