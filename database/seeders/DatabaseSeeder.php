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
        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CinemaSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(TheaterSeeder::class);
        $this->call(SeatSeeder::class);
        
    }
}
