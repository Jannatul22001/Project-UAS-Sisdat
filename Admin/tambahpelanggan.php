<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ProjectUAS-Kelompok 1B</title>
    <link rel="stylesheet" href="good.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> Pet Adoption</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="beranda.html">BERANDA</a></li>
                    <li><a href="indexhewan.php">HEWAN</a></li>
                    <li><a href="indexpelanggan.php">PELANGGAN</a></li>
                    <li><a href="indexpenjualandetail.php">DETAIL</a></li>
                    <li><a href="indexpenjualan.php">PENJUALAN</a></li>
                </ul>
            </div>
        </div>
        <div class="w-50 mx-auto border p-3 mt-5">
            <div class="content">
                <h1>Tambahkan Data Pelanggan</h1>
                <form action="tambahpelanggan.php" method="post">
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control" required>
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control">
                    <label for="alamat_pelanggan">Alamat Pelanggan</label>
                    <input type="text" id="alamat_pelanggan" name="alamat_pelanggan" class="form-control">
                    <label for="telp_pelanggan">Telp Pelanggan</label>
                    <input type="text" id="telp_pelanggan" name="telp_pelanggan" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
                    <a href="indexpelanggan.php" class="btn btn-dark mt-3">Back</a>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $id_pelanggan = $_POST['id_pelanggan'];
                $nama_pelanggan = $_POST['nama_pelanggan'];
                $alamat_pelanggan = $_POST['alamat_pelanggan'];
                $telp_pelanggan = $_POST['telp_pelanggan'];

                $sqlInsert =    "INSERT INTO pelanggan(id_pelanggan, nama_pelanggan, alamat_pelanggan, telp_pelanggan)
                                VALUES ('$id_pelanggan', '$nama_pelanggan', '$alamat_pelanggan', '$telp_pelanggan')";
                $queryInsert = mysqli_query($conn, $sqlInsert);
            }
        ?>

    </div?
</body>
</html>