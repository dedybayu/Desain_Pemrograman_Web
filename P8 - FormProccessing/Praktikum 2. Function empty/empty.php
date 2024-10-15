<?php
$myArray = array();
if (empty( $myArray)){
    echo"Array Kosong";
} else {
    echo"Array tidak kosong";
}

echo"<br>";

if (empty($nonExistentVar)){
    echo"Variabel tidak terdefinisikan";
} else {
    echo"Variabel terdefinisikan";
}
?>