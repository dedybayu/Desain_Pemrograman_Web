<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];

    if (empty($name) || strlen($name) < 3) {
        echo "Nama lengkap minimal 3 karakter.";
        exit;
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Alamat email tidak valid.";
        exit;
    }

    if (empty($subjek)) {
        echo "Subjek tidak boleh kosong.";
        exit;
    }

    if (empty($pesan)) {
        echo "Pesan tidak boleh kosong.";
        exit;
    }


    $to = "dedybayu@gmail.com";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subjek, $pesan, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan saat mengirim pesan.";
    }
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
