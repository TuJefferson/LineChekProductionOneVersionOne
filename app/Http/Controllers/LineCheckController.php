<?php

namespace App\Http\Controllers;

use App\Models\IngredientsRecipe;
use App\Models\Recipe;
use App\Models\User;
use App\Models\LineCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LineCheckController extends Controller
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
        
    }

      public function reportsVerificationLIne()
    {
         $lineCheck = LineCheck::all();
        return view('AdminForProduction.ReportsModule.reportsVerificationLIne', compact('lineCheck'));
    }

       public function verificationline()
       
    {  $recipes = Recipe::all();
       $ingredients = IngredientsRecipe::all();
       return view('AdminForProduction.VerificationLine.verificationLine', compact('recipes' ,'ingredients'));
    }


    public function runverificationline($id)
    {
        $recipe=Recipe::find($id);
        $ingredientsRecipe = IngredientsRecipe::where('ingredient_recipe_id', $recipe->id)->get();
        $user = Auth::user();
        return view('AdminForProduction.VerificationLine.runVerificationLine', compact('recipe','ingredientsRecipe','user'));
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



public function saveVerification(Request $request)
{
    foreach ($request->all('user_id') as $key => $registro) {
        foreach ($registro as $key => $re) {
            $registros[$key] = [ 
                'id' => $re
            ];
        }
    }

    for ($i=0; $i < count($registros); $i++) 
    {

        if (!empty( $request->input('available_ingredient')[$i] )) {

            if ($request->input('available_ingredient')[$i] == $registros[$i]['id']) {
                $available_ingredient = 1; 
            }else {
                $available_ingredient = 0; 
            }
        
        } else {
            $available_ingredient = 0; 
        }

        $userData = [
            'user_id' => auth()->user()->id,
            'shift' => $request->input('shift'),
            'line_number' => $request->input('line_number'),
            'date' => $request->input('date'),
            'lines_checks_name_recipe_id' => $request->input('lines_checks_name_recipe_id')[$i],
            'lines_checks_ingredient_recipe_id' => $request->input('lines_checks_ingredient_recipe_id')[$i],
            'available_ingredient' => $available_ingredient,
            'temperature' => $request->input('temperature')[$i],
            'weight' => $request->input('weight')[$i],
            'comment' => $request->input('comment'),
        ];

        LineCheck::create($userData);

    }
 
    return redirect()->route('verificationline')->with('success', 'Verification data saved successfully');
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
     * @param  \App\Models\LineCheck  $lineCheck
     * @return \Illuminate\Http\Response
     */
    public function show(LineCheck $lineCheck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LineCheck  $lineCheck
     * @return \Illuminate\Http\Response
     */
    public function edit(LineCheck $lineCheck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LineCheck  $lineCheck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LineCheck $lineCheck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LineCheck  $lineCheck
     * @return \Illuminate\Http\Response
     */
    public function destroy(LineCheck $lineCheck)
    {
        //
    }
}