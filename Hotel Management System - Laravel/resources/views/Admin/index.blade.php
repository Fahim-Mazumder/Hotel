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
              <h1 class="mb-3">ADMIN PANEL</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->
    <section class="ftco-section">


    </section>
   
     <p>{{session('message')}}</p>

<div class="container">
  <div class="row">
    <a href="{{route('admin.hotel')}}" class="btn btn-primary">Hotel</a>
    <a href="" class="btn btn-primary">Hotel Posts</a>
    <a href="{{route('admin.user')}}" class="btn btn-primary">User</a>
  </div>
</div>


<div class="container">
  

<div class="row">

  <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
          ['Location', 'post'],

          <?php
            $location = ['Dhaka','sylhet'];
            $datas = [$dhaka,$sylhet];

            for($i=0;$i<2;$i++)
            {
              echo "['{$location[$i]}'".","."{$datas[$i]}],";
            }
          ?>


          // ['2014', 1000],
          // ['2015', 1170]
        ]);

        var options = {
          chart: {
            title: 'Package Posting',
            subtitle: 'On location Based',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <div id="columnchart_material" style="width: 1300px; height: 500px;"></div>

                    
</div>
</div>

 @endsection