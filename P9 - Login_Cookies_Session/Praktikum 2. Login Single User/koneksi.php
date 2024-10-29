<?php
    $namaHost = "localhost";
    $username = "dedybayu";
    $password = "dbsn";

    $connect = mysqli_connect($namaHost,$username,$password,"prakwebdb");

    if($connect){
        echo"Koneksi dengan MySQL Berhasil";
    } else {
        echo "Koneksi dengan MySQL Gagal" . mysqli_connect_error();
    }
?>