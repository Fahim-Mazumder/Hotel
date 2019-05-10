<?php

/**
      created by zahid Hossain
      Date: 09/12/2018
*/

namespace App\Http\Controllers;

use App\Hotel;
use App\User;
use App\Hotel_post;
use App\Hotel_book;

use Illuminate\Http\Request;

class hotelPostController extends Controller
{
    public function index(Request $request)
    {
    	$hotels=Hotel_post::all();
       
    	return view('HotelPost.index')->with('hotels',$hotels);
    }

    public function search(Request $request)
    {
    	$location = $request->location;
    	$checkIn = $request->checkIn;
    	$checkOut = $request->checkOut;
    	$person = $request->person;
    	$singleRoom = $request->singleRoom;
    	$twoPerRoom = $request->twoPerRoom;
    	$fourPerRoom = $request->fourPerRoom;

    	

    	$hotels = Hotel_post::where([['location', '=', $location],['singleRoom', '>=', $singleRoom]])
                          ->orWhere([['location', '=', $location],['twoPerRoom', '>=', $twoPerRoom]])
                          ->orWhere([['location', '=', $location],['fourPerRoom','>=', $fourPerRoom]])
    					  ->get();


        



    	return view('HotelPost.show')->with('hotels',$hotels);
    }

    public function book(Request $request,$id)
    {
    	$book = Hotel_post::find($id);

        $email = session()->get('user');
        $user = User::where('email', '=', $email)
                    ->first();

    	return view('HotelPost.book')->with('user',$user)->with('book',$book);
    }

    public function postDelete(Request $request,$id)
    {
        Hotel_post::destroy($id);

        return redirect()->route('hotel.myPosts');
    }

    public function bookStore(Request $request,$id)
    {

        $single=$request->single_room;
        $twoPerson=$request->two_person_room;
        $fourPerson=$request->four_person_room;

        $room=$single+$twoPerson+$fourPerson;


        $book = new Hotel_book();
        $book->post_id= $request->post_id;
        $book->hotel_id= $request->hotel_id;
        $book->hotel_name= $request->hotel_name;
        $book->location= $request->location;
        $book->user_id= $request->user_id;
        $book->user_name= $request->username;
        $book->email= $request->email;
        $book->mobile= $request->mobile;
        $book->address= $request->address;
        $book->check_in= $request->check_in;
        $book->check_out= $request->check_out;
        $book->room= $room;
        $book->person= $request->person;
        $book->cost= $request->total_price;

        $book->save();

        return redirect()->route('hotelPost.index');

    }
}
