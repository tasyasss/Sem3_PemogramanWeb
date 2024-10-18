<?php
if (isset($_FILES['files'])) {
    $errors = array();  // Menyimpan semua error
    $allowed_extensions = array("jpg", "jpeg", "png", "heic");  // Ekstensi yang diizinkan
    $max_file_size = 2 * 1024 * 1024;  // Ukuran maksimal file (2 MB)
    $upload_directory = "documents/";  // Direktori tempat file diunggah

    // Membuat folder jika belum ada
    if (!file_exists($upload_directory)) {
        mkdir($upload_directory, 0777, true);
    }

    // Looping untuk semua file yang diunggah
    $total_files = count($_FILES['file']['name']);
    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validasi ekstensi file
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau HEIC untuk file $file_name";
        }

        // Validasi ukuran file
        if ($file_size > $max_file_size) {
            $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB";
        }

        // Jika tidak ada error, proses pengunggahan file
        if (empty($errors)) {
            if (move_uploaded_file($file_tmp, $upload_directory . $file_name)) {
                echo "File $file_name berhasil diunggah. <br>";
            } else {
                echo "File $file_name gagal diunggah. <br>";
            }
        } else {
            echo implode("<br>", $errors) . "<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
