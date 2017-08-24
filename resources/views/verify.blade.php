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

    .verify-thank-you {
      padding: 20px 40px;
      width: 800px;
      margin: 0 auto;
      border: 1px solid #fff;
      background: rgba(255,255,255,0.1);
    }

    .login h2::before{
      display: none;
    }

</style>





   <div class="login">
     <div class="table">
       <div class="cell text-center">

          @if(!isset($creds))
            <div class="verify-thank-you">
            @if($errors->first()!=null)
              <h2 class="form-signin-heading text-center">{{$errors->first()}}</h2>
              <p class="text-center"> <a href="{{ route('login') }}"> Login </a> to Continue </p>
            @else
              <h2> Thank you registering at Design Proficient </h2>
              <p> We have sent you an email, please check your email, Thank you. </p>
            @endif
            </div>
          @else
            <div class="verify-thank-you"> 
              <h2 class="form-signin-heading text-center">{{ $creds['main'] }}</h2>
              <p class="text-center">{{ $creds['second'] }}</p>
              <a href="{{ route('login') }}"> Login </a>
            </div> 
          @endif  
              



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
@stop




@stop
