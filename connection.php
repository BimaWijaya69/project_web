<?php 
    $server ="localhost";
    $username ="root";
    $password ="";
    $database ="toko_baju";

    $mysqli = mysqli_connect($server, $username, $password, $database);

    if (mysqli_connect_errno()) {
        echo 'koneksi gagal, ada masalah pada : '.mysqli_connect_error();
        exit();
        mysqli_close($mysqli);
    }
?>