<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SeleksiController extends Controller
{
    //

    public $nilai_raport;

    public function index()
    {

        $siswa = Siswa::join('kriteriasiswa', 'siswa.id', 'kriteriasiswa.id_siswa')->get();

        $kriteria = Siswa::join('kriteriasiswa', 'siswa.id', 'kriteriasiswa.id_siswa')->get();
        // dd($kriteria);

        $nilai_raport = array();
        $perilaku = array();
        $penghasilan_orang_tua = array();
        $tanggungan_orang_tua = array();
        $pekerjaan_orang_tua = array();
        $kondisi_orang_tua = array();


        foreach($kriteria as $item){

            //Nilai Raport
            if ($item->nilai_raport <= 59){
                $item->nilai_raport = 0.2;
            }else if ($item->nilai_raport >= 60 and $item->nilai_raport <= 69){
                $item->nilai_raport = 0.4;
            }else if ($item->nilai_raport >= 70 and $item->nilai_raport <= 79){
                $item->nilai_raport = 0.6;
            }else if ($item->nilai_raport >= 80 and $item->nilai_raport <= 89){
                $item->nilai_raport = 0.8;
            }else if ($item->nilai_raport >= 90){
                $item->nilai_raport = 1;
            }
            array_push($nilai_raport, $item->nilai_raport);

            //Perilaku
            if ($item->perilaku <2){
                $item->perilaku = 1;
            }else if ($item->perilaku >= 2 and $item->perilaku < 3){
            $item->perilaku = 0.8;
            }else if ($item->perilaku >= 3  and $item->perilaku < 5){
                $item->perilaku = 0.6;
            }else if ($item->perilaku >= 5  and $item->perilaku < 7){
                $item->perilaku = 0.4;
            }else if ($item->perilaku >= 7){
                $item->perilaku = 0.2;
            }
            array_push($perilaku, $item->perilaku);

            //Penghasilan Orang Tua
            if ($item->penghasilan_orang_tua <500000){
                $item->penghasilan_orang_tua = 1;
            }else if ($item->penghasilan_orang_tua >= 500000 and $item->penghasilan_orang_tua < 1000000){
            $item->penghasilan_orang_tua = 0.8;
            }else if ($item->penghasilan_orang_tua >= 1000000  and $item->penghasilan_orang_tua < 2000000){
                $item->penghasilan_orang_tua = 0.6;
            }else if ($item->penghasilan_orang_tua >= 2000000  and $item->penghasilan_orang_tua < 3000000){
                $item->penghasilan_orang_tua = 0.4;
            }else if ($item->penghasilan_orang_tua >= 3000000){
                $item->penghasilan_orang_tua = 0.2;
            }
            array_push($penghasilan_orang_tua, $item->penghasilan_orang_tua);

            //Tanggungan Orang Tua
            if ($item->tanggungan_orang_tua >=5){
                $item->tanggungan_orang_tua = 1;
            }else if ($item->tanggungan_orang_tua =4){
                $item->tanggungan_orang_tua = 0.8;
            }else if ($item->tanggungan_orang_tua =3){
                $item->tanggungan_orang_tua = 0.6;
            }else if ($item->tanggungan_orang_tua =2){
                $item->tanggungan_orang_tua = 0.4;
            }else if ($item->tanggungan_orang_tua =1){
                $item->tanggungan_orang_tua = 0.2;
            }
            array_push($tanggungan_orang_tua, $item->tanggungan_orang_tua);

            //Pekerjaan Orang Tua
            if ($item->pekerjaan_orang_tua == 'Tidak Bekerja'){
                $item->pekerjaan_orang_tua = 1;
            }else if ($item->pekerjaan_orang_tua == 'Petani'){
            $item->pekerjaan_orang_tua = 0.8;
            }else if ($item->pekerjaan_orang_tua == 'Guru'){
                $item->pekerjaan_orang_tua = 0.6;
            }else if ($item->pekerjaan_orang_tua == 'Pedagang'){
                $item->pekerjaan_orang_tua = 0.4;
            }else if ($item->pekerjaan_orang_tua == 'Lain-lain'){
                $item->pekerjaan_orang_tua = 0.2;
            }
            array_push($pekerjaan_orang_tua, $item->pekerjaan_orang_tua);

            //Kondisi Orang Tua
            if ($item->kondisi_orang_tua == 'Yatim Piatu'){
                $item->kondisi_orang_tua = 1;
            }else if ($item->kondisi_orang_tua == 'Yatim'){
            $item->kondisi_orang_tua = 0.8;
            }else if ($item->kondisi_orang_tua == 'Piatu'){
                $item->kondisi_orang_tua = 0.6;
            }else if ($item->kondisi_orang_tua == 'Cerai'){
                $item->kondisi_orang_tua = 0.4;
            }else if ($item->kondisi_orang_tua == 'Lengkap'){
                $item->kondisi_orang_tua = 0.2;
            }
            array_push($kondisi_orang_tua, $item->kondisi_orang_tua);

        }

        //Mencari Nilai tertinggi max dan terendah min dari bobot nilai
        $max_nilai_raport = collect($nilai_raport)->max();
        $min_perilaku = collect($perilaku)->min();
        $min_penghasilan_orang_tua = collect($penghasilan_orang_tua)->min();
        // dd($penghasilan_orang_tua);
        $max_tanggungan_orang_tua = collect($tanggungan_orang_tua)->max();
        $max_pekerjaan_orang_tua = collect($pekerjaan_orang_tua)->max();
        $min_kondisi_orang_tua = collect($kondisi_orang_tua)->min();

        $benefit_nilai_raport = array();
        $cost_perilaku = array();
        $cost_penghasilan_orang_tua = array();
        $benefit_tanggungan_orang_tua = array();
        $benefit_pekerjaan_orang_tua = array();
        $cost_kondisi_orang_tua = array();


        foreach($nilai_raport as $nr){
            $n_nilai_raport = $nr / $max_nilai_raport;
            array_push($benefit_nilai_raport, $n_nilai_raport);
        }

        foreach($perilaku as $p){
            $n_perilaku = $min_perilaku / $p;
            array_push($cost_perilaku, $n_perilaku);
        }

        foreach($penghasilan_orang_tua as $pot){
            $n_penghasilan_orang_tua = $min_penghasilan_orang_tua / $pot;
            array_push($cost_penghasilan_orang_tua, $n_penghasilan_orang_tua);
        }

        foreach($tanggungan_orang_tua as $tot){
            $n_tanggungan_orang_tua = $tot / $max_tanggungan_orang_tua;
            array_push($benefit_tanggungan_orang_tua, $n_tanggungan_orang_tua);
        }

        foreach($pekerjaan_orang_tua as $pkot){
            $n_pekerjaan_orang_tua = $pkot / $max_pekerjaan_orang_tua;
            array_push($benefit_pekerjaan_orang_tua, $n_pekerjaan_orang_tua);
        }

        foreach($kondisi_orang_tua as $kot){
            $n_kondisi_orang_tua = $min_kondisi_orang_tua / $kot;
            array_push($cost_kondisi_orang_tua, $n_kondisi_orang_tua);
        }

        $map1 = array_map(function ($single_nilai_raport,
        $single_nilai_raport_normalisasi,
        $single_perilaku,
        $single_perilaku_normalisasi,
        $single_penghasilan_orang_tua,
        $single_penghasilan_orang_tua_normalisasi,
        $single_tanggungan_orang_tua,
        $single_tanggungan_orang_tua_normalisasi,
        $single_pekerjaan_orang_tua,
        $single_pekerjaan_orang_tua_normalisasi,
        $single_kondisi_orang_tua,
        $single_kondisi_orang_tua_normalisasi

        ){
            $hasil1 = $single_nilai_raport * $single_nilai_raport_normalisasi;
            $hasil2 = $single_perilaku * $single_perilaku_normalisasi;
            $hasil3 = $single_penghasilan_orang_tua * $single_penghasilan_orang_tua_normalisasi;
            $hasil4 = $single_tanggungan_orang_tua * $single_tanggungan_orang_tua_normalisasi;
            $hasil5 = $single_pekerjaan_orang_tua * $single_pekerjaan_orang_tua_normalisasi;
            $hasil6 = $single_kondisi_orang_tua * $single_kondisi_orang_tua_normalisasi;

            return $hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5 + $hasil6;
        },
        $nilai_raport, $benefit_nilai_raport,
        $perilaku, $cost_perilaku,
        $penghasilan_orang_tua, $cost_penghasilan_orang_tua,
        $tanggungan_orang_tua, $benefit_tanggungan_orang_tua,
        $pekerjaan_orang_tua, $benefit_pekerjaan_orang_tua,
        $kondisi_orang_tua, $cost_kondisi_orang_tua);

        $total = $map1;

        $data = [
            'siswa' => $siswa,
             'item' => $item,
             'kriteria' => $kriteria,
             'benefit_nilai_raport' => $benefit_nilai_raport,
             'cost_perilaku' => $cost_perilaku,
             'cost_penghasilan_orang_tua' => $cost_penghasilan_orang_tua,
             'benefit_tanggungan_orang_tua' => $benefit_tanggungan_orang_tua,
             'benefit_pekerjaan_orang_tua' => $benefit_pekerjaan_orang_tua,
             'cost_kondisi_orang_tua' => $cost_kondisi_orang_tua,
             'total' => $total,
        ];

            return view('dashboard.seleksi.index', compact('data'));
    }

    public function save(Request $request)
    {
        dd($request->all());
    }
}

