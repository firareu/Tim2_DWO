<?php
$servername = "localhost:4306";
$database = "fpaw";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal : " . mysqli_connect_error());
}
