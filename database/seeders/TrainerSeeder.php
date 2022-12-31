<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            'name'=>'Lasha',
            'achivments'=>
            '2020 Mr Olypmia
Tbilisi Arm Wrestling N1
Active In Fitness Since 2010
Leader Of Team',
            'number'=>'598-43-87-99',
            'gmail'=>'Contact.Xtreme@gmail.com',
            'profile_image'=>'trainer1.jpg',
        ]);
        DB::table('trainers')->insert([
            'name'=>'Giorgi',
            'achivments'=>
            '2018 N1 In Bench Press Competetion
Active In Fintess Since 2010',
            'number'=>'598-43-87-99',
            'gmail'=>'Contact.Xtreme@gmail.com',
            'profile_image'=>'trainer2.jpg',
        ]);
        DB::table('trainers')->insert([
            'name'=>'Salome',
            'achivments'=>
            'In Football Since 2010
In Fitness Scince 2018',
            'number'=>'598-43-87-99',
            'gmail'=>'Contact.Xtreme@gmail.com',
            'profile_image'=>'trainer3.jpg',
        ]);
        DB::table('trainers')->insert([
            'name'=>'Xatia Wereteli',
            'achivments'=>
            '2018 Taekwando N1 Competetion
Active In Fitness Scince 2015',
            'number'=>'598-43-87-99',
            'gmail'=>'Contact.Xtreme@gmail.com',
            'profile_image'=>'trainer4.jpg',
        ]);
    }
}
