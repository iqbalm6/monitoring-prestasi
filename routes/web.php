<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunAjaranController;
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
    ->get('/dashboard',[DashboardController::class,'index'])
    ->name('dashboard');

Route::middleware(['auth'])
    ->resource('guru', GuruController::class);

Route::middleware(['auth'])
    ->resource('orang-tua', OrangTuaController::class);

Route::middleware(['auth'])
    ->resource('siswa', SiswaController::class);

Route::middleware(['auth'])
    ->resource('tahun-ajaran', TahunAjaranController::class);

Route::post('/keluar', function () {

    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');

})->middleware('auth');
require __DIR__.'/auth.php';
