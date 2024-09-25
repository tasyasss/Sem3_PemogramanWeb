<?php
    // SOAL NOMER 9
    // function tampilkanHaloDunia(){
    //     echo "Halo dunia! <br>";
    //     tampilkanHaloDunia();
    // }
    // tampilkanHaloDunia();



    // SOAL NOMER 10
    for ($i=1; $i <= 25 ; $i++) { 
        echo "Perulangan ke-{$i} <br>";
    }

    function tampilkanAngka(int $jumlah, int $indeks = 1) {
        echo "Perulangan ke-{$indeks} <br>";
        
        if($indeks < $jumlah){
            tampilkanAngka($jumlah, $indeks + 1);
        }
    }
    tampilkanAngka(20);

    // SOAL NOMER 11
    // SOAL NOMER 12
?>