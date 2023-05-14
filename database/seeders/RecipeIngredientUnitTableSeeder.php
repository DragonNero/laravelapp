<?php

namespace Database\Seeders;

use App\Models\RecipeIngredientUnit;
use Illuminate\Database\Seeder;

class RecipeIngredientUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipeingredientunits = [
            [
                'id' => '1',
                'recipe_id' => '1',
                'ingredient_id' => '1',
                'unit_id' => '1',
                'value' => '100',
            ],
            [
                'id' => '2',
                'recipe_id' => '2',
                'ingredient_id' => '3',
                'unit_id' => '3',
                'value' => '200',
            ],
            [
                'id' => '3',
                'recipe_id' => '2',
                'ingredient_id' => '3',
                'unit_id' => '3',
                'value' => '300',
            ],
            [
                'id' => '4',
                'recipe_id' => '1',
                'ingredient_id' => '1',
                'unit_id' => '1',
                'value' => '400',
            ],
            [
                'id' => '5',
                'recipe_id' => '3',
                'ingredient_id' => '2',
                'unit_id' => '2',
                'value' => '500',
            ],
            [
                'id' => '6',
                'recipe_id' => '1',
                'ingredient_id' => '1',
                'unit_id' => '1',
                'value' => '600',
            ],
        ];

        foreach ($recipeingredientunits as $recipeingredientunit) {
            RecipeIngredientUnit::create($recipeingredientunit);
        }
    }
}
