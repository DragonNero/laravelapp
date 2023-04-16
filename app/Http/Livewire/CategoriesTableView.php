<?php

namespace App\Http\Livewire;

use App\Models\Category;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use App\Actions\EditCategoryAction;
use App\Actions\DeleteCategoryAction;
use LaravelViews\Actions\RedirectAction;

class CategoriesTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = Category::class;

    protected function repository()
    {
        return Category::query();
    }
    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Name')->width('10%')->sortBy('name'),
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
    /** For actions by item */
    protected function actionsByRow()
    {
        return [
            new RedirectAction('category.show', 'See category', 'eye'),
            new RedirectAction('category.edit', 'Edit category', 'edit-2'),
            new DeleteCategoryAction(),
        ];
    }
}
