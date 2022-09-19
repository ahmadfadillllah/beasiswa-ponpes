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
            'nama_lengkap' => 'required|max:20',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'nim' => 'required|numeric|min:10',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'nama_wali' => 'required',
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
