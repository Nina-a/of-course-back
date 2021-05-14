<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller

{
    public function __construct()
    {
         $this->middleware('auth:api', ['except' => ['register', 'login']]);
    }

    public function list()
    {
        $usersList = User::all();

        return response()->json($usersList);
    }

    public function register(Request $request)
    {
        //validate incoming request
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string',
            'pseudo' => 'required|string',
        ]);
        try {

            $name = $request->name;
            $email = $request->email;
            $password = $request->password;
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $pseudo = $request->pseudo;

            $user = new User([
                "name" => $name,
                "email" => $email,
                "password" => $password_hash,
                "pseudo" => $pseudo,
            ]);

            $user->save();
            // Vérifie si la personne est bien enregistrer dans la BDD
            $credentials = $request->only(['email', 'password']);
            $isValid = Auth::attempt($credentials);
            return $this->respondWithToken($isValid);

        }
        // TODO
        catch (\Exception $e) {
            return response()->json([
                'entity' => 'users',
                'action' => 'create',
                'result' => 'failed'
            ], 409);
        }
    }

    public function logout()
    {

        Auth:: logout();
        // Reponds OK à l'utilisateur

    }

    public function login(Request $request)
    {
        $isValid = auth::attempt($request->only(['email', 'password']));
        if ($isValid) {
            return $this->respondWithToken($isValid);
        }else{
            return response()->json([], 403);
        }
    }
}
