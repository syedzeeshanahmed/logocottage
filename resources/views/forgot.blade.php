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

        .header-nav{
      display: none;
    }


    .checkbox label{
      padding-left: 0px;
    }
  .verify-thank-you {
      padding: 20px 40px;
      width: 800px;
      margin: 0 auto;
      border: 1px solid #fff;
      background: rgba(255,255,255,0.1);
    }

  .verify-thank-you a{
    display: block;
    margin: 0 auto;
    text-align: center;
    border-radius: 10px;
  }

  .login h2::before{
      display: none;
    }  
</style>









        
        @if($errors->first()!=null)
          @if($errors->first('password')==null)
            <div class="login">
           <div class="table">
             <div class="cell"> 
                <div class="verify-thank-you"> 
                  <h2 class="form-signin-heading text-center">{{ $errors->first('main') }}</h2>
                  <p class="text-center">{{ $errors->first('second') }}</p>
                  <a href="{{ route('user.forgot') }}"> Back </a>
                </div> 
              </div>
            </div> 
            </div>

          @else

<!--  Password save form  -->
              <div class="login">
               <div class="table">
                 <div class="cell">
                  <form class="form form-signin login" method="POST" autocomplete="false" action="{{ route('user.reset.save') }}">        
                    <h2 class="form-signin-heading text-center">Password Reset</h2>
                    <p class="text-center">Please enter your new password</p>
                   
                    <input type="password" id="inputPassword" class="form-control"  name="password" placeholder="password here" required="required">

                  {{ csrf_field() }}
                  
                  <button class="btn btn-lg btn-primary btn-block" type="submit">SAVE NEW PASSWORD</button>
                  </form>


          </div>
          </div></div>          

        @endif  
        @else

<!--  Password reset link sending form  -->        
<div class="login">
     <div class="table">
       <div class="cell">
        <form class="form form-signin login" method="POST" autocomplete="false" action="{{ route('user.reset') }}">        
          <h2 class="form-signin-heading text-center">Password Reset</h2>
          <p class="text-center">Please enter your email, <br> we will send you a reset link.</p>
         
          <input type="email" id="inputEmail" class="form-control" placeholder="Email Address or ID" name="email" required="required" >

        {{ csrf_field() }}
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">SEND ME RESET LINK</button>
        <div class="register">
          <p class="text-center">Not a member?<a href=" {{ route('user.signup') }} "> Register now</a></p>
        </div>
        </form>


</div>
</div></div>
        @endif
      


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