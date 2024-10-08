<?php
// Inisialisasi array untuk menyimpan data siswa
$daftarSiswa = [
    [
        'nama' => 'Alice',
        'kursus' => ['Matematika', 'Fisika'],
    ],
    [
        'nama' => 'Bob',
        'kursus' => ['Kimia'],
    ],
    [
        'nama' => 'Charlie',
        'kursus' => ['Matematika', 'Kimia', 'Biologi'],
    ],
];

// Fungsi untuk menampilkan daftar siswa dan kursus
function tampilkanDaftarSiswa($daftarSiswa)
{
    foreach ($daftarSiswa as $siswa) {
        echo "<div class='siswa'>";
        echo "<h3>Nama: " . htmlspecialchars($siswa['nama']) . "</h3>";
        echo "<p>Kursus: " . htmlspecialchars(implode(', ', $siswa['kursus'])) . "</p>";
        echo "</div>";
    }
}

// Menangani penambahan siswa baru jika data tersedia
if (isset($_POST['tambah_siswa'])) {
    $namaSiswaBaru = trim($_POST['nama']);
    $kursusInput = trim($_POST['kursus']);
    $kursusBaru = explode(',', $kursusInput);
    $daftarSiswa[] = [
        'nama' => $namaSiswaBaru,
        'kursus' => $kursusBaru,
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus Online</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h1 {
        color: #333;
    }

    .container {
        max-width: 80%;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
        margin-bottom: 20px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: blue;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #6678aa;
    }

    .siswa {
        margin-bottom: 15px;
        padding: 10px;
        background: #e9ecef;
        border-left: 5px solid #007bff;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Pendaftaran Kursus Online</h1>

        <form method="post" action="">
            <h2>Tambah Siswa Baru</h2>
            <label for="nama">Nama Siswa:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="kursus">Kursus yang Diambil (pisahkan dengan koma):</label>
            <input type="text" id="kursus" name="kursus" required>
            <input type="submit" name="tambah_siswa" value="Tambah Siswa">
        </form>

        <h2>Daftar Siswa dan Kursus yang Diambil</h2>
        <?php
tampilkanDaftarSiswa($daftarSiswa);
?>
    </div>
</body>

</html>