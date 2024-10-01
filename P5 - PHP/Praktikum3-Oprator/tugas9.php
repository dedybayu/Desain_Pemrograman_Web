<?php
$total_kursi = 50;
$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;

$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Jumlah kursi yang masih kosong: " . $kursi_kosong . " kursi.<br>";
echo "Persentase kursi yang masih kosong: " . number_format($persentase_kosong, 2) . "%";
?>
