<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $with = ['ingredients'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class)->withPivot('quantity');
    }

}