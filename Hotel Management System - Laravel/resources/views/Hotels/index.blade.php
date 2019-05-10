@extends('layouts.layout')

@section('title') Hotels @endsection
        
@section('content')
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
              <h1 class="mb-3">Hotels</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <div class="col-sm-12">
     
        <input type="text" name="search" class="form-control" id="search" class="form-control" placeholder="search Hotel Name">

  
    </div>




    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row" id="data" >
              


               @foreach($hotels as $hotel)
                <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                  <a href="{{route('hotel.showHotel',[$hotel->id])}}" class="block-5" style="background-image: url('{{asset('images/'.$hotel->img)}}');">
                    <div class="text">
                      <span class="price">${{$hotel->price}}/night</span>
                      <h3 class="heading">{{$hotel->hotel_name}}</h3>
                      <div class="post-meta">
                        <span>{{$hotel->location}}</span>
                      </div>
                      <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span></span></p>
                    </div>
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
              <div class="search-tours bg-light p-4">
                <h3>Find your tour</h3>

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

  <script>

       $(document).ready(function(){

        fetch_hotel_data();

        function fetch_hotel_data(query = '')
        {
            $.ajax({
                url:"{{route('hotel.search')}}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#data').html(data.total_data);
                }
             })
        }

        $(document).on('keyup', '#search', function(){
          var query = $(this).val();
          fetch_hotel_data(query);
         });

       });

  </script>



    
 @include('layouts.footer')
    
 @endsection

