<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use LaravelViews\Facades\UI;
use LaravelViews\Views\DetailView;

class RecipeDetailView extends DetailView
{
    /**
     * Sets a model class to get the initial data
     */
    public $modelClass = \App\Models\Recipe::class;

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
    public $title = "Recipe";
    /**
     * @param $model Model instance
     * @return Array Array with all the detail data or the components
     */
    public function detail($model)
    {
        return [
            UI::attributes([
                'Category' => $model->category->name,
                'Name' => $model->name,
                'Prep Time' => $model->prep_time,
                'Cook Time' => $model->cook_time,
                'Rest Time' => $model->rest_time,
                'Servings' => $model->servings,
            ]),
            UI::component('components.view-image', ['image_path' => $model->image_path]),
        ];
    }
}
