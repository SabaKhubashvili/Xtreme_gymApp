<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('memberships')->insert([
                'name'=> 'Morning (1 Month)',
                'price'=>50,
                'in'=>'9:00-12:00',
                'out'=>'9:00-12:00'
            ]);

            DB::table('memberships')->insert([
                'name'=> 'Afternoon (1 Month)',
                'price'=>65,
                'in'=>'9:00-14:00',
                'out'=>'9:00-16:00'
            ]);
            DB::table('memberships')->insert([
                'name'=> 'Full Day (1 Month)',
                'price'=>85,
                'in'=>'9:00-24:00',
                'out'=>'9:00-24:00'
            ]);
            DB::table('memberships')->insert([
                'name'=> 'Morning (3 Month)',
                'price'=>130,
                'in'=>'9:00-12:00',
                'out'=>'9:00-12:00'
            ]);
            DB::table('memberships')->insert([
                'name'=> 'Afternoon (3 Month)',
                'price'=>180,
                'in'=>'9:00-14:00',
                'out'=>'9:00-16:00'
            ]);
            DB::table('memberships')->insert([
                'name'=> 'Full Day (3 Month)',
                'price'=>240,
                'in'=>'9:00-24:00',
                'out'=>'9:00-24:00'
            ]);
            DB::table('memberships')->insert([
                'name'=> 'Morning (1 Year)',
                'price'=>550,
                'in'=>'9:00-12:00',
                'out'=>'9:00-12:00'
            ]);
            DB::table('memberships')->insert([
                'name'=> 'Afternoon (1 Year)',
                'price'=>750,
                'in'=>'9:00-14:00',
                'out'=>'9:00-16:00'
            ]);
            DB::table('memberships')->insert([
                'name'=> 'Full Day (1 Year)',
                'price'=>950,
                'in'=>'9:00-24:00',
                'out'=>'9:00-24:00'
            ]);

    }
}
