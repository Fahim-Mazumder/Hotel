<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/sb-admin.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Voyage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{route('home.index')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('hotel.index')}}" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="{{route('hotelPost.index')}}" class="nav-link">Tour</a></li>


            @if(session('user')!=null || session('hotel')!=null || session('admin')!=null )

              @if(session('user'))
                <li class="nav-item"><a href="{{route('user.profile')}}" class="nav-link">Profile</a></li>
              
              @elseif(session('hotel'))
                <li class="nav-item"><a href="{{route('hotel.profile')}}" class="nav-link">Profile</a></li>
              @endif
              <li class="nav-item"><a href="{{route('logout.index')}}" class="nav-link">Logout</a></li>
            @else
              <li class="nav-item"><a href="{{route('login.index')}}" class="nav-link">Login</a></li>
              <li class="nav-item"><a href="{{route('login.admin')}}" class="nav-link">Admin</a></li>

            @endif


          </ul>
        </div>
        
      </div>
    </nav>
    <!-- END nav -->
			
			
			@yield('content')

			
		
			

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}} "></script>
  <script src="{{asset('js/popper.min.js')}} "></script>
  <script src="{{asset('js/bootstrap.min.js')}} "></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}} "></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}} "></script>
  <script src="{{asset('js/jquery.stellar.min.js')}} "></script>
  <script src="{{asset('js/owl.carousel.min.js')}} "></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}} "></script>
  <script src="{{asset('js/aos.js')}} "></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}} "></script>
  <script src="{{asset('js/bootstrap-datepicker.js')}} "></script>
  <script src="{{asset('js/jquery.timepicker.min.js')}} "></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('js/google-map.js')}} "></script>
  <script src="{{asset('js/main.js')}} "></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
  </body>
</html>