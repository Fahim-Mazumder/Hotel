<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Login | user</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Holiday Homes Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Barlow:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!--//fonts--> 
</head>
<body style="  font-family: 'Barlow', sans-serif;
  font-size: 100%;
  background: url(../images/bann2.jpg)no-repeat center top;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
  background-attachment:fixed;">



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

<!--background-->
<h1> User Login</h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Choice For 
Holiday Homes</h2>

						<div class="book-form agileits-login">
							<form action="#" method="post">
								{{@csrf_field()}}
								<div class="col-sm-12">
									<label>Email : </label>
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="email" name="email" placeholder="" required="">
									</div>
								</div>
								<div class="col-sm-12">
									<label>Password : </label>
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="password" name="password" placeholder="" required="">
									</div> 
								</div> 
								
								<div class="clear"></div>
								 
												
								<input type="submit" value="Login">
							</form>

							<a href="{{route('signup.index')}}">Open a new account</a>

							<a href="{{route('login.hotel')}}" class="float-right">Hotel login</a>


							@if(count($errors) > 0)

								@foreach($errors->all() as $error)

									<p class="alert alert-danger">{{$error}}</p>

								@endforeach

							@endif

						</div>

		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2018 Holiday Homes Booking Form . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>