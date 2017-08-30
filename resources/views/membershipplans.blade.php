@extends('layout.master')
@section('body')
@section('metas')
<title>Mambership Plns</title>
<meta description="We’re here to change how design works with new, conceptual ideas that shake imaginations. Have a look at who we are and what we stand for.">
@stop
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

<!--<section class="section-padding hero-services main-about">
  <div class="container">
    <div class="d_t">
      <div class="d_c">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-md-offset-0 col-sm-offset-2">
            <div class="about-bg">
              <h3 class="wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">About Us</h3>
              <img class="wow fadeInDown" src="{{asset('img/Paris-image.jpg')}}"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<section class="methodology wow margin-top-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
		        <h3 class="text-left wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">Budget Friendly <br>Design Packages That Work</h3>
		        <p class="wow fadeInDown" data-wow-delay="0.4s">

		        Our team not only provides the best conceptual designs that work for the <br>client but also provides the client with packages with pocket-friendly solutions.<br> Reach us today for the perfect design and development solutions that your firm requires.

		        </p>
			</div>
		</div>
		<div class="row wow fadeInDown" data-wow-delay="0.6s">
			<div class="methodology-slider">
				<section class="single bronze wow fadeInDown ">
					<div class="col-md-3">
						<div class="membership-box">
                           <a href="#GlobalClients">
							<span class="more" data-toggle="collapse" aria-expanded="true" data-target="#detail-1"> </span>
                           </a>
							<h2>Bronze</h4>
							<p class="text-left">Relief for budget fanatics</p>
							<span class="price">$279</span>
						</div>

							
					</div>
				</section>

				<section class="single silver">
					<div class="col-md-3">
						<div class="membership-box">
							<span class="more" data-toggle="collapse" data-target="#detail-2"> </span>
							<h2>Silver</h4>
							<p class="text-left">Creative Design at a smaller price</p>
							<span class="price">$379</span>
						</div>

							
					</div>
				</section>

				<section class="single gold">
					<div class="col-md-3">
						<div class="membership-box">
							<span class="more" data-toggle="collapse" data-target="#detail-3"> </span>
							<h2>Gold</h4>
							<p class="text-left">Premium Designs easy on the pocket</p>
							<span class="price">$479</span>
						</div>

						
				</div>
			</section>

			<section class="single platinum">
				<div class="col-md-3">
					<div class="membership-box">
						<span class="more" data-toggle="collapse" data-target="#detail-4"> </span>
						<h2>Platinum</h4>
						<p class="text-left">Slice off the prices on all packages</p>
						<span class="price">$579</span>
					</div>

						
				</div>
			</section>


			</div>

		</div>
	</div>
</section>
<section class="section-padding about-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="about-client">
              
            
            
            
            
            <section id="detail-1" class="membership-detail collapse in">
             <div class="row">
             <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
             <h3 class="text-left wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">Bronze</h3>
              <p class="text-left wow fadeInDown" data-wow-delay="0.6s">Building mega-brands through design oriented solutions, we’re a creative agency that keeps concept and strategy in mind. We’re a team of creative individuals work on bringing ideas to life with imaginative illustrations to shake the digital world. Our highly trained professionals provide complete digital marketing solutions to solve complex problems.</p>
                        <ul class="clearfix">
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Free Basic Logo Package (one time use only)</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Flat 10% Discount on All Our Packages</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 1 Dedicated Designer</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 1 Dedicated Account Manager</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 24/7 client coordination</li>
                        </ul>
                        
                        <div class="member-ship-buy margin-top-20">
                        
                        <div class="row"> 
                        <h4 class="text-left margin-bottom-20">Enter your email to proceed the process</h4>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 spacing"> 
                         
                        <form action=" {{ route('user.membership.apply') }} " method="POST" >
                        
                          <input type="text" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required">  
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 spacing">  
                          {{ csrf_field() }}
                          <input type="hidden" name="membership_id" value="0">
                          <input type="submit" class="btn-line-fill pull-left gre-fill margin-bottom-20" value="Proceed"  />

                        </form> 
                        
                      </div>
                     
                     </div>
                    </div>
                        
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">  
                  
                 </div>  
                </div>     
              </section>
                
                
                
                <section id="detail-2" class="membership-detail collapse" aria-expanded="false">
                <div class="row">
             <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                 <h3 class="text-left wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">Silver</h3>
              <p class="text-left wow fadeInDown" data-wow-delay="0.6s">Building mega-brands through design oriented solutions, we’re a creative agency that keeps concept and strategy in mind. We’re a team of creative individuals work on bringing ideas to life with imaginative illustrations to shake the digital world. Our highly trained professionals provide complete digital marketing solutions to solve complex problems.</p>
                        <ul class="clearfix">
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Free Basic Logo Package (one time use only)</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Flat 20% Discount on All Our Packages</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 2 Dedicated Designer</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 1 Dedicated Account Manager</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 24/7 client coordination</li>
                        </ul>
                        
                        <div class="member-ship-buy margin-top-20">
                        
                        <div class="row"> 
                        <h4 class="text-left margin-bottom-20">Enter your email to proceed the process</h4>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 spacing"> 
                         
                        <form action=" {{ route('user.membership.apply') }} " method="POST" >
                        
                          <input type="text" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required">  
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 spacing"> 
                          <input type="hidden" name="membership_id" value="1">
                          {{ csrf_field() }} 
                          <input type="submit" class="btn-line-fill pull-left gre-fill margin-bottom-20" value="Proceed"  />

                        </form> 
                        
                      </div>
                     
                     </div>
                    </div>
                        
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">  
                 </div>  
                </div>
                </section>
                
                
                <section id="detail-3" class="membership-detail collapse" aria-expanded="false">
                <div class="row">
             <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                 <h3 class="text-left wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">Gold</h3>
              <p class="text-left wow fadeInDown" data-wow-delay="0.6s">Building mega-brands through design oriented solutions, we’re a creative agency that keeps concept and strategy in mind. We’re a team of creative individuals work on bringing ideas to life with imaginative illustrations to shake the digital world. Our highly trained professionals provide complete digital marketing solutions to solve complex problems.</p>
                        <ul class="clearfix">
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Free Basic Logo Package (one time use only)</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Flat 30% Discount on All Our Packages</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 3 Dedicated Designer</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 1 Dedicated Account Manager</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 24/7 client coordination</li>
                        </ul>
                        
                        <div class="member-ship-buy margin-top-20">
                        
                        <div class="row"> 
                        <h4 class="text-left margin-bottom-20">Enter your email to proceed the process</h4>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 spacing"> 
                         
                        <form action=" {{ route('user.membership.apply') }} " method="POST" >
                        
                          <input type="text" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required">  
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 spacing">  
                          <input type="hidden" name="membership_id" value="2">
                          {{ csrf_field() }}
                          <input type="submit" class="btn-line-fill pull-left gre-fill margin-bottom-20" value="Proceed"  />

                        </form> 
                        
                      </div>
                     
                     </div>
                    </div>
                        
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">  
                  
                 </div>  
                </div>
                </section>
                
                <section id="detail-4" class="membership-detail collapse" aria-expanded="false">
                <div class="row">
             <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                 <h3 class="text-left wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">Platinum</h3>
              <p class="text-left wow fadeInDown" data-wow-delay="0.6s">Building mega-brands through design oriented solutions, we’re a creative agency that keeps concept and strategy in mind. We’re a team of creative individuals work on bringing ideas to life with imaginative illustrations to shake the digital world. Our highly trained professionals provide complete digital marketing solutions to solve complex problems.</p>
                        <ul class="clearfix">
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Free Basic Logo Package (one time use only)</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Flat 30% Discount on All Our Packages</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 3 Dedicated Designer</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 1 Dedicated Account Manager</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 24/7 client coordination</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Unlimited Revisions on any package</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Free Stationary Design</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Free Letterhead Design</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Free Business Consultation</li>
                        </ul>
                        
                        <div class="member-ship-buy margin-top-20">
                        
                        <div class="row"> 
                        <h4 class="text-left margin-bottom-20">Enter your email to proceed the process</h4>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 spacing"> 
                         
                        <form action=" {{ route('user.membership.apply') }} " method="POST" >
                        
                          <input type="text" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required">  
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 spacing">  
                          <input type="hidden" name="membership_id" value="3">
                          {{ csrf_field() }}
                          <input type="submit" class="btn-line-fill pull-left gre-fill margin-bottom-20" value="Proceed"  />

                        </form> 
                        
                      </div>
                     
                     </div>
                    </div>
                        
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">  
                 </div>  
                </div>
                </section>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> </div>
    </div>
  </div>
</section>

<section class="section-padding about-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="about-client">
            <div class="about-client-inner">
              <h3 class="text-left wow fadeInDown breakdown-before-left" data-wow-delay="0.2s">Clients</h3>
              <p class="text-left wow fadeInDown" data-wow-delay="0.6s">We’ve partnered with corporations and rising startups all over the world. We’ve worked hand in hand with these companies to provide them with excellent digital and design solutions.</p>
              
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
      
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Airlines</h4>
                 <p class="wow fadeInDown">Our interactive creative brief makes it simple to describe your design challenge ...</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Automotive & transportation</h4>
                 <p class="wow fadeInDown">Our interactive creative brief makes it simple to describe your design challenge</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Beer, wine & spirits</h4>
                 <p class="wow fadeInDown">Our interactive creative brief makes it simple to describe your design challenge</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Consumer & household products</h4>
                 <p class="wow fadeInDown">Our interactive creative brief makes it simple to describe your design challenge</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Consumer electronics</h4>
                 <p class="wow fadeInDown">Our interactive creative brief makes it simple to describe your design challenge</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Energy & utilities</h4>
                 <p class="wow fadeInDown">Our interactive creative brief makes it simple to describe your design challenge</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Financial services</h4>
                 <p class="wow fadeInDown">Our interactive creative brief makes it simple to describe your design challenge</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Food & beverages</h4>
                 <p class="wow fadeInDown">Our interactive creative brief makes it simple to describe your design challenge</p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="about-text-edit">
          <div class="about-second-list">
            <div class="about-second-list-inner margin-bottom-20 wow fadeInDown">
              <img src="{{asset('img/clients/clients01.png')}}">
              </div>
               <h4 class="wow fadeInDown">Government</h4>
                 <p class="wow fadeInDown">Our interactive creative brief makes it simple to describe your design challenge</p>
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('include.awards')





@include('include.quote')

@section('footer')
  @parent
@stop


@stop
@section('scripts')
@stop