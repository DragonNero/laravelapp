<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use App\Actions\DeleteRecipeAction;
use LaravelViews\Actions\RedirectAction;
use LaravelViews\Facades\UI;

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
        return [
            Header::title('Category')->sortBy('category_id'),
            Header::title('Name')->sortBy('name'),
            Header::title('Image'),
            Header::title('Prep Time')->width('100px')->sortBy('prep_time'),
            Header::title('Cook Time')->sortBy('cook_time'),
            Header::title('Rest Time')->sortBy('rest_time'),
            Header::title('Servings')->sortBy('servings'),
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
            $model->category->name,
            $model->name,
            UI::avatar(asset('storage/images/' . $model->image_path)),
            $model->prep_time,
            $model->cook_time,
            $model->rest_time,
            $model->servings
        ];
    }
    /** For actions by item */
    protected function actionsByRow()
    {
        return [
            new RedirectAction('recipe.show', 'See recipe', 'eye'),
            new RedirectAction('recipe.edit', 'Edit recipe', 'edit-2'),
            new DeleteRecipeAction(),
        ];
    }
}
