@extends('layout.master')

@section('metas')
<title>Thankyou for your response | Design Proficient</title>
<meta description="Thank-you for providing us the details that we needed. We'll be providing with your required information very soon.">
@stop

@section('body')
<style type="text/css">
  
  .secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }

.thankyou-services {
    background-color: #ffffff;
    height: auto;
}

header .logo a { background-position: bottom center;   }
.call-action span{ color: #16a085; }
.call-action span small{ color: #626262; }
.nav-toggle{ opacity: 0.3; }
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
.thankyou{ height: 650px; }

</style>






<section class="thankyou-services">
  <div class="container">

  </div>
</section>

<section class="section-padding thankyou">
  <div class="d_t">
    
    <div class="d_c">
        

        <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>REQUEST SUBMITTED</h4>
        <h3>Bazinga! Your Response Has Been Recorded</h3>
        <p class="text-center">Thank you for sharing your ideas with our team at Design Proficient. <br>
         One of our brand development consultants will be in contact with you shortly <br>
         to discuss your design ideas.</p>
        <div class="actions text-center">
          <a href="{{ route('services') }}" class="btn-fill">Disover More</a>
          <a href="{{ route('portfolio') }}" class="btn-line-fill">Go to Portfolio</a>
        </div>  
      </div>
    </div>
  </div>


    </div>


  </div>
</section>


@section('footer')
  @parent
@stop



@stop 

