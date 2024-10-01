<?php
$pesan = "Aku arek Banyuwangi";
echo strrev($pesan) . "<br>";

$pesanPerkata = explode(" ", $pesan);
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerkata);
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>