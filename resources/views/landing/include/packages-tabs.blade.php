<section class="section-padding packages-tabs padding-bottom-0">
		<div class="container">
			
		<ul class="tabs main-mini-tabs">
			<li  onclick="window.location.href=' {{ route('packages', 'logo') }} '"  <?php echo ($tab==1) ? 'class="tab-link  current"' : 'class="tab-link"' ;?> >Logo</li>
			<li  onclick="window.location.href=' {{ route('packages', 'web') }} '"  <?php echo ($tab==2) ? 'class="tab-link  current"' : 'class="tab-link"' ;?> >Web</li>
			<li  onclick="window.location.href=' {{ route('packages', 'branding') }} '"  <?php echo ($tab==3) ? 'class="tab-link  current"' : 'class="tab-link"' ;?> >Corporate Branding</li>
	    	<li  onclick="window.location.href=' {{ route('packages', 'ecommerce') }} '"  <?php echo ($tab==4) ? 'class="tab-link  current"' : 'class="tab-link"' ;?> >E-Commerce</li>
	    	<li  onclick="window.location.href=' {{ route('packages', 'motion-graphic') }} '"  <?php echo ($tab==5) ? 'class="tab-link  current"' : 'class="tab-link"' ;?> >Video</li>
	    	<li  onclick="window.location.href=' {{ route('packages', 'seo') }} '"  <?php echo ($tab==6) ? 'class="tab-link  current"' : 'class="tab-link"' ;?> >SEO</li>
	    	<li  onclick="window.location.href=' {{ route('packages', 'social') }} '"  <?php echo ($tab==7) ? 'class="tab-link  current"' : 'class="tab-link"' ;?> >Social Media</li>
            <li  onclick="window.location.href=' {{ route('packages', 'content') }} '"  <?php echo ($tab==8) ? 'class="tab-link  current"' : 'class="tab-link"' ;?> >Content Writing</li>
	    	
		</ul>

      <div id="nav" class=" mini-tabs">
      <ul id="navigation">
        <li><a data-active="tabs" class="nav-anim package-tab-small nav-anim sea-h responsive-tab">All  <span class="caret"></span></a>

        <ul class="tabs">
			<li  onclick="window.location.href=' {{ route('packages', 'logo') }} '"  <?php echo ($tab==1) ? 'class="tab-link  current"' : 'class="tab-link"' ;?>  >Logo</li>
			<li onclick="window.location.href=' {{ route('packages', 'web') }} '"   <?php echo ($tab==2) ? 'class="tab-link  current"' : 'class="tab-link"' ;?>  >Web</li>
			<li  onclick="window.location.href=' {{ route('packages', 'branding') }} '"  <?php echo ($tab==3) ? 'class="tab-link  current"' : 'class="tab-link"' ;?>  >Corporate Branding</li>
	    	<li  onclick="window.location.href=' {{ route('packages', 'ecommerce') }} '"  <?php echo ($tab==4) ? 'class="tab-link  current"' : 'class="tab-link"' ;?>  >eCommerce</li>
	    	<li  onclick="window.location.href=' {{ route('packages', 'motion-graphic') }} '"  <?php echo ($tab==5) ? 'class="tab-link  current"' : 'class="tab-link"' ;?>  >Video</li>
	    	<li  onclick="window.location.href=' {{ route('packages', 'seo') }} '"  <?php echo ($tab==6) ? 'class="tab-link  current"' : 'class="tab-link"' ;?>  >SEO</li>
	    	<li  onclick="window.location.href=' {{ route('packages', 'social') }} '"  <?php echo ($tab==7) ? 'class="tab-link  current"' : 'class="tab-link"' ;?>  >Social Media</li>
            <li  onclick="window.location.href=' {{ route('packages', 'content') }} '"  <?php echo ($tab==8) ? 'class="tab-link  current"' : 'class="tab-link"' ;?>  >Content Writing</li>
		</ul>
        
        </li>
       </ul>
       </div>
		</div>

		<div id="tab1" <?php echo ($tab==1) ? 'class="tab-content current"' : 'class="tab-content"' ;?> >
			@include('include.packages-logo')
		</div>
		<div id="tab2" <?php echo ($tab==2) ? 'class="tab-content current"' : 'class="tab-content"' ;?> >
			@include('include.packages-web')
		</div>
	  	
		<div id="tab3" <?php echo ($tab==3) ? 'class="tab-content current"' : 'class="tab-content"' ;?> >
					@include('include.corporate-branding')
		</div>
		<div id="tab4" <?php echo ($tab==4) ? 'class="tab-content current"' : 'class="tab-content"' ;?> >
			@include('include.packages-ecommerce')
		</div>
		<div id="tab5" <?php echo ($tab==5) ? 'class="tab-content current"' : 'class="tab-content"' ;?> >
			@include('include.packages-video')
		</div>
		<div id="tab6" <?php echo ($tab==6) ? 'class="tab-content current"' : 'class="tab-content"' ;?> >
			@include('include.packages-seo')
		</div>
		<div id="tab7" <?php echo ($tab==7) ? 'class="tab-content current"' : 'class="tab-content"' ;?> >
			@include('include.packages-social-media')
		</div>
		<div id="tab8" <?php echo ($tab==8) ? 'class="tab-content current"' : 'class="tab-content"' ;?> >
			@include('include.packages-content')
		</div>

</section>
