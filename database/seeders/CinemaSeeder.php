<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //JCGV
        DB::table('cinemas')->insert([
            'name'       => 'JCGV',
            'logo'       => '/storage/image/cinema/12345.png',
            'email'      => 'jcgv@gmail.com',
            'country_id' => 26,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Mingalar
        DB::table('cinemas')->insert([
            'name'       => 'Mingalar',
            'logo'       => '/storage/image/cinema/24681.png',
            'email'      => 'mingalar@gmail.com',
            'country_id' => 26,

            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Mega Ace
        DB::table('cinemas')->insert([
            'name'       => 'Mega Ace',
            'logo'       => '/storage/image/cinema/13579.png',
            'email'      => 'megace@gmail.com',
            'country_id' => 26,
            
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
