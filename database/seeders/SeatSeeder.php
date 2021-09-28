<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Theater -> 1 - 5 ( Branch 1)
        for($t = 1; $t < 5; $t++)
        {
            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#304FFE',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFF00',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#1B5E20',
                        'type'       => 0,
                        'price'      => '4500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 10; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#F50057',
                        'type'       => 1,
                        'price'      => '12000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 6 ( Branch 1)
            for($i = 1; $i < 6; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#43A047',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 6,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 6; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#43A047',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 6,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 6; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#43A047',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 6,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 6; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#43A047',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 6,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 6; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#43A047',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 6,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 6; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#43A047',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 6,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 4; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#0091EA',
                        'type'       => 0,
                        'price'      => '45000',
                        'theater_id' => 6,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

        // Theater -> 7 - 9 ( Branch 2)
        for($t = 6; $t < 10; $t++)
        {
            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#304FFE',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFF00',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#1B5E20',
                        'type'       => 0,
                        'price'      => '4500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 10; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#F50057',
                        'type'       => 1,
                        'price'      => '12000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 10 ( Branch 2)
            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#673AB7',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 10,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#673AB7',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 10,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#673AB7',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 10,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#673AB7',
                        'type'       => 0,
                        'price'      => '18000',
                        'theater_id' => 10,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

        // Theater -> 11 - 12 ( Branch 3)
        for($t = 10; $t < 13; $t++)
        {
            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#304FFE',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFF00',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#1B5E20',
                        'type'       => 0,
                        'price'      => '4500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 10; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#F50057',
                        'type'       => 1,
                        'price'      => '12000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 13 - 15 ( Branch 4)
        for($t = 12; $t < 16; $t++)
        {
            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#304FFE',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFF00',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#1B5E20',
                        'type'       => 0,
                        'price'      => '4500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 10; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#F50057',
                        'type'       => 1,
                        'price'      => '12000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 16 - 20 ( Branch 5)
        for($t = 15; $t < 21; $t++)
        {
            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#304FFE',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFF00',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#1B5E20',
                        'type'       => 0,
                        'price'      => '4500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 10; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#F50057',
                        'type'       => 1,
                        'price'      => '12000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 21 - 21 ( Branch 6)
        for($t = 20; $t < 22; $t++)
        {
            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#304FFE',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFF00',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#1B5E20',
                        'type'       => 0,
                        'price'      => '4500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 10; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#F50057',
                        'type'       => 1,
                        'price'      => '12000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 22 - 23 ( Branch 7)
        for($t = 21; $t < 24; $t++)
        {
            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#304FFE',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFF00',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#1B5E20',
                        'type'       => 0,
                        'price'      => '4500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 10; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#F50057',
                        'type'       => 1,
                        'price'      => '12000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 24 - 26 ( Branch 8)
        for($t = 23; $t < 27; $t++)
        {
            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#304FFE',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFF00',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#1B5E20',
                        'type'       => 0,
                        'price'      => '4500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 10; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#F50057',
                        'type'       => 1,
                        'price'      => '12000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 27 - 28 ( Branch 9)
        for($t = 26; $t < 29; $t++)
        {
            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#304FFE',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFF00',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#1B5E20',
                        'type'       => 0,
                        'price'      => '4500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#E65100',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#3E2723',
                        'type'       => 0,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 10; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#F50057',
                        'type'       => 1,
                        'price'      => '12000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 29 - 31 ( Branch 10)
        for($t = 28; $t < 32; $t++)
        {

            for($i = 1; $i < 8; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 8; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 8; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 8; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 8; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 8; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 8; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 8; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 32 ( Branch 11)
        for($t = 28; $t < 32; $t++)
        {
            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'M',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'L',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'K',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'I',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 25; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'S',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 33 - 34 ( Branch 12)
        for($t = 32; $t < 35; $t++)
        {
            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'P',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'O',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'N',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'M',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'L',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'K',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'I',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '5000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '6000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 35 ( Branch 12)
        for($t = 34; $t < 35; $t++)
        {
            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'I',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 36 ( Branch 12)
        for($t = 35; $t < 37; $t++)
        {
            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 37 - 38 ( Branch 13)
        for($t = 36; $t < 39; $t++)
        {
            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'I',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'S',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 39 ( Branch 13)
        for($t = 38; $t < 40; $t++)
        {
            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 16; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 7; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 11; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 7; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'S',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 41 ( Branch 15)
        for($t = 40; $t < 42; $t++)
        {
            for($i = 1; $i < 22; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'Q',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '1500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'P',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '1500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'O',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '1500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'N',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'M',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 7; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'L',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 6; $i < 20; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'L',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 19; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'L',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 7; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'K',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 6; $i < 20; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'K',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 19; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'K',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 7; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 6; $i < 20; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 19; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'I',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 26; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 24; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }
        
        // Theater -> 42 - 43 ( Branch 15)
        for($t = 41; $t < 44; $t++)
        {
            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '4000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 9; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }

        // Theater -> 45 ( Branch 17)
        for($t = 32; $t < 35; $t++)
        {

            for($i = 1; $i < 27; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'M',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 27; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'L',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 27; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'K',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 27; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'J',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 27; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'I',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 27; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'H',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '2500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 27; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'G',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 27; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'F',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 23; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'E',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 23; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'D',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 23; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'C',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 23; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'B',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }


            for($i = 1; $i < 23; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'A',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 0,
                        'price'      => '3500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 21; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'S',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '5500',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }

            for($i = 1; $i < 17; $i++) 
            {
                DB::table('seats')->insert([
                        'name'       => 'SL',
                        'number'     => $i,
                        'color'      => '#FFFFFF',
                        'type'       => 1,
                        'price'      => '6000',
                        'theater_id' => $t,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
            }
        }
    }
}
