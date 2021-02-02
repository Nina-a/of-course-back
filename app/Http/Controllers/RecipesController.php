<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipesController extends Controller

{
    public function list()
    {
        $recipesList = Recipe::with(['categories', 'ingredients'])->get();


        // foreach ($recipesList as $recipe) {
        //     // foreach ($recipe->categories as $category) {
        //     // }
        //     foreach ($recipe->ingredients as $ingredient) {
        //     }
        // }

        return response()->json($recipesList);
    }

    //
}
