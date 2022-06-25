<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SeleksiController extends Controller
{
    //

    // public $nilai_raport;

    public function index()
    {

        $siswa = Siswa::join('kriteriasiswa', 'siswa.id', 'kriteriasiswa.id_siswa')->get();

        $kriteria = Kriteria::join('subkriteria', 'kriteria.kode', 'subkriteria.kodekriteria')->first();

        // if($siswa->nilai_raport >= 90){
        //     $kriteria->nilai;
        // }

        return view('dashboard.seleksi.index', compact('siswa', 'kriteria'));
    }
}
