<?php

namespace App\Http\Livewire;

use App\Models\Category;
use LaravelViews\Facades\UI;
use LaravelViews\Views\DetailView;

class CategoryDetailView extends DetailView
{
    /**
     * Sets a model class to get the initial data
     */
    public $modelClass = Category::class;

    /**
     * @param $model Model instance
     * @return Array Array with all the detail data or the components
     */
    public function detail($model)
    {
        return [
            UI::attributes([
              'Name' => $model->name,
              'Order' => $model->order,
            ]),
            UI::component('components.view-image', ['image_path' => $model->image_path]),
        ];
    }
}
