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
      color: #fff;      
    }

    .side-bar > div{
      background-color: #fff;
    }
    .side-bar > div ul{
      margin-bottom: 0px;
    }
    .top-nav nav{
      margin-left: 45px;
    }
	.dataTables_wrapper {
		top: 0;
		margin-top: 0;
		padding:0;
	}
	div#listing_length label {
    color: #636b6f;
    }
	#listing th {
		color: #636b6f;
	}
	#listing td {
		color: #636b6f;
	}
	#listing_filter label {
		color: #636b6f;
	}
	.tab-content{
		background: none;
		border: none;
		padding: 0;
	}
	div#listing_wrapper {
		border: 1px solid #ccc;
	}
	#listing th {
		text-align: left;
	}
	#listing td {
		text-align: left;
	}
	#listing th .fa {
		color: #b8285a
	}
	.mdl-cell td a {
		color: #b8285a
	}
	.mdl-cell td a i.fa.fa-download {
		margin-right: 10px;
	}
</style>
<section class="user_profile cust-cont" style="">
  <div class="container-fluid">
    <div class="row">
      <section class="side-bar" >
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="row">
            <div class="col-md-5">&nbsp;</div>
            <div class="col-md-7 les-spc">@include( 'user.side-bar'  )</div>
          </div>
        </div>
      </section>
      <div class="col-lg-8 col-md-8 col-sm-8">
        <section class="top-bar"> @include( 'user.top-bar'  ) </section>
        <section class="main-body">
         <div class="col-md-9">
           <div class="right-panel">
            <div class="row">
            <div class="col-md-4 main-hd">
             <h4 class="text-left">My Review</h4>
            </div>
            <div class="col-md-8">
             <ul class="right-mid-nav pull-right">  <li><a href="#">Design Proficient  </a></li>
                  <li class="active"><a href="{{ route('user.profile') }}">Dashboard</a></li>
            </div>
          </div>
         <div class="row"> 
        <section class="packages-tabs">
         
             <div class="col-lg-12 col-md-12 col-sm-12">
          <ul class="tabs-profile clearfix">
            <li class="tab-link current" data-tab="tab-1">Handovers</li>
          </ul>
          <div id="tab-1" class="tab-content current"> 
                    
                    <table id="listing" class="mdl-data-table display"  cellspacing="0" width="100%">

        <thead>
            <tr>
                <th><i class="fa fa-gift" aria-hidden="true"></i> Deal Offer</th>
                <th><i class="fa fa-list" aria-hidden="true"></i> Business</th>
                <th><i class="fa fa-calendar" aria-hidden="true"></i> Date</th>
                <th><i class="fa fa-ticket" aria-hidden="true"></i> Coupon</th>
                <th><i class="fa fa-handshake-o" aria-hidden="true"></i> Status</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th><i class="fa fa-gift" aria-hidden="true"></i> Deal Offer</th>
                <th><i class="fa fa-list" aria-hidden="true"></i> Business</th>
                <th><i class="fa fa-calendar" aria-hidden="true"></i> Date</th>
                <th><i class="fa fa-ticket" aria-hidden="true"></i> Coupon</th>
                <th><i class="fa fa-handshake-o" aria-hidden="true"></i> Status</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Lorem Ipsum</td>
                <td>McDonald</td>
                <td>3/Jan/2016</td>
                <td>Active</td>
                <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i>  <i class="fa fa-files-o" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>Lorem Ipsum</td>
                <td>McDonald</td>
                <td>3/Jan/2016</td>
                <td>Active</td>
                <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i>  <i class="fa fa-files-o" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>Lorem Ipsum</td>
                <td>McDonald</td>
                <td>3/Jan/2016</td>
                <td>Active</td>
                <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i>  <i class="fa fa-files-o" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>Lorem Ipsum</td>
                <td>McDonald</td>
                <td>3/Jan/2016</td>
                <td>Active</td>
                <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i>  <i class="fa fa-files-o" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>Lorem Ipsum</td>
                <td>McDonald</td>
                <td>3/Jan/2016</td>
                <td>Active</td>
                <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i>  <i class="fa fa-files-o" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>Lorem Ipsum</td>
                <td>McDonald</td>
                <td>3/Jan/2016</td>
                <td>Active</td>
                <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i>  <i class="fa fa-files-o" aria-hidden="true"></i></a></td>
            </tr>

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
       <div class="col-md-5">
          <div class="app pull-right">
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