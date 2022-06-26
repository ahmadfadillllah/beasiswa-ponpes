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

        foreach($kriteria as $item){

            //Nilai Raport
            if ($item->nilai_raport <= 59){
                $item->nilai_raport = 0;
            }else if ($item->nilai_raport >= 60 and $item->nilai_raport <= 69){
            $item->nilai_raport = 0.25;
            }else if ($item->nilai_raport >= 70 and $item->nilai_raport <= 79){
                $item->nilai_raport = 0.50;
            }else if ($item->nilai_raport >= 80 and $item->nilai_raport <= 89){
                $item->nilai_raport = 0.75;
            }else if ($item->nilai_raport >= 90){
                $item->nilai_raport = 1;
            }

            //Perilaku
            if ($item->perilaku <2){
                $item->perilaku = 1;
            }else if ($item->perilaku >= 2 and $item->perilaku < 3){
            $item->perilaku = 0.75;
            }else if ($item->perilaku >= 3  and $item->perilaku < 5){
                $item->perilaku = 0.50;
            }else if ($item->perilaku >= 5  and $item->perilaku < 7){
                $item->perilaku = 0.25;
            }else if ($item->perilaku >= 7){
                $item->perilaku = 0;
            }

            //Penghasilan Orang Tua
            if ($item->penghasilan_orang_tua <500000){
                $item->penghasilan_orang_tua = 1;
            }else if ($item->penghasilan_orang_tua >= 500000 and $item->penghasilan_orang_tua < 1000000){
            $item->penghasilan_orang_tua = 0.75;
            }else if ($item->penghasilan_orang_tua >= 1000000  and $item->penghasilan_orang_tua < 2000000){
                $item->penghasilan_orang_tua = 0.50;
            }else if ($item->penghasilan_orang_tua >= 2000000  and $item->penghasilan_orang_tua < 3000000){
                $item->penghasilan_orang_tua = 0.25;
            }else if ($item->penghasilan_orang_tua >= 3000000){
                $item->penghasilan_orang_tua = 0;
            }

            //Tanggungan Orang Tua
            if ($item->tanggungan_orang_tua >=5){
                $item->tanggungan_orang_tua = 1;
            }else if ($item->tanggungan_orang_tua =4){
            $item->tanggungan_orang_tua = 0.75;
            }else if ($item->tanggungan_orang_tua =3){
                $item->tanggungan_orang_tua = 0.50;
            }else if ($item->tanggungan_orang_tua =2){
                $item->tanggungan_orang_tua = 0.25;
            }else if ($item->tanggungan_orang_tua =1){
                $item->tanggungan_orang_tua = 0;
            }

            //Pekerjaan Orang Tua
            if ($item->pekerjaan_orang_tua == 'Tidak Bekerja'){
                $item->pekerjaan_orang_tua = 1;
            }else if ($item->pekerjaan_orang_tua == 'Petani'){
            $item->pekerjaan_orang_tua = 0.75;
            }else if ($item->pekerjaan_orang_tua == 'Guru'){
                $item->pekerjaan_orang_tua = 0.50;
            }else if ($item->pekerjaan_orang_tua == 'Pedagang'){
                $item->pekerjaan_orang_tua = 0.25;
            }else if ($item->pekerjaan_orang_tua == 'Lain-lain'){
                $item->pekerjaan_orang_tua = 0;
            }

            //Kondisi Orang Tua
            if ($item->kondisi_orang_tua == 'Yatim Piatu'){
                $item->kondisi_orang_tua = 1;
            }else if ($item->kondisi_orang_tua == 'Yatim'){
            $item->kondisi_orang_tua = 0.75;
            }else if ($item->kondisi_orang_tua == 'Piatu'){
                $item->kondisi_orang_tua = 0.50;
            }else if ($item->kondisi_orang_tua == 'Cerai'){
                $item->kondisi_orang_tua = 0.25;
            }else if ($item->kondisi_orang_tua == 'Lengkap'){
                $item->kondisi_orang_tua = 0;
            }

        }




        return view('dashboard.seleksi.index', compact('siswa', 'item', 'kriteria'));
    }
}

