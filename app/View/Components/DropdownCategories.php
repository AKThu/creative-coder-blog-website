<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownCategories extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $author = request('author') ? "&author=" . request('author') : "";
        $search = request('search') ? "&search=" . request('search') : "";

        return view('components.dropdown-categories', [
            'categories' => Category::all(),
            'otherUrlParameters' => $author . $search,
        ]);
    }
}
