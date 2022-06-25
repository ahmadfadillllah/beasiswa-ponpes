<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login()
    {
        return view('auth.login');
    }

    public function loginpost(Request $request)
    {
        // dd($request->all());

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('dashboard.index')->with('notif', 'Berhasil masuk ke dashboard');
        }

        return redirect()->route('login')->with('notif', 'Email / Password salah');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function registerpost(Request $request)
    {
        // dd($request->all());

        $users = User::create([
            'name' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
            'status' => 'Belum Menginputkan Kriteria',
        ]);

        $request->request->add(['id_users' => $users->id]);

        $siswa = Siswa::create([
            'id_users' => $request->id_users,
            'nim' => $request->nim,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_wali' => $request->nama_wali,
        ]);

        if($users && $siswa){
            return redirect()->route('login')->with('notif', 'Berhasil terdaftar ke sistem, silahkan login');
        }

        return redirect()->route('register')->with('notif', 'Gagal terdaftar ke sistem, silahkan register kembali');
    }

    public function logout(Request $request)
{
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

    return redirect()->route('login')->with('notif', 'Anda telah logout');
}


}
