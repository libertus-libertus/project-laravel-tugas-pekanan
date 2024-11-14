<?php

use App\Http\Controllers\AuthController;
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
