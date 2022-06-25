<?php

namespace App\Http\Controllers;

use App\Models\KriteriaSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;
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
        // dd($request->all());

        // Validator::make($request->all(), [
        //     'nim' => 'required|integer|min:10',
        //     'nama_lengkap' => 'required|string',
        //     'tempat_lahir' => 'required|string',
        //     'tanggal_lahir' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'agama' => 'required|string',
        //     'nama_wali' => 'required|string',
        //     'no_hp' => 'required|integer',
        //     'alamat' => 'required|string',
        //     'nilai_rapor' => 'required|integer',
        //     'perilaku' => 'required|integer',
        //     'penghasilan_orang_tua' => 'required|integer',
        //     'tanggungan_orang_tua' => 'required|integer',
        // ])->validate();


        $siswa = new Siswa;
        $siswa->nim = $request->nim;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->nama_wali = $request->nama_wali;
        $siswa->no_hp = $request->no_hp;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        $request->request->add(['id_siswa' => $siswa->id]);

        $kriteria = new KriteriaSiswa;
        $kriteria->id_siswa = $request->id_siswa;
        $kriteria->nilai_rapor = $request->nilai_rapor;
        $kriteria->perilaku = $request->perilaku;
        $kriteria->penghasilan_orang_tua = $request->penghasilan_orang_tua;
        $kriteria->tanggungan_orang_tua = $request->tanggungan_orang_tua;
        $kriteria->status = 'waiting';
        $kriteria->save();

        if($kriteria){
            return redirect()->route('landing-page.daftarbeasiswa')->with('notif', 'Registrasi Siswa telah berhasil, pergi ke menu Peraih Beasiswa untuk melihat progess');
        }

        return redirect()->route('landing-page.daftarbeasiswa')->with('notif', 'Registrasi Siswa gagal, silahkan ulangi');

    }
}
