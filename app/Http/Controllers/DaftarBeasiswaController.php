<?php

namespace App\Http\Controllers;

use App\Models\KriteriaSiswa;
use App\Models\Siswa;
use App\Models\ValidasiSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use function PHPUnit\Framework\isEmpty;

class DaftarBeasiswaController extends Controller
{
    //

    public function index()
    {
        $siswa = ValidasiSiswa::join('siswa', 'validasi_siswa.id_siswa', 'siswa.id')
        ->join('users', 'validasi_siswa.id_users', 'users.id')
        ->select('validasi_siswa.id','validasi_siswa.id_users', 'siswa.nim', 'users.name', 'siswa.tempat_lahir', 'siswa.tanggal_lahir', 'siswa.jenis_kelamin', 'siswa.nama_wali', 'users.status')
        ->get();


        // dd($siswa);


        return view('dashboard.daftarbeasiswa.index', compact('siswa'));
    }

    public function show($id)
    {
        $data = ValidasiSiswa::find($id);
        // dd($data);

        return view('dashboard.seleksi.validasi', compact('data'));
    }

    public function terima($id)
    {
        $data = ValidasiSiswa::find($id);
        $updated = User::where('id', $data->id_users)
              ->update(['status' => 'Diterima']);


        if($updated){
            return redirect()->route('daftarbeasiswa.index')->with('notif', 'Siswa telah diterima');
        }

        return redirect()->route('daftarbeasiswa.index')->with('notif', 'Data siswa gagal diproses');
    }

    public function tolak($id)
    {
        $data = ValidasiSiswa::find($id);
        // dd($data);
        $updated = User::where('id', $data->id_users)
              ->update(['status' => 'Ditolak']);


        if($updated){
            return redirect()->route('daftarbeasiswa.index')->with('notif', 'Siswa telah ditolak');
        }

        return redirect()->route('daftarbeasiswa.index')->with('notif', 'Data siswa gagal diproses');
    }
}
