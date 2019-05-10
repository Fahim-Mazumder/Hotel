<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hotel;
use App\User;
use App\Hotel_post;
use App\Hotel_book;

class adminController extends Controller
{
    public function index()
    {
    	$dhakas = Hotel_post::where('location','=','dhaka')
    			->get();
    	$sylhets = Hotel_post::where('location','=','sylhet')
    			->get();
    	$dhaka = $dhakas->count();
    	$sylhet = $sylhets->count();

    	return view('Admin.index')->with('dhaka',$dhaka)->with('sylhet',$sylhet);
    }

    public function hotel(Request $request)
    {
    	$hotels = Hotel::all();

    	return view('Admin.hotel')->with('hotels',$hotels);
    }

    public function user(Request $request)
    {
    	$users = User::all();

    	return view('Admin.user')->with('users',$users);
    }
}
