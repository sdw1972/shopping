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
        DB::table('purchases')->insert([
            'item' => 'Bread',
            'quantity' => 1
        ]);

        DB::table('purchases')->insert([
            'item' => 'Milk',
            'quantity' => 2
        ]);

        DB::table('purchases')->insert([
            'item' => 'Cheese',
            'quantity' => 5
        ]);
    }

     
}
