<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            AksesLevelSeeder::class,
            FiturLevelSeeder::class,
            MstLayananSeeder::class,
            MstUserLoginSeeder::class,
            MstLoketSeeder::class,
            MstPengunjungSeeder::class,           
            ServerFiturSeeder::class,
            TrKunjunganSeeder::class,

        ]);
    }
}
