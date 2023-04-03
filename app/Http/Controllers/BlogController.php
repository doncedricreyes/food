<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{


    public function index()
    {
        $data = Blog::with('users')->get();
        return view('blog.index',['blog'=>$data]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;

        Blog::create($data);
    }

    public function my_story()
    {
        $user_id = auth()->user()->id;
        $blog = Blog::where('user_id',$user_id)->get();

        return view('blog.me',['blog'=>$blog]);
    }
}
