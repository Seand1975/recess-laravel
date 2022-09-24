<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $points = [
            [
                'name' => 'brianoop',
                'number_of_points' => 7,
            ],
            [
                'name' => 'seanoop',
                'number_of_points' => 2,
            ],
            [
                'name' => 'yusuf',
                'number_of_points' => 3,
            ],
            [
                'name' => 'linux',
                'number_of_points' => 6,
            ],
            [
                'name' => 'spongebob',
                'number_of_points' => 1,
            ],
        ];
        DB::table('participant_points')->insert($points);
    }
}
