<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
    'name' => 'iPhone 14',
    'description' => 'Un iPhone de très bonne qualité.',
    'price' => 230000,
    'image' => 'images/iphone 14.jpg',
    'category_id' => 1, // <- existant
],
[
    'name' => 'Ordinateur',
    'description' => 'Ordinateur efficace pour vos cours informatiques.',
    'price' => 176000,
    'image' => 'images/ordinateur.jpg',
    'category_id' => 2, // <- existant
],
[
    'name' => 'Clavier et souris',
    'description' => 'Un clavier et une souris pour une bonne manipulation.',
    'price' => 230000,
    'image' => 'images/Clavier et souris.jpg',
    'category_id' => 3, // <- existant
],
[
    'name' => 'iPhone 12',
    'description' => 'il vous offre des images de bonne qualité.',
    'price' => 180000,
    'image' => 'images/iphone 12.jpg',
    'category_id' => 1,
],
[
    'name' => 'Ordinateur fixe',
    'description' => 'pour vous accompagner dans vos cours informatique.',
    'price' => 210000,
    'image' => 'images/Ordinateur fixe.jpg',
    'category_id' => 2,
],
[
    'name' => 'Disque dur',
    'description' => 'sauvgarder vos donnees personnels en securite.',
    'price' => 15000,
    'image' => 'images/disque dur.jpg',
    'category_id' => 3,
],
[
    'name' => 'Iphone 11',
    'description' => 'efficace et tenace',
    'price' => 110000,
    'image' => 'images/iphone 11simple.jpg',
    'category_id' => 1,
],
[
    'name' => 'Machine',
    'description' => '',
    'price' => 165000,
    'image' => 'images/machine.jpg',
    'category_id' => 2,
],
[
    'name' => 'Cle USB',
    'description' => 'des cles USB pour recuperer vos donnees',
    'price' => 165000,
    'image' => 'images/cle USB.jpg',
    'category_id' => 3,
],
[
    'name' => 'Iphone et accesoires',
    'description' => 'un iphone avec tous ce quil faut',
    'price' => 400000,
    'image' => 'images/iphone et accessoire.jpg',
    'category_id' => 1,
],
[
     'name' => 'Clavier souris ',
    'description' => 'Ensemble clavier + souris de haute qualité.',
    'price' => 35000,
    'image' => 'images/clavier souris.jpg',
    'category_id' => 3,
],
[
      'name' => 'iPhone 13pro',
    'description' => 'Un iPhone de bonne qualité.',
    'price' => 230000,
    'image' => 'images/iphone 13pro.jpg',
    'category_id' => 1,
]

]);
    }
}
