<?php

/**
      created by zahid Hossain
      Date: 13/12/2018
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;

use App\User;
use App\Hotel;
use App\Admin;

class loginController extends Controller
{
    public function index()
    {
    	return view('login.user');
    }

    public function verify(userRequest $request)
    {
    	$email=$request->email;
    	$password=$request->password;

    	$user=User::where('email',$email)
    			  ->where('password',$password)
    			  ->first();

    	if($user!=null)
    	{
    		$request->session()->put('user',$email);
    		return redirect()->route('home.index');
    	}
    	else
    	{
    		$request->session()->flash('message','Invalid email or password');
    		return redirect()->route('login.index');
    	}

    }

    public function hotel()
    {
    	return view('login.hotel');
    }

    public function hotelVerify(Request $request)
    {
    	$email=$request->email;
    	$password=$request->password;

    	$hotel=Hotel::where('email',$email)
    			  ->where('password',$password)
    			  ->first();

    	if($hotel!=null)
    	{
    		$request->session()->put('hotel',$email);
    		return redirect()->route('home.index');
    	}
    	else
    	{
    		$request->session()->flash('message','Invalid email or password');
    		return redirect()->route('login.hotel');
    	}

    }

    public function admin()
    {
        return view('login.admin');
    }
    public function adminVerify(Request $request)
    {
        $email=$request->email;
        $password=$request->password;

        $user=Admin::where('email',$email)
                  ->where('password',$password)
                  ->first();

        if($user!=null)
        {
            $request->session()->put('admin',$email);
            return redirect()->route('admin.index');
        }
        else
        {
            $request->session()->flash('message','Invalid email or password');
            return redirect()->route('login.admin');
        }

    }

}
