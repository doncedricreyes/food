<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;


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
                'first_name' => 'required',
                'last_name' => 'required',

            ]);

            $image = $request->file('pic');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);



            $data['middle_name'] = $request->middle_name;
            $data['gender'] = $request->gender;
            $data['birthday'] = $request->birthday;
            $data['bio'] = $request->bio;
            $data['education'] = $request->education;
            $data['pic'] = $filename;
            $profile->update($data);
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

        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $image = $request->file('pic');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);

        $data['middle_name'] = $request->middle_name;
        $data['user_id'] = $user_id;
        $data['gender'] = $request->gender;
        $data['birthday'] = $request->birthday;
        $data['bio'] = $request->bio;
        $data['education'] = $request->education;
        $data['pic'] = $filename;

        Profile::create($data);
        return redirect('/profile');
    }
}
