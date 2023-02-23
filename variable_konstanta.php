<?php
//definisi konstanta
define ('PHI', 3.14);

// soal 1. cari nilai dari luas lingkaran dengan jari-jari 8
// soal 2. cari nilai dari keliling lingkaran dengan jari-jari 8

//definisi jari-jari
$jari = 8;
// rumus luas lingkaran
$luas = PHI * $jari * $jari;
//rumus keliling lingkaran
$kll = 2 * PHI * $jari;

//cetak 
echo 'Luas lingkaran dengan jari-jari '.$jari.' adalah '.$luas;
echo '<br/> Keliling lingkaran dengan jari-jari '.$jari.' adalah '.$kll;


?>