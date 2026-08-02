<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Guru\DashboardController as GuruDashboardController;
use App\Http\Controllers\OrangTua\DashboardController as OrangTuaDashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PrestasiAkademikController;
use App\Http\Controllers\PrestasiNonAkademikController;
use App\Http\Controllers\LaporanPrestasiController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [
        ProfileController::class,
        'edit'
    ])->name('profile.edit');

    Route::patch('/profile', [
        ProfileController::class,
        'update'
    ])->name('profile.update');

    Route::delete('/profile', [
        ProfileController::class,
        'destroy'
    ])->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'admin'
])->group(function () {

    /*
    |------------------------------------------------------
    | Dashboard
    |------------------------------------------------------
    */

    Route::get(
        '/dashboard',
        [AdminDashboardController::class, 'index']
    )->name('dashboard');

    /*
    |------------------------------------------------------
    | Kelas
    |------------------------------------------------------
    */

    Route::resource(
        'kelas',
        KelasController::class
    )->parameters([
        'kelas' => 'kelas'
    ]);

    Route::get(
        '/kelas/{kelas}/siswa',
        [KelasController::class, 'siswa']
    )->name('kelas.siswa');

    /*
    |------------------------------------------------------
    | Guru
    |------------------------------------------------------
    */

    Route::resource(
        'guru',
        GuruController::class
    );

    /*
    |------------------------------------------------------
    | Orang Tua
    |------------------------------------------------------
    */

    Route::resource(
        'orang-tua',
        OrangTuaController::class
    );

    /*
    |------------------------------------------------------
    | Siswa
    |------------------------------------------------------
    */

    Route::resource(
        'siswa',
        SiswaController::class
    );

    Route::get(
        '/siswa/kelas/{kelas}',
        [SiswaController::class, 'kelas']
    )->name('siswa.kelas');

    /*
    |------------------------------------------------------
    | Tahun Ajaran
    |------------------------------------------------------
    */

    Route::resource(
        'tahun-ajaran',
        TahunAjaranController::class
    );

    /*
    |------------------------------------------------------
    | Mata Pelajaran
    |------------------------------------------------------
    */

    Route::resource(
        'mata-pelajaran',
        MataPelajaranController::class
    );

    /*
    |------------------------------------------------------
    | Prestasi Akademik
    |------------------------------------------------------
    */

    Route::post(
        '/prestasi-akademik/tampilkan-mapel',
        [PrestasiAkademikController::class, 'tampilkanMapel']
    )->name('prestasi-akademik.tampilkan-mapel');

    Route::get(
        '/prestasi-akademik/pilih-kelas',
        [PrestasiAkademikController::class, 'pilihKelas']
    )->name('prestasi-akademik.pilih-kelas');

    Route::get(
        '/prestasi-akademik/kelas/{kelas}',
        [PrestasiAkademikController::class, 'pilihSiswa']
    )->name('prestasi-akademik.pilih-siswa');

    Route::resource(
        'prestasi-akademik',
        PrestasiAkademikController::class
    );

    /*
    |------------------------------------------------------
    | Prestasi Non Akademik
    |------------------------------------------------------
    */

    Route::resource(
        'prestasi-non-akademik',
        PrestasiNonAkademikController::class
    );

    /*
    |------------------------------------------------------
    | Laporan Prestasi
    |------------------------------------------------------
    */

    Route::get(
        '/laporan-prestasi',
        [LaporanPrestasiController::class, 'index']
    )->name('laporan-prestasi.index');

    Route::post(
        '/laporan-prestasi',
        [LaporanPrestasiController::class, 'tampilkan']
    )->name('laporan-prestasi.tampilkan');

    Route::get(
        '/laporan-prestasi/pdf/{siswa}/{tahun}',
        [LaporanPrestasiController::class, 'pdf']
    )->name('laporan-prestasi.pdf');

});

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::get('/logout-success', function () {

    return view('auth.logout');

})->name('logout.success');

Route::post('/keluar', function () {

    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect()->route('logout.success');

})->middleware('auth');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';