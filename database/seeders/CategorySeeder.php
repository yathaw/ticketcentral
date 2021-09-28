<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 Actor
        DB::table('categories')->insert([
            'name'       => 'Actor',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //2 Actress
        DB::table('categories')->insert([
            'name'       => 'Actress',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //3 Characters
        DB::table('categories')->insert([
            'name'       => 'Characters',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //4 Director
        DB::table('categories')->insert([
            'name'       => 'Director',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //5 Scree Play
        DB::table('categories')->insert([
            'name'       => 'Scree Play',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //6 Writer
        DB::table('categories')->insert([
            'name'       => 'Writer',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //7 Novel
        DB::table('categories')->insert([
            'name'       => 'Novel',
            'created_at' => now(),
            'updated_at' => now()
        ]);  

        //8 Story
        DB::table('categories')->insert([
            'name'       => 'Story',
            'created_at' => now(),
            'updated_at' => now()
        ]); 
    }
}
