<?php
$server = "localhost";
$user = "root";
$pass ="";
$db ="db_buku_selay";

$koneksi = mysqli_connect($server, $user, $pass, $db) or 
    die ("Gagal Terhubung");
?>