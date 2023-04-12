<?php

namespace App\Http\Livewire;

use App\Models\Category;
use LaravelViews\Views\TableView;
use App\Category;
use Illuminate\Database\Eloquent\Builder;

/**
 * Sets a initial query with the data to fill the table
 *
 * @return Builder Eloquent query
 */
public function repository(): Builder
{
    return Category::query();
}

class CategoriesTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = Category::class;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Name')->width('20%'),
            Header::title('Image')->width('100px'),
            Header::title('Order')->width('100px'),
            'Created',
            'Updated',
        ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [
            $model->name,
            $model->image_path,
            $model->order,
            $model->created_at,
            $model->updated_at
        ];
    }
}
