<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('categories',CategorieController::class);
Route::prefix('categories')->group(function () {
    Route::get("/",[CategorieController::class,"index"]);
    Route::get("/{categorie}",[CategorieController::class,"show"]);
    Route::post("/cat",[CategorieController::class,"store"]); 
 });
