<?php 
class Kartu{
    private $koneksi;
    
    
    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
        
    }
        public function TampilKartu(){
            // SELECT semua kolom yang ada di dalam table produk
            $sql = "SELECT * FROM kartu";
            // kirim data select menggunakan method prepare
            $ps = $this->koneksi->prepare($sql);
            // eksekusi data select yang sudah disiapkan menggunakan method prepare
            // menggunakan method execute
            $ps->execute();
            //simpan data sql yang sudah di eksekusi ke dalam data array
            // menggunakan method fetchall
            $data = $ps->fetchAll();
            //kembalikan data produk dalam data array yang sudah
            //disimpan ke dalam variable $data
            return $data;
    
        }
}
?>