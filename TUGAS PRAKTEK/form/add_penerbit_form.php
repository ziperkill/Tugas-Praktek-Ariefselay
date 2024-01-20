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
            <legend>Tambah Penerbit</legend>
            <form action="../proses/add_penerbit_proses.php" method="post">
                <div class="input">
                    <label>ID Penerbit</label>
                    <input type="text" name="ID_penerbit" placeholder="ID Penerbit harus unik contoh: SP01" required>
                </div>
                <div class="input">
                    <label>Nama Penerbit</label>
                    <input type="text" name="nama" placeholder="Nama Penerbit" required>
                </div>
                <div class="input">
                    <label>Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" required>
                </div>
                <div class="input">
                    <label>Kota</label>
                    <input type="text" name="kota" placeholder="Kota" required>
                </div>
                <div class="input">
                    <label>Telepon</label>
                    <input type="text" name="telepon" placeholder="Telepon" required>
                <div class="input">
                    <button type="submit" name="tambah">Tambah</button>
                    <button type="reset" onclick="window.location.href='pengadaan.php'">Batal</button>
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