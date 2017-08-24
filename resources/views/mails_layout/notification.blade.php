<div class="box-custom follow-scroll  box-custom-package-2" style="padding: 50px;width: 600px;text-align: center;margin: 0 auto;font-family: sans-serif;position: relative;border: 1px solid #d1dfe9;">
                      <div id="" class="clearfix">
                          <p id="custom-totalCost" style=" font-size: 36px; color: #b8285a; font-weight: bold; margin-bottom: 20px;
    /* padding-top: 15px; */ margin-top: 9px; line-height: 100%; text-align: left;">  New Notification </p>                          

 	<hr>
 		@if( isset( $user ) )
 			<div style="text-align: left; padding-bottom: 5px;">  <span>Name:</span> <label>{{ $user->name }}</label>  </div>
		    <div style="text-align: left; padding-bottom: 5px;">  <span>Email:</span> <label>{{ $user->email }}</label>  </div>
		    <div style="text-align: left; padding-bottom: 5px;">  <span>Number:</span> <label>{{ $user->number }}</label>  </div>
		    <div style="text-align: left; padding-bottom: 5px;">  <span>City:</span> <label>{{ $user->city }}</label>  </div>
		    <div style="text-align: left;">  <span>Country:</span> <label>{{ $user->country }}</label>  </div>
 		@endif
 		
    	@foreach ($row as $key => $value)
    		<div style="text-align: left; padding-bottom: 5px;">  <span>{{$key}}:</span> <label> {{ $value }}</label>  </div>
    	@endforeach	
    <hr>
</div>
