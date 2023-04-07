<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;

class MyKitchenController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $query = Recipe::where('user_id',$user_id)->paginate(4);
        return view('mykitchen.index',['recipes'=>$query]);
    }

    public function create()
    {
        $category = Category::all();
        return view('mykitchen.create',['category'=>$category]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'recipe' => 'required',
            'ingredients' => 'required',
            'category_id' => 'required',

        ]);
        $image = $request->file('img');
        $filename = time() .'.'. $image->getClientOriginalExtension();
        $image->move(public_path('images'),$filename);

        $data['user_id'] = auth()->user()->id;
        $data['img'] = $filename;
        $data['copy'] = 0;
        Recipe::create($data);
        return redirect('mykitchen/create');
    }

    public function edit($id)
    {
        $user_id = auth()->user()->id;
        $query = Recipe::where('user_id',$user_id)->where('id',$id)->get();
        return view('mykitchen.edit',['recipes'=>$query]);
    }

    public function update(Request $request,Recipe $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'recipe' => 'required',

        ]);
        $data['copy'] = 0;
        if($id->user_id == auth()->user()->id)
        {
            $id->update($data);
            return back();
        }

    }

    public function delete(Recipe $id)
    {
        if($id->user_id == auth()->user()->id)
        {
           $id->delete();
        }
    }
}
