<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Sauna',
        ]);

        DB::table('tags')->insert([
            'name' => 'Cardio',
        ]);
        DB::table('tags')->insert([
            'name' => 'Bath',
        ]);
        DB::table('tags')->insert([
            'name' => 'Consultation With Trainer',
        ]);
        
    }
}
