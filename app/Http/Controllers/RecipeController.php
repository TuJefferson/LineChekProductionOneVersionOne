<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\IngredientsRecipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
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
        $recipes = Recipe::all();
       return view('AdminForProduction.Recipies.recipies', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recipies()
    {  $recipes = Recipe::all();
        
       return view('AdminForProduction.Recipies.recipies', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
       public function Newrecipie()
    {
       return view('AdminForProduction.Recipies.addRecipe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addrecipies(Request $request)
    {
         
        $recipe = new Recipe($request->input());
        $recipe->saveOrFail();  
        return redirect('recipies');
                
    }

   


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    
    
        public function reportsRecipies()
    {
         $recipes = Recipe::all();
        return view('AdminForProduction.ReportsModule.reportsRecipe', compact('recipes'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

        public function editRecipie($id)
    {
        $recipe=Recipe::find($id);
        return view('AdminForProduction.Recipies.editRecipie', compact('recipe'));
    }
    

        public function detailRecipe($id)
    {
        $recipe=Recipe::find($id);
        return view('AdminForProduction.Recipies.detailRecipe', compact('recipe'));
    }
    

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
     
    }


    public function updateRecipie(Request $request, $id)
    {   
        $recipie = Recipe::find($id);
        $recipie->update($request->all());
        // $update->recipe_name = $request->recipe_name;
        // $update->week=$request->week;
        // $update->recipe_code=$request->recipe_code;
        // $update->save();
        // return redirect('recipes');
        return redirect()->route('recipies');
    }
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function recipeDestroy(Request $request, $id)
    {   
        $recipie = Recipe::find($id);
        $recipe->delete();
        return redirect()->route('recipes')->whit('success', 'Recipe data delete successfully');
    }
}