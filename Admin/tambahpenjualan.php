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
                <h2 class="logo"> Pet Adpotion</h2>
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
                <h1>Tambahkan Data Penjualan</h1>
                <form action="tambahpenjualan.php" method="post">
                    <label for="no_penjualan">No Penjualan</label>
                    <input type="text" id="no_penjualan" name="no_penjualan" class="form-control" required>
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control">
                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                    <input type="date" id="tgl_transaksi" name="tgl_transaksi" class="form-control">
                    <label for="total">Total</label>
                    <input type="text" id="total" name="total" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
                    <a href="indexpenjualan.php" class="btn btn-dark mt-3">Back</a>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $no_penjualan = $_POST['no_penjualan'];
                $id_pelanggan = $_POST['id_pelanggan'];
                $tgl_transaksi = $_POST['tgl_transaksi'];
                $total = $_POST['total'];

                $sqlInsert =    "INSERT INTO penjualan(no_penjualan, id_pelanggan, tgl_transaksi, total)
                                VALUES ('$no_penjualan', $id_pelanggan, '$tgl_transaksi', '$total')";
                $queryInsert = mysqli_query($conn, $sqlInsert);
            }
        ?>

    </div?
</body>
</html>