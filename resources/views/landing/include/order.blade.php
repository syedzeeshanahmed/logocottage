<section class="section-padding gray_bg get_quote">
  <div class="container">
    <div class="row">
      <div class="col-md-push-2 col-md-8">
        <h4>Order Now</h4>
        <h3 class="text-center">Get Ready to Revolutionize <br>Your Brand Forever</h3>
        <p class="text-center">Seeking exceptional design and development solutions? With our excellently crafted packages, we're here to transform your brand for the better.</p>
        <form method="POST" action="{{ route('order.place') }}" id="quoteForm" autocomplete="off">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
              <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  required="required"/>
            </div>
            {{ csrf_field() }}
            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedleft">
              <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  required="required"/>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
              <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Phone Number" name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="required" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedleft">
              <input type="text" autocomplete="off" class="form-control" placeholder="Country" name="country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'"   required="required"/>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
              <input type="hidden" name="package" value="{{$info['pkg']}}">
             <input type="text" autocomplete="off" style="background-color: #21947d;" class="form-control" placeholder="{{$info['pkg']}}" name="package" onfocus="this.placeholder = ''" onblur="this.placeholder = 'OrderPackage'"   required="required" disabled="true" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedleft">
              <input type="hidden" name="amount" value="{{$info['price']}}">
              <input type="text" style="background-color: #21947d;" autocomplete="off" class="form-control" placeholder="${{$info['price']}}" name="amount" onfocus="this.placeholder = ''" onblur="this.placeholder = 'OrderPackage'"   required="required" disabled="true" />
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
              <textarea class="form-control" name="description" placeholder="Additional Information" onfocus="this.placeholder = ''" onblur="this.placeholder = 'AdditionalInformation'" required="required"></textarea>
            </div>
            <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft">
              <div class="clearfix">
                
                <div class="col-lg-12">
                  



                <div class="company_profile pull-right">
                  <label class="control control--checkbox">
                  include Company Profile
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                  </label>
                </div>



                <div class="company_profile fill-help pull-left">
                  <label class="control control--checkbox">
                  Please Fill all the field
                 
                  
                  </label>
                </div>

                </div>

              </div>
              <div class="text-center">
                <input class="orderNowQuote btn-quote" type="submit" id="quoteSubmit" name="quote" value="Submit Request" />
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

<!--end get_quote Section--> 