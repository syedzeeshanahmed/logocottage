@extends('layout.master')


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

    .login h2::before{
      display: none;
    }
</style>





   <div class="login">
     <div class="table">
       <div class="cell">

      <form class="form form-signin login" method="POST" autocomplete="false" action="{{ route('user.reset.password') }}">

        <h2 class="form-signin-heading text-center">Reset Password</h2>
        @if($errors->first()!=null)
          <p class="text-center">Msg: {{ $errors->first() }}</p>
        @else
          <p class="text-center">Login with your email address</p>
        @endif 

        <input type="password" id="inputPassword" class="form-control"  name="password" placeholder="password here" required="required">
        {{ csrf_field() }}

        <button class="btn btn-lg btn-primary btn-block" type="submit">RESET</button>

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
    <a class="privacy" href="#">Privacy Policy</a> <a class="term" href="#">Terms of Service</a>
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