<!--
      created by zahid Hossain
      Date: 11/12/2018
-->


@extends('Layouts.layout')

@section('title') Hotel Booking @endsection
        
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
              <form action="" method="post">

                {{@csrf_field()}}

                <input type="hidden" name="post_id" placeholder="" value="{{$book->id}}" required="">
                <input type="hidden" name="hotel_id" placeholder="" value="{{$book->hotel_id}}" required="">
                <input type="hidden" name="user_id" placeholder="" value="{{$user->id}}" required="">
                <input type="hidden" id="unit_price" name="unit_price" placeholder="" value="{{$book->price}}" required="" onkeyup="total()">

                <div class="phone_email">
                  <label>Full name : </label>
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="username" placeholder="" readonly value="{{$user->username}}" required="">
                  </div> 
                </div>
                <div class="phone_email phone_email1">
                  <label>Email : </label>
                  <div class="form-text">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="email" name="email" placeholder="" readonly value="{{$user->email}}" required="">
                  </div>
                </div>
                
                <div class="phone_email">
                  <label>Phone number : </label>
                  <div class="form-text">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="mobile" placeholder="" readonly value="{{$user->mobile}}" required="">
                  </div> 
                </div> 
                <div class="phone_email phone_email1">
                  <label>Address : </label>
                  <div class="form-text">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" name="address" placeholder="" readonly value="{{$user->address}}" required="">
                  </div> 
                </div> 

                <div class="phone_email">
                  <label>Hotel name : </label>
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="hotel_name" placeholder="" readonly value="{{$book->hotel_name}}" required="">
                  </div> 
                </div>
                <div class="phone_email phone_email1">
                  <label>Location : </label>
                  <div class="form-text">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="text" name="location" placeholder="" readonly value="{{$book->location}}" required="">
                  </div>
                </div>

                <div class="clear"></div>
                <div class="agileits_reservation_grid">
                  <div class="span1_of_1">
                    <label>Departure Date : </label> 
                    <div class="book_date"> 
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input  id="datepicker" name="check_out" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                    </div>          
                  </div>
                  <div class="span1_of_2">
                    <label>Arrival Date : </label> 
                    <div class="book_date"> 
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input  id="datepicker1" name="check_in" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                    </div>          
                  </div>
                  <div class="clear"></div>
                  <div class="span1_of_1">
                    <label>No.of people : </label>
                    <!-- start_section_room -->
                    <div class="section_room">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      <select id="country1" name="person" onchange="change_country(this.value)" class="frm-field required sect">
                        
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>         
                        <option value="4">4 People</option>
                        <option value="AX">More</option>
                      </select>
                    </div>  
                  </div>
                  <div class="span1_of_2">
                    <label>Single Room : </label>
                    <!-- start_section_room -->
                    <div class="section_room">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" id="single_room" name="single_room" placeholder=""  required="" value="0" onkeyup="total()">
                    </div>  
                  </div> 

                  <div class="span1_of_1">
                    <label>2 person Room : </label>
                    <!-- start_section_room -->
                    <div class="section_room">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      <input type="text" id="two_person_room" name="two_person_room" placeholder=""  required="" value="0" onkeyup="total()">
                    </div>  
                  </div>
                  <div class="span1_of_2">
                    <label>4 person room : </label>
                    <!-- start_section_room -->
                    <div class="section_room">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" id="four_person_room" name="four_person_room" placeholder="" value="0"  required="" onkeyup="total()">
                    </div>  
                  </div> 

                  <div class="span1_of_1">
                    <label>Cost : </label>
                    <!-- start_section_room -->
                    <div class="section_room">
                      <i class="fa fa-users" aria-hidden="true"></i>
                     <input type="text" id="total_price" name="total_price" placeholder=""  required="">
                    </div>  
                  </div>                 
                  <div class="clear"></div>
                </div> 
                        
                <input type="submit" value="Reservation">
              </form>
            </div>
            @if(count($errors) > 0)

                @foreach($errors->all() as $error)

                  <p class="alert alert-danger">{{$error}}</p>

                @endforeach

              @endif

    </div>
   </div>

   <script type="text/javascript">
         function total()
         {
            var single_room=1;
            var two_person_room=1;
            var four_person_room=1;
               single_room=parseInt(document.getElementById('single_room').value);
               two_person_room=parseInt(document.getElementById('two_person_room').value);
               four_person_room=parseInt(document.getElementById('four_person_room').value);
              var unit_price=parseInt(document.getElementById('unit_price').value);

              var first = single_room*unit_price;
              var second = two_person_room*unit_price;
              var third = four_person_room*unit_price;
              var total_price=first+second+third;
              document.getElementById('total_price').value=total_price;
          }
                            
     </script> 
    
 @endsection
