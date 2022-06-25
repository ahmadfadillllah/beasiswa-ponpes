<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarBeasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKriteria;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeleksiController;
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
Route::post('/daftarbeasiswa/proses', [LandingPageController::class, 'prosesdaftarbeasiswa'])->name('landing-page.prosesdaftarbeasiswa');

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'loginpost'])->name('login.post');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/post', [AuthController::class, 'registerpost'])->name('register.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard/kriteria/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');



Route::group(['middleware' => ['auth', 'checkRole:siswa']], function(){


//Kriteria Siswa
    Route::get('/dashboard/kriteria', [KriteriaController::class, 'index'])->name('kriteria.index');
    Route::post('/dashboard/kriteria/update', [KriteriaController::class, 'update'])->name('kriteria.update');

    });

Route::group(['middleware' => ['auth', 'checkRole:stafsekolah']], function(){

//Data Kriteria
    Route::get('/dashboard/data-kriteria', [DataKriteria::class, 'index'])->name('datakriteria.index');

//Seleksi
    Route::get('/dashboard/seleksi', [SeleksiController::class, 'index'])->name('seleksi.index');
});

Route::group(['middleware' => ['auth', 'checkRole:stafsekolah,kepalasekolah,siswa']], function(){

    //Dashboard
        Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

    //Daftar Beasiswa
        Route::get('/dashboard/daftar-beasiswa', [DaftarBeasiswaController::class, 'index'])->name('daftarbeasiswa.index');

    //Pengumuman
        Route::get('/dashboard/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');

    //Profile
        Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('/dashboard/profile/update-password', [ProfileController::class, 'updatepassword'])->name('profile.updatepassword');
    });


