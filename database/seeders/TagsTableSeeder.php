<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'sights',
        ]);
        DB::table('tags')->insert([
            'name' => 'pet-friendly',
        ]);
        DB::table('tags')->insert([
            'name' => 'family',
        ]);
        DB::table('tags')->insert([
            'name' => 'adventure',
        ]);
        DB::table('tags')->insert([
            'name' => 'mountains',
        ]);
        DB::table('tags')->insert([
            'name' => 'exclusive',
        ]);
        DB::table('tags')->insert([
            'name' => 'city&nature',
        ]);
        DB::table('tags')->insert([
            'name' => 'extreme',
        ]);

    }
}
