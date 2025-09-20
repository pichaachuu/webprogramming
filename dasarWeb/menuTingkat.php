<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]    
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";

        // Cek apakah ada submenu dan pastikan itu array
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']); // Rekursi
        }

        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);