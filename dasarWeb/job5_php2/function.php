<?php
    // SOAL KE 4
    // function perkenalan() {
        // echo "Assalamualaikum, ";
        // echo "Perkenalkan, nama saya Elok<br/>";
        // echo "Senang berkenalan dengan Anda<br/>";
    // }
    
    // echo perkenalan(); perkenalan();


    // SOAL KE 5
    // function perkenalan($nama, $salam){
    //     echo $salam.", ";
    //     echo "Perkenalkan, nama saya ".$nama."<br/>"; 
    //     echo "Senang berkenalan dengan Anda<br/>";
    // }
    // perkenalan ("Hamdana", "Hallo");
    
    // echo "<hr>";
    
    // $saya = "Elok";
    // $ucapanSalam = "Selamat pagi";
    
    // perkenalan ($saya, $ucapanSalam);


    // SOAL KE 6
    function perkenalan($nama, $salam = "Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>"; 
        echo "Senang berkenalan dengan Anda<br/>";
    }
    perkenalan ("Hamdana", "Hallo");
    
    echo "<hr>";
    
    $saya = "Elok";
    $ucapanSalam = "Selamat pagi";
    
    perkenalan ($saya);
?>