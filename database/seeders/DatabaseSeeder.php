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
        DB::table('shopping')->insert([
            'item' => 'Bread',
            'quantity' => 1
        ]);

        DB::table('shopping')->insert([
            'item' => 'Milk',
            'quantity' => 2
        ]);

        DB::table('shopping')->insert([
            'item' => 'Cheese',
            'quantity' => 5
        ]);
    }

     
}
