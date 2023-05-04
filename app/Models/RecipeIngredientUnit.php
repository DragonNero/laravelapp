<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RecipeIngredientUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class);
        return $this->belongsToMany(Unit::class);
        return $this->belongsToMany(Recipe::class);
    }
}
