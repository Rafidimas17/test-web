<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan untuk menambahkan ini

class ServerFiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serverfitur')->insert([
            ['KodeFitur' => 0, 'NoUrut' => 0, 'NamaFitur' => 'Akses Level', 'KelompokFitur' => 'Akses Level', 'IsAktif' => 1, 'Icon' => 'feather-database', 'Slug' => 'akses', 'Url' => 'App\\Http\\Controllers\\AksesController', 'Method' => 'auto'],
            ['KodeFitur' => 1, 'NoUrut' => 1, 'NamaFitur' => 'Manajemen Loket', 'KelompokFitur' => 'Manajemen Loket', 'IsAktif' => 1, 'Icon' => 'feather-users', 'Slug' => 'manajemen-loket', 'Url' => 'App\\Http\\Controllers\\Master\\LoketController', 'Method' => 'auto'],
            ['KodeFitur' => 2, 'NoUrut' => 2, 'NamaFitur' => 'Manajemen Layanan', 'KelompokFitur' => 'Manajemen Layanan', 'IsAktif' => 1, 'Icon' => 'feather-grid', 'Slug' => 'manajemen-layanan', 'Url' => 'App\\Http\\Controllers\\Master\\LayananController', 'Method' => 'auto'],
            ['KodeFitur' => 3, 'NoUrut' => 3, 'NamaFitur' => 'Pengunjung', 'KelompokFitur' => 'Pengunjung', 'IsAktif' => 1, 'Icon' => 'feather-grid', 'Slug' => 'pengunjung', 'Url' => 'App\\Http\\Controllers\\Master\\PengunjungController', 'Method' => 'auto'],
            ['KodeFitur' => 4, 'NoUrut' => 4, 'NamaFitur' => 'Daftar Type', 'KelompokFitur' => 'Manajemen Kendaraan', 'IsAktif' => 0, 'Icon' => 'feather-grid', 'Slug' => 'daftar-type', 'Url' => 'App\\Http\\Controllers\\Master\\TypeController', 'Method' => 'get'],
            ['KodeFitur' => 5, 'NoUrut' => 5, 'NamaFitur' => 'Manajemen Via Payment', 'KelompokFitur' => 'Manajemen Via Payment', 'IsAktif' => 0, 'Icon' => 'feather-grid', 'Slug' => 'manajemen-payment', 'Url' => 'App\\Http\\Controllers\\Master\\PaymentController', 'Method' => 'get'],
            ['KodeFitur' => 6, 'NoUrut' => 6, 'NamaFitur' => 'Setting Biaya', 'KelompokFitur' => 'Setting Biaya', 'IsAktif' => 0, 'Icon' => 'feather-grid', 'Slug' => 'setting-biaya', 'Url' => 'App\\Http\\Controllers\\Master\\BiayaController', 'Method' => 'get'],
            ['KodeFitur' => 7, 'NoUrut' => 7, 'NamaFitur' => 'Transaksi', 'KelompokFitur' => 'Transaksi', 'IsAktif' => 0, 'Icon' => 'feather-grid', 'Slug' => 'transaksi', 'Url' => 'App\\Http\\Controllers\\Transaksi\\TransController', 'Method' => 'get'],
            ['KodeFitur' => 8, 'NoUrut' => 8, 'NamaFitur' => 'Laporan Antrian', 'KelompokFitur' => 'Laporan', 'IsAktif' => 1, 'Icon' => 'feather-bar-chart', 'Slug' => 'laporan', 'Url' => 'App\\Http\\Controllers\\Laporan\\LaporanController', 'Method' => 'auto'],
            ['KodeFitur' => 9, 'NoUrut' => 9, 'NamaFitur' => 'Laporan Piutang', 'KelompokFitur' => 'Laporan', 'IsAktif' => 1, 'Icon' => 'feather-grid', 'Slug' => 'laporan/piutang', 'Url' => null, 'Method' => 'auto'],
        ]);
    }
}
