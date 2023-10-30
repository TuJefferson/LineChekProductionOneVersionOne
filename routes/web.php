<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');




Route::get('/reportsline', [App\Http\Controllers\ReportsLineController::class, 'reportsline'])->name('reportsline');

Route::resource('recipies', App\Http\Controllers\CarrerasController::class);
/* ================================ RECIPES ================================ */
Route::get('/recipies', [App\Http\Controllers\RecipeController::class, 'recipies'])->name('recipies');
Route::get('/Newrecipie', [App\Http\Controllers\RecipeController::class, 'Newrecipie'])->name('Newrecipie');
Route::get('/editRecipie/{id}', [App\Http\Controllers\RecipeController::class, 'editRecipie'])->name('editRecipie');
Route::post('/updateRecipie/{id}', [App\Http\Controllers\RecipeController::class, 'updateRecipie'])->name('updateRecipie');
Route::post('/recipeDestroy/{id}', [App\Http\Controllers\RecipeController::class, 'recipeDestroy'])->name('recipeDestroy');
Route::post('/addrecipies', [App\Http\Controllers\RecipeController::class, 'addrecipies'])->name('addrecipies');
Route::get('/detailRecipe/{id}', [App\Http\Controllers\RecipeController::class, 'detailRecipe'])->name('detailRecipe');

/* ================================ INGREDIENTS AND RECIPES ================================ */

Route::get('/ingredientsAndRecipes', [App\Http\Controllers\IngredientsRecipeController::class, 'ingredientsAndRecipes'])->name('ingredientsAndRecipes');
Route::get('/addingredient/{id}', [App\Http\Controllers\IngredientsRecipeController::class, 'addingredient'])->name('addingredient');
Route::post('/saveIngredient', [App\Http\Controllers\IngredientsRecipeController::class, 'saveIngredient'])->name('saveIngredient');
Route::get('/detailIngredient/{id}', [App\Http\Controllers\IngredientsRecipeController::class, 'detailIngredient'])->name('detailIngredient');
Route::get('/editIngredientRecipie/{id}', [App\Http\Controllers\IngredientsRecipeController::class, 'editIngredientRecipie'])->name('editIngredientRecipie');


/* ================================ LINE CHECK ================================ */

Route::get('/verificationline', [App\Http\Controllers\LineCheckController::class, 'verificationline'])->name('verificationline');
Route::get('/runverificationline/{id}', [App\Http\Controllers\LineCheckController::class, 'runverificationline'])->name('runverificationline');
Route::get('/verificationline', [App\Http\Controllers\LineCheckController::class, 'verificationline'])->name('verificationline');
Route::post('/verificationlineCheck', [App\Http\Controllers\LineCheckController::class, 'verificationlineCheck'])->name('verificationlineCheck');
Route::post('/saveVerification', [App\Http\Controllers\LineCheckController::class, 'saveVerification'])->name('saveVerification');


/* ================================ REPORTS  ================================ */

Route::get('/reportsRecipies', [App\Http\Controllers\RecipeController::class, 'reportsRecipies'])->name('reportsRecipies');
Route::get('/reportsRecipiesAndIngredients', [App\Http\Controllers\IngredientsRecipeController::class, 'reportsRecipiesAndIngredients'])->name('reportsRecipiesAndIngredients');
Route::get('/reportsVerificationLIne', [App\Http\Controllers\LineCheckController::class, 'reportsVerificationLIne'])->name('reportsVerificationLIne');