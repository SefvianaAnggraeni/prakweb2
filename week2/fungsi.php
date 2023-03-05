<?php
function kelulusan ($_nilai){
    //jika nilai rata-rata siswa dibawah 55 tidak lulus
    //jika nilai rata-rata siswa diatas 55 lulus

    if ($_nilai > 55){
        return 'Anda Lulus';
    }else{
        return 'Anda Tidak Lulus';
    }
}
// 1. Membuat fungsi grade
//Jika nilai diatas 85 grade A
//Jika nilai diatas 70 grade B
//Jika nilai diatas 56 grade C
//Jika nilai diatas 36-55 grade D
//Jika nilai diatas 10-35 grade E
//Jika tidak ada nilai cetak I (Anda tidak ada nilai)

function grade ($_nilai){
    if ($_nilai >= 85) {
        return "A";
    }elseif ($_nilai >= 70) {
        return "B";
    }elseif ($_nilai >= 56) {
        return "C";
    }elseif ($_nilai >= 36) {
        return "D";
    }elseif ($_nilai >= 10) {
        return "E";
    }else{
        return "I (Anda tidak ada nilai ya)";
    }
}
?>