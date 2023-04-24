<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Category;

class ClientLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.client', [
            'categories' =>  Category::orderBy('order', 'asc')->get()
        ]);
    }
}
