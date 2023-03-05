<?php
    require_once 'fungsi.php';
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['name'];
    $nama_matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai_tugas'];
    $_nilai = ($uts + $uas + $tugas) / 3 ;
    $keterangan = kelulusan($_nilai);
    $grade = grade($_nilai);

    if (!empty($proses)){
    echo "Nama : $nama_siswa";
    echo "<br/>Mata Kuliah : $nama_matkul";
    echo "<br/>Nilai UTS : $uts";
    echo "<br/>Nilai UAS : $uas";
    echo "<br/>Nilai Tugas : $tugas";
    echo "<br>Nilai Rata-Rata : $_nilai";
    echo "<br>Grade : $grade";
    echo "<br/>Keterangan : $keterangan";
    echo "<br/> Data Telah di $proses";
}
    ?>