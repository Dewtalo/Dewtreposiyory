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
    'Bangladesh',
    'Brazil',
    'China',
    'Colombia',
    'DR Congo',
    'Egypt',
    'Ethiopia',
    'Germany',
    'India',
    'Indonesia',
    'Iran',
    'Japan',
    'Kenya',
    'Mexico',
    'Myanmar (Burma)',
    'Nigeria',
    'Pakistan',
    'Philippines',
    'Russia',
    'South Africa',
    'South Korea',
    'Spain',
    'Tanzania',
    'Thailand',
    'Turkey',
    'United Kingdom',
    'United States',
    'Vietnam',
    'Yemen',
    'Zambia',
    'Zimbabwe',
    'Afghanistan',
    'Albania',
    'Algeria',
    'Andorra',
    'Angola',
    'Anguilla',
    'Antigua and Barbuda',
    'Argentina',
    'Armenia',
    'Aruba',
    'Australia',
    'Austria',
    'Azerbaijan',
    'Bahamas',
    'Bahrain',
    'Barbados',
    'Belarus',
    'Belgium',
    'Belize',
    'Benin',
    'Bermuda',
    'Bhutan',
    'Bolivia',
    'Bosnia-Herzegovina',
    'Botswana',
    'British Virgin Islands',
    'Brunei',
    'Bulgaria',
    'Burkina Faso',
    'Burma (Myanmar)',
    'Burundi',
    'Byelorussia (Belarus)',
    'Cambodia',
    'Cameroon',
    'Canada',
    'Cape Verde',
    'Cayman Islands',
    'Central African Republic',
    'Chad',
    'Chile',
    'China',
    'Cocos Island',
    'Colombia',
    'Comoros',
    'Costa Rica',
    'Croatia',
    'Cuba',
    'Cyprus',
    'Czech Republic',
    'Czechoslovakia',
    'Democratic Republic of Congo',
    'Denmark',
    'Djibouti',
    'Dominica',
    'Dominican Republic',
    'East Germany',
    'Ecuador',
    'Egypt',
    'El Salvador',
    'Equatorial Guinea',
    'Eritrea',
    'Estonia',
    'Federated States of Micronesia',
    'Fiji',
    'Finland',
    'France',
    'French Guiana',
    'Gabon',
    'Gambia',
    'Gaza Strip',
    'Georgia',
    'Germany',
    'Ghana',
    'Gibraltar',
    'Greece',
    'Grenada',
    'Guadeloupe',
    'Guatemala',
    'Guinea',
    'Guinea Bissau',
    'Guyana',
    'Haiti',
    'Heard and McDonald Islands',
    'Holland',
    'Honduras',
    'Hong Kong',
    'Hungary',
    'Iceland',
    'India',
    'Indonesia',
    'Iran',
    'Iraq',
    'Ireland',
    'Israel',
    'Italy',
    'Ivory Coast',
    'Jamaica',
    'Japan',
    'Jordan',
    'Kampuchea',
    'Kazakhstan',
    'Kenya',
    'Kirghizia (Kyrgyzstan)',
    'Kiribati',
    'Kosovo',
    'Kuwait',
    'Laos',
    'Latvia',
    'Lebanon',
    'Lesotho',
    'Liberia',
    'Libya',
    'Lithuania',
    'Macau',
    'Macedonia',
    'Madagascar',
    'Malawi',
    'Malaysia',
    'Maldives',
    'Mali',
    'Malta',
    'Martinique',
    'Mauritania',
    'Mauritius',
    'Mexico',
    'Midway Islands',
    'Moldavia (Moldova)',
    'Monaco',
    'Mongolia',
    'Montserrat',
    'Morocco',
    'Mozambique',
    'Namibia',
    'Nauru',
    'Nepal',
    'Netherlands',
    'Netherlands Antilles',
    'New Caledonia',
    'New Zealand',
    'Nicaragua',
    'Niger',
    'Nigeria',
    'Niue',
    'No Nationality',
    'North Korea',
    'Norway',
    'Not Designated by IJ',
    'Oman',
    'Pakistan',
    'Panama',
    'Papua New Guinea',
    'Paraguay',
    "People's Republic of Benin",
    "People's Republic of the Congo",
    'Peru',
    'Philippines',
    'Poland',
    'Portugal',
    'Qatar',
    'Republic of the Marshall Islands',
    'Romania',
    'Russia',
    'Rwanda',
    'San Marino',
    'Sao Tome and Principe',
    'Saudi Arabia',
    'Senegal',
    'Serbia Montenegro',
    'Seychelles',
    'Sierra Leone',
    'Singapore',
    'Slovak Republic',
    'Slovenia',
    'Solomon Islands',
    'Somalia',
    'South Africa',
    'South Korea',
    'Soviet Union',
    'Spain',
    'Sri Lanka',
    'St. Kitts, West Indies',
    'St. Kitts and Nevis',
    'St. Lucia',
    'St. Vincent and the Grenadines',
    'Stateless - Alien Unable to Name a Country',
    'Sudan',
    'Suriname',
    'Swaziland',
    'Sweden',
    'Switzerland',
    'Syria',
    'Taiwan',
    'Tajikistan (Tadzhik)',
    'Tanzania',
    'Thailand',
    'The Republic of Palau',
    'Togo',
    'Tonga',
    'Trinidad and Tobago',
    'Tunisia',
    'Turkey',
    'Turkmenistan',
    'Turks and Caicos Islands',
    'Uganda',
    'Ukraine',
    'United Arab Emirates',
    'United Kingdom',
    'Unknown Nationality',
    'Upper Volta',
    'Uruguay',
    'Uzbekistan',
    'Venezuela',
    'Vietnam',
    'Western Sahara',
    'Western Samoa',
    'Yemen',
    'Yugoslavia',
    'Zaire',
    'Zambia',
    'Zimbabwe'

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
