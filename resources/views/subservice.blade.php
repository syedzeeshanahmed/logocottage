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

@extends('layout.master')

@section('metas')
<title>{{ $metas[0] }}</title>
<meta description="{{ $metas[1] }}">
@stop
@section('body')

  @if( isset( $herovideo ) )
    @include( 'include.' . $herovideo )  
  @else
<section class="hero-services hero-subservices">
  <div class="tp-banner-container wow">
    <div class="tp-banner" >
      <ul>
        <!-- SLIDE  -->
        <li data-transition="fade" data-slotamount="0" data-masterspeed="0" > 
          <!-- MAIN IMAGE --> 
          <img src="{{ asset( $metas[2] ) }}"   alt="slidebg1"  data-bgfit="cover" data-bgposition="top center" data-bgrepeat="no-repeat"> 
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption mediumlarge_light_white_center fade"
            data-x="15"
            data-y="160"
            data-speed="500"
            data-start="300"
            data-easing="Power4.easeOut"
            data-endspeed="300"
            data-endeasing="Power1.easeIn"
            data-captionhidden="off"
            style="z-index: 6">{!! $bannerHeadings[0] !!} </div>
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption medium_light_black fade"
            data-x="15"
            data-y="250"
            data-speed="500"
            data-start="600"
            data-easing="Power4.easeOut"
            data-endspeed="300"
            data-endeasing="Power1.easeIn"
            data-captionhidden="off"
            style="z-index: 6">{!! $bannerHeadings[1] !!}
            <div class="clearfix margin-top-20"><a href="{{ route('ShareYourIdea') }}" class="btn-fill-white pull-left">Let's Get Started</a></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
@endif
<section class="section-padding service-detail service-drop-down">
  <div class="container">
    <section class="breakdown">
      <div class="row">
        <div class="col-md-7 col-sm-7 col-lg-7 col-xs-12">
          <h3 class="text-left breakdown-before-left">{{$headings[0]}}</h3>
          @for( $i=1; $i< sizeof( $headings ); $i++ )
            <p class="text-left">{{$headings[$i]}}</p>
          @endfor
          <ul>
            <?php $index=-1; ?>
            @foreach( $list as $item )
            <?php $index++; ?>
            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> {{ $item }}</li>
            @endforeach
          </ul>
        </div>
        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12 height-for-quote">
          @include('include.service-quote', ['interest'=> $headings[0]  ])
        </div>
      </div>
    </section>
  </div>
</section>
<div class="subservice-packages section-padding"> @if( isset( $packages ) )
  @include( 'include.' . $packages , ['servicesPage' => 1] )  
  @else
  @include('include.packages-logo')
  @endif
  <div class="services_process_section"> @if( isset( $oldImgs ) )
    @include('include.subservice-process', [ 'content' => $process, 'headings'=> $processHeadings, 'oldImgs' => $oldImgs ] )</div>
  @else
  @include('include.subservice-process', [ 'content' => $process, 'headings'=> $processHeadings ] )</div>
@endif
</div>
<div class="boder-space"> @if( isset( $portfolio ) )
  @include( 'include.' . $portfolio )  
  @else
  @include('include.portfolio-logo')
  @endif </div>
<div class="boder-space"> @include('include.qualities')</div>
@include('include.subscribe_fold')
@include('include.count')

@include('include.testimonials')



@include('include.quote')


@include('include.portfoliomodal')


@section('footer')
  @parent
@stop



@stop 