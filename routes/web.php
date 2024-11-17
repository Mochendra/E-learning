<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Auth\AdminController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\SiswaController;

use App\Http\Controllers\GuruController;
use App\Http\Controllers\GuruJadwalController;
use App\Http\Controllers\GuruKelolaPelajaranController;

use App\Http\Controllers\KoorJadwalController;
use App\Http\Controllers\KoorjadwalKelasController;
use App\Http\Controllers\KoorjadwalMataPelajaranController;
use App\Http\Controllers\KoorjadwalSiswaController;
use App\Http\Controllers\KoorjadwalWaliKelasController;
use App\Http\Controllers\KoorjadwalJadwalController;
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

// mulai --------------------
Route::get('/login', function () {
    return view('auth.login'); //menampilkan view
})->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form'); //menampilkan register (view)
Route::post('/register', [RegisterController::class, 'register'])->name('register'); //submit 


Route::match(['get', 'post'], '/dashboard_admin/user/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/dashboard_admin', [AdminController::class, 'index'])->name('dashboard_admin');


Route::get('/dashboard_siswa', function () {
    return view('siswa.dashboard_siswa');
})->name('dashboard.siswa')->middleware('auth');


Route::get('/dashboard_koorjadwal', function () {
    return view('koorjadwal.dashboard_koorjadwal');
})->name('dashboard.koorjadwal')->middleware('auth');


Route::get('/dashboard_guru', function () {
    return view('guru.dashboard_guru');
})->name('dashboard.guru')->middleware('auth');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');


// Route to show the add student page with the table
Route::get('/tambah_siswa', [SiswaController::class, 'index'])->name('tambah_siswa.index');
Route::post('/tambah_siswa', [SiswaController::class, 'store'])->name('tambah_siswa.store');


Route::get('/tambah_guru', [GuruController::class, 'index'])->name('tambah_guru.index');
Route::post('/tambah_guru', [GuruController::class, 'store'])->name('tambah_guru.store');


// Route untuk menampilkan form tambah tahun ajar
Route::get('koorjadwal/tambah_tahun_ajar', [KoorJadwalController::class, 'tambahTahunAjar'])->name('koorjadwal.tambah_tahun_ajar');
// Route untuk menyimpan tahun ajar
Route::post('koorjadwal/tambah_tahun_ajar', [KoorJadwalController::class, 'store'])->name('koorjadwal.store');
// Route untuk mengupdate tahun ajar
Route::put('koorjadwal/tambah_tahun_ajar/{id}', [KoorJadwalController::class, 'update'])->name('koorjadwal.update');
// Route untuk menghapus tahun ajar
Route::delete('koorjadwal/tambah_tahun_ajar/{id}', [KoorJadwalController::class, 'destroy'])->name('koorjadwal.destroy');


Route::fallback(function () {
    return 'Route tidak ditemukan. <a href="'.url('/').'">Kembali ke Home</a>';
});


// Route untuk menampilkan form tambah kelas
Route::get('koorjadwal/tambah_kelas', [KoorJadwalKelasController::class, 'index'])->name('koorjadwal.tambah_kelas');
// Route untuk menyimpan kelas
Route::post('koorjadwal/tambah_kelas', [KoorjadwalKelasController::class, 'store'])->name('koorjadwal.store_kelas');


Route::get('/koorjadwal/tambah_kelas/{id}/edit', [KoorjadwalKelasController::class, 'edit'])->name('koorjadwal.edit_kelas');
Route::put('/koorjadwal/tambah_kelas/{id}', [KoorjadwalKelasController::class, 'update'])->name('koorjadwal.update_kelas');
Route::delete('/koorjadwal/tambah_kelas/{id}', [KoorjadwalKelasController::class, 'destroy'])->name('koorjadwal.destroy_kelas');


// Route untuk menampilkan halaman tambah mata pelajaran
Route::get('koorjadwal/tambah_pelajaran', [KoorjadwalMataPelajaranController::class, 'index'])->name('tambah_pelajaran');
// Route untuk menyimpan mata pelajaran baru
Route::post('koorjadwal/tambah_pelajaran', [KoorjadwalMataPelajaranController::class, 'store'])->name('store_pelajaran');


// Route untuk mengedit mata pelajaran
Route::get('koorjadwal/tambah_pelajaran/{id}/edit', [KoorjadwalMataPelajaranController::class, 'edit'])->name('edit_pelajaran');
// Route untuk memperbarui mata pelajaran
Route::put('koorjadwal/tambah_pelajaran/{id}', [KoorjadwalMataPelajaranController::class, 'update'])->name('update_pelajaran');
// Route untuk menghapus mata pelajaran
Route::delete('koorjadwal/tambah_pelajaran/{id}', [KoorjadwalMataPelajaranController::class, 'destroy'])->name('destroy_pelajaran');


Route::get('/koorjadwal/siswa', [KoorjadwalSiswaController::class, 'index'])->name('koorjadwal.siswa');
Route::post('/koorjadwal/siswa/store', [KoorjadwalSiswaController::class, 'store'])->name('koorjadwal.siswa.store');
// Route::delete('/koorjadwal/siswa/{id}', [KoorjadwalSiswaController::class, 'destroy'])->name('siswa_kelas.destroy');

Route::get('/koorjadwal/wali_kelas', [KoorjadwalWaliKelasController::class, 'index'])->name('koorjadwal.wali_kelas');

Route::get('/koorjadwal/jadwal', [KoorjadwalJadwalController::class, 'index'])->name('koorjadwal.jadwal.index');
Route::post('/koorjadwal/jadwal', [KoorjadwalJadwalController::class, 'store'])->name('jadwal.store');
Route::delete('/koorjadwal/jadwal/{id}', [KoorjadwalJadwalController::class, 'destroy'])->name('jadwal.destroy');

Route::get('/koorjadwal/wali_kelas', [KoorjadwalWaliKelasController::class, 'index'])->name('koorjadwal.guru');
Route::post('/koorjadwal/wali_kelas/store', [KoorjadwalWaliKelasController::class, 'store'])->name('koorjadwal.guru.store');


Route::get('/dashboard_guru', [GuruJadwalController::class, 'index'])->name('dashboard.guru');


Route::get('/kelas_angkatan_guru', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.kelas_angkatan_guru', ['user' => $user]);
});

Route::get('/kelas/VII', [GuruJadwalController::class, 'kelasVII'])->name('kelas.vii');
Route::get('/kelas/VIII', [GuruJadwalController::class, 'kelasVIII'])->name('kelas.viii');
Route::get('/kelas/IX', [GuruJadwalController::class, 'kelasIX'])->name('kelas.ix');

// Route::get('/materi_kelas_VII/{id}', [GuruJadwalController::class, 'mingguanKelasVII'])->name('materi_kelas_VII');
// Route::get('/materi_kelas_VIII/{id}', [GuruJadwalController::class, 'mingguanKelasVIII'])->name('materi_kelas_VIII');
// Route::get('/materi_kelas_IX/{id}', [GuruJadwalController::class, 'mingguanKelasIX'])->name('materi_kelas_IX');
Route::get('/materi/kelas/VII/{kelas_id}/{id}', [GuruJadwalController::class, 'mingguanKelasVII'])->name('materi_kelas_VII');
Route::get('/materi/kelas/VIII/{kelas_id}/{id}', [GuruJadwalController::class, 'mingguanKelasVIII'])->name('materi_kelas_VIII');
Route::get('/materi/kelas/IX/{kelas_id}/{id}', [GuruJadwalController::class, 'mingguanKelasIX'])->name('materi_kelas_IX');

// Route untuk menampilkan form tambah materi
Route::get('/materi/kelas/VII/materi/{kelas_id}/{id}', [GuruKelolaPelajaranController::class, 'showAddMaterialForm'])->name('materi_kelas_VII_materi');

// Route untuk menyimpan materi
Route::post('/materi/kelas/VII/materi/{id}', [GuruKelolaPelajaranController::class, 'storeMaterial'])->name('store.material');


// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     // Rute untuk admin
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });

// Route::group(['middleware' => ['auth', 'role:koorjadwal']], function () {
//     // Rute untuk koorjadwal
//     Route::get('/koorjadwal/dashboard', [KoorjadwalController::class, 'index'])->name('koorjadwal.dashboard');
// });

// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     // Rute untuk admin
// });

// Route::group(['middleware' => ['auth', 'role:koorjadwal']], function () {
//     // Rute untuk koorjadwal
// });



//=============================================================================
//-----------------------------------------------------------------------------


// Route::get('/dashboard_admin', function () {
//     // Mengirim data    ke tampilan Blade
//     $user = Auth::user();
//     return view('admin.dashboard_admin', ['user' => $user]);
// });

// Route::get('/tambah_siswa', function () {
//     // Mengirim data    ke tampilan Blade
//     $user = Auth::user();
//     return view('admin.tambah_siswa', ['user' => $user]);
// });

// Route::get('/tambah_guru', function () {
//     // Mengirim data    ke tampilan Blade
//     $user = Auth::user();
//     return view('admin.tambah_guru', ['user' => $user]);
// });

// KOOR----------------------------------------------------------------------------------

// Route::get('/dashboard_koorjadwal', function () {
//     // Mengirim data ke tampilan Blade
//     $user = Auth::user();
//     return view('koorjadwal.dashboard_koorjadwal', ['user' => $user]);
// });

// Route::get('/koorjadwal_siswa', function () {
//     // Mengirim data ke tampilan Blade
//     $user = Auth::user();
//     return view('koorjadwal.koorjadwal_siswa', ['user' => $user]);
// });

// Route::get('/koorjadwal_tambah_mata_pelajaran', function () {
//     // Mengirim data ke tampilan Blade
//     $user = Auth::user();
//     return view('koorjadwal.koorjadwal_tambah_pelajaran', ['user' => $user]);
// });

// Route::get('/koorjadwal_tambah_tahun_ajar', function () {
//     // Mengirim data ke tampilan Blade
//     $user = Auth::user();
//     return view('koorjadwal.koorjadwal_tambah_tahun_ajar', ['user' => $user]);
// });

// Route::get('/koorjadwal_tambah_kelas', function () {
//     // Mengirim data ke tampilan Blade
//     $user = Auth::user();
//     return view('koorjadwal.koorjadwal_tambah_kelas', ['user' => $user]);
// });

// GURU

Route::get('/rekap_nilai', function () {
    // Mengirim data ke tampilan Blade
    $user = Auth::user();
    return view('guru.rekap_nilai', ['user' => $user]);
});

// Route::get('/dashboard_guru', function () {
//     // Mengirim data ke tampilan Blade
//     $user = Auth::user();
//     return view('guru.dashboard_guru', ['user' => $user]);
// });



// Route::get('/koorjadwal_wali_kelas', function () {
//     // Mengirim data ke tampilan Blade
//     $user = Auth::user();
//     return view('koorjadwal.koorjadwal_wali_kelas', ['user' => $user]);
// });

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
    return view('guru.hasil_quiz_kelas_VIII', ['user' => $user]);
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

// Route::get('/dashboard_siswa', function () {
//     // Mengirim data ke tampilan Blade
//     $user = Auth::user();
//     return view('siswa.dashboard_siswa', ['user' => $user]);
// });

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

