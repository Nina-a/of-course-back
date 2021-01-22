<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Recipe extends Model {
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

}

