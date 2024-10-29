<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan untuk menambahkan ini

class MstPengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mstpengunjung')->insert([
            ['IDUser' => 'P-20240117-0000001', 'NIK' => '1234567890', 'NamaLengkap' => 'harry maguire', 'NoHP' => '081234567890', 'TglRegister' => '2023-08-07', 'IsAktif' => 1, 'Password' => 'MTIzNDU=', 'Email' => 'hary@gmail.com', 'FotoProfil' => null],
            ['IDUser' => 'P-20240117-0000002', 'NIK' => '3214324324312', 'NamaLengkap' => 'harry maguire', 'NoHP' => '081234567890', 'TglRegister' => '2024-01-17', 'IsAktif' => 1, 'Password' => 'MTIzNDU=', 'Email' => 'hary@gmail.com', 'FotoProfil' => null],
            ['IDUser' => 'P-20240117-0000003', 'NIK' => '6667556', 'NamaLengkap' => 'harry maguire', 'NoHP' => '081234567890', 'TglRegister' => '2024-01-17', 'IsAktif' => 1, 'Password' => 'MTIzNDU=', 'Email' => 'hary@gmail.com', 'FotoProfil' => null],
            ['IDUser' => 'P-20240118-0000004', 'NIK' => '35170811223344', 'NamaLengkap' => 'Jarrel Quansah', 'NoHP' => '081234567890', 'TglRegister' => '2023-08-07', 'IsAktif' => 1, 'Password' => 'MTIzNDU=', 'Email' => 'jarrel@gmail.com', 'FotoProfil' => '65a897ef14ab8_1705547759.png'],
            ['IDUser' => 'P-20240123-0000005', 'NIK' => '1234567891', 'NamaLengkap' => 'Hoho', 'NoHP' => '085723032123', 'TglRegister' => '2024-01-23', 'IsAktif' => 1, 'Password' => 'MTIzNDU=', 'Email' => 'afindoinformatikajbg@gmail.com', 'FotoProfil' => '65af5b8141a25_1705991041.png'],
        ]);
    }
}
