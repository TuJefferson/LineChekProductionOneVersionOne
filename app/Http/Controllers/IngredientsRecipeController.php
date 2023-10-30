<?php

namespace App\Http\Controllers;

use App\Models\IngredientsRecipe;
use App\Models\Recipe;
use Illuminate\Http\Request;

class IngredientsRecipeController extends Controller

{

 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


   public function ingredientsAndRecipes()
    {  $recipes = Recipe::all();
       $ingredients = IngredientsRecipe::all();
       return view('AdminForProduction.IngredientsRecipe.ingredientsRecipe', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              
    }

      public function addingredient($id)
    {
        $recipe=Recipe::find($id);
        $ingredientsRecipe = IngredientsRecipe::where('ingredient_recipe_id',$id)->get();      
        return view('AdminForProduction.IngredientsRecipe.addIngredient', compact('recipe','ingredientsRecipe'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IngredientsRecipe  $ingredientsRecipe
     * @return \Illuminate\Http\Response
     */
    public function show(IngredientsRecipe $ingredientsRecipe)
    {
        //
    }


       public function reportsRecipiesAndIngredients()
    { 
       $ingredients = IngredientsRecipe::all();
        return view('AdminForProduction.ReportsModule.reportsRecipiesAndIngredients', compact('ingredients'));
  
    }

          public function detailIngredient($id)
    {
        $recipe = Recipe::find($id);
        $ingredientsRecipe = IngredientsRecipe::where('ingredient_recipe_id',$id)->get();  
        return view('AdminForProduction.IngredientsRecipe.detailIngredient', compact('recipe','ingredientsRecipe'));
    }
    

          public function editIngredientRecipie($id)
    {
        $recipe=Recipe::find($id);
        $ingredientsRecipe = IngredientsRecipe::where('ingredient_recipe_id',$id)->get();  
        return view('AdminForProduction.IngredientsRecipe.editIngredientRecipie', compact('recipe','ingredientsRecipe'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IngredientsRecipe  $ingredientsRecipe
     * @return \Illuminate\Http\Response
     */
    public function edit(IngredientsRecipe $ingredientsRecipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IngredientsRecipe  $ingredientsRecipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IngredientsRecipe $ingredientsRecipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IngredientsRecipe  $ingredientsRecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngredientsRecipe $ingredientsRecipe)
    {
        //
    }

    public function saveIngredient(Request $request)
    {
        // Aquí puedes acceder a los datos del formulario a través del objeto $request
        $ingredientes = $request->input('ingredient_recipe_name');
        $id = $request->input('id');

        foreach ($ingredientes as $name) {
            IngredientsRecipe::create([
                'ingredient_recipe_id' => $id,
                'ingredient_recipe_name' => $name
            ]);
        }

        return true;

    }
}