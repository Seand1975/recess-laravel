<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'product_name' => "NikeShoes",
                'product_description' => "Very dope shoes",
                'available_quantity' => 5,
                'rate_per_item' => 120000,
                'posted_by' => 'Chloey'
            ],
            [
                'id' => 2,
                'product_name' => "Laptop",
                'product_description' => "Very dope laptop",
                'available_quantity' => 3,
                'rate_per_item' => 800000,
                'posted_by' => 'Adam'
            ],
            [
                'id' => 3,
                'product_name' => "Iphone14",
                'product_description' => "An iphone is an iphone",
                'available_quantity' => 1,
                'rate_per_item' => 3000000,
                'posted_by' => 'yusuf'
            ],
            [
                'id' => 4,
                'product_name' => "Percolator",
                'product_description' => "Boil chai fastt!!",
                'available_quantity' => 30,
                'rate_per_item' => 25000,
                'posted_by' => 'Leila'
            ],
            [
                'id' => 5,
                'product_name' => "Banda",
                'product_description' => "Loook good!",
                'available_quantity' => 40,
                'rate_per_item' => 10000,
                'posted_by' => 'Pattt'
            ],
            [
                'id' => 6,
                'product_name' => "RayBandsOptic",
                'product_description' => "Protect your eyes from UV rays",
                'available_quantity' => 15,
                'rate_per_item' => 32000,
                'posted_by' => 'dero'
            ],
            [
                'id' => 7,
                'product_name' => "Pushinsv2",
                'product_description' => "Feel like a god!!",
                'available_quantity' => 7,
                'rate_per_item' => 21000,
                'posted_by' => 'jason55'
            ],
            [
                'id' => 8,
                'product_name' => "MemoryCard",
                'product_description' => "Get some space!!",
                'available_quantity' => 11,
                'rate_per_item' => 25000,
                'posted_by' => 'ales8op'
            ],
            [
                'id' => 9,
                'product_name' => "SamsungCharger",
                'product_description' => "Feel up your phone fast!!",
                'available_quantity' => 9,
                'rate_per_item' => 31000,
                'posted_by' => 'brianoop'
            ],
            [
                'id' => 10,
                'product_name' => "Pushins",
                'product_description' => "Feel like a god!!",
                'available_quantity' => 7,
                'rate_per_item' => 60,
                'posted_by' => 'seanoop'
            ],
            [
                'id' => 11,
                'product_name' => "Beer",
                'product_description' => "Get high right now",
                'available_quantity' => 1000,
                'rate_per_item' => 700,
                'posted_by' => 'carslover'
            ],
            [
                'id' => 12,
                'product_name' => "Wine",
                'product_description' => "Have some corporate heights",
                'available_quantity' => 12,
                'rate_per_item' => 40000,
                'posted_by' => 'bikini'
            ],
            [
                'id' => 13,
                'product_name' => "Resistors",
                'product_description' => "Protect your circuits",
                'available_quantity' => 80,
                'rate_per_item' => 500,
                'posted_by' => 'spongebob'
            ],
            [
                'id' => 14,
                'product_name' => "ArduinoUno",
                'product_description' => "Control your logic",
                'available_quantity' => 6,
                'rate_per_item' => 55000,
                'posted_by' => 'namale'
            ],
            [
                'id' => 15,
                'product_name' => "Switch",
                'product_description' => "Make and break circuits like a pro",
                'available_quantity' => 87,
                'rate_per_item' => 5000,
                'posted_by' => 'mangodb'
            ],
            [
                'id' => 16,
                'product_name' => "Thermometer",
                'product_description' => "Know when its too hot",
                'available_quantity' => 13,
                'rate_per_item' => 130000,
                'posted_by' => 'mariadb'
            ],
            [
                'id' => 17,
                'product_name' => "GPRSModule",
                'product_description' => "Connect to the world!",
                'available_quantity' => 8,
                'rate_per_item' => 30000,
                'posted_by' => 'golang'
            ],
            [
                'id' => 18,
                'product_name' => "BluetoothModule",
                'product_description' => "Share to nearby devices",
                'available_quantity' => 14,
                'rate_per_item' => 35000,
                'posted_by' => 'python'
            ],
            [
                'id' => 19,
                'product_name' => "LaikaMobileSIM",
                'product_description' => "Buy a line for affordable data",
                'available_quantity' => 30,
                'rate_per_item' => 25000,
                'posted_by' => 'fastapi'
            ],
            [
                'id' => 20,
                'product_name' => "Tablet",
                'product_description' => "A perfect replacement for your laptop",
                'available_quantity' => 4,
                'rate_per_item' => 500000,
                'posted_by' => 'linux'
            ],
            [
                'id' => 21,
                'product_name' => "GasCylinder",
                'product_description' => "Cook that meal chap",
                'available_quantity' => 46,
                'rate_per_item' => 80000,
                'posted_by' => 'vim'
            ],
        ];

        DB::table('products')->insert($products);
    }
}
