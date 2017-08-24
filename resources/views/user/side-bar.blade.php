<div class="site-panel">
              <section class="profile-sidenav">
                  <section class="user-info">
                    <a class="logo" href="{{ route('home') }}"><img src=" {{ asset('img/logo-dashboard.png') }}" /></a>
                    <div class="title-section">
                     <div class="admin-image">
                       <a href="#" class="profile_sphere"> <span>  {{  session('dp_dash_nm')[0]  }} </span> </a>
                     </div>
                     <div class="admin-drop">
                     
                     <div class="bell site-panel-custom-dp dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">{{  session('dp_dash_nm')  }}
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li class=""><a href="{{ route('user.settings') }}">Profile</a></li>
                          <li><a href="{{ route('user.logout') }}">Logout</a></li>
                        </ul>
                      </div>
                     
                      <a class="title-email" href="mailto:@{{  session('dp_dash_em')  }}" target="_top">{{  session('dp_dash_em')  }}</a>
                     </div>
                    </div>
                    <br>
                  </section>
                  <section class="profile-side-small-nav">
                    <div class="container">
                    <button class="small-nav"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>
                  </section>
                    <nav>
                      <ul>
                        <li><a href="{{ route('user.profile') }}"><i class="fa fa-home"></i>Dashboard</a></li>
                        <li><a href="{{ route('user.settings') }}"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
                        <li><a href="{{ route('dash.reviews') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>My Review</a></li>
                        <li><a href="{{ route('dash.quotes') }}"><i class="fa fa-cogs" aria-hidden="true"></i>My Quotes</a></li>
                        <li><a href="{{ route('dash.orders') }}"><i class="fa fa-ticket" aria-hidden="true"></i>My Orders</a></li>  
                        <!-- <li><a href="{{ route('dash.handovers') }}"> <i class="fa fa-ticket" aria-hidden="true"></i> Handovers</a></li>   -->
                        <li><a href="{{ route('dash.files') }}"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Files</a></li> 
                        <!-- <li><a href="{{ route('dash.packages') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Packages</a></li> -->
                        <!-- <li><a href="{{ route('dash.custom') }}"><i class="fa fa-first-order" aria-hidden="true"></i>Custom Package order</a></li> -->
                        <!-- <li><a href="{{ route('dash.membership') }}"><i class="fa fa-users" aria-hidden="true"></i>Membership</a></li> -->
                        <!-- <li><a href="#"> <i class="fa fa-user-plus" aria-hidden="true"></i> Refer A Friend</a></li>  -->
                        <li><a href=" {{ route('user.logout') }} "><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                      </ul>
                    </nav>
                  </section> 
                </div>