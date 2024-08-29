<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layoutUtama');
});

// contoh halaman
Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::get('/Layout',function(){
    return view('halamanUtama.Layout');
});

Route::get('/halaman1',function(){
    return view('halamanUtama.halaman1');
});

Route::get('/halaman',function(){
    return view('halamanUtama.halaman');
});

Route::get('/tabelsiswa',function(){
    return view('tabelsiswa');
});

Route::get('/tabelbuku',function(){
    return view('tabelbuku');
});


Route::get('/databuku',function(){
    return view('databuku');
});


Route::get('/datasiswa',function(){
    return view('datasiswa');
});

Route::get('/peminjaman',function(){
    return view('peminjaman');
});

Route::get('/pengembalian',function(){
    return view('pengembalian');
});



Route::get('/belumpengembalian',function(){
    return view('belumpengembalian');
});

Route::get('/laporanperhari',function(){
    return view('laporanperhari');
});

Route::get('/bukufavorit',function(){
    return view('bukufavorit');
});

