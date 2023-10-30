<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientsRecipes()
    {
        return $this->hasMany('App\Models\IngredientsRecipe', 'ingredient_recipe_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function linesChecksTables()
    {
        return $this->hasMany('App\Models\LinesChecksTable', 'lines_checks_name_recipe_id', 'id');
    }

    
    use HasFactory; 			
    protected $fillable=['recipe_name','week', 'recipe_code'];
}