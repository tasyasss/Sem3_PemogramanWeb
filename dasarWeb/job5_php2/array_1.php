<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
    $ListDosen = ["Zawaruddin", "Vit Zuraida", "Annisa Taufika"];

    echo "Dengan indeks: <br>";
    echo $ListDosen[2]."<br>";
    echo $ListDosen[0]."<br>";
    echo $ListDosen[1]."<br><br>";

    echo "Dengan loop: <br>";
    foreach ($ListDosen as $dosen) {
        echo $dosen."<br>";
    }
    ?>
</body>
</html>