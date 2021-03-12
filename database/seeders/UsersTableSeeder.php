<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Benas',
            'email' => 'benas@gmail.com',
            'password' => Hash::make('benas123'),
        ]);
        DB::table('users')->insert([
            'name' => 'uzduotys',
            'email' => 'uzduotys@gmail.com',
            'password' => Hash::make('uzduotys123'),
        ]);
        DB::table('users')->insert([
            'name' => 'testavimas',
            'email' => 'testavimas@gmail.com',
            'password' => Hash::make('testavimas123'),
        ]);
    }
}
