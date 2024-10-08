<?php

use App\Http\Controllers\Datasiswa;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Dashboard
Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
});

// Laporan
Route::get('/laporan/bukufavorit', function () {
    return view('Dashboard.Laporan.bukufavorit');
});

Route::get('/laporan/belumpengembalian', function () {
    return view('Dashboard.Laporan.belumpengembalian');
});

Route::get('/laporan/bukuperhari', function () {
    return view('Dashboard.Laporan.laporanperhari');
});

// MasterData
Route::get('/masterdata/buku', function () {
    return view('Dashboard.MasterData.tabelbuku');
});

// Master Data Siswa
Route::get('/masterdata/siswa', [Datasiswa::class, "Tampilkan"]);

// Tambah Siswa
Route::get('/tambah',[Datasiswa::class,"up"]);

Route::get('/tambah',[Datasiswa::class,"update"]);

// Transaksi
Route::get('/transaksi/peminjaman', function () {
    return view('Dashboard.Transaksi.peminjaman');
});

Route::get('/transaksi/pengembalian', function () {
    return view('Dashboard.Transaksi.pengembalian');
});

Route::get('/transaksi/peminjaman', function () {
    return view('Dashboard.Transaksi.peminjaman');
});
// End Dashboard

// Halaman Utama
Route::get('/', function () {
    return view('HalamanUtama.halaman');
});

Route::get('/detailpeminjaman', function () {
    return view('HalamanUtama.DetailPeminjaman');
});
// End Halaman Utama

Route::get('/login',function(){
    return view('login');
});

