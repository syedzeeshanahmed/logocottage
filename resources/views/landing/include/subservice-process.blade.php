<style>
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


.top-action .btn-line-fill{ color: #fff; }

header #header-sroll .top-action .btn-line-fill{ color: #b8285a; }

#header-sroll.small .top-action .btn-line-fill{ color: #b8285a; }
.top-action .btn-line-fill:hover{ color: #fff!important; }

#header-sroll.small .nav-toggle span, #header-sroll.small .nav-toggle span:before, #header-sroll.small .nav-toggle span:after{background: #631a79;}

</style>
<section class="section-padding process wow">
	<div class="container">
		<div class="clearfix">
			<div class="row">
				<div class="col-md-12">
                    
		            <h3  class="wow fadeInDown" data-wow-delay="0.2s">We’ve Got a Proven Formula <br>for Success to Guarantee Results for Our Clients</h3>

		            <p class="wow fadeInDown text-center main" data-wow-delay="0.4s">If it isn’t a 100% then it isn’t enough for us. To ensure each project is <br>getting nothing but the best, we make sure we follow a set of rules that<br> keep us on track in terms of results.</p>

		       
				</div>
			</div>

			<div class="row methodolgy-slider slider main-cust-slider wow fadeInDown" data-wow-delay="0.6s">
      


      @if( isset( $oldImg ) )
      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
        <div class="process-img"><img src="{{ asset( $processIcon[0] )  }}" alt="100% icon" ></div>
	                <h4>{{ $processHeadings[0] }}</h4>
	                <p>{{ $process[0] }}</p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
        <div class="process-img"><img src="{{ asset( $processIcon[1] )  }}" alt="100% icon" ></div>
	                <h4>{{ $processHeadings[1] }}</h4>
	                <p>{{ $process[1] }}</p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
        <div class="process-img"><img src="{{ asset( $processIcon[2] )  }}" alt="100% icon" ></div>
	                <h4>{{ $processHeadings[2] }}</h4>
	                <p>{{ $process[2] }}</p>
      </div>
      @else
	      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
	        <div class="process-img services-processes-icons {{ $processIcon[0] }}" ></div>
		                <h4>{{ $processHeadings[0] }}</h4>
		                <p>{{ $process[0] }}</p>
	      </div>
	      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
	        <div class="process-img services-processes-icons {{ $processIcon[1] }}"></div>
		                <h4>{{ $processHeadings[1] }}</h4>
		                <p>{{ $process[1] }}</p>
	      </div>
	      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
	        <div class="process-img services-processes-icons {{ $processIcon[2] }}"></div>
		                <h4>{{ $processHeadings[2] }}</h4>
		                <p>{{ $process[2] }}</p>
	      </div>
      @endif
    </div>




			     <div class="actions text-center margin-top-20 wow fadeInDown" data-wow-delay="0.8s">
			     <a href="{{ route('user.book') }}" class="btn-fill">Book a Call</a>
			     <a onclick="$zopim.livechat.window.toggle()" class="btn-line-fill sea-fill">Want to Discuss</a></div>
		</div>
	</div>
</section>