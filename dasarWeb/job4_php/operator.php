<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
echo "$a + $b = $hasilTambah<br>";
$hasilKurang = $a - $b;
echo "$a - $b = $hasilKurang<br>";
$hasilKali = $a * $b;
echo "$a * $b = $hasilKali<br>";
$hasilBagi = $a / $b;
echo "$a / $b = $hasilBagi<br>";
$sisaBagi = $a % $b;
echo "$a % $b = $sisaBagi<br>";
$pangkat = $a ** $b;
echo "$a ** $b = $pangkat<br>";
echo "<br><br>";

$hasilSama = $a == $b;
echo "$a == $b = $hasilSama<br>";
$hasilTidakSama = $a != $b;
echo "$a != $b = $hasilTidakSama<br>";
$hasilLebihKecil = $a < $b;
echo "$a < $b = $hasilLebihKecil<br>";
$hasilLebihBesar = $a > $b;
echo "$a > $b = $hasilLebihBesar<br>";
$hasilLebihKecilSama = $a <= $b;
echo "$a <= $b = $hasilLebihKecilSama<br>";
$hasilLebihBesarSama = $a >= $b;
echo "$a >= $b = $hasilLebihBesarSama<br>";
echo "<br><br>";

$hasilAnd = $a && $b;
echo "$a && $b = $hasilAnd<br>";
$hasilOr = $a || $b;
echo "$a || $b = $hasilOr<br>";
$hasilNotA = !$a;
echo "!a = $hasilNotA<br>";
$hasilNotB = !$b;
echo "!b = $hasilNotB<br>";
echo "<br><br>";

echo $a, " += ", $b, " = ", $a += $b, "<br>";
echo $a, " -= ", $b, " = ", $a -= $b, "<br>";
echo $a, " *= ", $b, " = ", $a *= $b, "<br>";
echo $a, " /= ", $b, " = ", $a /= $b, "<br>";
echo $a, " %= ", $b, " = ", $a %= $b, "<br>";
echo "<br><br>";

$hasilIdentik = $a === $b;
echo "$a === $b = $hasilIdentik <br>";
$hasilTidakIdentik = $a !== $b;
echo "$a !== $b = $hasilTidakIdentik";
echo "<br><br>";

$kursi = 45;
$pelanggan = 28;
$kosong = $kursi - $pelanggan;
$persentase = (($kursi - $pelanggan) / $kursi) * 100/100;
echo "Jumlah kursi = $kursi <br>"; 
echo "Jumlah pelanggan = $pelanggan <br>"; 
echo "Kursi kosong = $kosong <br>";
echo "Persentase = $persentase % <br><br>";

?>