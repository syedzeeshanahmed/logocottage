@extends('layout.master')

@section('metas')
<title>{{ $metas[0] }}</title>
<meta description="{{ $metas[1] }}">
@stop

@section('body')
<style type="text/css">
  
.secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }

    .hero-services {
      background: url( '{{ asset("none") }}' );
      background-size: auto !important;
    height:auto;
    background-color:#fff !important;
    }

    #header-sroll{ background-color: #fff;     box-shadow: 1px -10px 26px #b7b7b7; }


    


header #header-sroll ul#navigation li a {color: #888888; opacity: 1;  -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}

header #header-sroll .call-action span {color: #2c2c2c;   -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}

header #header-sroll .call-action span small {color: #888888;   -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}

header #header-sroll .call-action a {color: #888888;  -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}


header #header-sroll .nav-toggle span, header #header-sroll .nav-toggle span:before, header #header-sroll .nav-toggle span:after{    background: #631a79;}


#header-sroll.small .nav-toggle span, #header-sroll.small .nav-toggle span:before, #header-sroll.small .nav-toggle span:after{background: #631a79;}
</style>
<div class="package-details">
  <section class="section-padding service-detail packages-details-sub wow fadeInDown">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <h3 class="text-left breakdown-before-left margin-bottom-20">{!!$subherocontent[0]!!}</h3>
        </div>
      </div>
    </div>
  </section>
  <div class="section-padding branding-package branding-cust multiply package-detail-page wow">
    <div class="container">
      <div class="clearfix">
        <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12 sec-combo pull-right">
        <h3>{!! $body[0] !!}</h3>
          <p class="margin-bottom-40 wow fadeInDown text-center" data-wow-delay="0.4s">{!! $body[1] !!}</p>
          <p class="margin-bottom-40 wow fadeInDown text-center" data-wow-delay="0.4s">{!! $body[2] !!}</p>

          <div class="actions text-left margin-top-20 wow fadeInDown" data-wow-delay="0.6s"> 
            @if( $box[3] == null )
            <input class="btn-fill-white" onClick="window.location.href='{{ route( $orderCategory, [ $box[0], $box[2] ] ) }}'" type="submit" value="ORDER NOW" tabindex="0">
            @else
            <input class="btn-fill-white" onClick="window.location.href='{{ route( $orderCategory, [ $box[0], $box[3] ] ) }}'" type="submit" value="ORDER NOW" tabindex="0">
            @endif </div>
        </div>
        <div class="col-md-4 sec-combo-two wow fadeInDown" data-wow-delay="0.2s">

      
          <div class="single">
            
            @if( $box[3] == null ) <span class="price">${!! $box[2] !!} <small>per page</small></span> @else <span class="old-price">${!! $box[2] !!} <i class="cut"></i></span> <span class="price">${!! $box[3] !!} </span> @endif
            <ul class="no-scroll">
              @foreach($list as $item)
              <li>{!! $item !!}</li>
              @endforeach
            </ul>
            <p class="text-center">Add on: <span class="sea">$50</span> for 24 Hours Rush Delivery</p>
            <div class="actions clearfix"> <a class="action-no inner-details gre clearfix"> <span class="icon-support"></span> <span><small>Share your idea?</small>+1-866-976-8874 <small class="border-right"></small></span> </a> <a onClick="$zopim.livechat.window.toggle()" class="action-chat ali clearfix pull-right" tabindex="0"> <span class="icon-chat"></span> <span><small>Want to discuss?</small> Live Chat Now</span></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@include('include.qualities')



@include('include.subscribe_fold')

@include('include.count')

@include('include.testimonials')

@include('include.quote')

@section('footer')
  @parent
@stop


@stop 

<!-- .meshim_widget_components_chatButton_Button .button_bar -->