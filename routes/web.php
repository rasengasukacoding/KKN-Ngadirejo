<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/profil', function () {
    return view('Profile-Desa');
});

Route::get('/wisata', function () {
    return view('Wisata');
});

Route::get('/umkm', function () {
    return view('Umkm');
});

Route::get('/melikan-belajar', function () {
    return view('Melikan-Belajar');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/lokasi', function () {
    return view('Lokasi');
});
