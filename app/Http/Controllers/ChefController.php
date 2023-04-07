<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
class ChefController extends Controller
{
    public function index()
    {

        $users = Profile::with('users')->get();
        return view('chef.index',['users'=>$users]);
    }

    public function view($id)
    {
        $recipes = Recipe::where('user_id',$id)->where('copy','0')->get();
        return view('chef.view',['recipes'=>$recipes]);
    }
}
