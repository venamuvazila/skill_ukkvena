<?php
include "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from user where username='$username' AND password='$password'";
    $query = mysqli_query($koneksi, $sql);

    $jumlah = mysqli_num_rows($query);
    if ($jumlah > 0) {
        header('location: login_petugas.php');
    } else {
        header('location: loginadmin.php?error=login');
    }
} else {
    echo "username dan password harus diisi!";
}
?>