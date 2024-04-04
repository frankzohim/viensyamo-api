<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data to store
        $data = [
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>5,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>6,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>7,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>8,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>9,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>10,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>11,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>12,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>13,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>14,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>15,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>16,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>17,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>8,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>19,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>20,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>21,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>5000,
                'user_id'=>5,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>10000,
                'user_id'=>6,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'payment_type'=>"Momo",
                'price'=>3000,
                'user_id'=>7,
                'status'=>"2",
                "transaction_id"=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];

        //Storing Data
        DB::table('payments')->insert($data);
    }
}
