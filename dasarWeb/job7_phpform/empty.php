<?php
    $myArray = array();
    if (empty($myArray)) {
        echo "array tidak terdefinisikan atau kosong";
    } else {
        echo "array terdefinisikan dan tidak kosong";
    }
    echo "<br>";
    if (empty($nonExistentVar)) {
        echo "Variabel tidak terdefinisi atau kosong";
    } else {
        echo "Variabel terdefinisi dan tidak kosong";
    }
    
?>