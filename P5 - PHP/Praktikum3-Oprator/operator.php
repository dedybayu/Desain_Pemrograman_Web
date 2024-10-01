<?php
    $a = 10;
    $b = 5;
    
    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihkecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Variabel a      : $a <br>";
    echo "Variabel b      : $b<br>";
    echo "Hasil Tambah    : $hasilTambah<br>";
    echo "Hasil Kurang    : $hasilKurang<br>";
    echo "Hasil Kali      : $hasilKali<br>";
    echo "Hasil Bagi      : $hasilBagi<br>";
    echo "Hasil Sisa Bagi : $sisaBagi<br>";
    echo "Hasil Tambah    : $pangkat<br><br>";

    echo "Hasil Sama    : $hasilSama<br>";
    echo "Hasil Tidak Sama    : $hasilTidakSama<br>";
    echo "Hasil Lebih Kecil      : $hasilLebihkecil<br>";
    echo "Hasil Lebih Besar      : $hasilLebihBesar<br>";
    echo "Hasil Lebih Kecil Sama : $hasilLebihKecilSama<br>";
    echo "Hasil Lebih Besar Sama    : $hasilLebihBesarSama<br><br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil AND : $hasilAnd";
    var_dump($hasilOr);
    echo "<br>Hasil OR : $hasilOr";
    var_dump($hasilOr);
    echo "<br>Hasil NOT A : $hasilNotA";
    var_dump($hasilNotA);
    echo "<br>Hasil NOT B : $hasilNotB";
    var_dump($hasilNotB);

    $a += $b;
    echo "<br><br>Setelah operasi a += b, nilai a: $a<br>";
    $a -= $b;
    echo "Setelah operasi a -= b, nilai a: $a<br>";
    $a *= $b;
    echo "Setelah operasi a *= b, nilai a: $a<br>";
    $a /= $b;
    echo "Setelah operasi a /= b, nilai a: $a<br>";
    $a %= $b;
    echo "Setelah operasi a %= b, nilai a: $a<br>";


    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Variabel a: $a<br>";
    echo "Variabel b: $b<br><br>";

    echo "Apakah a identik dengan b (===): $hasilIdentik <br>";
    echo "Apakah a tidak identik dengan b (!==): $hasilTidakIdentik<br>";

?>