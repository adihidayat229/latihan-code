<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM tbl_input WHERE no='$id'";

if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "data berhasil di hapus!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>