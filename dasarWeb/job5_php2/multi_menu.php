<?php
    $menu = [
        [ "nama" => "Beranda" ],
        [ "nama" => "Berita",
            "subMenu" => [
                    [ "nama" => "Wisata",
                        "subMenu" => [
                        [ "nama" => "Pantai" ],
                        [ "nama" => "Gunung" ]
                        ]
                    ],
            [ "nama" => "Kuliner" ],
            [ "nama" => "Hiburan" ],
            ],
        ],
            [ "nama" => "Tentang" ],
            [ "nama" => "Kontak" ]
    ];

    // function tampilkanMenuBertingkat1(array $menu){
    //     echo "<ul>";
    //     foreach ($menu as $key => $item) {
    //         echo "<li>{$item['nama']}</li>";
    //     } 
    //     echo "</ul>";
    // } echo "<br><br>";
    // tampilkanMenuBertingkat1($menu);

    function tampilkanMenuBertingkat(array $menu){
        echo "<ul>";
        foreach ($menu as $key => $item) {
            echo "<li>{$item['nama']}";
                if (isset($item['subMenu'])) {
                    tampilkanMenuBertingkat($item['subMenu']);
                }
            echo "</li>";
        } 
        echo "</ul>";
    }
    tampilkanMenuBertingkat($menu);
?>