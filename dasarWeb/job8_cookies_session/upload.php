<?php
    if (isset($_POST["submit"])) {
        $targetdir = "uploads/";  // directory untuk menyimpan file yang diunggah
        $targetfile = $targetdir . basename($_FILES["myFile"]["name"]);
        $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

        // $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        $allowedExtensions = array("txt", "pdf", "doc", "docx");
        $maxsize = 3 * 1024 * 1024;

        if (in_array($fileType, $allowedExtensions) && $_FILES["myFile"]["size"] <= $maxsize) {
            if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetfile)) {
                echo "Berhasil mengunggah file<br>";
                
                // Menampilkan gambar sebagai thumbnail dengan lebar 200px, tinggi otomatis
                // echo "<img src='$targetfile' width='200' style='height: auto;'>";
            } else {
                echo "Gagal mengunggah file";
            }
        } else {
            echo "File tidak valid atau melebihi max. size";
        }
    }
?>
