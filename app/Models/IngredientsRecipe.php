<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientsRecipe extends Model
{
       /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function linesChecksTables()
    {
        return $this->hasMany('App\Models\LinesChecksTable', 'lines_checks_ingredient_recipe_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recipe()
    {
        return $this->hasOne('App\Models\Recipe', 'id', 'ingredient_recipe_id');
    }
    
    use HasFactory;
    protected $fillable = ['ingredient_recipe_name','ingredient_recipe_id'];
}