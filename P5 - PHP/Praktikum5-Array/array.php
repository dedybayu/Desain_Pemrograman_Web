<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilailulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilailulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilailulus);


$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "<br><br>Daftar Karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', 
$karyawanPengalamanLimaTahun);

//no9

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob',95],
        ['Charlie',78],
    ],
    'Fisika'=> [
        ['Alice', 90],
        ['Bob',88],
        ['Charlie',75],
    ],
    'Kimia'=> [
        ['Alice', 92],
        ['Bob',80],
        ['Charlie',85],
    ]
];
$mataKuliah = 'Fisika';
echo "<br><br>Daftar nilai mahasiswa dalam matakuliah $mataKuliah: <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}