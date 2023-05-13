<?php

namespace App\Filters;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Filters\Filter;
use App\Models\Recipe;

class RelationshipCategoryFilter extends Filter
{
    /**
     * Modify the current query when the filter is used
     *
     * @param Builder $query Current query
     * @param $value Value selected by the user
     * @return Builder Query modified
     */

    protected $model = Recipe::class;

    public function apply(Builder $query, $value): Builder
    {
        return $query->where('category_id', $value);
    }

    /**
     * Defines the title and value for each option
     *
     * @return Array associative array with the title and values
     */
    public function options(): array
    {
        $return = [];
        $categories = Category::orderBy('order', 'asc')->get();

        foreach ($categories as $category) {
            $return[$category->name] = $category->id;
        }

        return $return;
    }
}
