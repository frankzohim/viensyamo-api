<?php

/**
 * Seeder for User Table
 * Created on 25 October 2023
 * Author : Frank Zohim
*/
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //Data to store
        $data = [
            [
                'username'=>'delanofofe',
                'email'=>'delanofofe@gmail.com',
                'role_id' => 1,
                'town_id' => 1,
                'phone_number' => "675824349",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                "balance"=>0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
             [
                'username'=>'level237',
                'email'=>'martin@gmail.com',
                'role_id' => 1,
                'town_id' => 1,
                'phone_number' => "690394365",
                "balance"=>0,
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'username'=>'franknyawa',
                'email'=>'franknyawa@gmail.com',
                'role_id' => 1,
                'town_id' => 1,
                'phone_number' => "693374160",
                "balance"=>0,
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

             [
                'username'=>'admin',
                'email'=>'temerprodesign@yahoo.fr',
                'role_id' => 1,
                'town_id' => 1,
                "balance"=>0,
                'phone_number' => "698825366",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'maeve',
                'email'=>'maeve@gmail.com',
                'role_id' => 2,
                'town_id' => 2,
                "balance"=>3000,
                'phone_number' => "694145298",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'leila',
                'email'=>'leila@gmail.com',
                'role_id' => 2,
                "balance"=>5000,
                'town_id' => 2,
                'phone_number' => "671375860",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'sheila',
                'email'=>'sheila@gmail.com',
                'role_id' => 2,
                'town_id' => 2,
                "balance"=>100000,
                'phone_number' => "654011210",
                'password' => Hash::make('password'),
                'isVerify' => 0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'anna',
                'email'=>'anna@gmail.com',
                'role_id' => 2,
                'town_id' => 2,
                "balance"=>1000,
                'phone_number' => "655259632",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'laura',
                'email'=>'laura@gmail.com',
                'role_id' => 2,
                'town_id' => 2,
                "balance"=>0,
                'phone_number' => "657011215",
                'password' => Hash::make('password'),
                'isVerify' => 0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'victoire',
                'email'=>'victoire@gmail.com',
                'role_id' => 2,
                'town_id' => 7,
                "balance"=>0,
                'phone_number' => "658111210",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'judith',
                'email'=>'judith@gmail.com',
                'role_id' => 2,
                'town_id' => 7,
                "balance"=>0,
                'phone_number' => "659579620",
                'password' => Hash::make('password'),
                'isVerify' => 0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'theresa',
                'email'=>'theresa@gmail.com',
                'role_id' => 2,
                'town_id' => 7,
                "balance"=>0,
                'phone_number' => "650258734",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'miranda',
                'email'=>'miranda@gmail.com',
                'role_id' => 2,
                'town_id' => 1,
                "balance"=>0,
                'phone_number' => "698744152",
                'password' => Hash::make('password'),
                'isVerify' => 0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'cynthia',
                'email'=>'cynthia@gmail.com',
                'role_id' => 2,
                'town_id' => 2,
                "balance"=>0,
                'phone_number' => "675851400",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'brenda',
                'email'=>'brenda@gmail.com',
                'role_id' => 2,
                'town_id' => 1,
                "balance"=>0,
                'phone_number' => "678902030",
                'password' => Hash::make('password'),
                'isVerify' => 0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'melissa',
                'email'=>'melissa@gmail.com',
                'role_id' => 2,
                'town_id' => 2,
                "balance"=>0,
                'phone_number' => "690524185",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'irene',
                'email'=>'irene@gmail.com',
                'role_id' => 2,
                'town_id' => 7,
                "balance"=>0,
                'phone_number' => "699663322",
                'password' => Hash::make('password'),
                'isVerify' => 0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'flore',
                'email'=>'flore@gmail.com',
                'role_id' => 2,
                'town_id' => 2,
                "balance"=>0,
                'phone_number' => "670805020",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'rita',
                'email'=>'rita@gmail.com',
                'role_id' => 2,
                'town_id' => 1,
                "balance"=>0,
                'phone_number' => "691141516",
                'password' => Hash::make('password'),
                'isVerify' => 0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'orchelle',
                'email'=>'orchelle@gmail.com',
                'role_id' => 2,
                'town_id' => 2,
                "balance"=>0,
                'phone_number' => "671526302",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'jordy',
                'email'=>'jordy@gmail.com',
                'role_id' => 2,
                'town_id' => 7,
                "balance"=>0,
                'phone_number' => "658605030",
                'password' => Hash::make('password'),
                'isVerify' => 0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
              [
                'username'=>'patrick',
                'email'=>'patrick@gmail.com',
                'role_id' => 3,
                'town_id' => 4,
                "balance"=>5000,
                'phone_number' => "692524282",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'max',
                'email'=>'max@gmail.com',
                'role_id' => 3,
                'town_id' => 5,
                "balance"=>0,
                'phone_number' => "692835363",
                'password' => Hash::make('password'),
                'isVerify' => 0,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
              [
                'username'=>'paulin',
                'email'=>'paulin@gmail.com',
                'role_id' => 3,
                'town_id' => 3,
                "balance"=>0,
                'phone_number' => "697585962",
                'password' => Hash::make('password'),
                'isVerify' => 1,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];

        //Storing Data
        DB::table('users')->insert($data);
    }
}
