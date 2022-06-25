<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kriteria::insert([
            'kode' => 'C1',
            'nama' => 'Nilai rata-rata rapor',
            'jenis' => 'benefit',
        ]);

        Kriteria::insert([
            'kode' => 'C2',
            'nama' => 'Perilaku Siswa',
            'jenis' => 'cost',
        ]);

        Kriteria::insert([
            'kode' => 'C3',
            'nama' => 'Penghasilan orang tua',
            'jenis' => 'cost',
        ]);

        Kriteria::insert([
            'kode' => 'C4',
            'nama' => 'Jumlah tanggungan orang tua',
            'jenis' => 'benefit',
        ]);

        Kriteria::insert([
            'kode' => 'C5',
            'nama' => 'Pekerjaan orang tua',
            'jenis' => 'cost',
        ]);

        Kriteria::insert([
            'kode' => 'C6',
            'nama' => 'Kondisi orang tua',
            'jenis' => 'cost',
        ]);
    }
}
