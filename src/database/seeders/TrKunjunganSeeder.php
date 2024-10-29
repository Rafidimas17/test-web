<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan untuk menambahkan ini

class TrKunjunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trkunjungan')->insert([
            [
                'IDKunjungan' => '1',
                'TanggalJam' => '2024-01-07',
                'JamDilayani' => '12:41:20',
                'NoAntrian' => 1,
                'StatusAntrian' => 'tunggu',
                'IDLoket' => 'LOKET-0000001',
                'UserName' => 'admin',
                'IDUser' => null,
                'NilaiSPM' => 90000,
                'IDLayanan' => 'LAY-0000024',
            ],
            [
                'IDKunjungan' => '2',
                'TanggalJam' => '2024-01-27',
                'JamDilayani' => '16:41:20',
                'NoAntrian' => 2,
                'StatusAntrian' => 'tunggu',
                'IDLoket' => 'LOKET-0000002',
                'UserName' => 'admin',
                'IDUser' => null,
                'NilaiSPM' => 10000,
                'IDLayanan' => 'LAY-0000025',
            ],
        ]);
    }
}
