<form method="POST" action="{{ route('quote.save') }}" id="quoteForm" autocomplete="off">
  <div class="row">
      @if( session('is_logged') == 1 )
               <input type="hidden" name="name" value="{{ session('dp_dash_nm') }}">
                <input type="hidden" name="email" value="{{ session('dp_dash_em') }}">
                <input type="hidden" name="number" value="already recorded">
                <input type="hidden" name="country" value="already recorded">
                          <div class="col-md-12 col-xs-12 margin-bottom-10" >
                              <input type="text" autocomplete="off" class="form-control"  style="    background: #e6e6e6;" placeholder="Full Name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="required" value="{{ session('dp_dash_nm') }}" disabled>
                          </div>
                          <div class="col-md-12 col-xs-12 margin-bottom-10" >
                              <input type="text" autocomplete="off" class="form-control"  style="    background: #e6e6e6;" placeholder="Email"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required" value="{{ session('dp_dash_em') }}" disabled>
                          </div>
                 {{ csrf_field() }}
      @else
    <div class="col-md-12 col-xs-12 margin-bottom-10">
      <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  required="required"/>
    </div>
    {{ csrf_field() }}
    <div class="col-md-12 col-xs-12 margin-bottom-10">
      <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  required="required"/>
    </div>
    <div class="col-md-12 col-xs-12 margin-bottom-10 ">
      <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Phone Number" name="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required />
    </div>
    <div class="col-md-12 col-xs-12 margin-bottom-10">
      <input type="text" autocomplete="off" class="form-control" placeholder="Country" name="country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'"   required="required"/>
    </div>
    @endif
    
        @if( isset( $interest ) )
              <input type="hidden" name="interest" value=" {{ $interest }} ">
        @else
          <div class="col-md-12 col-xs-12 margin-bottom-10 ">
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
        @endif
    
    
          @if( isset( $interest ) )
               <input type="hidden" name="budget" value="not required">
          @else
          <div class="col-md-12 col-xs-12 margin-bottom-10 ">
            <select class="cs-select cs-skin-elastic" name="budget" id="budget" required="required">
              <option value="" disabled >Forecasted-Budget</option>
              <option>Less than $1000</option>
              <option>$1000 to $2000</option>
              <option>$2000 to $5000</option>
              <option>$5000 to $10,000 </option>
              <option>$20,000 to $30,000</option>
              <option>$35,000 to $50,000</option>
              <option>$50,000 and above</option>
            </select>
          </div>
          @endif
    <div class="col-md-12 col-xs-12 margin-bottom-20">
      <textarea class="form-control" name="description" placeholder="Talk about your project" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required></textarea>
    </div>
    <div class="col-md-12 col-xs-12 text-center">
      <div class="text-center mid-body">
        <input class="btn-fill btn-quote" type="submit" id="quoteSubmit" name="quote" value="Send Query" />
      </div>
    </div>
  </div>
  <input type="hidden" name="page" value="{{Request::url()}}" />
</form>
