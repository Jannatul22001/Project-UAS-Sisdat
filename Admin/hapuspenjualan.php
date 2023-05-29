<?php
    include 'koneksi.php';

    $no_penjualan = $_GET['no_penjualan'];
    $sqlDelete = "DELETE FROM penjualan WHERE no_penjualan='$no_penjualan'";
    mysqli_query($conn, $sqlDelete);

    header("location: indexpenjualan.php");
?>