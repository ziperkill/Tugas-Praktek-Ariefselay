<?php

include 'connection.php';

if (isset($_POST['tambah'])) {
    $ID_penerbit = $_POST['ID_penerbit'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telpon = $_POST['telpon'];
    $query = "INSERT INTO tb_penerbit VALUES ('$ID_penerbit','$nama','$alamat','$kota','$telpon')";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Data Penerbit berhasil ditambahkan');window.location='../pengadaan.php';</script>";
    }
}