<?php

/**
      created by zahid Hossain
      Date: 13/12/2018
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
	public function index(Request $request)
	{
		$request->session()->flush();
  	  	return redirect()->route('login.index');
	}
    
}
