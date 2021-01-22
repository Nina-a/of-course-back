<?php

namespace App\Http\Controllers;
use App\Models\Category;
class CategoriesController extends Controller

{
    public function list()
    {
        $categoriesList = Category::all();
        return response()->json($categoriesList);
    }

    //
}
