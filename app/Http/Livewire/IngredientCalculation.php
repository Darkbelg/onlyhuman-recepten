<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IngredientCalculation extends Component
{
    public $quantityIngredient = 2;

    public $recipe;

    public function render()
    {
        $quantityIngredients = [];
        if ($this->quantityIngredient > 1) {
            foreach ($this->recipe->ingredients as $ingredient) {
                $quantityIngredients[] = [
                    "name" => $ingredient->name,
                    "unit" => $ingredient->unit,
                    "quantity" => ($ingredient->pivot->quantity * $this->quantityIngredient)
                ];
            }
        }

        return view('livewire.ingredient-calculation',
            ['ingredients' => $quantityIngredients]
        );
    }
}
