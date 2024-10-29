<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; // Pastikan untuk menambahkan ini

class AksesLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('akseslevel')->insert([
            ['KodeLevel' => 1, 'NamaLevel' => 'admin', 'IsAktif' => 1],
            ['KodeLevel' => 2, 'NamaLevel' => 'petugas', 'IsAktif' => 1],
            ['KodeLevel' => 3, 'NamaLevel' => 'coba', 'IsAktif' => 1],
        ]);
    }
}
