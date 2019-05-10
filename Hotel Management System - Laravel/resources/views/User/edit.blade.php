@extends('layouts.layout')

@section('title') Hotels @endsection
        
@section('content')
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url({{asset('images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
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

<!--background-->
<h1> User Signup</h1>
    <div class="bg-agile">
  <div class="book-appointment">
  <h2>Choice For 
Holiday Homes</h2>
            <div class="book-form agileits-login">
              <form action="" method="post" enctype="multipart/form-data">

                {{@csrf_field()}}
                <div class="phone_email">
                  <label>Full name : </label>
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="username" placeholder="" value="{{$user->username}}" required="">
                  </div> 
                </div>
                <div class="phone_email phone_email1">
                  <label>Email : </label>
                  <div class="form-text">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="email" name="email" placeholder="" value="{{$user->email}}" required="">
                  </div>
                </div>
                <div class="phone_email ">
                  <label>Password : </label>
                  <div class="form-text">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="password" name="password" placeholder="" required="">
                  </div>
                </div>
                <div class="phone_email phone_email1">
                  <label>Phone number : </label>
                  <div class="form-text">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="mobile" placeholder="" value="{{$user->password}}" required="">
                  </div> 
                </div> 
                <div class="phone_email">
                  <label>Address : </label>
                  <div class="form-text">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" name="address" placeholder="" value="{{$user->address}}" required="">
                  </div> 
                </div> 
                <div class="phone_email phone_email1">
                  <label>Upload Image : </label>
                  <div class="form-text">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="file" name="image" value="{{$user->img}}"/>
                  </div> 
                </div> 
                <div class="clear"></div>
                
                        
                <input type="submit" value="Reservation">
              </form>
            </div>

    </div>
   </div>
    
 @include('layouts.footer')
    
 @endsection

