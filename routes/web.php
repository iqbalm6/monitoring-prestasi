<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PrestasiAkademikController;
use App\Http\Controllers\PrestasiNonAkademikController;
use App\Http\Controllers\LaporanPrestasiController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])
    ->resource('kelas', KelasController::class)
    ->parameters([
        'kelas' => 'kelas'
    ]);

Route::middleware(['auth'])
    ->get('/kelas/{kelas}/siswa',
    [KelasController::class,'siswa']
    )->name('kelas.siswa');

Route::middleware(['auth'])
    ->get('/dashboard',[DashboardController::class,'index'])
    ->name('dashboard');

Route::middleware(['auth'])
    ->resource('guru', GuruController::class);

Route::middleware(['auth'])
    ->resource('orang-tua', OrangTuaController::class);

Route::middleware(['auth'])
    ->resource('siswa', SiswaController::class);

Route::middleware(['auth'])
    ->get(
        '/siswa/kelas/{kelas}',
        [SiswaController::class, 'kelas']
    )
    ->name('siswa.kelas');

Route::middleware(['auth'])
    ->resource('tahun-ajaran', TahunAjaranController::class);

Route::middleware(['auth'])
    ->resource('mata-pelajaran', MataPelajaranController::class);

Route::middleware(['auth'])
    ->post('/prestasi-akademik/tampilkan-mapel',[PrestasiAkademikController::class,'tampilkanMapel'])
    ->name('prestasi-akademik.tampilkan-mapel');

Route::middleware(['auth'])
    ->resource('prestasi-akademik', PrestasiAkademikController::class);

Route::middleware(['auth'])
    ->get(
        '/prestasi-akademik/pilih-kelas',
        [PrestasiAkademikController::class, 'pilihKelas']
    )
    ->name('prestasi-akademik.pilih-kelas');

Route::middleware(['auth'])
    ->get(
        '/prestasi-akademik/kelas/{kelas}',
        [PrestasiAkademikController::class, 'pilihSiswa']
    )
    ->name('prestasi-akademik.pilih-siswa');

Route::middleware(['auth'])
    ->resource('prestasi-non-akademik', PrestasiNonAkademikController::class);

Route::middleware(['auth'])
    ->get('/laporan-prestasi',[LaporanPrestasiController::class,'index'])
    ->name('laporan-prestasi.index');

Route::middleware(['auth'])
    ->post('/laporan-prestasi',[LaporanPrestasiController::class,'tampilkan'])
    ->name('laporan-prestasi.tampilkan');

Route::middleware(['auth'])
    ->get('/laporan-prestasi/pdf/{siswa}/{tahun}',[LaporanPrestasiController::class,'pdf'])
    ->name('laporan-prestasi.pdf');

Route::get('/logout-success', function () {
    return view('auth.logout');
})->name('logout.success');

Route::post('/keluar', function () {

    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect()->route('logout.success');

})->middleware('auth');

Route::middleware(['auth'])
    ->get(
        '/siswa/kelas/{kelas}',
        [SiswaController::class, 'kelas']
    )
    ->name('siswa.kelas');
require __DIR__.'/auth.php';
