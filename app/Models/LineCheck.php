<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineCheck extends Model
{
    protected $table = 'lines_checks_table';

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingredientsRecipe()
    {
        return $this->hasOne('App\Models\IngredientsRecipe', 'id', 'lines_checks_ingredient_recipe_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recipe()
    {
        return $this->hasOne('App\Models\Recipe', 'id', 'lines_checks_name_recipe_id');

    }
    

      public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');

    }
     use HasFactory;
     
      protected $fillable = ['user_id','shift','line_number','date', 'lines_checks_name_recipe_id', 'lines_checks_ingredient_recipe_id', 'available_ingredient','temperature','weight','comment'];


    
   
}