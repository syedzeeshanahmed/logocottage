<div class="box-custom follow-scroll  box-custom-package-2" style="padding: 50px;width: 600px;text-align: center;margin: 0 auto;font-family: sans-serif;position: relative;border: 1px solid #d1dfe9;">
                      <div id="" class="clearfix">
          <h4 class="margin-top-20 gre" style=" color: #000; text-align: left; font-weight: 600; margin: 0px 0px 5px 0px; text-transform: none;"> Total cost:</h4>
                          <p id="custom-totalCost" style=" font-size: 36px; color: #b8285a; font-weight: bold; margin-bottom: 20px;
    /* padding-top: 15px; */ margin-top: 9px; line-height: 100%; text-align: left;">  ${{ $total }} </p>

 	<hr>
	    <div style="text-align: left; padding-bottom: 5px;">  <span>Name:</span> <label>{{ $user->name }}</label>  </div>
	    <div style="text-align: left; padding-bottom: 5px;">  <span>Email:</span> <label>{{ $user->email }}</label>  </div>
	    <div style="text-align: left; padding-bottom: 5px;">  <span>Number:</span> <label>{{ $user->number }}</label>  </div>
	    <div style="text-align: left; padding-bottom: 5px;">  <span>City:</span> <label>{{ $user->city }}</label>  </div>
	    <div style="text-align: left;">  <span>Country:</span> <label>{{ $user->country }}</label>  </div>
    <hr>


	<div id="custom-item-list" class="clearfix">
	@foreach( $items as $item )
	    <div style=" border-bottom: 1px solid #d1dfe9; padding: 10px 0px;">

	        <p id="cost_calc_breakdown_item" style=" margin-bottom: 0px; padding-bottom: 0px; font-size: 14px; display: inline-block; border: none; padding-bottom: 0px; margin-bottom: 0px; width: 59%; text-align: left; font-size: 1em; height: auto; text-align: left; font-weight: normal; line-height: 14px; margin-left: 0%; margin-top: 0px; clear: none; min-height: 0px; color: #2c2c2c; margin-right: 0%;"> {{ $item["name"] }} </p>

			<p id="cost_calc_breakdown_price " style=" display: inline-block; font-size: 14px; margin-bottom: 0px; line-height: 100%; vertical-align: top; margin-top: 0px; width: 40%; ">${{$item["price"]}} x{{$item["quantity"]}}</p>
		</div>
	@endforeach	
	<hr>
	@if( $addons != null )
		    <h4 style="  color: #000; text-align: left; font-weight: 600; margin: 0px 0px 5px 0px; text-transform: none; border-bottom: 1px solid #d1dfe9;   border-top: 1px solid #d1dfe9; padding: 10px 0px;"> Addons: </h4> 
		@foreach( $addons as $addon )
			<span style=" line-height: 100%; display: block; font-size: 12px; vertical-align: top; padding-left: 4px; padding-right: 10px; padding-right: 10px; padding-top: 8px; color: rgb(154, 154, 154); text-align: left;">{{ $addon['name'] }} -  {{ $addon['price'] }} x {{ $addon['quantity'] }}</span>
		@endforeach	
	@endif		

	</div>
</div>