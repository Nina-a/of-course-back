<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipesController extends Controller

{
    public function list()
    {
        $recipesList = Recipe::all();


        foreach ($recipesList as $recipe) {
            foreach ($recipe->categories as $category) {

            }
        }

        return response()->json($recipesList);
    }

    //
}
