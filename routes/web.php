<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;

Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/jadwal-keberangkatan', [JadwalController::class, 'index'])->name('keberangkatan');
