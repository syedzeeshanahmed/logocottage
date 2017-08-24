@extends('layout.master')

@section('metas')
<title>Elite E-Commerce Development Package | Logo Sensation</title>
<meta description="For E-Stores of all shapes and sizes, the elite e-commerce development package is just what you need. You can even get a custom quote!">
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
</style>
<section class="hero-services">
  <div class="container">
    <div class="portfolio-jump"> <a href="#" class="btn-line draw">TOP Packages <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
    <div class="d_t">
      <div class="d_c">
        <h4 class="wow fadeInDown" data-wow-delay="0.2s">Ecommerce Elite Package</h4>
        <h3 class="wow fadeInDown" data-wow-delay="0.4s">Tactically Placing Your E-Store Toe-to-Toe <br>with The Best in The Industry</h3>
        <p class="wow fadeInDown" data-wow-delay="0.6s">Ecommerce web stores are the image of tomorrow, they are the newest and most <br> effective form of buying and selling. An effective E-Store can be a better revenue <br> generating medium than a physical store. With our Ecommerce Elite Package, <br> we aim to do just that.</p>
        <div class="actions wow fadeInDown" data-wow-delay="0.8s"><a href="{{ route('portfolio') }}" class="btn-fill">Go to Portfolio</a></div>
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
            <h3>E-COMMERCE ELITE</h3>
            <p>Suitable for internationally acclaimed E-Stores</p>
              <span class="old-price">AUD-$4,999.99 <i class="cut"></i></span> 
            <span class="price">AUD-$2,499.99</span>
            <ul class="no-scroll">
              <li>Unlimited Pages Website with Unique Design</li>
              <li>5 Custom Logo Design</li>
              <li>CMS / Backend Adminstrative System</li>
              <li>Unlimited Products with Unlimited Categories</li>
              <li>FREE Unlimited Revisions</li>
              <li>Turn around time 2-3 business days</li>
              <li>Custom Shopping Cart Integration</li>
              <li>Multiple Payment Module Integration</li>
              <li>Multiple Shipping Module Integration</li>
              <li>Product Ratings & Reviews</li>
              <li>Sales & Inventory Management System</li>
              <li>Multiple Currency Support</li>
              <li>Customer Login Area (Sign-Up & Sign-In)</li>
              <li>Mobile Responsive</li>
              <li>Social Media Designs (Facebook, Twitter, Youtube)</li>
              <li>Dedicated Team of Expert Designers & Developers</li>
              <li>Dedicated Project Manager</li>
              <li>News Letter Subscription</li>
              <li>100% Satisfaction Guarantee</li>
              <li>100% Money Back Guarantee*</li>
            </ul>
            <input class="btn btn-fill" onclick="window.location.href='{{ route('OrderNow', [ 'E-COMMERCE ELITE', '2,499.99' ] ) }}'" type="submit"  value="ORDER NOW" />
            <p>20% more OFF on Next Order</p>
            <div class="actions"> <a class="action-no"> <i class="fa fa-phone-square"></i> +1 866 598 4317</a> <a class="actions action-chat"> <i class="fa fa-wechat"></i> LIVE CHAT</a> </div>
          </div>
        </div>
      </div>


      <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 is-colcell">
        <div class="clearfix">
            <h4 class="wow fadeInDown text-left" data-wow-delay="0.2s">Detailed Package</h4>
            <h3 class="wow fadeInDown text-left" data-wow-delay="0.4s">Our Ecommerce Elite Package is Tailor-Made for Super Stores that Focus on ROI</h3>
            <p class="wow fadeInDown text-left" data-wow-delay="0.6s">Ever since the inception of Ecommerce websites, buying and selling has become easier for both vendors and customers. However, there’s a clear difference between small e-stores and huge super stores. Similarly, that’s how the revenue differs as well. With our Ecommerce Elite Package, we aim to provide you with all the features that a super-store needs at just the right price. 
</p>

  <p class="wow fadeInDown text-left" data-wow-delay="0.6s">Being a brand identity development firm we first care about the brand identity of the product. This is mainly why the package comes with 5 custom logo design concepts along with unlimited custom web design pages. A proper CMS for administrative backend is just what you need and just what you’ll get with the ecommerce elite package. If you’re going to open a superstore then you’re bound to have way too many products, this is where our ecommerce elite package comes in. Upload unlimited products and create unlimited categories. Think something’s wrong? Revise it! The package additionally comes with unlimited revisions to make sure you’ve got everything just the way you want.  </p>
  <p class="wow fadeInDown text-left" data-wow-delay="0.6s">All this and more with our Ecommerce Elite package making it the perfect investment for any ROI-centric  ecommerce super store online.</p>
            <div class="actions wow fadeInDown" data-wow-delay="0.8s"><a href="{{ route('portfolio') }}" class="btn-fill">Go to Portfolio <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
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