<?php

namespace App\Http\Controllers;

use App\Models\KriteriaSiswa;
use App\Models\Siswa;
use App\Models\SubKriteria;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all()->where('id_users', Auth::user()->id)->first();

        return view('dashboard.kriteria.index', compact('siswa'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'surat_keterangan_tidak_mampu' => 'mimes:jpg,bmp,png',
        ]);

        $penghasilan_orang_tua = Str::replace('.', '', $request->penghasilan_orang_tua);
        $tanggal_sekarang = date("Y-m-d h-i-sa");

        if($request->hasFile('surat_keterangan_tidak_mampu')){
            $request->file('surat_keterangan_tidak_mampu')->move('surat_keterangan_tidak_mampu', $tanggal_sekarang.'-'.$request->file('surat_keterangan_tidak_mampu')->getClientOriginalName());
        }

        $siswa = KriteriaSiswa::create([
            'id_siswa' => $request->id_siswa,
            'nilai_raport' => $request->nilai_raport,
            'perilaku' => $request->perilaku,
            'penghasilan_orang_tua' => $penghasilan_orang_tua,
            'tanggungan_orang_tua' => $request->tanggungan_orang_tua,
            'pekerjaan_orang_tua' => $request->pekerjaan_orang_tua,
            'kondisi_orang_tua' => $request->kondisi_orang_tua,
            'surat_keterangan_tidak_mampu' => $tanggal_sekarang.'-'.$request->file('surat_keterangan_tidak_mampu')->getClientOriginalName()
        ]);





        $users = User::where('id', Auth::user()->id)->update(['status' => 'Menunggu Seleksi']);

        if($siswa){
            return redirect()->route('kriteria.index')->with('notif', 'Kriteria berhasil dikirimkan');
        }

        return redirect()->route('kriteria.index')->with('notif', 'Kriteria gagal dikirimkan');

    }

    public function create()
    {
        //
        // return view('dashboard.kriteria.tambah');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        return view('dashboard.kriteria.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
