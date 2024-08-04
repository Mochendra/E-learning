<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('login', ['user' => $user]);
});

Route::get('/dashboard_guru', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('dashboard_guru', ['user' => $user]);
});

Route::get('/dashboard_koorjadwal', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('dashboard_koorjadwal', ['user' => $user]);
});

Route::get('/kelas_angkatan_guru', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('kelas_angkatan_guru', ['user' => $user]);
});

Route::get('/kelas_VII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('kelas_VII', ['user' => $user]);
});

Route::get('/kelas_VIII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('kelas_VIII', ['user' => $user]);
});

Route::get('/kelas_IX', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('kelas_IX', ['user' => $user]);
});

Route::get('/materi_kelas_IX', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('materi_kelas_IX', ['user' => $user]);
});

