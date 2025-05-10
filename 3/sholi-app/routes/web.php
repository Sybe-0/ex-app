<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('beranda');
});

Route::get('/list', function () {
    return view('quranlist');
});

Route::get('/surah/{nomor}', function () {
    return view('surah');
});