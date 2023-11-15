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
    public function run() : void
    { 
      
       
       
        $this->call(NationalitySeeder::class);
        //\App\Models\User::factory(10)->create();
        $this->call(LanguageSeeder::class);
        $this->call(PlaceSeeder::class);
        //profile作るときはthis->call(UserSeeder::class);をここに書く
    }
   
    
}
