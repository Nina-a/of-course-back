<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientsController extends Controller

{
    public function list()
    {
        $ingredientsList = Ingredient::all();

        return response()->json($ingredientsList);
    }
}
