<?php
include_once 'dbkoneksi.php';
include_once 'models/Produk.php';

//step 1 tangkap inputan user dari form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_harga_beli = $_POST['harga_beli'];
$_stok = $_POST['stok'];
$_minstok = $_POST['min_stok'];
$_jenis = $_POST['jenis_produk_id'];

$data = [
    $_kode, //1
    $_nama, //2
    $_harga_beli, //3
    $_harga_jual = 1.2 * $_harga_beli, //4
    $_stok, //5
    $_minstok, //6
    $_jenis, //7
];
// step 3 eksekusi data array melalui tombol tambah,ubah,hapus

$model = new Produk();
$tombol = $_REQUEST['proses'];

switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    
    default:
        header('Location:index.php?hal=produk');
        break;
}
// step 4 arahkan ke halaman produk 
// jika proses asimpan ubah hapus telah selesai
header('Location:index.php?hal=produk');
?>