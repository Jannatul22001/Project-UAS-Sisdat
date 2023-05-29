<?php
    include 'koneksi.php';

    $id_hewan = $_GET['id_hewan'];
    $sqlDelete = "DELETE FROM hewan WHERE id_hewan='$id_hewan'";
    mysqli_query($conn, $sqlDelete);

    header("location: indexhewan.php");
?>