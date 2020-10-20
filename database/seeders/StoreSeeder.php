<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->delete();

        DB::table('stores')->insert([
            ['name' => 'Santiago'],
            ['name' => 'Valdivia'],
            ['name' => 'Punta Arenas'],
        ]);
    }
}
