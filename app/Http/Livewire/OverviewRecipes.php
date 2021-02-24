<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class OverviewRecipes extends Component
{
    use WithPagination;

    public $paginationRange = 10;
    public $category = null;
    public $search = "";

    public function render()
    {
        $recipes = Recipe::paginate($this->paginationRange);
        $categories = Category::all();

        if ($this->search !== "") {
            $recipes = Recipe::where([
                ['name', 'like', '%' . $this->search . '%']
            ])->paginate($this->paginationRange);
        }

        if (isset($this->category)) {
            $recipes = Recipe::whereHas('category',function ($category){
                return $category->where('id',$this->category);
            })->paginate($this->paginationRange);
        }

        return view('livewire.overview-recipes', [
            'search' => $this->category,
            'recipes' => $recipes,
            'paginationRange' => $this->paginationRange,
            'categories' => $categories
        ]);
    }
}
