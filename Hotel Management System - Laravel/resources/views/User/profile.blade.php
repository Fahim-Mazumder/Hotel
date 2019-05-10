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
              <h1 class="mb-3">Hotels</h1>
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

              @foreach($users as $user)
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">

                <h2 style="font-size: 30px;margin-bottom: 2em">Name : <span>{{$user->username}}</span></h2>
                <h2 style="font-size: 30px;margin-bottom: 2em">Email : <span>{{$user->email}}</span></h2>
                <h2 style="font-size: 30px;margin-bottom: 2em">Mobile : <span>{{$user->mobile}}</span></h2>
                <h2 style="font-size: 30px;margin-bottom: 2em">Address : <span>{{$user->address}}</span></h2>
                 

              </div>

              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="{{route('user.edit',[$user->id])}}" class="float-right btn btn-primary">Edit Profile</a>

                <img src="{{asset('images/'.$user->img)}}" style="max-width: 50%">
              </div>
              @endforeach

            </div>
            <div class="row mt-5">
              
            </div>
          </div>
          <!-- END -->

          


        </div>
      </div>
    </section>

    
 @endsection
