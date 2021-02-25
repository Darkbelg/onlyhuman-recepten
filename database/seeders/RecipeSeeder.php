<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = Ingredient::all();
        $recipes = Recipe::factory(500)->create();

        $recipes->each(function ($recipe) use ($ingredients) {
            foreach ($ingredients->random(rand(1, 12))->pluck('id')->toArray() as $ingredientId) {
                $recipe->ingredients()->attach(
                    $ingredientId,
                    ['quantity' => rand(1, 1000)]
                );
            };
        });

        $recipes->random(25)->each(function ($recipe){
           $recipe->update(['show' => false]);
        });
    }
}
