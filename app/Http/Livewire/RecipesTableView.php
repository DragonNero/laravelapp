<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use App\Actions\DeleteRecipeAction;
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
        return [
            Header::title('Category_id')->sortBy('category_id'),
            Header::title('Name')->sortBy('name'),
            Header::title('Image'),
            Header::title('Prep_time')->width('100px')->sortBy('prep_time'),
            Header::title('Cook_time')->sortBy('cook_time'),
            Header::title('Rest_time')->sortBy('rest_time'),
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
            new RedirectAction('recipe.show', 'See recipe', 'eye'),
            new RedirectAction('recipe.edit', 'Edit recipe', 'edit-2'),
            new DeleteRecipeAction(),
        ];
    }
}
