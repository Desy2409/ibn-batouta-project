<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            AdministratorTableSeeder::class,
            AboutTableSeeder::class,
            HeaderTableSeeder::class,
            OpportunityTableSeeder::class,
            HomeTableSeeder::class,
            SubHomeTableSeeder::class,
        ]);
    }
}
