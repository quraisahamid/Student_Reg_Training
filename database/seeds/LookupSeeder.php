<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LookupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //religion
        DB::table('religions')->insert([
            'name' => 'Islam'
        ]);

        DB::table('religions')->insert([
            'name' => 'Kristian'
        ]);

        DB::table('religions')->insert([
            'name' => 'Budhha'
        ]);

    //genders
        DB::table('genders')->insert([
            'name' => 'Male'
        ]);

        DB::table('genders')->insert([
            'name' => 'Female'
        ]);

        DB::table('genders')->insert([
            'name' => 'Others'
        ]);

    //statuses

        DB::table('statuses')->insert([
            'name' => 'Pending'
        ]);

        DB::table('statuses')->insert([
            'name' => 'Approved'
        ]);

        DB::table('statuses')->insert([
            'name' => 'Rejected'
        ]);

        //schools

        DB::table('schools')->insert([
            'name' => 'Sekolah Rendah'
        ]);

        DB::table('schools')->insert([
            'name' => 'Sekolah Menengah'
        ]);
    }
}
