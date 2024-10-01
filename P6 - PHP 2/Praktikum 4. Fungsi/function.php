<?php
function perkenalan() {
    echo"Selamat Siang, ";
    echo"Perkenalkan, nama saya Dedy Bayu Setiawan<br>";
    echo "Senang bertemu denganmu";
}

for ($i=0; $i < 2; $i++) { 
    perkenalan();
    echo"<br><br>";
}

function perkenalan2($nama, $salam) {
    echo $salam.", ";
    echo"Perkenalkan, nama saya ".$nama."<br>";
    echo "Senang bertemu denganmu";
}

$nama = "Dedy Bayu";
$ucapSalam = "Selamat Siang";

perkenalan2($nama, $ucapSalam);   

echo "<br><br><br>";

function perkenalan3($nama, $salam="Selamat Malam") {
    echo $salam.", ";
    echo"Perkenalkan, nama saya ".$nama."<br>";
    echo "Senang bertemu denganmu";
}

perkenalan3("DedybBayu", "Hello");
echo"<br>";

$nama2 = "Dedy Bayu";
$ucapSalam2 = "Selamat Siang";
perkenalan3($nama2);

echo "<br><br><br>";
// Fungsi dengan nilai pengembalian
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo"Umur saya adalah ". hitungUmur("1999","2024") ."<br>";




?>