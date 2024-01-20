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
    </div>
    </nav>

    <div class="TypePengguna">
    <h2>Hello Admin Toko</h2>
    </div>

        <fieldset class="fiel_edit">
            <?php
                include '../proses/connection.php';
                $ID_Buku = $_GET['ID_Buku'];
                $query = "SELECT * FROM tb_buku WHERE ID_Buku='$ID_Buku'";
                $result = mysqli_query($koneksi, $query);
                if (!$result) {
                    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }
                $data = mysqli_fetch_assoc($result);
            ?>
            <legend>Edit Buku</legend>
            <form action="../proses/edit_proses.php" method="post">
                
                <div class="input">
                    <label>Kode Buku 
                        <small>(Kode Buku harus unik)</small>*
                    </label>
                    <input type="text" name="ID_Buku" placeholder="Kode Buku" required value="<?php echo $data['ID_Buku'] ?>" readonly>
                </div>
                <div class="input">
                    <label>Kategori</label>
                    <input type="text" name="Kategori" placeholder="Kategori Buku" required value="<?php echo $data['Kategori'] ?>">
                </div>
                <div class="input">
                    <label>Nama Buku</label>
                    <input type="text" name="Nama_Buku" placeholder="Nama Buku" required value="<?php echo $data['Nama_Buku'] ?>">
                </div>
                <div class="input">
                    <label>Harga</label>
                    <input type="number" name="harga" placeholder="Harga" required value="<?php echo $data['harga'] ?>">
                </div>
                <div class="input">
                    <label>Stok</label>
                    <input type="number" name="stok" placeholder="Stok" required value="<?php echo $data['stok'] ?>">
                </div>
                <div class="input">
                    <label>Penerbit</label>
                    <select name="penerbit" placeholder="Penerbit" required>
                    <option value="<?php echo $data['penerbit']; ?>" hidden><?php echo $data['penerbit']; ?></option>
                        <?php
                        include 'connection.php';
                        $query = "SELECT * FROM tb_penerbit ORDER BY nama ASC";
                        $result = mysqli_query($koneksi, $query);
                        if (!$result) {
                            die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                        }else {
                            while($fetch = mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $fetch['nama']; ?>" hidden><?php echo $fetch['nama']; ?></option>
                                <option value="<?php echo $fetch['nama']; ?>"><?php echo $fetch['nama']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>                
                </div>
                <div class="input" align="right">
                    <button type="submit" name="edit" onclick="return confirm('Apakah Anda yakin ingin mengubah buku?')">SIMPAN</button>
                    <button type="reset" onclick="window.location.href='admin.php'">Batal</button>
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