<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert( [
            ['libelle' => 'tissu', 'unite' => 'metre'],
            ['libelle' => 'fil', 'unite' => 'metre'],
            ['libelle' => 'bouton', 'unite' => 'douzaine'],
            ['libelle' => 'test 1', 'unite' => 'yard'],
            ['libelle' => 'test 2', 'unite' => 'cm'],
            ['libelle' => 'test 3', 'unite' => '1/2 douzaine'],
        ]);
    }
    
}
