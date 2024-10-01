<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Selamat Malam") {
    echo $salam.", ";
    echo"Perkenalkan, nama saya ".$nama."<br>";
    echo "Saya berusia ".hitungUmur(1999, 2024) ." tahun <br>";
    echo "Senang bertemu denganmu";
}

perkenalan("Dedy Bayu");
?>