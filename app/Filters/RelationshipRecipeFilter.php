<?php

namespace App\Filters;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Filters\Filter;
use App\Models\RecipeIngredientUnit;
use App\Models\Step;
use Illuminate\Http\Request as HttpRequest;

class RelationshipRecipeFilter extends Filter
{
    /**
     * Modify the current query when the filter is used
     *
     * @param Builder $query Current query
     * @param $value Value selected by the user
     * @return Builder Query modified
     */

    protected $model = null;

    public function apply(Builder $query, $value, HttpRequest $request): Builder
    {
        if ($request->path() === "dashboard/steps") {
            $this->model = Step::class;
        } else {
            $this->model = RecipeIngredientUnit::class;
        }
        return $query->where('recipe_id', $value);
    }

    /**
     * Defines the title and value for each option
     *
     * @return Array associative array with the title and values
     */
    public function options(): array
    {
        $return = [];
        $recipes = Recipe::orderBy('name', 'asc')->get();

        foreach ($recipes as $recipe) {
            $return[$recipe->name] = $recipe->id;
        }

        return $return;
    }
}
