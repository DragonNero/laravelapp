<?php

namespace App\Filters;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Filters\Filter;
use App\Models\RecipeIngredientUnit;

class RelationshipIngredientFilter extends Filter
{
    /**
     * Modify the current query when the filter is used
     *
     * @param Builder $query Current query
     * @param $value Value selected by the user
     * @return Builder Query modified
     */

    protected $model = RecipeIngredientUnit::class;


    public function apply(Builder $query, $value): Builder
    {
        return $query->where('ingredient_id', $value);
    }

    /**
     * Defines the title and value for each option
     *
     * @return Array associative array with the title and values
     */
    public function options(): array
    {
        $return = [];
        $ingredients = Ingredient::orderBy('name', 'asc')->get();

        foreach ($ingredients as $ingredient) {
            $return[$ingredient->name] = $ingredient->id;
        }

        return $return;
    }
}
