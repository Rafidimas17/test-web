<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan untuk menambahkan ini

class MstUserLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mstuserlogin')->insert([
            [
                'UserName' => 'admin',
                'NamaLengkap' => 'Admindu 1',
                'NoHP' => '085745910591',
                'IsAktif' => 1,
                'Password' => '$2y$10$4GEj1yIid/Ekj0qMbgGJN.5tLmTbvzGMTxsPrMHrTbzfX9KQNOBAW',
                'KodeLevel' => 1,
                'IsPetugasLoket' => 0,
                'IsAdmin' => 1,
            ],
            [
                'UserName' => 'budi',
                'NamaLengkap' => 'Budi',
                'NoHP' => '0232112',
                'IsAktif' => null, // Sesuaikan dengan data Anda
                'Password' => '$2y$10$4GEj1yIid/Ekj0qMbgGJN.5tLmTbvzGMTxsPrMHrTbzfX9KQNOBAW',
                'KodeLevel' => 3,
                'IsPetugasLoket' => 0,
                'IsAdmin' => 0,
            ],
            [
                'UserName' => 'joni',
                'NamaLengkap' => 'joni kuchiyose no jutsu',
                'NoHP' => '08123456789',
                'IsAktif' => 1,
                'Password' => 'MTIzNDU=', // Sesuaikan dengan hash password
                'KodeLevel' => 2,
                'IsPetugasLoket' => 1,
                'IsAdmin' => 0,
            ],
        ]);
    }
}
