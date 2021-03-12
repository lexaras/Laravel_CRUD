<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CampingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campings')->insert([
            'country' => 'Lietuva',
            'city' => 'Vilnius',
            'camping_name' => 'Prie  vandens',
            'rating' => 8,
            'number_of_reviews' => 2300,
            'website' => 'www.keliauk.lt',
        ]);
        DB::table('campings')->insert([
            'country' => 'Lenkija',
            'city' => 'Varsuva',
            'camping_name' => 'Upyna',
            'rating' => 8.5,
            'number_of_reviews' => 3300,
            'website' => 'www.lenkija.pl',
        ]);
        DB::table('campings')->insert([
            'country' => 'Estija',
            'city' => 'Talinas',
            'camping_name' => 'Skype',
            'rating' => 8,
            'number_of_reviews' => 2300,
            'website' => 'www.estija.est',
        ]);
        DB::table('campings')->insert([
            'country' => 'Latvija',
            'city' => 'Riga',
            'camping_name' => 'Zoo ir miestas',
            'rating' => 3,
            'number_of_reviews' => 3500,
            'website' => 'www.latvija.lv',
        ]);
        DB::table('campings')->insert([
            'country' => 'Rusija',
            'city' => 'Maskva',
            'camping_name' => 'random_name',
            'rating' => 3,
            'number_of_reviews' => 1,
            'website' => 'www.rusija.ru',
        ]);
        DB::table('campings')->insert([
            'country' => 'Cekija',
            'city' => 'Praha',
            'camping_name' => 'Svetingasis miestas',
            'rating' => 10,
            'number_of_reviews' => 35000,
            'website' => 'www.cekija.ch',
        ]);
        DB::table('campings')->insert([
            'country' => 'Vokietija',
            'city' => 'Miunchenas',
            'camping_name' => 'Slidinejimo namai',
            'rating' => 8,
            'number_of_reviews' => 2300,
            'website' => 'www.vokietija.de',
        ]);
        DB::table('campings')->insert([
            'country' => 'France',
            'city' => 'Paris',
            'camping_name' => 'Unique times',
            'rating' => 6,
            'number_of_reviews' => 22300,
            'website' => 'www.france.fr',
        ]);
        DB::table('campings')->insert([
            'country' => 'Spain',
            'city' => 'Barcelona',
            'camping_name' => 'Soccer and camping',
            'rating' => 10,
            'number_of_reviews' => 230000,
            'website' => 'www.barcelona.esp',
        ]);
        DB::table('campings')->insert([
            'country' => 'USA',
            'city' => 'NY',
            'camping_name' => 'NY and me',
            'rating' => 1.5,
            'number_of_reviews' => 230,
            'website' => 'www.usa.com',
        ]);
        DB::table('campings')->insert([
            'country' => 'Italy',
            'city' => 'Roma',
            'camping_name' => 'Ancient homes',
            'rating' => 10,
            'number_of_reviews' => 2300,
            'website' => 'www.history.net',
        ]);
        DB::table('campings')->insert([
            'country' => 'Lietuva',
            'city' => 'Palanga',
            'camping_name' => 'Pas Jolanta',
            'rating' => 10,
            'number_of_reviews' => 1,
            'website' => 'www.sveiki.lt',
        ]);
    }
}
