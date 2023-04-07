<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\MyKitchenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
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



Route::get('/register',[UserController::class,'register_index']);
Route::post('/register',[UserController::class,'register']);
Route::get('/login',[UserController::class,'login_index'])->name('login');
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);


Route::get('/', function () {
    return view('welcome');
});




Route::middleware(['auth'])->group(function () {
    Route::get('/mykitchen',[MyKitchenController::class,'index']);
    Route::get('/mykitchen/create',[MyKitchenController::class,'create']);
    Route::post('/mykitchen/create',[MyKitchenController::class,'store']);
    Route::get('/mykitchen/recipe/{id}',[MyKitchenController::class,'edit']);
    Route::put('/mykitchen/recipe/{id}',[MyKitchenController::class,'update']);
    Route::delete('/mykitchen/recipe/delete/{id}',[MyKitchenController::class,'delete']);

    Route::get('/category/create',[CategoryController::class,'create']);
    Route::post('/category/create',[CategoryController::class,'store']);

    Route::get('/recipes',[RecipeController::class,'index']);
    Route::get('/recipes/{id}',[RecipeController::class,'view']);

    Route::get('/stories',[BlogController::class,'index']);
    Route::get('/stories/me',[BlogController::class,'my_story']);
    Route::get('/stories/create',[BlogController::class,'create']);
    Route::post('/stories/create',[BlogController::class,'store']);

    Route::get('/profile',[ProfileController::class,'index']);
    Route::put('/profile/update/{id}',[ProfileController::class,'update']);
    Route::get('/profile/create',[ProfileController::class,'create']);
    Route::post('/profile/create',[ProfileController::class,'store']);

    Route::get('/chef',[ChefController::class,'index']);
    Route::get('/chef/recipes/{id}',[ChefController::class,'view']);
});

