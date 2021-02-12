<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Ingredient;
class Recipe extends Model
{

    protected $fillable = ['title', 'subtitle', 'description', 'picture', 'private'];
    public $timestamps = false;

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class)->select(['name','quantity','unit', 'ingredient_id']);
    }

    public function ingredientsFull(){
        return $this->belongsToMany(Ingredient::class);
    }

}

