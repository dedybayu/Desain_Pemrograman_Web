<?php
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda masih kecil atau variabel umur tidak ditemukan";
}

echo"<br>";

$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: ". $data["nama"];
} else {
    echo "Variabel tidak ditemukan";
}

?>