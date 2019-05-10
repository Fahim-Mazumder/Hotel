<?php
/**
      created by zahid Hossain
      Date: 09/12/2018
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
    	return view('Home.index');
    }
}
