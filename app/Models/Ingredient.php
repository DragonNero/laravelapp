<?php

namespace App\Models;

use App\Models\RecipeIngredientUnit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function recipeIngredientUnits(): BelongsToMany
    {
        return $this->belongsToMany(RecipeIngredientUnit::class);
    }
}
