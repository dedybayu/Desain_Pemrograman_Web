<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>

        <?php
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pemenang", "Bagas Nugraha"];
        echo $Listdosen[2] . "<br>";
        echo $Listdosen[1] . "<br>";
        echo $Listdosen[0] . "<br>";
        echo "<br>";
        for ($i = 0; $i < count($Listdosen); $i++) {
            echo $Listdosen[$i] . "<br>";
        }
        ?>

        <br>

        <?php
?>
    </body>
</html>