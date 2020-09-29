<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'name' => 'Melayu'
        ]);

        DB::table('races')->insert([
            'name' => 'Cina'
        ]);

        DB::table('races')->insert([
            'name' => 'India'
        ]);
    }
}
