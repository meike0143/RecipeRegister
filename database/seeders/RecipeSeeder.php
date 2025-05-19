<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    private $data = [
        [
            'name' => 'Pasta Bolognese',
            'slug' => 'pasta_bolognese',
            'description' => 'A simple pasta with penne & bolognese sauce. ',
            'preparation_time' => '20',
        ],
        [
            'name' => 'Pizza Margaritha',
            'slug' => 'pizza_margaritha',
            'description' => 'A pizza with tomato sauce and mozarella cheese.',
            'preparation_time' => '35',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $recipeData) {
            // create the new recipe in the database
            $recipe = Recipe::create($recipeData);
        }
    }
}
