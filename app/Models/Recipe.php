<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RecipeIngredientUnit;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'image_path',
        'prep_time',
        'cook_time',
        'rest_time',
        'servings',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function recipeIngredientUnit(): BelongsToMany
    {
        return $this->belongsToMany(RecipeIngredientUnit::class);
    }
}
