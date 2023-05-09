<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use LaravelViews\Views\DetailView;

class IngredientDetailView extends DetailView
{
    /**
     * Sets a model class to get the initial data
     */
    public $modelClass = Ingredient::class;

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
    public $title = "Ingredient";
    /**
     * @param $model Model instance
     * @return Array Array with all the detail data or the components
     */
    public function detail($model)
    {
        return [
            'Name' => $model->name,
            'Created' => $model->created_at,
            'Updated' => $model->updated_at,

        ];
    }
}
