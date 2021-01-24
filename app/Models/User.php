<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model {
    // Donne les champs modifiables
    protected $fillable = ['name', 'email', 'password', 'pseudo'];
    public $timestamps = false;

}
