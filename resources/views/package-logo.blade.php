@extends('layout.master')

@section('metas')
<title>Business Bundle Logo Package | Logo Sensation</title>
<meta description="Are you looking for nothing but the best logo design solutions for your corporations. Read details on the logo elite package!">
@stop


@section('body')
<style type="text/css">
  
  .secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }
    .hero-services {
      background: url( '{{ asset("img/banner-packages.png") }}' );
      background-size: cover !important;
      background-repeat: no-repeat;
    }
    .d_t{ width:  100%}
</style>
<section class="hero-services">
  <div class="container">
    
    <div class="d_t">
      <div class="d_c">


 <div class="row">
         
    <div class="col-lg-9 col-md-9 col-sm-9 col-md-offset-0 col-sm-offset-2">
           
         
               <h4 class="wow fadeInDown" data-wow-delay="0.2s"> Business Bundle Logo Package </h4>
        <h3 class="wow fadeInDown" data-wow-delay="0.4s"> Strategically Crafted Brand Identity Development <br>Packages for Multi-National Corporations</h3>
        <p class="wow fadeInDown" data-wow-delay="0.6s">We are a curiously offbeat brand identity development company constructing <br> custom made packages for top-notch companies around the world. With our <br>business bundle package for brand identity development, we help strengthen your<br>brand existence for the better.</p>
        <div class="actions wow fadeInDown" data-wow-delay="0.8s"><a href="{{ route('portfolio') }}" class="btn-fill">Go to Portfolio <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>

    </div>

       </div>



      </div>
    </div>
  </div>
</section>


<section class="package-detail section-padding">
  <div class="container">
    <div class="row is-table">
      <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12 is-colcell text-center">
        <div class="best-seller-wrapper">
          <div class="single">
            <h3>BUSINESS BUNDLE PACKAGE</h3>
            <p>Suitable for corporations of all industries that require professional logo design.</p>
              <span class="old-price">AUD-$1,599.99 <i class="cut"></i></span> 
            <span class="price">AUD-$799.99</span>
            <ul class="no-scroll">
              <li>Unlimited Logo Design Concepts by 8 Designers</li>
              <li>FREE Icon Design</li>
              <li>FREE Unlimited Revisions</li>
              <li>Turn around time 2-3 business days</li>
              <li>1 Stationery Design Set (Business card, Letterhead, Envelope & Email Signature)</li>
              <li>FREE Bi-Fold Brochure Design</li>
              <li>Unlimited Pages Website Design with CMS / Admin Panel</li>
              <li>100% Satisfaction Guarantee</li>
              <li>100% Money Back Guarantee*</li>
            </ul>
            <input class="btn btn-fill" onclick="window.location.href='{{ route('OrderNow', [ 'BUSINESS BUNDLE PACKAGE', '799.99' ] ) }}'" type="submit"  value="ORDER NOW" />
            <p>20% more OFF on Next Order</p>
            <div class="actions"> <a class="action-no"> <i class="fa fa-phone-square"></i> +1 866 598 4317</a> <a class="actions action-chat"> <i class="fa fa-wechat"></i> LIVE CHAT</a> </div>
          </div>
        </div>
      </div>


      <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 is-colcell">
        <div class="clearfix">
            <h4 class="wow fadeInDown text-left" data-wow-delay="0.2s">Detailed Package</h4>
            <h3 class="wow fadeInDown text-left" data-wow-delay="0.4s">Our Business Bundle Brand Identity Package Is Perfect for Any Top Level Business</h3>
            <p class="wow fadeInDown text-left" data-wow-delay="0.6s">Companies that aim to stand apart always need a package that takes brand identity development to the next level. With our business bundle package, we provide you with the perfect mix of services at the best price. 
</p>

<p class="wow fadeInDown text-left" data-wow-delay="0.6s">Starting with unlimited logo design concepts with 8 of the best designers in our team. Think you need some revisions on those logo concepts? That’s no problem! The package comes with unlimited revisions. The story doesn’t end there as the package additionally comes with a free brochure design and even a complete stationary design set. The package also comes in with unlimited web page designs along with a CMS based backend. </p>


<p class="wow fadeInDown text-left" data-wow-delay="0.6s"> All in all, the business bundle package is perfect for any goal-oriented business seeking state of the art brand identity development solutions.</p>


            <div class="actions wow fadeInDown" data-wow-delay="0.8s"><a href="{{ route('portfolio') }}" class="btn-fill">Go to Portfolio</a></div>
        </div>  
      </div>


    </div>
  </div>
</section>

@include('include.qualities')

@include('include.count')

@include('include.subscribe_fold')

@include('include.testimonials')

@include('include.quote')

@section('footer')
  @parent
@stop


@stop 


<!-- .meshim_widget_components_chatButton_Button .button_bar -->