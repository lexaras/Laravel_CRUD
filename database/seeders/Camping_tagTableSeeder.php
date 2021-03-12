<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Camping_tagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('camping_tag')->insert([
            'camping_id' => 1,
            'tag_id'=>1,
        ]);
        DB::table('camping_tag')->insert([
            'camping_id' => 1,
            'tag_id'=>2,
        ]);
        DB::table('camping_tag')->insert([
            'camping_id' => 1,
            'tag_id'=>3,
        ]);
        DB::table('camping_tag')->insert([
            'camping_id' => 3,
            'tag_id'=>4,
        ]);
        DB::table('camping_tag')->insert([
            'camping_id' => 5,
            'tag_id'=>1,
        ]);
        DB::table('camping_tag')->insert([
            'camping_id' => 5,
            'tag_id'=>2,
        ]);
        DB::table('camping_tag')->insert([
            'camping_id' => 5,
            'tag_id'=>7,
        ]);
        DB::table('camping_tag')->insert([
            'camping_id' => 6,
            'tag_id'=>1,
        ]);
        DB::table('camping_tag')->insert([
            'camping_id' => 7,
            'tag_id'=>4,
        ]);
        
    }
}
