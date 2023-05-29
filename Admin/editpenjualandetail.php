<?php
    include 'koneksi.php';
    $no_penjualan_detail = $_GET['no_penjualan_detail'];
    $sqlGet = "SELECT * FROM penjualan_detail WHERE no_penjualan_detail='$no_penjualan_detail'";
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
                <h1>Tambahkan Detail Penjualan</h1>
                <form action="editpenjualandetail.php" method="post">
                    <label for="no_penjualan_detail">No Penjualan Detail</label>
                    <input type="text" id="no_penjualan_detail" name="no_penjualan_detail" value="<?php echo "$data[no_penjualan_detail]"?>" class="form-control" readonly>
                    <label for="no_penjualan">No Penjualan</label>
                    <input type="text" id="no_penjualan" name="no_penjualan" value="<?php echo "$data[no_penjualan]"?>" class="form-control">
                    <label for="id_hewan">ID Hewan</label>
                    <input type="text" id="id_hewan" name="id_hewan" value="<?php echo "$data[id_hewan]"?>" class="form-control">
                    <label for="qty">Quantity</label>
                    <input type="text" id="qty" name="qty" value="<?php echo "$data[qty]"?>" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $no_penjualan_detail = $_POST['no_penjualan_detail'];
                $no_penjualan = $_POST['no_penjualan'];
                $id_hewan = $_POST['id_hewan'];
                $qty = $_POST['qty'];          

                $sqlUpdate =    "UPDATE penjualan_detail SET no_penjualan_detail='$no_penjualan_detail', no_penjualan='$no_penjualan',id_hewan='$id_hewan', qty='$qty' 
                                WHERE no_penjualan_detail='$no_penjualan_detail'";
                $queryUpdate = mysqli_query($conn, $sqlUpdate);

                header("location: indexpenjualandetail.php");
            }
        ?>
    </div?
</body>
</html>