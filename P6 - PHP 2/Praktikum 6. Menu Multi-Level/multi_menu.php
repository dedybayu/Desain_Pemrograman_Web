<?php
$menu = [
    [
        "nama" => "Beranda",
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai",
                    ],
                    [
                        "nama" => "Gunung",
                    ],
                ],
            ],
            [
                "nama" => "Kuliner",
            ],
            [
                "nama" => "Hiburan",
            ],
        ],
    ],
    [
        "nama" => "Tentang",
    ],
    [
        "nama" => "Kontak",
    ],
];

function tampilkanMenuBertingkat(array $menu)
{
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
    }
    echo "</ul>";
}
tampilkanMenuBertingkat($menu);


function tampilkanMenuBertingkat2(array $menu, $level = 0) {
    if ($level == 0) {
        echo '<ul style="list-style-type: disc;">'; 
    } elseif ($level == 1) {
        echo '<ul style="list-style-type: circle;">'; 
    } elseif ($level == 2) {
        echo '<ul style="list-style-type: square;">'; 
    }

    foreach ($menu as $item) {
        echo "<li>{$item['nama']}</li>";
        

        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat2($item['subMenu'], $level + 1); 
        }
    }
    echo "</ul>";
}

tampilkanMenuBertingkat2($menu);

?>