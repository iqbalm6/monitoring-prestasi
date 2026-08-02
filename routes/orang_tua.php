<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrangTua\DashboardController as OrangTuaDashboardController;

// Orang Tua Routes
Route::middleware([
    'auth',
    'orang_tua'
])->group(function () {
    Route::get(
        '/orang-tua/dashboard',
        [OrangTuaDashboardController::class, 'index']
    )->name('orang-tua.dashboard');
});