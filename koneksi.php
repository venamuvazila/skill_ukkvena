<?php
$host = "localhost";
$users = "root";
$pass = "210110";
$db   = "venaskillukk";

$koneksi = mysqli_connect($host, $users, $pass, $db);

if (!$koneksi) {
    die("Maaf Anda Gagal Terhubung Ke Database: " . mysqli_connect_error());
}
?>