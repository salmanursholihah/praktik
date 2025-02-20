<?php

use App\Http\Controllers\Praktik\PraktikController;
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
Route::get('/tombol_interaktif', function () {
    return view('minggu_ke3.tombol_interaktif');
});
Route::get('/onclick', function () {
    return view('minggu_ke3.onclick');
});
Route::get('/onchange', function () {
    return view('minggu_ke3.onchange');
});
Route::get('/looping', function () {
    return view('minggu_ke3.looping');
});
Route::get('/todo_list', function () {
    return view('minggu_ke3.todo_list');
});

///minggu-4

Route::get('/todo_list_rev', function () {
    return view('minggu_4.todo_list_rev');
});
Route::get('/looping_rev', function () {
    return view('minggu_4.looping_rev');
});
route::get('/praktik',[PraktikController::class,'salma']);


///view reglog
Route::get('/register', function () {
    return view('praktik.reglog_minggu_5.register');
});
Route::get('/login', function () {
    return view('praktik.reglog_minggu_5.login');
});
Route::get('/lupa_sandi', function () {
    return view('praktik.reglog_minggu_5.lupa_sandi');
});
Route::get('/index', function () {
    return view('praktik.reglog_minggu_5.index');
});