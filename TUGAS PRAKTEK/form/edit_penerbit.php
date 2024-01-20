<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Arief Selay</title>
    
    <link rel="stylesheet" href="../css/form.css">

</head>

<body>
<nav class="navbar">
    <h1>Toko Arief Selay</h1>
    <div class="navbar-nav">
        <a href="../index.php">Home</a>
        <a href="../admin.php">Admin</a>
        <a href="../pengadaan.php">Pengadaan</a>
    </div>
    </nav>
    <br><br><br><br>
<fieldset>
            <?php
                include '../proses/connection.php';
                $ID_penerbit = $_GET['ID_penerbit'];
                $query = "SELECT * FROM tb_penerbit WHERE ID_penerbit='$ID_penerbit'";
                $result = mysqli_query($koneksi, $query);
                if (!$result) {
                    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }
                $data = mysqli_fetch_assoc($result);
            ?>
            <legend>Edit Penerbit</legend>
            <form action="../proses/edit_penerbit_proses.php" method="post">
                
            <div class="input">
                    <label>ID Penerbit 
                        <small>(ID Penerbit harus unik contoh: SP01)</small>*
                    </label>
                    <input type="text" name="ID_penerbit" placeholder="ID Penerbit" required value="<?php echo $data['ID_penerbit'] ?>">
                </div>
                <div class="input">
                    <label>Nama Penerbit</label>
                    <input type="text" name="nama" placeholder="Nama Penerbit" required value="<?php echo $data['nama'] ?>">
                </div>
                <div class="input">
                    <label>Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" required value="<?php echo $data['alamat'] ?>">
                </div>
                <div class="input">
                    <label>Kota</label>
                    <input type="text" name="kota" placeholder="Kota" required value="<?php echo $data['kota'] ?>">
                </div>
                <div class="input">
                    <label>Telpon</label>
                    <input type="text" name="Telpon" placeholder="Telpon" required value="<?php echo $data['Telpon'] ?>">
                </div>
                <div class="input" align="right">
                    <button type="submit" name="edit" onclick="return confirm('Apakah Anda yakin ingin mengubah data penerbit?')">Edit</button>
                    <button type="reset" onclick="window.location.href='../pengadaan.php'">Batal</button>
                </div>
            </form>
        </fieldset>
    </div>
    <!--Footer-->
    <footer>
        <p>&copy;Arief Selay - I.2210019.</p>
    </footer>
</body>
</html>
