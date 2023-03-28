<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{


    public function index()
    {
        return view('blog.index');
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;

        Blog::create($data);
    }
}