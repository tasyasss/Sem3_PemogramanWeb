<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid black;
        }
        th {
            border-color: black;
            background-color: grey;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Vit Zuraida',
        'domisili' => 'Probolinggo',
        'jenis_kelamin' => 'Perempuan'
    ];

    // echo "Nama: {$Dosen ['nama']} <br>";
    // echo "Domisili: {$Dosen ['domisili']} <br>";
    // echo "Jenis Kelamin: {$Dosen ['jenis_kelamin']} <br>";
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
        <tr>
            <td><?php echo $Dosen['nama']; ?></td>
            <td><?php echo $Dosen['domisili']; ?></td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>