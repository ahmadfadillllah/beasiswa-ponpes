<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarBeasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PengumumanController;
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

//Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing-page.index');
Route::get('/daftarbeasiswa', [LandingPageController::class, 'daftarbeasiswa'])->name('landing-page.daftarbeasiswa');

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Dashboard
Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

//Kriteria
Route::get('/dashboard/kriteria', [KriteriaController::class, 'index'])->name('kriteria.index');
Route::get('/dashboard/kriteria/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');

//Daftar Beasiswa
Route::get('/dashboard/daftar-beasiswa', [DaftarBeasiswaController::class, 'index'])->name('daftarbeasiswa.index');

//Pengumuman
Route::get('/dashboard/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');



