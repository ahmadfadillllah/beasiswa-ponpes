<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use PDF;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::join('validasi_siswa', 'siswa.id', 'validasi_siswa.id_siswa')
        ->join('users', 'siswa.id_users', 'users.id')
        ->where('status', '!=', 'Aktif')->get();

        return view('dashboard.pengumuman.index', compact('siswa'));
    }

    public function cetak()
    {
        $siswa = Siswa::join('validasi_siswa', 'siswa.id', 'validasi_siswa.id_siswa')
        ->join('users', 'siswa.id_users', 'users.id')
        ->where('status', '!=', 'Aktif')->get();

    	$pdf = PDF::loadview('dashboard/pengumuman/cetak',['siswa'=>$siswa]);
    	return $pdf->download('Laporan Siswa.pdf');
    }

}
