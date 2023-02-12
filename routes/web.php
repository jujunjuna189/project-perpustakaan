<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Anggota
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('anggota.store');
Route::get('/anggota/update', [AnggotaController::class, 'update'])->name('anggota.update');
Route::post('/anggota/updated', [AnggotaController::class, 'updated'])->name('anggota.updated');
Route::get('/anggota/delete', [AnggotaController::class, 'delete'])->name('anggota.delete');
// Buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/update', [BukuController::class, 'update'])->name('buku.update');
Route::post('/buku/updated', [BukuController::class, 'updated'])->name('buku.updated');
Route::get('/buku/delete', [BukuController::class, 'delete'])->name('buku.delete');
// Pinjam Buku
Route::get('/pinjam', [PinjamController::class, 'index'])->name('pinjam');
Route::post('/pinjam/store', [PinjamController::class, 'store'])->name('pinjam.store');
Route::get('/pinjam/list', [PinjamController::class, 'list'])->name('list');
Route::get('/kembalikan', [PinjamController::class, 'kembalikan'])->name('kembalikan');

// Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
