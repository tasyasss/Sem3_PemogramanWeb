<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBl','prakwebdb');

// untuk membuat koneksi
$dbl = new mysqli(HOST, USER, PASS, DBl);

// untuk mengecek apakah gagal
if ($dbl->connect_error) {
    die("Koneksi gagal: " . $dbl->connect_error);
}
?>