<?php

namespace App\Http\Livewire;

use App\Models\RecipeIngredientUnit;
use LaravelViews\Views\DetailView;

class RecipeingredientunitDetailView extends DetailView
{
    /**
     * Sets a model class to get the initial data
     */
    public $modelClass = RecipeIngredientUnit::class;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    // public function heading($model)
    // {
    //     return [
    //         "This is the detail view of {$model->name}",
    //     ];
    // }
    public $title = "RecipeIngredientUnit";
    /**
     * @param $model Model instance
     * @return Array Array with all the detail data or the components
     */
    public function detail($model)
    {
        return [
            'Recipe' => $model->recipe->name,
            'Value' => $model->value,
            'Unit' => $model->unit->name,
            'Ingredient' => $model->ingredient->name,
        ];
    }
}
