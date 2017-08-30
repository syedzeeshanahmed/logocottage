@extends('layout.master')
@section('metas')
<title>Logo Design And Web Design Portfolio | Design Proficient</title>
<meta description="We’ve worked with clients all over the world satisfying them, providing them with exactly what they need. Have a look at our staggering showcase.">
@stop
@section('body')
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
<div class="section-padding portfolio_fold portfolio_page">
  <div class="container">
    <h3 class="wow fadeInDown" data-wow-delay="0.2s">Serving Over 4000 Clients Worldwide</h3>
    <p class="text-center wow fadeInDown" data-wow-delay="0.4s">Design excellence can’t really be achieved without working side <br>
      by side with extraordinary clients from around the world.</p>
  </div>
  <div class="clearfix portfolio">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <div id="cover" class="no-xs"></div>
        
        <!-- filter one -->
        
        <div class="cbp-l-filters-buttonCenter js-filters-mosaic-flat">
          <div id="js-filters-lightbox-gallery1" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated mini-portfolio">
            <div class="cbp-l-filters-dropdownWrap">
              <div class="cbp-l-filters-dropdownHeader">Search By Industry</div>
              <div class="cbp-l-filters-dropdownList"> 
                
                <!-- filter item starts -->
                
                <div data-filter="*" class="cbp-filter-item"> All </div>


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
                <!-- <div data-filter=".illustration" class="cbp-filter-item"> Illustration </div> -->
                <div data-filter=".technology" class="cbp-filter-item"> Information Technology </div>
                <div data-filter=".justice" class="cbp-filter-item"> Law and Justice </div>
                <div data-filter=".networking" class="cbp-filter-item"> Networking </div>
                
                <!-- filter item ends --> 
                
              </div>
            </div>
          </div>
        </div>
        
        <!-- filter one end --> 
        
        <!-- filter two --> 
        <!-- filter two ends -->
        
        <div class="cbp-l-filters-buttonCenter js-filters-mosaic-flat no-xs">
          <div id="js-filters-lightbox-gallery1" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">
            <div class="cbp-l-filters-dropdownWrap">
              <div class="cbp-l-filters-dropdownHeader">Search by Service</div>
              <div class="cbp-l-filters-dropdownList">
                <div data-filter="*" class="cbp-filter-item"> All </div>
                <div data-filter=".identity" class="cbp-filter-item"> Identity </div>
                <div data-filter=".web-design" class="cbp-filter-item"> Website </div>
                <div data-filter=".motiongraphic" class="cbp-filter-item"> Motion Graphics </div>
                <div data-filter=".mobile" class="cbp-filter-item"> Mobile </div>
                <div data-filter=".graphic" class="cbp-filter-item"> Graphic </div>
              </div>
            </div>
          </div>
        </div>



                <!-- ************************************************************** -->
        <!-- Only xs dropdown -->
        <!-- ************************************************************** -->



<div class="portfolio_drop-xs">
 
        <!-- filter two --> 
        <!-- filter two ends -->
        
        <div class="cbp-l-filters-buttonCenter js-filters-mosaic-flat  only-xs">
          <div id="js-filters-lightbox-gallery1" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">
            <div class="cbp-l-filters-dropdownWrap">
              <div class="cbp-l-filters-dropdownHeader">Sort Gallery By Service</div>
              <div class="cbp-l-filters-dropdownList only-xs-drop">
                <div data-filter="*" class="cbp-filter-item"> All </div>
                <div data-filter=".identity" class="cbp-filter-item filter-enable"> Logo </div>
                <div data-filter=".web-design" class="cbp-filter-item filter-disable"> Website </div>
                <!-- <div data-filter=".mobile" class="cbp-filter-item filter-disable"> Mobile </div> -->
                <div data-filter=".graphic" class="cbp-filter-item filter-disable"> Graphic </div>
                <div data-filter=".motiongraphic" class="cbp-filter-item filter-disable"> Motion Graphics </div>
                <!-- <div data-filter=".illustration" class="cbp-filter-item filter-disable"> Illustration </div> -->
              </div>
            </div>
          </div>
        </div>
</div>
       <!-- ************************************************************** -->
        <!-- Only xs dropdown -->
        <!-- ************************************************************** -->

        
        <div id="" class="js-grid-mosaic-flat cbp cbp-l-grid-mosaic-flat consultancy ">
          <div class="cbp-item real-estate-property abstract construction entertainment technology abstract identity" > <a href="#portfolio01" data-toggle="modal" class="cbp-caption "
               data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/Raw-01.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Advertising</small><br>
                    Rustic Art Woodworks</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio64" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-16.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    Welcome Pickups</div>
                </div>
              </div>
            </div>
            </a> </div>
            
          <!--<div class="cbp-item healthcare-life-science identity"> <a href="#portfolio02" data-toggle="modal" class="cbp-caption"
               data-title="World Clock Widget<br>by Paul Flavius Nechita">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/17.png')}}"> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Apartment Buildings That Outperform <br>
                    Book Cover</div>
                </div>
              </div>
            </div>
            </a> </div>-->
          <div class="cbp-item travel-hospitality abstract consultancy construction entertainment technology identity"> <a href="#portfolio17" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ol-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Travel and Hospitality</small><br>
                    Masterpiece Premium Wines</div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item web-design"> <a href="#portfolio37" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_Beast-Strong-sports-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Beast Strong Power House
                    </div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio56" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-09.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    Car Directly</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
          <div class="cbp-item travel-hospitality abstract consultancy medical entertainment technology identity"> <a href="#portfolio05" data-toggle="modal"  class="cbp-caption "
               data-title="iDevices<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/the-vet-01.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Healthcare and Life science</small><br>
                    The Vet</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio59" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-11.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    Artist Life Studio </div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            
            <div class="cbp-item travel-hospitality"> <a href="#portfolio39" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_Lean-Guitar-Online-education-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Learn Guitar</div>
                </div>
              </div>
            </div>
            </a> </div>
          
            
            
            
             
            
          
            
            <div class="cbp-item software-hi-tech accounting fundst medical management justice consultancy identity"> <a href="#portfolio06" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/17-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Software and Hi-Tech</small><br>
                    Tech Works</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio05" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-9-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    YUMM</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio60" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-12.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    Kanga Coders Startup</div>
                </div>
              </div>
            </div>
            </a> </div>
            
          <div class="cbp-item real-estate-property accounting fundst medical ecommerce management justice identity"> <a href="#portfolio08" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/3-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Real State and Property</small><br>
                    Acquired Property</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item travel-hospitality accounting garments ecommerce management justice graphic identity"> <a href="#portfolio21" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/portfolio_07.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Travel and Hospitality</small><br>
                    La’more Hookah</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item automotive-transport accounting agriculture garments ecommerce studio networking identity fundst medical management justice"> <a href="#portfolio10" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ak-portfolio-2.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Automotive and Transport</small><br>
                    Cape Liberty Transfers</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item media-entertainment graphic agriculture garments ecommerce education studio networking graphic identity fundst medical management justice"> <a href="#portfolio07" data-toggle="modal" class="cbp-caption"
               data-title="Workout Buddy<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ls-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Software and Hi-tech</small><br>
                    Liberty Communications</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio67" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-19.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    Web Top</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            
            <div class="cbp-item real-estate-property agriculture garments education studio networking identity fundst medical management justice"> <a href="#portfolio18" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/msb-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Education and Human Resource</small><br>
                    The Building Service Centre</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item sports-team-leagues agriculture artphotography communication education studio networking graphic identity"> <a href="#portfolio13" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/sports.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Healthcare and Life Science</small><br>
                    Fitness Legion</div>
                </div>
              </div>
            </div>
            </a> </div>


            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio61" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-13.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    Execast</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item automotive-transport artphotography communication education restaurant identity"> <a href="#portfolio03" data-toggle="modal" class="cbp-caption "
               data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/13-01-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Automotive and Transport</small><br>
                    High End Movers</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item education-human-resource identity artphotography communication electronic restaurant graphic identity"> <a href="#portfolio02" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ms-e901.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Education and Human Resource</small><br>
                    ERI</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item automotive-transport automotive communication electronic restaurant graphic identity"> <a href="#portfolio11" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ak-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Automotive and Transport</small><br>
                    LBoogie Trucking</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio66" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-18.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    iKontrol</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item media-entertainment graphic automotive construction electronic restaurant identity"> <a href="#portfolio14" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/ms-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Software and Hi-Tech</small><br>
                    S Networks</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item education-human-resource identity automotive construction entertainment technology identity"> <a href="#portfolio19" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/un-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Education and Human Resource</small><br>
                    United Education Community</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item web-design "> <a href="#portfolio30" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/Home-(SA)-(8)-Financial-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Guardian</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item web-design"> <a href="#portfolio31" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/N_Battle-League-gaming-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Battle Games</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio63" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-15.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    X Time</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item web-design"> <a href="#portfolio47" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/takecareofyourbills-t-financial.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Take Care Of Your Bills</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item web-design"> <a href="#portfolio32" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/N_EGI-Applications-Inc-Advertising-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    EGI Installer</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item web-design"> <a href="#portfolio33" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/N_gresilva-USA-health-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Gresilva Grills</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item web-design"> <a href="#portfolio34" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/N_Perceptive-MG-travel-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                   Perspective Management</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item web-design"> <a href="#portfolio43" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/mnlakestransportation-t-automative.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    MN LAKES Transportation LLC</div>
                </div>
              </div>
            </div>
            </a> </div>
            
             <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio57" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-10.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphic<br>
                    Blinds</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item travel-hospitality"> <a href="#portfolio35" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/N_VW-Breakers-UK-AUTOMATIVE-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Breakers UK</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            
            <div class="cbp-item web-design"> <a href="#portfolio40" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_R-CISC_R6-softwear-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    R-CISC</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio65" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-17.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                   Buy Hold Sell</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item web-design"> <a href="#portfolio36" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_Afro-Signatures_R1-media-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                   Afrosignatures</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            
            <div class="cbp-item web-design"> <a href="#portfolio38" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/NK_Get-Real-Stone-real-state-t.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Get Real Stone</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            
            
            
            <div class="cbp-item web-design"> <a href="#portfolio41" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/bitgen-t-softwear.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    BitGen Technologies LLC</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio06" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-10-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    Find Location App</div>
                </div>
              </div>
            </div>
           </a>
          </div> 
          
          <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio50" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-03.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    GeniusSearch</div>
                </div>
              </div>
            </div>
            </a> </div>
          
          <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio10" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-4-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    YUMM</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item web-design"> <a href="#portfolio42" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/logosanctuary-t-advertising.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Logosanctuary</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            
            <div class="cbp-item web-design"> <a href="#portfolio44" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/olfitness-t-sports.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Olfitness</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item web-design"> <a href="#portfolio45" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/revolutionary-t-education.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Revolutionary</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio03" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-7-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    Flight Booking App</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio04" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-8-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    HealthCare app</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item web-design"> <a href="#portfolio46" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/sensationnelbridal-t-media.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>
                    Sensationnelbridal</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item travel-hospitality identity"> <a href="#portfolio12" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/jh-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Travel and Hospitality</small><br>
                    The Travel Wagon</div>
                </div>
              </div>
            </div>
            </a> </div>
           <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio02" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-clock-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    Fitness App</div>
                </div>
              </div>
            </div>
            </a></div> 
            <div class="cbp-item advertising identity"> <a href="#portfolio15" data-toggle="modal" class="cbp-caption "
               data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/vs-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Real Estate and Property</small><br>
                    Vista Events Greece</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            <div class="cbp-item software-hi-tech"> <a href="#portfolio06" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/17-portfolio.png')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Software and Hi-Tech</small><br>
                    Tech Works</div>
                </div>
              </div>
            </div>
            </a> </div>
             <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio07" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-6-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    Music Player App</div>
                </div>
              </div>
            </div>
            </a> </div>

            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio48" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-01.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    CloudMoose</div>
                </div>
              </div>
            </div>
            </a> </div>


            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio49" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-02.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    TenEighty Group</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio01" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-5-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    Real Estate App</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            
            

            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio51" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-04.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    RippleBanks</div>
                </div>
              </div>
            </div>
            </a> </div>
           <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio10" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-3-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    Movie Rating App</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio52" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-05.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblue">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics
 <br>
                    succeed</div>
                </div>
              </div>
            </div>
            </a> </div>

            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio53" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-06.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgyellow">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    Try Before Hire</div>
                </div>
              </div>
            </div>
            </a> </div>
            <div class="cbp-item software-hi-tech mobile"> <a href="#app_portfolio08" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio-2-iphone.jpg')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><small>Mobile</small><br>
                    Shopping App</div>
                </div>
              </div>
            </div>
            </a> </div> 
            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio54" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-07.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphic<br>
                    The Enterprise Solution Platform</div>
                </div>
              </div>
            </div>
            </a> </div>

            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio55" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-08.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgpink">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    Samuel Evans</div>
                </div>
              </div>
            </div>
            </a> </div>

            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio56" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-09.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgblack">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    Car Directly</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            
            
            
            
           
            
            
            
            
            
            

            <div class="cbp-item software-hi-tech motiongraphic"> <a href="#portfolio62" data-toggle="modal" class="cbp-caption"
               data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="{{asset('img/portfolio/motion-graphics-14.gif')}}"> </div>
            <div class="cbp-caption-activeWrap mbgorange">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Motion Graphics<br>
                    I Must Have It</div>
                </div>
              </div>
            </div>
            </a> </div>
            
            
            
            
            
           
            
            
            
            


        </div>
      </div>
    </div>
  </div>
</div>



@include('include.testimonials')

@include('include.quote')

@section('footer')
  @parent
@stop


@stop 