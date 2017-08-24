@extends('layout.master')

<style type="text/css">
  
  .header, footer{ display: none!important }

.logo {padding-top: 82px;}

.getQuote .d_t{
    width: 100%;
}
.getQuote .d_t .logo{
    background-color: #2e2e2e;
}

</style>

@section('body')

<section class="getQuote">

<div class="d_t">
  
  <div class="d_c">

  <div class="text-center logo"><a href="{{ route('home') }}"><img src="{{ asset('img/logo-inside.png') }}"></a></div>
    
    @include('include.quote')

  </div>

</div>
	
</section>


@section('footer')
  @parent
@stop


@stop 
