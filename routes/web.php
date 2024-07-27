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