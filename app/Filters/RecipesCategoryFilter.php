<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Filters\Filter;
use App\Models\Recipe;

class RecipesFilter extends Filter
{
    /**
     * Modify the current query when the filter is used
     *
     * @param Builder $query Current query
     * @param $value Value selected by the user
     * @return Builder Query modified
     */

    protected $model = Recipe::class;

    public function apply(Builder $query, $value, $request): Builder
    {
        return $query->where('active', $value);
    }

    /**
     * Defines the title and value for each option
     *
     * @return Array associative array with the title and values
     */
    public function options(): Array
    {
        return [
            'Active' => 1,
            'Disabled' => 0,
        ];
    }
}
// category_id
// $model->category->name,