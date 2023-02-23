<?php
//cara penulisan array indexing
$buah = ['alpukat','jeruk','mangga','pisang'];
//cara manggil array assosiatif
echo $buah[1];
//cetak jumlah buah
echo '<br/>Jumlah buah '.count($buah);
//cetak seluruh buah
echo "<ol>";
foreach ($buah as $fruit){
    echo "<li> $fruit </li>";
}
echo "</ol>";

//==============================================
//tambahkan buah baru ke dalam array
$buah[]= "Durian";

//ubah buah index 1
$buah[1] = "apel";
//cetak seluruh buah
echo "<ol>";
foreach ($buah as $b){
    echo "<li> $b </li>";
}
echo "</ol>";

?>