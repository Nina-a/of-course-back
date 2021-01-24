<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller

{
    public function list()
    {
        $usersList = User::all();

        return response()->json($usersList);
    }

    public function create(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $pseudo = $request->pseudo;

        $user = new User([
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "pseudo" => $pseudo,
        ]);
        $user->save();

        return response()->json( $user->id, 200);
    }
    //
}
