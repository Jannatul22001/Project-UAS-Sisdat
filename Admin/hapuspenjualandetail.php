<?php
    include 'koneksi.php';

    $no_penjualan_detail = $_GET['no_penjualan_detail'];
    $sqlDelete = "DELETE FROM penjualan_detail WHERE no_penjualan_detail='$no_penjualan_detail'";
    mysqli_query($conn, $sqlDelete);

    header("location: indexpenjualandetail.php");
?>