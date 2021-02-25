<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Recipe
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $image
 * @property string $instructions
 * @property string $preparation_time
 * @property int $show
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Ingredient[] $ingredients
 * @property-read int|null $ingredients_count
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe wherePreparationTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'show'
    ];

    protected $with = ['ingredients'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class)->withPivot('quantity');
    }

}
