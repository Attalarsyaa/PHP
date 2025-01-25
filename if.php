<?php 
$hasil = "Tidak Lulus";
if ($hasil == "Tidak Lulus") {
    echo "Maaf Anda $hasil";
} 

echo "<h1>Contoh IF Dengan 2 Pilihan</h1>";
if ($hasil == "Lulus") {
    echo "Selamat Anda $hasil";
}   else {
    echo "Maaf Anda $hasil";
}

echo "<h1>Contoh IF Dengan 3 Pilihan</h1>";
$nilai = 100;
echo "<h2>Batas Atas</h2>";
if ($nilai >= 60) {
    echo "Selamat anda <b>LULUS</b>. Nilai anda $nilai";
} elseif ($nilai >= 50) {
    echo "Maaf anda <b>REMEDIAL</b>. Nilai anda $nilai";
} else {
    echo "Maaf anda <b>GAGAL</b>. Nilai anda $nilai";
}

echo "<h2>Batas Bawah</h2>";
if ($nilai < 50) {
    echo "Maaf anda <b>GAGAL</b>. Nilai anda $nilai";
} elseif ($nilai <60) {
    echo "Maaf anda <b>REMEDIAL</b>. Nilai anda $nilai";
} else {
    echo "Selamat anda <b>LULUS</b>. Nilai anda $nilai";
}

echo "<h2>Gabungan Batas Atas Dan Batas Bawah</h2>";
if ($nilai >= 60 AND $nilai <=100) {
    echo "Selamat anda <b>LULUS</b> $nilai";
} elseif ($nilai >= 50 AND $nilai <60) {
    echo "Maaf anda <b>REMEDIAL</b> $nilai";
} elseif ($nilai >=0 AND $nilai <50) {
    echo "Maaf anda <b>GAGAL</b> $nilai";
} else {
    echo "Nilai anda tidak ada dalam <b>KATEGORI</b>";
}
   
