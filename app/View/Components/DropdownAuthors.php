<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownAuthors extends Component
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
        $category = request('category') ? "&category=" . request('category') : "";
        $search = request('search') ? "&search=" . request('search') : "";

        return view('components.dropdown-authors', [
            'authors' => User::all(),
            'otherUrlParameters' => $category . $search,
        ]);
    }
}
