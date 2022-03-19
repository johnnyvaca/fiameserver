<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Joe',
                'email' => 'Joe@jail.us',
                'password' => '$2y$10$vkKbzAx/xtRnmb9k/jcH/.Ka8iEGBZGqZIhFTcHC.yKSu8w0GjzVO'
            ],
            [
                'name' => 'Jack',
                'email' => 'Jack@jail.us',
                'password' => '$2y$10$vkKbzAx/xtRnmb9k/jcH/.Ka8iEGBZGqZIhFTcHC.yKSu8w0GjzVO'
            ]
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Lasagne',
                'selling_date' => '2022-04-01',
                'img' => 'img/lasagne.webp',
                'price' => 10,
                'user_id' => 1
            ],
            [
                'name' => 'Couscous',
                'selling_date' => '2022-04-11',
                'img' => 'img/couscous.webp',
                'price' => 12,
                'user_id' => 2
            ],
        ]);
    }
}
