<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        //1 Yangon
        DB::table('cities')->insert([
            'name'          => 'Yangon',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //2 Mandalay
        DB::table('cities')->insert([
            'name'          => 'Mandalay',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //3 Nay Pyi Taw
        DB::table('cities')->insert([
            'name'          => 'Nay Pyi Taw',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //4 Bago
        DB::table('cities')->insert([
            'name'          => 'Bago',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //5 Daw Pone
        DB::table('cities')->insert([
            'name'       => 'Daw Pone',
            'country_id'    => 26,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //6 Magway
        DB::table('cities')->insert([
            'name'          => 'Magway',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //7 Mawlamyine
        DB::table('cities')->insert([
            'name'          => 'Mawlamyine',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //8 Monywa
        DB::table('cities')->insert([
            'name'          => 'Monywa',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //9 Pyay
        DB::table('cities')->insert([
            'name'          => 'Pyay',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //10 Taunggyi
        DB::table('cities')->insert([
            'name'          => 'Taunggyi',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //11 Taungoo
        DB::table('cities')->insert([
            'name'          => 'Taungoo',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        //12 Pakoku
        DB::table('cities')->insert([
            'name'          => 'Pakoku',
            'country_id'    => 26,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
