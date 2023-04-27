<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
