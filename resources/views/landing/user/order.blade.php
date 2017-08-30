@extends('user.master')


@section('body')
<style type="text/css">
  
  .secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }
    .hero-services {
      background: url( '{{ asset("img/banner-packages.png") }}' );
      background-size: auto !important;
    }


    .profile_sphere:hover{
      color: #fff;
      cursor: pointer;
      text-decoration: none;
    }


    .side-bar > div{
      background-color: #fff;
    }
    .side-bar > div ul{
      margin-bottom: 0px;
    }
	.dataTables_wrapper {
		top: 0;
		margin-top: 0;
		padding:0;
	}
	div#listing_length label {
    color: #b8285a;
    }
	#listing th {
		color: #b8285a;
	}
	#listing td {
		color: #636b6f;
	}
	#listing_filter label {
		color: #b8285a;
	}
	.tab-content{
		background: none;
		border: none;
		padding: 0;
	}
	#listing th {
		text-align: left;
	}
	#listing td {
		text-align: left;
	}
	#listing td .give-btn {
		background: transparent !important;
		color: #b8285a;
		box-shadow: none;
		font-size: 13px;
		text-transform: capitalize;
	}
	input.btn.btn-default {
		background: #b8285a;
		color: #fff;
		border-radius: 30px;
		padding: 10px 30px;
		display: table;
		margin: 0 auto;
	}
	input.btn.btn-default:hover {
		background: #b8285a;
		color: #fff;
	}
</style>

@foreach($orders as $order)
<!-- Modal -->
<div class="modal fade modal-custom" id="myModal{{$order->id}}" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="d_t">
      <div class="d_c">
        <form method="POST" action="{{ route('dash.reviews.save') }}">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <h3>{{ $order->name }}</h3>
              <p>{{ $order->description }}</p>
              <input type="hidden" name="order_id" value="{{$order->id}}">
              <div class="modal-star">
                <fieldset class="rating">
                  <input type="radio" id="star5"  required="required" name="rating" value="5" />
                  <label class="full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="star4" required="required"  name="rating" value="4" />
                  <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="star3" required="required"  name="rating" value="3" />
                  <label class="full" for="star3" title="Meh - 3 stars"></label>
                  <input type="radio" id="star2" required="required"  name="rating" value="2" />
                  <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="star1" required="required"  name="rating" value="1" />
                  <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
              </div>
              {{ csrf_field() }}
              <div class="modal-textarea">
                <textarea name="review" required="required"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-default" name="ratingBtn" value="Submit" />
            </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>@endforeach






<section class="user_profile cust-cont" style="">
  <div class="container-fluid">
    <div class="row">
      <section class="side-bar" >
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="row">
            <div class="col-md-12 les-spc">@include( 'user.side-bar'  )</div>
          </div>
        </div>
      </section>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <section class="top-bar"> @include( 'user.top-bar'  ) </section>
        <section class="main-body">
         <div class="col-md-12">
           <div class="right-panel">
            <div class="row">
            <div class="col-md-5 main-hd">
             <h4 class="text-left title">My Review</h4>
            </div>
            <div class="col-md-7">
             <ul class="right-mid-nav pull-right">                      
                  <li><a href="#">Design Proficient  </a></li>
                  <li class="active"><a href="{{ route('user.profile') }}">Dashboard</a></li>
             </ul>
            </div>
          </div>
         <div class="row"> 
        <section class="packages-tabs">
         
             <div class="col-lg-12 col-md-12 col-sm-12">
          <ul class="tabs-profile clearfix">
            <li class="tab-link current" data-tab="tab-1">My Orders</li>
          </ul>
          <div id="tab-1" class="tab-content current"> 
                    
                    <table id="listing" class="mdl-data-table display dash-data-table"  cellspacing="0" width="100%">

        <thead>
            <tr>
                <th><i class="fa fa-gift" aria-hidden="true"></i> Package Name</th>
                <th><i class="fa fa-list" aria-hidden="true"></i> Price</th>
                <th><i class="fa fa-calendar" aria-hidden="true"></i> Date</th>
                <th><i class="fa fa-handshake-o" aria-hidden="true"></i> Reviews Status</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th><i class="fa fa-gift" aria-hidden="true"></i> Package Name</th>
                <th><i class="fa fa-list" aria-hidden="true"></i> Price</th>
                <th><i class="fa fa-calendar" aria-hidden="true"></i> Date</th>
                <th><i class="fa fa-handshake-o" aria-hidden="true"></i> Reviews Status</th>
            </tr>
        </tfoot>
        <tbody>
          @foreach($orders as $order)
            <tr>
                <td>{{ $order->name }}</td>
                <td>${{ $order->price }}</td>
                <td>{{ $order->created_at }}</td>
                @if($order->testimonial)
                <td><label >Review Provided</label> </td>
                @else
                <td><a href="#"><input style="display: block; text-align: left;" class="mdl-button  mdl-button--raised mdl-button--colored give-btn" type="submit" value="Give review" data-toggle="modal" data-target="#myModal{{ $order->id }}"></a></td>
                @endif
            </tr>
          @endforeach  

        </tbody>
    </table>

            </div>
          </div>
          
        
        </section>
</div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>
    <div class="dash-footer">
    <div class="container main-footer">
      <div class="col-md-7">
        <ul class="footer">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Business Profiles</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">FAQs</a></li>
        </ul>
        <p class="pull-left copy-dash">Copyright 2017, <a href="#">Designproficient.com</a>, All Rights Reserved</p>
       </div>
       <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 clearfix">
          <div class="app">
           <div class="store">
            <a href="#"><img src="{{ asset('img/app.png') }}" /></a>
           </div>
           <div class="play">
            <a href="#"><img src="{{ asset('img/google.png') }}" /></a>
           </div>
          </div>
       </div>
      </div>
    </div>
  </div>
  
  
</section>
@stop