<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
    <style>
        .hitung{
        width: 20%;
        height: 10%;
        border-radius: 20px;
        background-color: #6678aa;
        color: rgb(0, 30, 107);
        border: none;
        }

        .hitung:hover{
        color: rgb(121, 122, 211);
        background-color: rgb(52, 52, 109);
        }
    </style>
    <h2 style="color: blue;">Masukkan Dua Bilangan</h2>
    <form method="post">
        Bilangan 1: <input type="number" name="bilangan1" required><br><br>
        Bilangan 2: <input type="number" name="bilangan2" required><br><br>
        <input class="hitung" type="submit" name="submit" value="Hitung">
    </form>

<?php
if (isset($_POST['submit'])) {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];

    $penjumlahan = $bilangan1 + $bilangan2;
    $pengurangan = $bilangan1 - $bilangan2;
    $perkalian = $bilangan1 * $bilangan2;
    $pembagian = $bilangan1 / $bilangan2;

    echo "<h3>Hasil Operasi:</h3>";
    echo "Penjumlahan: $bilangan1 + $bilangan2 = $penjumlahan<br>";
    echo "Pengurangan: $bilangan1 - $bilangan2 = $pengurangan<br>";
    echo "Perkalian: $bilangan1 * $bilangan2 = $perkalian<br>";
    echo "Pembagian: $bilangan1 / $bilangan2 = $pembagian<br>";
}
?>
</body>
</html>
