<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
    'Japanese',
    'English',
    'Spanish',
    'Andorra',
    // ... (list goes on)
    'French',
    'Finnish',
];

foreach ($languages as $language) {
    DB::table('languages')->insert([
        'name' => $language,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
    ]);
}
    }
}
