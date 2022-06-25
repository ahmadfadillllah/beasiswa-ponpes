<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            'name' => 'Staf Sekolah',
            'email' => 'stafsekolah@gmail.com',
            'password' => Hash::make('stafsekolah'),
            'role' => 'stafsekolah',
            'status' => 'Aktif'
        ]);

        User::insert([
            'name' => 'Kepala Sekolah',
            'email' => 'kepalasekolah@gmail.com',
            'password' => Hash::make('kepalasekolah'),
            'role' => 'kepalasekolah',
            'status' => 'Aktif'
        ]);
    }
}
