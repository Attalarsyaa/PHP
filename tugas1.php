<?php
// Aturan SOAL
/* 91-100 = A+ (Sangat Baik)
   81-91 = A- (Sangat Baik)
   71-81 = A (Sangat Baik)
   61-71 = B (Sangat Baik)
   51-61 = B- (Sangat Baik)
   41-51 = C (Sangat Baik)
   31-41 = C- (Sangat Baik)
   21-31 = D (Sangat Baik)
   0-21 = D- (Sangat Baik)
******************************/
$nilai = 10;
if ($nilai >= 91 AND  $nilai <=100) {
    echo "Nilai anda $nilai, Mendapat grade <b>A+</b> Bobot <b>10</b>";
} elseif ($nilai >= 81 AND $nilai < 91) {
    echo "Nilai anda $nilai, Mendapat grade <b>A-</b>,Bobot <b>8</b>";
} elseif ($nilai >= 71 AND $nilai < 81) {
    echo "Nilai anda $nilai, Mendapat grade <b>A</b>, Bobot <b>6</b>";
} elseif ($nilai >= 61 AND $nilai < 71) {
    echo "Nilai anda $nilai, Mendapat grade <b>B</b>, Bobot <b>4</b>";
} elseif ($nilai >= 51 AND $nilai < 61) {
    echo "Nilai anda $nilai, Mendapat grade <b>B-</b>,Bobot <b>2</b>";
} elseif ($nilai >= 41 AND $nilai < 51) {
    echo "Nilai anda $nilai, Mendapat grade <b>C</b>, Bobot <b>1,5</b>";
} elseif ($nilai >= 31 AND $nilai < 41) {
    echo "Nilai anda $nilai, Mendapat grade <b>C-</b>,Bobot <b>1</b>";
} elseif ($nilai >= 21 AND $nilai < 31) {
    echo "Nilai anda $nilai, Mendapat grade <b>D</b>, Bobot <b>0,5</b>";
} elseif ($nilai >= 11 AND $nilai < 21) {
    echo "Nilai anda $nilai, Mendapat grade <b>D-</b>,Bobot <b>0</b>";
} elseif ($nilai >= 0 AND $nilai < 11) {
    echo "Nilai anda $nilai, Mendapat grade <b>B</b>, Bobot <b>0</b></b>";
} else {
    echo "Nilai $nilai Anda tidak termasuk dalam kategori";
}






 



