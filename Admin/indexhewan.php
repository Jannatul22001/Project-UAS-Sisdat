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
        <div class="content">
            <h1>Berikut Data Hewan</h1>
            <div class="container">
                <div class="button">
                    <a href="tambahhewan.php" class="btn btn-light btn-md">Tambah Data</a>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID Hewan</th>
                        <th>Jenis Hewan</th>
                        <th>Nama Hewan</th>
                        <th>Umur</th>
                        <th>Harga Hewan</th>
                        <th>Menu</th>
                    </thead>

                    <?php
                        $sqlGet = "SELECT * FROM hewan";
                        $query = mysqli_query($conn, $sqlGet);
                        while($data = mysqli_fetch_array($query)) {
                            echo "
                                <tbody>
                                    <tr>
                                        <td>$data[id_hewan]</td>
                                        <td>$data[jenis_hewan]</td>
                                        <td>$data[nama_hewan]</td>
                                        <td>$data[umur]</td>
                                        <td>$data[harga_hewan]</td>
                                        <td>
                                            <div class='row'>
                                                <div class='col'>
                                                    <a href='edithewan.php?id_hewan=$data[id_hewan]' class='btn btn-sm btn-warning'>Edit</a>
                                                </div>
                                                <div class='col'>
                                                    <a href='hapushewan.php?id_hewan=$data[id_hewan]' class='btn btn-sm btn-danger'>Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            ";
                        }
                    ?>

                </table>
            </div>
        </div>
    </div>
</body>
</html>