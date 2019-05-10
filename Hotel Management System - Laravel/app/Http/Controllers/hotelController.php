<?php

/**
      created by zahid Hossain
      Date: 09/12/2018
*/

namespace App\Http\Controllers;

use App\Hotel;
use App\Hotel_post;
use Illuminate\Http\Request;


class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hotels=Hotel::take(8)
                ->get();
        
    	return view('Hotels.index')->with('hotels',$hotels);

       // return view('Hotels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $hotel)
    {
        $hotel = session('hotel');
        $hotels = Hotel::where('email', '=', $hotel)
                        ->get();

        return view('Hotels.profile')->with('hotels',$hotels);
    }
    public function showHotel(Request $request,$id)
    {
      $hotel=Hotel::find($id);
      return view('Hotels.showHotel')->with('hotel',$hotel);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $hotel = Hotel::find($id);

        return view('Hotels.profileEdit')->with('hotel',$hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate(Request $request,$id)
    {
        $hotel = Hotel::find($id);
        $hotel->username = $request->username;
        $hotel->email = $request->email;
        $hotel->password = $request->password;
        $hotel->hotel_name = $request->hotel_name;
        $hotel->location = $request->location;
        $hotel->pool = $request->pool;
        $hotel->price = $request->price;
        $hotel->restaurent = $request->restaurent;

        if($request->hasfile('image')){
            $file=$request->file('image');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $hotel->img=$file->getClientOriginalName();
        }
        $hotel->save();

        return redirect()->route('hotel.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotel)
    {
        //
    }

    public function search(Request $request)
    {
        // $location = $request->location;
        // $price = $request->price;

        // $hotels = Hotel::where('location', '=', $location)
        //                 ->get();

        // return view('Hotels.show')->with('hotels',$hotels);


        if($request->ajax())
        {
            $output = "";
            $query = $request->get('query');
            if($query != '')
            {
                $data = Hotel::where('hotel_name', '=', $query)
                            ->get();
            }
            else
            {
                $data = Hotel::all();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output.= "
                        <div class='col-md-6 col-lg-6 mb-4 ftco-animate'>
                          <a href='#' class='block-5' style='background-image: url('');'>
                            <div class='text'>
                              <span class='price'>$".$row->price."/night</span>
                              <h3 class='heading'>".$row->hotel_name."</h3>
                              <div class='post-meta'>
                                <span>".$row->location."</span>
                              </div>
                              <p class='star-rate'><span class='icon-star'></span><span class='icon-star'></span><span class='icon-star'></span><span class='icon-star'></span><span class='icon-star-half-full'></span> <span>500 reviews</span></p>
                            </div>
                          </a>
                         </div>
                    ";
                }
            }
            else
            {
                $output .= '<h2> Data not found </h2>';
            }

            $data = array(
                 'total_data' => $output
            );

            echo json_encode($data);
            Log::info('This is some useful information.');


        }


        




    }
    public function autocomplete(Request $request)
    {
        $term = $request->term;
        $hotels = Hotel::where('location','=',$item)
                        ->get();
    }

    public function myPosts(Request $request)
    {
        $email = session()->get('hotel');

        $hotel = Hotel::where('email','=',$email)
                        ->first();

        $hotel_id = $hotel->id;

        $hotel_post = Hotel_post::where('hotel_id','=',$hotel_id)
                    ->get();

        return view('Hotels.myPosts')->with('posts',$hotel_post);
    }

    public function editMypost(Request $request,$id)
    {
        $post = Hotel_post::find($id)
                        ->first();
        return view('Hotels.editMypost')->with('post',$post);
    }

    public function postMyEditPost(Request $request,$id)
    {
        $post = Hotel_post::find($id);
        $post->hotel_id=$request->hotel_id;
        $post->hotel_name=$request->hotel_name;
        $post->location=$request->location;
        $post->singleRoom=$request->singleRoom;
        $post->twoPerRoom=$request->twoPerRoom;
        $post->fourPerRoom=$request->fourPerRoom;
        $post->wifi=$request->wifi;
        $post->price=$request->price;

        if($request->hasfile('image')){
            $file=$request->file('image');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $post->img=$file->getClientOriginalName();
        }

        $post->save();

        return redirect()->route('hotel.myPosts');
    }

    public function package(Request $request)
    {
        $post = Hotel::where('email','=',session()->get('hotel'))
                        ->first();

        return view('Hotels.postPackage')->with('post',$post);
    }

    public function packagePost(Request $request)
    {

        $post = new Hotel_post();
        $post->hotel_id=$request->hotel_id;
        $post->hotel_name=$request->hotel_name;
        $post->package_name=$request->package_name;
        $post->location=$request->location;
        $post->singleRoom=$request->singleRoom;
        $post->twoPerRoom=$request->twoPerRoom;
        $post->fourPerRoom=$request->fourPerRoom;
        $post->wifi=$request->wifi;
        $post->price=$request->price;

        if($request->hasfile('image')){
            $file=$request->file('image');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $post->img=$file->getClientOriginalName();
        }

        $post->save();

        return redirect()->route('hotel.myPosts');

    }
}
