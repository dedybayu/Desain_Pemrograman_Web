<?php
    session_start();
?>

<html>
    <body>
        <?php 
            echo "Favorite Color is " . $_SESSION["favcolor"] . "<br>";
            echo "Favorite Animal is " . $_SESSION["favanimal"] . "<br>";
        ?>
    </body>
</html>