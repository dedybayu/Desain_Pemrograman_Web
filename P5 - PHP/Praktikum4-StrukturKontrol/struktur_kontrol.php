<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br><br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 Kilometer";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "<br><br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "<br><br>Total skor ujian adalah: $totalSkor";

$nilaisiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
echo "<br><br>";
foreach ($nilaisiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$nilaiYangAkanDihitung = array_slice($nilaiSiswa, 2, -2);
$totalNilai = array_sum($nilaiYangAkanDihitung);
$rataRata = $totalNilai / count($nilaiYangAkanDihitung);
echo "Total nilai yang digunakan untuk rata-rata: $totalNilai <br>";
echo "Rata-rata nilai setelah mengabaikan dua nilai tertinggi dan terendah: " . number_format($rataRata, 2);

$hargaProduk = 120000;
$diskonPersen = 20;
if ($hargaProduk > 100000) {
    $diskon = ($diskonPersen / 100) * $hargaProduk;
    $hargaSetelahDiskon = $hargaProduk - $diskon;
} else {
    $hargaSetelahDiskon = $hargaProduk; 
}
echo "<br><br>Harga produk sebelum diskon: Rp " . number_format($hargaProduk, 2) . "<br>";
echo "Diskon yang didapat: Rp " . number_format($diskon, 2) . "<br>";
echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($hargaSetelahDiskon, 2);


$poin = 600;
echo "<br><br>Total skor pemain adalah: $poin<br>";
$hadiah = ($poin > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>
