<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categoryId = Category::inRandomOrder()->first();

        return [
            'category_id' => $categoryId,
            'instructions' => implode("\n",$this->faker->sentences(rand(2,8))),
            'preparation_time' => $this->faker->time(),
            'show' => true,
            'image' => $this->faker->imageUrl(120, 90),
            'name' => $this->faker->word
        ];
    }
}
