<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan untuk menambahkan ini

class MstLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mstlayanan')->insert([
            ['IDLayanan' => 'LAY-0000024', 'NamaLayanan' => 'Layanan 1', 'IsAktif' => 1],
            ['IDLayanan' => 'LAY-0000025', 'NamaLayanan' => 'Layanan 2', 'IsAktif' => 1],
            ['IDLayanan' => 'LAY-0000026', 'NamaLayanan' => 'Layanan 3', 'IsAktif' => 1],
            ['IDLayanan' => 'LAY-0000027', 'NamaLayanan' => 'layanan 4', 'IsAktif' => 1],
        ]);
    }
}
