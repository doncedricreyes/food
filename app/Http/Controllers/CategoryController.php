<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:categories'
        ]);

        Category::create($data);
        return back();
    }
}
