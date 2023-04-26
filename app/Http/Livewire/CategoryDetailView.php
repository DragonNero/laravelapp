<?php

namespace App\Http\Livewire;

use App\Models\Category;
use LaravelViews\Views\DetailView;

class CategoryDetailView extends DetailView
{
    /**
     * Sets a model class to get the initial data
     */
    public $modelClass = \App\Models\Category::class;

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
    public $title = "My custom title";
    /**
     * @param $model Model instance
     * @return Array Array with all the detail data or the components
     */
    public function detail($model)
    {
        return [
            'Name' => $model->name,
            // 'Image' => $model->image_path,
            'Order' => $model->order,
        ];
    }
}
