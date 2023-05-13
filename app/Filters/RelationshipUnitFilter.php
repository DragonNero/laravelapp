<?php

namespace App\Filters;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Filters\Filter;
use App\Models\RecipeIngredientUnit;

class RelationshipUnitFilter extends Filter
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
        return $query->where('unit_id', $value);
    }

    /**
     * Defines the title and value for each option
     *
     * @return Array associative array with the title and values
     */
    public function options(): array
    {
        $return = [];
        $units = Unit::orderBy('name', 'asc')->get();

        foreach ($units as $unit) {
            $return[$unit->name] = $unit->id;
        }

        return $return;
    }
}
