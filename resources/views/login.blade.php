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
    .checkbox #ckhBox{
      position: inherit;
      margin-left: 0px;
    }

    .checkbox label{
      padding-left: 0px;
    }

    .header-nav{
      display: none;
    }

    div.login{
      position: fixed;
      width: 100%;
      height: 100%  !important;
    }

    .login h2::before{
      display: none;
    }

</style>





   <div class="login">
     <div class="d_t">
      <div class="d_c">

      <form class="form form-signin login" method="POST" autocomplete="false" action="{{ route('user.login') }}">

        <h2 class="form-signin-heading text-center">Login</h2>
        @if($errors->first()!=null)
          <p class="text-center">Msg: {{ $errors->first() }}</p>
        @else
          <p class="text-center">Login with your username or email address</p>
        @endif 
        <input type="email" id="inputEmail" class="form-control" placeholder="Email Address or ID" name="email" required="required" >

        <input type="password" id="inputPassword" class="form-control"  name="password" placeholder="password here" required="required"> 
        {{ csrf_field() }}
        <div class="checkbox forget">
          
                <input type="checkbox"  value="remember-me" id="ckhBox" /> <label  for="ckhBox"> Remember me</label>
          
          <a href=" {{ route('user.forgot') }} ">
            Forgot your password?
          </a>
        </div>

        <button class="btn-block" type="submit">LOGIN NOW</button>
        <div class="register">
          <p class="text-center">Not a member? <a href=" {{ route('user.signup') }} ">Register now</a></p>
        </div>
      </form>
</div>
</div>
<footer class="login">
 <div class="container">
 <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <p>Copyright &copy; 2017 Design Proficient. All rights reserved</p>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
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