<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Biodata dosen</h2>
    <div class="data">
    <?php
        $dosen = [
            'nama' =>'Elok Nur Hamdana',
            'domisili'=> 'Malang',
            'jenis_kelamin'=> 'Perempuan'];

        echo "Nama : {$dosen ['nama']} <br>";
        echo "Domisili : {$dosen ['domisili']} <br>";
        echo "Jenis Kelamin : {$dosen ['jenis_kelamin']} <br>";
        ?>
    </div>

    
</body>
</html>