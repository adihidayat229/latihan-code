<?php
require 'koneksi.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$institution = $_POST["universitas"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_user (fullname, username, universitas, email, password) 
            VALUES ('$fullname', '$username', '$institution', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
