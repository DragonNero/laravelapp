<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use LaravelViews\Views\TableView;
use App\Actions\EditCategoryAction;
use App\Actions\DeleteCategoryAction;
use LaravelViews\Actions\RedirectAction;

class RecipesTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = Recipe::class;

    protected function repository()
    {
        return Recipe::query();
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [];
    }
}
