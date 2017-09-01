<style>.faq-sections h4{display: block;text-align:left;margin-bottom: 10px;display:block!important;}.active{ color:#fff !important;pacity: 1 !important; }#header-sroll:hover .active{ color:#244d9a !important;  }#header-sroll.small .active{ color:#244d9a !important;}</style>
@extends('layout.master')  @section('metas') 
<title>Custom Logo Design Service by Professional Logo Designers | Home</title>
<meta description="At Design Proficient, we’re a creative design agency with a special taste for unique design that sets things apart. Reach us today and discuss your project!">
@stop @section('body') 



<section class="hero hero-home wow">

<div class="wrap_video">
  <span class="hero-overlay">
      
      <div class="pattern"></div>

   </span> 
  <div class="homepage-hero-module wow">
      <div class="video-container">
         <div class="filter"></div>
         <video autoplay loop class="fillWidth">
            <source src="{{asset('videos/Mock-up.mp4')}}" type="video/mp4"/>
            Your browser does not support the video tag. I suggest you upgrade your browser. 
         </video>
         <div class="poster hidden"> <img src="{{asset('videos/Mock-up.jpg')}}" alt=""> </div> 
      </div>
   </div>

 <div class="container">
      <div class="d_t">
         <div class="d_c">
            <h4 class=" wow fadeInDown" data-wow-delay="0.2s">We Build Brands</h4>
            <h3 class=" wow fadeInDown" data-wow-delay="0.4s">Crafting Brands with Design Discipline</h3>
            <p class=" wow fadeInDown" data-wow-delay="0.6s">We’re a design company based in the UK that loves to create useful and design-friendly experience over the web and mobile platforms.</p>
            <div class="actions wow fadeInDown" data-wow-delay="0.8s"> <a onclick="$zopim.livechat.window.toggle()" style="cursor: pointer;" class="btn-fill"> Let's Get Started </a></div>
         </div>
      </div>
      <span class="scroll-btn"> <a href="#GlobalClients"> <span class="mouse"> <span> </span> </span> </a> </span> 
   </div>

</div>
 
 
  
</section>

<div class="anti_video">
   

   <section id="faq" class="section-padding clients-answer wow fadeInDown" data-wow-delay="0.2s">
   <div class="container">
      <div class="clearfix">
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 fadeInDown">
            <div class="client-drop">
               <h4 class="text-left"><span class="pur">Frequently Asked Questions</span></h4>
               <select class="cs-select cs-skin-elastic clients-answer-inner">
                  <option value="" disabled selected>What do you need help with?</option>
                  <option value="clients-1" data-class="faq-opt">What is Logo Cottage?</option>
               </select>
            </div>
         </div>
         <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <div class="clients-sec">
               <div class="faq-sections wow fadeInDown">
                  <div class="clients-1">
                     <h4>What is Logo Cottage?</h4>
                     Logo Cottage is a creative digital agency providing you excellent services ranging from design to development and even digital marketing. We help businesses from around the world of all shapes and sizes in achieving success in every industry worldwide.
                  </div>
              
                
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section-padding clients-section wow" id="GlobalClients">
   <div class="container">
     
      <h3 class="text-center wow fadeInDown" data-wow-delay="0.2s">Compelling Design for Global Corporations</h3>
      <p class="text-center wow fadeInDown" data-wow-delay="0.4s">Brands are a subject of construction and re-construction and that’s what we do best.<br>
Our design maestros’ are constantly working on unique perceptions to create compelling stories.
</p>
   </div>
   <div class="container-wrap">
      <div class="clients wow fadeInDown" data-wow-delay="0.8s">
         <section class="client-slider slider">
            <div> <img src="{{asset('img/clients/clients01.png')}}"> </div>
            <div> <img src="{{asset('img/clients/clients02.png')}}"> </div>
            <div> <img src="{{asset('img/clients/clients03.png')}}"> </div>
            <div> <img src="{{asset('img/clients/clients04.png')}}"> </div>
            <div> <img src="{{asset('img/clients/clients05.png')}}"> </div>
            <div> <img src="{{asset('img/clients/clients06.png')}}"> </div>
            <div> <img src="{{asset('img/clients/clients07.png')}}"> </div>
            <div> <img src="{{asset('img/clients/clients08.png')}}"> </div>
         </section>
      </div>
   </div>
</section>


<div class="packages_fold wow">
<section class="section-padding supreme">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2 class=" wow fadeInDown text-center" data-wow-delay="0.2s">Serving Economical<br>& Design Efficient</h2>
            <p class=" wow fadeInDown text-center" data-wow-delay="0.4s">We like to serve the industry with persuasive and conceptual designs that rock the market. <br>Creating an impact is what we do best and what we like to provide to every client with our pocket-friendly packages.</p>
            <div class="actions wow fadeInDown clearfix text-center" data-wow-delay="0.6s"><a href="{{route('packages')}}" class="btn-fill"><i class="fa fa-play" aria-hidden="true"></i> FIND MORE PACKAGES</a> <a onclick="$zopim.livechat.window.toggle()" style="cursor: pointer;" class="btn-line-fill ali-fill ">Let's Get Started </a></div>
         </div>
         
      </div>
</section>
@include('include.packages-home')


</div>


<div class="section-padding branding-package branding-cust multiply">
   <div class="container wow">
      <div class="row">
         <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 sec-combo">
            <h3 class="wow fadeInDown" data-wow-delay="0.2s">The Perfect Start <br>to Complete Branding <br>Solutions</h3>
            <p class="margin-bottom-40 wow fadeInDown" data-wow-delay="0.4s">For brands seeking revamps or brand development from scratch, <br>the startup combo is the perfect match. Our team of brand <br>analysts made sure that the startup combo package perfectly<br>caters to all your needs.</p>
            <div class="actions text-center margin-top-20 wow fadeInDown" data-wow-delay="0.6s"><a onclick="$zopim.livechat.window.toggle()" style="cursor: pointer;" class="btn-fill-white pull-left">Let's Get Started</a></div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 sec-combo-two wow fadeInDown" data-wow-delay="0.2s">
            <div class="single ">
               <h4>Branding Package</h4>
               <h3>Start Up Combo</h3>
               <p>For all companies that require professional logo design.</p>
               <span class="old-price">$1,988<small>.00</small> ONLY <i class="cut"></i></span> <span class="price">$994<small>.00</small></span> 
               <ul>
                  <li><i class="fa fa-check-circle-o"></i>Unlimited Custom Logo Design Concepts</li>
                  <li><i class="fa fa-check-circle-o"></i>6 Dedicated Designers</li>
                  <li><i class="fa fa-check-circle-o"></i>UNLIMITED Pages Website</li>
                  <li><i class="fa fa-check-circle-o"></i>Mobile Responsive</li>
                  <li><i class="fa fa-check-circle-o"></i>Icon Design</li>
                  <li><i class="fa fa-check-circle-o"></i>Business Card, Letterhead, Envelope</li>
                  <li><i class="fa fa-check-circle-o"></i>MS Word Letterhead</li>
                  <li><i class="fa fa-check-circle-o"></i>5 Stock Photos + 3 Banner Designs</li>
                  <li><i class="fa fa-check-circle-o"></i>Complete W3C Certified HTML</li>
                  <li><i class="fa fa-check-circle-o"></i>Complete Deployment</li>
                  <li><i class="fa fa-check-circle-o"></i>Facebook Page Design</li>
                  <li><i class="fa fa-check-circle-o"></i>All Final File Formats</li>
                  <li><i class="fa fa-check-circle-o"></i>Dedicated Account Manager</li>
                  <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                  <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee</li>
                  <li><i class="fa fa-check-circle-o"></i>100% Unique Design Guarantee</li>
                  <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee</li>
               </ul>
               <div class="clearfix order-action"> <input class="btn-fill-white" onclick="window.location.href='{{route('order.branding', [ 'Start Up Combo', 994])}}'" type="submit" value="ORDER NOW" tabindex="0"> </div>
               <p class="text-center">Add on: <span class="sea">$50</span> for 24 Hours Rush Delivery</p>
               <span class="inclusive-black"><a href="{{route('package.suc')}}">VIEW DETAILS</a> </span> 
               <div class="actions clearfix"> <a class="action-no gre clearfix"> <span class="icon-support"></span> <span><small>Share your idea?</small>1.866.978.6636 <small class="border-right"></small></span> </a> <a onclick="$zopim.livechat.window.toggle()" class="action-chat ali clearfix pull-right" tabindex="0"> <span class="icon-chat"></span> <span><small>Want to discuss?</small> Live Chat Now</span></a> </div>
            </div>
         </div>
      </div>
   </div>
</div>


@include('include.qualities')





</div>








<div class="section-padding portfolio_fold">
   <div class="container wow">
      <h3 class="wow fadeInDown" data-wow-delay="0.2s">Serving Over 4000 Clients Worldwide</h3>
      <p class="text-center wow fadeInDown" data-wow-delay="0.4s">Design excellence can’t really be achieved without working side <br>by side with extraordinary clients from around the world.</p>
   </div>
   <div class="clearfix portfolio wow">
      <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <div class="filter-wrapper ">
               <div class="cbp-l-filters-buttonCenter clearfix js-filters-mosaic-flat no-xs">
                  <div class="filter-industry">
                     <div data-filter="*" id="filter-industry" class="cbp-filter-item-active cbp-filter-item all-btn"> All </div>
                     <div data-filter=".abstract" class="cbp-filter-item"> Abstract </div>
                     <div data-filter=".accounting" class="cbp-filter-item"> Accounting</div>
                     <div data-filter=".agriculture" class="cbp-filter-item"> Agriculture </div>
                     <div data-filter=".artphotography" class="cbp-filter-item"> Art & Photography </div>
                     <div data-filter=".automotive" class="cbp-filter-item"> Automotive</div>
                     <div data-filter=".consultancy" class="cbp-filter-item"> Business and Consultancy </div>
                     <div data-filter=".fundst" class="cbp-filter-item"> Charity and Fundst </div>
                     <div data-filter=".garments" class="cbp-filter-item"> Clothing and Garments </div>
                     <div data-filter=".communication" class="cbp-filter-item"> Communication </div>
                     <div data-filter=".construction" class="cbp-filter-item"> Construction </div>
                     <div data-filter=".medical" class="cbp-filter-item"> Medical and Drug </div>
                     <div data-filter=".ecommerce" class="cbp-filter-item"> E-Commerce and Retail </div>
                     <div data-filter=".education" class="cbp-filter-item"> Education </div>
                     <div data-filter=".electronic" class="cbp-filter-item"> Electronic </div>
                     <div data-filter=".entertainment" class="cbp-filter-item"> Entertainment </div>
                     <div data-filter=".management" class="cbp-filter-item"> Event Management </div>
                     <div data-filter=".studio" class="cbp-filter-item"> Film and Studio </div>
                     <div data-filter=".restaurant" class="cbp-filter-item"> Food and Restaurant </div>
                     <div data-filter=".technology" class="cbp-filter-item"> Information Technology </div>
                     <div data-filter=".justice" class="cbp-filter-item"> Law and Justice </div>
                     <div data-filter=".networking" class="cbp-filter-item"> Networking </div>
                  </div>
               </div>
            </div>
            <section class="actions-port">
               <div class="no">
                  <div class="cta-block">
                     <span class="icon-support"></span> 
                     <div class="info"> <small>Share your idea? </small> <span>1 866 976 8874</span> </div>
                  </div>
               </div>
               <div class="chat">
                  <div class="cta-block">
                     <span class="icon-chat"></span> 
                     <div class="info"> <small>Want to discuss? </small> <a href="#" >Live Chat Now</a> </div>
                  </div>
               </div>
            </section>
         </div>
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 set-min-height-portfolio">
            <div class="portfolio_drop-xs">
               <div class="cbp-l-filters-buttonCenter js-filters-mosaic-flat only-xs">
                  <div id="js-filters-lightbox-gallery1" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">
                     <div class="cbp-l-filters-dropdownWrap">
                        <div class="cbp-l-filters-dropdownHeader">Sort Gallery By Service</div>
                        <div class="cbp-l-filters-dropdownList only-xs-drop">
                           <div data-filter="*" class="cbp-filter-item"> All </div>
                           <div data-filter=".identity" class="cbp-filter-item filter-enable"> Logo </div>
                           <div data-filter=".web-design" class="cbp-filter-item filter-disable"> Website </div>
                           <div data-filter=".mobile" class="cbp-filter-item filter-disable"> Mobile </div>
                           <div data-filter=".graphic" class="cbp-filter-item filter-disable"> Graphic </div>
                           <div data-filter=".motiongraphic" class="cbp-filter-item filter-disable"> Motion Graphics </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cbp-l-filters-buttonCenter js-filters-mosaic-flat no-xs">
               <div data-filter="*" id="filter-main" style="display:none;" class="cbp-filter-item-active cbp-filter-item all-btn"> All </div>
               <div data-filter=".identity" class="cbp-filter-item filter-enable"> Logo </div>
               <div data-filter=".web-design" class="cbp-filter-item filter-disable"> Website </div>
               <div data-filter=".mobile" class="cbp-filter-item filter-disable"> Mobile </div>
               <div data-filter=".graphic" class="cbp-filter-item filter-disable"> Graphic </div>
               <div data-filter=".motiongraphic" class="cbp-filter-item filter-disable"> Motion Graphics </div>
            </div>
            <div id="" class="js-grid-mosaic-flat cbp cbp-l-grid-mosaic-flat">
               <div class="cbp-item education consultancy electronic networking accounting electronic">
                  <a href="#portfolio02" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ms-e901.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgyellow">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Education and Human Resource</small><br>ERI</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item automotive consultancy garments networking accounting electronic">
                  <a href="#portfolio17" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ol-portfolio.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgorange">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Travel and Hospitality</small><br>Masterpiece Premium Wines</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item accounting ecommerce">
                  <a href="#portfolio47" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/takecareofyourbills-t-financial.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Take Care Of Your Bills</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech motiongraphic construction">
                  <a href="#portfolio48" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-01.gif')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>CloudMoose</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item medical abstract consultancy fundst communication garments restaurant accounting communication education electronic">
                  <a href="#portfolio05" data-toggle="modal" class="cbp-caption " data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/the-vet-01.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Healthcare and Life science</small><br>The Vet</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item construction advertising identity fundst entertainment accounting communication education electronic">
                  <a href="#portfolio15" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/vs-portfolio.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblue">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Real Estate and Property</small><br>Vista Events Greece</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design abstract">
                  <a href="#portfolio42" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/logosanctuary-t-advertising.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgyellow">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Logosanctuary</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               
                <div class="cbp-item artphotography">
                  <a href="#portfolio49" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-02.gif')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblue">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>TenEighty Group </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               
               <div class="cbp-item web-designe construction">
                  <a href="#portfolio36" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_Afro-Signatures_R1-media-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgorange">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Afrosignatures</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item advertising identity automotive graphic ecommerce electronic restaurant communication">
                  <a href="#portfolio10" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ak-portfolio-2.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Automotive and Transport</small><br>Cape Liberty Transfers</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item advertising identity automotive accounting consultancy electronic restaurant networking communication">
                  <a href="#portfolio11" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ak-portfolio.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Automotive and Transport</small><br>LBoogie Trucking</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech motiongraphic artphotography">
                  <a href="#portfolio50" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-03.gif')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgyellow">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>GeniusSearch</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item advertising identity abstract artphotography consultancy garments ecommerce entertainment restaurant communication">
                  <a href="#portfolio01" data-toggle="modal" class="cbp-caption " data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/Raw-01.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblue">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Advertising</small><br>Rustic Art Woodworks</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item advertising identity medical graphic consultancy ecommerce networking communication">
                  <a href="#portfolio13" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/sports.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgyellow">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Healthcare and Life Science</small><br>Fitness Legion</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item advertising identity medical education graphic artphotography consultancy ecommerce entertainment management technology networking communication">
                  <a href="#portfolio06" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/17-portfolio.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgorange">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Software and Hi-Tech</small><br>Tech Works</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech motiongraphic advertising">
                  <a href="#portfolio51" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-04.gif')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgorange">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>RippleBanks</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item media-entertainment communication accounting garments entertainment management technology communication">
                  <a href="#portfolio14" data-toggle="modal" class="cbp-caption " data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ms-portfolio.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Software and Hi-Tech</small><br>S Networks</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design medical">
                  <a href="#portfolio44" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/olfitness-t-sports.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Olfitness</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item advertising identity construction abstract garments management technology justice construction">
                  <a href="#portfolio18" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/msb-portfolio.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblue">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Education and Human Resource</small><br>The Building Service Centre</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               
               <div class="cbp-item software-hi-tech motiongraphic">
                  <a href="#portfolio53" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-06.gif')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>Try Before Hire</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               
               <div class="cbp-item advertising identity medical agriculture artphotography studio construction">
                  <a href="#portfolio16" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/portfolio_07.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgyellow">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Travel and Hospitality</small><br>La’more Hookah</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item automotive-transport automotive advertising identity agriculture">
                  <a href="#portfolio03" data-toggle="modal" class="cbp-caption " data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/13-01-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgorange">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Automotive and Transport</small><br>High End Movers</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item advertising identity accounting education garments studio justice accounting" >
                  <a href="#portfolio19" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/un-portfolio.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Education and Human Resource</small><br>United Education Community</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech motiongraphic construction advertising">
                  <a href="#portfolio54" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-07.gif')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>The Enterprise Solution Platform</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item real-estate-property technology advertising identity abstract artphotography garments agriculture fundst studio justice">
                  <a href="#portfolio24" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/portfolio_10.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Automotive</small><br>DealerLog360</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-designt">
                  <a href="#portfolio41" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/bitgen-t-softwear.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgsblue">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>BitGen Technologies LLC</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design ecommerce">
                  <a href="#portfolio45" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/revolutionary-t-education.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgyellow">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Revolutionary</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech motiongraphic artphotography">
                  <a href="#portfolio55" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-08.gif')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblue">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>Samuel Evans</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design">
                  <a href="#portfolio46" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/sensationnelbridal-t-media.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgorange">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Sensationnelbridal</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design">
                  <a href="#portfolio30" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/Home-(SA)-(8)-Financial-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Guardian</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design">
                  <a href="#portfolio34" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/N_Perceptive-MG-travel-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Perspective Management</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item advertising identity automotive artphotography artphotography garments agriculture fundst justice">
                  <a href="#portfolio12" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/jh-portfolio.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgsblue">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Travel and Hospitality</small><br>The Travel Wagon</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design">
                  <a href="#portfolio32" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/N_EGI-Applications-Inc-Advertising-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgyellow">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>EGI Installer</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech motiongraphic">
                  <a href="#portfolio56" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-09.gif')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgyellow">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>CarDirectly</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design">
                  <a href="#portfolio33" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/N_gresilva-USA-health-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgorange">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Gresilva Grills</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design automotive">
                  <a href="#portfolio43" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/mnlakestransportation-t-automative.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>MN LAKES Transportation LLC</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design construction">
                  <a href="#portfolio37" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_Beast-Strong-sports-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Beast Strong Power House</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design construction">
                  <a href="#portfolio38" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_Get-Real-Stone-real-state-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgsblue">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Get Real Stone</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design agriculture">
                  <a href="#portfolio40" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_R-CISC_R6-softwear-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgyellow">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>R-CISC</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item education-human-resource agriculture">
                  <a href="#portfolio39" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_Lean-Guitar-Online-education-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgorange">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Learn Guitar</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item web-design">
                  <a href="#portfolio31" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/N_Battle-League-gaming-t.png')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Battle Games</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               
               
               
               
               
               
               
               
               
               
               
               
               
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio05" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-9-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>YUMM</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               
               <div class="cbp-item software-hi-tech motiongraphic">
                  <a href="#portfolio57" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-10.gif')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgorange">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Motion Graphic</small><br>Blinds</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio08" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-2-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>Shopping App</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio10" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-3-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>Movie Rating App</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio01" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-5-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>Real Estate App</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio07" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-6-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>Music Player App</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio02" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-clock-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>Fitness App</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio03" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-7-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>Flight Booking App</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio04" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-8-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>HealthCare app</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio10" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-4-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgpink">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>YUMM</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="cbp-item software-hi-tech mobile">
                  <a href="#app_portfolio06" data-toggle="modal" class="cbp-caption" data-title=" ">
                     <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-10-iphone.jpg')}}"> </div>
                     <div class="cbp-caption-activeWrap mbgblack">
                        <div class="cbp-l-caption-alignCenter">
                           <div class="cbp-l-caption-body">
                              <div class="cbp-l-caption-title"><small>Mobile</small><br>Find Location App</div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>

            </div>
         </div>
      </div>
   </div>
</div>
@include('include.subscribe_fold') @include('include.count') 


<div class="add_border"> @include('include.progress') </div>


<div class="process_wrap">@include('include.process')</div>


 <div class="testimonial_wrap">@include('include.testimonials')</div>

  @include('include.awards') 

  @include('include.quote') 

  @stop @section('footer') @parent @stop