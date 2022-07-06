<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ValidasiSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ValidasiSiswaController extends Controller
{
    //

    public function show(Request $request)
    {

        $validasi = ValidasiSiswa::create([
            'id_siswa' => $request->id_siswa,
            'id_users' => $request->id_users,
            'nim' => $request->nim,
            'nilai_raport' => $request->nilai_raport,
            'perilaku' => $request->perilaku,
            'penghasilan_orang_tua' => $request->penghasilan_orang_tua,
            'tanggungan_orang_tua' => $request->tanggungan_orang_tua,
            'pekerjaan_orang_tua' => $request->pekerjaan_orang_tua,
            'kondisi_orang_tua' => $request->kondisi_orang_tua,
            'total' => $request->total,
            'surat_keterangan_tidak_mampu' => $request->surat_keterangan_tidak_mampu,
        ]);

        $updated = User::where('id', $request->id_users)
              ->update(['status' => 'Proses Seleksi']);


        if($validasi && $updated){
            return redirect()->route('daftarbeasiswa.index')->with('notif', 'Data siswa telah disimpan');
        }

        return redirect()->back()->with('notif', 'Data siswa gagal diproses');
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
        $updated = User::where('id', $data->id_users)
              ->update(['status' => 'Ditolak']);


        if($updated){
            return redirect()->route('daftarbeasiswa.index')->with('notif', 'Siswa telah ditolak');
        }

        return redirect()->route('daftarbeasiswa.index')->with('notif', 'Data siswa gagal diproses');
    }
}
