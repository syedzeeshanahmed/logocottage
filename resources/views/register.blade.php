@extends('layout.master')


@section('body')
<style type="text/css">
  body{background:url( '{{ asset("img/bg.jpg") }}' );background-size:cover;}
  .secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }
    .hero-services {
      background: url( '{{ asset("img/banner-packages.png") }}' );
      background-size: auto !important;
    }
  .header-nav{
      display: none;
    }    

    .register h2::before{
      display: none;
    }
</style>



   <div class="register">
     <div class="table">
       <div class="cell">

      <form class="form form-signup login" method="POST" autocomplete="false" action="{{ route('user.register') }}">

        <h2 class="form-signin-heading text-center">Sign up</h2>
        @if($errors->first()!=null)
          <p class="text-center reg-inner">Msg: {{ $errors->first() }}</p>
        @else
          <p class="text-center reg-inner">Register with your email address</p>
        @endif 

            <input type="text" class="form-control"  name="name" placeholder="name here" required="required">
            <input type="email" class="form-control"  name="email" placeholder="email here" required="required">
            <input type="password" class="form-control"  name="password" placeholder="password here" required="required">
            <input type="number" class="form-control"  name="number" placeholder="number here" required="required"> 
            <input type="text" class="form-control"  name="city" placeholder="city here" required="required">
            <input type="text" class="form-control"  name="country" placeholder="country here" required="required">
        
        
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> I Accept the terms and Conditions
          </label>
        </div>
        
        

        
        {{ csrf_field() }}


        <button class="btn btn-lg btn-primary btn-block" type="submit">REGISTER</button>
        <div class="register register-plus">
          <p class="text-center">Already a member?  <a href=" {{ route('login') }} ">Login now</a></p>
        </div>
      </form>


</div>
</div>
<footer class="login">
 <div class="container">
 <div class="row">
  <div class="col-md-6">
    <p>Copyright &copy; 2017 Design Proficient. All rights reserved</p>
  </div>
  <div class="col-md-6">
   <div class=" main-privacy">
    <a class="privacy" href="{{ route('privacy-policy') }}">Privacy Policy</a> <a class="term" href="{{ route('term') }}">Terms of Service</a>
  </div>
 </div> 
  </div>
 </div>
</footer>
</div>



@section('footer')
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
<script src="{{asset('js/pricing-slide.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script> 
<script src="{{asset('js/scripts.js')}}"></script> 
<script src="{{asset('js/tscripts.js')}}"></script>
<script src=" {{ asset('js/tscripts.js') }}"></script>
@stop




@stop