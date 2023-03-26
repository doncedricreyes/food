<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipe = Recipe::all();
        return view('recipe.index',['recipes'=>$recipe]);
    }

    public function view($id)
    {
        $recipe = Recipe::where('id',$id)->get();
        return view('recipe.view',['recipes'=>$recipe]);
    }
}
