<?php

/**
 * Seeder for MemberShip Table
 * Created on 25 October 2023
 * Author : Frank Zohim
*/

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MemberShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //Data to store
        $data = [
            [
                'membership_name'=>'PREMIUM',
                'period'=>'21',
                'price' => '3000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

              [
                'membership_name'=>'GOLD',
                'period'=>'21',
                'price' => '5000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

              [
                'membership_name'=>'ULTRA VIP',
                'period'=>'21',
                'price' => '10000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'membership_name'=>'VIP',
                'period'=>'21',
                'price' => '1500',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        //Storing Data
        DB::table('memberships')->insert($data);
    }
}
