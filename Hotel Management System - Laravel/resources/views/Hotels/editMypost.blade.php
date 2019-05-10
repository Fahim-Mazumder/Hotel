<!--
      created by zahid Hossain
      Date: 11/12/2018
-->


@extends('Layouts.layout')

@section('title') Post a package @endsection
        
@section('content')

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url({{asset('images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="#"></a></span> <span></span></p>
              <h1 class="mb-3">Booking</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <div class="bg-agile">
  <div class="book-appointment">
  <h2>Book Your 
Seat Right Now</h2>
            <div class="book-form agileits-login">
              <form action="" method="post" enctype="multipart/form-data">

                {{@csrf_field()}}

                  <input type="hidden" name="hotel_id" placeholder="" readonly value="{{$post->id}}" required="">


                <div class="phone_email">
                  <label>Hotel name : </label>
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="hotel_name" placeholder="" readonly value="{{$post->hotel_name}}" required="">
                  </div> 
                </div>
                <div class="phone_email phone_email1">
                  <label>Location : </label>
                  <div class="form-text">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="email" name="location" placeholder="" readonly value="{{$post->location}}" required="">
                  </div>
                </div>
                
                <div class="phone_email">
                  <label>Single Room : </label>
                  <div class="form-text">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="singleRoom" value="{{$post->singleRoom}}" placeholder="" required="">
                  </div> 
                </div> 
                <div class="phone_email phone_email1">
                  <label>Two Person Room : </label>
                  <div class="form-text">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" name="twoPerRoom" value="{{$post->twoPerRoom}}" placeholder=""  required="">
                  </div> 
                </div> 

                <div class="phone_email">
                  <label>Four Person Room : </label>
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="fourPerRoom" value="{{$post->fourPerRoom}}" placeholder=""  required="">
                  </div> 
                </div>
                <div class="phone_email phone_email1">
                  <label>wifi : </label>
                  <div class="form-text">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="text" name="wifi" value="{{$post->wifi}}" placeholder="" required="">
                  </div>
                </div>
                 <div class="phone_email">
                  <label>Price : </label>
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="price" value="{{$post->price}}" placeholder=""   required="">
                  </div> 
                </div>
                <div class="phone_email phone_email1">
                  <label>Image : </label>
                  <div class="form-text">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="file" name="image" value="{{$post->img}}"/>
                  </div>
                </div>


                <div class="clear"></div>
                
                        
                <input type="submit" value="Post Package">
              </form>
            </div>

    </div>
   </div>
    
 @endsection
