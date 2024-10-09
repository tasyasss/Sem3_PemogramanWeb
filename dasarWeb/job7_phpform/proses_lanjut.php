<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['buah'])) {
            $selectedBuah = $_POST['buah'];
            echo "Anda memilih buah: " . htmlspecialchars($selectedBuah) . "<br>";
        }

        if (isset($_POST['warna'])) {
            $selectedWarna = $_POST['warna'];
            echo "Warna favorit Anda: " . implode(", ", array_map('htmlspecialchars', $selectedWarna)) . "<br>";
        } else {
            echo "Anda tidak memilih warna favorit <br>";
        }

        if (isset($_POST['jenis_kelamin'])) {
            $selectedJenisKelamin = $_POST['jenis_kelamin'];
            echo "Jenis kelamin Anda: " . htmlspecialchars($selectedJenisKelamin);
        } else {
            echo "Anda belum memilih jenis kelamin.";
        }
    }
?>