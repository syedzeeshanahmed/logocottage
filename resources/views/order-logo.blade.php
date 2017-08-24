@extends('layout.master')
<style type="text/css">
  
  .header, footer{ display: none!important }

.logo {padding-top: 82px;}

.getQuote .d_t{
    width: 100%;
}
.getQuote .d_t .d_c{
background: #2e2e2e;
}

.getQuote .d_t .logo{
    background-color: #2e2e2e;
}

body{ background: #2e2e2e; }

</style>
@section('no-portfolio-modals')
  <span style="display: none;">&nbsp;</span>
@stop
@section('body')
<section class="getQuote order-web">
  <div class="d_t">
    <div class="d_c">
      <div class="text-center logo"><a href="{{ route('home') }}"><img src="{{ asset('img/logo-inside.png') }}"></a></div>
      <section class="section-padding gray_bg get_quote">
        <div class="container">
          <div class="row">
            <div class="col-md-push-2 col-md-8">
              <h3 id="heading" class="text-center">Your information</h3>
              <p class="text-center grey">If you are interested in speaking with Design Proficient about an upcoming project, there are a number of ways we can make that happen.
                
                Filling out the form would help us get the right person in touch with you, or you could give us a call.</p>
              <form method="POST" action="{{ route('order.logo.save') }}" id="quoteForm" autocomplete="off">


                


                <div class="row"> @if($errors->first()!=null)
                  <p class="text-center">Msg: {{ $errors->first() }}</p>
                  @endif


                  <div class="step-form">

                    <section data-view="1">
                      <div class="tabs-form">
                        <div class="single-tab active">Step-1</div>
                        <div class="single-tab">Step-2</div>
                      </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
                          <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  required="required"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedleft">
                          <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  required="required"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
                          <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Contact Number" name="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" required="required" />
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
                          <input type="text" min="1" autocomplete="off" class="form-control" placeholder="*Title of your design" name="title" onfocus="this.placeholder = ''" onblur="this.placeholder = '*Title of your design'" required="required" />
                        </div>
                        <div class="text-center">
                        <a class="btn-fill btn-quote btn-step-next" style="cursor:pointer;" id="quoteSubmit" >Next</a>

                        </div>
                    </section>
     
                    <section data-view="2" style="display: none;">
                            {{ csrf_field() }}
                      <div class="tabs-form">
                        <div class="single-tab ">Step-1</div>
                        <div class="single-tab active">Step-2</div>
                      </div>      
                      <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedleft">
                        <input type="hidden" name="package_name" value=" {{ $name }}">
                        <input type="text" autocomplete="off" style="background: #232323;" class="form-control" placeholder="{{ $name }}" name="pname" onfocus="this.placeholder = ''" onblur="this.placeholder = '{{ $name }}'"  disabled="disabled"  required="required"/>
                      </div>
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedleft">
                        <input type="hidden" name="package_price" value=" {{ $price }}">
                        <input type="text" autocomplete="off" style="background: #232323;" class="form-control" placeholder="${{ $price }}" name="pprice" onfocus="this.placeholder = ''" onblur="this.placeholder = '${{ $price }}'"  disabled="disabled"  required="required"/>
                      </div>
                      
                      
                      
                      
                      
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 clearfix">
                        <input type="text" min="1" autocomplete="off" class="form-control" name="features" placeholder="Added Unique Design Features" name="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Added Unique Design Features'" required="required" />
                        <p class="pull-left">Additional design features that you want in the design.</p>
                      </div>
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 clearfix">
                        <input type="text" min="1" autocomplete="off" class="form-control" name="caption" placeholder="Design Caption" name="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Design Caption'" required="required" />
                        <p class="pull-left">Caption of the design, if any.</p>
                      </div>
                      
                      
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20 clearfix">
                        <textarea class="form-control" name="description" placeholder="*Business Description" onfocus="this.placeholder = ''" onblur="this.placeholder = '*Business Description'" required="required"></textarea>
                        <p class="pull-left">Please tell us briefly about your business or the services you provide</p>
                      </div>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20 clearfix">
                        <textarea class="form-control" name="perception" placeholder="Design Perception" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Design Perception'" required="required"></textarea>
                        <p class="pull-left">What kind of a design do you want to portray i.e. fun, corporate, funky etc.</p>
                      </div>
                      
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20 clearfix">
                        <textarea class="form-control" name="comments" placeholder="Additional Comments" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Additional Comments'" required="required"></textarea>
                        <p class="pull-left">Anything additional that you want the design team to know</p>
                      </div>
                      
 
                        <div class="text-center">
                          <!-- <input class="btn-fill btn-quote btn-step-prev" type="submit" id="quoteSubmit" name="quote" value="Prev" /> -->
                          <input class="btn-fill btn-quote btn-step-form" type="submit" id="quoteSubmit"  name="quote" value="Submit Request" />
                        </div>
                    </section>
                  </div>

                  
                  
                  </div>
                </div>
                <input type="hidden" name="page" value="{{Request::url()}}" />
              </form>
            </div>
            <!-- end col-md-6 --> 
            
          </div>
          <!-- end row --> 
          
        </div>
        <!-- end container --> 
        
      </section>
      <section class="section-padding mult-contact-form">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>Email</h3>
              <div class="row">
                <div class="col-md-12 clearfix">
                  <p class="clearfix"> <span class="icon-mail"></span> <span> <small class="phone-number"><a href="mailto:idea@designproficient.com" target="_top">idea@designproficient.com </a></small> <small class="phone-number"><a href="mailto:share@designproficient.com" target="_top">share@designproficient.com </a></small> </span> </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <h3>Contact</h3>
              <div class="row">
                <div class="col-md-12 clearfix">
                  <p class="clearfix"> <span class="icon-placeholder"></span> <span class="para">1026 Hennepin Ave. Minneapolis,<br />
                    MN 22408, USA</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <h3>Phone</h3>
              <div class="row">
                <div class="col-md-12 clearfix">
                  <p class="clearfix"> <span class="icon-phone-call"></span> <span> <small class="phone-number">1-866-978-6636 - US</small> <small class="phone-number">44 800 0418105 - UK</small> </span> </p>
                </div>
              </div>
            </div>
            
            <!-- end row --> 
            
          </div>
        </div>
        <!-- end container --> 
        
      </section>
      
      <!--end get_quote Section--> 
      
    </div>
  </div>
</section>
@section('footer')
  @parent
@stop


@stop 