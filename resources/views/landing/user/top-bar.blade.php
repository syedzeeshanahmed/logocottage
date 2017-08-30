<div class="row">
	<div class="dash-menu top-nav">
	    <nav>
         <div class="col-md-6 clearfix">
            <a class="min-menu pull-left" href="#"><i class="fa fa-bars" aria-hidden="true"></i></a> 
	    	<div class="search"><br></div>
         </div>
         <div class="col-md-6 clearfix">
          <div class="top-bar-login pull-right">
            <div class="bell dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                
<!--                 <i class="fa fa-bell fa-fw"></i><span class="label label-primary label-pill label-with-icon hidden-xs">10</span>
                <span class="caret"></span></button>
 -->                <ul class="dropdown-menu">
                  <li><a href="#">Your order status changed</a></li>
                  <li class=""><a href="#">Your order status changed</a></li>
                  <li><a href="#">Your subscription status changed</a></li>
                </ul>
              </div>
              
            <div class="bell dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                
<!--                 <i class="fa fa-shopping-cart"></i><span class="label label-primary label-pill label-with-icon hidden-xs">5</span>
                <span class="caret"></span></button>
 -->                <ul class="dropdown-menu">
                  <li><a href="#">Your order status changed</a></li>
                  <li class=""><a href="#">Your order status changed</a></li>
                  <li><a href="#">Your subscription status changed</a></li>
                </ul>
              </div>
              
              <div class="bell desh-log dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                <div class="admin-image">
                       <a href="#" class="profile_sphere"> <span>  {{  session('dp_dash_nm')[0]  }} </span> </a>
                     </div></button>
                <ul class="dropdown-menu">
                  <li class=""><a href="{{ route('user.settings') }}">Profile</a></li>
                  <li><a href="{{ route('user.logout') }}">Logout</a></li>
                </ul>
              </div>
         </div>
	    </nav>
	</div>
</div>
