<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    public function run()
    {
        DB::table('nationalities')->insert([
                'name' => 'Afghanistan',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);

        DB::table('nationalities')->insert([
                'name' => 'Albania',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);

        DB::table('nationalities')->insert([
                'name' => 'Algeria',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
    }*/
    public function run()
    {
    $nationalities = [
    'Afghanistan',
    'Albania',
    'Algeria',
    'Andorra',
    // ... (list goes on)
    'Zambia',
    'Zimbabwe',
];

foreach ($nationalities as $nationality) {
    DB::table('nationalities')->insert([
        'name' => $nationality,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
}
}

}
