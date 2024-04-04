<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>'user',
                'secret' => "Ja3gbBhsdiEJKdZiNBHCbNURCsgeFL933ZLfIpVX",
                'redirect' => "http://localhost/auth/callback",
                'personal_access_client'=>0,
                'password_client'=>0,
                'revoked'=>0
            ],
            [
                'name'=>'Laravel Password Grant Client',
                'secret' => "JEqpOXFF3Bgt3ND2UzbnuBjuhgIOtGGFJwb377rl",
                "provider"=>"users",
                'redirect' => "http://localhost/",
                'personal_access_client'=>0,
                'password_client'=> 1,
                'revoked'=>0
            ],
        ];

        DB::table('oauth_clients')->insert($data);
    }
}
