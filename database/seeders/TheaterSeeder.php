<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 3',
                'branch_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 2
        DB::table('theaters')->insert([
                'name'       => 'KFC THEATRE (AUROMAX)',
                'branch_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 3
        DB::table('theaters')->insert([
                'name'       => 'DRZ THEATRE (T-2)',
                'branch_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 4
        DB::table('theaters')->insert([
                'name'       => 'NEUTRIDERM THEATRE (T-4)',
                'branch_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 5
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 5 (STARIUM)',
                'branch_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 6
        DB::table('theaters')->insert([
                'name'       => 'CINE & FORÊT',
                'branch_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 7
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 1',
                'branch_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 8
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 2',
                'branch_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 9
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 3',
                'branch_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 10
        DB::table('theaters')->insert([
                'name'       => 'PREMIUM CINEMA',
                'branch_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 11
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 1',
                'branch_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 12
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 2',
                'branch_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 13
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 1',
                'branch_id'  => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 14
        DB::table('theaters')->insert([
                'name'       => 'PIZZA HUT THEATRE',
                'branch_id'  => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 15
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 3',
                'branch_id'  => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    // =============================================================

        // 16
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 1',
                'branch_id'  => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 17
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 2',
                'branch_id'  => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 18
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 3',
                'branch_id'  => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 19
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 4',
                'branch_id'  => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 20
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 5',
                'branch_id'  => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 21
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 1',
                'branch_id'  => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 22
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 1',
                'branch_id'  => 7,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 23
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 2',
                'branch_id'  => 7,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    // =============================================================

        // 24
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 1',
                'branch_id'  => 8,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 25
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 2',
                'branch_id'  => 8,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 26
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 3',
                'branch_id'  => 8,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 27
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 1',
                'branch_id'  => 9,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 28
        DB::table('theaters')->insert([
                'name'       => 'THEATRE 2',
                'branch_id'  => 9,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 29
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 10,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 30
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 10,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 31
        DB::table('theaters')->insert([
                'name'       => 'HALL 3',
                'branch_id'  => 10,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    // =============================================================

        // 32
        DB::table('theaters')->insert([
                'name'       => 'MAIN HALL',
                'branch_id'  => 11,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    // =============================================================

        // 33
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 12,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 34
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 12,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 35
        DB::table('theaters')->insert([
                'name'       => 'HALL 3',
                'branch_id'  => 12,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 36
        DB::table('theaters')->insert([
                'name'       => 'HALL 4',
                'branch_id'  => 12,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 37
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 13,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 38
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 13,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 39
        DB::table('theaters')->insert([
                'name'       => 'HALL 3',
                'branch_id'  => 13,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 40
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 14,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    // =============================================================

        // 41
        DB::table('theaters')->insert([
                'name'       => 'MAIN HALL',
                'branch_id'  => 15,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 42
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 15,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 43
        DB::table('theaters')->insert([
                'name'       => 'HALL 3',
                'branch_id'  => 15,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 44
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 16,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    // =============================================================

        // 45
        DB::table('theaters')->insert([
                'name'       => 'MAIN HALL',
                'branch_id'  => 17,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    // =============================================================

        // 46
        DB::table('theaters')->insert([
                'name'       => 'MAIN HALL',
                'branch_id'  => 19,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 47
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 20,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 48
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 20,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 49
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 21,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 50
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 21,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 51
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 22,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 52
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 22,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 53
        DB::table('theaters')->insert([
                'name'       => 'HALL 3',
                'branch_id'  => 22,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 54
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 23,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 55
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 23,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 56
        DB::table('theaters')->insert([
                'name'       => 'HALL 3',
                'branch_id'  => 23,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 57
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 24,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 58
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 24,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 59
        DB::table('theaters')->insert([
                'name'       => 'HALL 3',
                'branch_id'  => 24,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 60
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 25,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 61
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 25,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 62
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 26,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 63
        DB::table('theaters')->insert([
                'name'       => 'HALL 2',
                'branch_id'  => 26,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 64
        DB::table('theaters')->insert([
                'name'       => 'HALL 3',
                'branch_id'  => 26,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 65
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 27,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 66
        DB::table('theaters')->insert([
                'name'       => 'HALL 1',
                'branch_id'  => 28,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 67
        DB::table('theaters')->insert([
                'name'       => 'Main Hall',
                'branch_id'  => 29,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 68
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 30,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 69
        DB::table('theaters')->insert([
                'name'       => 'Hall 2',
                'branch_id'  => 30,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 70
        DB::table('theaters')->insert([
                'name'       => 'Main Hall',
                'branch_id'  => 31,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 71
        DB::table('theaters')->insert([
                'name'       => 'Main Hall',
                'branch_id'  => 32,
                'created_at' => now(),
                'updated_at' => now()
            ]);


    // =============================================================

        // 72
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 33,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 73
        DB::table('theaters')->insert([
                'name'       => 'Hall 2',
                'branch_id'  => 33,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 74
        DB::table('theaters')->insert([
                'name'       => 'Main Hall',
                'branch_id'  => 34,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 75
        DB::table('theaters')->insert([
                'name'       => 'Hall 2',
                'branch_id'  => 34,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 76
        DB::table('theaters')->insert([
                'name'       => 'Main Hall',
                'branch_id'  => 35,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    // =============================================================

        // 77
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 36,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 78
        DB::table('theaters')->insert([
                'name'       => 'Hall 2',
                'branch_id'  => 36,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 79
        DB::table('theaters')->insert([
                'name'       => 'Main Hall',
                'branch_id'  => 37,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 80
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 38,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 81
        DB::table('theaters')->insert([
                'name'       => 'Hall 2',
                'branch_id'  => 38,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 82
        DB::table('theaters')->insert([
                'name'       => 'Hall 3',
                'branch_id'  => 38,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 83
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 84
        DB::table('theaters')->insert([
                'name'       => 'Hall 2',
                'branch_id'  => 39,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 85
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 40,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 86
        DB::table('theaters')->insert([
                'name'       => 'Hall 2',
                'branch_id'  => 40,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 87
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 41,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 88
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 42,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 89
        DB::table('theaters')->insert([
                'name'       => 'Hall 2',
                'branch_id'  => 42,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // 90
        DB::table('theaters')->insert([
                'name'       => 'Hall 3',
                'branch_id'  => 42,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    // =============================================================

        // 91
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 43,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 92
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 44,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    // =============================================================

        // 95
        DB::table('theaters')->insert([
                'name'       => 'Hall 1',
                'branch_id'  => 45,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
