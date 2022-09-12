<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++){
            DB::table('students')->insert([
                'name' => Str::random(5) . " Name", 
                'surname' => Str::random(5) . " Surname",
                'university_id' => 1,
            ]);
        }
    }
}
