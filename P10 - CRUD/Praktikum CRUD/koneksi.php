<?php
    $koneksi = mysqli_connect("localhost", "dedybayu", "dbsn", "prakwebdb");

    if (mysqli_connect_errno()) {
        die("Koneksi Database Gagal " . mysqli_connect_error());
    }
?>