<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller

{
    public function list()
    {
        $recipesList = Recipe::with(['categories', 'ingredients'])->get();

        return response()->json($recipesList);
    }

    public function add(Request $request)
    {
        /*$this->validate($request, [
            'title' => 'required|string',,
            'subtitle',
            'description',
            'picture',
            'serving',
            'private',
            'user_id',
        ])*/
        $title = $request->title;
        $subtitle = $request->subtitle;
        $description = $request->description;
        $picture = $request->picture;
        $private = $request->private;

        $recipe = new Recipe([
            "title" => $title,
            "subtitle" => $subtitle,
            "description" => $description,
            "picture" => $picture,
            "private" => $private,
        ]);

        $recipe->save();
        //dans attach il faut donner le numéro correspondant à la catégorie
        // exemple :
        //$recipe->categories()->attach(1); le 1 correspond aux entrées
        $recipe->categories()->attach(1);
        // ici il faudra donner la quantité nécessaire pour chaque ingrédient
        // TODO a faire autant de fois que nécessaire pour les différents ingrédients
        $recipe->ingredientsFull()->attach(
            45,
            ['quantity' => 1]);
    }
}
