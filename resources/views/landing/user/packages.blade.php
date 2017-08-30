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
</style>


<section class="user_profile cust-cont" style="">
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
           <div class="col-md-12">
                 <div class="right-panel">
                  <div class="row">
                    <div class="col-md-5 main-hd">
                     <h4 class="text-left title">Popular Packages</h4>
                    </div>
                    <div class="col-md-7">
                     <ul class="right-mid-nav pull-right">
                      <li><a href="#">Design Proficient  </a></li>
                  <li class="active"><a href="{{ route('user.profile') }}">Dashboard</a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-md-12">              
                      @include('include.packages-popular')
                  </div>
                </div>
            </div>
                </div>
        </section>  
      </div>
    </div>      
  </div>

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




</section>


@stop