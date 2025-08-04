<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'iPhone 14',
            'description' => 'Dernier modèle Apple',
            'price' => 900000,
            'image' => null,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'PC Portable Dell',
            'description' => 'Ordinateur puissant',
            'price' => 650000,
            'image' => null,
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Casque Bluetooth',
            'description' => 'Son de qualité',
            'price' => 50000,
            'image' => null,
            'category_id' => 3
        ]);
    }
}
