<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LandingPageController;
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

Route::get('/admin/kendaraan/tambah', [KendaraanController::class, 'create'])
    ->middleware('auth')
    ->name('admin.kendaraan.create');

Route::post('/admin/kendaraan', [KendaraanController::class, 'store'])
    ->middleware('auth')
    ->name('admin.kendaraan.store');

Route::get('/admin/kendaraan/{id}/edit', [KendaraanController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.kendaraan.edit');

Route::put('/admin/kendaraan/{id}', [KendaraanController::class, 'update'])
    ->middleware('auth')
    ->name('admin.kendaraan.update');

Route::delete('/admin/kendaraan/{id}', [KendaraanController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.kendaraan.destroy');
