<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubKriteria;

class DataKriteria extends Controller
{
    //
    public function index()
    {
        $C1 = SubKriteria::join('kriteria', 'subkriteria.kodekriteria', 'kriteria.kode')
        ->where('kodekriteria', 'C1')->get();

        $C2 = SubKriteria::join('kriteria', 'subkriteria.kodekriteria', 'kriteria.kode')
        ->where('kodekriteria', 'C2')->get();

        $C3 = SubKriteria::join('kriteria', 'subkriteria.kodekriteria', 'kriteria.kode')
        ->where('kodekriteria', 'C3')->get();

        $C4 = SubKriteria::join('kriteria', 'subkriteria.kodekriteria', 'kriteria.kode')
        ->where('kodekriteria', 'C4')->get();

        $C5 = SubKriteria::join('kriteria', 'subkriteria.kodekriteria', 'kriteria.kode')
        ->where('kodekriteria', 'C5')->get();

        $C6 = SubKriteria::join('kriteria', 'subkriteria.kodekriteria', 'kriteria.kode')
        ->where('kodekriteria', 'C6')->get();

        return view('dashboard.datakriteria.index', compact('C1', 'C2', 'C3', 'C4', 'C5', 'C6'));
    }
}
