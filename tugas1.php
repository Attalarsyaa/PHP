<?php
// Aturan SOAL
/* 91-100 = A+ 
   81-91 = A- 
   71-81 = A 
   51-61 = B- 
   41-51 = C 
   31-41 = C- 
   21-31 = D 
   0-21 = D- 
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






 



