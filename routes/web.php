<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'home']);

Route::get('/kendaraan', [LandingPageController::class, 'kendaraan']);

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'admin'])
    ->middleware('auth')
    ->name('admin.dashboard');

Route::get('/admin/kendaraan', [KendaraanController::class, 'index'])
    ->middleware('auth')
    ->name('admin.kendaraan.index');
