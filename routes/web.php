<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/struktur_dasar_html', function () {
    return view('praktik.struktur_html');
});
