<?php
//konfigurasi database
$host = "localhost";
$dbname = "dbkoperasi";
$username = "root";
$password = "";

// buat koneksi PDO
// Menggunakan try catch

try {
    // buat object koneksi pdo yang didalamnya ada parameter host dll
    $conn = new PDO ("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //set arrtribute mengatur mode kesalahan

    // echo "Database berhasil terhubung";
} catch (PDOException $e) {
    echo "database tidak terhubung :" .$e->getMessage();
}
?>