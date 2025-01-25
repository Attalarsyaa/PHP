<?php 
//Belajar Variabel
$a1 = 20;
$a2 = 8;

//Cara menghitung Pertambahan,Perkurangan,Perkalian,Pembagian
echo "Pertambahan,Perkurangan,Perkalian,Pembagian :";
echo "<br>";
echo "$a1 + $a2 =" . ($a1 + $a2) ."<br>";
echo "$a1 - $a2 =" . ($a1 - $a2) ."<br>";
echo "$a1 x $a2 =" . ($a1 * $a2) ."<br>";
echo "$a1 : $a2 =" . ($a1 / $a2) ."<br>";
echo "<hr>";

//Modulus, Increment, Decrement
echo "$a1 % $a2 = " . ($a1 % $a2) . "<br>";
echo '++$a1 = ' . ++$a1 . "<br>";
echo '$a2++ = ' . $a2++ . "<br>";
echo '--$a1 = ' . --$a1 . "<br>";
echo '$a2-- = ' . $a2-- . "<br>";

$web = True;
echo $web;

// Array
$buah = array ("Apel" , "Jreuk" , "Mangga" , "Pisang");
echo  $buah[0] . "<br>";