<?php

// // untuk koneksi ke database
// $koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// //untuk memeriksa koneksi
// if (mysqli_connect_errno()) {
//     die("Koneksi database gagal." . mysqli_connect_error());
// }

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBl','prakwebdb');

// untuk membuat koneksi
$dbl = new mysqli(HOST, USER, PASS, DBl);
?>