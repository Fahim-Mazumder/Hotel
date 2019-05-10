@extends('layouts.layout')

@section('title') Tour @endsection
        
@section('content')
      
    
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Hotels</span></p>
              <h1 class="mb-3">Hotels</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->
    <section class="ftco-section">

    <div class="col-sm-12">

    <div class="container">
        
        <div class="row">
             <table border="1" width="100%" style="border: 1px solid black">
                    <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Hotel name</th>
                        <th>Location</th>
                        <th>Pool</th>
                        <th>Price</th>
                        <th>Operation</th>

                        
                    </tr>

                    @foreach($hotels as $hotel)
                    <tr>
                        <td>{{$hotel->id}}</td>
                        <td>{{$hotel->username}}</td>
                        <td>{{$hotel->email}}</td>
                        <td>{{$hotel->hotel_name}}</td>
                        <td>{{$hotel->location}}</td>
                        <td>{{$hotel->pool}}</td>
                        <td>{{$hotel->price}}</td>
                        <td><a href="{{route('hotelPost.postDelete',[$hotel->id])}}">Delete</a></td>
                    </tr>
                    @endforeach

            </table>
        </div>

    </div>
        
        

    </div>

</section>
   
     <p>{{session('message')}}</p>





 @endsection