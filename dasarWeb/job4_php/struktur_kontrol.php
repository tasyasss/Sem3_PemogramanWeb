<?php 
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";
echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";
echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}

echo "<br><br><br><br><br>";

$nilai = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);
sort($nilai);

$nilai_akhir = array_slice($nilai, 2, -2);
$total_nilai = array_sum($nilai_akhir);
$jumlah = count($nilai_akhir);
$rata_rata = $total_nilai / $jumlah;

echo "Total nilai: $total_nilai <br>";
echo "Rata-rata nilai: $total_nilai / $jumlah = $rata_rata";

echo "<br><br><br><br><br>";

$harga = 120000;
$diskon = 20;

if ($harga > 100000) {
    $jumlah_diskon = ($diskon / 100) * $harga;
    $harga_diskon = $harga - $jumlah_diskon;
    echo "Mendapat diskon 20%. Harga sekarang $harga_diskon";
} else {
    echo "Tidak mendapat diskon. Harga sekarang $harga";
}


echo "<br><br><br><br><br>";

$skor = 500;
echo "Total Skor Pemain Adalah: $skor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ";
if ($skor > 500) {
    echo "YA";
} else {
    echo "TIDAK";
}

?>