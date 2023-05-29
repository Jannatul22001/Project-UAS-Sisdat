<?php
    include 'koneksi.php';
    $id_hewan = $_GET['id_hewan'];
    $sqlGet = "SELECT * FROM hewan WHERE id_hewan='$id_hewan'";
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
                <h1>Tambahkan Data Hewan</h1>
                <form action="edithewan.php" method="post">
                    <label for="id_hewan">ID Hewan</label>
                    <input type="text" id="id_hewan" name="id_hewan" value="<?php echo "$data[id_hewan]"?>" class="form-control" readonly>
                    <label for="jenis_hewan">Jenis Hewan</label>
                    <input type="text" id="jenis_hewan" name="jenis_hewan" value="<?php echo "$data[jenis_hewan]"?>" class="form-control">
                    <label for="nama_hewan">Nama Hewan</label>
                    <input type="text" id="nama_hewan" name="nama_hewan" value="<?php echo "$data[nama_hewan]"?>" class="form-control">
                    <label for="umur">Umur</label>
                    <input type="text" id="umur" name="umur" value="<?php echo "$data[umur]"?>" class="form-control">
                    <label for="harga_hewan">Harga</label>
                    <input type="text" id="harga_hewan" name="harga_hewan" value="<?php echo "$data[harga_hewan]"?>" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $id_hewan = $_POST['id_hewan'];
                $jenis_hewan = $_POST['jenis_hewan'];
                $nama_hewan = $_POST['nama_hewan'];
                $umur = $_POST['umur'];  
                $harga_hewan = $_POST['harga_hewan'];              

                $sqlUpdate =    "UPDATE hewan SET jenis_hewan='$jenis_hewan', nama_hewan='$nama_hewan', umur='$umur', harga_hewan='$harga_hewan' 
                                WHERE id_hewan='$id_hewan'";
                $queryUpdate = mysqli_query($conn, $sqlUpdate);

                header("location: indexhewan.php");
            }
        ?>
    </div?
</body>
</html>