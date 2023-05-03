<?php

namespace App\Http\Livewire;

use App\Models\Unit;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use App\Actions\DeleteUnitAction;
use LaravelViews\Actions\RedirectAction;

class UnitsTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = Unit::class;

    protected function repository()
    {
        return Unit::query();
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
            new RedirectAction('unit.show', 'See unit', 'eye'),
            new RedirectAction('unit.edit', 'Edit unit', 'edit-2'),
            new DeleteUnitAction(),
        ];
    }
}
