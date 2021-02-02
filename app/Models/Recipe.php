<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Ingredient;
class Recipe extends Model
{
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class)->withPivot('quantity')->select(['name','quantity','unit']);
    }

}

