<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $selectedBuah = $_POST['buah'];
    if (isset($_POST['buah'])){
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo"Anda memilih buah: " . $selectedBuah . "<br>";

    if (!empty($selectedWarna)) {
        echo"Warna faforit anda: ".implode(", ", $selectedWarna) ."<br>";
    } else {
        echo "Anda tidak memilih warna faforit. <br>";
    }

    echo "Jenis kelamin anda: ". $selectedJenisKelamin . "<br>";
}
?>