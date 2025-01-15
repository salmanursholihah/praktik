<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/struktur_dasar_html', function () {
    return view('praktik.struktur_html');
});
Route::get('/multimedia', function () {
    return view('praktik.multimedia');
});
Route::get('/semantic', function () {
    return view('praktik.semantic');
});
