<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Téléphones']);
        Category::create(['name' => 'Ordinateurs']);
        Category::create(['name' => 'Accessoires']);
    }
}
