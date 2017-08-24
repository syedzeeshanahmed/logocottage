@extends('layout.master')

@section('metas')
<title>Get a custom quote | Design Proficient</title>
<meta description="Get yourself a custom quote according to your requirements. Fill out the requirement form to get connected today.">
@stop

<style type="text/css">
  
  .header, footer{ display: none!important }

.logo {padding-top: 82px;}

.getQuote .d_t{
    width: 100%;
}
.getQuote .d_t .logo{
    background-color: #2e2e2e;
}

.get_quote.section-padding {
    padding: 10px 0px 60px 0px;
}
.share-wrapper{ background-color: #2e2e2e; }
</style>

@section('body')

<section class="getQuote">
	<div class="share-wrapper">
		<div class="d_t">
		  <div class="d_c">
			<div class="text-center logo"><a href="{{ route('home') }}"><img src="{{ asset('img/logo-inside.png') }}"></a></div>
			@include('include.shareidea')	
		  </div>
		</div>
	</div>
</section>


@section('footer')
  @parent
@stop


@stop 
