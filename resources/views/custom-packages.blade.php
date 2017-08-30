@extends('layout.master')

@section('metas')
<title>Create your own logo and web design packages | Design Proficient</title>
<meta description="Why look for design s when you can make your own package? Make a custom package for your needs today!">
@stop


@section('body')
<style type="text/css">
  
.secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }

    .hero-services {
      background: url( '{{ asset("none") }}' );
      background-size: auto !important;
    height:auto;
    background-color:#fff !important;
    }

    #header-sroll{ background-color: #fff;     box-shadow: 1px -10px 26px #b7b7b7; }


    


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


#header-sroll.small .nav-toggle span, #header-sroll.small .nav-toggle span:before, #header-sroll.small .nav-toggle span:after{background: #631a79;}
</style>



<form action="{{ route('customPackages.store') }}" method="post">
  <section class="section-padding hero-services hero-subservices custom-package">
      <div class="container">
          <div class="row d_t">
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 table-cell-no-float">

                  <div class="row">
                      <h3 class="breakdown-before-left margin-top-60 margin-left-15">Custom Quote Form</h3>
                  </div>
           @if( session('is_logged') == 1 )
                <input type="hidden" name="name" value="{{ session('dp_dash_nm') }}">
                <input type="hidden" name="email" value="{{ session('dp_dash_em') }}">
                <input type="hidden" name="phone" value="already recorded">
                <input type="hidden" name="country" value="already recorded">
                <div class="box-custom-package-2">
                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                              <input type="text" autocomplete="off" class="form-control" placeholder="Full Name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="required" value="{{ session('dp_dash_nm') }}" disabled>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                              <input type="text" autocomplete="off" class="form-control" placeholder="Email"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required" value="{{ session('dp_dash_em') }}" disabled>
                          </div>
                      </div>
                  </div>
                 {{ csrf_field() }}
            @else
              <div class="box-custom-package-2">
                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                              <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="required">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                              <input type="text" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required">
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                              <input type="text" autocomplete="off" class="form-control" placeholder="Phone Number" name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="required">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                              <input type="text" autocomplete="off" class="form-control" placeholder="Country" name="country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'" required="required">
                          </div>
                      </div>
                  </div>
            @endif        
                  

                  <div class="row">
                      <h3 class="breakdown-before-left margin-top-20 margin-left-15">I am interested in</h3>
                  </div>
                  
                      <!--Row 2-->

                      @foreach( $itemChunks as $key => $chunk)
                <div class="box-custom-package margin-bottom-30">
                  <div class="row ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                      @if( $key == 1 )
                        <h4 class="collapsed " role="button" data-toggle="collapse"  aria-expanded="true" href="#section{{ $key }}">
                      @else
                       <h4 class="collapsed" role="button" data-toggle="collapse" aria-expanded="false"  href="#section{{ $key }}"> 
                      @endif
                          {{ $categories[$key] }}
                          <i class="more-less glyphicon glyphicon-plus"></i>
                          <i class="more-less glyphicon glyphicon-minus"></i>
                          
                      </h4>                     
                    </div>
                  </div>
                  @if( $key == 1 )
                    <section id="section{{ $key }}" class="collapse in"> 
                  @else
                    <section id="section{{ $key }}" class="collapse"> 
                  @endif        
                  <section id="section{{ $key }}">  
                      <div class="row ">
                        <div class="col-lg-10 col-md-9 col-sm-9 col-xs-3 margin-top-20">  
                          <h4 class="margin-top-20 margin-left-15 margin-bottom-30">Items</h4>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-9 margin-top-20">  
                          <h4 class="margin-top-20 margin-left-15 text-left">Quantity</h4>
                        </div>  
                      </div>
                        <div class="row">
                        @foreach( $chunk as $item )
                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                                <div class="parent">
                                    <input type="checkbox" class="cost_calc_row-2 cost_calc_calculate single data-item-custom " value="{{ $item->name }}" data-row='1' data-select="1" data-item-id="{{ $item->id }}" data-value="{{ $item->price }}">
                                    <span>{{ $item->name }} <small>${{ $item->price }}</small></span>

                                    @if( $item->detail!=null )
                                      <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="{{ $item->detail }}" >?</a>
                                    @else
                                      <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Loading..." >?</a>
                                    @endif
                                </div>
                            </div>    
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                              <div class="quantity">
                                <input data-parent-id="{{ $item->id }}"  type="text" class="data-item-custom-quantity" placeholder="Quantity" name="qty{{ $item->id }}[]">
                              </div>
                            </div>
                        @endforeach
                        </div>


                        <div class="addons">
                         @if( isset( $addons[$key] ) )  
                            <h4 class="margin-top-20 margin-left-15 margin-bottom-30">Addons</h4>
                            <div class="row">
                           
                              @foreach( $addons[$key] as $addon )
                                @if( $addon!= null )
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                                  <div class="parent ">
                                    <input type="checkbox" class="cost_calc_row-2 cost_calc_calculate single data-item-custom " value="{{ $addon->name }}" data-row='1' data-select="1" data-item-id="{{ $addon->id }}" data-value="{{ $addon->price }}" name="addon{{ $key }}[]">
                                    <span>{{ $addon->name }} <small>${{ $addon->price }}</small></span>

                                    @if( $item->detail!=null )
                                      <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="{{ $addon->detail }}" >?</a>
                                    @else
                                      <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Loading..." >?</a>
                                    @endif
                                  </div>   
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                  <div class="quantity">
                                    <input data-parent-id="{{ $addon->id }}"  type="text" class="data-item-custom-quantity" placeholder="Quantity" name="qty{{ $addon->id }}[]">
                                  </div>
                                </div>
                               @endif 
                              @endforeach
                            
                            </div>
                        @endif      
                            

                        </div>
                      </section>  

                        
                        </div>
                      @endforeach


              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 table-cell-no-float">
                  <div class="row">
                      <h3 class="breakdown-before-left margin-top-60 margin-left-15">Order Summary</h3>
                      

                  </div>
                  <div class="box-custom box-follow-scroll box-custom-package-2">
                      <div id="" class="clearfix">
                          <h4 class="margin-top-20 mad"> Total cost&#x3a;</h4>
                          <p id="custom-totalCost" class="item-detail">0.00</p>
                          <div id="custom-item-list" class="clearfix">
                          </div>
                          <!--The form that the data is applied to.-->
                          

                              <div id="custom-fields">
                                  <input type="hidden" id='cost_calc_price' value="" name="cost_calc_price">
                                  <input type="hidden" name="items[]">

                              </div>
                              {{ csrf_field() }}
                              <!--/-->

                              <input type="submit" class="cost_calc_button" value="Order Now">
                         
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</form>

@section('footer')
  @parent
@stop



@stop 