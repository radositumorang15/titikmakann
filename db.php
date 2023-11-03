<?php
$host ="localhost";
$username="root";
$password ="";
$database="rpl";
$koneksi = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()){
    echo "Koneksi gagal:" . mysqli_connect_error();
}
?>