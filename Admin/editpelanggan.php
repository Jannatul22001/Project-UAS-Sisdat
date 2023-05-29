<?php
    include 'koneksi.php';
    $id_pelanggan = $_GET['id_pelanggan'];
    $sqlGet = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
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
                <form action="editpelanggan.php" method="post">
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="text" id="id_pelanggan" name="id_pelanggan" value="<?php echo "$data[id_pelanggan]"?>" class="form-control" readonly>
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo "$data[nama_pelanggan]"?>" class="form-control">
                    <label for="alamat_pelanggan">Alamat Pelanggan</label>
                    <input type="text" id="alamat_pelanggan" name="alamat_pelanggan" value="<?php echo "$data[alamat_pelanggan]"?>" class="form-control">
                    <label for="telp_pelanggan">Telp Pelanggan</label>
                    <input type="text" id="telp_pelanggan" name="telp_pelanggan" value="<?php echo "$data[telp_pelanggan]"?>" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $id_pelanggan = $_POST['id_pelanggan'];
                $nama_pelanggan= $_POST['nama_pelanggan'];
                $alamat_pelanggan = $_POST['alamat_pelanggan'];
                $telp_pelanggan= $_POST['telp_pelanggan'];

                $sqlUpdate =    "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', alamat_pelanggan='$alamat_pelanggan', telp_pelanggan='$telp_pelanggan'
                                WHERE id_pelanggan='$id_pelanggan'";
                $queryUpdate = mysqli_query($conn, $sqlUpdate);

                header("location: indexpelanggan.php");
            }
        ?>
    </div?
</body>
</html>