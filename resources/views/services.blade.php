@extends('layout.master')
@section('metas')
<title>Complete Web, Design and Digital Marketing Solutions | Services</title>
<meta description="If it’s digital, our design professionals can work hard and make it unique. From Web development to social media marketing, and of course design. We handle everything perfectly!">
@stop
@section('body')
<style type="text/css">
  
.secondary-nav-wrap{ display: none; }
    
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }
    #header-sroll{ background-color: #fff;     box-shadow: 1px -10px 26px #b7b7b7; }

header .logo a {
    background-position: bottom center;
}
    
	.actions a {padding: 17px 15px;}
    



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


.top-action .btn-line-fill{ color: #fff; }

header #header-sroll .top-action .btn-line-fill{ color: #b8285a; }

#header-sroll.small .top-action .btn-line-fill{ color: #b8285a; }
.top-action .btn-line-fill:hover{ color: #fff!important; }

#header-sroll.small .nav-toggle span, #header-sroll.small .nav-toggle span:before, #header-sroll.small .nav-toggle span:after{background: #631a79;}
</style>










@include('include.services')


<!--@include('include.methodology')-->




@include('include.subscribe_fold')

@include('include.testimonials')

@include('include.quote')


@section('footer')
  @parent
@stop



@stop 

