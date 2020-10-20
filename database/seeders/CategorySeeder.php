<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert([
            ['name' => 'Montaña'],
            ['name' => 'Ruta'],
            ['name' => 'Niño'],
            ['name' => 'Urbanas'],
            ['name' => 'Freestyle'],
            ['name' => 'Eléctricas'],
        ]);
    }
}
