<?php
require 'koneksi.php';
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];

$query = "INSERT INTO tbl_input (nama, alamat)
VALUES ('$nama', '$alamat')";

if ($result = mysqli_query($conn, $query)) {
    header("Location: dashboard.html");
    // Query was successful
} else {
    // Query failed
    echo "Error: " . mysqli_error($conn);
}