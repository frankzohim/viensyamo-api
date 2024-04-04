<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'question_name'=>'Quel est votre position préferée?',

            ],
            [
                'question_name'=>'Quel est votre date de naissance?',

            ],
            [
                'question_name'=>'Quel est votre signe astrologique?',

            ],

            [
                'question_name'=>'Quel est votre pays de residence?',

            ],
            [
                "question_name"=>"Quel est votre nom d'enfance?",

            ],
        ];

        DB::table('questions')->insert($data);
    }
}
