<?php

namespace App\Http\Controllers;

class RecipesController extends Controller
{
    /** liste des recettes, on la stocke ici temporairement
     * car on n'a pas encore de BDD
     */

     private $recipesList = [
        'listEntree' => [
            1 =>
                [
                'id' => 1,
                'title' => 'Quiche lorraine',
                'picture' => ""
            ]
          ],
     ];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function list()
    {
        echo "Liste des recettes";
    }

    //
}
