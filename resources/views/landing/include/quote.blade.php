<section class="section-padding gray_bg get_quote">
  <div class="container">
    <div class="row">
      <div class="col-md-push-2 col-md-8 col-xs-12">
     
        <h3 class="text-center">Get Free Consultancy</h3>

        

        <p class="text-center grey">If you are interested in speaking with Design Proficient about an upcoming project, there are a number of ways we can make that happen.

        Filling out the form would help us get the right person in touch with you, or you could give us a call.</p>
        <form method="POST" action="{{ route('quote.save') }}" id="quoteForm" autocomplete="off">

          <div class="row">
            @if($errors->first()!=null)
              <p class="text-center">Msg: {{ $errors->first() }}</p>
            @endif
            @if( session('is_logged') == 1 )
               <input type="hidden" name="name" value="{{ session('dp_dash_nm') }}">
                <input type="hidden" name="email" value="{{ session('dp_dash_em') }}">
                <input type="hidden" name="number" value="already recorded">
                <input type="hidden" name="country" value="already recorded">
                          <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright" >
                              <input type="text" autocomplete="off" class="form-control"  style="    background: #272727;" placeholder="Full Name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="required" value="{{ session('dp_dash_nm') }}" disabled>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright" >
                              <input type="text" autocomplete="off" class="form-control"  style="    background: #272727;" placeholder="Email"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required" value="{{ session('dp_dash_em') }}" disabled>
                          </div>
                 {{ csrf_field() }}
            @else
              <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  required="required"/>
              </div>
              {{ csrf_field() }}
              <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  required="required"/>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Phone Number" name="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="required" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                <input type="text" autocomplete="off" class="form-control" placeholder="Country" name="country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'"   required="required"/>
              </div>
            @endif
            <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
              <select class="cs-select cs-skin-elastic services" name="interest" id="interest" required="required">
                  <option value="" disabled >I am Interested in</option>
                  <option value="Logo Design">Logo Design  </option>
                  <option value="Brand Development ">Brand Development </option>
                  <option value="Web Design & Development ">Web Design & Development </option>
                  <option value="App Design & Development">App Design & Development </option>
                  <option value="Back-End Development">Back-End Development </option>
                  <option value="Digital Marketing ">Digital Marketing </option>
                  <option value="Marketing Collaterals">Marketing Collaterals </option>
                  <option value="Motion Graphics">Motion Graphics </option>
                  <option value="Website Management">Website Management </option>
                  <option value="Domain Registration">Domain Registration </option>
                  <option value="Creative Copywriting">Creative Copywriting </option>
                  <option value="2D & 3D Illustration">2D & 3D Illustration </option>
              </select>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
            @if( isset( $interest ) )
              <input type="hidden" name="interest" value=" {{ $interest }} ">
            @else
              <select class="cs-select cs-skin-elastic services" name="budget" id="budget" required="required">
                <option value="" disabled >Forecasted-Budget</option>
                <option>Less than $1000</option>
                <option>$1000 to $2000</option>
                <option>$2000 to $5000</option>
                <option>$5000 to $10,000 </option>
                <option>$20,000 to $30,000</option>
                <option>$35,000 to $50,000</option>
                <option>$50,000 and above</option>
              </select>
            @endif  
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom-20">
              <textarea class="form-control" name="description" placeholder="Talk about your project" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required="required"></textarea>
            </div>
            <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft mid-body">
              <div class="clearfix">
                
                <!--<div class="col-lg-12">
                  



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

                </div>-->

              </div>
              <div class="text-center">
                <input class="btn-fill btn-quote" type="submit" id="quoteSubmit" name="quote" value="CONTACT OUR TEAM" />
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
      <div class="col-xs-12 col-sm-4 col-md-4 mult-contact-form-inner">
       <h3>Email</h3>
       <div class="row">
       
        <div class="col-xs-12 col-sm-12 col-md-12 clearfix">
       
        <p class="clearfix">
           <span class="icon-mail"></span>

            <span>
         
          <small class="phone-number"><a href="mailto:idea@designproficient.com" target="_top">idea@designproficient.com </a></small>
        <small class="phone-number"><a href="mailto:share@designproficient.com" target="_top">share@designproficient.com </a></small>

       </span>
        


        </p>

        </div>
       </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 mult-contact-form-inner">
       <h3>Contact</h3>
       <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 clearfix">
        
        <p class="clearfix">

<span class="icon-placeholder"></span>

        <span class="para">Mid-Market, 1390 Market Street, <br>Suite 200, San Francisco, 94102, USA</span></p>

        </div>
       </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 mult-contact-form-inner">
       <h3>Phone</h3>
       <div class="row">
        
        <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
        
       
       <p class="clearfix"> 

       <span class="icon-phone-call"></span> 

       <span>
         
          <small class="phone-number">+1-866-976-8874 - US</small>
        <small class="phone-number">+44-800-0418105 - UK</small>

       </span>

      </p>

        </div>
       </div>
      </div>
      
   </div>
  <!-- end container --> 
  
</section>

<!--end get_quote Section--> 