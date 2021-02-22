<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class OverviewRecipes extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.overview-recipes',[
            'recipes' => Recipe::paginate(10),
        ]);
    }
}
