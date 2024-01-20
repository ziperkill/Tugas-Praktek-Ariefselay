<?php

if (isset($_POST['edit'])) {
    include 'connection.php';
    $ID_Buku = $_POST['ID_Buku'];
    $Kategori = $_POST['Kategori'];
    $Nama = $_POST['Nama_Buku'];
    $Harga = $_POST['Harga'];
    $Stok = $_POST['Stok'];
    $Penerbit = $_POST['Penerbit'];

    $query = "UPDATE tb_buku SET Kategori='$Kategori', Nama_Buku='$Nama', Harga='$Harga', Stok='$Stok', Penerbit='$Penerbit' WHERE ID_Buku='$ID_Buku'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Buku berhasil diedit');window.location='../admin.php';</script>";
    }
}
?>