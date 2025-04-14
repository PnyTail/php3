<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['tenSP' => 'iPhone 15', 'gia' => 25000000, 'anHien' => 1],
            ['tenSP' => 'Samsung S24', 'gia' => 20000000, 'anHien' => 0],
            ['tenSP' => 'Xiaomi 13T', 'gia' => 12000000, 'anHien' => 1],
        ]);
    }
}
