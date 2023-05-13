<?php

namespace App\Http\Livewire;

use App\Models\Step;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use App\Actions\DeleteStepAction;
use App\Filters\RelationshipRecipeFilter;
use LaravelViews\Actions\RedirectAction;

class StepsTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = Step::class;

    protected function repository()
    {
        return Step::query();
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
            Header::title('Order')->sortBy('order'),
            Header::title('Instruction')->sortBy('instruction'),
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
            $model->recipe->name,
            $model->order,
            $model->instruction,
            $model->created_at,
            $model->updated_at
        ];
    }
    /** For actions by item */
    protected function actionsByRow()
    {
        return [
            new RedirectAction('step.show', 'See step', 'eye'),
            new RedirectAction('step.edit', 'Edit step', 'edit-2'),
            new DeleteStepAction(),
        ];
    }

    protected function filters()
    {
        return [
            new RelationshipRecipeFilter(),
        ];
    }
}
