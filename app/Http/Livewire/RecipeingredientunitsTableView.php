<?php

namespace App\Http\Livewire;

use LaravelViews\Facades\Header;
use App\Actions\DeleteUnitAction;
use LaravelViews\Views\TableView;
use App\Models\RecipeIngredientUnit;
use LaravelViews\Actions\RedirectAction;
use LaravelViews\Facades\UI;
use LaravelViews\Views\Traits\WithAlerts;

class RecipeingredientunitsTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = RecipeIngredientUnit::class;

    protected function repository()
    {
        return RecipeIngredientUnit::query();
    }
    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('recipe_id')->sortBy('recipe_id'),
            Header::title('unit_id')->sortBy('unit_id'),
            Header::title('ingredient_id')->sortBy('ingredient_id'),
            Header::title('value')->sortBy('value'),
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
            $model->recipe_id,
            $model->unit_id,
            $model->ingredient_id,
            UI::editable($model, 'value'),
        ];
    }

    public function update(RecipeIngredientUnit $model, $data)
    {
        $model->update($data);
        $this->success();
    }
    /** For actions by item */
    protected function actionsByRow()
    {
        return [
            new RedirectAction('recipeingredientunit.show', 'See unit', 'eye'),
            new RedirectAction('recipeingredientunit.edit', 'Edit recipeingredientunit', 'edit-2'),
            new DeleteUnitAction(),
        ];
    }
}
