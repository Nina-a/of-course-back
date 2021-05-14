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

// ===================================== RECIPES =======================
$router->get(
    '/recipes',
    [
        'uses' => 'RecipesController@list',
        'as'   => 'recipes-list'
    ]
);

$router->post(
    '/recipes/add',
    [
        'uses' => 'RecipesController@add',
        'as'   => 'recipes-add'
    ]
);

// ===================================== INGREDIENTS ==========================
$router->get(
    '/ingredients',
    [
        'uses' => 'IngredientsController@list',
        'as'   => 'ingredients-list'
    ]
);
// ===================================== CATEGORIES =======================

$router->post(
    '/categories',
    [
        'uses' => 'CategoriesController@list',
        'as'   => 'categories-list'
    ]
);

// ===================================== USERS =======================

$router->get(
    '/users',
    [
        'uses' => 'UsersController@list',
        'as'   => 'user-list'
    ]
);

$router->post(
    '/users/new',
    [
        'uses' => 'UsersController@register',
        'as'   => 'user-register'
    ]
);

$router->post(
    '/users/logout',
    [
        'uses' => 'UsersController@logout',
        'as'   => 'user-logout'
    ]
);

$router->post(
    '/users/login',
    [
        'uses' => 'UsersController@login',
        'as'   => 'user-login'
    ]
);


