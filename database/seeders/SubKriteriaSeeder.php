<?php

namespace Database\Seeders;

use App\Models\SubKriteria;
use Illuminate\Database\Seeder;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Nilai Rata-rata raport
        SubKriteria::insert([
            'kodekriteria' => 'C1',
            'bobot' => 'Sangat Rendah',
            'kondisi' => '≤59',
            'nilai' => '0',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C1',
            'kondisi' => '≥60',
            'bobot' => 'Rendah',
            'nilai' => '0.25',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C1',
            'bobot' => 'Sedang',
            'kondisi' => '≥70',
            'nilai' => '0.5',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C1',
            'bobot' => 'Tinggi',
            'kondisi' => '≥80',
            'nilai' => '0.75',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C1',
            'bobot' => 'Sangat Tinggi',
            'kondisi' => '≥90',
            'nilai' => '1',
        ]);


        //Perilaku Siswa
        SubKriteria::insert([
            'kodekriteria' => 'C2',
            'kondisi' => '≥7',
            'bobot' => 'Sangat Rendah',
            'nilai' => '0',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C2',
            'kondisi' => '≥5',
            'bobot' => 'Rendah',
            'nilai' => '0.25',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C2',
            'kondisi' => '≥3',
            'bobot' => 'Sedang',
            'nilai' => '0.5',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C2',
            'kondisi' => '≥2',
            'bobot' => 'Tinggi',
            'nilai' => '0.75',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C2',
            'kondisi' => '≥0',
            'bobot' => 'Sangat Tinggi',
            'nilai' => '1',
        ]);

        //Penghasilan Orang Tua
        SubKriteria::insert([
            'kodekriteria' => 'C3',
            'kondisi' => '≥3000000',
            'bobot' => 'Sangat Rendah',
            'nilai' => '0',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C3',
            'kondisi' => '≥2000000',
            'bobot' => 'Rendah',
            'nilai' => '0.25',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C3',
            'kondisi' => '≥1000000',
            'bobot' => 'Sedang',
            'nilai' => '0.5',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C3',
            'kondisi' => '≥500000',
            'bobot' => 'Tinggi',
            'nilai' => '0.75',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C3',
            'kondisi' => '<500000',
            'bobot' => 'Sangat Tinggi',
            'nilai' => '1',
        ]);

        //Jumlah Tanggungan Orang Tua
        SubKriteria::insert([
            'kodekriteria' => 'C4',
            'kondisi' => '1',
            'bobot' => 'Sangat Rendah',
            'nilai' => '0',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C4',
            'kondisi' => '2',
            'bobot' => 'Rendah',
            'nilai' => '0.25',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C4',
            'kondisi' => '3',
            'bobot' => 'Sedang',
            'nilai' => '0.5',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C4',
            'kondisi' => '4',
            'bobot' => 'Tinggi',
            'nilai' => '0.75',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C4',
            'kondisi' => '≥5',
            'bobot' => 'Sangat Tinggi',
            'nilai' => '1',
        ]);

        //Pekerjaan Orang Tua
        SubKriteria::insert([
            'kodekriteria' => 'C5',
            'kondisi' => 'Lain-lain',
            'bobot' => 'Sangat Rendah',
            'nilai' => '0',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C5',
            'kondisi' => 'Pedagang',
            'bobot' => 'Rendah',
            'nilai' => '0.25',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C5',
            'kondisi' => 'Guru',
            'bobot' => 'Sedang',
            'nilai' => '0.5',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C5',
            'kondisi' => 'Petani',
            'bobot' => 'Tinggi',
            'nilai' => '0.75',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C5',
            'kondisi' => 'Tidak Bekerja',
            'bobot' => 'Sangat Tinggi',
            'nilai' => '1',
        ]);

        //Kondisi Orang Tua
        SubKriteria::insert([
            'kodekriteria' => 'C6',
            'kondisi' => 'Lengkap',
            'bobot' => 'Sangat Rendah',
            'nilai' => '0',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C6',
            'kondisi' => 'Cerai',
            'bobot' => 'Rendah',
            'nilai' => '0.25',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C6',
            'kondisi' => 'Piatu',
            'bobot' => 'Sedang',
            'nilai' => '0.5',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C6',
            'kondisi' => 'Yatim',
            'bobot' => 'Tinggi',
            'nilai' => '0.75',
        ]);

        SubKriteria::insert([
            'kodekriteria' => 'C6',
            'kondisi' => 'Yatim Piatu',
            'bobot' => 'Sangat Tinggi',
            'nilai' => '1',
        ]);
    }
}
