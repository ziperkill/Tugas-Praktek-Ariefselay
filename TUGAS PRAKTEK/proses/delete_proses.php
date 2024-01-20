<?php
include 'connection.php';

// menyimpan data id ke dalam variabel
$ID_Buku = $_GET['ID_Buku'];

// query SQL untuk delete data
$query = "DELETE FROM tb_buku WHERE ID_Buku='$ID_Buku'";
mysqli_query($koneksi, $query);

// mengalihkan ke halaman index.php
header("location:../admin.php");
?>