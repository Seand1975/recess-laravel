<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $participants = [
            [
                'id' => 1,
                'name' => 'Chloey',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Shoes',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ]
        ];
        DB::table('participants')->insert($participants);
    }
}
