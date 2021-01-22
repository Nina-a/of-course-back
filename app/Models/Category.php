<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;

class Category extends Model
{

    protected $hidden = ['pivot'];


    public function recipes()
    {
        return $this->belongsToMany(Recipe::class);
    }
}
