<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'position'=>'header_promo',
                'description'=>"Espace promotionel",
                'path' => "1_1703835779_3652.jpg.jpg",
                'status' => "1",
            ],
            [
                'position'=>'home_top',
                'description'=>"Page d'accueil Top",
                'path' => "2_1703774929_banner.jpg.jpg",
                'status' => "1",
            ],
            [
                'position'=>'home_bottom',
                'description'=>"Page d'accueil Footer",
                'path' => "3_1703784739_85125.jpg.jpg",
                'status' => "1",
            ],
            [
                'position'=>'ads_list_bottom',
                'description'=>"Page Listing des annonces",
                'path' => "4_1703785188_5241.jpg.jpg",
                'status' => "1",
            ],
            [
                'position'=>'ads_detail_bottom',
                'description'=>"Page détail d'une annonce",
                'path' => "5_1703785505_9685.jpg.jpg",
                'status' => "1",
            ],
            [
                'position'=>'ads_creation_bottom',
                'description'=>"Page création d'une annonce",
                'path' => "6_1703835144_1475.jpg.jpg",
                'status' => "1",
            ],
            [
                'position'=>'search_result',
                'description'=>"Page résultats de recherche",
                'path' => "7_1703785842_845.jpg.jpg",
                'status' => "1",
            ],
        
           
        ];

        DB::table('banners')->insert($data);
    }
}
