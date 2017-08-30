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

section.getQuote{
  background-color: #2e2e2e;
}


.getQuote .logo{
  padding-bottom: 10px;
}

h3{
  color: #fff !important;
}

.getQuote p{  margin-bottom: 0px !important;  }

</style>

@section('no-portfolio-modals')
  <label style="display:none;">not empty</label>
@stop

@section('body')

<section class="getQuote">

<div class="d_t">
  
  <div class="d_c">


<div class="container">
<div class="row">
  <div class="col-md-push-2 col-md-8">


  <div class="text-center logo"><a href="{{ route('home') }}"><img src="{{ asset('img/logo-inside.png') }}"></a></div>
  <h3 class="text-center">Book a Call</h3>

        

        <p class="text-center grey">If you are interested in speaking with Design Proficient about an upcoming project, <br> there are a number of ways we can make that happen.

        Filling out the form would <br> help us get the right person in touch with you,  or you could give us a call.</p>  
    <section class="main-book-call">
   <div class="d_t">
   <div class="d_c">
    
    <form class="book-call-form" method="POST" autocomplete="false" action="{{ route('call.book') }}">
    
     <div class="row">
      <div class="col-md-12 col-xs-12 margin-bottom-30">
      </div>
      @if($errors->first()!=null)
        <p class="text-center">Msg: {{ $errors->first() }}</p>
      @endif
    <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20">
     <input type="name" autocomplete="off" class="form-control" placeholder="Name" name="name" onfocus="this.placeholder = ''"   onblur="this.placeholder = 'Name'" required="required">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20">
     <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''"   onblur="this.placeholder = 'Email'" required="required">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20">
    <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Phone Number" name="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="required">
    </div>
    {{ csrf_field() }}
    <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20">
     <input id="datetimepicker_start_time" type="text" placeholder="Select Date" name="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Date'" required="required" >
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20">
      <textarea class="form-control" name="description" placeholder="Project Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required="required"></textarea>
     </div>
    <div class="col-md-12 col-xs-12 margin-bottom-20">
      <button class="btn btn-lg btn-primary btn-block" type="submit">book my call</button>
    </div>
    </div>
   </form>
   </div>
</div>


 </section>

    
  </div>
</div>
      
</div>




  </div>

</div>
  
</section>


<section class="section-padding mult-contact-form">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
       <h3>Email</h3>
       <div class="row">
       
        <div class="col-md-12 clearfix">
       
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
      <div class="col-md-4">
       <h3>Contact</h3>
       <div class="row">
        
        <div class="col-md-12 clearfix">
        
        <p class="clearfix">

<span class="icon-placeholder"></span>

        <span class="para">Mid-Market, 1390 Market Street, Suite 200<br />, San Francisco, 94102, USA</span>

        </div>
       </div>
      </div>
      <div class="col-md-4">
       <h3>Phone</h3>
       <div class="row">
        
        <div class="col-md-12 clearfix">
        
       
       <p class="clearfix"> 

       <span class="icon-phone-call"></span> 

       <span>
         
          <small class="phone-number">1-866-978-6636 - US</small>
        <small class="phone-number">44 800 0418105 - UK</small>

       </span>

      </p>

        </div>
       </div>
      </div>
      
    <!-- end row --> 
    
    </div>
   </div>
  <!-- end container --> 
  
</section>


@section('footer')
  @parent
@stop


@stop 


