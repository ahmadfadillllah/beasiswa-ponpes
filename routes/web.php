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
use App\Http\Controllers\ValidasiSiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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
Route::get('/announcement', [LandingPageController::class, 'announcement'])->name('landing-page.announcement');

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'loginpost'])->name('login.post');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/post', [AuthController::class, 'registerpost'])->name('register.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['notif' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('notif', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


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

    //Validasi Siswa
        Route::post('/dashboard/seleksi/validasi-siswa', [ValidasiSiswaController::class, 'show'])->name('validasisiswa.show');
        Route::get('/dashboard/seleksi/validasi-siswa/show/{id}/tolak', [ValidasiSiswaController::class, 'tolak'])->name('validasisiswa.tolak');
        Route::get('/dashboard/seleksi/validasi-siswa/show/{id}/terima', [ValidasiSiswaController::class, 'terima'])->name('validasisiswa.terima');
});

Route::group(['middleware' => ['auth', 'checkRole:kepalasekolah']], function(){

    //Seleksi
        Route::get('/dashboard/seleksi', [SeleksiController::class, 'index'])->name('seleksi.index');

    //Validasi Siswa
        Route::post('/dashboard/seleksi/validasi-siswa', [ValidasiSiswaController::class, 'show'])->name('validasisiswa.show');
        Route::get('/dashboard/seleksi/validasi-siswa/show/{id}/tolak', [ValidasiSiswaController::class, 'tolak'])->name('validasisiswa.tolak');
        Route::get('/dashboard/seleksi/validasi-siswa/show/{id}/terima', [ValidasiSiswaController::class, 'terima'])->name('validasisiswa.terima');
    });


Route::group(['middleware' => ['auth', 'checkRole:stafsekolah,kepalasekolah,siswa']], function(){

    //Dashboard
        Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

    //Daftar Beasiswa
        Route::get('/dashboard/daftar-beasiswa', [DaftarBeasiswaController::class, 'index'])->name('daftarbeasiswa.index');
        Route::get('/dashboard/daftar-beasiswa/show/{id}', [DaftarBeasiswaController::class, 'show'])->name('daftarbeasiswa.show');

    //Pengumuman
        Route::get('/dashboard/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
        Route::get('/dashboard/pengumuman/cetak', [PengumumanController::class, 'cetak'])->name('pengumuman.cetak');

    //Profile
        Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('/dashboard/profile/update-password', [ProfileController::class, 'updatepassword'])->name('profile.updatepassword');
    });


