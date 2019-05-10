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
          <div class="col-lg-8">
            <div class="row">

              @foreach($hotels as $hotel)
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('{{asset('images/'.$hotel->img)}}');">
                  <div class="text">
                    <span class="price">${{$hotel->price}}/night</span>
                    <h3 class="heading">{{$hotel->package_name}}</h3>
                    <div class="post-meta">
                      <span>{{$hotel->location}}</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>{{$hotel->hotel_name}}</span></p>
                  </div>
                  @if(session('user')!=null)
                    <a href="{{route('hotelPost.book',[$hotel->id])}}" class="btn btn-primary float-right">Book</a>
                  @endif
                </a>
              </div>
              @endforeach

            </div>
            <div class="row mt-5">
              
            </div>
          </div>
          <!-- END -->

          <div class="col-lg-4 sidebar">
            <div class="sidebar-box ftco-animate">
              
            </div>

            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Tours <span>(12)</span></a></li>
                <li><a href="#">Hotels <span>(22)</span></a></li>
                <li><a href="#">Cruises <span>(37)</span></a></li>
                <li><a href="#">Restaurant <span>(42)</span></a></li>
                <li><a href="#">Destination <span>(14)</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>


        </div>
      </div>
    </section>

 @include('layouts.footer')
    
 @endsection
