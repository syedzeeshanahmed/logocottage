@extends('layout.master')



@section('body')
<style type="text/css">
  
  .secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }


</style>






<section class="hero-services">
  <div class="container">
    <div class="portfolio-jump"> <a href="#" class="btn-line draw">TOP Packages <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
    <div class="cup"></div>
    <div class="cam"></div>
    <div class="hand"></div>
    <div class="flower"></div>
    <div class="d_t">
      <div class="d_c">
        <h4 class="wow fadeInDown" data-wow-delay="0.2s">OUR SERVICES</h4>
        <h3 class="wow fadeInDown" data-wow-delay="0.4s">Assisting Corporations in Becoming<br />  the Center
of Attention with Fresh <br />Brand Strategies and Compelling Design
</h3>
        <p class="wow fadeInDown" data-wow-delay="0.6s">At Logo Sensation, we help brands tell their stories with exceptional <br>design strategies. 
          Finesse is what we care for when constructing<br> brand existence for corporations worldwide. 
          Creativity isn’t common <br>and we love to stay uncommon with our design solutions.</p>
        <div class="actions wow fadeInDown" data-wow-delay="0.8s"><a href="#" class="btn-fill">Go to Portfolio</a></div>
      </div>
    </div>
  </div>
</section>


@include('include.process')

@include('include.qualities')

@include('include.subscribe_fold')

@include('include.testimonials')

@include('include.quote')

@section('footer')
  @parent
@stop

@stop 