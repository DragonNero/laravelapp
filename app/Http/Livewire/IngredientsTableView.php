<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use App\Actions\DeleteIngredientAction;
use LaravelViews\Actions\RedirectAction;

class IngredientsTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = Ingredient::class;

    protected function repository()
    {
        return Ingredient::query();
    }
    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Name')->sortBy('name'),
            Header::title('Created')->sortBy('created_at'),
            Header::title('Updated')->sortBy('updated_at'),
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
            $model->created_at,
            $model->updated_at
        ];
    }
    /** For actions by item */
    protected function actionsByRow()
    {
        return [
            new RedirectAction('ingredient.show', 'See ingredient', 'eye'),
            new RedirectAction('ingredient.edit', 'Edit ingredient', 'edit-2'),
            new DeleteIngredientAction(),
        ];
    }
}
