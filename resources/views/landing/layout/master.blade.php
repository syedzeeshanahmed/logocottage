<style>
.main-scroll-overlay .slimScrollBar {
    display: none !important;
}
</style>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico?v=2">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="stylesheet" href="{{asset('css/tstyles.css')}}">
<!--<link rel="stylesheet" id="changer" href="{{asset('css/themes.css')}}">-->
<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.datetimepicker.css')}}" >
<meta name="csrf_token" data-content="{{ csrf_token() }}" />
@yield('metas')
</head>
<body>

@if (!empty($__env->yieldContent('no-portfolio-modals')))
@else
  @include('include.portfoliomodal')
@endif

<header>
  <div class="header">
    <div id="header-sroll" class="wow">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
            <div class="logo"><a href="{{ route('home') }}" title="Design Proficient"> </a></div>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 text-right">
            <div class="header-content">
              <div class="call-action"> 
              <span onclick="window.location.href=' {{ route("user.book") }} '" ><small><i class="fa fa-calendar" aria-hidden="true"></i></small>Book a Call</span> 
              <span><small><i class="fa fa-phone-square" aria-hidden="true"></i></small>+1-866-976-8874</span>
              <span class="login_now">
                @if(session('is_logged') != 1 )
                  <a href=" {{route('login')}} "><small><i class="fa fa-unlock-alt" aria-hidden="true"></i></small>Login</a>
                  <a href=" {{route('user.signup')}} " class="reg_top"><small><i class="fa fa-user" aria-hidden="true"></i></small>Register</a>
                @else
                  <a href=" {{route('user.profile')}} "><small><i class="fa fa-user" aria-hidden="true"></i></small>Profile</a>
                @endif
              </span> </div>
              <div class="main-menu">
                <nav id="nav">
                  <ul id="navigation">
                    <li><a data-active="home" class="nav-anim" href="{{ route('home') }}">Home</a></li>
                    <li><a data-active="about" class="nav-anim" href="{{ route('about') }}">About us</a></li>
                    <li><a data-active="services" class="nav-anim" href="{{ route('services') }}">Services</a>
                      <ul>
                        <li><a class="nav-anim-dd" href="{{ route('service.logodesign') }}">Logo Design </a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.brand') }}">Brand Development</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.collateral') }}">Marketing Collaterals</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.web') }}">Web Design & Development</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.app') }}">App Design & Development</a></li>
                        <li><a class="nav-anim-dd last" href="{{ route('service.illustration') }}">2D & 3D Illustration</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.motiongraphics') }}">Motion Graphics</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.copywriting') }}">Creative Copywriting</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.marketing') }}">Digital Marketing</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.backend') }}">Back-End Development</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.management') }}">Website Management</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.domain') }}">Domain Registration</a></li>
                        
                        
                        

                        <!--<li><a data-active="Brand-Identity-Development" data-child="1" data-parent="services" class="nav-anim-dd" href="{{ route('service.brand') }}">Brand Identity Development</a></li>
                        <li><a data-active="Web-Design-and-Development" data-child="1" data-parent="services" class="nav-anim-dd" href="{{ route('service.web') }}">Web Design & Development</a></li>
                        <li><a data-active="Back-End-Development" data-child="1" data-parent="services" class="nav-anim-dd" href="{{ route('service.backend') }}">Back-End Development</a></li>
                        <li><a data-active="Digital-Marketing" data-child="1" data-parent="services" class="nav-anim-dd" href="{{ route('service.marketing') }}">Digital Marketing</a></li>
                        <li><a data-active="Marketing-Collateral" data-child="1" data-parent="services" class="nav-anim-dd" href="{{ route('service.collateral') }}">Marketing Collaterals</a></li>
                        <li><a data-active="Motion-Graphics" data-child="1" data-parent="services" class="nav-anim-dd" href="{{ route('service.motiongraphics') }}">Motion Graphics</a></li>
                        <li><a data-active="Website-Management" data-child="1" data-parent="services" class="nav-anim-dd" href="{{ route('service.management') }}">Website Management</a></li>
                        <li><a data-active="Domain-Registration" data-child="1" data-parent="services" class="nav-anim-dd" href="{{ route('service.domain') }}">Domain Registration</a></li>
                        <li><a data-active="Creative-Copywriting" data-child="1" data-parent="services" class="nav-anim-dd" href="{{ route('service.copywriting') }}">Creative Copywriting</a></li>
                        <li><a data-active="2D-&-3D-Illustration" data-child="1" data-parent="services" class="nav-anim-dd last" href="{{ route('service.illustration') }}">2D & 3D Illustration</a></li>-->

                      </ul>
                    </li>
                    <li><a data-active="packages" class="nav-anim" href="{{ route('packages', 'logo') }}">Packages</a></li>
                    <li><a data-active="combo-packages" class="nav-anim" href="{{ route('ComboPackages') }}">COMBO PACKAGES</a></li>
                    
                    <!--<li><a data-active="membership-plans" class="nav-anim" href="{{ route('membershipplans') }}">Membership</a></li>-->
                    <li><a data-active="custom-packages" class="nav-anim" href="{{ route('custom-packages') }}">Custom Package</a></li>
                    <li><a data-active="showcase" class="nav-anim" href="{{ route('portfolio') }}">Showcase</a></li>
                    
                    <li><a data-active="contact" class="nav-anim" href="{{ route('contact') }}">Contact</a></li>
                    
                  </ul>
                </nav>
              </div>
              <div class="navicon wow"> <a class="nav-toggle" href="#"><span></span></a> </div>


              <div class="header-nav">
              <div class="container">
                <div class="logo-inside"><a href="{{ route('home') }}" title="Logo Sensation"></a></div>
                <!--<nav>
                  <ul class="primary-nav">
                    <li class="feature-menu"><a href="{{ route('services') }}">Services</a></li>
                    <li class="feature-menu"><a href="{{ route('packages') }}">Packages</a></li>
                    <li class="feature-menu"><a href="{{ route('ComboPackages') }}">Combo Packages</a></li>
                    <li class="feature-menu m-b-3"><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a class="nav-anim-dd" href="{{ route('service.brand') }}">Brand Identity Development</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.web') }}">Web Design & Development</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.backend') }}">Back-End Development</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.marketing') }}">Digital Marketing</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.collateral') }}">Marketing Collaterals</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.motiongraphics') }}">Motion Graphics</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.management') }}">Website Management</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.domain') }}">Domain Registration</a></li>
                        <li><a class="nav-anim-dd" href="{{ route('service.copywriting') }}">Creative Copywriting</a></li>
                        <li><a class="nav-anim-dd last" href="{{ route('service.illustration') }}">2D & 3D Illustration</a></li>
                  </ul>
                </nav>-->
                
                
                <nav>
                 <div class="row">
                  <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                  <ul class="primary-nav clearfix">
                    <li class="feature-menu"><a href="{{ route('about') }}">About us</a></li>
                    <li class="feature-menu"><a href="{{ route('services') }}">Services</a></li>
                    <li class="feature-menu"><a href="{{ route('packages', 'logo') }}">Packages</a></li>
                    <li class="feature-menu"><a href="{{ route('ComboPackages') }}">Combo Packages</a></li>

                    <!-- <li class="feature-menu"><a href="{{ route('membershipplans') }}">Membership</a></li> -->
                    <li class="feature-menu"><a href="{{ route('custom-packages') }}">Custom Package</a></li>
                    <li class="feature-menu"><a href="{{ route('portfolio') }}">Showcase</a></li>
                    <li class="feature-menu"><a href="{{ route('contact') }}">Contact</a></li>
                    
                   
                  </ul>
                  </div>
                  <div class="col-md-8 col-lg-8  col-sm-6 col-xs-12">
                  <div class="main-scroll-overlay">
                  
                    <ul id="parent" class="page-overlay-inner">
                        <li class="child"><a href="{{ route('service.logodesign') }}">Logo Design</a></li>
                        <li class="child"><a id="brand-identity" href="{{ route('service.brand') }}">Brand Development</a></li>
                        <li class="child"><a href="{{ route('service.collateral') }}">Marketing Collaterals</a></li>
                        <li class="child"><a id="brand-identity" href="{{ route('service.web') }}">Web Design & Development</a></li>
                        <li class="child"><a id="brand-identity" href="{{ route('service.app') }}">App Design & Development</a></li>
                        <li class="child"><a href="{{ route('service.illustration') }}">2D & 3D Illustration</a></li>
                        <li class="child"><a href="{{ route('service.motiongraphics') }}">Motion Graphics</a></li>
                        <li class="child"><a href="{{ route('service.copywriting') }}">Creative writing</a></li>
                        <li class="child"><a href="{{ route('service.marketing') }}">Digital Marketing</a></li>
                        <li class="child"><a href="{{ route('service.backend') }}">Back-End Development</a></li>
                        <li class="child"><a href="{{ route('service.management') }}">Website Management</a></li>
                        <li class="child"><a href="{{ route('service.domain') }}">Domain Registration</a></li>
                        
                        
                    </ul>
                    <div class="overlay-scroll-btn">
                        <div id="down"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                         <div id="up"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                     </div>   
                        
                      
                   </div>
                  </div>
                 </div>
                </nav>
                
                
                <div class="dropmenu_footer">
                  <div class="row">
                    <div class="col-md-12">
                      <p>
                      <div style="display: none;"> <a href="#">English</a> <a href="#" class="active-lang">Arabic</a> </div>
                      <span class="copyright">© 2017 Design Proficient | All rights reserved.</span> <span class="pull-right"> 
                      <a target="_blank" href="https://www.facebook.com/Design-Proficient-1405350932866526/?ref=bookmarks"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://twitter.com/dsnproficient"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://www.linkedin.com/company-beta/13343612"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://www.instagram.com/dsnproficient/"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://www.pinterest.com/dsnproficient/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://vimeo.com/dsnproficient"><i class="fa fa-vimeo" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://dribbble.com/dsnproficient"><i class="fa fa-dribbble" aria-hidden="true"></i></a> </span>
                      </p>
                    </div>
                    <div class="col-md-8" style="display: none;">
                      <div class="footer-links">
                        <ul class="footer-group">
                          <li><a href="#">Site Map</a></li>
                          <li><a href="#">Site Feedback</a></li>
                          <li><a href="#">Work With Us</a></li>
                          <li><a href="{{ route('privacy-policy') }}">Privacy</a></li>
                          <li><a href="{{ route('term') }}">Terms of Service</a></li>
                          <li><a href="#">Terms of Sale</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            </div>
            <div class="top-action"> <a class="btn-line-fill" href="{{ route('ShareYourIdea') }}">GET A FREE QUOTE</a> </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
@yield('body')

@section('footer')
<footer class="wow">
  <div class="container sub-footer section-padding">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="clearfix">
    <div class="col-md-4 col-lg-4 col-xs-12"> 
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h3>TOP NOTCH SERVICES</h3>
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <i class="more-less glyphicon glyphicon-minus"></i>
                        TOP NOTCH SERVICES
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="clearfix">
                      <div class="address">
                        <ul>
                          <li><a href="{{ route('service.brand') }}">Brand Development</a></li>
                          <li><a href="{{ route('service.web') }}">Web Design and Development</a></li>
                          <li><a href="{{ route('service.backend') }}">Back-End Development</a></li>
                          <li><a href="{{ route('service.marketing') }}">Digital Marketing</a></li>
                          <li><a href="{{ route('service.collateral') }}">Marketing Collateral</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xs-12">
                    <ul>
                      <li><a href="{{ route('service.motiongraphics') }}">Motion Graphics</a></li>
                      <li><a href="{{ route('service.management') }}">Website Management</a></li>
                      <li><a href="{{ route('service.domain') }}">Domain Registration</a></li>
                      <li><a href="{{ route('service.copywriting') }}">Creative Copywriting</a></li>
                      <li><a href="{{ route('service.illustration') }}">2D & 3D Illustration</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    <div class="col-md-2 col-lg-2 col-xs-12"> 

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h3>PACKAGES</h3>
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <i class="more-less glyphicon glyphicon-minus"></i>
                        PACKAGES
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <div class="col-md-12 col-lg-12 col-xs-12">
                    <ul>
                      <li><a href="{{ route('packages' , 'logo') }}">Logo Packages</a></li>
                      <li><a href="{{ route('packages' , 'web') }}">Web Packages</a></li>
                      <li><a href="{{ route('packages' , 'branding') }}">Corporate Branding</a></li>
                      <li><a href="{{ route('packages' , 'ecommerce') }}">Ecommerce</a></li>
                      <li><a href="{{ route('packages' , 'motion-graphic') }}">Motion Graphics</a></li>
                      <li><a href="{{ route('packages' , 'seo') }}">SEO</a></li>
                      <li><a href="{{ route('packages' , 'social') }}">Social Media</a></li>
                      <li><a href="{{ route('packages' , 'content') }}">Content Writing</a></li>
                     
                    </ul>
                 </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="col-md-2 col-lg-2 col-xs-12"> 

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h3>COMPANY</h3>
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <i class="more-less glyphicon glyphicon-minus"></i>
                        COMPANY
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                <div class="col-md-12 col-lg-12 col-xs-12 col-md-2">
                    <ul>
                      <li><a href="{{ route('about') }}">About</a></li>
                      <li><a href="{{ route('services') }}">Services</a></li>
                      <li><a href="{{ route('portfolio') }}">Showcase</a></li>
                      <li><a href="{{ route('contact') }}">Contact</a></li>
                     <!-- <li><a href="{{ route('blog') }}">Blog</a></li>-->
                    </ul>
                </div>
               </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 col-lg-4 col-xs-12"> 

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
                <h3>Newsletter Subscription</h3>
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <i class="more-less glyphicon glyphicon-minus"></i>
                        Newsletter Subscription
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                <div class="col-md-12 col-lg-12 col-xs-12 col-md-2">
                    <ul>
          <li>Sign up for free newsletters & get more of logo sensation delivered to you.</li>
          <li class=newsletter>
            <div class=subscribe>
              <form method="POST" id="subscribe_form" action="{{ route('user.subscribe') }}" data-loader=".loader_quote_subscribe_fold">
                <input name="email" type="email"  onblur='this.placeholder="Email"'onfocus='this.placeholder=""'placeholder="Email" required>
                <input name="page" type="hidden" value="{{Request::url()}}">
                {{ csrf_field() }}
                <label class="exist" style="display:none">You are already Subscribed!</label>
                <button id="subscribe" name="subscribe" type="submit" class="btn-fill btn-quote">Submit</button>
              </form>
            </div>
          </li>
        </ul>
        
        <ul class="footer-group">
        <li><a target="_blank" href="https://www.facebook.com/Design-Proficient-1405350932866526/?ref=bookmarks"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://twitter.com/dsnproficient"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/company-beta/13343612"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.instagram.com/dsnproficient/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.pinterest.com/dsnproficient/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://vimeo.com/dsnproficient"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://dribbble.com/dsnproficient"><i class="fa fa-dribbble" aria-hidden="true"></i></a> </li>
      </ul>
                </div>
               </div>
            </div>
        </div>
    </div>
    
    <!--<div class="col-md-4 col-lg-4 col-xs-12"> 

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                    <h3>Newsletter Subscription</h3>
                    
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Newsletter Subscription
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                 <div class="col-md-12 col-lg-12 col-xs-12 col-md-2">
                    <ul>
          <li>Sign up for free newsletters & get more of logo sensation
            delivered to you.</li>
          <li class=newsletter>
            <div class=subscribe>
              <form method="POST" id="subscribe_form" action="{{ route('user.subscribe') }}" data-loader=".loader_quote_subscribe_fold">
                <input name="email" type="email"  onblur='this.placeholder="Email"'onfocus='this.placeholder=""'placeholder="Email" required>
                <input name="page" type="hidden" value="{{Request::url()}}">
                {{ csrf_field() }}
                <label class="exist" style="display:none">You are already Subscribed!</label>
                <button id="subscribe" name="subscribe" type="submit" class="btn-fill btn-quote">Submit</button>
              </form>
            </div>
          </li>
        </ul>
        </div>
                </div>
            </div>
        </div>
    </div>-->
    
  
    </div>
  </div>
 </div>
  <section class="copright">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-12">
          <p>© 2017 Design Proficient  | All rights reserved.</p>
        </div>
        <div class="col-md-8"> <span class="privacy pull-right">
        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
        <a href="{{ route('term') }}">Terms of Service</a></span> </div>
      </div>
    </div>
  </section>
</footer>
 


<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<?php endif; ?>



<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{asset('js/pricing-slide.js')}}"></script>
<?php endif; ?>

  

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{asset('js/selectFx.js')}}"></script>
<?php endif; ?>

 
<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{asset('js/classie.js')}}"></script>
<?php endif; ?>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{asset('js/app.js')}}"></script>
<?php endif; ?>


<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script type="text/javascript" src="{{asset('js/revolution.min.js')}}"></script>
<?php endif; ?>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{asset('js/scripts.js')}}"></script>
<?php endif; ?>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<?php endif; ?>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<?php endif; ?>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{asset('js/dataTables.material.min.js')}}"></script>
<?php endif; ?>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}"></script>
<?php endif; ?>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="{{asset('js/tscripts.js')}}"></script>
<?php endif; ?>


<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3ERREXEymAInmKXq4xzkffOwPshRiisJ";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<?php endif; ?>

@show

@yield('scripts')

</body>
</html>