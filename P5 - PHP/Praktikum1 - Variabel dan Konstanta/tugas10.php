<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Lingkaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #6678aa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Menghitung Luas Lingkaran</h1>
        <form method="post" action="">
            <label for="jari_jari">Jari-jari Lingkaran:</label>
            <input type="number" id="jari_jari" name="jari_jari" required step="0.01">
            <input type="submit" name="submit" value="Hitung Luas">
        </form>

        <?php
        define("PI", 3.14);

        if (isset($_POST['submit'])) {
            $jariJari = $_POST['jari_jari'];
            $luasLingkaran = PI * $jariJari * $jariJari;

            echo "<h2>Hasil Perhitungan</h2>";
            echo "<p>Luas lingkaran dengan jari-jari $jariJari adalah $luasLingkaran</p>";
        }
        ?>
    </div>
</body>
</html>