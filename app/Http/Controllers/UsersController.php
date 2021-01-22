<?php

namespace App\Http\Controllers;
use App\Models\User;
class UsersController extends Controller

{
    public function list()
    {
        $usersList = User::all();

        return response()->json($usersList);
    }

    //
}
