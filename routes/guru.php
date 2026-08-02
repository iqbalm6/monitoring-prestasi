<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guru\DashboardController as GuruDashboardController;

// Guru Routes
Route::middleware([
    'auth',
    'guru'
])->group(function () {
    Route::get(
        '/guru/dashboard',
        [GuruDashboardController::class, 'index']
    )->name('guru.dashboard');
});