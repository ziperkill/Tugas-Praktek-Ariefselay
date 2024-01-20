<?php

if (isset($_POST['edit'])) {
    include 'connection.php';
    $ID_penerbit = $_POST['ID_penerbit'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telpon = $_POST['telpon'];

    $query = "UPDATE tb_penerbit SET nama='$nama', alamat='$alamat', kota='$kota', telpon='$telpon' WHERE ID_penerbit='$ID_penerbit'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Data Penerbit berhasil diedit');window.location='../pengadaan.php';</script>";
    }
}
?>