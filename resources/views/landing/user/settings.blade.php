@extends('user.master')


@section('body')
<style type="text/css">
  
  .secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }
    .hero-services {
      background: url( '{{ asset("img/banner-packages.png") }}' );
      background-size: auto !important;
    }


    .profile_sphere:hover{
      color: #fff;
      cursor: pointer;
      text-decoration: none;
    }

    .side-bar > div{
      background-color: #fff;
    }
    .side-bar > div ul{
      margin-bottom: 0px;
    }
  .dataTables_length label {
    text-transform: capitalize;
  }
</style>
<section class="user_profile cust-cont" style="">
  <div class="container-fluid">
    <div class="row">
      <section class="side-bar" >
        <div class="col-md-3">
          <div class="row">
            <div class="les-spc col-lg-12 col-md-12 col-sm-12">@include( 'user.side-bar'  )</div>
          </div>
        </div>
      </section>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <section class="top-bar"> @include( 'user.top-bar'  ) </section>
        <section class="main-body">
         <div class="col-md-12">
           <div class="right-panel">
          <div class="row">
            <div class="col-md-5 main-hd">
             <h4 class="text-left title"> Profile </h4>
            </div>
            <div class="col-md-7">
             <ul class="right-mid-nav pull-right">
              <li><a href="#">Design Proficient  </a></li>
                  <li class="active"><a href="{{ route('user.profile') }}">Dashboard</a></li>
             </ul>
            </div>
          </div>
        <section class="packages-tabs packages-tabs-margin-media">
          <ul class="tabs-profile clearfix">
            @if( isset($errors) && $errors!=null )
              <li class="tab-link " data-tab="tab-1">Information</li>
              <li class="tab-link current" data-tab="tab-2">Account</li>
            @else
              <li class="tab-link current" data-tab="tab-1">Information</li>
              <li class="tab-link" data-tab="tab-2">Account</li>
            @endif
            
           
            
          </ul>
          <a href="#" id="veiw-toggle" class="ellips pull-right"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
          <div class="packages-tabs-content">
           @if( isset($errors) && $errors!=null )
            <div id="tab-1" class="tab-content">
           @else
            <div id="tab-1" class="tab-content current">
           @endif
           
            <div class="profile-inner outer-view">
                     <div class="profile-inner">
                       <h4>Name</h4>
                       <p>{{ $user->name  }}</p>
                     </div>
                   <div class="profile-inner">
                     <h4>Email</h4>
                     <p>{{ $user->email }}</p>
                   </div>
                   <div class="profile-inner">
                     <h4>Contact</h4>
                     <p>{{ $user->number }}</p>
                   </div>
                   <div class="profile-inner">
                     <h4>City</h4>
                     <p>{{ $user->city }}</p>
                   </div>
                   <div class="profile-inner">
                     <h4>Country</h4>
                     <p>{{ $user->country }}</p>
                   </div>
           </div>
            <form method="POST" action="{{ route('user.settings.update') }}" id="quoteForm" autocomplete="off">
              <div class="profile-fields inner-view" style="display: none;">
               <div class="row">
                <div class="col-md-6 col-xs-12 margin-bottom-10">
                  <input type="text" autocomplete="off" class="form-control" placeholder="Name" name="name" value="{{ $user->name }}" required="required">
                </div>
                <div class="col-md-6 col-xs-12 margin-bottom-10">
                  <input type="email" autocomplete="off" class="form-control" value="{{ $user->email }}" name="number" disabled="disabled"  required="required">
                </div>
               </div>
               <div class="row">
                <div class="col-md-6 col-xs-12 margin-bottom-10">
                  <input type="number" min="1" autocomplete="off" class="form-control" value="{{ $user->number }}" name="number" required="required">
                </div>
                <div class="col-md-6 col-xs-12 margin-bottom-10">
                  <input type="text" min="1" autocomplete="off" class="form-control" name="city" value="{{ $user->city }}" required="required">
                </div>
               </div>
               <div class="row">
                <div class="col-md-12 col-xs-12">
                  {{ csrf_field() }}
                  <input class="form-control" name="country" value="{{ $user->country }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="required" />
                  }
                </div>
               </div>
               <div class="row">
                <div class="col-md-12 col-xs-12">
                  <div class="actions text-center" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;"><a href="#" class="btn-fill cancel-btn">Cancel</a> <input type="submit" class="btn-line-fill pet-fill" value="Save" /></div>
                </div>
               </form>   
              </div>
            </form>  
            </div>
          </div>
          @if( isset($errors) && $errors!=null )
            <div id="tab-2" class="tab-content current">
           @else
            <div id="tab-2" class="tab-content ">
           @endif 
           
            
          <form method="POST" action="{{ route('user.password.change') }}" id="quoteForm" autocomplete="off">
          @if( isset($errors) && $errors!=null )
          <div class="profile-inner outer-view" style="display: none;">
           @else
            <div class="profile-inner outer-view">
           @endif <div class="profile-inner">
                     <h4>User Name</h4>
                     <p>{{ $user->email }}</p>
                   </div>
                    <div class="profile-inner">
                     <h4>Password</h4>
                     <p><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i></p>
                   </div>
                  </div>



              @if( isset($errors) && $errors!=null )
              <div class="profile-fields inner-view" >
              @else
                <div class="profile-fields inner-view" style="display: none;">
               @endif      


                <div class="row">
                  <div class="col-md-6 col-xs-12 margin-bottom-10">
                    <input type="text" autocomplete="off" class="form-control" placeholder="Name" name="name" value="{{ $user->email }}" disabled required="required">
                  </div>
                  <div class="col-md-6 col-xs-12"> </div>
                </div>
                <div class="row">
                {{ csrf_field() }}
                  <div class="col-md-6 col-xs-12 margin-bottom-10">
                    <input type="Password" min="1" autocomplete="off" class="form-control" placeholder="Your Current Password" name="curr_password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Current Password'" required="required">
                  </div>
                  <div class="col-md-12 col-xs-12 margin-bottom-10"> </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-xs-12">
                    <h5>Change Password</h5>

                    @if( isset($errors) && $errors!=null )
                      <p>{{ $errors }}</p>
                    @else
                      <p>Please enter your new password below and repeat it in next field</p>  
                    @endif 



                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-xs-12 margin-bottom-20">
                    <input type="Password" autocomplete="off" class="form-control" placeholder="New Password" name="new_password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'New Password'" required="required">
                  </div>
                  <div class="col-md-6 col-xs-12 margin-bottom-20">
                    <input type="Password" autocomplete="off" class="form-control" placeholder="Repeat Password" name="repeat_password" required="required" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" >
                </div>
               </div>
                <div class="row">
                  <div class="col-md-12 col-xs-12">
                    <div class="actions text-center" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;"><a href="#" class="btn-fill cancel-btn">Cancel</a> <input type="submit" class="btn-line-fill pet-fill" value="Save" /></div>
                  </div>
                  </form>
                </div>
              </div>
          </div>
        </section>
      </div>
    </div>
  </div>
 </div>
</div> 


  <div class="dash-footer">
    <div class="container main-footer">
      <div class="col-md-7 col-xs-12">
        <ul class="footer">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Business Profiles</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">FAQs</a></li>
        </ul>
        <p class="pull-left copy-dash">Copyright 2017, <a href="#">Designproficient.com</a>, All Rights Reserved</p>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 clearfix">
          <div class="app">
           <div class="store">
            <a href="#"><img src="{{ asset('img/app.png') }}" /></a>
           </div>
           <div class="play">
            <a href="#"><img src="{{ asset('img/google.png') }}" /></a>
           </div>
          </div>
       </div>
    </div>
  </div>
</section>
@stop