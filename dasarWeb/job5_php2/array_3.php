<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <h2>Multidimensional Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>

        <?php
            $movie = array (
                array("Superman", 2018, 8.7),
                array("The Avengers", 2012, 7.8),
                array("Iron Man", 2018, 7),
                array("Wanda Vision", 2020, 9)
            );
            echo "<tr>";
                echo "<td>".$movie[0][0]."</td>";
                echo "<td>".$movie[0][1]."</td>";
                echo "<td>".$movie[0][2]."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>".$movie[1][0]."</td>";
                echo "<td>".$movie[1][1]."</td>";
                echo "<td>".$movie[1][2]."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>".$movie[2][0]."</td>";
                echo "<td>".$movie[2][1]."</td>";
                echo "<td>".$movie[2][2]."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>".$movie[3][0]."</td>";
                echo "<td>".$movie[3][1]."</td>";
                echo "<td>".$movie[3][2]."</td>";
            echo "</tr>";
        ?>
    </table>
</body>
</html>