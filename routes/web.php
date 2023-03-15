<?php

use App\Http\Controllers\MyKitchenController;
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

Route::get('/mykitchen',[MyKitchenController::class,'index']);
Route::get('/mykitchen/create',[MyKitchenController::class,'create']);
Route::post('/mykitchen/create',[MyKitchenController::class,'store']);