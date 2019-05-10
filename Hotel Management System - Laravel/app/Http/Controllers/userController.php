<?php

/**
      created by zahid Hossain
      Date: 13/12/2018
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class userController extends Controller
{
    public function profile()
    {
    	$user = session('user');
        $users = User::where('email', '=', $user)
                        ->get();

        return view('User.profile')->with('users',$users);
    }

    public function store(Request $request)
    {
    	
    }
    public function edit(Request $request,$id)
    {
    	$user = User::find($id);

    	return view('User.edit')->with('user',$user);
    }

    public function update(Request $request,$id)
    {
    	$user = User::find($id);
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->address=$request->address;
        $user->mobile=$request->mobile;

        if($request->hasfile('image')){
            $file=$request->file('image');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $user->img=$file->getClientOriginalName();
        }

        $user->save();

        return redirect()->route('user.profile');
    }
}
