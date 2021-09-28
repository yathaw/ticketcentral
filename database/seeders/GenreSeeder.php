<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Action
        DB::table('genres')->insert([
            'name' => 'Action',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Adventure
        DB::table('genres')->insert([
            'name' => 'Adventure',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Comedy
        DB::table('genres')->insert([
            'name' => 'Comedy',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Crime
        DB::table('genres')->insert([
            'name' => 'Crime',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Drama
        DB::table('genres')->insert([
            'name' => 'Drama',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Fantasy
        DB::table('genres')->insert([
            'name' => 'Fantasy',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Family
        DB::table('genres')->insert([
            'name' => 'Family',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Historical
        DB::table('genres')->insert([
            'name' => 'Historical',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Historical fiction
        DB::table('genres')->insert([
            'name' => 'Historical fiction',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Horror
        DB::table('genres')->insert([
            'name' => 'Horror',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Magical realism
        DB::table('genres')->insert([
            'name' => 'Magical realism',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Mystery
        DB::table('genres')->insert([
            'name' => 'Mystery',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Paranoid Fiction
        DB::table('genres')->insert([
            'name' => 'Paranoid Fiction',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Philosophical
        DB::table('genres')->insert([
            'name' => 'Philosophical',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Political
        DB::table('genres')->insert([
            'name' => 'Political',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Romance
        DB::table('genres')->insert([
            'name' => 'Romance',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Saga
        DB::table('genres')->insert([
            'name' => 'Saga',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Satire
        DB::table('genres')->insert([
            'name' => 'Satire',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Science fiction
        DB::table('genres')->insert([
            'name' => 'Science fiction',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Social
        DB::table('genres')->insert([
            'name' => 'Social',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Speculative
        DB::table('genres')->insert([
            'name' => 'Speculative',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Thriller
        DB::table('genres')->insert([
            'name' => 'Thriller',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Urban
        DB::table('genres')->insert([
            'name' => 'Urban',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Western
        DB::table('genres')->insert([
            'name' => 'Western',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
