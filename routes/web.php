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
Route::get('/html_css', function () {
    return view('praktik.html_css');
});
Route::get('/tabel_form_html', function () {
    return view('praktik.tabel_form_html');
});
Route::get('/layout_sederhana', function () {
    return view('praktik.layout_sederhana');
});

////minggu ke-2
Route::get('/transisi', function () {
    return view('praktik.minggu_ke2.transisi');
});
Route::get('/animasi', function () {
    return view('praktik.minggu_ke2.animasi');
});
Route::get('/profil_html', function () {
    return view('praktik.minggu_ke2.profil_html');
});
Route::get('/profil_html_css', function () {
    return view('praktik.minggu_ke2.profil_html_css');
});
Route::get('/kalkulator', function () {
    return view('praktik.minggu_ke2.kalkulator');
});
Route::get('/halaman_bootstrap', function () {
    return view('praktik.minggu_ke2.halaman_bootstrap');
});


///minggu ke 3
Route::get('/daftar_tugas', function () {
    return view('minggu-ke3.daftar-tugas');
});
Route::get('/ubah_html', function () {
    return view('minggu_ke3.ubah_html');
});


