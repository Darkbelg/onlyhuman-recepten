<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $randomRecipes = Recipe::inRandomOrder()
            ->where('id', '<>', $recipe->id)
            ->whereHas('category', function ($category) use ($recipe) {
                return $category->where('id', $recipe->category->id);
            })
            ->limit(4)
            ->get();

        return view('recipe.show', ['recipe' => $recipe, 'randomRecipes' => $randomRecipes]);
    }
}
