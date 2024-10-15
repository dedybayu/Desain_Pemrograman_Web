<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan PHP</title>
</head>

<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="proses_lanjut.php">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>
        <label>Pilih Warna faforit</label><br>
        <input type="checkbox" name="warna[]" value="merah" id=""> Merah <br>
        <input type="checkbox" name="warna[]" value="biru" id=""> Biru <br>
        <input type="checkbox" name="warna[]" value="hijau" id=""> Hijau <br>
        <br>
        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki" id=""> Laki-Laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan" id=""> Perempuan <br>
        <br>
        <input type="submit" value="submit" id="">
    </form>
</body>

</html>