<?php
    //untuk mencocokkan huruf kecil
    $pattern = '/[a-z]/'; 
    $text = 'This is a Sample Text.';
    if (preg_match($pattern, $text)){
        echo "Huruf kecil ditemukan! <br>";
    } else {
        echo "Tidak ada huruf kecil! <br>";
    }

    //mencocokkan satu atau lebih digit.
    $pattern = '/[0-9]+/'; 
    $text = 'There are 123 apples.';
    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan : " . $matches[0] . "<br>";
    } else {
        echo "Tidak ada yang cocok!<br>";
    }

    
    // mengganti apple dengan banana
    $pattern = '/apple/';
    $replacment = 'banana';
    $text = 'I like apple pie.<br>';
    $new_text = preg_replace($pattern, $replacment, $text);
    echo $new_text;

    //mencocokkan "god", "good", "gooood", dll.
    $pattern = '/go*d/';
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan : " . $matches[0] . "<br>";
    } else {
        echo "Tidak ada yang cocok!<br>";
    }

    // soal 5.5
    $pattern = '/go?d/';
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)){
        echo "<br>Cocokkan : " . $matches[0] . "<br>";
    } else {
        echo "<br>Tidak ada yang cocok!<br>";
    }

    // soal 5.6
    $pattern = '/go{n,m}d/';
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)){
        echo "<br>Cocokkan : " . $matches[0] . "<br>";
    } else {
        echo "<br>Tidak ada yang cocok!<br>";
    }
?>