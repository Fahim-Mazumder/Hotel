<!--
      created by zahid Hossain
      Date: 09/12/2018
-->


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
              <h1 class="mb-3">Profile Edit</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">


            <div class="book-form agileits-login">
              <form action="#" method="post" enctype="multipart/form-data">

                 {{@csrf_field()}}
                <div class="phone_email">
                  <label>Username : </label>
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="username" value="{{$hotel->username}}" placeholder="" required="">
                  </div> 
                </div>
                <div class="phone_email phone_email1">
                  <label>Email : </label>
                  <div class="form-text">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="email" name="email" value="{{$hotel->email}}" placeholder="" required="">
                  </div>
                </div>
                <div class="phone_email">
                  <label>Password: </label>
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="password" name="password" placeholder="" required="">
                  </div> 
                </div>
                <div class="phone_email phone_email1">
                  <label>Hotel Name : </label>
                  <div class="form-text">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="text" name="hotel_name" value="{{$hotel->hotel_name}}" placeholder="" required="">
                  </div>
                </div>
                <div class="phone_email">
                  <label>Location : </label>
                  <div class="form-text">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="location" value="{{$hotel->location}}" placeholder="" required="">
                  </div> 
                </div> 
                <div class="phone_email phone_email1">
                  <label>Pool : </label>
                  <div class="form-text">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" name="pool" value="{{$hotel->pool}}" placeholder="" required="">
                  </div> 
                </div> 
                <div class="phone_email">
                  <label>Restaurent : </label>
                  <div class="form-text">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="restaurent" value="{{$hotel->restaurent}}" placeholder="" required="">
                  </div> 
                </div> 
                <div class="phone_email phone_email1">
                  <label>Price : </label>
                  <div class="form-text">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" name="price" value="{{$hotel->price}}" placeholder="" required="">
                  </div> 
                </div> 
                <div class="phone_email phone_email1">
                  <label>Upload Image : </label>
                  <div class="form-text">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="file" name="image" value=""/>
                  </div> 
                </div> 
                <div class="clear"></div>
                 
                        
                <input type="submit" value="Submit">
              </form>
            </div>

           <!--   
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">

                  <h2 style="font-size: 30px;margin-bottom: 2em">Name : <span>{{$hotel->username}}</span></h2>
                  <h2 style="font-size: 30px;margin-bottom: 2em">Email : <span>{{$hotel->email}}</span></h2>
                  <h2 style="font-size: 30px;margin-bottom: 2em">Hotel name : <span>{{$hotel->hotel_name}}</span></h2>
                  <h2 style="font-size: 30px;margin-bottom: 2em">Location name : <span>{{$hotel->location}}</span></h2>
                  <h2 style="font-size: 30px;margin-bottom: 2em">Pool : <span>{{$hotel->pool}}</span></h2>
                  <h2 style="font-size: 30px;margin-bottom: 2em">Restaurent : <span>{{$hotel->restaurent}}</span></h2>
                  <h2 style="font-size: 30px;margin-bottom: 2em">Price : <span>{{$hotel->price}}</span></h2>




                
              </div>

              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="{{route('hotel.edit',[$hotel->id])}}" class="float-right btn btn-primary">Edit Profile</a>

                <img src="{{asset('images/'.$hotel->img)}}.jpg" style="max-width: 50%">
              </div> -->

            </div>
            <div class="row mt-5">
              
            </div>
          </div>
          <!-- END -->



        </div>
      </div>
    </section>

    
 @endsection
