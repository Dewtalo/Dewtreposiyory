<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = [  
'Adachi (Tokyo)' , 'Arakawa (Tokyo)' , 'Bunkyo (Tokyo)' , 'Chiyoda (Tokyo)' , 'Chuo (Tokyo)' , 'Edogawa (Tokyo)' , 'Itabashi (Tokyo)' , 'Katsushika (Tokyo)' , 'Kita (Tokyo)' , 'Koto (Tokyo)' , 'Minato (Tokyo)' , 'Meguro (Tokyo)' , 'Nakano (Tokyo)' , 'Nerima (Tokyo)' , 'Ota (Tokyo)' , 'Setagaya (Tokyo)' , 'Shibuya (Tokyo)' , 'Shinagawa (Tokyo)' , 'Shinjuku (Tokyo)' , 'Suginami (Tokyo)' , 'Sumida (Tokyo)' , 'Taito (Tokyo)' , 'Toshima (Tokyo)' ,

];

foreach ($places as $place) {  
DB::table('places')->insert([  
'name' => $place,  
'created_at' => new DateTime(),  
'updated_at' => new DateTime(),  
]);

}

    }
}
