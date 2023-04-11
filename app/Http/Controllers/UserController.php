<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register_index()
    {
        if(auth()->check())
        {
            return redirect('/');
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);
        $data['password'] = bcrypt($data['password']);
        $data['role'] = 'user';
        $data['status'] = 'active';

        $query = User::create($data);
        auth()->login($query);

        return redirect('/profile/create');
    }

    public function login_index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($data))
        {
            return redirect('/');
        }
        else{
            return redirect('/login')->withErrors(["login_failed" => "Invalid email or password!"]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
