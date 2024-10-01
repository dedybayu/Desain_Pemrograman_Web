<?php
$daftarNilai = [
    ['nama' => 'Alice', 'nilai' => 85],
    ['nama' => 'Bob', 'nilai' => 95],
    ['nama' => 'Charlie', 'nilai' => 78],
    ['nama' => 'David', 'nilai' => 62],
    ['nama' => 'Eva', 'nilai' => 90]
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);

foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa['nilai'];
}

$rataRataKelas = $totalNilai / $jumlahSiswa;

echo "<h2>Daftar Siswa dengan Nilai di Atas Rata-Rata Kelas</h2>";
echo "<h3>Rata-rata kelas: " . number_format($rataRataKelas, 2) . "</h3>";
echo "<h3>Daftar Nama: </h3>";
echo "<ul>";

foreach ($daftarNilai as $siswa) {
    if ($siswa['nilai'] > $rataRataKelas) {
        echo "<li>Nama: {$siswa['nama']}, Nilai: {$siswa['nilai']}</li>";
    }
}

echo "</ul>";
?>
