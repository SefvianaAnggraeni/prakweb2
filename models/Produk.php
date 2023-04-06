<?php 
class Produk{
    private $koneksi;
    
    
    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
        
    }
        public function TampilProduk(){
            // SELECT semua kolom yang ada di dalam table produk
            $sql = "SELECT p.*, j.nama AS jenis FROM produk p INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id ORDER BY p.id DESC";
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
        public function ambilProduk ($id){
            // SELECT semua kolom yang ada di dalam table produk
            $sql = "SELECT p.*, j.nama AS jenis FROM produk p INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id ORDER BY p.id DESC";
            // kirim data select menggunakan method prepare
            $ps = $this->koneksi->prepare($sql);
            // eksekusi data select yang sudah disiapkan menggunakan method prepare
            // menggunakan method execute
            $ps->execute([$id]);
            //simpan data sql yang sudah di eksekusi ke dalam data array
            // menggunakan method fetchall
            $data = $ps->fetch();
            //kembalikan data produk dalam data array yang sudah
            //disimpan ke dalam variable $data
            return $data;
        }
        public function simpan($data){
            $sql = "INSERT INTO produk (kode,nama,harga_beli,harga_jual,stok,min_stok,jenis_produk_id) VALUES (?,?,?,?,?,?,?)";

            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }
        public function ubah($data){
            $sql = "UPDATE produk SET kode=?,nama=?,harga_beli=?,harga_jual=?,stok=?,min_stok=?,jenis_produk_id=? WHERE id=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);

        }
        public function hapus($id){
            $sql = "DELETE FROM produk WHERE id=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($id);
        }
}
?>