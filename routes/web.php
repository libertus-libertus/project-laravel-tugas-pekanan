<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/welcome', [DashboardController::class, 'welcome'])->name('welcome');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/simpan', [AuthController::class, 'simpan'])->name('simpan');

Route::get('/table', [DashboardController::class, 'table'])->name('table');
Route::get('/data-table', [DashboardController::class, 'data_table'])->name('data_table');
Route::get('/contact-us', [DashboardController::class, 'contact'])->name('contact');

// CRUD
// menampilkan-seluruh-data
Route::get('/cast', [CastController::class, 'index'])->name('cast');
// tampil-form-tambah-untuk-menambahkan-data-baru
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
// menyimpan-data-dari-form
Route::post('/cast', [CastController::class, 'store'])->name('cast.store');
// menampilkan-detail-data-berdasarkan-id
Route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('cast.show');
// mengambil-data-berdasarkan-id-yang-ingin-diedit
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit'])->name('cast.edit');
// mengubah-data-berdasarkan-id-yang-muncul-pada-form-edit
Route::put('/cast/{cast_id}', [CastController::class, 'update'])->name('cast.update');
// menghapus-data-berdasarkan-id-yang-diklik
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy'])->name('cast.destroy');
