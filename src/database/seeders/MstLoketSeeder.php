<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan untuk menambahkan ini

class MstLoketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mstloket')->insert([
            ['IDLoket' => 'LOKET-0000001', 'NamaLoket' => 'Loket 1', 'NoLoket' => 1, 'FileAudio' => null, 'IsAktif' => 1, 'IsAvailable' => 1, 'UserName' => 'admin'],
            ['IDLoket' => 'LOKET-0000002', 'NamaLoket' => 'Loket 2', 'NoLoket' => 2, 'FileAudio' => null, 'IsAktif' => 0, 'IsAvailable' => 0, 'UserName' => 'admin'],
        ]);
    }
}
