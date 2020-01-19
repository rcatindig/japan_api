<?php

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
        $this->call(users::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(TouristSpotSeeder::class);

        if (config('variables.WITH_FAKER')) {
            // FAKE data
        }
    }
}
