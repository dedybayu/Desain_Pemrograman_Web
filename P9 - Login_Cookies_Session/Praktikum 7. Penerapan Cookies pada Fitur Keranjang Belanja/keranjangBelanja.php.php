<html>
    <head></head>
    <body>
        <h2>Keranjang Belanja</h2>

        <?php 
            $beliNovel = $_COOKIE['beliNovel'];
            $beliBuku = $_COOKIE['beliBuku'];

            echo "Jumlah Novel: " . $beliNovel . "<br>";
            echo "JumlahBuku: " . $beliBuku;
        ?>
    </body>
</html>