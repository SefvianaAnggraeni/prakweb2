<?php
//cara penulisan array indexing
$buah = ['alpukat','jeruk','mangga'];
//cara manggil array assosiatif
echo $buah[1];
//array assosiatif
$buah = ['a'=>'alpukat','j'=>'jeruk','m'=>'mangga'];

//cara mencetak array assosiatif
echo "<ol>";
foreach ($buah as $fruit => $k) {
    echo "<li> $fruit - $k </li>";
}
echo "</ol>"; 
?>