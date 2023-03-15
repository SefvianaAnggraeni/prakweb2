<?php

// ambil data yang diinputkan user unique name
// gunakan fungsi isset untuk memeriksa apakah suatu variable sudah diatur atau belum
// jika ada variable yang bernama NULL maka fungsi isset akan mengembalikan nilai FALSE
error_reporting(0);

if (isset($_POST["submit"])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $studi = $_POST['studi'];
    $skill = $_POST['skill'];
    $email = $_POST['email'];
    $domi = $_POST['domisili'];
    

    $nilai = 0;
    foreach ($skill as $value){
        switch($value){
            case 'html' :
                $nilai += 10;
                break;
            case 'css' :
                $nilai += 10;
                break;
            case 'javascript' :
                $nilai += 20;
                break;
            case 'bootstrap' :
                $nilai += 20;
                break;
            case 'php' :
                $nilai += 30;
                break;
            case 'python' :
                $nilai += 30;
                break;
            case 'java' :
                $nilai += 50;
                break;
            default :
                $nilai += 0;
                break;    
        }
    }

}

?>
<?php
//fungsi untuk menentukan predikat
error_reporting(0);

function kategori_skill($nilai) {
    if ($nilai >=100 ){
        return 'Sangat Baik';
    }elseif ($nilai >= 60 && $nilai <= 99){
        return 'Baik';
    }elseif ($nilai >= 40 && $nilai <= 59){
        return 'Cukup';
    }elseif ($nilai >= 0 && $nilai <= 39){
        return 'Kurang' ;
    }else{
        return 'Tidak Memadai';
    }
}


?>
<?php

//cetak hasil inputan user

error_reporting(0);

$kategori = kategori_skill($nilai);
echo "<h4>Hasil Register : </h4>";
echo "</br> Nama : $nama";
echo "</br> Nim : $nim";
echo "</br> Jenis Kelamin : $jk";
echo "</br> Program Studi : $studi";
echo "</br> Skill : ";
foreach ($skill as $value){
    echo $value . ", ";
}
echo "</br> Skor Nilai : $nilai";
echo "</br> Kategori Skill : $kategori ";
echo "</br> Domisili : $domi ";
echo "</br> Email : $email ";
echo "</br> Data Anda Telah Disimpan";
?>