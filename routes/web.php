<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\FrontendController;
use App\Models\KategoriProduk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Siang Pak Rojul";
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Sefviana Anggraeni",
        "umur" => 20,
        "email" => "sefviaraerais@gmail.com"
    ]);
});

Route::get('/nf', function () {
    return view('nf', [
        "nama" => "STT Terpadu Nurul Fikri",
        "lokasi" => "Depok",
    ]);
});
Route::get('/table', function () {
    return view('table');
});

Route::get('/input', [InputController::class, 'index' ]); 
Route::post('/output', [InputController::class, 'output' ]);

Route::get('/forminput', [ForminputController::class, 'index']);
Route::post('/forminput', [ForminputController::class, 'input']);




//ini route untuk backend atau admin
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [ DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/kategori_produk', [KategoriProdukController::class, 'index']);
    Route::get('/produk/pesanan', [PesananController::class, 'index']);
});
Route::prefix('frontend')->group(function () {
    Route::get('/home', [FrontendController::class, 'index'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');

});