@extends('layout.master')

<style type="text/css">
  
  .header, footer{ display: none!important }

.logo {padding-top: 82px;}

body, html {
    height: 100%;
    background-color: #16a085!important;
}

.get_quote {
    background-color: #16a085!important;
    padding-top: 0px;
    
}
.get_quote h4{color: #fff!important; opacity: 0.8;}
.get_quote h3{ color: #fff; }
.get_quote p{ color: #fff!important; opacity: 0.8; }

.get_quote .form-control {
     border: 1px solid rgba(255, 255, 255, .5)!important; 
    color: #fff!important;
    
}

.cs-skin-elastic > span {
    z-index: 100;
     border: 1px solid rgba(255, 255, 255, .5)!important; 
    color: #fff!important;
    background-color:#16a085!important;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}



.cs-skin-elastic.cs-active .cs-options ul li{border: 1px solid rgba(255, 255, 255, .3)!important; 	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;}
.cs-skin-elastic.cs-active .cs-options ul li:hover{ background-color: #0b9278;  	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;}

.cs-skin-elastic.cs-active .cs-options{border: 1px solid rgba(255, 255, 255, .3)!important;}

.cs-skin-elastic .cs-options span {
    color: #fff!important;
}

.cs-skin-elastic .cs-options > ul::before{background: #16a085!important;}

.control {
    color: #fff!important;
}

.fill-help .control {
    color: #fff!important;
    opacity: 0.5!important;
}

.btn-fill{border:1px solid #fff!important; }

.btn-fill:hover{border:1px solid #fff!important; background-color: #fff!important; color: #16a085!important; }

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #fff!important;
  opacity: 1!important;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #fff!important;
  opacity: 1!important;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #fff!important;
  opacity: 1!important;
}
:-moz-placeholder { /* Firefox 18- */
  color: #fff!important;
  opacity: 1!important;
}


</style>

@section('body')

<div class="d_t">
  
  <div class="d_c">

  <div class="text-center logo"><a href="{{ route('home') }}"><img src="{{ asset('img/logo-order.png') }}"></a></div>
    
    @include('include.order')

  </div>

</div>


@section('footer')
  @parent
@stop



@stop 