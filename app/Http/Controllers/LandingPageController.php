<?php

namespace App\Http\Controllers;

use App\Models\KriteriaSiswa;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LandingPageController extends Controller
{
    //

    public function index()
    {
        return view('landing-page.index');
    }

    public function daftarbeasiswa()
    {
        return view('landing-page.daftarbeasiswa');
    }

    public function prosesdaftarbeasiswa(Request $request)
    {

        $request->validate([
            'nama_lengkap' => 'required|max:30|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6|max:15',
            'nim' => 'required|min:10|max:11',
            'tempat_lahir' => 'required|max:30|regex:/^[a-zA-Z]+$/u',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|max:30|regex:/^[a-zA-Z]+$/u',
            'agama' => 'required|max:11|regex:/^[a-zA-Z]+$/u',
            'no_hp' => 'required|max:13',
            'jenis_kelamin' => 'required',
            'nama_wali' => 'required|max:30|regex:/^[a-zA-Z]+$/u',
        ]);

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

    public function announcement()
    {
        $siswa = Siswa::join('validasi_siswa', 'siswa.id', 'validasi_siswa.id_siswa')
        ->join('users', 'siswa.id_users', 'users.id')
        ->where('status', '=', 'Diterima')->get();

        return view('landing-page.announcement', compact('siswa'));
    }
}
