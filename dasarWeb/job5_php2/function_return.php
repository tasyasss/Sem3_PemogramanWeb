<?php
    // SOAL NOMER 7
    // function hitungUmur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }

    // echo "Umur saya adalah ".hitungUmur(2003, 2024)." tahun";


    // SOAL NOMER 8
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan ($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
    
        echo "Saya berusia ".hitungUmur(2003, 2024)." tahun<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }
    perkenalan ("Natha");

?>