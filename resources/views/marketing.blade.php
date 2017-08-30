<style>
div.subservice-packages {
	border-top: none;
	border-bottom: none;
}
.breakdown .d_t {
	height: 0;
}
.secondary-nav-wrap {
	display: none;
}
.subservice-packages.section-padding {
	padding-bottom: 0px;
}
.active{ color:#fff !important;pacity: 1 !important; }#header-sroll:hover .active{ color:#b8285a !important;  }#header-sroll.small .active{ color:#b8285a !important;}
</style>

@extends('layout.master-marketing')

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
            data-y="300"
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
          <p class="text-left">{{$headings[1]}}</p>
          <ul>
            <?php $index=-1; ?>
            @foreach( $list as $item )
            <?php $index++; ?>
            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> {{ $item }}</li>
            @endforeach
          </ul>
        </div>
        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12 height-for-quote">
          <div class="d_t"> @include('include.service-quote', ['interest'=> $headings[0]  ]) </div>
        </div>
      </div>
    </section>
  </div>
</section>
<div class="subservice-packages section-padding"> 


  @include( 'include.packages-logo-marketing' , ['servicesPage' => 1] )  


  <div class="services_process_section"> @if( isset( $oldImgs ) )
    @include('include.subservice-process', [ 'content' => $process, 'headings'=> $processHeadings, 'oldImgs' => $oldImgs ] )</div>
  @else
  @include('include.subservice-process', [ 'content' => $process, 'headings'=> $processHeadings ] )</div>
@endif
</div>




<div class="boder-space"> 
@if( isset( $portfolio ) )
  @include( 'include.' . $portfolio )  
@else
  @include('include.portfolio-logo-marketing')
@endif 
</div>

<div class="boder-space"> @include('include.qualities')</div>
@include('include.subscribe_fold')
@include('include.count')

@include('include.testimonials')



@include('include.quote')


@include('include.portfoliomodal')


<style>
  #header-sroll{
    background: transparent;
    box-shadow: none;
  }

  #header-sroll .logo a{
    background-position: top center;
  }

  header #header-sroll .call-action span,
      header #header-sroll .call-action span small i {
    color: #fff;
    -webkit-transition: none;
    -moz-transition: none;
    -ms-transition: none;
    -o-transition: none;
    transition: none;
       font-size: 20px;
    padding-top: 8px;
  }

  header #header-sroll:hover .call-action span small i,
  header #header-sroll.small span small i{
    color: #6c6c6c;
    font-size: 20px;
    padding-top: 8px;
  }

    header #header-sroll:hover .call-action span,
    #header-sroll.small .call-action span{
      font-size: 20px;
    }

    .top-action .btn-line-fill {
        color: #fff !important;
        border-color: #fff;
    }

    #header-sroll.small  .btn-line-fill:hover,
    header #header-sroll:hover .btn-line-fill:hover{
      color:#fff !important;
    }

    #header-sroll.small  .btn-line-fill,
    header #header-sroll:hover .btn-line-fill{
        color: #a32974 !important;
        border-color: #a32974 !important;
    }



</style>


@section('footer')
  @parent
@stop



@stop 