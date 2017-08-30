@extends('layout.master')
@section('body')
@section('metas')
<title>Creative Logo Design Company and Custom Web Design Agency | About Us</title>
<meta description="We’re here to change how design works with new, conceptual ideas that shake imaginations. Have a look at who we are and what we stand for.">
@stop
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


</style>
<section class="section-padding hero-services main-about">
  <div class="container">
    <div class="d_t">
      <div class="d_c">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-md-offset-0 col-sm-offset-2">
            <div class="about-bg">
              <h3 class="wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">About Us</h3>
              <img class="wow fadeInDown" src="{{asset('img/Paris-image.jpg')}}"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-padding about-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="about-client">
              <h3 class="text-left wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">Who We Are</h3>
              <p class="text-left wow fadeInDown" data-wow-delay="0.6s">Building mega-brands through design oriented solutions, we’re a creative agency that keeps concept and strategy in mind. We’re a team of creative individuals work on bringing ideas to life with imaginative illustrations to shake the digital world. Our highly trained professionals provide complete digital marketing solutions to solve complex problems.</p>






              <div class="about-list clearfix">
                <ul class="wow fadeInDown pull-left">
<li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Strategic Design Approach</li>
<li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Brand Architecture Buildup</li>
<li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Web Identity Development</li>
<li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Experience Sketching Solutions</li>
<li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Interactive Interface Design</li>
<li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Brand Positioning Solutions</li>
<li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Brand Identity Sketching</li>
<li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Engagement and Analytics</li>
                </ul>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> </div>
    </div>
  </div>
</section>

<section class="section-padding about-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="about-client">
            <div class="about-client-inner">
              <h3 class="text-left wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">Clients</h3>
              <p class="text-left wow fadeInDown" data-wow-delay="0.6s">We’ve partnered with corporations and rising startups all over the world. We’ve worked hand in hand with these companies to provide them with excellent digital and design solutions.</p>
              
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> </div>
    </div>
    
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Consulting Inc</h4>
                 <p class="wow fadeInDown">Globally acclaimed business and career consultation firm for clients worldwide.</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients02.png')}}">
              </div>
               <h4 class="wow fadeInDown">Automotive & transportation</h4>
                 <p class="wow fadeInDown">Assisting automotive companies all over the planet with design solutions.</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients03.png')}}">
              </div>
               <h4 class="wow fadeInDown">Accounts & Finance</h4>
                 <p class="wow fadeInDown">Helping tax based accounting firms with solutions for a proper digital existence</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients04.png')}}">
              </div>
               <h4 class="wow fadeInDown">Logistics</h4>
                 <p class="wow fadeInDown">Digital services to assist logistic providers internationally with solutions</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients05.png')}}">
              </div>
               <h4 class="wow fadeInDown">Information Technology</h4>
                 <p class="wow fadeInDown">Our team of design and development professionals have helped IT firms worldwide</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients06.png')}}">
              </div>
               <h4 class="wow fadeInDown">Education & Human</h4>
                 <p class="wow fadeInDown">Our team of digital and back-end professionals provide you with education based tech solutions </p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients07.png')}}">
              </div>
               <h4 class="wow fadeInDown">Telecommunication</h4>
                 <p class="wow fadeInDown">Assisting telcom in connecting with one another</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients08.png')}}">
              </div>
               <h4 class="wow fadeInDown">Electronics</h4>
                 <p class="wow fadeInDown">Providing business driven technical solutions for electronic firms worldwide</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients09.png')}}">
              </div>
               <h4 class="wow fadeInDown">Media & Entertainment</h4>
                 <p class="wow fadeInDown">Allowing media and entertainment solutions to perform excellently on the web</p>
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('include.awards')





@include('include.quote')

@section('footer')
  @parent
@stop


@stop
@section('scripts')
@stop