<?php
    include 'koneksi.php';

    $id_pelanggan = $_GET['id_pelanggan'];
    $sqlDelete = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
    mysqli_query($conn, $sqlDelete);

    header("location: indexpelanggan.php");
?>