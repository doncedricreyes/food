<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{

    public function index()
    {
        $user_id = auth()->user()->id;
        $profile = Profile::where('user_id',$user_id)->get();

        if($profile->isEmpty()){
            return view('profile.create');
        }
        else{
            return view('profile.index',['profile'=>$profile]);
        }

    }

    public function update($id, Request $request)
    {
        $user_id = auth()->user()->id;

        if($id == $user_id){
        $profile = Profile::where('user_id',$id)->first();
        }
        if($profile)
        {
            $data = $request->validate([

                'pic' => 'file|mimes:jpeg,png,jpg,gif,svg',
            ]);
            if($request->hasFile('pic')){
            $image = $request->file('pic');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $data['pic'] = $filename;
            }

            $data['gender'] = $request->gender;
            $data['birthday'] = $request->birthday;
            $data['bio'] = $request->bio;
            $data['education'] = $request->education;

            $profile->update($data);

            $user = User::where('id',$id)->first();
            $user_data = $request->validate([
                'name' => 'required'
            ]);
            $user->update($user_data);

            return redirect('/profile');
        }
        else{

        }
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;



        if($request->hasFile('pic')){
        $image = $request->file('pic');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);

        $data['pic'] = $filename;
        }
        $data['user_id'] = $user_id;
        $data['gender'] = $request->gender;
        $data['birthday'] = $request->birthday;
        $data['bio'] = $request->bio;
        $data['education'] = $request->education;


        Profile::create($data);
        return redirect('/profile');
    }
}
