<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();

include "function/pesan_kilat.php";
include "config/koneksi.php";
include "function/anti_injection.php";

$username = anti_injection($koneksi, $_POST['username']);

$password = anti_injection($koneksi, $_POST['password']);

$query = "SELECT username, level, salt, password as hashed_password FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
mysqli_close($koneksi);
$salt = $row['salt'];
$hashed_password = $row['hashed_password'];

if ($salt !== null && $hashed_password !== null) {
    $combined_password = $salt . $password;

    if (password_verify($combined_password, $hashed_password)) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        header("Location: index.php");
    } else {
        pesan('danger', 'Password salah');
        header("Location: login.php");
    }
} else {
    pesan('warning', 'Username tidak ditemukan');
    header("Location: login.php");
}
