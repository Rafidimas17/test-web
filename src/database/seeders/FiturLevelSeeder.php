<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan ini diimport

class FiturLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fiturlevel')->insert([
            ['ViewData' => 1, 'AddData' => 1, 'EditData' => 1, 'DeleteData' => 1, 'PrintData' => 1, 'KodeLevel' => 1, 'KodeFitur' => 0],
            ['ViewData' => 1, 'AddData' => 1, 'EditData' => 1, 'DeleteData' => 1, 'PrintData' => 1, 'KodeLevel' => 1, 'KodeFitur' => 1],
            ['ViewData' => 1, 'AddData' => 1, 'EditData' => 1, 'DeleteData' => 1, 'PrintData' => 1, 'KodeLevel' => 1, 'KodeFitur' => 2],
            ['ViewData' => 1, 'AddData' => 1, 'EditData' => 1, 'DeleteData' => 1, 'PrintData' => 1, 'KodeLevel' => 1, 'KodeFitur' => 3],
            ['ViewData' => 1, 'AddData' => 1, 'EditData' => 1, 'DeleteData' => 1, 'PrintData' => 1, 'KodeLevel' => 1, 'KodeFitur' => 8],
            ['ViewData' => 1, 'AddData' => 1, 'EditData' => 1, 'DeleteData' => 1, 'PrintData' => 1, 'KodeLevel' => 1, 'KodeFitur' => 9],
            ['ViewData' => 0, 'AddData' => 0, 'EditData' => 0, 'DeleteData' => 0, 'PrintData' => 0, 'KodeLevel' => 3, 'KodeFitur' => 0],
            ['ViewData' => 0, 'AddData' => 0, 'EditData' => 0, 'DeleteData' => 0, 'PrintData' => 0, 'KodeLevel' => 3, 'KodeFitur' => 1],
            ['ViewData' => 1, 'AddData' => 1, 'EditData' => 1, 'DeleteData' => 1, 'PrintData' => 1, 'KodeLevel' => 3, 'KodeFitur' => 2],
            ['ViewData' => 0, 'AddData' => 0, 'EditData' => 0, 'DeleteData' => 0, 'PrintData' => 0, 'KodeLevel' => 3, 'KodeFitur' => 8],
            ['ViewData' => 1, 'AddData' => 1, 'EditData' => 1, 'DeleteData' => 1, 'PrintData' => 1, 'KodeLevel' => 3, 'KodeFitur' => 9],
        ]);
    }
}
