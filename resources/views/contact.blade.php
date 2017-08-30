@extends('layout.master')
@section('metas')
<title>Discuss with the best logo and web designers in the town | Contact Us</title>
<meta description="Like what you see? Talk to us today and discuss your project with our experts. We’re here to provide everything you require.">
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
<div class="contact">
  <section class="contact-topinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Set a meeting with our professionals or call us today to discuss your project with our team of industry-proven professionals</h3>
        </div>
      </div>
    </div>
  </section>
  <section class="in-touch section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <h4 class="text-left">Get in touch.</h4>
          <p>Say hello! Or maybe just grab a coffee with one of our business analysts so we can get to know you and your project better.</p>
          <div class="actions"> <a href="#"> <i class="fa fa-phone-square"></i>+1-866-976-8874</a> <br>
            <a href="mailto:share@designproficient.com"> <i class="fa fa-envelope"></i>share@designproficient.com</a> </div>
        </div>
        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4  col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <h4 class="text-left">Additional Inquiries.</h4>
          <div class="actions">
            <p>Got a question? You can find your answer either on the homepage or you can send us an email at: </p>
            <a href="mailto:idea@designproficient.com"> <i class="fa fa-envelope"></i>idea@designproficient.com</a> </div>
          <div class="actions">
            <p>For placement enquiries contact us at:</p>
            <a href="mailto:query@designproficient.com"> <i class="fa fa-envelope"></i>query@designproficient.com</a> </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding address">
    <section class="addresses clearfix ">
      <div class="container">
        <div class="row is_table">
          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 is_cell">
            <div class="map" id="map"></div>
          </div>
          <div class="col-md-6  col-lg-6 col-sm-6 col-xs-12 is_cell">
            <div class="single-address">
              <h4 class="text-left">United States</h4>
              <h3 class="text-left">Head Office</h3>
              <p class="text-left">Mid-Market, 1390 Market Street, Suite 200, San Francisco, 94102, USA</p>
              <div class="actions"> <a href="#"> <i class="fa fa-phone-square"></i>+1-866-976-8874</a> 
              <a href="mailto:us@designproficient.com"> <i class="fa fa-envelope"></i>us@designproficient.com</a> <a href="mailto:us@designproficient.com" class="btn-fill">Send Query</a> </div>
            </div>
          </div>
        </div>



        <div class="row is_table">
          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 is_cell">
            <div class="map" id="map_2"></div>
          </div>
          <div class="col-md-6  col-lg-6 col-sm-6 col-xs-12 is_cell">
            <div class="single-address">
              <h4 class="text-left">United Kingdom</h4>
              <h3 class="text-left">Executive Office</h3>
              <p class="text-left">Liberty House, Liberty House, 222 Regent Street, London, W1B 5TR, UK</p>
              <div class="actions"> <a href="#"> <i class="fa fa-phone-square"></i>+44-800-0418105</a> 
              <a href="mailto:uk@designproficient.com"> <i class="fa fa-envelope"></i>uk@designproficient.com</a> <a href="mailto:uk@designproficient.com" class="btn-fill">Send Query</a> </div>
            </div>
          </div>
        </div>


        <div class="row is_table">
          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 is_cell">
            <div class="map" id="map_3"></div>
          </div>
          <div class="col-md-6  col-lg-6 col-sm-6 col-xs-12 is_cell">
            <div class="single-address">
              <h4 class="text-left">United Arab Emirates</h4>
              <h3 class="text-left">Executive Office</h3>
              <p class="text-left">The Bridge Building, Levels 2, 3, 4 & 5, Dubai Sports City, Dubai, UAE</p>
              <div class="actions"> <a href="#"> <i class="fa fa-phone-square"></i>+1-866-976-8874</a> <a href="#"> <i class="fa fa-envelope"></i>uae@designproficient.com</a> <a href="mailto:uae@designproficient.com" class="btn-fill">Send Query</a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</div>
@include('include.quote')


@stop

@section('scripts') 
<script type="text/javascript">
  
  function initMap() {
var uk = new google.maps.LatLng(51.513793, -0.140785);
var uae = new google.maps.LatLng(24.472132, 54.373131);
var usa = new google.maps.LatLng(37.777359, -122.417363);

var mapOptions = {
  zoom: 5,
  styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}],
  center: uk,
  mapTypeId: 'roadmap'
};



var usamapOptions = {
  zoom: 5,
  styles: [{"featureType":"all","stylers":[{"saturation":0},{"hue":"#e7ecf0"}]},{"featureType":"road","stylers":[{"saturation":-70}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"simplified"},{"saturation":-60}]}],
  center: usa,
  mapTypeId: 'roadmap'
};


var uaemapOptions = {
  zoom: 5,
  styles:[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#6195a0"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#e6f3d6"},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#f4d2c5"},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#4e4e4e"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#f4f4f4"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#787878"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#eaf6f8"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#eaf6f8"}]}],
  center: uae,
  mapTypeId: 'roadmap'
};



var map = new google.maps.Map(document.getElementById('map'),
    usamapOptions);
var marker = new google.maps.Marker({
          position: usa,
          map: map,
          title: 'USA Office'
        });


var map = new google.maps.Map(document.getElementById('map_2'),
    mapOptions);

var marker = new google.maps.Marker({
          position: uk,
          map: map,
          title: 'UK Office'
        });


var map = new google.maps.Map(document.getElementById('map_3'),
    uaemapOptions);

var marker = new google.maps.Marker({
          position: uae,
          map: map,
          title: 'UAE Office'
        });
}

</script> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCaUuUT2NLz8kEWCddl5s5KpYVMclPpuI&callback=initMap"
  type="text/javascript"></script> 
@section('footer')
  @parent
@stop



@stop