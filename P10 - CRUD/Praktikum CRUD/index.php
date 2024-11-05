<!DOCTYPE html>
<html>

<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn-tambah">Tambah Anggota</a>
        <?php
        include('koneksi.php');

        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            $no = 1;
            echo "<table>";
            echo "<tr><th>No</th><th>Nama</th><th>Jenis Kelamin</th>
                        <th>Alamat</th><th>No. Telp</th><th>Aksi</th></tr>";
            while ($row = mysqli_fetch_array($result)) {
                // Tentukan jenis kelamin berdasarkan nilai di database
                $kelamin = ($row["jenis_kelamin"] === 'L') ? 'Laki-laki' : 'Perempuan';

                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                echo "<td>" . $kelamin . "</td>";
                echo "<td>" . htmlspecialchars($row["alamat"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["no_telp"]) . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row["id"] . "'>Edit</a> | ";
                echo "<a href='#' onclick='konfirmasiHapus(" . $row["id"] . ", \"" . addslashes($row["nama"]) . "\")'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Jika tidak ada data, tampilkan pesan
            echo "Tidak ada data.";
        }

        // Tutup koneksi database
        mysqli_close($koneksi);
        ?>
    </div>
    <script>
        function konfirmasiHapus(id, nama) {
            var konfirmasi = confirm("Apakah anda yakin ingin menghapus data dengan Nama " + nama + "?");
            if (konfirmasi) {
                window.location.href = "proses.php?aksi=hapus&id=" + id;
            }
        }
    </script>
</body>

</html>