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

    protected $queryString = [
        'paginationRange' => ['except' => 10],
        'search' => ['except' => ''],
        'category' => ['except' => null]
    ];

    public function render()
    {
        $recipes = (new Recipe)->newQuery()->where('show',true);
        $categories = Category::all();

        if ($this->search !== "") {
            $recipes->where([
                ['name', 'like', '%' . $this->search . '%']
            ])->orWhere(function($query){
                $query->whereHas('ingredients',function ($ingredient){
                   return $ingredient->where('name','like','%' . $this->search . '%');
                });
            });
        }

        if (isset($this->category)) {
            $recipes->whereHas('category', function ($category) {
                return $category->where('id', $this->category);
            });
        }

        return view('livewire.overview-recipes', [
            'search' => $this->category,
            'recipes' => $recipes->paginate($this->paginationRange),
            'paginationRange' => $this->paginationRange,
            'categories' => $categories
        ]);
    }
}
