<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RecipeIngredientUnit;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Unit extends Model
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
