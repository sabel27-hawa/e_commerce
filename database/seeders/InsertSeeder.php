<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class InsertSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Supprimer les anciens produits et catégories
        Product::query()->delete();
        Category::query()->delete();


        // 2. Créer les catégories
        $telephones = Category::create(['name' => 'Téléphones']);
        $ordinateurs = Category::create(['name' => 'Ordinateurs']);
        $accessoires = Category::create(['name' => 'Accessoires']);

        // 3. Ajouter les produits pour chaque catégorie
        Product::create([
            'name' => 'iPhone 14',
            'description' => 'Un iPhone de très bonne qualité.',
            'price' => 230000,
            'image' => 'images/iphone 14.jpg',
            'category_id' => $telephones->id,
        ]);

        Product::create([
            'name' => 'Ordinateur HP',
            'description' => 'Ordinateur performant pour vos tâches quotidiennes.',
            'price' => 176000,
            'image' => 'images/ordinateur.jpg',
            'category_id' => $ordinateurs->id,
        ]);

        Product::create([
            'name' => 'Clavier et souris ',
            'description' => 'Ensemble clavier + souris de haute qualité.',
            'price' => 35000,
            'image' => 'images/Clavier et souris.jpg',
            'category_id' => $accessoires->id,
        ]);

         Product::create([
            'name' => 'iPhone 12',
            'description' => 'il vous offre des images de bonne qualité.',
            'price' => 180000,
            'image' => 'images/iphone 12.jpg',
            'category_id' => $telephones->id,
        ]);

         Product::create([
            'name' => 'Ordinateur fixe',
            'description' => 'pour vous accompagner dans vos cours informatique.',
            'price' => 210000,
            'image' => 'images/Ordinateur fixe.jpg',
            'category_id' => $ordinateurs->id,
        ]);

        Product::create([
            'name' => 'Disque dur',
            'description' => 'sauvgarder vos donnees personnels en securite.',
            'price' => 15000,
            'image' => 'images/disque dur.jpg',
            'category_id' => $accessoires->id,
        ]);

        Product::create([
            'name' => 'Iphone 11',
            'description' => 'efficace et tenace',
            'price' => 110000,
            'image' => 'images/iphone 11simple.jpg',
            'category_id' => $telephones->id,
        ]);

        Product::create([
            'name' => 'Machine',
            'description' => '',
            'price' => 165000,
            'image' => 'images/machine.jpg',
            'category_id' => $ordinateurs->id,
        ]);

        Product::create([
            'name' => 'Cle USB',
            'description' => 'des cles USB pour recuperer vos donnees',
            'price' => 165000,
            'image' => 'images/cle USB.jpg',
            'category_id' => $accessoires->id,
        ]);

         Product::create([
            'name' => 'Iphone et accesoires',
            'description' => 'un iphone avec tous ce quil faut',
            'price' => 400000,
            'image' => 'images/iphone et accessoire.jpg',
            'category_id' => $telephones->id,
        ]);

        Product::create([
            'name' => 'Clavier souris ',
            'description' => 'Ensemble clavier + souris de haute qualité.',
            'price' => 35000,
            'image' => 'images/clavier souris.jpg',
            'category_id' => $accessoires->id,
        ]);

         Product::create([
            'name' => 'iPhone 13pro',
            'description' => 'Un iPhone de bonne qualité.',
            'price' => 230000,
            'image' => 'images/iphone 13pro.jpg',
            'category_id' => $telephones->id,
        ]);

    }
}
