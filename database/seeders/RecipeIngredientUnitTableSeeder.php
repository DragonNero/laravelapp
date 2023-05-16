<?php

namespace Database\Seeders;

use App\Models\RecipeIngredientUnit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RecipeIngredientUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        RecipeIngredientUnit::truncate();

        $recipeingredientunits = [
            [
                'recipe_id' => 1,
                'ingredient_id' => 139,
                'unit_id' => 3,
                'value' => 2.5,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 166,
                'unit_id' => 3,
                'value' => 2.5,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 13,
                'unit_id' => 3,
                'value' => 5,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 67,
                'unit_id' => 3,
                'value' => 355,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 14,
                'unit_id' => null,
                'value' => 4,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 62,
                'unit_id' => null,
                'value' => 2,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 152,
                'unit_id' => 3,
                'value' => 240,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 30,
                'unit_id' => 3,
                'value' => 120,
            ],
        ];

        foreach ($recipeingredientunits as $recipeingredientunit) {
            RecipeIngredientUnit::create($recipeingredientunit);
        }

        Schema::enableForeignKeyConstraints();
    }
}
