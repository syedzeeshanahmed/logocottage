@extends('layout.master')

@section('metas')
<title>Elite All-in-One Sensational Package | Logo Sensation</title>
<meta description="Do you need all-around elite brand development packages? Well, then the Elite Sensational package is what you need by Logo Sensation.">
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
      background-size: auto !important;
    }
    .d_t{ width: 100%; }
</style>
<section class="hero-services">
  <div class="container">
  

    <div class="d_t">
      <div class="d_c">



 <div class="row">
         
    <div class="col-lg-9 col-md-9 col-sm-9 col-md-offset-0 col-sm-offset-2">
           
      <h4 class="wow fadeInDown" data-wow-delay="0.2s">Elite Sensation Package</h4>
        <h3 class="wow fadeInDown" data-wow-delay="0.4s">Custom Brand Development Packages<br>Guaranteeing Sensational Results</h3>
        <p class="wow fadeInDown" data-wow-delay="0.6s">Our experts believe a great brand is good at every brand aspect there can be. <br> This is one of the many reasons why our brand development analysts and experts <br> crafted sensational packages for all your needs.</p>
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
            <h3>ELITE SENSATION</h3>
            <p>Perfectly crafted design and development package for multinational organizations.</p>
              <span class="old-price">AUD-$6,999.99<i class="cut"></i></span> 
            <span class="price">AUD-$3,499.99</span>
            <ul class="no-scroll">
              <li>Unlimited Logo Design Concepts by 8 Designers</li>
              <li>FREE Icon Design</li>
              <li>Complete Custom Design & Development</li>
              <li>Job Portal, Dating Portal, Professional Network, LMS, Social Network, Media Portal ETC…</li>
              <li>Mobile Responsive</li>
              <li>Client / User Dashboard Area</li>
              <li>Custom Coding</li>
              <li>Custom PHP Development</li>
              <li>Custom CMS / Backend Adminstrative System</li>
              <li>Online Payment Integration</li>
              <li>Multi Lingual</li>
              <li>Custom Dynamic Forms</li>
              <li>Online Appointment / Online Scheduling System</li>
              <li>Live Feeds Widget for Social Networks</li>
              <li>Module-Wise Architecture</li>
              <li>Award Winning Team of Design Artist and Developers</li>
              <li>Complete W3C Certified HTML</li>
              <li>Complete Website Deployment with 2 Weeks FREE Maintenance</li>
              <li>Social Media Designs (Facebook, Twitter, Youtube)</li>
              <li>Search Engine Submission</li>
              <li>FREE Google Friendly Sitemap</li>
              <li>FREE 1 Year Domain</li>
              <li>100% Satisfaction Guarantee</li>
              <li>100% Money Back Guarantee*</li>
            </ul>
            <input class="btn btn-fill" onclick="window.location.href='{{ route('OrderNow', [ 'ELITE SENSATION', '3,499.99' ] ) }}'" type="submit"  value="ORDER NOW" />
            <p>20% more OFF on Next Order</p>
            <div class="actions"> <a class="action-no"> <i class="fa fa-phone-square"></i>+1 866 598 4317</a> <a class="actions action-chat"> <i class="fa fa-wechat"></i> LIVE CHAT</a> </div>
          </div>
        </div>
      </div>


      <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 is-colcell">
        <div class="clearfix">
            <h4 class="wow fadeInDown text-left" data-wow-delay="0.2s">Detailed Package</h4>
            <h3 class="wow fadeInDown text-left" data-wow-delay="0.4s">The Elite Sensation Package is the Perfect Mix of Brand Development Solutions That Mega Brands Require</h3>
            <p class="wow fadeInDown text-left" data-wow-delay="0.6s">We’re a team of brand makers that love to work with people who love to create beautiful brands. However, a brand isn’t only recognized by its identity. With our excellent brand development team, we came with an exceptional elite sensation package made specifically for mega-brands.</p>
             <p class="wow fadeInDown text-left" data-wow-delay="0.6s">The Elite Sensation package is composed of several different services starting with brand identity solutions. In a fitting price, you get unlimited logo design concepts by 8 of the most experienced designers that we have. Icon designs for this package are absolutely free. The package additionally includes custom web design and development for a beautiful website. The website will also have a proper CMS back-end along with custom forms, payment integration and much more. The elite sensation package is set to create a solid impact on your pre-existing or newly formed mega-brand.</p>
              <p class="wow fadeInDown text-left" data-wow-delay="0.6s">Check out the complete details to the elite sensation package on the left. Need some custom additions to the package? Call us today and discuss your project in depth.</p>
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