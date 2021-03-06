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
    .dataTables_wrapper th{
	  color:#b8285a;
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
	div#listing_wrapper {
		border: 1px solid #e8e8e8;
	}
	#listing th {
		text-align: left;
	}
	#listing td {
		text-align: left;
	}
    .dataTables_length label {
		text-transform: capitalize;
	}
</style>
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
             <h4 class="text-left title">My Quotes</h4>
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
            <li class="tab-link current" data-tab="tab-1">Quotes</li>
          </ul>
          <div id="tab-1" class="tab-content current"> 
                    
          <table id="listing" class="mdl-data-table display dash-data-table"  cellspacing="0" width="100%">

                  <thead>
                      <tr>
                            <th><i class="fa fa-building" aria-hidden="true"></i> Interest</th>
                            <th><i class="fa fa-list" aria-hidden="true"></i> Budget</th>
                            <th><i class="fa fa-phone-square" aria-hidden="true"></i> Description</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th><i class="fa fa-building" aria-hidden="true"></i> Interest</th>
                          <th><i class="fa fa-list" aria-hidden="true"></i> Budget</th>
                          <th><i class="fa fa-phone-square" aria-hidden="true"></i> Description</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    
                    @if( $quotes!=null )
                      @foreach( $quotes as $quote )
                        <tr>
                            <td>{{ $quote->interest }}</td>
                            <td>{{ $quote->budget }}</td>
                            <td>{{ $quote->description }}</td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                          <td colspan="3"> You have not send us any quote yet. </td>
                      </tr>
                    @endif  
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