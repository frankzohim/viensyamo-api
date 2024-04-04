<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data to store
        $data = [

            [
                'user_id'=>5,
                'town_id'=>1,
                'quarter_id'=>1,
                'gender'=>1,
                'age'=>20,
                'whatsapp'=>'237698748596',
                'isSubscribe'=>1,
                'announcement_category_id'=>1,
                'status'=>1,
                'subscribe_id'=>1,
                'title'=>'Baisseuse italienne',
                'slug'=>'baisseuse-italienne',

                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'1.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'user_id'=>6,
                'town_id'=>1,
                'quarter_id'=>2,
                'gender'=>1,

                'age'=>21,
                'whatsapp'=>'237698748595',
                'isSubscribe'=>1,
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>1,
                'title'=>"J'ai été vilaine, ma fessé stp",
                'slug'=>'jai-été-vilaine-ma-fessé-stp',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'2.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>7,
                'town_id'=>1,
                'quarter_id'=>6,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'237678748596',
                'isSubscribe'=>1,
                'announcement_category_id'=>1,
                 'status'=>1,
                 'subscribe_id'=>2,
                'title'=>'Ta lycéenne, viens jouer au prof',
                'slug'=>'ta-lycéenne-viens-jouer-au-prof',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                 'video_path'=>'3.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'town_id'=>1,
                'quarter_id'=>1,
                'gender'=>1,
                'age'=>25,
                'whatsapp'=>'237675747972',
                'isSubscribe'=>1,
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>3,
                'title'=>'Une bassa fontaine',
                'slug'=>'une-bassa-fontaine',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'4.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>9,
                'town_id'=>1,
                'quarter_id'=>6,
                'gender'=>1,
                'age'=>19,
                'whatsapp'=>'237655204185',
                'announcement_category_id'=>2,
                 'status'=>1,
                'isSubscribe'=>1,
                'subscribe_id'=>1,
                'title'=>'Ta bassa aux fesses douces',
                'slug'=>'ta-bassa-aux-fesses-douces',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'5.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>10,
                'town_id'=>1,
                'quarter_id'=>7,
                'gender'=>1,
                'subscribe_id'=>1,
                'age'=>23,
                'whatsapp'=>'237651749632',
                'announcement_category_id'=>2,
                 'status'=>1,
                   'isSubscribe'=>1,
                'title'=>'Viens soumettre ta panthere',
                'slug'=>'viens-soumettre-ta-panthere',
                'Description'=>'Envie de passer un bon moment en
                compagnie d’une vraie salope très cochonne
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>11,
                'town_id'=>1,
                'quarter_id'=>2,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'237695853214',
                'subscribe_id'=>2,
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Jouissance vaginale',
                'slug'=>'jouissance-vaginale',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'7.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>12,
                'town_id'=>1,
                'quarter_id'=>7,
                'gender'=>1,
                'subscribe_id'=>2,
                'age'=>21,
                'whatsapp'=>'237672368596',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Viens taper ta pute bassa',
                'slug'=>'viens-taper-ta-pute-bassa',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'8.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>13,
                'town_id'=>2,
                'quarter_id'=>32,
                'gender'=>1,
                'subscribe_id'=>3,
                'age'=>23,
                'whatsapp'=>'237671967485',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Viens croquer une file brune Eton',
                'slug'=>'viens-croquer-une-file-brune-eton',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'9.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>14,
                'town_id'=>2,
                'quarter_id'=>32,
                'gender'=>1,
                'subscribe_id'=>3,
                'age'=>22,
                'whatsapp'=>'237698742535',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Ton chocolat blanc',
                'slug'=>'ton-chocolat-blanc',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'10.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>15,
                'town_id'=>2,
                'quarter_id'=>33,
                'gender'=>1,
                'subscribe_id'=>1,
                'age'=>24,
                'whatsapp'=>'237681968520',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Baise annale',
                'slug'=>'baise-annale',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'11.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>16,
                'town_id'=>2,
                'quarter_id'=>33,
                'gender'=>1,
                'subscribe_id'=>2,
                'age'=>21,
                'whatsapp'=>'237653200033',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Pipe avec léchage de noyaux',
                'slug'=>'pipe-avec-lechage-de-noyaux',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'12.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>17,
                'town_id'=>2,
                'quarter_id'=>32,
                'gender'=>1,
                'subscribe_id'=>3,
                'age'=>25,
                'whatsapp'=>'237670020622',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Jouissance faciale',
                'slug'=>'jouissance-faciale',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'13.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'town_id'=>1,
                'quarter_id'=>1,
                'subscribe_id'=>1,
                'gender'=>1,
                'age'=>20,
                'whatsapp'=>'237690910023',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Baiseuse ProMax',
                'slug'=>'baiseuse-proMax',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'14.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>19,
                'town_id'=>7,
                'quarter_id'=>92,
                'subscribe_id'=>2,
                'gender'=>1,
                'age'=>23,
                'whatsapp'=>'237681250010',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>"Pipe jouissance buccale",
                'slug'=>'pipe-jouissance-buccale',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'15.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>20,
                'town_id'=>7,
                'subscribe_id'=>3,
                 'quarter_id'=>92,
                'gender'=>1,
                'age'=>21,
                'whatsapp'=>'237699802541',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Seins debout, fille brune à déguster',
                'slug'=>'seins-debout-fille-brune-a-déguster',
                'Description'=>"Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘",
                'video_path'=>'16.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>21,
                'town_id'=>7,
                 'quarter_id'=>93,
                'gender'=>1,
                'subscribe_id'=>1,
                'age'=>22,
                'whatsapp'=>'237675241000',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'La salope sim1 & sim2',
                'slug'=>'La-salope-sim1-&-sim2',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'17.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>5,
                'town_id'=>1,
                 'quarter_id'=>22,
                'gender'=>1,
                'subscribe_id'=>2,
                'age'=>22,
                'whatsapp'=>'237671002563',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Baiseusse aux gros seins',
                'slug'=>'baiseusse-aux-gros-seins',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>6,
                'town_id'=>1,
                'subscribe_id'=>3,
                 'quarter_id'=>22,
                'gender'=>1,
                'age'=>26,
                'whatsapp'=>'237652008596',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>1,
                'title'=>'Ta libelulle brune',
                'slug'=>'ta-libelulle-brune',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'19.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>7,
                'town_id'=>1,
                 'quarter_id'=>4,
                'gender'=>1,
                'age'=>21,
                'whatsapp'=>'237655140306',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>1,
                 'isSubscribe'=>1,
                'title'=>'Un plasir a couper le souffle',
                'slug'=>'un-plasir-a couper-le-souffle',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'20.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'town_id'=>1,
                'subscribe_id'=>0,
                 'quarter_id'=>3,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'237690527485',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>"Le plaisir c'est ici",
                'slug'=>'le-plaisir-c-est-ici',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'21.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>9,
                'town_id'=>1,
                'subscribe_id'=>0,
                'quarter_id'=>8,
                'gender'=>1,
                'age'=>24,
                'whatsapp'=>'237693526385',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Viens glisser dans mes cuisses',
                'slug'=>'viens-glisser-dans-mes-cuisses',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>10,
                'town_id'=>1,
                'quarter_id'=>8,
                'subscribe_id'=>0,
                'gender'=>1,
                'age'=>23,
                'whatsapp'=>'237652100001',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Ta Eton au gros cul',
                'slug'=>'ta-eton-au-gros-cul',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'23.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>11,
                'town_id'=>1,
                'quarter_id'=>17,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>23,
                'whatsapp'=>'237679853210',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Ta baiseuse fontaine',
                'slug'=>'ta-baiseuse-fontaine',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'24.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>12,
                'town_id'=>1,
                'quarter_id'=>8,
                'subscribe_id'=>0,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'237656321020',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Partouze de couple',
                'slug'=>'partouze-de-couple',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>13,
                'town_id'=>2,
                'subscribe_id'=>0,
                 'quarter_id'=>39,
                'gender'=>1,
                'age'=>23,
                'whatsapp'=>'237691528574',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Ta salope obeissante',
                'slug'=>'ta-salope-obeissante',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'26.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>14,
                'town_id'=>2,
                'quarter_id'=>32,
                'gender'=>1,
                'age'=>20,
                'whatsapp'=>'237698204152',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
                'title'=>'Viens conduire ta mercedez',
                'slug'=>'viens-conduire-ta-mercedez',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>15,
                'town_id'=>2,
                 'quarter_id'=>46,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'237692304158',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                 'subscribe_id'=>0,
                'title'=>'Petite Yaris',
                'slug'=>'petite-yaris',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'28.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>16,
                'town_id'=>2,
                 'quarter_id'=>49,
                'gender'=>1,
                'age'=>19,
                'subscribe_id'=>0,
                'whatsapp'=>'237672526396',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Pimentiere de luxe',
                'slug'=>'pimentiere-de-luxe',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>17,
                'town_id'=>2,
                 'quarter_id'=>49,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>18,
                'whatsapp'=>'237694759685',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>"Baise sans remords",
                'slug'=>'baise-sans-remords',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'30.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>18,
                'town_id'=>2,
                 'quarter_id'=>48,
                'gender'=>1,
                'age'=>17,
                'whatsapp'=>'237697854152',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                 'subscribe_id'=>0,
                'title'=>'Viens baiser ta fille',
                'slug'=>'viens-baiser-ta-fille',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'31.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>19,
                'town_id'=>7,
                 'quarter_id'=>93,
                'gender'=>1,
                'age'=>19,
                'subscribe_id'=>0,
                'whatsapp'=>'237677854120',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Lécheuse de tétons 😘',
                'slug'=>'lécheuse-de-tétons ',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'32.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>20,
                'town_id'=>7,
                 'quarter_id'=>92,
                'gender'=>1,
                'age'=>18,
                'whatsapp'=>'237699968574',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
                'title'=>'Apoutchou sexy maquereau',
                'slug'=>'apoutchou-sexy-maquereau',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>21,
                'town_id'=>7,
                 'quarter_id'=>92,
                'gender'=>1,
                'age'=>17,
                'subscribe_id'=>0,
                'whatsapp'=>'237690909020',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Pinneuse bonne bosse',
                'slug'=>'pinneuse-bonne-bosse',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'34.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>5,
                'town_id'=>1,
                 'quarter_id'=>1,
                'gender'=>1,
                'age'=>21,
                'subscribe_id'=>0,
                'whatsapp'=>'237650502030',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Partouze ce soir',
                'slug'=>'partouze-ce-soir',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'35.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>6,
                'town_id'=>1,
                 'quarter_id'=>2,
                'gender'=>1,
                'age'=>23,
                'subscribe_id'=>0,
                'whatsapp'=>'237670758596',
                'announcement_category_id'=>1,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Ta collégienne 😘',
                'slug'=>'ta-collégienne',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'36.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>7,
                'town_id'=>1,
                 'quarter_id'=>6,
                'gender'=>1,
                'age'=>22,
                'subscribe_id'=>0,
                'whatsapp'=>'237651426352',
                'announcement_category_id'=>1,
                 'status'=>0,
                 'isSubscribe'=>0,
                'title'=>'La nuit du sexe 2 🤤',
                'slug'=>'La-nuit-du-sexe-2',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>8,
                'town_id'=>1,
                 'quarter_id'=>7,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>20,
                'whatsapp'=>'237682528596',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Bangala ++ 🍆',
                'slug'=>'Bangala',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'38.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>9,
                'town_id'=>1,
                 'quarter_id'=>4,
                'gender'=>1,
                'age'=>21,
                'whatsapp'=>'237679632000',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'isSubscribe'=>0,
                 'subscribe_id'=>0,
                'title'=>"Croqueuse de penis 🍆",
                'slug'=>'croqueuse-de-penis',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>10,
                'town_id'=>1,
                'quarter_id'=>10,
                'gender'=>1,
                'age'=>20,
                'whatsapp'=>'237698748596',
                'announcement_category_id'=>2,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
                'title'=>'Lécheuse🤤pro💦🍆',
                'slug'=>'lécheuse-pro',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'40.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>11,
                'town_id'=>1,
                 'quarter_id'=>10,
                'gender'=>1,
                'subscribe_id'=>0,
                'age'=>21,
                'whatsapp'=>'237698748596',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>"Viens realiser tes fantasmes",
                'slug'=>'viens-realiser-tes-fantasmes',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'41.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>12,
                'town_id'=>2,
                 'quarter_id'=>39,
                'gender'=>1,
                'age'=>23,
                'whatsapp'=>'237678740506',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>1,
                'title'=>'Tu vas hurler de plaisir',
                'slug'=>'tu-vas-hurler-de-plaisir',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'42.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>13,
                'town_id'=>2,
                 'quarter_id'=>41,
                'gender'=>1,
                'age'=>21,
                'subscribe_id'=>0,
                'whatsapp'=>'237658748199',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Baiseuse professionnelle',
                'slug'=>'baiseuse-professionnelle',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'43.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>14,
                'town_id'=>2,
                 'quarter_id'=>49,
                'gender'=>1,
                'age'=>20,
                'subscribe_id'=>0,
                'whatsapp'=>'237690258591',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Skinny aux gros seins',
                'slug'=>'skinny-aux-gros-seins',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>15,
                'town_id'=>2,
                 'quarter_id'=>49,
                'gender'=>1,
                'age'=>24,
                'whatsapp'=>'237688749580',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
                'title'=>'sensualité fatale❤️❤️❤️',
                'slug'=>'sensualité-fatale',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'45.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>16,
                'town_id'=>2,
                 'quarter_id'=>41,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'237658728521',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
                'title'=>"Ton bb bio 😘",
                'slug'=>'ton-bb-bio',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'46.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>17,
                'town_id'=>2,
                 'quarter_id'=>33,
                'gender'=>1,
                'age'=>20,
                'subscribe_id'=>0,
                'whatsapp'=>'237678943506',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>"Suceuse de bite",
                'slug'=>'suceuse-de-bite',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'47.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>18,
                'town_id'=>2,
                 'quarter_id'=>39,
                'gender'=>1,
                'age'=>20,
                'subscribe_id'=>0,
                'whatsapp'=>'237699745593',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>"Baiseuse de luxe",
                'slug'=>'baiseuse-de-luxe',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'48.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>19,
                'town_id'=>7,
                 'quarter_id'=>92,
                'gender'=>1,
                'age'=>22,
                'whatsapp'=>'237690418574',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'subscribe_id'=>0,
                 'isSubscribe'=>0,
                'title'=>'Ta pineuse aux seins pointus',
                'slug'=>'ta-pineuse-aux-seins-pointus',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'49.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>20,
                'town_id'=>7,
                 'quarter_id'=>93,
                'gender'=>1,
                'age'=>20,
                'subscribe_id'=>0,
                'whatsapp'=>'237697740596',
                'announcement_category_id'=>3,
                 'status'=>1,
                 'isSubscribe'=>0,
                'title'=>'Viens baiser une vraie salope',
                'slug'=>'viens-baiser-une-vraie-salope',
                'Description'=>'Envie de passer un bon moment en compagnie d’une vraie salope très cochonne ?
Je suis une petite salope au cul serré disponible pour toi.
Tu aimes ce que tu vois et aimerais passer un moment en ma compagnie contacte moi😘',
                'video_path'=>'50.mp4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];

        //Storing Data
        DB::table('announcements')->insert($data);
    }
}
