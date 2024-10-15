<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $errors = array();

    if (empty($nama)){
        $errors[] = "Nama Harus Diisi";
    }

    if (empty($email)){
        $errors[] = "Email Harus Diisi";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format Email tidak Valid";
    }
    
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    if (!empty($errors)) {
        foreach ($errors as $key => $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data Berhasil Dikirim: Nama = $nama, email = $email";
    }
}
?>