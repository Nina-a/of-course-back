<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'main-home'
    ]
);

$router->get(
    '/recipes',
    [
        'uses' => 'RecipesController@list',
        'as'   => 'recipes-list'
    ]
);

$router->get(
    '/categories',
    [
        'uses' => 'CategoriesController@list',
        'as'   => 'categories-list'
    ]
);
