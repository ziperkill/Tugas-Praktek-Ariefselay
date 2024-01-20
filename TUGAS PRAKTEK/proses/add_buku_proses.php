<?php
include "connection.php";

// menangkap data yang di kirim dari form
$ID_Buku = $_POST['ID_Buku'];
$Kategori = $_POST['Kategori'];
$Nama_Buku = $_POST['Nama_Buku'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$Penerbit = $_POST['Penerbit'];

// menginput data ke database
$sql = "INSERT INTO tb_buku (id_buku, Kategori, Nama_Buku, Harga, Stok, Penerbit)
VALUES('$id_buku','$Kategori', '$Nama_Buku', '$Harga','$Stok', '$Penerbit')";
$query = mysqli_query($koneksi, $sql);

// mengalihkan halaman kembali ke Beranda
header("location:../admin.php");