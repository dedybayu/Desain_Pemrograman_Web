<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    
    if ($row['level'] == 1) {
        echo "ANda berhasil Login, silahkan ke "; ?> 
        <a href="homeAdmin.html">Halaman Home</a>
        <?php
    } else if ($row['level'] == 2) {
        echo "ANda berhasil Login, silahkan ke "; ?> 
        <a href="homeGuest.html">Halaman Home</a>
        <?php
    } else {
        echo "Login Gagal "; ?> 
        <a href="loginForm.html">Login Kembali</a>
        <?php
        echo mysqli_errno($connect);
    }
?>