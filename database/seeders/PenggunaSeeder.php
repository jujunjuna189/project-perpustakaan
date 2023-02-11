<?php

namespace Database\Seeders;

use App\Models\PenggunaModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'id_pengguna' => 1,
                'nm_pengguna' => 'Administrator',
                'username' => 'admin',
                'password' => Hash::make(123456),
                'hak_akses' => 1,
                'status' => 'Guru',
            ]
        ];

        PenggunaModel::truncate();
        PenggunaModel::insert($array);
    }
}
