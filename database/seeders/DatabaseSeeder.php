<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(NationalitySeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(PlaceSeeder::class);
        //profile作るときはthis->call(UserSeeder::class);をここに書く
    }
   
    
}
