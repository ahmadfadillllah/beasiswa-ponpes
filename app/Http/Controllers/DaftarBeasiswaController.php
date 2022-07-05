<?php

namespace App\Http\Controllers;

use App\Models\KriteriaSiswa;
use App\Models\Siswa;
use App\Models\ValidasiSiswa;
use Illuminate\Http\Request;

class DaftarBeasiswaController extends Controller
{
    //

    public function index()
    {
        $siswa = ValidasiSiswa::join('siswa', 'validasi_siswa.id_siswa', 'siswa.id')
        ->join('users', 'validasi_siswa.id_users', 'users.id')->get();


        return view('dashboard.daftarbeasiswa.index', compact('siswa'));
    }

    public function show($id)
    {
        $data = ValidasiSiswa::find($id);

        return view('dashboard.seleksi.validasi', compact('data'));
    }
}
