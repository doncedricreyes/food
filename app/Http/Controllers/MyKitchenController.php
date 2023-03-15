<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
class MyKitchenController extends Controller
{
    public function index()
    {
        return view('mykitchen.index');
    }

    public function create()
    {
        return view('mykitchen.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'recipe' => 'required',

        ]);
        $data['user_id'] = '1';
        $query = Recipe::create($data);
        return redirect('mykitchen/create');
    }
}
