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

    .user_profile{
      background-color: #f7f7f7;
    }

    .side-bar > div{
      background-color: #fff;
    }
    .side-bar > div ul{
      margin-bottom: 0px;
    }
	#listing th {
		color: #b8285a;
	}
	#listing td {
		color: #333;
	}
	.dataTables_length label{
		color:#b8285a;
	}
	#listing_filter label{
		color:#b8285a;
	}
	.dataTables_length label {
		text-transform: capitalize;
	}
    
</style>


<section class="cust-cont" style="">
  <div class="container-fluid">
    <div class="row">
      <section class="side-bar" >
        
        <div class="col-md-3">
          <div class="row">
            <div class="col-md-12 les-spc">@include( 'user.side-bar' )</div>     
          </div>
        </div>
      </section>
      <div class="col-md-9">
        <section class="top-bar">
          @include( 'user.top-bar'  )
        </section>
        <section class="main-body">
           @include( 'user.listing' ,  ['quotes' => $quotes ] )
        </section>  
      </div>
    </div>      
  </div>

<div class="container-fluid dash-footer">
 <div class="main-footer">
       <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <ul class="footer">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Business Profiles</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">FAQs</a></li>
        </ul>
        <p class="pull-left copy-dash">Copyright 2017, <a href="#">designproficient.com</a>, All Rights Reserved</p>
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




</section>


@stop