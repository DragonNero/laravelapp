<?php

namespace App\Http\Livewire;

use LaravelViews\Facades\UI;
use LaravelViews\Facades\Header;
use App\Actions\DeleteUnitAction;
use LaravelViews\Views\TableView;
use App\Models\RecipeIngredientUnit;
use App\Filters\RelationshipUnitFilter;
use LaravelViews\Actions\RedirectAction;
use App\Filters\RelationshipRecipeFilter;
use LaravelViews\Views\Traits\WithAlerts;
use App\Filters\RelationshipIngredientFilter;

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
            Header::title('Recipe')->sortBy('recipe_id'),
            Header::title('value')->sortBy('value'),
            Header::title('Unit')->sortBy('unit_id'),
            Header::title('Ingredient')->sortBy('ingredient_id'),
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
            $model->recipe->name,
            UI::editable($model, 'value'),
            ($model->unit === null ? '' : $model->unit->name),
            //($model->unit->name ?? ''),
            $model->ingredient->name,
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

    protected function filters()
    {
        return [
            new RelationshipRecipeFilter(),
            new RelationshipUnitFilter(),
            new RelationshipIngredientFilter(),
        ];
    }
}
