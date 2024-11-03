<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = $_POST['id'] ?? '';
$nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES);
$alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
$no_telp = htmlspecialchars($_POST['no_telp'], ENT_QUOTES);

if (empty($id)) {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $dbl->prepare($query);
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);
} else {
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
    $sql = $dbl->prepare($query);
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);
}
$sql->execute();

echo json_encode(['success' => 'Sukses']);
$dbl->close();
?>
