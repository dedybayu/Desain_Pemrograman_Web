<?php 
    define('HOST', 'localhost');
    define('USER', 'dedybayu');
    define('PASS', 'dbsn');
    define('DB1', 'prakwebdb');

    $db1 = new mysqli(HOST, USER, PASS, DB1);

    if ($db1->connect_error) {
        die("Koneksi gagal: " . $db1->connect_error);
    }
    
?>