<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            'name' => Str::random(5) . " University", 
            'students_number' => mt_rand(100, 2000),
        ]);
    }
}
