<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Arief Selay</title>
    
    <link rel="stylesheet" href="css/form.css">

</head>

<body>
<nav class="navbar">
    <h1>Toko Arief Selay</h1>
    <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="admin.php">Admin</a>
        <a href="pengadaan.php">Pengadaan</a>

    </div>
    </nav>

    <div class="TypePengguna">
    <h2>Hello Selamat datang di Toko selay </h2>
    </div>
    <fieldset>
        <!-- Judul pada fieldset -->
        <legend align="center">Data Produk</legend>
        <center>
            <h3>Pencarian Buku</h3>
        
        <form method="GET" action="index.php">
            <label>Cari Buku: </label>
            <input type="text" name="kata_cari" placeholder="Nama Buku"
                value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>" />
            <button type="submit">Cari</button>
        </form>
        </center>
        <table>
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Kategori</th>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Penerbit</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include 'proses/connection.php';

                // jika kita klik cari, maka yang tampil query cari ini
                if(isset($_GET['kata_cari'])) {
                    // menampung variabel kata_cari dari form pencarian
                    $kata_cari = $_GET['kata_cari'];
                    $query = "SELECT * FROM tb_buku WHERE ID_Buku like '%".$kata_cari."%' OR Nama_Buku like '%".$kata_cari."%' ORDER BY ID_Buku ASC";
                } else {
                    // jika tidak ada pencarian, default yang dijalankan query ini
                    $query = "SELECT * FROM tb_buku ORDER BY ID_Buku ASC";
                }

                $result = mysqli_query($koneksi, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Buku']; ?></td>
                    <td><?php echo $row['Kategori']; ?></td>
                    <td><?php echo $row['Nama_Buku']; ?></td>
                    <td><?php echo $row['Harga']; ?></td>
                    <td><?php echo $row['Stok']; ?></td>
                    <td><?php echo $row['Penerbit']; ?></td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </fieldset>
    <br><br><br>

    <fieldset>
            <legend>Data Pernerbit</legend>
            <br>
            <table border="1" width="100%" cellpadding="5" class="left">
                <tr class="center">
                    <th>No</th>
                    <th>ID Penerbit</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                </tr>
                <?php
                include 'proses/connection.php';
                $no = 1;
                
                $query = "SELECT * FROM tb_penerbit ORDER BY nama ASC";

                $data = mysqli_query($koneksi, $query);
                while($fetch = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $fetch['ID_penerbit']; ?></td>
                        <td><?php echo $fetch['nama']; ?></td>
                        <td><?php echo $fetch['alamat']; ?></td>
                        <td><?php echo $fetch['kota']; ?></td>
                        <td><?php echo $fetch['telpon']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </fieldset>
    <!--Footer-->
    <footer>
        <p>&copy;Arief Selay - I.2210019.</p>
    </footer>
</body>
</html>