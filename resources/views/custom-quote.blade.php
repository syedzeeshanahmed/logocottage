@extends('layout.master')
@section('body')
@section('metas')
<title>Brand Identity Design and Development Services | About Us</title>
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
<section class="section-padding hero-services about-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-md-offset-0 col-sm-offset-2">
        <div class="about-bg custom-qoute">
          <h3 class="wow fadeInDown breakdown-before-left top-spacing" data-wow-delay="0.2s">Custom Quote Form</h3>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <form id="jquery-order-form" class="jof form-horizontal" action="submit.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="sub-option o-5 o-text custom-field" data-type="text ">
              <div class="well">
                <input type="text" id="f_5" name="f_5" value="" placeholder="Name">
              </div>
            </div>
            <div class="sub-option o-5 o-text custom-field" data-type="text">
              <div class="well">
                <input type="email" id="f_5" name="f_5" value="" placeholder="Email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="sub-option o-5 o-text custom-field" data-type="text ">
              <div class="well">
                <input type="phone Number" id="f_5" name="f_5" value="" placeholder="Phone Number">
              </div>
            </div>
            <div class="sub-option o-5 o-text custom-field" data-type="text">
              <div class="well">
                <input type="country" id="f_5" name="f_5" value="" placeholder="Country">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
       <div class="sidebar"><div class="total well">
        <p>Here is the bottom of the form. If you scroll below this point, you should see the summary.</p>
       </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="section-padding hero-services about-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-md-offset-0 col-sm-offset-2">
        <div class="about-bg custom-qoute">
          <h3 class="wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">I am interested in:</h3>
          <p>Please choose the desired category</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <form id="jquery-order-form" class="jof form-horizontal" action="submit.php" method="post" enctype="multipart/form-data">
          <div class="row">
          <div class="sub-option o-5 o-text clearfix" data-type="text">
            <h4>For Web</h4>
            <div class="well pull-left">
                <ul>
                <li>
                <input type="checkbox" data-cost="1" value="One" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete Corporate Website 5-10 Pages</span></span></li>
                <li>
                <input type="checkbox" data-cost="2" value="Two" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete Corporate Website 10-20 Pages</span></span></li>
                <li>
                <input type="checkbox" data-cost="3" value="Three" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete Corporate Website 20+ Pages</span></span></li>
                <li>
                <input type="checkbox" data-cost="3" value="Three" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete E-Commerce Website (without payment integration)</span></span></li>
                <li>
                <input type="checkbox" data-cost="3" value="Three" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete E-Commerce Website (with Payment Integration)</span></span></li>
                </ul>
                
                </div>
          </div>
         </div>
        </form>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">

      </div>
    </div>
 </section>
    <section class="section-padding hero-services about-content">
     <div class="container">
      <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <form id="jquery-order-form" class="jof form-horizontal" action="submit.php" method="post" enctype="multipart/form-data">
          <div class="row">
          <div class="sub-option o-5 o-text clearfix" data-type="text">
            <h4>For Brand Identity</h4>
            <div class="well pull-left">
                <ul>
                <li>
                <input type="checkbox" data-cost="1" value="One" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete Corporate Website 5-10 Pages</span></span></li>
                <li>
                <input type="checkbox" data-cost="2" value="Two" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete Corporate Website 10-20 Pages</span></span></li>
                <li>
                <input type="checkbox" data-cost="3" value="Three" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete Corporate Website 20+ Pages</span></span></li>
                <li>
                <input type="checkbox" data-cost="3" value="Three" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete E-Commerce Website (without payment integration)</span></span></li>
                <li>
                <input type="checkbox" data-cost="3" value="Three" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete E-Commerce Website (with Payment Integration)</span></span></li>
                </ul>
                
                </div>
          </div>
         </div>
        </form>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">

      </div>
    </div>
     </div>
    </section>
    <section class="section-padding hero-services about-content">
  <div class="container">
   <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <form id="jquery-order-form" class="jof form-horizontal" action="submit.php" method="post" enctype="multipart/form-data">
          <div class="row">
          <div class="sub-option o-5 o-text clearfix" data-type="text">
            <h4>For Digital Marketing</h4>
            <div class="well pull-left">
                <ul>
                <li>
                <input type="checkbox" data-cost="1" value="One" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete Corporate Website 5-10 Pages</span></span></li>
                <li>
                <input type="checkbox" data-cost="2" value="Two" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete Corporate Website 10-20 Pages</span></span></li>
                <li>
                <input type="checkbox" data-cost="3" value="Three" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete Corporate Website 20+ Pages</span></span></li>
                <li>
                <input type="checkbox" data-cost="3" value="Three" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete E-Commerce Website (without payment integration)</span></span></li>
                <li>
                <input type="checkbox" data-cost="3" value="Three" name="f_1">
                <label for="f_1"></label><span class="price-tag-wrapper" style="opacity: 1;"><span class="price-tag">Complete E-Commerce Website (with Payment Integration)</span></span></li>
                </ul>
                
                </div>
          </div>
         </div>
        </form>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">

      </div>
    </div>
   </div>
  </section>
  
<section class="section-padding hero-services">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <form id="jquery-order-form" class="jof form-horizontal" action="submit.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="sub-option o-5 o-text custom-field" data-type="text ">
              <div class="well">
                <label>Complete Project Brief</label>
                <input type="text" id="f_5" name="f_5" value="" placeholder="Tell us briefly about everything you have in mind">
              </div>
            </div>
            <div class="sub-option o-5 o-text custom-field" data-type="text">
              <div class="well">
                <label>Schedule a call (optional)</label>
                <input type="text" id="f_5" name="f_5" value="" placeholder="What’s the best time we can discuss this over a phone call?">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
      </div>
    </div>
  </div>
</div></section>
@section('footer')
  @parent
@stop


@stop
@section('scripts')
@stop