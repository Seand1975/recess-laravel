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
                'name' => 'Chloe',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Shoes',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 2,
                'name' => 'Adam',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Laptop',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 3,
                'name' => 'yusuf',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Iphone14',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 4,
                'name' => 'Leila',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Percolator',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 5,
                'name' => 'Pattt',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Banda',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 6,
                'name' => 'dero',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'RayBandsOptic',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 7,
                'name' => 'jason55',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Pushinsv2',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 8,
                'name' => 'ales8op',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'MemoryCard',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 9,
                'name' => 'brianoop',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'SamsungCharger',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 10,
                'name' => 'seanoop',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Pushins',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 11,
                'name' => 'carslover',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Beer',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 12,
                'name' => 'bikini',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Wine',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 13,
                'name' => 'spongebob',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Resistors',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 14,
                'name' => 'namale',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'ArduinoUno',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 15,
                'name' => 'mangodb',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Switch',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 16,
                'name' => 'mariadb',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Thermometer',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 17,
                'name' => 'golang',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'GPRSModule',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 18,
                'name' => 'python',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'BluetoothModule',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 19,
                'name' => 'fastapi',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'LaikaMobileSIM',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 20,
                'name' => 'linux',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'Tablet',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 21,
                'name' => 'vim',
                'password' => '1234',
                'date_of_birth' => date('y-m-d'),
                'product' => 'GasCylinder',
                'created_at' =>  Carbon::now()->toDateTimeString(),
                'updated_at' =>  Carbon::now()->toDateTimeString()
            ],
        ];
        DB::table('participants')->insert($participants);
    }
}
