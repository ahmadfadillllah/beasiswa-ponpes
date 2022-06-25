<?php

namespace App\Http\Controllers;

use App\Models\KriteriaSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DaftarBeasiswaController extends Controller
{
    //

    public function index()
    {
        $siswa = Siswa::join('kriteriasiswa', 'siswa.id', 'kriteriasiswa.id_siswa')
        ->join('users', 'siswa.id_users', 'users.id')
        ->where('status', '!=', 'Aktif')->get();

        return view('dashboard.daftarbeasiswa.index', compact('siswa'));
    }
}
