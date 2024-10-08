<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard_admin', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('admin.dashboard_admin', ['user' => $user]);
});

// KOOR----------------------------------------------------------------------------------

Route::get('/dashboard_koorjadwal', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('koorjadwal.dashboard_koorjadwal', ['user' => $user]);
});

Route::get('/dashboard_koorjadwal_siswa', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('koorjadwal.dashboard_koorjadwal_siswa', ['user' => $user]);
});

// GURU
Route::get('/dashboard_guru', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.dashboard_guru', ['user' => $user]);
});

Route::get('/kelas_angkatan_guru', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.kelas_angkatan_guru', ['user' => $user]);
});

Route::get('/kelas_VII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.kelas_VII', ['user' => $user]);
});

Route::get('/hasil_quiz_detail_kelas_VII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.hasil_quiz_detail_kelas_VII', ['user' => $user]);
});

// ===================

Route::get('/materi_kelas_VII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_VII', ['user' => $user]);
});

Route::get('/materi_kelas_VII_materi', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_VII_materi', ['user' => $user]);
});

Route::get('/materi_kelas_VII_quiz', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_VII_quiz', ['user' => $user]);
});

Route::get('/materi_kelas_VII_pengumpulan', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_VII_pengumpulan', ['user' => $user]);
});

Route::get('/hasil_tugas_kelas_VII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.hasil_tugas_kelas_VII', ['user' => $user]);
});

Route::get('/hasil_quiz_kelas_VII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.hasil_quiz_kelas_VII', ['user' => $user]);
});

//======================

Route::get('/kelas_VIII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.kelas_VIII', ['user' => $user]);
});

Route::get('/materi_kelas_VIII_materi', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_VIII_materi', ['user' => $user]);
});

Route::get('/materi_kelas_VIII_quiz', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_VIII_quiz', ['user' => $user]);
});

Route::get('/materi_kelas_VIII_pengumpulan', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_VIII_pengumpulan', ['user' => $user]);
});

Route::get('/hasil_tugas_kelas_VIII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.hasil_tugas_kelas_VIII', ['user' => $user]);
});

Route::get('/hasil_quiz_kelas_VIII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.hasil_tugas_quiz_VIII', ['user' => $user]);
});

// =======================

Route::get('/kelas_IX', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.kelas_IX', ['user' => $user]);
});

Route::get('/materi_kelas_VIII', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_VIII', ['user' => $user]);
});

Route::get('/materi_kelas_IX', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_IX', ['user' => $user]);
});

Route::get('/materi_kelas_IX_materi', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_IX_materi', ['user' => $user]);
});

Route::get('/materi_kelas_IX_quiz', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_IX_quiz', ['user' => $user]);
});

Route::get('/materi_kelas_IX_pengumpulan', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.materi_kelas_IX_pengumpulan', ['user' => $user]);
});

Route::get('/hasil_tugas_kelas_IX', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.hasil_tugas_kelas_IX', ['user' => $user]);
});

Route::get('/hasil_quiz_kelas_IX', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.hasil_quiz_kelas_IX', ['user' => $user]);
});

// =======================

Route::get('/kelas_IX_siswa', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.kelas_IX_siswa', ['user' => $user]);
});


// SISWA---------------------------------------------------------------------------------

Route::get('/dashboard_siswa', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.dashboard_siswa', ['user' => $user]);
});

Route::get('/kelas_IX_siswa_detail', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_IX_siswa_detail', ['user' => $user]);
});

Route::get('/kelas_VII_siswa_detail', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VII_siswa_detail', ['user' => $user]);
});

Route::get('/kelas_VII_siswa_jenis', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VII_siswa_jenis', ['user' => $user]);
});

Route::get('/kelas_VII_siswa_detail_materi', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VII_siswa_detail_materi', ['user' => $user]);
});

Route::get('/kelas_VII_siswa_detail_tugas', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VII_siswa_detail_tugas', ['user' => $user]);
});

Route::get('/kelas_VII_siswa_detail_quiz', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VII_siswa_detail_quiz', ['user' => $user]);
});

Route::get('/kelas_VII_matapelajaran', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VII_matapelajaran', ['user' => $user]);
});

Route::get('/kelas_VIII_matapelajaran', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VIII_matapelajaran', ['user' => $user]);
});

Route::get('/kelas_IX_matapelajaran', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_IX_matapelajaran', ['user' => $user]);
});

Route::get('/kelas_VII_siswa_quiz', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VII_siswa_quiz', ['user' => $user]);
});

Route::get('/kelas_VIII_siswa_quiz', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VIII_siswa_quiz', ['user' => $user]);
});

Route::get('/kelas_IX_siswa_quiz', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_IX_siswa_quiz', ['user' => $user]);
});

Route::get('/kelas_VIII_siswa_detail', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VIII_siswa_detail', ['user' => $user]);
});

Route::get('/kelas_VII_siswa', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VII_siswa', ['user' => $user]);
});

Route::get('/kelas_VIII_siswa', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VIII_siswa', ['user' => $user]);
});

Route::get('/kelas_VIII_siswa_jenis', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VIII_siswa_jenis', ['user' => $user]);
});

Route::get('/kelas_VIII_siswa_detail_materi', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VIII_siswa_detail_materi', ['user' => $user]);
});

Route::get('/kelas_VIII_siswa_detail_tugas', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VIII_siswa_detail_tugas', ['user' => $user]);
});

Route::get('/kelas_VIII_siswa_detail_quiz', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_VIII_siswa_detail_quiz', ['user' => $user]);
});

Route::get('/kelas_IX_siswa', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_IX_siswa', ['user' => $user]);
});


Route::get('/kelas_IX_siswa_jenis', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_IX_siswa_jenis', ['user' => $user]);
});

Route::get('/kelas_IX_siswa_detail_materi', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_IX_siswa_detail_materi', ['user' => $user]);
});

Route::get('/kelas_IX_siswa_detail_tugas', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_IX_siswa_detail_tugas', ['user' => $user]);
});

Route::get('/kelas_IX_siswa_detail_quiz', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('siswa.kelas_IX_siswa_detail_quiz', ['user' => $user]);
});

