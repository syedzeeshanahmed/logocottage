@extends('layout.master')

@section('metas')
<title>Professional business logo design and website solutions | Design Proficient</title>
<meta description="We understand you’re looking for nothing but the best packages for web design, web development, digital marketing and much more. We provide you just that!">
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
<section class="hero-services hero-subservices">
  <div class="tp-banner-container wow">
  <div class="tp-banner" >
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="5" data-masterspeed="200" > 
        <!-- MAIN IMAGE --> 
        <img src="{{ asset('img/corporate-pakage-page.png') }}"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 



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
            style="z-index: 6">Brand Development Solutions <br>That Blow The Roof!
          </div>
        
    
        

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
            style="z-index: 6">Assisting you with complete brand development <br> services for seed sized and monster sized organizations <div class="clearfix margin-top-20"><a href="{{ route('ShareYourIdea') }}" class="btn-fill-white pull-left">Let's Get Started</a></div>
          </div>
       



        
       
       
        
     
        
       
      

      </li>
      
      <li data-transition="fade" data-slotamount="5" data-masterspeed="200" > 
        <!-- MAIN IMAGE --> 
        <img src="{{ asset('img/logo-pakage-page.png') }}"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 



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
            style="z-index: 6">Top Notch Brand Identity <br />Development Solutions
          </div>
        
    
        

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
            style="z-index: 6">Assisting corporations worldwide with the best brand <br />identity development solutions they can find.
          
          <div class="clearfix margin-top-20"><a href="{{ route('ShareYourIdea') }}" class="btn-fill-white pull-left">Let's Get Started</a></div>

          </div>
       



    
        
     
        
       
      

      </li>
      
      <li data-transition="fade" data-slotamount="5" data-masterspeed="200" > 
        <!-- MAIN IMAGE --> 
        <img src="{{ asset('img/web-pakage-page.png') }}"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 



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
            style="z-index: 6">Sketching Beautiful <br />Interfaces on the Web
          </div>
        
    
        

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
            style="z-index: 6">Providing beautiful and functional web design <br />and development solutions for companies all <br />over the planet. <div class="clearfix"><a href="{{ route('ShareYourIdea') }}" class="btn-fill-white pull-left margin-top-20">Let's Get Started</a></div>
          </div>
       


        
       
       
        
     
        
       
      

      </li>

    
      




    </ul>
    <div class="tp-bannertimer"></div>
  </div>
</div>
</section>



<div class="packages_paage_packages">

@include('include.packages-tabs', ['tab'=> $tab])

</div>

@include('include.subscribe_fold')

@include('include.count')

@include('include.quote')


@section('footer')
  @parent
@stop



@stop 


<!-- .meshim_widget_components_chatButton_Button .button_bar -->